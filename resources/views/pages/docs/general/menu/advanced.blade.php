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
                        <h1 class="anchor fw-bold mb-5" id="accordion" data-kt-scroll-offset="50">
                            <a href="#accordion"></a>

                            Accordion
                        </h1>
                        <!--end::Heading-->



                        <!--begin::Example-->
                        <div class="mb-0">
                            <!--begin::Block-->
                            <div class="py-5">
                                Add a menu with <code>data-kt-menu="true"</code> and activate accordion mode for submenu
                                using <code>data-kt-menu-trigger="click"</code> attribute on <code>menu-sub
                                    menu-sub-accordion</code> submenus:
                            </div>
                            <!--end::Block-->

                            <!--begin::Block-->
                            <div class="py-5">
                                <!--begin::Information-->
                                <div class="d-flex align-items-center rounded py-5 px-5 bg-light-info "><i
                                        class="ki-duotone ki-information-5 fs-3x text-info me-5"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span></i> <!--begin::Description-->
                                    <div class="text-gray-700 fw-bold fs-6">
                                        Use <code>.menu-sub-indention</code> class to add menu link indention through margin
                                        while
                                        <code>.menu-link-indention</code> adds the indention with padding.
                                    </div> <!--end::Description-->
                                </div><!--end::Information-->
                            </div>
                            <!--end::Block-->

                            <!--begin::Block-->
                            <div class="py-5">
                                <!--begin::Wrapper-->
                                <div class="rounded border p-5 d-flex flex-wrap gap-4">
                                    <!--begin::Menu-->
                                    <div class="menu menu-rounded menu-column menu-title-gray-700 menu-icon-gray-500 menu-arrow-gray-500 menu-bullet-gray-500 menu-arrow-gray-500 menu-state-bg fw-semibold w-250px"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item menu-sub-indention menu-accordion"
                                            data-kt-menu-trigger="click">
                                            <!--begin::Menu link-->
                                            <a href="javascript:void(0)" class="menu-link py-3">
                                                <span class="menu-icon">
                                                    <i class="ki-duotone ki-chart-simple-2 fs-3"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span></i>
                                                </span>
                                                <span class="menu-title">Example Link</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--end::Menu link-->

                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-accordion pt-3">
                                                <!--begin::Menu item-->
                                                <div class="menu-item">
                                                    <a href="javascript:void(0)" class="menu-link py-3">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Example Link</span>
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item">
                                                    <a href="javascript:void(0)" class="menu-link py-3">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Example Link</span>
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item menu-accordion" data-kt-menu-trigger="click">
                                                    <!--begin::Menu link-->
                                                    <a href="javascript:void(0)" class="menu-link py-3">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Example Link</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <!--end::Menu link-->

                                                    <!--begin::Menu sub-->
                                                    <div class="menu-sub menu-sub-accordion pt-3">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item">
                                                            <a href="javascript:void(0)" class="menu-link py-3">
                                                                <span class="menu-bullet">
                                                                    <span class="bullet bullet-dot"></span>
                                                                </span>
                                                                <span class="menu-title">Example Link</span>
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item">
                                                            <a href="javascript:void(0)" class="menu-link py-3">
                                                                <span class="menu-bullet">
                                                                    <span class="bullet bullet-dot"></span>
                                                                </span>
                                                                <span class="menu-title">Example Link</span>
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item">
                                                            <a href="javascript:void(0)" class="menu-link py-3">
                                                                <span class="menu-bullet">
                                                                    <span class="bullet bullet-dot"></span>
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
                                                <div class="menu-item">
                                                    <a href="javascript:void(0)" class="menu-link py-3">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
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
                                        <div class="menu-item">
                                            <a href="javascript:void(0)" class="menu-link py-3">
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
                                        <div class="menu-item menu-link-indention menu-accordion"
                                            data-kt-menu-trigger="click">
                                            <!--begin::Menu link-->
                                            <a href="javascript:void(0)" class="menu-link py-3">
                                                <span class="menu-icon">
                                                    <i class="ki-duotone ki-calendar-2 fs-3"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span><span
                                                            class="path5"></span></i>
                                                </span>
                                                <span class="menu-title">Example Link</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--end::Menu link-->

                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-accordion pt-3">
                                                <!--begin::Menu item-->
                                                <div class="menu-item">
                                                    <a href="javascript:void(0)" class="menu-link py-3 active">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Example Link</span>
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item">
                                                    <a href="javascript:void(0)" class="menu-link py-3">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Example Link</span>
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item">
                                                    <a href="javascript:void(0)" class="menu-link py-3">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
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
                                        <div class="menu-item">
                                            <a href="javascript:void(0)" class="menu-link py-3">
                                                <span class="menu-icon">
                                                    <i class="ki-duotone ki-gear fs-3"><span class="path1"></span><span
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
&lt;div class=&quot;menu menu-rounded menu-column menu-title-gray-700 menu-icon-gray-500 menu-arrow-gray-500 menu-bullet-gray-500 menu-arrow-gray-500 menu-state-bg fw-semibold w-250px&quot; data-kt-menu=&quot;true&quot;&gt;
    &lt;!--begin::Menu item--&gt;
    &lt;div class=&quot;menu-item menu-sub-indention menu-accordion&quot; data-kt-menu-trigger=&quot;click&quot;&gt;
        &lt;!--begin::Menu link--&gt;
        &lt;a href=&quot;#&quot; class=&quot;menu-link py-3&quot;&gt;
            &lt;span class=&quot;menu-icon&quot;&gt;
                &lt;i class=&quot;ki-duotone ki-chart-simple-2 fs-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;/i&gt;
            &lt;/span&gt;
            &lt;span class=&quot;menu-title&quot;&gt;Example Link&lt;/span&gt;
            &lt;span class=&quot;menu-arrow&quot;&gt;&lt;/span&gt;
        &lt;/a&gt;
        &lt;!--end::Menu link--&gt;

        &lt;!--begin::Menu sub--&gt;
        &lt;div class=&quot;menu-sub menu-sub-accordion pt-3&quot;&gt;
            &lt;!--begin::Menu item--&gt;
            &lt;div class=&quot;menu-item&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;menu-link py-3&quot;&gt;
                    &lt;span class=&quot;menu-bullet&quot;&gt;
                        &lt;span class=&quot;bullet bullet-dot&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;
                    &lt;span class=&quot;menu-title&quot;&gt;Example Link&lt;/span&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;!--end::Menu item--&gt;

            &lt;!--begin::Menu item--&gt;
            &lt;div class=&quot;menu-item&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;menu-link py-3&quot;&gt;
                    &lt;span class=&quot;menu-bullet&quot;&gt;
                        &lt;span class=&quot;bullet bullet-dot&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;
                    &lt;span class=&quot;menu-title&quot;&gt;Example Link&lt;/span&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;!--end::Menu item--&gt;

            &lt;!--begin::Menu item--&gt;
            &lt;div class=&quot;menu-item menu-accordion&quot; data-kt-menu-trigger=&quot;click&quot;&gt;
                &lt;!--begin::Menu link--&gt;
                &lt;a href=&quot;#&quot; class=&quot;menu-link py-3&quot;&gt;
                    &lt;span class=&quot;menu-bullet&quot;&gt;
                        &lt;span class=&quot;bullet bullet-dot&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;
                    &lt;span class=&quot;menu-title&quot;&gt;Example Link&lt;/span&gt;
                    &lt;span class=&quot;menu-arrow&quot;&gt;&lt;/span&gt;
                &lt;/a&gt;
                &lt;!--end::Menu link--&gt;

                &lt;!--begin::Menu sub--&gt;
                &lt;div class=&quot;menu-sub menu-sub-accordion pt-3&quot;&gt;
                    &lt;!--begin::Menu item--&gt;
                    &lt;div class=&quot;menu-item&quot;&gt;
                        &lt;a href=&quot;#&quot; class=&quot;menu-link py-3&quot;&gt;
                            &lt;span class=&quot;menu-bullet&quot;&gt;
                                &lt;span class=&quot;bullet bullet-dot&quot;&gt;&lt;/span&gt;
                            &lt;/span&gt;
                            &lt;span class=&quot;menu-title&quot;&gt;Example Link&lt;/span&gt;
                        &lt;/a&gt;
                    &lt;/div&gt;
                    &lt;!--end::Menu item--&gt;

                    &lt;!--begin::Menu item--&gt;
                    &lt;div class=&quot;menu-item&quot;&gt;
                        &lt;a href=&quot;#&quot; class=&quot;menu-link py-3&quot;&gt;
                            &lt;span class=&quot;menu-bullet&quot;&gt;
                                &lt;span class=&quot;bullet bullet-dot&quot;&gt;&lt;/span&gt;
                            &lt;/span&gt;
                            &lt;span class=&quot;menu-title&quot;&gt;Example Link&lt;/span&gt;
                        &lt;/a&gt;
                    &lt;/div&gt;
                    &lt;!--end::Menu item--&gt;

                    &lt;!--begin::Menu item--&gt;
                    &lt;div class=&quot;menu-item&quot;&gt;
                        &lt;a href=&quot;#&quot; class=&quot;menu-link py-3&quot;&gt;
                            &lt;span class=&quot;menu-bullet&quot;&gt;
                                &lt;span class=&quot;bullet bullet-dot&quot;&gt;&lt;/span&gt;
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
                &lt;a href=&quot;#&quot; class=&quot;menu-link py-3&quot;&gt;
                    &lt;span class=&quot;menu-bullet&quot;&gt;
                        &lt;span class=&quot;bullet bullet-dot&quot;&gt;&lt;/span&gt;
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
        &lt;a href=&quot;#&quot; class=&quot;menu-link py-3&quot;&gt;
            &lt;span class=&quot;menu-icon&quot;&gt;
                &lt;i class=&quot;ki-duotone ki-notification-on fs-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;/i&gt;
            &lt;/span&gt;
            &lt;span class=&quot;menu-title&quot;&gt;Example Link&lt;/span&gt;
        &lt;/a&gt;
    &lt;/div&gt;
    &lt;!--end::Menu item--&gt;

    &lt;!--begin::Menu item--&gt;
    &lt;div class=&quot;menu-item menu-link-indention menu-accordion&quot; data-kt-menu-trigger=&quot;click&quot;&gt;
        &lt;!--begin::Menu link--&gt;
        &lt;a href=&quot;#&quot; class=&quot;menu-link py-3&quot;&gt;
            &lt;span class=&quot;menu-icon&quot;&gt;
                &lt;i class=&quot;ki-duotone ki-calendar-2 fs-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;/i&gt;
            &lt;/span&gt;
            &lt;span class=&quot;menu-title&quot;&gt;Example Link&lt;/span&gt;
            &lt;span class=&quot;menu-arrow&quot;&gt;&lt;/span&gt;
        &lt;/a&gt;
        &lt;!--end::Menu link--&gt;

        &lt;!--begin::Menu sub--&gt;
        &lt;div class=&quot;menu-sub menu-sub-accordion pt-3&quot;&gt;
            &lt;!--begin::Menu item--&gt;
            &lt;div class=&quot;menu-item&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;menu-link py-3 active&quot;&gt;
                    &lt;span class=&quot;menu-bullet&quot;&gt;
                        &lt;span class=&quot;bullet bullet-dot&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;
                    &lt;span class=&quot;menu-title&quot;&gt;Example Link&lt;/span&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;!--end::Menu item--&gt;

            &lt;!--begin::Menu item--&gt;
            &lt;div class=&quot;menu-item&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;menu-link py-3&quot;&gt;
                    &lt;span class=&quot;menu-bullet&quot;&gt;
                        &lt;span class=&quot;bullet bullet-dot&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;
                    &lt;span class=&quot;menu-title&quot;&gt;Example Link&lt;/span&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;!--end::Menu item--&gt;

            &lt;!--begin::Menu item--&gt;
            &lt;div class=&quot;menu-item&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;menu-link py-3&quot;&gt;
                    &lt;span class=&quot;menu-bullet&quot;&gt;
                        &lt;span class=&quot;bullet bullet-dot&quot;&gt;&lt;/span&gt;
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
        &lt;a href=&quot;#&quot; class=&quot;menu-link py-3&quot;&gt;
            &lt;span class=&quot;menu-icon&quot;&gt;
                &lt;i class=&quot;ki-duotone ki-gear fs-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
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
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="dropdown" data-kt-scroll-offset="50">
                            <a href="#dropdown"></a>

                            Dropdown
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Example-->
                        <div class="mb-5">
                            <!--begin::Block-->
                            <div class="py-5">
                                Add a menu with <code>data-kt-menu="true"</code> and activate dropdown submenus using
                                <code>data-kt-menu-trigger="hover"</code> attribute on <code>menu-sub
                                    menu-sub-dropdown</code> submenus:
                            </div>
                            <!--end::Block-->

                            <!--begin::Block-->
                            <div class="py-5">
                                <!--begin::Wrapper-->
                                <div class="rounded border p-5 d-flex flex-wrap gap-4">
                                    <!--begin::Menu-->
                                    <div class="menu menu-rounded menu-column menu-title-gray-700 menu-icon-gray-500 menu-arrow-gray-500 menu-bullet-gray-500 menu-arrow-gray-500 menu-state-bg fw-semibold w-250px"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-start">
                                            <!--begin::Menu link-->
                                            <a href="javascript:void(0)" class="menu-link py-3">
                                                <span class="menu-icon">
                                                    <i class="ki-duotone ki-chart-simple-2 fs-3"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span></i>
                                                </span>
                                                <span class="menu-title">Example Link</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--end::Menu link-->

                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown p-3 w-200px">
                                                <!--begin::Menu item-->
                                                <div class="menu-item">
                                                    <a href="javascript:void(0)" class="menu-link px-1 py-3">
                                                        <span class="menu-bullet me-0">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Example Link</span>
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item">
                                                    <a href="javascript:void(0)" class="menu-link px-1 py-3">
                                                        <span class="menu-bullet me-0">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Example Link</span>
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item">
                                                    <a href="javascript:void(0)" class="menu-link px-1 py-3">
                                                        <span class="menu-bullet me-0">
                                                            <span class="bullet bullet-dot"></span>
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
                                        <div class="menu-item">
                                            <a href="javascript:void(0)" class="menu-link py-3">
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
                                        <div class="menu-item" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-start">
                                            <!--begin::Menu link-->
                                            <a href="javascript:void(0)" class="menu-link py-3">
                                                <span class="menu-icon">
                                                    <i class="ki-duotone ki-calendar-2 fs-3"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span><span
                                                            class="path5"></span></i>
                                                </span>
                                                <span class="menu-title">Example Link</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--end::Menu link-->

                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown p-3 w-200px">
                                                <!--begin::Menu item-->
                                                <div class="menu-item">
                                                    <a href="javascript:void(0)" class="menu-link px-1 py-3">
                                                        <span class="menu-bullet me-0">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Example Link</span>
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item">
                                                    <a href="javascript:void(0)" class="menu-link px-1 py-3">
                                                        <span class="menu-bullet me-0">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Example Link</span>
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item">
                                                    <a href="javascript:void(0)" class="menu-link px-1 py-3">
                                                        <span class="menu-bullet me-0">
                                                            <span class="bullet bullet-dot"></span>
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
                                        <div class="menu-item">
                                            <a href="javascript:void(0)" class="menu-link py-3">
                                                <span class="menu-icon">
                                                    <i class="ki-duotone ki-gear fs-3"><span class="path1"></span><span
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
&lt;div class=&quot;menu menu-rounded menu-column menu-gray-600 menu-state-bg fw-semibold w-250px&quot; data-kt-menu=&quot;true&quot;&gt;
    &lt;!--begin::Menu item--&gt;
    &lt;div class=&quot;menu-item&quot; data-kt-menu-trigger=&quot;hover&quot; data-kt-menu-placement=&quot;right-start&quot;&gt;
        &lt;!--begin::Menu link--&gt;
        &lt;a href=&quot;#&quot; class=&quot;menu-link py-3&quot;&gt;
            &lt;span class=&quot;menu-icon&quot;&gt;
                &lt;i class=&quot;ki-duotone ki-chart-simple-2 fs-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;/i&gt;
            &lt;/span&gt;
            &lt;span class=&quot;menu-title&quot;&gt;Example Link&lt;/span&gt;
            &lt;span class=&quot;menu-arrow&quot;&gt;&lt;/span&gt;
        &lt;/a&gt;
        &lt;!--end::Menu link--&gt;

        &lt;!--begin::Menu sub--&gt;
        &lt;div class=&quot;menu-sub menu-sub-dropdown p-3 w-200px&quot;&gt;
            &lt;!--begin::Menu item--&gt;
            &lt;div class=&quot;menu-item&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;menu-link px-1 py-3&quot;&gt;
                    &lt;span class=&quot;menu-bullet me-0&quot;&gt;
                        &lt;span class=&quot;bullet bullet-dot&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;
                    &lt;span class=&quot;menu-title&quot;&gt;Example Link&lt;/span&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;!--end::Menu item--&gt;

            &lt;!--begin::Menu item--&gt;
            &lt;div class=&quot;menu-item&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;menu-link px-1 py-3&quot;&gt;
                    &lt;span class=&quot;menu-bullet me-0&quot;&gt;
                        &lt;span class=&quot;bullet bullet-dot&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;
                    &lt;span class=&quot;menu-title&quot;&gt;Example Link&lt;/span&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;!--end::Menu item--&gt;

            &lt;!--begin::Menu item--&gt;
            &lt;div class=&quot;menu-item&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;menu-link px-1 py-3&quot;&gt;
                    &lt;span class=&quot;menu-bullet me-0&quot;&gt;
                        &lt;span class=&quot;bullet bullet-dot&quot;&gt;&lt;/span&gt;
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
        &lt;a href=&quot;#&quot; class=&quot;menu-link py-3&quot;&gt;
            &lt;span class=&quot;menu-icon&quot;&gt;
                &lt;i class=&quot;ki-duotone ki-notification-on fs-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;/i&gt;
            &lt;/span&gt;
            &lt;span class=&quot;menu-title&quot;&gt;Example Link&lt;/span&gt;
        &lt;/a&gt;
    &lt;/div&gt;
    &lt;!--end::Menu item--&gt;

    &lt;!--begin::Menu item--&gt;
    &lt;div class=&quot;menu-item&quot; data-kt-menu-trigger=&quot;hover&quot; data-kt-menu-placement=&quot;right-start&quot;&gt;
        &lt;!--begin::Menu link--&gt;
        &lt;a href=&quot;#&quot; class=&quot;menu-link py-3&quot;&gt;
            &lt;span class=&quot;menu-icon&quot;&gt;
                &lt;i class=&quot;ki-duotone ki-calendar-2 fs-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;/i&gt;
            &lt;/span&gt;
            &lt;span class=&quot;menu-title&quot;&gt;Example Link&lt;/span&gt;
            &lt;span class=&quot;menu-arrow&quot;&gt;&lt;/span&gt;
        &lt;/a&gt;
        &lt;!--end::Menu link--&gt;

        &lt;!--begin::Menu sub--&gt;
        &lt;div class=&quot;menu-sub menu-sub-dropdown p-3 w-200px&quot;&gt;
            &lt;!--begin::Menu item--&gt;
            &lt;div class=&quot;menu-item&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;menu-link px-1 py-3&quot;&gt;
                    &lt;span class=&quot;menu-bullet me-0&quot;&gt;
                        &lt;span class=&quot;bullet bullet-dot&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;
                    &lt;span class=&quot;menu-title&quot;&gt;Example Link&lt;/span&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;!--end::Menu item--&gt;

            &lt;!--begin::Menu item--&gt;
            &lt;div class=&quot;menu-item&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;menu-link px-1 py-3&quot;&gt;
                    &lt;span class=&quot;menu-bullet me-0&quot;&gt;
                        &lt;span class=&quot;bullet bullet-dot&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;
                    &lt;span class=&quot;menu-title&quot;&gt;Example Link&lt;/span&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;!--end::Menu item--&gt;

            &lt;!--begin::Menu item--&gt;
            &lt;div class=&quot;menu-item&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;menu-link px-1 py-3&quot;&gt;
                    &lt;span class=&quot;menu-bullet me-0&quot;&gt;
                        &lt;span class=&quot;bullet bullet-dot&quot;&gt;&lt;/span&gt;
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
        &lt;a href=&quot;#&quot; class=&quot;menu-link py-3&quot;&gt;
            &lt;span class=&quot;menu-icon&quot;&gt;
                &lt;i class=&quot;bi bi-gear fs-3&quot;&gt;&lt;/i&gt;
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
                    <!--begin::Section-->
                    <div class="pb-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="toggle-dropdown" data-kt-scroll-offset="50">
                            <a href="#toggle-dropdown"></a>

                            Toggle Dropdown
                        </h1>
                        <!--end::Heading-->



                        <!--begin::Example-->
                        <div class="mb-0">
                            <!--begin::Block-->
                            <div class="py-5">
                                Use an external element to toggle a dropdown menu:
                            </div>
                            <!--end::Block-->

                            <!--begin::Block-->
                            <div class="py-5">
                                <!--begin::Information-->
                                <div class="d-flex align-items-center rounded py-5 px-5 bg-light-info "><i
                                        class="ki-duotone ki-information-5 fs-3x text-info me-5"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span></i> <!--begin::Description-->
                                    <div class="text-gray-700 fw-bold fs-6">
                                        Bootstrap Menu can be combined with our exclusive Rotate components for greater
                                        functionality
                                    </div> <!--end::Description-->
                                </div><!--end::Information-->
                            </div>
                            <!--end::Block-->

                            <!--begin::Block-->
                            <div class="py-5">
                                <!--begin::Wrapper-->
                                <div class="rounded border p-5 d-flex flex-wrap gap-4">
                                    <!--begin::Menu wrapper-->
                                    <div>
                                        <!--begin::Toggle-->
                                        <button type="button" class="btn btn-primary rotate"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start"
                                            data-kt-menu-offset="0,5">
                                            Click to open menu

                                            <i class="ki-duotone ki-down fs-3 rotate-180 ms-3 me-0"></i> </button>
                                        <!--end::Toggle-->

                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-auto min-w-200 mw-300px"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick
                                                    Actions</div>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu separator-->
                                            <div class="separator mb-3 opacity-75"></div>
                                            <!--end::Menu separator-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="javascript:void(0)" class="menu-link px-3">
                                                    New Ticket
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="javascript:void(0)" class="menu-link px-3">
                                                    New Customer
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                data-kt-menu-placement="right-start" data-kt-menu-offset="5, 5">
                                                <!--begin::Menu item-->
                                                <a href="javascript:void(0)" class="menu-link px-3">
                                                    <span class="menu-title">New Group</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--end::Menu item-->

                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="javascript:void(0)" class="menu-link px-3">
                                                            Admin Group
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="javascript:void(0)" class="menu-link px-3">
                                                            Staff Group
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="javascript:void(0)" class="menu-link px-3">
                                                            Member Group
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="javascript:void(0)" class="menu-link px-3">
                                                    New Contact
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu separator-->
                                            <div class="separator mt-3 opacity-75"></div>
                                            <!--end::Menu separator-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3 py-3">
                                                    <a class="btn btn-light-primary btn-sm px-4" href="javascript:void(0)">
                                                        Generate Reports
                                                    </a>
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Dropdown wrapper-->
                                </div>
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::Block-->

                            <!--begin::Code-->
                            <div class="py-5">
                                <!--begin::Highlight-->
                                <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                        title="Copy code">copy</button>
                                    <div class="highlight-code">
                                        <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Menu wrapper--&gt;
