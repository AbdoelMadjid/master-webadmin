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
                            Inputmask is a javascript library that creates an input mask. Inputmask can run against vanilla
                            javascript, jQuery, and jqlite.

                            For full documentation please check the <a href="https://github.com/RobinHerbots/Inputmask"
                                target="_blank" class="fw-semibold">plugin's documentation</a>.
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
                            Inputmask's Javascript files are bundled in the global plugin bundles and globally included in
                            all pages:
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;script src=&quot;assets/plugins/global/plugins.bundle.js&quot;&gt;&lt;/script&gt;</code></pre>
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

                            Initialization
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            <ul class="py-0">
                                <li class="py-2">
                                    Inputmask instances can be initialized via <code>new Inputmask()</code> class as
                                    explained in the
                                    <a href="https://github.com/RobinHerbots/Inputmask#via-inputmask-class"
                                        class="fw-semibold">Documentation</a>.
                                </li>
                                <li class="py-2">
                                    Inputmask instances can be initialized via <code>data-inputmask</code> HTML attribute as
                                    explained in the
                                    <a href="https://github.com/RobinHerbots/Inputmask#via-data-inputmask-attribute"
                                        class="fw-semibold">Documentation</a>.
                                </li>
                            </ul>
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="examples" data-kt-scroll-offset="50">
                            <a href="#examples"></a>

                            Examples
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Some examples of using Inputmaks with variouse options:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-10">
                                    <label for="" class="form-label">Date</label>
                                    <input class="form-control form-control-solid" placeholder="" id="kt_inputmask_1" />
                                    <div class="form-text">
                                        Custom date format: <code>mm/dd/yyyy</code>
                                    </div>
                                </div>

                                <div class="mb-10">
                                    <label for="" class="form-label">Phone number</label>
                                    <input class="form-control form-control-solid" placeholder="" id="kt_inputmask_2" />
                                    <div class="form-text">
                                        Phone number format: <code>(999) 999-9999</code>
                                    </div>
                                </div>

                                <div class="mb-10">
                                    <label for="" class="form-label">Plaeholder</label>
                                    <input class="form-control form-control-solid" placeholder="" id="kt_inputmask_3" />
                                    <div class="form-text">
                                        Phone number format with placeholder: <code>(999) 999-9999</code>
                                    </div>
                                </div>

                                <div class="mb-10">
                                    <label for="" class="form-label">Repeating mask</label>
                                    <input class="form-control form-control-solid" placeholder="" id="kt_inputmask_4" />
                                    <div class="form-text">
                                        Mask <code>9 </code>, <code>99 </code> or ... <code>9999999999</code>
                                    </div>
                                </div>

                                <div class="mb-10">
                                    <label for="" class="form-label">Right aligned</label>
                                    <input class="form-control form-control-solid" placeholder="" id="kt_inputmask_5" />
                                    <div class="form-text">
                                        Numeric format
                                    </div>
                                </div>

                                <div class="mb-10">
                                    <label for="" class="form-label">Currency</label>
                                    <input class="form-control form-control-solid" placeholder="" id="kt_inputmask_6" />
                                    <div class="form-text">
                                        Currency format: <code>€ ___.__1.234,56</code>
                                    </div>
                                </div>

                                <div class="mb-10">
                                    <label for="" class="form-label">IP Address</label>
                                    <input class="form-control form-control-solid" placeholder="" id="kt_inputmask_7" />
                                    <div class="form-text">
                                        Custom format: <code>999.999.999.999</code>
                                    </div>
                                </div>

                                <div class="mb-0">
                                    <label for="" class="form-label">Email Address</label>
                                    <input class="form-control form-control-solid" placeholder="" id="kt_inputmask_8" />
                                    <div class="form-text">
                                        Custom format: <code>_@_</code>
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
                                    <pre class="language-js" style="height:400px"><code class="language-js">// Date
Inputmask({
    &quot;mask&quot; : &quot;99/99/9999&quot;
}).mask(&quot;#kt_inputmask_1&quot;);

// Phone
Inputmask({
    &quot;mask&quot; : &quot;(999) 999-9999&quot;
}).mask(&quot;#kt_inputmask_2&quot;);

// Placeholder
Inputmask({
    &quot;mask&quot; : &quot;(999) 999-9999&quot;,
    &quot;placeholder&quot;: &quot;(999) 999-9999&quot;,
}).mask(&quot;#kt_inputmask_3&quot;);

// Repeating
Inputmask({
    &quot;mask&quot;: &quot;9&quot;,
    &quot;repeat&quot;: 10,
    &quot;greedy&quot;: false
}).mask(&quot;#kt_inputmask_4&quot;);

// Right aligned
Inputmask(&quot;decimal&quot;, {
    &quot;rightAlignNumerics&quot;: false
}).mask(&quot;#kt_inputmask_5&quot;);

// Currency
Inputmask(&quot;€ 999.999.999,99&quot;, {
    &quot;numericInput&quot;: true
}).mask(&quot;#kt_inputmask_6&quot;);

// Ip address
Inputmask({
    &quot;mask&quot;: &quot;999.999.999.999&quot;
}).mask(&quot;#kt_inputmask_7&quot;);

// Email address
Inputmask({
    mask: &quot;*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[.*{2,6}][.*{1,2}]&quot;,
    greedy: false,
    onBeforePaste: function (pastedValue, opts) {
        pastedValue = pastedValue.toLowerCase();
        return pastedValue.replace(&quot;mailto:&quot;, &quot;&quot;);
    },
    definitions: {
        &quot;*&quot;: {
            validator: &#039;[0-9A-Za-z!#$%&amp;&quot;*+/=?^_`{|}~\-]&#039;,
            cardinality: 1,
            casing: &quot;lower&quot;
        }
    }
}).mask(&quot;#kt_inputmask_8&quot;);</code></pre>
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
                                    <span class="menu-title">Initialization</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#examples" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Examples</span>
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
    <script src="{{ asset('assets/js/custom/documentation/forms/inputmask.js') }}"></script>
    <!--end::Vendors Javascript-->
@endsection


