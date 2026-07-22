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
                            Bullet is a custom component used with combination with other components to display a
                            pointer to an item in the list or navigation.
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
                            Use <code>.bullet</code> in a list or navigation items as a pointer:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="d-flex flex-column">
                                    <li class="d-flex align-items-center py-2">
                                        <span class="bullet me-5"></span> Item 1
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="bullet me-5"></span> Item 2
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="bullet me-5"></span> Item 3
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="bullet me-5"></span> Item 4
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="bullet me-5"></span> Item 5
                                    </li>
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
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;d-flex flex-column&quot;&gt;
    &lt;li class=&quot;d-flex align-items-center py-2&quot;&gt;
        &lt;span class=&quot;bullet me-5&quot;&gt;&lt;/span&gt; Item 1
    &lt;/li&gt;
    &lt;li class=&quot;d-flex align-items-center py-2&quot;&gt;
        &lt;span class=&quot;bullet me-5&quot;&gt;&lt;/span&gt; Item 2
    &lt;/li&gt;
    &lt;li class=&quot;d-flex align-items-center py-2&quot;&gt;
        &lt;span class=&quot;bullet me-5&quot;&gt;&lt;/span&gt; Item 3
    &lt;/li&gt;
    &lt;li class=&quot;d-flex align-items-center py-2&quot;&gt;
        &lt;span class=&quot;bullet me-5&quot;&gt;&lt;/span&gt; Item 4
    &lt;/li&gt;
    &lt;li class=&quot;d-flex align-items-center py-2&quot;&gt;
        &lt;span class=&quot;bullet me-5&quot;&gt;&lt;/span&gt; Item 5
    &lt;/li&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="colors" data-kt-scroll-offset="50">
                            <a href="#colors"></a>

                            Colors
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.bg-{color}</code> class to set a bullets background color:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="d-flex flex-column">

                                    <li class="d-flex align-items-center py-2">
                                        <span class="bullet bg-light me-5"></span> light
                                    </li>

                                    <li class="d-flex align-items-center py-2">
                                        <span class="bullet bg-primary me-5"></span> primary
                                    </li>

                                    <li class="d-flex align-items-center py-2">
                                        <span class="bullet bg-secondary me-5"></span> secondary
                                    </li>

                                    <li class="d-flex align-items-center py-2">
                                        <span class="bullet bg-success me-5"></span> success
                                    </li>

                                    <li class="d-flex align-items-center py-2">
                                        <span class="bullet bg-info me-5"></span> info
                                    </li>

                                    <li class="d-flex align-items-center py-2">
                                        <span class="bullet bg-warning me-5"></span> warning
                                    </li>

                                    <li class="d-flex align-items-center py-2">
                                        <span class="bullet bg-danger me-5"></span> danger
                                    </li>

                                    <li class="d-flex align-items-center py-2">
                                        <span class="bullet bg-dark me-5"></span> dark
                                    </li>


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
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;div class=&quot;d-flex flex-column&quot;&gt;
  &lt;li class=&quot;d-flex align-items-center py-2&quot;&gt;
      &lt;span class=&quot;bullet bg-light&quot;&gt;&lt;/span&gt; light
  &lt;/li&gt;
  &lt;li class=&quot;d-flex align-items-center py-2&quot;&gt;
      &lt;span class=&quot;bullet bg-primary&quot;&gt;&lt;/span&gt; primary
  &lt;/li&gt;
  &lt;li class=&quot;d-flex align-items-center py-2&quot;&gt;
      &lt;span class=&quot;bullet bg-secondary&quot;&gt;&lt;/span&gt; secondary
  &lt;/li&gt;
  &lt;li class=&quot;d-flex align-items-center py-2&quot;&gt;
      &lt;span class=&quot;bullet bg-success&quot;&gt;&lt;/span&gt; success
  &lt;/li&gt;
  &lt;li class=&quot;d-flex align-items-center py-2&quot;&gt;
      &lt;span class=&quot;bullet bg-info&quot;&gt;&lt;/span&gt; info
  &lt;/li&gt;
  &lt;li class=&quot;d-flex align-items-center py-2&quot;&gt;
      &lt;span class=&quot;bullet bg-warning&quot;&gt;&lt;/span&gt; warning
  &lt;/li&gt;
  &lt;li class=&quot;d-flex align-items-center py-2&quot;&gt;
      &lt;span class=&quot;bullet bg-danger&quot;&gt;&lt;/span&gt; danger
  &lt;/li&gt;
  &lt;li class=&quot;d-flex align-items-center py-2&quot;&gt;
      &lt;span class=&quot;bullet bg-dark&quot;&gt;&lt;/span&gt; dark
  &lt;/li&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="dot-style" data-kt-scroll-offset="50">
                            <a href="#dot-style"></a>

                            Dot Style
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.bullet-dot</code> to apply a dot style bullet:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="d-flex flex-column">
                                    <li class="d-flex align-items-center py-2">
                                        <span class="bullet bullet-dot me-5"></span> Item 1
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="bullet bullet-dot bg-danger me-5"></span> Item 2
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="bullet bullet-dot bg-success me-5"></span> Item 3
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="bullet bullet-dot bg-info me-5"></span> Item 4
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="bullet bullet-dot bg-primary me-5"></span> Item 5
                                    </li>
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
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;d-flex flex-column&quot;&gt;
    &lt;li class=&quot;d-flex align-items-center py-2&quot;&gt;
        &lt;span class=&quot;bullet bullet-dot me-5&quot;&gt;&lt;/span&gt; Item 1
    &lt;/li&gt;
    &lt;li class=&quot;d-flex align-items-center py-2&quot;&gt;
        &lt;span class=&quot;bullet bullet-dot bg-danger me-5&quot;&gt;&lt;/span&gt; Item 2
    &lt;/li&gt;
    &lt;li class=&quot;d-flex align-items-center py-2&quot;&gt;
        &lt;span class=&quot;bullet bullet-dot bg-success me-5&quot;&gt;&lt;/span&gt; Item 3
    &lt;/li&gt;
    &lt;li class=&quot;d-flex align-items-center py-2&quot;&gt;
        &lt;span class=&quot;bullet bullet-dot bg-info me-5&quot;&gt;&lt;/span&gt; Item 4
    &lt;/li&gt;
    &lt;li class=&quot;d-flex align-items-center py-2&quot;&gt;
        &lt;span class=&quot;bullet bullet-dot bg-primary me-5&quot;&gt;&lt;/span&gt; Item 5
    &lt;/li&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="vertical-style" data-kt-scroll-offset="50">
                            <a href="#vertical-style"></a>

                            Vertical Style
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.bullet-vertical</code> to apply vertical style bullet:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="d-flex flex-column">
                                    <li class="d-flex align-items-center py-2">
                                        <span class="bullet bullet-vertical me-5"></span> Item 1
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="bullet bullet-vertical bg-danger me-5"></span> Item 2
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="bullet bullet-vertical bg-success me-5"></span> Item 3
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="bullet bullet-vertical bg-info me-5"></span> Item 4
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="bullet bullet-vertical bg-primary me-5"></span> Item 5
                                    </li>
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
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;d-flex flex-column&quot;&gt;
    &lt;li class=&quot;d-flex align-items-center py-2&quot;&gt;
        &lt;span class=&quot;bullet bullet-vertical me-5&quot;&gt;&lt;/span&gt; Item 1
    &lt;/li&gt;
    &lt;li class=&quot;d-flex align-items-center py-2&quot;&gt;
        &lt;span class=&quot;bullet bullet-vertical bg-danger me-5&quot;&gt;&lt;/span&gt; Item 2
    &lt;/li&gt;
    &lt;li class=&quot;d-flex align-items-center py-2&quot;&gt;
        &lt;span class=&quot;bullet bullet-vertical bg-success me-5&quot;&gt;&lt;/span&gt; Item 3
    &lt;/li&gt;
    &lt;li class=&quot;d-flex align-items-center py-2&quot;&gt;
        &lt;span class=&quot;bullet bullet-vertical bg-info me-5&quot;&gt;&lt;/span&gt; Item 4
    &lt;/li&gt;
    &lt;li class=&quot;d-flex align-items-center py-2&quot;&gt;
        &lt;span class=&quot;bullet bullet-vertical bg-primary me-5&quot;&gt;&lt;/span&gt; Item 5
    &lt;/li&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="line-style" data-kt-scroll-offset="50">
                            <a href="#line-style"></a>

                            Line Style
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.bullet-line</code> to apply a line style bullet:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="d-flex flex-column">
                                    <li class="d-flex align-items-center py-2">
                                        <span class="bullet bullet-line me-5"></span> Item 1
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="bullet bullet-line bg-danger me-5"></span> Item 2
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="bullet bullet-line bg-success me-5"></span> Item 3
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="bullet bullet-line bg-info me-5"></span> Item 4
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="bullet bullet-line bg-primary me-5"></span> Item 5
                                    </li>
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
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;d-flex flex-column&quot;&gt;
    &lt;li class=&quot;d-flex align-items-center py-2&quot;&gt;
        &lt;span class=&quot;bullet bullet-line me-5&quot;&gt;&lt;/span&gt; Item 1
    &lt;/li&gt;
    &lt;li class=&quot;d-flex align-items-center py-2&quot;&gt;
        &lt;span class=&quot;bullet bullet-line bg-danger me-5&quot;&gt;&lt;/span&gt; Item 2
    &lt;/li&gt;
    &lt;li class=&quot;d-flex align-items-center py-2&quot;&gt;
        &lt;span class=&quot;bullet bullet-line bg-success me-5&quot;&gt;&lt;/span&gt; Item 3
    &lt;/li&gt;
    &lt;li class=&quot;d-flex align-items-center py-2&quot;&gt;
        &lt;span class=&quot;bullet bullet-line bg-info me-5&quot;&gt;&lt;/span&gt; Item 4
    &lt;/li&gt;
    &lt;li class=&quot;d-flex align-items-center py-2&quot;&gt;
        &lt;span class=&quot;bullet bullet-line bg-primary me-5&quot;&gt;&lt;/span&gt; Item 5
    &lt;/li&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="sizes" data-kt-scroll-offset="50">
                            <a href="#sizes"></a>

                            Sizes
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <a class="fw-semibold" href="/docs/base/utilities#width-and-height"
                                target="_blank">Custom Size Classes</a>&nbsp;
                            for bullets to set custom width and height:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10 d-flex flex-column flex-wrap">
                                <div class="d-flex gap-10">
                                    <div class="d-flex flex-column flex-center">
                                        <span class="bullet bg-primary h-15px w-25px mb-5"></span>
                                        .h-15px .w-25px
                                    </div>
                                    <div class="d-flex flex-column flex-center">
                                        <span class="bullet bg-primary h-20px w-30px mb-5"></span>
                                        .h-20px .w-30px
                                    </div>
                                    <div class="d-flex flex-column flex-center">
                                        <span class="bullet bg-primary h-30px w-50px mb-5"></span>
                                        .h-30px .w-50px
                                    </div>
                                </div>

                                <div class="separator my-10"></div>

                                <div class="d-flex gap-10">
                                    <div class="d-flex flex-column flex-center">
                                        <span class="bullet bullet-dot bg-primary h-15px w-15px mb-5"></span>
                                        .h-15px .w-15px
                                    </div>
                                    <div class="d-flex flex-column flex-center">
                                        <span class="bullet bullet-dot bg-primary h-20px w-20px mb-5"></span>
                                        .h-20px .w-20px
                                    </div>
                                    <div class="d-flex flex-column flex-center">
                                        <span class="bullet bullet-dot bg-primary h-30px w-30px mb-5"></span>
                                        .h-30px .w-30px
                                    </div>
                                </div>

                                <div class="separator my-10"></div>

                                <div class="d-flex gap-10">
                                    <div class="d-flex flex-column flex-center">
                                        <span class="bullet bullet-vertical bg-primary h-25px w-15px mb-5"></span>
                                        .h-25px .w-15px
                                    </div>
                                    <div class="d-flex flex-column flex-center">
                                        <span class="bullet bullet-vertical bg-primary h-30px w-20px mb-5"></span>
                                        .h-30px .w-20px
                                    </div>
                                    <div class="d-flex flex-column flex-center">
                                        <span class="bullet bullet-vertical bg-primary h-50px w-30px mb-5"></span>
                                        .h-50px .w-30px
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
                                    <pre class="language-html"><code class="language-html">&lt;span class=&quot;bullet bg-primary h-15px w-25px&quot;&gt;&lt;/span&gt;

&lt;span class=&quot;bullet bullet-dot bg-primary h-15px w-15px&quot;&gt;&lt;/span&gt;

&lt;span class=&quot;bullet bullet-vertical bg-primary h-25px w-15px&quot;&gt;&lt;/span&gt;</code></pre>
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
                                <a href="#colors" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Colors</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#dot-style" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Dot Style</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#vertical-style" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Vertical Style</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#line-style" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Line Style</span>
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


