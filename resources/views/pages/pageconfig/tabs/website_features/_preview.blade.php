<div class="card card-flush shadow-xs border border-gray-200">
    <div class="card-header align-items-center py-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-gray-900 fs-4">{{ app()->getLocale() == 'en' ? 'Live Interface Feature Simulation' : 'Simulasi Live Visibilitas Fitur Website' }}</span>
            <span class="text-muted mt-1 fw-semibold fs-7">{{ app()->getLocale() == 'en' ? 'Real-time rendering status simulation of topbar components and footer social links' : 'Simulasi status visibilitas real-time untuk komponen topbar header dan sosial media footer' }}</span>
        </h3>
    </div>

    <div class="card-body pt-0">
        <!-- Section 1: Topbar Features Simulation -->
        <div class="mb-10">
            <h4 class="text-gray-900 fw-bold mb-3 d-flex align-items-center">
                <i class="ki-duotone ki-element-11 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                1. Header Topbar Feature Components
            </h4>

            <div class="bg-dark p-6 rounded shadow-xs text-white">
                <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 border-bottom border-gray-700 pb-4 mb-4">
                    <!-- Left: Intake Button Component -->
                    <div class="d-flex align-items-center gap-2">
                        @php
                            $intakeFeat = $features->firstWhere('feature_key', 'intake_button');
                        @endphp
                        @if($intakeFeat && $intakeFeat->is_active)
                            <button class="btn btn-outline btn-outline-white btn-active-light-primary btn-sm rounded-pill text-uppercase fs-8 px-4">
                                {{ __('website.apply_for_fall_intake') }}
                            </button>
                            <span class="badge badge-light-success fs-9">Active</span>
                        @else
                            <div class="p-2 rounded border border-dashed border-gray-600 opacity-50 text-gray-400 fs-8">
                                <i class="ki-duotone ki-eye-slash text-gray-400 fs-7 me-1"></i> [Intake Button Hidden]
                            </div>
                            <span class="badge badge-light-danger fs-9">Disabled</span>
                        @endif
                    </div>

                    <!-- Right Group: Language, Login, Search Bar -->
                    <div class="d-flex flex-wrap align-items-center gap-4">
                        <!-- Language Switcher Component -->
                        @php
                            $langFeat = $features->firstWhere('feature_key', 'language_switcher');
                        @endphp
                        <div class="d-flex align-items-center gap-1">
                            @if($langFeat && $langFeat->is_active)
                                <span class="fs-8 text-uppercase fw-semibold">
                                    🇮🇩 Indonesia <i class="fa fa-angle-down ms-1"></i>
                                </span>
                                <span class="badge badge-light-success fs-9">Active</span>
                            @else
                                <div class="p-1 px-2 rounded border border-dashed border-gray-600 opacity-50 text-gray-400 fs-8">
                                    <i class="ki-duotone ki-eye-slash text-gray-400 fs-7 me-1"></i> [Language Hidden]
                                </div>
                                <span class="badge badge-light-danger fs-9">Disabled</span>
                            @endif
                        </div>

                        <!-- Login Button Component -->
                        @php
                            $loginFeat = $features->firstWhere('feature_key', 'login_button');
                        @endphp
                        <div class="d-flex align-items-center gap-1">
                            @if($loginFeat && $loginFeat->is_active)
                                <span class="badge bg-white text-dark rounded-pill px-3 py-2 text-uppercase fs-8 fw-bold">
                                    {{ __('website.sign_in') }}
                                </span>
                                <span class="badge badge-light-success fs-9">Active</span>
                            @else
                                <div class="p-1 px-2 rounded border border-dashed border-gray-600 opacity-50 text-gray-400 fs-8">
                                    <i class="ki-duotone ki-eye-slash text-gray-400 fs-7 me-1"></i> [Login Button Hidden]
                                </div>
                                <span class="badge badge-light-danger fs-9">Disabled</span>
                            @endif
                        </div>

                        <!-- Search Bar Component -->
                        @php
                            $searchFeat = $features->firstWhere('feature_key', 'search_bar');
                        @endphp
                        <div class="d-flex align-items-center gap-1">
                            @if($searchFeat && $searchFeat->is_active)
                                <span class="badge bg-primary text-white rounded-circle p-2">
                                    <i class="ki-duotone ki-magnifier text-white fs-7"><span class="path1"></span><span class="path2"></span></i>
                                </span>
                                <span class="badge badge-light-success fs-9">Active</span>
                            @else
                                <div class="p-1 px-2 rounded border border-dashed border-gray-600 opacity-50 text-gray-400 fs-8">
                                    <i class="ki-duotone ki-eye-slash text-gray-400 fs-7 me-1"></i> [Search Hidden]
                                </div>
                                <span class="badge badge-light-danger fs-9">Disabled</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 2: Footer Social Media Simulation -->
        <div>
            <h4 class="text-gray-900 fw-bold mb-3 d-flex align-items-center">
                <i class="ki-duotone ki-share fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span></i>
                2. Footer Bottom Social Media Icons Component
            </h4>

            <div class="bg-secondary p-6 rounded border border-gray-300 shadow-2xs">
                <div class="row align-items-center text-center text-md-start">
                    <!-- Left: Copyright Text -->
                    <div class="col-md-4 mb-3 mb-md-0">
                        <p class="text-gray-700 fw-semibold mb-0 fs-7">
                            Universitas Unify - Sejak 1978
                        </p>
                    </div>

                    <!-- Middle: Social Media Component -->
                    <div class="col-md-4 mb-3 mb-md-0 text-center">
                        @php
                            $socialFeat = $features->firstWhere('feature_key', 'social_media');
                        @endphp
                        @if($socialFeat && $socialFeat->is_active)
                            <div class="d-flex justify-content-center align-items-center gap-2">
                                <span class="btn btn-icon btn-sm btn-white rounded-circle shadow-xs"><i class="fa fa-twitter text-primary"></i></span>
                                <span class="btn btn-icon btn-sm btn-white rounded-circle shadow-xs"><i class="fa fa-facebook text-primary"></i></span>
                                <span class="btn btn-icon btn-sm btn-white rounded-circle shadow-xs"><i class="fa fa-instagram text-primary"></i></span>
                                <span class="btn btn-icon btn-sm btn-white rounded-circle shadow-xs"><i class="fa fa-youtube text-primary"></i></span>
                                <span class="btn btn-icon btn-sm btn-white rounded-circle shadow-xs"><i class="fa fa-linkedin text-primary"></i></span>
                                <span class="badge badge-light-success fs-9 ms-1">Active</span>
                            </div>
                        @else
                            <div class="p-2 rounded border border-dashed border-gray-400 text-gray-500 fs-8 d-inline-block">
                                <i class="ki-duotone ki-eye-slash text-gray-500 fs-7 me-1"></i> [Social Media Icons Hidden]
                            </div>
                            <span class="badge badge-light-danger fs-9 ms-1">Disabled</span>
                        @endif
                    </div>

                    <!-- Right: Location Address -->
                    <div class="col-md-4 text-md-end">
                        <span class="text-gray-700 fw-semibold fs-7">
                            Kingston, Ontario, Kanada
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