&lt;div&gt;
    &lt;!--begin::Toggle--&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary rotate&quot; data-kt-menu-trigger=&quot;click&quot; data-kt-menu-placement=&quot;bottom-start&quot; data-kt-menu-offset=&quot;30px, 30px&quot;&gt;
        Click to open menu
        &lt;span class=&quot;svg-icon fs-3 rotate-180 ms-3 me-0&quot;&gt;...&lt;/span&gt;
    &lt;/button&gt;
    &lt;!--end::Toggle--&gt;

    &lt;!--begin::Menu--&gt;
    &lt;div class=&quot;menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-auto min-w-200 mw-300px&quot; data-kt-menu=&quot;true&quot;&gt;
        &lt;!--begin::Menu item--&gt;
        &lt;div class=&quot;menu-item px-3&quot;&gt;
            &lt;div class=&quot;menu-content fs-6 text-gray-900 fw-bold px-3 py-4&quot;&gt;Quick Actions&lt;/div&gt;
        &lt;/div&gt;
        &lt;!--end::Menu item--&gt;

        &lt;!--begin::Menu separator--&gt;
        &lt;div class=&quot;separator mb-3 opacity-75&quot;&gt;&lt;/div&gt;
        &lt;!--end::Menu separator--&gt;

        &lt;!--begin::Menu item--&gt;
        &lt;div class=&quot;menu-item px-3&quot;&gt;
            &lt;a href=&quot;#&quot; class=&quot;menu-link px-3&quot;&gt;
                New Ticket
            &lt;/a&gt;
        &lt;/div&gt;
        &lt;!--end::Menu item--&gt;

        &lt;!--begin::Menu item--&gt;
        &lt;div class=&quot;menu-item px-3&quot;&gt;
            &lt;a href=&quot;#&quot; class=&quot;menu-link px-3&quot;&gt;
                New Customer
            &lt;/a&gt;
        &lt;/div&gt;
        &lt;!--end::Menu item--&gt;

        &lt;!--begin::Menu item--&gt;
        &lt;div class=&quot;menu-item px-3&quot; data-kt-menu-trigger=&quot;hover&quot; data-kt-menu-placement=&quot;right-start&quot;&gt;
            &lt;!--begin::Menu item--&gt;
            &lt;a href=&quot;#&quot; class=&quot;menu-link px-3&quot;&gt;
                &lt;span class=&quot;menu-title&quot;&gt;New Group&lt;/span&gt;
                &lt;span class=&quot;menu-arrow&quot;&gt;&lt;/span&gt;
            &lt;/a&gt;
            &lt;!--end::Menu item--&gt;

            &lt;!--begin::Menu sub--&gt;
            &lt;div class=&quot;menu-sub menu-sub-dropdown w-175px py-4&quot;&gt;
                &lt;!--begin::Menu item--&gt;
                &lt;div class=&quot;menu-item px-3&quot;&gt;
                    &lt;a href=&quot;#&quot; class=&quot;menu-link px-3&quot;&gt;
                        Admin Group
                    &lt;/a&gt;
                &lt;/div&gt;
                &lt;!--end::Menu item--&gt;

                &lt;!--begin::Menu item--&gt;
                &lt;div class=&quot;menu-item px-3&quot;&gt;
                    &lt;a href=&quot;#&quot; class=&quot;menu-link px-3&quot;&gt;
                        Staff Group
                    &lt;/a&gt;
                &lt;/div&gt;
                &lt;!--end::Menu item--&gt;

                &lt;!--begin::Menu item--&gt;
                &lt;div class=&quot;menu-item px-3&quot;&gt;
                    &lt;a href=&quot;#&quot; class=&quot;menu-link px-3&quot;&gt;
                        Member Group
                    &lt;/a&gt;
                &lt;/div&gt;
                &lt;!--end::Menu item--&gt;
            &lt;/div&gt;
            &lt;!--end::Menu sub--&gt;
        &lt;/div&gt;
        &lt;!--end::Menu item--&gt;

        &lt;!--begin::Menu item--&gt;
        &lt;div class=&quot;menu-item px-3&quot;&gt;
            &lt;a href=&quot;#&quot; class=&quot;menu-link px-3&quot;&gt;
                New Contact
            &lt;/a&gt;
        &lt;/div&gt;
        &lt;!--end::Menu item--&gt;

        &lt;!--begin::Menu separator--&gt;
        &lt;div class=&quot;separator mt-3 opacity-75&quot;&gt;&lt;/div&gt;
        &lt;!--end::Menu separator--&gt;

        &lt;!--begin::Menu item--&gt;
        &lt;div class=&quot;menu-item px-3&quot;&gt;
            &lt;div class=&quot;menu-content px-3 py-3&quot;&gt;
                &lt;a class=&quot;btn btn-light-primary btn-sm px-4&quot; href=&quot;#&quot;&gt;
                    Generate Reports
                &lt;/a&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;!--end::Menu item--&gt;
    &lt;/div&gt;
    &lt;!--end::Menu--&gt;
