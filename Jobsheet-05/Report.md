| Data | Keterangan |
|---|---|
| Mata Kuliah | Desain Pemograman web |
| NIM | 25410702035 |
| Nama | Muhammad Latif Sabilis Sudur |
| Kelas | TI - 2D |
| Repository | [Link Repository](  ) |

## Struktur File
``` java
Jobsheet-05/
├── anggota/
│   ├── list.html
│   └── tambah.html
├── assets/
│   ├── css/style.css
│   └── js/app.js
├── buku/
│   ├── list.html
│   └── tambah.html
├── docs/
│   └── wireframe.md
└── index.html
```

## Ringkasan
## Ringkasan

Pada Jobsheet-05 ini, dilanjutkan pengembangan aplikasi SIMPUS-Mini (Sistem Perpustakaan Mini) dengan menambahkan halaman-halaman utama serta fitur interaktif berbasis JavaScript. Struktur project dipisah menjadi beberapa folder (anggota/, buku/, assets/, docs/) agar lebih rapi dan mudah dikelola. Halaman yang dibuat mencakup index.html sebagai beranda yang menampilkan ringkasan statistik seperti total buku, total anggota, dan jumlah yang sedang dipinjam, kemudian buku/list.html dan buku/tambah.html untuk menampilkan daftar buku sekaligus form penambahan data buku baru dengan field judul, pengarang, tahun, ISBN, stok, dan kategori. Fitur serupa juga dibuat untuk data anggota melalui anggota/list.html dan anggota/tambah.html, yang menampilkan daftar anggota dan form penambahan anggota baru dengan field nama, nomor anggota, alamat, dan nomor HP. Selain itu, dokumen docs/wireframe.md juga disusun untuk merancang tampilan fitur Login, Dashboard Petugas, serta Peminjaman/Pengembalian yang rencananya akan diimplementasikan pada jobsheet berikutnya.

Dari sisi interaktivitas, file assets/js/app.js menambahkan beberapa fungsi seperti hamburger menu yang responsif untuk tampilan mobile, konfirmasi sebelum menghapus data pada tabel, pencarian data secara real-time, serta validasi form sebelum data disimpan seperti pengecekan field wajib, rentang tahun terbit, dan nilai stok yang tidak boleh negatif. Sementara itu, styling pada assets/css/style.css menggunakan kombinasi Flexbox untuk navbar dan CSS Grid untuk kartu statistik, dengan desain responsif yang menyesuaikan tampilan di perangkat tablet maupun mobile, serta tema warna hijau toska sebagai warna aksen utama di seluruh halaman.

Secara keseluruhan, Jobsheet-05 berhasil melengkapi fitur CRUD dasar untuk data buku dan anggota, sekaligus mempersiapkan rancangan UI/UX untuk fitur transaksi peminjaman yang akan dikembangkan lebih lanjut pada jobsheet berikutnya.