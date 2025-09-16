# SPADA Merah Putih — Sistem Pembelajaran Daring  
Universitas 17 Agustus 1945 Semarang (UNTAG SMG)

---

## 📚 Deskripsi

SPADA Merah Putih adalah platform pembelajaran daring milik UNTAG SMG yang dibangun untuk memfasilitasi mahasiswa dan dosen dalam proses pembelajaran online.  
Sejak awal tahun 2020, platform ini digunakan untuk mendukung kegiatan akademik secara fleksibel, tetapi pada tahun 2024 platform ini diaktifkan kembali dengan versi LMS terbaru. 

Nota: LMS = *Learning Management System*

---

## 🛠 Fitur Utama

- Akses kursus dari berbagai fakultas / jurusan & semester. 
- Materi pembelajaran dalam berbagai format. 
- Fitur pengumuman akademik dan informasi kampus. 
- Akun pengguna: Mahasiswa & Dosen  
- Sistem login dan pengelolaan kelas serta konten pembelajaran

---

## ⚙️ Teknologi / Stack

Tuliskan di sini teknologi-yang dipakai. Contoh:

| Komponen | Deskripsi |
|---|---|
| Backend / Server | **PHP** | Bahasa pemrograman utama di server |
| Kerangka Kerja (Framework) | **Sylius** | Digunakan sebagai basis untuk sistem atau modul tertentu (termasuk commerce / modul custom) |
| Database | **MySQL / MariaDB** | Untuk menyimpan data user, materi, kelas, dan lainnya |
| ORM / DB Abstraction | **Doctrine / Doctrine DBAL** | Interaksi database lewat abstraction layer dan migrasi skema data |
| Penyematan Dependensi | **Composer** | Manajemen paket PHP |
| Frontend | HTML5, CSS3, JavaScript | Antarmuka untuk pengguna (mahasiswa, dosen) |
| Template Engine / Templating | Twig / Blade (tergantung framework Sylius / custom) | Untuk rendering halaman web |
| Pengontrol versi | Git | Menyimpan riwayat kode, kolaborasi |
| Deployment / Hosting | Web server (Apache / Nginx) + hosting lokal / shared / cloud | Menjalankan aplikasi di server web |
| Manajemen Konfigurasi | `.env` file atau konfigurasi serupa | Menyimpan setting seperti DB credentials, environment (dev/prod), dsb |

---

## 🚀 Instalasi & Setup

Berikut panduan cepat untuk memulai proyek ini secara lokal:

```bash
1. Clone repository
git clone https://github.com/ardifx01/sistem-pembelajaran-daring-untagsmg.git
cd sistem-pembelajaran-daring-untagsmg

2. Install dependencies
composer -V
composer install

3. Konfigurasi environment
cp .env.example .env

4. Buat Database
CREATE DATABASE spada_untagsmg CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

5. Jalankan migrasi
php bin/console doctrine:migrations:migrate

6. Jalankan di server lokal
php -S localhost:8000 -t public
```
