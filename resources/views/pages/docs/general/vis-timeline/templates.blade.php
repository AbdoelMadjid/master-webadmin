@extends('layouts.document832')
@section('styles')
    <link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/custom/vis-timeline/vis-timeline.bundle.css') }}" rel="stylesheet" type="text/css" />
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
                            Vis-timeline is an interactive visualization chart to visualize data in time. For more info
                            visit <a class="fw-bold" href="https://github.com/visjs/vis-timeline">the Github repository</a>.
                        </div> <!--end::Description-->
                    </div><!--end::Notice-->
                    <!--begin::Section-->
                    <div class="pt-10">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" data-kt-scroll-offset="85" id="template">
                            <a href="#background" data-kt-scroll-toggle></a>
                            Template Item Example
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="mb-3">
                                Here's an example of Vis-timeline with template items. For more info, please visit the <a
                                    href="https://github.com/visjs/vis-timeline" target="_blank">official website</a>.
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Notice-->
                        <div class="py-5">
                            <!--begin::Information-->
                            <div class="d-flex align-items-center rounded py-5 px-5 bg-light-warning "><i
                                    class="ki-duotone ki-information-5 fs-3x text-warning me-5"><span
                                        class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-bold fs-6">
                                    <a href="https://handlebarsjs.com/" target="_blank" class="me-1">Handlebars</a> is
                                    used as the template engine in this example.
                                </div> <!--end::Description-->
                            </div><!--end::Information-->
                        </div>
                        <!--end::Notice-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div id="kt_docs_vistimeline_template"></div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="pt-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e5d8302fd72" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e5d8302fd76" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5d8302fd72" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px">
                                                <code class="language-javascript">
// Template data --- handlebars is used as the template for this demo. For more info: https://handlebarsjs.com/
    const data = `&lt;table class=&quot;score&quot;&gt;
        &lt;tr&gt;
            &lt;td colspan=&quot;3&quot; class=&quot;description&quot;&gt;
                @{{ description }}
            &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;@{{ player1 }}&lt;/td&gt;
        &lt;th&gt;
            @{{ score1 }} - @{{ score2 }}
        &lt;/th&gt;
            &lt;td&gt;@{{ player2 }}&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;
                &lt;img
                src=&quot;https://flagpedia.net/data/flags/mini/@{{ abbr1 }}.png&quot;
                width=&quot;31&quot;
                height=&quot;20&quot;
                alt=&quot;@{{ abbr1 }}&quot;
                /&gt;
            &lt;/td&gt;
        &lt;th&gt;&lt;/th&gt;
            &lt;td&gt;
                &lt;img
                src=&quot;https://flagpedia.net/data/flags/mini/@{{ abbr2 }}.png&quot;
                width=&quot;31&quot;
                height=&quot;20&quot;
                alt=&quot;@{{ abbr2 }}&quot;
                /&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
    &lt;/table&gt;`;

    // Private functions
    var exampleTemplate = function () {
        // create a handlebars template --- For more info: https://handlebarsjs.com/
        var template = Handlebars.compile(data);

        // DOM element where the Timeline will be attached
        var container = document.getElementById(&quot;kt_docs_vistimeline_template&quot;);

        // Create a DataSet (allows two way data-binding)
        var items = new vis.DataSet([
            // round of 16
            {
                player1: &quot;Brazil&quot;,
                abbr1: &quot;br&quot;,
                score1: &quot;1 (3)&quot;,
                player2: &quot;Chile&quot;,
                abbr2: &quot;cl&quot;,
                score2: &quot;1 (2)&quot;,
                description: &quot;round of 16&quot;,
                start: &quot;2014-06-28T13:00:00&quot;,
            },
            {
                player1: &quot;Colombia&quot;,
                abbr1: &quot;co&quot;,
                score1: 2,
                player2: &quot;Uruguay&quot;,
                abbr2: &quot;uy&quot;,
                score2: 0,
                description: &quot;round of 16&quot;,
                start: &quot;2014-06-28T17:00:00&quot;,
            },
            {
                player1: &quot;Netherlands&quot;,
                abbr1: &quot;nl&quot;,
                score1: 2,
                player2: &quot;Mexico&quot;,
                abbr2: &quot;mx&quot;,
                score2: 1,
                description: &quot;round of 16&quot;,
                start: &quot;2014-06-29T13:00:00&quot;,
            }
        ]);

        // Configuration for the Timeline
        var options = {
            // specify a template for the items
            template: template,
        };

        // Create a Timeline
        var timeline = new vis.Timeline(container, items, options);</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e5d8302fd76" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;div id=&quot;kt_docs_vistimeline_template&quot;&gt;&lt;/div&gt;</code></pre>
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
    <script src="{{ asset('assets/plugins/custom/vis-timeline/vis-timeline.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/custom/documentation/general/vis-timeline/template.js') }}"></script>
    <!--end::Custom Javascript-->
@endsection


