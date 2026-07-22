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
                        <h1 class="anchor fw-bold mb-5" data-kt-scroll-offset="85" id="basic">
                            <a href="#basic" data-kt-scroll-toggle></a>
                            Rich Content Example
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="mb-3">
                                Here's a rich content jKanban Board example with some interactivity buttons. For more info,
                                please visit the <a href="http://www.riccardotartaglia.it/jkanban/" target="_blank">official
                                    website</a>.
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div id="kt_docs_jkanban_rich"></div>

                            <div class="mt-4">
                                <button class="btn btn-light-primary me-5" id="addDefault">Add "Default" board</button>
                                <button class="btn btn-light-danger me-5" id="addToDo">Add element in "To Do"
                                    Board</button>
                                <button class="btn btn-light-success" id="removeBoard">Remove "Done" Board</button>
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e5c30d27dcf" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e5c30d27dd3" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5c30d27dcf" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">&quot;use strict&quot;;

// Class definition
var KTJKanbanDemoRich = function() {
    // Private functions
    var exampleRich = function() {
        var kanban = new jKanban({
            element: &#039;#kt_docs_jkanban_rich&#039;,
            gutter: &#039;0&#039;,
            click: function(el) {
                alert(el.innerHTML);
            },
            boards: [{
                    &#039;id&#039;: &#039;_backlog&#039;,
                    &#039;title&#039;: &#039;Backlog&#039;,
                    &#039;class&#039;: &#039;light-dark&#039;,
                    &#039;item&#039;: [{
                            &#039;title&#039;: `
                                &lt;div class=&quot;d-flex align-items-center&quot;&gt;
                        	        &lt;div class=&quot;symbol symbol-success me-3&quot;&gt;
                        	            &lt;img alt=&quot;Pic&quot; src=&quot;${hostUrl}assets/media/avatars/300-6.jpg&quot; /&gt;
                        	        &lt;/div&gt;
                        	        &lt;div class=&quot;d-flex flex-column align-items-start&quot;&gt;
                        	            &lt;span class=&quot;text-gray-900-50 fw-bold mb-1&quot;&gt;SEO Optimization&lt;/span&gt;
                        	            &lt;span class=&quot;badge badge-light-success&quot;&gt;In progress&lt;/span&gt;
                        	        &lt;/div&gt;
                        	    &lt;/div&gt;
                            `,
                        },
                        {
                            &#039;title&#039;: `
                                &lt;div class=&quot;d-flex align-items-center&quot;&gt;
                        	        &lt;div class=&quot;symbol symbol-success me-3&quot;&gt;
                        	            &lt;span class=&quot;symbol-label fs-4&quot;&gt;A.D&lt;/span&gt;
                        	        &lt;/div&gt;
                        	        &lt;div class=&quot;d-flex flex-column align-items-start&quot;&gt;
                        	            &lt;span class=&quot;text-gray-900-50 fw-bold mb-1&quot;&gt;Finance&lt;/span&gt;
                        	            &lt;span class=&quot;badge badge-light-danger&quot;&gt;Pending&lt;/span&gt;
                        	        &lt;/div&gt;
                        	    &lt;/div&gt;
                            `,
                        }
                    ]
                },
                {
                    &#039;id&#039;: &#039;_todo&#039;,
                    &#039;title&#039;: &#039;To Do&#039;,
                    &#039;class&#039;: &#039;light-danger&#039;,
                    &#039;item&#039;: [{
                            &#039;title&#039;: `
                                &lt;div class=&quot;d-flex align-items-center&quot;&gt;
                        	        &lt;div class=&quot;symbol symbol-success me-3&quot;&gt;
                        	            &lt;img alt=&quot;Pic&quot; src=&quot;${hostUrl}assets/media/avatars/300-1.jpg&quot; /&gt;
                        	        &lt;/div&gt;
                        	        &lt;div class=&quot;d-flex flex-column align-items-start&quot;&gt;
                        	            &lt;span class=&quot;text-gray-900-50 fw-bold mb-1&quot;&gt;Server Setup&lt;/span&gt;
                        	            &lt;span class=&quot;badge badge-light-info&quot;&gt;Completed&lt;/span&gt;
                        	        &lt;/div&gt;
                        	    &lt;/div&gt;
                            `,
                        },
                        {
                            &#039;title&#039;: `
                                &lt;div class=&quot;d-flex align-items-center&quot;&gt;
                        	        &lt;div class=&quot;symbol symbol-success me-3&quot;&gt;
                        	            &lt;img alt=&quot;Pic&quot; src=&quot;${hostUrl}assets/media/avatars/300-2.jpg&quot; /&gt;
                        	        &lt;/div&gt;
                        	        &lt;div class=&quot;d-flex flex-column align-items-start&quot;&gt;
                        	            &lt;span class=&quot;text-gray-900-50 fw-bold mb-1&quot;&gt;Report Generation&lt;/span&gt;
                        	            &lt;span class=&quot;badge badge-light-warning&quot;&gt;Due&lt;/span&gt;
                        	        &lt;/div&gt;
                        	    &lt;/div&gt;
                            `,
                        }
                    ]
                },
                {
                    &#039;id&#039;: &#039;_working&#039;,
                    &#039;title&#039;: &#039;Working&#039;,
                    &#039;class&#039;: &#039;light-primary&#039;,
                    &#039;item&#039;: [{
                            &#039;title&#039;: `
                                &lt;div class=&quot;d-flex align-items-center&quot;&gt;
                        	        &lt;div class=&quot;symbol symbol-success me-3&quot;&gt;
                            	         &lt;img alt=&quot;Pic&quot; src=&quot;${hostUrl}assets/media/avatars/300-6.jpg&quot; /&gt;
                        	        &lt;/div&gt;
                        	        &lt;div class=&quot;d-flex flex-column align-items-start&quot;&gt;
                        	            &lt;span class=&quot;text-gray-900-50 fw-bold mb-1&quot;&gt;Marketing&lt;/span&gt;
                        	            &lt;span class=&quot;badge badge-light-danger&quot;&gt;Planning&lt;/span&gt;
                        	        &lt;/div&gt;
                        	    &lt;/div&gt;
                            `,
                        },
                        {
                            &#039;title&#039;: `
                                &lt;div class=&quot;d-flex align-items-center&quot;&gt;
                        	        &lt;div class=&quot;symbol symbol-light-info me-3&quot;&gt;
                        	            &lt;span class=&quot;symbol-label fs-4&quot;&gt;A.P&lt;/span&gt;
                        	        &lt;/div&gt;
                        	        &lt;div class=&quot;d-flex flex-column align-items-start&quot;&gt;
                        	            &lt;span class=&quot;text-gray-900-50 fw-bold mb-1&quot;&gt;Finance&lt;/span&gt;
                        	            &lt;span class=&quot;badge badge-light-primary&quot;&gt;Done&lt;/span&gt;
                        	        &lt;/div&gt;
                        	    &lt;/div&gt;
                            `,
                        }
                    ]
                },
                {
                    &#039;id&#039;: &#039;_done&#039;,
                    &#039;title&#039;: &#039;Done&#039;,
                    &#039;class&#039;: &#039;light-success&#039;,
                    &#039;item&#039;: [{
                            &#039;title&#039;: `
                                &lt;div class=&quot;d-flex align-items-center&quot;&gt;
                        	        &lt;div class=&quot;symbol symbol-success me-3&quot;&gt;
                        	            &lt;img alt=&quot;Pic&quot; src=&quot;${hostUrl}assets/media/avatars/300-5.jpg&quot; /&gt;
                        	        &lt;/div&gt;
                        	        &lt;div class=&quot;d-flex flex-column align-items-start&quot;&gt;
                        	            &lt;span class=&quot;text-gray-900-50 fw-bold mb-1&quot;&gt;SEO Optimization&lt;/span&gt;
                        	            &lt;span class=&quot;badge badge-light-success&quot;&gt;In progress&lt;/span&gt;
                        	        &lt;/div&gt;
                        	    &lt;/div&gt;
                            `,
                        },
                        {
                            &#039;title&#039;: `
                                &lt;div class=&quot;d-flex align-items-center&quot;&gt;
                        	        &lt;div class=&quot;symbol symbol-success me-3&quot;&gt;
                        	            &lt;img alt=&quot;Pic&quot; src=&quot;${hostUrl}assets/media/avatars/300-20.jpg&quot; /&gt;
                        	        &lt;/div&gt;
                        	        &lt;div class=&quot;d-flex flex-column align-items-start&quot;&gt;
                        	            &lt;span class=&quot;text-gray-900-50 fw-bold mb-1&quot;&gt;Product Team&lt;/span&gt;
                        	            &lt;span class=&quot;badge badge-light-danger&quot;&gt;In progress&lt;/span&gt;
                        	        &lt;/div&gt;
                        	    &lt;/div&gt;
                            `,
                        }
                    ]
                },
                {
                    &#039;id&#039;: &#039;_deploy&#039;,
                    &#039;title&#039;: &#039;Deploy&#039;,
                    &#039;class&#039;: &#039;light-primary&#039;,
                    &#039;item&#039;: [{
                            &#039;title&#039;: `
                                &lt;div class=&quot;d-flex align-items-center&quot;&gt;
                        	        &lt;div class=&quot;symbol symbol-light-warning me-3&quot;&gt;
                        	            &lt;span class=&quot;symbol-label fs-4&quot;&gt;D.L&lt;/span&gt;
                        	        &lt;/div&gt;
                        	        &lt;div class=&quot;d-flex flex-column align-items-start&quot;&gt;
                        	            &lt;span class=&quot;text-gray-900-50 fw-bold mb-1&quot;&gt;SEO Optimization&lt;/span&gt;
                        	            &lt;span class=&quot;badge badge-light-success&quot;&gt;In progress&lt;/span&gt;
                        	        &lt;/div&gt;
                        	    &lt;/div&gt;
                            `,
                        },
                        {
                            &#039;title&#039;: `
                                &lt;div class=&quot;d-flex align-items-center&quot;&gt;
                        	        &lt;div class=&quot;symbol symbol-light-danger me-3&quot;&gt;
                        	            &lt;span class=&quot;symbol-label fs-4&quot;&gt;E.K&lt;/span&gt;
                        	        &lt;/div&gt;
                        	        &lt;div class=&quot;d-flex flex-column align-items-start&quot;&gt;
                        	            &lt;span class=&quot;text-gray-900-50 fw-bold mb-1&quot;&gt;Requirement Study&lt;/span&gt;
                        	            &lt;span class=&quot;badge badge-light-warning&quot;&gt;Scheduled&lt;/span&gt;
                        	        &lt;/div&gt;
                        	    &lt;/div&gt;
                            `,
                        }
                    ]
                }
            ]
        });

        var toDoButton = document.getElementById(&#039;addToDo&#039;);
        toDoButton.addEventListener(&#039;click&#039;, function() {
            kanban.addElement(
                &#039;_todo&#039;, {
                    &#039;title&#039;: `
                        &lt;div class=&quot;d-flex align-items-center&quot;&gt;
                            &lt;div class=&quot;symbol symbol-light-primary me-3&quot;&gt;
                                &lt;img alt=&quot;Pic&quot; src=&quot;${hostUrl}assets/media/avatars/300-23.jpg&quot; /&gt;
                            &lt;/div&gt;
                            &lt;div class=&quot;d-flex flex-column align-items-start&quot;&gt;
                                &lt;span class=&quot;text-gray-900-50 fw-bold mb-1&quot;&gt;Requirement Study&lt;/span&gt;
                                &lt;span class=&quot;badge badge-light-success&quot;&gt;Scheduled&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    `
                }
            );
        });

        var addBoardDefault = document.getElementById(&#039;addDefault&#039;);
        addBoardDefault.addEventListener(&#039;click&#039;, function() {
            kanban.addBoards(
                [{
                    &#039;id&#039;: &#039;_default&#039;,
                    &#039;title&#039;: &#039;New Board&#039;,
                    &#039;class&#039;: &#039;light-primary&#039;,
                    &#039;item&#039;: [{
                            &#039;title&#039;: `
                                &lt;div class=&quot;d-flex align-items-center&quot;&gt;
                                    &lt;div class=&quot;symbol symbol-success me-3&quot;&gt;
                                        &lt;img alt=&quot;Pic&quot; src=&quot;${hostUrl}assets/media/avatars/300-12.jpg&quot; /&gt;
                                    &lt;/div&gt;
                                    &lt;div class=&quot;d-flex flex-column align-items-start&quot;&gt;
                                        &lt;span class=&quot;text-gray-900-50 fw-bold mb-1&quot;&gt;Payment Modules&lt;/span&gt;
                                        &lt;span class=&quot;badge badge-light-primary&quot;&gt;In development&lt;/span&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                        `},{
                            &#039;title&#039;: `
                                &lt;div class=&quot;d-flex align-items-center&quot;&gt;
                                    &lt;div class=&quot;symbol symbol-success me-3&quot;&gt;
                                        &lt;img alt=&quot;Pic&quot; src=&quot;${hostUrl}assets/media/avatars/300-9.jpg&quot; /&gt;
                                    &lt;/div&gt;
                                    &lt;div class=&quot;d-flex flex-column align-items-start&quot;&gt;
                                    &lt;span class=&quot;text-gray-900-50 fw-bold mb-1&quot;&gt;New Project&lt;/span&gt;
                                    &lt;span class=&quot;badge badge-light-danger&quot;&gt;Pending&lt;/span&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        `}
                    ]
                }]
            )
        });

        var removeBoard = document.getElementById(&#039;removeBoard&#039;);
        removeBoard.addEventListener(&#039;click&#039;, function() {
            kanban.removeBoard(&#039;_done&#039;);
        });
    }

    return {
        // Public Functions
        init: function() {
            exampleRich();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function() {
    KTJKanbanDemoRich.init();
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e5c30d27dd3" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;div id=&quot;kt_docs_jkanban_rich&quot;&gt;&lt;/div&gt;</code></pre>
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
    <script src="{{ asset('assets/js/custom/documentation/general/jkanban/rich.js') }}"></script>
    <!--end::Custom Javascript-->
@endsection


