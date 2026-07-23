# Manajemen Pengguna (Users Management) - Technical & Operational Guide

Panduan alur pemrograman, arsitektur data, dan operasional fitur Manajemen Pengguna yang mencakup pengelolaan Avatar, Sistem Reward Poin Harian, Keamanan Idle Auto-Logout (15 Menit), Impor Massal Excel, Mode Switch User (Impersonasi), Permintaan Reset Password, dan Penyesuaian Zona Waktu Lokal (WIB).

## Fitur-Fitur Utama

### 1. Pengelolaan Avatar Profil
- **Route & Controller**: `POST /profil-pengguna/avatar` -> `ProfilPenggunaController@updateAvatar`.
- **Penyimpanan**: Berkas fisik disimpan di `public/uploads/avatars/` dengan penamaan timestamp unik & ID user.
- **Accessor & Fallback**: `getUserAvatarUrl($user)` / `$user->avatar_url` mengembalikan URL gambar fisik atau menjana SVG Initial huruf depan nama user (misal: "A" untuk Admin).

### 2. Akumulasi Poin Keaktifan Harian (Reward +1 Poin)
- **Event Listener**: Login berhasil memicu event `Login`, ditangkap oleh `LogUserLogin`.
- **Logika Harian**: Memeriksa `DataLogin::where('user_id', $user->id)->whereDate('login_at', $today)`.
- **Reward Poin**: Perolehan 1 poin per-hari kalender (`user.points` di-increment +1), sedangkan login berulang pada hari yang sama hanya meng-increment `login_count` tanpa menggandakan saldo poin.

### 3. Masa Idle Logout Otomatis (15 Menit)
- **Client-Side Listener**: `_idle-timer.blade.php` memantau interaktivitas pengguna (`mousemove`, `keydown`, `scroll`, `click`) selama 15 menit (900.000 ms).
- **Auto Logout**: Jika tidak ada aktivitas dalam 15 menit, skrip otomatis mengirim request `POST /logout` dengan `reason=idle`.
- **Redirection**: Dialihkan ke halaman `/login` dengan `alert-warning` bahwa sesi telah habis akibat inaktivitas.

### 4. Impor Massal Excel (.xlsx)
- **Master Template**: `GET /manajemenpengguna/users/template` menjana berkas Excel berformat khusus menggunakan PhpSpreadsheet (`UserController@downloadTemplate`).
- **Import Engine**: `POST /manajemenpengguna/users/import` memvalidasi duplikasi email, menambah pengguna baru, dan melakukan penugasan role otomatis.

### 5. Mode Switch User (Impersonasi Akun)
- **Alur Impersonate**: `POST /manajemenpengguna/users/{id}/impersonate` menyimpan ID admin ke `session(['impersonator_id' => Auth::id()])` lalu mereturn `Auth::login($targetUser)`.
- **Bypass Listener**: `LogUserLogin` mendeteksi `impersonator_id` sehingga tidak menambah poin keaktifan atau login count pada akun sasaran.
- **Leave Impersonate**: `GET /manajemenpengguna/users/leave-impersonate` memulihkan autentikasi admin asli via dropdown avatar kanan atas.

### 6. Permintaan Reset Password Admin
- **Public Request**: Form `/forgot-password` mencatat `PasswordResetRequest` (`status = pending`, `is_read = false`).
- **Header Badge Counter**: Memicu indikator lonceng notifikasi header dan tab *Peringatan* pada drawer notifikasi.
- **Admin Reset**: Admin memproses reset via route `manajemenpengguna/reset-password`, pre-filled kata sandi default `Password!12345`.
