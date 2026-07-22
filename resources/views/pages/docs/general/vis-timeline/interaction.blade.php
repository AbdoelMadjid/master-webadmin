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
                        <h1 class="anchor fw-bold mb-5" data-kt-scroll-offset="85" id="interaction">
                            <a href="#interaction" data-kt-scroll-toggle></a>
                            Interactions Example
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="mb-3">
                                Here's an example of Vis-timeline with interactive buttons to navigate Vis-timeline items
                                with animation. For more info, please visit the <a
                                    href="https://github.com/visjs/vis-timeline" target="_blank">official website</a>.
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="d-flex mb-5 btn-group">
                                <input type="button" id="window1" class="btn btn-light-primary"
                                    value="Set window from 2014-01-01 to 2014-04-01" />
                                <input type="button" id="moveTo" class="btn btn-light-primary"
                                    value="Move to 2014-02-01" />
                                <input type="button" id="fit" class="btn btn-light-primary" value="Fit all items" />
                                <input type="button" id="select" class="btn btn-light-primary"
                                    value="Select &amp; focus items 5 and 6" />
                                <input type="button" id="focus1" class="btn btn-light-primary" value="Focus item 2" />
                            </div>

                            <div id="kt_docs_vistimeline_interaction"></div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="pt-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e5d80d3386c" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e5d80d33871" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5d80d3386c" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">// create a dataset with items
// we specify the type of the fields `start` and `end` here to be strings
// containing an ISO date. The fields will be outputted as ISO dates
// automatically getting data from the DataSet via items.get().
var items = new vis.DataSet({
    type: { start: &quot;ISODate&quot;, end: &quot;ISODate&quot; },
});

// add items to the DataSet
items.add([
    { id: 1, content: &quot;item 1&lt;br&gt;start&quot;, start: &quot;2021-01-23&quot; },
    { id: 2, content: &quot;item 2&quot;, start: &quot;2021-01-18&quot; },
    { id: 3, content: &quot;item 3&quot;, start: &quot;2021-01-21&quot; },
    { id: 4, content: &quot;item 4&quot;, start: &quot;2021-01-19&quot;, end: &quot;2021-01-24&quot; },
    { id: 5, content: &quot;item 5&quot;, start: &quot;2021-01-28&quot;, type: &quot;point&quot; },
    { id: 6, content: &quot;item 6&quot;, start: &quot;2021-01-26&quot; },
]);

var container = document.getElementById(&quot;kt_docs_vistimeline_interaction&quot;);
var options = {
    start: &quot;2021-01-10&quot;,
    end: &quot;2021-02-10&quot;,
    editable: true,
    showCurrentTime: true,
};

var timeline = new vis.Timeline(container, items, options);

// Handle buttons
document.getElementById(&quot;window1&quot;).onclick = function () {
    timeline.setWindow(&quot;2021-01-01&quot;, &quot;2021-04-01&quot;);
};
document.getElementById(&quot;fit&quot;).onclick = function () {
    timeline.fit();
};
document.getElementById(&quot;select&quot;).onclick = function () {
    timeline.setSelection([5, 6], {
        focus: true,
    });
};
document.getElementById(&quot;focus1&quot;).onclick = function () {
    timeline.focus(2);
};
document.getElementById(&quot;moveTo&quot;).onclick = function () {
    timeline.moveTo(&quot;2021-02-01&quot;);
};</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e5d80d33871" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;div class=&quot;d-flex mb-5 btn-group&quot;&gt;
    &lt;input type=&quot;button&quot; id=&quot;window1&quot; class=&quot;btn btn-light-primary&quot; value=&quot;Set window from 2014-01-01 to 2014-04-01&quot; /&gt;
    &lt;input type=&quot;button&quot; id=&quot;moveTo&quot; class=&quot;btn btn-light-primary&quot; value=&quot;Move to 2014-02-01&quot; /&gt;
    &lt;input type=&quot;button&quot; id=&quot;fit&quot; class=&quot;btn btn-light-primary&quot; value=&quot;Fit all items&quot; /&gt;
    &lt;input type=&quot;button&quot; id=&quot;select&quot; class=&quot;btn btn-light-primary&quot; value=&quot;Select &amp;amp; focus items 5 and 6&quot; /&gt;
    &lt;input type=&quot;button&quot; id=&quot;focus1&quot; class=&quot;btn btn-light-primary&quot; value=&quot;Focus item 2&quot; /&gt;
&lt;/div&gt;

&lt;div id=&quot;kt_docs_vistimeline_interaction&quot;&gt;&lt;/div&gt;</code></pre>
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
    <script src="{{ asset('assets/plugins/custom/vis-timeline/vis-timeline.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/custom/documentation/general/vis-timeline/interaction.js') }}"></script>
    <!--end::Custom Javascript-->
@endsection


