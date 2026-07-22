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
                            Metronic customizes the <a href="https://getbootstrap.com/docs/5.2/components/carousel/"
                                class="fw-semibold">Bootstrap Carousel</a>&nbsp;
                            through the SASS variables in <code>src/sass/components/_variables.scss</code> and adds
                            additonal options in <code>src/sass/components/_carousel.scss</code>.
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="dots-indicators" data-kt-scroll-offset="50">
                            <a href="#dots-indicators"></a>

                            Dots Indicators
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Add <code>.carousel-custom</code> and <code>.carousel-indicators-dots</code> classes for
                            a custom carousel with dots indicators style:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div id="kt_carousel_1_carousel" class="carousel carousel-custom slide"
                                    data-bs-ride="carousel" data-bs-interval="8000">
                                    <!--begin::Heading-->
                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                        <!--begin::Label-->
                                        <span class="fs-4 fw-bold pe-2">Title</span>
                                        <!--end::Label-->

                                        <!--begin::Carousel Indicators-->
                                        <ol class="p-0 m-0 carousel-indicators carousel-indicators-dots">
                                            <li data-bs-target="#kt_carousel_1_carousel" data-bs-slide-to="0"
                                                class="ms-1 active"></li>
                                            <li data-bs-target="#kt_carousel_1_carousel" data-bs-slide-to="1"
                                                class="ms-1"></li>
                                            <li data-bs-target="#kt_carousel_1_carousel" data-bs-slide-to="2"
                                                class="ms-1"></li>
                                        </ol>
                                        <!--end::Carousel Indicators-->
                                    </div>
                                    <!--end::Heading-->

                                    <!--begin::Carousel-->
                                    <div class="carousel-inner pt-8">
                                        <!--begin::Item-->
                                        <div class="carousel-item active">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem Ipsum has been the industry's standard dummy text ever
                                            since the 1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a
                                            type specimen book. It has survived not only five centuries, but also
                                            the leap into electronic typesetting,
                                            remaining essentially unchanged.
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="carousel-item">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem Ipsum has been the industry's standard dummy text ever
                                            since the 1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a
                                            type specimen book.
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="carousel-item">
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a
                                            type specimen book. It has survived not only five centuries, but also
                                            the leap into electronic typesetting,
                                            remaining essentially unchanged.
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Carousel-->
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
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;div id=&quot;kt_carousel_1_carousel&quot; class=&quot;carousel carousel-custom slide&quot; data-bs-ride=&quot;carousel&quot; data-bs-interval=&quot;8000&quot;&gt;
    &lt;!--begin::Heading--&gt;
    &lt;div class=&quot;d-flex align-items-center justify-content-between flex-wrap&quot;&gt;
        &lt;!--begin::Label--&gt;
        &lt;span class=&quot;fs-4 fw-bold pe-2&quot;&gt;Title&lt;/span&gt;
        &lt;!--end::Label--&gt;

        &lt;!--begin::Carousel Indicators--&gt;
        &lt;ol class=&quot;p-0 m-0 carousel-indicators carousel-indicators-dots&quot;&gt;
            &lt;li data-bs-target=&quot;#kt_carousel_1_carousel&quot; data-bs-slide-to=&quot;0&quot; class=&quot;ms-1 active&quot;&gt;&lt;/li&gt;
            &lt;li data-bs-target=&quot;#kt_carousel_1_carousel&quot; data-bs-slide-to=&quot;1&quot; class=&quot;ms-1&quot;&gt;&lt;/li&gt;
            &lt;li data-bs-target=&quot;#kt_carousel_1_carousel&quot; data-bs-slide-to=&quot;2&quot; class=&quot;ms-1&quot;&gt;&lt;/li&gt;
        &lt;/ol&gt;
        &lt;!--end::Carousel Indicators--&gt;
    &lt;/div&gt;
    &lt;!--end::Heading--&gt;

    &lt;!--begin::Carousel--&gt;
    &lt;div class=&quot;carousel-inner pt-8&quot;&gt;
        &lt;!--begin::Item--&gt;
        &lt;div class=&quot;carousel-item active&quot;&gt;
            ...
        &lt;/div&gt;
        &lt;!--end::Item--&gt;

        &lt;!--begin::Item--&gt;
        &lt;div class=&quot;carousel-item&quot;&gt;
            ...
        &lt;/div&gt;
        &lt;!--end::Item--&gt;

        &lt;!--begin::Item--&gt;
        &lt;div class=&quot;carousel-item&quot;&gt;
            ...
        &lt;/div&gt;
        &lt;!--end::Item--&gt;
    &lt;/div&gt;
    &lt;!--end::Carousel--&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="bullet-indicators" data-kt-scroll-offset="50">
                            <a href="#bullet-indicators"></a>

                            Bullet Indicators
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Add <code>.carousel-custom</code> and <code>.carousel-indicators-bullet</code>
                            classes for a custom carousel with bullet indicators style:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div id="kt_carousel_2_carousel" class="carousel carousel-custom slide"
                                    data-bs-ride="carousel" data-bs-interval="8000">
                                    <!--begin::Heading-->
                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                        <!--begin::Label-->
                                        <span class="fs-4 fw-bold pe-2">Title</span>
                                        <!--end::Label-->

                                        <!--begin::Carousel Indicators-->
                                        <ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet">
                                            <li data-bs-target="#kt_carousel_2_carousel" data-bs-slide-to="0"
                                                class="ms-1 active"></li>
                                            <li data-bs-target="#kt_carousel_2_carousel" data-bs-slide-to="1"
                                                class="ms-1"></li>
                                            <li data-bs-target="#kt_carousel_2_carousel" data-bs-slide-to="2"
                                                class="ms-1"></li>
                                        </ol>
                                        <!--end::Carousel Indicators-->
                                    </div>
                                    <!--end::Heading-->

                                    <!--begin::Carousel-->
                                    <div class="carousel-inner pt-8">
                                        <!--begin::Item-->
                                        <div class="carousel-item active">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem Ipsum has been the industry's standard dummy text ever
                                            since the 1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a
                                            type specimen book. It has survived not only five centuries, but also
                                            the leap into electronic typesetting,
                                            remaining essentially unchanged.
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="carousel-item">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem Ipsum has been the industry's standard dummy text ever
                                            since the 1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a
                                            type specimen book.
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="carousel-item">
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a
                                            type specimen book. It has survived not only five centuries, but also
                                            the leap into electronic typesetting,
                                            remaining essentially unchanged.
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Carousel-->
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
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;div id=&quot;kt_carousel_2_carousel&quot; class=&quot;carousel carousel-custom slide&quot; data-bs-ride=&quot;carousel&quot; data-bs-interval=&quot;8000&quot;&gt;
    &lt;!--begin::Heading--&gt;
    &lt;div class=&quot;d-flex align-items-center justify-content-between flex-wrap&quot;&gt;
        &lt;!--begin::Label--&gt;
        &lt;span class=&quot;fs-4 fw-bold pe-2&quot;&gt;Title&lt;/span&gt;
        &lt;!--end::Label--&gt;

        &lt;!--begin::Carousel Indicators--&gt;
        &lt;ol class=&quot;p-0 m-0 carousel-indicators carousel-indicators-bullet&quot;&gt;
            &lt;li data-bs-target=&quot;#kt_carousel_2_carousel&quot; data-bs-slide-to=&quot;0&quot; class=&quot;ms-1 active&quot;&gt;&lt;/li&gt;
            &lt;li data-bs-target=&quot;#kt_carousel_2_carousel&quot; data-bs-slide-to=&quot;1&quot; class=&quot;ms-1&quot;&gt;&lt;/li&gt;
            &lt;li data-bs-target=&quot;#kt_carousel_2_carousel&quot; data-bs-slide-to=&quot;2&quot; class=&quot;ms-1&quot;&gt;&lt;/li&gt;
        &lt;/ol&gt;
        &lt;!--end::Carousel Indicators--&gt;
    &lt;/div&gt;
    &lt;!--end::Heading--&gt;

    &lt;!--begin::Carousel--&gt;
    &lt;div class=&quot;carousel-inner pt-8&quot;&gt;
        &lt;!--begin::Item--&gt;
        &lt;div class=&quot;carousel-item active&quot;&gt;
            ...
        &lt;/div&gt;
        &lt;!--end::Item--&gt;

        &lt;!--begin::Item--&gt;
        &lt;div class=&quot;carousel-item&quot;&gt;
            ...
        &lt;/div&gt;
        &lt;!--end::Item--&gt;

        &lt;!--begin::Item--&gt;
        &lt;div class=&quot;carousel-item&quot;&gt;
            ...
        &lt;/div&gt;
        &lt;!--end::Item--&gt;
    &lt;/div&gt;
    &lt;!--end::Carousel--&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="theme-colors" data-kt-scroll-offset="50">
                            <a href="#theme-colors"></a>

                            Theme Colors
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Add <code>.carousel-custom</code> and <code>carousel-indicators-active-{color}</code>
                            where <code>color</code> accepts one of <a href="/html/metronic/docs/base/utilities">Theme
                                Colors</a>
                            &nbsp;to apply a color to the indicator's active state.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div id="kt_carousel_3_carousel" class="carousel carousel-custom slide"
                                    data-bs-ride="carousel" data-bs-interval="8000">
                                    <!--begin::Heading-->
                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                        <!--begin::Label-->
                                        <span class="fs-4 fw-bold pe-2">Title</span>
                                        <!--end::Label-->

                                        <!--begin::Carousel Indicators-->
                                        <ol
                                            class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-primary">
                                            <li data-bs-target="#kt_carousel_3_carousel" data-bs-slide-to="0"
                                                class="ms-1 active"></li>
                                            <li data-bs-target="#kt_carousel_3_carousel" data-bs-slide-to="1"
                                                class="ms-1"></li>
                                            <li data-bs-target="#kt_carousel_3_carousel" data-bs-slide-to="2"
                                                class="ms-1"></li>
                                        </ol>
                                        <!--end::Carousel Indicators-->
                                    </div>
                                    <!--end::Heading-->

                                    <!--begin::Carousel-->
                                    <div class="carousel-inner pt-8">
                                        <!--begin::Item-->
                                        <div class="carousel-item active">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem Ipsum has been the industry's standard dummy text ever
                                            since the 1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a
                                            type specimen book. It has survived not only five centuries, but also
                                            the leap into electronic typesetting,
                                            remaining essentially unchanged.
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="carousel-item">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem Ipsum has been the industry's standard dummy text ever
                                            since the 1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a
                                            type specimen book.
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="carousel-item">
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a
                                            type specimen book. It has survived not only five centuries, but also
                                            the leap into electronic typesetting,
                                            remaining essentially unchanged.
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Carousel-->
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
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;div id=&quot;kt_carousel_3_carousel&quot; class=&quot;carousel carousel-custom slide&quot; data-bs-ride=&quot;carousel&quot; data-bs-interval=&quot;8000&quot;&gt;
    &lt;!--begin::Heading--&gt;
    &lt;div class=&quot;d-flex align-items-center justify-content-between flex-wrap&quot;&gt;
        &lt;!--begin::Label--&gt;
        &lt;span class=&quot;fs-4 fw-bold pe-2&quot;&gt;Title&lt;/span&gt;
        &lt;!--end::Label--&gt;

        &lt;!--begin::Carousel Indicators--&gt;
        &lt;ol class=&quot;p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-primary&quot;&gt;
            &lt;li data-bs-target=&quot;#kt_carousel_3_carousel&quot; data-bs-slide-to=&quot;0&quot; class=&quot;ms-1 active&quot;&gt;&lt;/li&gt;
            &lt;li data-bs-target=&quot;#kt_carousel_3_carousel&quot; data-bs-slide-to=&quot;1&quot; class=&quot;ms-1&quot;&gt;&lt;/li&gt;
            &lt;li data-bs-target=&quot;#kt_carousel_3_carousel&quot; data-bs-slide-to=&quot;2&quot; class=&quot;ms-1&quot;&gt;&lt;/li&gt;
        &lt;/ol&gt;
        &lt;!--end::Carousel Indicators--&gt;
    &lt;/div&gt;
    &lt;!--end::Heading--&gt;

    &lt;!--begin::Carousel--&gt;
    &lt;div class=&quot;carousel-inner pt-8&quot;&gt;
        &lt;!--begin::Item--&gt;
        &lt;div class=&quot;carousel-item active&quot;&gt;
            ...
        &lt;/div&gt;
        &lt;!--end::Item--&gt;

        &lt;!--begin::Item--&gt;
        &lt;div class=&quot;carousel-item&quot;&gt;
            ...
        &lt;/div&gt;
        &lt;!--end::Item--&gt;

        &lt;!--begin::Item--&gt;
        &lt;div class=&quot;carousel-item&quot;&gt;
            ...
        &lt;/div&gt;
        &lt;!--end::Item--&gt;
    &lt;/div&gt;
    &lt;!--end::Carousel--&gt;
&lt;/div&gt;</code></pre>
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
                                <a href="#dots-indicators" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Dots Indicators</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#bullet-indicators" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Bullet Indicators</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#theme-colors" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Theme Colors</span>
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


