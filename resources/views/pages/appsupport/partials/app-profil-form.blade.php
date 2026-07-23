<!--begin:Form Partial for App Profil-->
<form id="kt_form_app_profil" class="form" enctype="multipart/form-data" action="{{ isset($appProfil) && $appProfil->id ? route('app-profil.update', $appProfil->id) : route('app-profil.store') }}" method="POST">
    @csrf
    @if (isset($appProfil) && $appProfil->id)
        @method('PUT')
    @endif
    <input type="hidden" id="profil_id" name="id" value="{{ $appProfil->id ?? '' }}" />

    <!--begin::Row - Informasi Utama Aplikasi-->
    <div class="row g-9 mb-8">
        <!--Nama Aplikasi-->
        <div class="col-md-6 fv-row">
            <label class="required fs-6 fw-semibold mb-2">Nama Aplikasi</label>
            <input type="text" class="form-control form-control-solid" placeholder="Contoh: Master WebAdmin"
                name="nama_aplikasi" id="input_nama_aplikasi" value="{{ old('nama_aplikasi', $appProfil->nama_aplikasi ?? '') }}" required />
        </div>

        <!--Singkatan Aplikasi-->
        <div class="col-md-6 fv-row">
            <label class="fs-6 fw-semibold mb-2">Singkatan / Acronym</label>
            <input type="text" class="form-control form-control-solid" placeholder="Contoh: MWA"
                name="singkatan_aplikasi" id="input_singkatan_aplikasi" value="{{ old('singkatan_aplikasi', $appProfil->singkatan_aplikasi ?? '') }}" />
        </div>
    </div>

    <div class="row g-9 mb-8">
        <!--Pembuat / Developer-->
        <div class="col-md-6 fv-row">
            <label class="required fs-6 fw-semibold mb-2">Pembuat / Developer (Footer)</label>
            <input type="text" class="form-control form-control-solid" placeholder="Contoh: Master Admin Team"
                name="pembuat" id="input_pembuat" value="{{ old('pembuat', $appProfil->pembuat ?? '') }}" required />
        </div>

        <!--Tahun Rilis / Footer-->
        <div class="col-md-6 fv-row">
            <label class="required fs-6 fw-semibold mb-2">Tahun Rilis / Footer</label>
            <input type="text" class="form-control form-control-solid" placeholder="Contoh: 2026"
                name="tahun" id="input_tahun" value="{{ old('tahun', $appProfil->tahun ?? '') }}" required />
        </div>
    </div>

    <!--Deskripsi Aplikasi-->
    <div class="d-flex flex-column mb-8 fv-row">
        <label class="fs-6 fw-semibold mb-2">Deskripsi Aplikasi</label>
        <textarea class="form-control form-control-solid" rows="3" name="deskripsi" id="input_deskripsi"
            placeholder="Tambahkan deskripsi singkat aplikasi...">{{ old('deskripsi', $appProfil->deskripsi ?? '') }}</textarea>
    </div>

    <!--Section Upload Images-->
    <div class="separator separator-dashed my-8"></div>
    <h4 class="fw-bold mb-6 text-gray-800">Logo & Favicon Aplikasi</h4>

    <div class="row g-9 mb-8">
        <!--Logo Utama (Horizontal)-->
        <div class="col-md-4 fv-row">
            <label class="fs-6 fw-semibold mb-2">Logo Utama (Horizontal)</label>
            <input type="file" class="form-control form-control-solid image-input-file" name="logo" id="input_logo" accept="image/*" data-preview="#logo_preview_img" data-container="#logo_preview_container" />
            <div class="form-text">Posisi sidebar terbuka (Expanded). Maks. 2MB</div>

            <div id="logo_preview_container" class="mt-3 {{ !empty($appProfil?->logo_url) ? '' : 'd-none' }}">
                <span class="fs-7 fw-semibold text-gray-600 d-block mb-1">Preview Logo Utama:</span>
                <div class="symbol symbol-100px bg-light p-2 rounded border">
                    <img id="logo_preview_img" src="{{ $appProfil?->logo_url ?? '' }}" alt="Logo Utama Preview" class="object-fit-contain mw-100 mh-100" />
                </div>
            </div>
        </div>

        <!--Logo Ringkas (Square Icon)-->
        <div class="col-md-4 fv-row">
            <label class="fs-6 fw-semibold mb-2">Logo Ringkas / Icon (Kotak)</label>
            <input type="file" class="form-control form-control-solid image-input-file" name="logo_small" id="input_logo_small" accept="image/*" data-preview="#logo_small_preview_img" data-container="#logo_small_preview_container" />
            <div class="form-text">Posisi sidebar ciut (Minimized). Maks. 2MB</div>

            <div id="logo_small_preview_container" class="mt-3 {{ !empty($appProfil?->logo_small_url) ? '' : 'd-none' }}">
                <span class="fs-7 fw-semibold text-gray-600 d-block mb-1">Preview Logo Ringkas:</span>
                <div class="symbol symbol-50px symbol-circle bg-light p-2 rounded border">
                    <img id="logo_small_preview_img" src="{{ $appProfil?->logo_small_url ?? '' }}" alt="Logo Small Preview" class="object-fit-contain mw-100 mh-100" />
                </div>
            </div>
        </div>

        <!--Favicon Browser-->
        <div class="col-md-4 fv-row">
            <label class="fs-6 fw-semibold mb-2">Favicon Browser</label>
            <input type="file" class="form-control form-control-solid image-input-file" name="favicon" id="input_favicon" accept="image/*,.ico" data-preview="#favicon_preview_img" data-container="#favicon_preview_container" />
            <div class="form-text">Ikon tab browser (Favicon). Maks. 1MB</div>

            <div id="favicon_preview_container" class="mt-3 {{ !empty($appProfil?->favicon_url) ? '' : 'd-none' }}">
                <span class="fs-7 fw-semibold text-gray-600 d-block mb-1">Preview Favicon:</span>
                <div class="symbol symbol-35px bg-light p-2 rounded border">
                    <img id="favicon_preview_img" src="{{ $appProfil?->favicon_url ?? '' }}" alt="Favicon Preview" class="object-fit-contain mw-100 mh-100" />
                </div>
            </div>
        </div>
    </div>

    <!--Hidden active state, set 1 for single app-->
    <input type="hidden" name="active" value="1" />

    <!--Actions-->
    <div class="d-flex justify-content-end pt-5">
        <button type="submit" id="btn_submit_profil" class="btn btn-primary px-8">
            <span class="indicator-label">
                <i class="ki-duotone ki-check fs-2 me-1"><span class="path1"></span><span class="path2"></span></i> Simpan Perubahan
            </span>
            <span class="indicator-progress">
                Memproses... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </span>
        </button>
    </div>
</form>
<!--end:Form Partial-->
