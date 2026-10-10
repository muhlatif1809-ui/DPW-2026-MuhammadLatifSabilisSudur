<?php
// Router tunggal: semua request diteruskan ke sini supaya
// Vercel hanya membuat 1 serverless function (batas Hobby = 12).

$root = realpath(__DIR__ . '/..');

$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$path = trim(rawurldecode((string) $path), '/');

if ($path === '') {
    $path = 'index.php';
}

// Folder yang tidak boleh diakses langsung dari browser
$blocked = ['includes', 'sql', 'docs', 'api', 'vendor'];
$first = explode('/', $path)[0];

$file = realpath($root . '/' . $path);

if (
    $file === false
    || strpos($file, $root . DIRECTORY_SEPARATOR) !== 0
    || substr($file, -4) !== '.php'
    || in_array($first, $blocked, true)
) {
    http_response_code(404);
    echo '404 Not Found';
    exit;
}

chdir(dirname($file));
require $file;