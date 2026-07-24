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
- [Skema Notifikasi System](./skema/notification.md)
- [Skema SweetAlert2](./skema/sweetalert2.md)

## Kelompok Skema Main Menu

### App Support
- **Menu** (`/help/pemrograman/skema-main-menu/app-support/menu`): Arsitektur manajemen menu dinamis, pengurutan hirarki drag & drop, dan sync permission.
- **App Profil** (`/help/pemrograman/skema-main-menu/app-support/app-profil`): Arsitektur identitas aplikasi, manajemen logo (Utama, Kotak, Favicon), & Form Request Validation.
- **App Fitur** (`/help/pemrograman/skema-main-menu/app-support/app-fitur`): Arsitektur Feature Toggle (Feature Flags), status sakelar fitur, & helper global `isFeatureActive()`.
- **Backup DB** (`/help/pemrograman/skema-main-menu/app-support/backup-db`): Ekspor dump SQL, lokasi direktori terproteksi, restore & hapus cadangan database.
- **Data Login** (`/help/pemrograman/skema-main-menu/app-support/data-login`): Riwayat login, frekuensi login (`login_count`), reward poin, & widget user aktif 15 menit.

### Manajemen Pengguna
- **Role** (`/help/pemrograman/skema-main-menu/manajemen-pengguna/role`): Pengelolaan Role pengguna, Spatie Permission, & modal matriks CRUD tanpa scroll horizontal.
- **Permission** (`/help/pemrograman/skema-main-menu/manajemen-pengguna/permission`): Ekstraksi aksi CRUD, visualisasi badge warna-warni, dropdown filter role (opsi All), & tombol reset filter.
- **Akses Role** (`/help/pemrograman/skema-main-menu/manajemen-pengguna/akses-role`): Matriks hak akses per role, filter pencarian modul on-the-fly, kontrol toggle per baris, & sync real-time.
- **Akses User** (`/help/pemrograman/skema-main-menu/manajemen-pengguna/akses-user`): Hak akses per user, pewarisan izin Spatie (Direct vs Role), & badge Mengikuti Role.
- **User** (`/help/pemrograman/skema-main-menu/manajemen-pengguna/user`): Pengelolaan akun pengguna (CRUD), upload avatar profil, hashing password, & penugasan role.
- **Reset Password** (`/help/pemrograman/skema-main-menu/manajemen-pengguna/reset-password`): Permintaan reset password, pemicuan Notifikasi Peringatan Header & Red Badge Counter, serta reset password default `Password!12345`.

## Kelompok Operasional
- [Panduan Tambah Halaman](./operasional/panduan-tambah-halaman.md)
- [Panduan Tambah Menu](./operasional/panduan-tambah-menu.md)
- [Manajemen Pengguna](./operasional/manajemen-pengguna.md)
- [App Support](./operasional/app-support.md)
- [Notifikasi System](./operasional/notification.md)
- [Konvensi Penamaan](./operasional/konvensi-penamaan.md)
- [Workflow Developer Harian](./operasional/workflow-developer-harian.md)
- [Checklist QA Smoke Test](./operasional/checklist-qa-smoke-test.md)
- [Playbook Incident Response](./operasional/playbook-incident-response.md)
