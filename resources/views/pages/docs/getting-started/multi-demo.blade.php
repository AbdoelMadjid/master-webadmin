@extends('layouts.document832')
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
                    <div class="pb-10">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-2" id="overview">
                            <a href="#overview"></a>
                            Overview
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            Metronic was specifically designed to support a multi-demo concept.
                            This Multi-Demo concept is included within Metronic’s package files that also includes
                            Metronic’s default global components and plugins.
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="pb-10">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-2" id="concep">
                            <a href="#concep"></a>
                            What is "Multi-Demo" concept?
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            A Multi-Demo means that by purchasing a single license of Metronic,
                            you are entitled to receive and use all the different demo types that comes packed within
                            Metronic itself.

                            Each Demo within Metronic is uniquely designed for specific types of solutions or project
                            requirement.
                            For example, when you purchase Metronic, you’ll be able to utilize Metronic’s Default demo,
                            a CRM Application demo, an Intranet System demo, an eCommerce Backend demo, a SAAS Service demo
                            and so much more.
                            Each Demo is organized within its own folder, which is also neatly packed with its own SCSS and
                            JS files or any other files that are specifically required for that demo.
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="pb-10">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-2" id="components">
                            <a href="#components"></a>
                            What is a "Global Component Component/Plugin" ?
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            Global components or Global Plugins are abstract functional elements that can function
                            independently within any of
                            Metronic’s demos. For example, an invoice template or button styles are global components and a
                            datatable or a form wizard are global plugins.

                            Each demo is cross-compatible with Metronic’s default global components and plugins.
                            This allows you to create and develop uniquely design projects by using different demo types
                            together with hand-picked global components and plugins.
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="pb-0">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-2" id="customization">
                            <a href="#customization"></a>
                            Further Customization Options
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            All these options can also be overridden by your own customized component styles and settings to
                            ensure that your projects with
                            Metronic will always stay fresh and unique for each deployment. Please note that each deployment
                            of
                            Metronic will require a single regular license or higher.
                        </div>
                        <!--end::Block-->
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
                            <img src="https://devs.keenthemes.com/assets/media/banners/buy-metronic.png" alt="buy metronic"
                                class="mw-100 rounded-3" data-bs-toggle="popover" data-bs-trigger="hover"
                                data-bs-html="true" data-bs-placement="top" data-bs-title="<b>License Reminder</b>"
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