&lt;/div&gt;
&lt;!--end::Dropdown wrapper--&gt;</code></pre>
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
                        <h1 class="anchor fw-bold mb-5" id="grouped" data-kt-scroll-offset="50">
                            <a href="#grouped"></a>

                            Grouped
                        </h1>
                        <!--end::Heading-->



                        <!--begin::Example-->
                        <div class="mb-0">
                            <!--begin::Block-->
                            <div class="py-5">
                                Custom vertical menu with grouped items and item active state:
                            </div>
                            <!--end::Block-->

                            <!--begin::Block-->
                            <div class="py-5">
                                <!--begin::Wrapper-->
                                <div class="rounded border p-5 d-flex flex-wrap gap-4">
                                    <!--begin::Menu-->
                                    <div class="menu menu-rounded menu-column menu-active-bg menu-hover-bg menu-title-gray-700 fs-5 fw-semibold w-250px"
                                        id="#kt_aside_menu" data-kt-menu="true">
                                        <div class="menu-item">
                                            <div class="menu-content pb-2">
                                                <span
                                                    class="menu-section text-muted text-uppercase fs-7 fw-bold">Public</span>
                                            </div>
                                        </div>
                                        <div class="menu-item">
                                            <a href="javascript:void(0)"
                                                class="menu-link active border-3 border-start border-primary">
                                                <span class="menu-title">All Questions</span>
                                                <span class="menu-badge fs-7 fw-normal text-muted">675</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a href="javascript:void(0)" class="menu-link border-3 border-start border-transparent">
                                                <span class="menu-title">Popular</span>
                                                <span class="menu-badge fs-7 fw-normal text-muted">14</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a href="javascript:void(0)" class="menu-link border-3 border-start border-transparent">
                                                <span class="menu-title">Tags</span>
                                            </a>
                                        </div>
                                        <div class="menu-item pt-5">
                                            <div class="menu-content pb-2">
                                                <span class="menu-section text-muted text-uppercase fs-7 fw-bold">My
                                                    Activity</span>
                                            </div>
                                        </div>
                                        <div class="menu-item">
                                            <a href="javascript:void(0)" class="menu-link border-3 border-start border-transparent">
                                                <span class="menu-title">Assigned to Me</span>
                                                <span class="menu-badge fs-7 fw-semibold text-muted">1</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a href="javascript:void(0)" class="menu-link border-3 border-start border-transparent">
                                                <span class="menu-title">Unresolved</span>
                                                <span class="menu-badge fs-7 fw-semibold text-muted">7</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a href="javascript:void(0)" class="menu-link border-3 border-start border-transparent">
                                                <span class="menu-title">Resolved</span>
                                                <span class="menu-badge fs-7 fw-semibold text-muted">668</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a href="javascript:void(0)" class="menu-link border-3 border-start border-transparent">
                                                <span class="menu-title">Archived</span>
                                                <span class="menu-badge fs-7 fw-semibold text-muted">39</span>
                                            </a>
                                        </div>
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
&lt;div class=&quot;menu menu-rounded menu-column menu-active-bg menu-hover-bg menu-title-gray-700 fs-5 fw-semibold w-250px&quot; id=&quot;#kt_aside_menu&quot; data-kt-menu=&quot;true&quot;&gt;
    &lt;div class=&quot;menu-item&quot;&gt;
        &lt;div class=&quot;menu-content pb-2&quot;&gt;
            &lt;span class=&quot;menu-section text-muted text-uppercase fs-7 fw-bold&quot;&gt;Public&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;menu-item&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;menu-link active border-3 border-start border-primary&quot;&gt;
            &lt;span class=&quot;menu-title&quot;&gt;All Questions&lt;/span&gt;
            &lt;span class=&quot;menu-badge fs-7 fw-normal text-muted&quot;&gt;675&lt;/span&gt;
        &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;menu-item&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;menu-link border-3 border-start border-transparent&quot;&gt;
            &lt;span class=&quot;menu-title&quot;&gt;Popular&lt;/span&gt;
            &lt;span class=&quot;menu-badge fs-7 fw-normal text-muted&quot;&gt;14&lt;/span&gt;
        &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;menu-item&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;menu-link border-3 border-start border-transparent&quot;&gt;
            &lt;span class=&quot;menu-title&quot;&gt;Tags&lt;/span&gt;
        &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;menu-item pt-5&quot;&gt;
        &lt;div class=&quot;menu-content pb-2&quot;&gt;
            &lt;span class=&quot;menu-section text-muted text-uppercase fs-7 fw-bold&quot;&gt;My Activity&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;menu-item&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;menu-link border-3 border-start border-transparent&quot;&gt;
            &lt;span class=&quot;menu-title&quot;&gt;Assigned to Me&lt;/span&gt;
            &lt;span class=&quot;menu-badge fs-7 fw-semibold text-muted&quot;&gt;1&lt;/span&gt;
        &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;menu-item&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;menu-link border-3 border-start border-transparent&quot;&gt;
            &lt;span class=&quot;menu-title&quot;&gt;Unresolved&lt;/span&gt;
            &lt;span class=&quot;menu-badge fs-7 fw-semibold text-muted&quot;&gt;7&lt;/span&gt;
        &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;menu-item&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;menu-link border-3 border-start border-transparent&quot;&gt;
            &lt;span class=&quot;menu-title&quot;&gt;Resolved&lt;/span&gt;
            &lt;span class=&quot;menu-badge fs-7 fw-semibold text-muted&quot;&gt;668&lt;/span&gt;
        &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;menu-item&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;menu-link border-3 border-start border-transparent&quot;&gt;
            &lt;span class=&quot;menu-title&quot;&gt;Archived&lt;/span&gt;
            &lt;span class=&quot;menu-badge fs-7 fw-semibold text-muted&quot;&gt;39&lt;/span&gt;
        &lt;/a&gt;
    &lt;/div&gt;
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
                                <a href="#accordion" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Accordion</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#dropdown" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Dropdown</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#toggle-dropdown" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Toggle Dropdown</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#grouped" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Grouped</span>
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


