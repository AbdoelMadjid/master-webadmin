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
                            Metronic customizes the <a href="https://getbootstrap.com/docs/5.2/forms/overview/"
                                class="fw-semibold">Bootstrap Forms</a>&nbsp;
                            through the SASS variables in <code>src/sass/components/_variables.scss</code> and adds
                            additonal options for the form elements in <code>src/sass/components/forms/</code>.
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="form-control" data-kt-scroll-offset="50">
                            <a href="#form-control"></a>

                            Form Control
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.form-control-solid</code> class with <code>.form-control</code> to set solid
                            background style for a form control:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">

                                <div class="mb-10">
                                    <label class="form-label">Default input</label>
                                    <input type="email" class="form-control" placeholder="name@example.com"
                                        autocomplete="email" />
                                </div>

                                <div class="mb-10">
                                    <label class="form-label">Solid background style</label>
                                    <input type="text" class="form-control form-control-solid"
                                        placeholder="name@example.com" />
                                </div>

                                <div class="mb-10">
                                    <label class="form-label">Transparent background style</label>
                                    <input type="text" class="form-control form-control-transparent"
                                        placeholder="name@example.com" />
                                </div>

                                <!--begin::Code-->
                                <div class="py-0">
                                    <!--begin::Highlight-->
                                    <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;name@example.com&quot;/&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control form-control-solid&quot; placeholder=&quot;name@example.com&quot;/&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control form-control-transparent&quot; placeholder=&quot;name@example.com&quot;/&gt;</code></pre>
                                        </div>
                                    </div><!--end::Highlight-->
                                </div>
                                <!--end::Code-->
                            </div>
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="flush-form-control" data-kt-scroll-offset="50">
                            <a href="#flush-form-control"></a>

                            Flush Form Control
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.form-control-flush</code> class with <code>.form-control</code> to remove the
                            default background-color, borders, and rounded corners of a form input.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">

                                <div class="mb-10">
                                    <label for="exampleFormControlInput1" class="form-label">Example</label>
                                    <input type="email" class="form-control form-control-flush"
                                        placeholder="Example input" />
                                </div>

                                <!--begin::Code-->
                                <div class="py-0">
                                    <!--begin::Highlight-->
                                    <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;input type=&quot;email&quot; class=&quot;form-control form-control-flush&quot; placeholder=&quot;Example input&quot;/&gt;</code></pre>
                                        </div>
                                    </div><!--end::Highlight-->
                                </div>
                                <!--end::Code-->
                            </div>
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="form-labels" data-kt-scroll-offset="50">
                            <a href="#form-labels"></a>

                            Form Labels
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.required</code> class with <code>.form-label</code> or any custom element to
                            indicate input's mandatory status:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-10">
                                    <label for="exampleFormControlInput1" class="required form-label">Symbol in
                                        label</label>
                                    <input type="email" class="form-control form-control-solid"
                                        placeholder="Example input" />
                                </div>

                                <div class="mb-10">
                                    <label for="exampleFormControlInput1" class="form-label">Symbol in input</label>
                                    <div class="position-relative">
                                        <div class="required position-absolute top-0"></div>
                                        <input type="email" class="form-control form-control-solid"
                                            placeholder="Example input" />
                                    </div>
                                </div>

                                <!--begin::Code-->
                                <div class="py-0">
                                    <!--begin::Highlight-->
                                    <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;div class=&quot;mb-10&quot;&gt;
    &lt;label for=&quot;exampleFormControlInput1&quot; class=&quot;required form-label&quot;&gt;Symbol in label&lt;/label&gt;
    &lt;input type=&quot;email&quot; class=&quot;form-control form-control-solid&quot; placeholder=&quot;Example input&quot;/&gt;
&lt;/div&gt;

&lt;div class=&quot;mb-10&quot;&gt;
    &lt;label for=&quot;exampleFormControlInput1&quot; class=&quot;form-label&quot;&gt;Symbol in input&lt;/label&gt;
    &lt;div class=&quot;position-relative&quot;&gt;
        &lt;div class=&quot;required position-absolute top-0&quot;&gt;&lt;/div&gt;
        &lt;input type=&quot;email&quot; class=&quot;form-control form-control-solid&quot; placeholder=&quot;Example input&quot;/&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div><!--end::Highlight-->
                                </div>
                                <!--end::Code-->
                            </div>
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="form-select" data-kt-scroll-offset="50">
                            <a href="#form-select"></a>

                            Form Select
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.form-select-solid</code> class with <code>.form-select</code> to set solid
                            background style for a form select:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">

                                <div class="mb-10">
                                    <label for="exampleFormControlInput1" class="form-label">Default
                                        select</label>
                                    <select class="form-select" aria-label="Select example">
                                        <option>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>

                                <div class="mb-10">
                                    <label for="exampleFormControlInput1" class="form-label">Solid background
                                        style</label>
                                    <select class="form-select form-select-solid" aria-label="Select example">
                                        <option>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>

                                <div class="mb-10">
                                    <label for="exampleFormControlTextarea1" class="form-label">Transparent
                                        background style</label>
                                    <select class="form-select form-select-transparent" aria-label="Select example">
                                        <option>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>

                                <!--begin::Code-->
                                <div class="py-0">
                                    <!--begin::Highlight-->
                                    <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;select class=&quot;form-select&quot; aria-label=&quot;Select example&quot;&gt;
    &lt;option&gt;Open this select menu&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
&lt;/select&gt;

&lt;select class=&quot;form-select form-select-solid&quot; aria-label=&quot;Select example&quot;&gt;
    &lt;option&gt;Open this select menu&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
&lt;/select&gt;

&lt;select class=&quot;form-select form-select-transparent&quot; aria-label=&quot;Select example&quot;&gt;
    &lt;option&gt;Open this select menu&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
&lt;/select&gt;</code></pre>
                                        </div>
                                    </div><!--end::Highlight-->
                                </div>
                                <!--end::Code-->
                            </div>
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="form-range" data-kt-scroll-offset="50">
                            <a href="#form-range"></a>

                            Form Range
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.form-range</code> class with <code>.form-select</code> to set solid
                            background style for a form select:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">

                                <div class="mb-10">
                                    <label for="customRange1" class="form-label">Example range</label>
                                    <input type="range" class="form-range rounded" id="customRange1" />
                                </div>

                                <div class="mb-10">
                                    <label for="customRange1" class="form-label">Disabled range</label>
                                    <input type="range" class="form-range rounded" id="customRange1"disabled />
                                </div>

                                <!--begin::Code-->
                                <div class="py-0">
                                    <!--begin::Highlight-->
                                    <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;div class=&quot;mb-10&quot;&gt;
	&lt;label for=&quot;customRange1&quot; class=&quot;form-label&quot;&gt;Example range&lt;/label&gt;
	&lt;input type=&quot;range&quot; class=&quot;form-range&quot; id=&quot;customRange1&quot; /&gt;
&lt;/div&gt;

&lt;div class=&quot;mb-10&quot;&gt;
	&lt;label for=&quot;customRange1&quot; class=&quot;form-label&quot;&gt;Disabled range&lt;/label&gt;
	&lt;input type=&quot;range&quot; class=&quot;form-range&quot; id=&quot;customRange1&quot;disabled /&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div><!--end::Highlight-->
                                </div>
                                <!--end::Code-->
                            </div>
                        </div>
                        <!--end::Block-->
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
                                <a href="#form-control" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Form Control</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#flush-form-control" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Flush Form Control</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#form-labels" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Form Labels</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#form-select" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Form Select</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#form-range" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Form Range</span>
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


