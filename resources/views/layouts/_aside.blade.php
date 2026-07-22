@isset($filter)
    <div id="kt_app_aside" class="app-aside flex-column mt-7" data-kt-drawer="true" data-kt-drawer-name="app-aside"
        data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto"
        data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_aside_toggle">
        <!--begin::Aside wrapper-->
        <div id="kt_app_aside_wrapper" class="hover-scroll-y px-5 mx-5 my-5" data-kt-scroll="true"
            data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_header"
            data-kt-scroll-wrappers="#kt_app_aside" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
            <!--begin::Aside1-->
            <div class="card card-reset card-p-0">
                <!--begin::Header-->
                <div class="card-header min-h-auto mb-5">
                    <h3 class="card-title text-gray-900 fw-bold fs-3">Filters</h3>
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-color-gray-500 btn-light">
                            <i class="ki-duotone ki-magnifier fs-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </a>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin::Form-->
                    <div class="mb-7">
                        <span class="text-gray-900 fs-h6 fw-bold d-inline-block mb-1">Agents</span>
                        <select class="form-select" aria-label="Select example">
                            <option>Any agent</option>
                            <option value="1">Grace Green</option>
                            <option value="2">Nick LOgan</option>
                            <option value="3">Carles Nilson</option>
                            <option value="1">Alice Danchik</option>
                            <option value="2">Harris Bold</option>
                            <option value="3">Carles Nilson</option>
                        </select>
                    </div>
                    <div class="mb-7">
                        <span class="text-gray-900 fs-h6 fw-bold d-inline-block mb-1">Groups</span>
                        <select class="form-select" aria-label="Select example">
                            <option>Any group</option>
                            <option value="1">Grace Green</option>
                            <option value="2">Nick LOgan</option>
                            <option value="3">Carles Nilson</option>
                            <option value="1">Alice Danchik</option>
                            <option value="2">Harris Bold</option>
                            <option value="3">Carles Nilson</option>
                        </select>
                    </div>
                    <div class="mb-7">
                        <span class="text-gray-900 fs-h6 fw-bold d-inline-block mb-1">Crated</span>
                        <select class="form-select" aria-label="Select example">
                            <option>Any Time</option>
                            <option value="1">day ago</option>
                            <option value="2">2 days ago</option>
                            <option value="3">April 15</option>
                            <option value="1">April 10</option>
                            <option value="2">March 30</option>
                            <option value="3">March 25</option>
                        </select>
                    </div>
                    <div class="mb-6">
                        <span class="text-gray-900 fs-h6 fw-bold d-inline-block mb-1">Email</span>
                        <input type="text" class="form-control" placeholder="Your Email" />
                    </div>
                    <!--end::Form-->
                    <!--begin::Action-->
                    <div class="d-flex flex-column">
                        <a href="javascript:void(0)" class="btn btn-primary mb-4 p-3">Default</a>
                        <a href="javascript:void(0)" class="btn btn-secondary btn-color-gray-700 p-3">View more</a>
                    </div>
                    <!--end::Action-->
                    <!--end::Body-->
                </div>
            </div>
            <!--end::Aside1-->
        </div>
        <!--end::Aside wrapper-->
    </div>
@endisset

