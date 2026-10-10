| Data | Keterangan |
|---|---|
| Mata Kuliah | Desain Pemograman web |
| NIM | 25410702035 |
| Nama | Muhammad Latif Sabilis Sudur |
| Kelas | TI - 2D |
| Repository | [Link Repository]( https://github.com/muhlatif1809-ui/DPW-2026-MuhammadLatifSabilisSudur/tree/main/Jobsheet-13 ) |

## Struktur File
```java
Jobsheet-13/
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
├── includes/
│   ├── auth.php
│   ├── config.php
│   ├── csrf.php
│   ├── footer.php
│   ├── header.php
│   ├── helpers.php
│   └── koneksi.php
├── docs/
│   ├── manual-pengguna.md
│   ├── security-cheklist.md
│   └── wirefrime.md
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
└── vercel.json
```

## Ringkasan
Jobsheet 13 memisahkan **konfigurasi database dari kode sumber**. Kredensial tidak lagi ditulis di `includes/koneksi.php`, tetapi dibaca lewat `includes/config.php` dari environment variable (`DB_HOST`, `DB_PORT`, `DB_NAME`, `DB_USER`, `DB_PASS`) dengan nilai default untuk database lokal. File `.env*` ditambahkan ke `.gitignore` agar tidak ikut ter-commit. Fitur aplikasi (autentikasi, CRUD buku dan anggota, peminjaman, pengembalian, riwayat) sama dengan Jobsheet 12.