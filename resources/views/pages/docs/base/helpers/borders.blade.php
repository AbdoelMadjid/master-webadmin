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
                            Metronic extends <a href="https://getbootstrap.com/docs/5.2/utilities/borders/"
                                class="fw-semibold">Bootstrap Borders</a>&nbsp;
                            in <code>src/sass/components/helpers/_borders.scss</code> to provide additional border
                            utility classes to cover its own design system.
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="border-styles" data-kt-scroll-offset="50">
                            <a href="#border-styles"></a>

                            Border Styles
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.border-dashed</code> or <code>.border-dotted</code> classes to set an
                            element's border style.
                            For border directions use <code>.border-{direction}-dashed</code> or
                            <code>.border-{direction}-dotted</code> classes format.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            Where <code>direction</code> is one of:
                            <ul class="pt-3">
                                <li class="py-2"><code>top</code> - for classes that set border top style</li>
                                <li class="py-2"><code>bottom</code> - for classes that set border bottom style
                                </li>
                                <li class="py-2"><code>end</code> - for classes that set border right style</li>
                                <li class="py-2"><code>start</code> - for classes that set border start style</li>
                            </ul>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="d-flex flex-wrap align-items-center">
                                    <div class="border w-125px h-125px d-flex flex-center me-5 mb-5 fw-semibold">
                                        default style
                                    </div>

                                    <div
                                        class="border-gray-300 border-dotted w-125px h-125px d-flex flex-center me-5 mb-5 fw-semibold">
                                        .border-dotted
                                    </div>

                                    <div
                                        class="border-gray-300 border-dashed w-125px h-125px d-flex flex-center me-5 mb-5 fw-semibold">
                                        .border-dashed
                                    </div>

                                    <div
                                        class="border-gray-300 border-bottom-dashed w-125px h-125px d-flex flex-center me-5 mb-5 fw-semibold">
                                        .border-bottom-dashed
                                    </div>

                                    <div
                                        class="border-gray-300 border-end-dashed w-125px h-125px d-flex flex-center me-5 mb-5 fw-semibold">
                                        .border-end-dashed
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
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;border&quot;&gt;
    default style
&lt;/div&gt;
&lt;div class=&quot;border-gray-300 border-dotted&quot;&gt;
    .border-dotted
&lt;/div&gt;
&lt;div class=&quot;border-gray-300 border-dashed&quot;&gt;
    .border-dashed
&lt;/div&gt;
&lt;div class=&quot;border-gray-300 border-bottom-dashed&quot;&gt;
    .border-bottom-dashed
&lt;/div&gt;
&lt;div class=&quot;border-gray-300 border-end-dashed&quot;&gt;
    .border-end-dashed
&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="hover" data-kt-scroll-offset="50">
                            <a href="#hover"></a>

                            Hover State
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.border-hover</code> to display an element's border on hover.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="d-flex flex-wrap align-items-center">
                                    <div
                                        class="border border-hover w-125px h-125px  d-flex flex-center me-5 mb-5 fw-semibold">
                                        default
                                    </div>

                                    <div
                                        class="border border-gray-500 border-hover w-125px h-125px  d-flex flex-center me-5 mb-5 fw-semibold">
                                        gray-500
                                    </div>

                                    <div
                                        class="border border-primary border-hover w-125px h-125px  d-flex flex-center me-5 mb-5 fw-semibold">
                                        primary
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
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;border border-hover&quot;&gt;
    default
&lt;/div&gt;
&lt;div class=&quot;border border-gray-500 border-hover&quot;&gt;
    gray-500
&lt;/div&gt;
&lt;div class=&quot;border border-primary border-hover&quot;&gt;
    primary
&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="active" data-kt-scroll-offset="50">
                            <a href="#active"></a>

                            Active State
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.border-active</code> to display an element's border when <code>.active</code>
                            class applied.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="d-flex flex-wrap align-items-center">
                                    <div
                                        class="border border-active active w-125px h-125px  d-flex flex-center me-5 mb-5 fw-semibold">
                                        default
                                    </div>

                                    <div
                                        class="border border-gray-500 border-active active w-125px h-125px  d-flex flex-center me-5 mb-5 fw-semibold">
                                        gray-500
                                    </div>

                                    <div
                                        class="border border-primary border-active active w-125px h-125px  d-flex flex-center me-5 mb-5 fw-semibold">
                                        primary
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
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;border border-active active&quot;&gt;
    default
&lt;/div&gt;
&lt;div class=&quot;border border-gray-500 border-active active&quot;&gt;
    gray-500
&lt;/div&gt;
&lt;div class=&quot;border border-primary border-active active&quot;&gt;
    primary
&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="transparent" data-kt-scroll-offset="50">
                            <a href="#transparent"></a>

                            Transparent Border
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.border-transparent</code> to set an element's border color to tranparent.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="d-flex flex-wrap align-items-center">
                                    <div
                                        class="border border-transparent bg-light w-125px h-125px d-flex flex-center me-5 fw-semibold">
                                        tranparent<br />border
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
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;border border-transparent&quot;&gt;
    default
&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="border-gray-colors" data-kt-scroll-offset="50">
                            <a href="#border-gray-colors"></a>

                            Border Gray Colors
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.border-gray-{100, 200, 300, 400, 500, 600, 700, 800, 900}</code> to set an
                            element's border color.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="d-flex flex-wrap align-items-center">
                                    <div
                                        class="w-125px h-125px d-flex flex-center p-3 me-5 mb-5 fw-semibold border border-gray-100">
                                        .border-gray-100 </div>
                                    <div
                                        class="w-125px h-125px d-flex flex-center p-3 me-5 mb-5 fw-semibold border border-gray-200">
                                        .border-gray-200 </div>
                                    <div
                                        class="w-125px h-125px d-flex flex-center p-3 me-5 mb-5 fw-semibold border border-gray-300">
                                        .border-gray-300 </div>
                                    <div
                                        class="w-125px h-125px d-flex flex-center p-3 me-5 mb-5 fw-semibold border border-gray-400">
                                        .border-gray-400 </div>
                                    <div
                                        class="w-125px h-125px d-flex flex-center p-3 me-5 mb-5 fw-semibold border border-gray-500">
                                        .border-gray-500 </div>
                                    <div
                                        class="w-125px h-125px d-flex flex-center p-3 me-5 mb-5 fw-semibold border border-gray-600">
                                        .border-gray-600 </div>
                                    <div
                                        class="w-125px h-125px d-flex flex-center p-3 me-5 mb-5 fw-semibold border border-gray-700">
                                        .border-gray-700 </div>
                                    <div
                                        class="w-125px h-125px d-flex flex-center p-3 me-5 mb-5 fw-semibold border border-gray-800">
                                        .border-gray-800 </div>
                                    <div
                                        class="w-125px h-125px d-flex flex-center p-3 me-5 mb-5 fw-semibold border border-gray-900">
                                        .border-gray-900 </div>
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
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;border border-gray-100&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;border border-gray-200&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;border border-gray-300&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;border border-gray-400&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;border border-gray-500&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;border border-gray-600&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;border border-gray-700&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;border border-gray-800&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;border border-gray-900&quot;&gt;&lt;/div&gt;</code></pre>
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
                                <a href="#border-styles" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Border Styles</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#hover" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Hover State</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#active" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Active State</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#transparent" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Transparent Border</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#border-gray-colors" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Border Gray Colors</span>
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


