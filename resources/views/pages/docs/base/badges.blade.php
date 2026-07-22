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
                            Metronic customizes the <a href="https://getbootstrap.com/docs/5.2/components/badges/"
                                class="fw-semibold">Bootstrap Badges</a>&nbsp;
                            through the SASS variables in <code>src/sass/components/_variables.scss</code> and adds
                            additonal options in <code>src/sass/components/_badge</code>.
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
                            Use <code>.badge</code> with <code>.badge-{color}</code> classes to set a badge's style
                            defined with <code>$theme-colors</code> mapped in
                            <code>src/sass/components/_variables.scss</code>:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10 pb-0 d-flex flex-wrap">
                                <span class="badge badge-light me-10 mb-10">New</span>

                                <span class="badge badge-primary me-10 mb-10">New</span>

                                <span class="badge badge-secondary me-10 mb-10">New</span>

                                <span class="badge badge-success me-10 mb-10">New</span>

                                <span class="badge badge-info me-10 mb-10">New</span>

                                <span class="badge badge-warning me-10 mb-10">New</span>

                                <span class="badge badge-danger me-10 mb-10">New</span>

                                <span class="badge badge-dark me-10 mb-10">New</span>

                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;span class=&quot;badge badge-light&quot;&gt;New&lt;/span&gt;
&lt;span class=&quot;badge badge-primary&quot;&gt;New&lt;/span&gt;
&lt;span class=&quot;badge badge-secondary&quot;&gt;New&lt;/span&gt;
&lt;span class=&quot;badge badge-success&quot;&gt;New&lt;/span&gt;
&lt;span class=&quot;badge badge-info&quot;&gt;New&lt;/span&gt;
&lt;span class=&quot;badge badge-warning&quot;&gt;New&lt;/span&gt;
&lt;span class=&quot;badge badge-danger&quot;&gt;New&lt;/span&gt;
&lt;span class=&quot;badge badge-dark&quot;&gt;New&lt;/span&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="light-style" data-kt-scroll-offset="50">
                            <a href="#light-style"></a>

                            Light Style
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.badge</code> with <code>.badge-light-{color}</code> classes to set a badge's
                            light style
                            defined with <code>$theme-light-colors</code> mapped in
                            <code>src/sass/components/_variables.scss</code>:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10 pb-0 d-flex flex-wrap">
                                <span class="badge badge-light-primary me-10 mb-10">New</span>

                                <span class="badge badge-light-secondary me-10 mb-10">New</span>

                                <span class="badge badge-light-success me-10 mb-10">New</span>

                                <span class="badge badge-light-info me-10 mb-10">New</span>

                                <span class="badge badge-light-warning me-10 mb-10">New</span>

                                <span class="badge badge-light-danger me-10 mb-10">New</span>

                                <span class="badge badge-light-dark me-10 mb-10">New</span>

                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;span class=&quot;badge badge-light-primary&quot;&gt;New&lt;/span&gt;
