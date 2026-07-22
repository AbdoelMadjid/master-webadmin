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
                        <h1 class="anchor fw-bold mb-5" data-kt-scroll-offset="85" id="fixed">
                            <a href="#fixed" data-kt-scroll-toggle></a>
                            Fixed Height Example
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="mb-3">
                                Here's an example of jKanban Board with a fixed height. For more info, please visit the <a
                                    href="http://www.riccardotartaglia.it/jkanban/" target="_blank">official website</a>.
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div id="kt_docs_jkanban_fixed_height" class="kanban-fixed-height scroll-y"
                                data-kt-jkanban-height="300"></div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e5c4012c988" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e5c4012c98d" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5c4012c988" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">&quot;use strict&quot;;

// Class definition
var KTJKanbanDemoFixedHeight = function () {
    var element;
    var kanbanEl;

    // Private functions
    var exampleFixedHeight = function () {
        // Get kanban height value
        const kanbanHeight = kanbanEl.getAttribute(&#039;data-kt-jkanban-height&#039;);

        // Init jKanban
        var kanban = new jKanban({
            element: element,
            gutter: &#039;0&#039;,
            widthBoard: &#039;250px&#039;,
            boards: [{
                &#039;id&#039;: &#039;_fixed_height&#039;,
                &#039;title&#039;: &#039;Fixed Height&#039;,
                &#039;class&#039;: &#039;primary&#039;,
                &#039;item&#039;: [
                    {
                        &#039;title&#039;: &#039;&lt;span class=&quot;fw-bold&quot;&gt;Item 1&lt;/span&gt;&#039;
                    },
                    {
                        &#039;title&#039;: &#039;&lt;span class=&quot;fw-bold&quot;&gt;Item 2&lt;/span&gt;&#039;
                    },
                    {
                        &#039;title&#039;: &#039;&lt;span class=&quot;fw-bold&quot;&gt;Item 3&lt;/span&gt;&#039;
                    },
                    {
                        &#039;title&#039;: &#039;&lt;span class=&quot;fw-bold&quot;&gt;Item 4&lt;/span&gt;&#039;
                    },
                    {
                        &#039;title&#039;: &#039;&lt;span class=&quot;fw-bold&quot;&gt;Item 5&lt;/span&gt;&#039;
                    },
                    {
                        &#039;title&#039;: &#039;&lt;span class=&quot;fw-bold&quot;&gt;Item 6&lt;/span&gt;&#039;
                    },
                    {
                        &#039;title&#039;: &#039;&lt;span class=&quot;fw-bold&quot;&gt;Item 7&lt;/span&gt;&#039;
                    },
                    {
                        &#039;title&#039;: &#039;&lt;span class=&quot;fw-bold&quot;&gt;Item 8&lt;/span&gt;&#039;
                    },
                    {
                        &#039;title&#039;: &#039;&lt;span class=&quot;fw-bold&quot;&gt;Item 9&lt;/span&gt;&#039;
                    },
                    {
                        &#039;title&#039;: &#039;&lt;span class=&quot;fw-bold&quot;&gt;Item 10&lt;/span&gt;&#039;
                    },
                    {
                        &#039;title&#039;: &#039;&lt;span class=&quot;fw-bold&quot;&gt;Item 11&lt;/span&gt;&#039;
                    },
                    {
                        &#039;title&#039;: &#039;&lt;span class=&quot;fw-bold&quot;&gt;Item 12&lt;/span&gt;&#039;
                    },
                    {
                        &#039;title&#039;: &#039;&lt;span class=&quot;fw-bold&quot;&gt;Item 13&lt;/span&gt;&#039;
                    },
                    {
                        &#039;title&#039;: &#039;&lt;span class=&quot;fw-bold&quot;&gt;Item 14&lt;/span&gt;&#039;
                    },
                    {
                        &#039;title&#039;: &#039;&lt;span class=&quot;fw-bold&quot;&gt;Item 15&lt;/span&gt;&#039;
                    },
                ]
            },
            {
                &#039;id&#039;: &#039;_fixed_height2&#039;,
                &#039;title&#039;: &#039;Fixed Height 2&#039;,
                &#039;class&#039;: &#039;success&#039;,
                &#039;item&#039;: [
                    {
                        &#039;title&#039;: &#039;&lt;span class=&quot;fw-bold&quot;&gt;Item 1&lt;/span&gt;&#039;
                    },
                    {
                        &#039;title&#039;: &#039;&lt;span class=&quot;fw-bold&quot;&gt;Item 2&lt;/span&gt;&#039;
                    },
                    {
                        &#039;title&#039;: &#039;&lt;span class=&quot;fw-bold&quot;&gt;Item 3&lt;/span&gt;&#039;
                    },
                    {
                        &#039;title&#039;: &#039;&lt;span class=&quot;fw-bold&quot;&gt;Item 4&lt;/span&gt;&#039;
                    },
                    {
                        &#039;title&#039;: &#039;&lt;span class=&quot;fw-bold&quot;&gt;Item 5&lt;/span&gt;&#039;
                    },
                    {
                        &#039;title&#039;: &#039;&lt;span class=&quot;fw-bold&quot;&gt;Item 6&lt;/span&gt;&#039;
                    },
                    {
                        &#039;title&#039;: &#039;&lt;span class=&quot;fw-bold&quot;&gt;Item 7&lt;/span&gt;&#039;
                    },
                    {
                        &#039;title&#039;: &#039;&lt;span class=&quot;fw-bold&quot;&gt;Item 8&lt;/span&gt;&#039;
                    },
                    {
                        &#039;title&#039;: &#039;&lt;span class=&quot;fw-bold&quot;&gt;Item 9&lt;/span&gt;&#039;
                    },
                    {
                        &#039;title&#039;: &#039;&lt;span class=&quot;fw-bold&quot;&gt;Item 10&lt;/span&gt;&#039;
                    },
                    {
                        &#039;title&#039;: &#039;&lt;span class=&quot;fw-bold&quot;&gt;Item 11&lt;/span&gt;&#039;
                    },
                    {
                        &#039;title&#039;: &#039;&lt;span class=&quot;fw-bold&quot;&gt;Item 12&lt;/span&gt;&#039;
                    },
                    {
                        &#039;title&#039;: &#039;&lt;span class=&quot;fw-bold&quot;&gt;Item 13&lt;/span&gt;&#039;
                    },
                    {
                        &#039;title&#039;: &#039;&lt;span class=&quot;fw-bold&quot;&gt;Item 14&lt;/span&gt;&#039;
                    },
                    {
                        &#039;title&#039;: &#039;&lt;span class=&quot;fw-bold&quot;&gt;Item 15&lt;/span&gt;&#039;
                    },
                ]
            }
            ],

            // Handle item scrolling
            dragEl: function (el, source) {
                document.addEventListener(&#039;mousemove&#039;, isDragging);
            },

            dragendEl: function (el) {
                document.removeEventListener(&#039;mousemove&#039;, isDragging);
            }
        });

        // Set jKanban max height
        const allBoards = kanbanEl.querySelectorAll(&#039;.kanban-drag&#039;);
        allBoards.forEach(board =&gt; {
            board.style.maxHeight = kanbanHeight + &#039;px&#039;;
        });
    }

    const isDragging = (e) =&gt; {
        const allBoards = kanbanEl.querySelectorAll(&#039;.kanban-drag&#039;);
        allBoards.forEach(board =&gt; {
            // Get inner item element
            const dragItem = board.querySelector(&#039;.gu-transit&#039;);

            // Stop drag on inactive board
            if (!dragItem) {
                return;
            }

            // Get jKanban drag container
            const containerRect = board.getBoundingClientRect();

            // Get inner item size
            const itemSize = dragItem.offsetHeight;

            // Get dragging element position
            const dragMirror = document.querySelector(&#039;.gu-mirror&#039;);
            const mirrorRect = dragMirror.getBoundingClientRect();

            // Calculate drag element vs jKanban container
            const topDiff = mirrorRect.top - containerRect.top;
            const bottomDiff = containerRect.bottom - mirrorRect.bottom;

            // Scroll container
            if (topDiff &lt;= itemSize) {
                // Scroll up if item at top of container
                board.scroll({
                    top: board.scrollTop - 3,
                });
            } else if (bottomDiff &lt;= itemSize) {
                // Scroll down if item at bottom of container
                board.scroll({
                    top: board.scrollTop + 3,
                });
            } else {
                // Stop scroll if item in middle of container
                board.scroll({
                    top: board.scrollTop,
                });
            }
        });
    }

    return {
        // Public Functions
        init: function () {
            element = &#039;#kt_docs_jkanban_fixed_height&#039;;
            kanbanEl = document.querySelector(element);

            exampleFixedHeight();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTJKanbanDemoFixedHeight.init();
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e5c4012c98d" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;div id=&quot;kt_docs_jkanban_fixed_height&quot; class=&quot;kanban-fixed-height&quot; data-jkanban-height=&quot;300&quot;&gt;&lt;/div&gt;</code></pre>
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
    <script src="{{ asset('assets/js/custom/documentation/general/jkanban/fixed-height.js') }}"></script>
    <!--end::Custom Javascript-->
@endsection


