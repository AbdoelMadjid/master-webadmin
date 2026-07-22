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
                        <h1 class="anchor fw-bold mb-5" data-kt-scroll-offset="85" id="overview">
                            <a href="#overview" data-kt-scroll-toggle></a>
                            Overview
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            Tiny Slider is an all purpose slider inspired by Owl Carousel. For more info please visit the
                            plugin's <a class="me-1" href="http://ganlanyuan.github.io/tiny-slider/demo/"
                                target="_blank">Home</a> or <a href="https://github.com/ganlanyuan/tiny-slider"
                                target="_blank">Github Repo</a>.
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" data-kt-scroll-offset="85" id="usage">
                            <a href="#usage" data-kt-scroll-toggle></a>
                            Usage
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            Tiny Slider's CSS and Javascript files are bundled in the global style and scripts bundles and
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
                        <h1 class="anchor fw-bold mb-5" data-kt-scroll-offset="85" id="initialization">
                            <a href="#initialization" data-kt-scroll-toggle></a>
                            Initialization
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <ul class="py-0">
                                <li class="py-2">
                                    Tiny Slider's Javascript is globally initialized with our <code>KTApp</code> wrapper
                                    defined in <code>src/js/components/app.js</code> within the <code>initTinySliders</code>
                                    function.
                                </li>
                                <li class="py-2">
                                    To include Tiny Slider into your project, you need to include a HTML attribute
                                    <code>data-tns="true"</code> within the slider element. For more options available, such
                                    as <code>loop</code> parameters and more, please refer to the <a href="#options"
                                        data-kt-scroll-toggle>options below</a>.
                                </li>
                                <li class="pt-2">
                                    Swapper instances can also be controlled programmatically. For more information on
                                    Smooth Scroll's other options, please refer to the official <a
                                        href="http://ganlanyuan.github.io/tiny-slider/demo/" target="_blank">plugin
                                        site</a>.
                                </li>
                            </ul>
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" data-kt-scroll-offset="85" id="options">
                            <a href="#options" data-kt-scroll-toggle></a>
                            Markup Reference
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            Tiny Slider uses HTML attributes to set specific configurations. Here are some references for
                            each below. For complete list of options, please refer to the <a
                                href="https://github.com/ganlanyuan/tiny-slider" target="_blank">official documentation</a>.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="fw-bold fs-2">HTML Attribute references</div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Table-->
                        <div class="py-5">
                            <div class="table-responsive border rounded">
                                <table class="table table-striped align-top mb-0 g-5">
                                    <thead>
                                        <tr class="fs-4 fw-bold text-gray-900 p-6">
                                            <th class="min-w-250px">Name</th>
                                            <th class="min-w-100px">Type</th>
                                            <th class="min-w-500px">Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <code>data-tns</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">mandatory</code>
                                            </td>
                                            <td>
                                                Enables the current element as the Tiny Slider wrapper component. Accepts
                                                <code>true</code> or <code>false</code> values.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>data-tns-loop</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">optional</code>
                                            </td>
                                            <td>
                                                Enables looping slides. Accepts <code>true</code> or <code>false</code>
                                                values.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>data-tns-swipe-angle</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">optional</code>
                                            </td>
                                            <td>
                                                Enables swipe or drag will not be triggered if the angle is not inside the
                                                range when set. Accepts <code>true</code> or <code>false</code> values.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>data-tns-speed</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">optional</code>
                                            </td>
                                            <td>
                                                Sets the speed of the slide animation (in "ms"). Accepts positive integer
                                                values.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>data-tns-autoplay</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">optional</code>
                                            </td>
                                            <td>
                                                Toggles the automatic change of slides.. Accepts <code>true</code> or
                                                <code>false</code> values.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>data-tns-autoplay-timeout</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">optional</code>
                                            </td>
                                            <td>
                                                Sets time between 2 autoplay slides change (in "ms"). Accepts positive
                                                integer values.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>data-tns-controls</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">optional</code>
                                            </td>
                                            <td>
                                                Enables next and prev navigation buttons. Accepts <code>true</code> or
                                                <code>false</code> values.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>data-tns-nav</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">optional</code>
                                            </td>
                                            <td>
                                                Enables the display of all navigation components like dots. Accepts
                                                <code>true</code> or <code>false</code> values.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>data-tns-items</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">optional</code>
                                            </td>
                                            <td>
                                                Sets number of slides being displayed in the viewport. Accepts positive
                                                integer values.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>data-tns-center</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">optional</code>
                                            </td>
                                            <td>
                                                Center the active slide in the viewport. Accepts <code>true</code> or
                                                <code>false</code> values.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>data-tns-dots</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">optional</code>
                                            </td>
                                            <td>
                                                Toggles display of dots component. Accepts <code>true</code> or
                                                <code>false</code> values.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>data-tns-prev-button</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">optional</code>
                                            </td>
                                            <td>
                                                Defines the custom previous button element by id. Accepts element
                                                <code>id</code> in string values.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>data-tns-next-button</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">optional</code>
                                            </td>
                                            <td>
                                                Defines the custom next button element by id. Accepts element
                                                <code>id</code> in string values.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>data-tns-mouse-drag</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">optional</code>
                                            </td>
                                            <td>
                                                Default: <code>false</code>. Changing slides by dragging them.
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end::Table-->
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
    <!--end::Vendors Javascript-->
@endsection


