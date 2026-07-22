/**
 * Master WebAdmin - SweetAlert2 CRUD Helper
 * Fungsi helper global untuk notifikasi Sukses, Gagal, Validasi, dan Konfirmasi Hapus Data.
 */
window.SwalHelper = {
    /**
     * Notifikasi Sukses
     * @param {string} message Pesan sukses (Opsional)
     * @param {function|null} callback Callback setelah Notifikasi ditutup (Default: location.reload())
     */
    success: function(message = 'Data berhasil disimpan.', callback = null) {
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: message,
            timer: 1500,
            showConfirmButton: false
        }).then(function() {
            if (typeof callback === 'function') {
                callback();
            } else {
                location.reload();
            }
        });
    },

    /**
     * Notifikasi Gagal / Error Umum
     * @param {string} message Pesan error (Opsional)
     * @param {string} title Judul notifikasi (Default: 'Gagal!')
     */
    error: function(message = 'Terjadi kesalahan sistem.', title = 'Gagal!') {
        Swal.fire({
            icon: 'error',
            title: title,
            html: message
        });
    },

    /**
     * Notifikasi Validasi Gagal (Menangani Response Error AJAX HTTP 422)
     * @param {object} xhr Objek XHR dari AJAX error callback
     */
    validationError: function(xhr) {
        var errorMsg = 'Validasi gagal, silakan periksa input Anda.';
        if (xhr && xhr.status === 422 && xhr.responseJSON && xhr.responseJSON.errors) {
            var errors = xhr.responseJSON.errors;
            errorMsg = Object.values(errors).map(function(arr) {
                return Array.isArray(arr) ? arr.join('<br>') : arr;
            }).join('<br>');
        } else if (xhr && xhr.responseJSON && xhr.responseJSON.message) {
            errorMsg = xhr.responseJSON.message;
        }

        Swal.fire({
            icon: 'error',
            title: 'Validasi Gagal',
            html: errorMsg
        });
    },

    /**
     * Konfirmasi Dialog Hapus Data
     * @param {string} itemName Nama item yang akan dihapus
     * @param {function} onConfirm Callback yang dieksekusi saat tombol 'Ya, Hapus!' diklik
     */
    confirmDelete: function(itemName = 'data ini', onConfirm = null) {
        Swal.fire({
            title: 'Apakah Anda Yakin?',
            text: 'Data "' + itemName + '" akan dihapus permanen dari sistem!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Batal'
        }).then(function(result) {
            if (result.isConfirmed && typeof onConfirm === 'function') {
                onConfirm();
            }
        });
    }
};
