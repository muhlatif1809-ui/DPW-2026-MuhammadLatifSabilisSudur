<?php
// Membaca konfigurasi dari environment variable (Vercel).
// Jika tidak ada, otomatis memakai nilai lokal untuk XAMPP/psql di komputer sendiri.
$host = getenv('DB_HOST') ?: 'aws-0-ap-northeast-2.pooler.supabase.com';
$port = getenv('DB_PORT') ?: '6543';
$db   = getenv('DB_NAME') ?: 'postgres';
$user = getenv('DB_USER') ?: 'postgres.tocrasprthjulzkhrfoo';
$pass = getenv('DB_PASS') ?: 'MuhLatif180906';

try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$db";

    // Supabase wajib SSL; lokal tidak perlu.
    if ($host !== 'localhost' && $host !== '127.0.0.1') {
        $dsn .= ';sslmode=require';
    }

    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        // Transaction pooler Supabase (port 6543) tidak mendukung prepared statement asli.
        PDO::ATTR_EMULATE_PREPARES => true,
    ]);
} catch (PDOException $e) {
    die("Koneksi database gagal: " . $e->getMessage());
}