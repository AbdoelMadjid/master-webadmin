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
                        <h1 class="anchor fw-bold mb-5" id="text-colors" data-kt-scroll-offset="50">
                            <a href="#text-colors"></a>

                            Text Colors
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use extended text helper classes defined in
                            <code>src/sass/components/helpers/_text.scss</code> for more advance use cases.
                            Colorize text with color utilities as shown
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <p class="text-white bg-gray-500 py-3 fw-semibold fw-6">.text-white</p>

                                <p class="text-primary  py-3 fw-semibold fw-6">.text-primary</p>

                                <p class="text-secondary  py-3 fw-semibold fw-6">.text-secondary</p>

                                <p class="text-light bg-gray-500 py-3 fw-semibold fw-6">.text-light</p>

                                <p class="text-success  py-3 fw-semibold fw-6">.text-success</p>

                                <p class="text-info  py-3 fw-semibold fw-6">.text-info</p>

                                <p class="text-warning  py-3 fw-semibold fw-6">.text-warning</p>

                                <p class="text-danger  py-3 fw-semibold fw-6">.text-danger</p>

                                <p class="text-dark  py-3 fw-semibold fw-6">.text-dark</p>

                                <p class="text-muted  py-3 fw-semibold fw-6">.text-muted</p>

                                <p class="text-gray-100 bg-gray-500 py-3 fw-semibold fw-6">.text-gray-100</p>

                                <p class="text-gray-200  py-3 fw-semibold fw-6">.text-gray-200</p>

                                <p class="text-gray-300  py-3 fw-semibold fw-6">.text-gray-300</p>

                                <p class="text-gray-400  py-3 fw-semibold fw-6">.text-gray-400</p>

                                <p class="text-gray-500  py-3 fw-semibold fw-6">.text-gray-500</p>

                                <p class="text-gray-600  py-3 fw-semibold fw-6">.text-gray-600</p>

                                <p class="text-gray-700  py-3 fw-semibold fw-6">.text-gray-700</p>

                                <p class="text-gray-800  py-3 fw-semibold fw-6">.text-gray-800</p>

                                <p class="text-gray-900  py-3 fw-semibold fw-6">.text-gray-900</p>

                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;text-white&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;text-primary&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;text-secondary&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;text-light&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;text-success&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;text-info&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;text-warning&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;text-danger&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;text-dark&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;text-muted&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;text-gray-100&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;text-gray-200&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;text-gray-300&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;text-gray-400&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;text-gray-500&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;text-gray-600&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;text-gray-700&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;text-gray-800&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;text-gray-900&quot;&gt;&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="light-colors" data-kt-scroll-offset="50">
                            <a href="#light-colors"></a>

                            Light Colors
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.text-light-{color}</code> class to set an element's light color defined with
                            <code>$theme-light-colors</code> in <code>sass/_variables.scss</code>:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <p class="text-light-primary bg-primary p-3 fw-semibold fw-6">.text-light-primary
                                </p>

                                <p class="text-light-secondary bg-secondary p-3 fw-semibold fw-6">
                                    .text-light-secondary</p>

                                <p class="text-light-success bg-success p-3 fw-semibold fw-6">.text-light-success
                                </p>

                                <p class="text-light-info bg-info p-3 fw-semibold fw-6">.text-light-info</p>

                                <p class="text-light-warning bg-warning p-3 fw-semibold fw-6">.text-light-warning
                                </p>

                                <p class="text-light-danger bg-danger p-3 fw-semibold fw-6">.text-light-danger</p>

                                <p class="text-light-dark bg-dark p-3 fw-semibold fw-6">.text-light-dark</p>

                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;text-light-primary bg-primary&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;text-light-secondary bg-secondary&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;text-light-success bg-success&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;text-light-info bg-info&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;text-light-warning bg-warning&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;text-light-danger bg-danger&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;text-light-dark bg-dark&quot;&gt;&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="inverse-colors" data-kt-scroll-offset="50">
                            <a href="#inverse-colors"></a>

                            Inverse Colors
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.text-inverse-{color}</code> class to set an element's inverse color defined
                            with <code>$theme-inverse-colors</code> in <code>sass/_variables.scss</code>:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <p class="text-inverse-primary bg-primary p-3 fw-semibold fw-6">.text-light-primary
                                </p>

                                <p class="text-inverse-secondary bg-secondary p-3 fw-semibold fw-6">
                                    .text-light-secondary</p>

                                <p class="text-inverse-light bg-light p-3 fw-semibold fw-6">.text-light-light</p>

                                <p class="text-inverse-success bg-success p-3 fw-semibold fw-6">.text-light-success
                                </p>

                                <p class="text-inverse-info bg-info p-3 fw-semibold fw-6">.text-light-info</p>

                                <p class="text-inverse-warning bg-warning p-3 fw-semibold fw-6">.text-light-warning
                                </p>

                                <p class="text-inverse-danger bg-danger p-3 fw-semibold fw-6">.text-light-danger</p>

                                <p class="text-inverse-dark bg-dark p-3 fw-semibold fw-6">.text-light-dark</p>

                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;text-inverse-primary bg-primary&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;text-inverse-secondary bg-secondary&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;text-inverse-light bg-light&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;text-inverse-success bg-success&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;text-inverse-info bg-info&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;text-inverse-warning bg-warning&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;text-inverse-danger bg-danger&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;text-inverse-dark bg-dark&quot;&gt;&lt;/div&gt;</code></pre>
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
                        <!--begin::Menu-->
                        <ul id="kt_sidebar_nav"
                            class="nav nav-flush menu menu-column menu-title-gray-700 menu-bullet-gray-300 menu-state-primary fw-semibold fs-6 mb-8">
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#text-colors" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Text Colors</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#light-colors" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Light Colors</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#inverse-colors" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Inverse Colors</span>
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


