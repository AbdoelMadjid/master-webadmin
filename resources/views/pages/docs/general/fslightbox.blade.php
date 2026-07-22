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
                            Fullscreen Lightbox, is en easy to use, but powerful plugin for displaying various types of
                            sources in
                            beautiful overlaying box with tons of features such as captions, thumbnails, zooming and more!
                            Present single source or create beautiful gallery with stylish lightbox without jQuery!
                            For more info see <a href="https://fslightbox.com/" class="fw-bold me-1">the official
                                site</a>and <a class="fw-bold" href="https://github.com/banthagroup">the Github
                                repository</a>.
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
                            Fullscreen Lightbox's Javascript files are bundled in a custom bundle file and included on
                            demand as shown below:
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;script src=&quot;assets/plugins/custom/fslightbox/fslightbox.bundle.js&quot;&gt;&lt;/script&gt;</code></pre>
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
                        <div class="py-5">
                            <ul class="py-0">
                                <li class="py-2">
                                    Fullscreen Lightbox's CSS is highly customized in
                                    <code>sass/vendors/plugins/_fslightbox.scss</code> SCSS file in order to use it as a
                                    native component within the design system.
                                    The SCSS code is compiled into <code>assets/plugins/global/plugins.bundle.css</code> and
                                    globally included in all pages.
                                </li>
                            </ul>
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
                            Every <code>&lt;a&gt;</code> tag with <code>data-fslightbox</code> attribute opens a lightbox.
                            Value of href attribute will be shown in your box.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <!--begin::Wrapper-->
                            <div class="rounded border p-10 p-lg-20">
                                <!--begin::Row-->
                                <div class="row">
                                    <!--begin::Col-->
                                    <div class="col-lg-4">
                                        <!--begin::Overlay-->
                                        <a class="d-block overlay" data-fslightbox="lightbox-basic"
                                            href="assets/media/stock/900x600/23.jpg">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                                style="background-image:url('assets/media/stock/900x600/23.jpg')">
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25 shadow">
                                                <i class="bi bi-eye-fill text-white fs-3x"></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                        <!--end::Overlay-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-4">
                                        <!--begin::Overlay-->
                                        <a class="d-block overlay" data-fslightbox="lightbox-basic"
                                            href="assets/media/stock/900x600/25.jpg">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                                style="background-image:url('assets/media/stock/900x600/25.jpg')">
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25 shadow">
                                                <i class="bi bi-eye-fill text-white fs-3x"></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                        <!--end::Overlay-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-4">
                                        <!--begin::Overlay-->
                                        <a class="d-block overlay" data-fslightbox="lightbox-basic"
                                            href="assets/media/stock/900x600/27.jpg">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                                style="background-image:url('assets/media/stock/900x600/27.jpg')">
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25 shadow">
                                                <i class="bi bi-eye-fill text-white fs-3x"></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                        <!--end::Overlay-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
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
                                    <pre class="language-html"><code class="language-html">&lt;!--begin::Overlay--&gt;
