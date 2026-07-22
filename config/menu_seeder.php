<?php

$categoryFiles = glob(__DIR__ . '/menu_seeder/*_seeder.php') ?: [];

// Atur daftar file seeder yang aktif + urutannya secara manual.
// Jika daftar ini kosong, semua file *_seeder.php akan dimuat (kecuali yang diawali "_").
$seederFileOrder = [
    // 'identitaspengguna_seeder.php', // Dipakai sebagai leaf menu oleh masterdata_seeder.php
    'masterdata_seeder.php',
    // 'perangkatsekolah_seeder.php',
];
$seederFilePriority = array_flip($seederFileOrder);

if (!empty($seederFileOrder)) {
    $allowedSeederFiles = array_fill_keys($seederFileOrder, true);
    $categoryFiles = array_values(array_filter(
        $categoryFiles,
        static fn(string $file): bool => isset($allowedSeederFiles[basename($file)])
    ));
}

usort($categoryFiles, static function (string $a, string $b) use ($seederFilePriority): int {
    $aName = basename($a);
    $bName = basename($b);
    $aPriority = $seederFilePriority[$aName] ?? PHP_INT_MAX;
    $bPriority = $seederFilePriority[$bName] ?? PHP_INT_MAX;

    if ($aPriority !== $bPriority) {
        return $aPriority <=> $bPriority;
    }

    return strcmp($aName, $bName);
});

$categories = [];

foreach ($categoryFiles as $categoryFile) {
    if (str_starts_with(basename($categoryFile), '_')) {
        continue;
    }

    $loaded = require $categoryFile;
    if (!is_array($loaded)) {
        continue;
    }

    foreach ($loaded as $categoryKey => $categoryConfig) {
        $categories[$categoryKey] = $categoryConfig;
    }
}

return [
    'categories' => $categories,
];
