# Skema Sidebar Menu

URL aplikasi: `/help/pemrograman/skema/sidebar-menu`

[⬅ Kembali ke README Docs](../README.md)

Sidebar memakai konfigurasi deklaratif dan renderer recursive: fleksibel untuk nested menu, badge, target, dan dropdown.

Tag:
- `children = parent node`
- `tanpa children = leaf link`
- `toggle text dinamis`
- `auto open on active route`
- `desktop + mobile compatible`

## Peta Sumber Utama

- `config/sidebar/_sidebar_dashboard.php` (dashboard + show more).
- `config/sidebar/_sidebar_apps.php` (nested menu + badge + dropdown).
- `config/sidebar/_sidebar_helps.php` (dokumen internal help).
- `resources/views/layouts/partials/sidebar/_menu.blade.php` (section wrapper).
- `resources/views/layouts/partials/sidebar/_menu-item.blade.php` (recursive renderer).

## Struktur Data Dasar

```php
// leaf
[
  'title' => 'Skema Route',
  'route' => 'help.pemrograman.skema.route',
]

// parent
[
  'title' => 'Skema Pemrograman',
  'children' => [
    // child items...
  ],
]
```

## Mode Render Menu

Langkah/aturan:
- `children` + tanpa `dropdown` -> accordion.
- `children` + `'dropdown' => true` dirender sebagai item dropdown bertingkat.

## Badge dan Target

> Catatan: Pada mode `dropdown => true`, implementasi saat ini menerapkan `target` parent ke item child pada dropdown tersebut.

## Fitur Unik Dashboard: Show More / Show Less

Langkah/aturan:
- `menus_dashboard` = item inti yang selalu tampil.
- `menus_dashboard_collapsed` menyimpan item tambahan pada mode collapsed.
- Tombol "Show X More" dihitung dinamis berdasarkan jumlah item collapsed.
- Jika route aktif ada di item collapsed, panel akan terbuka otomatis.

## Checklist Engineering

- Active state parent dihitung recursive, leaf menggunakan `request()->routeIs($route . '*')`.
- Key title otomatis ditransformasikan ke `menu.*`; jika key tidak ada akan fallback ke text asli.
- Sebelum publish: validasi route, badge, target, dropdown behavior, dan tampilan mobile.

> Peringatan: Perubahan di struktur nested menu sebaiknya diuji di route aktif terdalam agar memastikan parent otomatis terbuka sesuai ekspektasi.

## Standar Tim (Strict) Sidebar

Langkah/aturan:
- **Rule wajib:** icon level-1 wajib valid + jumlah `paths` sesuai icon duotone.
- **Rule wajib:** key translasi menu wajib ada di EN+ID untuk item user-facing utama.
- **Rule wajib:** perubahan nested menu harus diuji active state sampai level terdalam.

## Troubleshooting Sidebar

- **Menu tidak muncul:** cek file config yang benar dan struktur array-nya.
- **Parent tidak auto-open:** cek pola routeIs pada child route aktif.
- **Judul tidak tertranslate:** cek normalisasi key `menu.*` di file lang.
- **Icon kosong:** cek class icon dan nilai `paths`.
