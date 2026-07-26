<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Inventory Management System for Soltem

Aplikasi manajemen inventaris dan permintaan barang (Soltem) berbasis Laravel 11 dan Filament v3. Aplikasi ini dirancang untuk memudahkan pencatatan pengambilan, penggunaan, dan pengembalian barang oleh karyawan, serta memungkinkan admin memantau status barang secara interaktif.

## 🌟 Fitur Utama

- **Live Demo Terintegrasi:** Tersedia demo langsung dengan dummy data lengkap.
- **Manajemen Karyawan & Departemen:** CRUD untuk mengelola data Departemen, Jabatan (Position), dan Karyawan.
- **Sistem Pengajuan Barang (Soltem):** 
  - Karyawan dapat membuat *Soltem Request*.
  - Status *Request* bervariasi: `pending`, `approved`, `rejected`, dan `returned`.
- **Manajemen Instalasi (Installation):**
  - Hanya *Request* yang telah di-*approve* yang dapat dibuatkan Instalasi (*Soltem Installation*).
  - Melacak detail pemasangan, lokasi, keluhan, jenis akses, dll.
- **Otomatisasi Status Barang:** 
  - Status Soltem (`ready`, `out`, `used`) akan otomatis diperbarui berdasarkan siklus pengajuan dan instalasi.
- **Dashboard & Analitik:**
  - Grafik visual interaktif untuk melacak jumlah Karyawan per Departemen.
  - Grafik riwayat ketersediaan dan status Soltem.
- **Role-Based Login:** Akses terpisah antara Admin Panel (`/admin`) dan App Panel Karyawan (`/app`). Jika Admin login melalui panel umum, akan otomatis di-redirect ke panel Admin.

## 🌐 Live Demo

Aplikasi ini telah di-deploy ke Render dan dapat dicoba secara langsung:

👉 **[Live Admin Dashboard](https://filament-project-manager.onrender.com/admin)**
👉 **[Live Employee App](https://filament-project-manager.onrender.com/app)**

**Kredensial Login Demo:**
- **Email:** `admin@demo.com`
- **Password:** `demo1234`

*(Database pada versi demo akan otomatis mereset dan terisi data dummy baru dari Factory setiap kali server didistribusikan ulang).*

## ⚙️ Teknologi yang Digunakan

- [Laravel 11](https://laravel.com/)
- [Filament v3](https://filamentphp.com/) (Admin & App Panel)
- TailwindCSS & Vite
- PostgreSQL (Production on Render) & SQLite (Lokal Testing)
- Graphify (Pemetaan Knowledge Graph Repositori)

## 🚀 Panduan Menjalankan Secara Lokal (Local Installation)

Ikuti langkah-langkah berikut jika Anda ingin melakukan *clone* dan menjalankan project ini di komputer Anda sendiri.

### 1. Clone Repository

```bash
git clone https://github.com/justucok/filament-project-manager.git
cd filament-project-manager
```

### 2. Instalasi Dependency (PHP & Node.js)

Pastikan Anda sudah menginstall Composer dan NPM.
```bash
composer install
npm install
npm run build
```

### 3. Konfigurasi Environment

Salin file contoh konfigurasi `.env.example` menjadi `.env`.
```bash
cp .env.example .env
```

Buka file `.env` dan atur koneksi database Anda. Secara default, aplikasi ini sangat mudah dites menggunakan SQLite. Ubah pengaturan database menjadi:
```env
DB_CONNECTION=sqlite
# Hapus atau berikan komentar pada baris DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD
```

*(Jika menggunakan SQLite, pastikan membuat file kosong `database/database.sqlite` terlebih dahulu atau gunakan perintah `touch database/database.sqlite`)*.

### 4. Generate Application Key

```bash
php artisan key:generate
```

### 5. Migrasi dan Seeding Dummy Data

Jalankan migrasi sekaligus men-*generate* sekitar 110 data dummy (termasuk Karyawan, Departemen, Soltem, dan Request) agar aplikasi tidak kosong.

```bash
php artisan migrate:fresh --seed
```

### 6. Jalankan Server Lokal

```bash
php artisan serve
```

Aplikasi sekarang dapat diakses melalui browser Anda di URL: **http://127.0.0.1:8000**

Anda dapat login menggunakan kredensial dummy yang sama seperti Live Demo di atas.

## 👨‍💻 Kontribusi
Proyek ini dikembangkan secara aktif. Silakan buat *Issue* atau kirimkan *Pull Request* jika Anda ingin berkontribusi atau menemukan bug.

## 🧑‍🎓 Author
Developed by **Just Ucok**

## License
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
