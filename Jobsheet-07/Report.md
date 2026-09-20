| Data | Keterangan |
|---|---|
| Mata Kuliah | Desain Pemograman web |
| NIM | 25410702035 |
| Nama | Muhammad Latif Sabilis Sudur |
| Kelas | TI - 2D |
| Repository | [Link Repository]( https://github.com/muhlatif1809-ui/DPW-2026-MuhammadLatifSabilisSudur/tree/main/Jobsheet-07 ) |

## Struktur File
``` java
Jobsheet-07/
├── anggota/
│   ├── list.php
│   ├── proses_tambah.php
│   └── tambah.php
├── assets/
│   ├── css/
│   │   └── style.css
│   └── js/
│       └── app.js
├── buku/
│   ├── list.php
│   ├── proses_tambah.php
│   └── tambah.php
├── docs/
│   └── wireframe.md
├── includes/
│   ├── footer.php
│   └── header.php
├── index.php
└── Report.md
```

## Ringkasan

SIMPUS-Mini adalah aplikasi perpustakaan sederhana berbasis PHP untuk mengelola data buku dan anggota, dengan halaman Beranda, daftar, dan form tambah untuk masing-masing data. Halaman dibangun dari header.php dan footer.php yang dipakai ulang lewat include. Data dari form dikirim dengan metode POST ke proses_tambah.php, divalidasi di sisi server, lalu disimpan ke $_SESSION dan ditampilkan di tabel dengan pesan flash. Tampilannya memakai tema toska yang responsif, sedangkan JavaScript menangani menu hamburger, pencarian tabel, dan validasi form. Keterbatasannya, data di $_SESSION bersifat sementara, tombol Edit belum berfungsi, dan tombol Hapus hanya menghilangkan baris di layar.