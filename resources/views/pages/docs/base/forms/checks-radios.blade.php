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
                            Metronic extends the <a href="https://getbootstrap.com/docs/5.2/forms/checks-radios/"
                                class="fw-semibold">Bootstrap Checks and Radios</a>&nbsp;
                            through the SASS variables in <code>src/sass/components/_variables.scss</code> and adds
                            additonal options for the form elements in <code>src/sass/components/forms/</code>.
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="checkbox" data-kt-scroll-offset="50">
                            <a href="#checkbox"></a>

                            Checkbox
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Default checkbox examples
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5 mb-5">
                            <div class="rounded border p-10">
                                <div class="mb-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault" />
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Default state
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                            checked />
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Checked state
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-0">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="kt_check_indeterminate_1" />
                                        <label class="form-check-label" for="kt_check_indeterminate_1">
                                            Indeterminate state
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68dffd2b49ec5" role="tab">HTML</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68dffd2b49ec9" role="tab">JAVASCRIPT</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68dffd2b49ec5" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;div class=&quot;form-check&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexCheckDefault&quot; /&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexCheckDefault&quot;&gt;
        Default state
    &lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexCheckChecked&quot; checked /&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexCheckChecked&quot;&gt;
        Checked state
    &lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;kt_check_indeterminate_1&quot; checked /&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;kt_check_indeterminate_1&quot;&gt;
        Indeterminate state
    &lt;/label&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68dffd2b49ec9" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript"><code class="language-javascript">// Set a checkbox to indeterminate state
