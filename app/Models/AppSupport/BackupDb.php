<?php

namespace App\Models\AppSupport;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class BackupDb extends Model
{
    /**
     * Path direktori penampung file backup.
     */
    public static function getBackupDirectory(): string
    {
        $path = storage_path('app/backups');
        if (!File::exists($path)) {
            File::makeDirectory($path, 0755, true);
        }
        return $path;
    }

    /**
     * Dapatkan daftar semua file backup database.
     */
    public static function getAllBackups(): array
    {
        $dir = static::getBackupDirectory();
        $files = File::files($dir);
        $backups = [];

        foreach ($files as $file) {
            if (in_array(strtolower($file->getExtension()), ['sql', 'gz'])) {
                $filename = $file->getFilename();
                $sizeBytes = $file->getSize();

                $backups[] = [
                    'id'          => md5($filename),
                    'filename'    => $filename,
                    'size'        => static::formatBytes($sizeBytes),
                    'size_bytes'  => $sizeBytes,
                    'created_at'  => date('Y-m-d H:i:s', $file->getMTime()),
                    'mtime'       => $file->getMTime(),
                ];
            }
        }

        // Urutkan berdasarkan waktu buat terbaru
        usort($backups, fn($a, $b) => $b['mtime'] <=> $a['mtime']);

        return $backups;
    }

    /**
     * Dapatkan daftar nama semua tabel yang ada di database.
     */
    public static function getDatabaseTables(): array
    {
        $tables = DB::select('SHOW TABLES');
        $dbName = config('database.connections.mysql.database');
        $propName = "Tables_in_{$dbName}";
        $tableList = [];

        foreach ($tables as $tableObj) {
            $tableList[] = $tableObj->$propName ?? reset($tableObj);
        }

        sort($tableList);
        return $tableList;
    }

    /**
     * Dapatkan peta relasi antar tabel berdasarkan Foreign Key.
     */
    public static function getTableRelations(): array
    {
        $dbName = config('database.connections.mysql.database');
        $relations = [];

        try {
            $results = DB::select("
                SELECT TABLE_NAME, REFERENCED_TABLE_NAME 
                FROM information_schema.KEY_COLUMN_USAGE 
                WHERE TABLE_SCHEMA = ? 
                  AND REFERENCED_TABLE_NAME IS NOT NULL
            ", [$dbName]);

            foreach ($results as $row) {
                $child = $row->TABLE_NAME;
                $parent = $row->REFERENCED_TABLE_NAME;

                if ($child === $parent) continue;

                if (!isset($relations[$child])) $relations[$child] = [];
                if (!isset($relations[$parent])) $relations[$parent] = [];

                if (!in_array($parent, $relations[$child])) {
                    $relations[$child][] = $parent;
                }
                if (!in_array($child, $relations[$parent])) {
                    $relations[$parent][] = $child;
                }
            }
        } catch (\Throwable $e) {
            // Ignore information_schema errors
        }

        return $relations;
    }

    /**
     * Jalankan proses backup database MySQL via PDO / DB facade.
     */
    public static function createBackup(?string $name = null, string $type = 'full', array $selectedTables = []): string
    {
        $dir = static::getBackupDirectory();
        $timestamp = date('Y-m-d_H-i-s');
        $cleanName = $name ? preg_replace('/[^a-zA-Z0-9_\-]/', '_', $name) : 'backup_' . config('database.connections.mysql.database', 'db');
        $filename = "{$cleanName}_{$timestamp}.sql";
        $filePath = $dir . DIRECTORY_SEPARATOR . $filename;

        $allTables = static::getDatabaseTables();
        $isFullDb = empty($selectedTables);

        if (!$isFullDb) {
            $tablesToBackup = array_values(array_intersect($allTables, $selectedTables));
        } else {
            $tablesToBackup = $allTables;
        }

        if (empty($tablesToBackup)) {
            throw new \Exception("Tidak ada tabel valid yang dipilih untuk di-backup.");
        }

        $dbName = config('database.connections.mysql.database');

        $sqlContent = "-- Master WebAdmin Database Backup\n";
        $sqlContent .= "-- Generated: " . date('Y-m-d H:i:s') . "\n";
        $sqlContent .= "-- Database: {$dbName}\n";
        $sqlContent .= "-- Tables Included: " . implode(', ', $tablesToBackup) . "\n\n";

        if ($isFullDb) {
            $sqlContent .= "DROP DATABASE IF EXISTS `{$dbName}`;\n";
            $sqlContent .= "CREATE DATABASE IF NOT EXISTS `{$dbName}`;\n";
            $sqlContent .= "USE `{$dbName}`;\n\n";
        }

        $sqlContent .= "SET FOREIGN_KEY_CHECKS=0;\n\n";

        foreach ($tablesToBackup as $tableName) {
            // Structure
            $createTableStmt = DB::select("SHOW CREATE TABLE `{$tableName}`");
            $sqlContent .= "DROP TABLE IF EXISTS `{$tableName}`;\n";
            $sqlContent .= $createTableStmt[0]->{'Create Table'} . ";\n\n";

            // Data
            if ($type === 'full') {
                $rows = DB::table($tableName)->get();
                if ($rows->count() > 0) {
                    $sqlContent .= "-- Dumping data for table `{$tableName}`\n";
                    foreach ($rows as $row) {
                        $rowArray = (array) $row;
                        $keys = array_map(fn($k) => "`{$k}`", array_keys($rowArray));
                        $values = array_map(function ($val) {
                            if (is_null($val)) return 'NULL';
                            return DB::getPdo()->quote($val);
                        }, array_values($rowArray));

                        $sqlContent .= "INSERT INTO `{$tableName}` (" . implode(', ', $keys) . ") VALUES (" . implode(', ', $values) . ");\n";
                    }
                    $sqlContent .= "\n";
                }
            }
        }

        $sqlContent .= "SET FOREIGN_KEY_CHECKS=1;\n";

        File::put($filePath, $sqlContent);

        return $filename;
    }

    /**
     * Restore database dari file SQL.
     */
    public static function restoreBackup(string $filename): bool
    {
        $filename = basename($filename);
        $filePath = static::getBackupDirectory() . DIRECTORY_SEPARATOR . $filename;

        if (!File::exists($filePath)) {
            throw new \Exception("File backup {$filename} tidak ditemukan.");
        }

        $sql = File::get($filePath);
        DB::unprepared($sql);

        return true;
    }

    /**
     * Hapus file backup dari penyimpanan.
     */
    public static function deleteBackup(string $filename): bool
    {
        $filename = basename($filename);
        $filePath = static::getBackupDirectory() . DIRECTORY_SEPARATOR . $filename;

        if (File::exists($filePath)) {
            return File::delete($filePath);
        }

        return false;
    }

    /**
     * Format bytes ke KB, MB, GB human-readable format.
     */
    public static function formatBytes(int $bytes, int $precision = 2): string
    {
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];
        $bytes = max($bytes, 0);
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
        $pow = min($pow, count($units) - 1);
        $bytes /= pow(1024, $pow);

        return round($bytes, $precision) . ' ' . $units[$pow];
    }
}
