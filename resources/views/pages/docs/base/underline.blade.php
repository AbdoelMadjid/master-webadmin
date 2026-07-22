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
                            Underline is a set of grouped Bootstrap5 components to include a modern stylised
                            underline for text or labels.
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="basic" data-kt-scroll-offset="50">
                            <a href="#basic"></a>

                            Basic
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            This underline comes in 3 parts:
                            <ol class="py-2">
                                <li class="py-2">The wrapper</li>
                                <li class="py-2">The label</li>
                                <li class="py-2">The line</li>
                            </ol>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Underline-->
                                <span class="d-inline-block position-relative ms-2">
                                    <!--begin::Label-->
                                    <span class="d-inline-block mb-2 fs-2tx fw-bold text-gray-900">
                                        Sample Text
                                    </span>
                                    <!--end::Label-->

                                    <!--begin::Line-->
                                    <span
                                        class="d-inline-block position-absolute h-8px bottom-0 end-0 start-0 bg-success translate rounded"></span>
                                    <!--end::Line-->
                                </span>
                                <!--end::Underline-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;!--begin::Underline--&gt;
&lt;span class=&quot;d-inline-block position-relative ms-2&quot;&gt;
    &lt;!--begin::Label--&gt;
    &lt;span class=&quot;d-inline-block mb-2 fs-2tx fw-bold&quot;&gt;
        Sample Text
    &lt;/span&gt;
    &lt;!--end::Label--&gt;

    &lt;!--begin::Line--&gt;
    &lt;span class=&quot;d-inline-block position-absolute h-8px bottom-0 end-0 start-0 bg-success translate rounded&quot;&gt;&lt;/span&gt;
    &lt;!--end::Line--&gt;
&lt;/span&gt;
&lt;!--end::Underline--&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="sizes" data-kt-scroll-offset="50">
                            <a href="#sizes"></a>

                            Sizes
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Modify the <code>h-8px</code> CSS class within the Line element to adjust the
                            underline's thickness.
                        </div>
                        <!--end::Block-->


                        <!--begin::Block-->
                        <div class="py-5">

                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="d-flex gap-5 flex-wrap rounded border p-10">
                                <!--begin::Underline-->
                                <span class="d-inline-block position-relative">
                                    <!--begin::Label-->
                                    <span class="d-inline-block mb-2 fs-2tx fw-bold text-gray-900">
                                        Sample Text
                                    </span>
                                    <!--end::Label-->

                                    <!--begin::Line-->
                                    <span
                                        class="d-inline-block position-absolute h-3px bottom-0 end-0 start-0 bg-success translate rounded"></span>
                                    <!--end::Line-->
                                </span>
                                <!--end::Underline-->

                                <!--begin::Underline-->
                                <span class="d-inline-block position-relative">
                                    <!--begin::Label-->
                                    <span class="d-inline-block mb-2 fs-2tx fw-bold text-gray-900">
                                        Sample Text
                                    </span>
                                    <!--end::Label-->

                                    <!--begin::Line-->
                                    <span
                                        class="d-inline-block position-absolute h-10px bottom-0 end-0 start-0 bg-success translate rounded"></span>
                                    <!--end::Line-->
                                </span>
                                <!--end::Underline-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;!--begin::Underline--&gt;
&lt;span class=&quot;d-inline-block position-relative ms-2&quot;&gt;
    &lt;!--begin::Label--&gt;
    &lt;span class=&quot;d-inline-block mb-2 fs-2tx fw-bold&quot;&gt;
        Sample Text
    &lt;/span&gt;
    &lt;!--end::Label--&gt;

    &lt;!--begin::Line--&gt;
    &lt;span class=&quot;d-inline-block position-absolute h-3px bottom-0 end-0 start-0 bg-success translate rounded&quot;&gt;&lt;/span&gt;
    &lt;!--end::Line--&gt;
