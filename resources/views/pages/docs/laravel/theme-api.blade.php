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
                    <div class="py-0">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="theme-api" data-kt-scroll-offset="50">
                            <a href="#theme-api"></a>

                            Theme API
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Laravel application helpers are simple Ruby functions which accepts a 1 or more value, an
                            optional argument, process those values and return a value to be displayed on the page.
                        </div>
                        <!--end::Block-->

                        <!--begin::Table-->
                        <div class="pt-2">
                            <!--begin::Table wrapper-->
                            <div class="table-responsive border rounded">
                                <!--begin::Table-->
                                <table class="table table-striped table-layout-fixed mb-0 g-6">
                                    <!--begin::Head-->
                                    <thead>
                                        <tr class="fs-4 fw-bold p-6">
                                            <th class="w-200px w-lg-400px">Name</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <!--end::Head-->

                                    <!--begin::Head-->
                                    <thead>
                                        <tr class="fs-4 fw-bold p-6">
                                            <th colspan="2">Public Methods in the View</th>
                                        </tr>
                                    </thead>
                                    <!--end::Head-->

                                    <!--begin::Body-->
                                    <tbody>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>getName()</code>
                                            </td>
                                            <td>
                                                Get product name. <div class="pt-3"><!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">@{{ getName() }}</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>addHtmlAttribute(scope, name, value)</code>
                                            </td>
                                            <td>
                                                Add HTML attributes by scope. <div class="pt-3"><!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">@{{ addHtmlAttribute(scope, name, value) }}</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>addHtmlAttributes(scope, attributes)</code>
                                            </td>
                                            <td>
                                                Add multiple HTML attributes by scope. <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">@{{ addHtmlAttributes(scope, attributes) }}</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>addHtmlClass(scope, value)</code>
                                            </td>
                                            <td>
                                                Add HTML class by scope. <div class="pt-3"><!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">@{{ addHtmlClass(scope, value) }}</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>printHtmlAttributes(scope)</code>
                                            </td>
                                            <td>
                                                Print HTML attributes for the HTML template. <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">@{{ printHtmlAttributes(scope) }}</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>printHtmlClasses(scope, full = true)</code>
                                            </td>
                                            <td>
                                                Print HTML classes for the HTML template.
                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight">
                                                        <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                                            title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash">
