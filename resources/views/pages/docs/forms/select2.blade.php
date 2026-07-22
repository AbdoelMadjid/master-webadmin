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
                            <strong class="me-1">Select2</strong> gives you a customizable select box with support
                            for searching, tagging, remote data sets, infinite scrolling, and many other highly used
                            options.
                            For full documentation please check the <a href="https://select2.org" target="_blank"
                                class="fw-semibold">plugin's site</a>.
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
                            Select2's CSS and Javascript files are bundled in the global plugin bundles and globally
                            included in all pages:
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;link href=&quot;assets/plugins/global/plugins.bundle.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot;/&gt;
&lt;script src=&quot;assets/plugins/global/plugins.bundle.js&quot;&gt;&lt;/script&gt;</code></pre>
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
                                    Select2's CSS is highly customized in
                                    <code>sass/vendors/plugins/_select2.scss</code> SCSS file in order to use it as
                                    native component within the design system.
                                    The SCSS code is compiled into
                                    <code>assets/plugins/global/plugins.bundle.css</code> and globally included in
                                    all pages.
                                </li>
                                <li class="py-2">
                                    Select2's Javascript is globally initialized with some predefined settings in
                                    <code>src/js/vendors/plugins/select2.init.js</code> and the initialization code
                                    is bundled within
                                    <code>assets/plugins/global/plugins.bundle.js</code> and globally included in
                                    all pages.
                                </li>
                                <li class="py-2">
                                    Select2's is globally initialized through <code>data-control="select2"</code>
                                    HTML attribute as defined in <code>src/js/components/app.js</code> and some
                                    options can be
                                    be passed through <a https://select2.org/configuration/data-attributes"
                                        class="fw-semibold">Select2 Data Attributes</a>.
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
                            Basic examples of Select2 usage with default and solid background input styles:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-10">
                                    <label for="" class="form-label">Default input style</label>
                                    <select class="form-select" data-control="select2" data-placeholder="Select an option">
                                        <option></option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                        <option value="4">Option 4</option>
                                        <option value="5">Option 5</option>
                                    </select>
                                </div>

                                <div class="mb-10">
                                    <label for="" class="form-label">Transparent background style</label>
                                    <select class="form-select form-select-transparent" data-control="select2"
                                        data-placeholder="Select an option">
                                        <option></option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                        <option value="4">Option 4</option>
                                        <option value="5">Option 5</option>
                                    </select>
                                </div>

                                <div class="mb-0">
                                    <label for="" class="form-label">Solid background style</label>
                                    <select class="form-select form-select-solid" data-control="select2"
                                        data-placeholder="Select an option">
                                        <option></option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                        <option value="4">Option 4</option>
                                        <option value="5">Option 5</option>
                                    </select>
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
                                    <pre class="language-html"><code class="language-html">&lt;select class=&quot;form-select&quot; data-control=&quot;select2&quot; data-placeholder=&quot;Select an option&quot;&gt;
    &lt;option&gt;&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
&lt;/select&gt;

&lt;select class=&quot;form-select form-select-transparent&quot; data-control=&quot;select2&quot; data-placeholder=&quot;Select an option&quot;&gt;
    &lt;option&gt;&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
&lt;/select&gt;

&lt;select class=&quot;form-select form-select-solid&quot; data-control=&quot;select2&quot; data-placeholder=&quot;Select an option&quot;&gt;
    &lt;option&gt;&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
&lt;/select&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->

                        <div class="py-5">
                            <!--begin::Information-->
                            <div class="d-flex align-items-center rounded py-5 px-5 bg-light-warning "><i
                                    class="ki-duotone ki-information-5 fs-3x text-warning me-5"><span
                                        class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-bold fs-6">
                                    Add <code>&lt;option&gt;&lt;/option&gt;</code> empty option in order to display
                                    the placeholder when selection is not made.
                                </div> <!--end::Description-->
                            </div><!--end::Information-->
                        </div>

                        <div class="py-5">
                            <!--begin::Information-->
                            <div class="d-flex align-items-center rounded py-5 px-5 bg-light-warning "><i
                                    class="ki-duotone ki-information-5 fs-3x text-warning me-5"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span></i> <!--begin::Description-->
                                <div class="text-gray-700 fw-bold fs-6">
                                    Add <code>data-dropdown-parent="#modal_element_id"</code> option to fix
                                    uneditable search input when Select2 is used on Bootstrap Modal with
                                    <code>tabindex="-1"</code>.
                                </div> <!--end::Description-->
                            </div><!--end::Information-->
                        </div>

                        <div class="py-5">
                            <!--begin::Information-->
                            <div class="d-flex align-items-center rounded py-5 px-5 bg-light-warning "><i
                                    class="ki-duotone ki-information-5 fs-3x text-warning me-5"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span></i> <!--begin::Description-->
                                <div class="text-gray-700 fw-bold fs-6">
                                    Add <code>data-dropdown-parent="body"</code> option to fix dropdown position
                                    issue within a modal with long content.
                                </div> <!--end::Description-->
                            </div><!--end::Information-->
                        </div>
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="disabled" data-kt-scroll-offset="50">
                            <a href="#disabled"></a>

                            Disabled
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            Disabled state examples of Select2 usage with default and solid background input styles:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-10">
                                    <label for="" class="form-label">Default input style</label>
                                    <select class="form-select" disabled data-control="select2"
                                        data-placeholder="Select an option">
                                        <option></option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                        <option value="4">Option 4</option>
                                        <option value="5">Option 5</option>
                                    </select>
                                </div>

                                <div class="mb-10">
                                    <label for="" class="form-label">Transparent background style</label>
                                    <select class="form-select form-select-transparent" disabled data-control="select2"
                                        data-placeholder="Select an option">
                                        <option></option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                        <option value="4">Option 4</option>
                                        <option value="5">Option 5</option>
                                    </select>
                                </div>

                                <div class="mb-0">
                                    <label for="" class="form-label">Solid background style</label>
                                    <select class="form-select form-select-solid" disabled data-control="select2"
                                        data-placeholder="Select an option">
                                        <option></option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                        <option value="4">Option 4</option>
                                        <option value="5">Option 5</option>
                                    </select>
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
                                    <pre class="language-html"><code class="language-html">&lt;select class=&quot;form-select&quot; data-control=&quot;select2&quot; data-placeholder=&quot;Select an option&quot; disabled&gt;
    &lt;option&gt;&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
&lt;/select&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="group" data-kt-scroll-offset="50">
                            <a href="#group"></a>

                            Group
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>&lt;optgroup&gt;</code> tag to group select options:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <label for="" class="form-label">Option Groups</label>
                                <select class="form-select" data-control="select2" data-placeholder="Select an option">
                                    <optgroup label="Group 1">
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                    </optgroup>
                                    <optgroup label="Group 2">
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;select class=&quot;form-select&quot; data-control=&quot;select2&quot; data-placeholder=&quot;Select an option&quot;&gt;
    &lt;optgroup label=&quot;Group 1&quot;&gt;
        &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
        &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
        &lt;option value=&quot;3&quot;&gt;Option 3&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label=&quot;Group 2&quot;&gt;
        &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
        &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
        &lt;option value=&quot;3&quot;&gt;Option 3&lt;/option&gt;
    &lt;/optgroup&gt;
&lt;/select&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="sizes" data-kt-scroll-offset="50">
                            <a href="#sizes"></a>

                            Sizes
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Apply the standard Bootstrap input sizes <code>.form-select-sm</code> and
                            <code>.form-select-lg</code>:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-10">
                                    <label for="" class="form-label">Small size</label>
                                    <select class="form-select form-select-sm form-select-solid" data-control="select2"
                                        data-placeholder="Select an option">
                                        <option></option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                        <option value="4">Option 4</option>
                                        <option value="5">Option 5</option>
                                    </select>
                                </div>
                                <div class="mb-10">
                                    <label for="" class="form-label">Default size</label>
                                    <select class="form-select form-select-solid" data-control="select2"
                                        data-placeholder="Select an option">
                                        <option></option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                        <option value="4">Option 4</option>
                                        <option value="5">Option 5</option>
                                    </select>
                                </div>
                                <div class="mb-0">
                                    <label for="" class="form-label">Large size</label>
                                    <select class="form-select form-select-lg form-select-solid" data-control="select2"
                                        data-placeholder="Select an option">
                                        <option></option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                        <option value="4">Option 4</option>
                                        <option value="5">Option 5</option>
                                    </select>
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
                                    <pre class="language-html"><code class="language-html">&lt;select class=&quot;form-select form-select-sm form-select-solid&quot; data-control=&quot;select2&quot; data-placeholder=&quot;Select an option&quot;&gt;
    &lt;option&gt;&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
&lt;/select&gt;

&lt;select class=&quot;form-select form-select-lg form-select-solid&quot; data-control=&quot;select2&quot; data-placeholder=&quot;Select an option&quot;&gt;
    &lt;option&gt;&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
