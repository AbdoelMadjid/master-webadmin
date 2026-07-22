# Skema Layout

URL aplikasi: `/help/pemrograman/skema/layout`

[⬅ Kembali ke README Docs](../README.md)

Alur struktur layout dari base template, partial, toolbar, sampai konten halaman di Metronic Laravel.

Tag:
- `base layout`
- `shared partials`
- `page sections`
- `reuse before create`
- `minimal custom CSS`
- `mobile-safe layout`

## Flow Render Halaman

Langkah/aturan:
- 1. Route memanggil view page (contoh: `pages.help.pemrograman.skema.layout`).
- 2. Halaman mewarisi base layout dengan `@extends('layouts.index')`.
- 3. Layout utama memuat partial global: header, sidebar, footer, drawer, script.
- 4. Section halaman (`styles`, `toolbar`, `content`, `scripts`) disuntik ke slot layout.
- 5. Komponen Metronic JS mengaktivasi behavior menu, drawer, tooltip, dan widget.

## Struktur Folder Kunci

```text
resources/views/
├─ layouts/
│  ├─ index.blade.php
│  └─ partials/
│     ├─ header/
│     ├─ sidebar/
│     ├─ _toolbar.blade.php
│     └─ _footer.blade.php
├─ pages/
│  └─ ...
└─ partials/
   └─ menus/
```

## Pola Standar Halaman

> Catatan: Pola ini menjaga konsistensi breadcrumb, spacing, dan struktur visual di seluruh halaman.

## Peran Section di Layout

- `@section('styles')`: CSS khusus halaman.
- `@section('toolbar')`: breadcrumb, title konteks, action button.
- `@section('content')`: isi utama halaman.
- `@section('scripts')`: JS vendor/custom khusus halaman.

> Peringatan: Hindari menaruh script berat global di semua halaman jika hanya dipakai satu halaman.

## Checklist Saat Membuat Layout/Page Baru

- Pilih base layout yang tepat (umumnya `layouts.index`).
- Pastikan section `toolbar` dan `content` terdefinisi dengan jelas.
- Gunakan partial yang sudah ada sebelum membuat markup baru.
- Tambahkan styles/scripts hanya bila dibutuhkan halaman tersebut.
- Uji di desktop dan mobile untuk memastikan sidebar/header/drawer tetap sinkron.

## Anti-Pattern Layout

- Menaruh logika bisnis di view/layout.
- Mengcopy-paste blok header/sidebar alih-alih memanggil partial.
- Menggunakan CSS inline berlebihan untuk override cepat tanpa dokumentasi.
- Memuat semua JS plugin di global layout meski dipakai sedikit halaman.

## Standar Tim (Strict) Layout

Langkah/aturan:
- **Rule wajib:** halaman baru harus meng-extend `layouts.index` kecuali ada alasan arsitektural.
- **Rule wajib:** section `toolbar` dan `content` harus eksplisit.
- **Rule wajib:** reusable markup diekstrak ke partial/component setelah dipakai berulang.
- **Rule wajib:** perubahan layout global wajib diuji minimal 3 halaman berbeda.