@isset($segment)
    <div id="kt_app_aside" class="app-aside flex-column mt-7" data-kt-drawer="true" data-kt-drawer-name="app-aside"
        data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto"
        data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_aside_toggle">
        <!--begin::Aside wrapper-->
        <div id="kt_app_aside_wrapper" class="hover-scroll-y px-5 mx-5 my-5" data-kt-scroll="true"
            data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_header"
            data-kt-scroll-wrappers="#kt_app_aside" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
            <!--begin::Aside2-->
            <div class="card card-reset card-p-0">
                <!--begin::Header-->
                <div class="card-header min-h-auto mb-5">
                    <h3 class="card-title text-gray-900 fs-3 fw-bold mb-5">
                        Segments
                    </h3>
                    <!--begin::Search-->
                    <form class="w-100 position-relative" autocomplete="off">
                        <span class="d-flex flex-center position-absolute top-50 translate-middle-y ms-5">
                            <i class="ki-duotone ki-magnifier fs-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <!--begin::Input-->
                        <input type="text" class="search-input form-control ps-13" name="search" value=""
                            placeholder="Search..." />
                        <!--end::Input-->
                    </form>
                    <!--end::Search-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin::Nav-->
                    <ul class="nav nav-pills nav-pills-custom position-relative mb-4 gap-5">
                        <!--begin::Item-->
                        <li class="nav-item">
                            <!--begin::Link-->
                            <a class="nav-link btn bnt-color-gray-600 btn-active-color-primary d-flex active justify-content-center w-100 border-0 h-100 px-0"
                                data-bs-toggle="pill" href="#kt_aside_tab_1">
                                <!--begin::Subtitle-->
                                <span class="nav-text text-gray-600 fw-bold fs-6 mb-3">Personal</span>
                                <!--end::Subtitle-->
                                <!--begin::Bullet-->
                                <span
                                    class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-1px bg-primary rounded"></span>
                                <!--end::Bullet-->
                            </a>
                            <!--end::Link-->
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item">
                            <!--begin::Link-->
                            <a class="nav-link btn btn-color-600 btn-active-color-primary d-flex justify-content-center px-0 w-100 border-0 h-100"
                                data-bs-toggle="pill" href="#kt_aside_tab_2">
                                <!--begin::Subtitle-->
                                <span class="nav-text text-gray-600 fw-bold fs-6 mb-3">Team</span>
                                <!--end::Subtitle-->
                                <!--begin::Bullet-->
                                <span
                                    class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-1px bg-primary rounded"></span>
                                <!--end::Bullet-->
                            </a>
                            <!--end::Link-->
                        </li>
                        <!--end::Item-->
                        <!--begin::Bullet-->
                        <span class="position-absolute z-index-1 bottom-0 w-100 h-1px bg-gray-300 rounded"></span>
                        <!--end::Bullet-->
                    </ul>
                    <!--end::Nav-->
                    <!--begin::Tab Content-->
                    <div class="tab-content">
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade show active" id="kt_aside_tab_1">
                            <!--begin::Item-->
                            <div class="d-flex align-items-center py-3">
                                <!--begin::Symbol-->
                                <div class="d-flex align-items-center w-25px me-1">
                                    <i class="ki-duotone ki-user-tick fs-3 text-gray-600">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Container-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="javascript:void(0)" class="text-gray-800 fw-bold text-hover-primary fs-6">Most
                                            Active</a>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Container-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center py-3">
                                <!--begin::Symbol-->
                                <div class="d-flex align-items-center w-25px me-1">
                                    <i class="ki-duotone ki-shield fs-3 text-gray-600">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Container-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="javascript:void(0)" class="text-gray-800 fw-bold text-hover-primary fs-6">Top
                                            Errors</a>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Container-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center py-3">
                                <!--begin::Symbol-->
                                <div class="d-flex align-items-center w-25px me-1">
                                    <i class="ki-duotone ki-profile-user fs-3 text-gray-600">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Container-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="javascript:void(0)" class="text-gray-800 fw-bold text-hover-primary fs-6">Signup
                                            rate</a>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Container-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center py-3">
                                <!--begin::Symbol-->
                                <div class="d-flex align-items-center w-25px me-1">
                                    <i class="ki-duotone ki-watch fs-3 text-gray-600">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Container-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="javascript:void(0)" class="text-gray-800 fw-bold text-hover-primary fs-6">Top
                                            Errors</a>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Container-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center py-3">
                                <!--begin::Symbol-->
                                <div class="d-flex align-items-center w-25px me-1">
                                    <i class="ki-duotone ki-security-user fs-3 text-gray-600">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Container-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="javascript:void(0)" class="text-gray-800 fw-bold text-hover-primary fs-6">Signup
                                            errors</a>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Container-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center py-3">
                                <!--begin::Symbol-->
                                <div class="d-flex align-items-center w-25px me-1">
                                    <i class="ki-duotone ki-medal-star fs-3 text-gray-600">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Container-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="javascript:void(0)" class="text-gray-800 fw-bold text-hover-primary fs-6">Support
                                            superstar</a>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Container-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Tap pane-->
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade" id="kt_aside_tab_2">
                            <!--begin::Item-->
                            <div class="d-flex align-items-center py-3">
                                <!--begin::Symbol-->
                                <div class="d-flex align-items-center w-25px me-1">
                                    <i class="ki-duotone ki-rocket fs-3 text-gray-600">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Container-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="javascript:void(0)" class="text-gray-800 fw-bold text-hover-primary fs-6">Direct</a>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Container-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center py-3">
                                <!--begin::Symbol-->
                                <div class="d-flex align-items-center w-25px me-1">
                                    <i class="ki-duotone ki-tiktok fs-3 text-gray-600">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Container-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="javascript:void(0)" class="text-gray-800 fw-bold text-hover-primary fs-6">Social
                                            Networks</a>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Container-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center py-3">
                                <!--begin::Symbol-->
                                <div class="d-flex align-items-center w-25px me-1">
                                    <i class="ki-duotone ki-sms fs-3 text-gray-600">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Container-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="javascript:void(0)" class="text-gray-800 fw-bold text-hover-primary fs-6">Email
                                            Newsletter</a>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Container-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center py-3">
                                <!--begin::Symbol-->
                                <div class="d-flex align-items-center w-25px me-1">
                                    <i class="ki-duotone ki-icon fs-3 text-gray-600">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Container-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="javascript:void(0)"
                                            class="text-gray-800 fw-bold text-hover-primary fs-6">Referrals</a>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Container-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center py-3">
                                <!--begin::Symbol-->
                                <div class="d-flex align-items-center w-25px me-1">
                                    <i class="ki-duotone ki-abstract-25 fs-3 text-gray-600">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Container-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="javascript:void(0)" class="text-gray-800 fw-bold text-hover-primary fs-6">Other</a>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Container-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center py-3">
                                <!--begin::Symbol-->
                                <div class="d-flex align-items-center w-25px me-1">
                                    <i class="ki-duotone ki-abstract-39 fs-3 text-gray-600">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Container-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="javascript:void(0)" class="text-gray-800 fw-bold text-hover-primary fs-6">Rising
                                            Networks</a>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Container-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Tap pane-->
                    </div>
                    <!--end::Tab Content-->
                    <!--begin::Action-->
                    <a href="javascript:void(0)" class="btn btn-light btn-color-gray-700 fw-bold w-100 mt-3">View more</a>
                    <!--end::Action-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Aside2-->
        </div>
        <!--end::Aside wrapper-->
    </div>
@endisset

