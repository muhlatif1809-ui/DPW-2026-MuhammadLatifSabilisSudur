| Data | Keterangan |
|---|---|
| Mata Kuliah | Desain Pemograman web |
| NIM | 25410702035 |
| Nama | Muhammad Latif Sabilis Sudur |
| Kelas | TI - 2D |
| Repository | [Link Repository]( https://github.com/muhlatif1809-ui/DPW-2026-MuhammadLatifSabilisSudur/tree/main/Jobsheet-09 ) |

## Struktur File 
``` java
Jobsheet-09/
├── .vercel/
├── api/
│ ├── anggota/
│ │ ├── edit.php
│ │ ├── hapus.php
│ │ ├── list.php
│ │ ├── proses_edit.php
│ │ ├── proses_tambah.php
│ │ └── tambah.php
│ ├── buku/
│ │ ├── edit.php
│ │ ├── hapus.php
│ │ ├── list.php
│ │ ├── proses_edit.php
│ │ ├── proses_tambah.php
│ │ └── tambah.php
│ ├── includes/
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
│ └── 01_buku_anggota.sql
└── vercel.json
```

## Ringkasan

## Ringkasan
Jobsheet 9 memindahkan penyimpanan data buku dan anggota dari `$_SESSION` ke database PostgreSQL lewat PDO (`includes/koneksi.php`). Tabel dibuat dari `sql/01_buku_anggota.sql`, data disimpan dengan `INSERT` prepared statement, ditampilkan dengan `SELECT`, dan totalnya dihitung dengan `COUNT(*)` di Beranda. Data kini permanen, tidak hilang saat browser ditutup atau server restart.