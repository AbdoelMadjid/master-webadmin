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
                        <h1 class="anchor fw-bold mb-5" id="overview" data-kt-scroll-offset="50">
                            <a href="#overview"></a>

                            Overview
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="pt-5">
                            The base template must include all the assets commented with <code>mandatory for all
                                pages</code> in order to get the layout functioning properly.
                            The custom assets commented with <code>used for this page only</code> can be skipped depending
                            on project requirements and the assets includes must follow the below order:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;html&gt;
    &lt;!--begin::Head--&gt;
    &lt;head&gt;
        &lt;!--begin::Fonts(mandatory for all pages)--&gt;
        &lt;link rel=&quot;stylesheet&quot; href=&quot;https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700&quot; /&gt;
        &lt;!--end::Fonts--&gt;

        &lt;!--begin::Vendor Stylesheets(used for this page only)--&gt;
        &lt;link href=&quot;assets/plugins/custom/fullcalendar/fullcalendar.bundle.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot; /&gt;
        &lt;link href=&quot;assets/plugins/custom/datatables/datatables.bundle.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot; /&gt;
        &lt;!--end::Vendor Stylesheets--&gt;

        &lt;!--begin::Global Stylesheets Bundle(mandatory for all pages)--&gt;
        &lt;link href=&quot;assets/plugins/global/plugins.bundle.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot; /&gt;
        &lt;link href=&quot;assets/css/style.bundle.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot; /&gt;
        &lt;!--end::Global Stylesheets Bundle--&gt;
    &lt;/head&gt;
    &lt;!--end::Head--&gt;

    &lt;!--begin::Body--&gt;
    &lt;body&gt;
        &lt;!--begin::Javascript--&gt;
        &lt;!--begin::Global Javascript Bundle(mandatory for all pages)--&gt;
        &lt;script src=&quot;assets/plugins/global/plugins.bundle.js&quot;&gt;&lt;/script&gt;
        &lt;script src=&quot;assets/js/scripts.bundle.js&quot;&gt;&lt;/script&gt;
        &lt;!--end::Global Javascript Bundle--&gt;

        &lt;!--begin::Vendors Javascript(used for this page only)--&gt;
        &lt;script src=&quot;assets/plugins/custom/fullcalendar/fullcalendar.bundle.js&quot;&gt;&lt;/script&gt;
        &lt;!--end::Vendors Javascript--&gt;

        &lt;!--begin::Custom Javascript(used for this page only)--&gt;
        &lt;script src=&quot;assets/js/widgets.bundle.js&quot;&gt;&lt;/script&gt;
        &lt;script src=&quot;assets/js/custom/widgets.js&quot;&gt;&lt;/script&gt;
        &lt;script src=&quot;assets/js/custom/apps/chat/chat.js&quot;&gt;&lt;/script&gt;
        &lt;script src=&quot;assets/js/custom/utilities/modals/upgrade-plan.js&quot;&gt;&lt;/script&gt;
        &lt;script src=&quot;assets/js/custom/utilities/modals/create-app.js&quot;&gt;&lt;/script&gt;
        &lt;script src=&quot;assets/js/custom/utilities/modals/new-target.js&quot;&gt;&lt;/script&gt;
        &lt;script src=&quot;assets/js/custom/utilities/modals/users-search.js&quot;&gt;&lt;/script&gt;
        &lt;!--end::Custom Javascript--&gt;
        &lt;!--end::Javascript--&gt;
    &lt;/body&gt;
    &lt;!--end::Body--&gt;
&lt;/html&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Block-->
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


