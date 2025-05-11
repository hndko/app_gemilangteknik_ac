# Gemilang Teknik AC Web Application

Gemilang Teknik AC adalah aplikasi berbasis web yang dirancang untuk mendukung operasional perusahaan dalam memberikan layanan terbaik di bidang perbaikan, instalasi, dan pemeliharaan AC. Aplikasi ini menyediakan fitur manajemen layanan, dokumentasi, artikel, pengguna, dan klien, yang mempermudah pengelolaan data dan interaksi dengan pelanggan.

## Fitur Utama

- **Manajemen Layanan**: Tambah, edit, dan hapus layanan yang ditawarkan.
- **Manajemen Dokumentasi**: Kelola dokumentasi berupa gambar dan deskripsi.
- **Manajemen Artikel**: Publikasi artikel untuk meningkatkan informasi kepada pelanggan.
- **Manajemen Pengguna**: Kelola data pengguna dengan berbagai peran (Superadmin, Admin, Admin Content).
- **Manajemen Klien**: Kelola data klien dan dokumentasi terkait.
- **Pencarian Artikel**: Fitur pencarian untuk menemukan artikel berdasarkan kata kunci.
- **Pagination**: Navigasi data dengan pagination untuk pengalaman pengguna yang lebih baik.

## Teknologi yang Digunakan

- **Framework**: CodeIgniter 3.1.13 (PHP)
- **Database**: MySQL
- **Frontend**: HTML, CSS, JavaScript, Bootstrap
- **Library**:
  - Moment.js (untuk manipulasi tanggal dan waktu)
  - TinyMCE (untuk editor teks)
- **Server Requirements**:
  - PHP 7.4 atau lebih baru
  - MySQL

## Cara Setup

1. **Clone Repository**:
   ```bash
   git clone https://github.com/hndko/app_gemilangteknik_ac.git
   cd app_gemilangteknik_ac
   ```
2. **Konfigurasi Database**:

   - Buka file `application/config/database.php`.
   - Sesuaikan konfigurasi database seperti `hostname`, `username`, `password`, dan `database` sesuai dengan pengaturan Anda.

3. **Konfigurasi Base URL**:

   - Buka file `application/config/config.php`.
   - Sesuaikan `base_url` dengan URL aplikasi Anda, misalnya:
     ```php
     $config['base_url'] = 'http://localhost/app_gemilangteknik_ac/';
     ```

4. **Migrasi Database**:

   - Import file SQL yang terdapat di folder `database` ke dalam database Anda menggunakan phpMyAdmin atau tool lainnya.

5. **Konfigurasi File Upload**:

   - Pastikan folder `uploads` memiliki izin tulis (write permission) agar file dapat diunggah.

6. **Jalankan Aplikasi**:
   - Akses aplikasi melalui browser dengan URL yang telah Anda konfigurasi di `base_url`.

## Kontribusi

Kontribusi sangat diterima! Silakan buat issue atau pull request untuk saran perbaikan dan penambahan fitur.

## Lisensi

Proyek ini dilisensikan di bawah lisensi MIT. Lihat file [LICENSE](LICENSE) untuk informasi lebih lanjut.
