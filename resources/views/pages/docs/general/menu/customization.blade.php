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
                        <h1 class="anchor fw-bold mb-5" id="basic" data-kt-scroll-offset="50">
                            <a href="#basic"></a>

                            Basic
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Apply the Bootstrap <a href="/html/metronic/docs/base/utilities">utilities</a>&nbsp; to
                            customize menu elements spacing and font styles:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <!--begin::Wrapper-->
                            <div class="rounded border p-5">
                                <!--begin::Menu-->
                                <div class="menu menu-column fw-semibold w-300px">
                                    <!--begin::Menu item-->
                                    <div class="menu-item my-1">
                                        <a href="javascript:void(0)" class="menu-link px-4">
                                            <span class="menu-icon">
                                                <i class="ki-duotone ki-chart-simple-2 fs-3"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span><span class="path4"></span></i>
                                            </span>
                                            <span class="menu-title">Example Link</span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item my-1">
                                        <a href="javascript:void(0)" class="menu-link px-4">
                                            <span class="menu-icon">
                                                <i class="ki-duotone ki-notification-on fs-3"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span><span class="path4"></span><span
                                                        class="path5"></span></i>
                                            </span>
                                            <span class="menu-title">Example Link</span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item my-1">
                                        <a href="javascript:void(0)" class="menu-link px-4">
                                            <span class="menu-icon">
                                                <i class="ki-duotone ki-calendar-2 fs-3"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span><span class="path5"></span></i>
                                            </span>
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
&lt;div class=&quot;menu menu-column fw-semibold w-300px&quot;&gt;
    &lt;!--begin::Menu item--&gt;
    &lt;div class=&quot;menu-item my-1&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;menu-link px-4&quot;&gt;
            &lt;span class=&quot;menu-icon&quot;&gt;
                &lt;i class=&quot;ki-duotone ki-chart-simple-2 fs-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;/i&gt;
            &lt;/span&gt;
            &lt;span class=&quot;menu-title&quot;&gt;Example Link&lt;/span&gt;
        &lt;/a&gt;
    &lt;/div&gt;
    &lt;!--end::Menu item--&gt;

    &lt;!--begin::Menu item--&gt;
    &lt;div class=&quot;menu-item my-1&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;menu-link px-4&quot;&gt;
            &lt;span class=&quot;menu-icon&quot;&gt;
                &lt;i class=&quot;ki-duotone ki-notification-on fs-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;/i&gt;
            &lt;/span&gt;
            &lt;span class=&quot;menu-title&quot;&gt;Example Link&lt;/span&gt;
        &lt;/a&gt;
    &lt;/div&gt;
    &lt;!--end::Menu item--&gt;

    &lt;!--begin::Menu item--&gt;
    &lt;div class=&quot;menu-item my-1&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;menu-link px-4&quot;&gt;
            &lt;span class=&quot;menu-icon&quot;&gt;
                &lt;i class=&quot;ki-duotone ki-calendar-2 fs-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;/i&gt;
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
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="utilities" data-kt-scroll-offset="50">
                            <a href="#utilities"></a>

                            Utilities
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Below Menu utility classes are responsive-friendly and set using the format
                            <code>menu-{breakpoint}-{direction}-{property}</code>
                            where

                            <ul class="py-2 m-0">
                                <li class="py-2">
                                    <code>{breakpoint}</code> accepts Bootstrap breakpoints <code>sm</code>,
                                    <code>md</code>, <code>lg</code>, <code>xl</code>, <code>xxl</code>.
                                </li>
                                <li class="py-2">
                                    <code>{direction}</code> accepts <code>up</code>, <code>down</code> values to set
                                    breakpoint direction. E.g: <code>.menu-lg-up-rounded</code>,
                                    <code>.menu-lg-down-rounded</code>.
                                </li>
                            </ul>
                        </div>
                        <!--end::Block-->

                        <!--begin::Table-->
                        <div class="py-5">
                            <div class="table-responsive border rounded">
                                <table class="table table-striped align-top mb-0 g-7">
                                    <thead>
                                        <tr class="fs-4 fw-bold text-gray-900 p-6">
                                            <th>Class Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="mb-5">
                                                    <code>.menu-{breakpoint}-{direction}-accordion</code>
                                                </div>

                                                <div class="mb-5">
                                                    Used for menu item to set accordion submenu:
                                                </div>
                                                <!--begin::Highlight-->
                                                <div class="highlight"> <button class="highlight-copy btn"
                                                        data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                    <div class="highlight-code">
                                                        <pre class="language-html"><code class="language-html">&lt;!-- General mode --&gt;
