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
                            Page Loading is a custom component to display a loading indicator over the page content.
                            The page loading element can be appended to the body element in advance or populated
                            dynamically.
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="basic" data-kt-scroll-offset="50">
                            <a href="#basic"></a>

                            Basic
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Click on the below button to toggle a page loading state with basic spinner indicator:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10 d-flex gap-4">
                                <button type="button" class="btn btn-primary" id="kt_page_loading_basic">
                                    Toggle Page Loading
                                </button>
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
                                            href="#kt_highlight_68e0a22d65e6c" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e0a22d65e70" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e0a22d65e6c" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript"><code class="language-javascript">// Toggle
const button = document.querySelector(&quot;#kt_page_loading_basic&quot;);

// Handle toggle click event
button.addEventListener(&quot;click&quot;, function() {
    // Populate the page loading element dynamically.
    // Optionally you can skipt this part and place the HTML
    // code in the body element by refer to the above HTML code tab.
    const loadingEl = document.createElement(&quot;div&quot;);
    document.body.append(loadingEl);
    loadingEl.classList.add(&quot;page-loader&quot;);
    loadingEl.innerHTML = `
        &lt;span class=&quot;spinner-border text-primary&quot; role=&quot;status&quot;&gt;
            &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
        &lt;/span&gt;
    `;

    // Show page loading
    KTApp.showPageLoading();

    // Hide after 3 seconds
    setTimeout(function() {
        KTApp.hidePageLoading();
        loadingEl.remove();
    }, 3000);
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e0a22d65e70" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;!--begin::Page loading(append to body)--&gt;
&lt;div class=&quot;page-loader&quot;&gt;
    &lt;span class=&quot;spinner-border text-primary&quot; role=&quot;status&quot;&gt;
        &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
    &lt;/span&gt;
&lt;/div&gt;
&lt;!--end::Page loading--&gt;</code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="message" data-kt-scroll-offset="50">
                            <a href="#message"></a>

                            Message
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Click on the below button to toggle a page loading state with basic spinner indicator
                            and text message:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10 d-flex gap-4">
                                <button type="button" class="btn btn-primary" id="kt_page_loading_message">
                                    Toggle Page Loading
                                </button>
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
                                            href="#kt_highlight_68e0a22d65e9a" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e0a22d65e9b" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e0a22d65e9a" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript"><code class="language-javascript">// Toggle
const button = document.querySelector(&quot;#kt_page_loading_message&quot;);

// Handle toggle click event
button.addEventListener(&quot;click&quot;, function() {
    // Populate the page loading element dynamically.
    // Optionally you can skipt this part and place the HTML
    // code in the body element by refer to the above HTML code tab.
    const loadingEl = document.createElement(&quot;div&quot;);
    document.body.prepend(loadingEl);
    loadingEl.classList.add(&quot;page-loader&quot;);
    loadingEl.classList.add(&quot;flex-column&quot;);
    loadingEl.innerHTML = `
        &lt;span class=&quot;spinner-border text-primary&quot; role=&quot;status&quot;&gt;&lt;/span&gt;
        &lt;span class=&quot;text-muted fs-6 fw-semibold mt-5&quot;&gt;Loading...&lt;/span&gt;
    `;

    // Show page loading
    KTApp.showPageLoading();

    // Hide after 3 seconds
    setTimeout(function() {
        KTApp.hidePageLoading();
        loadingEl.remove();
    }, 3000);
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e0a22d65e9b" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;!--begin::Page loading(append to body)--&gt;
&lt;div class=&quot;page-loader flex-column&quot;&gt;
    &lt;span class=&quot;spinner-border text-primary&quot; role=&quot;status&quot;&gt;&lt;/span&gt;
    &lt;span class=&quot;text-muted fs-6 fw-semibold mt-5&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;!--end::Page loading--&gt;</code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="overlay" data-kt-scroll-offset="50">
                            <a href="#overlay"></a>

                            Overlay
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Click on the below button to toggle a page loading state with basic spinner indicator
                            and text message along with overlay background color:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10 d-flex gap-4">
                                <button type="button" class="btn btn-primary" id="kt_page_loading_overlay">
                                    Toggle Page Loading
                                </button>
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
                                            href="#kt_highlight_68e0a22d65ebb" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e0a22d65ebc" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e0a22d65ebb"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript"><code class="language-javascript">// Toggle
const button = document.querySelector(&quot;#kt_page_loading_overlay&quot;);

// Handle toggle click event
button.addEventListener(&quot;click&quot;, function() {
    // Populate the page loading element dynamically.
    // Optionally you can skipt this part and place the HTML
    // code in the body element by refer to the above HTML code tab.
    const loadingEl = document.createElement(&quot;div&quot;);
    document.body.prepend(loadingEl);
    loadingEl.classList.add(&quot;page-loader&quot;);
    loadingEl.classList.add(&quot;flex-column&quot;);
    loadingEl.classList.add(&quot;bg-dark&quot;);
    loadingEl.classList.add(&quot;bg-opacity-25&quot;);
    loadingEl.innerHTML = `
        &lt;span class=&quot;spinner-border text-primary&quot; role=&quot;status&quot;&gt;&lt;/span&gt;
        &lt;span class=&quot;text-gray-800 fs-6 fw-semibold mt-5&quot;&gt;Loading...&lt;/span&gt;
    `;

    // Show page loading
    KTApp.showPageLoading();

    // Hide after 3 seconds
    setTimeout(function() {
        KTApp.hidePageLoading();
        loadingEl.remove();
    }, 3000);
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e0a22d65ebc" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;!--begin::Page loading(append to body)--&gt;
&lt;div class=&quot;page-loader flex-column bg-dark bg-opacity-25&quot;&gt;
    &lt;span class=&quot;spinner-border text-primary&quot; role=&quot;status&quot;&gt;&lt;/span&gt;
    &lt;span class=&quot;text-gray-800 fs-6 fw-semibold mt-5&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;!--end::Page loading--&gt;</code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="initial" data-kt-scroll-offset="50">
                            <a href="#initial"></a>

                            Initial
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            To display the loading on initial page load, append the one of the above loaders HTML
                            code to the body element and set
                            <code>data-kt-app-page-loading-enabled="true"</code> and
                            <code>data-kt-app-page-loading="on"</code> attributes.
                            Thus the loading indicator will be shown on the initial page loading and automatically
                            hidden once page loading is completed.
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;body class=&quot;app-default&quot; data-kt-app-page-loading-enabled=&quot;true&quot; data-kt-app-page-loading=&quot;on&quot;&gt;
	&lt;!--begin::Page loading(append to body)--&gt;
	&lt;div class=&quot;page-loader&quot;&gt;
		&lt;span class=&quot;spinner-border text-primary&quot; role=&quot;status&quot;&gt;
			&lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
		&lt;/span&gt;
	&lt;/div&gt;
	&lt;!--end::Page loading--&gt;
	...
&lt;/body&gt;</code></pre>
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
                                <a href="#message" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Message</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#overlay" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Overlay</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#initial" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Initial</span>
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
    <script src="{{ asset('assets/js/custom/documentation/base/page-loading.js') }}"></script>
    <!--end::Vendors Javascript-->
@endsection