@isset($shipment)
    <div id="kt_app_aside" class="app-aside flex-column mt-7" data-kt-drawer="true" data-kt-drawer-name="app-aside"
        data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto"
        data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_aside_toggle">
        <!--begin::Aside wrapper-->
        <div id="kt_app_aside_wrapper" class="hover-scroll-y px-5 mx-5 my-5" data-kt-scroll="true"
            data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_header"
            data-kt-scroll-wrappers="#kt_app_aside" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
            <!--begin::Aside3-->
            <div class="card card-reset card-p-0">
                <!--begin::Header-->
                <div class="card-header align-items-center min-h-auto mb-7">
                    <h3 class="card-title text-gray-900 fs-3 fw-bold py-0 mb-0">
                        Shipment History
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar mb-0">
                        <a href="javascript:void(0)" class="btn btn-sm btn-light" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            data-bs-custom-class="tooltip-inverse" title="Logistics App is coming soon">View All</a>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin::Nav-->
                    <ul class="nav nav-pills nav-pills-custom position-relative mb-9 gap-5">
                        <!--begin::Item-->
                        <li class="nav-item">
                            <!--begin::Link-->
                            <a class="nav-link btn btn-color-gray-600 btn-active-color-primary px-0 active d-flex justify-content-center w-100 border-0 h-100"
                                data-bs-toggle="pill" href="#kt_aside_tab_1">
                                <!--begin::Subtitle-->
                                <span class="nav-text text-gray-600 fw-bold fs-6">Personal</span>
                                <!--end::Subtitle-->
                                <!--begin::Bullet-->
                                <span
                                    class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-1px bg-primary rounded"></span>
                                <!--end::Bullet-->
                            </a>
                            <!--end::Link-->
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item">
                            <!--begin::Link-->
                            <a class="nav-link btn btn-color-gray-600 btn-active-color-primary d-flex justify-content-center px-0 w-100 border-0 h-100"
                                data-bs-toggle="pill" href="#kt_aside_tab_2">
                                <!--begin::Subtitle-->
                                <span class="nav-text text-gray-600 fw-bold fs-6">Team</span>
                                <!--end::Subtitle-->
                                <!--begin::Bullet-->
                                <span
                                    class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-1px bg-primary rounded"></span>
                                <!--end::Bullet-->
                            </a>
                            <!--end::Link-->
                        </li>
                        <!--end::Item-->
                        <!--begin::Bullet-->
                        <span class="position-absolute z-index-1 bottom-0 w-100 h-1px bg-gray-300 rounded"></span>
                        <!--end::Bullet-->
                    </ul>
                    <!--end::Nav-->
                    <!--begin::Tab Content-->
                    <div class="tab-content">
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade show active" id="kt_aside_tab_1">
                            <!--begin::Item-->
                            <div class="m-0">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-sm-center mb-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40px me-4">
                                        <span class="symbol-label bg-primary">
                                            <i class="ki-duotone ki-ship text-inverse-primary fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="javascript:void(0)" class="text-gray-500 fs-6 fw-semibold">Ship Freight</a>
                                            <span class="text-gray-800 fw-bold d-block fs-5">#5635-342808</span>
                                        </div>
                                        <span class="badge badge-lg badge-light-success fw-bold fs-7">Delivered</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Timeline-->
                                <div class="timeline">
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center mb-7">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line w-40px mt-6 mb-n12"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon" style="margin-left: 11px">
                                            <i class="ki-duotone ki-cd fs-2 text-danger">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content m-0">
                                            <!--begin::Title-->
                                            <span class="fs-6 text-gray-500 fw-semibold d-block">Messina Harbor</span>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bold text-gray-800">Sicily, Italy</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line w-40px"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon" style="margin-left: 11px">
                                            <i class="ki-duotone ki-geolocation fs-2 text-info">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content m-0">
                                            <!--begin::Title-->
                                            <span class="fs-6 text-gray-500 fw-semibold d-block">Hektor Container
                                                Hotel</span>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bold text-gray-800">Tallin, EST</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                </div>
                                <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed mb-6 mt-5"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="m-0">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-sm-center mb-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40px me-4">
                                        <span class="symbol-label bg-primary">
                                            <i class="ki-duotone ki-truck text-inverse-primary fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="javascript:void(0)" class="text-gray-500 fs-6 fw-semibold">Truck Freight</a>
                                            <span class="text-gray-800 fw-bold d-block fs-5">#0066-954784</span>
                                        </div>
                                        <span class="badge badge-lg badge-light-primary fw-bold fs-7">Shipping</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Timeline-->
                                <div class="timeline">
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center mb-7">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line w-40px mt-6 mb-n12"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon" style="margin-left: 11px">
                                            <i class="ki-duotone ki-cd fs-2 text-danger">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content m-0">
                                            <!--begin::Title-->
                                            <span class="fs-6 text-gray-500 fw-semibold d-block">Haven van Rotterdam</span>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bold text-gray-800">Rotterdam, Netherlands</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line w-40px"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon" style="margin-left: 11px">
                                            <i class="ki-duotone ki-geolocation fs-2 text-info">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content m-0">
                                            <!--begin::Title-->
                                            <span class="fs-6 text-gray-500 fw-semibold d-block">Forest-Midi</span>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bold text-gray-800">Brussels, Belgium</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                </div>
                                <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed mb-6 mt-5"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="m-0">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-sm-center mb-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40px me-4">
                                        <span class="symbol-label bg-primary">
                                            <i class="ki-duotone ki-delivery text-inverse-primary fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="javascript:void(0)" class="text-gray-500 fs-6 fw-semibold">Delivery Freight</a>
                                            <span class="text-gray-800 fw-bold d-block fs-5">#5635-342808</span>
                                        </div>
                                        <span class="badge badge-lg badge-light-success fw-bold fs-7">Delivered</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Timeline-->
                                <div class="timeline">
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center mb-7">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line w-40px mt-6 mb-n12"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon" style="margin-left: 11px">
                                            <i class="ki-duotone ki-cd fs-2 text-danger">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content m-0">
                                            <!--begin::Title-->
                                            <span class="fs-6 text-gray-500 fw-semibold d-block">Mina St - Zayed
                                                Port</span>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bold text-gray-800">Abu Dhabi, UAE</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line w-40px"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon" style="margin-left: 11px">
                                            <i class="ki-duotone ki-geolocation fs-2 text-info">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content m-0">
                                            <!--begin::Title-->
                                            <span class="fs-6 text-gray-500 fw-semibold d-block">27 Drydock Boston</span>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bold text-gray-800">Boston, USA</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                </div>
                                <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed mb-6 mt-5"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="m-0">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-sm-center mb-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40px me-4">
                                        <span class="symbol-label bg-primary">
                                            <i class="ki-duotone ki-airplane-square text-inverse-primary fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="javascript:void(0)" class="text-gray-500 fs-6 fw-semibold">Plane Freight</a>
                                            <span class="text-gray-800 fw-bold d-block fs-5">#5635-342808</span>
                                        </div>
                                        <span class="badge badge-lg badge-light-danger fw-bold fs-7">Delayed</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Timeline-->
                                <div class="timeline">
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center mb-7">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line w-40px mt-6 mb-n12"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon" style="margin-left: 11px">
                                            <i class="ki-duotone ki-cd fs-2 text-danger">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content m-0">
                                            <!--begin::Title-->
                                            <span class="fs-6 text-gray-500 fw-semibold d-block">KLM Cargo</span>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bold text-gray-800">Schipol Airport, Amsterdam</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line w-40px"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon" style="margin-left: 11px">
                                            <i class="ki-duotone ki-geolocation fs-2 text-info">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content m-0">
                                            <!--begin::Title-->
                                            <span class="fs-6 text-gray-500 fw-semibold d-block">Singapore Cargo</span>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bold text-gray-800">Changi Airport, Singapore</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                </div>
                                <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Tap pane-->
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade" id="kt_aside_tab_2">
                            <!--begin::Item-->
                            <div class="m-0">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-sm-center mb-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40px me-4">
                                        <span class="symbol-label bg-primary">
                                            <i class="ki-duotone ki-airplane-square text-inverse-primary fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="javascript:void(0)" class="text-gray-500 fs-6 fw-semibold">Plane Freight</a>
                                            <span class="text-gray-800 fw-bold d-block fs-5">#5635-342808</span>
                                        </div>
                                        <span class="badge badge-lg badge-light-success fw-bold fs-7">Delivered</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Timeline-->
                                <div class="timeline">
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center mb-7">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line w-40px mt-6 mb-n12"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon" style="margin-left: 11px">
                                            <i class="ki-duotone ki-cd fs-2 text-danger">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content m-0">
                                            <!--begin::Title-->
                                            <span class="fs-6 text-gray-500 fw-semibold d-block">KLM Cargo</span>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bold text-gray-800">Schipol Airport, Amsterdam</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line w-40px"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon" style="margin-left: 11px">
                                            <i class="ki-duotone ki-geolocation fs-2 text-info">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content m-0">
                                            <!--begin::Title-->
                                            <span class="fs-6 text-gray-500 fw-semibold d-block">Singapore Cargo</span>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bold text-gray-800">Changi Airport, Singapore</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                </div>
                                <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed mb-6 mt-5"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="m-0">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-sm-center mb-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40px me-4">
                                        <span class="symbol-label bg-primary">
                                            <i class="ki-duotone ki-truck text-inverse-primary fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="javascript:void(0)" class="text-gray-500 fs-6 fw-semibold">Truck Freight</a>
                                            <span class="text-gray-800 fw-bold d-block fs-5">#0066-954784</span>
                                        </div>
                                        <span class="badge badge-lg badge-light-success fw-bold fs-7">Delivered</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Timeline-->
                                <div class="timeline">
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center mb-7">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line w-40px mt-6 mb-n12"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon" style="margin-left: 11px">
                                            <i class="ki-duotone ki-cd fs-2 text-danger">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content m-0">
                                            <!--begin::Title-->
                                            <span class="fs-6 text-gray-500 fw-semibold d-block">Haven van Rotterdam</span>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bold text-gray-800">Rotterdam, Netherlands</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line w-40px"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon" style="margin-left: 11px">
                                            <i class="ki-duotone ki-geolocation fs-2 text-info">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content m-0">
                                            <!--begin::Title-->
                                            <span class="fs-6 text-gray-500 fw-semibold d-block">Forest-Midi</span>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bold text-gray-800">Brussels, Belgium</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                </div>
                                <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed mb-6 mt-5"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="m-0">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-sm-center mb-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40px me-4">
                                        <span class="symbol-label bg-primary">
                                            <i class="ki-duotone ki-ship text-inverse-primary fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="javascript:void(0)" class="text-gray-500 fs-6 fw-semibold">Ship Freight</a>
                                            <span class="text-gray-800 fw-bold d-block fs-5">#5635-342808</span>
                                        </div>
                                        <span class="badge badge-lg badge-light-success fw-bold fs-7">Delivered</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Timeline-->
                                <div class="timeline">
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center mb-7">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line w-40px mt-6 mb-n12"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon" style="margin-left: 11px">
                                            <i class="ki-duotone ki-cd fs-2 text-danger">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content m-0">
                                            <!--begin::Title-->
                                            <span class="fs-6 text-gray-500 fw-semibold d-block">Mina St - Zayed
                                                Port</span>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bold text-gray-800">Abu Dhabi, UAE</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line w-40px"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon" style="margin-left: 11px">
                                            <i class="ki-duotone ki-geolocation fs-2 text-info">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content m-0">
                                            <!--begin::Title-->
                                            <span class="fs-6 text-gray-500 fw-semibold d-block">27 Drydock Boston</span>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bold text-gray-800">Boston, USA</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                </div>
                                <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed mb-6 mt-5"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="m-0">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-sm-center mb-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40px me-4">
                                        <span class="symbol-label bg-primary">
                                            <i class="ki-duotone ki-ship text-inverse-primary fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="javascript:void(0)" class="text-gray-500 fs-6 fw-semibold">Ship Freight</a>
                                            <span class="text-gray-800 fw-bold d-block fs-5">#5635-342808</span>
                                        </div>
                                        <span class="badge badge-lg badge-light-success fw-bold fs-7">Delivered</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Timeline-->
                                <div class="timeline">
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center mb-7">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line w-40px mt-6 mb-n12"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon" style="margin-left: 11px">
                                            <i class="ki-duotone ki-cd fs-2 text-danger">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content m-0">
                                            <!--begin::Title-->
                                            <span class="fs-6 text-gray-500 fw-semibold d-block">Messina Harbor</span>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bold text-gray-800">Sicily, Italy</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line w-40px"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon" style="margin-left: 11px">
                                            <i class="ki-duotone ki-geolocation fs-2 text-info">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content m-0">
                                            <!--begin::Title-->
                                            <span class="fs-6 text-gray-500 fw-semibold d-block">Hektor Container
                                                Hotel</span>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bold text-gray-800">Tallin, EST</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                </div>
                                <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Tap pane-->
                    </div>
                    <!--end::Tab Content-->
                </div>
                <!--end: Card Body-->
            </div>
            <!--end::Aside3-->
        </div>
        <!--end::Aside wrapper-->
    </div>
