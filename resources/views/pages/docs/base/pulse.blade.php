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
                            Pulse is a custom component for highlighting elements.
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
                            Use <code>.pulse</code> with for any element to provide a user's attentation.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10 pb-0 d-flex align-items-center flex-wrap">
                                <a href="javascript:void(0)" class="btn btn-icon btn-light pulse me-10 mb-10">
                                    <i class="ki-duotone ki-element-11 fs-1"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span></i> <span class="pulse-ring"></span>
                                </a>

                                <a href="javascript:void(0)" class="btn btn-icon btn-light pulse me-10 mb-10">
                                    <i class="ki-duotone ki-check-circle fs-1"><span class="path1"></span><span
                                            class="path2"></span></i> <span class="pulse-ring"></span>
                                </a>

                                <a href="javascript:void(0)" class="btn btn-icon btn-light pulse me-10 mb-10">
                                    <i class="ki-duotone ki-sms fs-1"><span class="path1"></span><span
                                            class="path2"></span></i> <span class="pulse-ring"></span>
                                </a>

                                <a href="javascript:void(0)" class="btn btn-icon btn-light pulse me-10 mb-10">
                                    <i class="ki-duotone ki-bucket fs-1"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span></i> <span class="pulse-ring"></span>
                                </a>

                                <a href="javascript:void(0)" class="btn btn-icon btn-light pulse me-10 mb-10">
                                    <i class="ki-duotone ki-color-swatch fs-1"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span><span class="path5"></span><span
                                            class="path6"></span><span class="path7"></span><span
                                            class="path8"></span><span class="path9"></span><span
                                            class="path10"></span><span class="path11"></span><span
                                            class="path12"></span><span class="path13"></span><span
                                            class="path14"></span><span class="path15"></span><span
                                            class="path16"></span><span class="path17"></span><span
                                            class="path18"></span><span class="path19"></span><span
                                            class="path20"></span><span class="path21"></span></i> <span
                                        class="pulse-ring"></span>
                                </a>

                                <a href="javascript:void(0)" class="btn btn-icon btn-light pulse me-10 mb-10">
                                    <i class="ki-duotone ki-document fs-1"><span class="path1"></span><span
                                            class="path2"></span></i> <span class="pulse-ring"></span>
                                </a>
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;a href=&quot;#&quot; class=&quot;btn btn-icon btn-light pulse&quot;&gt;
    &lt;i class=&quot;ki-duotone ki-element-11 fs-1&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;/i&gt;
    &lt;span class=&quot;pulse-ring&quot;&gt;&lt;/span&gt;
&lt;/a&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="colors" data-kt-scroll-offset="50">
                            <a href="#colors"></a>

                            Colors
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.pulse-{color}</code> class to set a pulse's color:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10 pb-0 d-flex flex-wrap align-items-center">

                                <a href="javascript:void(0)" class="btn btn-icon btn-light pulse pulse-light me-10 mb-10">
                                    <i class="ki-duotone ki-element-11 fs-1"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span></i> <span class="pulse-ring"></span>
                                </a>


                                <a href="javascript:void(0)" class="btn btn-icon btn-light pulse pulse-primary me-10 mb-10">
                                    <i class="ki-duotone ki-element-11 fs-1"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span></i> <span class="pulse-ring"></span>
                                </a>


                                <a href="javascript:void(0)" class="btn btn-icon btn-light pulse pulse-secondary me-10 mb-10">
                                    <i class="ki-duotone ki-element-11 fs-1"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span></i> <span class="pulse-ring"></span>
                                </a>


                                <a href="javascript:void(0)" class="btn btn-icon btn-light pulse pulse-success me-10 mb-10">
                                    <i class="ki-duotone ki-element-11 fs-1"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span></i> <span class="pulse-ring"></span>
                                </a>


                                <a href="javascript:void(0)" class="btn btn-icon btn-light pulse pulse-info me-10 mb-10">
                                    <i class="ki-duotone ki-element-11 fs-1"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span></i> <span class="pulse-ring"></span>
                                </a>


                                <a href="javascript:void(0)" class="btn btn-icon btn-light pulse pulse-warning me-10 mb-10">
                                    <i class="ki-duotone ki-element-11 fs-1"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span></i> <span class="pulse-ring"></span>
                                </a>


                                <a href="javascript:void(0)" class="btn btn-icon btn-light pulse pulse-danger me-10 mb-10">
                                    <i class="ki-duotone ki-element-11 fs-1"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span></i> <span class="pulse-ring"></span>
                                </a>


                                <a href="javascript:void(0)" class="btn btn-icon btn-light pulse pulse-dark me-10 mb-10">
                                    <i class="ki-duotone ki-element-11 fs-1"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span></i> <span class="pulse-ring"></span>
                                </a>

                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;a href=&quot;#&quot; class=&quot;btn btn-icon btn-light pulse pulse-light&quot;&gt;
&lt;i class=&quot;ki-duotone ki-element-11 fs-1&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;/i&gt;
  &lt;span class=&quot;pulse-ring&quot;&gt;&lt;/span&gt;
&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;btn btn-icon btn-light pulse pulse-primary&quot;&gt;
&lt;i class=&quot;ki-duotone ki-element-11 fs-1&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;/i&gt;
  &lt;span class=&quot;pulse-ring&quot;&gt;&lt;/span&gt;
&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;btn btn-icon btn-light pulse pulse-secondary&quot;&gt;
&lt;i class=&quot;ki-duotone ki-element-11 fs-1&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;/i&gt;
  &lt;span class=&quot;pulse-ring&quot;&gt;&lt;/span&gt;
