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
                            Rotate is a custom component used to rotate an element with a spesific angle when it's
                            parent assigned with <code>.active</code> class.
                            This component can be useful to change a buttons icon direction when it's
                            <code>.active</code> class is toggled.
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
                            Use <code>.rotate</code> class on a button and <code>.rotate-{degree}</code> class on a
                            icon to rotate it to following <code>degree</code> options:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <ul class="pt-3 pb-5">
                            <li class="py-2">
                                <code>90</code> - for classes that rotates to <code>90 deg</code>
                            </li>
                            <li class="py-2">
                                <code>180</code> - for classes that rotates to <code>180 deg</code>
                            </li>
                            <li class="py-2">
                                <code>270</code> - for classes that rotates to <code>270 deg</code>
                            </li>
                            <li class="py-2">
                                <code>n90</code> - for classes that rotates to negative <code>-90 deg</code>
                            </li>
                            <li class="py-2">
                                <code>n180</code> - for classes that rotates to negative <code>-180 deg</code>
                            </li>
                            <li class="py-2">
                                <code>n270</code> - for classes that rotates to negative <code>-270 deg</code>
                            </li>
                        </ul>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10 pb-5">
                                <button type="button" class="btn btn-primary me-5 mb-5">
                                    Default <i class="ki-duotone ki-black-right-line fs-2 ms-3 ms-3"><span
                                            class="path1"></span><span class="path2"></span></i> </button>

                                <button type="button" class="btn btn-primary active me-5 mb-5 rotate">
                                    90 deg <i class="ki-duotone ki-black-right-line fs-2 rotate-90 ms-3"><span
                                            class="path1"></span><span class="path2"></span></i> </button>

                                <button type="button" class="btn btn-primary rotate active me-5 mb-5">
                                    180 deg <i class="ki-duotone ki-black-right-line fs-2 rotate-180 ms-3"><span
                                            class="path1"></span><span class="path2"></span></i> </button>

                                <button type="button" class="btn btn-primary rotate active me-5 mb-5">
                                    270 deg <i class="ki-duotone ki-black-right-line fs-2 rotate-270 ms-3"><span
                                            class="path1"></span><span class="path2"></span></i> </button>

                                <button type="button" class="btn btn-primary rotate active me-5 mb-5">
                                    -90 deg <i class="ki-duotone ki-black-right-line fs-2 rotate-n90 ms-3"><span
                                            class="path1"></span><span class="path2"></span></i> </button>

                                <button type="button" class="btn btn-primary rotate active me-5 mb-5">
                                    -180 deg <i class="ki-duotone ki-black-right-line fs-2 rotate-n180 ms-3"><span
                                            class="path1"></span><span class="path2"></span></i> </button>

                                <button type="button" class="btn btn-primary rotate active me-5 mb-5">
                                    -270 deg <i class="ki-duotone ki-black-right-line fs-2 rotate-n270 ms-3"><span
                                            class="path1"></span><span class="path2"></span></i> </button>
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;
    Default &lt;i class=&quot;ki-duotone ki-black-right-line fs-2 ms-3 ms-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
&lt;/button&gt;

&lt;button type=&quot;button&quot; class=&quot;btn btn-primary rotate&quot;&gt;
    90 deg &lt;i class=&quot;ki-duotone ki-black-right-line fs-2 ms-3 ms-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
&lt;/button&gt;

&lt;button type=&quot;button&quot; class=&quot;btn btn-primary rotate&quot;&gt;
    180 deg &lt;i class=&quot;ki-duotone ki-black-right-line fs-2 ms-3 ms-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
&lt;/button&gt;

&lt;button type=&quot;button&quot; class=&quot;btn btn-primary rotate&quot;&gt;
    270 deg &lt;i class=&quot;ki-duotone ki-black-right-line fs-2 ms-3 ms-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
&lt;/button&gt;

&lt;button type=&quot;button&quot; class=&quot;btn btn-primary rotate&quot;&gt;
    -90 deg &lt;i class=&quot;ki-duotone ki-black-right-line fs-2 ms-3 ms-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
&lt;/button&gt;

&lt;button type=&quot;button&quot; class=&quot;btn btn-primary rotate&quot;&gt;
    -180 deg &lt;i class=&quot;ki-duotone ki-black-right-line fs-2 ms-3 ms-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
&lt;/button&gt;

&lt;button type=&quot;button&quot; class=&quot;btn btn-primary rotate&quot;&gt;
    -270 deg &lt;i class=&quot;ki-duotone ki-black-right-line fs-2 ms-3 ms-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
