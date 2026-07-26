# Panduan Operasional App Support

Panduan alur kerja dan pengoperasian modul App Support (Menu Dinamis, App Profil, App Fitur, Backup DB, Data Login).

[⬅ Kembali ke README Skema Pemrograman](../README.md) | [⬅ Kembali ke README Utama](../../README.md)

---

## Modul Sub-Tab App Support

1. **Menu Dinamis** (`/help/pemrograman/operasional/app-support?tab=menu`)
   - Pengaturan hirarki menu sidebar/header via drag & drop.
   - Pengaktifan/penonaktifan sakelar status menu dan sinkronisasi permission Spatie secara otomatis.

2. **App Profil** (`/help/pemrograman/operasional/app-support?tab=app-profil`)
   - Pengelolaan identitas aplikasi (Nama Aplikasi, Deskripsi, Copyright).
   - Manajemen upload logo utama, logo kotak, dan favicon.

3. **App Fitur** (`/help/pemrograman/operasional/app-support?tab=app-fitur`)
   - Feature Toggle (Feature Flags) untuk mengaktifkan/nonaktifkan modul aplikasi secara global tanpa me-redeploy kode.

4. **Data Referensi** (`/help/pemrograman/operasional/app-support?tab=referensi`)
   - Pengelolaan kelompok kategori acuan (*JENKEL*, *AGAMA*, *STATUS_PERKAWINAN*, *PENDIDIKAN*, *GOLONGAN_DARAH*, *STATUS_KEPEGAWAIAN*), pembuatan dan penyuntingan opsi item referensi, DataTables live instant search, serta integrasi otomatis ke form pengaturan profil user.

5. **Backup DB** (`/help/pemrograman/operasional/app-support?tab=backup-db`)
   - Ekspor dump database SQL, pengunduhan file cadangan, prosedur restore database, dan pembersihan file backup lama.

6. **Data Login** (`/help/pemrograman/operasional/app-support?tab=data-login`)
   - Pemantauan riwayat login pengguna, pelacakan IP address & browser user agent, serta pembersihan log aktivitas login.
