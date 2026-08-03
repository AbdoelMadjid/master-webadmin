<div class="modal fade" id="kt_modal_console_commit" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-600px">
        <div class="modal-content rounded">
            <div class="modal-header pb-0 border-0 justify-content-between">
                <h3 class="fw-bold text-gray-900 mb-0 d-flex align-items-center">
                    <i class="ki-duotone ki-git-commit fs-1 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                    {{ app()->getLocale() == 'en' ? 'Git Commit & Push' : 'Git Commit & Push ke GitHub' }}
                </h3>
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>

            <form id="kt_form_console_commit" class="form" onsubmit="submitGitCommit(event)">
                <div class="modal-body py-6 px-8">
                    <div class="mb-5">
                        <label class="required form-label fw-semibold fs-6">
                            {{ app()->getLocale() == 'en' ? 'Commit Message' : 'Pesan Commit' }}
                        </label>
                        <textarea class="form-control form-control-solid" rows="3" name="commit_message" id="console_commit_message" placeholder="{{ app()->getLocale() == 'en' ? 'e.g. feat(appsupport): add developer console web interface' : 'contoh: feat(appsupport): tambahkan menu console developer' }}" required></textarea>
                    </div>

                    <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-4">
                        <i class="ki-duotone ki-information-5 fs-2tx text-primary me-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                        <div class="d-flex flex-stack flex-grow-1">
                            <div class="fw-semibold">
                                <div class="fs-7 text-gray-700">
                                    {{ app()->getLocale() == 'en' 
                                        ? 'All staged and unstaged file changes will be automatically included (git add .) before committing and pushing.' 
                                        : 'Seluruh perubahan file lokal akan dimasukkan secara otomatis (git add .) sebelum proses commit dan push.' }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer py-4 px-8 border-top">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                        {{ app()->getLocale() == 'en' ? 'Cancel' : 'Batal' }}
                    </button>
                    <button type="submit" class="btn btn-primary" id="kt_btn_submit_commit">
                        <i class="ki-duotone ki-send fs-2 me-1"><span class="path1"></span><span class="path2"></span></i>
                        {{ app()->getLocale() == 'en' ? 'Commit & Push Now' : 'Jalankan Commit & Push' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