@endisset

@isset($courier)
    <div id="kt_app_aside" class="app-aside flex-column mt-7" data-kt-drawer="true" data-kt-drawer-name="app-aside"
        data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto"
        data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_aside_toggle">
        <!--begin::Aside wrapper-->
        <div id="kt_app_aside_wrapper" class="hover-scroll-y px-5 mx-5 my-5" data-kt-scroll="true"
            data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_header"
            data-kt-scroll-wrappers="#kt_app_aside" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
            <!--begin::Aside 4-->
            <div class="card card-reset card-p-0">
                <!--begin::Header-->
                <div class="card-header align-items-center min-h-auto mb-10">
                    <h3 class="card-title text-gray-900 fs-3 fw-bold py-0 mb-0">
                        Courier Activity
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar mb-0">
                        <a href="javascript:void(0)" class="btn btn-sm btn-light" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            data-bs-custom-class="tooltip-inverse" title="Logistics App is coming soon">View Order</a>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin::Items-->
                    <div class="mb-n3">
                        <!--begin::Timeline-->
                        <div class="timeline">
                            <!--begin::Timeline item-->
                            <div class="timeline-item align-items-center mb-8">
                                <!--begin::Timeline line-->
                                <div class="timeline-line timeline-line-solid w-40px h-100 mt-14"></div>
                                <!--end::Timeline line-->
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40px me-4">
                                    <span class="symbol-label bg-light border">
                                        <i class="ki-duotone ki-delivery-geolocation text-gray-700 fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                        </i>
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Timeline content-->
                                <div class="timeline-content m-0">
                                    <!--begin::Title-->
                                    <span class="fs-6 text-gray-800 fw-bold d-block">#5634563428</span>
                                    <!--end::Title-->
                                    <!--begin::Badge-->
                                    <span class="badge badge-light-success fw-bold my-2">Delivered</span>
                                    <!--end::Badge-->
                                </div>
                                <!--end::Timeline content-->
                                <!--begin::Time-->
                                <span class="fs-6 text-muted fw-semibold">10:30</span>
                                <!--end::Title-->
                            </div>
                            <!--end::Timeline item-->
                        </div>
                        <!--end::Timeline-->
                        <!--begin::Timeline-->
                        <div class="timeline">
                            <!--begin::Timeline item-->
                            <div class="timeline-item align-items-center mb-8">
                                <!--begin::Timeline line-->
                                <div class="timeline-line timeline-line-solid w-40px h-100 mt-14"></div>
                                <!--end::Timeline line-->
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40px me-4">
                                    <span class="symbol-label bg-light border">
                                        <i class="ki-duotone ki-basket-ok text-gray-700 fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Timeline content-->
                                <div class="timeline-content m-0">
                                    <!--begin::Title-->
                                    <span class="fs-6 text-gray-800 fw-bold d-block">#3334343434</span>
                                    <!--end::Title-->
                                    <!--begin::Badge-->
                                    <span class="badge badge-light-success fw-bold my-2">Delivered</span>
                                    <!--end::Badge-->
                                </div>
                                <!--end::Timeline content-->
                                <!--begin::Time-->
                                <span class="fs-6 text-muted fw-semibold">10:45</span>
                                <!--end::Title-->
                            </div>
                            <!--end::Timeline item-->
                        </div>
                        <!--end::Timeline-->
                        <!--begin::Timeline-->
                        <div class="timeline">
                            <!--begin::Timeline item-->
                            <div class="timeline-item align-items-center mb-8">
                                <!--begin::Timeline line-->
                                <div class="timeline-line timeline-line-solid w-40px h-100 mt-14"></div>
                                <!--end::Timeline line-->
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40px me-4">
                                    <span class="symbol-label bg-light border">
                                        <i class="ki-duotone ki-delivery-3 text-gray-700 fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Timeline content-->
                                <div class="timeline-content m-0">
                                    <!--begin::Title-->
                                    <span class="fs-6 text-gray-800 fw-bold d-block">#0203920922</span>
                                    <!--end::Title-->
                                    <!--begin::Badge-->
                                    <span class="badge badge-light-danger fw-bold my-2">Returned</span>
                                    <!--end::Badge-->
                                </div>
                                <!--end::Timeline content-->
                                <!--begin::Time-->
                                <span class="fs-6 text-muted fw-semibold">10:10</span>
                                <!--end::Title-->
                            </div>
                            <!--end::Timeline item-->
                        </div>
                        <!--end::Timeline-->
                        <!--begin::Timeline-->
                        <div class="timeline">
                            <!--begin::Timeline item-->
                            <div class="timeline-item align-items-center mb-8">
                                <!--begin::Timeline line-->
                                <div class="timeline-line timeline-line-solid w-40px h-100 mt-14"></div>
                                <!--end::Timeline line-->
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40px me-4">
                                    <span class="symbol-label bg-light border">
                                        <i class="ki-duotone ki-ship text-gray-700 fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Timeline content-->
                                <div class="timeline-content m-0">
                                    <!--begin::Title-->
                                    <span class="fs-6 text-gray-800 fw-bold d-block">#5634563428</span>
                                    <!--end::Title-->
                                    <!--begin::Badge-->
                                    <span class="badge badge-light-warning fw-bold my-2">Pending</span>
                                    <!--end::Badge-->
                                </div>
                                <!--end::Timeline content-->
                                <!--begin::Time-->
                                <span class="fs-6 text-muted fw-semibold">10:55</span>
                                <!--end::Title-->
                            </div>
                            <!--end::Timeline item-->
                        </div>
                        <!--end::Timeline-->
                        <!--begin::Timeline-->
                        <div class="timeline">
                            <!--begin::Timeline item-->
                            <div class="timeline-item align-items-center mb-8">
                                <!--begin::Timeline line-->
                                <div class="timeline-line timeline-line-solid w-40px h-100 mt-14"></div>
                                <!--end::Timeline line-->
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40px me-4">
                                    <span class="symbol-label bg-light border">
                                        <i class="ki-duotone ki-directbox-default text-gray-700 fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Timeline content-->
                                <div class="timeline-content m-0">
                                    <!--begin::Title-->
                                    <span class="fs-6 text-gray-800 fw-bold d-block">#0093452244</span>
                                    <!--end::Title-->
                                    <!--begin::Badge-->
                                    <span class="badge badge-light-warning fw-bold my-2">Pending</span>
                                    <!--end::Badge-->
                                </div>
                                <!--end::Timeline content-->
                                <!--begin::Time-->
                                <span class="fs-6 text-muted fw-semibold">12:40</span>
                                <!--end::Title-->
                            </div>
                            <!--end::Timeline item-->
                        </div>
                        <!--end::Timeline-->
                        <!--begin::Timeline-->
                        <div class="timeline">
                            <!--begin::Timeline item-->
                            <div class="timeline-item align-items-center mb-8">
                                <!--begin::Timeline line-->
                                <div class="timeline-line timeline-line-solid w-40px h-100 mt-14"></div>
                                <!--end::Timeline line-->
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40px me-4">
                                    <span class="symbol-label bg-light border">
                                        <i class="ki-duotone ki-like-shapes text-gray-700 fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Timeline content-->
                                <div class="timeline-content m-0">
                                    <!--begin::Title-->
                                    <span class="fs-6 text-gray-800 fw-bold d-block">#2434000234</span>
                                    <!--end::Title-->
                                    <!--begin::Badge-->
                                    <span class="badge badge-light-warning fw-bold my-2">Pending</span>
                                    <!--end::Badge-->
                                </div>
                                <!--end::Timeline content-->
                                <!--begin::Time-->
                                <span class="fs-6 text-muted fw-semibold">14:15</span>
                                <!--end::Title-->
                            </div>
                            <!--end::Timeline item-->
                        </div>
                        <!--end::Timeline-->
                        <!--begin::Timeline-->
                        <div class="timeline">
                            <!--begin::Timeline item-->
                            <div class="timeline-item align-items-center mb-8">
                                <!--begin::Timeline line-->
                                <div class=""></div>
                                <!--end::Timeline line-->
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40px me-4">
                                    <span class="symbol-label bg-light border">
                                        <i class="ki-duotone ki-user-tick text-gray-700 fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Timeline content-->
                                <div class="timeline-content m-0">
                                    <!--begin::Title-->
                                    <span class="fs-6 text-gray-800 fw-bold d-block">#2003452775</span>
                                    <!--end::Title-->
                                    <!--begin::Badge-->
                                    <span class="badge badge-light-warning fw-bold my-2">Pending</span>
                                    <!--end::Badge-->
                                </div>
                                <!--end::Timeline content-->
                                <!--begin::Time-->
                                <span class="fs-6 text-muted fw-semibold">16:30</span>
                                <!--end::Title-->
                            </div>
                            <!--end::Timeline item-->
                        </div>
                        <!--end::Timeline-->
                    </div>
                    <!--end::Items-->
                    <!--begin::Action-->
                    <a href="javascript:void(0)" class="btn btn-light btn-color-gray-700 fw-bold w-100">View more</a>
                    <!--end::Action-->
                </div>
                <!--end: Card Body-->
            </div>
            <!--end::Aside 4-->
        </div>
        <!--end::Aside wrapper-->
    </div>
