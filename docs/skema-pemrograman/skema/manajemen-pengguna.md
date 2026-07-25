# Skema Manajemen Pengguna

URL aplikasi: `/help/pemrograman/skema/manajemen-pengguna`

[⬅ Kembali ke README Docs](../README.md)

Arsitektur dan sistem pengelolaan pengguna, role, permission, otorisasi Spatie, serta mekanisme reset password.

Tag:
- `user management`
- `spatie permissions`
- `role-based access control`
- `direct permissions`
- `reset password flow`
- `single route multi-tab`

## Overview Sub-Tab

Fitur **Skema Manajemen Pengguna** berjalan di atas rute tunggal `/help/pemrograman/skema/manajemen-pengguna` menggunakan query parameter `?tab=...` untuk merender sub-tab berikut:

### 1. User (`?tab=user`)
- **Arsitektur**: Pengelolaan akun pengguna (CRUD) berbasis Eloquent Model `App\Models\User`.
- **Fitur Utama**: Penanganan upload avatar profil, hashing password aman (`Hash::make`), penugasan Spatie Role (`assignRole`), approval pendaftaran pengguna baru, serta fitur impersonasi user.

### 2. Role (`?tab=role`)
- **Arsitektur**: Pengelolaan Role pengguna berbasis Spatie Permission (`App\Models\Role`).
- **Fitur Utama**: Pembuatan dan pembaruan Role, penugasan matriks permission, serta antarmuka modal CRUD tanpa scroll horizontal untuk kenyamanan UX.

### 3. Permission (`?tab=permission`)
- **Arsitektur**: Ekstraksi aksi CRUD dan daftar permission sistem.
- **Fitur Utama**: Visualisasi badge warna-warni untuk setiap jenis aksi (Create, Read, Update, Delete), dropdown filter role (termasuk opsi All), dan tombol reset filter instant.

### 4. Akses Role (`?tab=akses-role`)
- **Arsitektur**: Matriks hak akses per role secara menyeluruh.
- **Fitur Utama**: Filter pencarian nama modul/fitur on-the-fly, sakelar toggle kontrol akses per baris, dan penyesuaian/sinkronisasi izin real-time via AJAX.

### 5. Akses User (`?tab=akses-user`)
- **Arsitektur**: Otorisasi spesifik per akun pengguna.
- **Fitur Utama**: Membedakan pewarisan izin Spatie antara *Direct Permissions* (izin khusus user) dan *Role Permissions* (izin bawaan role), dilengkapi indikator badge status *Mengikuti Role*.

### 6. Reset Password (`?tab=reset-password`)
- **Arsitektur**: Penanganan klaim dan eksekusi reset password pengguna.
- **Fitur Utama**: Alur permintaan reset password dari halaman `/forgot-password`, pemicuan Notifikasi Peringatan Header & Red Badge Counter, serta reset password pengguna ke nilai default (`Password!12345`).
