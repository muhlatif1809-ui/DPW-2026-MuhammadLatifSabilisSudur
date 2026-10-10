| Data | Keterangan |
|---|---|
| Mata Kuliah | Desain Pemograman web |
| NIM | 25410702035 |
| Nama | Muhammad Latif Sabilis Sudur |
| Kelas | TI - 2D |
| Repository | [Link Repository]( https://github.com/muhlatif1809-ui/DPW-2026-MuhammadLatifSabilisSudur/tree/main/Jobsheet-11 ) |

## Struktur File
```java
Jobsheet-11/
├── .vercel/
├── api/
│   ├── anggota/
│   │   ├── edit.php
│   │   ├── hapus.php
│   │   ├── list.php
│   │   ├── proses_edit.php
│   │   ├── proses_tambah.php
│   │   └── tambah.php
│   ├── auth/
│   │   ├── login.php
│   │   ├── logout.php
│   │   ├── proses_login.php
│   │   ├── proses_register.php
│   │   └── register.php
│   ├── buku/
│   │   ├── edit.php
│   │   ├── hapus.php
│   │   ├── list.php
│   │   ├── proses_edit.php
│   │   ├── proses_tambah.php
│   │   └── tambah.php
│   ├── includes/
│   │   ├── auth.php
│   │   ├── csrf.php
│   │   ├── footer.php
│   │   ├── header.php
│   │   ├── helpers.php
│   │   └── koneksi.php
│   └── index.php
├── assets/
│   ├── css/
│   │   └── style.css
│   └── js/
│       └── app.js
├── docs/
│   ├── security-checklist.md
│   └── wireframe.md
├── sql/
│   ├── 01_buku_anggota.sql
│   └── 02_users.sql
├── .gitignore
├── report.md
└── vercel.json
```

## Ringkasan
obsheet 11 berfokus pada **audit keamanan** SIMPUS-Mini. Semua query memakai prepared statement PDO untuk mencegah SQL Injection, output dibungkus fungsi `e()` (`includes/helpers.php`) untuk mencegah XSS, dan form POST dilindungi token CSRF (`includes/csrf.php`). Setelah login berhasil, session ID diperbarui dengan `session_regenerate_id(true)` untuk mencegah session fixation. Hasil audit dicatat di `docs/security-checklist.md`, sedangkan `docs/wireframe.md` berisi rancangan UI dan user flow untuk fitur peminjaman dan pengembalian.