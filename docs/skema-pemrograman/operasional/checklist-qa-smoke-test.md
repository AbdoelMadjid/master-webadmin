# Checklist QA Smoke Test

URL aplikasi: `/help/pemrograman/operasional/checklist-qa-smoke-test`

[⬅ Kembali ke README Docs](../README.md)

Checklist smoke test minimum yang wajib dilalui sebelum merge/release untuk menekan regresi.

## A. Routing dan Akses

- Halaman baru bisa diakses saat login.
- Route penting tidak menghasilkan 404/500.
- Fallback 404 tampil benar untuk URL invalid.

## B. Sidebar/Header Menu

- Menu baru tampil di posisi yang tepat.
- Active state parent/child benar (recursive).
- Perilaku desktop hover dan mobile click konsisten.

## C. Locale dan Translasi

- Switch bahasa EN/ID berjalan normal.
- Tidak ada key mentah `menu.*` yang tampil.
- Title halaman sesuai locale aktif.

## D. Asset dan UI

- Tidak ada style/layout break di desktop/mobile utama.
- Komponen interaktif tidak error di console browser.
- Build asset berhasil (`npm run build`).

## Command Checklist Cepat

> Peringatan: Jika ada perubahan config/menu/lang, lakukan verifikasi ulang setelah cache clear.