&lt;div class=&quot;menu-item menu-accordion&quot; data-kt-menu-trigger=&quot;click&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;menu-link py-3&quot;&gt;
        ...
    &lt;/a&gt;
    &lt;div class=&quot;menu-sub menu-sub-accordion pt-3&quot;&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                                    </div>
                                                </div><!--end::Highlight-->
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="mb-5">
                                                    <code>.menu-sub-{breakpoint}-{direction}-accordion</code>
                                                </div>

                                                <div class="mb-5">
                                                    Sets accordion submenu for for breakpoint below <code>lg</code>:
                                                </div>

                                                <!--begin::Highlight-->
                                                <div class="highlight"> <button class="highlight-copy btn"
                                                        data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                    <div class="highlight-code">
                                                        <pre class="language-html"><code class="language-html">&lt;div class=&quot;menu-item menu-accordion&quot; data-kt-menu-trigger=&quot;click&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;menu-link py-3&quot;&gt;
        ...
    &lt;/a&gt;
    &lt;div class=&quot;menu-sub menu-sub-lg-down-accordion menu-sub-lg-up-dropdown pt-3&quot;&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                                    </div>
                                                </div><!--end::Highlight-->
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="mb-5">
                                                    <code>.menu-sub-{breakpoint}-{direction}-dropdown</code>
                                                </div>

                                                <div class="mb-5">
                                                    Sets dropdown submenu:
                                                </div>
                                                <!--begin::Highlight-->
                                                <div class="highlight"> <button class="highlight-copy btn"
                                                        data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                    <div class="highlight-code">
                                                        <pre class="language-html"><code class="language-html">&lt;div class=&quot;menu-item&quot; data-kt-menu-trigger=&quot;click&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;menu-link py-3&quot;&gt;
        ...
    &lt;/a&gt;
    &lt;div class=&quot;menu-sub menu-sub-dropdown pt-3&quot;&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                                    </div>
                                                </div><!--end::Highlight-->
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="mb-5">
                                                    <code>.menu-{breakpoint}-{direction}-inline</code>
                                                </div>

                                                <div class="mb-2">
                                                    Sets horizontal menu mode for breakpoint below <code>lg</code>:
                                                </div>

                                                <!--begin::Highlight-->
                                                <div class="highlight"> <button class="highlight-copy btn"
                                                        data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                    <div class="highlight-code">
                                                        <pre class="language-html"><code class="language-html">&lt;div class=&quot;menu menu-lg-down-inline menu-lg-up-columm&quot; data-kt-menu-=&quot;true&quot;&gt;
...
&lt;/div&gt;</code></pre>
                                                    </div>
                                                </div><!--end::Highlight-->
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="mb-5">
                                                    <code>.menu-{breakpoint}-{direction}-fit</code>
                                                </div>

                                                <div class="mb-5">
                                                    Resets menu items left and right paddings:
                                                </div>

                                                <!--begin::Highlight-->
                                                <div class="highlight"> <button class="highlight-copy btn"
                                                        data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                    <div class="highlight-code">
                                                        <pre class="language-html"><code class="language-html">&lt;div class=&quot;menu menu-fit&quot; data-kt-menu-=&quot;true&quot;&gt;
...
&lt;/div&gt;</code></pre>
                                                    </div>
                                                </div><!--end::Highlight-->
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="mb-5">
                                                    <code>.menu-sub-{breakpoint}-{direction}-column</code>
                                                </div>

                                                <div class="mb-5">
                                                    Sets vertical menu mode for breakpoint below <code>lg</code>:
                                                </div>

                                                <!--begin::Highlight-->
                                                <div class="highlight"> <button class="highlight-copy btn"
                                                        data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                    <div class="highlight-code">
                                                        <pre class="language-html"><code class="language-html">&lt;div class=&quot;menu menu-lg-up-inline menu-lg-down-columm&quot; data-kt-menu-=&quot;true&quot;&gt;
...
&lt;/div&gt;</code></pre>
                                                    </div>
                                                </div><!--end::Highlight-->
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="mb-5">
                                                    <code>.menu-sub-{breakpoint}-{direction}-rounded</code>
                                                </div>

                                                <div class="mb-5">
                                                    Sets border radius for menu items:
                                                </div>

                                                <!--begin::Highlight-->
                                                <div class="highlight"> <button class="highlight-copy btn"
                                                        data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                    <div class="highlight-code">
                                                        <pre class="language-html"><code class="language-html">&lt;div class=&quot;menu menu-rounded&quot; data-kt-menu-=&quot;true&quot;&gt;
