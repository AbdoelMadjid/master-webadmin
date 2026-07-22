(function (window, document, $) {
    'use strict';

    function toElement(ref) {
        if (!ref) {
            return null;
        }

        if (typeof ref === 'string') {
            return document.querySelector(ref);
        }

        return ref;
    }

    function defaultParseError(response) {
        return response.json()
            .then(function (body) {
                if (body && body.message) {
                    return body.message;
                }

                if (body && body.errors) {
                    return Object.values(body.errors).flat().join('\n') || 'Request gagal.';
                }

                return 'Request gagal.';
            })
            .catch(function () {
                return 'Request gagal.';
            });
    }

    function createAlerts() {
        var showAlert = function (options) {
            if (window.Swal) {
                return window.Swal.fire(options);
            }

            var title = options.title ? options.title + '\n' : '';
            window.alert(title + (options.text || ''));
            return Promise.resolve({ isConfirmed: true });
        };

        return {
            showError: function (message) {
                return showAlert({
                    icon: 'error',
                    title: 'Error',
                    text: message || 'Terjadi kesalahan.',
                });
            },
            showSuccess: function (message) {
                return showAlert({
                    icon: 'success',
                    title: 'Berhasil',
                    text: message,
                    timer: 1400,
                    showConfirmButton: false,
                });
            },
            confirmAction: function (message) {
                if (window.Swal) {
                    return window.Swal.fire({
                        icon: 'warning',
                        title: 'Konfirmasi',
                        text: message,
                        showCancelButton: true,
                        confirmButtonText: 'Ya',
                        cancelButtonText: 'Batal',
                    }).then(function (result) {
                        return Boolean(result.isConfirmed);
                    });
                }

                return Promise.resolve(window.confirm(message));
            },
        };
    }

    window.initFixedHeaderCrudDataTable = function (config) {
        if (!config || !config.datatable || !config.crud || !config.fields) {
            throw new Error('Config tidak lengkap untuk initFixedHeaderCrudDataTable.');
        }

        var alerts = createAlerts();
        var form = toElement('#' + config.crud.formId);
        var modalEl = toElement('#' + config.crud.modalId);
        var titleEl = toElement('#' + config.crud.titleId);
        var submitBtn = toElement('#' + config.crud.submitButtonId);
        var addBtn = toElement('#' + config.crud.addButtonId);
        var searchInput = config.searchInputId ? toElement('#' + config.searchInputId) : null;

        var bsModal = new bootstrap.Modal(modalEl);
        var csrf = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') ||
            form?.querySelector('input[name="_token"]')?.value || '';

        var fields = Object.keys(config.fields).reduce(function (acc, key) {
            acc[key] = toElement(config.fields[key]);
            return acc;
        }, {});

        var checkboxFields = config.checkboxFields || [];
        var resetValues = config.resetValues || {};

        var routeWithId = function (template, id) {
            return template.replace('__ID__', String(id));
        };

        var requestJson = function (url, method, payload) {
            return fetch(url, {
                method: method,
                credentials: 'same-origin',
                headers: {
                    'X-CSRF-TOKEN': csrf,
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                },
                body: payload ? JSON.stringify(payload) : null,
            }).then(function (response) {
                if (!response.ok) {
                    return defaultParseError(response).then(function (msg) {
                        throw new Error(msg);
                    });
                }

                return response.status === 204 ? {} : response.json();
            });
        };

        var headerOffset =
            (document.getElementById('kt_app_header')?.offsetHeight || 0) +
            (document.getElementById('kt_app_toolbar')?.offsetHeight || 0) + 5;

        var dataTable = $(config.datatable.tableSelector).DataTable({
            processing: true,
            serverSide: true,
            responsive: false,
            autoWidth: false,
            pageLength: config.datatable.pageLength || 10,
            fixedHeader: {
                header: true,
                headerOffset: headerOffset,
            },
            ajax: {
                url: config.datatable.ajaxUrl,
                type: 'GET',
            },
            order: config.datatable.order || [[0, 'desc']],
            columns: config.datatable.columns,
            columnDefs: config.datatable.columnDefs || [],
            language: config.datatable.language || {},
        });

        if (searchInput) {
            var timer = null;
            searchInput.addEventListener('input', function (event) {
                if (timer) {
                    clearTimeout(timer);
                }

                timer = setTimeout(function () {
                    dataTable.search(event.target.value || '').draw();
                }, Number(config.searchDelayMs || 300));
            });
        }

        var resetForm = function () {
            form.reset();

            Object.keys(fields).forEach(function (key) {
                var fieldEl = fields[key];
                if (!fieldEl) {
                    return;
                }

                if (Object.prototype.hasOwnProperty.call(resetValues, key)) {
                    if (checkboxFields.indexOf(key) !== -1) {
                        fieldEl.checked = Boolean(resetValues[key]);
                    } else {
                        fieldEl.value = resetValues[key] == null ? '' : resetValues[key];
                    }
                }
            });

            if (fields.id) {
                fields.id.value = '';
            }

            if (titleEl) {
                titleEl.textContent = config.crud.createTitle;
            }
        };

        var fillForm = function (data) {
            Object.keys(fields).forEach(function (key) {
                var fieldEl = fields[key];
                if (!fieldEl) {
                    return;
                }

                if (checkboxFields.indexOf(key) !== -1) {
                    fieldEl.checked = Boolean(data[key]);
                    return;
                }

                fieldEl.value = data[key] == null ? '' : data[key];
            });
        };

        if (addBtn) {
            addBtn.addEventListener('click', function () {
                resetForm();
                bsModal.show();
            });
        }

        document.addEventListener('click', function (event) {
            var editBtn = event.target.closest(config.crud.editSelector);
            if (editBtn) {
                var editId = editBtn.dataset.id;
                if (!editId) {
                    return;
                }

                requestJson(routeWithId(config.crud.routes.show, editId), 'GET')
                    .then(function (response) {
                        fillForm(response.data || {});
                        titleEl.textContent = config.crud.editTitle;
                        bsModal.show();
                    })
                    .catch(function (err) {
                        alerts.showError(err.message);
                    });
                return;
            }

            var deleteBtn = event.target.closest(config.crud.deleteSelector);
            if (!deleteBtn) {
                return;
            }

            var deleteId = deleteBtn.dataset.id;
            if (!deleteId) {
                return;
            }

            alerts.confirmAction(config.crud.deleteConfirmText).then(function (confirmed) {
                if (!confirmed) {
                    return;
                }

                requestJson(routeWithId(config.crud.routes.destroy, deleteId), 'DELETE')
                    .then(function () {
                        dataTable.ajax.reload(null, false);
                        return alerts.showSuccess(config.crud.successMessages?.delete || 'Data berhasil dihapus.');
                    })
                    .catch(function (err) {
                        alerts.showError(err.message);
                    });
            });
        });

        form.addEventListener('submit', function (event) {
            event.preventDefault();
            submitBtn.disabled = true;

            Promise.resolve()
                .then(function () {
                    var payload = config.payloadFactory(fields);
                    var id = fields.id ? fields.id.value : '';

                    if (id) {
                        return requestJson(routeWithId(config.crud.routes.update, id), 'PUT', payload)
                            .then(function () {
                                return alerts.showSuccess(config.crud.successMessages?.update || 'Data berhasil diperbarui.');
                            });
                    }

                    return requestJson(config.crud.routes.store, 'POST', payload)
                        .then(function () {
                            return alerts.showSuccess(config.crud.successMessages?.create || 'Data berhasil ditambahkan.');
                        });
                })
                .then(function () {
                    bsModal.hide();
                    resetForm();
                    dataTable.ajax.reload(null, false);
                })
                .catch(function (err) {
                    alerts.showError(err.message);
                })
                .finally(function () {
                    submitBtn.disabled = false;
                });
        });

        return {
            dataTable: dataTable,
            resetForm: resetForm,
        };
    };
})(window, document, window.jQuery);
