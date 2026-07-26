# Skema App Support

URL aplikasi: `/help/pemrograman/skema/app-support`

[⬅ Kembali ke README Docs](../README.md)

Arsitektur modul pendukung aplikasi, meliputi manajemen menu dinamis, identitas aplikasi, Feature Toggle, cadangan database, dan pemantauan data login.

Tag:
- `app support`
- `dynamic menu`
- `feature toggle`
- `database backup`
- `login tracking`
- `single route multi-tab`

## Overview Sub-Tab

Fitur **Skema App Support** berjalan di atas rute tunggal `/help/pemrograman/skema/app-support` menggunakan query parameter `?tab=...` untuk merender sub-tab berikut:

### 1. Menu Dinamis (`?tab=menu`)
- **Arsitektur**: Manajemen struktur menu navigasi aplikasi dinamis dari database.
- **Fitur Utama**: Pengurutan hierarki menu dengan fitur drag & drop visual, toggle status aktif/non-aktif menu, serta sinkronisasi permission otomatis ke Spatie Permission.

### 2. App Profil (`?tab=app-profil`)
- **Arsitektur**: Pengelolaan identitas & branding visual aplikasi.
- **Fitur Utama**: Manajemen nama aplikasi, deskripsi, copyright, upload logo (Logo Utama, Logo Kotak, Favicon), dan validasi aman via Form Request (`App\Http\Requests\AppSupport\AppProfilRequest`).

### 3. App Fitur (`?tab=app-fitur`)
- **Arsitektur**: Sistem Feature Toggle (Feature Flags) global aplikasi.
- **Fitur Utama**: Sakelar toggle status fitur untuk mengaktifkan atau mematikan modul secara instant, serta pengujian status aktif melalui helper global `isFeatureActive('nama-fitur')`.

### 4. Data Referensi (`?tab=referensi`)
- **Arsitektur**: Engine Master Data Referensi acuan standar (Kategori & Item pilihan) untuk aplikasi.
- **Fitur Utama**: Pengelolaan kategori referensi acuan (*JENKEL*, *AGAMA*, *STATUS_PERKAWINAN*, *PENDIDIKAN*, *GOLONGAN_DARAH*, *STATUS_KEPEGAWAIAN*), penyuplai pilihan dropdown dinamis pada form profil pengguna (`/profil-pengguna?tab=pengaturan`), integrasi DataTables instant search, dan live demo selector preview.

### 5. Backup DB (`?tab=backup-db`)
- **Arsitektur**: Mekanisme pemeliharaan dan cadangan database MySQL.
- **Fitur Utama**: Ekspor dump SQL otomatis, penyimpanan pada lokasi direktori terproteksi, pengunduhan file backup, serta prosedur restore dan pembersihan cadangan database.

### 6. Data Login (`?tab=data-login`)
- **Arsitektur**: Audit log dan pelacakan riwayat aktivitas sesi login pengguna.
- **Fitur Utama**: Pencatatan alamat IP & user agent browser, statistik frekuensi login harian (`login_count`), akumulasi reward poin harian, dan widget pemantauan pengguna aktif dalam 15 menit terakhir.
