<!--begin:Form Partial for App Profil-->
<form id="kt_form_app_profil" class="form" enctype="multipart/form-data">
    @csrf
    <input type="hidden" id="profil_id" name="id" value="" />
    <input type="hidden" id="form_method" name="_method" value="POST" />

    <!--begin::Input group: Nama Aplikasi-->
    <div class="d-flex flex-column mb-8 fv-row">
        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
            <span class="required">Nama Aplikasi</span>
        </label>
        <input type="text" class="form-control form-control-solid" placeholder="Contoh: Master WebAdmin"
            name="nama_aplikasi" id="input_nama_aplikasi" required />
    </div>
    <!--end::Input group-->

    <!--begin::Input group: Singkatan & Tahun-->
    <div class="row g-9 mb-8">
        <div class="col-md-6 fv-row">
            <label class="fs-6 fw-semibold mb-2">Singkatan / Acronym</label>
            <input type="text" class="form-control form-control-solid" placeholder="Contoh: MWA"
                name="singkatan_aplikasi" id="input_singkatan_aplikasi" />
        </div>
        <div class="col-md-6 fv-row">
            <label class="required fs-6 fw-semibold mb-2">Tahun Rilis / Footer</label>
            <input type="text" class="form-control form-control-solid" placeholder="Contoh: 2026"
                name="tahun" id="input_tahun" required />
        </div>
    </div>
    <!--end::Input group-->

    <!--begin::Input group: Pembuat / Developer-->
    <div class="d-flex flex-column mb-8 fv-row">
        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
            <span class="required">Pembuat / Developer (Footer)</span>
        </label>
        <input type="text" class="form-control form-control-solid" placeholder="Contoh: Master Admin Team"
            name="pembuat" id="input_pembuat" required />
    </div>
    <!--end::Input group-->

    <!--begin::Input group: Logo Utama (Panjang / Horizontal)-->
    <div class="d-flex flex-column mb-8 fv-row">
        <label class="fs-6 fw-semibold mb-2">Logo Utama (Panjang / Horizontal)</label>
        <input type="file" class="form-control form-control-solid" name="logo" id="input_logo" accept="image/*" />
        <div class="form-text">Digunakan untuk sidebar posisi terbuka (Expanded). Format: PNG, JPG, SVG, WEBP (Maks. 2MB)</div>

        <!--Preview Container Logo Utama-->
        <div id="logo_preview_container" class="mt-3 d-none">
            <span class="fs-7 fw-semibold text-gray-600 d-block mb-1">Preview Logo Utama:</span>
            <div class="symbol symbol-100px bg-light p-2 rounded border">
                <img id="logo_preview_img" src="" alt="Logo Utama Preview" class="object-fit-contain mw-100 mh-100" />
            </div>
        </div>
    </div>
    <!--end::Input group-->

    <!--begin::Input group: Logo Ringkas (Kotak / Small Icon Sidebar Minimize)-->
    <div class="d-flex flex-column mb-8 fv-row">
        <label class="fs-6 fw-semibold mb-2">Logo Ringkas / Icon (Kotak)</label>
        <input type="file" class="form-control form-control-solid" name="logo_small" id="input_logo_small" accept="image/*" />
        <div class="form-text">Digunakan untuk sidebar posisi ciut (Minimized). Format: PNG, JPG, SVG, WEBP (Maks. 2MB)</div>

        <!--Preview Container Logo Ringkas-->
        <div id="logo_small_preview_container" class="mt-3 d-none">
            <span class="fs-7 fw-semibold text-gray-600 d-block mb-1">Preview Logo Ringkas:</span>
            <div class="symbol symbol-50px symbol-circle bg-light p-2 rounded border">
                <img id="logo_small_preview_img" src="" alt="Logo Small Preview" class="object-fit-contain mw-100 mh-100" />
            </div>
        </div>
    </div>
    <!--end::Input group-->

    <!--begin::Input group: Favicon (Shortcut Icon Browser)-->
    <div class="d-flex flex-column mb-8 fv-row">
        <label class="fs-6 fw-semibold mb-2">Favicon Browser (Shortcut Icon)</label>
        <input type="file" class="form-control form-control-solid" name="favicon" id="input_favicon" accept="image/*,.ico" />
        <div class="form-text">Digunakan untuk ikon di tab browser. Format: ICO, PNG, SVG (Maks. 1MB)</div>

        <!--Preview Container Favicon-->
        <div id="favicon_preview_container" class="mt-3 d-none">
            <span class="fs-7 fw-semibold text-gray-600 d-block mb-1">Preview Favicon Browser:</span>
            <div class="symbol symbol-35px bg-light p-2 rounded border">
                <img id="favicon_preview_img" src="" alt="Favicon Preview" class="object-fit-contain mw-100 mh-100" />
            </div>
        </div>
    </div>
    <!--end::Input group-->

    <!--begin::Input group: Deskripsi-->
    <div class="d-flex flex-column mb-8 fv-row">
        <label class="fs-6 fw-semibold mb-2">Deskripsi / Catatan</label>
        <textarea class="form-control form-control-solid" rows="3" name="deskripsi" id="input_deskripsi"
            placeholder="Tambahkan deskripsi singkat aplikasi..."></textarea>
    </div>
    <!--end::Input group-->

    <!--begin::Input group: Active Checkbox-->
    <div class="d-flex flex-stack mb-8">
        <div class="me-5">
            <label class="fs-6 fw-semibold">Jadikan Profil Utama Aktif</label>
            <div class="fs-7 text-muted">Profil yang aktif akan langsung digunakan untuk header, logo, & footer</div>
        </div>
        <label class="form-check form-switch form-check-custom form-check-solid">
            <input class="form-check-input" type="checkbox" name="active" value="1" id="input_active" checked />
        </label>
    </div>
    <!--end::Input group-->

    <!--begin::Actions-->
    <div class="text-center pt-5">
        <button type="button" class="btn btn-light me-3" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" id="btn_submit_profil" class="btn btn-primary">
            <span class="indicator-label">Simpan Data</span>
            <span class="indicator-progress">Memproses...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </span>
        </button>
    </div>
    <!--end::Actions-->
</form>
<!--end:Form Partial-->
