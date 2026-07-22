<?php

$configPaths = [
    'f:/laragon/new_project/metronic-832-laravel-12/config/docs',
    'f:/laragon/new_project/metronic-832-laravel-12/config/header',
    'f:/laragon/new_project/metronic-832-laravel-12/config/sidebar',
];

$titles = [];

function extractTitles($array)
{
    global $titles;
    foreach ($array as $item) {
        if (isset($item['title'])) {
            $titles[$item['title']] = $item['title'];
        }
        if (isset($item['children']) && is_array($item['children'])) {
            extractTitles($item['children']);
        }
    }
}

foreach ($configPaths as $path) {
    if (!is_dir($path))
        continue;

    $files = scandir($path);
    foreach ($files as $file) {
        if ($file === '.' || $file === '..')
            continue;

        $filePath = $path . '/' . $file;
        if (is_file($filePath) && pathinfo($filePath, PATHINFO_EXTENSION) === 'php') {
            $config = include $filePath;
            if (is_array($config)) {
                foreach ($config as $menuItems) {
                    if (is_array($menuItems)) {
                        extractTitles($menuItems);
                    }
                }
            }
        }
    }
}

ksort($titles);

echo "<?php\n\nreturn [\n";
foreach ($titles as $title) {
    $key = strtolower(str_replace([' ', '&', '/'], ['_', 'and', '_'], $title));
    echo "    '$key' => '$title',\n";
}
echo "];\n";
