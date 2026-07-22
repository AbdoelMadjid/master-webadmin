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
                            Swapper is an exclusive component of Metronic that provides a simple and elegent solution to
                            re-position HTML elements based on specific screen breakpoints.
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="usage" data-kt-scroll-offset="50">
                            <a href="#usage"></a>

                            Usage
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Swapper's Javascript bundles are globally included in all pages.
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;link href=&quot;assets/css/style.bundle.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot;/&gt;
&lt;script src=&quot;assets/js/scripts.bundle.js&quot;&gt;&lt;/script&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="initialization" data-kt-scroll-offset="50">
                            <a href="#initialization"></a>

                            Initializationw
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            <ul class="py-0">
                                <li class="py-2">
                                    Swapper is initialized by adding <code>data-kt-swapper="true"</code> to the root of the
                                    HTML that will be swapped positions.
                                </li>
                                <li class="py-2">
                                    Add <code>data-kt-swapper-mode="prepend"</code> to the root HTML element to configure if
                                    the swapped element would be appended or prepended within the parent.
                                </li>
                                <li class="py-2">
                                    Add
                                    <code>data-kt-swapper-parent="{default: '#parent_container_1', lg: '#parent_container_2'}"</code>
                                    to identify the parent containers that the swapping component will be added into based
                                    on Bootstrap's breakpoint sizes.
                                </li>
                                <li class="py-2">
                                    Swapper instances can also be controlled programmatically. <a href="#methods"
                                        data-kt-scroll-toggle>See below for more info</a>.
                                </li>
                            </ul>
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="basic-example" data-kt-scroll-offset="50">
                            <a href="#basic-example"></a>

                            Basic Example
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Here's a basic example of Swapper. Try the demo below by adjusting your browser width.
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
                                    All child elements within the Swapper component will also swap parents.
                                </div> <!--end::Description-->
                            </div><!--end::Information-->
                        </div>
                        <!--end::Notice-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-5 p-lg-15">
                                <div class="row g-10">
                                    <div class="col-lg-6">
                                        <div class="bg-light-primary h-100 p-5" id="kt_docs_swapper_parent_1">
                                            <div class="fw-bolder">Parent Element 1</div>
                                            <!--begin::Swapper-->
                                            <div class="mt-3" data-kt-swapper="true"
                                                data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                                                data-kt-swapper-parent="{
                                default: '#kt_docs_swapper_parent_4',
                                md: '#kt_docs_swapper_parent_3',
                                lg: '#kt_docs_swapper_parent_2',
                                xl: '#kt_docs_swapper_parent_1'
                            }">
                                                This HTML element will swap parent elements on different screen breakpoints
                                            </div>
                                            <!--end::Swapper-->
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="bg-light-info h-100 p-5" id="kt_docs_swapper_parent_2">
                                            <div class="fw-bolder">Parent Element 2</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="bg-light-warning h-100 p-5" id="kt_docs_swapper_parent_3">
                                            <div class="fw-bolder">Parent Element 3</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="bg-light-success h-100 p-5" id="kt_docs_swapper_parent_4">
                                            <div class="fw-bolder">Parent Element 4</div>
                                        </div>
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
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;div class=&quot;row g-10&quot;&gt;
    &lt;div class=&quot;col-lg-6&quot;&gt;
        &lt;div class=&quot;bg-light-primary h-100 p-5&quot; id=&quot;kt_docs_swapper_parent_1&quot;&gt;
            &lt;div class=&quot;fw-bolder&quot;&gt;Parent Element 1&lt;/div&gt;

            &lt;!--begin::Swapper--&gt;
            &lt;div class=&quot;mt-3&quot;
                data-kt-swapper=&quot;true&quot;
                data-kt-swapper-mode=&quot;{default: &#039;append&#039;, lg: &#039;prepend&#039;}&quot;
                data-kt-swapper-parent=&quot;{
                    default: &quot;#kt_docs_swapper_parent_4&quot;,
                    md: &quot;#kt_docs_swapper_parent_3&quot;,
                    lg: &quot;#kt_docs_swapper_parent_2&quot;,
                    xl: &quot;#kt_docs_swapper_parent_1&quot;
                }&quot;&gt;
                This HTML element will swap parent elements on different screen breakpoints
            &lt;/div&gt;
            &lt;!--end::Swapper--&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-lg-6&quot;&gt;
        &lt;div class=&quot;bg-light-info h-100 p-5&quot; id=&quot;kt_docs_swapper_parent_2&quot;&gt;
            &lt;div class=&quot;fw-bolder&quot;&gt;Parent Element 2&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-lg-6&quot;&gt;
        &lt;div class=&quot;bg-light-warning h-100 p-5&quot; id=&quot;kt_docs_swapper_parent_3&quot;&gt;
            &lt;div class=&quot;fw-bolder&quot;&gt;Parent Element 3&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-lg-6&quot;&gt;
        &lt;div class=&quot;bg-light-success h-100 p-5&quot; id=&quot;kt_docs_swapper_parent_4&quot;&gt;
            &lt;div class=&quot;fw-bolder&quot;&gt;Parent Element 4&lt;/div&gt;
        &lt;/div&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="markup-reference" data-kt-scroll-offset="50">
                            <a href="#markup-reference"></a>

                            Markup Reference
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Swapper uses HTML attributes to set specific configurations. Here are the references for each
                            below
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="fw-bold fs-2">HTML Attribute references</div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Table-->
                        <div class="py-5">
                            <div class="table-responsive border rounded">
                                <table class="table table-striped align-top mb-0 g-5">
                                    <thead>
                                        <tr class="fs-4 fw-bold text-gray-900 p-6">
                                            <th class="min-w-250px">Name</th>
                                            <th class="min-w-100px">Type</th>
                                            <th class="min-w-500px">Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <code>data-kt-swapper</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">mandatory</code>
                                            </td>
                                            <td>
                                                Enables the current element as the Swapper component. Accepts
                                                <code>true</code> or <code>false</code> values.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>data-kt-swapper-mode</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">optional</code>
                                            </td>
                                            <td>
                                                Defines the re-positioning method. Accepts <code>append</code> or
                                                <code>prepend</code>. Defaults to <code>append</code>.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>data-kt-swapper-parent</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">mandatory</code>
                                            </td>
                                            <td>
                                                <div class="mb-3">
                                                    Defines the parent element to be swapped into at specific Bootstrap
                                                    breakpoints. This is compatible with Bootstrap's standard breakpoint
                                                    sizing (eg: <code>sm, md, lg, xl</code>) with a similar <code>px</code>
                                                    values. For responsive options, this attribute value must be written as
                                                    an object string to enable multiple responsive breakpoints.
                                                </div>

                                                For example: <code>{default: '#parent_container_1', lg:
                                                    '#parent_container_2'}</code> that the swapper component will swap the
                                                parent element from <code>#parent_container_1</code> to
                                                <code>#parent_container_2</code> when the screen grows from smaller sizes to
                                                <code>lg</code> size or bigger and vice versa.
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="methods" data-kt-scroll-offset="50">
                            <a href="#methods"></a>

                            Methods
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            All Swapper components are initialized automatically, however the following are Password Meter's
                            functionality methods for more control.
                        </div>
                        <!--end::Block-->

                        <!--begin::Table-->
                        <div class="pt-2">
                            <!--begin::Table wrapper-->
                            <div class="table-responsive border rounded">
                                <!--begin::Table-->
                                <table class="table table-striped mb-0 g-6">
                                    <!--begin::Head-->
                                    <thead>
                                        <tr class="fs-4 fw-bold p-6">
                                            <th class="min-w-400px">Name</th>
                                            <th class="min-w-500px">Description</th>
                                        </tr>
                                    </thead>
                                    <!--end::Head-->

                                    <!--begin::Head-->
                                    <thead>
                                        <tr class="fs-4 fw-bold p-6">
                                            <th colspan="2">Static Methods</th>
                                        </tr>
                                    </thead>
                                    <!--end::Head-->

                                    <!--begin::Body-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <code>createInstances(DOMString selector)</code>
                                            </td>
                                            <td>
                                                Initializes Swapper instances by selector. Default value of
                                                <code>selector</code> is <code>[data-kt-swapper="true"]</code>.
                                                This method can be used to initialize dynamicly populated Swapper
                                                instances(e.g: after Ajax request).
                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">KTSwapper.createInstances();</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <code>getInstance(DOMElement element)</code>
                                            </td>
                                            <td>
                                                Get the Swapper instance created

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">var swapperElement = document.querySelector(&quot;#kt_swapper_control&quot;);
var swapper = KTSwapper.getInstance(swapperElement);</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Body-->

                                    <!--begin::Head-->
                                    <thead>
                                        <tr class="fs-4 fw-bold p-6">
                                            <th colspan="2">Public Methods</th>
                                        </tr>
                                    </thead>
                                    <!--end::Head-->

                                    <!--begin::Body-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <code>update</code>
                                            </td>
                                            <td>
                                                Forces the Swapper component to update and re-position depending on screen
                                                size.
                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">swapper.update();</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Body-->
                                </table>
                            </div>
                        </div>
                        <!--end::Table-->
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
                                <a href="#usage" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Usage</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#initialization" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Initializationw</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#basic-example" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Basic Example</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#markup-reference" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Markup Reference</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#methods" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Methods</span>
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
    <!--end::Vendors Javascript-->
@endsection


