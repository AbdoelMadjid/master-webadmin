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
                        <h1 class="anchor fw-bold mb-5" id="overview">
                            <a href="#overview"></a>
                            Overview
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <strong class="me-1">Toastr</strong> is a Javascript library for Gnome / Growl type
                            non-blocking notifications. For more info please visit the plugin's
                            <a class="me-1" href="https://codeseven.github.io/toastr/demo.html" target="_blank">Home</a>
                            or <a href="https://github.com/petekeller2/toastr" target="_blank">Github Repo</a>.
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="usage">
                            <a href="#usage"></a>
                            Usage
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <strong>Toastr</strong>'s CSS and Javascript files are bundled in the global style and scripts
                            bundles and are globally included in all pages:
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;link href=&quot;assets/plugins/global/plugins.bundle.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot;/&gt;
&lt;script src=&quot;assets/plugins/global/plugins.bundle.js&quot;&gt;&lt;/script&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="pt-10">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="form">
                            <a href="#form"></a>
                            Toastr Notifications Examples
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="card card-bordered">
                                <div class="card-body">
                                    <!--begin::Form-->
                                    <form class="form">
                                        <!--begin::Options-->
                                        <div class="row g-10">
                                            <div class="col-lg-6">
                                                <div class="form-group mb-5">
                                                    <label class="fw-bold mb-3">Title</label>
                                                    <input id="title" type="text" class="form-control"
                                                        placeholder="Enter a title ..." />
                                                </div>
                                                <div class="form-group mb-5">
                                                    <label class="fw-bold mb-3">Message</label>
                                                    <textarea id="message" class="form-control" rows="3" placeholder="Enter a message ..."></textarea>
                                                </div>
                                                <div class="form-group mb-5">
                                                    <div class="d-flex flex-column">
                                                        <div class="form-check form-check-custom form-check-solid mb-2">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="closeButton" />
                                                            <label class="form-check-label" for="closeButton">
                                                                Close Button
                                                            </label>
                                                        </div>

                                                        <div class="form-check form-check-custom form-check-solid mb-2">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="addBehaviorOnToastClick" />
                                                            <label class="form-check-label" for="addBehaviorOnToastClick">
                                                                Add behavior on toast click
                                                            </label>
                                                        </div>

                                                        <div class="form-check form-check-custom form-check-solid mb-2">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="debugInfo" />
                                                            <label class="form-check-label" for="debugInfo">
                                                                Debug
                                                            </label>
                                                        </div>

                                                        <div class="form-check form-check-custom form-check-solid mb-2">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="progressBar" />
                                                            <label class="form-check-label" for="progressBar">
                                                                Progress Bar
                                                            </label>
                                                        </div>

                                                        <div class="form-check form-check-custom form-check-solid mb-2">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="preventDuplicates" />
                                                            <label class="form-check-label" for="preventDuplicates">
                                                                Prevent Duplicates
                                                            </label>
                                                        </div>

                                                        <div class="form-check form-check-custom form-check-solid mb-2">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="addClear" />
                                                            <label class="form-check-label" for="addClear">
                                                                Add button to force clearing a toast, ignoring focus
                                                            </label>
                                                        </div>

                                                        <div class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="newestOnTop" />
                                                            <label class="form-check-label" for="newestOnTop">
                                                                Newest on top
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group mb-5">
                                                    <label class="fw-bold mb-3">Toast Type</label>
                                                    <div class="d-flex flex-column" id="toastTypeGroup">
                                                        <label
                                                            class="form-check form-check-custom form-check-solid form-check-sm mb-2">
                                                            <input class="form-check-input" type="radio"
                                                                value="success" name="toasts" checked />
                                                            <span class="form-check-label">
                                                                Success
                                                            </span>
                                                        </label>

                                                        <label
                                                            class="form-check form-check-custom form-check-solid form-check-sm mb-2">
                                                            <input class="form-check-input" type="radio" value="info"
                                                                name="toasts" />
                                                            <span class="form-check-label">
                                                                Info
                                                            </span>
                                                        </label>

                                                        <label
                                                            class="form-check form-check-custom form-check-solid form-check-sm mb-2">
                                                            <input class="form-check-input" type="radio"
                                                                value="warning" name="toasts" />
                                                            <span class="form-check-label">
                                                                Warning
                                                            </span>
                                                        </label>

                                                        <label
                                                            class="form-check form-check-custom form-check-solid form-check-sm">
                                                            <input class="form-check-input" type="radio" value="error"
                                                                name="toasts" />
                                                            <span class="form-check-label">
                                                                Error
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="fw-bold mb-3">Position</label>
                                                    <div class="d-flex flex-column" id="positionGroup">
                                                        <label
                                                            class="form-check form-check-custom form-check-solid form-check-sm mb-2">
                                                            <input class="form-check-input" type="radio"
                                                                value="toastr-top-right" name="positions" checked />
                                                            <span class="form-check-label">
                                                                Top Right
                                                            </span>
                                                        </label>

                                                        <label
                                                            class="form-check form-check-custom form-check-solid form-check-sm mb-2">
                                                            <input class="form-check-input" type="radio"
                                                                value="toastr-bottom-right" name="positions" />
                                                            <span class="form-check-label">
                                                                Bottom Right
                                                            </span>
                                                        </label>

                                                        <label
                                                            class="form-check form-check-custom form-check-solid form-check-sm mb-2">
                                                            <input class="form-check-input" type="radio"
                                                                value="toastr-bottom-left" name="positions" />
                                                            <span class="form-check-label">
                                                                Bottom Left
                                                            </span>
                                                        </label>

                                                        <label
                                                            class="form-check form-check-custom form-check-solid form-check-sm mb-2">
                                                            <input class="form-check-input" type="radio"
                                                                value="toastr-top-left" name="positions" />
                                                            <span class="form-check-label">
                                                                Top Left
                                                            </span>
                                                        </label>

                                                        <label
                                                            class="form-check form-check-custom form-check-solid form-check-sm mb-2">
                                                            <input class="form-check-input" type="radio"
                                                                value="toastr-top-full-width" name="positions" />
                                                            <span class="form-check-label">
                                                                Top Full Width
                                                            </span>
                                                        </label>

                                                        <label
                                                            class="form-check form-check-custom form-check-solid form-check-sm mb-2">
                                                            <input class="form-check-input" type="radio"
                                                                value="toastr-bottom-full-width" name="positions" />
                                                            <span class="form-check-label">
                                                                Bottom Full Width
                                                            </span>
                                                        </label>

                                                        <label
                                                            class="form-check form-check-custom form-check-solid form-check-sm mb-2">
                                                            <input class="form-check-input" type="radio"
                                                                value="toastr-top-center" name="positions" />
                                                            <span class="form-check-label">
                                                                Top Center
                                                            </span>
                                                        </label>

                                                        <label
                                                            class="form-check form-check-custom form-check-solid form-check-sm mb-2">
                                                            <input class="form-check-input" type="radio"
                                                                value="toastr-bottom-center" name="positions" />
                                                            <span class="form-check-label">
                                                                Bottom Center
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group mb-5">
                                                    <label class="fw-bold mb-3" for="showEasing">Show Easing</label>
                                                    <input id="showEasing" type="text" class="form-control mb-2"
                                                        placeholder="swing, linear" value="swing" />
                                                </div>
                                                <div class="form-group mb-5">
                                                    <label class="fw-bold mb-3" for="hideEasing">Hide Easing</label>
                                                    <input id="hideEasing" type="text" class="form-control mb-2"
                                                        placeholder="swing, linear" value="linear" />
                                                </div>
                                                <div class="form-group mb-5">
                                                    <label class="fw-bold mb-3" for="showMethod">Show Method</label>
                                                    <input id="showMethod" type="text" class="form-control mb-2"
                                                        placeholder="show, fadeIn, slideDown" value="fadeIn" />
                                                </div>
                                                <div class="form-group">
                                                    <label class="fw-bold mb-3" for="hideMethod">Hide Method</label>
                                                    <input id="hideMethod" type="text" class="form-control mb-2"
                                                        placeholder="hide, fadeOut, slideUp" value="fadeOut" />
                                                </div>
                                                <a href="http://www.gsgd.co.uk/sandbox/jquery/easing/" target="_blank"
                                                    class="font-weight-bold">See all easing options</a>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group mb-5">
                                                    <label class="fw-bold mb-3" for="showDuration">Show Duration</label>
                                                    <input id="showDuration" type="text" class="form-control"
                                                        placeholder="ms" value="300" />
                                                </div>
                                                <div class="form-group mb-5">
                                                    <label class="fw-bold mb-3" for="hideDuration">Hide Duration</label>
                                                    <input id="hideDuration" type="text" class="form-control"
                                                        placeholder="ms" value="1000" />
                                                </div>
                                                <div class="form-group mb-5">
                                                    <label class="fw-bold mb-3" for="timeOut">Time out</label>
                                                    <input id="timeOut" type="text" class="form-control"
                                                        placeholder="ms" value="5000" />
                                                </div>
                                                <div class="form-group">
                                                    <label class="fw-bold mb-3" for="extendedTimeOut">Extended time
                                                        out</label>
                                                    <input id="extendedTimeOut" class="form-control" type="text"
                                                        placeholder="ms" value="1000" />
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Options-->

                                        <!--begin::Code Preview-->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <div class="position-relative my-9">
                                                        <span
                                                            class="btn btn-icon btn-light btn-sm position-absolute top-0 end-0 m-2"
                                                            data-bs-toggle="tooltip" title="Copy code">
                                                            <i class="ki-duotone ki-copy fs-2"></i> </span>
                                                        <pre class="bg-light w-100 min-h-400px rounded p-5" id="toastrOptions"></pre>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Code Preview-->

                                        <!--begin::Actions-->
                                        <div class="d-flex">
                                            <a href="javascript:;" class="btn btn-primary my-1" id="showtoast">Show
                                                Toast</a>
                                            <a href="javascript:;" class="btn btn-light-primary my-1 mx-3"
                                                id="cleartoasts">Clear Toasts</a>
                                            <a href="javascript:;" class="btn btn-light-primary my-1"
                                                id="clearlasttoast">Clear Last Toast</a>
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                            </div>
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
    <script src="{{ asset('assets/js/custom/documentation/general/toastr.js') }}"></script>
    <!--end::Vendors Javascript-->
@endsection


