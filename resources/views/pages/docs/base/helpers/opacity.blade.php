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
                        <div class="py-5">
                            Metronic sets custom opacity classes in
                            <code>src/sass/components/helpers/_opacity.scss</code> and through a SASS variable
                            <code>$opacity-values</code> defined in <code>src/sass/components/_variables.scss</code>
                            to provide additional opacity utility classes to cover its own design system.
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="opacity" data-kt-scroll-offset="50">
                            <a href="#opacity"></a>

                            Opacity
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use the <code>.opacity-{ 0, 5, 10, 15 ,20, 25, 50, 75, 100 }</code> class to set an
                            element's opacity style.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="d-flex flex-wrap align-items-center">
                                    <div
                                        class="opacity-0 bg-primary text-white w-100px h-100px d-flex flex-center me-5 mb-5 fw-semibold">
                                        .opacity-0 </div>
                                    <div
                                        class="opacity-5 bg-primary text-white w-100px h-100px d-flex flex-center me-5 mb-5 fw-semibold">
                                        .opacity-5 </div>
                                    <div
                                        class="opacity-10 bg-primary text-white w-100px h-100px d-flex flex-center me-5 mb-5 fw-semibold">
                                        .opacity-10 </div>
                                    <div
                                        class="opacity-15 bg-primary text-white w-100px h-100px d-flex flex-center me-5 mb-5 fw-semibold">
                                        .opacity-15 </div>
                                    <div
                                        class="opacity-20 bg-primary text-white w-100px h-100px d-flex flex-center me-5 mb-5 fw-semibold">
                                        .opacity-20 </div>
                                    <div
                                        class="opacity-25 bg-primary text-white w-100px h-100px d-flex flex-center me-5 mb-5 fw-semibold">
                                        .opacity-25 </div>
                                    <div
                                        class="opacity-50 bg-primary text-white w-100px h-100px d-flex flex-center me-5 mb-5 fw-semibold">
                                        .opacity-50 </div>
                                    <div
                                        class="opacity-75 bg-primary text-white w-100px h-100px d-flex flex-center me-5 mb-5 fw-semibold">
                                        .opacity-75 </div>
                                    <div
                                        class="opacity-100 bg-primary text-white w-100px h-100px d-flex flex-center me-5 mb-5 fw-semibold">
                                        .opacity-100 </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;opacity-0&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;opacity-5&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;opacity-10&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;opacity-15&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;opacity-20&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;opacity-25&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;opacity-50&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;opacity-75&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;opacity-100&quot;&gt;&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="opacity-hover" data-kt-scroll-offset="50">
                            <a href="#opacity-hover"></a>

                            Opacity Hover Effects
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.opacity-{ 0, 5, 10, 15 ,20, 25, 50, 75, 100 }-hover</code> to display an
                            element's opacity on hover.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="d-flex flex-wrap align-items-center">
                                    <div
                                        class="opacity-0-hover bg-primary text-white w-100px h-100px d-flex flex-center p-3 me-5 mb-5 fw-semibold">
                                        .opacity-0-hover
                                    </div>
                                    <div
                                        class="opacity-5-hover bg-primary text-white w-100px h-100px d-flex flex-center p-3 me-5 mb-5 fw-semibold">
                                        .opacity-5-hover
                                    </div>
                                    <div
                                        class="opacity-10-hover bg-primary text-white w-100px h-100px d-flex flex-center p-3 me-5 mb-5 fw-semibold">
                                        .opacity-10-hover
                                    </div>
                                    <div
                                        class="opacity-15-hover bg-primary text-white w-100px h-100px d-flex flex-center p-3 me-5 mb-5 fw-semibold">
                                        .opacity-15-hover
                                    </div>
                                    <div
                                        class="opacity-20-hover bg-primary text-white w-100px h-100px d-flex flex-center p-3 me-5 mb-5 fw-semibold">
                                        .opacity-20-hover
                                    </div>
                                    <div
                                        class="opacity-25-hover bg-primary text-white w-100px h-100px d-flex flex-center p-3 me-5 mb-5 fw-semibold">
                                        .opacity-25-hover
                                    </div>
                                    <div
                                        class="opacity-50-hover bg-primary text-white w-100px h-100px d-flex flex-center p-3 me-5 mb-5 fw-semibold">
                                        .opacity-50-hover
                                    </div>
                                    <div
                                        class="opacity-75-hover bg-primary text-white w-100px h-100px d-flex flex-center p-3 me-5 mb-5 fw-semibold">
                                        .opacity-75-hover
                                    </div>
                                    <div
                                        class="opacity-100-hover bg-primary text-white w-100px h-100px d-flex flex-center p-3 me-5 mb-5 fw-semibold">
                                        .opacity-100-hover
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
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;opacity-0-hover&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;opacity-5-hover&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;opacity-10-hover&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;opacity-15-hover&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;opacity-20-hover&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;opacity-25-hover&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;opacity-50-hover&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;opacity-75-hover&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;opacity-100-hover&quot;&gt;&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="opacity-active" data-kt-scroll-offset="50">
                            <a href="#opacity-active"></a>

                            Opacity Active State
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.opacity-active-{ 0, 5, 10, 15 ,20, 25, 50, 75, 100 }</code> to set an
                            element's opacity on active states. Click on the demo below to trigger the active state.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="d-flex flex-wrap align-items-center nav">
                                    <div class="nav-link opacity-active-0 bg-primary text-white w-100px h-100px d-flex flex-center p-3 me-5 mb-5 fw-semibold"
                                        data-bs-toggle="tab">
                                        .opacity-active-0 </div>
                                    <div class="nav-link opacity-active-5 bg-primary text-white w-100px h-100px d-flex flex-center p-3 me-5 mb-5 fw-semibold"
                                        data-bs-toggle="tab">
                                        .opacity-active-5 </div>
                                    <div class="nav-link opacity-active-10 bg-primary text-white w-100px h-100px d-flex flex-center p-3 me-5 mb-5 fw-semibold"
                                        data-bs-toggle="tab">
                                        .opacity-active-10 </div>
                                    <div class="nav-link opacity-active-15 bg-primary text-white w-100px h-100px d-flex flex-center p-3 me-5 mb-5 fw-semibold"
                                        data-bs-toggle="tab">
                                        .opacity-active-15 </div>
                                    <div class="nav-link opacity-active-20 bg-primary text-white w-100px h-100px d-flex flex-center p-3 me-5 mb-5 fw-semibold"
                                        data-bs-toggle="tab">
                                        .opacity-active-20 </div>
                                    <div class="nav-link opacity-active-25 bg-primary text-white w-100px h-100px d-flex flex-center p-3 me-5 mb-5 fw-semibold"
                                        data-bs-toggle="tab">
                                        .opacity-active-25 </div>
                                    <div class="nav-link opacity-active-50 bg-primary text-white w-100px h-100px d-flex flex-center p-3 me-5 mb-5 fw-semibold"
                                        data-bs-toggle="tab">
                                        .opacity-active-50 </div>
                                    <div class="nav-link opacity-active-75 bg-primary text-white w-100px h-100px d-flex flex-center p-3 me-5 mb-5 fw-semibold"
                                        data-bs-toggle="tab">
                                        .opacity-active-75 </div>
                                    <div class="nav-link opacity-active-100 bg-primary text-white w-100px h-100px d-flex flex-center p-3 me-5 mb-5 fw-semibold"
                                        data-bs-toggle="tab">
                                        .opacity-active-100 </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="pt-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;opacity-active-0&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;opacity-active-5&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;opacity-active-10&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;opacity-active-15&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;opacity-active-20&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;opacity-active-25&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;opacity-active-50&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;opacity-active-75&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;opacity-active-100&quot;&gt;&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="opacity-state" data-kt-scroll-offset="50">
                            <a href="#opacity-state"></a>

                            Opacity Combined Active & Hover State
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.opacity-state-{ 0, 5, 10, 15 ,20, 25, 50, 75, 100 }</code> to set an
                            element's opacity on both active and hover states. Click on the demo below to trigger
                            the active state.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="d-flex flex-wrap align-items-center nav">
                                    <div class="nav-link opacity-state-0 bg-primary text-white w-100px h-100px d-flex flex-center p-3 me-5 mb-5 fw-semibold"
                                        data-bs-toggle="tab">
                                        .opacity-state-0 </div>
                                    <div class="nav-link opacity-state-5 bg-primary text-white w-100px h-100px d-flex flex-center p-3 me-5 mb-5 fw-semibold"
                                        data-bs-toggle="tab">
                                        .opacity-state-5 </div>
                                    <div class="nav-link opacity-state-10 bg-primary text-white w-100px h-100px d-flex flex-center p-3 me-5 mb-5 fw-semibold"
                                        data-bs-toggle="tab">
                                        .opacity-state-10 </div>
                                    <div class="nav-link opacity-state-15 bg-primary text-white w-100px h-100px d-flex flex-center p-3 me-5 mb-5 fw-semibold"
                                        data-bs-toggle="tab">
                                        .opacity-state-15 </div>
                                    <div class="nav-link opacity-state-20 bg-primary text-white w-100px h-100px d-flex flex-center p-3 me-5 mb-5 fw-semibold"
                                        data-bs-toggle="tab">
                                        .opacity-state-20 </div>
                                    <div class="nav-link opacity-state-25 bg-primary text-white w-100px h-100px d-flex flex-center p-3 me-5 mb-5 fw-semibold"
                                        data-bs-toggle="tab">
                                        .opacity-state-25 </div>
                                    <div class="nav-link opacity-state-50 bg-primary text-white w-100px h-100px d-flex flex-center p-3 me-5 mb-5 fw-semibold"
                                        data-bs-toggle="tab">
                                        .opacity-state-50 </div>
                                    <div class="nav-link opacity-state-75 bg-primary text-white w-100px h-100px d-flex flex-center p-3 me-5 mb-5 fw-semibold"
                                        data-bs-toggle="tab">
                                        .opacity-state-75 </div>
                                    <div class="nav-link opacity-state-100 bg-primary text-white w-100px h-100px d-flex flex-center p-3 me-5 mb-5 fw-semibold"
                                        data-bs-toggle="tab">
                                        .opacity-state-100 </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="pt-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;opacity-state-0&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;opacity-state-5&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;opacity-state-10&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;opacity-state-15&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;opacity-state-20&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;opacity-state-25&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;opacity-state-50&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;opacity-state-75&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;opacity-state-100&quot;&gt;&lt;/div&gt;</code></pre>
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
                                <a href="#opacity" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Opacity</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#opacity-hover" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Opacity Hover Effects</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#opacity-active" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Opacity Active State</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#opacity-state" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Opacity Combined Active & Hover State</span>
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