&lt;/select&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="bootstrap-input-group" data-kt-scroll-offset="50">
                            <a href="#bootstrap-input-group"></a>

                            Bootstrap Input Group
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Mix and match Select2 with <code>.input-group</code> <a
                                href="https://getbootstrap.com/docs/5.2/forms/input-group" class="fw-semibold">Bootstrap
                                Input Group</a>&nbsp; components.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-10">
                                    <label for="" class="form-label">Default Example</label>
                                    <!--begin::Default example-->
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text">
                                            <i class="ki-duotone ki-notepad-bookmark fs-3"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span><span class="path4"></span><span
                                                    class="path5"></span><span class="path6"></span></i> </span>
                                        <div class="flex-grow-1">
                                            <select class="form-select rounded-start-0" data-control="select2"
                                                data-placeholder="Select an option">
                                                <option></option>
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                                <option value="3">Option 3</option>
                                                <option value="4">Option 4</option>
                                                <option value="5">Option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end::Default example-->
                                </div>

                                <div class="mb-10">
                                    <label for="" class="form-label">Solid Input Group Style</label>
                                    <!--begin::Solid input group style-->
                                    <div class="input-group input-group-solid flex-nowrap">
                                        <span class="input-group-text">
                                            <i class="ki-duotone ki-calendar fs-3"><span class="path1"></span><span
                                                    class="path2"></span></i> </span>
                                        <div class="overflow-hidden flex-grow-1">
                                            <select class="form-select form-select-solid rounded-start-0 border-start"
                                                data-control="select2" data-placeholder="Select an option">
                                                <option></option>
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                                <option value="3">Option 3</option>
                                                <option value="4">Option 4</option>
                                                <option value="5">Option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end::Solid input group style-->
                                </div>

                                <div class="mb-10">
                                    <label for="" class="form-label">Both Add-ons</label>
                                    <!--begin::Both add-ons-->
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text">
                                            <i class="ki-duotone ki-calculator fs-3"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span><span class="path5"></span><span
                                                    class="path6"></span></i> </span>
                                        <div class="overflow-hidden flex-grow-1">
                                            <select class="form-select rounded-0" data-control="select2"
                                                data-placeholder="Select an option">
                                                <option></option>
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                                <option value="3">Option 3</option>
                                                <option value="4">Option 4</option>
                                                <option value="5">Option 5</option>
                                            </select>
                                        </div>
                                        <span class="input-group-text">.00</span>
                                    </div>
                                    <!--end::Both add-ons-->
                                </div>

                                <div class="mb-0">
                                    <label for="" class="form-label">Both Add-ons in Solid Style</label>
                                    <!--begin::Both add-ons in solid style-->
                                    <div class="input-group input-group-solid flex-nowrap">
                                        <span class="input-group-text">
                                            <i class="ki-duotone ki-chart-simple fs-3"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></i> </span>
                                        <div class="overflow-hidden flex-grow-1">
                                            <select class="form-select form-select-solid rounded-0 border-start border-end"
                                                data-control="select2" data-placeholder="Select an option">
                                                <option></option>
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                                <option value="3">Option 3</option>
                                                <option value="4">Option 4</option>
                                                <option value="5">Option 5</option>
                                            </select>
                                        </div>
                                        <span class="input-group-text">USD</span>
                                    </div>
                                    <!--end::Both add-ons in solid style-->
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
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Default example--&gt;
&lt;div class=&quot;input-group flex-nowrap&quot;&gt;
    &lt;span class=&quot;input-group-text&quot;&gt;
        &lt;i class=&quot;ki-duotone ki-notepad-bookmark fs-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path6&quot;&gt;&lt;/span&gt;&lt;/i&gt;
    &lt;/span&gt;
    &lt;div class=&quot;overflow-hidden flex-grow-1&quot;&gt;
        &lt;select class=&quot;form-select rounded-start-0&quot; data-control=&quot;select2&quot; data-placeholder=&quot;Select an option&quot;&gt;
            &lt;option&gt;&lt;/option&gt;
            &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
            &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
            &lt;option value=&quot;3&quot;&gt;Option 3&lt;/option&gt;
            &lt;option value=&quot;4&quot;&gt;Option 4&lt;/option&gt;
            &lt;option value=&quot;5&quot;&gt;Option 5&lt;/option&gt;
        &lt;/select&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;!--end::Default example--&gt;

&lt;!--begin::Solid input group style--&gt;
&lt;div class=&quot;input-group input-group-solid flex-nowrap&quot;&gt;
    &lt;span class=&quot;input-group-text&quot;&gt;
        &lt;i class=&quot;ki-duotone ki-notepad-bookmark fs-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path6&quot;&gt;&lt;/span&gt;&lt;/i&gt;
    &lt;/span&gt;
    &lt;div class=&quot;overflow-hidden flex-grow-1&quot;&gt;
        &lt;select class=&quot;form-select form-select-solid rounded-start-0 border-start&quot; data-control=&quot;select2&quot; data-placeholder=&quot;Select an option&quot;&gt;
            &lt;option&gt;&lt;/option&gt;
            &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
            &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
            &lt;option value=&quot;3&quot;&gt;Option 3&lt;/option&gt;
            &lt;option value=&quot;4&quot;&gt;Option 4&lt;/option&gt;
            &lt;option value=&quot;5&quot;&gt;Option 5&lt;/option&gt;
        &lt;/select&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;!--end::Solid input group style--&gt;

&lt;!--begin::Both add-ons--&gt;
&lt;div class=&quot;input-group flex-nowrap&quot;&gt;
    &lt;span class=&quot;input-group-text&quot;&gt;
        &lt;i class=&quot;ki-duotone ki-calculator fs-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path6&quot;&gt;&lt;/span&gt;&lt;/i&gt;
    &lt;/span&gt;
    &lt;div class=&quot;overflow-hidden flex-grow-1&quot;&gt;
        &lt;select class=&quot;form-select rounded-0&quot; data-control=&quot;select2&quot; data-placeholder=&quot;Select an option&quot;&gt;
            &lt;option&gt;&lt;/option&gt;
            &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
            &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
            &lt;option value=&quot;3&quot;&gt;Option 3&lt;/option&gt;
            &lt;option value=&quot;4&quot;&gt;Option 4&lt;/option&gt;
            &lt;option value=&quot;5&quot;&gt;Option 5&lt;/option&gt;
        &lt;/select&gt;
    &lt;/div&gt;
    &lt;span class=&quot;input-group-text&quot;&gt;.00&lt;/span&gt;
&lt;/div&gt;
&lt;!--end::Both add-ons--&gt;

&lt;!--begin::Both add-ons in solid style--&gt;
&lt;div class=&quot;input-group input-group-solid flex-nowrap&quot;&gt;
    &lt;span class=&quot;input-group-text&quot;&gt;&lt;i class=&quot;ki-duotone ki-chart-simple fs-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;/i&gt;&lt;/span&gt;
    &lt;div class=&quot;overflow-hidden flex-grow-1&quot;&gt;
        &lt;select class=&quot;form-select form-select-solid rounded-0 border-start border-end&quot; data-control=&quot;select2&quot; data-placeholder=&quot;Select an option&quot;&gt;
            &lt;option&gt;&lt;/option&gt;
            &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
            &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
            &lt;option value=&quot;3&quot;&gt;Option 3&lt;/option&gt;
            &lt;option value=&quot;4&quot;&gt;Option 4&lt;/option&gt;
            &lt;option value=&quot;5&quot;&gt;Option 5&lt;/option&gt;
        &lt;/select&gt;
    &lt;/div&gt;
    &lt;span class=&quot;input-group-text&quot;&gt;USD&lt;/span&gt;
&lt;/div&gt;
&lt;!--end::Both add-ons in solid style--&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="clear-selection" data-kt-scroll-offset="50">
                            <a href="#clear-selection"></a>

                            Clear Selection
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Add <code>data-allow-clear="true"</code> attribute to allow clearing selected options.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-0">
                                    <label for="" class="form-label">Clearable option</label>
                                    <select class="form-select form-select-solid" data-control="select2"
                                        data-placeholder="Select an option" data-allow-clear="true">
                                        <option></option>
                                        <option value="1">Option 1</option>
                                        <option value="2" selected>Option 2</option>
                                        <option value="3">Option 3</option>
                                        <option value="4">Option 4</option>
                                        <option value="5">Option 5</option>
                                    </select>
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
                                    <pre class="language-html"><code class="language-html">&lt;select class=&quot;form-select form-select-solid&quot; data-control=&quot;select2&quot; data-placeholder=&quot;Select an option&quot; data-allow-clear=&quot;true&quot;&gt;
    &lt;option&gt;&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
    &lt;option value=&quot;2&quot; selected&gt;Option 2&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Option 3&lt;/option&gt;
    &lt;option value=&quot;4&quot;&gt;Option 4&lt;/option&gt;
    &lt;option value=&quot;5&quot;&gt;Option 5&lt;/option&gt;
