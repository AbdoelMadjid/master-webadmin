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
                    <!--begin::Notice-->
                    <div class="d-flex align-items-center rounded py-5 px-4 bg-light-info "> <!--begin::Icon-->
                        <div class="d-flex h-80px w-80px flex-shrink-0 flex-center position-relative ms-3 me-6"> <svg
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                class="text-primary h-80px w-80px position-absolute opacity-5">
                                <path fill="currentColor"
                                    d="M10.2,21.23,4.91,18.17a3.58,3.58,0,0,1-1.8-3.11V8.94a3.58,3.58,0,0,1,1.8-3.11L10.2,2.77a3.62,3.62,0,0,1,3.6,0l5.29,3.06a3.58,3.58,0,0,1,1.8,3.11v6.12a3.58,3.58,0,0,1-1.8,3.11L13.8,21.23A3.62,3.62,0,0,1,10.2,21.23Z" />
                            </svg> <i class="ki-duotone ki-design-frame fs-3x text-info  position-absolute"><span
                                    class="path1"></span><span class="path2"></span></i> </div> <!--end::Icon-->
                        <!--begin::Description-->
                        <div class="text-gray-700 fw-bold fs-6 lh-lg">
                            Tiny Slider is an all purpose slider inspired by Owl Carousel. For more info please visit the
                            plugin's <a class="me-1" href="http://ganlanyuan.github.io/tiny-slider/demo/"
                                target="_blank">Home</a> or <a href="https://github.com/ganlanyuan/tiny-slider"
                                target="_blank">Github Repo</a>.
                        </div> <!--end::Description-->
                    </div><!--end::Notice-->

                    <!--begin::Section-->
                    <div class="pt-10">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" data-kt-scroll-offset="85" id="basic">
                            <a href="#basic" data-kt-scroll-toggle></a>
                            Basic Example
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="mb-3">
                                Here's a basic Tiny Slider example. For more info, please visit the <a
                                    href="http://ganlanyuan.github.io/tiny-slider/demo/" target="_blank">official
                                    website</a>.
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-5 p-lg-15">
                                <div class="tns" style="direction: ltr">
                                    <div data-tns="true" data-tns-nav-position="bottom" data-tns-mouse-drag="true"
                                        data-tns-controls="false">
                                        <!--begin::Item-->
                                        <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                                            <img src="assets/media/stock/600x400/img-1.jpg" class="card-rounded mw-100"
                                                alt="" />
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                                            <img src="assets/media/stock/600x400/img-2.jpg" class="card-rounded mw-100"
                                                alt="" />
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                                            <img src="assets/media/stock/600x400/img-3.jpg" class="card-rounded mw-100"
                                                alt="" />
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                                            <img src="assets/media/stock/600x400/img-4.jpg" class="card-rounded mw-100"
                                                alt="" />
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                                            <img src="assets/media/stock/600x400/img-5.jpg" class="card-rounded mw-100"
                                                alt="" />
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                                            <img src="assets/media/stock/600x400/img-6.jpg" class="card-rounded mw-100"
                                                alt="" />
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e5d632e1d07" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5d632e1d07" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;div class=&quot;tns&quot; style=&quot;direction: ltr&quot;&gt;
    &lt;div data-tns=&quot;true&quot; data-tns-nav-position=&quot;bottom&quot; data-tns-mouse-drag=&quot;true&quot; data-tns-controls=&quot;false&quot;&gt;
        &lt;!--begin::Item--&gt;
        &lt;div class=&quot;text-center px-5 pt-5 pt-lg-10 px-lg-10&quot;&gt;
            &lt;img src=&quot;assets/media/stock/600x400/img-1.jpg&quot; class=&quot;card-rounded shadow mw-100&quot; alt=&quot;&quot; /&gt;
        &lt;/div&gt;
        &lt;!--end::Item--&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->

                        <div class="pt-5">
                            <!--begin::Information-->
                            <div class="d-flex align-items-center rounded py-5 px-5 bg-light-warning "><i
                                    class="ki-duotone ki-information-5 fs-3x text-warning me-5"><span
                                        class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-bold fs-6">
                                    Tine Slider does not support the RTL mode and as a workaround
                                    <code>style="direction: ltr"></code>
                                    can be used for RTL sites as per <a
                                        href="https://github.com/ganlanyuan/tiny-slider/issues/225">Github Issue</a>.
                                </div> <!--end::Description-->
                            </div><!--end::Information-->
                        </div>
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


