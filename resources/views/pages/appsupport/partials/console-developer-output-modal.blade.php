<div class="modal fade" id="kt_modal_console_output" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-900px">
        <div class="modal-content bg-dark text-white rounded">
            <div class="modal-header border-bottom border-gray-800 py-3 px-6 justify-content-between align-items-center">
                <div class="d-flex align-items-center gap-2">
                    <span class="bullet bullet-dot bg-success h-10px w-10px"></span>
                    <h4 class="modal-title text-white font-monospace mb-0 fs-6" id="kt_console_output_title">
                        Console Execution Terminal Output
                    </h4>
                </div>
                <button type="button" class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1 text-gray-400"><span class="path1"></span><span
                            class="path2"></span></i>
                </button>
            </div>

            <div class="modal-body p-6">
                <div class="mb-3 d-flex align-items-center justify-content-between">
                    <span class="badge badge-light-dark font-monospace text-gray-400" id="kt_console_output_command">
                        command
                    </span>
                    <button type="button" class="btn btn-xs btn-light-primary" onclick="copyConsoleOutput()">
                        <i class="ki-duotone ki-copy fs-6 me-1"><span class="path1"></span><span
                                class="path2"></span></i>
                        {{ app()->getLocale() == 'en' ? 'Copy Output' : 'Salin Log' }}
                    </button>
                </div>

                <div class="bg-black p-4 rounded border border-gray-800 shadow-inner font-monospace"
                    style="max-height: 450px; overflow-y: auto;">
                    <pre class="text-success fs-7 mb-0" id="kt_console_output_text" style="white-space: pre-wrap; word-break: break-all;">Loading output...</pre>
                </div>
            </div>

            <div class="modal-footer border-top border-gray-800 py-3 px-6">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">
                    {{ app()->getLocale() == 'en' ? 'Close Terminal' : 'Tutup Terminal' }}
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    function copyConsoleOutput() {
        var text = $('#kt_console_output_text').text();
        navigator.clipboard.writeText(text).then(function() {
            if (typeof SwalHelper !== 'undefined') {
                SwalHelper.success(
                    "{{ app()->getLocale() == 'en' ? 'Console output copied to clipboard' : 'Log eksekusi berhasil disalin' }}"
                );
            }
        });
    }
</script>
