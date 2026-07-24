# Skema SweetAlert2 (SwalHelper)

Dokumentasi penggunaan helper JavaScript global `SwalHelper` untuk notifikasi dan dialog konfirmasi.

[⬅ Kembali ke README Skema Pemrograman](../README.md) | [⬅ Kembali ke README Utama](../../README.md)

---

## 1. Filosofi Standarisasi (`SwalHelper`)

Untuk menjaga konsistensi UX dan kebersihan kode pada seluruh view Metronic, penulisan konfigurasi `Swal.fire({...})` secara inline di Blade sangat dilarang. Seluruh dialog dan notifikasi menggunakan helper JavaScript global `SwalHelper`.

## 2. API & Method Utama

1. **Success Notification / Modal**:
   ```javascript
   SwalHelper.success('Data berhasil disimpan.');
   ```
   Menampilkan dialog sukses dengan styling Metronic dan konfirmasi otomatis.

2. **General Error Alert**:
   ```javascript
   SwalHelper.error('Gagal memproses data di server.');
   ```
   Menampilkan alert error dengan styling merah untuk exception server atau kegagalan aksi.

3. **422 XHR Validation Error**:
   ```javascript
   SwalHelper.validationError(xhr);
   ```
   Mengekstrak pesan error validasi Form Request Laravel dari response XHR 422 dan menampilkannya sebagai daftar pesan error yang rapi.

4. **Delete Confirmation Prompt**:
   ```javascript
   SwalHelper.confirmDelete('Nama Item', function() {
       // Callback aksi hapus (e.g. AJAX request)
   });
   ```
   Menampilkan modal dialog konfirmasi hapus data secara konsisten.