&lt;/select&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="hide-search" data-kt-scroll-offset="50">
                            <a href="#hide-search"></a>

                            Hide Search
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Add <code>data-hide-search="true"</code> attribute to hide the search input in the
                            dropdown list.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-0">
                                    <label for="" class="form-label">Clearable option</label>
                                    <select class="form-select form-select-solid" data-control="select2"
                                        data-placeholder="Select an option" data-hide-search="true">
                                        <option></option>
                                        <option value="1">Option 1</option>
                                        <option value="2" selected>Option 2</option>
                                        <option value="3">Option 3</option>
                                        <option value="4">Option 4</option>
                                        <option value="5">Option 5</option>
                                    </select>
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
                                    <pre class="language-html"><code class="language-html">&lt;select class=&quot;form-select form-select-solid&quot; data-control=&quot;select2&quot; data-placeholder=&quot;Select an option&quot; data-hide-search=&quot;true&quot;&gt;
    &lt;option&gt;&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
    &lt;option value=&quot;2&quot; selected&gt;Option 2&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Option 3&lt;/option&gt;
    &lt;option value=&quot;4&quot;&gt;Option 4&lt;/option&gt;
    &lt;option value=&quot;5&quot;&gt;Option 5&lt;/option&gt;
&lt;/select&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="dropdown-width" data-kt-scroll-offset="50">
                            <a href="#dropdown-width"></a>

                            Dropdown Width
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <a class="fw-semibold" href="base/utilities#width-and-height" target="_blank">Custom
                                Width Classes</a>&nbsp;
                            to set dropdown width via <code>data-dropdown-css-class="w-200px"</code> attribute:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-0">
                                    <label for="" class="form-label">Clearable option</label>
                                    <select class="form-select form-select-solid" data-control="select2"
                                        data-dropdown-css-class="w-200px" data-placeholder="Select an option"
                                        data-hide-search="true">
                                        <option></option>
                                        <option value="1">Option 1</option>
                                        <option value="2" selected>Option 2</option>
                                        <option value="3">Option 3</option>
                                        <option value="4">Option 4</option>
                                        <option value="5">Option 5</option>
                                    </select>
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
                                    <pre class="language-html"><code class="language-html">&lt;select class=&quot;form-select form-select-solid&quot; data-control=&quot;select2&quot; data-dropdown-css-class=&quot;w-200px&quot; data-placeholder=&quot;Select an option&quot; data-hide-search=&quot;true&quot;&gt;
    &lt;option&gt;&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
    &lt;option value=&quot;2&quot; selected&gt;Option 2&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Option 3&lt;/option&gt;
    &lt;option value=&quot;4&quot;&gt;Option 4&lt;/option&gt;
    &lt;option value=&quot;5&quot;&gt;Option 5&lt;/option&gt;
&lt;/select&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="multiple-selection" data-kt-scroll-offset="50">
                            <a href="#multiple-selection"></a>

                            Multiple Selection
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Declare a selectbox with <code>multiple="multiple"</code> attribute to allow multiple
                            selection with a tag control.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-10">
                                    <label for="" class="form-label">Small size</label>
                                    <select class="form-select form-select-sm form-select-solid" data-control="select2"
                                        data-close-on-select="false" data-placeholder="Select an option"
                                        data-allow-clear="true" multiple="multiple">
                                        <option></option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                        <option value="4">Option 4</option>
                                        <option value="5">Option 5</option>
                                        <option value="6">Option 6</option>
                                        <option value="7">Option 7</option>
                                        <option value="8">Option 8</option>
                                        <option value="9">Option 9</option>
                                        <option value="10">Option 10</option>
                                    </select>
                                </div>

                                <div class="mb-10">
                                    <label for="" class="form-label">Default size</label>
                                    <select class="form-select form-select-solid" data-control="select2"
                                        data-close-on-select="false" data-placeholder="Select an option"
                                        data-allow-clear="true" multiple="multiple">
                                        <option></option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                        <option value="4">Option 4</option>
                                        <option value="5">Option 5</option>
                                        <option value="6">Option 6</option>
                                        <option value="7">Option 7</option>
                                        <option value="8">Option 8</option>
                                        <option value="9">Option 9</option>
                                        <option value="10">Option 10</option>
                                    </select>
                                </div>

                                <div class="mb-0">
                                    <label for="" class="form-label">Large size</label>
                                    <select class="form-select form-select-lg form-select-solid" data-control="select2"
                                        data-placeholder="Select an option" data-allow-clear="true" multiple="multiple">
                                        <option></option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                        <option value="4">Option 4</option>
                                        <option value="5">Option 5</option>
                                        <option value="6">Option 6</option>
                                        <option value="7">Option 7</option>
                                        <option value="8">Option 8</option>
                                        <option value="9">Option 9</option>
                                        <option value="10">Option 10</option>
                                    </select>
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
                                    <pre class="language-html"><code class="language-html">&lt;select class=&quot;form-select form-select-solid&quot; data-control=&quot;select2&quot; data-close-on-select=&quot;false&quot; data-placeholder=&quot;Select an option&quot; data-allow-clear=&quot;true&quot; multiple=&quot;multiple&quot;&gt;
    &lt;option&gt;&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
&lt;/select&gt;

&lt;select class=&quot;form-select form-select-sm form-select-solid&quot; data-control=&quot;select2&quot; data-close-on-select=&quot;false&quot; data-placeholder=&quot;Select an option&quot; data-allow-clear=&quot;true&quot; multiple=&quot;multiple&quot;&gt;
    &lt;option&gt;&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
&lt;/select&gt;

&lt;select class=&quot;form-select form-select-lg form-select-solid&quot; data-control=&quot;select2&quot; data-placeholder=&quot;Select an option&quot; data-allow-clear=&quot;true&quot; multiple=&quot;multiple&quot;&gt;
    &lt;option&gt;&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
&lt;/select&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="hierarchical-options" data-kt-scroll-offset="50">
                            <a href="#hierarchical-options"></a>

                            Hierarchical Options
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>&lt;optgroup&gt;&lt;/optgroup&gt;</code> tag to display options in single
                            level groups:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-0">
                                    <label for="" class="form-label">Clearable option</label>
                                    <select class="form-select form-select-solid" data-control="select2"
                                        data-placeholder="Select an option" data-allow-clear="true">
                                        <option></option>
                                        <optgroup label="Group 1">
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                        </optgroup>
                                        <optgroup label="Group 2">
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                            <option value="6">Option 6</option>
                                        </optgroup>
                                        <optgroup label="Group 3">
                                            <option value="7">Option 7</option>
                                            <option value="8">Option 8</option>
                                            <option value="9">Option 9</option>
                                        </optgroup>
                                    </select>
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
                                    <pre class="language-html"><code class="language-html">&lt;select class=&quot;form-select form-select-solid&quot; data-control=&quot;select2&quot; data-placeholder=&quot;Select an option&quot; data-allow-clear=&quot;true&quot;&gt;
    &lt;option&gt;&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
    &lt;option value=&quot;2&quot; selected&gt;Option 2&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Option 3&lt;/option&gt;
    &lt;option value=&quot;4&quot;&gt;Option 4&lt;/option&gt;
    &lt;option value=&quot;5&quot;&gt;Option 5&lt;/option&gt;
&lt;/select&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="bootstrap-modal" data-kt-scroll-offset="50">
                            <a href="#bootstrap-modal"></a>

                            Bootstrap Modal
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use Select2 within Bootstrap Modal:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_1">
                                    Launch demo modal
                                </button>

                                <!--begin::Modal-->
                                <div class="modal fade" tabindex="-1" id="kt_modal_1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>

                                                <!--begin::Close-->
                                                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                    data-bs-dismiss="modal" aria-label="Close">
                                                    <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span
                                                            class="path2"></span></i>
                                                </div>
                                                <!--end::Close-->
                                            </div>

                                            <div class="modal-body">
                                                <div class="mb-10">
                                                    <label for="" class="form-label">Modal example</label>
                                                    <select class="form-select form-select-solid" data-control="select2"
                                                        data-dropdown-parent="#kt_modal_1"
                                                        data-placeholder="Select an option" data-allow-clear="true">
                                                        <option></option>
                                                        <option value="1">Option 1</option>
                                                        <option value="2">Option 2</option>
                                                        <option value="3">Option 3</option>
                                                        <option value="4">Option 4</option>
                                                        <option value="5">Option 5</option>
                                                        <option value="6">Option 6</option>
                                                        <option value="7">Option 7</option>
                                                        <option value="8">Option 8</option>
                                                        <option value="9">Option 9</option>
                                                        <option value="10">Option 10</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save
                                                    changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Modal-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Modal--&gt;
