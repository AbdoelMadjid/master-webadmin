<div class="row g-6 mb-6">
    {{-- Git Status Overview Cards --}}
    <div class="col-md-6 col-lg-3">
        <div class="card bg-light-primary border border-primary h-100 p-5 rounded shadow-xs">
            <div class="d-flex align-items-center mb-3">
                <div class="symbol symbol-40px symbol-circle bg-primary me-3">
                    <i class="ki-duotone ki-route fs-2 text-white"><span class="path1"></span><span
                            class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                </div>
                <div>
                    <span class="text-muted fw-semibold fs-7 d-block">
                        {{ app()->getLocale() == 'en' ? 'Active Branch' : 'Branch Aktif' }}
                    </span>
                    <span class="text-gray-900 fw-bold fs-4">{{ $gitSummary['branch'] }}</span>
                </div>
            </div>
            <div class="fs-7 text-gray-600 truncate-1 font-monospace" data-bs-toggle="tooltip"
                title="{{ $gitSummary['remote_url'] }}">
                {{ $gitSummary['remote_url'] ?: 'No remote set' }}
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-3">
        <div
            class="card bg-light-{{ $gitSummary['has_changes'] ? 'warning' : 'success' }} border border-{{ $gitSummary['has_changes'] ? 'warning' : 'success' }} h-100 p-5 rounded shadow-xs">
            <div class="d-flex align-items-center mb-3">
                <div
                    class="symbol symbol-40px symbol-circle bg-{{ $gitSummary['has_changes'] ? 'warning' : 'success' }} me-3">
                    <i class="ki-duotone ki-element-11 fs-2 text-white"><span class="path1"></span><span
                            class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                </div>
                <div>
                    <span class="text-muted fw-semibold fs-7 d-block">
                        {{ app()->getLocale() == 'en' ? 'Local Status' : 'Status File Lokal' }}
                    </span>
                    <span class="text-gray-900 fw-bold fs-4">
                        {{ $gitSummary['changed_files_count'] }}
                        {{ app()->getLocale() == 'en' ? 'Modified Files' : 'Berkas Berubah' }}
                    </span>
                </div>
            </div>
            <span class="badge badge-light-{{ $gitSummary['has_changes'] ? 'warning' : 'success' }} fw-bold me-auto">
                {{ $gitSummary['has_changes'] ? (app()->getLocale() == 'en' ? 'Uncommitted Changes' : 'Ada Perubahan Uncommitted') : (app()->getLocale() == 'en' ? 'Working Tree Clean' : 'Lokal Clean & Up to Date') }}
            </span>
        </div>
    </div>

    <div class="col-md-6 col-lg-3">
        <div class="card bg-light-info border border-info h-100 p-5 rounded shadow-xs">
            <div class="d-flex align-items-center mb-3">
                <div class="symbol symbol-40px symbol-circle bg-info me-3">
                    <i class="ki-duotone ki-tag fs-2 text-white"><span class="path1"></span><span
                            class="path2"></span><span class="path3"></span></i>
                </div>
                <div>
                    <span class="text-muted fw-semibold fs-7 d-block">
                        {{ app()->getLocale() == 'en' ? 'Latest Tag' : 'Versi Tag Terbaru' }}
                    </span>
                    <span class="text-gray-900 fw-bold fs-4">{{ $gitSummary['latest_tag'] }}</span>
                </div>
            </div>
            <span class="text-gray-600 fs-7">
                Total {{ count($gitSummary['tags']) }}
                {{ app()->getLocale() == 'en' ? 'release tags registered' : 'tag release terdaftar' }}
            </span>
        </div>
    </div>

    <div class="col-md-6 col-lg-3">
        <div class="card bg-light-dark border border-gray-400 h-100 p-5 rounded shadow-xs">
            <div class="d-flex align-items-center mb-3">
                <div class="symbol symbol-40px symbol-circle bg-dark me-3">
                    <i class="ki-duotone ki-time fs-2 text-white"><span class="path1"></span><span
                            class="path2"></span></i>
                </div>
                <div>
                    <span class="text-muted fw-semibold fs-7 d-block">
                        {{ app()->getLocale() == 'en' ? 'Last Commit' : 'Komit Terakhir' }}
                    </span>
                    <span class="text-gray-900 fw-bold fs-7 truncate-1" data-bs-toggle="tooltip"
                        title="{{ $gitSummary['last_commit'] }}">
                        {{ $gitSummary['last_commit'] ?: 'N/A' }}
                    </span>
                </div>
            </div>
            <span class="badge badge-light-secondary font-monospace fs-8 text-gray-700">
                {{ app()->getLocale() == 'en' ? 'Head Commit Log' : 'Log Head Terakhir' }}
            </span>
        </div>
    </div>
