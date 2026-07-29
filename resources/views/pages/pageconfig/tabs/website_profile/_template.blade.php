<!--begin::Website Template Selection Tab-->
<div class="card shadow-xs border-0">
    <div class="card-header border-0 pt-6">
        <div class="card-title d-flex align-items-center gap-3">
            <div class="symbol symbol-40px symbol-circle bg-light-primary p-2">
                <i class="ki-duotone ki-element-11 fs-2 text-primary">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                </i>
            </div>
            <div>
                <h3 class="fw-bold text-gray-900 m-0">
                    {{ app()->getLocale() == 'en' ? 'Website Template Management' : 'Manajemen & Pilihan Template Website' }}
                </h3>
                <span class="text-muted fs-7">
                    {{ app()->getLocale() == 'en' ? 'Select and configure active frontend layout templates for your public website.' : 'Pilih dan atur template tampilan publik website yang aktif untuk pengunjung.' }}
                </span>
            </div>
        </div>
    </div>

    <div class="card-body pt-2">
        <!--begin::Information Alert-->
        <div class="alert alert-dismissible bg-light-info border border-info d-flex flex-column flex-sm-row p-5 mb-8">
            <i class="ki-duotone ki-information-5 fs-2hx text-info me-4 mb-5 mb-sm-0">
                <span class="path1"></span>
                <span class="path2"></span>
                <span class="path3"></span>
            </i>
            <div class="d-flex flex-column pe-0 pe-sm-10 justify-content-center">
                <h5 class="mb-1 text-info">
                    {{ app()->getLocale() == 'en' ? 'Multi-Template Architecture Standards' : 'Aturan Standar Arsitektur Multi-Template' }}
                </h5>
                <span class="fs-7 text-gray-700">
                    {{ app()->getLocale() == 'en' 
                        ? 'All registered website templates strictly inherit data configured under Website Profile, Menu Website, Website Features, and Page Content (Slide Banners & CTA). Adding new templates in the future will automatically integrate with your existing site data.' 
                        : 'Semua template website yang terdaftar secara otomatis menggunakan data dari Profil Website, Menu Website, Website Features, dan Page Content (Slide Banner & CTA). Penambahan template baru di masa mendatang akan secara otomatis menyesuaikan dengan data website yang ada.' }}
                </span>
            </div>
        </div>
        <!--end::Information Alert-->

        <!--begin::Template Cards Grid-->
        <div class="row g-6">
            @foreach($templates as $key => $template)
                <div class="col-md-6 col-lg-4">
                    <div class="card schema-card h-100 {{ $template['is_active'] ? 'border-2 border-primary bg-light-primary bg-opacity-10' : 'border border-gray-300' }}">
                        <!--begin::Card Header-->
                        <div class="card-header border-0 pt-5 pb-0 min-h-auto">
                            <div class="card-title m-0">
                                @if($template['is_active'])
                                    <span class="badge badge-primary fs-8 fw-bold">
                                        <i class="ki-duotone ki-check-circle fs-7 text-white me-1"><span class="path1"></span><span class="path2"></span></i>
                                        {{ app()->getLocale() == 'en' ? 'Active Standard' : 'Standar Terpilih' }}
                                    </span>
                                @else
                                    <span class="badge badge-light-secondary text-gray-700 fs-8 fw-bold">
                                        {{ app()->getLocale() == 'en' ? 'Available' : 'Tersedia' }}
                                    </span>
                                @endif
                            </div>
                            <div class="card-toolbar m-0">
                                <span class="badge badge-light-info fs-8">{{ $template['version'] ?? '1.0.0' }}</span>
                            </div>
                        </div>
                        <!--end::Card Header-->

                        <!--begin::Card Body-->
                        <div class="card-body d-flex flex-column justify-content-between p-6">
                            <div>
                                <!--begin::Template Thumbnail & Header-->
                                <div class="d-flex align-items-center gap-4 mb-4">
                                    <div class="symbol symbol-50px symbol-2px rounded p-2 bg-white shadow-xs">
                                        <i class="ki-duotone ki-element-11 fs-2x text-primary">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>
                                    </div>
                                    <div>
                                        <h4 class="fw-bold text-gray-900 m-0 fs-5">
                                            {{ app()->getLocale() == 'en' ? ($template['name'] ?? $key) : ($template['name_id'] ?? $template['name']) }}
                                        </h4>
                                        <span class="text-muted fs-8">
                                            {{ app()->getLocale() == 'en' ? 'Author: ' : 'Pengembang: ' }} {{ $template['author'] ?? 'System' }}
                                        </span>
                                    </div>
                                </div>
                                <!--end::Template Thumbnail & Header-->

                                <!--begin::Description-->
                                <p class="text-gray-600 fs-7 mb-4">
                                    {{ app()->getLocale() == 'en' ? ($template['description'] ?? '') : ($template['description_id'] ?? $template['description']) }}
                                </p>
                                <!--end::Description-->

                                <!--begin::Supported Features Badges-->
                                <div class="d-flex flex-wrap gap-1 mb-5">
                                    @foreach($template['supports'] ?? [] as $feat)
                                        <span class="badge badge-light-primary fs-9 fw-semibold">
                                            {{ str_replace('_', ' ', ucfirst($feat)) }}
                                        </span>
                                    @endforeach
                                </div>
                                <!--end::Supported Features Badges-->
                            </div>

                            <!--begin::Action Form-->
                            <div class="pt-4 border-top border-gray-200">
                                @if($template['is_active'])
                                    <button type="button" class="btn btn-light-primary btn-sm w-100 fw-bold disabled" disabled>
                                        <i class="ki-duotone ki-check fs-4 me-1"><span class="path1"></span><span class="path2"></span></i>
                                        {{ app()->getLocale() == 'en' ? 'Currently Active Standard' : 'Template Terpilih (Aktif)' }}
                                    </button>
                                @else
                                    <form action="{{ route('pageconfig.website-profile.update') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="template_slug" value="{{ $key }}">
                                        <button type="submit" class="btn btn-primary btn-sm w-100 fw-bold">
                                            <i class="ki-duotone ki-check-circle fs-4 me-1"><span class="path1"></span><span class="path2"></span></i>
                                            {{ app()->getLocale() == 'en' ? 'Set as Active Template' : 'Pilih Template Ini' }}
                                        </button>
                                    </form>
                                @endif
                            </div>
                            <!--end::Action Form-->
                        </div>
                        <!--end::Card Body-->
                    </div>
                </div>
            @endforeach
        </div>
        <!--end::Template Cards Grid-->
    </div>
</div>
<!--end::Website Template Selection Tab-->