&lt;span class=&quot;badge badge-light-secondary&quot;&gt;New&lt;/span&gt;
&lt;span class=&quot;badge badge-light-success&quot;&gt;New&lt;/span&gt;
&lt;span class=&quot;badge badge-light-info&quot;&gt;New&lt;/span&gt;
&lt;span class=&quot;badge badge-light-warning&quot;&gt;New&lt;/span&gt;
&lt;span class=&quot;badge badge-light-danger&quot;&gt;New&lt;/span&gt;
&lt;span class=&quot;badge badge-light-dark&quot;&gt;New&lt;/span&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="square-badge" data-kt-scroll-offset="50">
                            <a href="#square-badge"></a>

                            Square Badge
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.badge-square</code> class to use a badge with same width and height:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10 pb-0 d-flex flex-wrap align-items-center">
                                <span class="badge badge-square badge-light me-10 mb-10">5</span>

                                <span class="badge badge-square badge-primary me-10 mb-10">5</span>

                                <span class="badge badge-square badge-secondary me-10 mb-10">5</span>

                                <span class="badge badge-square badge-success me-10 mb-10">5</span>

                                <span class="badge badge-square badge-info me-10 mb-10">5</span>

                                <span class="badge badge-square badge-warning me-10 mb-10">5</span>

                                <span class="badge badge-square badge-danger me-10 mb-10">5</span>

                                <span class="badge badge-square badge-dark me-10 mb-10">5</span>

                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;span class=&quot;badge badge-square badge-light&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge badge-square badge-primary&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge badge-square badge-secondary&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge badge-square badge-success&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge badge-square badge-info&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge badge-square badge-warning&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge badge-square badge-danger&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge badge-square badge-dark&quot;&gt;5&lt;/span&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="circle-badge" data-kt-scroll-offset="50">
                            <a href="#circle-badge"></a>

                            Circle Badge
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.badge-circle</code> class to use a badge with circle style:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10 pb-0 d-flex flex-wrap align-items-center">
                                <span class="badge badge-circle badge-light me-10 mb-10">5</span>

                                <span class="badge badge-circle badge-primary me-10 mb-10">5</span>

                                <span class="badge badge-circle badge-secondary me-10 mb-10">5</span>

                                <span class="badge badge-circle badge-success me-10 mb-10">5</span>

                                <span class="badge badge-circle badge-info me-10 mb-10">5</span>

                                <span class="badge badge-circle badge-warning me-10 mb-10">5</span>

                                <span class="badge badge-circle badge-danger me-10 mb-10">5</span>

                                <span class="badge badge-circle badge-dark me-10 mb-10">5</span>

                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;span class=&quot;badge badge-circle badge-light&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge badge-circle badge-primary&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge badge-circle badge-secondary&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge badge-circle badge-success&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge badge-circle badge-info&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge badge-circle badge-warning&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge badge-circle badge-danger&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge badge-circle badge-dark&quot;&gt;5&lt;/span&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="outline-badge" data-kt-scroll-offset="50">
                            <a href="#outline-badge"></a>

                            Outline Badge
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.badge-outline</code> class to use a badge with circle style:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10 pb-0 d-flex flex-wrap align-items-center">
                                <span class="badge badge-circle badge-outline badge-primary border-2 me-10 mb-10">5</span>

                                <span
                                    class="badge badge-circle badge-outline badge-secondary border-2 me-10 mb-10">5</span>

                                <span class="badge badge-circle badge-outline badge-success border-2 me-10 mb-10">5</span>

                                <span class="badge badge-circle badge-outline badge-info border-2 me-10 mb-10">5</span>

                                <span class="badge badge-circle badge-outline badge-warning border-2 me-10 mb-10">5</span>

                                <span class="badge badge-circle badge-outline badge-danger border-2 me-10 mb-10">5</span>

                                <span class="badge badge-circle badge-outline badge-dark border-2 me-10 mb-10">5</span>

                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;span class=&quot;badge badge-circle badge-outline badge-primary&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge badge-circle badge-outline badge-secondary&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge badge-circle badge-outline badge-success&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge badge-circle badge-outline badge-info&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge badge-circle badge-outline badge-warning&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge badge-circle badge-outline badge-danger&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge badge-circle badge-outline badge-dark&quot;&gt;5&lt;/span&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="size-options" data-kt-scroll-offset="50">
                            <a href="#size-options"></a>

                            Size Options
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.badge-sm</code> or <code>.badge-lg</code> to change Badge size according to
                            the Bootstrap standards:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="d-flex gap-2">
                                    <span class="badge badge-primary badge-sm">New</span>
                                    <span class="badge badge-primary badge-circle badge-sm">3</span>
                                    <span class="badge badge-primary badge-square badge-sm">4</span>
                                </div>

                                <div class="separator separator-dashed my-5"></div>

                                <div class="d-flex gap-2">
                                    <span class="badge badge-primary badge">New</span>
                                    <span class="badge badge-primary badge-circle">3</span>
                                    <span class="badge badge-primary badge-square ">4</span>
                                </div>

                                <div class="separator separator-dashed my-5"></div>

                                <div class="d-flex gap-2">
                                    <span class="badge badge-primary badge-lg">New</span>
                                    <span class="badge badge-primary badge-circle badge-lg">3</span>
                                    <span class="badge badge-primary badge-square badge-lg">4</span>
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
                                    <pre class="language-html"><code class="language-html">&lt;span class=&quot;badge badge-primary badge-sm&quot;&gt;New&lt;/span&gt;
&lt;span class=&quot;badge badge-primary badge-circle badge-sm&quot;&gt;3&lt;/span&gt;
&lt;span class=&quot;badge badge-primary badge-square badge-sm&quot;&gt;4&lt;/span&gt;

&lt;span class=&quot;badge badge-primary badge&quot;&gt;New&lt;/span&gt;
&lt;span class=&quot;badge badge-primary badge-circle&quot;&gt;3&lt;/span&gt;
&lt;span class=&quot;badge badge-primary badge-square &quot;&gt;4&lt;/span&gt;

