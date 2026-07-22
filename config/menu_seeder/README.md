# Menu Seeder Modular

Folder ini menyimpan blueprint menu per kategori agar maintainable.

## Struktur

- `config/menu_seeder.php`: loader utama, membaca semua `*_seeder.php` (kecuali file yang diawali `_`).
- `config/menu_seeder/_template_seeder.php`: template/stub untuk kategori baru.
- `config/menu_seeder/*_seeder.php`: file kategori aktual, contoh:
  - `identitaspengguna_seeder.php`
  - `masterdata_seeder.php`
- Opsional: parent dalam satu kategori bisa dipecah lagi ke subfolder kategori, contoh:
  - `config/menu_seeder/masterdata/masterdata-manajemenpengguna_seeder.php`
  - `config/menu_seeder/masterdata/masterdata-appsupport_seeder.php`

## Cara Tambah Kategori Baru

1. Copy template:
   - dari `_template_seeder.php`
   - rename misal `akademik_seeder.php`
2. Ganti key kategori, role/permission default, dan struktur `menus`.
   - Jika menu parent banyak, pecah per parent di subfolder kategori agar fokus.
3. Jalankan sinkronisasi:
   - `php artisan db:seed --class=MenuSeeder`
4. Verifikasi:
   - menu tampil sesuai role
   - route bisa dibuka
   - active state parent/child benar

## Catatan Teknis

- `route` dipakai untuk halaman internal.
- `href` dipakai untuk URL eksternal/non-route.
- `badge`, `target`, `dropdown`, `children_collapsed` didukung lewat `meta` di proses seeder.
- Nested menu aman untuk mode accordion (renderer recursive).
- Pastikan izin `read {route/url}` tersedia, karena leaf tanpa izin tidak akan tampil.
