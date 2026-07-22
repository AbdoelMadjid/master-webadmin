# Panduan Tambah Halaman

URL aplikasi: `/help/pemrograman/operasional/panduan-tambah-halaman`

[⬅ Kembali ke README Docs](../README.md)

Alur standar menambahkan halaman baru pada proyek ini: dari file Blade, auto route, sinkron menu ke database, translasi, sampai validasi akhir.

Tag:
- `konsisten layout`
- `mudah maintain`

## Flow End-to-End

Langkah/aturan:
- 1. Buat file baru di `resources/views/pages/... .blade.php`.
- 2. Route otomatis terbentuk via `routes/menu.php`.
- 3. Tambahkan blueprint menu (umumnya di `config/sidebar/_sidebar_*.php` atau `config/menu_seeder.php` sesuai domain).
- 4. Jalankan sinkronisasi menu: `php artisan db:seed --class=MenuSeeder`, lalu pastikan role/user punya izin `read {route}`.
- 5. Uji akses URL, visibilitas menu, active state parent/child, dan page title.

## Contoh Struktur File

> Catatan: Route halaman `resources/views/pages` di-scan otomatis oleh `routes/menu.php` dan diproteksi izin `read {route_name}`.

## Template Minimal Halaman

- `@extends('layouts.index')`
- `@section('title', ...)`
- `@section('toolbar')`
- `@section('content')`

## Checklist Validasi

- Halaman dapat diakses saat login (middleware `auth` aktif).
- Menu mengarah ke route yang benar.
- Judul halaman tampil sesuai translasi.
- Tampilan desktop dan mobile tetap stabil.

## Perintah Verifikasi Cepat

> Peringatan: Jika route baru tidak terlihat, pastikan nama file Blade valid dan tidak ada typo folder/path.
