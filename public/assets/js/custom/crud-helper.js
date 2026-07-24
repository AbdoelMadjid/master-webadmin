/**
 * Master WebAdmin - SweetAlert2 CRUD Helper
 * Fungsi helper global untuk notifikasi Sukses, Gagal, Validasi, dan Konfirmasi Hapus Data.
 */
window.SwalHelper = {
    /**
     * Notifikasi Sukses
     * @param {string} message Pesan sukses (Opsional)
     * @param {function|null|boolean} callback Callback setelah Notifikasi ditutup (Default: location.reload())
     * @param {number} timer Durasi waktu tayang dalam milidetik (Default: 6000ms / 6 detik)
     */
    success: function(message = 'Data berhasil disimpan.', callback = null, timer = 6000) {
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: message,
            timer: timer,
            timerProgressBar: true,
            showConfirmButton: true,
            confirmButtonText: 'OK',
            allowOutsideClick: false,
            buttonsStyling: false,
            customClass: {
                confirmButton: 'btn btn-primary btn-sm'
            }
        }).then(function(result) {
            if (typeof callback === 'function') {
                callback(result);
            } else if (callback === null) {
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
            html: message,
            buttonsStyling: false,
            customClass: {
                confirmButton: 'btn btn-danger btn-sm'
            }
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
            html: errorMsg,
            buttonsStyling: false,
            customClass: {
                confirmButton: 'btn btn-danger btn-sm'
            }
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
            buttonsStyling: false,
            customClass: {
                confirmButton: 'btn btn-danger btn-sm me-2',
                cancelButton: 'btn btn-light btn-sm'
            },
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Batal'
        }).then(function(result) {
            if (result.isConfirmed && typeof onConfirm === 'function') {
                onConfirm();
            }
        });
    }
};
