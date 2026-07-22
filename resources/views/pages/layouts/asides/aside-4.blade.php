@extends('layouts.index', ['withAside' => true])
@section('styles')
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
@endsection
@section('toolbar')
    @component('layouts.partials._toolbar')
        @slot('li_1')
            Layouts
        @endslot
        @slot('li_2')
            Asides
        @endslot
    @endcomponent
@endsection
@section('content')
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Content menu-->
            {{-- <div class="d-flex flex-stack mb-9">
                <!--begin::Navs-->
                <ul
                    class="nav nav-stretch nav-line-tabs nav-line-tabs-2x flex-row-fluid border-bottom border-2 fs-6 fw-bold">
                    <!--begin::Nav item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary ms-0 me-5 me-lg-8 px-3 pb-4 active"
                            href="{{ url('docs/laravel/index') }}">Profile</a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary ms-0 me-5 me-lg-8 px-3 pb-4"
                            href="{{ url('apps/projects/list') }}">Projects</a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary ms-0 me-5 me-lg-8 px-3 pb-4"
                            href="{{ url('pages/account/statements') }}">Connections</a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary ms-0 me-5 me-lg-8 px-3 pb-4"
                            href="{{ url('pages/general/user-profile/campaigns') }}">Campaings</a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary ms-0 me-5 me-lg-8 px-3 pb-4"
                            href="{{ url('apps/file-manager/folders') }}">Documents</a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary ms-0 me-5 me-lg-8 px-3 pb-4"
                            href="{{ url('apps/projects/activity') }}">activity</a>
                    </li>
                    <!--end::Nav item-->
                    <li class="flex-grow-1"></li>
                    <li class="d-flex gap-2 mb-2">
                        <a href="{{ url('pages/general/blog/post') }}" class="btn btn-sm btn-flex btn-primary align-self-center px-3">
                            <i class="ki-outline ki-plus-square fs-3"></i>New Post</a>
                        <a href="javascript:void(0)"
                            class="btn btn-icon btn-sm btn-icon-gray-500 btn-outline btn-outline-dashed btn-active-primary"
                            id="kt_drawer_chat_toggle">
                            <i class="ki-outline ki-messages fs-3"></i>
                        </a>
                        <a href="javascript:void(0)"
                            class="btn btn-icon btn-sm btn-icon-gray-500 btn-outline btn-outline-dashed btn-active-primary"
                            data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                            <i class="ki-outline ki-dots-vertical fs-3"></i>
                        </a>
                    </li>
                </ul>
                <!--begin::Navs-->
            </div> --}}
            <!--end::Content menu-->
            <!--begin::Post 2-->
            <!--begin::Card-->
            <div class="card card-flush mb-10">
                <!--begin::Card header-->
                <div class="card-header pt-8">
                    <!--begin::Author-->
                    <div class="d-flex align-items-center">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-50px symbol-circle me-5">
                            <img src="assets/media/avatars/300-2.jpg" class="" alt="" />
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Info-->
                        <div class="flex-grow-1">
                            <!--begin::Name-->
                            <a href="javascript:void(0)" class="text-gray-800 text-hover-primary fs-4 fw-bold">Jenny
                                Klabber</a>
                            <!--end::Name-->
                            <!--begin::Date-->
                            <span class="text-gray-500 fw-semibold d-block fs-6">2 days ago</span>
                            <!--end::Date-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Author-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Menu wrapper-->
                        <div class="m-0">
                            <!--begin::Menu toggle-->
                            <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary me-n4"
                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                data-kt-menu-overflow="true">
                                <i class="ki-outline ki-dots-square fs-1"></i>
                            </button>
                            <!--end::Menu toggle-->
                            <!--begin::Menu 2-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
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
                        </div>
                        <!--end::Menu wrapper-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-5 pb-5">
                    <!--begin::Post content-->
                    <div class="fs-6 fw-semibold text-gray-700">I can hear your objections already. “But Dan, I have to
                        blog for a cardboard box manufacturing company.” I feel your pain, I really do.</div>
                    <!--end::Post content-->
                </div>
                <!--end::Card body-->
                <!--begin::Card footer-->
                <div class="card-footer pt-0">
                    <!--begin::Info-->
                    <div class="mb-6">
                        <!--begin::Separator-->
                        <div class="separator separator-solid"></div>
                        <!--end::Separator-->
                        <!--begin::Nav-->
                        <ul class="nav py-3">
                            <!--begin::Item-->
                            <li class="nav-item">
                                <a class="nav-link btn btn-sm btn-color-gray-600 btn-active-color-primary btn-active-light-primary fw-bold px-4 me-1 collapsible"
                                    data-bs-toggle="collapse" href="#kt_social_feeds_comments_2">
                                    <i class="ki-outline ki-message-text fs-2 me-1"></i>2 Comments</a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="nav-item">
                                <a href="javascript:void(0)"
                                    class="nav-link btn btn-sm btn-color-gray-600 btn-active-color-primary fw-bold px-4 me-1">
                                    <i class="ki-outline ki-heart fs-2 me-1"></i>234 Likes</a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="nav-item">
                                <a href="javascript:void(0)"
                                    class="nav-link btn btn-sm btn-color-gray-600 btn-active-color-primary fw-bold px-4">
                                    <i class="ki-outline ki-archive-tick fs-2 me-1"></i>16 Saves</a>
                            </li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Nav-->
                        <!--begin::Separator-->
                        <div class="separator separator-solid mb-1"></div>
                        <!--end::Separator-->
                        <!--begin::Comments-->
                        <div class="collapse" id="kt_social_feeds_comments_2">
                            <!--begin::Comment-->
                            <div class="d-flex pt-6">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-45px symbol-circle me-5">
                                    <img src="assets/media/avatars/300-13.jpg" alt="" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column flex-row-fluid">
                                    <!--begin::Info-->
                                    <div class="d-flex align-items-center flex-wrap mb-0">
                                        <!--begin::Name-->
                                        <a href="javascript:void(0)"
                                            class="text-gray-800 text-hover-primary fw-bold me-6">Mr.
                                            Anderson</a>
                                        <!--end::Name-->
                                        <!--begin::Date-->
                                        <span class="text-gray-500 fw-semibold fs-7 me-5">1 Day ago</span>
                                        <!--end::Date-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Text-->
                                    <span class="text-gray-800 fs-7 fw-normal pt-1">Long before you sit dow to put digital
                                        pen to paper you need to make sure you have to sit down and write.</span>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Comment-->
                            <!--begin::Comment-->
                            <div class="d-flex pt-6">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-45px symbol-circle me-5">
                                    <img src="assets/media/avatars/300-4.jpg" alt="" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column flex-row-fluid">
                                    <!--begin::Info-->
                                    <div class="d-flex align-items-center flex-wrap mb-0">
                                        <!--begin::Name-->
                                        <a href="javascript:void(0)"
                                            class="text-gray-800 text-hover-primary fw-bold me-6">Mrs.
                                            Anderson</a>
                                        <!--end::Name-->
                                        <!--begin::Date-->
                                        <span class="text-gray-500 fw-semibold fs-7 me-5">2 Days ago</span>
                                        <!--end::Date-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Text-->
                                    <span class="text-gray-800 fs-7 fw-normal pt-1">Long before you sit dow to put digital
                                        pen to paper</span>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Comment-->
                        </div>
                        <!--end::Collapse-->
                    </div>
                    <!--end::Info-->
                    <!--begin::Comment form-->
                    <div class="d-flex align-items-center">
                        <!--begin::Author-->
                        <div class="symbol symbol-35px symbol-circle me-3">
                            <img src="assets/media/avatars/300-3.jpg" alt="" />
                        </div>
                        <!--end::Author-->
                        <!--begin::Input group-->
                        <div class="position-relative w-100">
                            <!--begin::Input-->
                            <textarea type="text" class="form-control form-control-solid border border-gray-300 ps-5" rows="1"
                                name="search" value="" data-kt-autosize="true" placeholder=""></textarea>
                            <!--end::Input-->
                            <!--begin::Actions-->
                            <div class="position-absolute top-0 end-0 translate-middle-x mt-1 me-n14">
                                <!--begin::Btn-->
                                <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                                    <i class="ki-outline ki-disconnect fs-2"></i>
                                </button>
                                <!--end::Btn-->
                                <!--begin::Btn-->
                                <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                                    <i class="ki-outline ki-picture fs-2"></i>
                                </button>
                                <!--end::Btn-->
                                <!--begin::Btn-->
                                <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                                    <i class="ki-outline ki-emoji-happy fs-2"></i>
                                </button>
                                <!--end::Btn-->
                                <!--begin::Btn-->
                                <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                                    <i class="ki-outline ki-geolocation fs-2"></i>
                                </button>
                                <!--end::Btn-->
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Comment form-->
                </div>
                <!--end::Card footer-->
            </div>
            <!--end::Card-->
            <!--end::Post 2-->
            <!--begin::Post 1-->
            <!--begin::Card-->
            <div class="card card-flush mb-10">
                <!--begin::Card header-->
                <div class="card-header pt-8">
                    <!--begin::Author-->
                    <div class="d-flex align-items-center">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-50px symbol-circle me-5">
                            <img src="assets/media/avatars/300-2.jpg" class="" alt="" />
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Info-->
                        <div class="flex-grow-1">
                            <!--begin::Name-->
                            <a href="javascript:void(0)" class="text-gray-800 text-hover-primary fs-4 fw-bold">Jenny
                                Klabber</a>
                            <!--end::Name-->
                            <!--begin::Date-->
                            <span class="text-gray-500 fw-semibold d-block fs-6">Yesterday at 5:06 PM</span>
                            <!--end::Date-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Author-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Menu wrapper-->
                        <div class="m-0">
                            <!--begin::Menu toggle-->
                            <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary me-n4"
                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                data-kt-menu-overflow="true">
                                <i class="ki-outline ki-dots-square fs-1"></i>
                            </button>
                            <!--end::Menu toggle-->
                            <!--begin::Menu 2-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
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
                        </div>
                        <!--end::Menu wrapper-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-5 pb-5">
                    <!--begin::Post content-->
                    <div class="fs-6 fw-normal text-gray-700 mb-5">Now that I’m done thoroughly mangling that vague
                        metaphor, let’s get down to business. You know you need to start blogging to grow your business, but
                        you don’t know how. In this post, I’ll show you how to write a great blog post in five simple steps
                        that people will actually want to read. Ready? Let’s get started.</div>
                    <!--end::Post content-->
                    <!--begin::Post media-->
                    <div class="row g-7 h-250px h-md-500px">
                        <!--begin::Col-->
                        <div class="col-6">
                            <!--begin::Item-->
                            <a class="d-block card-rounded overlay h-100" data-fslightbox="lightbox-projects"
                                href="assets/media/stock/600x600/img-23.jpg">
                                <!--begin::Image-->
                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-100"
                                    style="background-image:url('assets/media/stock/600x600/img-23.jpg')">
                                </div>
                                <!--end::Image-->
                                <!--begin::Action-->
                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                    <i class="ki-outline ki-eye fs-3x text-white"></i>
                                </div>
                                <!--end::Action-->
                            </a>
                            <!--end::Item-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                            <!--begin::Row-->
                            <div class="row g-7 h-250px h-md-500px">
                                <!--begin::Col-->
                                <div class="col-lg-12">
                                    <!--begin::Item-->
                                    <a class="d-block card-rounded overlay h-100" data-fslightbox="lightbox-projects"
                                        href="assets/media/stock/600x600/img-22.jpg">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-100"
                                            style="background-image:url('assets/media/stock/600x400/img-71.jpg')">
                                        </div>
                                        <!--end::Image-->
                                        <!--begin::Action-->
                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                            <i class="ki-outline ki-eye fs-3x text-white"></i>
                                        </div>
                                        <!--end::Action-->
                                    </a>
                                    <!--end::Item-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-lg-12">
                                    <!--begin::Item-->
                                    <a class="d-block card-rounded overlay h-100" data-fslightbox="lightbox-projects"
                                        href="assets/media/stock/600x600/img-21.jpg">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-100"
                                            style="background-image:url('assets/media/stock/600x400/img-72.jpg')">
                                        </div>
                                        <!--end::Image-->
                                        <!--begin::Action-->
                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                            <i class="ki-outline ki-eye fs-3x text-white"></i>
                                        </div>
                                        <!--end::Action-->
                                    </a>
                                    <!--end::Item-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Post media-->
                </div>
                <!--end::Card body-->
                <!--begin::Card footer-->
                <div class="card-footer pt-0">
                    <!--begin::Info-->
                    <div class="mb-6">
                        <!--begin::Separator-->
                        <div class="separator separator-solid"></div>
                        <!--end::Separator-->
                        <!--begin::Nav-->
                        <ul class="nav py-3">
                            <!--begin::Item-->
                            <li class="nav-item">
                                <a class="nav-link btn btn-sm btn-color-gray-600 btn-active-color-primary btn-active-light-primary fw-bold px-4 me-1 collapsible active"
                                    data-bs-toggle="collapse" href="#kt_social_feeds_comments_1">
                                    <i class="ki-outline ki-message-text fs-2 me-1"></i>2 Comments</a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="nav-item">
                                <a href="javascript:void(0)"
                                    class="nav-link btn btn-sm btn-color-gray-600 btn-active-color-primary fw-bold px-4 me-1">
                                    <i class="ki-outline ki-heart fs-2 me-1"></i>47k Likes</a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="nav-item">
                                <a href="javascript:void(0)"
                                    class="nav-link btn btn-sm btn-color-gray-600 btn-active-color-primary fw-bold px-4">
                                    <i class="ki-outline ki-archive-tick fs-2 me-1"></i>900 Saves</a>
                            </li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Nav-->
                        <!--begin::Separator-->
                        <div class="separator separator-solid mb-1"></div>
                        <!--end::Separator-->
                        <!--begin::Comments-->
                        <div class="collapse show" id="kt_social_feeds_comments_1">
                            <!--begin::Comment-->
                            <div class="d-flex pt-6">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-45px symbol-circle me-5">
                                    <img src="assets/media/avatars/300-13.jpg" alt="" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column flex-row-fluid">
                                    <!--begin::Info-->
                                    <div class="d-flex align-items-center flex-wrap mb-0">
                                        <!--begin::Name-->
                                        <a href="javascript:void(0)"
                                            class="text-gray-800 text-hover-primary fw-bold me-6">Mr.
                                            Anderson</a>
                                        <!--end::Name-->
                                        <!--begin::Date-->
                                        <span class="text-gray-500 fw-semibold fs-7 me-5">1 Day ago</span>
                                        <!--end::Date-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Text-->
                                    <span class="text-gray-800 fs-7 fw-normal pt-1">Long before you sit dow to put digital
                                        pen to paper you need to make sure you have to sit down and write.</span>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Comment-->
                            <!--begin::Comment-->
                            <div class="d-flex pt-6">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-45px symbol-circle me-5">
                                    <img src="assets/media/avatars/300-4.jpg" alt="" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column flex-row-fluid">
                                    <!--begin::Info-->
                                    <div class="d-flex align-items-center flex-wrap mb-0">
                                        <!--begin::Name-->
                                        <a href="javascript:void(0)"
                                            class="text-gray-800 text-hover-primary fw-bold me-6">Mrs.
                                            Anderson</a>
                                        <!--end::Name-->
                                        <!--begin::Date-->
                                        <span class="text-gray-500 fw-semibold fs-7 me-5">2 Days ago</span>
                                        <!--end::Date-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Text-->
                                    <span class="text-gray-800 fs-7 fw-normal pt-1">Long before you sit dow to put digital
                                        pen to paper</span>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Comment-->
                        </div>
                        <!--end::Collapse-->
                    </div>
                    <!--end::Info-->
                    <!--begin::Comment form-->
                    <div class="d-flex align-items-center">
                        <!--begin::Author-->
                        <div class="symbol symbol-35px symbol-circle me-3">
                            <img src="assets/media/avatars/300-3.jpg" alt="" />
                        </div>
                        <!--end::Author-->
                        <!--begin::Input group-->
                        <div class="position-relative w-100">
                            <!--begin::Input-->
                            <textarea type="text" class="form-control form-control-solid border border-gray-300 ps-5" rows="1"
                                name="search" value="" data-kt-autosize="true" placeholder=""></textarea>
                            <!--end::Input-->
                            <!--begin::Actions-->
                            <div class="position-absolute top-0 end-0 translate-middle-x mt-1 me-n14">
                                <!--begin::Btn-->
                                <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                                    <i class="ki-outline ki-disconnect fs-2"></i>
                                </button>
                                <!--end::Btn-->
                                <!--begin::Btn-->
                                <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                                    <i class="ki-outline ki-picture fs-2"></i>
                                </button>
                                <!--end::Btn-->
                                <!--begin::Btn-->
                                <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                                    <i class="ki-outline ki-emoji-happy fs-2"></i>
                                </button>
                                <!--end::Btn-->
                                <!--begin::Btn-->
                                <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                                    <i class="ki-outline ki-geolocation fs-2"></i>
                                </button>
                                <!--end::Btn-->
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Comment form-->
                </div>
                <!--end::Card footer-->
            </div>
            <!--end::Card-->
            <!--end::Post 1-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
@endsection

@section('kt_app_aside')
    @component('layouts._aside')
        @slot('courier')
        @endslot
    @endcomponent
@endsection

@section('scripts')
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/new-target.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
    <!--end::Custom Javascript-->
@endsection
