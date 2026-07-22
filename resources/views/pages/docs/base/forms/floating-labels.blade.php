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
                            Metronic customizes the <a href="https://getbootstrap.com/docs/5.2/forms/floating-labels/"
                                class="fw-semibold">Bootstrap Floating Labels</a>&nbsp;
                            through the SASS variables in <code>src/sass/components/_variables.scss</code>.
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
                            Basic examples of using floating labels:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Input group-->
                                <div class="form-floating mb-7">
                                    <input type="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com" />
                                    <label for="floatingInput">Email address</label>
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="form-floating mb-7">
                                    <input type="password" class="form-control" id="floatingPassword"
                                        placeholder="Password" />
                                    <label for="floatingPassword">Password</label>
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="floatingInputValue"
                                        placeholder="name@example.com" value="test@example.com" />
                                    <label for="floatingInputValue">Input with value</label>
                                </div>
                                <!--end::Input group-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Input group--&gt;
&lt;div class=&quot;form-floating mb-7&quot;&gt;
    &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;floatingInput&quot; placeholder=&quot;name@example.com&quot;/&gt;
    &lt;label for=&quot;floatingInput&quot;&gt;Email address&lt;/label&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;

&lt;!--begin::Input group--&gt;
&lt;div class=&quot;form-floating mb-7&quot;&gt;
    &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;floatingPassword&quot; placeholder=&quot;Password&quot;/&gt;
    &lt;label for=&quot;floatingPassword&quot;&gt;Password&lt;/label&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;

&lt;!--begin::Input group--&gt;
&lt;div class=&quot;form-floating&quot;&gt;
    &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;floatingInputValue&quot; placeholder=&quot;name@example.com&quot; value=&quot;test@example.com&quot;/&gt;
    &lt;label for=&quot;floatingInputValue&quot;&gt;Input with value&lt;/label&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="validation-states" data-kt-scroll-offset="50">
                            <a href="#validation-states"></a>

                            Validation States
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Form validation states work as expected:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Input group-->
                                <div class="form-floating mb-7">
                                    <input type="email" class="form-control is-valid" id="floatingInput2"
                                        placeholder="name@example.com" value="test@example.com" />
                                    <label for="floatingInput">Valid input</label>
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="form-floating">
                                    <input type="password" class="form-control is-invalid" id="floatingPassword2"
                                        placeholder="name@example.com" value="test@example.com" />
                                    <label for="floatingPassword">Invalid input</label>
                                </div>
                                <!--end::Input group-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;!--begin::Input group--&gt;
&lt;div class=&quot;form-floating mb-7&quot;&gt;
    &lt;input type=&quot;email&quot; class=&quot;form-control is-valid&quot; id=&quot;floatingInput2&quot; placeholder=&quot;name@example.com&quot; value=&quot;test@example.com&quot;/&gt;
    &lt;label for=&quot;floatingInput&quot;&gt;Valid input&lt;/label&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;

&lt;!--begin::Input group--&gt;
&lt;div class=&quot;form-floating&quot;&gt;
    &lt;input type=&quot;password&quot; class=&quot;form-control is-invalid&quot; id=&quot;floatingPassword2&quot; placeholder=&quot;name@example.com&quot; value=&quot;test@example.com&quot;/&gt;
    &lt;label for=&quot;floatingPassword&quot;&gt;Invalid input&lt;/label&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="textareas" data-kt-scroll-offset="50">
                            <a href="#textareas"></a>

                            Textareas
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Textares with default and custom height options:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Input group-->
                                <div class="form-floating mb-7">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                    <label for="floatingTextarea">Comments</label>
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                    <label for="floatingTextarea2">Comments</label>
                                </div>
                                <!--end::Input group-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;!--begin::Input group--&gt;
&lt;div class=&quot;form-floating mb-7&quot;&gt;
    &lt;textarea class=&quot;form-control&quot; placeholder=&quot;Leave a comment here&quot; id=&quot;floatingTextarea&quot;&gt;&lt;/textarea&gt;
    &lt;label for=&quot;floatingTextarea&quot;&gt;Comments&lt;/label&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;

&lt;!--begin::Input group--&gt;
&lt;div class=&quot;form-floating&quot;&gt;
    &lt;textarea class=&quot;form-control&quot; placeholder=&quot;Leave a comment here&quot; id=&quot;floatingTextarea2&quot; style=&quot;height: 100px&quot;&gt;&lt;/textarea&gt;
    &lt;label for=&quot;floatingTextarea2&quot;&gt;Comments&lt;/label&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="select" data-kt-scroll-offset="50">
                            <a href="#select"></a>

                            Select
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Floating Labels are available on form select elements as well:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Input group-->
                                <div class="form-floating">
                                    <select class="form-select" id="floatingSelect"
                                        aria-label="Floating label select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <label for="floatingSelect">Works with selects</label>
                                </div>
                                <!--end::Input group-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;!--begin::Input group--&gt;
&lt;div class=&quot;form-floating&quot;&gt;
    &lt;select class=&quot;form-select&quot; id=&quot;floatingSelect&quot; aria-label=&quot;Floating label select example&quot;&gt;
        &lt;option selected&gt;Open this select menu&lt;/option&gt;
        &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
        &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
        &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
    &lt;/select&gt;
    &lt;label for=&quot;floatingSelect&quot;&gt;Works with selects&lt;/label&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="solid-style" data-kt-scroll-offset="50">
                            <a href="#solid-style"></a>

                            Solid Style
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Floating label inputs with solid background style:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Input group-->
                                <div class="form-floating mb-7">
                                    <input type="email" class="form-control form-control-solid" id="floatingInput1"
                                        placeholder="name@example.com" />
                                    <label for="floatingInput1">Email address</label>
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="form-floating mb-7">
                                    <select class="form-select form-select-solid" id="floatingSelect1"
                                        aria-label="Floating label select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <label for="floatingSelect1">Works with selects</label>
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="form-floating">
                                    <textarea class="form-control form-control-solid" placeholder="Leave a comment here" id="floatingTextarea1"></textarea>
                                    <label for="floatingTextarea1">Comments</label>
                                </div>
                                <!--end::Input group-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Input group--&gt;
&lt;div class=&quot;form-floating mb-7&quot;&gt;
    &lt;input type=&quot;email&quot; class=&quot;form-control form-control-solid&quot; id=&quot;floatingInput1&quot; placeholder=&quot;name@example.com&quot;/&gt;
    &lt;label for=&quot;floatingInput1&quot;&gt;Email address&lt;/label&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;

&lt;!--begin::Input group--&gt;
&lt;div class=&quot;form-floating mb-7&quot;&gt;
    &lt;select class=&quot;form-select form-select-solid&quot; id=&quot;floatingSelect1&quot; aria-label=&quot;Floating label select example&quot;&gt;
        &lt;option selected&gt;Open this select menu&lt;/option&gt;
        &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
        &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
        &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
    &lt;/select&gt;
    &lt;label for=&quot;floatingSelect1&quot;&gt;Works with selects&lt;/label&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;

&lt;!--begin::Input group--&gt;
&lt;div class=&quot;form-floating&quot;&gt;
    &lt;textarea class=&quot;form-control form-control-solid&quot; placeholder=&quot;Leave a comment here&quot; id=&quot;floatingTextarea1&quot;&gt;&lt;/textarea&gt;
    &lt;label for=&quot;floatingTextarea1&quot;&gt;Comments&lt;/label&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;</code></pre>
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
                                <a href="#validation-states" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Validation States</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#textareas" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Textareas</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#select" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Select</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#solid-style" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Solid Style</span>
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


