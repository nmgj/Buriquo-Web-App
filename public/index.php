<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__ . '/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
$vendor = __DIR__ . '/../vendor/autoload.php';
if (!file_exists($vendor)) {
    // Fallback: some build systems install dependencies into public/vendor
    $vendor = __DIR__ . '/vendor/autoload.php';
}
if (!file_exists($vendor)) {
    // Fail early with a clear message for deploy logs
    error_log('Composer autoload not found at ' . __DIR__ . '/../vendor/autoload.php and ' . __DIR__ . '/vendor/autoload.php');
    http_response_code(500);
    echo 'Application error: vendor/autoload.php not found.';
    exit(1);
}
require $vendor;

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__ . '/../bootstrap/app.php';

$app->handleRequest(Request::capture());
