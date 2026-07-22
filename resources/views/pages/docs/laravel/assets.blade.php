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
                        <h1 class="anchor fw-bold mb-5" id="assets" data-kt-scroll-offset="50">
                            <a href="#assets"></a>

                            Assets
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="pt-5">
                            All bundled assets are located in the folder <code>starterkit/lib/assets</code> and you can
                            include the static js, css and media files.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="pt-5">
                            By default, each controller will include all helper functions. These helpers are only accessible
                            on the controller through <code>helpers</code> variable.
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="javascript" data-kt-scroll-offset="50">
                            <a href="#javascript"></a>

                            Javascript
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="pt-5">
                            This is an example to add a single custom javascript file from the assets folder. The path is
                            point to the assets folder.
                            <div class="pt-3">
                                <!--begin::Highlight-->
                                <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                        title="Copy code">copy</button>
                                    <div class="highlight-code">
                                        <pre class="language-javascript"><code class="language-javascript">helpers.addJavascriptFile(&#039;js/custom/intro.js&#039;)</code></pre>
                                    </div>
                                </div><!--end::Highlight-->
                            </div>
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="sass" data-kt-scroll-offset="50">
                            <a href="#sass"></a>

                            SASS
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="pt-5">
                            This is an example to add a single custom css file from the <code>assets</code> folder.
                            <div class="pt-3">
                                <!--begin::Highlight-->
                                <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                        title="Copy code">copy</button>
                                    <div class="highlight-code">
                                        <pre class="language-javascript"><code class="language-javascript">helpers.addCssFile(&#039;plugins/custom/cookiealert/cookiealert.bundle.css&#039;)</code></pre>
                                    </div>
                                </div><!--end::Highlight-->
                            </div>
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="vendors" data-kt-scroll-offset="50">
                            <a href="#vendors"></a>

                            Vendors
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="pt-5">
                            Here is the example to add single vendor. Refer to <code>config/settings.yml</code> file in
                            <code>KT_THEME_VENDORS</code> and you can find the vendor name.
                            <div class="pt-3">
                                <!--begin::Highlight-->
                                <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                        title="Copy code">copy</button>
                                    <div class="highlight-code">
                                        <pre class="language-javascript"><code class="language-javascript">helpers.addVendor(&#039;datatables&#039;)</code></pre>
                                    </div>
                                </div><!--end::Highlight-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="pt-5">
                            This is an example to add multiple vendors.
                            <div class="pt-3">
                                <!--begin::Highlight-->
                                <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                        title="Copy code">copy</button>
                                    <div class="highlight-code">
                                        <pre class="language-javascript"><code class="language-javascript">helpers.addVendors([&#039;formrepeater&#039;, &#039;fullcalendar&#039;])</code></pre>
                                    </div>
                                </div><!--end::Highlight-->
                            </div>
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="build-assets" data-kt-scroll-offset="50">
                            <a href="#build-assets"></a>

                            Build assets
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="pt-5">
                            Before running the application we need to build theme assets:

                            <ol class="py-3 fw-semibold">
                                <li class="py-3">
                                    Navigate your prompt to <code>starterkit</code> folder.
                                    <div class="pt-3 pb-3">
                                        <!--begin::Highlight-->
                                        <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                                title="Copy code">copy</button>
                                            <div class="highlight-code">
                                                <pre class="language-bash"><code class="language-bash">cd starterkit</code></pre>
                                            </div>
                                        </div><!--end::Highlight-->
                                    </div>
                                </li>

                                <li class="py-3">
                                    Install node modules dependencies using NPM.

                                    <div class="py-5">
                                        <!--begin::Highlight-->
                                        <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                                title="Copy code">copy</button>
                                            <div class="highlight-code">
                                                <pre class="language-bash"><code class="language-bash">npm install</code></pre>
                                            </div>
                                        </div><!--end::Highlight-->
                                    </div>
                                </li>

                                <li class="py-3">
                                    The below command will compile all the assets(sass, js, media) to <code>public</code>
                                    folder:

                                    <div class="py-5">
                                        <!--begin::Highlight-->
                                        <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                                title="Copy code">copy</button>
                                            <div class="highlight-code">
                                                <pre class="language-bash"><code class="language-bash">npm run dev</code></pre>
                                            </div>
                                        </div><!--end::Highlight-->
                                    </div>
                                </li>

                            </ol>
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
                                <a href="#assets" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Assets</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#javascript" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Javascript</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#sass" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">SASS</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#vendors" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Vendors</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#build-assets" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Build assets</span>
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


