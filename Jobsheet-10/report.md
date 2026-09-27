| Data | Keterangan |
|---|---|
| Mata Kuliah | Desain Pemograman web |
| NIM | 25410702035 |
| Nama | Muhammad Latif Sabilis Sudur |
| Kelas | TI - 2D |
| Repository | [Link Repository]( https://github.com/muhlatif1809-ui/DPW-2026-MuhammadLatifSabilisSudur/tree/main/Jobsheet-10 ) |

## Struktur File
``` java 
Jobsheet-10/
├── .vercel/
├── api/
│ ├── anggota/
│ │ ├── edit.php
│ │ ├── hapus.php
│ │ ├── list.php
│ │ ├── proses_edit.php
│ │ ├── proses_tambah.php
│ │ └── tambah.php
│ ├── auth/
│ │ ├── login.php
│ │ ├── logout.php
│ │ ├── proses_login.php
│ │ ├── proses_register.php
│ │ └── register.php
│ ├── buku/
│ │ ├── edit.php
│ │ ├── hapus.php
│ │ ├── list.php
│ │ ├── proses_edit.php
│ │ ├── proses_tambah.php
│ │ └── tambah.php
│ ├── includes/
│ │ ├── auth.php
│ │ ├── footer.php
│ │ ├── header.php
│ │ └── koneksi.php
│ └── index.php
├── assets/
│ ├── css/
│ │ └── style.css
│ └── js/
│ └── app.js
├── docs/
│ └── wireframe.md
├── sql/
│ ├── 01_buku_anggota.sql
│ └── 02_users.sql
└── vercel.json
```

## Ringkasan

## Ringkasan
Jobsheet 10 menambahkan sistem **autentikasi petugas** ke SIMPUS-Mini. Tabel `users` (`sql/02_users.sql`) menyimpan akun petugas dengan password ter-hash (`password_hash()`/`password_verify()`). File `includes/auth.php` menjaga akses: menu Tambah, Edit, Hapus hanya bisa dipakai setelah login, sementara Beranda dan Daftar Buku tetap publik. Status login disimpan lewat `$_SESSION` standar PHP.