&lt;span class=&quot;badge badge-primary badge-lg&quot;&gt;New&lt;/span&gt;
&lt;span class=&quot;badge badge-primary badge-circle badge-lg&quot;&gt;3&lt;/span&gt;
&lt;span class=&quot;badge badge-primary badge-square badge-lg&quot;&gt;4&lt;/span&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="bootstrap-buttons" data-kt-scroll-offset="50">
                            <a href="#bootstrap-buttons"></a>

                            Bootstrap Buttons
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use a badge with <code>.badge-circle</code> class in a Bootstrap Button element:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <button class="btn btn-primary position-relative me-5">
                                    Button
                                    <span
                                        class="position-absolute top-0 start-0 translate-middle  badge badge-circle badge-danger">5</span>
                                </button>

                                <button class="btn btn-success position-relative me-5">
                                    Button
                                    <span
                                        class="position-absolute top-100 start-0 translate-middle  badge badge-circle badge-warning">5</span>
                                </button>

                                <button class="btn btn-danger position-relative me-5">
                                    Button
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle  badge badge-circle badge-primary">5</span>
                                </button>

                                <button class="btn btn-warning position-relative">
                                    Button
                                    <span
                                        class="position-absolute top-100 start-100 translate-middle  badge badge-circle badge-success">5</span>
                                </button>
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;button class=&quot;btn btn-primary position-relative me-5&quot;&gt;
    Button &lt;span class=&quot;position-absolute top-0 start-0 translate-middle  badge badge-circle badge-danger&quot;&gt;5&lt;/span&gt;
&lt;/button&gt;

&lt;button class=&quot;btn btn-success position-relative me-5&quot;&gt;
    Button &lt;span class=&quot;position-absolute top-100 start-0 translate-middle  badge badge-circle badge-warning&quot;&gt;5&lt;/span&gt;
&lt;/button&gt;

&lt;button class=&quot;btn btn-danger position-relative me-5&quot;&gt;
    Button &lt;span class=&quot;position-absolute top-0 start-100 translate-middle  badge badge-circle badge-primary&quot;&gt;5&lt;/span&gt;
&lt;/button&gt;

&lt;button class=&quot;btn btn-warning position-relative&quot;&gt;
    Button &lt;span class=&quot;position-absolute top-100 start-100 translate-middle  badge badge-circle badge-success&quot;&gt;5&lt;/span&gt;
&lt;/button&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="inside-button" data-kt-scroll-offset="50">
                            <a href="#inside-button"></a>

                            Inside Button
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use a badge with <code>.badge-circle</code> classes inside button:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <button class="btn btn-primary me-5">
                                    Notifications
                                    <span class="badge badge-circle badge-warning ms-2">5</span>
                                </button>

                                <button class="btn btn-success me-5">
                                    Messages
                                    <span class="badge badge-circle badge-danger ms-2">4</span>
                                </button>

                                <button class="btn btn-danger me-5">
                                    Orders
                                    <span class="badge badge-circle badge-primary ms-2">7</span>
                                </button>

                                <button class="btn btn-dark me-5">
                                    Profile
                                    <span class="badge badge-circle badge-success ms-2">3</span>
                                </button>
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;button class=&quot;btn btn-primary me-5&quot;&gt;
    Notifications &lt;span class=&quot;badge badge-circle badge-warning ms-2&quot;&gt;5&lt;/span&gt;
&lt;/button&gt;

&lt;button class=&quot;btn btn-success me-5&quot;&gt;
    Messages &lt;span class=&quot;badge badge-circle badge-danger ms-2&quot;&gt;4&lt;/span&gt;
&lt;/button&gt;

&lt;button class=&quot;btn btn-danger me-5&quot;&gt;
    Orders &lt;span class=&quot;badge badge-circle badge-primary ms-2&quot;&gt;4&lt;/span&gt;
&lt;/button&gt;

&lt;button class=&quot;btn btn-danger me-5&quot;&gt;
    Profile &lt;span class=&quot;badge badge-circle badge-success ms-2&quot;&gt;3&lt;/span&gt;
&lt;/button&gt;</code></pre>
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
                                <a href="#light-style" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Light Style</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#square-badge" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Square Badge</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#circle-badge" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Circle Badge</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#outline-badge" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Outline Badge</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#size-options" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Size Options</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#bootstrap-buttons" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Bootstrap Buttons</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#inside-button" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Inside Button</span>
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


