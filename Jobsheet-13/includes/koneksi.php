<?php
$config = require __DIR__ . '/config.php';

try {
    $dsn = "pgsql:host={$config['db_host']};port={$config['db_port']};dbname={$config['db_name']}";

    if (!in_array($config['db_host'], ['localhost', '127.0.0.1'], true)) {
        $dsn .= ';sslmode=require';
    }

    $pdo = new PDO($dsn, $config['db_user'], $config['db_pass'], [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => true,
    ]);
} catch (PDOException $e) {
    die("Koneksi database gagal: " . $e->getMessage());
}