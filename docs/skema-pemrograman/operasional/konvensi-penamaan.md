# Konvensi Penamaan

URL aplikasi: `/help/pemrograman/operasional/konvensi-penamaan`

[⬅ Kembali ke README Docs](../README.md)

Standar penamaan agar route otomatis, translasi menu, dan helper title berjalan konsisten di semua halaman.

## Konvensi Nama File View

- Gunakan huruf kecil + pemisah `-` untuk nama file Blade.
- Contoh: `panduan-tambah-halaman.blade.php`.
- Struktur folder menentukan route URL dan route name.

## Konvensi Route Name

```text
resources/views/pages/help/pemrograman/operasional/konvensi-penamaan.blade.php
-> route name: help.pemrograman.operasional.konvensi-penamaan
-> URL: /help/pemrograman/operasional/konvensi-penamaan
```

## Konvensi Key Translasi Menu

- Sumber text menu berasal dari `title` di config.
- Normalisasi key: spasi -> underscore, `&` -> `and`.
- Contoh: `Skema Error Handling & Fallback` -> `menu.skema_error_handling_and_fallback`.

## Aturan Wajib EN + ID

- Setiap title user-facing baru wajib punya key pada `lang/en/menu.php` dan `lang/id/menu.php`.
- Hindari ketergantungan fallback title mentah untuk menu utama.
- Lakukan review key agar tidak duplikat secara semantik.

## Checklist Naming Sebelum Merge

Langkah/aturan:
- Nama file Blade konsisten (kebab-case, deskriptif).
- Route name terbentuk sesuai ekspektasi (cek `route:list`).
- Title config map ke key translasi yang benar.
- Key EN dan ID tersedia dan tidak typo.
