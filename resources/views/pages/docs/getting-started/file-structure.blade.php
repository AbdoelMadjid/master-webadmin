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
                            Metronic comes with a flexible file structure that can be easily used for small to large scope
                            projects.
                            This section will explain the entire file structure and how to adapt it to your project.
                        </div>
                        <!--end::Block-->

                        <!--begin::Table-->
                        <div class="pt-5">
                            <div class="table-responsive border rounded">
                                <table class="table table-striped table-flush align-middle mb-0">
                                    <!--begin::Block-->
                                    <thead>
                                        <tr class="fs-4 fw-bold text-gray-900 p-6">
                                            <th class="min-w-300px">File/Folder</th>
                                            <th class="min-w-600px">Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="p-5">
                                            <td>
                                                <code>design</code>
                                            </td>
                                            <td>
                                                The theme's Figma design files.
                                            </td>
                                        </tr>

                                        <!--begin::Theme-->
                                        <tr class="p-5">
                                            <td>
                                                <code>theme</code>
                                            </td>
                                            <td>
                                                The main theme folder.
                                            </td>
                                        </tr>
                                        <!--end::Theme-->

                                        <!--begin::Dist-->
                                        <tr class="p-5">
                                            <td style="padding-left: 40px">
                                                <code>dist</code>
                                            </td>
                                            <td>
                                                The destination folder that contains of the html templates and compiled
                                                assets.
                                            </td>
                                        </tr>

                                        <!--begin::Assets-->
                                        <tr class="p-5">
                                            <td style="padding-left: 60px">
                                                <code>assets</code>
                                            </td>
                                            <td>
                                                Static assets(js, css, images, fonts) compiled from the source folder
                                                <code>theme/src</code>.
                                            </td>
                                        </tr>

                                        <!--begin::Css-->
                                        <tr class="p-5">
                                            <td style="padding-left: 80px">
                                                <code>css</code>
                                            </td>
                                            <td>
                                                Static stylesheet files compiled from the Sass source files
                                                <code>theme/src/sass</code>.
                                            </td>
                                        </tr>
                                        <!--end::Css-->

                                        <!--begin::Js-->
                                        <tr class="p-5">
                                            <td style="padding-left: 80px">
                                                <code>js</code>
                                            </td>
                                            <td>
                                                Static Javascript files compiled from the Javascript source files
                                                <code>theme/src/js</code>.
                                            </td>
                                        </tr>
                                        <!--end::Js-->

                                        <!--begin::Media-->
                                        <tr class="p-5">
                                            <td style="padding-left: 80px">
                                                <code>media</code>
                                            </td>
                                            <td>
                                                Static media files(images, illustrations, svg, etc) compiled from the media
                                                source files <code>theme/src/media</code>.
                                            </td>
                                        </tr>
                                        <!--end::Media-->

                                        <!--begin::Plugins-->
                                        <tr class="p-5">
                                            <td style="padding-left: 80px">
                                                <code>plugins</code>
                                            </td>
                                            <td>
                                                3-rd party plugins(js, css, fonts, images) bundles compiled from the media
                                                source files
                                                <code>tools/node_modules</code>, <code>src/js//vendors</code> and
                                                <code>src/sass//vendors</code>.
                                            </td>
                                        </tr>
                                        <!--begin::Custom-->
                                        <!--begin::Global-->
                                        <tr class="p-5">
                                            <td style="padding-left: 100px">
                                                <code>global</code>
                                            </td>
                                            <td>
                                                Global plugins folder that contains <code>plugins.bundle.css</code> and
                                                <code>plugins.bundle.js</code> to be included in all pages.
                                            </td>
                                        </tr>
                                        <!--end::Global-->
                                        <tr class="p-5">
                                            <td style="padding-left: 100px">
                                                <code>custom</code>
                                            </td>
                                            <td>
                                                Custom plugins bundleds to be included in specific pages on demand.
                                            </td>
                                        </tr>
                                        <!--end::Custom-->

                                        <!--end::Plugins-->

                                        <!--end::Assets-->

                                        <!--begin::Plugins-->
                                        <tr class="p-5">
                                            <td style="padding-left: 60px">
                                                <code>index.html</code>
                                            </td>
                                            <td>
                                                The main template that coontains the page layout and content.
                                            </td>
                                        </tr>
                                        <!--end::Plugins-->

                                        <!--end::Dist-->

                                        <!--begin::Src-->
                                        <tr class="p-5">
                                            <td style="padding-left: 40px">
                                                <code>src</code>
                                            </td>
                                            <td>
                                                The source folder that contains of the Sass, Javascript and media files.
                                                Required only for development and can be excluded for production.
                                            </td>
                                        </tr>
                                        <!--begin::Js-->
                                        <tr class="p-5">
                                            <td style="padding-left: 60px">
                                                <code>js</code>
                                            </td>
                                            <td>
                                                Javascript source files compiled to <code>theme/assets/js</code>.
                                            </td>
                                        </tr>
                                        <tr class="p-5">
                                            <td style="padding-left: 80px">
                                                <code>components</code>
                                            </td>
                                            <td>
                                                The core components source Javascript files bundled in
                                                <code>theme/assets/js/scripts.bundle.js</code> and globally included in all
                                                pages.
                                            </td>
                                        </tr>
                                        <tr class="p-5">
                                            <td style="padding-left: 80px">
                                                <code>custom</code>
                                            </td>
                                            <td>
                                                Custom Javascript files moved to <code>theme/assets/js/custom</code> and
                                                used in specific pages on demand.
                                            </td>
                                        </tr>
                                        <tr class="p-5">
                                            <td style="padding-left: 80px">
                                                <code>layout</code>
                                            </td>
                                            <td>
                                                The core layout source Javascript files bundled in
                                                <code>theme/assets/js/scripts.bundle.js</code> and globally included in all
                                                pages.
                                            </td>
                                        </tr>
                                        <tr class="p-5">
                                            <td style="padding-left: 80px">
                                                <code>vendors</code>
                                            </td>
                                            <td>
                                                3-rd party plugins global initialization Javascript files bundled in
                                                <code>theme/assets/plugins/global/plugins.bundle.js</code> and globally
                                                included in all pages.
                                            </td>
                                        </tr>
                                        <tr class="p-5">
                                            <td style="padding-left: 80px">
                                                <code>widgets</code>
                                            </td>
                                            <td>
                                                The dashboard widgets source Javascript files bundled in
                                                <code>theme/assets/js/widgets.bundle.js</code> and used in specific pages on
                                                demand.
                                            </td>
                                        </tr>
                                        <!--end::Js-->

                                        <!--begin::Media-->
                                        <tr class="p-5">
                                            <td style="padding-left: 60px">
                                                <code>plugins</code>
                                            </td>
                                            <td>
                                                The source Javascript, Stylesheet, font and images files of custom 3rd-party
                                                and in-house plugins bundled into
                                                <code>theme/assets/plugins/global/plugins.bundle.js</code> and
                                                <code>theme/assets/plugins/global/plugins.bundle.css</code>.
                                            </td>
                                        </tr>
                                        <!--end::Media-->

                                        <!--begin::Media-->
                                        <tr class="p-5">
                                            <td style="padding-left: 60px">
                                                <code>media</code>
                                            </td>
                                            <td>
                                                The source files of images, illustrations, icons and flags moved to
                                                <code>theme/assets/media</code> to use for the core layout and other
                                                demonstration purposes.
                                            </td>
                                        </tr>
                                        <!--end::Media-->

                                        <!--end::Src-->

                                        <!--begin::Tools-->
                                        <tr class="p-5">
                                            <td>
                                                <code>tools</code>
                                            </td>
                                            <td>
                                                The theme build tools for command line assets compilation tasks. Required
                                                only for development and can be excluded for production.
                                            </td>
                                        </tr>

                                        <!--begin::Packages-->
                                        <tr class="p-5">
                                            <td style="padding-left: 60px">
                                                <code>packages.json</code>
                                            </td>
                                            <td>
                                                The project packages config file used by <code>Yarn</code> or
                                                <code>Npm</code> packagers to managers the dependencies.
                                            </td>
                                        </tr>
                                        <!--end::Packages-->

                                        <!--begin::Gulp-->
                                        <tr class="p-5">
                                            <td style="padding-left: 60px">
                                                <code>gulp</code>
                                            </td>
                                            <td>
                                                Gulp build tasks to compile the source files <code>theme/src</code> into the
                                                static assets files <code>theme/assets</code>.
                                            </td>
                                        </tr>
                                        <!--end::Gulp-->

                                        <!--begin::Gulp config-->
                                        <tr class="p-5">
                                            <td style="padding-left: 60px">
                                                <code>gulp.config.js</code>
                                            </td>
                                            <td>
                                                The main config of Gulp build tasks.
                                            </td>
                                        </tr>
                                        <!--end::Gulp config-->

                                        <!--begin::Webpack-->
                                        <tr class="p-5">
                                            <td style="padding-left: 60px">
                                                <code>webpack</code>
                                            </td>
                                            <td>
                                                Webpack build tasks to compile the source files <code>theme/src</code> into
                                                the static assets files <code>theme/assets</code>.
                                            </td>
                                        </tr>
                                        <!--end::Webpack-->

                                        <!--begin::Webpack config-->
                                        <tr class="p-5">
                                            <td style="padding-left: 60px">
                                                <code>webpack.config.js</code>
                                            </td>
                                            <td>
                                                The main config of Webpack build tasks.
                                            </td>
                                        </tr>
                                        <!--end::Webpack config-->
                                        <!--end::Tools-->

                                        <tr class="p-5">
                                            <td>
                                                <code>README.md</code>
                                            </td>
                                            <td>
                                                A tiny help file that privides a quick guide to get started with Metronic.
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


