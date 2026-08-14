<style>
    .seeder-code-box {
        background-color: #f8fafc !important;
        border: 1px solid #cbd5e1 !important;
        border-radius: 8px;
        padding: 1.25rem;
        max-height: 520px;
        overflow: auto;
        font-family: 'Consolas', 'Fira Code', 'Cascadia Code', 'Courier New', monospace;
        font-size: 13.5px;
        line-height: 1.6;
        color: #0f172a !important;
    }
    .seeder-code-box code,
    .seeder-code-box code * {
        background: transparent !important;
        background-color: transparent !important;
        padding: 0 !important;
        margin: 0 !important;
        border: none !important;
        box-shadow: none !important;
        border-radius: 0 !important;
        font-family: inherit !important;
    }
</style>

<div class="modal fade" id="kt_modal_console_seeder_viewer" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-900px">
        <div class="modal-content rounded">
            <div class="modal-header pb-3 border-bottom">
                <div class="d-flex align-items-center gap-3">
                    <div class="symbol symbol-40px symbol-circle bg-light-primary p-2">
                        <i class="ki-duotone ki-code text-primary fs-2"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <div>
                        <h3 class="modal-title fw-bold text-gray-900" id="seeder_viewer_filename">
                            {{ app()->getLocale() == 'en' ? 'Seeder Code Viewer' : 'Inspeksi Kode Seeder' }}
                        </h3>
                        <span class="text-muted fs-7 font-monospace" id="seeder_viewer_filepath">database/seeders/...</span>
                    </div>
                </div>
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>

            <div class="modal-body py-5">
                {{-- Meta details bar --}}
                <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4 bg-light p-3 rounded border border-gray-200">
                    <div class="d-flex align-items-center gap-3">
                        <span class="badge badge-light-primary fw-bold" id="seeder_viewer_size">0 KB</span>
                        <span class="badge badge-light-info fw-bold" id="seeder_viewer_lines">0 Lines</span>
                        <span class="text-muted fs-8" id="seeder_viewer_modified">Modified: -</span>
                    </div>
                    <div>
                        <button type="button" class="btn btn-sm btn-light-success d-inline-flex align-items-center" onclick="copySeederCode()">
                            <i class="ki-duotone ki-copy fs-3 me-1"><span class="path1"></span><span class="path2"></span></i>
                            {{ app()->getLocale() == 'en' ? 'Copy Code' : 'Salin Kode' }}
                        </button>
                    </div>
                </div>

                {{-- Code Box --}}
                <div class="position-relative">
                    <pre class="seeder-code-box mb-0" id="seeder_code_container"><code id="seeder_code_content">Loading...</code></pre>
                </div>
            </div>

            <div class="modal-footer pt-3">
                <button type="button" class="btn btn-secondary min-w-100px" data-bs-dismiss="modal">
                    {{ app()->getLocale() == 'en' ? 'Close' : 'Tutup' }}
                </button>
            </div>
        </div>
    </div>
</div>
