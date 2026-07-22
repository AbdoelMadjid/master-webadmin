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
                        <h1 class="anchor fw-bold mb-5" id="templates" data-kt-scroll-offset="50">
                            <a href="#templates"></a>

                            Templates
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="pt-5">
                            Blade is the simple, yet powerful templating engine that is included with Laravel. Unlike some
                            PHP templating engines, Blade does not restrict you from using plain PHP code in your templates.
                            In fact, all Blade templates are compiled into plain PHP code and cached until they are
                            modified, meaning Blade adds essentially zero overhead to your application. Blade template files
                            use the .blade.php file extension and are typically stored in the resources/views directory.
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="layouts" data-kt-scroll-offset="50">
                            <a href="#layouts"></a>

                            Layouts
                        </h1>
                        <!--end::Heading-->


                        <div class="pt-5">
                            <h2>Changing the Layout</h2>
                            <p>If you need to change the layout of your web pages, you can do so by editing the following
                                file:</p>
                            <p><strong>File:</strong> app/View/Components/DefaultLayout.php</p>
                            <p>You can customize the view file based on the two available default layouts:</p>
                            <p>There are two primary types of default layouts:</p>
                        </div>

                        <div class="pt-5">
                            <h3>Default Layout</h3>
                            <p>The Default layout can be found in this file:</p>
                            <p><strong>File:</strong>&nbsp; resources/views/layouts/_default.blade.php</p>
                            <p>The Default layout is a versatile choice suitable for most standard web pages on your
                                website. It provides a clean and straightforward design.</p>
                        </div>

                        <div class="pt-5">
                            <h3>Default Header Layout</h3>
                            <p>The Default Header layout, which is similar to the Default layout but includes a more
                                prominent header, is located in the following file:</p>
                            <p><strong>File:</strong>&nbsp; resources/views/layouts/_default_header_layout.blade.php</p>
                            <p>This layout is an excellent option when you want to emphasize the header section of your web
                                pages.</p>
                        </div>

                        <div class="pt-5">
                            <h2>Using the Default Layout</h2>
                            <p>To apply the default layout to your web pages, you can use the Blade component
                                <code>x-default-layout</code>. This layout is typically used for standard web pages with the
                                Default or Default Header layout.
                            </p>
                            <p>Here's an example of how to use the layout:</p>
                            <div class="pt-3 pb-3">
                                <!--begin::Highlight-->
                                <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                        title="Copy code">copy</button>
                                    <div class="highlight-code">
                                        <pre class="language-php"><code class="language-php">&lt;x-default-layout&gt;
    &lt;!-- Your page content goes here --&gt;
&lt;/x-default-layout&gt;</code></pre>
                                    </div>
                                </div><!--end::Highlight-->
                            </div>
                        </div>

                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="layout-partials" data-kt-scroll-offset="50">
                            <a href="#layout-partials"></a>

                            Layout Partials
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="pt-5">
                            Partial templates - usually just called "partials" - are another device for breaking the
                            rendering process into more manageable chunks. With a partial, you can move the code for
                            rendering a particular piece of a response to its own file.

                            To render a partial as part of a view, you use the render method within the view:

                            <div class="pt-3 pb-3">
                                <!--begin::Highlight-->
                                <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                        title="Copy code">copy</button>
                                    <div class="highlight-code">
                                        <pre class="language-php"><code class="language-php">@@include &#039;drawers&#039;</code></pre>
                                    </div>
                                </div><!--end::Highlight-->
                            </div>

                            This will render a file named _drawers.blade.php at that point within the view being rendered.
                            Note the leading underscore character: partials are named with a leading underscore to
                            distinguish them from regular views, even though they are referred to without the underscore.
                            This holds true even when you're pulling in a partial from another folder:

                            <div class="pt-3 pb-3">
                                <!--begin::Highlight-->
                                <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                        title="Copy code">copy</button>
                                    <div class="highlight-code">
                                        <pre class="language-php"><code class="language-php">@@include &#039;partials/drawers&#039;</code></pre>
                                    </div>
                                </div><!--end::Highlight-->
                            </div>

                            That code will pull in the partial from app/views/partials/_drawers.blade.php.

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
                    <div class="card-body px-6 py-6 min-h-300px">
                        <!--begin::Menu-->
                        <ul id="kt_sidebar_nav"
                            class="nav nav-flush menu menu-column menu-title-gray-700 menu-bullet-gray-300 menu-state-primary fw-semibold fs-6 mb-8">
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#templates" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Templates</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#layouts" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Layouts</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#layout-partials" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Layout Partials</span>
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


