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
                            Separator is a custom component to used to device page blocks with space and visual
                            line.
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
                            Use <code>.separator</code> class to place a separator with border color and add
                            vertical space with margin spacing classes as shown below:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                Some text goes here
                                <div class="separator my-10"></div>
                                Other text goes here
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;separator my-10&quot;&gt;&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="sizes" data-kt-scroll-offset="50">
                            <a href="#sizes"></a>

                            Sizes
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.separator</code> class in combination with <a
                                href="https://getbootstrap.com/docs/5.2/utilities/borders/#border-width"
                                class="fw-semibold">Bootstrap Border Width</a>&nbsp; classes
                            to change separator border width:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="separator my-10"></div>

                                <div class="separator border-2 my-10"></div>

                                <div class="separator border-3 my-10"></div>

                                <div class="separator border-4 my-10"></div>

                                <div class="separator border-5 my-10"></div>
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;separator my-10&quot;&gt;&lt;/div&gt;

&lt;div class=&quot;separator border-2 my-10&quot;&gt;&lt;/div&gt;

&lt;div class=&quot;separator border-3 my-10&quot;&gt;&lt;/div&gt;

&lt;div class=&quot;separator border-4 my-10&quot;&gt;&lt;/div&gt;

&lt;div class=&quot;separator border-5 my-10&quot;&gt;&lt;/div&gt;</code></pre>
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
                            Use <code>.separator</code> class in combination with <a
                                href="https://getbootstrap.com/docs/5.2/utilities/borders/#border-color"
                                class="fw-semibold">Bootstrap Border Color</a>&nbsp; classes
                            to change separator's border color:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">

                                <div class="separator border-light my-10"></div>


                                <div class="separator border-primary my-10"></div>


                                <div class="separator border-secondary my-10"></div>


                                <div class="separator border-success my-10"></div>


                                <div class="separator border-info my-10"></div>


                                <div class="separator border-warning my-10"></div>


                                <div class="separator border-danger my-10"></div>


                                <div class="separator border-dark my-10"></div>

                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;separator border-light my-10&quot;&gt;&lt;/div&gt;

&lt;div class=&quot;separator border-primary my-10&quot;&gt;&lt;/div&gt;

&lt;div class=&quot;separator border-secondary my-10&quot;&gt;&lt;/div&gt;

&lt;div class=&quot;separator border-success my-10&quot;&gt;&lt;/div&gt;

&lt;div class=&quot;separator border-info my-10&quot;&gt;&lt;/div&gt;

&lt;div class=&quot;separator border-warning my-10&quot;&gt;&lt;/div&gt;

&lt;div class=&quot;separator border-danger my-10&quot;&gt;&lt;/div&gt;

&lt;div class=&quot;separator border-dark my-10&quot;&gt;&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="styles" data-kt-scroll-offset="50">
                            <a href="#styles"></a>

                            Styles
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Add <code>.separator-dotted</code> and <code>.separator-dashed</code> classes to change
                            a separator's border style:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="separator separator-dotted border-success my-10"></div>

                                <div class="separator separator-dashed border-primary my-10"></div>
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;separator separator-dotted border-success my-10&quot;&gt;&lt;/div&gt;

&lt;div class=&quot;separator separator-dashed border-primary my-10&quot;&gt;&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="centered-content" data-kt-scroll-offset="50">
                            <a href="#centered-content"></a>

                            Centered Content
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Add <code>.separator-content</code> along with any other separator classes and include
                            any text/icon within the separator wrapper:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="separator separator-content my-15">Separator</div>

                                <div class="separator separator-dotted separator-content border-dark my-15"><span
                                        class="h1">Title</span></div>

                                <div class="separator separator-content border-dark my-15"><span
                                        class="w-250px fw-bold">Long separator title label</span></div>

                                <div class="separator separator-dashed separator-content border-primary my-15">
                                    <i class="ki-duotone ki-abstract-19 fs-1 text-primary"><span
                                            class="path1"></span><span class="path2"></span></i>
                                </div>

                                <div class="separator separator-dotted separator-content border-success my-15">
                                    <i class="ki-duotone ki-check-square fs-2 text-success"><span
                                            class="path1"></span><span class="path2"></span></i>
                                </div>

                                <div class="separator separator-content border-danger my-15">
                                    <i class="ki-duotone ki-chart-pie-4 fs-2 text-danger"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span></i>
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
                                    <pre class="language-html"><code class="language-html">&lt;!--begin::Example--&gt;
&lt;div class=&quot;separator separator-content my-15&quot;&gt;Separator&lt;/div&gt;
&lt;!--end::Example--&gt;

&lt;!--begin::Example--&gt;
&lt;div class=&quot;separator separator-dotted separator-content border-dark my-15&quot;&gt;&lt;span class=&quot;h1&quot;&gt;Title&lt;/span&gt;&lt;/div&gt;
&lt;!--end::Example--&gt;

&lt;!--begin::Example--&gt;
&lt;div class=&quot;separator separator-content border-dark my-15&quot;&gt;&lt;span class=&quot;w-250px fw-bold&quot;&gt;Long separator title label&lt;/span&gt;&lt;/div&gt;
&lt;!--end::Example--&gt;

&lt;!--begin::Example--&gt;
&lt;div class=&quot;separator separator-dashed separator-content border-primary my-15&quot;&gt;
    &lt;i class=&quot;ki-duotone ki-abstract-19 fs-1 text-primary&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
&lt;/div&gt;
&lt;!--end::Example--&gt;

&lt;!--begin::Example--&gt;
&lt;div class=&quot;separator separator-dotted separator-content border-success my-15&quot;&gt;
    &lt;i class=&quot;ki-duotone ki-check-square fs-2 text-success&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
&lt;/div&gt;
&lt;!--end::Example--&gt;

&lt;!--begin::Example--&gt;
&lt;div class=&quot;separator separator-content border-danger my-15&quot;&gt;
    &lt;i class=&quot;ki-duotone ki-chart-pie-4 fs-2 text-danger&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;/i&gt;
&lt;/div&gt;
&lt;!--end::Example--&gt;</code></pre>
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
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#styles" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Styles</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#centered-content" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Centered Content</span>
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


