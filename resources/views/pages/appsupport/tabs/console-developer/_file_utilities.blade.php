<div class="row g-6">
    {{-- HTML to Blade Converter --}}
    <div class="col-md-6">
        <div class="card shadow-xs h-100">
            <div class="card-header border-0 pt-6">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-gray-900 fs-5 d-flex align-items-center">
                        <i class="ki-duotone ki-file-up fs-2 text-info me-2"><span class="path1"></span><span
                                class="path2"></span></i>
                        Konversi Berkas .html → .blade.php
                    </span>
                    <span class="text-muted mt-1 fw-semibold fs-7">
                        Rename massal seluruh file berkestensi <code>.html</code> menjadi <code>.blade.php</code> secara
                        rekursif.
                    </span>
                </h3>
            </div>
            <div class="card-body pt-2 d-flex flex-column justify-content-between">
                <form id="kt_form_html_to_blade" onsubmit="submitFileUtility(event, 'html_to_blade')">
                    <div class="mb-4">
                        <label class="required form-label fw-semibold fs-6">Target Folder Path</label>
                        <input type="text" class="form-control form-control-solid" name="target_path"
                            value="resources/views" required />
                        <div class="form-text fs-8">Path relatif dari root project (contoh: <code>resources/views</code>
                            atau <code>resources/views/pages</code>).</div>
                    </div>
                    <button type="submit" class="btn btn-info w-100 shadow-xs mt-4">
                        <i class="ki-duotone ki-arrows-loop fs-2 me-1"><span class="path1"></span><span
                                class="path2"></span></i>
                        Jalankan Konversi HTML ke Blade
                    </button>
                    <div class="text-muted fs-8 text-center mt-2">
                        {{ app()->getLocale() == 'en' ? 'Recursively renames *.html files to *.blade.php in target folder' : 'Mengubah ekstensi *.html menjadi *.blade.php secara rekursif' }}
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Add/Remove Prefix Utilities --}}
    <div class="col-md-6">
        <div class="card shadow-xs h-100">
            <div class="card-header border-0 pt-6">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-gray-900 fs-5 d-flex align-items-center">
                        <i class="ki-duotone ki-text-number fs-2 text-primary me-2"><span class="path1"></span><span
                                class="path2"></span><span class="path3"></span><span class="path4"></span><span
                                class="path5"></span><span class="path6"></span></i>
                        Tambah / Hapus Prefix Nama File Massal
                    </span>
                    <span class="text-muted mt-1 fw-semibold fs-7">
                        Tambahkan atau hapus prefix tertentu pada nama file secara massal pada direktori target.
                    </span>
                </h3>
            </div>
            <div class="card-body pt-2">
                <form id="kt_form_prefix_utility" onsubmit="submitFileUtilityPrefix(event)">
                    <div class="mb-3">
                        <label class="required form-label fw-semibold fs-6">Aksi Prefix</label>
                        <select class="form-select form-select-solid" name="utility_type" id="prefix_utility_type"
                            required>
                            <option value="add_prefix" selected>➕ Tambah Filename Prefix Massal</option>
                            <option value="remove_prefix">➖ Hapus Filename Prefix Massal</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="required form-label fw-semibold fs-6">Teks Prefix</label>
                        <input type="text" class="form-control form-control-solid" name="prefix"
                            placeholder="Contoh: _ atau promo-" required />
                    </div>

                    <div class="mb-4">
                        <label class="required form-label fw-semibold fs-6">Target Folder Path</label>
                        <input type="text" class="form-control form-control-solid" name="target_path"
                            value="resources/views" required />
                    </div>

                    <button type="submit" class="btn btn-primary w-100 shadow-xs">
                        <i class="ki-duotone ki-check fs-2 me-1"><span class="path1"></span><span
                                class="path2"></span></i>
                        Eksekusi Perubahan Prefix Massal
                    </button>
                    <div class="text-muted fs-8 text-center mt-2">
                        {{ app()->getLocale() == 'en' ? 'Batch prepends or strips target prefix string on filenames' : 'Menambah atau menghapus prefix teks target pada nama file' }}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