&lt;div class=&quot;modal fade&quot; tabindex=&quot;-1&quot; id=&quot;kt_modal_1&quot;&gt;
    &lt;div class=&quot;modal-dialog&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h5 class=&quot;modal-title&quot;&gt;Modal title&lt;/h5&gt;

                &lt;!--begin::Close--&gt;
                &lt;div class=&quot;btn btn-icon btn-sm btn-active-light-primary ms-2&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;
                    &lt;span class=&quot;svg-icon fs-2x&quot;&gt;&lt;/span&gt;
                &lt;/div&gt;
                &lt;!--end::Close--&gt;
            &lt;/div&gt;

            &lt;div class=&quot;modal-body&quot;&gt;
                &lt;div class=&quot;mb-10&quot;&gt;
                    &lt;label for=&quot;&quot; class=&quot;form-label&quot;&gt;Modal example&lt;/label&gt;
                    &lt;select class=&quot;form-select form-select-solid&quot; data-control=&quot;select2&quot; data-dropdown-parent=&quot;#kt_modal_1&quot; data-placeholder=&quot;Select an option&quot; data-allow-clear=&quot;true&quot;&gt;
                        &lt;option&gt;&lt;/option&gt;
                        &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
                        &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
                        &lt;option value=&quot;3&quot;&gt;Option 3&lt;/option&gt;
                        &lt;option value=&quot;4&quot;&gt;Option 4&lt;/option&gt;
                        &lt;option value=&quot;5&quot;&gt;Option 5&lt;/option&gt;
                        &lt;option value=&quot;6&quot;&gt;Option 6&lt;/option&gt;
                        &lt;option value=&quot;7&quot;&gt;Option 7&lt;/option&gt;
                        &lt;option value=&quot;8&quot;&gt;Option 8&lt;/option&gt;
                        &lt;option value=&quot;9&quot;&gt;Option 9&lt;/option&gt;
                        &lt;option value=&quot;10&quot;&gt;Option 10&lt;/option&gt;
                    &lt;/select&gt;
                &lt;/div&gt;
            &lt;/div&gt;

            &lt;div class=&quot;modal-footer&quot;&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;!--end::Modal--&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="countries-with-flags" data-kt-scroll-offset="50">
                            <a href="#countries-with-flags"></a>

                            Countries With Flags
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Initialize Select2 programmatically and add <code>data-kt-select2-country</code>
                            attribute with the path to the country flag to create a list with country icons.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <label for="kt_docs_select2_country" class="form-label">Select a country</label>

                                <select class="form-select" data-placeholder="Select country"
                                    id="kt_docs_select2_country">
                                    <option></option>
                                    <option value="AF" data-kt-select2-country="assets/media/flags/afghanistan.svg">
                                        Afghanistan</option>
                                    <option value="AX" data-kt-select2-country="assets/media/flags/aland-islands.svg">
                                        Aland Islands</option>
                                    <option value="AL" data-kt-select2-country="assets/media/flags/albania.svg">
                                        Albania</option>
                                    <option value="DZ" data-kt-select2-country="assets/media/flags/algeria.svg">
                                        Algeria</option>
                                    <option value="AS"
                                        data-kt-select2-country="assets/media/flags/american-samoa.svg">
                                        American Samoa</option>
                                    <option value="AD" data-kt-select2-country="assets/media/flags/andorra.svg">
                                        Andorra</option>
                                    <option value="AO" data-kt-select2-country="assets/media/flags/angola.svg">
                                        Angola</option>
                                    <option value="AI" data-kt-select2-country="assets/media/flags/anguilla.svg">
                                        Anguilla</option>
                                    <option value="AG"
                                        data-kt-select2-country="assets/media/flags/antigua-and-barbuda.svg">
                                        Antigua and Barbuda</option>
                                    <option value="AR" data-kt-select2-country="assets/media/flags/argentina.svg">
                                        Argentina</option>
                                    <option value="AM" data-kt-select2-country="assets/media/flags/armenia.svg">
                                        Armenia</option>
                                    <option value="AW" data-kt-select2-country="assets/media/flags/aruba.svg">
                                        Aruba</option>
                                    <option value="AU" data-kt-select2-country="assets/media/flags/australia.svg">
                                        Australia</option>
                                    <option value="AT" data-kt-select2-country="assets/media/flags/austria.svg">
                                        Austria</option>
                                    <option value="AZ" data-kt-select2-country="assets/media/flags/azerbaijan.svg">
                                        Azerbaijan</option>
                                    <option value="BS" data-kt-select2-country="assets/media/flags/bahamas.svg">
                                        Bahamas</option>
                                    <option value="BH" data-kt-select2-country="assets/media/flags/bahrain.svg">
                                        Bahrain</option>
                                    <option value="BD" data-kt-select2-country="assets/media/flags/bangladesh.svg">
                                        Bangladesh</option>
                                    <option value="BB" data-kt-select2-country="assets/media/flags/barbados.svg">
                                        Barbados</option>
                                    <option value="BY" data-kt-select2-country="assets/media/flags/belarus.svg">
                                        Belarus</option>
                                    <option value="BE" data-kt-select2-country="assets/media/flags/belgium.svg">
                                        Belgium</option>
                                    <option value="BZ" data-kt-select2-country="assets/media/flags/belize.svg">
                                        Belize</option>
                                    <option value="BJ" data-kt-select2-country="assets/media/flags/benin.svg">
                                        Benin</option>
                                    <option value="BM" data-kt-select2-country="assets/media/flags/bermuda.svg">
                                        Bermuda</option>
                                    <option value="BT" data-kt-select2-country="assets/media/flags/bhutan.svg">
                                        Bhutan</option>
                                    <option value="BO" data-kt-select2-country="assets/media/flags/bolivia.svg">
                                        Bolivia, Plurinational State of</option>
                                    <option value="BQ" data-kt-select2-country="assets/media/flags/bonaire.svg">
                                        Bonaire, Sint Eustatius and Saba</option>
                                    <option value="BA"
                                        data-kt-select2-country="assets/media/flags/bosnia-and-herzegovina.svg">
                                        Bosnia and Herzegovina</option>
                                    <option value="BW" data-kt-select2-country="assets/media/flags/botswana.svg">
                                        Botswana</option>
                                    <option value="BR" data-kt-select2-country="assets/media/flags/brazil.svg">
                                        Brazil</option>
                                    <option value="IO"
                                        data-kt-select2-country="assets/media/flags/british-indian-ocean-territory.svg">
                                        British Indian Ocean Territory</option>
                                    <option value="BN" data-kt-select2-country="assets/media/flags/brunei.svg">
                                        Brunei Darussalam</option>
                                    <option value="BG" data-kt-select2-country="assets/media/flags/bulgaria.svg">
                                        Bulgaria</option>
                                    <option value="BF" data-kt-select2-country="assets/media/flags/burkina-faso.svg">
                                        Burkina Faso</option>
                                    <option value="BI" data-kt-select2-country="assets/media/flags/burundi.svg">
                                        Burundi</option>
                                    <option value="KH" data-kt-select2-country="assets/media/flags/cambodia.svg">
                                        Cambodia</option>
                                    <option value="CM" data-kt-select2-country="assets/media/flags/cameroon.svg">
                                        Cameroon</option>
                                    <option value="CA" data-kt-select2-country="assets/media/flags/canada.svg">
                                        Canada</option>
                                    <option value="CV" data-kt-select2-country="assets/media/flags/cape-verde.svg">
                                        Cape Verde</option>
                                    <option value="KY"
                                        data-kt-select2-country="assets/media/flags/cayman-islands.svg">
                                        Cayman Islands</option>
                                    <option value="CF"
                                        data-kt-select2-country="assets/media/flags/central-african-republic.svg">
                                        Central African Republic</option>
                                    <option value="TD" data-kt-select2-country="assets/media/flags/chad.svg">
                                        Chad</option>
                                    <option value="CL" data-kt-select2-country="assets/media/flags/chile.svg">
                                        Chile</option>
                                    <option value="CN" data-kt-select2-country="assets/media/flags/china.svg">
                                        China</option>
                                    <option value="CX"
                                        data-kt-select2-country="assets/media/flags/christmas-island.svg">
                                        Christmas Island</option>
                                    <option value="CC" data-kt-select2-country="assets/media/flags/cocos-island.svg">
                                        Cocos (Keeling) Islands</option>
                                    <option value="CO" data-kt-select2-country="assets/media/flags/colombia.svg">
                                        Colombia</option>
                                    <option value="KM" data-kt-select2-country="assets/media/flags/comoros.svg">
                                        Comoros</option>
                                    <option value="CK" data-kt-select2-country="assets/media/flags/cook-islands.svg">
                                        Cook Islands</option>
                                    <option value="CR" data-kt-select2-country="assets/media/flags/costa-rica.svg">
                                        Costa Rica</option>
                                    <option value="CI" data-kt-select2-country="assets/media/flags/ivory-coast.svg">
                                        Côte d'Ivoire</option>
                                    <option value="HR" data-kt-select2-country="assets/media/flags/croatia.svg">
                                        Croatia</option>
                                    <option value="CU" data-kt-select2-country="assets/media/flags/cuba.svg">
                                        Cuba</option>
                                    <option value="CW" data-kt-select2-country="assets/media/flags/curacao.svg">
                                        Curaçao</option>
                                    <option value="CZ"
                                        data-kt-select2-country="assets/media/flags/czech-republic.svg">
                                        Czech Republic</option>
                                    <option value="DK" data-kt-select2-country="assets/media/flags/denmark.svg">
                                        Denmark</option>
                                    <option value="DJ" data-kt-select2-country="assets/media/flags/djibouti.svg">
                                        Djibouti</option>
                                    <option value="DM" data-kt-select2-country="assets/media/flags/dominica.svg">
                                        Dominica</option>
                                    <option value="DO"
                                        data-kt-select2-country="assets/media/flags/dominican-republic.svg">
                                        Dominican Republic</option>
                                    <option value="EC" data-kt-select2-country="assets/media/flags/ecuador.svg">
                                        Ecuador</option>
                                    <option value="EG" data-kt-select2-country="assets/media/flags/egypt.svg">
                                        Egypt</option>
                                    <option value="SV" data-kt-select2-country="assets/media/flags/el-salvador.svg">
                                        El Salvador</option>
                                    <option value="GQ"
                                        data-kt-select2-country="assets/media/flags/equatorial-guinea.svg">
                                        Equatorial Guinea</option>
                                    <option value="ER" data-kt-select2-country="assets/media/flags/eritrea.svg">
                                        Eritrea</option>
                                    <option value="EE" data-kt-select2-country="assets/media/flags/estonia.svg">
                                        Estonia</option>
                                    <option value="ET" data-kt-select2-country="assets/media/flags/ethiopia.svg">
                                        Ethiopia</option>
                                    <option value="FK"
                                        data-kt-select2-country="assets/media/flags/falkland-islands.svg">
                                        Falkland Islands (Malvinas)</option>
                                    <option value="FJ" data-kt-select2-country="assets/media/flags/fiji.svg">
                                        Fiji</option>
                                    <option value="FI" data-kt-select2-country="assets/media/flags/finland.svg">
                                        Finland</option>
                                    <option value="FR" data-kt-select2-country="assets/media/flags/france.svg">
                                        France</option>
                                    <option value="PF"
                                        data-kt-select2-country="assets/media/flags/french-polynesia.svg">
                                        French Polynesia</option>
                                    <option value="GA" data-kt-select2-country="assets/media/flags/gabon.svg">
                                        Gabon</option>
                                    <option value="GM" data-kt-select2-country="assets/media/flags/gambia.svg">
                                        Gambia</option>
                                    <option value="GE" data-kt-select2-country="assets/media/flags/georgia.svg">
                                        Georgia</option>
                                    <option value="DE" data-kt-select2-country="assets/media/flags/germany.svg">
                                        Germany</option>
                                    <option value="GH" data-kt-select2-country="assets/media/flags/ghana.svg">
                                        Ghana</option>
                                    <option value="GI" data-kt-select2-country="assets/media/flags/gibraltar.svg">
                                        Gibraltar</option>
                                    <option value="GR" data-kt-select2-country="assets/media/flags/greece.svg">
                                        Greece</option>
                                    <option value="GL" data-kt-select2-country="assets/media/flags/greenland.svg">
                                        Greenland</option>
                                    <option value="GD" data-kt-select2-country="assets/media/flags/grenada.svg">
                                        Grenada</option>
                                    <option value="GU" data-kt-select2-country="assets/media/flags/guam.svg">
                                        Guam</option>
                                    <option value="GT" data-kt-select2-country="assets/media/flags/guatemala.svg">
                                        Guatemala</option>
                                    <option value="GG" data-kt-select2-country="assets/media/flags/guernsey.svg">
                                        Guernsey</option>
                                    <option value="GN" data-kt-select2-country="assets/media/flags/guinea.svg">
                                        Guinea</option>
                                    <option value="GW" data-kt-select2-country="assets/media/flags/guinea-bissau.svg">
                                        Guinea-Bissau</option>
                                    <option value="HT" data-kt-select2-country="assets/media/flags/haiti.svg">
                                        Haiti</option>
                                    <option value="VA" data-kt-select2-country="assets/media/flags/vatican-city.svg">
                                        Holy See (Vatican City State)</option>
                                    <option value="HN" data-kt-select2-country="assets/media/flags/honduras.svg">
                                        Honduras</option>
                                    <option value="HK" data-kt-select2-country="assets/media/flags/hong-kong.svg">
                                        Hong Kong</option>
                                    <option value="HU" data-kt-select2-country="assets/media/flags/hungary.svg">
                                        Hungary</option>
                                    <option value="IS" data-kt-select2-country="assets/media/flags/iceland.svg">
                                        Iceland</option>
                                    <option value="IN" data-kt-select2-country="assets/media/flags/india.svg">
                                        India</option>
                                    <option value="ID" data-kt-select2-country="assets/media/flags/indonesia.svg">
                                        Indonesia</option>
                                    <option value="IR" data-kt-select2-country="assets/media/flags/iran.svg">
                                        Iran, Islamic Republic of</option>
                                    <option value="IQ" data-kt-select2-country="assets/media/flags/iraq.svg">
                                        Iraq</option>
                                    <option value="IE" data-kt-select2-country="assets/media/flags/ireland.svg">
                                        Ireland</option>
                                    <option value="IM" data-kt-select2-country="assets/media/flags/isle-of-man.svg">
                                        Isle of Man</option>
                                    <option value="IL" data-kt-select2-country="assets/media/flags/israel.svg">
                                        Israel</option>
                                    <option value="IT" data-kt-select2-country="assets/media/flags/italy.svg">
                                        Italy</option>
                                    <option value="JM" data-kt-select2-country="assets/media/flags/jamaica.svg">
                                        Jamaica</option>
                                    <option value="JP" data-kt-select2-country="assets/media/flags/japan.svg">
                                        Japan</option>
                                    <option value="JE" data-kt-select2-country="assets/media/flags/jersey.svg">
                                        Jersey</option>
                                    <option value="JO" data-kt-select2-country="assets/media/flags/jordan.svg">
                                        Jordan</option>
                                    <option value="KZ" data-kt-select2-country="assets/media/flags/kazakhstan.svg">
                                        Kazakhstan</option>
                                    <option value="KE" data-kt-select2-country="assets/media/flags/kenya.svg">
                                        Kenya</option>
                                    <option value="KI" data-kt-select2-country="assets/media/flags/kiribati.svg">
                                        Kiribati</option>
                                    <option value="KP" data-kt-select2-country="assets/media/flags/north-korea.svg">
                                        Korea, Democratic People's Republic of</option>
                                    <option value="KW" data-kt-select2-country="assets/media/flags/kuwait.svg">
                                        Kuwait</option>
                                    <option value="KG" data-kt-select2-country="assets/media/flags/kyrgyzstan.svg">
                                        Kyrgyzstan</option>
                                    <option value="LA" data-kt-select2-country="assets/media/flags/laos.svg">
                                        Lao People's Democratic Republic</option>
                                    <option value="LV" data-kt-select2-country="assets/media/flags/latvia.svg">
                                        Latvia</option>
                                    <option value="LB" data-kt-select2-country="assets/media/flags/lebanon.svg">
                                        Lebanon</option>
                                    <option value="LS" data-kt-select2-country="assets/media/flags/lesotho.svg">
                                        Lesotho</option>
                                    <option value="LR" data-kt-select2-country="assets/media/flags/liberia.svg">
                                        Liberia</option>
                                    <option value="LY" data-kt-select2-country="assets/media/flags/libya.svg">
                                        Libya</option>
                                    <option value="LI" data-kt-select2-country="assets/media/flags/liechtenstein.svg">
                                        Liechtenstein</option>
                                    <option value="LT" data-kt-select2-country="assets/media/flags/lithuania.svg">
                                        Lithuania</option>
                                    <option value="LU" data-kt-select2-country="assets/media/flags/luxembourg.svg">
                                        Luxembourg</option>
                                    <option value="MO" data-kt-select2-country="assets/media/flags/macao.svg">
                                        Macao</option>
                                    <option value="MG" data-kt-select2-country="assets/media/flags/madagascar.svg">
                                        Madagascar</option>
                                    <option value="MW" data-kt-select2-country="assets/media/flags/malawi.svg">
                                        Malawi</option>
                                    <option value="MY" data-kt-select2-country="assets/media/flags/malaysia.svg">
                                        Malaysia</option>
                                    <option value="MV" data-kt-select2-country="assets/media/flags/maldives.svg">
                                        Maldives</option>
                                    <option value="ML" data-kt-select2-country="assets/media/flags/mali.svg">
                                        Mali</option>
                                    <option value="MT" data-kt-select2-country="assets/media/flags/malta.svg">
                                        Malta</option>
                                    <option value="MH"
                                        data-kt-select2-country="assets/media/flags/marshall-island.svg">
                                        Marshall Islands</option>
                                    <option value="MQ" data-kt-select2-country="assets/media/flags/martinique.svg">
                                        Martinique</option>
                                    <option value="MR" data-kt-select2-country="assets/media/flags/mauritania.svg">
                                        Mauritania</option>
                                    <option value="MU" data-kt-select2-country="assets/media/flags/mauritius.svg">
                                        Mauritius</option>
                                    <option value="MX" data-kt-select2-country="assets/media/flags/mexico.svg">
                                        Mexico</option>
                                    <option value="FM" data-kt-select2-country="assets/media/flags/micronesia.svg">
                                        Micronesia, Federated States of</option>
                                    <option value="MD" data-kt-select2-country="assets/media/flags/moldova.svg">
                                        Moldova, Republic of</option>
                                    <option value="MC" data-kt-select2-country="assets/media/flags/monaco.svg">
                                        Monaco</option>
                                    <option value="MN" data-kt-select2-country="assets/media/flags/mongolia.svg">
                                        Mongolia</option>
                                    <option value="ME" data-kt-select2-country="assets/media/flags/montenegro.svg">
                                        Montenegro</option>
                                    <option value="MS" data-kt-select2-country="assets/media/flags/montserrat.svg">
                                        Montserrat</option>
                                    <option value="MA" data-kt-select2-country="assets/media/flags/morocco.svg">
                                        Morocco</option>
                                    <option value="MZ" data-kt-select2-country="assets/media/flags/mozambique.svg">
                                        Mozambique</option>
                                    <option value="MM" data-kt-select2-country="assets/media/flags/myanmar.svg">
                                        Myanmar</option>
                                    <option value="NA" data-kt-select2-country="assets/media/flags/namibia.svg">
                                        Namibia</option>
                                    <option value="NR" data-kt-select2-country="assets/media/flags/nauru.svg">
                                        Nauru</option>
                                    <option value="NP" data-kt-select2-country="assets/media/flags/nepal.svg">
                                        Nepal</option>
                                    <option value="NL" data-kt-select2-country="assets/media/flags/netherlands.svg">
                                        Netherlands</option>
                                    <option value="NZ" data-kt-select2-country="assets/media/flags/new-zealand.svg">
                                        New Zealand</option>
                                    <option value="NI" data-kt-select2-country="assets/media/flags/nicaragua.svg">
                                        Nicaragua</option>
                                    <option value="NE" data-kt-select2-country="assets/media/flags/niger.svg">
                                        Niger</option>
                                    <option value="NG" data-kt-select2-country="assets/media/flags/nigeria.svg">
                                        Nigeria</option>
                                    <option value="NU" data-kt-select2-country="assets/media/flags/niue.svg">
                                        Niue</option>
                                    <option value="NF"
                                        data-kt-select2-country="assets/media/flags/norfolk-island.svg">
                                        Norfolk Island</option>
                                    <option value="MP"
                                        data-kt-select2-country="assets/media/flags/northern-mariana-islands.svg">
                                        Northern Mariana Islands</option>
                                    <option value="NO" data-kt-select2-country="assets/media/flags/norway.svg">
                                        Norway</option>
                                    <option value="OM" data-kt-select2-country="assets/media/flags/oman.svg">
                                        Oman</option>
                                    <option value="PK" data-kt-select2-country="assets/media/flags/pakistan.svg">
                                        Pakistan</option>
                                    <option value="PW" data-kt-select2-country="assets/media/flags/palau.svg">
                                        Palau</option>
                                    <option value="PS" data-kt-select2-country="assets/media/flags/palestine.svg">
                                        Palestinian Territory, Occupied</option>
                                    <option value="PA" data-kt-select2-country="assets/media/flags/panama.svg">
                                        Panama</option>
                                    <option value="PG"
                                        data-kt-select2-country="assets/media/flags/papua-new-guinea.svg">
                                        Papua New Guinea</option>
                                    <option value="PY" data-kt-select2-country="assets/media/flags/paraguay.svg">
                                        Paraguay</option>
                                    <option value="PE" data-kt-select2-country="assets/media/flags/peru.svg">
                                        Peru</option>
                                    <option value="PH" data-kt-select2-country="assets/media/flags/philippines.svg">
                                        Philippines</option>
                                    <option value="PL" data-kt-select2-country="assets/media/flags/poland.svg">
                                        Poland</option>
                                    <option value="PT" data-kt-select2-country="assets/media/flags/portugal.svg">
                                        Portugal</option>
                                    <option value="PR" data-kt-select2-country="assets/media/flags/puerto-rico.svg">
                                        Puerto Rico</option>
                                    <option value="QA" data-kt-select2-country="assets/media/flags/qatar.svg">
                                        Qatar</option>
                                    <option value="RO" data-kt-select2-country="assets/media/flags/romania.svg">
                                        Romania</option>
                                    <option value="RU" data-kt-select2-country="assets/media/flags/russia.svg">
                                        Russian Federation</option>
                                    <option value="RW" data-kt-select2-country="assets/media/flags/rwanda.svg">
                                        Rwanda</option>
                                    <option value="BL" data-kt-select2-country="assets/media/flags/st-barts.svg">
                                        Saint Barthélemy</option>
                                    <option value="KN"
                                        data-kt-select2-country="assets/media/flags/saint-kitts-and-nevis.svg">
                                        Saint Kitts and Nevis</option>
                                    <option value="LC" data-kt-select2-country="assets/media/flags/st-lucia.svg">
                                        Saint Lucia</option>
                                    <option value="MF" data-kt-select2-country="assets/media/flags/sint-maarten.svg">
                                        Saint Martin (French part)</option>
                                    <option value="VC"
                                        data-kt-select2-country="assets/media/flags/st-vincent-and-the-grenadines.svg">
                                        Saint Vincent and the Grenadines</option>
                                    <option value="WS" data-kt-select2-country="assets/media/flags/samoa.svg">
                                        Samoa</option>
                                    <option value="SM" data-kt-select2-country="assets/media/flags/san-marino.svg">
                                        San Marino</option>
                                    <option value="ST"
                                        data-kt-select2-country="assets/media/flags/sao-tome-and-prince.svg">
                                        Sao Tome and Principe</option>
                                    <option value="SA" data-kt-select2-country="assets/media/flags/saudi-arabia.svg">
                                        Saudi Arabia</option>
                                    <option value="SN" data-kt-select2-country="assets/media/flags/senegal.svg">
                                        Senegal</option>
                                    <option value="RS" data-kt-select2-country="assets/media/flags/serbia.svg">
                                        Serbia</option>
                                    <option value="SC" data-kt-select2-country="assets/media/flags/seychelles.svg">
                                        Seychelles</option>
                                    <option value="SL" data-kt-select2-country="assets/media/flags/sierra-leone.svg">
                                        Sierra Leone</option>
                                    <option value="SG" data-kt-select2-country="assets/media/flags/singapore.svg">
                                        Singapore</option>
                                    <option value="SX" data-kt-select2-country="assets/media/flags/sint-maarten.svg">
                                        Sint Maarten (Dutch part)</option>
                                    <option value="SK" data-kt-select2-country="assets/media/flags/slovakia.svg">
                                        Slovakia</option>
                                    <option value="SI" data-kt-select2-country="assets/media/flags/slovenia.svg">
                                        Slovenia</option>
                                    <option value="SB"
                                        data-kt-select2-country="assets/media/flags/solomon-islands.svg">
                                        Solomon Islands</option>
                                    <option value="SO" data-kt-select2-country="assets/media/flags/somalia.svg">
                                        Somalia</option>
                                    <option value="ZA" data-kt-select2-country="assets/media/flags/south-africa.svg">
                                        South Africa</option>
                                    <option value="KR" data-kt-select2-country="assets/media/flags/south-korea.svg">
                                        South Korea</option>
                                    <option value="SS" data-kt-select2-country="assets/media/flags/south-sudan.svg">
                                        South Sudan</option>
                                    <option value="ES" data-kt-select2-country="assets/media/flags/spain.svg">
                                        Spain</option>
                                    <option value="LK" data-kt-select2-country="assets/media/flags/sri-lanka.svg">
                                        Sri Lanka</option>
                                    <option value="SD" data-kt-select2-country="assets/media/flags/sudan.svg">
                                        Sudan</option>
                                    <option value="SR" data-kt-select2-country="assets/media/flags/suriname.svg">
                                        Suriname</option>
                                    <option value="SZ" data-kt-select2-country="assets/media/flags/swaziland.svg">
                                        Swaziland</option>
                                    <option value="SE" data-kt-select2-country="assets/media/flags/sweden.svg">
                                        Sweden</option>
                                    <option value="CH" data-kt-select2-country="assets/media/flags/switzerland.svg">
                                        Switzerland</option>
                                    <option value="SY" data-kt-select2-country="assets/media/flags/syria.svg">
                                        Syrian Arab Republic</option>
                                    <option value="TW" data-kt-select2-country="assets/media/flags/taiwan.svg">
                                        Taiwan, Province of China</option>
                                    <option value="TJ" data-kt-select2-country="assets/media/flags/tajikistan.svg">
                                        Tajikistan</option>
                                    <option value="TZ" data-kt-select2-country="assets/media/flags/tanzania.svg">
                                        Tanzania, United Republic of</option>
                                    <option value="TH" data-kt-select2-country="assets/media/flags/thailand.svg">
                                        Thailand</option>
                                    <option value="TG" data-kt-select2-country="assets/media/flags/togo.svg">
                                        Togo</option>
                                    <option value="TK" data-kt-select2-country="assets/media/flags/tokelau.svg">
                                        Tokelau</option>
                                    <option value="TO" data-kt-select2-country="assets/media/flags/tonga.svg">
                                        Tonga</option>
                                    <option value="TT"
                                        data-kt-select2-country="assets/media/flags/trinidad-and-tobago.svg">
                                        Trinidad and Tobago</option>
                                    <option value="TN" data-kt-select2-country="assets/media/flags/tunisia.svg">
                                        Tunisia</option>
                                    <option value="TR" data-kt-select2-country="assets/media/flags/turkey.svg">
                                        Turkey</option>
                                    <option value="TM"
                                        data-kt-select2-country="assets/media/flags/turkmenistan.svg">
                                        Turkmenistan</option>
                                    <option value="TC"
                                        data-kt-select2-country="assets/media/flags/turks-and-caicos.svg">
                                        Turks and Caicos Islands</option>
                                    <option value="TV" data-kt-select2-country="assets/media/flags/tuvalu.svg">
                                        Tuvalu</option>
                                    <option value="UG" data-kt-select2-country="assets/media/flags/uganda.svg">
                                        Uganda</option>
                                    <option value="UA" data-kt-select2-country="assets/media/flags/ukraine.svg">
                                        Ukraine</option>
                                    <option value="AE"
                                        data-kt-select2-country="assets/media/flags/united-arab-emirates.svg">
                                        United Arab Emirates</option>
                                    <option value="GB"
                                        data-kt-select2-country="assets/media/flags/united-kingdom.svg">
                                        United Kingdom</option>
                                    <option value="US"
                                        data-kt-select2-country="assets/media/flags/united-states.svg" selected>
                                        United States</option>
                                    <option value="UY" data-kt-select2-country="assets/media/flags/uruguay.svg">
                                        Uruguay</option>
                                    <option value="UZ" data-kt-select2-country="assets/media/flags/uzbekistan.svg">
                                        Uzbekistan</option>
                                    <option value="VU" data-kt-select2-country="assets/media/flags/vanuatu.svg">
                                        Vanuatu</option>
                                    <option value="VE" data-kt-select2-country="assets/media/flags/venezuela.svg">
                                        Venezuela, Bolivarian Republic of</option>
                                    <option value="VN" data-kt-select2-country="assets/media/flags/vietnam.svg">
                                        Vietnam</option>
                                    <option value="VI"
                                        data-kt-select2-country="assets/media/flags/virgin-islands.svg">
                                        Virgin Islands</option>
                                    <option value="YE" data-kt-select2-country="assets/media/flags/yemen.svg">
                                        Yemen</option>
                                    <option value="ZM" data-kt-select2-country="assets/media/flags/zambia.svg">
                                        Zambia</option>
                                    <option value="ZW" data-kt-select2-country="assets/media/flags/zimbabwe.svg">
                                        Zimbabwe</option>
                                </select>
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e0d5a645a22" role="tab">JAVASCRIPT</a>
                                    </li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e0d5a645a26" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e0d5a645a22"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">// Format options