document.querySelector(&#039;#kt_check_indeterminate_1&#039;).indeterminate = true;</code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->

                        <!--begin::Block-->
                        <div class="pt-20 pb-5">
                            Use <code>.form-check-custom</code> and <code>.form-check-solid</code> class with
                            <code>.form-check</code> to set custom layout with solid background style for a form
                            check:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-10">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="kt_checkbox_1_2" />
                                        <label class="form-check-label" for="kt_checkbox_1_2">
                                            Default
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-10">
                                    <label class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" />
                                        <span class="form-check-label">
                                            Without id linking
                                        </span>
                                    </label>
                                </div>

                                <div class="mb-10">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="kt_checkbox_1_3" checked="checked" />
                                        <label class="form-check-label" for="kt_checkbox_1_3">
                                            Checked state
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-10">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="kt_check_indeterminate_2" />
                                        <label class="form-check-label" for="kt_check_indeterminate_2">
                                            Indeterminate state
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-10">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" disabled
                                            id="kt_checkbox_1_4" />
                                        <label class="form-check-label" for="kt_checkbox_1_4">
                                            Disabled state
                                        </label>
                                    </div>
                                </div>

                                <!--begin::Code-->
                                <div class="py-5">
                                    <!--begin::Highlight-->
                                    <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <ul class="nav nav-pills" role="tablist">
                                            <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                                    href="#kt_highlight_68dffd2b49ede" role="tab">HTML</a>
                                            </li>
                                            <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                                    href="#kt_highlight_68dffd2b49ee0" role="tab">JAVASCRIPT</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="kt_highlight_68dffd2b49ede"
                                                role="tabpanel">
                                                <div class="highlight-code">
                                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;form-check form-check-custom form-check-solid&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;1&quot; id=&quot;flexCheckDefault&quot;/&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexCheckDefault&quot;&gt;
        Default
    &lt;/label&gt;
&lt;/div&gt;

&lt;label class=&quot;form-check form-check-custom form-check-solid&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;1&quot;/&gt;
    &lt;span class=&quot;form-check-label&quot;&gt;
        Without id linking
    &lt;/span&gt;
&lt;/label&gt;

&lt;div class=&quot;form-check form-check-custom form-check-solid&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;1&quot; id=&quot;flexCheckChecked&quot; checked=&quot;checked&quot; /&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexCheckChecked&quot;&gt;
        Checked state
    &lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;mb-0&quot;&gt;
    &lt;div class=&quot;form-check&quot;&gt;
        &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;kt_check_indeterminate_1&quot; checked /&gt;
        &lt;label class=&quot;form-check-label&quot; for=&quot;kt_check_indeterminate_1&quot;&gt;
            Indeterminate state
        &lt;/label&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-check-custom form-check-solid&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;1&quot; disabled id=&quot;flexCheckDisabled&quot; /&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexCheckDisabled&quot;&gt;
        Disabled state
    &lt;/label&gt;
&lt;/div&gt;</code></pre>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade " id="kt_highlight_68dffd2b49ee0" role="tabpanel">
                                                <div class="highlight-code">
                                                    <pre class="language-javascript"><code class="language-javascript">// Set a checkbox to indeterminate state
document.querySelector(&#039;#kt_check_indeterminate_2&#039;).indeterminate = true;</code></pre>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end::Highlight-->
                                </div>
                                <!--end::Code-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="pt-20 pb-5">
                            Use <code>.form-check-{success, danger, warning}</code> classes for checkbox and radio
                            to change their checked states:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-10">
                                    <div class="form-check form-check-custom form-check-success form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" checked />
                                        <label class="form-check-label" for="">
                                            Success
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-10">
                                    <div class="form-check form-check-custom form-check-danger form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" checked />
                                        <label class="form-check-label" for="">
                                            Danger
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-10">
                                    <div class="form-check form-check-custom form-check-warning form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" checked />
                                        <label class="form-check-label" for="">
                                            Warning
                                        </label>
                                    </div>
                                </div>

                                <!--begin::Code-->
                                <div class="py-0">
                                    <!--begin::Highlight-->
                                    <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;div class=&quot;form-check form-check-custom form-check-success form-check-solid&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; checked /&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;&quot;&gt;
        Success
    &lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-check-custom form-check-danger form-check-solid&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; checked /&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;&quot;&gt;
        Danger
    &lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-check-custom form-check-warning form-check-solid&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; checked /&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;&quot;&gt;
        Warning
    &lt;/label&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div><!--end::Highlight-->
                                </div>
                                <!--end::Code-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="pt-20 pb-5">
                            Use <code>.form-check-{sm, lg}</code> fixed size classes for checkbox and radio to
                            change their sizes:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-10">
                                    <div class="form-check form-check-custom form-check-solid form-check-lg">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckboxLg" />
                                        <label class="form-check-label" for="flexCheckboxLg">
                                            Large checkbox
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-10">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckboxSm" />
                                        <label class="form-check-label" for="flexCheckboxSm">
                                            Default radio
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-10">
                                    <div class="form-check form-check-custom form-check-solid form-check-sm">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexRadioLg" />
                                        <label class="form-check-label" for="flexRadioLg">
                                            Small checkbox
                                        </label>
                                    </div>
                                </div>

                                <!--begin::Code-->
                                <div class="py-0">
                                    <!--begin::Highlight-->
                                    <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;div class=&quot;form-check form-check-custom form-check-solid form-check-lg&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexCheckboxLg&quot;/&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexCheckboxLg&quot;&gt;
        Large checkbox
    &lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-check-custom form-check-solid form-check-lg&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; value=&quot;&quot; id=&quot;flexCheckboxSm&quot;  /&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexCheckboxSm&quot;&gt;
        Large radio
    &lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-check-custom form-check-solid form-check-sm&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexRadioLg&quot;/&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexRadioLg&quot;&gt;
        Small checkbox
    &lt;/label&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div><!--end::Highlight-->
                                </div>
                                <!--end::Code-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="pt-20 pb-5">
                            Use <a class="fw-semibold" href="base/utilities#width-and-height" target="_blank">Custom Size
                                Classes</a>&nbsp;
                            for checkbox and radio to set custom sizes:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-10 d-flex">
                                    <div class="form-check form-check-custom form-check-solid me-10">
                                        <input class="form-check-input h-30px w-30px" type="checkbox" value=""
                                            id="flexCheckbox30" />
                                        <label class="form-check-label" for="flexCheckbox30">
                                            30px
                                        </label>
                                    </div>

                                    <div class="form-check form-check-custom form-check-solid me-10">
                                        <input class="form-check-input h-40px w-40px" type="checkbox" value=""
                                            id="flexCheckbox40" />
                                        <label class="form-check-label" for="flexCheckbox40">
                                            40px
                                        </label>
                                    </div>

                                    <div class="form-check form-check-custom form-check-solid me-10">
                                        <input class="form-check-input h-50px w-50px" type="checkbox" value=""
                                            id="flexCheckbox50" />
                                        <label class="form-check-label" for="flexCheckbox50">
                                            50px
                                        </label>
                                    </div>
                                </div>


                                <!--begin::Code-->
                                <div class="py-0">
                                    <!--begin::Highlight-->
                                    <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;div class=&quot;form-check form-check-custom form-check-solid me-10&quot;&gt;
    &lt;input class=&quot;form-check-input h-30px w-30px&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexCheckbox30&quot;/&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexCheckbox30&quot;&gt;
        30px
    &lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-check-custom form-check-solid me-10&quot;&gt;
    &lt;input class=&quot;form-check-input h-40px w-40px&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexCheckbox40&quot;/&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexCheckbox40&quot;&gt;
        40px
    &lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-check-custom form-check-solid me-10&quot;&gt;
    &lt;input class=&quot;form-check-input h-50px w-50px&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexCheckbox50&quot;/&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexCheckbox50&quot;&gt;
        50px
    &lt;/label&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div><!--end::Highlight-->
                                </div>
                                <!--end::Code-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="pt-20 pb-5">
                            Use a checkbox and radio inputs with image through <code>data-kt-buttons</code>
                            parameters to automatically handle radio checked state for images as well:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Row-->
                                <div class="row mw-500px mb-5" data-kt-buttons="true"
                                    data-kt-buttons-target=".form-check-image, .form-check-input">
                                    <!--begin::Col-->
                                    <div class="col-4">
                                        <label class="form-check-image active">
                                            <div class="form-check-wrapper">
                                                <img src="assets/media/stock/600x400/img-1.jpg" />
                                            </div>

                                            <div class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" checked value="1"
                                                    name="option2" />
                                                <div class="form-check-label">
                                                    Option 1
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-4">
                                        <label class="form-check-image">
                                            <div class="form-check-wrapper">
                                                <img src="assets/media/stock/600x400/img-2.jpg" />
                                            </div>

                                            <div class="form-check form-check-custom form-check-solid me-10">
                                                <input class="form-check-input" type="checkbox" value="1"
                                                    name="option2" id="text_wow" />
                                                <div class="form-check-label">
                                                    Option 2
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-4">
                                        <label class="form-check-image">
                                            <div class="form-check-wrapper">
                                                <img src="assets/media/stock/600x400/img-3.jpg" />
                                            </div>

                                            <div class="form-check form-check-custom form-check-solid me-10">
                                                <input class="form-check-input" type="checkbox" value="1"
                                                    name="option2" />
                                                <div class="form-check-label">
                                                    Option 3
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->

                                <!--begin::Code-->
                                <div class="py-0">
                                    <!--begin::Highlight-->
                                    <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Row--&gt;
&lt;div class=&quot;row mw-500px mb-5&quot; data-kt-buttons=&quot;true&quot; data-kt-buttons-target=&quot;.form-check-image, .form-check-input&quot;&gt;&gt;
    &lt;!--begin::Col--&gt;
    &lt;div class=&quot;col-4&quot;&gt;
        &lt;label class=&quot;form-check-image active&quot;&gt;
            &lt;div class=&quot;form-check-wrapper&quot;&gt;
                &lt;img src=&quot;assets/media/stock/600x400/img-1.jpg&quot;/&gt;
            &lt;/div&gt;

            &lt;div class=&quot;form-check form-check-custom form-check-solid&quot;&gt;
                &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; checked value=&quot;1&quot; name=&quot;option2&quot;/&gt;
                &lt;div class=&quot;form-check-label&quot;&gt;
                    Option 1
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/label&gt;
    &lt;/div&gt;
    &lt;!--end::Col--&gt;

    &lt;!--begin::Col--&gt;
    &lt;div class=&quot;col-4&quot;&gt;
        &lt;label class=&quot;form-check-image&quot;&gt;
            &lt;div class=&quot;form-check-wrapper&quot;&gt;
                &lt;img src=&quot;assets/media/stock/600x400/img-2.jpg&quot;/&gt;
            &lt;/div&gt;

            &lt;div class=&quot;form-check form-check-custom form-check-solid me-10&quot;&gt;
                &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;1&quot; name=&quot;option2&quot; id=&quot;text_wow&quot;/&gt;
                &lt;div class=&quot;form-check-label&quot;&gt;
                    Option 2
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/label&gt;
    &lt;/div&gt;
    &lt;!--end::Col--&gt;

    &lt;!--begin::Col--&gt;
    &lt;div class=&quot;col-4&quot;&gt;
        &lt;label class=&quot;form-check-image&quot;&gt;
            &lt;div class=&quot;form-check-wrapper&quot;&gt;
                &lt;img src=&quot;assets/media/stock/600x400/img-3.jpg&quot;/&gt;
            &lt;/div&gt;

            &lt;div class=&quot;form-check form-check-custom form-check-solid me-10&quot;&gt;
                &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;1&quot; name=&quot;option2&quot;/&gt;
                &lt;div class=&quot;form-check-label&quot;&gt;
                    Option 3
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/label&gt;
    &lt;/div&gt;
    &lt;!--end::Col--&gt;
&lt;/div&gt;
&lt;!--end::Row--&gt;</code></pre>
                                        </div>
                                    </div><!--end::Highlight-->
                                </div>
                                <!--end::Code-->
                            </div>
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="radio" data-kt-scroll-offset="50">
                            <a href="#radio"></a>

                            Radio
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Default radio examples
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5 mb-5">
                            <div class="rounded border p-10">
                                <div class="mb-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value=""
                                            id="flexCheckDefault1" name="radio2" />
                                        <label class="form-check-label" for="flexCheckDefault1">
                                            Default radio
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-0">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value=""
                                            id="flexCheckChecked1" name="radio2" checked />
                                        <label class="form-check-label" for="flexCheckChecked1">
                                            Checked radio
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.form-check-custom</code> and <code>.form-check-solid</code> class with
                            <code>.form-check</code> to set custom layout with solid background style for a form
                            check:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-10">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="radio" value=""
                                            id="kt_flexRadioDefault_1_2" />
                                        <label class="form-check-label" for="kt_flexRadioDefault_1_2">
                                            Default radio
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-10">
                                    <label class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="radio" value="" />
                                        <span class="form-check-label">
                                            Without id linking
                                        </span>
                                    </label>
                                </div>

                                <div class="mb-10">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="radio" value=""
                                            id="kt_flexRadioChecked_1_3" checked="checked" />
                                        <label class="form-check-label" for="kt_flexRadioChecked_1_3">
                                            Checked radio
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-10">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="radio" value="" disabled
                                            id="kt_flexRadioDisabled_1_4" />
                                        <label class="form-check-label" for="kt_flexRadioDisabled_1_4">
                                            Disabled radio
                                        </label>
                                    </div>
                                </div>

                                <!--begin::Code-->
                                <div class="py-0">
                                    <!--begin::Highlight-->
                                    <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;div class=&quot;form-check form-check-custom form-check-solid&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; value=&quot;&quot; id=&quot;flexRadioDefault&quot;/&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexRadioDefault&quot;&gt;
        Default radio
    &lt;/label&gt;
&lt;/div&gt;

&lt;label class=&quot;form-check form-check-custom form-check-solid&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; value=&quot;&quot;/&gt;
    &lt;span class=&quot;form-check-label&quot;&gt;
        Without id linking
    &lt;/span&gt;
&lt;/label&gt;

&lt;div class=&quot;form-check form-check-custom form-check-solid&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; value=&quot;&quot; id=&quot;flexRadioChecked&quot; checked=&quot;checked&quot; /&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexRadioChecked&quot;&gt;
        Checked radio
    &lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-check-custom form-check-solid&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; value=&quot;&quot; disabled id=&quot;flexRadioDisabled&quot;/&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexRadioDisabled&quot;&gt;
        Disabled radio
    &lt;/label&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div><!--end::Highlight-->
                                </div>
                                <!--end::Code-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="pt-20 pb-5">
                            Use <code>.form-check-{success, danger, warning}</code> classes for checkbox and radio
                            to change their checked states:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-10">
                                    <div class="form-check form-check-custom form-check-success form-check-solid">
                                        <input class="form-check-input" type="radio" value="" checked
                                            id="flexCheckboxLg" />
                                        <label class="form-check-label" for="flexCheckboxLg">
                                            Success
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-10">
                                    <div class="form-check form-check-custom form-check-danger form-check-solid">
                                        <input class="form-check-input" type="radio" value="" checked
                                            id="flexCheckboxSm" />
                                        <label class="form-check-label" for="flexCheckboxSm">
                                            Danger
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-10">
                                    <div class="form-check form-check-custom form-check-warning form-check-solid">
                                        <input class="form-check-input" type="radio" value="" checked
                                            id="flexRadioLg" />
                                        <label class="form-check-label" for="flexRadioLg">
                                            Warning
                                        </label>
                                    </div>
                                </div>

                                <!--begin::Code-->
                                <div class="py-0">
                                    <!--begin::Highlight-->
                                    <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;div class=&quot;form-check form-check-custom form-check-success form-check-solid&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; value=&quot;&quot; checked id=&quot;flexCheckboxLg&quot;/&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexCheckboxLg&quot;&gt;
        Success
    &lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-check-custom form-check-danger form-check-solid&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; value=&quot;&quot; checked id=&quot;flexCheckboxSm&quot;  /&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexCheckboxSm&quot;&gt;
        Danger
    &lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-check-custom form-check-warning form-check-solid&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; value=&quot;&quot; checked id=&quot;flexRadioLg&quot;/&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexRadioLg&quot;&gt;
        Warning
    &lt;/label&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div><!--end::Highlight-->
                                </div>
                                <!--end::Code-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="pt-20 pb-5">
                            Use <code>.form-check-{sm, lg}</code> fixed size classes for checkbox and radio to
                            change their sizes:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-10">
                                    <div class="form-check form-check-custom form-check-solid form-check-lg">
                                        <input class="form-check-input" type="radio" value=""
                                            id="flexCheckboxLg" />
                                        <label class="form-check-label" for="flexCheckboxLg">
                                            Large radio
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-10">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="radio" value=""
                                            id="flexCheckboxSm" />
                                        <label class="form-check-label" for="flexCheckboxSm">
                                            Large radio
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-10">
                                    <div class="form-check form-check-custom form-check-solid form-check-sm">
                                        <input class="form-check-input" type="radio" value=""
                                            id="flexRadioLg" />
                                        <label class="form-check-label" for="flexRadioLg">
                                            Small radio
                                        </label>
                                    </div>
                                </div>

                                <!--begin::Code-->
                                <div class="py-0">
                                    <!--begin::Highlight-->
                                    <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;div class=&quot;form-check form-check-custom form-check-solid form-check-lg&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; value=&quot;&quot; id=&quot;flexCheckboxLg&quot;/&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexCheckboxLg&quot;&gt;
        Large checkbox
    &lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-check-custom form-check-solid&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; value=&quot;&quot; id=&quot;flexCheckboxSm&quot;  /&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexCheckboxSm&quot;&gt;
        Large radio
    &lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-check-custom form-check-solid form-check-sm&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; value=&quot;&quot; id=&quot;flexRadioLg&quot;/&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexRadioLg&quot;&gt;
        Small checkbox
    &lt;/label&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div><!--end::Highlight-->
                                </div>
                                <!--end::Code-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="pt-20 pb-5">
                            Use <a class="fw-semibold" href="base/utilities#width-and-height" target="_blank">Custom Size
                                Classes</a>&nbsp;
                            for checkbox and radio to set custom sizes:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-10 d-flex">
                                    <div class="form-check form-check-custom form-check-solid me-10">
                                        <input class="form-check-input h-30px w-30px" type="radio" value=""
                                            id="flexCheckbox30" />
                                        <label class="form-check-label" for="flexCheckbox30">
                                            30px
                                        </label>
                                    </div>

                                    <div class="form-check form-check-custom form-check-solid me-10">
                                        <input class="form-check-input h-40px w-40px" type="radio" value=""
                                            id="flexCheckbox40" />
                                        <label class="form-check-label" for="flexCheckbox40">
                                            40px
                                        </label>
                                    </div>

                                    <div class="form-check form-check-custom form-check-solid me-10">
                                        <input class="form-check-input h-50px w-50px" type="radio" value=""
                                            id="flexCheckbox50" />
                                        <label class="form-check-label" for="flexCheckbox50">
                                            50px
                                        </label>
                                    </div>
                                </div>

                                <!--begin::Code-->
                                <div class="py-0">
                                    <!--begin::Highlight-->
                                    <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;div class=&quot;form-check form-check-custom form-check-solid me-10&quot;&gt;
    &lt;input class=&quot;form-check-input h-30px w-30px&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexCheckbox30&quot;/&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexCheckbox30&quot;&gt;
        30px
    &lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-check-custom form-check-solid me-10&quot;&gt;
    &lt;input class=&quot;form-check-input h-40px w-40px&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexCheckbox40&quot;/&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexCheckbox40&quot;&gt;
        40px
    &lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-check-custom form-check-solid me-10&quot;&gt;
    &lt;input class=&quot;form-check-input h-50px w-50px&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexCheckbox50&quot;/&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexCheckbox50&quot;&gt;
        50px
    &lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-check-custom form-check-solid me-10&quot;&gt;
    &lt;input class=&quot;form-check-input h-30px w-30px&quot; type=&quot;radio&quot; value=&quot;&quot; id=&quot;flexRadio30&quot;/&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexRadio30&quot;&gt;
        30px
    &lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-check-custom form-check-solid me-10&quot;&gt;
    &lt;input class=&quot;form-check-input h-40px w-40px&quot; type=&quot;radio&quot; value=&quot;&quot; id=&quot;flexRadio40&quot;/&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexRadio40&quot;&gt;
        40px
    &lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-check-custom form-check-solid me-10&quot;&gt;
    &lt;input class=&quot;form-check-input h-50px w-50px&quot; type=&quot;radio&quot; value=&quot;&quot; id=&quot;flexRadio50&quot;/&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexRadio50&quot;&gt;
        50px
    &lt;/label&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div><!--end::Highlight-->
                                </div>
                                <!--end::Code-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="pt-20 pb-5">
                            Use a checkbox and radio inputs with image through <code>data-kt-buttons</code>
                            parameters to automatically handle radio checked state for images as well:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Row-->
                                <div class="row mw-500px mb-5" data-kt-buttons="true"
                                    data-kt-buttons-target=".form-check-image, .form-check-input">
                                    <!--begin::Col-->
                                    <div class="col-4">
                                        <label class="form-check-image active">
                                            <div class="form-check-wrapper">
                                                <img src="assets/media/stock/600x400/img-1.jpg" />
                                            </div>

                                            <div class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="radio" checked value="1"
                                                    name="option2" />
                                                <div class="form-check-label">
                                                    Option 1
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-4">
                                        <label class="form-check-image">
                                            <div class="form-check-wrapper">
                                                <img src="assets/media/stock/600x400/img-2.jpg" />
                                            </div>

                                            <div class="form-check form-check-custom form-check-solid me-10">
                                                <input class="form-check-input" type="radio" value="1"
                                                    name="option2" id="text_wow" />
                                                <div class="form-check-label">
                                                    Option 2
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-4">
                                        <label class="form-check-image">
                                            <div class="form-check-wrapper">
                                                <img src="assets/media/stock/600x400/img-3.jpg" />
                                            </div>

                                            <div class="form-check form-check-custom form-check-solid me-10">
                                                <input class="form-check-input" type="radio" value="1"
                                                    name="option2" />
                                                <div class="form-check-label">
                                                    Option 3
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->

                                <!--begin::Code-->
                                <div class="py-0">
                                    <!--begin::Highlight-->
                                    <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Row--&gt;
&lt;div class=&quot;row mw-500px mb-5&quot; data-kt-buttons=&quot;true&quot; data-kt-buttons-target=&quot;.form-check-image, .form-check-input&quot;&gt;&gt;
    &lt;!--begin::Col--&gt;
    &lt;div class=&quot;col-4&quot;&gt;
        &lt;label class=&quot;form-check-image active&quot;&gt;
            &lt;div class=&quot;form-check-wrapper&quot;&gt;
                &lt;img src=&quot;assets/media/stock/600x400/img-1.jpg&quot;/&gt;
            &lt;/div&gt;

            &lt;div class=&quot;form-check form-check-custom form-check-solid&quot;&gt;
                &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; checked value=&quot;1&quot; name=&quot;option2&quot;/&gt;
                &lt;div class=&quot;form-check-label&quot;&gt;
                    Option 1
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/label&gt;
    &lt;/div&gt;
    &lt;!--end::Col--&gt;

    &lt;!--begin::Col--&gt;
    &lt;div class=&quot;col-4&quot;&gt;
        &lt;label class=&quot;form-check-image&quot;&gt;
            &lt;div class=&quot;form-check-wrapper&quot;&gt;
                &lt;img src=&quot;assets/media/stock/600x400/img-2.jpg&quot;/&gt;
            &lt;/div&gt;

            &lt;div class=&quot;form-check form-check-custom form-check-solid me-10&quot;&gt;
                &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; value=&quot;1&quot; name=&quot;option2&quot; id=&quot;text_wow&quot;/&gt;
                &lt;div class=&quot;form-check-label&quot;&gt;
                    Option 2
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/label&gt;
    &lt;/div&gt;
    &lt;!--end::Col--&gt;

    &lt;!--begin::Col--&gt;
    &lt;div class=&quot;col-4&quot;&gt;
        &lt;label class=&quot;form-check-image&quot;&gt;
            &lt;div class=&quot;form-check-wrapper&quot;&gt;
                &lt;img src=&quot;assets/media/stock/600x400/img-3.jpg&quot;/&gt;
            &lt;/div&gt;

            &lt;div class=&quot;form-check form-check-custom form-check-solid me-10&quot;&gt;
                &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; value=&quot;1&quot; name=&quot;option2&quot;/&gt;
                &lt;div class=&quot;form-check-label&quot;&gt;
                    Option 3
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/label&gt;
    &lt;/div&gt;
    &lt;!--end::Col--&gt;
&lt;/div&gt;
&lt;!--end::Row--&gt;</code></pre>
                                        </div>
                                    </div><!--end::Highlight-->
                                </div>
                                <!--end::Code-->
                            </div>
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="switch" data-kt-scroll-offset="50">
                            <a href="#switch"></a>

                            Switch
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Default checkbox examples
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5 mb-5">
                            <div class="rounded border p-10">
                                <div class="form-check form-switch mb-10">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="flexSwitchCheckDefault" />
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Default switch
                                        checkbox input</label>
                                </div>

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="flexSwitchCheckChecked" checked />
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch
                                        checkbox input</label>
                                </div>
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.form-check-custom</code> and <code>.form-check-solid</code> class with
                            <code>.form-switch</code> to set custom layout with solid background style for a form
                            switch:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-10">
                                    <div class="form-check form-switch form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="kt_flexSwitchDefault_1_2" />
                                        <label class="form-check-label" for="kt_flexSwitchDefault_1_2">
                                            Default switch
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-10">
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" />
                                        <span class="form-check-label"">
                                            Without id linking
                                        </span>
                                    </label>
                                </div>

                                <div class="mb-10">
                                    <div class="form-check form-switch form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="kt_flexSwitchChecked_1_3" checked="checked" />
                                        <label class="form-check-label" for="kt_flexSwitchChecked_1_3">
                                            Checked switch
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-10">
                                    <div class="form-check form-switch form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="kt_flexSwitchDisabled_1_4" disabled checked="checked" />
                                        <label class="form-check-label" for="kt_flexSwitchDisabled_1_4">
                                            Disabled switch
                                        </label>
                                    </div>
                                </div>

                                <!--begin::Code-->
                                <div class="py-0">
                                    <!--begin::Highlight-->
                                    <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;div class=&quot;form-check form-switch form-check-custom form-check-solid&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexSwitchDefault&quot;/&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexSwitchDefault&quot;&gt;
        Default switch
    &lt;/label&gt;
&lt;/div&gt;

&lt;label class=&quot;form-check form-switch form-check-custom form-check-solid&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot;/&gt;
    &lt;span class=&quot;form-check-label&quot;&quot;&gt;
        Without id linking
    &lt;/span&gt;
&lt;/label&gt;

&lt;div class=&quot;form-check form-switch form-check-custom form-check-solid&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexSwitchChecked&quot; checked=&quot;checked&quot; /&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexSwitchChecked&quot;&gt;
        Checked switch
    &lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-switch form-check-custom form-check-solid&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexSwitchDisabled&quot; disabled checked=&quot;checked&quot; /&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexSwitchDisabled&quot;&gt;
        Disabled switch
    &lt;/label&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div><!--end::Highlight-->
                                </div>
                                <!--end::Code-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.form-check-{color}</code> to set a custom color for the checked state:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-10">
                                    <div
                                        class="form-check form-switch form-check-custom form-check-success form-check-solid">
                                        <input class="form-check-input " type="checkbox" value="" checked
                                            id="kt_flexSwitchCustomDefault_1_1" />
                                        <label class="form-check-label" for="kt_flexSwitchCustomDefault_1_1">
                                            Success color
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-10">
                                    <div
                                        class="form-check form-switch form-check-custom form-check-danger form-check-solid">
                                        <input class="form-check-input " type="checkbox" value="" checked
                                            id="kt_flexSwitchCustomDefault_1_2" />
                                        <label class="form-check-label" for="kt_flexSwitchCustomDefault_1_2">
                                            Danger color
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-10">
                                    <div
                                        class="form-check form-switch form-check-custom form-check-warning form-check-solid">
                                        <input class="form-check-input " type="checkbox" value="" checked
                                            id="kt_flexSwitchCustomDefault_1_3" />
                                        <label class="form-check-label" for="kt_flexSwitchCustomDefault_1_3">
                                            Warning color
                                        </label>
                                    </div>
                                </div>

                                <!--begin::Code-->
                                <div class="py-0">
                                    <!--begin::Highlight-->
                                    <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;div class=&quot;form-check form-switch form-check-custom form-check-success form-check-solid&quot;&gt;
    &lt;input class=&quot;form-check-input &quot; type=&quot;checkbox&quot; value=&quot;&quot; checked id=&quot;kt_flexSwitchCustomDefault_1_1&quot;/&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;kt_flexSwitchCustomDefault_1_1&quot;&gt;
        Success color
    &lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-switch form-check-custom form-check-danger form-check-solid&quot;&gt;
    &lt;input class=&quot;form-check-input &quot; type=&quot;checkbox&quot; value=&quot;&quot; checked id=&quot;kt_flexSwitchCustomDefault_1_2&quot;/&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;kt_flexSwitchCustomDefault_1_2&quot;&gt;
        Danger color
    &lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-switch form-check-custom form-check-warning form-check-solid&quot;&gt;
    &lt;input class=&quot;form-check-input &quot; type=&quot;checkbox&quot; value=&quot;&quot; checked id=&quot;kt_flexSwitchCustomDefault_1_3&quot;/&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;kt_flexSwitchCustomDefault_1_3&quot;&gt;
        Warning color
    &lt;/label&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div><!--end::Highlight-->
                                </div>
                                <!--end::Code-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="pt-15 pb-5">
                            Use <a class="fw-semibold" href="base/utilities#width-and-height" target="_blank">Custom Size
                                Classes</a>&nbsp;
                            for switches to set custom sizes:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-10 d-flex">
                                    <div class="form-check form-switch form-check-custom form-check-solid me-10">
                                        <input class="form-check-input h-20px w-30px" type="checkbox" value=""
                                            id="flexSwitch20x30" />
                                        <label class="form-check-label" for="flexSwitch20x30">
                                            20px x 30px
                                        </label>
                                    </div>

                                    <div class="form-check form-switch form-check-custom form-check-solid me-10">
                                        <input class="form-check-input h-30px w-50px" type="checkbox" value=""
                                            id="flexSwitch30x50" />
                                        <label class="form-check-label" for="flexSwitch30x50">
                                            30px X 50px
                                        </label>
                                    </div>

                                    <div class="form-check form-switch form-check-custom form-check-solid me-10">
                                        <input class="form-check-input h-40px w-60px" type="checkbox" value=""
                                            id="flexSwitch40x60" />
                                        <label class="form-check-label" for="flexSwitch40x60">
                                            40px X 60px
                                        </label>
                                    </div>
                                </div>

                                <!--begin::Code-->
                                <div class="py-0">
                                    <!--begin::Highlight-->
                                    <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;div class=&quot;form-check form-switch form-check-custom form-check-solid me-10&quot;&gt;
    &lt;input class=&quot;form-check-input h-20px w-30px&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexSwitch20x30&quot;/&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexSwitch20x30&quot;&gt;
        20px x 30px
    &lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-switch form-check-custom form-check-solid me-10&quot;&gt;
    &lt;input class=&quot;form-check-input h-30px w-50px&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexSwitch30x50&quot;/&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexSwitch30x50&quot;&gt;
        30px X 50px
    &lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-switch form-check-custom form-check-solid me-10&quot;&gt;
    &lt;input class=&quot;form-check-input h-40px w-60px&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexSwitch40x60&quot;/&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexSwitch40x60&quot;&gt;
        40px X 60px
    &lt;/label&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div><!--end::Highlight-->
                                </div>
                                <!--end::Code-->
                            </div>
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
                                <a href="#checkbox" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Checkbox</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#radio" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Radio</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#switch" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Switch</span>
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
    <script src="{{ asset('assets/js/custom/documentation/base/forms/checks.js') }}"></script>
    <!--end::Vendors Javascript-->
@endsection


