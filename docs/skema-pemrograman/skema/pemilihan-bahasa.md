# Skema Pemilihan Bahasa

URL aplikasi: `/help/pemrograman/skema/pemilihan-bahasa`

[⬅ Kembali ke README Docs](../README.md)

Locale dipilih dari user menu, disimpan di session, lalu diterapkan oleh middleware web pada setiap request.

Tag:
- `locale default: en`
- `fallback default: en`

## Flow Bahasa dari UI ke Runtime

Langkah/aturan:
- 1. User klik English / Indonesian di user account menu.
- 2. Link menuju `route('lang.switch', '{locale}')`.
- 3. Route `/lang/{locale}` validasi whitelist locale.
- 4. Locale valid disimpan dengan `session(['locale' => $locale])`.
- 5. Redirect kembali ke halaman sebelumnya.
- 6. Middleware `SetLocale` menjalankan `App::setLocale()`.
- 7. Seluruh `__()` membaca file bahasa sesuai locale aktif.

## Titik Implementasi

- `routes/web.php`: endpoint switch locale `/lang/{locale}`.
- `app/Http/Middleware/SetLocale.php`: baca session locale dan set ke runtime.
- `bootstrap/app.php`: registrasi middleware `SetLocale` pada group `web`.
- `resources/views/partials/menus/_user-account-menu.blade.php`: UI selector bahasa.
- `config/app.php`: default locale dan fallback locale.

## Default dan Fallback

- Session kosong -> pakai `config('app.locale')` (default `en`).
- Key tidak ada -> fallback ke `config('app.fallback_locale')`.
- Jika tetap tidak ada -> key mentah bisa tampil di UI.

## Pola Translasi Menu Dinamis

- Sumber string: `lang/en/menu.php` dan `lang/id/menu.php`.
- Jika key tidak tersedia, renderer fallback ke text title asli.

## Whitelist Locale

> Peringatan: Saat menambah bahasa baru, whitelist wajib diperbarui. Jika tidak, locale baru tidak akan tersimpan.

## Tambah Bahasa Baru (contoh: ja)

- Buat `lang/ja/menu.php`.
- Update whitelist locale jadi `['en', 'id', 'ja']`.
- Tambah opsi language selector di user menu.
- Tambah key label bahasa baru pada menu translation.
- Uji perpindahan bahasa dan cek key yang belum terisi.

## Edge Cases dan Debug Checklist

- `redirect()->back()` bergantung referer; tanpa referer perilaku redirect bisa berbeda.
- File translasi yang tidak sinkron antar locale menimbulkan UI campuran bahasa.
- Cache aktif dapat membuat perubahan bahasa terlihat terlambat.

> Catatan: Checklist cepat: cek session locale -> cek middleware terpasang -> cek key translation -> clear cache.

## Standar Tim (Strict) Locale Switch

Langkah/aturan:
- **Rule wajib:** locale switch harus melalui whitelist eksplisit, tidak menerima input bebas.
- **Rule wajib:** saat menambah locale baru, update route whitelist + UI selector + file lang domain utama.
- **Rule wajib:** fallback locale harus tetap terdefinisi untuk mencegah UI kosong.
- **Rule wajib:** perubahan locale harus teruji lintas halaman dan lintas role user.

## Checklist Validasi Tambah Locale Baru

- Menu utama tertranslate penuh tanpa key mentah tampil.
- Halaman auth/error/validation tidak campur bahasa.
- Switch locale tetap konsisten setelah login/logout.
- Tidak ada overflow layout pada teks lebih panjang.
