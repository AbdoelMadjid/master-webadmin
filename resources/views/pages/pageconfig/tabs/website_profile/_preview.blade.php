<div class="card card-flush shadow-xs border border-gray-200">
    <div class="card-header align-items-center py-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-gray-900 fs-4">{{ app()->getLocale() == 'en' ? 'Live Brand & Footer Preview' : 'Preview Live Tampilan Logo & Footer Website' }}</span>
            <span class="text-muted mt-1 fw-semibold fs-7">{{ app()->getLocale() == 'en' ? 'Simulated layout rendering of the website logo next to main navigation and footer bottom section' : 'Simulasi tampilan logo website di samping Navigasi Utama dan bagian bawah footer' }}</span>
        </h3>
    </div>

    <div class="card-body pt-0">
        <!-- Preview Section 1: Header Navbar Logo -->
        <div class="mb-10">
            <h4 class="text-gray-900 fw-bold mb-3 d-flex align-items-center">
                <i class="ki-duotone ki-element-11 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                1. Header Navbar Brand Logo
            </h4>

            <div class="bg-white p-4 rounded border border-gray-300 shadow-2xs">
                <div class="d-flex align-items-center justify-content-between">
                    <!-- Brand Logo -->
                    <div class="d-flex align-items-center gap-3">
                        <img src="{{ asset($profile->logo ?? 'assets/img/logo/logo.png') }}" alt="Navbar Logo" class="h-45px object-fit-contain" />
                        <span class="badge badge-light-primary fw-bold fs-8">Navbar Brand</span>
                    </div>

                    <!-- Simulated Main Nav Menu Links -->
                    <div class="d-none d-md-flex align-items-center gap-6 fw-bold fs-6 text-gray-800">
                        <span class="text-primary">Program</span>
                        <span>Calon Mahasiswa</span>
                        <span>Mahasiswa Aktif</span>
                        <span>Fakultas & Staf</span>
                        <span>Acara <i class="ki-duotone ki-down fs-7 ms-1"></i></span>
                        <span>Alumni</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Preview Section 2: Footer Bottom Copyright & Address -->
        <div>
            <h4 class="text-gray-900 fw-bold mb-3 d-flex align-items-center">
                <i class="ki-duotone ki-geolocation fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                2. Footer Bottom Address & Copyright Area
            </h4>

            <div class="bg-secondary p-6 rounded border border-gray-300 shadow-2xs">
                <div class="row align-items-center text-center text-md-start">
                    <!-- Left: Copyright Text & Year -->
                    <div class="col-md-4 mb-3 mb-md-0">
                        <p class="text-gray-700 fw-semibold mb-0 fs-6">
                            {{ app()->getLocale() == 'en' && !empty($profile->copyright_text_en) ? $profile->copyright_text_en : ($profile->copyright_text ?? $profile->name . ' - Sejak ' . $profile->established_year) }}
                        </p>
                    </div>

                    <!-- Middle: Dynamic Active Social Links -->
                    <div class="col-md-4 mb-3 mb-md-0 text-center">
                        @php
                            $socialLinks = $profile->social_links ?? \App\Models\PageConfig\WebsiteProfile::getDefaultSocialLinks();
                            $defaultMeta = \App\Models\PageConfig\WebsiteProfile::getDefaultSocialLinks();
                            $activeSocials = collect($socialLinks)->filter(fn($item) => !empty($item['is_active']) && !empty($item['url']));
                        @endphp
                        @if($activeSocials->count() > 0)
                            <div class="d-flex justify-content-center align-items-center gap-2">
                                @foreach($activeSocials as $sKey => $sItem)
                                    @php
                                        $iconClass = $sItem['icon'] ?? ($defaultMeta[$sKey]['icon'] ?? 'fab fa-twitter');
                                        if (str_starts_with($iconClass, 'fa fa-')) {
                                            $iconClass = str_replace('fa fa-', 'fab fa-', $iconClass);
                                        }
                                    @endphp
                                    <span class="btn btn-icon btn-sm btn-white rounded-circle shadow-xs p-2" title="{{ $sItem['name'] ?? $sKey }}" data-bs-toggle="tooltip" data-bs-placement="top">
                                        <i class="{{ $iconClass }} text-primary fs-5"></i>
                                    </span>
                                @endforeach
                            </div>
                        @else
                            <span class="text-muted fs-8"><em>[Semua Tautan Sosial Media Nonaktif]</em></span>
                        @endif
                    </div>

                    <!-- Right: Location Address -->
                    <div class="col-md-4 text-md-end">
                        <a href="#" class="text-gray-700 text-hover-primary fw-semibold text-decoration-none fs-6">
                            <i class="ki-duotone ki-geolocation text-primary fs-5 me-1"><span class="path1"></span><span class="path2"></span></i>
                            {{ app()->getLocale() == 'en' && !empty($profile->address_en) ? $profile->address_en : $profile->address }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
