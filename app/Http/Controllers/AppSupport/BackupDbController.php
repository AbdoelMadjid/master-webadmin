<?php

namespace App\Http\Controllers\AppSupport;

use App\Http\Controllers\Controller;
use App\Http\Requests\AppSupport\BackupDbRequest;
use App\Models\AppSupport\BackupDb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BackupDbController extends Controller
{
    /**
     * Tampilkan daftar backup database atau kembalikan data JSON jika AJAX.
     */
    public function index(Request $request)
    {
        $backups = BackupDb::getAllBackups();
        $totalBackups = count($backups);
        $totalBytes = array_sum(array_column($backups, 'size_bytes'));
        $totalSize = BackupDb::formatBytes($totalBytes);
        $dbName = config('database.connections.mysql.database', 'master-webadmin');
        $tables = BackupDb::getDatabaseTables();
        $tableRelations = BackupDb::getTableRelations();

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'data'    => $backups,
                'meta'    => [
                    'total_backups'   => $totalBackups,
                    'total_size'      => $totalSize,
                    'db_name'         => $dbName,
                    'tables'          => $tables,
                    'table_relations' => $tableRelations,
                ],
            ]);
        }

        return view('pages.appsupport.backup-db', compact('backups', 'totalBackups', 'totalSize', 'dbName', 'tables', 'tableRelations'));
    }

    /**
     * Buat file backup database baru.
     */
    public function store(BackupDbRequest $request)
    {
        try {
            $selectedTables = $request->input('table_scope') === 'custom'
                ? (array) $request->input('tables', [])
                : [];

            $filename = BackupDb::createBackup(
                $request->input('backup_name'),
                $request->input('dump_type', 'full'),
                $selectedTables
            );

            return response()->json([
                'success'  => true,
                'message'  => "Backup database '{$filename}' berhasil dibuat.",
                'filename' => $filename,
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal membuat backup database: ' . $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Unduh file backup database.
     */
    public function download(string $filename)
    {
        $filename = basename($filename);
        $filePath = BackupDb::getBackupDirectory() . DIRECTORY_SEPARATOR . $filename;

        if (!File::exists($filePath)) {
            abort(404, 'File backup tidak ditemukan.');
        }

        return response()->download($filePath, $filename, [
            'Content-Type' => 'application/sql',
        ]);
    }

    /**
     * Pulihkan database dari file backup.
     */
    public function restore(string $filename)
    {
        try {
            BackupDb::restoreBackup($filename);

            return response()->json([
                'success' => true,
                'message' => "Database berhasil dipulihkan dari file '{$filename}'.",
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal memulihkan database: ' . $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Hapus file backup database.
     */
    public function destroy(string $filename)
    {
        try {
            $success = BackupDb::deleteBackup($filename);

            if (!$success) {
                return response()->json([
                    'success' => false,
                    'message' => 'File backup tidak ditemukan atau gagal dihapus.',
                ], 404);
            }

            return response()->json([
                'success' => true,
                'message' => "File backup '{$filename}' berhasil dihapus.",
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menghapus file backup: ' . $e->getMessage(),
            ], 500);
        }
    }
}