&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;btn btn-icon btn-light pulse pulse-success&quot;&gt;
&lt;i class=&quot;ki-duotone ki-element-11 fs-1&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;/i&gt;
  &lt;span class=&quot;pulse-ring&quot;&gt;&lt;/span&gt;
&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;btn btn-icon btn-light pulse pulse-info&quot;&gt;
&lt;i class=&quot;ki-duotone ki-element-11 fs-1&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;/i&gt;
  &lt;span class=&quot;pulse-ring&quot;&gt;&lt;/span&gt;
&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;btn btn-icon btn-light pulse pulse-warning&quot;&gt;
&lt;i class=&quot;ki-duotone ki-element-11 fs-1&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;/i&gt;
  &lt;span class=&quot;pulse-ring&quot;&gt;&lt;/span&gt;
&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;btn btn-icon btn-light pulse pulse-danger&quot;&gt;
&lt;i class=&quot;ki-duotone ki-element-11 fs-1&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;/i&gt;
  &lt;span class=&quot;pulse-ring&quot;&gt;&lt;/span&gt;
&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;btn btn-icon btn-light pulse pulse-dark&quot;&gt;
&lt;i class=&quot;ki-duotone ki-element-11 fs-1&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;/i&gt;
  &lt;span class=&quot;pulse-ring&quot;&gt;&lt;/span&gt;
&lt;/a&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->


                    <!--begin::Section-->
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="border-width" data-kt-scroll-offset="50">
                            <a href="#border-width"></a>

                            Border Width
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use the standard <code>.border-{width}</code> class with <code>.pulse-ring</code> to set
                            a pulse ring's border width.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            Where <code>width</code> is one of:
                            <ul class="pt-3">
                                <li class="py-2"><code>0</code> - for classes that set border width to 0px</li>
                                <li class="py-2"><code>1</code> - for classes that set border width to 1px</li>
                                <li class="py-2"><code>2</code> - for classes that set border width to 2px</li>
                                <li class="py-2"><code>3</code> - for classes that set border width to 3px</li>
                                <li class="py-2"><code>4</code> - for classes that set border width to 4px</li>
                                <li class="py-2"><code>5</code> - for classes that set border width to 5px</li>
                            </ul>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10 pb-0 d-flex flex-wrap align-items-center">
                                <a href="javascript:void(0)" class="btn btn-icon btn-light pulse pulse-primary me-10 mb-10">
                                    <i class="ki-duotone ki-element-11 fs-1"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span></i> <span class="pulse-ring border-0"></span>
                                </a>

                                <a href="javascript:void(0)" class="btn btn-icon btn-light pulse pulse-primary me-10 mb-10">
                                    <i class="ki-duotone ki-element-11 fs-1"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span></i> <span class="pulse-ring border-1"></span>
                                </a>

                                <a href="javascript:void(0)" class="btn btn-icon btn-light pulse pulse-primary me-10 mb-10">
                                    <i class="ki-duotone ki-element-11 fs-1"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span></i> <span class="pulse-ring border-2"></span>
                                </a>

                                <a href="javascript:void(0)" class="btn btn-icon btn-light pulse pulse-primary me-10 mb-10">
                                    <i class="ki-duotone ki-element-11 fs-1"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span></i> <span class="pulse-ring border-3"></span>
                                </a>

                                <a href="javascript:void(0)" class="btn btn-icon btn-light pulse pulse-primary me-10 mb-10">
                                    <i class="ki-duotone ki-element-11 fs-1"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span></i> <span class="pulse-ring border-4"></span>
                                </a>

                                <a href="javascript:void(0)" class="btn btn-icon btn-light pulse pulse-primary me-10 mb-10">
                                    <i class="ki-duotone ki-element-11 fs-1"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span></i> <span class="pulse-ring border-5"></span>
                                </a>

                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;a href=&quot;#&quot; class=&quot;btn btn-icon btn-light pulse pulse-primary&quot;&gt;
&lt;i class=&quot;ki-duotone ki-element-11 fs-1&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;/i&gt;
  &lt;span class=&quot;pulse-ring border-0&quot;&gt;&lt;/span&gt;
&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;btn btn-icon btn-light pulse pulse-primary&quot;&gt;
&lt;i class=&quot;ki-duotone ki-element-11 fs-1&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;/i&gt;
  &lt;span class=&quot;pulse-ring border-1&quot;&gt;&lt;/span&gt;
&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;btn btn-icon btn-light pulse pulse-primary&quot;&gt;
&lt;i class=&quot;ki-duotone ki-element-11 fs-1&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;/i&gt;
  &lt;span class=&quot;pulse-ring border-2&quot;&gt;&lt;/span&gt;
&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;btn btn-icon btn-light pulse pulse-primary&quot;&gt;
&lt;i class=&quot;ki-duotone ki-element-11 fs-1&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;/i&gt;
  &lt;span class=&quot;pulse-ring border-3&quot;&gt;&lt;/span&gt;
&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;btn btn-icon btn-light pulse pulse-primary&quot;&gt;
&lt;i class=&quot;ki-duotone ki-element-11 fs-1&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;/i&gt;
  &lt;span class=&quot;pulse-ring border-4&quot;&gt;&lt;/span&gt;
&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;btn btn-icon btn-light pulse pulse-primary&quot;&gt;
&lt;i class=&quot;ki-duotone ki-element-11 fs-1&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;/i&gt;
  &lt;span class=&quot;pulse-ring border-5&quot;&gt;&lt;/span&gt;
&lt;/a&gt;</code></pre>
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
                                <a href="#colors" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Colors</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#border-width" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Border Width</span>
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


