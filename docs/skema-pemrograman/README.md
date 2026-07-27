# 📚 Dokumentasi Skema & Operasional Pemrograman Internal

Versi dokumentasi terlengkap per modul & submenu dari aplikasi **Master WebAdmin** (berbasis `/help/pemrograman/...`).

[⬅ Kembali ke README Utama](../../README.md)

---

## 🏗️ Kelompok Skema Pemrograman (`/help/pemrograman/skema/...`)

- [Skema Route](./skema/route.md) (`/help/pemrograman/skema/route`): Pemetaan rute otomatis, keselarasan 4-layer MVC (Structure Mirroring), & hybrid routing.
- [Skema Layout](./skema/layout.md) (`/help/pemrograman/skema/layout`): Base Metronic 8 layout, Dark/Light mode switcher, & komponen partial UI.
- [Skema Komponen Blade dan Partial](./skema/komponen-blade-partial.md): Reusable Blade view partials (`_toolbar`, `_header`, `_sidebar`, `_footer`).
- [Skema Theme Assets](./skema/theme-assets.md): Manajemen pustaka CSS/JS Metronic 8 & Keenicons duotone icons.
- [Skema Auth dan Middleware](./skema/auth-dan-middleware.md): Otentikasi Laravel Breeze, Session Idle Timeout (`_idle-timer.blade.php`), Fitur **Kunci Layar (Lock Screen)** pada dropdown avatar, & Proteksi **Rate Limiting (`throttle`)** pada endpoint sensitif (login, reset password, backup & restore database).
- [Skema Struktur Config Menu](./skema/struktur-config-menu.md): Konfigurasi terpusat menu sidebar & header.
- [Skema Sidebar Menu](./skema/sidebar-menu.md): Hirarki menu navigasi samping, badge dinamis, & active highlight state.
- [Skema Header Menu](./skema/header-menu.md): Hirarki menu navigasi atas & switcher pemilihan bahasa.
- [Skema Data Layer](./skema/data-layer.md): Integrasi Eloquent ORM, Yajra DataTables, Form Request Validation, & Spatie Permission.
- [Skema Error Handling dan Fallback](./skema/error-handling-dan-fallback.md): Penanganan exception, SwalHelper 422 XHR parser, & HTTP error pages.
- [Skema Cache dan Deployment](./skema/cache-dan-deployment.md): Manajemen cache aplikasi, `optimize:clear`, & deployment production.
- [Skema Pemilihan Bahasa](./skema/pemilihan-bahasa.md): Dukungan **100% Bilingual (`en`/`id`)** dengan switcher `/lang/{locale}` & zero mixed text.
- [Skema i18n Lanjutan](./skema/i18n-lanjutan.md): Pemetaan kamus translasi `lang/en` & `lang/id`.
- [Manajemen Pengguna](./skema/manajemen-pengguna.md) (`/help/pemrograman/skema/manajemen-pengguna`):
  - **Role**: Pengelolaan Role pengguna, Spatie Permission, & modal matriks CRUD.
  - **Permission**: Ekstraksi aksi CRUD, visualisasi badge warna, filter role, & reset filter.
  - **Akses Role**: Matriks hak akses per role, filter pencarian modul, & sync real-time.
  - **Akses User**: Hak akses khusus per user (Direct vs Role Permissions).
  - **User**: CRUD pengguna, upload avatar profil, hashing password, & approval workflow pendaftaran.
  - **Reset Password**: Pengajuan reset password pengguna, pemicuan notifikasi header & badge counter, serta reset password default `Password!12345`.
