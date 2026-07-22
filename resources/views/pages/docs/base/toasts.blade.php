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
                            Bootstrap Toast is globally initialized by <code>src/js/components/app.js</code> wrapper
                            script via <code>.toast</code> CSS class.
                            For more info, please visit <a href="https://getbootstrap.com/docs/5.1/components/toasts/"
                                target="_blank">Bootstrap's official documentation</a>.
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
                            Use <code>.toast</code> CSS class to initialize a toast element by passing any of
                            available options as explained
                            in <a href="https://getbootstrap.com/docs/5.2/components/toasts/#options" class="fw-semibold"
                                target="_blank">Toast Options</a>.
                        </div>
                        <!--end::Block-->

                        <!--begin::Notice-->
                        <div class="py-5">
                            <!--begin::Information-->
                            <div class="d-flex align-items-center rounded py-5 px-5 bg-light-primary "><i
                                    class="ki-duotone ki-information-5 fs-3x text-primary me-5"><span
                                        class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-bold fs-6">
                                    Please note that Bootstrap Toast will automatically hide if you do not specify
                                    <code>autohide: false</code>.
                                </div> <!--end::Description-->
                            </div><!--end::Information-->
                        </div>
                        <!--end::Notice-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="toast-header">
                                        <i class="ki-duotone ki-abstract-39 fs-2 text-primary me-3"><span
                                                class="path1"></span><span class="path2"></span></i> <strong
                                            class="me-auto">Keenthemes</strong>
                                        <small class="fs-8">11 mins ago</small>
                                        <button type="button" class="btn-close" data-bs-dismiss="toast"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="toast-body">
                                        Hello, world! This is a toast message.
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
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;toast show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
    &lt;div class=&quot;toast-header&quot;&gt;
        &lt;i class=&quot;ki-duotone ki-abstract-39 fs-2 text-primary me-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
        &lt;strong class=&quot;me-auto&quot;&gt;Keenthemes&lt;/strong&gt;
        &lt;small&gt;11 mins ago&lt;/small&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;toast-body&quot;&gt;
        Hello, world! This is a toast message.
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="toggle" data-kt-scroll-offset="50">
                            <a href="#toggle"></a>

                            Toggle
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Here's an example of Bootstrap Toast toggling on button click. Use the Javascript below
                            to handle the click action event.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Button-->
                                <button type="button" class="btn btn-primary" id="kt_docs_toast_toggle_button">Toggle
                                    Toast</button>
                                <!--end::Button-->

                                <!--begin::Toast-->
                                <div class="position-fixed top-0 end-0 p-3" style="z-index: 100">
                                    <div id="kt_docs_toast_toggle" class="toast" role="alert" aria-live="assertive"
                                        aria-atomic="true">
                                        <div class="toast-header">
                                            <i class="ki-duotone ki-abstract-19 fs-2 text-danger me-3"><span
                                                    class="path1"></span><span class="path2"></span></i> <strong
                                                class="me-auto">Keenthemes</strong>
                                            <small class="fs-8">11 mins ago</small>
                                            <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body">
                                            Hello, world! This is a toast message.
                                        </div>
                                    </div>
                                </div>
                                <!--end::Toast-->
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
                                            href="#kt_highlight_68e0a7e91beaa" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e0a7e91bead" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e0a7e91beaa"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">// Select elements
