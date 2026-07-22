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
                            <b>Typed.js</b>&nbsp;is a library that types. Enter in any string, and watch it type at the
                            speed you've set, backspace what it's typed, and begin a new sentence for however many strings
                            you've set.

                            For more info see <a href="https://mattboldt.com/demos/typed-js/" class="fw-bold me-1">the
                                official site</a>and <a class="fw-bold" href="https://github.com/mattboldt/typed.js">the
                                Github repository</a>.
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
                            <b>Typed.js's</b>&nbsp; Javascript files are bundled in a custom bundle file and included on
                            demand as shown below:
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;script src=&quot;assets/plugins/custom/typedjs/typedjs.bundle.js&quot;&gt;&lt;/script&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="pt-10">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="basic">
                            <a href="#basic"></a>
                            Basic Example
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            A basic <b>Typed.js</b>&nbsp; example with text options to auto type with typing speed:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <!--begin::Wrapper-->
                            <div class="rounded border p-10 p-lg-20">
                                <span id="kt_typedjs_example_1" class="fs-1 fw-bold"></span>
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e5c0e7b53ee" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e5c0e7b53f2" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5c0e7b53ee" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript"><code class="language-javascript">var typed = new Typed(&quot;#kt_typedjs_example_1&quot;, {
    strings: [&quot;First sentence.&quot;, &quot;Second sentence.&quot;, &quot;Third sentense&quot;, &quot;And some longer sentence&quot;],
    typeSpeed: 30
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e5c0e7b53f2" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;span id=&quot;kt_typedjs_example_1&quot; class=&quot;fs-1 fw-bold&quot;&gt;&lt;/span&gt;</code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
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
    <script src="{{ asset('assets/plugins/custom/typedjs/typedjs.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/documentation/general/typed.js') }}"></script>
    <!--end::Vendors Javascript-->
@endsection