- [App Support](./skema/app-support.md) (`/help/pemrograman/skema/app-support`):
  - **Menu**: Manajemen menu dinamis, pengurutan drag & drop, & sync permission.
  - **App Profil**: Identitas aplikasi terpusat (Logo Utama, Logo Kotak, Favicon) & metadata.
  - **App Fitur**: Arsitektur Feature Toggle (Feature Flags) & helper `isFeatureActive()`.
  - **Data Referensi**: Master data referensi acuan standar (Kategori & Item pilihan) penyuplai dropdown dinamis.
  - **Backup DB**: Engine backup database SQL, lokasi direktori terproteksi (`storage/app/backups`), **Automated Scheduled Backup** (`php artisan backup:db` harian 01:00 AM), restore DB, & **Proteksi Rate Limiting (`throttle:3,1`)**.
  - **Data Login & Audit Trail**: Architecture Multi-Tab Audit Trail:
    - *Tab 1 (`login-log`)*: Log sesi login user, IP address, user agent, & geolokasi Google Maps.
    - *Tab 2 (`activity-log`)*: Audit mutasi data model (`spatie/laravel-activitylog` + `LogsActivityTrait`), filter event, filter pengguna pelaksana (*causer user*), & modal inspector diff perbandingan nilai lama vs baru.
- [Skema Notifikasi System](./skema/notification.md): Notifikasi lonceng header real-time, counter badge merah, & pengolahan permintaan reset password.
- [Skema SweetAlert2](./skema/sweetalert2.md): Centralized helper `SwalHelper` (`success`, `error`, `validationError`, `confirmDelete`).

---

## 🛠️ Kelompok Operasional Pemrograman (`/help/pemrograman/operasional/...`)

- [Panduan Tambah Halaman](./operasional/panduan-tambah-halaman.md): Langkah membuat halaman baru dengan metodologi Structure Mirroring + **Integrasi Otomatis Audit Trail (`LogsActivityTrait`)**.
- [Panduan Tambah Menu](./operasional/panduan-tambah-menu.md): Penambahan item menu baru di `config/sidebar/` & `config/header/`.
- [Manajemen Pengguna](./operasional/manajemen-pengguna.md) (`/help/pemrograman/operasional/manajemen-pengguna`):
  - **Role** (`?tab=role`): Operasional penugasan matriks Spatie Permission per role.
  - **Permission** (`?tab=permission`): Operasional manajemen daftar permission & filter role.
  - **Akses Role** (`?tab=akses-role`): Penyesuaian hak akses role secara instant.
  - **Akses User** (`?tab=akses-user`): Penyesuaian hak akses direct per user.
  - **User** (`?tab=user`): CRUD user, upload avatar, impersonasi user aman, approval pendaftaran user baru, & impor Excel.
  - **Reset Password** (`?tab=reset-password`): Pengolahan klaim reset password dari pengguna & eksekusi reset.
- [App Support](./operasional/app-support.md) (`/help/pemrograman/operasional/app-support`):
  - **Menu Dinamis** (`?tab=menu`): Pengurutan hirarki menu via drag & drop.
  - **App Profil** (`?tab=app-profil`): Pembaruan identitas aplikasi & upload logo.
  - **App Fitur** (`?tab=app-fitur`): Feature Toggle untuk mengaktifkan/nonaktifkan modul global.
  - **Data Referensi** (`?tab=referensi`): Kelola kelompok kategori acuan & item pilihan dropdown.
  - **Backup DB** (`?tab=backup-db`): Operasional pemuatan backup SQL, restore database, & scheduled backup CLI.
  - **Data Login & Audit Trail** (`?tab=data-login`): Operasional pemantauan sesi login user (`?tab=login-log`) dan pemantauan audit mutasi data model (`?tab=activity-log`) beserta penilik diff & filter pengguna pelaksana.
- [Notifikasi System](./operasional/notification.md): Pemrosesan klaim reset password dari notifikasi header.
- [Konvensi Penamaan](./operasional/konvensi-penamaan.md): Standar penamaan file, class, route, & database.
- [Workflow Developer Harian](./operasional/workflow-developer-harian.md): Workflow harian pengembangan fitur & verifikasi code.
- [Checklist QA Smoke Test](./operasional/checklist-qa-smoke-test.md): Checklist pengujian QA sebelum rilis.
- [Playbook Incident Response](./operasional/playbook-incident-response.md): Prosedur penanganan insiden & pemulihan darurat.
- [Rilis Versi & Git Tagging](./operasional/rilis-versi-dan-git-tagging.md) (`/help/pemrograman/operasional/rilis-versi-dan-git-tagging`): Standar Semantic Versioning (SemVer), alur perintah CLI Git Tag, force update tag (`git tag -f`), dan panduan publikasi Rilis GitHub.
