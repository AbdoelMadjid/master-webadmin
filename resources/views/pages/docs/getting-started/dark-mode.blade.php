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
                            <p class="mb-0">
                                Metronic supports dynamic theme mode switching to both
                                <b>Dark</b>&nbsp; and <b>Light</b>&nbsp; modes by storing the user's preference in the
                                browser's local storage or user'f profile in the server side database.
                            </p>
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="quick-setup" data-kt-scroll-offset="50">
                            <a href="#quick-setup"></a>

                            Quick Setup
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            The theme mode can be set through <code>data-bs-theme-mode</code> attribute on the page's root
                            &lt;html&gt; tag.
                            The theme mode accepts <code>dark</code>, <code>light</code> or <code>system</code>. If this
                            attribute is not set then user's selected theme mode will be stored in the browser storage.
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5 mb-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;html data-bs-theme-mode=&quot;light&quot;&gt;
....
&lt;/html&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->

                        <!--begin::Information-->
                        <div class="d-flex align-items-center rounded py-5 px-5 bg-light-info "><i
                                class="ki-duotone ki-information-5 fs-3x text-info me-5"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span></i> <!--begin::Description-->
                            <div class="text-gray-700 fw-bold fs-6">
                                Refer to <code>src/js/layout/theme-mode-user.js</code> script to submit the selected theme
                                mode value to backend for saving it in database so users always use prefered theme mode when
                                logged in from different devices.
                            </div> <!--end::Description-->
                        </div><!--end::Information-->
                        <!--begin::Block-->
                        <div class="pt-10 pb-5">
                            The theme mode can be set invidivually for particular page blocks despite having different mode
                            for the page:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="row">
                                    <div class="col-lg-6" data-bs-theme="light">
                                        <div class="card card-bordered">
                                            <!--begin::Body-->
                                            <div class="card-body">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-center me-3">
                                                        <!--begin::Icon-->
                                                        <img src="assets/media/svg/brand-logos/instagram-2-1.svg"
                                                            class="me-3 w-30px" alt="" />
                                                        <!--end::Icon-->
                                                        <!--begin::Section-->
                                                        <div class="flex-grow-1">
                                                            <a href="javascript:void(0)"
                                                                class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Instagram</a>
                                                            <span class="text-gray-500 fw-semibold d-block fs-6">Social
                                                                Media</span>
                                                        </div>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end::Wrapper-->

                                                    <!--begin::Statistics-->
                                                    <div class="d-flex align-items-center w-100 mw-125px">
                                                        <!--begin::Progress-->
                                                        <div class="progress h-6px w-100 me-2 bg-light-warning">
                                                            <div class="progress-bar bg-warning" role="progressbar"
                                                                style="width: 87%" aria-valuenow="87" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                        <!--end::Progress-->
                                                        <!--begin::Value-->
                                                        <span class="text-gray-500 fw-semibold">87%</span>
                                                        <!--end::Value-->
                                                    </div>
                                                    <!--end::Statistics-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                    </div>

                                    <div class="col-lg-6" data-bs-theme="dark">
                                        <div class="card card-bordered">
                                            <!--begin::Body-->
                                            <div class="card-body">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-center me-3">
                                                        <!--begin::Icon-->
                                                        <img src="assets/media/svg/brand-logos/instagram-2-1.svg"
                                                            class="me-3 w-30px" alt="" />
                                                        <!--end::Icon-->
                                                        <!--begin::Section-->
                                                        <div class="flex-grow-1">
                                                            <a href="javascript:void(0)"
                                                                class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Instagram</a>
                                                            <span class="text-gray-500 fw-semibold d-block fs-6">Social
                                                                Media</span>
                                                        </div>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end::Wrapper-->

                                                    <!--begin::Statistics-->
                                                    <div class="d-flex align-items-center w-100 mw-125px">
                                                        <!--begin::Progress-->
                                                        <div class="progress h-6px w-100 me-2 bg-light-warning">
                                                            <div class="progress-bar bg-warning" role="progressbar"
                                                                style="width: 87%" aria-valuenow="87" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                        <!--end::Progress-->
                                                        <!--begin::Value-->
                                                        <span class="text-gray-500 fw-semibold">87%</span>
                                                        <!--end::Value-->
                                                    </div>
                                                    <!--end::Statistics-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;!-- Dark mode --&gt;
