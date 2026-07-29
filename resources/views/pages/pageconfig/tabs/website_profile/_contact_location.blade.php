<div class="card card-flush shadow-xs border border-gray-200">
    <div class="card-header align-items-center py-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-gray-900 fs-4">{{ app()->getLocale() == 'en' ? 'Footer Address, Contact & Copyright Settings' : 'Pengaturan Alamat, Kontak & Copyright Footer' }}</span>
            <span class="text-muted mt-1 fw-semibold fs-7">{{ app()->getLocale() == 'en' ? 'Configure official address and copyright text rendered below footer navigation' : 'Atur alamat resmi dan teks hak cipta yang muncul di bagian paling bawah setelah navigasi footer' }}</span>
        </h3>
    </div>

    <div class="card-body pt-0">
        <form action="{{ route('pageconfig.website-profile.update') }}" method="POST">
            @csrf
            <input type="hidden" name="name" value="{{ $profile->name }}">
            <input type="hidden" name="name_en" value="{{ $profile->name_en }}">
            <input type="hidden" name="established_year" value="{{ $profile->established_year }}">

            <div class="row g-9 mb-8">
                <!-- Address ID -->
                <div class="col-md-6 fv-row">
                    <label class="required fs-6 fw-semibold mb-2">{{ app()->getLocale() == 'en' ? 'Footer Address (Indonesian)' : 'Alamat Footer (Bahasa Indonesia)' }}</label>
                    <input type="text" class="form-control form-control-solid" name="address" value="{{ old('address', $profile->address) }}" required placeholder="Contoh: Kingston, Ontario, Kanada" />
                    <div class="text-muted fs-7 mt-1">{{ app()->getLocale() == 'en' ? 'Displayed next to location icon at footer bottom.' : 'Ditampilkan di samping ikon lokasi pada bagian bawah footer.' }}</div>
                </div>

                <!-- Address EN -->
                <div class="col-md-6 fv-row">
                    <label class="fs-6 fw-semibold mb-2">{{ app()->getLocale() == 'en' ? 'Footer Address (English)' : 'Alamat Footer (Bahasa Inggris)' }}</label>
                    <input type="text" class="form-control form-control-solid" name="address_en" value="{{ old('address_en', $profile->address_en) }}" placeholder="Example: Kingston, Ontario, Canada" />
                </div>
            </div>

            <div class="row g-9 mb-8">
                <!-- Copyright Text ID -->
                <div class="col-md-6 fv-row">
                    <label class="fs-6 fw-semibold mb-2">{{ app()->getLocale() == 'en' ? 'Copyright Text (Indonesian)' : 'Teks Copyright (Bahasa Indonesia)' }}</label>
                    <input type="text" class="form-control form-control-solid" name="copyright_text" value="{{ old('copyright_text', $profile->copyright_text) }}" placeholder="Contoh: Sakola Repalogic - Sejak 1978" />
                    <div class="text-muted fs-7 mt-1">{{ app()->getLocale() == 'en' ? 'Text displayed on bottom-left copyright note.' : 'Teks catatan hak cipta di bagian bawah kiri footer.' }}</div>
                </div>

                <!-- Copyright Text EN -->
                <div class="col-md-6 fv-row">
                    <label class="fs-6 fw-semibold mb-2">{{ app()->getLocale() == 'en' ? 'Copyright Text (English)' : 'Teks Copyright (Bahasa Inggris)' }}</label>
                    <input type="text" class="form-control form-control-solid" name="copyright_text_en" value="{{ old('copyright_text_en', $profile->copyright_text_en) }}" placeholder="Example: University of Unify since 1978" />
                </div>
            </div>

            <div class="row g-9 mb-8">
                <!-- Phone -->
                <div class="col-md-6 fv-row">
                    <label class="fs-6 fw-semibold mb-2">{{ app()->getLocale() == 'en' ? 'Official Phone' : 'Nomor Telepon Resmi' }}</label>
                    <input type="text" class="form-control form-control-solid" name="phone" value="{{ old('phone', $profile->phone) }}" placeholder="+1 (613) 533-2000" />
                </div>

                <!-- Email -->
                <div class="col-md-6 fv-row">
                    <label class="fs-6 fw-semibold mb-2">{{ app()->getLocale() == 'en' ? 'Official Email' : 'Email Resmi Kampus' }}</label>
                    <input type="email" class="form-control form-control-solid" name="email" value="{{ old('email', $profile->email) }}" placeholder="info@unify.edu" />
                </div>
            </div>

            <div class="d-flex justify-content-end pt-5">
                <button type="submit" class="btn btn-primary min-w-150px">
                    <i class="ki-duotone ki-check fs-2 me-1"></i>
                    {{ app()->getLocale() == 'en' ? 'Save Address & Copyright' : 'Simpan Alamat & Copyright' }}
                </button>
            </div>
        </form>
    </div>
</div>
