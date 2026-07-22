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
                            Bootstrap Menu is an exclusive component of Metronic that provides a simple and elegent solution
                            for Bootstrap Menu with nested Dropdown and Accordion Submenus.
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
                            Bootstrap Menu's CSS and Javascript bundles are globally included in all pages.
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

                            Initialization
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="pt-5">
                            <ul class="py-0">
                                <li class="py-2">
                                    Bootstrap Menu structure is split into 3 parts. The <strong>trigger element</strong>,
                                    the <strong class="me-1">menu container</strong> and the <strong>menu items</strong>.
                                </li>
                                <li class="py-2">
                                    The trigger element can be any HTML element. For example, a <code>button</code>, an
                                    <code>input</code> field or an empty <code>div</code>.
                                </li>
                                <li class="py-2">
                                    Add <code>data-kt-menu-trigger</code> to the trigger element with a value of
                                    <code>click</code> or <code>hover</code> initialize the menu trigger type.
                                </li>
                                <li class="py-2">
                                    Add <code>.menu</code> CSS class to the menu container along with
                                    <code>data-kt-menu="true"</code> attribute to define the menu container. There are other
                                    options available as well, <a href="#options" data-kt-scroll-toggle>listed below</a>.
                                </li>
                                <li class="py-2">
                                    Add <code>.menu-item</code> CSS class to the menu item elements to define the menu
                                    elements. Add <code>.menu-link</code> as a child element within <code>.menu-item</code>
                                    to enable a clean hover state effect.
                                </li>
                                <li class="py-2">
                                    Bootstrap Menu can be nested within itself to allow multiple tier menus. Please refer to
                                    our <a href="#nested" data-kt-scroll-toggle>nested menu example below</a>.
                                </li>
                                <li class="py-2">
                                    Bootstrap Menu supports all Bootstrap styling classes.
                                </li>
                                <li class="py-2">
                                    Bootstrap Menu instances can also be controlled programmatically. <a href="#methods"
                                        data-kt-scroll-toggle>See below for more info</a>.
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


                        <!--begin::Example-->
                        <div class="mb-5">
                            <!--begin::Block-->
                            <div class="py-5">
                                Basic inline menu with link, icon and badge.
                            </div>
                            <!--end::Block-->

                            <!--begin::Block-->
                            <div class="py-5">
                                <!--begin::Wrapper-->
                                <div class="rounded border p-5">
                                    <!--begin::Menu-->
                                    <div class="menu">
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <a href="javascript:void(0)" class="menu-link">
                                                <span class="menu-icon">
                                                    <i class="ki-duotone ki-chart-simple-2 fs-3"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span></i> </span>
                                                <span class="menu-title">Example Link</span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <a href="javascript:void(0)" class="menu-link">
                                                <span class="menu-icon">
                                                    <i class="ki-duotone ki-notification fs-3"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i> </span>
                                                <span class="menu-title">Example Link</span>
                                                <span class="menu-badge">
                                                    <span class="badge badge-sm badge-circle badge-danger">5</span>
                                                </span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <a href="javascript:void(0)" class="menu-link">
                                                <span class="menu-icon">
                                                    <i class="ki-duotone ki-calendar fs-3"><span class="path1"></span><span
                                                            class="path2"></span></i> </span>
                                                <span class="menu-title">Example Link</span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Block-->

                            <!--begin::Code-->
                            <div class="py-5">
                                <!--begin::Highlight-->
                                <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                        title="Copy code">copy</button>
                                    <div class="highlight-code">
                                        <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Menu--&gt;
&lt;div class=&quot;menu&quot;&gt;
    &lt;!--begin::Menu item--&gt;
    &lt;div class=&quot;menu-item&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;menu-link&quot;&gt;
            &lt;span class=&quot;menu-icon&quot;&gt;
                &lt;i class=&quot;ki-duotone ki-chart-simple-2 fs-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;/i&gt;
            &lt;/span&gt;
            &lt;span class=&quot;menu-title&quot;&gt;Example Link&lt;/span&gt;
        &lt;/a&gt;
    &lt;/div&gt;
    &lt;!--end::Menu item--&gt;

    &lt;!--begin::Menu item--&gt;
    &lt;div class=&quot;menu-item&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;menu-link&quot;&gt;
            &lt;span class=&quot;menu-icon&quot;&gt;
                &lt;i class=&quot;ki-duotone ki-notification fs-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;/i&gt;
            &lt;/span&gt;
            &lt;span class=&quot;menu-title&quot;&gt;Example Link&lt;/span&gt;
            &lt;span class=&quot;menu-badge&quot;&gt;
                &lt;span class=&quot;badge badge-sm badge-circle badge-danger&quot;&gt;5&lt;/span&gt;
            &lt;/span&gt;
        &lt;/a&gt;
    &lt;/div&gt;
    &lt;!--end::Menu item--&gt;

    &lt;!--begin::Menu item--&gt;
    &lt;div class=&quot;menu-item&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;menu-link&quot;&gt;
            &lt;span class=&quot;menu-icon&quot;&gt;
                &lt;i class=&quot;ki-duotone ki-calendar fs-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
            &lt;/span&gt;
            &lt;span class=&quot;menu-title&quot;&gt;Example Link&lt;/span&gt;
        &lt;/a&gt;
    &lt;/div&gt;
    &lt;!--end::Menu item--&gt;
