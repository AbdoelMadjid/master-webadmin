<div class="card card-flush shadow-xs border border-gray-200">
    <div class="card-header align-items-center py-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-gray-900 fs-4">{{ app()->getLocale() == 'en' ? 'Website Identity & Logo Configuration' : 'Konfigurasi Identitas & Logo Website' }}</span>
            <span class="text-muted mt-1 fw-semibold fs-7">{{ app()->getLocale() == 'en' ? 'Configure website brand name, established year, main logo, and mobile mini logo' : 'Atur nama kampus/aplikasi, tahun berdiri, logo utama di navbar, dan logo mini responsif' }}</span>
        </h3>
    </div>

    <div class="card-body pt-0">
        <form action="{{ route('pageconfig.website-profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="address" value="{{ $profile->address }}">
            <input type="hidden" name="address_en" value="{{ $profile->address_en }}">
            <input type="hidden" name="copyright_text" value="{{ $profile->copyright_text }}">
            <input type="hidden" name="copyright_text_en" value="{{ $profile->copyright_text_en }}">
            <input type="hidden" name="phone" value="{{ $profile->phone }}">
            <input type="hidden" name="email" value="{{ $profile->email }}">

            <div class="row g-9 mb-8">
                <!-- Website Name ID -->
                <div class="col-md-6 fv-row">
                    <label class="required fs-6 fw-semibold mb-2">{{ app()->getLocale() == 'en' ? 'Website Name (Indonesian)' : 'Nama Website / Kampus (Bahasa Indonesia)' }}</label>
                    <input type="text" class="form-control form-control-solid" name="name" value="{{ old('name', $profile->name) }}" required />
                </div>

                <!-- Website Name EN -->
                <div class="col-md-6 fv-row">
                    <label class="fs-6 fw-semibold mb-2">{{ app()->getLocale() == 'en' ? 'Website Name (English)' : 'Nama Website / Kampus (Bahasa Inggris)' }}</label>
                    <input type="text" class="form-control form-control-solid" name="name_en" value="{{ old('name_en', $profile->name_en) }}" />
                </div>
            </div>

            <div class="row g-9 mb-8">
                <!-- Established Year -->
                <div class="col-md-6 fv-row">
                    <label class="required fs-6 fw-semibold mb-2">{{ app()->getLocale() == 'en' ? 'Established Year (App Year)' : 'Tahun Berdiri / Tahun Aplikasi' }}</label>
                    <input type="text" class="form-control form-control-solid" name="established_year" value="{{ old('established_year', $profile->established_year) }}" required />
                    <div class="text-muted fs-7 mt-1">{{ app()->getLocale() == 'en' ? 'Appears in footer copyright (e.g. Sakola Repalogic - Sejak 1978)' : 'Ditampilkan pada footer copyright (contoh: Sakola Repalogic - Sejak 1978)' }}</div>
                </div>

                <!-- Email -->
                <div class="col-md-6 fv-row">
                    <label class="fs-6 fw-semibold mb-2">{{ app()->getLocale() == 'en' ? 'Official Email' : 'Email Resmi' }}</label>
                    <input type="email" class="form-control form-control-solid" name="email" value="{{ old('email', $profile->email) }}" />
                </div>
            </div>

            <div class="row g-9 mb-8">
                <!-- Main Logo -->
                <div class="col-md-6 fv-row">
                    <label class="fs-6 fw-semibold mb-2">{{ app()->getLocale() == 'en' ? 'Main Navbar Logo' : 'Logo Utama Navbar (Navbar Brand)' }}</label>
                    <div class="d-flex align-items-center gap-5">
                        <div class="symbol symbol-75px symbol-lg-100px bg-light p-3 border rounded">
                            <img src="{{ asset($profile->logo ?? 'assets/img/logo/logo.png') }}" alt="Main Logo" class="img-fluid object-fit-contain" />
                        </div>
                        <div class="flex-grow-1">
                            <input type="file" class="form-control form-control-solid" name="logo" accept="image/png,image/jpeg,image/svg+xml,image/webp" />
                            <div class="text-muted fs-7 mt-1">{{ app()->getLocale() == 'en' ? 'Recommended format: PNG / SVG with transparent background. Max 2MB.' : 'Format yang disarankan: PNG / SVG transparan. Maksimal 2MB.' }}</div>
                        </div>
                    </div>
                </div>

                <!-- Logo Mini -->
                <div class="col-md-6 fv-row">
                    <label class="fs-6 fw-semibold mb-2">{{ app()->getLocale() == 'en' ? 'Mobile / Mini Logo' : 'Logo Mini Responsif (Tampilan Mobile)' }}</label>
                    <div class="d-flex align-items-center gap-5">
                        <div class="symbol symbol-75px symbol-lg-100px bg-light p-3 border rounded">
                            <img src="{{ asset($profile->logo_mini ?? 'assets/img/logo/logo-mini.png') }}" alt="Logo Mini" class="img-fluid object-fit-contain" />
                        </div>
                        <div class="flex-grow-1">
                            <input type="file" class="form-control form-control-solid" name="logo_mini" accept="image/png,image/jpeg,image/svg+xml,image/webp" />
                            <div class="text-muted fs-7 mt-1">{{ app()->getLocale() == 'en' ? 'Compact square logo for tablet & mobile views.' : 'Logo ringkas untuk tampilan tablet & mobile.' }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end pt-5">
                <button type="submit" class="btn btn-primary min-w-150px">
                    <i class="ki-duotone ki-check fs-2 me-1"></i>
                    {{ app()->getLocale() == 'en' ? 'Save Profile Identity' : 'Simpan Identitas Profil' }}
                </button>
            </div>
        </form>
    </div>
</div>
