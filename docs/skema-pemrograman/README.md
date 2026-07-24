# Dokumentasi Skema Pemrograman

Versi ringkas per submenu dari menu **Skema Pemrograman**.

[⬅ Kembali ke README Utama](../../README.md)

## Kelompok Skema
- [Skema Route](./skema/route.md)
- [Skema Layout](./skema/layout.md)
- [Skema Komponen Blade dan Partial](./skema/komponen-blade-partial.md)
- [Skema Theme Assets](./skema/theme-assets.md)
- [Skema Auth dan Middleware](./skema/auth-dan-middleware.md)
- [Skema Struktur Config Menu](./skema/struktur-config-menu.md)
- [Skema Sidebar Menu](./skema/sidebar-menu.md)
- [Skema Header Menu](./skema/header-menu.md)
- [Skema Data Layer](./skema/data-layer.md)
- [Skema Error Handling dan Fallback](./skema/error-handling-dan-fallback.md)
- [Skema Cache dan Deployment](./skema/cache-dan-deployment.md)
- [Skema Pemilihan Bahasa](./skema/pemilihan-bahasa.md)
- [Skema i18n Lanjutan](./skema/i18n-lanjutan.md)
- **Manajemen Pengguna** (`/help/pemrograman/skema-main-menu/manajemen-pengguna`):
  - **Role**: Pengelolaan Role pengguna, Spatie Permission, & modal matriks CRUD tanpa scroll horizontal.
  - **Permission**: Ekstraksi aksi CRUD, visualisasi badge warna-warni, dropdown filter role (opsi All), & tombol reset filter.
  - **Akses Role**: Matriks hak akses per role, filter pencarian modul on-the-fly, kontrol toggle per baris, & sync real-time.
  - **Akses User**: Hak akses per user, pewarisan izin Spatie (Direct vs Role), & badge Mengikuti Role.
  - **User**: Pengelolaan akun pengguna (CRUD), upload avatar profil, hashing password, & penugasan role.
  - **Reset Password**: Permintaan reset password, pemicuan Notifikasi Peringatan Header & Red Badge Counter, serta reset password default `Password!12345`.
- **App Support** (`/help/pemrograman/skema-main-menu/app-support`):
  - **Menu**: Arsitektur manajemen menu dinamis, pengurutan hirarki drag & drop, dan sync permission.
  - **App Profil**: Arsitektur identitas aplikasi, manajemen logo (Utama, Kotak, Favicon), & Form Request Validation.
  - **App Fitur**: Arsitektur Feature Toggle (Feature Flags), status sakelar fitur, & helper global `isFeatureActive()`.
  - **Backup DB**: Ekspor dump SQL, lokasi direktori terproteksi, restore & hapus cadangan database.
  - **Data Login**: Riwayat login, frekuensi login (`login_count`), reward poin, & widget user aktif 15 menit.
- [Skema Notifikasi System](./skema/notification.md)
- [Skema SweetAlert2](./skema/sweetalert2.md)

## Kelompok Operasional
- [Panduan Tambah Halaman](./operasional/panduan-tambah-halaman.md)
- [Panduan Tambah Menu](./operasional/panduan-tambah-menu.md)
- [Manajemen Pengguna](./operasional/manajemen-pengguna.md) (`/help/pemrograman/operasional/manajemen-pengguna`):
  - **Role** (`?tab=role`): Pembuatan dan pembaruan Role pengguna serta penugasan matriks Spatie Permission.
  - **Permission** (`?tab=permission`): Manajemen daftar permission, filter role dropdown, dan reset filter.
  - **Akses Role** (`?tab=akses-role`): Penyesuaian matriks hak akses per role secara real-time.
  - **Akses User** (`?tab=akses-user`): Pengaturan izin khusus per user (Direct vs Role Permissions).
  - **User** (`?tab=user`): CRUD user, upload avatar, impersonasi user, approval pendaftaran user baru, dan impor Excel.
  - **Reset Password** (`?tab=reset-password`): Pengolahan klaim reset password dari pengguna dan eksekusi reset ke password default.
- [App Support](./operasional/app-support.md) (`/help/pemrograman/operasional/app-support`):
  - **Menu Dinamis** (`?tab=menu`): Pengurutan hirarki menu via drag & drop dan toggle status menu.
  - **App Profil** (`?tab=app-profil`): Pembaruan identitas aplikasi (nama, deskripsi, copyright) dan upload logo/favicon.
  - **App Fitur** (`?tab=app-fitur`): Feature Toggle untuk mengaktifkan/nonaktifkan modul global aplikasi.
  - **Backup DB** (`?tab=backup-db`): Ekspor dump SQL, pengunduhan file backup, restore DB, dan pembersihan cadangan.
  - **Data Login** (`?tab=data-login`): Pemantauan riwayat login pengguna (IP & browser agent) dan pembersihan log login.
- [Notifikasi System](./operasional/notification.md)
- [Konvensi Penamaan](./operasional/konvensi-penamaan.md)
- [Workflow Developer Harian](./operasional/workflow-developer-harian.md)
- [Checklist QA Smoke Test](./operasional/checklist-qa-smoke-test.md)
- [Playbook Incident Response](./operasional/playbook-incident-response.md)
