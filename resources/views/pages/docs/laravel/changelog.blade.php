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

                    <!--begin::Changelog-->
                    <div class="accordion accordion-flush accordion-icon-toggle" id="kt_accordion">

                        <!--begin::Item-->
                        <div class="accordion-item mb-5">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex " data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_body_v8_3_1">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.3.1 - 26 June, 2025 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_3_1" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse show"
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2">Synchronize the latest HTML version update - <a
                                                    href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"
                                                    class="fw-bold" target="_blank">Changelog</a>.</li>
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
                                            <li class="py-2">Synchronize the latest HTML version update - <a
                                                    href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"
                                                    class="fw-bold" target="_blank">Changelog</a>.</li>
                                            <li class="py-2">Update Livewire to version 3.14.7.</li>
                                            <li class="py-2">Refactor mutation handling in livewire.esm.js.</li>
                                            <li class="py-2">Implement wire:current directive for active link
                                                highlighting.</li>
                                            <li class="py-2">Adjust related source maps and manifest for consistency.</li>
                                            <li class="py-2">Update composer.lock for package version upgrades.</li>
                                            <li class="py-2">Modify Livewire update route to be conditional based on the
                                                production environment.</li>
                                            <li class="py-2">Enhance drawer toggle condition in component logic.</li>
                                            <li class="py-2">Fix menu click behavior.</li>
                                            <li class="py-2">Adjust stepper functionality.</li>
                                            <li class="py-2">Modify SCSS for nav tabs and dark theme variables.</li>
                                            <li class="py-2">Remove deprecated button styles.</li>
                                            <li class="py-2">Update package dependencies.</li>
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
                                data-bs-target="#kt_accordion_body_v8_2_9">
                                <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-3"><span
                                            class="path1"></span><span class="path2"></span></i></span>
                                <h3 class="fs-2 text-gray-800 fw-bold mb-0 ms-4">
                                    Metronic v8.2.9 - 20 November, 2024 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_2_9" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2">Synchronize the latest HTML version update - <a
                                                    href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"
                                                    class="fw-bold" target="_blank">Changelog</a>.</li>
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
                                            <li class="py-2">Synchronize the latest HTML version update - <a
                                                    href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"
                                                    class="fw-bold" target="_blank">Changelog</a>.</li>
                                            <li class="py-2">Upgrade Laravel version 11</li>
                                            <li class="py-2">Upgrade Livewire version 3.5</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2">Livewire error when edit user management</li>
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
                                            <li class="py-2">Synchronize the latest HTML version update - <a
                                                    href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"
                                                    class="fw-bold" target="_blank">Changelog</a>.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
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
                                    Metronic v8.2.6 - 25 June, 2024 </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_body_v8_2_6" class="fs-6 mt-1 mb-1 py-0 ps-10 collapse "
                                data-bs-parent="#kt_accordion">
                                <div class="accordion-body ps-0 pt-0">
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2">Synchronize the latest HTML version update - <a
                                                    href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"
                                                    class="fw-bold" target="_blank">Changelog</a>.</li>
                                            <li class="py-2">Upgrade laravel v11</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2">Fixed datatable page buttons aligment</li>
                                            <li class="py-2">Fixed keenicons not displaying</li>
                                            <li class="py-2">Fixed JS error in datatable js file</li>
                                            <li class="py-2">Fixed tagify plugin file location and version update</li>
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
                                            <li class="py-2">Synchronize the latest HTML version update - <a
                                                    href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"
                                                    class="fw-bold" target="_blank">Changelog</a>.</li>
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
                                            <li class="py-2">Synchronize the latest HTML version update - <a
                                                    href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"
                                                    class="fw-bold" target="_blank">Changelog</a>.</li>
                                            <li class="py-2">Updates login page with specific error message</li>
                                            <li class="py-2">Updates datatable version and fix the file name</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2">Fixes webpack mix warning</li>
                                            <li class="py-2">Fixes missing theme mode dropdown</li>
                                            <li class="py-2">Fixes empty CRUD form when adding new user</li>
                                            <li class="py-2">Fixes redirection after signup</li>
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
                                            <li class="py-2">Synchronize the latest HTML version update - <a
                                                    href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"
                                                    class="fw-bold" target="_blank">Changelog</a>.</li>
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
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2">Synchronize the latest HTML version update - <a
                                                    href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"
                                                    class="fw-bold" target="_blank">Changelog</a>.</li>
                                            <li class="py-2">Upgrade Livewire v3</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
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
                                            <li class="py-2">Added missing view button to user management listing</li>
                                            <li class="py-2">Added email verification for signup</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2">Synchronize the latest HTML version update - <a
                                                    href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"
                                                    class="fw-bold" target="_blank">Changelog</a>.</li>
                                            <li class="py-2">Update gray text html class</li>
                                            <li class="py-2">Include backend API demo for Angular CRUD</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2">Fixed webpack issue with the latest version of draggable
                                                plugin.</li>
                                            <li class="py-2">Fixed webpack mix issue with latest draggable plugin issue
                                            </li>
                                            <li class="py-2">Fixed theme mode option</li>
                                            <li class="py-2">Fixed redirect links</li>
                                            <li class="py-2">Fixed remove uploaded image in user management</li>
                                            <li class="py-2">Fixed uploaded image URL in user management</li>
                                            <li class="py-2">Fixed aside menu collapse state</li>
                                            <li class="py-2">Fixed page breadcrumbs generator</li>
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
                                            <li class="py-2">Synchronize the latest HTML version core assets update - <a
                                                    href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"
                                                    class="fw-bold" target="_blank">Changelog</a>.</li>
                                            <li class="py-2">Improve User, Roles, and Permissions Management CRUD and
                                                datatables.</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2">Fix webpack mix build NULL error on Windows.</li>
                                            <li class="py-2"><code>KeenIcons</code> Rendering issue on Mac Safari</li>
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
                                            <li class="py-2">Add new Roles management CRUD</li>
                                            <li class="py-2">Add new Permissions management CRUD</li>
                                            <li class="py-2">Add new User management CRUD - datatable list, create, edit,
                                                update, delete</li>
                                            <li class="py-2">Add new User authentication - login, register, reset
                                                password</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2">Synchronize the latest HTML version update - <a
                                                    href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"
                                                    class="fw-bold" target="_blank">Changelog</a>.</li>
                                            <li class="py-2">Update header layout</li>
                                            <li class="py-2">Update FormValidation webpack build</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2">Fix Typed.js plugin error in webpack</li>
                                            <li class="py-2">Fix RTL to enable by config</li>
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
                                            <li class="py-2">Global Icons Migration to Keenicons - <a
                                                    href="https://docs.google.com/spreadsheets/d/1qwrKmX-2i_mRr_JkAbEVQTdbUiZg85-hEM89sSXatf8/edit#gid=0"
                                                    class="fw-bold" target="_blank">Changelog</a>.</li>
                                            <li class="py-2">Store sidebar minimized state in cookies.</li>
                                            <li class="py-2">Add new function <code>removeHtmlClass($scope,
                                                    $value)</code> to remove existing class in the list.</li>
                                            <li class="py-2">Add new icon <code>keenicons</code>.</li>
                                            <li class="py-2">Add new function to get icon <code>getIcon($name, $class,
                                                    $type)</code></li>
                                            <li class="py-2">Add a date picker plugin <code>Tempus Dominus</code></li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2">Synchronize the latest HTML version update - <a
                                                    href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"
                                                    class="fw-bold" target="_blank">Changelog</a>.</li>
                                            <li class="py-2">Upgrade Laravel version 10</li>
                                            <li class="py-2">Move <code>search</code> component folder into layout
                                                folder.</li>
                                            <li class="py-2">Update <code>addHtmlClass($scope, $value)</code> to append
                                                new class instead of replacing existing class list.</li>
                                            <li class="py-2">Add feature to keep sidebar state cookie</li>
                                            <li class="py-2">Exclude encrypt cookies for sidebar state</li>
                                            <li class="py-2">Move global search to local layout search folder
                                                (sidebar-layout / header-layout)</li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2">Remove broken href HTML links.</li>
                                            <li class="py-2">Fix missing token in the reset new password page.
                                                <code>$request->input('token')</code>
                                            </li>
                                            <li class="py-2">Fix registration page</li>
                                            <li class="py-2">Fix missing <code>app-blank</code> class to the error page.
                                            </li>
                                            <li class="py-2">Fix missing <code>app-auth</code> class to the auth page.
                                            </li>
                                            <li class="py-2">Fix missing required body class <code>app-default</code>.
                                            </li>
                                            <li class="py-2">Fix <code>&lt;?</code> in the blade HTML file.</li>
                                            <li class="py-2">Fix sidebar animating behaviour.</li>
                                            <li class="py-2">Fix <code>typed.js</code> version issue when build using
                                                webpack</li>
                                            <li class="py-2">Fix missing fix tempus-dominus</li>
                                            <li class="py-2">Fix function addHtmlClass() to append classes instead of
                                                replacing it</li>
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
                                        <h3 class="fs-6 fw-bold mb-1">Update:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2">Synchronize the base version update - <a
                                                    href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"
                                                    class="fw-bold" target="_blank">Changelog</a>.</li>
                                            <li class="py-2">Globally change <code>data-theme</code> HTML attribute to
                                                <code>data-bs-theme</code>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="fs-6 fw-bold mb-1">Fix:</h3>
                                        <ul class="my-0 py-0">
                                            <li class="py-2">Fix select2 style and include missing demo custom plugin
                                                scss file.</li>
                                            <li class="py-2">Fix components.scss file of broken <code>stepper</code>
                                                style.</li>
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
                                            <li class="py-2">Initial release</li>
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