const button = document.getElementById(&#039;kt_docs_toast_toggle_button&#039;);
const toastElement = document.getElementById(&#039;kt_docs_toast_toggle&#039;);

// Get toast instance --- more info: https://getbootstrap.com/docs/5.1/components/toasts/#getinstance
const toast = bootstrap.Toast.getOrCreateInstance(toastElement);

// Handle button click
button.addEventListener(&#039;click&#039;, e =&gt; {
    e.preventDefault();

    // Toggle toast to show --- more info: https://getbootstrap.com/docs/5.1/components/toasts/#show
    toast.show();
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e0a7e91bead" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Button--&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; id=&quot;kt_docs_toast_toggle_button&quot;&gt;Toggle Toast&lt;/button&gt;
&lt;!--end::Button--&gt;

&lt;!--begin::Toast--&gt;
&lt;div class=&quot;position-fixed top-0 end-0 p-3 z-index-3&quot;&gt;
    &lt;div id=&quot;kt_docs_toast_toggle&quot; class=&quot;toast&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
        &lt;div class=&quot;toast-header&quot;&gt;
            &lt;i class=&quot;ki-duotone ki-abstract-19 fs-2 text-danger me-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
            &lt;strong class=&quot;me-auto&quot;&gt;Keenthemes&lt;/strong&gt;
            &lt;small&gt;11 mins ago&lt;/small&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class=&quot;toast-body&quot;&gt;
            Hello, world! This is a toast message.
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;!--end::Toast--&gt;</code></pre>
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
                        <h1 class="anchor fw-bold mb-5" id="dynamic-stacking" data-kt-scroll-offset="50">
                            <a href="#dynamic-stacking"></a>

                            Dynamic Stacking
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Here's an example of Bootstrap Toast stacking on top of each other on click. Use the
                            Javascript below to handle the click action event.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Button-->
                                <button type="button" class="btn btn-primary" id="kt_docs_toast_stack_button">Toggle
                                    Toast</button>
                                <!--end::Button-->

                                <!--begin::Toast-->
                                <div id="kt_docs_toast_stack_container"
                                    class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 100">
                                    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true"
                                        data-kt-docs-toast="stack">
                                        <div class="toast-header">
                                            <i class="ki-duotone ki-abstract-23 fs-2 text-success me-3"><span
                                                    class="path1"></span><span class="path2"></span></i> <strong
                                                class="me-auto">Keenthemes</strong>
                                            <small class="fs-8">11 mins ago</small>
                                            <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body">
                                            Hello, world! This is a toast message.
                                        </div>
                                    </div>
                                </div>
                                <!--end::Toast-->
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
                                            href="#kt_highlight_68e0a7e91bedb" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e0a7e91bedc" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e0a7e91bedb"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">// Select elements
const button = document.getElementById(&#039;kt_docs_toast_stack_button&#039;);
const container = document.getElementById(&#039;kt_docs_toast_stack_container&#039;);
const targetElement = document.querySelector(&#039;[data-kt-docs-toast=&quot;stack&quot;]&#039;); // Use CSS class or HTML attr to avoid duplicating ids

// Remove base element markup
targetElement.parentNode.removeChild(targetElement);

// Handle button click
button.addEventListener(&#039;click&#039;, e =&gt; {
    e.preventDefault();

    // Create new toast element
    const newToast = targetElement.cloneNode(true);
    container.append(newToast);

    // Create new toast instance --- more info: https://getbootstrap.com/docs/5.1/components/toasts/#getorcreateinstance
    const toast = bootstrap.Toast.getOrCreateInstance(newToast);

    // Toggle toast to show --- more info: https://getbootstrap.com/docs/5.1/components/toasts/#show
    toast.show();
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e0a7e91bedc" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Button--&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; id=&quot;kt_docs_toast_stack_button&quot;&gt;Toggle Toast&lt;/button&gt;
&lt;!--end::Button--&gt;

&lt;!--begin::Toast--&gt;
&lt;div id=&quot;kt_docs_toast_stack_container&quot; class=&quot;toast-container position-fixed top-0 end-0 p-3 z-index-3&quot;&gt;
    &lt;div class=&quot;toast&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot; data-kt-docs-toast=&quot;stack&quot;&gt;
        &lt;div class=&quot;toast-header&quot;&gt;
            &lt;i class=&quot;ki-duotone ki-abstract-23 fs-2 text-success me-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
            &lt;strong class=&quot;me-auto&quot;&gt;Keenthemes&lt;/strong&gt;
            &lt;small&gt;11 mins ago&lt;/small&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class=&quot;toast-body&quot;&gt;
            Hello, world! This is a toast message.
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;!--end::Toast--&gt;</code></pre>
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
                                <a href="#toggle" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Toggle</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#dynamic-stacking" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Dynamic Stacking</span>
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
    <script src="{{ asset('assets/js/custom/documentation/base/toasts.js') }}"></script>
    <!--end::Vendors Javascript-->
@endsection


