@extends('layouts.document832')
@section('title', 'Index')
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
                        <h1 class="anchor fw-bold mb-5" id="generate-rtl" data-kt-scroll-offset="50">
                            <a href="#generate-rtl"></a>

                            Generating RTL CSS Files
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="pt-5">
                            <p>To generate RTL (Right-to-Left) CSS files for your Laravel application, follow these steps:
                            </p>
                            <ul class="py-3 fw-semibold">
                                <li>
                                    <p>Open your terminal or command prompt.</p>
                                </li>
                                <li>
                                    <p>Navigate to the root directory of your Laravel project.</p>
                                </li>
                                <li>
                                    <p>Run the following command:</p>
                                    <div class="pt-3"><!--begin::Highlight-->
                                        <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                                title="Copy code">copy</button>
                                            <div class="highlight-code">
                                                <pre class="language-javascript"><code class="language-javascript">npm run dev --rtl</code></pre>
                                            </div>
                                        </div><!--end::Highlight-->
                                    </div>
                                    <p>This command triggers the build process and generates the RTL CSS files based on your
                                        project's stylesheets.</p>
                                </li>
                            </ul>
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="pb-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="enable-rtl" data-kt-scroll-offset="50">
                            <a href="#enable-rtl"></a>

                            Updating RTL Configuration
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="pt-5">
                            To ensure that Laravel loads the RTL CSS files correctly, you need to update the configuration
                            settings. Follow these steps:
                            <ul class="py-3 fw-semibold">
                                <li>
                                    <p>Locate the file named settings.php in the following path:
                                        <code>/laravel/starterkit/config/settings.php</code>.
                                    </p>
                                </li>
                                <li>
                                    <p>Open the settings.php file in a text editor or IDE of your choice.</p>
                                </li>
                                <li>
                                    <p>Find the configuration key <code>KT_THEME_DIRECTION</code> and change its value from
                                        <code>ltr</code> to <code>rtl</code>.
                                    </p>
                                    <p>The updated configuration should look like this:</p>
                                    <code>'KT_THEME_DIRECTION' => 'rtl',</code>
                                    <p>This change notifies Laravel to load the RTL CSS files instead of the default LTR
                                        (Left-to-Right) ones.</p>
                                </li>
                                <li>
                                    <p>Save the settings.php file after making the necessary modification.</p>
                                </li>
                            </ul>
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
                                <a href="#generate-rtl" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Generating RTL CSS Files</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#enable-rtl" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Updating RTL Configuration</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Menu-->


                        <a href="https://1.envato.market/Vm7VRE" class="d-block mb-8">
                            <img src="https://devs.keenthemes.com/assets/media/banners/buy-metronic.png" alt="buy metronic"
                                class="mw-100 rounded-3" data-bs-toggle="popover" data-bs-trigger="hover"
                                data-bs-html="true" data-bs-placement="top" data-bs-title="<b>License Reminder</b>"
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