...
&lt;/div&gt;</code></pre>
                                                    </div>
                                                </div><!--end::Highlight-->
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="mb-5">
                                                    <code>.menu-sub-{breakpoint}-{direction}-rounded-0</code>
                                                </div>

                                                <div class="mb-5">
                                                    Resets border radius for menu items:
                                                </div>

                                                <!--begin::Highlight-->
                                                <div class="highlight"> <button class="highlight-copy btn"
                                                        data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                    <div class="highlight-code">
                                                        <pre class="language-html"><code class="language-html">&lt;div class=&quot;menu menu-rounded menu-lg-down-rounded-0&quot; data-kt-menu-=&quot;true&quot;&gt;
...
&lt;/div&gt;</code></pre>
                                                    </div>
                                                </div><!--end::Highlight-->
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="mb-5">
                                                    <code>.menu-sub-{breakpoint}-{direction}-pill</code>
                                                </div>

                                                <div class="mb-5">
                                                    Sets pill style border radius for menu items:
                                                </div>

                                                <!--begin::Highlight-->
                                                <div class="highlight"> <button class="highlight-copy btn"
                                                        data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                    <div class="highlight-code">
                                                        <pre class="language-html"><code class="language-html">&lt;div class=&quot;menu menu-pill&quot; data-kt-menu-=&quot;true&quot;&gt;
...
&lt;/div&gt;</code></pre>
                                                    </div>
                                                </div><!--end::Highlight-->
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
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="colors" data-kt-scroll-offset="50">
                            <a href="#colors"></a>

                            Colors
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Example-->
                        <div class="mb-5">
                            <!--begin::Block-->
                            <div class="py-5">
                                Use <code>.menu-{color}</code> to set a <a
                                    href="https://getbootstrap.com/docs/5.2documentation/base/helpers/text"
                                    class="fw-semibold">color</a>&nbsp;
                                for menu title, icon, arrow and bullet:
                            </div>
                            <!--end::Block-->

                            <!--begin::Block-->
                            <div class="py-5">
                                <!--begin::Wrapper-->
                                <div class="rounded border p-5 d-flex flex-wrap gap-4">
                                    <!--begin::Menu-->
                                    <div class="menu menu-column menu-gray-600 fw-semibold w-175px">
                                        <!--begin::Menu item-->
                                        <div class="menu-item my-1">
                                            <a href="javascript:void(0)" class="menu-link px-4">
                                                <span class="menu-icon">
                                                    <i class="ki-duotone ki-chart-simple-2 fs-3"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span></i>
                                                </span>
                                                <span class="menu-title">Example Link</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item my-1">
                                            <a href="javascript:void(0)" class="menu-link px-4">
                                                <span class="menu-icon">
                                                    <i class="ki-duotone ki-notification-on fs-3"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span><span
                                                            class="path5"></span></i>
                                                </span>
                                                <span class="menu-title">Example Link</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item my-1">
                                            <a href="javascript:void(0)" class="menu-link px-4">
                                                <span class="menu-icon">
                                                    <i class="ki-duotone ki-calendar-2 fs-3"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span><span
                                                            class="path5"></span></i>
                                                </span>
                                                <span class="menu-title">Example Link</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->

                                    <!--begin::Menu-->
                                    <div class="menu menu-column menu-success fw-semibold w-175px">
                                        <!--begin::Menu item-->
                                        <div class="menu-item my-1">
                                            <a href="javascript:void(0)" class="menu-link px-4">
                                                <span class="menu-icon">
                                                    <i class="ki-duotone ki-chart-simple-2 fs-3"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span></i>
                                                </span>
                                                <span class="menu-title">Example Link</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item my-1">
                                            <a href="javascript:void(0)" class="menu-link px-4">
                                                <span class="menu-icon">
                                                    <i class="ki-duotone ki-notification-on fs-3"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span><span
                                                            class="path5"></span></i>
                                                </span>
                                                <span class="menu-title">Example Link</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item my-1">
                                            <a href="javascript:void(0)" class="menu-link px-4">
                                                <span class="menu-icon">
                                                    <i class="ki-duotone ki-calendar-2 fs-3"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span><span
                                                            class="path5"></span></i>
                                                </span>
                                                <span class="menu-title">Example Link</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->

                                    <!--begin::Menu-->
                                    <div class="menu menu-column menu-danger fw-semibold w-175px">
                                        <!--begin::Menu item-->
                                        <div class="menu-item my-1">
                                            <a href="javascript:void(0)" class="menu-link px-4">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Example Link</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item my-1">
                                            <a href="javascript:void(0)" class="menu-link px-4">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Example Link</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item my-1">
                                            <a href="javascript:void(0)" class="menu-link px-4">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Example Link</span>
                                                <span class="menu-arrow"></span>
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
&lt;div class=&quot;menu menu-column menu-gray-600 fw-semibold w-175px&quot;&gt;
...
&lt;/div&gt;
&lt;!--end::Menu--&gt;

