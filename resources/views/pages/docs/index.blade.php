@extends('layouts.document832')
@section('title', 'Index')
@section('styles')
    <link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <!--begin::Content-->
    <div class="docs-content d-flex flex-column flex-column-fluid" id="kt_docs_content">
        <!--begin::Container-->
        <div class="container d-flex flex-column flex-lg-row" id="kt_docs_content_container">
            <!--begin::Card-->
            <div class="card card-docs flex-row-fluid mb-2" id="kt_docs_content_card">
                <!--begin::Card Body-->
                <div class="card-body fs-6 py-15 px-10 py-lg-15 px-lg-15 text-gray-700">


                    <!--begin::Section-->
                    <div class="px-md-10 pt-md-10 pb-md-5">
                        <!--begin::Block-->
                        <div class="text-center mb-20">
                            <h1 class="fs-2tx fw-bold mb-8">
                                Rapidly build modern

                                web apps with

                                <span class="d-inline-block position-relative ms-2">
                                    <span class="d-inline-block mb-2">
                                        Metronic </span>
                                    <span
                                        class="d-inline-block position-absolute h-8px bottom-0 end-0 start-0 bg-success translate rounded"></span>
                                </span>
                            </h1>

                            <div class="fw-semibold fs-2 text-gray-500 mb-10">
                                The most advanced <span class="fw-bold text-gray-900">Bootstrap 5</span>&nbsp;foundation
                                with a solid design system, <br />
                                extensive utility classes and custom made<span
                                    class="fw-bold text-gray-900">in-house</span>&nbsp;components. </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Row-->
                        <div class="row g-0">


                            <!--begin::Col-->
                            <div class="col-md-6 mb-10">
                                <div class="bg-light bg-opacity-50 rounded-3 p-10 mx-md-5 h-md-100">

                                    <div
                                        class="d-flex flex-center w-60px h-60px rounded-3 bg-light-info bg-opacity-90 mb-10">
                                        <i class="ki-duotone ki-setting-2 text-info fs-3x"><span class="path1"></span><span
                                                class="path2"></span></i>
                                    </div>

                                    <h1 class="mb-5">Quick Installation</h1>

                                    <div class="fs-4 text-gray-600 py-3">
                                        Install the dependencies using Yarn or NPM and use our custom made Gulp or Webapck
                                        build tools to get your project up and running literally in a minutes. </div>

                                    <a href="/html/metronic/docs/getting-started/build/gulp"
                                        class="btn btn-lg btn-flex btn-link btn-color-info">

                                        Install now

                                        <i class="ki-duotone ki-arrow-right ms-2 fs-3"><span class="path1"></span><span
                                                class="path2"></span></i> </a>
                                </div>
                            </div>
                            <!--end::Col-->


                            <!--begin::Col-->
                            <div class="col-md-6 mb-10">
                                <div class="bg-light bg-opacity-50 rounded-3 p-10 mx-md-5 h-md-100">

                                    <div
                                        class="d-flex flex-center w-60px h-60px rounded-3 bg-light-success bg-opacity-90 mb-10">
                                        <i class="ki-duotone ki-design text-success fs-3x"><span class="path1"></span><span
                                                class="path2"></span></i>
                                    </div>

                                    <h1 class="mb-5">Layout Builder</h1>

                                    <div class="fs-4 text-gray-600 py-3">
                                        Just build your layout, preview it in real time and export the HTML template with
                                        it's includable partials for your server side integration. </div>

                                    <a href="https://preview.keenthemes.com/metronic8/demo1/layout-builder.html"
                                        class="btn btn-lg btn-flex btn-link btn-color-success">

                                        Preview and export

                                        <i class="ki-duotone ki-arrow-right ms-2 fs-3"><span class="path1"></span><span
                                                class="path2"></span></i> </a>
                                </div>
                            </div>
                            <!--end::Col-->


                            <!--begin::Col-->
                            <div class="col-md-6 mb-10">
                                <div class="bg-light bg-opacity-50 rounded-3 p-10 mx-md-5 h-md-100">

                                    <div
                                        class="d-flex flex-center w-60px h-60px rounded-3 bg-light-danger bg-opacity-90 mb-10">
                                        <i class="ki-duotone ki-abstract-26 text-danger fs-3x"><span
                                                class="path1"></span><span class="path2"></span></i>
                                    </div>

                                    <h1 class="mb-5">Extended Utility Classes</h1>

                                    <div class="fs-4 text-gray-600 py-3">
                                        Build whatever you want without a single line of CSS/SASS code by just using our
                                        low-level utility classes and base components. </div>

                                    <a href="/html/metronic/docs/base/utilities"
                                        class="btn btn-lg btn-flex btn-link btn-color-danger">

                                        Learn more

                                        <i class="ki-duotone ki-arrow-right ms-2 fs-3"><span class="path1"></span><span
                                                class="path2"></span></i> </a>
                                </div>
                            </div>
                            <!--end::Col-->


                            <!--begin::Col-->
                            <div class="col-md-6 mb-10">
                                <div class="bg-light bg-opacity-50 rounded-3 p-10 mx-md-5 h-md-100">

                                    <div
                                        class="d-flex flex-center w-60px h-60px rounded-3 bg-light-warning bg-opacity-90 mb-10">
                                        <i class="ki-duotone ki-abstract-25 text-warning fs-3x"><span
                                                class="path1"></span><span class="path2"></span></i>
                                    </div>

                                    <h1 class="mb-5">40+ In-house Components</h1>

                                    <div class="fs-4 text-gray-600 py-3">
                                        Our exclusive components such as KTMenu, KTStepper, KTPasswordMeter are made to
                                        empower your next project with our novel UI/UX vision. </div>

                                    <a href="/html/metronic/docs/general/stepper"
                                        class="btn btn-lg btn-flex btn-link btn-color-warning">

                                        Browse components

                                        <i class="ki-duotone ki-arrow-right ms-2 fs-3"><span class="path1"></span><span
                                                class="path2"></span></i> </a>
                                </div>
                            </div>
                            <!--end::Col-->


                            <!--begin::Col-->
                            <div class="col-md-6 mb-10">
                                <div class="bg-light bg-opacity-50 rounded-3 p-10 mx-md-5 h-md-100">

                                    <div
                                        class="d-flex flex-center w-60px h-60px rounded-3 bg-light-success bg-opacity-90 mb-10">
                                        <i class="ki-duotone ki-square-brackets text-success fs-3x"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span><span class="path4"></span></i>
                                    </div>

                                    <h1 class="mb-5">3rd Party Plugins</h1>

                                    <div class="fs-4 text-gray-600 py-3">
                                        All popular 3rd-party plugins are deeply customized in order to perfectly meet our
                                        design system requirements and blend with your unique in-house components. </div>

                                    <a href="/html/metronic/docs/forms/flatpickr"
                                        class="btn btn-lg btn-flex btn-link btn-color-success">

                                        Learn more

                                        <i class="ki-duotone ki-arrow-right ms-2 fs-3"><span class="path1"></span><span
                                                class="path2"></span></i> </a>
                                </div>
                            </div>
                            <!--end::Col-->


                            <!--begin::Col-->
                            <div class="col-md-6 mb-10">
                                <div class="bg-light bg-opacity-50 rounded-3 p-10 mx-md-5 h-md-100">

                                    <div
                                        class="d-flex flex-center w-60px h-60px rounded-3 bg-light-primary bg-opacity-90 mb-10">
                                        <i class="ki-duotone ki-abstract-36 text-primary fs-3x"><span
                                                class="path1"></span><span class="path2"></span></i>
                                    </div>

                                    <h1 class="mb-5">Multi-style Icons</h1>

                                    <div class="fs-4 text-gray-600 py-3">
                                        Fulfill your icon needs with over 6000 icons from our in-house designed Keenthemes
                                        and open source Bootstrap Icons, Font Awesome, and Line Awesome sets. </div>

                                    <a href="/html/metronic/docs/icons/keenicons"
                                        class="btn btn-lg btn-flex btn-link btn-color-primary">

                                        Browse icons

                                        <i class="ki-duotone ki-arrow-right ms-2 fs-3"><span class="path1"></span><span
                                                class="path2"></span></i> </a>
                                </div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Section-->
                </div>
                <!--end::Card Body-->
            </div>
            <!--end::Card-->

            <!--begin::Sidebar wrapper-->
            <div class="ms-7 flex-row-auto w-lg-250px">
                <!--begin::Sidebar nav-->
                <div class="card card-flush d-none d-lg-flex position-sticky" style="top: 25px;" data-kt-sticky="true" data-kt-sticky-name="sidebar-navs"
                    data-kt-sticky-offset="{default: false, lg: 250}" data-kt-sticky-width="250px"
                    data-kt-sticky-animation="false" data-kt-sticky-left="auto" data-kt-sticky-top="25px"
                    data-kt-sticky-zindex="5">
                    <!--begin::Card body-->
                    <div class="card-body px-0 px-6 py-6 min-h-300px">


                        <a href="https://1.envato.market/Vm7VRE" class="d-block mb-8">
                            <img src="https://devs.keenthemes.com/assets/media/banners/buy-metronic.png"
                                alt="buy metronic" class="mw-100 rounded-3" data-bs-toggle="popover"
                                data-bs-trigger="hover" data-bs-html="true" data-bs-placement="top"
                                data-bs-title="<b>License Reminder</b>"
                                data-bs-content="One license allows using Metronic for a single deployment and all subsequent usage requires a separate license. <div class='mb-3'></div> If you plan to use Metronic in a Software as a Service (SaaS) model with paid subscriptions, you'll need an Extended License." />
                        </a>

                        <a href="https://keenthemes.com/products/templates-mega-bundle?utm_source=docs&utm_content=mega-bundle"
                            class="d-block mb-8">
                            <img src="https://devs.keenthemes.com/assets/media/banners/mega-bundle.png"
                                alt="buy mega bundle" class="mw-100 rounded-3" />
                        </a>
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Sidebar nav-->
            </div>
            <!--end::Sidebar wrapper-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Content-->
@endsection
@section('scripts')
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
@endsection


