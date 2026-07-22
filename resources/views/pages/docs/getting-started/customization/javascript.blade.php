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
                        <h1 class="anchor fw-bold mb-5" id="overview" data-kt-scroll-offset="50">
                            <a href="#overview"></a>

                            Overview
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="pt-5">
                            Metronic exclusive components are written in Javascript without any jQuery dependency
                            in order to make it easier to integrate with SPA frameworks such as Angular, React and Vue.
                            However the Metronic HTML version stil uses jQuery as majority popular jQuery plugins are still
                            on demand.
                            During the build process the Javascript code from the source folder is minified and moved to the
                            assets folder.
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="global-initialization" data-kt-scroll-offset="50">
                            <a href="#global-initialization"></a>

                            Global Initialization
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            The core components and 3rd-party plugins global initialization is handled in
                            <code>src/js/components/_init.js</code>.
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="dynamic-initialization" data-kt-scroll-offset="50">
                            <a href="#dynamic-initialization"></a>

                            Components Initialization
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            All In-house components and 3rd-party plugins defined need to be initializated
                            for SPA(Single Page Application) or dynamic ajax pages.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <ul class="py-1">
                            <li class="py-2"><a href="/docs/general/drawer">KTDrawer</a></li>
                            <li class="py-2"><a href="/docs/general/menu/overview">KTMenu</a></li>
                            <li class="py-2"><a href="/docs/general/scroll">KTScroll</a></li>
                            <li class="py-2"><a href="/docs/general/sticky">KTSticky</a></li>
                            <li class="py-2"><a href="/docs/general/swapper">KTSwapper</a></li>
                            <li class="py-2"><a href="/docs/general/toggle">KTToggle</a></li>
                            <li class="py-2"><a href="/docs/general/scrolltop">KTScrolltop</a></li>
                            <li class="py-2"><a href="/docs/forms/dialer">KTDialer</a></li>
                            <li class="py-2"><a href="/docs/forms/image-input">KTImageInput</a></li>
                            <li class="py-2"><a href="/docs/forms/password-meter">KTPasswordMeter</a></li>

                            <li class="py-2"><a href="/docs/base/tooltips">Bootstrap Tooltips</a></li>
                            <li class="py-2"><a href="/docs/base/popovers">Bootstrap Popovers</a></li>
                            <li class="py-2"><a href="/docs/base/toasts">Bootstrap Toasts</a></li>
                            <li class="py-2"><a href="/docs/forms/select2">Select2</a></li>
                            <li class="py-2"><a href="/docs/forms/autosize">Autosize</a></li>
                            <li class="py-2"><a href="/docs/general/countup">CountUp</a></li>
                            <li class="py-2"><a href="/docs/general/tiny-slider/overview">Tiny Slider</a></li>
                            <li class="py-2"><a href="/docs/general/smooth-scroll">Smooth Scroll</a></li>
                        </ul>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-javascript"><code class="language-javascript">KTComponents.init();</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="layout-initialization" data-kt-scroll-offset="50">
                            <a href="#layout-initialization"></a>

                            Layout Initialization
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            The layout partials(e.g: Sidebar, Header, Search, Toolbar, etc) need to be initializated(if
                            defined)
                            for SPA(Single Page Application) or dynamic ajax pages.
                            Look for available layout classes in <code>src/js/layout</code> folder.
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-javascript"><code class="language-javascript">// Layout partials initialization
KTAppHeader.init();
KTAppSidebar.init();
KTAppSearch.init();</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->

                        <div class="pt-2 pb-5">
                            <!--begin::Information-->
                            <div class="d-flex align-items-center rounded py-5 px-5 bg-light-danger "><i
                                    class="ki-duotone ki-information-5 fs-3x text-danger me-5"><span
                                        class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-bold fs-6">
                                    For SPA(Single Page Application) or dynamic ajax pages the layout initializaiton
                                    should not be done on document content ready event
                                    <code>KTUtil.onDOMContentLoaded()</code> so the initializaiton should be moved to a
                                    relevant place instead.
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
                                <a href="#global-initialization" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Global Initialization</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#dynamic-initialization" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Components Initialization</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#layout-initialization" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Layout Initialization</span>
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


