# Panduan Tambah Menu

URL aplikasi: `/help/pemrograman/operasional/panduan-tambah-menu`

[⬅ Kembali ke README Docs](../README.md)

Standar menambah item menu agar konsisten: blueprint config -> sinkron DB -> izin akses -> render sidebar recursive.

## Pilih Sumber Blueprint Menu

- `config/sidebar/_sidebar_*.php` untuk kategori template (`PAGES/APPS/LAYOUTS/HELP`).
- `config/menu_seeder.php` untuk kategori custom bisnis (sekalian default role/permission).
- Setelah mengubah blueprint, jalankan `php artisan db:seed --class=MenuSeeder` agar data masuk ke tabel `menus`.

## Skema Data Leaf vs Parent

```php
// leaf
[
  'title' => 'Panduan Tambah Menu',
  'route' => 'help.pemrograman.operasional.panduan-tambah-menu',
]

// parent
[
  'title' => 'Skema Pemrograman',
  'children' => [ ... ],
]
```

## Kapan Pakai route vs href

Langkah/aturan:
- `route`: untuk halaman internal Laravel.
- `href`: untuk URL eksternal atau non-route.
- `target`: tetapkan eksplisit untuk UX yang konsisten.

## Fitur Opsional

- `badge` untuk status/beta/info.
- `dropdown => true` untuk flyout menu.
- `icon` + `paths` untuk top-level visual consistency.

## Checklist Uji Setelah Tambah Menu

- Parent otomatis open saat child route aktif.
- Item baru aktif di desktop dan mobile.
- Label menu tertranslate di EN dan ID (gunakan `title_key` bila tersedia).
- Tidak ada route missing saat klik menu.

> Catatan: Menu leaf tanpa izin `read {route/url}` tidak tampil. Untuk menu nested, validasi child terdalam agar recursive active state benar.

## Modularisasi `menu_seeder` per Kategori

- Simpan kategori dalam file terpisah di `config/menu_seeder/*_seeder.php`.
- Gunakan `config/menu_seeder/_template_seeder.php` sebagai stub awal, lalu rename file sesuai domain.
- Loader utama ada di `config/menu_seeder.php` dan otomatis memuat file kategori yang valid.
- Panduan ringkas tim tersedia di `config/menu_seeder/README.md`.

> Catatan: file template diawali `_` agar tidak ikut dimuat sebagai kategori aktif.
