# Skema Route

URL aplikasi: `/help/pemrograman/skema/route`

[⬅ Kembali ke README Docs](../README.md)

Jalur request dari URL ke Blade di proyek ini: manual route + auto route generator.

Tag:
- `Source of truth: folder structure`
- `Auto route naming`
- `php artisan route:list --name=help.pemrograman`

## Flow Request

Langkah/aturan:
- 1. User request URL.
- 2. `routes/web.php` diproses.
- 3. `require routes/menu.php` dipanggil.
- 4. `routes/menu.php` scan semua `resources/views/pages/*.blade.php`.
- 5. Setiap file menjadi route GET + route name otomatis dalam middleware `auth`.
- 6. URL tidak match -> fallback error 404.

## Konversi File ke Route

Contoh konversi otomatis:
- File: `resources/views/pages/help/pemrograman/skema/route.blade.php`
- Route name: `help.pemrograman.skema.route`
- URL: `/help/pemrograman/skema/route`
- View key: `pages.help.pemrograman.skema.route`

## Komponen Tanggung Jawab

- `routes/web.php`: route khusus, auth, profile, language switch, bootstrap route lain.
- `routes/menu.php`: generator route berbasis file view.
- `routes/auth.php`: route autentikasi bawaan.

> Catatan: Semua route generator dibungkus middleware `auth`, sementara fallback 404 tetap di luar middleware.

## Quick Add Page

- Buat file Blade baru di `resources/views/pages`.
- Route name dan URL langsung terbentuk otomatis.
- Tambahkan konfigurasi menu jika ingin tampil di navigasi.

> Peringatan: Hindari nama file duplikat dan gunakan format `kebab-case` untuk URL yang rapi.

## Contoh Pemetaan Aktual

```text
resources/views/pages/help/pemrograman/skema/route.blade.php
=> URL: /help/pemrograman/skema/route
=> route name: help.pemrograman.skema.route
```

## Prioritas Evaluasi Route

- Route yang didefinisikan lebih dulu akan dievaluasi lebih awal.
- Route spesifik harus diletakkan sebelum route dinamis yang lebih generik.
- Fallback selalu ditempatkan paling akhir.
- Pada proyek ini, `routes/menu.php` dan `fallback` memegang peran besar untuk halaman konten.

## Standar Tim (Strict) Route

Langkah/aturan:
- **Rule wajib:** route name harus konsisten dan deskriptif berbasis struktur view.
- **Rule wajib:** route internal halaman aplikasi wajib di-protect middleware `auth`.
- **Rule wajib:** hindari route closure untuk route yang ingin di-cache.
- **Rule wajib:** setiap route baru harus muncul di `route:list` saat PR review.

## Troubleshooting Route

- **Route tidak ditemukan:** cek penamaan file blade dan lokasi di `resources/views/pages`.
- **Route ada tapi tidak bisa diakses:** cek middleware auth/verified dan status login.
- **Perubahan route belum terbaca:** jalankan clear/cache command sesuai environment.
- **Nama route bentrok:** cek hasil `php artisan route:list` untuk duplikasi.
