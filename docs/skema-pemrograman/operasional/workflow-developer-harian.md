# Workflow Developer Harian

URL aplikasi: `/help/pemrograman/operasional/workflow-developer-harian`

[⬅ Kembali ke README Docs](../README.md)

Alur kerja harian developer untuk proyek Metronic Laravel ini: mulai setup, development loop, quality gate, hingga release readiness.

## 1) Start of Day

- Pull perubahan terbaru branch kerja.
- Pastikan dependency sinkron (`composer install`, `npm install` jika perlu).
- Pastikan environment siap (`.env`, DB, cache).

## 2) Development Loop

- Ubah Blade/config sesuai scope task.
- Gunakan route otomatis dari `resources/views/pages`.
- Cek active state menu di desktop dan mobile.

## 3) Quality Gate Lokal

> Catatan: Jalankan clear cache saat ada perubahan route/config/lang agar hasil verifikasi akurat.

## 4) Documentation Sync

- Jika menambah halaman/menu baru, update dokumen help terkait.
- Pastikan key translasi EN + ID tersedia.
- Validasi helper title tidak fallback ke teks mentah.

## Definition of Done (Praktis)

Langkah/aturan:
- Perubahan berfungsi sesuai acceptance criteria.
- Route/menu/title/translasi tervalidasi.
- Smoke test inti lulus tanpa regresi terlihat.
- Catatan perubahan dan dampak deploy sudah jelas.