&lt;!--begin::Menu--&gt;
&lt;div class=&quot;menu menu-column menu-success fw-semibold w-175px&quot;&gt;
...
&lt;/div&gt;
&lt;!--end::Menu--&gt;

&lt;!--begin::Menu--&gt;
&lt;div class=&quot;menu menu-column menu-danger fw-semibold w-175px&quot;&gt;
...
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
                                Use <code>.menu-title-{color}</code>, <code>.menu-icon-{color}</code>,
                                <code>.menu-bullet-{color}</code> and <code>.menu-arrow-{color}</code>
                                classes to set a <a href="https://getbootstrap.com/docs/5.2documentation/base/helpers/text"
                                    class="fw-semibold">color</a>&nbsp;
                                for menu title, icon, arrow and bullet individually:
                            </div>
                            <!--end::Block-->

                            <!--begin::Block-->
                            <div class="py-5">
                                <!--begin::Wrapper-->
                                <div class="rounded border p-5 d-flex flex-wrap gap-4">
                                    <!--begin::Menu-->
                                    <div
                                        class="menu menu-column menu-title-gray-800 menu-icon-primary fw-semibold w-175px">
                                        <!--begin::Menu item-->
                                        <div class="menu-item my-1">
                                            <a href="javascript:void(0)" class="menu-link px-4">
                                                <span class="menu-icon">
                                                    <i class="ki-duotone ki-chart-simple-2 fs-3"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span></i>
                                                </span>
                                                <span class="menu-title">Example Link</span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item my-1">
                                            <a href="javascript:void(0)" class="menu-link px-4">
                                                <span class="menu-icon">
                                                    <i class="ki-duotone ki-notification-on fs-3"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span><span
                                                            class="path5"></span></i>
                                                </span>
                                                <span class="menu-title">Example Link</span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item my-1">
                                            <a href="javascript:void(0)" class="menu-link px-4">
                                                <span class="menu-icon">
                                                    <i class="ki-duotone ki-calendar-2 fs-3"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span><span
                                                            class="path5"></span></i>
                                                </span>
                                                <span class="menu-title">Example Link</span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->

                                    <!--begin::Menu-->
                                    <div
                                        class="menu menu-column menu-title-gray-600 menu-icon-info menu-arrow-warning fw-semibold w-175px">
                                        <!--begin::Menu item-->
                                        <div class="menu-item my-1">
                                            <a href="javascript:void(0)" class="menu-link px-4">
                                                <span class="menu-icon">
                                                    <i class="ki-duotone ki-chart-simple-2 fs-3"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span></i>
                                                </span>
                                                <span class="menu-title">Example Link</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item my-1">
                                            <a href="javascript:void(0)" class="menu-link px-4">
                                                <span class="menu-icon">
                                                    <i class="ki-duotone ki-notification-on fs-3"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span><span
                                                            class="path5"></span></i>
                                                </span>
                                                <span class="menu-title">Example Link</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item my-1">
                                            <a href="javascript:void(0)" class="menu-link px-4">
                                                <span class="menu-icon">
                                                    <i class="ki-duotone ki-calendar-2 fs-3"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span><span
                                                            class="path5"></span></i>
                                                </span>
                                                <span class="menu-title">Example Link</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->

                                    <!--begin::Menu-->
                                    <div
                                        class="menu menu-column menu-title-success menu-bullet-danger fw-semibold w-175px">
                                        <!--begin::Menu item-->
                                        <div class="menu-item my-1">
                                            <a href="javascript:void(0)" class="menu-link px-4">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Example Link</span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item my-1">
                                            <a href="javascript:void(0)" class="menu-link px-4">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Example Link</span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item my-1">
                                            <a href="javascript:void(0)" class="menu-link px-4">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
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
&lt;div class=&quot;menu menu-column menu-title-gray-800 menu-icon-primary fw-semibold w-175px&quot;&gt;
...
&lt;/div&gt;
&lt;!--end::Menu--&gt;

&lt;!--begin::Menu--&gt;
&lt;div class=&quot;menu menu-column menu-title-gray-600 menu-icon-info menu-arrow-warning fw-semibold w-175px&quot;&gt;
...
&lt;/div&gt;
&lt;!--end::Menu--&gt;

