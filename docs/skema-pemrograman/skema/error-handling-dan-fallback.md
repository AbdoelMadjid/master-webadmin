# Skema Error Handling dan Fallback

URL aplikasi: `/help/pemrograman/skema/error-handling-dan-fallback`

[⬅ Kembali ke README Docs](../README.md)

404 fallback sekarang, handling exception, dan halaman error custom.

Tag:
- `stability`
- `security`
- `traceability`
- `single error contract`
- `no sensitive logs`
- `mandatory postmortem`

## Tujuan Error Handling

- Menjaga aplikasi tetap memberikan response yang aman, jelas, dan bisa ditindaklanjuti.
- Memisahkan error yang diketahui (expected) vs error sistem (unexpected).
- Memastikan user experience tetap baik meskipun terjadi kegagalan.
- Menyediakan jejak observability untuk investigasi cepat (log, context, request id).

## Fallback Saat Ini di Proyek

Langkah/aturan:
- Route fallback mengarah ke halaman `pages.pages.authentication.general.error-404`.
- Fallback berada di luar middleware auth, sehingga tetap bisa tampil untuk user belum login.
- Semua URL yang tidak match route akan jatuh ke fallback ini.
- Gunakan fallback untuk kasus route tidak ditemukan, bukan untuk menyembunyikan exception aplikasi.

## Peta Error yang Harus Ditangani

```text
Layer Request:
- 404 Not Found
- 405 Method Not Allowed
- 419 Page Expired
- 429 Too Many Requests

Layer Auth/Permission:
- 401 Unauthorized
- 403 Forbidden

Layer Validation & Domain:
- 422 Validation Error
- 409 Conflict

Layer System:
- 500 Internal Error
- 503 Service Unavailable
```

## Strategi Mapping Exception -> Response

Langkah/aturan:
- Exception validasi -> response 422 + pesan field-level.
- Exception authorization -> 403 dengan pesan aman (tanpa detail sensitif).
- Exception domain (misal stok tidak cukup) -> 409/422 sesuai konteks.
- Exception sistem tak dikenal -> 500 generic + log lengkap.

> Catatan: Prinsip utama: user dapat pesan yang bisa ditindaklanjuti, tim mendapatkan log teknis yang cukup untuk investigasi.

## Standar Response Web vs API

- Standar Response Web vs API
- **API:** kembalikan JSON terstruktur konsisten (`code`, `message`, `details`, `request_id`).
- **Web:** tampilkan halaman error custom (403/404/419/500) dengan CTA kembali ke halaman aman.
- **API:** kembalikan JSON terstruktur konsisten (`code`, `message`, `details`, `request_id`).

## Contoh Kontrak Error API (Rekomendasi)

> Peringatan: Hindari mengubah format error response antar endpoint secara acak. Konsistensi kontrak penting untuk frontend/mobile client.

## Logging & Context Minimum

- Logging & Context Minimum
- `user_id` (jika ada), tenant/account id (jika multi-tenant).
- `request_id`, URL, method, status code.
- `user_id` (jika ada), tenant/account id (jika multi-tenant).

## Redaksi Pesan ke User

Langkah/aturan:
- Redaksi Pesan ke User
- Berikan langkah lanjut: retry, refresh, login ulang, atau hubungi support.
- Gunakan nada konsisten antar halaman error.
- Jika perlu, tampilkan `request_id` agar support mudah menelusuri log.

## Template Halaman Error Custom

```text
resources/views/pages/errors/
├─ 403.blade.php
├─ 404.blade.php
├─ 419.blade.php
├─ 429.blade.php
├─ 500.blade.php
└─ 503.blade.php

Isi minimum:
- kode + judul error
- penjelasan singkat aman
- tombol aksi (kembali/dashboard/login)
- request_id (opsional)
```

## Security Guardrails

- Security Guardrails
- Masking data sensitif di log (token, secret, password, nomor kartu).
- Pastikan `APP_DEBUG=false` di production.
- Masking data sensitif di log (token, secret, password, nomor kartu).

## Retry & Idempotency

- Retry & Idempotency
- Operasi kritis (pembayaran/order) butuh idempotency key untuk hindari duplikasi.
- Operasi non-kritis bisa diarahkan retry dengan backoff.
- Operasi kritis (pembayaran/order) butuh idempotency key untuk hindari duplikasi.

## SOP Incident Error (Ringkas)

Langkah/aturan:
- SOP Incident Error (Ringkas)
- 2. Triage: identifikasi route/service paling terdampak dan severity bisnis.
- 3. Mitigasi cepat: rollback, feature flag off, atau degrade mode.
- 4. Perbaikan permanen: root-cause fix + test regression.
- 5. Postmortem: dokumentasi timeline, dampak, action item, owner, dan due date.

## Checklist Review Error Handling (Pra-Release)

Langkah/aturan:
- Checklist Review Error Handling (Pra-Release)
- 2. Fallback route berfungsi dan tidak menelan exception aplikasi yang harus diperbaiki.
- 3. Semua endpoint API mengembalikan format error JSON konsisten.
- 4. Log error memuat context minimum tanpa membocorkan data sensitif.
- 5. APP_DEBUG production dipastikan nonaktif.
- 6. Skenario timeout/dependency down diuji minimal sekali sebelum release.

## Standar Tim (Strict) Error Handling

Langkah/aturan:
- Standar Tim (Strict) Error Handling
- **Rule wajib:** response 5xx ke client harus generic; detail teknis hanya di log internal.
- **Rule wajib:** setiap error log harus memiliki `request_id`, route, method, status code, dan user context (jika ada).
- **Rule wajib:** tidak boleh ada data sensitif di log (password, token, secret, PII kritikal).
- **Rule wajib:** mapping exception bisnis harus eksplisit (misal conflict -> 409, validation -> 422).
- **Rule wajib:** fallback tidak boleh dipakai untuk menutupi bug 500.
- **Rule wajib:** setiap incident Sev-1/Sev-2 wajib postmortem maksimal 2x24 jam.
- **Rule opsional:** endpoint kritikal menambahkan idempotency key dan retry policy terukur.

## Severity Matrix Operasional

> Catatan: Severity ditentukan oleh dampak bisnis dan luas pengguna terdampak, bukan hanya jenis exception.

## Format Postmortem Baku (Template)

> Peringatan: Postmortem fokus pada perbaikan sistem, bukan menyalahkan individu.