&lt;/span&gt;
&lt;!--end::Underline--&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="colors" data-kt-scroll-offset="50">
                            <a href="#colors"></a>

                            Colors
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Modify the <code>.bg-success</code> CSS class within the Line element to change the
                            line's color.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Row-->
                                <div class="d-flex">
                                    <!--begin::Underline-->
                                    <span class="d-flex position-relative me-10">
                                        <!--begin::Label-->
                                        <span class="d-inline-block mb-2 fs-2x fw-bold text-gray-900">
                                            Primary </span>
                                        <!--end::Label-->

                                        <!--begin::Line-->
                                        <span
                                            class="d-inline-block position-absolute h-8px bottom-0 end-0 start-0 bg-primary translate rounded"></span>
                                        <!--end::Line-->
                                    </span>
                                    <!--end::Underline-->
                                    <!--begin::Underline-->
                                    <span class="d-flex position-relative me-10">
                                        <!--begin::Label-->
                                        <span class="d-inline-block mb-2 fs-2x fw-bold text-gray-900">
                                            Secondary </span>
                                        <!--end::Label-->

                                        <!--begin::Line-->
                                        <span
                                            class="d-inline-block position-absolute h-8px bottom-0 end-0 start-0 bg-secondary translate rounded"></span>
                                        <!--end::Line-->
                                    </span>
                                    <!--end::Underline-->
                                    <!--begin::Underline-->
                                    <span class="d-flex position-relative me-10">
                                        <!--begin::Label-->
                                        <span class="d-inline-block mb-2 fs-2x fw-bold text-gray-900">
                                            Success </span>
                                        <!--end::Label-->

                                        <!--begin::Line-->
                                        <span
                                            class="d-inline-block position-absolute h-8px bottom-0 end-0 start-0 bg-success translate rounded"></span>
                                        <!--end::Line-->
                                    </span>
                                    <!--end::Underline-->
                                    <!--begin::Underline-->
                                    <span class="d-flex position-relative me-10">
                                        <!--begin::Label-->
                                        <span class="d-inline-block mb-2 fs-2x fw-bold text-gray-900">
                                            Warning </span>
                                        <!--end::Label-->

                                        <!--begin::Line-->
                                        <span
                                            class="d-inline-block position-absolute h-8px bottom-0 end-0 start-0 bg-warning translate rounded"></span>
                                        <!--end::Line-->
                                    </span>
                                    <!--end::Underline-->
                                    <!--begin::Underline-->
                                    <span class="d-flex position-relative me-10">
                                        <!--begin::Label-->
                                        <span class="d-inline-block mb-2 fs-2x fw-bold text-gray-900">
                                            Danger </span>
                                        <!--end::Label-->

                                        <!--begin::Line-->
                                        <span
                                            class="d-inline-block position-absolute h-8px bottom-0 end-0 start-0 bg-danger translate rounded"></span>
                                        <!--end::Line-->
                                    </span>
                                    <!--end::Underline-->
                                    <!--begin::Underline-->
                                    <span class="d-flex position-relative me-10">
                                        <!--begin::Label-->
                                        <span class="d-inline-block mb-2 fs-2x fw-bold text-gray-900">
                                            Info </span>
                                        <!--end::Label-->

                                        <!--begin::Line-->
                                        <span
                                            class="d-inline-block position-absolute h-8px bottom-0 end-0 start-0 bg-info translate rounded"></span>
                                        <!--end::Line-->
                                    </span>
                                    <!--end::Underline-->
                                </div>
                                <!--end::Row-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;!--begin::Underline--&gt;
&lt;span class=&quot;d-flex position-relative&quot;&gt;
    &lt;!--begin::Label--&gt;
    &lt;span class=&quot;d-inline-block mb-2 fs-2x fw-bold text-gray-900&quot;&gt;
        Sample Text
    &lt;/span&gt;
    &lt;!--end::Label--&gt;

    &lt;!--begin::Line--&gt;
    &lt;span class=&quot;d-inline-block position-absolute h-8px bottom-0 end-0 start-0 bg-primary translate rounded&quot;&gt;&lt;/span&gt;
    &lt;!--end::Line--&gt;
&lt;/span&gt;
&lt;!--end::Underline--&gt;</code></pre>
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
                                <a href="#sizes" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Sizes</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#colors" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Colors</span>
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


