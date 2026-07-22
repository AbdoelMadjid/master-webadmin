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
                            Metronic customizes the <a href="https://getbootstrap.com/docs/5.2/components/popovers/"
                                class="fw-semibold">Bootstrap Popover</a>&nbsp;
                            through the SASS variables in <code>src/sass/components/_variables.scss</code> and
                            custom SASS code in <code>src/sass/components/_popovers.scss</code>. Bootstrap Popover
                            are globally initialized by
                            <code>src/js/components/app.js</code> wrapper script via data attribute
                            <code>data-bs-toggle="popover"</code>.
                            .
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
                            Use <code>data-bs-toggle="popover"</code> HTML attribute to initialize a popover by
                            passing any of available options as explained
                            in <a href="https://getbootstrap.com/docs/5.2/components/popover/#options"
                                class="fw-semibold">Popover Options</a>.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <button type="button" class="btn btn-secondary my-2 me-5" data-bs-toggle="popover"
                                    data-bs-placement="top" title="Popover on top"
                                    data-bs-content="And here's some amazing content. It's very engaging. Right?">
                                    Popover on top
                                </button>

                                <button type="button" class="btn btn-secondary my-2 me-5" data-bs-toggle="popover"
                                    data-bs-placement="right" title="Popover on right"
                                    data-bs-content="And here's some amazing content. It's very engaging. Right?">
                                    Popover on right
                                </button>

                                <button type="button" class="btn btn-secondary my-2 me-5" data-bs-toggle="popover"
                                    data-bs-placement="bottom" title="Popover on bottom"
                                    data-bs-content="And here's some amazing content. It's very engaging. Right?">
                                    Popover on bottom
                                </button>

                                <button type="button" class="btn btn-secondary my-2 me-5" data-bs-toggle="popover"
                                    data-bs-placement="left" title="Popover on left"
                                    data-bs-content="And here's some amazing content. It's very engaging. Right?">
                                    Popover on left
                                </button>

                                <button type="button" class="btn btn-secondary my-2" data-bs-toggle="popover"
                                    data-bs-html="true" title="<span><em>Popover</em> <u>title with</u> <b>HTML</b></span>"
                                    data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
                                    Popover with HTML
                                </button>
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary my-2 me-5&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;top&quot; title=&quot;Popover on top&quot; data-bs-content=&quot;And here&#039;s some amazing content. It&#039;s very engaging. Right?&quot;&gt;
    Popover on top
&lt;/button&gt;

&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary my-2 me-5&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;right&quot; title=&quot;Popover on right&quot; data-bs-content=&quot;And here&#039;s some amazing content. It&#039;s very engaging. Right?&quot;&gt;
    Popover on right
&lt;/button&gt;

&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary my-2 me-5&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;bottom&quot; title=&quot;Popover on bottom&quot; data-bs-content=&quot;And here&#039;s some amazing content. It&#039;s very engaging. Right?&quot;&gt;
    Popover on bottom
&lt;/button&gt;

&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary my-2 me-5&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;left&quot; title=&quot;Popover on left&quot; data-bs-content=&quot;And here&#039;s some amazing content. It&#039;s very engaging. Right?&quot;&gt;
    Popover on left
&lt;/button&gt;

&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary my-2&quot; data-bs-toggle=&quot;popover&quot; data-bs-html=&quot;true&quot; title=&quot;&lt;span&gt;&lt;em&gt;Popover&lt;/em&gt; &lt;u&gt;title with&lt;/u&gt; &lt;b&gt;HTML&lt;/b&gt;&lt;/span&gt;&quot; data-bs-content=&quot;And here&#039;s some amazing content. It&#039;s very &lt;b class=&#039;text-danger&#039;&gt;engaging&lt;/b&gt;. Right?&quot;&gt;
    Popover with HTML
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
                        <h1 class="anchor fw-bold mb-5" id="inverse" data-kt-scroll-offset="50">
                            <a href="#inverse"></a>

                            Inverse
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>data-bs-custom-class="popover-inverse"</code> HTML attribute to initialize a
                            popover with inverse style.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <button type="button" class="btn btn-secondary my-2 me-5" data-bs-toggle="popover"
                                    data-bs-custom-class="popover-inverse" data-bs-placement="top" title="Popover on top"
                                    data-bs-content="And here's some amazing content. It's very engaging. Right?">
                                    Popover on top
                                </button>

                                <button type="button" class="btn btn-secondary my-2 me-5" data-bs-toggle="popover"
                                    data-bs-custom-class="popover-inverse" data-bs-placement="right"
                                    title="Popover on right"
                                    data-bs-content="And here's some amazing content. It's very engaging. Right?">
                                    Popover on right
                                </button>

                                <button type="button" class="btn btn-secondary my-2 me-5" data-bs-toggle="popover"
                                    data-bs-custom-class="popover-inverse" data-bs-placement="bottom"
                                    title="Popover on bottom"
                                    data-bs-content="And here's some amazing content. It's very engaging. Right?">
                                    Popover on bottom
                                </button>

                                <button type="button" class="btn btn-secondary my-2 me-5" data-bs-toggle="popover"
                                    data-bs-custom-class="popover-inverse" data-bs-placement="left"
                                    title="Popover on left"
                                    data-bs-content="And here's some amazing content. It's very engaging. Right?">
                                    Popover on left
                                </button>
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-toggle=&quot;popover&quot; data-bs-custom-class=&quot;popover-inverse&quot; data-bs-placement=&quot;top&quot; title=&quot;Popover on top&quot; data-bs-content=&quot;And here&#039;s some amazing content. It&#039;s very engaging. Right?&quot;&gt;
    Popover on top
