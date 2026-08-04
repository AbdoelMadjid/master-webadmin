<?php
require 'vendor/autoload.php';
$app = require 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();
$commits = App\Models\AppSupport\Changelog::getLiveGitLog('v1.4.0');
foreach ($commits as $c) {
    echo $c['hash'], ' | ', $c['version'], ' | ', $c['message'], PHP_EOL;
}
