# Skema Cache dan Deployment

URL aplikasi: `/help/pemrograman/skema/cache-dan-deployment`

[⬅ Kembali ke README Docs](../README.md)

`config:cache`, `route:cache`, `view:cache`, kapan clear cache, dan checklist release.

Tag:
- `performance`
- `stability`
- `repeatable release`
- `diagnose first`
- `targeted clear`
- `verify after change`
- `pipeline only`
- `2-party approval`
- `time-window enforced`
- `rollback mandatory`

## Tujuan Cache & Deployment

- Meningkatkan performa startup framework dan response time.
- Mengurangi risiko human error saat release.
- Menjaga deployment konsisten, repeatable, dan mudah rollback.
- Membedakan kapan perlu regenerate cache dan kapan perlu clear cache total.

## Jenis Cache yang Relevan

```text
1) Config cache
- Command: php artisan config:cache
- Efek: gabungkan config jadi 1 cache file

2) Route cache
- Command: php artisan route:cache
- Efek: percepat registrasi route (tanpa closure)

3) View cache
- Command: php artisan view:cache
- Efek: precompile Blade

4) Event cache (opsional)
- Command: php artisan event:cache
```

## Strategi Command Cache (Kapan Dipakai)

Langkah/aturan:
- `php artisan config:cache`: jalankan setiap release setelah update konfigurasi/aplikasi.
- `php artisan route:cache`: jalankan jika seluruh route kompatibel cache (tanpa closure).
- `php artisan view:cache`: jalankan untuk mempercepat first-hit Blade.
- `php artisan optimize:clear`: gunakan hanya saat troubleshooting cache stale atau sebelum regenerate penuh.
- Urutan aman: clear seperlunya -> regenerate cache -> smoke test.

## Runbook Deployment (Minim Risiko)

> Catatan: Jika memakai supervisor/horizon/queue worker, pastikan worker membaca code terbaru setelah deploy.

## Kapan Harus Clear Cache

- Perubahan config tidak terbaca meski file sudah update.
- Route baru tidak muncul atau route lama masih dipakai.
- Tampilan Blade lama masih tampil setelah deploy.
- Issue anomali setelah rollback/forward deployment.

## Kapan Jangan Clear Semua

- Saat sistem stabil dan tidak ada indikasi stale cache.
- Saat incident aktif tanpa hipotesis jelas terkait cache.
- Saat traffic puncak, kecuali mitigasi benar-benar memerlukan.
- Gunakan pendekatan targeted dulu sebelum clear total.

> Peringatan: Clear total secara impulsif bisa menambah load startup dan memperpanjang waktu recovery.

## Checklist Pra-Release

Langkah/aturan:
- 1. Pastikan branch release sudah freeze dan tervalidasi QA.
- 2. Verifikasi migration aman dan punya rollback plan.
- 3. Verifikasi route kompatibel untuk `route:cache`.
- 4. Siapkan maintenance message/feature flag jika perlu.
- 5. Tentukan PIC deploy, PIC verifikasi, dan PIC komunikasi.

## Checklist Pasca-Release

Langkah/aturan:
- 1. Smoke test login, dashboard, transaksi utama, dan halaman error.
- 2. Pantau metrik: error rate 4xx/5xx, latency, queue backlog.
- 3. Pantau log aplikasi 10-30 menit pertama.
- 4. Validasi worker/cron berjalan dengan code terbaru.
- 5. Kirim status release selesai ke stakeholder.

## Rollback Plan (Wajib Ada)

```text
Trigger rollback jika:
- error rate naik signifikan
- fitur kritikal gagal
- data integrity berisiko

Langkah rollback:
1) Rollback code ke release stabil terakhir
2) Clear/regenerate cache sesuai versi rollback
3) Restart queue worker/service
4) Jalankan smoke test minimal
5) Komunikasikan status rollback + next action
```

## Troubleshooting Cepat Cache

- **Config tidak berubah:** cek `.env` dan jalankan `config:cache` ulang.
- **Route error setelah cache:** cari route closure, ubah ke controller action, lalu cache ulang.
- **View lama masih tampil:** jalankan `view:clear` lalu `view:cache`.
- **Queue pakai code lama:** jalankan `queue:restart` dan cek supervisor status.

## Standar Tim (Strict) Cache & Deployment

Langkah/aturan:
- **Rule wajib:** deployment production hanya melalui pipeline/skrip baku, bukan command manual acak.
- **Rule wajib:** urutan command harus mengikuti runbook resmi tanpa skip step.
- **Rule wajib:** migration membutuhkan approval gate minimal 2 pihak (PIC release + PIC data/tech lead).
- **Rule wajib:** setiap release harus punya rollback plan terdokumentasi sebelum eksekusi.
- **Rule wajib:** release di luar time-window hanya boleh untuk emergency dengan approval incident commander.
- **Rule wajib:** post-release smoke test dan observability check harus selesai sebelum status “done”.
- **Rule opsional:** gunakan canary/blue-green untuk fitur berisiko tinggi.

## Urutan Command Baku (Production)

> Catatan: Jika salah satu step gagal, proses berhenti dan status release berubah menjadi failed untuk mencegah partial deploy.

## Approval Gate Sebelum Migrate

- Checklist migration impact (tabel besar, lock risk, durasi estimasi).
- Konfirmasi backup/restore readiness.
- Konfirmasi kompatibilitas aplikasi saat transisi skema.
- PIC release dan PIC data menandatangani approval.

> Peringatan: Tanpa approval gate, migration production tidak boleh dieksekusi.

## Aturan Time-Window Deploy

- Deploy reguler hanya pada jam operasi yang disepakati tim.
- Hindari deploy saat puncak trafik bisnis.
- Freeze window diberlakukan saat event bisnis kritikal.
- Emergency deploy di luar window wajib status incident + approval IC.

## Gate Release (Pass/Fail)

Langkah/aturan:
- Gate 1 - Preflight: semua dependency/build lulus.
- Gate 2 - Migration: approval lengkap dan migration sukses tanpa error.
- Gate 3 - Cache: config/route/view cache regenerate sukses.
- Gate 4 - Runtime: worker restart sukses dan health check hijau.
- Gate 5 - Post-check: smoke test endpoint kritikal lolos.
- Jika salah satu gate fail, lakukan rollback sesuai runbook.
