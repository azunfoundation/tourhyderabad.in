<?php
/**
 * Local Development Router for PHP Built-in Server
 * Emulates Apache mod_rewrite rules defined in .htaccess
 */

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Block direct web access to sensitive includes and data files
if (preg_match('#^/(data/|includes/(config|db)\.php)#i', $uri)) {
    http_response_code(403);
    echo "403 Forbidden";
    exit;
}

$file = __DIR__ . $uri;

// Custom alias for Nizami Heritage Trail package
if (rtrim($uri, '/') === '/packages/nizami-heritage') {
    require __DIR__ . '/package-nizami-heritage.php';
    exit;
}

// If the file exists and is a regular file, let the built-in server serve it
if ($uri !== '/' && file_exists($file) && !is_dir($file)) {
    return false;
}

// Clean URL Rewriting: /packages -> packages.php, /places -> places.php, etc.
$slug = trim($uri, '/');
if ($slug !== '' && file_exists(__DIR__ . '/' . $slug . '.php')) {
    require __DIR__ . '/' . $slug . '.php';
    exit;
}

// Root directory / default index
if ($uri === '/' || $uri === '/index' || $uri === '/index.php') {
    require __DIR__ . '/index.php';
    exit;
}

// If directory contains index.php
if (is_dir($file) && file_exists(rtrim($file, '/') . '/index.php')) {
    require rtrim($file, '/') . '/index.php';
    exit;
}

// Return false for built-in 404 handling
return false;
