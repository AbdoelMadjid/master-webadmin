# Skema Header Menu

URL aplikasi: `/help/pemrograman/skema/header-menu`

[⬅ Kembali ke README Docs](../README.md)

Header memadukan beberapa pattern sekaligus: mega menu card, mega menu tab, dropdown recursive, dan compact help menu.

Tag:
- `Dashboards = mega card`
- `Pages = mega tab`
- `Apps = recursive dropdown`
- `Layouts = mega columns`
- `Help = compact icon list`

## Orkestrasi Utama

- Entry point: `resources/views/layouts/partials/header/_menu/_menu.blade.php`.
- Trigger top-level: `data-kt-menu-trigger="{default:'click', lg:'hover'}"`.
- Mode mobile: header menjadi drawer menggunakan `data-kt-drawer`.
- Active state top-level: `request()->routeIs(...)`.

## Skema Per Menu Utama

> Catatan: Satu top bar, lima karakter submenu berbeda. Ini memudahkan UX menyesuaikan volume konten tiap domain.

## Dashboards: Mega Menu Card

- Partial: `__dashboards.blade.php`.
- Dashboards: Mega Menu Card
- Kanan: list "More Dashboards" dari `header_dashboard_other`.
- Partial: `__dashboards.blade.php`.
- Kiri: card dashboard dari `header_dashboard_card`.

## Pages: Mega Menu Tab

- Partial: `__pages.blade.php`.
- Pages: Mega Menu Tab
- Tiap tab memanggil partial berbeda (`__pages-*`).
- Partial: `__pages.blade.php`.
- Lebar pane adaptif: `w-lg-1000px`, `w-lg-600px`, `w-lg-500px`.

## Apps: Recursive Dropdown

- Data source: `config/header/_header_apps.php`.
- Apps: Recursive Dropdown
- Level 1 default flyout; level lanjutan bisa pakai `'dropdown' => true`.
- Data source: `config/header/_header_apps.php`.

## Layouts: Mega Menu Kolom

- Partial: `__layouts.blade.php`.
- Layouts: Mega Menu Kolom
- Ada panel promosi "Layout Builder" dan gambar visual.
- Partial: `__layouts.blade.php`.

## Help: Compact Hybrid Menu

- Data source: `config/header/_header_help.php`.
- Help: Compact Hybrid Menu
- Eksternal default ke `target="_blank"` bila target tidak diisi.
- Data source: `config/header/_header_help.php`.

## Mega Menu vs Dropdown: Pemilihan Pattern

Langkah/aturan:
- Mega menu cocok untuk konten besar + kategorisasi visual + CTA.
- Dropdown cocok untuk list singkat dengan kedalaman rendah.
- Selalu verifikasi desktop hover behavior dan mobile click behavior.

> Catatan: Praktik terbaik: tentukan pattern dulu (mega atau dropdown), lalu tetapkan file config dan partial agar struktur konsisten.

## Standar Tim (Strict) Header Menu

Langkah/aturan:
- **Rule wajib:** top-level baru harus punya pattern jelas (mega/tab/dropdown) sebelum implementasi.
- **Rule wajib:** konfigurasi header dan partial renderer harus tetap domain-specific (hindari logika campur).
- **Rule wajib:** active state route wajib tervalidasi untuk perilaku desktop hover dan mobile click.
- **Rule wajib:** link eksternal harus eksplisit mendefinisikan `target` dan tetap aman untuk UX.

## Troubleshooting Header Menu

- **Submenu tidak tampil:** cek trigger attribute dan struktur submenu wrapper.
- **Tab pages tidak pindah konten:** cek target id tab dan state active awal.
- **Dropdown salah posisi:** cek `data-kt-menu-placement` dan responsive behavior.
- **Link help tidak aktif:** cek route internal dan request()->routeIs pattern.
