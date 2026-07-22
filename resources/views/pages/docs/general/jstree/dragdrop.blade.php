@extends('layouts.document832')
@section('styles')
    <link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/custom/jstree/jstree.bundle.css') }}" rel="stylesheet" type="text/css" />
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
                    <!--begin::Notice-->
                    <div class="d-flex align-items-center rounded py-5 px-4 bg-light-info "> <!--begin::Icon-->
                        <div class="d-flex h-80px w-80px flex-shrink-0 flex-center position-relative ms-3 me-6"> <svg
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                class="text-primary h-80px w-80px position-absolute opacity-5">
                                <path fill="currentColor"
                                    d="M10.2,21.23,4.91,18.17a3.58,3.58,0,0,1-1.8-3.11V8.94a3.58,3.58,0,0,1,1.8-3.11L10.2,2.77a3.62,3.62,0,0,1,3.6,0l5.29,3.06a3.58,3.58,0,0,1,1.8,3.11v6.12a3.58,3.58,0,0,1-1.8,3.11L13.8,21.23A3.62,3.62,0,0,1,10.2,21.23Z" />
                            </svg> <i class="ki-duotone ki-design-frame fs-3x text-info  position-absolute"><span
                                    class="path1"></span><span class="path2"></span></i> </div> <!--end::Icon-->
                        <!--begin::Description-->
                        <div class="text-gray-700 fw-bold fs-6 lh-lg">
                            jsTree is jquery plugin, that provides interactive trees. For more info please visit the
                            plugin's
                            <a class="me-1" href="https://www.jstree.com//" target="_blank">Home</a> or
                            <a href="https://github.com/vakata/jstree" target="_blank">Github Repo</a>.
                        </div> <!--end::Description-->
                    </div><!--end::Notice-->
                    <!--begin::Section-->
                    <div class="pt-10">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" data-kt-scroll-offset="85" id="dragdrop">
                            <a href="#dragdrop" data-kt-scroll-toggle></a>
                            Drag & Drop
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="mb-3">
                                Here's a jsTree example with drag and drop functionality. For more info, please visit the <a
                                    href="https://www.jstree.com/" target="_blank">official website</a>.
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div id="kt_docs_jstree_dragdrop"></div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="pt-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e5c53e72fb2" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e5c53e72fb6" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5c53e72fb2" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">$(&quot;#kt_docs_jstree_dragdrop&quot;).jstree({
    &quot;core&quot; : {
        &quot;themes&quot; : {
            &quot;responsive&quot;: false
        },
        // so that create works
        &quot;check_callback&quot; : true,
        &#039;data&#039;: [{
                &quot;text&quot;: &quot;Parent Node&quot;,
                &quot;children&quot;: [{
                    &quot;text&quot;: &quot;Initially selected&quot;,
                    &quot;state&quot;: {
                        &quot;selected&quot;: true
                    }
                }, {
                    &quot;text&quot;: &quot;Custom Icon&quot;,
                    &quot;icon&quot;: &quot;ki-solid ki-map text-danger fs-5&quot;
                }, {
                    &quot;text&quot;: &quot;Initially open&quot;,
                    &quot;icon&quot; : &quot;ki-solid ki-folder text-success&quot;,
                    &quot;state&quot;: {
                        &quot;opened&quot;: true
                    },
                    &quot;children&quot;: [
                        {&quot;text&quot;: &quot;Another node&quot;, &quot;icon&quot; : &quot;ki-solid ki-file text-waring&quot;}
                    ]
                }, {
                    &quot;text&quot;: &quot;Another Custom Icon&quot;,
                    &quot;icon&quot;: &quot;ki-solid ki-book text-warning fs-6&quot;
                }, {
                    &quot;text&quot;: &quot;Disabled Node&quot;,
                    &quot;icon&quot;: &quot;ki-solid ki-check text-success&quot;,
                    &quot;state&quot;: {
                        &quot;disabled&quot;: true
                    }
                }, {
                    &quot;text&quot;: &quot;Sub Nodes&quot;,
                    &quot;icon&quot;: &quot;fa fa-folder text-danger&quot;,
                    &quot;children&quot;: [
                        {&quot;text&quot;: &quot;Item 1&quot;, &quot;icon&quot; : &quot;ki-solid ki-file text-waring&quot;},
                        {&quot;text&quot;: &quot;Item 2&quot;, &quot;icon&quot; : &quot;ki-solid ki-file text-success&quot;},
                        {&quot;text&quot;: &quot;Item 3&quot;, &quot;icon&quot; : &quot;ki-solid ki-file text-default&quot;},
                        {&quot;text&quot;: &quot;Item 4&quot;, &quot;icon&quot; : &quot;ki-solid ki-file text-danger&quot;},
                        {&quot;text&quot;: &quot;Item 5&quot;, &quot;icon&quot; : &quot;ki-solid ki-file text-info&quot;}
                    ]
                }]
            },
            &quot;Another Node&quot;
        ]
    },
    &quot;types&quot; : {
        &quot;default&quot; : {
            &quot;icon&quot; : &quot;ki-solid ki-folder text-success&quot;
        },
        &quot;file&quot; : {
            &quot;icon&quot; : &quot;ki-solid ki-file  text-success&quot;
        }
    },
    &quot;state&quot; : { &quot;key&quot; : &quot;demo2&quot; },
    &quot;plugins&quot; : [ &quot;dnd&quot;, &quot;state&quot;, &quot;types&quot; ]
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e5c53e72fb6" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;div id=&quot;kt_docs_jstree_dragdrop&quot;&gt;&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
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
    <script src="{{ asset('assets/plugins/custom/jstree/jstree.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/custom/documentation/general/jstree/dragdrop.js') }}"></script>
    <!--end::Custom Javascript-->
@endsection


