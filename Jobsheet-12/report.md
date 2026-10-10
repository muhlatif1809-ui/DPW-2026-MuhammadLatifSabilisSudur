| Data | Keterangan |
|---|---|
| Mata Kuliah | Desain Pemograman web |
| NIM | 25410702035 |
| Nama | Muhammad Latif Sabilis Sudur |
| Kelas | TI - 2D |
| Repository | [Link Repository]( https://github.com/muhlatif1809-ui/DPW-2026-MuhammadLatifSabilisSudur/tree/main/Jobsheet-12 ) |

## Struktur File
```java
Jobsheet-12/
├── .vercel/
├── anggota/
│   ├── edit.php
│   ├── hapus.php
│   ├── list.php
│   ├── proses_edit.php
│   ├── proses_tambah.php
│   └── tambah.php
├── api/
│   └── index.php
├── assets/
│   ├── css/
│   │   └── style.css
│   └── js/
│       └── app.js
├── auth/
│   ├── login.php
│   ├── logout.php
│   ├── proses_login.php
│   ├── proses_register.php
│   └── register.php
├── buku/
│   ├── edit.php
│   ├── hapus.php
│   ├── list.php
│   ├── proses_edit.php
│   ├── proses_tambah.php
│   └── tambah.php
├── docs/
│   ├── security-checklist.md
│   └── wireframe.md
├── includes/
│   ├── auth.php
│   ├── csrf.php
│   ├── footer.php
│   ├── header.php
│   ├── helpers.php
│   └── koneksi.php
├── peminjaman/
│   ├── kembali.php
│   ├── proses_kembali.php
│   ├── proses_tambah.php
│   ├── riwayat.php
│   └── tambah.php
├── sql/
│   ├── 01_buku_anggota.sql
│   ├── 02_users.sql
│   └── 03_peminjaman.sql
├── .gitignore
├── index.php
├──vercel.json
└── report.md
```

## Ringkasan
Jobsheet 12 menambahkan modul **peminjaman dan pengembalian buku**. Tabel `peminjaman` (`sql/03_peminjaman.sql`) menghubungkan `buku` dan `anggota`. Proses peminjaman dan pengembalian berjalan dalam transaksi database, dengan `SELECT ... FOR UPDATE` agar stok buku tidak bisa menjadi negatif. Riwayat peminjaman bisa dilihat per anggota (`peminjaman/riwayat.php`), dan kartu "Sedang Dipinjam" di Beranda kini dihitung dari data nyata. Struktur proyek juga dirapikan dengan satu router di `api/index.php` agar Vercel hanya membuat satu serverless function.
