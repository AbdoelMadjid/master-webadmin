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
                    <div id="top"></div>

                    <!--begin::Section-->
                    <div class="pb-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="overview" data-kt-scroll-offset="50">
                            <a href="#overview"></a>

                            Overview
                        </h1>
                        <!--end::Heading-->



                        <!--begin::Block-->
                        <div class="py-5">
                            <strong class="me-1">Smooth Scroll</strong> is a lightweight script to animate scrolling to
                            anchor links. For more info please visit the <a
                                href="https://github.com/cferdinandi/smooth-scroll" target="_blank">plugin's site</a>.
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="usage" data-kt-scroll-offset="50">
                            <a href="#usage"></a>

                            Usage
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            <strong>Smooth Scroll</strong>'s Javascript files are bundled in the global scripts bundles and
                            are globally included in all pages:
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
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="initialization" data-kt-scroll-offset="50">
                            <a href="#initialization"></a>

                            Initialization
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            <ul class="py-0">
                                <li class="py-2">
                                    Smooth Scroll's Javascript is globally initialized with our <code>KTApp</code> wrapper
                                    defined in <code>src/js/components/app.js</code>.
                                </li>
                                <li class="py-2">
                                    To include Smooth Scroll into your project, you need to include a HTML attribute
                                    <code>data-kt-scroll-toggle</code> within the <code>a</code> element with a
                                    <code>href</code> set with a hastag <code>#</code>. For more options available, such as
                                    <code>offset</code> parameters, please refer to the initialization definition in
                                    <code>src/js/components/app.js</code>.
                                </li>
                                <li class="pt-2">
                                    For more information on Smooth Scroll's other options, please refer to the official <a
                                        href="https://github.com/cferdinandi/smooth-scroll" target="_blank">plugin site</a>.
                                </li>
                            </ul>
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="basic" data-kt-scroll-offset="50">
                            <a href="#basic"></a>

                            Basic
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Click on the button below to scroll to the top without any offset.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <a href="#top" class="btn btn-primary" data-kt-scroll-toggle>Scroll to Top</a>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;a href=&quot;#top&quot; class=&quot;btn btn-primary&quot; data-kt-scroll-toggle&gt;Scroll to Top&lt;/a&gt;

&lt;div id=&quot;top&quot;&gt;
    ...
&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="offset" data-kt-scroll-offset="50">
                            <a href="#offset"></a>

                            Offset
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Click on the button below to scroll to "Usage" with offset. Add the HTML attribute
                            <code>data-kt-scroll-offset</code> with the offset value in <code>px</code> to the anchor
                            element.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <a href="#usage" class="btn btn-primary" data-kt-scroll-toggle>Scroll to Usage</a>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;a href=&quot;#usage&quot; class=&quot;btn btn-primary&quot; data-kt-scroll-toggle&gt;Scroll to Usage&lt;/a&gt;

&lt;div id=&quot;usage&quot; data-kt-scroll-offset=&quot;85&quot;&gt;
    ...
&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--begin::Section-->
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="responsive" data-kt-scroll-offset="50">
                            <a href="#responsive"></a>

                            Responsive
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Click on the button below to scroll to "Initialization" with a responsive offset. Add the HTML
                            attribute <code>data-kt-scroll-offset</code> with the offset value in <code>px</code> to the
                            anchor element. The responsive values follows the standard Bootstrap breakpoints where
                            <code>default</code> represents the base size and moves up with <code>sm</code>,
                            <code>md</code>, <code>lg</code> or <code>xl</code>.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <a href="#initialization" class="btn btn-primary" data-kt-scroll-toggle>Scroll to
                                Initialization</a>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;a href=&quot;#initialization&quot; class=&quot;btn btn-primary&quot; data-kt-scroll-toggle&gt;Scroll to Usage&lt;/a&gt;

&lt;div id=&quot;initialization&quot; data-kt-scroll-offset=&quot;{default: 75, lg: 85}&quot;&gt;
    ...
&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
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
                                <a href="#usage" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Usage</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#initialization" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Initialization</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#basic" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Basic</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#offset" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Offset</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#responsive" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Responsive</span>
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


