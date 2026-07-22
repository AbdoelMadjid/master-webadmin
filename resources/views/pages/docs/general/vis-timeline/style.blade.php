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
                        <h1 class="anchor fw-bold mb-5" data-kt-scroll-offset="85" id="data">
                            <a href="#data" data-kt-scroll-toggle></a>
                            Custom Styling Example
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="mb-3">
                                Here's an example of Vis-timeline with custom styling. For more info, please visit the <a
                                    href="https://github.com/visjs/vis-timeline" target="_blank">official website</a>.
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div id="kt_docs_vistimeline_style"></div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="pt-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e5d7b6108ef" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e5d7b6108f6" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5d7b6108ef" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">var container = document.getElementById(&quot;kt_docs_vistimeline_style&quot;);

// Generate HTML content
const getContent = (title, img) =&gt; {
    const item = document.createElement(&#039;div&#039;);
    const name = document.createElement(&#039;div&#039;);
    const nameClasses = [&#039;fw-bolder&#039;, &#039;mb-2&#039;];
    name.classList.add(...nameClasses);
    name.innerHTML = title;

    const image = document.createElement(&#039;img&#039;);
    image.setAttribute(&#039;src&#039;, img);

    const symbol = document.createElement(&#039;div&#039;);
    const symbolClasses = [&#039;symbol&#039;, &#039;symbol-circle&#039;, &#039;symbol-30&#039;];
    symbol.classList.add(...symbolClasses);
    symbol.appendChild(image);

    item.appendChild(name);
    item.appendChild(symbol);

    return item;
}

// note that months are zero-based in the JavaScript Date object
var items = new vis.DataSet([
    {
        start: new Date(2010, 7, 23),
        content: getContent(&#039;Conversation&#039;, &#039;./assets/media/avatars/300-6.jpg&#039;)
    },
    {
        start: new Date(2010, 7, 23, 23, 0, 0),
        content: getContent(&#039;Mail from boss&#039;, &#039;./assets/media/avatars/300-1.jpg&#039;)
    },
    { start: new Date(2010, 7, 24, 16, 0, 0), content: &quot;Report&quot; },
    {
        start: new Date(2010, 7, 26),
        end: new Date(2010, 8, 2),
        content: &quot;Traject A&quot;,
    },
    {
        start: new Date(2010, 7, 28),
        content: getContent(&#039;Memo&#039;, &#039;./assets/media/avatars/300-2.jpg&#039;)
    },
    {
        start: new Date(2010, 7, 29),
        content: getContent(&#039;Phone call&#039;, &#039;./assets/media/avatars/300-5.jpg&#039;)
    },
    {
        start: new Date(2010, 7, 31),
        end: new Date(2010, 8, 3),
        content: &quot;Traject B&quot;,
    },
    {
        start: new Date(2010, 8, 4, 12, 0, 0),
        content: getContent(&#039;Report&#039;, &#039;./assets/media/avatars/300-20.jpg&#039;)
    },
]);

var options = {
    editable: true,
    margin: {
        item: 20,
        axis: 40,
    },
};

var timeline = new vis.Timeline(container, items, options);</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e5d7b6108f6" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;div id=&quot;kt_docs_vistimeline_style&quot;&gt;&lt;/div&gt;</code></pre>
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
    <script src="{{ asset('assets/js/custom/documentation/general/vis-timeline/style.js') }}"></script>
    <!--end::Custom Javascript-->
@endsection


