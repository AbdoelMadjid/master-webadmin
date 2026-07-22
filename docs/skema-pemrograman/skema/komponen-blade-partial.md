# Skema Komponen Blade dan Partial

URL aplikasi: `/help/pemrograman/skema/komponen-blade-partial`

[⬅ Kembali ke README Docs](../README.md)

Konvensi include/extend/component, serta panduan kapan menggunakan partial vs component.

Tag:
- `inheritance`
- `reuse`
- `maintainable views`
- `max 7 props`
- `max 2 named slots`
- `no query in partial`

## Pola Utama Blade

- `@extends` untuk pewarisan layout utama.
- `@include` untuk potongan markup statis/sederhana.
- `@component` untuk unit UI yang punya slot/parameter.
- `<x-...>` untuk reusable component berbasis class/anonymous.

## Decision Matrix: Partial vs Component

Langkah/aturan:
- Pakai `partial` jika tampilannya sederhana, context sudah tersedia dari parent, dan tidak perlu kontrak API.
- Pakai `component` jika butuh `props`, `slot`, validasi input, dan dipakai lintas domain halaman.
- Jika mulai banyak parameter optional di partial, refactor jadi component.
- Jika component hanya dipakai sekali dan tanpa variasi, pertimbangkan turunkan jadi partial.

## Skema Folder yang Direkomendasikan

> Catatan: Bedakan `layouts/partials` (fragmen layout global) dengan `components` (unit reusable berkontrak API/props).

## Contoh: Partial Sederhana

- Cocok untuk blok statis berulang (toolbar, breadcrumb kecil, hint text).
- Jangan menaruh business logic berat di partial.

## Contoh: Component Reusable

```blade
{{-- resources/views/components/ui/info-card.blade.php --}}
@props(['title', 'icon' => 'ki-abstract-26'])

<div class="card card-flush">
  <div class="card-body">
    <i class="ki-duotone {{ $icon }} fs-2hx"></i>
    <h3>{{ $title }}</h3>
    {{ $slot }}
  </div>
</div>

{{-- usage --}}
<x-ui.info-card title="Skema Route" icon="ki-route">
  Alur dari URL ke Blade view.
</x-ui.info-card>
```

## Konvensi Naming

- Partial: awali underscore untuk internal-only, misal `_toolbar.blade.php`.
- Component: nama domain + fungsi, misal `ui/info-card.blade.php`.
- Nama props gunakan bahasa domain (`title`, `badge`, `isActive`), hindari nama generik ambigu.
- Jika ada translasi, kirim text final dari caller atau kirim key secara konsisten.

## Anti-Pattern yang Perlu Dihindari

- Component “god object” dengan terlalu banyak props optional.
- Partial yang mengakses data query langsung.
- Markup duplikat lintas halaman karena enggan ekstraksi.
- Pencampuran concern: style/script spesifik halaman dimasukkan ke partial global.

> Peringatan: Jika satu partial dipakai >3 lokasi dengan variasi berbeda, itu sinyal kuat untuk migrasi ke component.

## Checklist Saat Menambah UI Baru

Langkah/aturan:
- 1. Cek dulu apakah sudah ada partial/component serupa yang bisa dipakai ulang.
- 2. Tentukan tipe: partial atau component berdasarkan decision matrix.
- 3. Definisikan kontrak input jelas (props/slot/default value).
- 4. Pastikan kompatibel mobile dan sesuai utility class Metronic.
- 5. Review duplikasi markup dan konsistensi translasi sebelum merge.

## Standar Tim (Strict)

Langkah/aturan:
- **Rule wajib:** component reusable harus punya kontrak `@props` yang jelas, default value aman, dan nama props berbasis domain.
- **Rule wajib:** maksimal `7 props` per component. Jika lebih, pecah jadi sub-component atau gunakan data object terstruktur.
- **Rule wajib:** maksimal `2 named slots` + default slot. Lebih dari itu biasanya menandakan component terlalu kompleks.
- **Rule wajib:** partial tidak boleh melakukan query data atau logic bisnis.
- **Rule opsional:** gunakan class-based component jika butuh normalisasi data/formatting sebelum render.
- **Rule opsional:** tambahkan docblock singkat di atas component untuk menjelaskan props penting dan contoh penggunaan.

## Boilerplate Component Standar

```blade
{{-- resources/views/components/ui/stat-card.blade.php --}}
@props([
  'title',
  'value',
  'icon' => 'ki-chart-simple',
  'color' => 'primary',
  'subtitle' => null,
  'badge' => null,
  'href' => null,
])
```

## Boilerplate Usage

> Catatan: Jika kebutuhan tampilan berbeda jauh, buat varian component baru. Hindari menambah props berlebihan hanya untuk menjaga satu component tetap dipakai semua kasus.
