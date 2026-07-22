# Skema Auth dan Middleware

URL aplikasi: `/help/pemrograman/skema/auth-dan-middleware`

[⬅ Kembali ke README Docs](../README.md)

Pondasi keamanan proyek: route auth bawaan Laravel + proteksi middleware + middleware custom locale.

Tag:
- `source: routes/auth.php`
- `auth`
- `verified`
- `signed`
- `throttle`

## Flow Login dan Akses Halaman

Langkah/aturan:
- 1. Guest akses `/login` (dari `routes/auth.php`).
- 2. Submit login ke `POST /login`.
- 3. Jika sukses, session auth aktif dan user diarahkan ke halaman aplikasi.
- 4. Route protected (dashboard/menu pages) hanya bisa dibuka jika lolos middleware `auth`.
- 5. Route tertentu juga pakai `verified` untuk email verification.

## Peta Route Auth Penting

```text
guest middleware:
- GET  /login
- POST /login
- GET  /register
- POST /register
- forgot/reset password routes

auth middleware:
- GET  /verify-email
- POST /email/verification-notification
- PUT  /password
- POST /logout
```

## Proteksi Route di Proyek

- `/dashboard` memakai middleware `auth` + `verified`.
- Semua route generator di `routes/menu.php` dibungkus middleware `auth`.
- Profile management di `routes/web.php` juga ada dalam group `auth`.
- Fallback 404 ditempatkan di luar auth agar respons error tetap konsisten.

> Catatan: Dampak: user belum login tidak bisa akses halaman konten internal di bawah `resources/views/pages`.

## Middleware Custom: SetLocale

> Peringatan: Middleware ini berjalan di group `web`, jadi seluruh request web otomatis mengikuti locale session.

## Checklist Security Minimum

- Pastikan route sensitif selalu berada di middleware `auth`.
- Untuk area kritikal, tambahkan `verified` atau middleware tambahan lain sesuai kebutuhan.
- Gunakan `signed` dan `throttle` seperti pada route verifikasi email.
- Validasi redirect dan guard flow saat login/logout agar tidak ada open redirect.
- Uji skenario guest vs authenticated untuk setiap halaman blueprint baru.

## Matrix Middleware (Praktis)

```text
Public:
- landing, login, register, forgot password

Authenticated:
- dashboard, pages/*, profile/*

Authenticated + Verified:
- fitur yang butuh email terverifikasi

Signed/Throttle:
- verification link, resend verification
```

## Standar Tim (Strict) Auth

Langkah/aturan:
- **Rule wajib:** route baru harus diklasifikasikan jelas: public vs auth vs auth+verified.
- **Rule wajib:** endpoint sensitif harus punya throttle jika rawan abuse.
- **Rule wajib:** tidak boleh expose detail autentikasi internal pada pesan error user.
- **Rule wajib:** setiap perubahan auth flow harus diuji guest, user valid, dan user tanpa verifikasi.
