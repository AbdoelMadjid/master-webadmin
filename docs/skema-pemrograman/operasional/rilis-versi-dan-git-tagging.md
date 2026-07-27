# Rilis Versi & Git Tagging (Release Engineering Operations)

Dokumentasi ini menjelaskan standar alur kerja mandiri bagi developer untuk merilis versi baru aplikasi **Master WebAdmin**, membuat penanda **Git Tag**, memperbarui tag yang sudah ada secara paksa (*force update*), dan mempublikasikan **GitHub Releases**.

---

## 📌 1. Standar Penamaan Semantic Versioning (SemVer)

Seluruh rilis versi aplikasi wajib mengikuti format `vMAJOR.MINOR.PATCH` (contoh: `v1.0.0`, `v1.0.1`, `v1.1.0`):

- **Versi MAJOR (`v1.0.0` &rarr; `v2.0.0`)**: Dinaikkan saat terjadi perubahan arsitektur besar (*breaking changes*), perombakan total framework, atau API yang tidak kompatibel ke belakang.
- **Versi MINOR (`v1.0.0` &rarr; `v1.1.0`)**: Dinaikkan saat menambahkan modul atau fitur baru yang tetap kompatibel ke belakang (*backward compatible*).
- **Versi PATCH (`v1.0.0` &rarr; `v1.0.1`)**: Dinaikkan untuk perbaikan bug (*bugfix*), penyesuaian UI/UX, patch keamanan, atau perapihan berkas dokumentasi.

---

## 🛠️ 2. Langkah-Langkah Eksekusi CLI Rilis Baru

Untuk merilis versi baru, eksekusi perintah terminal berikut secara berurutan:

```bash
# 1. Perbarui catatan CHANGELOG pada berkas README.md di seksi "Catatan Rilis & Riwayat Versi"
# Kemudian commit dan push ke branch utama:
git add .
git commit -m "docs: update changelog for version v1.0.2"
git push origin main

# 2. Buat Annotated Git Tag baru:
git tag -a v1.0.2 -m "Release v1.0.2 - Interactive Lock Screen & Security Fixes"

# 3. Push Tag ke Remote Repositori GitHub:
git push origin v1.0.2
```

---

## 🔄 3. Cara Memperbarui Tag yang Sudah Ada (Force Update Tag)

Jika suatu tag (misal `v1.0.1`) sudah terlanjur di-push dan Anda ingin arsip file `Source code (zip)` pada tag tersebut di GitHub mencakup commit paling mutakhir (tanpa menaikkan versi patch):

```bash
# 1. Pindahkan tag secara paksa ke commit terbaru saat ini:
git tag -f -a v1.0.1 -m "Release v1.0.1 - Updated Source Code Archive"

# 2. Force push tag yang diperbarui ke GitHub:
git push -f origin v1.0.1
```
*GitHub secara otomatis akan memperbarui arsip ZIP source code yang diunduh pengguna sesuai dengan posisi commit tag yang baru.*

---

## 🌐 4. Publikasi Rilis di Website GitHub

1. Buka halaman tag repositori: `https://github.com/AbdoelMadjid/master-webadmin/tags`.
2. Klik tombol `...` atau **Create release from tag** di samping tag `v1.0.2`.
3. Isi **Release Title** (contoh: `v1.0.2 - Security & UI Enhancements`).
4. Salin ulasan catatan rilis dari `README.md` ke dalam kolom **Description**.
5. Klik tombol hijau **Publish release**.

---

## 🧹 5. Perintah Penghapusan / Rollback Tag

- Hapus tag lokal: `git tag -d v1.0.2`
- Hapus tag remote di GitHub: `git push origin --delete v1.0.2`