&lt;/button&gt;</code></pre>
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
                            Use <code>data-kt-rotate="true"</code> attribute to automatically toggle the button
                            active state or use Javascript code to toggle programmatically:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <button type="button" class="btn btn-primary me-5 rotate" data-kt-rotate="true">
                                    90 deg <i class="ki-duotone ki-black-right-line fs-2 rotate-90 ms-3"><span
                                            class="path1"></span><span class="path2"></span></i> </button>

                                <button type="button" class="btn btn-danger me-5 rotate" data-kt-rotate="true">
                                    180 deg <i class="ki-duotone ki-black-right-line fs-2 rotate-180 ms-3"><span
                                            class="path1"></span><span class="path2"></span></i> </button>

                                <button type="button" class="btn btn-success me-5 rotate" id="kt_button_toggle">
                                    270 deg <i class="ki-duotone ki-black-right-line fs-2 rotate-270 ms-3"><span
                                            class="path1"></span><span class="path2"></span></i> </button>
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
                                            href="#kt_highlight_68e0a5b40d607" role="tab">HTML</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e0a5b40d60b" role="tab">JAVASCRIPT</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e0a5b40d607"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;button type=&quot;button&quot; class=&quot;btn btn-primary me-5 rotate&quot; data-kt-rotate=&quot;true&quot;&gt;
    90 deg &lt;i class=&quot;ki-duotone ki-black-right-line fs-2 rotate-90 ms-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
&lt;/button&gt;

&lt;button type=&quot;button&quot; class=&quot;btn btn-danger me-5 rotate&quot; data-kt-rotate=&quot;true&quot;&gt;
    180 deg &lt;i class=&quot;ki-duotone ki-black-right-line fs-2 rotate-90 ms-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
&lt;/button&gt;

&lt;button type=&quot;button&quot; class=&quot;btn btn-success me-5 rotate&quot; id=&quot;kt_button_toggle&quot;&gt;
    270 deg &lt;i class=&quot;ki-duotone ki-black-right-line fs-2 rotate-90 ms-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
&lt;/button&gt;</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e0a5b40d60b" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript"><code class="language-javascript">// Element to indecate
var button = document.querySelector(&quot;#kt_button_toggle&quot;);

// Handle button click event
button.addEventListener(&quot;click&quot;, function() {
    button.classList.toggle(&quot;active&quot;);
});</code></pre>
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
                        <h1 class="anchor fw-bold mb-5" id="collapse" data-kt-scroll-offset="50">
                            <a href="#collapse"></a>

                            Collapse
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use Rotate with <code>.collapsible</code> and <code>.collapsed</code> classes to toggle
                            a block using <a href="https://getbootstrap.com/docs/5.2/components/collapse/"
                                class="fw-semibold">Bootstrap Collapse</a>&nbsp;
                            and display:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Toggle link-->
                                <a data-bs-toggle="collapse" href="#kt_toggle_block"
                                    class="btn btn-link btn-color-muted btn-active-color-primary rotate collapsible collapsed">
                                    Toggle block
                                    <span class="d-flex flex-center rotate-n180 ms-3">
                                        <i class="ki-duotone ki-down fs-3"></i> </span>
                                </a>
                                <!--end::Toggle link-->

                                <!--begin::Toggle block-->
                                <div id="kt_toggle_block" class="collapse">
                                    <div class="rounded bg-light p-10">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid.
                                        Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                        sapiente ea proident.
                                    </div>
                                </div>
                                <!--end::Toggle block-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;!--begin::Toggle link--&gt;
&lt;a data-bs-toggle=&quot;collapse&quot; href=&quot;#kt_toggle_block&quot; class=&quot;btn btn-link btn-color-muted btn-active-color-primary rotate collapsible collapsed&quot;&gt;
    Toggle block
    &lt;span class=&quot;d-flex flex-center rotate-n180 ms-3&quot;&gt;
    &lt;i class=&quot;ki-duotone ki-down fs-3&quot;&gt;&lt;/i&gt;
    &lt;/span&gt;
&lt;/a&gt;
&lt;!--end::Toggle link--&gt;

&lt;!--begin::Toggle block--&gt;
&lt;div id=&quot;kt_toggle_block&quot; class=&quot;collapse&quot;&gt;
    &lt;div class=&quot;rounded bg-light p-10&quot;&gt;
        .....
    &lt;/div&gt;
&lt;/div&gt;
&lt;!--end::Toggle block--&gt;</code></pre>
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
                                <a href="#collapse" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Collapse</span>
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
    <script src="{{ asset('assets/js/custom/documentation/base/rotate.js') }}"></script>
    <!--end::Vendors Javascript-->
@endsection


