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
                    <!--begin::Card-->

                    <!--begin::Section-->
                    <div class="p-0">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="overview">
                            <a href="#overview"></a>
                            Overview
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            Metronic uses the following open source resources:
                        </div>

                        <!--begin::Table-->
                        <div class="py-5">
                            <div class="table-responsive border rounded">
                                <table class="table table-striped table-flush align-middle mb-0">
                                    <!--begin::Block-->
                                    <thead>
                                        <tr class="fs-4 fw-bold text-gray-900 p-6">
                                            <th class="min-w-300px">Name</th>
                                            <th class="min-w-300px">Link</th>
                                            <th class="min-w-100px">Version</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="p-6">
                                            <td><code>Node.js</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/" target="_blank">https://www.npmjs.com/</a>
                                            </td>
                                            <td>v14.16.0</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>Gulp</code></td>
                                            <td>
                                                <a href="https://gulpjs.com/" target="_blank">https://gulpjs.com/</a>
                                            </td>
                                            <td>v4.0.2</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>Yarn</code></td>
                                            <td>
                                                <a href="https://yarnpkg.com/" target="_blank">https://yarnpkg.com/</a>
                                            </td>
                                            <td>v1.22.10</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>Duotune Icons</code></td>
                                            <td>
                                                <a href="https://keenthemes.com/products/duotune-pro"
                                                    target="_blank">https://keenthemes.com/products/duotune-pro</a>
                                            </td>
                                            <td>v1.0.0</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>FormValidation</code></td>
                                            <td>
                                                <a href="https://formvalidation.io/"
                                                    target="_blank">https://formvalidation.io/</a>
                                            </td>
                                            <td>v1.8.0</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>bootstrap-multiselectsplitter</code></td>
                                            <td>
                                                <a href="https://github.com/poolerMF/bootstrap-multiselectsplitter/"
                                                    target="_blank">https://github.com/poolerMF/bootstrap-multiselectsplitter/</a>
                                            </td>
                                            <td>v1.0.4</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>toastr</code></td>
                                            <td>
                                                <a href="https://github.com/petekeller2/toastr"
                                                    target="_blank">https://github.com/petekeller2/toastr</a>
                                            </td>
                                            <td>v2.1.4</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>@ckeditor/ckeditor5-alignment</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/@ckeditor/ckeditor5-alignment"
                                                    target="_blank">https://www.npmjs.com/package/@ckeditor/ckeditor5-alignment</a>
                                            </td>
                                            <td>v43.3.1</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>@ckeditor/ckeditor5-build-balloon</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/@ckeditor/ckeditor5-build-balloon"
                                                    target="_blank">https://www.npmjs.com/package/@ckeditor/ckeditor5-build-balloon</a>
                                            </td>
                                            <td>v43.3.1</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>@ckeditor/ckeditor5-build-balloon-block</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/@ckeditor/ckeditor5-build-balloon-block"
                                                    target="_blank">https://www.npmjs.com/package/@ckeditor/ckeditor5-build-balloon-block</a>
                                            </td>
                                            <td>v43.3.1</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>@ckeditor/ckeditor5-build-classic</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/@ckeditor/ckeditor5-build-classic"
                                                    target="_blank">https://www.npmjs.com/package/@ckeditor/ckeditor5-build-classic</a>
                                            </td>
                                            <td>v43.3.1</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>@ckeditor/ckeditor5-build-decoupled-document</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/@ckeditor/ckeditor5-build-decoupled-document"
                                                    target="_blank">https://www.npmjs.com/package/@ckeditor/ckeditor5-build-decoupled-document</a>
                                            </td>
                                            <td>v43.3.1</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>@ckeditor/ckeditor5-build-inline</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/@ckeditor/ckeditor5-build-inline"
                                                    target="_blank">https://www.npmjs.com/package/@ckeditor/ckeditor5-build-inline</a>
                                            </td>
                                            <td>v43.3.1</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>@eonasdan/tempus-dominus</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/@eonasdan/tempus-dominus"
                                                    target="_blank">https://www.npmjs.com/package/@eonasdan/tempus-dominus</a>
                                            </td>
                                            <td>v6.10.4</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>@fortawesome/fontawesome-free</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/@fortawesome/fontawesome-free"
                                                    target="_blank">https://www.npmjs.com/package/@fortawesome/fontawesome-free</a>
                                            </td>
                                            <td>v7.0.0</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>@popperjs/core</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/@popperjs/core"
                                                    target="_blank">https://www.npmjs.com/package/@popperjs/core</a>
                                            </td>
                                            <td>v2.11.8</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>@shopify/draggable</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/@shopify/draggable"
                                                    target="_blank">https://www.npmjs.com/package/@shopify/draggable</a>
                                            </td>
                                            <td>v1.1.4</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>@yaireo/tagify</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/@yaireo/tagify"
                                                    target="_blank">https://www.npmjs.com/package/@yaireo/tagify</a>
                                            </td>
                                            <td>v4.35.4</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>acorn</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/acorn"
                                                    target="_blank">https://www.npmjs.com/package/acorn</a>
                                            </td>
                                            <td>v8.15.0</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>apexcharts</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/apexcharts"
                                                    target="_blank">https://www.npmjs.com/package/apexcharts</a>
                                            </td>
                                            <td>v5.3.4</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>autosize</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/autosize"
                                                    target="_blank">https://www.npmjs.com/package/autosize</a>
                                            </td>
                                            <td>v6.0.1</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>axios</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/axios"
                                                    target="_blank">https://www.npmjs.com/package/axios</a>
                                            </td>
                                            <td>v1.11.0</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>bootstrap</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/bootstrap"
                                                    target="_blank">https://www.npmjs.com/package/bootstrap</a>
                                            </td>
                                            <td>v5.3.8</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>bootstrap-cookie-alert</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/bootstrap-cookie-alert"
                                                    target="_blank">https://www.npmjs.com/package/bootstrap-cookie-alert</a>
                                            </td>
                                            <td>v1.2.2</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>bootstrap-daterangepicker</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/bootstrap-daterangepicker"
                                                    target="_blank">https://www.npmjs.com/package/bootstrap-daterangepicker</a>
                                            </td>
                                            <td>v3.1.0</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>bootstrap-icons</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/bootstrap-icons"
                                                    target="_blank">https://www.npmjs.com/package/bootstrap-icons</a>
                                            </td>
                                            <td>v1.13.1</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>bootstrap-maxlength</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/bootstrap-maxlength"
                                                    target="_blank">https://www.npmjs.com/package/bootstrap-maxlength</a>
                                            </td>
                                            <td>v2.0.0</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>bootstrap-multiselectsplitter</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/bootstrap-multiselectsplitter"
                                                    target="_blank">https://www.npmjs.com/package/bootstrap-multiselectsplitter</a>
                                            </td>
                                            <td>v1.0.4</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>chalk</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/chalk"
                                                    target="_blank">https://www.npmjs.com/package/chalk</a>
                                            </td>
                                            <td>v5.6.0</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>chart.js</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/chart.js"
                                                    target="_blank">https://www.npmjs.com/package/chart.js</a>
                                            </td>
                                            <td>v4.5.0</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>clipboard</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/clipboard"
                                                    target="_blank">https://www.npmjs.com/package/clipboard</a>
                                            </td>
                                            <td>v2.0.11</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>countup.js</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/countup.js"
                                                    target="_blank">https://www.npmjs.com/package/countup.js</a>
                                            </td>
                                            <td>v2.9.0</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>cropperjs</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/cropperjs"
                                                    target="_blank">https://www.npmjs.com/package/cropperjs</a>
                                            </td>
                                            <td>v1.6.0</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>datatables.net</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/datatables.net"
                                                    target="_blank">https://www.npmjs.com/package/datatables.net</a>
                                            </td>
                                            <td>v2.3.2</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>datatables.net-bs5</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/datatables.net-bs5"
                                                    target="_blank">https://www.npmjs.com/package/datatables.net-bs5</a>
                                            </td>
                                            <td>v2.3.2</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>datatables.net-buttons</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/datatables.net-buttons"
                                                    target="_blank">https://www.npmjs.com/package/datatables.net-buttons</a>
                                            </td>
                                            <td>v3.2.3</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>datatables.net-buttons-bs5</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/datatables.net-buttons-bs5"
                                                    target="_blank">https://www.npmjs.com/package/datatables.net-buttons-bs5</a>
                                            </td>
                                            <td>v3.2.3</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>datatables.net-colreorder</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/datatables.net-colreorder"
                                                    target="_blank">https://www.npmjs.com/package/datatables.net-colreorder</a>
                                            </td>
                                            <td>v2.1.1</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>datatables.net-colreorder-bs5</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/datatables.net-colreorder-bs5"
                                                    target="_blank">https://www.npmjs.com/package/datatables.net-colreorder-bs5</a>
                                            </td>
                                            <td>v2.1.1</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>datatables.net-datetime</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/datatables.net-datetime"
                                                    target="_blank">https://www.npmjs.com/package/datatables.net-datetime</a>
                                            </td>
                                            <td>v1.5.5</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>datatables.net-fixedcolumns</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/datatables.net-fixedcolumns"
                                                    target="_blank">https://www.npmjs.com/package/datatables.net-fixedcolumns</a>
                                            </td>
                                            <td>v5.0.4</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>datatables.net-fixedcolumns-bs5</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/datatables.net-fixedcolumns-bs5"
                                                    target="_blank">https://www.npmjs.com/package/datatables.net-fixedcolumns-bs5</a>
                                            </td>
                                            <td>v5.0.4</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>datatables.net-fixedheader</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/datatables.net-fixedheader"
                                                    target="_blank">https://www.npmjs.com/package/datatables.net-fixedheader</a>
                                            </td>
                                            <td>v4.0.3</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>datatables.net-fixedheader-bs5</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/datatables.net-fixedheader-bs5"
                                                    target="_blank">https://www.npmjs.com/package/datatables.net-fixedheader-bs5</a>
                                            </td>
                                            <td>v4.0.3</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>datatables.net-plugins</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/datatables.net-plugins"
                                                    target="_blank">https://www.npmjs.com/package/datatables.net-plugins</a>
                                            </td>
                                            <td>v2.3.0</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>datatables.net-responsive</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/datatables.net-responsive"
                                                    target="_blank">https://www.npmjs.com/package/datatables.net-responsive</a>
                                            </td>
                                            <td>v3.0.4</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>datatables.net-responsive-bs5</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/datatables.net-responsive-bs5"
                                                    target="_blank">https://www.npmjs.com/package/datatables.net-responsive-bs5</a>
                                            </td>
                                            <td>v3.0.4</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>datatables.net-rowgroup</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/datatables.net-rowgroup"
                                                    target="_blank">https://www.npmjs.com/package/datatables.net-rowgroup</a>
                                            </td>
                                            <td>v1.5.1</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>datatables.net-rowgroup-bs5</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/datatables.net-rowgroup-bs5"
                                                    target="_blank">https://www.npmjs.com/package/datatables.net-rowgroup-bs5</a>
                                            </td>
                                            <td>v1.5.1</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>datatables.net-rowreorder</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/datatables.net-rowreorder"
                                                    target="_blank">https://www.npmjs.com/package/datatables.net-rowreorder</a>
                                            </td>
                                            <td>v1.5.0</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>datatables.net-rowreorder-bs5</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/datatables.net-rowreorder-bs5"
                                                    target="_blank">https://www.npmjs.com/package/datatables.net-rowreorder-bs5</a>
                                            </td>
                                            <td>v1.5.0</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>datatables.net-scroller</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/datatables.net-scroller"
                                                    target="_blank">https://www.npmjs.com/package/datatables.net-scroller</a>
                                            </td>
                                            <td>v2.4.3</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>datatables.net-scroller-bs5</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/datatables.net-scroller-bs5"
                                                    target="_blank">https://www.npmjs.com/package/datatables.net-scroller-bs5</a>
                                            </td>
                                            <td>v2.4.3</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>datatables.net-select</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/datatables.net-select"
                                                    target="_blank">https://www.npmjs.com/package/datatables.net-select</a>
                                            </td>
                                            <td>v3.1.0</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>datatables.net-select-bs5</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/datatables.net-select-bs5"
                                                    target="_blank">https://www.npmjs.com/package/datatables.net-select-bs5</a>
                                            </td>
                                            <td>v3.1.0</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>dropzone</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/dropzone"
                                                    target="_blank">https://www.npmjs.com/package/dropzone</a>
                                            </td>
                                            <td>v5.9.3</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>es6-promise</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/es6-promise"
                                                    target="_blank">https://www.npmjs.com/package/es6-promise</a>
                                            </td>
                                            <td>v4.2.8</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>es6-promise-polyfill</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/es6-promise-polyfill"
                                                    target="_blank">https://www.npmjs.com/package/es6-promise-polyfill</a>
                                            </td>
                                            <td>v1.2.0</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>es6-shim</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/es6-shim"
                                                    target="_blank">https://www.npmjs.com/package/es6-shim</a>
                                            </td>
                                            <td>v0.35.8</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>esri-leaflet</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/esri-leaflet"
                                                    target="_blank">https://www.npmjs.com/package/esri-leaflet</a>
                                            </td>
                                            <td>v3.0.18</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>esri-leaflet-geocoder</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/esri-leaflet-geocoder"
                                                    target="_blank">https://www.npmjs.com/package/esri-leaflet-geocoder</a>
                                            </td>
                                            <td>v3.1.6</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>flatpickr</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/flatpickr"
                                                    target="_blank">https://www.npmjs.com/package/flatpickr</a>
                                            </td>
                                            <td>v4.6.13</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>flot</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/flot"
                                                    target="_blank">https://www.npmjs.com/package/flot</a>
                                            </td>
                                            <td>v4.2.6</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>fslightbox</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/fslightbox"
                                                    target="_blank">https://www.npmjs.com/package/fslightbox</a>
                                            </td>
                                            <td>v3.7.4</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>fullcalendar</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/fullcalendar"
                                                    target="_blank">https://www.npmjs.com/package/fullcalendar</a>
                                            </td>
                                            <td>v5.11.5</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>handlebars</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/handlebars"
                                                    target="_blank">https://www.npmjs.com/package/handlebars</a>
                                            </td>
                                            <td>v4.7.8</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>inputmask</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/inputmask"
                                                    target="_blank">https://www.npmjs.com/package/inputmask</a>
                                            </td>
                                            <td>v5.0.9</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>jkanban</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/jkanban"
                                                    target="_blank">https://www.npmjs.com/package/jkanban</a>
                                            </td>
                                            <td>v1.3.1</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>jquery</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/jquery"
                                                    target="_blank">https://www.npmjs.com/package/jquery</a>
                                            </td>
                                            <td>v3.7.1</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>jquery.repeater</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/jquery.repeater"
                                                    target="_blank">https://www.npmjs.com/package/jquery.repeater</a>
                                            </td>
                                            <td>v1.2.1</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>jstree</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/jstree"
                                                    target="_blank">https://www.npmjs.com/package/jstree</a>
                                            </td>
                                            <td>v3.3.17</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>jszip</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/jszip"
                                                    target="_blank">https://www.npmjs.com/package/jszip</a>
                                            </td>
                                            <td>v3.10.1</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>leaflet</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/leaflet"
                                                    target="_blank">https://www.npmjs.com/package/leaflet</a>
                                            </td>
                                            <td>v1.9.4</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>line-awesome</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/line-awesome"
                                                    target="_blank">https://www.npmjs.com/package/line-awesome</a>
                                            </td>
                                            <td>v1.3.0</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>lozad</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/lozad"
                                                    target="_blank">https://www.npmjs.com/package/lozad</a>
                                            </td>
                                            <td>v1.16.0</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>moment</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/moment"
                                                    target="_blank">https://www.npmjs.com/package/moment</a>
                                            </td>
                                            <td>v2.30.1</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>nouislider</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/nouislider"
                                                    target="_blank">https://www.npmjs.com/package/nouislider</a>
                                            </td>
                                            <td>v15.8.1</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>npm</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/npm"
                                                    target="_blank">https://www.npmjs.com/package/npm</a>
                                            </td>
                                            <td>v11.5.2</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>pdfmake</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/pdfmake"
                                                    target="_blank">https://www.npmjs.com/package/pdfmake</a>
                                            </td>
                                            <td>v0.2.20</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>prism-themes</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/prism-themes"
                                                    target="_blank">https://www.npmjs.com/package/prism-themes</a>
                                            </td>
                                            <td>v1.9.0</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>prismjs</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/prismjs"
                                                    target="_blank">https://www.npmjs.com/package/prismjs</a>
                                            </td>
                                            <td>v1.30.0</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>quill</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/quill"
                                                    target="_blank">https://www.npmjs.com/package/quill</a>
                                            </td>
                                            <td>v2.0.3</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>select2</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/select2"
                                                    target="_blank">https://www.npmjs.com/package/select2</a>
                                            </td>
                                            <td>v4.1.0.0</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>smooth-scroll</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/smooth-scroll"
                                                    target="_blank">https://www.npmjs.com/package/smooth-scroll</a>
                                            </td>
                                            <td>v16.1.3</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>sweetalert2</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/sweetalert2"
                                                    target="_blank">https://www.npmjs.com/package/sweetalert2</a>
                                            </td>
                                            <td>v11.22.5</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>tiny-slider</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/tiny-slider"
                                                    target="_blank">https://www.npmjs.com/package/tiny-slider</a>
                                            </td>
                                            <td>v2.9.4</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>tinymce</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/tinymce"
                                                    target="_blank">https://www.npmjs.com/package/tinymce</a>
                                            </td>
                                            <td>v8.0.2</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>toastr</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/toastr"
                                                    target="_blank">https://www.npmjs.com/package/toastr</a>
                                            </td>
                                            <td>v2.1.4</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>typed.js</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/typed.js"
                                                    target="_blank">https://www.npmjs.com/package/typed.js</a>
                                            </td>
                                            <td>v2.1.0</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>vis-timeline</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/vis-timeline"
                                                    target="_blank">https://www.npmjs.com/package/vis-timeline</a>
                                            </td>
                                            <td>v8.3.0</td>
                                        </tr>
                                        <tr class="p-6">
                                            <td><code>wnumb</code></td>
                                            <td>
                                                <a href="https://www.npmjs.com/package/wnumb"
                                                    target="_blank">https://www.npmjs.com/package/wnumb</a>
                                            </td>
                                            <td>v1.2.0</td>
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


