# Sistem Informasi Perpustakaan

Project UAS Pemrograman Web Lanjut dengan tema perpustakaan menggunakan PHP Native.

## 📚 Deskripsi

Aplikasi web untuk manajemen perpustakaan yang dibuat sebagai tugas akhir semester. Sistem ini mencakup fitur-fitur dasar pengelolaan buku, anggota, dan peminjaman.

## ⚙️ Tech Stack

- **Backend:** PHP Native
- **Database:** MySQL
- **Frontend:** HTML, CSS, JavaScript

## 🚀 Fitur

- Manajemen data buku (CRUD)
- Manajemen data anggota
- Sistem peminjaman dan pengembalian buku
- Laporan transaksi
- Authentication (Login/Logout)

## 📋 Requirement

- PHP 7.4 atau lebih tinggi
- MySQL/MariaDB
- Apache/Nginx web server
- XAMPP/LAMP (untuk development lokal)

## 🔧 Cara Install

1. Clone repository:
   ```bash
   git clone https://github.com/angga-dharma/perpustakaan.git
   ```

2. Import database:
   - Buka phpMyAdmin
   - Buat database baru (misal: `db_perpustakaan`)
   - Import file SQL yang ada di folder `/database`

3. Konfigurasi koneksi database:
   ```php
   // Edit file config/database.php
   $host = "localhost";
   $user = "root";
   $pass = "";
   $db = "db_perpustakaan";
   ```

4. Jalankan di localhost:
   ```
   http://localhost/perpustakaan
   ```

## 📝 Default Login

```
Username: admin
Password: admin
```
*(Jangan lupa ganti password di production!)*

## 📸 Screenshot

*Coming soon*

## 🤝 Kontribusi

Ini project tugas kuliah, tapi pull request tetap welcome kalau ada improvement!

## 📄 License

[MIT](LICENSE)

---

**Note:** Project ini dibuat untuk keperluan akademik. Masih banyak yang bisa diimprove untuk production use.
