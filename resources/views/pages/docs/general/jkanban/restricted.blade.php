@extends('layouts.document832')
@section('styles')
    <link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/custom/jkanban/jkanban.bundle.css') }}" rel="stylesheet" type="text/css" />
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
                            jKanban is a pure agnostic Javascript plugin for Kanban boards. For more info see <a
                                href="http://www.riccardotartaglia.it/jkanban/" class="fw-bold me-1">the official
                                site</a>and <a class="fw-bold" href="https://github.com/riktar/jkanban">the Github
                                repository</a>.
                        </div> <!--end::Description-->
                    </div><!--end::Notice-->
                    <!--begin::Section-->
                    <div class="py-10">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" data-kt-scroll-offset="85" id="restricted">
                            <a href="#restricted" data-kt-scroll-toggle></a>
                            Restricted Example
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="mb-3">
                                Here's a restricted jKanban Board example, where only specific inner blocks can be placed
                                into allowed columns. For more info, please visit the <a
                                    href="http://www.riccardotartaglia.it/jkanban/" target="_blank">official website</a>.
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div id="kt_docs_jkanban_restricted"></div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e5c2c07a418" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e5c2c07a41c" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5c2c07a418" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">&quot;use strict&quot;;

// Class definition
var KTJKanbanDemoRestricted = function() {
    // Private functions
    var exampleRestricted = function() {
        var kanban = new jKanban({
            element: &#039;#kt_docs_jkanban_restricted&#039;,
            gutter: &#039;0&#039;,
            widthBoard: &#039;250px&#039;,
            click: function(el) {
                alert(el.innerHTML);
            },
            boards: [{
                    &#039;id&#039;: &#039;_todo&#039;,
                    &#039;title&#039;: &#039;To Do&#039;,
                    &#039;class&#039;: &#039;light-primary&#039;,
                    &#039;dragTo&#039;: [&#039;_working&#039;],
                    &#039;item&#039;: [{
                            &#039;title&#039;: &#039;My Task Test&#039;,
                            &#039;class&#039;: &#039;primary&#039;
                        },
                        {
                            &#039;title&#039;: &#039;Buy Milk&#039;,
                            &#039;class&#039;: &#039;primary&#039;
                        }
                    ]
                },
                {
                    &#039;id&#039;: &#039;_working&#039;,
                    &#039;title&#039;: &#039;Working&#039;,
                    &#039;class&#039;: &#039;light-warning&#039;,
                    &#039;item&#039;: [{
                            &#039;title&#039;: &#039;Do Something!&#039;,
                            &#039;class&#039;: &#039;warning&#039;
                        },
                        {
                            &#039;title&#039;: &#039;Run?&#039;,
                            &#039;class&#039;: &#039;warning&#039;
                        }
                    ]
                },
                {
                    &#039;id&#039;: &#039;_done&#039;,
                    &#039;title&#039;: &#039;Done&#039;,
                    &#039;class&#039;: &#039;light-success&#039;,
                    &#039;dragTo&#039;: [&#039;_working&#039;],
                    &#039;item&#039;: [{
                            &#039;title&#039;: &#039;All right&#039;,
                            &#039;class&#039;: &#039;success&#039;
                        },
                        {
                            &#039;title&#039;: &#039;Ok!&#039;,
                            &#039;class&#039;: &#039;success&#039;
                        }
                    ]
                },
                {
                    &#039;id&#039;: &#039;_notes&#039;,
                    &#039;title&#039;: &#039;Notes&#039;,
                    &#039;class&#039;: &#039;light-danger&#039;,
                    &#039;item&#039;: [{
                            &#039;title&#039;: &#039;Warning Task&#039;,
                            &#039;class&#039;: &#039;danger&#039;
                        },
                        {
                            &#039;title&#039;: &#039;Do not enter&#039;,
                            &#039;class&#039;: &#039;danger&#039;
                        }
                    ]
                }
            ]
        });
    }

    return {
        // Public Functions
        init: function() {
            exampleRestricted();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function() {
    KTJKanbanDemoRestricted.init();
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e5c2c07a41c" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;div id=&quot;kt_docs_jkanban_restricted&quot;&gt;&lt;/div&gt;</code></pre>
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
    <script src="{{ asset('assets/plugins/custom/jkanban/jkanban.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/custom/documentation/general/jkanban/restricted.js') }}"></script>
    <!--end::Custom Javascript-->
@endsection