</div>

{{-- Git Control Buttons Grid --}}
<div class="card shadow-xs mb-6">
    <div class="card-header border-0 pt-6">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-gray-900 fs-5 d-flex align-items-center">
                <i class="ki-duotone ki-code fs-2 text-primary me-2"><span class="path1"></span><span
                        class="path2"></span></i>
                {{ app()->getLocale() == 'en' ? 'Git Console Command Buttons' : 'Tombol Perintah Console Git' }}
            </span>
            <span class="text-muted mt-1 fw-semibold fs-7">
                {{ app()->getLocale() == 'en' ? 'Execute git commands on backend workspace repository' : 'Eksekusi perintah git langsung ke repositori workspace backend' }}
            </span>
        </h3>
    </div>

    <div class="card-body pt-2">
        <div class="row g-4">
            {{-- ROW 1: Core Operations --}}
            {{-- 1. Git Status --}}
            <div class="col-6 col-md-3">
                <div
                    class="border border-dashed border-gray-300 rounded p-3 bg-light-light h-100 d-flex flex-column justify-content-between">
                    <span data-bs-toggle="tooltip" data-bs-placement="top"
                        title="1. Tampilkan status berkas lokal (git status)" class="d-block mb-2">
                        <button type="button"
                            class="btn btn-primary w-100 d-inline-flex align-items-center justify-content-center shadow-xs"
                            onclick="triggerGitAction('status')">
                            <i class="ki-duotone ki-document fs-2 me-2"><span class="path1"></span><span
                                    class="path2"></span></i>
                            1. Git Status
                        </button>
                    </span>
                    <div class="text-muted fs-8 text-center">
                        {{ app()->getLocale() == 'en' ? 'Check status of modified & untracked files' : 'Cek status berkas lokal yang diubah atau baru' }}
                    </div>
                </div>
            </div>

            {{-- 2. Git Pull --}}
            <div class="col-6 col-md-3">
                <div
                    class="border border-dashed border-gray-300 rounded p-3 bg-light-light h-100 d-flex flex-column justify-content-between">
                    <span data-bs-toggle="tooltip" data-bs-placement="top"
                        title="2. Tarik pembaruan dari GitHub (git pull)" class="d-block mb-2">
                        <button type="button"
                            class="btn btn-info w-100 d-inline-flex align-items-center justify-content-center shadow-xs"
                            onclick="triggerGitAction('pull')">
                            <i class="ki-duotone ki-arrow-down fs-2 me-2"><span class="path1"></span><span
                                    class="path2"></span></i>
                            2. Git Pull
                        </button>
                    </span>
                    <div class="text-muted fs-8 text-center">
                        {{ app()->getLocale() == 'en' ? 'Pull latest updates from GitHub remote' : 'Tarik pembaruan terbaru dari repositori GitHub' }}
                    </div>
                </div>
            </div>

            {{-- 3. Git Push --}}
            <div class="col-6 col-md-3">
                <div
                    class="border border-dashed border-gray-300 rounded p-3 bg-light-light h-100 d-flex flex-column justify-content-between">
                    <span data-bs-toggle="tooltip" data-bs-placement="top"
                        title="3. Dorong commit lokal ke GitHub (git push)" class="d-block mb-2">
                        <button type="button"
                            class="btn btn-success w-100 d-inline-flex align-items-center justify-content-center shadow-xs"
                            onclick="triggerGitAction('push')">
                            <i class="ki-duotone ki-arrow-up fs-2 me-2"><span class="path1"></span><span
                                    class="path2"></span></i>
                            3. Git Push
                        </button>
                    </span>
                    <div class="text-muted fs-8 text-center">
                        {{ app()->getLocale() == 'en' ? 'Push committed local changes to GitHub' : 'Dorong komit lokal yang tertunda ke GitHub' }}
                    </div>
                </div>
            </div>

            {{-- 4. Commit + Push --}}
            <div class="col-6 col-md-3">
                <div
                    class="border border-dashed border-gray-300 rounded p-3 bg-light-light h-100 d-flex flex-column justify-content-between">
                    <span data-bs-toggle="tooltip" data-bs-placement="top"
                        title="4. Modal Form Commit + Push otomatis ke GitHub" class="d-block mb-2">
                        <button type="button"
                            class="btn btn-dark w-100 d-inline-flex align-items-center justify-content-center shadow-xs"
                            data-bs-toggle="modal" data-bs-target="#kt_modal_console_commit">
                            <i class="ki-duotone ki-send fs-2 me-2"><span class="path1"></span><span
                                    class="path2"></span></i>
                            4. Commit + Push
                        </button>
                    </span>
                    <div class="text-muted fs-8 text-center">
                        {{ app()->getLocale() == 'en' ? 'Form input message then auto commit & push' : 'Form pesan komit lalu otomatis commit & push' }}
                    </div>
                </div>
            </div>

            {{-- ROW 2: Releases & Tag Management --}}
            {{-- 5. Release Baru (Tag) --}}
            <div class="col-6 col-md-3">
                <div
                    class="border border-dashed border-gray-300 rounded p-3 bg-light-light h-100 d-flex flex-column justify-content-between">
                    <span data-bs-toggle="tooltip" data-bs-placement="top" title="5. Buat Tag Release Baru ke GitHub"
                        class="d-block mb-2">
                        <button type="button"
                            class="btn btn-outline btn-outline-primary btn-active-light-primary w-100 d-inline-flex align-items-center justify-content-center shadow-xs"
                            onclick="promptCreateTag()">
                            <i class="ki-duotone ki-tag fs-2 me-2"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span></i>
                            5. Release Baru (Tag)
                        </button>
                    </span>
                    <div class="text-muted fs-8 text-center">
                        {{ app()->getLocale() == 'en' ? 'Create new release tag (e.g. v1.3.5)' : 'Buat tag versi rilis baru (contoh: v1.3.5)' }}
                    </div>
                </div>
            </div>

            {{-- 6. Update Release (Force Tag) --}}
            <div class="col-6 col-md-3">
                <div
                    class="border border-dashed border-gray-300 rounded p-3 bg-light-light h-100 d-flex flex-column justify-content-between">
                    <span data-bs-toggle="tooltip" data-bs-placement="top"
                        title="6. Update paksa tag release yang sudah ada (force tag)" class="d-block mb-2">
                        <button type="button"
                            class="btn btn-outline btn-outline-warning btn-active-light-warning w-100 d-inline-flex align-items-center justify-content-center shadow-xs"
                            onclick="promptForceTag()">
                            <i class="ki-duotone ki-arrows-loop fs-2 me-2"><span class="path1"></span><span
                                    class="path2"></span></i>
                            6. Force Update Tag
                        </button>
                    </span>
                    <div class="text-muted fs-8 text-center">
                        {{ app()->getLocale() == 'en' ? 'Force overwrite existing release tag' : 'Update paksa tag rilis yang sudah ada' }}
                    </div>
                </div>
            </div>

            {{-- 7. Lihat Tag Release --}}
            <div class="col-6 col-md-3">
                <div
                    class="border border-dashed border-gray-300 rounded p-3 bg-light-light h-100 d-flex flex-column justify-content-between">
                    <span data-bs-toggle="tooltip" data-bs-placement="top"
                        title="7. Tampilkan seluruh daftar tag release terdaftar" class="d-block mb-2">
                        <button type="button"
                            class="btn btn-outline btn-outline-info btn-active-light-info w-100 d-inline-flex align-items-center justify-content-center shadow-xs"
                            onclick="triggerGitAction('view_tags')">
                            <i class="ki-duotone ki-eye fs-2 me-2"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span></i>
                            7. Lihat Tag Release
                        </button>
                    </span>
                    <div class="text-muted fs-8 text-center">
                        {{ app()->getLocale() == 'en' ? 'Display all registered git release tags' : 'Tampilkan seluruh daftar tag release terdaftar' }}
                    </div>
                </div>
            </div>

            {{-- 8. Hapus Tag Release --}}
            <div class="col-6 col-md-3">
                <div
                    class="border border-dashed border-gray-300 rounded p-3 bg-light-light h-100 d-flex flex-column justify-content-between">
                    <span data-bs-toggle="tooltip" data-bs-placement="top"
                        title="8. Hapus tag release lokal & remote GitHub" class="d-block mb-2">
                        <button type="button"
                            class="btn btn-outline btn-outline-danger btn-active-light-danger w-100 d-inline-flex align-items-center justify-content-center shadow-xs"
                            onclick="promptDeleteTag()">
                            <i class="ki-duotone ki-trash fs-2 me-2"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span
                                    class="path4"></span><span class="path5"></span></i>
                            8. Hapus Tag Release
                        </button>
                    </span>
                    <div class="text-muted fs-8 text-center">
                        {{ app()->getLocale() == 'en' ? 'Delete release tag from local & GitHub' : 'Hapus tag release dari lokal & remote GitHub' }}
                    </div>
                </div>
            </div>

            {{-- ROW 3: Resets & Branches --}}
            {{-- 9. Reset Perubahan Lokal --}}
            <div class="col-6 col-md-3">
                <div
                    class="border border-dashed border-gray-300 rounded p-3 bg-light-light h-100 d-flex flex-column justify-content-between">
                    <span data-bs-toggle="tooltip" data-bs-placement="top"
                        title="9. Hapus semua perubahan lokal (git reset --hard & git clean -fd)"
                        class="d-block mb-2">
                        <button type="button"
                            class="btn btn-warning w-100 d-inline-flex align-items-center justify-content-center shadow-xs"
                            onclick="confirmResetLocal()">
                            <i class="ki-duotone ki-arrows-circle fs-2 me-2"><span class="path1"></span><span
                                    class="path2"></span></i>
                            9. Reset Lokal
                        </button>
                    </span>
                    <div class="text-muted fs-8 text-center">
                        {{ app()->getLocale() == 'en' ? 'Discard uncommitted changes & extra files' : 'Hapus semua perubahan & file uncommitted' }}
                    </div>
                </div>
            </div>

            {{-- 10. Sync Ulang dari GitHub --}}
            <div class="col-6 col-md-3">
                <div
                    class="border border-dashed border-gray-300 rounded p-3 bg-light-light h-100 d-flex flex-column justify-content-between">
                    <span data-bs-toggle="tooltip" data-bs-placement="top"
                        title="10. Samakan repositori dengan origin (git fetch & reset hard origin)"
                        class="d-block mb-2">
                        <button type="button"
                            class="btn btn-danger w-100 d-inline-flex align-items-center justify-content-center shadow-xs"
                            onclick="confirmSyncOrigin()">
                            <i class="ki-duotone ki-arrows-loop fs-2 me-2"><span class="path1"></span><span
                                    class="path2"></span></i>
                            10. Sync dari Origin
                        </button>
                    </span>
                    <div class="text-muted fs-8 text-center">
                        {{ app()->getLocale() == 'en' ? 'Force sync local branch to GitHub origin' : 'Reset paksa branch lokal agar persis origin' }}
                    </div>
                </div>
            </div>

            {{-- 11. Ganti Branch --}}
            <div class="col-6 col-md-3">
                <div
                    class="border border-dashed border-gray-300 rounded p-3 bg-light-light h-100 d-flex flex-column justify-content-between">
                    <span data-bs-toggle="tooltip" data-bs-placement="top"
                        title="11. Pindah/checkout ke branch tertentu" class="d-block mb-2">
                        <button type="button"
                            class="btn btn-primary w-100 d-inline-flex align-items-center justify-content-center shadow-xs"
                            onclick="promptSwitchBranch()">
                            <i class="ki-duotone ki-route fs-2 me-2"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span
                                    class="path4"></span></i>
                            11. Ganti Branch
                        </button>
                    </span>
                    <div class="text-muted fs-8 text-center">
                        {{ app()->getLocale() == 'en' ? 'Switch active working branch target' : 'Pindah/checkout branch git kerja aktif' }}
                    </div>
                </div>
            </div>

            {{-- 12. Daftar Branch --}}
            <div class="col-6 col-md-3">
                <div
                    class="border border-dashed border-gray-300 rounded p-3 bg-light-light h-100 d-flex flex-column justify-content-between">
                    <span data-bs-toggle="tooltip" data-bs-placement="top"
                        title="12. Tampilkan seluruh branch lokal & remote" class="d-block mb-2">
                        <button type="button"
                            class="btn btn-info w-100 d-inline-flex align-items-center justify-content-center shadow-xs"
                            onclick="triggerGitAction('list_branches')">
                            <i class="ki-duotone ki-element-11 fs-2 me-2"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span
                                    class="path4"></span></i>
                            12. Daftar Branch
                        </button>
                    </span>
                    <div class="text-muted fs-8 text-center">
                        {{ app()->getLocale() == 'en' ? 'List all local & remote branches' : 'Tampilkan seluruh branch lokal & remote' }}
                    </div>
                </div>
            </div>

            {{-- ROW 4: History & Automation --}}
            {{-- 13. Git Log (10 Commit) --}}
            <div class="col-6 col-md-3">
                <div
                    class="border border-dashed border-gray-300 rounded p-3 bg-light-light h-100 d-flex flex-column justify-content-between">
                    <span data-bs-toggle="tooltip" data-bs-placement="top"
                        title="13. Lihat rincian log git commit 10 terakhir" class="d-block mb-2">
                        <button type="button"
                            class="btn btn-secondary text-gray-800 w-100 d-inline-flex align-items-center justify-content-center shadow-xs"
                            onclick="triggerGitAction('log')">
                            <i class="ki-duotone ki-time fs-2 me-2"><span class="path1"></span><span
                                    class="path2"></span></i>
                            13. Git Log (10 Commit)
                        </button>
                    </span>
                    <div class="text-muted fs-8 text-center">
                        {{ app()->getLocale() == 'en' ? 'Inspect last 10 git commit logs' : 'Lihat rincian log 10 commit terakhir' }}
                    </div>
                </div>
            </div>

            {{-- 14. Auto Release --}}
            <div class="col-6 col-md-3">
                <div
                    class="border border-dashed border-gray-300 rounded p-3 bg-light-light h-100 d-flex flex-column justify-content-between">
                    <span data-bs-toggle="tooltip" data-bs-placement="top"
                        title="14. 1-Click Commit + Push + Release Tag sekaligus" class="d-block mb-2">
                        <button type="button"
                            class="btn btn-success w-100 d-inline-flex align-items-center justify-content-center shadow-xs"
                            onclick="promptAutoRelease()">
                            <i class="ki-duotone ki-rocket fs-2 me-2"><span class="path1"></span><span
                                    class="path2"></span></i>
                            14. Auto Release
                        </button>
                    </span>
                    <div class="text-muted fs-8 text-center">
                        {{ app()->getLocale() == 'en' ? '1-Click add, commit, push & release tag' : '1-Click commit, push & buat tag release' }}
                    </div>
                </div>
            </div>

            {{-- 15. Fetch Remote All --}}
            <div class="col-6 col-md-3">
                <div
                    class="border border-dashed border-gray-300 rounded p-3 bg-light-light h-100 d-flex flex-column justify-content-between">
                    <span data-bs-toggle="tooltip" data-bs-placement="top"
                        title="15. Ambil pembaruan referensi remote (git fetch --all --prune)" class="d-block mb-2">
                        <button type="button"
                            class="btn btn-dark w-100 d-inline-flex align-items-center justify-content-center shadow-xs"
                            onclick="triggerGitAction('fetch_all')">
                            <i class="ki-duotone ki-down fs-2 me-2"><span class="path1"></span><span
                                    class="path2"></span></i>
                            15. Fetch Remote All
                        </button>
                    </span>
                    <div class="text-muted fs-8 text-center">
                        {{ app()->getLocale() == 'en' ? 'Fetch & prune remote branch references' : 'Ambil & bersihkan referensi remote branch' }}
                    </div>
                </div>
            </div>

            {{-- 16. Git Diff Summary --}}
            <div class="col-6 col-md-3">
                <div
                    class="border border-dashed border-gray-300 rounded p-3 bg-light-light h-100 d-flex flex-column justify-content-between">
                    <span data-bs-toggle="tooltip" data-bs-placement="top"
                        title="16. Tampilkan statistik perubahan berkas lokal (git diff --stat)" class="d-block mb-2">
                        <button type="button"
                            class="btn btn-outline btn-outline-dark btn-active-light-dark w-100 d-inline-flex align-items-center justify-content-center shadow-xs"
                            onclick="triggerGitAction('git_diff')">
                            <i class="ki-duotone ki-code fs-2 me-2"><span class="path1"></span><span
                                    class="path2"></span></i>
                            16. Git Diff Summary
                        </button>
                    </span>
                    <div class="text-muted fs-8 text-center">
                        {{ app()->getLocale() == 'en' ? 'Display summary stats of changed files' : 'Tampilkan statistik berkas yang diubah' }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Git Log History Table --}}
