# Sistem Perpustakaan Digital Kampus

Aplikasi web berbasis Laravel 12 untuk mengelola pendataan buku, kategori, anggota (mahasiswa/dosen), serta transaksi peminjaman di lingkungan kampus.

## Cara Menjalankan Project Secara Lokal

Pastikan komputer sudah terinstall PHP, Composer, dan MySQL (XAMPP/MAMP).
1. Clone repository ini.
2. Buka terminal di folder project dan jalankan `composer install`.
3. Copy file `.env.example` menjadi `.env`, lalu sesuaikan konfigurasi database (DB_DATABASE, dll).
4. Jalankan `php artisan key:generate`.
5. Jalankan `php artisan migrate` untuk membuat tabel database.
6. Jalankan `php artisan serve` untuk menyalakan server lokal.

---

## Pemahaman MVC (Model, View, Controller)

- **Model:** Bagian yang bertugas mengelola data dan berinteraksi langsung dengan *database* (seperti menyimpan atau mengambil data).
- **View:** Bagian yang mengatur antarmuka pengguna (UI) berupa kode HTML, CSS, dan elemen visual lainnya yang akan dilihat langsung oleh pengguna di layar.
- **Controller:** Otak atau jembatan penghubung yang menerima *request* dari pengguna, mengambil/memproses data melalui Model, lalu mengirimkan hasil akhirnya untuk ditampilkan oleh View.