&lt;div data-bs-theme=&quot;dark&quot;&gt;
....
&lt;/div&gt;

&lt;!-- Light mode --&gt;
&lt;div data-bs-theme=&quot;light&quot;&gt;
....
&lt;/div&gt;</code></pre>
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
                            To enable remembering user's selected theme mode in the browser storage the below inline
                            Javascript code must be placed as the first child of the body
                            element so the code is executed right after the body element's creation in the DOM.
                            The default theme mode <code>defaultThemeMode</code> variable can be set to <code>system</code>,
                            <code>dark</code> or <code>light</code>:
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;!--begin::Theme mode setup on page load--&gt;
&lt;script&gt;
var defaultThemeMode = &quot;light&quot;;
var themeMode;

if ( document.documentElement ) {
    if ( document.documentElement.hasAttribute(&quot;data-bs-theme-mode&quot;)) {
        themeMode = document.documentElement.getAttribute(&quot;data-bs-theme-mode&quot;);
    } else {
        if ( localStorage.getItem(&quot;data-bs-theme&quot;) !== null ) {
            themeMode = localStorage.getItem(&quot;data-bs-theme&quot;);
        } else {
            themeMode = defaultThemeMode;
        }
    }

    if (themeMode === &quot;system&quot;) {
        themeMode = window.matchMedia(&quot;(prefers-color-scheme: dark)&quot;).matches ? &quot;dark&quot; : &quot;light&quot;;
    }

    document.documentElement.setAttribute(&quot;data-bs-theme&quot;, themeMode);
}
&lt;/script&gt;
&lt;!--end::Theme mode setup on page load--&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="switch-menu" data-kt-scroll-offset="50">
                            <a href="#switch-menu"></a>

                            Switch Menu
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            The theme mode can be switched through unified Theme Mode Switcher opened by the sun or moon
                            icons click in the page's header block.
                            The theme mode switch feature is handled by <code>KTThemeMode</code>
                            javascript class and allows saving user's preference in the browser's local storage.
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="flip-elements" data-kt-scroll-offset="50">
                            <a href="#flip-elements"></a>

                            Flip Elements
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.theme-light-show</code> and <code>.theme-dark-show</code> utility classes to flip an
                            element for particular theme mode:
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5 mb-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;!-- Show for light mode only--&gt;
&lt;div class=&quot;theme-light-show&quot;&gt;
....
&lt;/div&gt;

&lt;!-- Show for dark mode only--&gt;
&lt;div class=&quot;theme-dark-show&quot;&gt;
....
&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="flip-images" data-kt-scroll-offset="50">
                            <a href="#flip-images"></a>

                            Flip Images
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.theme-light-show</code> and <code>.theme-dark-show</code> utility classes to flip
                            image for required mode:
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5 mb-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;!-- Show for light mode only --&gt;
&lt;img alt=&quot;Logo&quot; src=&quot;assets/logos/default.svg&quot; class=&quot;theme-light-show h-35px&quot;/&gt;