@endisset

@isset($calendar)
    <div id="kt_app_aside" class="app-aside flex-column mt-7" data-kt-drawer="true" data-kt-drawer-name="app-aside"
        data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto"
        data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_aside_toggle">
        <!--begin::Aside wrapper-->
        <div id="kt_app_aside_wrapper" class="hover-scroll-y px-5 mx-5 my-5" data-kt-scroll="true"
            data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_header"
            data-kt-scroll-wrappers="#kt_app_aside" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
            <!--begin::Aside 5-->
            <div class="card card-reset card-p-0">
                <!--begin::Header-->
                <div class="card-header align-items-center min-h-auto mb-5">
                    <h3 class="card-title text-gray-900 fs-3 fw-bold mb-0">
                        Calendar
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar mb-0">
                        <!--begin::Menu- wrapper-->
                        <div class="btn btn-icon bg-light w-35px h-35px w-md-40px h-md-40px"
                            data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                            data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-calendar fs-1 text-gray-700">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </div>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true"
                            id="kt_menu_notifications">
                            <!--begin::Heading-->
                            <div class="d-flex flex-column bgi-no-repeat rounded-top"
                                style="background-image: url('assets/media/misc/menu-header-bg.jpg');">
                                <!--begin::Title-->
                                <h3 class="text-white fw-semibold px-9 mt-10 mb-6">
                                    Notifications
                                    <span class="fs-8 opacity-75 ps-3">24 reports</span>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Tabs-->
                                <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
                                    <li class="nav-item">
                                        <a class="nav-link text-white opacity-75 opacity-state-100 pb-4"
                                            data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active"
                                            data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white opacity-75 opacity-state-100 pb-4"
                                            data-bs-toggle="tab" href="#kt_topbar_notifications_3">Logs</a>
                                    </li>
                                </ul>
                                <!--end::Tabs-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Tab content-->
                            <div class="tab-content">
                                <!--begin::Tab panel-->
                                <div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
                                    <!--begin::Items-->
                                    <div class="scroll-y mh-325px my-5 px-8">
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-4">
                                                    <span class="symbol-label bg-light-primary">
                                                        <i class="ki-duotone ki-abstract-28 fs-2 text-primary">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="mb-0 me-2">
                                                    <a href="javascript:void(0)"
                                                        class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
                                                        Alice</a>
                                                    <div class="text-gray-500 fs-7">
                                                        Phase 1 development
                                                    </div>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">1 hr</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-4">
                                                    <span class="symbol-label bg-light-danger">
                                                        <i class="ki-duotone ki-information fs-2 text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="mb-0 me-2">
                                                    <a href="javascript:void(0)"
                                                        class="fs-6 text-gray-800 text-hover-primary fw-bold">HR
                                                        Confidential</a>
                                                    <div class="text-gray-500 fs-7">
                                                        Confidential staff documents
                                                    </div>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">2 hrs</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-4">
                                                    <span class="symbol-label bg-light-warning">
                                                        <i class="ki-duotone ki-briefcase fs-2 text-warning">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="mb-0 me-2">
                                                    <a href="javascript:void(0)"
                                                        class="fs-6 text-gray-800 text-hover-primary fw-bold">Company
                                                        HR</a>
                                                    <div class="text-gray-500 fs-7">
                                                        Corporeate staff profiles
                                                    </div>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">5 hrs</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-4">
                                                    <span class="symbol-label bg-light-success">
                                                        <i class="ki-duotone ki-abstract-12 fs-2 text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="mb-0 me-2">
                                                    <a href="javascript:void(0)"
                                                        class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
                                                        Redux</a>
                                                    <div class="text-gray-500 fs-7">
                                                        New frontend admin theme
                                                    </div>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">2 days</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-4">
                                                    <span class="symbol-label bg-light-primary">
                                                        <i class="ki-duotone ki-colors-square fs-2 text-primary">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                            <span class="path4"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="mb-0 me-2">
                                                    <a href="javascript:void(0)"
                                                        class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
                                                        Breafing</a>
                                                    <div class="text-gray-500 fs-7">
                                                        Product launch status update
                                                    </div>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">21 Jan</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-4">
                                                    <span class="symbol-label bg-light-info">
                                                        <i class="ki-duotone ki-picture fs-2 text-info"></i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="mb-0 me-2">
                                                    <a href="javascript:void(0)"
                                                        class="fs-6 text-gray-800 text-hover-primary fw-bold">Banner
                                                        Assets</a>
                                                    <div class="text-gray-500 fs-7">
                                                        Collection of banner images
                                                    </div>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">21 Jan</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-4">
                                                    <span class="symbol-label bg-light-warning">
                                                        <i class="ki-duotone ki-color-swatch fs-2 text-warning">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                            <span class="path4"></span>
                                                            <span class="path5"></span>
                                                            <span class="path6"></span>
                                                            <span class="path7"></span>
                                                            <span class="path8"></span>
                                                            <span class="path9"></span>
                                                            <span class="path10"></span>
                                                            <span class="path11"></span>
                                                            <span class="path12"></span>
                                                            <span class="path13"></span>
                                                            <span class="path14"></span>
                                                            <span class="path15"></span>
                                                            <span class="path16"></span>
                                                            <span class="path17"></span>
                                                            <span class="path18"></span>
                                                            <span class="path19"></span>
                                                            <span class="path20"></span>
                                                            <span class="path21"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="mb-0 me-2">
                                                    <a href="javascript:void(0)"
                                                        class="fs-6 text-gray-800 text-hover-primary fw-bold">Icon
                                                        Assets</a>
                                                    <div class="text-gray-500 fs-7">
                                                        Collection of SVG icons
                                                    </div>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">20 March</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Items-->
                                    <!--begin::View more-->
                                    <div class="py-3 text-center border-top">
                                        <a href="{{ url('pages/general/user-profile/activity') }}"
                                            class="btn btn-color-gray-600 btn-active-color-primary">View All
                                            <i class="ki-duotone ki-arrow-right fs-5">
                                                <span class="path1"></span>
                                                <span class="path2"></span> </i></a>
                                    </div>
                                    <!--end::View more-->
                                </div>
                                <!--end::Tab panel-->
                                <!--begin::Tab panel-->
                                <div class="tab-pane fade show active" id="kt_topbar_notifications_2" role="tabpanel">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column px-9">
                                        <!--begin::Section-->
                                        <div class="pt-10 pb-0">
                                            <!--begin::Title-->
                                            <h3 class="text-gray-900 text-center fw-bold">
                                                Get Pro Access
                                            </h3>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <div class="text-center text-gray-600 fw-semibold pt-1">
                                                Outlines keep you honest. They stoping you from
                                                amazing poorly about drive
                                            </div>
                                            <!--end::Text-->
                                            <!--begin::Action-->
                                            <div class="text-center mt-5 mb-9">
                                                <a href="javascript:void(0)" class="btn btn-sm btn-primary px-6"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
                                            </div>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Illustration-->
                                        <div class="text-center px-4">
                                            <img class="mw-100 mh-200px" alt="image"
                                                src="assets/media/illustrations/sketchy-1/1.png" />
                                        </div>
                                        <!--end::Illustration-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Tab panel-->
                                <!--begin::Tab panel-->
                                <div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
                                    <!--begin::Items-->
                                    <div class="scroll-y mh-325px my-5 px-8">
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="javascript:void(0)" class="text-gray-800 text-hover-primary fw-semibold">New
                                                    order</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">Just now</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="javascript:void(0)" class="text-gray-800 text-hover-primary fw-semibold">New
                                                    customer</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">2 hrs</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="javascript:void(0)"
                                                    class="text-gray-800 text-hover-primary fw-semibold">Payment
                                                    process</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">5 hrs</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="javascript:void(0)"
                                                    class="text-gray-800 text-hover-primary fw-semibold">Search query</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">2 days</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="javascript:void(0)" class="text-gray-800 text-hover-primary fw-semibold">API
                                                    connection</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">1 week</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="javascript:void(0)"
                                                    class="text-gray-800 text-hover-primary fw-semibold">Database
                                                    restore</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">Mar 5</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="javascript:void(0)"
                                                    class="text-gray-800 text-hover-primary fw-semibold">System update</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">May 15</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="javascript:void(0)"
                                                    class="text-gray-800 text-hover-primary fw-semibold">Server OS
                                                    update</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">Apr 3</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="javascript:void(0)" class="text-gray-800 text-hover-primary fw-semibold">API
                                                    rollback</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">Jun 30</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="javascript:void(0)"
                                                    class="text-gray-800 text-hover-primary fw-semibold">Refund process</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">Jul 10</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="javascript:void(0)"
                                                    class="text-gray-800 text-hover-primary fw-semibold">Withdrawal
                                                    process</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">Sep 10</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="javascript:void(0)"
                                                    class="text-gray-800 text-hover-primary fw-semibold">Mail tasks</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">Dec 10</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Items-->
                                    <!--begin::View more-->
                                    <div class="py-3 text-center border-top">
                                        <a href="{{ url('pages/general/user-profile/activity') }}"
                                            class="btn btn-color-gray-600 btn-active-color-primary">View All
                                            <i class="ki-duotone ki-arrow-right fs-5">
                                                <span class="path1"></span>
                                                <span class="path2"></span> </i></a>
                                    </div>
                                    <!--end::View more-->
                                </div>
                                <!--end::Tab panel-->
                            </div>
                            <!--end::Tab content-->
                        </div>
                        <!--end::Menu-->
                        <!--end::Menu wrapper-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin::List-->
                    <div class="mb-5">
                        <!--begin::Items-->
                        <div class="py-1">
                            <div class="d-flex flex-stack align-items-center py-1">
                                <!--begin::Title-->
                                <span class="fs-6 text-gray-500 fw-bold d-block">14 January</span>
                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <button
                                        class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                        data-kt-menu-overflow="true">
                                        <i class="ki-duotone ki-dots-square fs-2 text-gray-500 me-n1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>
                                    </button>
                                    <!--begin::Menu 2-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">
                                                Quick Actions
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mb-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="javascript:void(0)" class="menu-link px-3">New Ticket</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="javascript:void(0)" class="menu-link px-3">New Customer</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-start">
                                            <!--begin::Menu item-->
                                            <a href="javascript:void(0)" class="menu-link px-3">
                                                <span class="menu-title">New Group</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--end::Menu item-->
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="javascript:void(0)" class="menu-link px-3">Admin Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="javascript:void(0)" class="menu-link px-3">Staff Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="javascript:void(0)" class="menu-link px-3">Member Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="javascript:void(0)" class="menu-link px-3">New Contact</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mt-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3 py-3">
                                                <a class="btn btn-primary btn-sm px-4" href="javascript:void(0)">Generate
                                                    Reports</a>
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 2-->
                                    <!--end::Menu-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--begin::Timeline-->
                            <div class="timeline">
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content d-flex flex-row align-items-center sm-0">
                                        <!--begin::Time-->
                                        <span class="fs-4 text-800 fw-bold me-5">10:15</span>
                                        <!--end::Time-->
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet"
                                            class="bullet bullet-vertical d-flex align-items-center h-45px me-6 bg-warning"></span>
                                        <!--end::Bullet-->
                                        <!--begin:Author-->
                                        <div class="flex-grow-1 me-2">
                                            <span class="text-gray-500 text-hover-primary fs-7 fw-bold">Marketing</span>
                                            <span class="text-gray-800 fw-bold d-block fs-6">AOL Meeting</span>
                                        </div>
                                        <!--end:Author-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                            </div>
                            <!--end::Timeline-->
                            <div class="d-flex flex-stack align-items-center py-1">
                                <!--begin::Title-->
                                <span class="fs-6 text-gray-500 fw-bold d-block"></span>
                                <!--end::Title-->
                            </div>
                            <!--begin::Timeline-->
                            <div class="timeline">
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content d-flex flex-row align-items-center sm-0">
                                        <!--begin::Time-->
                                        <span class="fs-4 text-800 fw-bold me-5">11:20</span>
                                        <!--end::Time-->
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet"
                                            class="bullet bullet-vertical d-flex align-items-center h-45px me-6 bg-info"></span>
                                        <!--end::Bullet-->
                                        <!--begin:Author-->
                                        <div class="flex-grow-1 me-2">
                                            <span class="text-gray-500 text-hover-primary fs-7 fw-bold">UI/UX
                                                Design</span>
                                            <span class="text-gray-800 fw-bold d-block fs-6">ABN Ambro Mobile App</span>
                                        </div>
                                        <!--end:Author-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                            </div>
                            <!--end::Timeline-->
                            <div class="d-flex flex-stack align-items-center py-1">
                                <!--begin::Title-->
                                <span class="fs-6 text-gray-500 fw-bold d-block">15 January</span>
                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <button
                                        class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                        data-kt-menu-overflow="true">
                                        <i class="ki-duotone ki-dots-square fs-2 text-gray-500 me-n1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>
                                    </button>
                                    <!--begin::Menu 2-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">
                                                Quick Actions
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mb-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="javascript:void(0)" class="menu-link px-3">New Ticket</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="javascript:void(0)" class="menu-link px-3">New Customer</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-start">
                                            <!--begin::Menu item-->
                                            <a href="javascript:void(0)" class="menu-link px-3">
                                                <span class="menu-title">New Group</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--end::Menu item-->
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="javascript:void(0)" class="menu-link px-3">Admin Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="javascript:void(0)" class="menu-link px-3">Staff Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="javascript:void(0)" class="menu-link px-3">Member Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="javascript:void(0)" class="menu-link px-3">New Contact</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mt-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3 py-3">
                                                <a class="btn btn-primary btn-sm px-4" href="javascript:void(0)">Generate
                                                    Reports</a>
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 2-->
                                    <!--end::Menu-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--begin::Timeline-->
                            <div class="timeline">
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content d-flex flex-row align-items-center sm-0">
                                        <!--begin::Time-->
                                        <span class="fs-4 text-800 fw-bold me-5">10:00</span>
                                        <!--end::Time-->
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet"
                                            class="bullet bullet-vertical d-flex align-items-center h-45px me-6 bg-primary"></span>
                                        <!--end::Bullet-->
                                        <!--begin:Author-->
                                        <div class="flex-grow-1 me-2">
                                            <span class="text-gray-500 text-hover-primary fs-7 fw-bold">Discussion</span>
                                            <span class="text-gray-800 fw-bold d-block fs-6">AirEagle Project</span>
                                        </div>
                                        <!--end:Author-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                            </div>
                            <!--end::Timeline-->
                            <div class="d-flex flex-stack align-items-center py-1">
                                <!--begin::Title-->
                                <span class="fs-6 text-gray-500 fw-bold d-block"></span>
                                <!--end::Title-->
                            </div>
                            <!--begin::Timeline-->
                            <div class="timeline">
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content d-flex flex-row align-items-center sm-0">
                                        <!--begin::Time-->
                                        <span class="fs-4 text-800 fw-bold me-5">13:00</span>
                                        <!--end::Time-->
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet"
                                            class="bullet bullet-vertical d-flex align-items-center h-45px me-6 bg-success"></span>
                                        <!--end::Bullet-->
                                        <!--begin:Author-->
                                        <div class="flex-grow-1 me-2">
                                            <span class="text-gray-500 text-hover-primary fs-7 fw-bold">Developer</span>
                                            <span class="text-gray-800 fw-bold d-block fs-6">Alarm App</span>
                                        </div>
                                        <!--end:Author-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                            </div>
                            <!--end::Timeline-->
                            <div class="d-flex flex-stack align-items-center py-1">
                                <!--begin::Title-->
                                <span class="fs-6 text-gray-500 fw-bold d-block"></span>
                                <!--end::Title-->
                            </div>
                            <!--begin::Timeline-->
                            <div class="timeline">
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content d-flex flex-row align-items-center sm-0">
                                        <!--begin::Time-->
                                        <span class="fs-4 text-800 fw-bold me-5">15:50</span>
                                        <!--end::Time-->
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet"
                                            class="bullet bullet-vertical d-flex align-items-center h-45px me-6 bg-danger"></span>
                                        <!--end::Bullet-->
                                        <!--begin:Author-->
                                        <div class="flex-grow-1 me-2">
                                            <span class="text-gray-500 text-hover-primary fs-7 fw-bold">Marketing</span>
                                            <span class="text-gray-800 fw-bold d-block fs-6">Market branding</span>
                                        </div>
                                        <!--end:Author-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                            </div>
                            <!--end::Timeline-->
                            <div class="d-flex flex-stack align-items-center py-1">
                                <!--begin::Title-->
                                <span class="fs-6 text-gray-500 fw-bold d-block">16 January</span>
                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <button
                                        class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                        data-kt-menu-overflow="true">
                                        <i class="ki-duotone ki-dots-square fs-2 text-gray-500 me-n1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>
                                    </button>
                                    <!--begin::Menu 2-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">
                                                Quick Actions
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mb-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="javascript:void(0)" class="menu-link px-3">New Ticket</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="javascript:void(0)" class="menu-link px-3">New Customer</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-start">
                                            <!--begin::Menu item-->
                                            <a href="javascript:void(0)" class="menu-link px-3">
                                                <span class="menu-title">New Group</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--end::Menu item-->
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="javascript:void(0)" class="menu-link px-3">Admin Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="javascript:void(0)" class="menu-link px-3">Staff Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="javascript:void(0)" class="menu-link px-3">Member Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="javascript:void(0)" class="menu-link px-3">New Contact</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mt-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3 py-3">
                                                <a class="btn btn-primary btn-sm px-4" href="javascript:void(0)">Generate
                                                    Reports</a>
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 2-->
                                    <!--end::Menu-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--begin::Timeline-->
                            <div class="timeline">
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content d-flex flex-row align-items-center sm-0">
                                        <!--begin::Time-->
                                        <span class="fs-4 text-800 fw-bold me-5">12:00</span>
                                        <!--end::Time-->
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet"
                                            class="bullet bullet-vertical d-flex align-items-center h-45px me-6 bg-gray-700"></span>
                                        <!--end::Bullet-->
                                        <!--begin:Author-->
                                        <div class="flex-grow-1 me-2">
                                            <span class="text-gray-500 text-hover-primary fs-7 fw-bold">UI/UX
                                                Design</span>
                                            <span class="text-gray-800 fw-bold d-block fs-6">Market Dashboard
                                                Design</span>
                                        </div>
                                        <!--end:Author-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                            </div>
                            <!--end::Timeline-->
                            <div class="d-flex flex-stack align-items-center py-1">
                                <!--begin::Title-->
                                <span class="fs-6 text-gray-500 fw-bold d-block"></span>
                                <!--end::Title-->
                            </div>
                            <!--begin::Timeline-->
                            <div class="timeline">
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content d-flex flex-row align-items-center sm-0">
                                        <!--begin::Time-->
                                        <span class="fs-4 text-800 fw-bold me-5">14:00</span>
                                        <!--end::Time-->
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet"
                                            class="bullet bullet-vertical d-flex align-items-center h-45px me-6 bg-warning"></span>
                                        <!--end::Bullet-->
                                        <!--begin:Author-->
                                        <div class="flex-grow-1 me-2">
                                            <span class="text-gray-500 text-hover-primary fs-7 fw-bold">Marketing</span>
                                            <span class="text-gray-800 fw-bold d-block fs-6">Instagram Strategy</span>
                                        </div>
                                        <!--end:Author-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                            </div>
                            <!--end::Timeline-->
                        </div>
                        <!--end::Items-->
                    </div>
                    <!--end::List-->
                    <!--begin::Action-->
                    <a href="javascript:void(0)" class="btn btn-light btn-color-gray-700 fw-bold w-100">View more</a>
                    <!--end::Action-->
                </div>
                <!--end: Card Body-->
            </div>
            <!--end::Aside 5-->
        </div>
        <!--end::Aside wrapper-->
    </div>
@endisset
