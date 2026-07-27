# 🚀 Master WebAdmin - Laravel 12 & Metronic 8.3.2

[![Laravel](https://img.shields.io/badge/Laravel-12.0-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-^8.2-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![Metronic](https://img.shields.io/badge/Metronic-8.3.2-009EF7?style=for-the-badge&logo=bootstrap&logoColor=white)](https://keenthemes.com/metronic)
[![License](https://img.shields.io/badge/License-MIT-green.svg?style=for-the-badge)](LICENSE)
[![Status](https://img.shields.io/badge/Status-Production--Ready-brightgreen?style=for-the-badge)](https://github.com/AbdoelMadjid/master-webadmin)

Sistem Dashboard Administrasi Enterprise tingkat tinggi berbasis **Laravel 12.0** dan Template Premium **Metronic 8.3.2**. Dirancang menggunakan metodologi **Structure Mirroring** (keselarasan 4-layer MVC), arsitektur **RBAC Granular**, **Audit Trail Mutasi Data**, **Scheduled Database Backup**, dan **Proteksi Rate Limiting**.

---

<a id="table-of-contents"></a>
## 📋 Table of Contents

- [⚙️ Persyaratan Sistem](#persyaratan-sistem)
- [🚀 Tahapan & Ceklis Pengembangan Project (Development Roadmap)](#development-roadmap)
- [🌟 Fitur Utama Aplikasi](#fitur-utama)
- [🛠️ Panduan Instalasi Cepat](#panduan-instalasi)
- [🔑 Akun Login Bawaan](#akun-login)
- [⏰ Perintah Artisan Khusus & Scheduler](#perintah-artisan)
- [🏷️ Panduan Rilis GitHub (GitHub Release Step-by-Step)](#panduan-rilis)
- [🏷️ Pengaturan Topics / Tags Repositori GitHub](#topics-repositori)
- [📄 Lisensi](#lisensi)

---

<a id="persyaratan-sistem"></a>
## ⚙️ Persyaratan Sistem

- **PHP**: `>= 8.2` (dengan ekstensi `pdo`, `mbstring`, `openssl`, `xml`, `gd`, `zip`)
- **Composer**: `>= 2.x`
- **Node.js**: `>= 18.x` & **NPM**
- **Database**: MySQL `>= 8.0` / MariaDB `>= 10.4`

<div align="right"><a href="#table-of-contents" title="Kembali ke Table of Contents">⬆ Kembali ke Table of Contents</a></div>

---

<a id="development-roadmap"></a>
## 🚀 Tahapan & Ceklis Pengembangan Project (Development Roadmap)

Berikut adalah rekam jejak pengembangan sistem dari awal hingga tahap **Finalisasi (Production-Ready)**:

- [x] **Fase 1: Inisialisasi Framework & Fondasi Dasar**
  - [x] Instalasi Framework **Laravel 12.0** (PHP ^8.2).
  - [x] Setup environment `.env`, pembentukan app key, dan konfigurasi basis data MySQL.
  - [x] Integrasi otentikasi bawaan **Laravel Breeze** (Sanctum & Session Auth).

- [x] **Fase 2: Integrasi UI Layout Metronic 8 & Asset Pipeline**
  - [x] Integrasi Template **Metronic 8.3.2** (Bootstrap 5, Vanilla JS, Keenicons Duotone).
  - [x] Penerapan Mode Gelap/Terang (*Dark/Light Mode Switcher*) & Aksesibilitas Layout.
  - [x] Penerapan Arsitektur **Structure Mirroring** (Keselarasan 4-Layer: Route &rarr; Controller &rarr; Form Request &rarr; Model &rarr; View).
  - [x] Pembungkusan Komponen Reusable Blade Partials (`_toolbar`, `_header`, `_sidebar`, `_footer`).

- [x] **Fase 3: Manajemen Pengguna & Otorisasi RBAC Granular**
  - [x] Integrasi **Spatie Laravel-Permission 6.x** untuk Peran (*Role*) & Hak Akses (*Permission*).
  - [x] Modul User Management (CRUD, Approval Workflow Pendaftaran, Log Penolakan, Deaktivasi Akun).
  - [x] Fitur **Impersonasi Sesi Aman** (`impersonate` & `leave-impersonate`).
  - [x] Matriks Akses Role & Akses User per modul secara presisi (*Fine-Grained Permissions*).
  - [x] Alur Pengajuan Reset Password terverifikasi Administrator.
  - [x] Fitur **Import & Export Massal** (Excel/CSV via PhpSpreadsheet) & Generator Template Excel.

- [x] **Fase 4: Modul Pendukung Aplikasi (App Support Suite)**
  - [x] **AppFitur (Dynamic Feature Toggle)**: Kontrol aktif/nonaktif modul secara instan dari dashboard.
  - [x] **AppProfil (Identitas Aplikasi)**: Pengaturan Identitas Aplikasi terpusat (Logo, Favicon, Meta Tag, Footnote).
  - [x] **Menu Builder (Manajemen Menu)**: Penataan hirarki menu sidebar/header, urutan (*sorting*), & proteksi permission.
  - [x] **Referensi (Master Lookup Table)**: Sistem data referensi/kategori terpusat.
  - [x] **DataLogin (Session Audit)**: Monitoring sesi login user & geolokasi IP.

- [x] **Fase 5: Peningkatan Keamanan & Keandalan Sistem (System Hardening)**
  - [x] **Automated Scheduled Backup**: Engine backup database SQL, Artisan Command (`php artisan backup:db`), & Laravel Scheduler (Harian pkl 01:00 AM).
  - [x] **Audit Trail Mutation Logging**: Integrasi `spatie/laravel-activitylog` & `LogsActivityTrait` untuk merekam mutasi data model (Create, Update, Delete) beserta inspeksi diff nilai lama vs baru.
  - [x] **Rate Limiting Endpoint Sensitif**: Proteksi middleware `throttle` terukur pada Login, Reset Password, & Backup/Restore Database.
  - [x] **Session Idle Timeout**: Deteksi inaktivitas otomatis (`_idle-timer.blade.php`).

- [x] **Fase 6: Dokumentasi Internal & Usability (Finalisasi)**
  - [x] Dukungan **100% Bilingual (`en`/`id`)** di seluruh navigasi & konten aplikasi.
  - [x] **Modal Petunjuk Operasional** kontekstual (4-Card Box Sectioning) pada setiap halaman modul.
  - [x] Modul Dokumentasi Skema & Operasional Pemrograman internal (`/help/pemrograman/...`).

<div align="right"><a href="#table-of-contents" title="Kembali ke Table of Contents">⬆ Kembali ke Table of Contents</a></div>

---

<a id="fitur-utama"></a>
## 🌟 Fitur Utama Aplikasi

1. **Role-Based Access Control (RBAC)**: Pengaturan peran dan hak akses dinamis dengan visualisasi matriks izin.
2. **Audit Trail & Activity Log**: Perekaman aktivitas mutasi data secara otomatis dengan penilik selisih nilai atribut (*Inspector Diff Modal*).
3. **Automated Scheduled Backup**: Fitur unduh, buat, dan pulihkan cadangan database SQL otomatis via scheduler.
4. **Rate Limiting Protection**: Mencegah serangan brute-force dan eksploitasi memori pada endpoint sensitif.
5. **100% Bilingual Support**: Pengalihan bahasa instan (Inggris & Indonesia) tanpa teks tercampur.
6. **Petunjuk Operasional Modal**: Panduan penggunaan terintegrasi di setiap halaman modul aplikasi.

<div align="right"><a href="#table-of-contents" title="Kembali ke Table of Contents">⬆ Kembali ke Table of Contents</a></div>

---

<a id="panduan-instalasi"></a>
## 🛠️ Panduan Instalasi Cepat

### 1. Clone Repositori
```bash
git clone https://github.com/AbdoelMadjid/master-webadmin.git
cd master-webadmin
```

### 2. Instal Dependencies
```bash
composer install
npm install
```

### 3. Konfigurasi Environment & Key
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Konfigurasi Database & Migrasi Data Initial
Edit file `.env` sesuaikan koneksi database Anda, lalu jalankan migrasi beserta seeder:
```bash
php artisan migrate --seed
```

### 5. Jalankan Server Lokal
```bash
# Menjalankan server aplikasi dan Vite sekaligus:
npm run dev
# Atau jalankan via PHP CLI:
php artisan serve
```

<div align="right"><a href="#table-of-contents" title="Kembali ke Table of Contents">⬆ Kembali ke Table of Contents</a></div>

---

<a id="akun-login"></a>
## 🔑 Akun Login Bawaan

| Peran (Role) | Email Login | Password | Akses Utama |
| :--- | :--- | :--- | :--- |
| **Super Admin / Master** | `master@admin.com` | `password` | Akses Penuh Seluruh Modul & Sistem |
| **Admin** | `admin@admin.com` | `password` | Akses Modul Manajerial & Fitur Utama |
| **User** | `user@admin.com` | `password` | Akses Modul Pengguna Biasa & Profil |

<div align="right"><a href="#table-of-contents" title="Kembali ke Table of Contents">⬆ Kembali ke Table of Contents</a></div>

---

<a id="perintah-artisan"></a>
## ⏰ Perintah Artisan Khusus & Scheduler

### Perintah Backup Database Manual:
```bash
php artisan backup:db {--name=nama_backup} {--type=full}
```

### Menjalankan Laravel Scheduler (Cron Job):
```bash
php artisan schedule:run
```
*Atau tambahkan Cron Entry di server production:*
```cron
* * * * * cd /path-to-your-project && php artisan schedule:run >> /dev/null 2>&1
```

<div align="right"><a href="#table-of-contents" title="Kembali ke Table of Contents">⬆ Kembali ke Table of Contents</a></div>

---

<a id="panduan-rilis"></a>
## 🏷️ Panduan Rilis GitHub (GitHub Release Step-by-Step)

Untuk mempublikasikan rilis **v1.0.0** secara resmi di GitHub:

### Langkah 1: Buat Tag Git di Terminal (Opsional) atau via Web
```bash
git tag -a v1.0.0 -m "Release v1.0.0 - Master WebAdmin Suite Production Ready"
git push origin v1.0.0
```

### Langkah 2: Buat Release di Website GitHub
1. Buka repositori Anda di browser: [https://github.com/AbdoelMadjid/master-webadmin](https://github.com/AbdoelMadjid/master-webadmin).
2. Di sebelah kanan halaman, klik tombol **Releases** &rarr; **Create a new release** (atau **Draft a new release**).
3. **Choose a tag**: Pilih/ketik `v1.0.0`.
4. **Target**: Pilih branch `main`.
5. **Release title**: `v1.0.0 - Master WebAdmin Suite Production Ready`.
6. **Description**: Tempelkan catatan rilis ringkas berikut:
   ```markdown
   ## 🚀 Master WebAdmin v1.0.0 - Official Release

   Kami dengan bangga mengumumkan rilis resmi **v1.0.0** dari Master WebAdmin Enterprise Suite!

   ### 🌟 Key Highlights:
   - **Framework**: Laravel 12.0 & Metronic 8.3.2 Integration.
   - **Architecture**: 100% Structure Mirroring 4-Layer MVC.
   - **Security**: Rate Limiting (Throttle Middleware), CSRF, XSS, & Session Idle Timeout.
   - **Audit Trail**: Multi-Tab Audit Trail & Activity Log (`spatie/laravel-activitylog`).
   - **Automated Backup**: Scheduled Database Backup Engine (`php artisan backup:db`).
   - **RBAC**: Spatie Permission, Fine-Grained Matrices, & Impersonation.
   - **Usability**: 100% Bilingual (`en`/`id`) & Contextual Operational Guide Modals.
   ```
7. Klik tombol hijau **Publish release**.

<div align="right"><a href="#table-of-contents" title="Kembali ke Table of Contents">⬆ Kembali ke Table of Contents</a></div>

---

<a id="topics-repositori"></a>
## 🏷️ Pengaturan Topics / Tags Repositori GitHub

Agar repositori Anda mudah ditemukan dan terlihat profesional di GitHub, tambahkan **Topics** berikut di bagian kanan atas halaman utama repositori GitHub (tombol ⚙️ samping *About*):

`laravel12` `metronic8` `admin-panel` `rbac` `spatie-permissions` `activity-log` `audit-trail` `scheduled-backup` `rate-limiting` `bootstrap5` `dashboard-template` `bilingual`

<div align="right"><a href="#table-of-contents" title="Kembali ke Table of Contents">⬆ Kembali ke Table of Contents</a></div>

---

<a id="lisensi"></a>
## 📄 Lisensi

Proyek ini dilindungi di bawah lisensi [MIT License](LICENSE).

<div align="right"><a href="#table-of-contents" title="Kembali ke Table of Contents">⬆ Kembali ke Table of Contents</a></div>
