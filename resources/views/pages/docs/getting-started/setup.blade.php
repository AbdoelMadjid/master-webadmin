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
                    <div class="py-0">
                        <!--begin::Heading-->
                        <h1 class="fw-bold mb-5">
                            Quick Setup
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            This document is aimed to run a <span class="fs-bold">Metronic</span>&nbsp;based web project in
                            just 10 minutes.
                            It's assumed that you already <a class="fw-bold"
                                href="https://1.envato.market/EA4JP">purchased</a>&nbsp;a license.
                        </div>
                        <!--end::Block-->

                        <!--begin::List-->
                        <ol class="list-style-none ps-1 pt-2 pb-0 fs-6">
                            <li class="py-4">
                                <span class="d-flex align-items-start">
                                    <span class="bullet bullet-dot bg-gray-600 w-6px h-6px"
                                        style="margin-top: 0.6rem"></span>
                                    <span class="ms-4" style="padding-top: 1.5px">

                                        Download your prefered <a class="fw-bold" href="https://keenthemes.com/metronic"
                                            target="_blank">HTML Demo</a>&nbsp;from <a class="fw-bold"
                                            href=" https://devs.keenthemes.com/metronic " target="_blank">Metronic
                                            Downloads</a>
                                        &nbsp;by providing your <a class="fw-bold" href="https://themeforest.net/downloads"
                                            target="_blank">Purchase Code</a>.
                                    </span>
                                </span>
                            </li>
                            <li class="py-4">
                                <span class="d-flex align-items-start">
                                    <span class="bullet bullet-dot bg-gray-600 w-6px h-6px"
                                        style="margin-top: 0.6rem"></span>
                                    <span class="ms-4" style="padding-top: 1.5px">

                                        Refer to <a class="fw-bold" href="/docs/getting-started/file-structure "
                                            target="_blank">File Structure</a>&nbsp;and install
                                        <a class="fw-bold" href="/docs/getting-started/build/gulp "
                                            target="_blank">Gulp</a>&nbsp;or
                                        <a class="fw-bold" href="/docs/getting-started/build/webpack "
                                            target="_blank">Webpack</a>&nbsp;build
                                        tools to generate <code class="fs-7">assets</code> for your project.
                                    </span>
                                </span>
                            </li>
                            <li class="py-4">
                                <span class="d-flex align-items-start">
                                    <span class="bullet bullet-dot bg-gray-600 w-6px h-6px"
                                        style="margin-top: 0.6rem"></span>
                                    <span class="ms-4" style="padding-top: 1.5px">

                                        The build tools are required in your development environment only just to build the
                                        assets upon code changes in the source
                                        folder and the end product uses the compiled assets folder in server.
                                    </span>
                                </span>
                            </li>
                            <li class="py-4">
                                <span class="d-flex align-items-start">
                                    <span class="bullet bullet-dot bg-gray-600 w-6px h-6px"
                                        style="margin-top: 0.6rem"></span>
                                    <span class="ms-4" style="padding-top: 1.5px">

                                        Editing the compiled assets is not recommended. Instead, edit the source code in
                                        <code class="fs-7">src</code> folder
                                        and compile the changes into <code class="fs-7">assets</code> folder using
                                        <a class="fw-bold" href="/docs/getting-started/build/gulp "
                                            target="_blank">Gulp</a>&nbsp;or
                                        <a class="fw-bold" href="/docs/getting-started/build/webpack "
                                            target="_blank">Webpack</a>&nbsp;build tools.
                                    </span>
                                </span>
                            </li>
                            <li class="py-4">
                                <span class="d-flex align-items-start">
                                    <span class="bullet bullet-dot bg-gray-600 w-6px h-6px"
                                        style="margin-top: 0.6rem"></span>
                                    <span class="ms-4" style="padding-top: 1.5px">

                                        Use <a class="fw-bold"
                                            href=" https://preview.keenthemes.com/metronic8/demo1/layout-builder.html "
                                            target="_blank">Layout Builder</a>&nbsp;to configure a layout with prefered
                                        options
                                        and export it as HTML partials for quicker server side integration.
                                        Change the demo number in the URL as <code
                                            class="fs-7">../demo5/layout-builder..html</code> to access other demos Layout
                                        Builder. </span>
                                </span>
                            </li>
                            <li class="py-4">
                                <span class="d-flex align-items-start">
                                    <span class="bullet bullet-dot bg-gray-600 w-6px h-6px"
                                        style="margin-top: 0.6rem"></span>
                                    <span class="ms-4" style="padding-top: 1.5px">

                                        Unpack the exported HTML partials and use your server side language to construct and
                                        render your page
                                        by including the layout partials according to the instruction given in the HTML code
                                        comments.
                                    </span>
                                </span>
                            </li>
                            <li class="py-4">
                                <span class="d-flex align-items-start">
                                    <span class="bullet bullet-dot bg-gray-600 w-6px h-6px"
                                        style="margin-top: 0.6rem"></span>
                                    <span class="ms-4" style="padding-top: 1.5px">

                                        Refer to <a class="fw-bold" href="/docs/getting-started/customization/template "
                                            target="_blank">Template Markup</a>&nbsp;and
                                        include mandatory and optinal assets for your project.
                                    </span>
                                </span>
                            </li>
                            <li class="py-4">
                                <span class="d-flex align-items-start">
                                    <span class="bullet bullet-dot bg-gray-600 w-6px h-6px"
                                        style="margin-top: 0.6rem"></span>
                                    <span class="ms-4" style="padding-top: 1.5px">

                                        Refer to <a class="fw-bold" href="/docs/getting-started/rtl " target="_blank">RTL
                                            Version</a>&nbsp;and
                                        <a class="fw-bold" href="/docs/getting-started/dark-mode " target="_blank">Dark
                                            Mode</a>&nbsp;guides if your project requires the RTL and Dark mode support.
                                    </span>
                                </span>
                            </li>
                            <li class="py-4">
                                <span class="d-flex align-items-start">
                                    <span class="bullet bullet-dot bg-gray-600 w-6px h-6px"
                                        style="margin-top: 0.6rem"></span>
                                    <span class="ms-4" style="padding-top: 1.5px">

                                        For any further assistance, reach the core team by creating a ticket at <a
                                            class="fw-bold" href="https://devs.keenthemes.com " target="_blank">Devs
                                            Support Center</a>.
                                    </span>
                                </span>
                            </li>
                        </ol>
                        <!--end::List-->
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