&lt;/div&gt;
&lt;!--end::Menu--&gt;</code></pre>
                                    </div>
                                </div><!--end::Highlight-->
                            </div>
                            <!--end::Code-->
                        </div>
                        <!--end::Example-->

                        <!--begin::Example-->
                        <div class="mb-0">
                            <!--begin::Block-->
                            <div class="py-5">
                                Use <code>.menu-column</code> class for a basic vertical menu:
                            </div>
                            <!--end::Block-->

                            <!--begin::Wrapper-->
                            <div class="rounded border p-5">
                                <!--begin::Menu-->
                                <div class="menu menu-column w-200px">
                                    <!--begin::Menu item-->
                                    <div class="menu-item">
                                        <a href="javascript:void(0)" class="menu-link">
                                            <span class="menu-icon">
                                                <i class="bi bi-bar-chart fs-3"></i>
                                            </span>
                                            <span class="menu-title">Example Link</span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item">
                                        <a href="javascript:void(0)" class="menu-link">
                                            <span class="menu-icon">
                                                <i class="bi bi-bell fs-3"></i>
                                            </span>
                                            <span class="menu-title">Example Link</span>
                                            <span class="menu-badge">
                                                <span class="badge badge-sm badge-circle badge-danger">5</span>
                                            </span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item">
                                        <a href="javascript:void(0)" class="menu-link">
                                            <span class="menu-icon">
                                                <i class="bi bi-calendar-event fs-3"></i>
                                            </span>
                                            <span class="menu-title">Example Link</span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Code-->
                            <div class="py-5">
                                <!--begin::Highlight-->
                                <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                        title="Copy code">copy</button>
                                    <div class="highlight-code">
                                        <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Menu--&gt;
&lt;div class=&quot;menu menu-column w-200px&quot;&gt;
    &lt;!--begin::Menu item--&gt;
    &lt;div class=&quot;menu-item&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;menu-link&quot;&gt;
            &lt;span class=&quot;menu-icon&quot;&gt;
                &lt;i class=&quot;bi bi-bar-chart fs-3&quot;&gt;&lt;/i&gt;
            &lt;/span&gt;
            &lt;span class=&quot;menu-title&quot;&gt;Example Link&lt;/span&gt;
        &lt;/a&gt;
    &lt;/div&gt;
    &lt;!--end::Menu item--&gt;

    &lt;!--begin::Menu item--&gt;
    &lt;div class=&quot;menu-item&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;menu-link&quot;&gt;
            &lt;span class=&quot;menu-icon&quot;&gt;
                &lt;i class=&quot;bi bi-bell fs-3&quot;&gt;&lt;/i&gt;
            &lt;/span&gt;
            &lt;span class=&quot;menu-title&quot;&gt;Example Link&lt;/span&gt;
            &lt;span class=&quot;menu-badge&quot;&gt;
                &lt;span class=&quot;badge badge-sm badge-circle badge-danger&quot;&gt;5&lt;/span&gt;
            &lt;/span&gt;
        &lt;/a&gt;
    &lt;/div&gt;
    &lt;!--end::Menu item--&gt;

    &lt;!--begin::Menu item--&gt;
    &lt;div class=&quot;menu-item&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;menu-link&quot;&gt;
            &lt;span class=&quot;menu-icon&quot;&gt;
                &lt;i class=&quot;bi bi-calendar-event fs-3&quot;&gt;&lt;/i&gt;
            &lt;/span&gt;
            &lt;span class=&quot;menu-title&quot;&gt;Example Link&lt;/span&gt;
        &lt;/a&gt;
    &lt;/div&gt;
    &lt;!--end::Menu item--&gt;
&lt;/div&gt;
&lt;!--end::Menu--&gt;</code></pre>
                                    </div>
                                </div><!--end::Highlight-->
                            </div>
                            <!--end::Code-->
                        </div>
                        <!--end::Example-->
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
    <!--end::Vendors Javascript-->
@endsection