&lt;!--begin::Menu--&gt;
&lt;div class=&quot;menu menu-column menu-title-success menu-bullet-danger fw-semibold w-175px&quot;&gt;
...
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
                    <!--begin::Section-->
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="states" data-kt-scroll-offset="50">
                            <a href="#states"></a>

                            States
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Example-->
                        <div class="mb-0">
                            <!--begin::Block-->
                            <div class="py-5">
                                Use below state classes to set background and font colors for menu item and child
                                elements(title, icon, arrow and bullet):

                                <ul class="py-6 m-0">
                                    <li class="py-2"><code>.here</code> indicates that menu item has an active child item
                                        within submenus.</li>
                                    <li class="py-2"><code>.show</code> indicates that menu item's submenu is shown.</li>
                                    <li class="py-2"><code>.active</code> indicates that menu item is active.</li>
                                    <li class="py-2"><code>:hover</code> indicates that menu item is hovered.</li>
                                </ul>

                                <div class="mb-5">The below is the full list of a utility classes to use for menu and
                                    submenus:</div>

                                <!--begin::Table-->
                                <div class="table-responsive border rounded">
                                    <table class="table table-striped align-top mb-0 g-5">
                                        <thead>
                                            <tr class="fs-4 fw-bold text-gray-900 p-6">
                                                <th class="min-w-250px">Class</th>
                                                <th class="min-w-100px">Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="fw-bold fs-5" colspan="2">
                                                    Background Color
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <code>.menu-state-bg</code>
                                                </td>
                                                <td>
                                                    Sets a background color <code>$hover-bg</code> for menu item on
                                                    <code>.here</code>, <code>.show</code>, <code>.active</code> and
                                                    <code>:hover</code> states.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>.menu-here-bg</code>
                                                </td>
                                                <td>
                                                    Sets a background color <code>$hover-bg</code> for menu item on
                                                    <code>.here</code> state.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>.menu-show-bg</code>
                                                </td>
                                                <td>
                                                    Sets a background color <code>$hover-bg</code> for menu item on
                                                    <code>.show</code> state.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>.menu-active-bg</code>
                                                </td>
                                                <td>
                                                    Sets a background color <code>$hover-bg</code> for menu item on
                                                    <code>.active</code> state.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>.menu-hover-bg</code>
                                                </td>
                                                <td>
                                                    Sets a background color <code>$hover-bg</code> for menu item on
                                                    <code>:hover</code> state.
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <code>.menu-state-bg-primary</code>
                                                </td>
                                                <td>
                                                    Sets a background color <code>$primary</code> for menu item on
                                                    <code>.here</code>, <code>.show</code>, <code>.active</code> and
                                                    <code>:hover</code> states.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>.menu-here-bg-primary</code>
                                                </td>
                                                <td>
                                                    Sets a background color <code>$primary</code> for menu item on
                                                    <code>.here</code> state.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>.menu-show-bg-primary</code>
                                                </td>
                                                <td>
                                                    Sets a background color <code>$primary</code> for menu item on
                                                    <code>.show</code> state.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>.menu-active-bg-primary</code>
                                                </td>
                                                <td>
                                                    Sets a background color <code>$primary</code> for menu item on
                                                    <code>.active</code> state.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>.menu-hover-bg-primary</code>
                                                </td>
                                                <td>
                                                    Sets a background color <code>$primary</code> for menu item on
                                                    <code>:hover</code> state.
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <code>.menu-state-bg-light-primary</code>
                                                </td>
                                                <td>
                                                    Sets a background color <code>$primary-light</code> for menu item on
                                                    <code>.here</code>, <code>.show</code>, <code>.active</code> and
                                                    <code>:hover</code> states.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>.menu-here-bg-light-primary</code>
                                                </td>
                                                <td>
                                                    Sets a background color <code>$primary-light</code> for menu item on
                                                    <code>.here</code> state.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>.menu-show-bg-light-primary</code>
                                                </td>
                                                <td>
                                                    Sets a background color <code>$primary-light</code> for menu item on
                                                    <code>.show</code> state.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>.menu-active-bg-light-primary</code>
                                                </td>
                                                <td>
                                                    Sets a background color <code>$primary-light</code> for menu item on
                                                    <code>.active</code> state.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>.menu-hover-bg-light-primary</code>
                                                </td>
                                                <td>
                                                    Sets a background color <code>$primary-light</code> for menu item on
                                                    <code>:hover</code> state.
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="fw-bold fs-5" colspan="2">
                                                    Font Color
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <code>.menu-state-primary</code>
                                                </td>
                                                <td>
                                                    Sets a color <code>$primary</code> for menu title, icon, arrow and
                                                    bullet on
                                                    <code>.here</code>, <code>.show</code>, <code>.active</code> and
                                                    <code>:hover</code> states.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>.menu-here-primary</code>
                                                </td>
                                                <td>
                                                    Sets a color <code>$primary</code> for menu title, icon, arrow and
                                                    bullet on
                                                    <code>.here</code> state.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>.menu-show-primary</code>
                                                </td>
                                                <td>
                                                    Sets a color <code>$primary</code> for menu title, icon, arrow and
                                                    bullet on
                                                    <code>.show</code> state.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>.menu-active-primary</code>
                                                </td>
                                                <td>
                                                    Sets a color <code>$primary</code> for menu title, icon, arrow and
                                                    bullet on
                                                    <code>.active</code> state.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>.menu-hover-primary</code>
                                                </td>
                                                <td>
                                                    Sets a color <code>$primary</code> for menu title, icon, arrow and
                                                    bullet on
                                                    <code>:hover</code> state.
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <code>.menu-state-title-primary</code>
                                                </td>
                                                <td>
                                                    Sets a color <code>$primary</code> for menu title on
                                                    <code>.here</code>, <code>.show</code>, <code>.active</code> and
                                                    <code>:hover</code> states.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>.menu-here-title-primary</code>
                                                </td>
                                                <td>
                                                    Sets a color <code>$primary</code> for menu title on
                                                    <code>.here</code> state.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>.menu-show-title-primary</code>
                                                </td>
                                                <td>
                                                    Sets a color <code>$primary</code> for menu title on
                                                    <code>.show</code> state.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>.menu-active-title-primary</code>
                                                </td>
                                                <td>
                                                    Sets a color <code>$primary</code> for menu title on
                                                    <code>.active</code> state.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>.menu-hover-title-primary</code>
                                                </td>
                                                <td>
                                                    Sets a color <code>$primary</code> for menu title on
                                                    <code>:hover</code> state.
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <code>.menu-state-icon-primary</code>
                                                </td>
                                                <td>
                                                    Sets a color <code>$primary</code> for menu icon on
                                                    <code>.here</code>, <code>.show</code>, <code>.active</code> and
                                                    <code>:hover</code> states.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>.menu-here-icon-primary</code>
                                                </td>
                                                <td>
                                                    Sets a color <code>$primary</code> for menu icon on
                                                    <code>.here</code> state.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>.menu-show-icon-primary</code>
                                                </td>
                                                <td>
                                                    Sets a color <code>$primary</code> for menu icon on
                                                    <code>.show</code> state.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>.menu-active-icon-primary</code>
                                                </td>
                                                <td>
                                                    Sets a color <code>$primary</code> for menu icon on
                                                    <code>.active</code> state.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>.menu-hover-icon-primary</code>
                                                </td>
                                                <td>
                                                    Sets a color <code>$primary</code> for menu icon on
                                                    <code>:hover</code> state.
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <code>.menu-state-bullet-primary</code>
                                                </td>
                                                <td>
                                                    Sets a color <code>$primary</code> for menu bullet on
                                                    <code>.here</code>, <code>.show</code>, <code>.active</code> and
                                                    <code>:hover</code> states.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>.menu-here-bullet-primary</code>
                                                </td>
                                                <td>
                                                    Sets a color <code>$primary</code> for menu bullet on
                                                    <code>.here</code> state.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>.menu-show-bullet-primary</code>
                                                </td>
                                                <td>
                                                    Sets a color <code>$primary</code> for menu bullet on
                                                    <code>.show</code> state.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>.menu-active-bullet-primary</code>
                                                </td>
                                                <td>
                                                    Sets a color <code>$primary</code> for menu bullet on
                                                    <code>.active</code> state.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>.menu-hover-bullet-primary</code>
                                                </td>
                                                <td>
                                                    Sets a color <code>$primary</code> for menu bullet on
                                                    <code>:hover</code> state.
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <code>.menu-state-arrow-primary</code>
                                                </td>
                                                <td>
                                                    Sets a color <code>$primary</code> for menu arrow on
                                                    <code>.here</code>, <code>.show</code>, <code>.active</code> and
                                                    <code>:hover</code> states.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>.menu-here-arrow-primary</code>
                                                </td>
                                                <td>
                                                    Sets a color <code>$primary</code> for menu arrow on
                                                    <code>.here</code> state.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>.menu-show-arrow-primary</code>
                                                </td>
                                                <td>
                                                    Sets a color <code>$primary</code> for menu arrow on
                                                    <code>.show</code> state.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>.menu-active-arrow-primary</code>
                                                </td>
                                                <td>
                                                    Sets a color <code>$primary</code> for menu arrow on
                                                    <code>.active</code> state.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>.menu-hover-arrow-primary</code>
                                                </td>
                                                <td>
                                                    Sets a color <code>$primary</code> for menu arrow on
                                                    <code>:hover</code> state.
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!--end::Table-->
                            </div>
                            <!--end::Block-->

                            <div class="py-5">
                                <!--begin::Information-->
                                <div class="d-flex align-items-center rounded py-5 px-5 bg-light-warning "><i
                                        class="ki-duotone ki-information-5 fs-3x text-warning me-5"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span></i> <!--begin::Description-->
                                    <div class="text-gray-700 fw-bold fs-6">
                                        <code>$hover-bg</code> is a global Bootstrap component hover color defined in
                                        <code>src/sass/components/_variables.scss</code>
                                    </div> <!--end::Description-->
                                </div><!--end::Information-->
                            </div>

                            <!--begin::Block-->
                            <div class="py-5">
                                <!--begin::Wrapper-->
                                <div class="rounded border p-5 d-flex flex-wrap gap-4">
                                    <!--begin::Menu-->
                                    <div class="menu menu-rounded menu-column menu-gray-600 menu-active-bg-primary menu-hover-bg-light-primary menu-here-bg-light-primary menu-show-bg-light-primary fw-semibold w-175px"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item my-2 here" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-start">
                                            <!--begin::Menu link-->
                                            <a href="javascript:void(0)" class="menu-link">
                                                <span class="menu-icon">
                                                    <i class="ki-duotone ki-chart-simple-2 fs-3"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span></i>
                                                </span>
                                                <span class="menu-title">Here Link</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--end::Menu link-->

                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-2">
                                                <!--begin::Menu item-->
                                                <div class="menu-item my-1">
                                                    <a href="javascript:void(0)" class="menu-link active">
                                                        <span class="menu-icon">
                                                            <i class="ki-duotone ki-chart-simple-2 fs-3"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span class="path4"></span></i>
                                                        </span>
                                                        <span class="menu-title">Example Link</span>
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item my-1">
                                                    <a href="javascript:void(0)" class="menu-link">
                                                        <span class="menu-icon">
                                                            <i class="ki-duotone ki-notification-on fs-3"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span
                                                                    class="path4"></span><span class="path5"></span></i>
                                                        </span>
                                                        <span class="menu-title">Example Link</span>
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item my-1">
                                                    <a href="javascript:void(0)" class="menu-link">
                                                        <span class="menu-icon">
                                                            <i class="ki-duotone ki-calendar-2 fs-3"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span
                                                                    class="path4"></span><span class="path5"></span></i>
                                                        </span>
                                                        <span class="menu-title">Example Link</span>
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item my-1">
                                            <a href="javascript:void(0)" class="menu-link active">
                                                <span class="menu-icon">
                                                    <i class="ki-duotone ki-notification-on fs-3"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span><span
                                                            class="path5"></span></i>
                                                </span>
                                                <span class="menu-title">Active Link</span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item my-1" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-start">
                                            <!--begin::Menu link-->
                                            <a href="javascript:void(0)" class="menu-link">
                                                <span class="menu-icon">
                                                    <i class="ki-duotone ki-calendar-2 fs-3"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span><span
                                                            class="path5"></span></i>
                                                </span>
                                                <span class="menu-title">Show Link</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--end::Menu link-->

                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-2">
                                                <!--begin::Menu item-->
                                                <div class="menu-item my-1">
                                                    <a href="javascript:void(0)" class="menu-link">
                                                        <span class="menu-icon">
                                                            <i class="ki-duotone ki-chart-simple-2 fs-3"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span class="path4"></span></i>
                                                        </span>
                                                        <span class="menu-title">Example Link</span>
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item my-1">
                                                    <a href="javascript:void(0)" class="menu-link">
                                                        <span class="menu-icon">
                                                            <i class="ki-duotone ki-notification-on fs-3"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span
                                                                    class="path4"></span><span class="path5"></span></i>
                                                        </span>
                                                        <span class="menu-title">Example Link</span>
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item my-1">
                                                    <a href="javascript:void(0)" class="menu-link">
                                                        <span class="menu-icon">
                                                            <i class="ki-duotone ki-calendar-2 fs-3"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span
                                                                    class="path4"></span><span class="path5"></span></i>
                                                        </span>
                                                        <span class="menu-title">Example Link</span>
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item my-1">
                                            <a href="javascript:void(0)" class="menu-link">
                                                <span class="menu-icon">
                                                    <i class="ki-duotone ki-gear fs-3"><span class="path1"></span><span
                                                            class="path2"></span></i> </span>
                                                <span class="menu-title">Hover Link</span>
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
&lt;div class=&quot;menu menu-column menu-gray-600 menu-active-primary menu-hover-light-primary menu-here-light-primary menu-show-light-primary fw-semibold w-175px&quot; data-kt-menu=&quot;true&quot;&gt;
    &lt;!--begin::Menu item--&gt;
    &lt;div class=&quot;menu-item here&quot; data-kt-menu-trigger=&quot;hover&quot; data-kt-menu-placement=&quot;right-start&quot;&gt;
        &lt;!--begin::Menu link--&gt;
        &lt;a href=&quot;#&quot; class=&quot;menu-link&quot;&gt;
            &lt;span class=&quot;menu-icon&quot;&gt;
                &lt;i class=&quot;ki-duotone ki-chart-simple-2 fs-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;/i&gt;
            &lt;/span&gt;
            &lt;span class=&quot;menu-title&quot;&gt;Here Link&lt;/span&gt;
            &lt;span class=&quot;menu-arrow&quot;&gt;&lt;/span&gt;
        &lt;/a&gt;
        &lt;!--end::Menu link--&gt;

        &lt;!--begin::Menu sub--&gt;
        &lt;div class=&quot;menu-sub menu-sub-dropdown w-175px py-2&quot;&gt;
            &lt;!--begin::Menu item--&gt;
            &lt;div class=&quot;menu-item&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;menu-link active&quot;&gt;
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
                        &lt;i class=&quot;ki-duotone ki-notification-on fs-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;/i&gt;
                    &lt;/span&gt;
                    &lt;span class=&quot;menu-title&quot;&gt;Example Link&lt;/span&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;!--end::Menu item--&gt;

            &lt;!--begin::Menu item--&gt;
            &lt;div class=&quot;menu-item&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;menu-link&quot;&gt;
                    &lt;span class=&quot;menu-icon&quot;&gt;
                        &lt;i class=&quot;ki-duotone ki-calendar-2 fs-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;/i&gt;
                    &lt;/span&gt;
                    &lt;span class=&quot;menu-title&quot;&gt;Example Link&lt;/span&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;!--end::Menu item--&gt;
        &lt;/div&gt;
        &lt;!--end::Menu sub--&gt;
    &lt;/div&gt;
    &lt;!--end::Menu item--&gt;

    &lt;!--begin::Menu item--&gt;
    &lt;div class=&quot;menu-item&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;menu-link active&quot;&gt;
            &lt;span class=&quot;menu-icon&quot;&gt;
                &lt;i class=&quot;ki-duotone ki-notification-on fs-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;/i&gt;
            &lt;/span&gt;
            &lt;span class=&quot;menu-title&quot;&gt;Active Link&lt;/span&gt;
        &lt;/a&gt;
    &lt;/div&gt;
    &lt;!--end::Menu item--&gt;

    &lt;!--begin::Menu item--&gt;
    &lt;div class=&quot;menu-item&quot; data-kt-menu-trigger=&quot;hover&quot; data-kt-menu-placement=&quot;right-start&quot;&gt;
        &lt;!--begin::Menu link--&gt;
        &lt;a href=&quot;#&quot; class=&quot;menu-link&quot;&gt;
            &lt;span class=&quot;menu-icon&quot;&gt;
                &lt;i class=&quot;ki-duotone ki-calendar-2 fs-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;/i&gt;
            &lt;/span&gt;
            &lt;span class=&quot;menu-title&quot;&gt;Show Link&lt;/span&gt;
            &lt;span class=&quot;menu-arrow&quot;&gt;&lt;/span&gt;
        &lt;/a&gt;
        &lt;!--end::Menu link--&gt;

        &lt;!--begin::Menu sub--&gt;
        &lt;div class=&quot;menu-sub menu-sub-dropdown w-175px py-2&quot;&gt;
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
                        &lt;i class=&quot;ki-duotone ki-notification-on fs-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;/i&gt;
                    &lt;/span&gt;
                    &lt;span class=&quot;menu-title&quot;&gt;Example Link&lt;/span&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;!--end::Menu item--&gt;

            &lt;!--begin::Menu item--&gt;
            &lt;div class=&quot;menu-item&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;menu-link&quot;&gt;
                    &lt;span class=&quot;menu-icon&quot;&gt;
                        &lt;i class=&quot;ki-duotone ki-calendar-2 fs-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;/i&gt;
                    &lt;/span&gt;
                    &lt;span class=&quot;menu-title&quot;&gt;Example Link&lt;/span&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;!--end::Menu item--&gt;
        &lt;/div&gt;
        &lt;!--end::Menu sub--&gt;
    &lt;/div&gt;
    &lt;!--end::Menu item--&gt;

    &lt;!--begin::Menu item--&gt;
    &lt;div class=&quot;menu-item&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;menu-link&quot;&gt;
            &lt;span class=&quot;menu-icon&quot;&gt;
                &lt;i class=&quot;ki-duotone ki-gear fs-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
            &lt;/span&gt;
            &lt;span class=&quot;menu-title&quot;&gt;Hover Link&lt;/span&gt;
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
                                <a href="#utilities" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Utilities</span>
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
                                <a href="#states" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">States</span>
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