&lt;!-- Show for dark mode light--&gt;
&lt;img alt=&quot;Logo&quot; src=&quot;assets/logos/default-dark.svg&quot; class=&quot;theme-dark-show h-35px&quot;/&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->

                        <!--begin::Block-->
                        <div class="py-5">
                            Use a custom class defined inside <code>&lt;style&gt;</code> tag for background image flip
                            support:
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5 mb-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;!--begin::Image placeholder--&gt;
&lt;style&gt;
	.image-placeholder {
		background-image: url(&#039;assets/example.svg&#039;);
	}

	[data-bs-theme=&quot;dark&quot;] .image-placeholder {
		background-image: url(&#039;assets/example-dark.svg&#039;);
	}
&lt;/style&gt;
&lt;!--end::Image placeholder--&gt;

&lt;!-- Dark and light background image support --&gt;
&lt;div class=&quot;image-placeholder&quot;&gt;
...
&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="api-methods" data-kt-scroll-offset="50">
                            <a href="#api-methods"></a>

                            API Methods
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            The API methods of <code>KTThemeMode</code> class defined in
                            <code>src/js/layout/theme-mode.js</code>:
                        </div>
                        <!--end::Block-->

                        <!--begin::Table-->
                        <div class="pt-2 pb-10">
                            <!--begin::Table wrapper-->
                            <div class="table-responsive border rounded">
                                <!--begin::Table-->
                                <table class="table table-striped mb-0 g-6">
                                    <!--begin::Head-->
                                    <thead>
                                        <tr class="fs-4 fw-bold p-6">
                                            <th class="min-w-300px">Name</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <!--end::Head-->

                                    <!--begin::Body-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <code>getMode()</code>
                                            </td>
                                            <td>
                                                Returns current theme mode as string

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">// Returns &quot;dark&quot; or &quot;light&quot; string value.
var mode = KTThemeMode.getMode();</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>getMenuMode()</code>
                                            </td>
                                            <td>
                                                Returns the theme switcher menu's current selection mode as string

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">// Returns &quot;dark&quot;, &quot;light&quot; or &quot;system&quot; string value.
var mode = KTThemeMode.getMenuMode();</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>getSystemMode()</code>
                                            </td>
                                            <td>
                                                Returns the browser's mode as string

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">// Returns &quot;dark&quot; or &quot;light&quot; string value.
var mode = KTThemeMode.getSystemMode();</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>setMode(String mode)</code>
                                            </td>
                                            <td>
                                                Sets a mode to change the theme mode

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">KTThemeMode.setMode(&quot;dark&quot;);</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Body-->
                                </table>
                            </div>
                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="api-events" data-kt-scroll-offset="50">
                            <a href="#api-events"></a>

                            API Events
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            The API events of <code>KTThemeMode</code> class defined in
                            <code>src/js/layout/theme-mode.js</code>:
                        </div>
                        <!--end::Block-->

                        <!--begin::Table-->
                        <div class="pt-2 pb-5">
                            <!--begin::Table wrapper-->
                            <div class="table-responsive border rounded">
                                <!--begin::Table-->
                                <table class="table table-striped mb-0 g-5">
                                    <!--begin::Head-->
                                    <thead>
                                        <tr class="fs-4 fw-bold text-gray-900 p-6">
                                            <th class="min-w-300px">Event Type</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <!--end::Head-->

                                    <!--begin::Body-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <code>kt.thememode.init</code>
                                            </td>
                                            <td>
                                                This event fires on the theme mode initialization right after the page load.
                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">// Register an event handler
var handlerId = KTThemeMode.on(&quot;kt.thememode.init&quot;, function() {
    console.log(&quot;Initialized init:&quot; + KTThemeMode.getMode());
});</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>kt.thememode.change</code>
                                            </td>
                                            <td>
                                                This event fires on previous navigation button click.
                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">// Register an event handler
var handlerId = KTThemeMode.on(&quot;kt.thememode.change&quot;, function() {
    console.log(&quot;Theme mode is changed:&quot; + KTThemeMode.getMode());
});

// Unregister the event handler after 10 seconds
setTimeout(function() {
    KTThemeMode.off(&quot;kt.thememode.change&quot;, handlerId);
}, 1000 * 10);</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Body-->
                                </table>
                            </div>
                        </div>
                        <!--end::Table-->
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
                                <a href="#quick-setup" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Quick Setup</span>
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
                                <a href="#switch-menu" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Switch Menu</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#flip-elements" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Flip Elements</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#flip-images" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Flip Images</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#api-methods" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">API Methods</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#api-events" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">API Events</span>
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