&lt;/button&gt;

&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-toggle=&quot;popover&quot; data-bs-custom-class=&quot;popover-inverse&quot; data-bs-placement=&quot;right&quot; title=&quot;Popover on right&quot; data-bs-content=&quot;And here&#039;s some amazing content. It&#039;s very engaging. Right?&quot;&gt;
    Popover on right
&lt;/button&gt;

&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-toggle=&quot;popover&quot; data-bs-custom-class=&quot;popover-inverse&quot; data-bs-placement=&quot;bottom&quot; title=&quot;Popover on bottom&quot; data-bs-content=&quot;And here&#039;s some amazing content. It&#039;s very engaging. Right?&quot;&gt;
    Popover on bottom
&lt;/button&gt;

&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-toggle=&quot;popover&quot; data-bs-custom-class=&quot;popover-inverse&quot; data-bs-placement=&quot;left&quot; title=&quot;Popover on left&quot; data-bs-content=&quot;And here&#039;s some amazing content. It&#039;s very engaging. Right?&quot;&gt;
    Popover on left
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
                        <h1 class="anchor fw-bold mb-5" id="delay-options" data-kt-scroll-offset="50">
                            <a href="#delay-options"></a>

                            Delay Options
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use custom <code>data-bs-delay-show</code> and <code>data-bs-delay-hide</code> HTML
                            attributes to initialize a popover with showing and hiding delay(ms).
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <button type="button" class="btn btn-secondary my-2 me-5" data-bs-toggle="popover"
                                    data-bs-delay-show="1000" title="Popover title"
                                    data-bs-content="And here's some amazing content. It's very engaging. Right?">
                                    Show delay: 1000ms
                                </button>

                                <button type="button" class="btn btn-secondary my-2 me-5" data-bs-toggle="popover"
                                    data-bs-delay-hide="1000" title="Popover title"
                                    data-bs-content="And here's some amazing content. It's very engaging. Right?">
                                    Hide delay: 1000ms
                                </button>
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary my-2 me-5&quot; data-bs-toggle=&quot;popover&quot; data-bs-delay-show=&quot;1000&quot; title=&quot;Popover title&quot; data-bs-content=&quot;And here&#039;s some amazing content. It&#039;s very engaging. Right?&quot;&gt;
    Show delay: 1000ms
&lt;/button&gt;

&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary my-2 me-5&quot; data-bs-toggle=&quot;popover&quot; data-bs-delay-hide=&quot;1000&quot; title=&quot;Popover title&quot; data-bs-content=&quot;And here&#039;s some amazing content. It&#039;s very engaging. Right?&quot;&gt;
    Hide delay: 1000ms
&lt;/button&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="dismiss" data-kt-scroll-offset="50">
                            <a href="#dismiss"></a>

                            Dismiss
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use custom <code>data-bs-dismiss="true"</code> HTML attribute to initialize a popover
                            with showing and hiding delay(ms).
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <button type="button" class="btn btn-secondary my-2 me-5" data-bs-toggle="popover"
                                    data-bs-dismiss="true" title="Dismissable popover"
                                    data-bs-content="And here's some amazing content. It's very engaging. Right?">
                                    Default Mode
                                </button>

                                <button type="button" class="btn btn-secondary my-2 me-5" data-bs-toggle="popover"
                                    data-bs-dismiss="true" data-bs-custom-class="popover-inverse"
                                    title="Dismissable popover"
                                    data-bs-content="And here's some amazing content. It's very engaging. Right?">
                                    Dark Mode
                                </button>
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary my-2 me-5&quot; data-bs-toggle=&quot;popover&quot; data-bs-dismiss=&quot;true&quot; title=&quot;Dismissable popover&quot; data-bs-content=&quot;And here&#039;s some amazing content. It&#039;s very engaging. Right?&quot;&gt;
    Dismiss for default mode
&lt;/button&gt;

&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary my-2 me-5&quot; data-bs-toggle=&quot;popover&quot; data-bs-dismiss=&quot;true&quot; title=&quot;Dismissable popover&quot; data-bs-content=&quot;And here&#039;s some amazing content. It&#039;s very engaging. Right?&quot;&gt;
    Dismiss for dark mode
&lt;/button&gt;</code></pre>
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
                                <a href="#inverse" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Inverse</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#delay-options" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Delay Options</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#dismiss" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Dismiss</span>
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


