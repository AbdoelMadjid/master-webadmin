# Panduan Operasional Notifikasi System

Panduan penanganan operasional untuk notifikasi topbar bell dan popup.

[⬅ Kembali ke README Skema Pemrograman](../README.md) | [⬅ Kembali ke README Utama](../../README.md)

---

## 1. Penanganan Notifikasi Pendaftaran User Baru

1. Ketika user baru mendaftar dari halaman `/register`, indikator angka dan pulsing red dot di lonceng header akan muncul.
2. Admin membuka dropdown lonceng header di tab **Alerts**, lalu mengklik notifikasi akun baru.
3. Admin diarahkan ke halaman `/manajemenpengguna/users` untuk meninjau data pengguna.
4. Klik tombol **Approve** untuk mengaktifkan akun dan memberikan role default `user`, atau **Reject** untuk menolak pendaftaran.

## 2. Penanganan Notifikasi Reset Password

1. Ketika pengguna mengajukan reset password di `/forgot-password`, notifikasi masuk ke tab **Alerts**.
2. Admin mengklik notifikasi tersebut untuk menandai sebagai dibaca (`markAsRead`), mengurangi badge counter lonceng header.
3. Admin diarahkan ke `/manajemenpengguna/reset-password` untuk mengeksekusi reset password pengguna ke password default `Password!12345`.

## 3. Pemantauan Log Sesi Login

- Pada tab **Logs** di menu dropdown lonceng header, Admin dan User dapat melihat 10 riwayat login terakhir lengkap dengan waktu login dan perangkat yang digunakan.
