# Skema Theme Assets

URL aplikasi: `/help/pemrograman/skema/theme-assets`

[⬅ Kembali ke README Docs](../README.md)

Tag:
- `global first`
- `page assets last`
- `load order`
- `dependency safety`
- `performance aware`

## Urutan Load di Base Layout

Langkah/aturan:
- 1. `@yield('styles')` untuk CSS vendor khusus halaman.
- 2. Global CSS wajib: `assets/plugins/global/plugins.bundle.css`.
- 3. Theme CSS wajib: `assets/css/style.bundle.css`.
- 4. Di footer: Global JS wajib `plugins.bundle.js` lalu `scripts.bundle.js`.
- 5. Terakhir `@yield('scripts')` untuk JS page-specific.

## Contoh Nyata di `layouts/index.blade.php`

```html
<!-- head -->
@yield('styles')
<link href="assets/plugins/global/plugins.bundle.css" ... />
<link href="assets/css/style.bundle.css" ... />

<!-- before closing body -->
<script src="assets/plugins/global/plugins.bundle.js"></script>
<script src="assets/js/scripts.bundle.js"></script>
@yield('scripts')
```

## Standar Resolver Asset di Blade

- `ThemeAsset::url()` untuk file asset tema (css/js/media).
- `url()`/`route()` untuk URL halaman (navigasi).
- Jangan hardcode `/assets` atau `/assets-vN` di Blade.

## Pola Asset per Halaman

- Halaman bisa menambah CSS khusus via `@section('styles')`.
- Halaman bisa menambah JS khusus via `@section('scripts')`.
- Contoh dashboard memuat plugin tambahan: fullcalendar, datatables, widget scripts.
- Asset custom berat jangan dimasukkan global jika hanya dipakai satu-dua halaman.

> Catatan: Prinsip utama: global asset untuk fondasi UI, page-specific asset untuk kebutuhan fitur halaman.

## Mode Theme dan Data Attribute

- `partials.theme-mode._init` inisialisasi mode theme.
- `data-kt-app-layout` dan atribut turunan di body mengontrol mode layout (dark-sidebar, light-header, dll).
- Layout mode mempengaruhi struktur visual dan behavior JS komponen Metronic.

> Peringatan: Perubahan atribut layout di body tanpa sinkronisasi asset/script dapat menimbulkan anomali UI.

## Checklist Saat Menambah Asset Baru

- Tentukan asset itu global atau page-specific.
- Pastikan dependency order benar (plugin sebelum script pemanggil).
- Hindari duplikasi load file yang sama di global dan page-specific.
- Uji performa awal halaman (first render) setelah penambahan asset.
- Jika ada build/caching, dokumentasikan command dan clear cache yang diperlukan.

## Standar Tim (Strict) Theme Assets

Langkah/aturan:
- **Rule wajib:** plugin baru harus dicatat dependency chain-nya (CSS/JS urutan load).
- **Rule wajib:** asset page-specific tidak boleh dimasukkan global tanpa alasan performa yang jelas.
- **Rule wajib:** duplikasi file asset lintas section harus dihilangkan sebelum merge.
- **Rule wajib:** setiap perubahan asset wajib dites desktop + mobile.

## Troubleshooting Asset

- **UI berantakan:** cek urutan CSS dan apakah file global theme termuat.
- **Komponen JS mati:** cek urutan load plugin -> scripts bundle -> page script.
- **Perubahan style tidak terlihat:** cek cache browser dan cache view/framework.
- **Error plugin undefined:** pastikan vendor file tersedia dan path benar.
