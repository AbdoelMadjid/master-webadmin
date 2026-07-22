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

                    <!--begin::Changelog-->
                    <div class="accordion accordion-flush accordion-icon-toggle" id="kt_accordion">

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex " data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_3_2">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.3.2 - 1 September, 2025 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_3_2" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse show"
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Bootstrap</code> v5.3.8 update - <a
                                                    href="https://getbootstrap.com/docs/5.3/getting-started/introduction/"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">CKEditor 5</code> v44.3.0/v46.0.2 update
                                                - <a href="/docs/editors/ckeditor/overview" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">FontAwesome</code> v7.0.0 major update -
                                                <a href="https://fontawesome.com/" class="fw-bold"
                                                    target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">ApexCharts</code> v5.3.4 major update -
                                                <a href="/docs/charts/apexcharts" class="fw-bold"
                                                    target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">TinyMCE</code> v8.0.2 major update - <a
                                                    href="/docs/editors/tinymce" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">FullCalendar</code> v6.1.19 major update
                                                - <a href="/docs/general/fullcalendar" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Vis Timeline</code> v8.3.0 major update
                                                with CSS import fix - <a href="/docs/charts/vis-timeline/overview"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">DataTables Select</code> v3.1.0 update -
                                                <a href="/docs/general/datatables/overview" class="fw-bold"
                                                    target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">SweetAlert2</code> v11.22.5 update - <a
                                                    href="/docs/general/sweetalert" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Tagify</code> v4.35.4 update - <a
                                                    href="/docs/forms/tagify" class="fw-bold" target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">FSLightbox</code> v3.7.4 update - <a
                                                    href="/docs/general/fslightbox" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">ESRi Leaflet</code> v3.0.18 update - <a
                                                    href="https://github.com/Esri/esri-leaflet" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">NPM</code> v11.5.2 update - <a
                                                    href="https://www.npmjs.com/" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Chalk</code> v5.6.0 update - <a
                                                    href="https://github.com/chalk/chalk" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_3_1">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.3.1 - 26 June, 2025 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_3_1" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Bootstrap</code> v5.3.7 update - <a
                                                    href="https://getbootstrap.com/docs/5.3/getting-started/introduction/"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Bootstrap Icons</code> v1.13.1 update
                                                - <a href="https://icons.getbootstrap.com/" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">DataTables</code> v2.3.2 stable update
                                                integration - <a href="/docs/general/datatables/overview" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Tagify</code> v4.35.1 update - <a
                                                    href="/docs/forms/tagify" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">ApexCharts</code> v4.7.0 update - <a
                                                    href="/docs/charts/apexcharts" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Chart.js</code> v4.5.0 update - <a
                                                    href="/docs/charts/chartjs" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Axios</code> v1.10.0 update - <a
                                                    href="https://security.snyk.io/package/npm/axios" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">SweetAlert2</code> v11.22.0 update -
                                                <a href="/docs/general/sweetalert2" class="fw-bold"
                                                    target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">TinyMCE</code> v5.8.1 downgrade
                                                because of the compatibility issues with the latest version of the editor -
                                                <a href="/docs/editors/tinymce" class="fw-bold"
                                                    target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">Tempus Dominus</code> v6.10.4 update -
                                                <a href="/docs/forms/daterangepicker" class="fw-bold"
                                                    target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">CountUp.js</code> v2.9.0 update - <a
                                                    href="/docs/general/countup" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">FSLightbox</code> v3.6.1 update - <a
                                                    href="/docs/general/fslightbox" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Vis Timeline</code> v7.7.4 update - <a
                                                    href="/docs/charts/vis-timeline" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">ESRi Leaflet</code> v3.0.16 and
                                                Geocoder v3.1.6 updates - <a href="/docs/general/esri-leaflet"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">PDFMake</code> v0.2.20 update - <a
                                                    href="/docs/general/pdfmake" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2">Multiple development dependencies updates including <code
                                                    class="ms-0">Webpack</code> v5.99.9, <code
                                                    class="ms-0">Babel</code> v7.27.4, and others for improved build
                                                performance.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_3_0">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.3.0 - 30 April, 2025 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_3_0" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">DataTables</code> v2.2.2 stable update
                                                integration - <a href="/docs/general/datatables/overview" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Tagify</code> v4.34.0 update - <a
                                                    href="/docs/forms/tagify" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Ckeditor</code> v43.3.1 update - <a
                                                    href="/docs/editors/ckeditor/classic" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Axios</code> v1.8.4 update - <a
                                                    href="https://security.snyk.io/package/npm/axios" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Chart.js</code> v4.4.9 update - <a
                                                    href="/docs/charts/chartjs" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Bootstrap</code> v5.3.5 update - <a
                                                    href="https://getbootstrap.com/docs/5.3/getting-started/introduction/"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">FontAwesome</code> Fixed stacking,
                                                sizing and colouring classes.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_2_8">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.2.8 - 17 October, 2024 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_2_8" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">DataTables</code> v2.1.8 stable update
                                                integration - <a href="/docs/general/datatables/overview" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Tempus Dominus Datepicker</code>
                                                v6.9.11 update - <a href="/docs/forms/tempus-dominus-datepicker"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Tagify</code> v4.31.3 update - <a
                                                    href="/docs/forms/tagify" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">ApexCharts</code> v3.54.1 update - <a
                                                    href="/docs/charts/apexcharts" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Ckeditor</code> v43.2.0 update - <a
                                                    href="/docs/editors/ckeditor/classic" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Axios</code> v1.7.7 update - <a
                                                    href="https://security.snyk.io/package/npm/axios" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Bootstrap Icons</code> v1.11.3 update
                                                - <a href="/docs/icons/bootstrap-icons" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Chart.js</code> v4.4.4 update - <a
                                                    href="/docs/charts/chartjs" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_2_7">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.2.7 - 12 August, 2024 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_2_7" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">DataTables</code> v2.1.2 stable update
                                                integration - <a href="/docs/general/datatables/overview" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Tempus Dominus Datepicker</code>
                                                v6.9.9 update - <a href="/docs/forms/tempus-dominus-datepicker"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Tagify</code> v4.27.0 update - <a
                                                    href="/docs/forms/tagify" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">ApexCharts</code> v3.51.0 update - <a
                                                    href="/docs/charts/apexcharts" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Ckeditor</code> v42.0.2 update - <a
                                                    href="/docs/editors/ckeditor/classic" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Axios</code> v1.6.5 update - <a
                                                    href="https://security.snyk.io/package/npm/axios" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Select2</code> v4.1.0-rc.0 update - <a
                                                    href="/docs/forms/select2" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Bootstrap Icons</code> v1.11.3 update
                                                - <a href="/docs/icons/bootstrap-icons" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">noUiSlider</code> v15.8.1 update - <a
                                                    href="/docs/forms/nouislider" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Image Input</code> Tooltip dismiss
                                                issue fix - <a href="/docs/forms/image-input" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_2_6">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.2.6 - 24 June, 2024 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_2_6" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">DataTables</code> v2.0.3 stable update
                                                integration - <a href="/docs/general/datatables/overview" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Tempus Dominus Datepicker</code>
                                                v6.9.6 update - <a href="/docs/forms/tempus-dominus-datepicker"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Tagify</code> v4.22.2 update - <a
                                                    href="/docs/forms/tagify" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">ApexCharts</code> v3.48.0 update - <a
                                                    href="/docs/charts/apexcharts" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Ckeditor</code> v41.2.1 update - <a
                                                    href="/docs/editors/ckeditor/classic" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Chart.js</code> v4.4.3 update - <a
                                                    href="/docs/charts/chartjs" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Axios</code> v1.6.5 update - <a
                                                    href="https://security.snyk.io/package/npm/axios" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Select2</code> v4.1.0-rc.0 update - <a
                                                    href="/docs/forms/select2" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Demo 55</code> Responsive sidebar
                                                issue - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo55/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Tagify</code> Initialization bug - <a
                                                    href="/docs/forms/tagify" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_2_5">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.2.5 - 30 March, 2024 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_2_5" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">DataTables</code> v2.0.8 stable update
                                                integration - <a href="/docs/general/datatables/overview" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Tempus Dominus Datepicker</code>
                                                v6.9.9 update - <a href="/docs/forms/tempus-dominus-datepicker"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Tagify</code> v4.26.6 update - <a
                                                    href="/docs/forms/tagify" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">ApexCharts</code> v3.49.1 update - <a
                                                    href="/docs/charts/apexcharts" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Ckeditor</code> v41.4.2 update - <a
                                                    href="/docs/editors/ckeditor/classic" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Modal</code> Header aligment issue.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_2_4">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.2.4 - 21 March, 2024 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_2_4" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Bootstrap</code> v5.3.3 stable update
                                                integration - <a
                                                    href="https://blog.getbootstrap.com/2024/02/20/bootstrap-5-3-3/"
                                                    class="fw-bold" target="_blank">Changelog</a>.</li>
                                            <li class="py-2"><code class="ms-0">DataTables</code> v2 stable update
                                                integration - <a href="https://datatables.net/blog/2024/datatables-2"
                                                    class="fw-bold" target="_blank">Changelog</a>.</li>
                                            <li class="py-2"><code class="ms-0">Tempus Dominus Datepicker</code>
                                                v6.9.5 update - <a href="/docs/forms/tempus-dominus-datepicker"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Tagify</code> v4.22.0 update - <a
                                                    href="/docs/forms/tagify" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">ApexCharts</code> v3.47.0 update - <a
                                                    href="/docs/charts/apexcharts" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Ckeditor</code> v41.2.0 update - <a
                                                    href="/docs/editors/ckeditor/classic" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Dashboards</code> Bootstrap grid
                                                vertical gap conflict with page title and breadcrumbs.</li>
                                            <li class="py-2"><code class="ms-0">Webpack</code> Build issue on Windows.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_2_3">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.2.3 - 13 January, 2024 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_2_3" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Axios</code> v1.6.5 vulnerability
                                                update - <a href="https://security.snyk.io/package/npm/axios"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Tagify</code> v4.18.2 update - <a
                                                    href="/docs/forms/tagify" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Bootstrap Icons</code> v1.11.3 update
                                                - <a href="/docs/icons/bootstrap-icons" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Moment</code> v2.30.1 update.</li>
                                            <li class="py-2"><code class="ms-0">Pdfmake</code> v0.2.9 update - <a
                                                    href="/docs/general/datatables/buttons/export" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_2_2">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.2.2 - 30 December, 2023 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_2_2" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Demo 61</code> Property Portal - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo61/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 62</code> Project Scheduler - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo62/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 63</code> Discussion Board - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo63/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 64</code> Voice Call App - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo64/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Tempus Dominus Datepicker</code>
                                                v6.9.4 update - <a href="/docs/forms/tempus-dominus-datepicker"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Datatables</code> v1.13.8 update - <a
                                                    href="/docs/general/datatables/basic" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Ckeditor</code> v40.2.0 update - <a
                                                    href="/docs/editors/ckeditor/classic" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Fontawesome Free</code> v6.5.1 update
                                                - <a href="/docs/icons/font-awesome" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Bootstrap Icons</code> v1.11.2 update
                                                - <a href="/docs/icons/bootstrap-icons" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">ApexCharts</code> v3.45.1 update - <a
                                                    href="/docs/charts/apexcharts" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Bootstrap Icons</code> v1.10.5 update
                                                - <a href="/docs/icons/bootstrap-icons" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Chart.js</code> v4.4.1 update - <a
                                                    href="/docs/charts/chartjs" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Buttons</code> Secondary color style
                                                issue - <a href="/docs/base/buttons" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Badges</code> Secondary color style
                                                issue - <a href="/docs/base/badges" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_2_1">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.2.1 - 2 November, 2023 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_2_1" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Demo 56</code> Budgeting App - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo56/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 57</code> Billing System - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo57/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 58</code> Store Dashboard - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo58/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 59</code> Todo App - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo59/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 60</code> CRM Dashboard - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo60/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Bootstrap</code> v5.3.2 stable update
                                                integration - <a
                                                    href="https://blog.getbootstrap.com/2023/09/14/bootstrap-5-3-2/"
                                                    class="fw-bold" target="_blank">Changelog</a>.</li>
                                            <li class="py-2"><code class="ms-0">KTMenu</code> 3rd-party plugins
                                                integration - <a href="/docs/general/menu/integration"
                                                    class="fw-bold">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Tempus Dominus Datepicker</code>
                                                v6.7.16 update - <a href="/docs/forms/tempus-dominus-datepicker"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Datatables</code> v1.13.6 update - <a
                                                    href="/docs/general/datatables/basic" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Form Validation</code> v2.4.0 update -
                                                <a href="/docs/forms/formvalidation/basic" class="fw-bold"
                                                    target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">Ckeditor</code> v40.0.0 update - <a
                                                    href="/docs/editors/ckeditor/classic" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Fontawesome Free</code> v6.4.2 update
                                                - <a href="/docs/icons/font-awesome" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Tagify</code> v4.17.9 update - <a
                                                    href="/docs/forms/tagify" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">jQuery</code> v3.7.1 update.</li>
                                            <li class="py-2"><code class="ms-0">ApexCharts</code> v3.44.0 update - <a
                                                    href="/docs/charts/apexcharts" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Axios</code> v1.6.0 update.</li>
                                            <li class="py-2"><code class="ms-0">Bootstrap Icons</code> v1.10.5 update
                                                - <a href="/docs/icons/bootstrap-icons" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Chart.js</code> v4.4.0 update - <a
                                                    href="/docs/charts/chartjs" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Clipboard</code> v2.0.11 update - <a
                                                    href="/docs/forms/clipboard" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Countup.js</code> v2.8.0 update - <a
                                                    href="/docs/general/countup" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Cropperjs</code> v1.6.1 update - <a
                                                    href="/docs/general/cropper" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Flot Charts</code> v4.2.6 update - <a
                                                    href="/docs/charts/flotcharts/overview" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">SweetAlert</code> v11.4.8 downgrade
                                                due a change on <code>v11.4.9</code> and above versions - <a
                                                    href="https://github.com/sweetalert2/sweetalert2/issues/2635"
                                                    class="fw-bold" target="_blank">Learn More</a>.</li>
                                            <li class="py-2"><code class="ms-0">Vis Timeline</code> v7.7.3 update - <a
                                                    href="/docs/general/vis-timeline/basic" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">SASS</code> Global theme color
                                                improvements in SASS</li>
                                            <li class="py-2"><code class="ms-0">SASS</code> Added
                                                <code>src/sass/components/_variables.override.scss</code> SASS config file
                                                to override Bootstrap SASS variables
                                            </li>
                                            <li class="py-2"><code class="ms-0">Content</code> Global class
                                                replacement of <code>text-gray-400</code> with <code>text-gray-500</code>
                                            </li>
                                            <li class="py-2"><code class="ms-0">Content</code> Global class
                                                replacement of <code>text-dakr</code> with <code>text-gray-900</code></li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Ckeditor</code> Dark mode issue - <a
                                                    href="/docs/editors/ckeditor/classic" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_2_0">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.2.0 - 19 July, 2023 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_2_0" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">User Management App</code> Modal form
                                                improvements - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/apps/user-management/users/list.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Tempus Dominus Datepicker</code>
                                                v6.7.11 update - <a href="/docs/forms/tempus-dominus-datepicker"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Ckeditor</code> v38.1.1 update - <a
                                                    href="/docs/editors/ckeditor/classic" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">SweetAlert</code> v11.7.16 update - <a
                                                    href="/docs/general/sweetalert" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">KeenIcons</code> Rendering issue on
                                                Mac Safari - <a href="/docs/icons/keenicons" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Ckeditor</code> Gulp build issue - <a
                                                    href="/docs/editors/ckeditor/classic" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_1_9">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.1.9 - 10 July, 2023 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_1_9" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Demo 1</code> Design and layout
                                                enhancements - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Aside</code> 5 aside layout options -
                                                <a href="https://preview.keenthemes.com/metronic8/demo1/asides/aside-1.html"
                                                    class="fw-bold" target="_blank">Preview</a>.
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Bootstrap</code> v5.3.0 stable update
                                                integration - <a
                                                    href="https://blog.getbootstrap.com/2023/05/30/bootstrap-5-3-0/"
                                                    class="fw-bold" target="_blank">Changelog</a>.</li>
                                            <li class="py-2"><code class="ms-0">KTMenu</code> 3rd-party plugins
                                                integration - <a href="/docs/general/menu/integration"
                                                    class="fw-bold">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">KTDrawer</code> Close drawer with
                                                escape key press support - <a href="/docs/general/drawer" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">KTScroll</code> Major browsers
                                                compatibility improvements - <a href="/docs/general/scroll"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">KTScroll</code> Scroll overlay mode
                                                depreciated due to <code>overflow: overlay</code> attribute is no longer
                                                supported by Webkit - <a href="/docs/general/scroll" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Quil</code> RTL mode support - <a
                                                    href="/docs/editors/quill/basic" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Tempus Dominus Datepicker</code>
                                                v6.7.10 update - <a href="/docs/forms/tempus-dominus-datepicker"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Datatables</code> v1.13.5 update - <a
                                                    href="/docs/general/datatables/basic" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Form Validation</code> v2.4.0 update -
                                                <a href="/docs/forms/formvalidation/basic" class="fw-bold"
                                                    target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">Ckeditor</code> v38.0.1 update - <a
                                                    href="/docs/editors/ckeditor/classic" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Fontawesome Free</code> v6.4.0 update
                                                - <a href="/docs/icons/font-awesome" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Popperjs</code> v2.11.8 update.</li>
                                            <li class="py-2"><code class="ms-0">Tagify</code> v4.17.8 update - <a
                                                    href="/docs/forms/tagify" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">jQuery</code> v3.7.0 update.</li>
                                            <li class="py-2"><code class="ms-0">ApexCharts</code> v3.41.0 update - <a
                                                    href="/docs/charts/apexcharts" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Autosize</code> v6.0.1 update - <a
                                                    href="/docs/forms/autosize" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Axios</code> v1.4.0 update.</li>
                                            <li class="py-2"><code class="ms-0">Bootstrap Cookie Alert</code> v1.2.2
                                                update - <a href="/docs/general/cookiealert" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Bootstrap Icons</code> v1.10.5 update
                                                - <a href="/docs/icons/bootstrap-icons" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Chart.js</code> v4.3.0 update - <a
                                                    href="/docs/charts/chartjs" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Clipboard</code> v1.5.13 update - <a
                                                    href="/docs/forms/clipboard" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Countup.js</code> v2.7.0 update - <a
                                                    href="/docs/general/countup" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Cropperjs</code> v1.5.13 update - <a
                                                    href="/docs/general/cropper" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Flatpickr</code> v4.6.13 update - <a
                                                    href="/docs/forms/flatpickr" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Flot Charts</code> v4.2.3 update -
                                                <a href="/docs/charts/flotcharts/overview" class="fw-bold"
                                                    target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">Fullscreen Lightbox</code> v3.4.1
                                                update - <a href="/docs/general/fslightbox" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Inputmask</code> v5.0.8 update - <a
                                                    href="/docs/forms/inputmask" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Leaflet</code> v1.9.4 update.</li>
                                            <li class="py-2"><code class="ms-0">Tiny Slider</code> v2.9.4 update -
                                                <a href="/docs/general/tiny-slider/basic" class="fw-bold"
                                                    target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">Toastr</code> v2.1.4 update - <a
                                                    href="/docs/general/toastr" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Typed.js</code> v2.0.16 update - <a
                                                    href="/docs/general/typedjs" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Vis Timeline</code> v7.7.2 update -
                                                <a href="/docs/general/vis-timeline/basic" class="fw-bold"
                                                    target="_blank">Preview</a>.
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Form Control</code> Solid style
                                                disabled state - <a href="/docs/base/forms/controls" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">KTSticky</code> Mobile mode bug fix
                                                - <a href="/docs/general/sticky" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">KTScroll</code> Firefox mode bug fix
                                                - <a href="/docs/general/scroll" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Select2</code> Multiple select bug
                                                in KTMenu - <a href="/docs/forms/select2" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Datatables</code> Fixed header issue
                                                - <a href="/docs/general/datatables/advanced" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_1_8">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.1.8 - 24 March, 2023 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_1_8" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Keenicons</code> Exclusive Font
                                                Icons in 3 Styles - <a href="/docs/icons/keenicons"
                                                    class="fw-bold">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 45</code> OKR Tracking - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo45/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 47</code> Campaign Automation -
                                                <a href="https://preview.keenthemes.com/metronic8/demo47/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">Tempus Dominus Datepicker</code>
                                                integration improvements - <a href="/docs/forms/datepicker"
                                                    class="fw-bold">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Bootstrap Accordion</code> collapse
                                                icon style - <a href="/docs/base/accordion#collapse-icon"
                                                    class="fw-bold">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Datatables Fixed Header</code>
                                                integration - <a href="/docs/general/datatables/advanced#responsive"
                                                    class="fw-bold">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Icons</code> Global icons migration
                                                to Keenicons - <a
                                                    href="https://docs.google.com/spreadsheets/d/1qwrKmX-2i_mRr_JkAbEVQTdbUiZg85-hEM89sSXatf8/edit#gid=0"
                                                    class="fw-bold" target="_blank">Changelog</a>.</li>
                                            <li class="py-2"><code class="ms-0">Tempus Dominus Datepicker</code>
                                                Global configuration - <a href="/docs/forms/datepicker"
                                                    class="fw-bold">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Inbox App</code> OKR Tracking - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/apps/inbox/listing.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Demo 19</code> Mobile menu toggle
                                                issue - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo19/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 39</code> Layout builder issue
                                                - <a href="https://preview.keenthemes.com/metronic8/demo39/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_1_7">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.1.7 - 25 January, 2023 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_1_7" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Demo 31</code> Marketing Automation
                                                - <a href="https://preview.keenthemes.com/metronic8/demo31/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 32</code> Delivery Management -
                                                <a href="https://preview.keenthemes.com/metronic8/demo32/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">Demo 33</code> Social Campaings - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo33/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 34</code> Finance Analytics -
                                                <a href="https://preview.keenthemes.com/metronic8/demo34/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">Demo 35</code> Traffic Analytics -
                                                <a href="https://preview.keenthemes.com/metronic8/demo35/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">Demo 36</code> Digital Marketing -
                                                <a href="https://preview.keenthemes.com/metronic8/demo36/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">Demo 37</code> Cloud Suite - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo37/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 38</code> Email Marketing - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo38/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 39</code> Billing SaaS - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo39/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 40</code> HR App - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo40/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 41</code> Business Intelligence
                                                - <a href="https://preview.keenthemes.com/metronic8/demo41/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 42</code> Calendar Workspace -
                                                <a href="https://preview.keenthemes.com/metronic8/demo42/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">Demo 43</code> Healthcare Dashboard
                                                - <a href="https://preview.keenthemes.com/metronic8/demo43/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 44</code> Recruit Automation -
                                                <a href="https://preview.keenthemes.com/metronic8/demo44/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">Demo 48</code> Cloud ERP - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo48/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 49</code> KPI Tracking - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo49/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Tempus Dominus Datepicker</code>
                                                plugin integration - <a href="/docs/forms/datepicker" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Bootstrap Modal</code> stacked
                                                modals support - <a href="/docs/base/modal#stacked" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Datatables Fixed Header</code>
                                                integration - <a href="/docs/general/datatables/advanced#fixed-header"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Bootstrap 5.3.0</code> update - <a
                                                    href="https://blog.getbootstrap.com/2022/12/24/bootstrap-5-3-0-alpha1/"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Theme Mode</code>
                                                <code>data-theme</code> HTML attribute changed to <code>data-bs-theme</code>
                                                - <a href="/docs/getting-started/dark-mode" class="fw-bold"
                                                    target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">Theme Mode</code> <code>--kt-</code>
                                                CSS variables prefix changed to <code>--bs-</code>.</li>
                                            <li class="py-2"><code class="ms-0">btn-white</code> class is
                                                depreciated. Use <code>bg-body</code> class instead</li>
                                            <li class="py-2"><code class="ms-0">bg-white</code> class is
                                                depreciated. Use <code>bg-body</code> class instead</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Bordered Table</code> issue fix - <a
                                                    href="/docs/base/tables#bordered" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_1_6">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.1.6 - 24 November, 2022 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_1_6" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Demo 25</code> User Guiding App - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo25/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 26</code> Planable App - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo26/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 27</code> Databox Dashboard -
                                                <a href="https://preview.keenthemes.com/metronic8/demo27/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">Demo 28</code> eCommerce App - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo28/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 29</code> Project Workspace -
                                                <a href="https://preview.keenthemes.com/metronic8/demo29/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">Demo 30</code> Sales Tracking App -
                                                <a href="https://preview.keenthemes.com/metronic8/demo30/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">Removable Cards</code> Custom
                                                removable cards - <a href="/docs/base/cards#removable" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Custom Bundles</code> Custom bundles
                                                setup docs - <a href="/docs/getting-started/customization/custom-bundles"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Page Loading</code> Custom component
                                                docs - <a href="/docs/base/page-loading" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Lozap</code> Image lazy load plugin
                                                integration - <a href="/docs/general/lozad" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Bootstrap 5.2.3</code> update - <a
                                                    href="https://blog.getbootstrap.com/2022/11/22/bootstrap-5-2-3/"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 1</code> Fixed footer layout
                                                option support - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/layout-builder.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 7</code> Fixed footer layout
                                                option support - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo7/layout-builder.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Select2</code> Disabled state
                                                improvements - <a href="/docs/forms/select2#disabled" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Demo 1</code> Horizontal scroll
                                                issue in Mobile mode - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 4</code> Aside dropdown menu
                                                bug in iOS - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo4/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_1_5">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.1.5 - 6 October, 2022 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_1_5" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Demo 23</code> SaaS dashboard - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo23/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 24</code> Logistics dashboard -
                                                <a href="https://preview.keenthemes.com/metronic8/demo24/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">Scroll</code> horizontal overlay
                                                scroll support - <a href="/docs/getting-started/customization/template"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Template</code> docs - <a
                                                    href="/docs/general/scroll" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Bootstrap 5.2.2</code> update - <a
                                                    href="https://blog.getbootstrap.com/2022/10/03/bootstrap-5-2-2/"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Datatables</code> loading indicator
                                                improvement - <a href="/docs/getting-started/customization/javascript"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2">Added a new <code
                                                    class="ms-0">KTComponents.init()</code> method to separate the core
                                                components and 3-rd party plugins initialization to simplify the SPA and
                                                Ajax Page integration -
                                                <a href="/docs/general/datatables/server-side" class="fw-bold"
                                                    target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">File Structure</code> docs
                                                improvements - <a href="/docs/getting-started/file-structure"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Javascript</code> docs improvements
                                                - <a href="/docs/getting-started/customization/javascript"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Demo 19</code> aside dark mode issue
                                                - <a href="https://preview.keenthemes.com/metronic8/demo19/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Tiny Slider</code> RTL mode issue -
                                                <a href="/docs/general/tiny-slider/overview" class="fw-bold"
                                                    target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">Fontawesome</code> webpack build
                                                issue - <a href="/docs/icons/font-awesome" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_1_4">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.1.4 - 12 September, 2022 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_1_4" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Select2</code> invisible clear icon
                                                issue - <a href="/docs/forms/select2#clear-selection" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Tagify</code> webpack build issue -
                                                <a href="/docs/forms/tagify" class="fw-bold"
                                                    target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">Fontawesome</code> webpack build
                                                issue - <a href="/docs/icons/font-awesome" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_1_3">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.1.3 - 9 September, 2022 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_1_3" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Inbox App</code> mobile drawer menu
                                                - <a href="https://preview.keenthemes.com/metronic8/demo1/apps/inbox/listing.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Chat App</code> layout improvements
                                                - <a href="https://preview.keenthemes.com/metronic8/demo1/apps/chat/private.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Inbox App</code> layout improvements
                                                for mobile mode - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/apps/inbox/listing.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Datatable</code> loading indicator
                                                style improvements - <a href="/docs/general/datatables/server-side"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Datatable</code> selected state
                                                improvements - <a href="/docs/general/datatables/advanced#select"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Dark Mode</code> docs improvements -
                                                <a href="/docs/getting-started/dark-mode" class="fw-bold"
                                                    target="_blank">Preview</a>.
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">KTSticky</code>
                                                <code>data-kt-sticky-top="0px"</code> assigment issue fix - <a
                                                    href="/docs/general/sticky" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Inbox App</code> mobile mode
                                                responsives issues - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/apps/inbox/listing.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Floating Labels</code> select
                                                control text overflow issue - <a href="/docs/base/forms/floating-labels"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Webpack</code> build issue with
                                                <code class="ms-0">Font Awesome</code> and <code
                                                    class="ms-0">Tagify</code>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_1_2">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.1.2 - 18 August, 2022 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_1_2" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Welcome Message</code> email
                                                template - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/authentication/email/welcome-message.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Reset Password</code> email template
                                                - <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/email/reset-password.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Subscription Confirmed</code> email
                                                template - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/authentication/email/subscription-confirmed.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Card Declined</code> email template
                                                - <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/email/card-declined.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Promotion Email 1</code> email
                                                template - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/authentication/email/promo-1.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Promotion Email 2</code> email
                                                template - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/authentication/email/promo-2.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Promotion Email 3</code> email
                                                template - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/authentication/email/promo-3.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Bootstrap v5.2</code> framework
                                                update - <a
                                                    href="https://blog.getbootstrap.com/2022/07/19/bootstrap-5-2-0/"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Dark Mode</code> improvements with
                                                user preference support - <a href="/docs/getting-started/dark-mode"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Corporate Authentication</code>
                                                mobile mode improvements - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/corporate/sign-in.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">KTBlockUI</code> improved on
                                                scrollable element - <a href="/docs/getting-started/dark-mode"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Date Range Picker</code>
                                                improvements - <a href="/docs/forms/daterangepicker" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Offline docs</code> will no longer
                                                be included in the zip package. The online documentation will be provided
                                                instead with up to date information.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Demo 1</code> sidebar toggle icon
                                                direction fix for RTL mode - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/index.html?rtl=1"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 2</code> header style fix - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo2/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 7</code> sidebar toggle icon
                                                direction fix for RTL mode - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo7/index.html?rtl=1"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 8</code> sidebar toggle icon
                                                direction fix for RTL mode - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo8/index.html?rtl=1"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 13</code> sidebar toggle icon
                                                direction fix for RTL mode - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo13/index.html?rtl=1"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_1_1">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.1.1 - 14 July, 2022 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_1_1" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Global Font</code> update to Inter -
                                                <a href="https://preview.keenthemes.com/metronic8/demo1/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">Dark Mode</code> documentation
                                                update - <a href="/docs/getting-started/dark-mode" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Demo 1</code> dark header menu hover
                                                style fix - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/layouts/dark-header.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 5</code> devs app missing pages
                                                fix - <a href="/docs/index" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 14</code> aside mobile mode
                                                overflow issue fix - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo14/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Select 2</code> multiple selection
                                                mode sizes height fix - <a
                                                    href="https://preview.keenthemes.com/metronic8/forms/select2.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Tagify</code> sizes height fix - <a
                                                    href="/docs/forms/tagify" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_1_0">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.1.0 - 5 July, 2022 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_1_0" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Demo 1 - Django</code> backend
                                                starterkit with layout, authentication and system pages integration - <a
                                                    href="https://preview.keenthemes.com/django/metronic/docs"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 1 - Flask</code> backend
                                                starterkit with layout, authentication and system pages integration- <a
                                                    href="https://preview.keenthemes.com/flask/metronic/docs"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 1 - ASP.NET Core 6</code>
                                                backend starterkit with layout, authentication and system pages integration-
                                                <a href="https://preview.keenthemes.com/asp.net-core/metronic/docs"
                                                    class="fw-bold" target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">Demo 1 - Blazor</code> backend
                                                starterkit with layout, authentication and system pages integration- <a
                                                    href="https://preview.keenthemes.com/blazor/metronic/docs"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 1</code> design improvements -
                                                <a href="https://preview.keenthemes.com/metronic8/demo1/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">Demo 1</code> HTML & SASS code
                                                improvements - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 1 - Dark Sidebar</code> layout
                                                option - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/layouts/dark-sidebar.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 1 - Light Sidebar</code> layout
                                                option - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/layouts/light-sidebar.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 1 - Dark Header</code> layout
                                                option - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/layouts/dark-header.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 1 - Light Header</code> layout
                                                option - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/layouts/light-header.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 1 - Theme Customizer</code>
                                                panel - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 1 - Layout Builder</code>
                                                improvements - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/layout-builder.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Dark Mode</code> dynamic switch
                                                support - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Corporate</code> authentication
                                                pages - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/corporate/sign-in.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Overlay</code> authentication pages
                                                - <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/overlay/sign-in.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Creative</code> authentication pages
                                                - <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/creative/sign-in.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Fancy</code> authentication pages -
                                                <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/fancy/sign-in.html"
                                                    class="fw-bold" target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">Multi-steps</code> sign-up page - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/authentication/extended/multi-steps-sign-up.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Welcome</code> authentication page -
                                                <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/general/welcome.html"
                                                    class="fw-bold" target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">Verify Email</code> authentication
                                                page - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/authentication/general/verify-email.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Coming Soon</code> authentication
                                                page - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/authentication/general/coming-soon.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Password Confirmation</code>
                                                authentication page - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/authentication/general/password-confirmation.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Account Deactivated</code>
                                                authentication page - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/authentication/general/account-deactivated.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">404 Error</code> system page - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/authentication/general/error-404.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">500 Error</code> system page - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/authentication/general/error-500.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Default</code> dashboard - <a
                                                    href="https://preview.keenthemes.com/metronic8/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Call Center</code> dashboard - <a
                                                    href="https://preview.keenthemes.com/metronic8/dashboards/call-center.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">POS System</code> dashboard - <a
                                                    href="https://preview.keenthemes.com/metronic8/dashboards/pos.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">4 Mege Menu</code> options for
                                                header - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 4 Dark Mode</code> - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo4/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Fixed Columns</code> extension
                                                integration for <code>Datatables.net</code> plugin - <a
                                                    href="/docs/general/datatables/basic" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Image Radio Buttons</code> options -
                                                <a href="/docs/base/forms/checks-radios" class="fw-bold"
                                                    target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">Pagination</code> with custom icons
                                                - <a href="/docs/base/pagination#custom-icons" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code>Bootstrap v5.2.0</code> framework update - <a
                                                    href="https://blog.getbootstrap.com/2022/05/13/bootstrap-5-2-0-beta"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Dark Mode</code> code refactoring to
                                                enable dynamic theme mode switch - <a
                                                    href="/docs/getting-started/dark-mode" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code>Font Awesome v6.1.1</code> icon set update - <a
                                                    href="https://fontawesome.com/icons" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code>Datatables.net v1.12.1</code> plugin update - <a
                                                    href="/docs/general/datatables/basic" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code>CKEditor v34.0.0</code> plugin update - <a
                                                    href="/docs/general/datatables/basic" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code>Popperjs v2.11.5</code> update - <a
                                                    href="https://popper.js.org/" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code>Webpack</code> build js errors.</li>
                                            <li class="py-2"><code>CKEditor</code> gulp build issue - <a
                                                    href="/docs/editors/ckeditor/overview" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code>TinyMCE</code> default height issue - <a
                                                    href="/docs/editors/tinymce/basic" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_0_38">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.0.38 - 30 March, 2022 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_0_38" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Demo 22</code> - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo22/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 22 Dark Mode</code> - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo22/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Bidding</code> dashboard - <a
                                                    href="https://preview.keenthemes.com/metronic8/dashboards/bidding.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Podcast</code> dashboard - <a
                                                    href="https://preview.keenthemes.com/metronic8/dashboards/podcast.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Projects</code> dashboard - <a
                                                    href="https://preview.keenthemes.com/metronic8/dashboards/projects.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">KTMenu</code> documentation - <a
                                                    href="/docs/general/menu/overview" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Select2</code> rich content example
                                                - <a href="/docs/forms/select2#rich-content" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Select2</code> floating labels
                                                integration - <a href="/docs/forms/select2#floating-labels"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2">Documentation pages improvements with quick sidebar
                                                navigation - <a href="/docs/getting-started/build/gulp" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">KTMenu</code> offset issue caused -
                                                <a href="/docs/general/menu/advanced#toggle-dropdown" class="fw-bold"
                                                    target="_blank">Preview</a>.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_0_37">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.0.37 - 3 March, 2022 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_0_37" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">School</code> dashboard - <a
                                                    href="https://preview.keenthemes.com/metronic8/dashboards/school.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Crypto</code> dashboard - <a
                                                    href="https://preview.keenthemes.com/metronic8/dashboards/crypto.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Finance Performance</code> dashboard
                                                - <a href="https://preview.keenthemes.com/metronic8/dashboards/finance-performance.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Website Analytics</code> dashboard -
                                                <a href="https://preview.keenthemes.com/metronic8/dashboards/website-analytics.html"
                                                    class="fw-bold" target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">Top up Wallet</code> modal wizard
                                                flow - <a
                                                    href="https://preview.keenthemes.com/metronic8/utilities/modals/wizards/top-up-wallet.html#sorting"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Bidding</code> modal form - <a
                                                    href="https://preview.keenthemes.com/metronic8/utilities/modals/forms/bidding.html#sorting"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Underline</code> element - <a
                                                    href="/docs/base/underline#sorting" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Table</code> sort states - <a
                                                    href="/docs/base/tables#sorting" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Table</code> loading indicator - <a
                                                    href="/docs/base/tables#loading" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Draggable Modal</code> solution - <a
                                                    href="/docs/base/modal#draggable" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Select2</code> options with image
                                                improvement - <a href="/docs/forms/select2#countries" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Select2</code> selected option color
                                                improvement - <a href="/docs/forms/select2#dismiss" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Popover</code> dismiss improvements
                                                - <a href="/docs/base/popovers#dismiss" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Input Group</code> solid style
                                                validation state issue - <a href="/docs/base/forms/input-group"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Toastr</code> animation issue - <a
                                                    href="/docs/general/toastr" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 3</code> sticky header issues -
                                                <a href="https://preview.keenthemes.com/metronic8/demo3/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">Demo 9</code> eCommerce App tabs
                                                navigation style issue - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo9/apps/ecommerce/settings.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 20</code> tab wrap issue - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo20/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 21</code> menu display issye on
                                                mobile - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo21/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Dark mode</code> missing assets
                                                issue - <a href="/docs/getting-started/dark-mode" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_0_36">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.0.36 - 12 February, 2022 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_0_36" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Metronic Downloads</code> page to
                                                download prefered framework and demo with one click - <a
                                                    href="https://devs.keenthemes.com/metronic" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 21</code> - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo21/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 21 Dark Mode</code> - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo21/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">eCommerce Customers</code> app - <a
                                                    href="https://preview.keenthemes.com/metronic8/apps/ecommerce/customers/listing.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">eCommerce Reports</code> app - <a
                                                    href="https://preview.keenthemes.com/metronic8/apps/ecommerce/reports/view.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">eCommerce Settings</code> app - <a
                                                    href="https://preview.keenthemes.com/metronic8/apps/ecommerce/settings.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Contacts</code> app - <a
                                                    href="https://preview.keenthemes.com/metronic8/apps/contacts/getting-started.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Tagify</code> external suggestions
                                                example - <a href="/docs/forms/tagify#external-suggestions"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Online Course</code> dashboard - <a
                                                    href="https://preview.keenthemes.com/metronic8/dashboards/online-courses.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Tagify</code> external suggestions
                                                example - <a href="/docs/forms/tagify" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">FormValidation</code> documentation
                                                update - <a href="/docs/forms/formvalidation/basic" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Date Range Picker</code>
                                                improvements - <a href="/docs/forms/daterangepicker" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Demo 5</code> add question button
                                                issue - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo5/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Select2</code> option selection with
                                                keyboard issue - <a href="/docs/forms/select2" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_0_35">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.0.35 - 12 January, 2022 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_0_35" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Bootstrap Tabs Dropdowns</code>
                                                integration - <a href="/docs/base/tabs#line-tabs-dropdowns"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Flatpickr</code> UI improvements -
                                                <a href="/docs/forms/flatpickr" class="fw-bold"
                                                    target="_blank">Preview</a>.
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Demo 18</code> dashboard page broken
                                                HTML code issue - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo18/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Select2</code> dropdown position bug
                                                in RTL - <a href="/docs/forms/select2" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">CSS</code> syntax errors fixes.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_0_34">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.0.34 - 31 December, 2021 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_0_34" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">eCommerce</code> dashboard - <a
                                                    href="https://preview.keenthemes.com/metronic8/dashboards/ecommerce.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Store Analytics</code> dashboard -
                                                <a href="https://preview.keenthemes.com/metronic8/dashboards/store-analytics.html"
                                                    class="fw-bold" target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">Logistics</code> dashboard - <a
                                                    href="https://preview.keenthemes.com/metronic8/dashboards/logistics.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Delivery</code> dashboard - <a
                                                    href="https://preview.keenthemes.com/metronic8/dashboards/delivery.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Marketing</code> dashboard - <a
                                                    href="https://preview.keenthemes.com/metronic8/dashboards/marketing.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Social</code> dashboard - <a
                                                    href="https://preview.keenthemes.com/metronic8/dashboards/social.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">eCommerce</code> app with sales
                                                module - <a
                                                    href="https://preview.keenthemes.com/metronic8/apps/ecommerce/sales/listing.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Theme Mode</code> switcher(light and
                                                dark) menu in header - <a
                                                    href="https://preview.keenthemes.com/metronic8/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Custom Icons</code> font icon set -
                                                <a href="/docs/icons/custom-icons" class="fw-bold"
                                                    target="_blank">Preview</a>.
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Draggable</code> update to
                                                <code>v1.0.0-beta.12</code> - <a href="/docs/general/draggable/cards"
                                                    class="fw-bold" target="_blank">Preview</a>.
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Select2</code> dropdown position bug
                                                in RTL - <a href="/docs/forms/select2" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 5 Header Menu</code> mobile
                                                toggle issue in - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo5/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_0_33">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.0.33 - 17 December, 2021 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_0_33" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2">Use <code class="ms-0">Popper v2.10.1</code> specific
                                                version in <code>packages.json</code>.</li>
                                            <li class="py-2"><code class="ms-0">Amcharts v5</code> update - <a
                                                    href="/docs/charts/amcharts/charts" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">KTImage</code> improvements - <a
                                                    href="/docs/forms/image-input" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">KTDialer</code> new API methods - <a
                                                    href="/docs/forms/dialer" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">KTMenu</code> dropdown position
                                                issue caused by <code>Popper v2.11.0</code> minor update. Requires packages
                                                update via <code>Yarn</code>.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_0_32">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.0.32 - 15 December, 2021 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_0_32" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Demo 18</code> - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo18/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 18 Dark Mode</code> - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo18/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 19</code> - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo19/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 19 Dark Mode</code> - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo19/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 20</code> - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo20/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 20 Dark Mode</code> - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo20/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">eCommerce</code> app with catalog
                                                module - <a
                                                    href="https://preview.keenthemes.com/metronic8/apps/ecommerce/catalog/products.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Projects</code> app with targets,
                                                budget, users, files and more - <a
                                                    href="https://preview.keenthemes.com/metronic8/apps/projects/list.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Campaign Modal</code> - <a
                                                    href="https://preview.keenthemes.com/metronic8/modals/wizards/create-campaign.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Bootstrap Floating Labels</code>
                                                integration - <a href="/docs/base/forms/floating-labels" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Select2</code> option groups - <a
                                                    href="/docs/forms/select2#group" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Layout Dynamic Initialization</code>
                                                documentation - <a
                                                    href="/docs/getting-started/customization/javascript#layout-dynamic-initialization"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Figma File</code> update with new
                                                demos.</li>
                                            <li class="py-2"><code class="ms-0">Toggle</code> component
                                                documentation improvements - <a href="/docs/general/toggle"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Tagify v4.9.2</code> update - <a
                                                    href="/docs/forms/tagify" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Inbox App</code> responsiveness
                                                improvements - <a
                                                    href="https://preview.keenthemes.com/metronic8/apps/inbox/listing.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Select2</code> group input wrap
                                                issue - <a href="/docs/forms/select2#responsive" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Select2</code> search input focus
                                                issue - <a href="/docs/forms/select2" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Date Range Picker</code> dropdown
                                                menu border radius issue - <a
                                                    href="/docs/forms/daterangepicker#responsive" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_0_31">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.0.31 - 26 November, 2021 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_0_31" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Demo 17</code> - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo17/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 17 Dark Mode</code> - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo17/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Sub Datatable</code> support for
                                                <code>Datatables.net</code> plugin - <a
                                                    href="/docs/general/datatables/subtable" class="fw-bold"
                                                    target="_blank">Preview</a>.
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Vis Timeline</code> design
                                                improvements - <a href="/docs/general/vis-timeline/group#responsive"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Select2</code> custom dropdown width
                                                option - <a href="/docs/forms/select2#dropdown-width" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_0_30">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.0.30 - 11 November, 2021 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_0_30" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Demo 16</code> - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo16/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 16 Dark Mode</code> - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo16/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Inbox App</code> with messages,
                                                compose and reply thread - <a
                                                    href="https://preview.keenthemes.com/metronic8/apps/inbox/listing.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Datatables.net</code> responsive
                                                extenstion integration - <a
                                                    href="/docs/general/datatables/advanced#responsive" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Separator</code> text and icon
                                                options - <a href="/docs/base/separator#content" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Cookie Alert</code> plugin
                                                integration - <a href="/docs/general/cookiealert" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Collapsible Card</code> examples -
                                                <a href="/docs/base/cards#collapsible" class="fw-bold"
                                                    target="_blank">Preview</a>.
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Select2</code> hover and select
                                                state enhancements - <a href="/docs/forms/select2#responsive"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Pagination</code> arrows RTL issue -
                                                <a href="/docs/base/pagination" class="fw-bold"
                                                    target="_blank">Preview</a>.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_0_29">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.0.29 - 29 October, 2021 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_0_29" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Demo 14</code> - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo14/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 14 Dark Mode</code> - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo14/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 15</code> - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo15/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 15 Dark Mode</code> - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo15/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">No-jQuery</code> setup guide - <a
                                                    href="/docs/getting-started/customization/no-jquery" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Dynamic Initialization</code> of
                                                core components and 3rd-party plugins - <a
                                                    href="/docs/getting-started/customization/javascript"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">User Management</code> app
                                                enhancements - <a
                                                    href="https://preview.keenthemes.com/metronic8/apps/user-management/users/list.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Bootstrap Input Group</code>
                                                integration - <a href="/docs/base/forms/input-group" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Advanced Form Controls</code>
                                                examples - <a href="/docs/base/forms/advanced" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_0_28">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.0.28 - 14 October, 2021 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_0_28" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Demo 12</code> - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo12/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 12 Dark Mode</code> - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo12/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">SweetAlert</code> plugin integration
                                                - <a href="/docs/general/sweetalert" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Bootstrap Form Controls</code>
                                                integration - <a href="/docs/base/forms/controls" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Bootstrap Input Group</code>
                                                integration - <a href="/docs/base/forms/input-group" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Advanced Form Controls</code>
                                                examples - <a href="/docs/base/forms/advanced" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Bootstrap Toasts</code> integration
                                                - <a href="/docs/base/toasts" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Bootstrap v5.1.3</code> update - <a
                                                    href="https://blog.getbootstrap.com/2021/10/05/bootstrap-5-1-2/"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">FormValidation v1.9.0</code> update
                                                - <a href="https://formvalidation.io/updates/" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">File Manager</code> code refactoring
                                                - <a href="https://preview.keenthemes.com/metronic8/apps/file-manager/folders.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Toastr</code> plugin update - <a
                                                    href="/docs/general/toastr" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Dialer</code> negative value and
                                                input change event firing issues - <a href="/docs/forms/dialer"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Bootstrap Toasts</code> and
                                                <code>Toastr</code> conflict - <a href="/docs/general/toastr"
                                                    class="fw-bold" target="_blank">Preview</a>.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_0_27">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.0.27 - 5 October, 2021 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_0_27" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Demo 10</code> - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo10/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 10 Dark Mode</code> - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo10/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Buttons</code> hover effects - <a
                                                    href="/docs/base/buttons" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">File Manager</code> app enhancements
                                                - <a href="https://preview.keenthemes.com/metronic8/apps/file-manager/folders.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">User Management</code> app
                                                enhancements - <a
                                                    href="https://preview.keenthemes.com/metronic8/apps/user-management/users/list.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Subscriptions</code> app
                                                enhancements - <a
                                                    href="https://preview.keenthemes.com/metronic8/apps/subscriptions/add.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Customers</code> app enhancements -
                                                <a href="https://preview.keenthemes.com/metronic8/apps/customers/view.html"
                                                    class="fw-bold" target="_blank">Preview</a>.
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Stepper</code> submit button is not
                                                shown - <a href="/docs/general/stepper" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_0_26">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.0.26 - 30 September, 2021 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_0_26" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">File Manager</code> app - <a
                                                    href="https://preview.keenthemes.com/metronic8/apps/file-manager/folders.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Form Repeater</code> plugin
                                                integration - <a href="/docs/forms/formrepeater/overview"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2">New <code>Video Tutorials</code> from the core team - <a
                                                    href="/docs/getting-started/video-tutorials" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">FormValidation</code> plugin
                                                integration with ASP.NET - <a href="/docs/forms/formvalidation/overview"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">DropzoneJS</code> plugin integration
                                                improvements - <a href="/docs/forms/dropzonejs" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Profile</code> menu responsive
                                                improvements - <a
                                                    href="https://preview.keenthemes.com/metronic8/pages/user-profile/overview.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Account</code> menu responsive
                                                improvements - <a
                                                    href="https://preview.keenthemes.com/metronic8/account/overview.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Page Loader</code> color issue in
                                                <code>Dark Mode</code> - <a
                                                    href="https://preview.keenthemes.com/metronic8/layout-builder.html"
                                                    class="fw-bold" target="_blank">Preview</a>.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_0_25">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.0.25 - 20 September, 2021 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_0_25" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Tiny Slider</code> plugin
                                                integration - <a href="/docs/general/tiny-slider/overview"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Bootstrap Maxlength</code> plugin
                                                integration - <a href="/docs/forms/bootstrap-maxlength" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">CountUp</code> plugin integration -
                                                <a href="/docs/general/countup" class="fw-bold"
                                                    target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">Select2</code> integration with
                                                <code>Bootstrap Input Group</code> - <a
                                                    href="/docs/forms/select2#input-group" class="fw-bold"
                                                    target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">Users Selection</code> modal example
                                                - <a href="https://preview.keenthemes.com/metronic8/modals/general/select-users.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Video Tutorials</code> from the core
                                                team - <a href="/docs/getting-started/video-tutorials" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Figma</code> file for demos,
                                                widgets, icons and general elements.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Bootstrap v5.1.1</code> update - <a
                                                    href="https://blog.getbootstrap.com/2021/09/07/bootstrap-5-1-1/"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">KTMenu</code> dropdown alignment
                                                issue on mobile mode.</li>
                                            <li class="py-2"><code class="ms-0">Customer App</code> filter modal
                                                datepicker validation issue - <a
                                                    href="https://preview.keenthemes.com/metronic8/apps/customers/list.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Subscriptions App</code> filter
                                                modal datepicker validation issue - <a
                                                    href="https://preview.keenthemes.com/metronic8/apps/subscriptions/list.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_0_24">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.0.24 - 3 September, 2021 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_0_24" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Demo 8</code> complete layout and
                                                pages - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo8/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 9</code> complete layout and
                                                pages - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo9/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 6 Dark Mode</code> complete
                                                layout and pages - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo6/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 7 Dark Mode</code> complete
                                                layout and pages - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo7/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Ajax Server Side DataTables</code>
                                                improvements - <a href="/docs/general/datatables/server-side"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Autosize</code> textarea plugin
                                                integration - <a href="/docs/forms/autosize" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Bootstrap Vertical Tabs</code>
                                                integration - <a href="/docs/base/tabs" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2">Removed <code class="ms-0">.data-kt-menu-flip</code>
                                                attributes from the HTML code of <code>KTMenu</code> instances to
                                                automatically handle the responsive and parent overflow modes.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2">Fixed <code>KTMenu</code> responsive and parent overflow
                                                issues.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_0_23">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.0.23 - 23 August, 2021 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_0_23" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Demo 5 - Support Forum</code>
                                                complete layout and pages - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo5/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 5 - Support Forum Dark
                                                    Mode</code> complete layout and pages - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo5/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 5 - Support Forum Dark
                                                    Mode</code> complete documentation and components - <a
                                                    href="/docs/getting-started" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Duotune</code> in-house designed
                                                with 400+ SVG icons - <a href="/docs/icons/duotune" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Multiple Illustrations
                                                    Support</code> across pages and apps with in-house designed illustration
                                                sets - <a
                                                    href="https://preview.keenthemes.com/metronic8/layout-builder.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Select2</code> country list with
                                                flag implementation - <a href="/docs/forms/select2#countries"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Select2</code> user list with avatar
                                                implementation - <a href="/docs/forms/select2#users" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Tagify</code> country list with flag
                                                implementation - <a href="/docs/forms/tagify#countries" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Tagify</code> user list with avatar
                                                implementation - <a href="/docs/forms/tagify#users" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">design</code> folder added with
                                                in-house designed SVG illustrations and Duotune icons source files.</li>
                                            <li class="py-2"><code class="ms-0">KTStepper</code> wizard form
                                                validation flow improvements - <a
                                                    href="https://preview.keenthemes.com/metronic8/pages/wizards/vertical.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Duotone</code> SVG icons replaced
                                                with in-house designed Duotune icons - <a href="/docs/icons/duotune"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Old Demo 5</code> renamed to <code
                                                    class="ms-0">Demo 8</code> - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo8/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">.container</code> class changed to
                                                <code>.container-xxl</code> in demos layouts for better responsivenes in
                                                small to medium desktops.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_0_22">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.0.22 - 6 August, 2021 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_0_22" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Demo 3</code> complete layout and
                                                pages - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo3/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 3 Dark Mode</code> complete
                                                layout and pages - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo3/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 3 Dark Mode</code> complete
                                                documentation and components - <a href="/docs/getting-started"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Duotune</code> in-house designed SVG
                                                with 300+ icons <a href="/docs/icons/duotune" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">jsTree</code> plugin integration -
                                                <a href="/docs/general/jstree/overview" class="fw-bold"
                                                    target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">Vis-Timeline</code> plugin
                                                integration - <a href="/docs/general/vis-timeline/overview"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Bootstrap v5.1.0</code> update - <a
                                                    href="https://blog.getbootstrap.com/2021/08/04/bootstrap-5-1-0/"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2">Fixed <code>KTBlockUI</code> build error in Webpack.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_0_21">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.0.21 - 30 July, 2021 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_0_21" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Demo 2 Dark Mode</code> complete
                                                layout and pages - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo2/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 2 Dark Mode</code> complete
                                                documentation and components - <a href="/docs/getting-started"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">BlockUI</code> in-house plugin - <a
                                                    href="/docs/general/blockui" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">FormValidation</code> plugin
                                                integration - <a href="/docs/forms/formvalidation/overview"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Flot Charts</code> plugin
                                                integration - <a href="/docs/charts/flotcharts/overview" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Google Charts</code> plugin
                                                integration - <a href="/docs/charts/google-charts/overview"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Bootstrap Buttons with Badges</code>
                                                options - <a href="/docs/base/badges" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Demo 1 Toolbar</code> improvements -
                                                <a href="https://preview.keenthemes.com/metronic8/layouts/toolbars/toolbar-4.html"
                                                    class="fw-bold" target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">Demo 5 Toolbar</code> improvements -
                                                <a href="https://preview.keenthemes.com/metronic8/demo8/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_0_20">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.0.20 - 26 July, 2021 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_0_20" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">jKanban Board</code> plugin
                                                integration - <a href="/docs/general/jkanban/overview" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Cropper.js</code> plugin integration
                                                - <a href="/docs/general/cropper" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Bootstrap Menu</code> in-house
                                                component documentation - <a href="/docs/general/menu" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Bootstrap Buttons with Badges</code>
                                                options - <a href="/docs/base/badges" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">RTL Version</code> improvements - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/rtl/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Apexchart v3.27.3</code> update - <a
                                                    href="/docs/charts/apexcharts" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_0_19">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.0.19 - 21 July, 2021 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_0_19" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Demo 5 Dark Mode</code> complete
                                                layout and pages - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo8/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 5 Dark Mode</code> complete
                                                documentation and components - <a href="/docs/getting-started"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Calendar</code> app improvements
                                                with hoverable event summary - <a
                                                    href="/docs/general/fullcalendar/overview" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Ajax Datatable</code> improvements -
                                                <a href="/docs/general/datatables/server-side" class="fw-bold"
                                                    target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">Webpack</code> improvements for
                                                assets build in some older version of <code>node.js</code>.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_0_18">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.0.18 - 16 July, 2021 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_0_18" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Demo 1 Dark Mode</code> complete
                                                layout and pages - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 1 Dark Mode</code> complete
                                                documentation and components - <a href="/docs/getting-started"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 1 Compact</code> dashboard - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/dashboards/compact.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 6</code> - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo6/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Demo 4 Minimal</code> dashboard - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo4/dashboards/compact.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Ajax Datatable</code> integration -
                                                <a href="/docs/general/datatables/server-side" class="fw-bold"
                                                    target="_blank">Preview</a>.
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Calendar</code> app improvements
                                                with hoverable event summary - <a
                                                    href="/docs/general/fullcalendar/overview" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">3rd-Party Plugins</code> update - <a
                                                    href="/docs/getting-started/references" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_0_17">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.0.17 - 7 July, 2021 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_0_17" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2">New <code>Demo 4</code> - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo4/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2">New <code>Calendar</code> app - <a
                                                    href="https://preview.keenthemes.com/metronic8/apps/calendar.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2">New <code>Documentation</code> layout - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo4/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2">New <code>Chart Widgets</code> - <a
                                                    href="https://preview.keenthemes.com/metronic8/widgets/mixed.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Fullcalendar</code> plugin
                                                integration improvements - <a href="/docs/general/fullcalendar/overview"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Support Center</code> app
                                                enhancements - <a
                                                    href="https://preview.keenthemes.com/metronic8/apps/support-center/overview.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Fullcalendar</code> toolbar not
                                                wrapped properly on mobile breakpoints - <a
                                                    href="/docs/general/fullcalendar/overview" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_0_16">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.0.16 - 28 June, 2021 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_0_16" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Demo 3</code> - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo3/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Fullcalendar</code> plugin
                                                integration - <a href="/docs/general/fullcalendar/overview"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Draggable</code> plugin integration
                                                - <a href="/docs/general/draggable/overview" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Bootstrap v5.0.2</code> update
                                                integration - <a
                                                    href="https://blog.getbootstrap.com/2021/06/22/bootstrap-5-0-2/"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2">Fixed deprecation warnings in Sass during compilation for
                                                <code>/</code> division following the Bootstrap authors recommendation.
                                            </li>
                                            <li class="py-2"><code class="ms-0">Subscriptions</code> app
                                                enhancements - <a
                                                    href="https://preview.keenthemes.com/metronic8/apps/subscriptions/add.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Customers</code> app enhancements -
                                                <a href="https://preview.keenthemes.com/metronic8/apps/customers/view.html"
                                                    class="fw-bold" target="_blank">Preview</a>.
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Demo 1</code> and <code>Demo
                                                    5</code> toolbar/page title truncated on mobile mode.</li>
                                            <li class="py-2"><code class="ms-0">Datatable</code> sort icon position
                                                fix - <a href="/docs/general/datatables/basic" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_0_15">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.0.15 - 17 June, 2021 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_0_15" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Demo 2</code> - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo2/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Password Meter</code> in-house
                                                plugin - <a href="/docs/forms/password-meter" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Swapper</code> in-house plugin - <a
                                                    href="/docs/general/swapper" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Quick Search</code> in-house plugin
                                                - <a href="/docs/general/search" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Sticky</code> in-house plugin - <a
                                                    href="/docs/general/sticky" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Cookie</code> in-house plugin - <a
                                                    href="/docs/general/cookie" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">User Management</code> app
                                                enhancements - <a
                                                    href="https://preview.keenthemes.com/metronic8/apps/user-management/users/list.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Customers</code> app enhancements -
                                                <a href="https://preview.keenthemes.com/metronic8/apps/customers/view.html"
                                                    class="fw-bold" target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">KTPlace</code> component class name
                                                changed to <code>KTSwapper</code> and <code>data-kt-place-*</code> attribute
                                                name changed to <code>data-kt-swapper-*</code></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_0_14">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.0.14 - 9 June, 2021 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_0_14" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Support App</code> overview page -
                                                <a href="https://preview.keenthemes.com/metronic8/apps/support-center/overview.html"
                                                    class="fw-bold" target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">Support Tickets</code> page - <a
                                                    href="https://preview.keenthemes.com/metronic8/apps/support-center/tickets/list.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Support Ticket View</code> page - <a
                                                    href="https://preview.keenthemes.com/metronic8/apps/support-center/tickets/view.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Support Tutorials</code> page - <a
                                                    href="https://preview.keenthemes.com/metronic8/apps/support-center/tutorials/list.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Support Tutorials Post</code> page -
                                                <a href="https://preview.keenthemes.com/metronic8/apps/support-center/tutorials/post.html"
                                                    class="fw-bold" target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">Support FAQ</code> overview - <a
                                                    href="https://preview.keenthemes.com/metronic8/apps/support-center/faq.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Support Licenses</code> overview -
                                                <a href="https://preview.keenthemes.com/metronic8/apps/support-center/licenses.html"
                                                    class="fw-bold" target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">Support Contact Us</code> overview -
                                                <a href="https://preview.keenthemes.com/metronic8/apps/support-center/contact.html"
                                                    class="fw-bold" target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">Image Input</code> in-house plugin
                                                documentation - <a href="/docs/forms/image-input" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Toggle</code> in-house plugin
                                                documentation - <a href="/docs/general/toggle" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Triangle Ribbon</code> in-house
                                                plugin new option - <a href="/docs/base/ribbon" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Boxed Horizontal Menu Layout</code>
                                                update - <a
                                                    href="https://preview.keenthemes.com/metronic8/layouts/aside/none.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_0_13">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.0.13 - 4 June, 2021 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_0_13" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Scroll</code> in-house plugin
                                                documentation - <a href="/docs/general/scroll" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Drawer</code> in-house plugin
                                                documentation - <a href="/docs/general/drawer" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">FormValidation v1.8.1</code> plugin
                                                update - <a href="https://formvalidation.io/updates" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2">Fixed <code class="ms-0">Form Check</code> validations
                                                show error message at a wrong place.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_0_12">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.0.12 - 31 May, 2021 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_0_12" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Demo 1 Laravel 8</code> version - <a
                                                    href="http://preview.keenthemes.com/metronic8/laravel/"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Blazor</code> integration
                                                documentation enhancements - <a
                                                    href="/docs/getting-started/integration/blazor" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2">Fixed <code class="ms-0">Gulp</code> dynamic demo path
                                                output by command option. Eg. <code class="ms-0">gulp --demo5</code>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_0_11">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.0.11 - 26 May, 2021 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_0_11" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Smooth Scroll</code> plugin
                                                integration - <a href="/docs/general/smooth-scroll" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Bootstrap Alerts</code> extended
                                                integration - <a href="/docs/base/alerts" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Bootstrap Tooltips</code> dismiss on
                                                click option - <a href="/docs/base/tooltips" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Blazor</code> integration
                                                documentation enhancements - <a
                                                    href="/docs/getting-started/integration/blazor" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">DropzoneJS</code> plugin integration
                                                enhancements - <a href="/docs/forms/dropzonejs" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2">Fixed <code>gulp-dart-sass</code> warnings with resolution
                                                <code>"gulp-dart-sass/sass": "1.32.13"</code> in <code>packages.json</code>
                                            </li>
                                            <li class="py-2">Fixed <code>FormValidation</code> message display in wrong
                                                container for sign-up forms - <a
                                                    href="https://preview.keenthemes.com/metronic8/authentication/flows/basic/sign-up.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_0_10">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.0.10 - 21 May, 2021 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_0_10" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Demo 1 Vue 3</code> version - <a
                                                    href="http://preview.keenthemes.com/metronic8/vue/demo1"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Toastr</code> plugin integration -
                                                <a href="/docs/general/toastr" class="fw-bold"
                                                    target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code class="ms-0">Apexcharts</code> plugin integration
                                                - <a href="/docs/charts/apexcharts" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Chartjs</code> plugin integration -
                                                <a href="/docs/charts/chartjs" class="fw-bold"
                                                    target="_blank">Preview</a>.
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Access CSS variables in
                                                    Javascript</code> documentation - <a href="/docs/base/utilities"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2">Fixed <code>Stepper</code> demo's responsive issue - <a
                                                    href="/docs/general/stepper" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_0_9">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.0.9 - 18 May, 2021 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_0_9" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Team</code> page - <a
                                                    href="https://preview.keenthemes.com/metronic8/pages/company/team.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Licenses</code> page - <a
                                                    href="https://preview.keenthemes.com/metronic8/pages/company/licenses.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Sitemap</code> page - <a
                                                    href="https://preview.keenthemes.com/metronic8/pages/company/sitemap.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">AmChart Charts</code> library
                                                integration - <a href="/docs/general/amcharts/charts" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">AmChart Maps</code> library
                                                integration - <a href="/docs/general/amcharts/maps" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">AmChart Stock Charts</code> library
                                                integration - <a href="/docs/general/amcharts/stock-charts"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Clipboard</code> plugin integration
                                                - <a href="/docs/forms/clipboard" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Blazor</code> integration
                                                documentation enhancements - <a
                                                    href="/docs/getting-started/integration/blazor" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">FormValidation v1.8.0</code> update
                                                - <a href="https://formvalidation.io/updates" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">User Management</code> app
                                                enhancements - <a
                                                    href="https://preview.keenthemes.com/metronic8/apps/user-management/users/list.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Subscriptions</code> app
                                                enhancements - <a
                                                    href="https://preview.keenthemes.com/metronic8/apps/subscriptions/add.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Customers</code> app enhancements -
                                                <a href="https://preview.keenthemes.com/metronic8/apps/customers/view.html"
                                                    class="fw-bold" target="_blank">Preview</a>.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_0_8">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.0.8 - 14 May, 2021 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_0_8" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2">Complete <code>User Management</code> app - <a
                                                    href="https://preview.keenthemes.com/metronic8/apps/user-management/users/list.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2">Advanced <code>User List</code> page with add/edit user
                                                modals - <a
                                                    href="https://preview.keenthemes.com/metronic8/apps/user-management/users/list.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2">Extended <code>User Details</code> page with user profile,
                                                settings, logs and more - <a
                                                    href="https://preview.keenthemes.com/metronic8/apps/user-management/users/view.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2">Advanced <code>User Roles</code> page with complete CRUD
                                                features - <a
                                                    href="https://preview.keenthemes.com/metronic8/apps/user-management/roles/list.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2">Advanced <code>User Permissions</code> page with complete
                                                CRUD features - <a
                                                    href="https://preview.keenthemes.com/metronic8/apps/user-management/permissions.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2">Handy <code>Ribbon</code> component with complete
                                                documentation - <a href="/docs/base/ribbon" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code class="ms-0">Bootstrap v5.0.1</code> update
                                                integration - <a
                                                    href="https://blog.getbootstrap.com/2021/05/13/bootstrap-5-0-1/"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Blazor</code> integration
                                                documentation enhancements - <a
                                                    href="/docs/getting-started/integration/blazor" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">DropzoneJS</code> plugin integration
                                                enhancements - <a href="/docs/forms/dropzonejs" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code class="ms-0">Card</code> component enhancements -
                                                <a href="/docs/base/cards" class="fw-bold"
                                                    target="_blank">Preview</a>.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_0_7">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.0.7 - 11 May, 2021 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_0_7" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2">Classic <code>Demo 5</code> with square style - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo8/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2">Font icon <code>Aside</code> and <code>Header</code> menu
                                                options - <a
                                                    href="https://preview.keenthemes.com/metronic8/layouts/aside/font-icons.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2">UX friendly <code>Landing</code> page sticky header - <a
                                                    href="https://preview.keenthemes.com/metronic8/landing.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code>Landing</code> page pricing table enhancements - <a
                                                    href="https://preview.keenthemes.com/metronic8/landing.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code>Blazor</code> integration documentation enhancements
                                                - <a href="/docs/getting-started/integration/blazor" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code>Chat</code> app enhancements - <a
                                                    href="https://preview.keenthemes.com/metronic8/apps/chat/group.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code>Subscriptions</code> app enhancements - <a
                                                    href="https://preview.keenthemes.com/metronic8/apps/subscriptions/add.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code>Customers</code> app enhancements - <a
                                                    href="https://preview.keenthemes.com/metronic8/apps/customers/view.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code>DropzoneJS</code> plugin integration enhancements -
                                                <a href="/docs/forms/dropzonejs" class="fw-bold"
                                                    target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2"><code>Card</code> component enhancements - <a
                                                    href="/docs/base/cards" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_0_6">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.0.6 - 6 May, 2021 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_0_6" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2">Complete <code>Landing</code> for product showcase - <a
                                                    href="https://preview.keenthemes.com/metronic8/landing.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2">Popular <code>DropzoneJS</code> file upload plugin
                                                integration - <a href="/docs/forms/dropzonejs" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2">Handy <code>Bootstrap Multiselectsplitter</code> plugin
                                                integration - <a href="/docs/forms/bootstrap-multiselectsplitter"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2">High demand <code>Google reCAPTCHA v3</code> plugin
                                                integration - <a href="/docs/forms/google-recaptcha" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2">Interactive <code>Typed.js</code> plugin integration - <a
                                                    href="/docs/general/typedjs" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code>Blazor</code> integration documentation enhancements
                                                - <a href="/docs/getting-started/integration/blazor" class="fw-bold"
                                                    target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code>Chat</code> app enhancements - <a
                                                    href="https://preview.keenthemes.com/metronic8/apps/chat/group.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code>Subscriptions</code> app enhancements - <a
                                                    href="https://preview.keenthemes.com/metronic8/apps/subscriptions/add.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code>Customers</code> app enhancements - <a
                                                    href="https://preview.keenthemes.com/metronic8/apps/customers/view.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_0_5">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.0.5 - 3 May, 2021 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_0_5" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code>Blazor Framework</code> integration documentation -
                                                <a href="https://preview.keenthemes.com/metronic8/demo1/documentation/getting-started/integration/blazor.html"
                                                    class="fw-bold" target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2">Complete <code>Contact Us</code> page with feedback form
                                                and interactive map - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/pages/company/contact.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2">Extended <code>Bootstrap Tooltips</code> integration - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/documentation/base/tooltips.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2">Extended <code>Bootstrap Popover</code> integration - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/documentation/base/popovers.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code>Layout</code> enhancements for iOS v12.x & v13.x</li>
                                            <li class="py-2"><code>Chat</code> app enhancements - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/apps/chat/group.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code>Subscriptions</code> app enhancements - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/apps/subscriptions/add.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code>Customers</code> app enhancements - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/apps/customers/view.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2">Fixed <code>Menus</code> and <code>Drawers</code> toggle
                                                issue for iOS v12.x and v13.x.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_0_4">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.0.4 - 27 April, 2021 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_0_4" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2">Creative <code>About Us</code> page - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/pages/company/about.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2">Complete <code>Pricing & Plan Selection</code> page - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/pages/company/pricing.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2">Advanced <code>Careers Listing</code> page - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/pages/careers/list.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2">Fully functional <code>Careers Application</code> page
                                                <code>Topbar</code> chat button - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/pages/careers/apply.html"
                                                    class="fw-bold" target="_blank">Preview</a>.
                                            </li>
                                            <li class="py-2">Classic <code>FAQ</code> page - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/pages/faq/classic.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2">Extended <code>FAQ</code> page - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/pages/faq/extended.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code>Chat</code> app enhancements - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/apps/chat/group.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code>Subscriptions</code> app payment methods listing
                                                enhancements - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/apps/subscriptions/add.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code>Customers</code> app details table enhancements - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/apps/customers/view.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2">Fixed <code>Demo1</code> breadcrumb responsive issue on
                                                Mobile.</li>
                                            <li class="py-2">Fixed <code>Demo1</code> topbar icons tooltip issue on
                                                Mobile.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_0_3">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.0.3 - 23 April, 2021 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_0_3" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2">Fully functional and flexible <code>Chat</code> app - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/apps/chat/private.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2">Extended <code>Group Chat</code> option - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/apps/chat/group.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2">Extended <code>Drawer Chat</code> option - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/apps/chat/drawer.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2">Global <code>Quick Chat Messanger</code> feature launched
                                                with the <code>Topbar</code> chat button - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/index.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2">Complete <code>Invoice Management</code> app - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/apps/invoices/create.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2">Advanced <code>Invoice 1 </code> template - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/apps/invoices/view/invoice-1.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2">Minimalistic <code>Invoice 2 </code> template - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/apps/invoices/view/invoice-2.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code>Subscriptions</code> app enhancements - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/apps/subscriptions/add.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2"><code>Customers</code> app enhancements - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/apps/customers/view.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2">Fixed <code>Select2</code> search input focus issue on
                                                modal.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_0_2">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.0.2 - 19 April, 2021 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_0_2" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2">Fully functional <code>Subscriptions Management</code> app
                                                - <a href="https://preview.keenthemes.com/metronic8/demo1/apps/subscriptions/getting-started.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2">Advanced <code>Subscriptions Listing</code> page - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/apps/subscriptions/list.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2">Detailed <code>Subscription View</code> page - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/apps/subscriptions/view.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2">Extended <code>Subscription Add/Edit</code> page - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/apps/subscriptions/add.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2">Stylish <code>Blog Home</code> page - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/pages/pages/blog/home.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2">Well-structured <code>Blog Post</code> page - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/pages/pages/blog/post.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2">Awesome <code>Fullscreen Lightbox</code> plugin integration
                                                - <a href="https://preview.keenthemes.com/metronic8/demo1/documentation/general/fslightbox.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2"><code>Customers</code> app Javascript files reorganization.
                                            </li>
                                            <li class="py-2">Remember <code>Demo 1 Aside Menu</code> last scroll
                                                position.</li>
                                            <li class="py-2"><code>DataTables</code> plugin documentation improvement -
                                                <a href="https://preview.keenthemes.com/metronic8/demo1/documentation/general/datatable/overview.html"
                                                    class="fw-bold" target="_blank">Preview</a>.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_0_1">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.0.1 - 14 April, 2021 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_0_1" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2">Fully functional <code>Customers Management</code> app - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/apps/customers/getting-started.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2">Advanced <code>Customers Listing</code> page - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/apps/customers/list.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2">Detailed <code>Customers View</code> page - <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/apps/customers/view.html"
                                                    class="fw-bold" target="_blank">Preview</a>.</li>
                                            <li class="py-2">Documentation for exclusive plugin <code>KTStepper</code> -
                                                <a href="https://preview.keenthemes.com/metronic8/demo1/documentation/general/stepper.html"
                                                    class="fw-bold" target="_blank">Preview</a>.
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2">Other <code>Documentation</code> improvements.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2">Fixed long modal content overflowing issue.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex " data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_0_0">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.0.0 - 9 April, 2021 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_0_0" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse show"
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">New:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2">The first (Demo 1) HTML version for Metronic 8 with the
                                                most advanced enterprise ready solution.</li>
                                            <li class="py-2">New unified core framework (SASS, Javascript, Typescript,
                                                Webpack, Gulp) for HTML and SPA versions with flexible design system
                                                support.</li>
                                            <li class="py-2">Fully functional and real world business oriented
                                                solutions.</li>
                                            <li class="py-2">Custom tailored Bootstrap 5 components.</li>
                                            <li class="py-2">No design skills required, code without ever leaving your
                                                HTML editor.</li>
                                            <li class="py-2">No CSS/SASS coding required, our flexible CSS utility
                                                classes build on top of Bootstrap 5 will cover almost all your design needs.
                                            </li>
                                            <li class="py-2">18 exclusive in-house components.</li>
                                            <li class="py-2">30 deeply integrated popular 3rd party plugins.</li>
                                            <li class="py-2">Assets(CSS/JS) optimization up to 75%.</li>
                                            <li class="py-2">Gulp v4 & Webpack v5 based build tools refactoring with
                                                ES6.</li>
                                            <li class="py-2">Enhanced responsive layouts.</li>
                                            <li class="py-2">Overall Layout structure and performance improvements.</li>
                                            <li class="py-2">Native Custom Scrollbars (Perfect Scrollbar plugin dropped)
                                            </li>
                                            <li class="py-2">Components lazy initialization via HTML attributes (no more
                                                repeating JS code).</li>
                                            <li class="py-2">Fully functional pages, apps, modals, forms and datatable
                                                examples.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Next:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2">Typescript/ES6 support.</li>
                                            <li class="py-2">Other demos releases.</li>
                                            <li class="py-2">Angular, VueJS, React versions implementation.</li>
                                            <li class="py-2">Angular, VueJS, React authentication with real REST API.
                                            </li>
                                            <li class="py-2">Detailed documentation of in-house components.</li>
                                            <li class="py-2">Dark Skin support.</li>
                                            <li class="py-2">Frontend Launcher templates.</li>
                                            <li class="py-2">Limitless fully detailed pages.</li>
                                            <li class="py-2">More popular 3rd party plugins integration.</li>
                                            <li class="py-2">More advanced CRUD based apps and pages.</li>
                                            <li class="py-2">More advanced forms and input controls</li>
                                            <li class="py-2">And many more.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Changelog-->
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


