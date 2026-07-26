# Project Knowledge Base

## Overview
Proyek ini adalah aplikasi manajemen berbasis **Laravel** yang menggunakan **Filament Admin Panel** untuk antarmuka pengguna dan administrasi.

## Core Models & Database
Sistem ini berpusat pada entitas (Eloquent models) berikut:
- `Department`: Mengelola data departemen.
- `Employee`: Mengelola data pegawai.
- `Position`: Mengelola data jabatan atau posisi.
- `User`: Model pengguna standar.
- `SoltemInstallation` & `SoltemRequest` & `Soltem`: Entitas khusus untuk fitur instalasi/permintaan "Soltem".

## Filament Resources
Aplikasi ini sangat bergantung pada struktur Filament untuk operasi CRUD. Resource yang diidentifikasi meliputi:
- `EmployeeResource`, `SoltemRequestResource`, `UserResource`, dsb.
- Masing-masing resource menggunakan siklus halaman Filament standar: `CreateRecord`, `EditRecord`, `ListRecords`, dan `ViewRecord`.
- Menggunakan widget seperti `EmployeesChart`, `SoltemsChart`, dan turunan `Filament\Widgets\ChartWidget` untuk dashboard statistik.

## Frontend & Assets
- Aset frontend dikompilasi menggunakan Vite (`laravel-vite-plugin`) dan Tailwind CSS.
- Sebagian besar interaktivitas UI ditangani oleh komponen internal Filament (ditemukan di `public/js/filament`), seperti editor teks (`rich-editor.js`, `markdown-editor.js`) dan unggah file (`file-upload.js`).

## Security & Middleware
- Terdapat `VerifyIsAdmin.php` middleware yang mengatur akses ke `AdminPanelProvider` untuk memastikan hanya pengguna dengan hak akses admin yang dapat mengelola sistem ini.

## Graphify Knowledge Graph
Proyek ini telah dipetakan menggunakan **Graphify**. 
- Untuk menganalisa arsitektur atau relasi kode lebih dalam, cek direktori `graphify-out/` atau jalankan kueri graf menggunakan perintah CLI `/graphify query "pertanyaan anda"`.
- Setiap kali Anda melakukan perubahan kode secara signifikan, ingatlah untuk menjalankan `graphify update .` untuk memperbarui knowledge graph.
