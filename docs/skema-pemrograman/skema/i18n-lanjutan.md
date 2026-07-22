# Skema i18n Lanjutan

URL aplikasi: `/help/pemrograman/skema/i18n-lanjutan`

[⬅ Kembali ke README Docs](../README.md)

Standar naming key, governance translasi, dan proses tambah bahasa baru end-to-end.

Tag:
- `stable keys`
- `domain namespace`
- `no hardcoded UI text`
- `en+id parity`
- `no missing keys`
- `domain-approved terms`

## Standar Key Translasi

- Gunakan namespace konsisten, misal `menu.*`, `auth.*`, `pages.*`.
- Hindari hardcoded text pada Blade untuk teks yang user-facing.
- Jaga key stabil; ubah value terjemahan tanpa mengubah key bila memungkinkan.

## Arsitektur i18n Saat Ini

Langkah/aturan:
- Locale disimpan di session melalui route switch bahasa.
- Label menu diresolve dari key `menu.*` berdasarkan title config.
- Jika key tidak ada, sistem fallback ke text asli title menu.
- Sumber translasi utama saat ini ada di `lang/en/menu.php` dan `lang/id/menu.php`.

## Skema File dan Domain Translasi

> Catatan: Pisahkan domain translasi agar review perubahan lebih mudah dan konflik merge lebih kecil.

## Konvensi Naming Key (Strict)

- Gunakan lowercase + underscore: `menu.skema_cache_and_deployment`.
- Nama key harus deskriptif, hindari singkatan ambigu.
- Satu key untuk satu makna; jangan reuse key untuk konteks berbeda.
- Jika string butuh variabel, gunakan placeholder konsisten (contoh `:name`, `:count`).
- Hindari key berbasis posisi UI (misal `title_1`, `label_left`).

## Workflow Tambah Bahasa Baru (End-to-End)

Langkah/aturan:
- 1. Buat folder locale baru: `lang/{locale}`.
- 2. Duplikasi baseline file dari bahasa default.
- 3. Terjemahkan per domain + review glossary istilah.
- 4. Daftarkan locale ke route switch bahasa dan opsi UI.
- 5. Uji semua menu, auth, validasi, dan halaman kritikal.
- 6. Cek fallback key hilang sebelum release.

## Contoh Governance Translasi

> Peringatan: Rename key translasi tanpa audit pemakaian bisa menyebabkan fallback diam-diam dan inkonsistensi UI.

## Fallback Strategy

- Tentukan default locale global (misal `en` atau `id`).
- Jika key tidak ada pada locale aktif, fallback ke locale default.
- Jika tetap tidak ada, tampilkan fallback aman (title asli/placeholder terkontrol).
- Catat missing key dalam log QA agar bisa ditutup sebelum release.

## QA Checklist i18n

Langkah/aturan:
- 1. Switch locale dari UI dan pastikan persist antar halaman.
- 2. Periksa menu/sidebar/header/breadcrumb sudah tertranslate.
- 3. Periksa pesan validasi, flash message, dan error pages.
- 4. Periksa teks dengan placeholder/pluralization.
- 5. Periksa layout overflow untuk string yang lebih panjang.

## Risiko Umum & Mitigasi

- **Missing key:** buat script audit key lintas locale sebelum merge.
- **Inkonstisten istilah:** gunakan glossary tim per domain bisnis.
- **UI pecah karena string panjang:** uji responsive EN/ID (dan locale baru) di mobile+desktop.
- **Campur bahasa:** larang hardcoded text pada komponen reusable.
- **Pluralization salah:** gunakan format plural bawaan framework untuk bahasa terkait.

## Standar Tim (Strict) i18n

Langkah/aturan:
- **Rule wajib:** semua key baru harus ditambahkan minimal di `en` dan `id`.
- **Rule wajib:** PR yang mengubah menu/config harus menyertakan update key translasi terkait.
- **Rule wajib:** tidak boleh merge jika audit menunjukkan missing key pada locale wajib.
- **Rule wajib:** perubahan terminology domain utama harus mendapat persetujuan product/domain owner.
- **Rule opsional:** maintain glossary per domain agar tone konsisten lintas halaman.
