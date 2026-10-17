<?php

/**
 * WISHARI - The Art of Thoughtful Gifting
 * Front Controller & Blade Rendering Engine
 */

if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
} elseif (file_exists(__DIR__ . '/vendor/eftec/bladeone/lib/BladeOne.php')) {
    require_once __DIR__ . '/vendor/eftec/bladeone/lib/BladeOne.php';
}

use eftec\bladeone\BladeOne;

// Ensure cache directory exists and is writable (fall back to /tmp on serverless environments like Vercel)
$cacheDir = __DIR__ . '/cache';
if (!is_dir($cacheDir) || !is_writable($cacheDir)) {
    $cacheDir = sys_get_temp_dir() . '/wishari_cache';
}
if (!is_dir($cacheDir)) {
    @mkdir($cacheDir, 0777, true);
}

// Load Application Data
$catalogData = require __DIR__ . '/data/products.php';

// Initialize BladeOne Templating Engine
$views = __DIR__ . '/views';
$blade = new BladeOne($views, $cacheDir, BladeOne::MODE_DEBUG);

// Smart Base URL Detector (Supports XAMPP, php -S root, and Vercel serverless)
$scriptDir = dirname($_SERVER['SCRIPT_NAME'] ?? '');
$cleanDir = str_replace(['\\\\', '/api'], ['/', ''], $scriptDir);
$base_url = rtrim($cleanDir, '/');

// Route handling
$page = $_GET['page'] ?? 'home';
$validPages = ['home', 'collections', 'brief', 'about', 'contact'];

if (!in_array($page, $validPages, true)) {
    $page = 'home';
}

// Render the selected Blade view
try {
    echo $blade->run("pages.{$page}", [
        'products' => $catalogData['products'],
        'brief_estimator' => $catalogData['brief_estimator'],
        'current_page' => $page,
        'base_url' => $base_url
    ]);
} catch (\Throwable $e) {
    echo '<div style="font-family: sans-serif; padding: 2rem; background: #fff0f0; border: 1px solid #ffcccc; color: #900;">';
    echo '<h2>Rendering Error</h2>';
    echo '<p>' . htmlspecialchars($e->getMessage()) . '</p>';
    echo '<pre>' . htmlspecialchars($e->getTraceAsString()) . '</pre>';
    echo '</div>';
}
