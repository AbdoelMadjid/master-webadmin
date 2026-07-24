# Skema Notifikasi System (Topbar Bell & Popup)

Dokumentasi arsitektur notifikasi topbar bell & popup dropdown di header aplikasi.

[⬅ Kembali ke README Skema Pemrograman](../README.md) | [⬅ Kembali ke README Utama](../../README.md)

---

## 1. Header Trigger & Red Badge Counter

- **File Partial Header**: `resources/views/layouts/partials/header/_app/notifications.blade.php`
- **Logic Counter**: Menghitung gabungan permintaan reset password yang belum dibaca (`is_read = false`) dari tabel `password_reset_requests` dan registrasi user baru yang membutuhkan persetujuan (status `pending`) dari tabel `users`.
- **Indikator**: Menampilkan badge merah (`badge-danger`) dengan angka total counter serta pulsing red dot (`animation-blink`) pada ikon lonceng header.

## 2. Dropdown Menu & Layout 3 Tab

- **File Partial Menu**: `resources/views/partials/menus/_notifications-menu.blade.php`
- **Tab 1 (Alerts)**: Menampilkan item notifikasi aktif (Permintaan Reset Password & Account Registration) dengan aksi mark as read dan redirect.
- **Tab 2 (Updates)**: Menampilkan pengumuman/broadcast system.
- **Tab 3 (Logs)**: Menampilkan 10 riwayat sesi login terakhir pengguna dari tabel `data_logins`.

## 3. Mark As Read & Redirection Flow

- Klik item permintaan reset password otomatis memicu endpoint `/manajemenpengguna/reset-password/{id}/mark-read`, mengubah status `is_read = true`, mengurangi badge counter, dan mengarahkan ke halaman manajemen reset password.
- Klik item pendaftaran akun mengarahkan Admin ke `/manajemenpengguna/users` untuk proses *Approve* atau *Reject*.