var optionFormat = function(item) {
    if ( !item.id ) {
        return item.text;
    }

    var span = document.createElement(&#039;span&#039;);
    var imgUrl = item.element.getAttribute(&#039;data-kt-select2-country&#039;);
    var template = &#039;&#039;;

    template += &#039;&lt;img src=&quot;&#039; + imgUrl + &#039;&quot; class=&quot;rounded-circle h-20px me-2&quot; alt=&quot;image&quot;/&gt;&#039;;
    template += item.text;

    span.innerHTML = template;

    return $(span);
}

// Init Select2 --- more info: https://select2.org/
$(&#039;#kt_docs_select2_country&#039;).select2({
    templateSelection: optionFormat,
    templateResult: optionFormat
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e0d5a645a26" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;div class=&quot;form-floating border rounded&quot;&gt;
    &lt;select class=&quot;form-select form-select-transparent&quot; placeholder=&quot;...&quot; id=&quot;kt_docs_select2_country&quot;&gt;
        &lt;option&gt;&lt;/option&gt;
        &lt;option value=&quot;AF&quot; data-kt-select2-country=&quot;assets/media/flags/afghanistan.svg&quot;&gt;Afghanistan&lt;/option&gt;
        &lt;option value=&quot;AX&quot; data-kt-select2-country=&quot;assets/media/flags/aland-islands.svg&quot;&gt;Aland Islands&lt;/option&gt;
        ...
    &lt;/select&gt;
    &lt;label for=&quot;kt_docs_select2_country&quot;&gt;Select a country&lt;/label&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="users-with-avatars" data-kt-scroll-offset="50">
                            <a href="#users-with-avatars"></a>

                            Users With Avatars
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Initialize Select2 programmatically and add <code>data-kt-select2-user</code> attribute
                            with the path to the user avatar to create a list with user portraits.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <label for="kt_docs_select2_users" class="form-label">Select a user</label>
                                <select class="form-select" data-placeholder="Select a user"
                                    id="kt_docs_select2_users">
                                    <option></option>
                                    <option value="0" data-kt-select2-user="assets/media/avatars/300-6.jpg">
                                        Emma Smith</option>
                                    <option value="2" data-kt-select2-user="assets/media/avatars/300-1.jpg">
                                        Max Smith</option>
                                    <option value="3" data-kt-select2-user="assets/media/avatars/300-5.jpg">
                                        Sean Bean</option>
                                    <option value="4" data-kt-select2-user="assets/media/avatars/300-25.jpg">
                                        Brian Cox</option>
                                    <option value="6" data-kt-select2-user="assets/media/avatars/300-9.jpg">
                                        Francis Mitcham</option>
                                    <option value="9" data-kt-select2-user="assets/media/avatars/300-23.jpg">
                                        Dan Wilson</option>
                                    <option value="11" data-kt-select2-user="assets/media/avatars/300-12.jpg">
                                        Ana Crown</option>
                                    <option value="13" data-kt-select2-user="assets/media/avatars/300-13.jpg">
                                        John Miller</option>
                                    <option value="15" data-kt-select2-user="assets/media/avatars/300-21.jpg">
                                        Ethan Wilder</option>
                                </select>
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="pt-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e0d5a645a62" role="tab">JAVASCRIPT</a>
                                    </li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e0d5a645a63" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e0d5a645a62"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">// Format options
var optionFormat = function(item) {
    if ( !item.id ) {
        return item.text;
    }

    var span = document.createElement(&#039;span&#039;);
    var imgUrl = item.element.getAttribute(&#039;data-kt-select2-user&#039;);
    var template = &#039;&#039;;

    template += &#039;&lt;img src=&quot;&#039; + imgUrl + &#039;&quot; class=&quot;rounded-circle h-20px me-2&quot; alt=&quot;image&quot;/&gt;&#039;;
    template += item.text;

    span.innerHTML = template;

    return $(span);
}

// Init Select2 --- more info: https://select2.org/
$(&#039;#kt_docs_select2_country&#039;).select2({
    templateSelection: optionFormat,
    templateResult: optionFormat
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e0d5a645a63" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;div class=&quot;form-floating border rounded&quot;&gt;
    &lt;select class=&quot;form-select form-select-transparent&quot; data-placeholder=&quot;...&quot; id=&quot;kt_docs_select2_users&quot;&gt;
        &lt;option&gt;&lt;/option&gt;
        &lt;option value=&quot;0&quot; data-kt-select2-user=&quot;assets/media/avatars/300-6.jpg&quot;&gt;Emma Smith&lt;/option&gt;
        &lt;option value=&quot;1&quot; data-kt-select2-user=&quot;assets/media/avatars/300-1.jpg&quot;&gt;Max Smith&lt;/option&gt;
        ...
    &lt;/select&gt;
    &lt;label for=&quot;kt_docs_select2_users&quot;&gt;Select a user&lt;/label&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->


                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="rich-content" data-kt-scroll-offset="50">
                            <a href="#rich-content"></a>

                            Rich Content
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Initialize Select2 programmatically and add <code>data-kt-rich-content-icon</code>
                            attribute with the path to the user avatar to create a list with user portraits.
                            Additionally, add <code>data-kt-rich-content-subcontent</code> attribute to include
                            additional sub content elements.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <label for="kt_docs_select2_rich_content" class="form-label">Select an
                                    option</label>
                                <!--begin::Select2-->
                                <select id="kt_docs_select2_rich_content" class="form-select"
                                    data-placeholder="Select an option">
                                    <option></option>
                                    <option value="0" data-kt-rich-content-subcontent="smith@kpmg.com"
                                        data-kt-rich-content-icon="assets/media/avatars/300-6.jpg" selected>Emma
                                        Smith</option>
                                    <option value="1" data-kt-rich-content-subcontent="max@kt.com"
                                        data-kt-rich-content-icon="assets/media/avatars/300-1.jpg">
                                        Max Smith</option>
                                    <option value="2" data-kt-rich-content-subcontent="sean@dellito.com"
                                        data-kt-rich-content-icon="assets/media/avatars/300-5.jpg">
                                        Sean Bean</option>
                                    <option value="3" data-kt-rich-content-subcontent="brian@exchange.com"
                                        data-kt-rich-content-icon="assets/media/avatars/300-25.jpg">
                                        Brian Cox</option>
                                </select>
                                <!--end::Select2-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="pt-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e0d5a645a8a" role="tab">JAVASCRIPT</a>
                                    </li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e0d5a645a8b" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e0d5a645a8a"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">// Format options
const optionFormat = (item) =&gt; {
    if (!item.id) {
        return item.text;
    }

    var span = document.createElement(&#039;span&#039;);
    var template = &#039;&#039;;

    template += &#039;&lt;div class=&quot;d-flex align-items-center&quot;&gt;&#039;;
    template += &#039;&lt;img src=&quot;&#039; + item.element.getAttribute(&#039;data-kt-rich-content-icon&#039;) + &#039;&quot; class=&quot;rounded-circle h-40px me-3&quot; alt=&quot;&#039; + item.text + &#039;&quot;/&gt;&#039;;
    template += &#039;&lt;div class=&quot;d-flex flex-column&quot;&gt;&#039;
    template += &#039;&lt;span class=&quot;fs-4 fw-bold lh-1&quot;&gt;&#039; + item.text + &#039;&lt;/span&gt;&#039;;
    template += &#039;&lt;span class=&quot;text-muted fs-5&quot;&gt;&#039; + item.element.getAttribute(&#039;data-kt-rich-content-subcontent&#039;) + &#039;&lt;/span&gt;&#039;;
    template += &#039;&lt;/div&gt;&#039;;
    template += &#039;&lt;/div&gt;&#039;;

    span.innerHTML = template;

    return $(span);
}

// Init Select2 --- more info: https://select2.org/
$(&#039;#kt_docs_select2_rich_content&#039;).select2({
    placeholder: &quot;Select an option&quot;,
    minimumResultsForSearch: Infinity,
    templateSelection: optionFormat,
    templateResult: optionFormat
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e0d5a645a8b" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;div class=&quot;border rounded&quot;&gt;
&lt;select id=&quot;kt_docs_select2_rich_content&quot; class=&quot;form-select form-select-transparent&quot; name=&quot;...&quot; data-placeholder=&quot;...&quot;&gt;
        &lt;option&gt;&lt;/option&gt;
        &lt;option value=&quot;0&quot; data-kt-rich-content-subcontent=&quot;...&quot; data-kt-rich-content-icon=&quot;assets/media/avatars/300-6.jpg&quot;&gt;Option Label 1&lt;/option&gt;
        &lt;option value=&quot;1&quot; data-kt-rich-content-subcontent=&quot;...&quot; data-kt-rich-content-icon=&quot;assets/media/avatars/300-6.jpg&quot;&gt;Option Label 1&lt;/option&gt;
        ...
    &lt;/select&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->


                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="floating-labels" data-kt-scroll-offset="50">
                            <a href="#floating-labels"></a>

                            Floating Labels
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use Select2 with Bootstrap Floating Labels:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Input group-->
                                <div class="form-floating mb-7">
                                    <select class="form-select" id="kt_docs_select2_floating_labels_1">
                                        <option></option>
                                        <option value="0"
                                            data-kt-select2-image="assets/media/svg/coins/bitcoin.svg" selected>
                                            Bitcoin/BTC</option>
                                        <option value="1"
                                            data-kt-select2-image="assets/media/svg/coins/ethereum.svg">
                                            Ethereum/ETH</option>
                                        <option value="2"
                                            data-kt-select2-image="assets/media/svg/coins/filecoin.svg">
                                            Filecoin/FLE</option>
                                        <option value="3"
                                            data-kt-select2-image="assets/media/svg/coins/chainlink.svg">
                                            Chainlink/CIN</option>
                                        <option value="4"
                                            data-kt-select2-image="assets/media/svg/coins/binance.svg">
                                            Binance/BCN</option>
                                    </select>
                                    <label>Coin Name</label>
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="form-floating form-control-solid-bg rounded">
                                    <select class="form-select form-select-transparent"
                                        id="kt_docs_select2_floating_labels_2" data-allow-clear="true">
                                        <option> </option>
                                        <option value="0"
                                            data-kt-select2-image="assets/media/svg/coins/bitcoin.svg" selected>
                                            Bitcoin/BTC</option>
                                        <option value="1"
                                            data-kt-select2-image="assets/media/svg/coins/ethereum.svg">
                                            Ethereum/ETH</option>
                                        <option value="2"
                                            data-kt-select2-image="assets/media/svg/coins/filecoin.svg">
                                            Filecoin/FLE</option>
                                        <option value="3"
                                            data-kt-select2-image="assets/media/svg/coins/chainlink.svg">
                                            Chainlink/CIN</option>
                                        <option value="4"
                                            data-kt-select2-image="assets/media/svg/coins/binance.svg">
                                            Binance/BCN</option>
                                    </select>
                                    <label for="floatingInputValue">Solid Style</label>
                                </div>
                                <!--end::Input group-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="pt-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e0d5a645ab5" role="tab">HTML</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e0d5a645ab6" role="tab">JAVASCRIPT</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e0d5a645ab5"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Input group--&gt;
&lt;div class=&quot;form-floating&quot;&gt;
    &lt;select class=&quot;form-select&quot;&gt;
        &lt;option&gt;&lt;/option&gt;
    &lt;/select&gt;
    &lt;label&gt;Coin Name&lt;/label&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;

&lt;!--begin::Input group--&gt;
&lt;div class=&quot;form-floating form-control-solid-bg rounded&quot;&gt;
    &lt;select class=&quot;form-select form-select-transparent&quot; id=&quot;kt_docs_select2_floating_labels_2&quot; data-allow-clear=&quot;true&quot;&gt;
        &lt;option&gt;&lt;/option&gt;
    &lt;/select&gt;
    &lt;label for=&quot;floatingInputValue&quot;&gt;Coin Name&lt;/label&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e0d5a645ab6" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">var optionFormat = function(item) {
    if ( !item.id ) {
        return item.text;
    }

    var span = document.createElement(&#039;span&#039;);
    var template = &#039;&#039;;

    template += &#039;&lt;img src=&quot;&#039; + item.element.getAttribute(&#039;data-kt-select2-image&#039;) + &#039;&quot; class=&quot;rounded-circle h-20px me-2&quot; alt=&quot;image&quot;/&gt;&#039;;
    template += item.text;

    span.innerHTML = template;

    return $(span);
}

// Init Select2 --- more info: https://select2.org/
$(&#039;#kt_docs_select2_floating_labels_1&#039;).select2({
    placeholder: &quot;Select coin&quot;,
    minimumResultsForSearch: Infinity,
    templateSelection: optionFormat,
    templateResult: optionFormat
});

// Init Select2 --- more info: https://select2.org/
$(&#039;#kt_docs_select2_floating_labels_2&#039;).select2({
    placeholder: &quot;Select coin&quot;,
    minimumResultsForSearch: Infinity,
    templateSelection: optionFormat,
    templateResult: optionFormat
});</code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="validation-states" data-kt-scroll-offset="50">
                            <a href="#validation-states"></a>

                            Validation States
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            The standard <a href="https://getbootstrap.com/docs/5.2/forms/validation/"
                                class="fw-semibold">Bootstrap's Form Validation</a>&nbsp;
                            classes are supported:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <form class="was-validated">
                                    <div class="mb-10">
                                        <label for="" class="form-label">Valid state</label>
                                        <select class="form-select form-select-solid is-valid" data-control="select2"
                                            data-placeholder="Select an option" data-allow-clear="true"
                                            multiple="multiple">
                                            <option></option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                        </select>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>

                                    <div class="0">
                                        <label for="" class="form-label">Invalid state</label>
                                        <select class="form-select form-select-solid is-invalid" data-control="select2"
                                            data-placeholder="Select an option" data-allow-clear="true"
                                            multiple="multiple">
                                            <option></option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                        </select>
                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                            Please choose a username.
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;form class=&quot;was-validated&quot;&gt;
    &lt;div class=&quot;mb-10&quot;&gt;
        &lt;label for=&quot;&quot; class=&quot;form-label&quot;&gt;Valid state&lt;/label&gt;
        &lt;select class=&quot;form-select form-select-solid is-valid&quot; data-control=&quot;select2&quot; data-placeholder=&quot;Select an option&quot; data-allow-clear=&quot;true&quot; multiple=&quot;multiple&quot;&gt;
            &lt;option&gt;&lt;/option&gt;
            &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
            &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
            &lt;option value=&quot;3&quot;&gt;Option 3&lt;/option&gt;
            &lt;option value=&quot;4&quot;&gt;Option 4&lt;/option&gt;
            &lt;option value=&quot;5&quot;&gt;Option 5&lt;/option&gt;
        &lt;/select&gt;
        &lt;div class=&quot;valid-feedback&quot;&gt;
            Looks good!
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class=&quot;0&quot;&gt;
        &lt;label for=&quot;&quot; class=&quot;form-label&quot;&gt;Invalid state&lt;/label&gt;
        &lt;select class=&quot;form-select form-select-solid is-invalid&quot; data-control=&quot;select2&quot; data-placeholder=&quot;Select an option&quot; data-allow-clear=&quot;true&quot; multiple=&quot;multiple&quot;&gt;
            &lt;option&gt;&lt;/option&gt;
            &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
            &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
            &lt;option value=&quot;3&quot;&gt;Option 3&lt;/option&gt;
            &lt;option value=&quot;4&quot;&gt;Option 4&lt;/option&gt;
            &lt;option value=&quot;5&quot;&gt;Option 5&lt;/option&gt;
        &lt;/select&gt;
        &lt;div id=&quot;validationServerUsernameFeedback&quot; class=&quot;invalid-feedback&quot;&gt;
            Please choose a username.
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/form&gt;</code></pre>
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
                                <a href="#disabled" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Disabled</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#group" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Group</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#sizes" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Sizes</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#bootstrap-input-group" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Bootstrap Input Group</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#clear-selection" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Clear Selection</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#hide-search" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Hide Search</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#dropdown-width" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Dropdown Width</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#multiple-selection" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Multiple Selection</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#hierarchical-options" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Hierarchical Options</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#bootstrap-modal" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Bootstrap Modal</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#countries-with-flags" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Countries With Flags</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#users-with-avatars" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Users With Avatars</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#rich-content" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Rich Content</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#floating-labels" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Floating Labels</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#validation-states" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Validation States</span>
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
    <script src="{{ asset('assets/js/custom/documentation/forms/select2.js') }}"></script>
    <!--end::Vendors Javascript-->
@endsection