<div class="card shadow-xs">
    <div class="card-header border-0 pt-6">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-gray-900 fs-5 d-flex align-items-center">
                <i class="ki-duotone ki-time fs-2 text-dark me-2"><span class="path1"></span><span
                        class="path2"></span></i>
                {{ app()->getLocale() == 'en' ? 'Recent Commits Log (Top 10)' : 'Riwayat Log Commit Terakhir (10 Teratas)' }}
            </span>
        </h3>
    </div>

    <div class="card-body py-3">
        <div class="table-responsive">
            <table class="table table-row-bordered table-row-gray-200 align-middle gs-0 gy-3">
                <thead>
                    <tr class="fw-bold text-muted bg-light">
                        <th class="ps-4 min-w-100px rounded-start">Commit Hash</th>
                        <th class="min-w-300px rounded-end">Commit Message</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($gitLogs as $log)
                        <tr>
                            <td class="ps-4">
                                <span
                                    class="badge badge-light-primary font-monospace fw-bold fs-7">{{ $log['hash'] }}</span>
                            </td>
                            <td>
                                <span class="text-gray-800 fw-medium fs-7">{{ $log['message'] }}</span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2" class="text-center text-muted py-6">
                                {{ app()->getLocale() == 'en' ? 'No Git commits recorded.' : 'Belum ada log commit yang tercatat.' }}
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
