<?php
// ==== ROUTER: arahkan request selain "/" ke file PHP aslinya ====
$path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

if ($path !== '' && $path !== 'index.php') {
    $target = __DIR__ . '/' . $path;
    if (is_file($target) && pathinfo($target, PATHINFO_EXTENSION) === 'php') {
        require $target;
        exit;
    }
    http_response_code(404);
    exit('404 Not Found');
}
// ==== AKHIR ROUTER ====

$page_title = "Beranda";
include __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/koneksi.php';

$totalBuku = $pdo->query("SELECT COUNT(*) FROM buku")->fetchColumn();
$totalAnggota = $pdo->query("SELECT COUNT(*) FROM anggota")->fetchColumn();
?>
        <section>
            <h2>Selamat Datang di Sistem Perpustakaan Mini</h2>
            <p>Aplikasi sederhana untuk mengelola data buku dan anggota perpustakaan.</p>
        </section>

        <section>
            <h2>Ringkasan</h2>
            <article>
                <h3>Total Buku</h3>
                <p><?php echo $totalBuku; ?></p>
            </article>
            <article>
                <h3>Total Anggota</h3>
                <p><?php echo $totalAnggota; ?></p>
            </article>
            <article>
                <h3>Sedang Dipinjam</h3>
                <p>0</p>
            </article> 
        </section>
<?php include __DIR__ . '/includes/footer.php'; ?>