&lt;a class=&quot;d-block overlay&quot; data-fslightbox=&quot;lightbox-basic&quot; href=&quot;assets/media/stock/900x600/23.jpg&quot;&gt;
    &lt;!--begin::Image--&gt;
    &lt;div class=&quot;overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px&quot;
        style=&quot;background-image:url(&#039;assets/media/stock/900x600/23.jpg&#039;)&quot;&gt;
    &lt;/div&gt;
    &lt;!--end::Image--&gt;

    &lt;!--begin::Action--&gt;
    &lt;div class=&quot;overlay-layer card-rounded bg-dark bg-opacity-25 shadow&quot;&gt;
        &lt;i class=&quot;bi bi-eye-fill text-white fs-3x&quot;&gt;&lt;/i&gt;
    &lt;/div&gt;
    &lt;!--end::Action--&gt;
&lt;/a&gt;
&lt;!--end::Overlay--&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="video" data-kt-scroll-offset="50">
                            <a href="#video"></a>

                            Video
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Fullscreen Lightbox supports, Youtube, HTML5 and videos from custom sources as well(Vimeo, etc):
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <!--begin::Wrapper-->
                            <div class="rounded border p-10 p-lg-20">
                                <!--begin::Row-->
                                <div class="row">
                                    <!--begin::Col-->
                                    <div class="col-lg-4">
                                        <!--begin::Youtube-->
                                        <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center rounded position-relative min-h-175px"
                                            style="background-image:url('assets/media/stock/600x400/img-23.jpg')"
                                            data-fslightbox="lightbox-youtube"
                                            href="https://www.youtube.com/watch?v=btornGtLwIo">
                                            <!--begin::Icon-->
                                            <img src="assets/media/svg/misc/video-play.svg"
                                                class="position-absolute top-50 start-50 translate-middle" alt="" />
                                            <!--end::Icon-->
                                        </a>
                                        <!--end::Youtube-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-4">
                                        <!--begin::HTML5-->
                                        <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center rounded position-relative min-h-175px"
                                            style="background-image:url('assets/media/stock/600x400/img-25.jpg')"
                                            data-fslightbox="lightbox-html5"
                                            href="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4">
                                            <!--begin::Icon-->
                                            <img src="assets/media/svg/misc/video-play.svg"
                                                class="position-absolute top-50 start-50 translate-middle"
                                                alt="" />
                                            <!--end::Icon-->
                                        </a>
                                        <!--end::HTML5-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-4">
                                        <!--begin::Custom source(Vimeo)-->
                                        <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center rounded position-relative min-h-175px"
                                            style="background-image:url('assets/media/stock/600x400/img-26.jpg')"
                                            data-fslightbox="lightbox-vimeo" data-class="d-block" href="#vimeo">
                                            <!--begin::Icon-->
                                            <img src="assets/media/svg/misc/video-play.svg"
                                                class="position-absolute top-50 start-50 translate-middle"
                                                alt="" />
                                            <!--end::Icon-->
                                        </a>

                                        <iframe id="vimeo" style="display:none"
                                            src="https://player.vimeo.com/video/22439234" width="1920px" height="1080px"
                                            frameBorder="0" allow="autoplay; fullscreen" allowFullScreen></iframe>
                                        <!--end::Custom source(Vimeo)-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
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
                                    <pre class="language-html"><code class="language-html">&lt;!--begin::Youtube--&gt;
&lt;a
    class=&quot;d-block bgi-no-repeat bgi-size-cover bgi-position-center rounded position-relative min-h-175px&quot;
    style=&quot;background-image:url(&#039;assets/media/stock/600x400/img-23.jpg&#039;)&quot;
    data-fslightbox=&quot;lightbox-youtube&quot;
    href=&quot;https://www.youtube.com/embed/xshEZzpS4CQ&quot;
    &gt;
    &lt;!--begin::Icon--&gt;
    &lt;img src=&quot;assets/media/svg/misc/video-play.svg&quot;  class=&quot;position-absolute top-50 start-50 translate-middle&quot; alt=&quot;&quot;/&gt;
    &lt;!--end::Icon--&gt;
&lt;/a&gt;
&lt;!--end::Youtube--&gt;

&lt;!--begin::HTML5--&gt;
&lt;a
    class=&quot;d-block bgi-no-repeat bgi-size-cover bgi-position-center rounded position-relative min-h-175px&quot;
    style=&quot;background-image:url(&#039;assets/media/stock/600x400/img-25.jpg&#039;)&quot;
    data-fslightbox=&quot;lightbox-html5&quot;
    href=&quot;http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4&quot;
    &gt;
    &lt;!--begin::Icon--&gt;
    &lt;img src=&quot;assets/media/svg/misc/video-play.svg&quot;  class=&quot;position-absolute top-50 start-50 translate-middle&quot; alt=&quot;&quot;/&gt;
    &lt;!--end::Icon--&gt;
&lt;/a&gt;
&lt;!--end::HTML5--&gt;

&lt;!--begin::Custom source(Vimeo)--&gt;
&lt;a
    class=&quot;d-block bgi-no-repeat bgi-size-cover bgi-position-center rounded position-relative min-h-175px&quot;
    style=&quot;background-image:url(&#039;assets/media/stock/600x400/img-26.jpg&#039;)&quot;
    data-class=&quot;d-block&quot;
    data-fslightbox=&quot;lightbox-vimeo&quot;
    href=&quot;#vimeo&quot;
    &gt;
    &lt;!--begin::Icon--&gt;
    &lt;img src=&quot;assets/media/svg/misc/video-play.svg&quot;  class=&quot;position-absolute top-50 start-50 translate-middle&quot; alt=&quot;&quot;/&gt;
    &lt;!--end::Icon--&gt;
&lt;/a&gt;

&lt;iframe id=&quot;vimeo&quot; style=&quot;display:none&quot; src=&quot;https://player.vimeo.com/video/22439234&quot; width=&quot;1920px&quot; height=&quot;1080px&quot; frameBorder=&quot;0&quot; allow=&quot;autoplay; fullscreen&quot; allowFullScreen&gt;&lt;/iframe&gt;
&lt;!--end::Custom source(Vimeo)--&gt;</code></pre>
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
                                <a href="#video" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Video</span>
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
    <script src="{{ asset('assets/plugins/custom/fslightbox/fslightbox.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
@endsection


