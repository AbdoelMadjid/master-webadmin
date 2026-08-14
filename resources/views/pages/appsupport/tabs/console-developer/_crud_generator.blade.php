<div class="card shadow-xs">
    <div class="card-header border-0 pt-6">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-gray-900 fs-5 d-flex align-items-center">
                <i class="ki-duotone ki-element-11 fs-2 text-primary me-2"><span class="path1"></span><span
                        class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                {{ app()->getLocale() == 'en' ? 'AGENTS.md Compliant 1-Click Code & CRUD Generator' : 'Generator Komponen & CRUD 1-Click (Standar AGENTS.md)' }}
            </span>
            <span class="text-muted mt-1 fw-semibold fs-7">
                {{ app()->getLocale() == 'en'
                    ? 'Generates Model, Controller, Form Request, Blade Views, and Bilingual Operational Guide Modal matching project rules'
                    : 'Membuat Model, Controller, Form Request, Blade View, dan Modal Petunjuk Dwibahasa sesuai aturan arsitektur proyek' }}
            </span>
        </h3>
    </div>

    <div class="card-body pt-4">
        <form id="kt_form_generator" class="form" onsubmit="submitGenerator(event)">
            <div class="row g-6 mb-6">
                {{-- SubFolder Name --}}
                <div class="col-md-4">
                    <label class="required form-label fw-semibold fs-6">
                        SubFolder Namespace / Module
                    </label>
                    <input type="text" class="form-control form-control-solid" name="subfolder" id="gen_subfolder"
                        placeholder="Contoh: AppSupport, MasterData, Informasi" required />
                    <div class="form-text fs-8">
                        Nama subfolder tempat Controller (<code>App\Http\Controllers\<span
                                class="text-primary">SubFolder</span></code>) dan Model berada.
                    </div>
                </div>

                {{-- Feature Name --}}
                <div class="col-md-4">
                    <label class="required form-label fw-semibold fs-6">
                        Nama Fitur / Model (StudlyCase)
                    </label>
                    <input type="text" class="form-control form-control-solid" name="feature" id="gen_feature"
                        placeholder="Contoh: Pengumuman, KategoriBerita, UserGuide" required />
                    <div class="form-text fs-8">
                        Nama fitur dalam format StudlyCase tanpa spasi.
                    </div>
                </div>

                {{-- Generator Type --}}
                <div class="col-md-4">
                    <label class="required form-label fw-semibold fs-6">
                        Tipe Komponen yang Dihasilkan
                    </label>
                    <select class="form-select form-select-solid" name="generator_type" id="gen_type" required>
                        <option value="full" selected>🚀 1-Click Fitur Lengkap (Model + Controller + Request + Blade +
                            Help Modal)</option>
                        <option value="model">📦 Model Saja</option>
                        <option value="controller">🎮 Controller Saja</option>
                        <option value="request">🔒 Form Request Saja</option>
                        <option value="blade">🎨 Blade View & Modal Help Saja</option>
                    </select>
                    <div class="form-text fs-8">
                        Pilih paket pembuatan komponen sesuai kebutuhan.
                    </div>
                </div>
            </div>

            <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-4 mb-6">
                <i class="ki-duotone ki-information-5 fs-2tx text-primary me-4"><span class="path1"></span><span
                        class="path2"></span><span class="path3"></span></i>
                <div class="d-flex flex-stack flex-grow-1">
                    <div class="fw-semibold fs-7 text-gray-700">
                        <strong>Aturan Arsitektur Proyek (AGENTS.md):</strong><br />
                        1. Controller & Model akan dibuat di subfolder yang mencerminkan nama folder view.<br />
                        2. Validasi otomatis diekstrak ke Form Request
                        (<code>App\Http\Requests\SubFolder\...</code>).<br />
                        3. Modal Petunjuk Operasional Dwibahasa (ID/EN) otomatis dibuat di
                        <code>views/pages/{subfolder}/partials/{feature}-help-modal.blade.php</code>.
                    </div>
                </div>
            </div>

            <div class="d-flex flex-column align-items-end">
                <button type="submit" class="btn btn-primary shadow-xs" id="kt_btn_submit_gen">
                    <i class="ki-duotone ki-check fs-2 me-1"><span class="path1"></span><span
                            class="path2"></span></i>
                    {{ app()->getLocale() == 'en' ? 'Generate Components Now' : 'Jalankan Generator Sekarang' }}
                </button>
                <div class="text-muted fs-8 mt-2">
                    {{ app()->getLocale() == 'en' ? 'Generates files adhering to AGENTS.md architecture' : 'Membuat file komponen otomatis sesuai standar AGENTS.md' }}
                </div>
            </div>
        </form>
    </div>
</div>
