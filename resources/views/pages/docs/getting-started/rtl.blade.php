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
                    <div class="pt-5">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="rtl-version">
                            <a href="#rtl-version"></a>
                            Quick Setup
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <p class="mb-0">
                                Right to Left (RTL) version of Metronic can be easily setup with special Gulp and Webpack
                                task that depends on

                                <a href="https://yarnpkg.com/package/gulp-rtlcss/" target="blank" class="fw-bold">Gulp
                                    RTLCSS</a>&nbsp; and
                                <a href="https://rtlcss.com/" class="fw-bold">RTLCSS</a>&nbsp; tools.
                            </p>
                        </div>
                        <!--end::Block-->

                        <!--begin::List-->
                        <ol class="py-5">
                            <li class="py-3">
                                Run gulp task with <code>--rtl</code> flag in <code>theme/tools/</code> folder to generate
                                the RTL versions of CSS files.
                                <div class="py-5">
                                    <!--begin::Highlight-->
                                    <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-bash"><code class="language-bash">gulp --rtl --demo1</code></pre>
                                        </div>
                                    </div><!--end::Highlight-->
                                </div>

                                For Webpack user, use below command.

                                <div class="py-5">
                                    <!--begin::Highlight-->
                                    <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-bash"><code class="language-bash">npm run build --rtl --demo1</code></pre>
                                        </div>
                                    </div><!--end::Highlight-->
                                </div>
                            </li>

                            <li class="py-3">
                                Switch CSS files to their RTL versions by adding <code>*.rtl.css</code> suffix to files that
                                have RTL versions generated in assets folder:
                                <div class="py-5">
                                    <!--begin::Highlight-->
                                    <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;!--begin::Page Vendor Stylesheets(used by this page)--&gt;
&lt;link href=&quot;assets/plugins/custom/prismjs/prismjs.bundle.rtl.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot; /&gt;
&lt;!--end::Page Vendor Stylesheets--&gt;

&lt;!--begin::Global Stylesheets Bundle(used by all pages)--&gt;
&lt;link href=&quot;assets/plugins/global/plugins.bundle.rtl.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot; /&gt;
&lt;link href=&quot;assets/css/style.bundle.rtl.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot; /&gt;
&lt;!--end::Global Stylesheets Bundle--&gt;</code></pre>
                                        </div>
                                    </div><!--end::Highlight-->
                                </div>
                            </li>

                            <li class="py-3">
                                Add the language direction attribute to the root HTML tag:

                                <div class="py-5">
                                    <!--begin::Highlight-->
                                    <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;html direction=&quot;rtl&quot; dir=&quot;rtl&quot; style=&quot;direction: rtl&quot;&gt;</code></pre>
                                        </div>
                                    </div><!--end::Highlight-->
                                </div>
                            </li>

                            <li class="py-3">
                                Plugins that come with their own RTL support can be skipped from the general RTL conversion
                                by adding them into the skip list in the gulp config file as shown below:

                                <div class="py-5">
                                    <!--begin::Highlight-->
                                    <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-javascript"><code class="language-javascript">&quot;compile&quot;: {
    &quot;rtl&quot;: {
        &quot;enabled&quot;: false,
        &quot;skip&quot;: [
            &quot;select2&quot;,
            &quot;line-awesome&quot;,
            &quot;fontawesome5&quot;,
            &quot;nouislider&quot;,
            &quot;tinymce&quot;,
            &quot;sweetalert2&quot;
        ]
    }
}</code></pre>
                                        </div>
                                    </div><!--end::Highlight-->
                                </div>

                                For more info about the gulp config file please check -
                                <a href="/docs/getting-started/build/gulp#gulp-build-options" class="fw-bold"
                                    target="_blank">Gulp Build Options</a>.
                            </li>

                            <li class="py-3">
                                Flip the KTMenu dropdown submenu alignment attributes as shown below:

                                <div class="py-5">
                                    <!--begin::Highlight-->
                                    <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">data-kt-menu-placement=&quot;bottom-start&quot; =&gt; data-kt-menu-placement=&quot;bottom-end&quot;
data-kt-menu-placement=&quot;right-start&quot; =&gt; data-kt-menu-placement=&quot;left-start&quot;</code></pre>
                                        </div>
                                    </div><!--end::Highlight-->
                                </div>
                            </li>
                        </ol>
                        <!--end::List-->

                        <!--begin::Information-->
                        <div class="d-flex align-items-center rounded py-5 px-5 bg-light-danger "><i
                                class="ki-duotone ki-information-5 fs-3x text-danger me-5"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span></i> <!--begin::Description-->
                            <div class="text-gray-700 fw-bold fs-6">
                                Metronic provides basic RTL support using the mentioned automation tools and further
                                adjustments of the theme and related 3rd-party plugins for the full RTL support are
                                responsibiliy of buyers.
                            </div> <!--end::Description-->
                        </div><!--end::Information-->
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


