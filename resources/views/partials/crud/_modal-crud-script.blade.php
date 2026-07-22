<script>
    window.initModalCrudTable = function(config) {
        const form = document.getElementById(config.formId);
        const modalEl = document.getElementById(config.modalId);
        const titleEl = document.getElementById(config.titleId);
        const submitBtn = document.getElementById(config.submitButtonId);
        const bsModal = new bootstrap.Modal(modalEl);
        const csrf = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
        const fields = config.fields;

        const dtInstance = () => window.LaravelDataTables?.[config.datatableName];
        const reloadTable = () => dtInstance()?.ajax?.reload(null, false);
        const routeWithId = (template, id) => template.replace('__ID__', String(id));
        const bindSearchToolbar = () => {
            if (!config.searchInputId) {
                return;
            }

            const searchInput = document.getElementById(config.searchInputId);
            if (!searchInput) {
                return;
            }

            let timer = null;
            const delay = Number(config.searchDelayMs ?? 300);

            searchInput.addEventListener('input', (event) => {
                if (timer) {
                    clearTimeout(timer);
                }

                timer = setTimeout(() => {
                    dtInstance()?.search(event.target.value || '').draw();
                }, delay);
            });
        };

        const parseErrors = async(response) => {
            try {
                const body = await response.json();
                return body.message || Object.values(body.errors || {}).flat().join('\n') || 'Request gagal.';
            } catch (e) {
                return 'Request gagal.';
            }
        };

        const requestJson = async(url, method, payload = null) => {
            const response = await fetch(url, {
                method,
                headers: {
                    'X-CSRF-TOKEN': csrf,
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                },
                body: payload ? JSON.stringify(payload) : null,
            });

            if (!response.ok) {
                throw new Error(await parseErrors(response));
            }

            return response.status === 204 ? {} : response.json();
        };

        const resetForm = () => {
            form.reset();
            fields.id.value = '';
            if (fields.active) {
                fields.active.checked = true;
            }
            titleEl.textContent = config.createTitle || 'Tambah Data';
        };

        const fillForm = (data) => {
            Object.keys(fields).forEach((key) => {
                if (key === 'active') {
                    fields.active.checked = Boolean(data.active);
                    return;
                }
                fields[key].value = data[key] ?? '';
            });
        };

        document.getElementById(config.addButtonId)?.addEventListener('click', () => {
            resetForm();
            bsModal.show();
        });

        document.addEventListener('click', async(event) => {
            const editBtn = event.target.closest(config.editSelector);
            if (editBtn) {
                const id = editBtn.dataset.id;
                if (!id) return;
                try {
                    const response = await requestJson(routeWithId(config.routes.show, id), 'GET');
                    fillForm(response.data || {});
                    titleEl.textContent = config.editTitle || 'Edit Data';
                    bsModal.show();
                } catch (err) {
                    alert(err.message);
                }
                return;
            }

            const deleteBtn = event.target.closest(config.deleteSelector);
            if (!deleteBtn) return;
            const id = deleteBtn.dataset.id;
            if (!id) return;

            if (!confirm(config.deleteConfirmText || 'Hapus data ini?')) {
                return;
            }

            try {
                await requestJson(routeWithId(config.routes.destroy, id), 'DELETE');
                reloadTable();
            } catch (err) {
                alert(err.message);
            }
        });

        form.addEventListener('submit', async(event) => {
            event.preventDefault();
            submitBtn.disabled = true;

            try {
                const payload = config.payloadFactory(fields);
                const id = fields.id.value;

                if (id) {
                    await requestJson(routeWithId(config.routes.update, id), 'PUT', payload);
                } else {
                    await requestJson(config.routes.store, 'POST', payload);
                }

                bsModal.hide();
                resetForm();
                reloadTable();
            } catch (err) {
                alert(err.message);
            } finally {
                submitBtn.disabled = false;
            }
        });

        bindSearchToolbar();
    };
</script>
