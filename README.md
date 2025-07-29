<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Filament Project Manager

**Filament Project Manager** adalah aplikasi manajemen inventaris dan permintaan barang (Soltem) berbasis Laravel Filament. Aplikasi ini dirancang untuk memudahkan pencatatan pengambilan, penggunaan, dan pengembalian barang oleh karyawan, serta memungkinkan admin memantau dan mengelola status barang.

## ✨ Fitur Utama

- Dua panel login: Admin dan Karyawan.
- Admin dapat:
  - Menambahkan stok barang (Soltem).
  - Mengelola akun dan karyawan.
  - Melihat grafik status barang.
  - Menyetujui atau menolak permintaan Soltem.
- Karyawan dapat:
  - Mengajukan permintaan Soltem.
  - Mengisi berita acara pemasangan jika barang digunakan.
  - Mengembalikan barang jika tidak jadi digunakan.
- Visualisasi grafik status Soltem mingguan.
- Filter dinamis pada grafik berdasarkan status barang.
- Sistem status Soltem: `available`, `used`, `out`.

## ⚙️ Teknologi yang Digunakan

- [Laravel 11](https://laravel.com/)
- [Filament v3](https://filamentphp.com/)
- [Spatie Laravel Permissions](https://spatie.be/docs/laravel-permission/)
- [Flowframe Laravel Trend](https://github.com/flowframe/laravel-trend)
- TailwindCSS

## 🚀 Panduan Instalasi

### 1. Clone Repository

```
git clone https://github.com/justucok/filament-project-manager.git
cd filament-project-manager
```

### 2. Instalasi Dependency
```
composer install
```
### 3. Salin dan Konfigurasi Environment
```
cp .env.example .env
```

Lalu sesuaikan konfigurasi di .env, terutama bagian:
```
DB_DATABASE=your_database_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_password
```

### 4. Generate Application Key
```
php artisan key:generate
```

### 5. Jalankan Migrasi dan Seeder (jika ada)
```
php artisan migrate
php artisan db:seed
```

### 6. Jalankan Server Lokal
```
php artisan serve
```

Aplikasi akan tersedia di http://127.0.0.1:8000

🔐 Akun Login Default 
Anda dapat masuk dengan akun default:

Email: admin@mail.com

Password: admin123



📦 Struktur Fitur
Soltem: Barang inventaris yang dapat dipinjam.

SoltemRequest: Permintaan pengambilan Soltem oleh karyawan.

SoltemRequestItem: Detail barang yang diminta, dengan status dan lokasi pemasangan jika digunakan.

User: Akun login, dengan role is_admin untuk membedakan admin dan karyawan.

Employee: Informasi karyawan seperti nama, department, dan tanggal direkrut.

👨‍💻 Kontribusi
Proyek ini masih dalam tahap pengembangan aktif. Silakan buka issue atau pull request jika ingin berkontribusi atau menemukan bug.

🧑‍🎓 Author
Developed by Just Ucok

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
