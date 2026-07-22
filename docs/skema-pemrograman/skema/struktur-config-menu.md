# Skema Struktur Config Menu

URL aplikasi: `/help/pemrograman/skema/struktur-config-menu`

[⬅ Kembali ke README Docs](../README.md)

Relasi `config/sidebar/*`, `config/header/*`, translasi `lang/*`, dan renderer Blade.

Tag:
- `config consistency`
- `translation integrity`
- `active-state accuracy`

## Alur Sumber Data Menu

Langkah/aturan:
- `config/sidebar/*` dan `config/header/*` menyimpan struktur menu deklaratif.
- View renderer membaca config tersebut untuk membangun UI menu di sidebar/header.
- Title menu dikonversi ke key translasi `menu.*`, fallback ke text asli jika key belum ada.
- Route aktif dipakai untuk menentukan `active/here/show` pada parent-child secara recursive.

## Peta File Inti

- `config/sidebar/_sidebar_*.php` untuk menu sidebar per domain.
- `config/header/_header_*.php` untuk menu/header mega menu.
- `resources/views/layouts/partials/sidebar/_menu.blade.php` sebagai entry renderer sidebar.
- `resources/views/layouts/partials/sidebar/_menu-item.blade.php` untuk recursive render parent/child.
- `lang/en/menu.php` dan `lang/id/menu.php` untuk label translasi.
- `app/Helpers/GetPageTitle.php` untuk mapping judul halaman dari config menu berdasarkan route aktif.

## Kontrak Struktur Data Menu

> Catatan: Minimal item leaf: `title + route` atau `title + href`. Parent node umumnya memakai `children`.

## Alur Render Sidebar

Langkah/aturan:
- `_menu.blade.php` memanggil tiap grup config (dashboard, pages, apps, layouts, help).
- Setiap item dikirim ke `_menu-item.blade.php`.
- Jika ada `children`: render recursive, parent otomatis open saat ada child aktif.
- Jika leaf: render link + badge + state aktif berdasarkan `request()->routeIs(...)`.

## Alur Translasi Judul Menu

- Contoh: `Skema Cache & Deployment` -> `menu.skema_cache_and_deployment`.
- Pastikan key yang sama tersedia di `lang/en/menu.php` dan `lang/id/menu.php`.
- Jika title berubah, key translasi ikut berubah karena key diturunkan dari text title.

## Aturan Active State

- Leaf menu aktif jika `request()->routeIs($route . '*')` true.
- Parent menu aktif/open jika minimal satu child aktif (recursive).
- Mode dropdown tetap memakai evaluasi child route untuk active class.
- Dashboard punya perlakuan khusus show more/show less dari config collapsed menu.

## Checklist Validasi Perubahan

Langkah/aturan:
- 1. Tambahkan item di config sidebar/header dengan struktur konsisten.
- 2. Pastikan route name valid (`php artisan route:list`).
- 3. Tambahkan key translasi EN dan ID sesuai normalisasi title.
- 4. Cek active state parent-child di desktop dan mobile.
- 5. Verifikasi icon class dan `paths` agar icon muncul sempurna.

## Troubleshooting Cepat

- **Title tidak tertranslate:** cek key `menu.*` hasil normalisasi title dan isi file lang.
- **Menu tidak aktif:** cek kecocokan route name dan wildcard `routeIs`.
- **Icon kosong:** cek class icon valid dan jumlah `paths` sesuai duotone icon.
- **Perubahan config tidak terlihat:** clear cache konfigurasi/view jika environment memakai cache.

## Contoh Real Before/After (_sidebar_helps.php)

Langkah/aturan:
- Tambahkan child baru di `children[]` dengan pasangan `title` dan `route`.
- Pastikan route tersebut ada (di proyek ini route help dibentuk otomatis dari nama file blade di `resources/views/pages`).
- Tambahkan key translasi title ke `lang/en/menu.php` dan `lang/id/menu.php` jika ingin label multi-bahasa.