<code class="language-bash">
@{{ printHtmlClasses(scope, full = true) }}</code>
</pre>
                                                        </div>
                                                    </div>
                                                    <!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>getIcon($name, $class = '', $type = '')</code>
                                            </td>
                                            <td>
                                                Get Keenicons icon code. <div class="pt-3"><!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash">
            <code class="language-bash">@{{ getIcon( & #039;calendar&# 039;, & #039;fs-1 text-primary&# 039;, & #039;duotone&# 039;) }}</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>asset(path)</code>
                                            </td>
                                            <td>
                                                Get an assets path in assets folder by path. <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">@{{ asset(path) }}</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>setModeSwitch(flag)</code>
                                            </td>
                                            <td>
                                                Set dark mode enabled status. <div class="pt-3"><!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">@{{ setModeSwitch(flag) }}</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>isModeSwitchEnabled()</code>
                                            </td>
                                            <td>
                                                Check dark mode status. <div class="pt-3"><!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">@{{ isModeSwitchEnabled() }}</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>setModeDefault(mode)</code>
                                            </td>
                                            <td>
                                                Set the mode to dark or light. <div class="pt-3"><!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">@{{ setModeDefault(mode) }}</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>getModeDefault()</code>
                                            </td>
                                            <td>
                                                Get current mode. <div class="pt-3"><!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">@{{ getModeDefault() }}</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>setDirection(direction)</code>
                                            </td>
                                            <td>
                                                Set style direction. <div class="pt-3"><!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">@{{ setDirection(direction) }}</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>getDirection()</code>
                                            </td>
                                            <td>
                                                Get style direction. <div class="pt-3"><!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">@{{ getDirection() }}</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>isRtlDirection()</code>
                                            </td>
                                            <td>
                                                Check if style direction is RTL. <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">@{{ isRtlDirection() }}</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>extendCssFilename(path)</code>
                                            </td>
                                            <td>
                                                Extend CSS file name with RTL or dark mode. <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">@{{ extendCssFilename(path) }}</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>includeFavicon()</code>
                                            </td>
                                            <td>
                                                Include favicon from settings. <div class="pt-3"><!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">@{{ includeFavicon() }}</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>includeFonts()</code>
                                            </td>
                                            <td>
                                                Include the fonts from settings. <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">@{{ includeFonts() }}</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>getGlobalAssets(type)</code>
                                            </td>
                                            <td>
                                                Get the global assets. <div class="pt-3"><!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">@{{ getGlobalAssets(type) }}</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>addVendors(vendors)</code>
                                            </td>
                                            <td>
                                                Add multiple vendors to the page by name. Refer to settings
                                                KT_THEME_VENDORS. <div class="pt-3"><!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">@{{ addVendors(vendors) }}</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>addVendor(vendor)</code>
                                            </td>
                                            <td>
                                                Add single vendor to the page by name. Refer to settings KT_THEME_VENDORS.
                                                <div class="pt-3"><!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">@{{ addVendor(vendor) }}</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>addJavascriptFile(file)</code>
                                            </td>
                                            <td>
                                                Add custom javascript file to the page. <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">@{{ addJavascriptFile(file) }}</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>addCssFile(file)</code>
                                            </td>
                                            <td>
                                                Add custom CSS file to the page. <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">@{{ addCssFile(file) }}</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>getVendors(type)</code>
                                            </td>
                                            <td>
                                                Get vendor files from settings. Refer to settings KT_THEME_VENDORS. <div
                                                    class="pt-3"><!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">@{{ getVendors(type) }}</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>getCustomJs</code>
                                            </td>
                                            <td>
                                                Get custom js files from the settings. <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">@{{ getCustomJs }}</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>getCustomCss</code>
                                            </td>
                                            <td>
                                                Get custom css files from the settings. <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">@{{ getCustomCss }}</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>getHtmlAttribute(scope, attribute)</code>
                                            </td>
                                            <td>
                                                Get HTML attribute based on the scope. <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">@{{ getHtmlAttribute(scope, attribute) }}</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Body-->

                                    <!--begin::Head-->
                                    <thead>
                                        <tr class="fs-4 fw-bold p-6">
                                            <th colspan="2">Public Methods in the Controllers</th>
                                        </tr>
                                    </thead>
                                    <!--end::Head-->

                                    <!--begin::Body-->
                                    <tbody>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>getName()</code>
                                            </td>
                                            <td>
                                                Get product name. <div class="pt-3"><!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">helpers.getName()</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>addHtmlAttribute(scope, name, value)</code>
                                            </td>
                                            <td>
                                                Add HTML attributes by scope. <div class="pt-3"><!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">helpers.addHtmlAttribute(scope, name, value)</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>addHtmlAttributes(scope, attributes)</code>
                                            </td>
                                            <td>
                                                Add multiple HTML attributes by scope. <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">helpers.addHtmlAttributes(scope, attributes)</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>addHtmlClass(scope, value)</code>
                                            </td>
                                            <td>
                                                Add HTML class by scope. <div class="pt-3"><!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">helpers.addHtmlClass(scope, value)</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>printHtmlAttributes(scope)</code>
                                            </td>
                                            <td>
                                                Print HTML attributes for the HTML template. <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">helpers.printHtmlAttributes(scope)</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>printHtmlClasses(scope, full = true)</code>
                                            </td>
                                            <td>
                                                Print HTML classes for the HTML template. <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">helpers.printHtmlClasses(scope, full = true)</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>getIcon($name, $class = '', $type = '')</code>
                                            </td>
                                            <td>
                                                Get SVG icon content. <div class="pt-3"><!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">helpers.getIcon(&#039;calendar&#039;, &#039;fs-1 text-primary&#039;, &#039;duotone&#039;)</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>asset(path)</code>
                                            </td>
                                            <td>
                                                Get an assets path in assets folder by path. <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">helpers.asset(path)</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>setModeSwitch(flag)</code>
                                            </td>
                                            <td>
                                                Set dark mode enabled status. <div class="pt-3"><!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">helpers.setModeSwitch(flag)</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>isModeSwitchEnabled()</code>
                                            </td>
                                            <td>
                                                Check dark mode status. <div class="pt-3"><!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">helpers.isModeSwitchEnabled()</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>setModeDefault(mode)</code>
                                            </td>
                                            <td>
                                                Set the mode to dark or light. <div class="pt-3"><!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">helpers.setModeDefault(mode)</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>getModeDefault()</code>
                                            </td>
                                            <td>
                                                Get current mode. <div class="pt-3"><!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">helpers.getModeDefault()</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>setDirection(direction)</code>
                                            </td>
                                            <td>
                                                Set style direction. <div class="pt-3"><!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">helpers.setDirection(direction)</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>getDirection()</code>
                                            </td>
                                            <td>
                                                Get style direction. <div class="pt-3"><!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">helpers.getDirection()</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>isRtlDirection()</code>
                                            </td>
                                            <td>
                                                Check if style direction is RTL. <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">helpers.isRtlDirection()</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>extendCssFilename(path)</code>
                                            </td>
                                            <td>
                                                Extend CSS file name with RTL or dark mode. <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">helpers.extendCssFilename(path)</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>includeFavicon()</code>
                                            </td>
                                            <td>
                                                Include favicon from settings. <div class="pt-3"><!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">helpers.includeFavicon()</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>includeFonts()</code>
                                            </td>
                                            <td>
                                                Include the fonts from settings. <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">helpers.includeFonts()</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>getGlobalAssets(type)</code>
                                            </td>
                                            <td>
                                                Get the global assets. <div class="pt-3"><!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">helpers.getGlobalAssets(type)</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>addVendors(vendors)</code>
                                            </td>
                                            <td>
                                                Add multiple vendors to the page by name. Refer to settings
                                                KT_THEME_VENDORS. <div class="pt-3"><!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">helpers.addVendors(vendors)</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>addVendor(vendor)</code>
                                            </td>
                                            <td>
                                                Add single vendor to the page by name. Refer to settings KT_THEME_VENDORS.
                                                <div class="pt-3"><!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">helpers.addVendor(vendor)</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>addJavascriptFile(file)</code>
                                            </td>
                                            <td>
                                                Add custom javascript file to the page. <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">helpers.addJavascriptFile(file)</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>addCssFile(file)</code>
                                            </td>
                                            <td>
                                                Add custom CSS file to the page. <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">helpers.addCssFile(file)</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>getVendors(type)</code>
                                            </td>
                                            <td>
                                                Get vendor files from settings. Refer to settings KT_THEME_VENDORS. <div
                                                    class="pt-3"><!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">helpers.getVendors(type)</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>getCustomJs</code>
                                            </td>
                                            <td>
                                                Get custom js files from the settings. <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">helpers.getCustomJs</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>getCustomCss</code>
                                            </td>
                                            <td>
                                                Get custom css files from the settings. <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">helpers.getCustomCss</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>getHtmlAttribute(scope, attribute)</code>
                                            </td>
                                            <td>
                                                Get HTML attribute based on the scope. <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-bash"><code class="language-bash">helpers.getHtmlAttribute(scope, attribute)</code></pre>
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
                    <div class="card-body px-6 py-6 min-h-300px">


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


