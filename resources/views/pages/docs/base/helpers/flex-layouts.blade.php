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
                    <div class="py-0">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="overview">
                            <a href="#overview"></a>
                            Overview
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            Use responsive-friendly custom flex classes to build nested layouts with fixed and fluid
                            columns.

                            The classes are named using the format <code>flex-{property}</code> for <code>xs</code>
                            and <code>flex-{breakpoint}-{property}</code>
                            for <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code>, and
                            <code>xxl</code>.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            Where <code>property</code> is one of:
                            <ul class="pt-3">
                                <li class="py-2"><code>root</code> - to define the root node of the flex
                                    layout(usually it's used when the layout is placed as a direct child of the body
                                    element in order to fully occupy the window height)</li>
                                <li class="py-2"><code>column-auto</code> - to set a flex item with auto height
                                </li>
                                <li class="py-2"><code>column-fluid</code> - to set a flex item with fluid height
                                </li>
                                <li class="py-2"><code>row-auto</code> - to set a flex item with auto width</li>
                                <li class="py-2"><code>row-fluid</code> - to set a flex item with fluid width</li>
                                <li class="py-2"><code>center</code> - to set a flex item's content vertically and
                                    horizontally centered</li>
                                <li class="py-2"><code>start</code> - to set a flex item's content alignments to
                                    start</li>
                                <li class="py-2"><code>end</code> - to set a flex item's content alignments to end
                                </li>
                            </ul>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="d-flex flex-row h-300px">
                                    <div class="d-flex flex-column flex-row-auto w-200px">
                                        <div class="d-flex flex-column-auto flex-center h-50px bg-primary">
                                            <span class="text-white">Fixed Height</span>
                                        </div>

                                        <div class="d-flex flex-column-fluid bg-success flex-center">
                                            <span class="text-white">Fluid Height</span>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column flex-row-fluid">
                                        <div class="d-flex flex-column-auto h-70px bg-info flex-center">
                                            <span class="text-white">Fixed Height</span>
                                        </div>

                                        <div class="d-flex flex-row flex-column-fluid">
                                            <div class="d-flex flex-row-fluid bg-dark flex-center">
                                                <span class="text-white">Fluid Width</span>
                                            </div>

                                            <div class="d-flex flex-row-auto w-200px bg-warning flex-center">
                                                <span class="text-white">Fixed Width</span>
                                            </div>
                                        </div>
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
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;d-flex flex-row h-300px&quot;&gt;
    &lt;div class=&quot;d-flex flex-column flex-row-auto w-200px&quot;&gt;
        &lt;div class=&quot;d-flex flex-column-auto h-50px bg-primary&quot;&gt;
            &lt;span class=&quot;text-white&quot;&gt;Fixed Height&lt;/span&gt;
        &lt;/div&gt;

        &lt;div class=&quot;d-flex flex-column-fluid bg-success flex-center&quot;&gt;
            &lt;span class=&quot;text-white&quot;&gt;Fluid Height&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class=&quot;d-flex flex-column flex-row-fluid&quot;&gt;
        &lt;div class=&quot;d-flex flex-column-auto h-70px bg-info flex-center&quot;&gt;
            &lt;span class=&quot;text-white&quot;&gt;Fixed Height&lt;/span&gt;
        &lt;/div&gt;

        &lt;div class=&quot;d-flex flex-row flex-column-fluid&quot;&gt;
            &lt;div class=&quot;d-flex flex-row-fluid bg-dark flex-center&quot;&gt;
                &lt;span class=&quot;text-white&quot;&gt;Fluid Width&lt;/span&gt;
            &lt;/div&gt;

            &lt;div class=&quot;d-flex flex-row-auto w-200px bg-warning flex-center&quot;&gt;
                &lt;span class=&quot;text-white&quot;&gt;Fixed Width&lt;/span&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
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


