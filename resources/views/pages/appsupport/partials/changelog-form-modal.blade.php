<div class="modal fade" id="kt_modal_changelog_form" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-750px">
        <div class="modal-content rounded">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <button type="button" class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </button>
            </div>

            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <form id="kt_modal_changelog_form_element" class="form" onsubmit="saveChangelog(event)">
                    @csrf
                    <input type="hidden" id="changelog_id" name="id" value="">

                    <div class="mb-8 text-center">
                        <h1 class="mb-3 text-gray-900 fw-bold" id="changelog_modal_title">Tambah Versi Rilis Baru</h1>
                        <div class="text-muted fw-semibold fs-6">Kelola data catatan perubahan versi rilis aplikasi secara dinamis di database.</div>
                    </div>

                    <div class="row g-9 mb-8">
                        <div class="col-md-6 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2 required">
                                <span>Versi Tag</span>
                            </label>
                            <input type="text" class="form-control form-control-solid" placeholder="v1.5.0" name="version" id="changelog_version" required />
                        </div>

                        <div class="col-md-6 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2 required">
                                <span>Tanggal Rilis</span>
                            </label>
                            <input type="date" class="form-control form-control-solid" name="date" id="changelog_date" value="{{ date('Y-m-d') }}" required />
                        </div>
                    </div>

                    <div class="row g-9 mb-8">
                        <div class="col-md-6 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2 required">
                                <span>Judul (Bahasa Indonesia)</span>
                            </label>
                            <input type="text" class="form-control form-control-solid" placeholder="Judul rilis fitur..." name="title_id" id="changelog_title_id" required />
                        </div>

                        <div class="col-md-6 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2 required">
                                <span>Title (English)</span>
                            </label>
                            <input type="text" class="form-control form-control-solid" placeholder="Feature release title..." name="title" id="changelog_title" required />
                        </div>
                    </div>

                    <div class="row g-9 mb-8">
                        <div class="col-md-4 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2 required">
                                <span>Tipe Rilis</span>
                            </label>
                            <select class="form-select form-control-solid" name="type" id="changelog_type" required>
                                <option value="minor">Minor Update</option>
                                <option value="major">Major Update</option>
                                <option value="patch">Patch Fix</option>
                            </select>
                        </div>

                        <div class="col-md-4 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2 required">
                                <span>Warna Badge</span>
                            </label>
                            <select class="form-select form-control-solid" name="badge" id="changelog_badge" required>
                                <option value="badge-light-primary">Primary (Biru)</option>
                                <option value="badge-light-success">Success (Hijau)</option>
                                <option value="badge-light-warning">Warning (Kuning)</option>
                                <option value="badge-light-danger">Danger (Merah)</option>
                                <option value="badge-light-info">Info (Cyan)</option>
                            </select>
                        </div>

                        <div class="col-md-4 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span>Penulis / Author</span>
                            </label>
                            <input type="text" class="form-control form-control-solid" placeholder="Developer Team" name="author" id="changelog_author" value="Developer Team" />
                        </div>
                    </div>

                    <div class="mb-8 fv-row">
                        <label class="fs-6 fw-semibold mb-2 required">Deskripsi Rilis (Bahasa Indonesia)</label>
                        <textarea class="form-control form-control-solid" rows="2" name="description_id" id="changelog_description_id" placeholder="Penjelasan rincian pembaruan versi rilis..." required></textarea>
                    </div>

                    <div class="mb-8 fv-row">
                        <label class="fs-6 fw-semibold mb-2 required">Description (English)</label>
                        <textarea class="form-control form-control-solid" rows="2" name="description" id="changelog_description" placeholder="Detailed summary of release changes..." required></textarea>
                    </div>

                    <div class="mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span>Fitur Utama / Highlights</span>
                            <span class="ms-2 fs-8 text-muted">(1 baris per poin: Label | Deskripsi Fitur)</span>
                        </label>
                        <textarea class="form-control form-control-solid font-monospace fs-7" rows="3" name="highlights_raw" id="changelog_highlights_raw" placeholder="Fitur Console | Menambahkan modul Web GUI Console Developer&#10;Matrix Permission | Peningkatan toggle per baris pada matriks"></textarea>
                    </div>

                    <div class="mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span>Daftar Commit Git (Commits Log)</span>
                            <span class="ms-2 fs-8 text-muted">(1 baris per commit: Hash | Waktu | Pesan Commit)</span>
                        </label>
                        <textarea class="form-control form-control-solid font-monospace fs-7" rows="4" name="commits_raw" id="changelog_commits_raw" placeholder="1e7518f | 2026-08-04 00:43 | feat(appsupport): tambahkan modal form CRUD versi rilis&#10;2b3f2dc | 2026-08-04 00:30 | feat(appsupport): otomatis reload halaman realtime"></textarea>
                    </div>

                    <div class="text-center pt-5">
                        <button type="button" class="btn btn-light me-3" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary" id="btn_save_changelog">
                            <span class="indicator-label">Simpan Versi</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
