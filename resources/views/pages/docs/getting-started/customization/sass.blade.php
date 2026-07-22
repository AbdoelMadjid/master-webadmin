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
                        <h1 class="anchor fw-bold mb-5" id="overview" data-kt-scroll-offset="50">
                            <a href="#overview"></a>

                            Overview
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="pt-5">
                            Metronic uses <a class="fw-semibold" href="https://sass-lang.com/">Sass</a>&nbsp, the most
                            powerful CSS preprocessor for handling the
                            theme css efficiently. Sass is the most mature, stable, and powerful professional grade CSS
                            extension language in the world.
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="components" data-kt-scroll-offset="50">
                            <a href="#components"></a>

                            Components
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Components folder in <code>/src/sass/components/</code> contains Sass code that customizes the
                            core Bootstrap components
                            to match the <strong>Metronic</strong>'s own design system
                            and custom components. Both Metronic and
                            <strong>Bootstrap</strong>&nbsp; components are customized in
                            <code>/src/sass/_variables.scss</code>.
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="bootstrap-variables" data-kt-scroll-offset="50">
                            <a href="#bootstrap-variables"></a>

                            Bootstrap Variables
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            In <code>/src/sass/components/_variables.scss</code> file, Metronic deeply customizes the
                            standard <strong>Bootstrap</strong>&nbsp; components by
                            following the best practices explained in <a class="fw-semibold"
                                href="https://getbootstrap.com/docs/4.5/getting-started/theming/">the official
                                documentation</a>.
                        </div>
                        <!--end::Block-->
                        <div class="pt-2 pb-5">
                            <!--begin::Information-->
                            <div class="d-flex align-items-center rounded py-5 px-5 bg-light-warning "><i
                                    class="ki-duotone ki-information-5 fs-3x text-warning me-5"><span
                                        class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-bold fs-6">
                                    Custom variables that used to customize Bootstrap components are marked with
                                    <code>Custom variable</code> comment in <code>_variables.scss</code> file.
                                </div> <!--end::Description-->
                            </div><!--end::Information-->
                        </div>
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="override-variables" data-kt-scroll-offset="50">
                            <a href="#override-variables"></a>

                            Override Variables
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            If you like to change the Bootstrap theme colors, border radiuses, font family and other
                            variables, we suggest using <code>_variables.custom.scss</code> file so you keep your
                            own changes separated from future updates to avoid conflicts. All variables to override in this
                            file should be set without the <code>!default</code> attribute to prioritize your code change.
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->


                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="layout" data-kt-scroll-offset="50">
                            <a href="#layout"></a>

                            Layout
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Layout and comrelated SASS code is located in <code>/src/sass/layout/</code> folder. This folder
                            contains the layout's markup and SASS variables files as explained in the below table:
                        </div>
                        <!--end::Block-->

                        <!--begin::Table-->
                        <div class="py-5">
                            <div class="table-responsive border rounded">
                                <table class="table table-striped table-flush align-middle mb-0">
                                    <!--begin::Block-->
                                    <thead>
                                        <tr class="fs-4 fw-bold text-gray-900 p-6">
                                            <th class="min-w-200px">File/Folder</th>
                                            <th class="min-w-400px">Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr class="p-6">
                                            <td>
                                                <code>_variables.scss</code>
                                            </td>
                                            <td>
                                                Variables used by layout partials. You can easily change Aside width, header
                                                height and other common properties.
                                            </td>
                                        </tr>


                                        <tr class="p-6">
                                            <td>
                                                <code>_layout.scss</code>
                                            </td>
                                            <td>
                                                Defines main layout and its dependencies.
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Block-->
                                </table>
                            </div>
                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="compilation" data-kt-scroll-offset="50">
                            <a href="#compilation"></a>

                            Compilation
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <ul class="pt-5">
                            <li class="py-3">Metronic compiles layout, components(including the Bootstrap & custom
                                components) into the main bundle: <code>assets/css/style.bundle.css</code>.</li>
                            <li class="py-3">The custom SASS files are compiled separately into CSS folder:
                                <code>assets/css/custom</code></li>
                            <li class="py-3">All 3rd-party plugins css files are bundled into the plugins bundle CSS file
                                and globally included in all pages. <code>assets/plugins/global/plugins.bundle.css</code>.
                            </li>
                        </ul>
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
                        <!--begin::Menu-->
                        <ul id="kt_sidebar_nav"
                            class="nav nav-flush menu menu-column menu-title-gray-700 menu-bullet-gray-300 menu-state-primary fw-semibold fs-6 mb-8">
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#overview" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Overview</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#components" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Components</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#bootstrap-variables" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Bootstrap Variables</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#override-variables" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Override Variables</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#layout" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Layout</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#compilation" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Compilation</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Menu-->


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


