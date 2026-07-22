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
                    <!--begin::Notice-->
                    <div class="d-flex align-items-center rounded py-5 px-4 bg-light-info "> <!--begin::Icon-->
                        <div class="d-flex h-80px w-80px flex-shrink-0 flex-center position-relative ms-3 me-6"> <svg
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                class="text-primary h-80px w-80px position-absolute opacity-5">
                                <path fill="currentColor"
                                    d="M10.2,21.23,4.91,18.17a3.58,3.58,0,0,1-1.8-3.11V8.94a3.58,3.58,0,0,1,1.8-3.11L10.2,2.77a3.62,3.62,0,0,1,3.6,0l5.29,3.06a3.58,3.58,0,0,1,1.8,3.11v6.12a3.58,3.58,0,0,1-1.8,3.11L13.8,21.23A3.62,3.62,0,0,1,10.2,21.23Z" />
                            </svg> <i class="ki-duotone ki-design-frame fs-3x text-info  position-absolute"><span
                                    class="path1"></span><span class="path2"></span></i> </div> <!--end::Icon-->
                        <!--begin::Description-->
                        <div class="text-gray-700 fw-bold fs-6 lh-lg">
                            FormValidation is one of the best validation library for JavaScript. For more info see <a
                                href="https://formvalidation.io/" class="fw-bold me-1">the official site</a>and <a
                                class="fw-bold" href="https://github.com/form-validation/formvalidation.io">the Github
                                repository</a>.
                        </div> <!--end::Description-->
                    </div><!--end::Notice-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="overview" data-kt-scroll-offset="50">
                            <a href="#overview"></a>

                            Overview
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Here's an example of multiple advanced <code>input</code> types within a <code>form</code> that
                            has FormValidation attached to it.
                        </div>
                        <!--end::Block-->

                        <!--begin::Notice-->
                        <div class="py-5">
                            <!--begin::Information-->
                            <div class="d-flex align-items-center rounded py-5 px-5 bg-light-warning "><i
                                    class="ki-duotone ki-information-5 fs-3x text-warning me-5"><span
                                        class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-bold fs-6">
                                    All input types require the <code>name</code> attribute to bind the input field for
                                    validation.
                                </div> <!--end::Description-->
                            </div><!--end::Information-->
                        </div>
                        <!--end::Notice-->

                        <!--begin::Notice-->
                        <div class="py-5">
                            <!--begin::Information-->
                            <div class="d-flex align-items-center rounded py-5 px-5 bg-light-primary "><i
                                    class="ki-duotone ki-information-5 fs-3x text-primary me-5"><span
                                        class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-bold fs-6">
                                    FormValidation is best used together with our integrated SweetAlert2. For more info,
                                    please visit the <a href='https://sweetalert2.github.io/' target='_blank'>official
                                        website</a>.
                                </div> <!--end::Description-->
                            </div><!--end::Information-->
                        </div>
                        <!--end::Notice-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="form-validation" data-kt-scroll-offset="50">
                            <a href="#form-validation"></a>

                            Form Validation
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            For more information on Tagify, please visit the <a href="https://yaireo.github.io/tagify/"
                                target="_blank">official website</a>.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Form-->
                                <form id="kt_docs_repeater_form" class="form" action="#" autocomplete="off">
                                    <!--
                                    The value given to the data-repeater-list attribute will be used as the
                                    base of rewritten name attributes. In this example, the first
                                    data-repeater-item's name attribute would become data[0][text-input],
                                    and the second data-repeater-item would become data[1][text-input]
                                -->
                                    <!--begin::Form group-->
                                    <div class="form-group">
                                        <div data-repeater-list="data">
                                            <div data-repeater-item>
                                                <div class="fv-row form-group row mb-5">
                                                    <div class="col-md-3">
                                                        <label class="form-label">Name:</label>
                                                        <input type="text" class="form-control mb-2 mb-md-0"
                                                            name="name" placeholder="Enter full name" />
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label class="form-label">Email:</label>
                                                        <input type="email" class="form-control mb-2 mb-md-0"
                                                            name="email" placeholder="Enter contact number" />
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div
                                                            class="form-check form-check-custom form-check-solid mt-2 mt-md-11">
                                                            <input class="form-check-input" type="checkbox" name="primary"
                                                                value="1" />
                                                            <label class="form-check-label" for="form_checkbox">
                                                                Primary
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href="javascript:;" data-repeater-delete
                                                            class="btn btn-sm btn-flex flex-center btn-light-danger mt-3 mt-md-9">
                                                            <i class="ki-duotone ki-trash fs-5"><span
                                                                    class="path1"></span><span class="path2"></span><span
                                                                    class="path3"></span><span class="path4"></span><span
                                                                    class="path5"></span></i> Delete
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Form group-->

                                    <!--begin::Form group-->
                                    <div class="form-group">
                                        <a href="javascript:;" data-repeater-create
                                            class="btn btn-flex flex-center btn-light-primary">
                                            <i class="ki-duotone ki-plus fs-3"></i> Add
                                        </a>
                                    </div>
                                    <!--end::Form group-->

                                    <div class="separator my-5"></div>

                                    <!--begin::Actions-->
                                    <button id="kt_docs_repeater_button" type="submit" class="btn btn-primary">
                                        <span class="indicator-label">
                                            Validation Form
                                        </span>
                                        <span class="indicator-progress">
                                            Please wait... <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Form-->
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
                                            href="#kt_highlight_68e352d976cd7" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e352d976cda" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e352d976cd7"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">// Define form element
const form = document.getElementById(&quot;kt_docs_repeater_form&quot;);

// Init form validation rules. For more info check the FormValidation plugin&#039;s official documentation:https://formvalidation.io/
var validator = FormValidation.formValidation(
    form,
    {
        plugins: {
            trigger: new FormValidation.plugins.Trigger(),
            bootstrap: new FormValidation.plugins.Bootstrap5({
                rowSelector: &quot;.fv-row&quot;,
                eleInvalidClass: &quot;&quot;,
                eleValidClass: &quot;&quot;
            }),
            excluded: new FormValidation.plugins.Excluded({
                excluded: function (field, ele, eles) {
                    if (form.querySelector(&#039;[name=&quot;&#039; + field + &#039;&quot;]&#039;) === null) {
                        return true;
                    }
                },
            }),
        }
    }
);

const addFields = function(index) {
    const namePrefix = &quot;data[&quot; + index + &quot;]&quot;;

    // Add validators
    validator.addField(namePrefix + &quot;[name]&quot;, {
        validators: {
            notEmpty: {
                message: &quot;Text input is required&quot;
            }
        }
    });

    validator.addField(namePrefix + &quot;[email]&quot;, {
        validators: {
            emailAddress: {
                message: &quot;The value is not a valid email address&quot;
            },
            notEmpty: {
                message: &quot;Email address is required&quot;
            }
        }
    });

    validator.addField(namePrefix + &quot;[primary][]&quot;, {
        validators: {
            notEmpty: {
                message: &quot;Required&quot;
            }
        }
    });
};

const removeFields = function(index) {
    const namePrefix = &quot;data[&quot; + index + &quot;]&quot;;

    validator.addField(namePrefix + &quot;[name]&quot;);
    validator.addField(namePrefix + &quot;[email]&quot;);
    validator.addField(namePrefix + &quot;[primary][]&quot;);
}

$(form).repeater({
    initEmpty: false,

    show: function () {
        $(this).slideDown();

        const index = $(this).closest(&quot;[data-repeater-item]&quot;).index();

        addFields(index);
    },

    hide: function (deleteElement) {
        $(this).slideUp(deleteElement);
    }
});

// Initial fields
addFields(0);

// Submit button handler
const submitButton = document.getElementById(&quot;kt_docs_repeater_button&quot;);
submitButton.addEventListener(&quot;click&quot;, function (e) {
    // Prevent default button action
    e.preventDefault();

    // Validate form before submit
    if (validator) {
        validator.validate().then(function (status) {
            if (status == &quot;Valid&quot;) {
                // Show loading indication
                submitButton.setAttribute(&quot;data-kt-indicator&quot;, &quot;on&quot;);

                // Disable button to avoid multiple click
                submitButton.disabled = true;

                // Simulate form submission. For more info check the plugin&#039;s official documentation: https://sweetalert2.github.io/
                setTimeout(function () {
                    // Remove loading indication
                    submitButton.removeAttribute(&quot;data-kt-indicator&quot;);

                    // Enable button
                    submitButton.disabled = false;

                    // Show popup confirmation
                    Swal.fire({
                        text: &quot;Form has been successfully submitted!&quot;,
                        icon: &quot;success&quot;,
                        buttonsStyling: false,
                        confirmButtonText: &quot;Ok, got it!&quot;,
                        customClass: {
                            confirmButton: &quot;btn btn-primary&quot;
                        }
                    });

                    //form.submit(); // Submit form
                }, 2000);
            }
        });
    }
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e352d976cda" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Form--&gt;
&lt;form id=&quot;kt_docs_repeater_form&quot; class=&quot;form&quot; action=&quot;#&quot; autocomplete=&quot;off&quot;&gt;
    &lt;!--
        The value given to the data-repeater-list attribute will be used as the
        base of rewritten name attributes. In this example, the first
        data-repeater-item&#039;s name attribute would become data[0][text-input],
        and the second data-repeater-item would become data[1][text-input]
    --&gt;
    &lt;!--begin::Form group--&gt;
    &lt;div class=&quot;form-group&quot;&gt;
        &lt;div data-repeater-list=&quot;data&quot;&gt;
            &lt;div data-repeater-item&gt;
                &lt;div class=&quot;fv-row form-group row mb-5&quot;&gt;
                    &lt;div class=&quot;col-md-3&quot;&gt;
                        &lt;label class=&quot;form-label&quot;&gt;Name:&lt;/label&gt;
                        &lt;input type=&quot;text&quot; class=&quot;form-control mb-2 mb-md-0&quot; name=&quot;name&quot; placeholder=&quot;Enter full name&quot; /&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;col-md-3&quot;&gt;
                        &lt;label class=&quot;form-label&quot;&gt;Email:&lt;/label&gt;
                        &lt;input type=&quot;email&quot; class=&quot;form-control mb-2 mb-md-0&quot; name=&quot;email&quot; placeholder=&quot;Enter contact number&quot; /&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;col-md-2&quot;&gt;
                        &lt;div class=&quot;form-check form-check-custom form-check-solid mt-2 mt-md-11&quot;&gt;
                            &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; name=&quot;primary&quot; value=&quot;1&quot;/&gt;
                            &lt;label class=&quot;form-check-label&quot; for=&quot;form_checkbox&quot;&gt;
                                Primary
                            &lt;/label&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;col-md-4&quot;&gt;
                        &lt;a href=&quot;javascript:;&quot; data-repeater-delete class=&quot;btn btn-sm btn-flex flex-center btn-light-danger mt-3 mt-md-9&quot;&gt;
                            &lt;i class=&quot;ki-duotone ki-trash fs-5&quot;&gt;
                                &lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;
                                &lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;
                                &lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;
                                &lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;
                                &lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;
                            &lt;/i&gt; Delete
                        &lt;/a&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;!--end::Form group--&gt;

    &lt;!--begin::Form group--&gt;
    &lt;div class=&quot;form-group&quot;&gt;
        &lt;a href=&quot;javascript:;&quot; data-repeater-create class=&quot;btn btn-flex flex-center btn-light-primary&quot;&gt;
            &lt;i class=&quot;ki-duotone ki-plus fs-3&quot;&gt;&lt;/i&gt; Add
        &lt;/a&gt;
    &lt;/div&gt;
    &lt;!--end::Form group--&gt;

    &lt;div class=&quot;separator my-5&quot;&gt;&lt;/div&gt;

    &lt;!--begin::Actions--&gt;
    &lt;button id=&quot;kt_docs_repeater_button&quot; type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;
        &lt;span class=&quot;indicator-label&quot;&gt;
            Validation Form
        &lt;/span&gt;
        &lt;span class=&quot;indicator-progress&quot;&gt;
            Please wait... &lt;span class=&quot;spinner-border spinner-border-sm align-middle ms-2&quot;&gt;&lt;/span&gt;
        &lt;/span&gt;
    &lt;/button&gt;
    &lt;!--end::Actions--&gt;
&lt;/form&gt;
&lt;!--end::Form--&gt;</code></pre>
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
                        <h1 class="anchor fw-bold mb-5" id="date-range-picker" data-kt-scroll-offset="50">
                            <a href="#date-range-picker"></a>

                            Date range picker
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            For more information on Date Range Pickers, please visit the <a
                                href="https://www.daterangepicker.com/" target="_blank">official website</a>.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Form-->
                                <form id="kt_docs_formvalidation_daterangepicker" class="form" action="#"
                                    autocomplete="off">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="required fw-semibold fs-6 mb-2">Date Range Picker Input</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control-solid" name="daterangepicker_input"
                                            placeholder="Pick date range" id="kt_daterangepicker" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Actions-->
                                    <button id="kt_docs_formvalidation_daterangepicker_submit" type="submit"
                                        class="btn btn-primary">
                                        <span class="indicator-label">
                                            Validation Form
                                        </span>
                                        <span class="indicator-progress">
                                            Please wait... <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Form-->
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
                                            href="#kt_highlight_68e352d976d2e" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e352d976d2f" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e352d976d2e"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">// Define form element
const form = document.getElementById(&#039;kt_docs_formvalidation_daterangepicker&#039;);

// Init daterangepicker --- for more info, please visit: https://www.daterangepicker.com/
element.daterangepicker({
    autoUpdateInput: false,
});

element.on(&#039;apply.daterangepicker&#039;, function(ev, picker) {
    $(this).val(picker.startDate.format(&#039;MM/DD/YYYY&#039;) + &#039; - &#039; + picker.endDate.format(&#039;MM/DD/YYYY&#039;));
});

element.on(&#039;cancel.daterangepicker&#039;, function(ev, picker) {
    $(this).val(&#039;&#039;);
});

// Init form validation rules. For more info check the FormValidation plugin&#039;s official documentation:https://formvalidation.io/
var validator = FormValidation.formValidation(
    form,
    {
        fields: {
            &#039;daterangepicker_input&#039;: {
                validators: {
                    notEmpty: {
                        message: &#039;Date range input is required&#039;
                    }
                }
            },
        },

        plugins: {
            trigger: new FormValidation.plugins.Trigger(),
            bootstrap: new FormValidation.plugins.Bootstrap5({
                rowSelector: &#039;.fv-row&#039;,
                eleInvalidClass: &#039;&#039;,
                eleValidClass: &#039;&#039;
            })
        }
    }
);</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e352d976d2f" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Form--&gt;
&lt;form id=&quot;kt_docs_formvalidation_daterangepicker&quot; class=&quot;form&quot; action=&quot;#&quot; autocomplete=&quot;off&quot;&gt;
    &lt;!--begin::Input group--&gt;
    &lt;div class=&quot;fv-row mb-10&quot;&gt;
        &lt;!--begin::Label--&gt;
        &lt;label class=&quot;required fw-semibold fs-6 mb-2&quot;&gt;Date Range Picker Input&lt;/label&gt;
        &lt;!--end::Label--&gt;

        &lt;!--begin::Input--&gt;
        &lt;input class=&quot;form-control form-control-solid&quot; name=&quot;daterangepicker_input&quot; placeholder=&quot;Pick date range&quot; id=&quot;kt_daterangepicker&quot; /&gt;
        &lt;!--end::Input--&gt;
    &lt;/div&gt;
    &lt;!--end::Input group--&gt;

    &lt;!--begin::Actions--&gt;
    &lt;button id=&quot;kt_docs_formvalidation_daterangepicker_submit&quot; type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;
        &lt;span class=&quot;indicator-label&quot;&gt;
            Validation Form
        &lt;/span&gt;
        &lt;span class=&quot;indicator-progress&quot;&gt;
            Please wait... &lt;span class=&quot;spinner-border spinner-border-sm align-middle ms-2&quot;&gt;&lt;/span&gt;
        &lt;/span&gt;
    &lt;/button&gt;
    &lt;!--end::Actions--&gt;
&lt;/form&gt;
&lt;!--end::Form--&gt;</code></pre>
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
                        <h1 class="anchor fw-bold mb-5" id="flatpickr" data-kt-scroll-offset="50">
                            <a href="#flatpickr"></a>

                            Flatpickr
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            For more information on Flatpickr, please visit the <a href="https://flatpickr.js.org/"
                                target="_blank">official website</a>.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Form-->
                                <form id="kt_docs_formvalidation_flatpickr" class="form" action="#"
                                    autocomplete="off">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="required fw-semibold fs-6 mb-2">Flatpickr Input</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control" name="flatpickr_input" placeholder="Pick a date"
                                            id="kt_flatpickr" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Actions-->
                                    <button id="kt_docs_formvalidation_flatpickr_submit" type="submit"
                                        class="btn btn-primary">
                                        <span class="indicator-label">
                                            Validation Form
                                        </span>
                                        <span class="indicator-progress">
                                            Please wait... <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Form-->
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
                                            href="#kt_highlight_68e352d976d58" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e352d976d59" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e352d976d58"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">// Define form element
const form = document.getElementById(&#039;kt_docs_formvalidation_flatpickr&#039;);

// Init flatpickr --- for more info, please visit: https://flatpickr.js.org/
$(&quot;#kt_flatpickr&quot;).flatpickr();

// Init form validation rules. For more info check the FormValidation plugin&#039;s official documentation:https://formvalidation.io/
var validator = FormValidation.formValidation(
    form,
    {
        fields: {
            &#039;flatpickr_input&#039;: {
                validators: {
                    date: {
                        format: &#039;YYYY-MM-DD&#039;,
                        message: &#039;The value is not a valid date&#039;,
                    },
                    notEmpty: {
                        message: &#039;Flatpickr input is required&#039;
                    }
                }
            },
        },

        plugins: {
            trigger: new FormValidation.plugins.Trigger(),
            bootstrap: new FormValidation.plugins.Bootstrap5({
                rowSelector: &#039;.fv-row&#039;,
                eleInvalidClass: &#039;&#039;,
                eleValidClass: &#039;&#039;
            })
        }
    }
);</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e352d976d59" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Form--&gt;
&lt;form id=&quot;kt_docs_formvalidation_flatpickr&quot; class=&quot;form&quot; action=&quot;#&quot; autocomplete=&quot;off&quot;&gt;
    &lt;!--begin::Input group--&gt;
    &lt;div class=&quot;fv-row mb-10&quot;&gt;
        &lt;!--begin::Label--&gt;
        &lt;label class=&quot;required fw-semibold fs-6 mb-2&quot;&gt;Flatpickr Input&lt;/label&gt;
        &lt;!--end::Label--&gt;

        &lt;!--begin::Input--&gt;
        &lt;input class=&quot;form-control&quot; name=&quot;flatpickr_input&quot; placeholder=&quot;Pick a date&quot; id=&quot;kt_flatpickr&quot; /&gt;
        &lt;!--end::Input--&gt;
    &lt;/div&gt;
    &lt;!--end::Input group--&gt;

    &lt;!--begin::Actions--&gt;
    &lt;button id=&quot;kt_docs_formvalidation_flatpickr_submit&quot; type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;
        &lt;span class=&quot;indicator-label&quot;&gt;
            Validation Form
        &lt;/span&gt;
        &lt;span class=&quot;indicator-progress&quot;&gt;
            Please wait... &lt;span class=&quot;spinner-border spinner-border-sm align-middle ms-2&quot;&gt;&lt;/span&gt;
        &lt;/span&gt;
    &lt;/button&gt;
    &lt;!--end::Actions--&gt;
&lt;/form&gt;
&lt;!--end::Form--&gt;</code></pre>
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
                        <h1 class="anchor fw-bold mb-5" id="image-input" data-kt-scroll-offset="50">
                            <a href="#image-input"></a>

                            Image Input
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            For more information on our exclusive Image Input form, please visit the <a
                                href="/html/metronic/docs/forms/image-input" target="_blank">our documentation page</a>.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Form-->
                                <form id="kt_docs_formvalidation_image_input" class="form" action="#"
                                    autocomplete="off">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="d-block fw-semibold fs-6 mb-5">Image Input</label>
                                        <!--end::Label-->

                                        <!--begin::Background image-->
                                        <style>
                                            .image-input-placeholder {
                                                background-image: url('/html/metronic/docs/assets/media/svg/avatars/blank.svg');
                                            }

                                            [data-bs-theme="dark"] .image-input-placeholder {
                                                background-image: url('/html/metronic/docs/assets/media/svg/avatars/blank-dark.svg');
                                            }
                                        </style>
                                        <!--end::Background image-->

                                        <!--begin::Image input-->
                                        <div class="image-input image-input-outline image-input-empty image-input-placeholder"
                                            data-kt-image-input="true">
                                            <!--begin::Preview existing avatar-->
                                            <div class="image-input-wrapper w-125px h-125px"></div>
                                            <!--end::Preview existing avatar-->

                                            <!--begin::Label-->
                                            <label
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                title="Change avatar">
                                                <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span
                                                        class="path2"></span></i>
                                                <!--begin::Inputs-->
                                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                                <input type="hidden" name="avatar_remove" />
                                                <!--end::Inputs-->
                                            </label>
                                            <!--end::Label-->

                                            <!--begin::Cancel-->
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                data-bs-dismiss="click" title="Cancel avatar">
                                                <i class="ki-outline ki-cross fs-3"></i> </span>
                                            <!--end::Cancel-->

                                            <!--begin::Remove-->
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                data-bs-dismiss="click" title="Remove avatar">
                                                <i class="ki-outline ki-cross fs-3"></i> </span>
                                            <!--end::Remove-->
                                        </div>
                                        <!--end::Image input-->

                                        <!--begin::Hint-->
                                        <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                        <!--end::Hint-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Actions-->
                                    <button id="kt_docs_formvalidation_image_input_submit" type="submit"
                                        class="btn btn-primary">
                                        <span class="indicator-label">
                                            Validation Form
                                        </span>
                                        <span class="indicator-progress">
                                            Please wait... <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Form-->
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
                                            href="#kt_highlight_68e352d976da3" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e352d976da4" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e352d976da3"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">// Define form element
const form = document.getElementById(&#039;kt_docs_formvalidation_image_input&#039;);

// Init form validation rules. For more info check the FormValidation plugin&#039;s official documentation:https://formvalidation.io/
var validator = FormValidation.formValidation(
    form,
    {
        fields: {
            &#039;avatar&#039;: {
                validators: {
                    notEmpty: {
                        message: &#039;Please select an image&#039;
                    },
                    file: {
                        extension: &#039;jpg,jpeg,png&#039;,
                        type: &#039;image/jpeg,image/png&#039;,
                        message: &#039;The selected file is not valid&#039;
                    },
                }
            },
        },

        plugins: {
            trigger: new FormValidation.plugins.Trigger(),
            bootstrap: new FormValidation.plugins.Bootstrap5({
                rowSelector: &#039;.fv-row&#039;,
                eleInvalidClass: &#039;&#039;,
                eleValidClass: &#039;&#039;
            })
        }
    }
);</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e352d976da4" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Form--&gt;
&lt;form id=&quot;kt_docs_formvalidation_image_input&quot; class=&quot;form&quot; action=&quot;#&quot; autocomplete=&quot;off&quot;&gt;
    &lt;!--begin::Input group--&gt;
    &lt;div class=&quot;fv-row mb-7&quot;&gt;
        &lt;!--begin::Label--&gt;
        &lt;label class=&quot;d-block fw-semibold fs-6 mb-5&quot;&gt;Image Input&lt;/label&gt;
        &lt;!--end::Label--&gt;

        &lt;!--begin::Image input--&gt;
        &lt;div class=&quot;image-input image-input-outline image-input-empty&quot; data-kt-image-input=&quot;true&quot; style=&quot;background-image: url(&#039;assets/media/svg/avatars/blank.svg&#039;)&quot;&gt;
            &lt;!--begin::Preview existing avatar--&gt;
            &lt;div class=&quot;image-input-wrapper w-125px h-125px&quot;&gt;&lt;/div&gt;
            &lt;!--end::Preview existing avatar--&gt;

            &lt;!--begin::Label--&gt;
            &lt;label class=&quot;btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow&quot; data-kt-image-input-action=&quot;change&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Change avatar&quot;&gt;
                &lt;i class=&quot;ki-duotone ki-pencil fs-6&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;

                &lt;!--begin::Inputs--&gt;
                &lt;input type=&quot;file&quot; name=&quot;avatar&quot; accept=&quot;.png, .jpg, .jpeg&quot; /&gt;
                &lt;input type=&quot;hidden&quot; name=&quot;avatar_remove&quot; /&gt;
                &lt;!--end::Inputs--&gt;
            &lt;/label&gt;
            &lt;!--end::Label--&gt;

            &lt;!--begin::Cancel--&gt;
            &lt;span class=&quot;btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow&quot; data-kt-image-input-action=&quot;cancel&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Cancel avatar&quot;&gt;
                &lt;i class=&quot;ki-outline ki-cross fs-3&quot;&gt;&lt;/i&gt;
            &lt;/span&gt;
            &lt;!--end::Cancel--&gt;

            &lt;!--begin::Remove--&gt;
            &lt;span class=&quot;btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow&quot; data-kt-image-input-action=&quot;remove&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Remove avatar&quot;&gt;
                &lt;i class=&quot;ki-outline ki-cross fs-3&quot;&gt;&lt;/i&gt;
            &lt;/span&gt;
            &lt;!--end::Remove--&gt;
        &lt;/div&gt;
        &lt;!--end::Image input--&gt;

        &lt;!--begin::Hint--&gt;
        &lt;div class=&quot;form-text&quot;&gt;Allowed file types: png, jpg, jpeg.&lt;/div&gt;
        &lt;!--end::Hint--&gt;
    &lt;/div&gt;
    &lt;!--end::Input group--&gt;

    &lt;!--begin::Actions--&gt;
    &lt;button id=&quot;kt_docs_formvalidation_image_input_submit&quot; type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;
        &lt;span class=&quot;indicator-label&quot;&gt;
            Validation Form
        &lt;/span&gt;
        &lt;span class=&quot;indicator-progress&quot;&gt;
            Please wait... &lt;span class=&quot;spinner-border spinner-border-sm align-middle ms-2&quot;&gt;&lt;/span&gt;
        &lt;/span&gt;
    &lt;/button&gt;
    &lt;!--end::Actions--&gt;
&lt;/form&gt;
&lt;!--end::Form--&gt;</code></pre>
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
                        <h1 class="anchor fw-bold mb-5" id="password-meter" data-kt-scroll-offset="50">
                            <a href="#password-meter"></a>

                            Password Meter
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            For more information on our exclusive Password Meter, please visit the <a
                                href="/html/metronic/docs/forms/password-meter" target="_blank">our documentation
                                page</a>.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Form-->
                                <form id="kt_docs_formvalidation_password" class="form" action="#"
                                    autocomplete="off">
                                    <!--begin::Input group--->
                                    <div class="fv-row mb-10">
                                        <label class="required form-label fs-6 mb-2">Current Password</label>

                                        <input class="form-control form-control-lg form-control-solid" type="password"
                                            placeholder="" name="current_password" autocomplete="off" />
                                    </div>
                                    <!--end::Input group--->

                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row" data-kt-password-meter="true">
                                        <!--begin::Wrapper-->
                                        <div class="mb-1">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold fs-6 mb-2 required">
                                                New Password
                                            </label>
                                            <!--end::Label-->

                                            <!--begin::Input wrapper-->
                                            <div class="position-relative mb-3">
                                                <input class="form-control form-control-lg form-control-solid"
                                                    type="password" placeholder="" name="new_password"
                                                    autocomplete="off" />

                                                <span
                                                    class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                                    data-kt-password-meter-control="visibility">
                                                    <i class="ki-duotone ki-eye-slash fs-1"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span></i> <i
                                                        class="ki-duotone ki-eye d-none fs-1"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i> </span>
                                            </div>
                                            <!--end::Input wrapper-->

                                            <!--begin::Meter-->
                                            <div class="d-flex align-items-center mb-3"
                                                data-kt-password-meter-control="highlight">
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                                </div>
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                                </div>
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                                </div>
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px">
                                                </div>
                                            </div>
                                            <!--end::Meter-->
                                        </div>
                                        <!--end::Wrapper-->

                                        <!--begin::Hint-->
                                        <div class="text-muted">
                                            Use 8 or more characters with a mix of letters, numbers & symbols.
                                        </div>
                                        <!--end::Hint-->
                                    </div>
                                    <!--end::Input group--->

                                    <!--begin::Input group--->
                                    <div class="fv-row mb-10">
                                        <label class="form-label fw-semibold fs-6 mb-2 required">Confirm New
                                            Password</label>

                                        <input class="form-control form-control-lg form-control-solid" type="password"
                                            placeholder="" name="confirm_password" autocomplete="off" />
                                    </div>
                                    <!--end::Input group--->

                                    <!--begin::Actions-->
                                    <button id="kt_docs_formvalidation_password_submit" type="submit"
                                        class="btn btn-primary">
                                        <span class="indicator-label">
                                            Validation Form
                                        </span>
                                        <span class="indicator-progress">
                                            Please wait... <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Form-->
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
                                            href="#kt_highlight_68e352d976ded" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e352d976dee" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e352d976ded"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">// Define form element
const form = document.getElementById(&#039;kt_docs_formvalidation_password&#039;);

// Init form validation rules. For more info check the FormValidation plugin&#039;s official documentation:https://formvalidation.io/
var validator = FormValidation.formValidation(
    form,
    {
        fields: {
            &#039;current_password&#039;: {
                validators: {
                    notEmpty: {
                        message: &#039;Current password is required&#039;
                    }
                }
            },
            &#039;new_password&#039;: {
                validators: {
                    notEmpty: {
                        message: &#039;The password is required&#039;
                    },
                    callback: {
                        message: &#039;Please enter valid password&#039;,
                        callback: function (input) {
                            if (input.value.length &gt; 0) {
                                return validatePassword();
                            }
                        }
                    }
                }
            },
            &#039;confirm_password&#039;: {
                validators: {
                    notEmpty: {
                        message: &#039;The password confirmation is required&#039;
                    },
                    identical: {
                        compare: function () {
                            return form.querySelector(&#039;[name=&quot;new_password&quot;]&#039;).value;
                        },
                        message: &#039;The password and its confirm are not the same&#039;
                    }
                }
            },
        },

        plugins: {
            trigger: new FormValidation.plugins.Trigger(),
            bootstrap: new FormValidation.plugins.Bootstrap5({
                rowSelector: &#039;.fv-row&#039;,
                eleInvalidClass: &#039;&#039;,
                eleValidClass: &#039;&#039;
            })
        }
    }
);</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e352d976dee" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Form--&gt;
&lt;form id=&quot;kt_docs_formvalidation_password&quot; class=&quot;form&quot; action=&quot;#&quot; autocomplete=&quot;off&quot;&gt;
    &lt;!--begin::Input group---&gt;
    &lt;div class=&quot;fv-row mb-10&quot;&gt;
        &lt;label class=&quot;required form-label fs-6 mb-2&quot;&gt;Current Password&lt;/label&gt;

        &lt;input class=&quot;form-control form-control-lg form-control-solid&quot; type=&quot;password&quot; placeholder=&quot;&quot; name=&quot;current_password&quot; autocomplete=&quot;off&quot; /&gt;
    &lt;/div&gt;
    &lt;!--end::Input group---&gt;

    &lt;!--begin::Input group--&gt;
    &lt;div class=&quot;mb-10 fv-row&quot; data-kt-password-meter=&quot;true&quot;&gt;
        &lt;!--begin::Wrapper--&gt;
        &lt;div class=&quot;mb-1&quot;&gt;
            &lt;!--begin::Label--&gt;
            &lt;label class=&quot;form-label fw-semibold fs-6 mb-2 required&quot;&gt;
                New Password
            &lt;/label&gt;
            &lt;!--end::Label--&gt;

            &lt;!--begin::Input wrapper--&gt;
            &lt;div class=&quot;position-relative mb-3&quot;&gt;
                &lt;input class=&quot;form-control form-control-lg form-control-solid&quot; type=&quot;password&quot; placeholder=&quot;&quot; name=&quot;new_password&quot; autocomplete=&quot;off&quot; /&gt;

                &lt;span class=&quot;btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2&quot; data-kt-password-meter-control=&quot;visibility&quot;&gt;
                    &lt;i class=&quot;ki-duotone ki-eye-slash fs-1&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;/i&gt;
                    &lt;i class=&quot;ki-duotone ki-eye d-none fs-1&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;/i&gt;
                &lt;/span&gt;
            &lt;/div&gt;
            &lt;!--end::Input wrapper--&gt;

            &lt;!--begin::Meter--&gt;
            &lt;div class=&quot;d-flex align-items-center mb-3&quot; data-kt-password-meter-control=&quot;highlight&quot;&gt;
                &lt;div class=&quot;flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2&quot;&gt;&lt;/div&gt;
                &lt;div class=&quot;flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2&quot;&gt;&lt;/div&gt;
                &lt;div class=&quot;flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2&quot;&gt;&lt;/div&gt;
                &lt;div class=&quot;flex-grow-1 bg-secondary bg-active-success rounded h-5px&quot;&gt;&lt;/div&gt;
            &lt;/div&gt;
            &lt;!--end::Meter--&gt;
        &lt;/div&gt;
        &lt;!--end::Wrapper--&gt;

        &lt;!--begin::Hint--&gt;
        &lt;div class=&quot;text-muted&quot;&gt;
            Use 8 or more characters with a mix of letters, numbers &amp; symbols.
        &lt;/div&gt;
        &lt;!--end::Hint--&gt;
    &lt;/div&gt;
    &lt;!--end::Input group---&gt;

    &lt;!--begin::Input group---&gt;
    &lt;div class=&quot;fv-row mb-10&quot;&gt;
        &lt;label class=&quot;form-label fw-semibold fs-6 mb-2 required&quot;&gt;Confirm New Password&lt;/label&gt;

        &lt;input class=&quot;form-control form-control-lg form-control-solid&quot; type=&quot;password&quot; placeholder=&quot;&quot; name=&quot;confirm_password&quot; autocomplete=&quot;off&quot; /&gt;
    &lt;/div&gt;
    &lt;!--end::Input group---&gt;

    &lt;!--begin::Actions--&gt;
    &lt;button id=&quot;kt_docs_formvalidation_password_submit&quot; type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;
        &lt;span class=&quot;indicator-label&quot;&gt;
            Validation Form
        &lt;/span&gt;
        &lt;span class=&quot;indicator-progress&quot;&gt;
            Please wait... &lt;span class=&quot;spinner-border spinner-border-sm align-middle ms-2&quot;&gt;&lt;/span&gt;
        &lt;/span&gt;
    &lt;/button&gt;
    &lt;!--end::Actions--&gt;
&lt;/form&gt;
&lt;!--end::Form--&gt;</code></pre>
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
                        <h1 class="anchor fw-bold mb-5" id="select2" data-kt-scroll-offset="50">
                            <a href="#select2"></a>

                            Select2
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            For more information on Select2, please visit the <a href="https://select2.org/"
                                target="_blank">official website</a>.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Form-->
                                <form id="kt_docs_formvalidation_select2" class="form" action="#"
                                    autocomplete="off">
                                    <!--begin::Input group--->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="required form-label fs-6 mb-2">Select2 Input</label>
                                        <!--end::Label-->

                                        <!--begin::Select2-->
                                        <select class="form-select" name="select2_input" data-control="select2"
                                            data-placeholder="Select an option" data-allow-clear="true">
                                            <option></option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                        </select>
                                        <!--begin::Select2-->
                                    </div>
                                    <!--end::Input group--->

                                    <!--begin::Actions-->
                                    <button id="kt_docs_formvalidation_select2_submit" type="submit"
                                        class="btn btn-primary">
                                        <span class="indicator-label">
                                            Validation Form
                                        </span>
                                        <span class="indicator-progress">
                                            Please wait... <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Form-->
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
                                            href="#kt_highlight_68e352d976e21" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e352d976e22" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e352d976e21"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">// Define form element
const form = document.getElementById(&#039;kt_docs_formvalidation_select2&#039;);

// Init form validation rules. For more info check the FormValidation plugin&#039;s official documentation:https://formvalidation.io/
var validator = FormValidation.formValidation(
    form,
    {
        fields: {
            &#039;select2_input&#039;: {
                validators: {
                    notEmpty: {
                        message: &#039;Select2 input is required&#039;
                    }
                }
            },
        },

        plugins: {
            trigger: new FormValidation.plugins.Trigger(),
            bootstrap: new FormValidation.plugins.Bootstrap5({
                rowSelector: &#039;.fv-row&#039;,
                eleInvalidClass: &#039;&#039;,
                eleValidClass: &#039;&#039;
            })
        }
    }
);

// Revalidate Select2 input. For more info, plase visit the official plugin site: https://select2.org/
$(form.querySelector(&#039;[name=&quot;select2_input&quot;]&#039;)).on(&#039;change&#039;, function () {
    // Revalidate the field when an option is chosen
    validator.revalidateField(&#039;select2_input&#039;);
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e352d976e22" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Form--&gt;
&lt;form id=&quot;kt_docs_formvalidation_select2&quot; class=&quot;form&quot; action=&quot;#&quot; autocomplete=&quot;off&quot;&gt;
    &lt;!--begin::Input group---&gt;
    &lt;div class=&quot;fv-row mb-10&quot;&gt;
        &lt;!--begin::Label--&gt;
        &lt;label class=&quot;required form-label fs-6 mb-2&quot;&gt;Select2 Input&lt;/label&gt;
        &lt;!--end::Label--&gt;

        &lt;!--begin::Select2--&gt;
        &lt;select class=&quot;form-select&quot; name=&quot;select2_input&quot; data-control=&quot;select2&quot; data-placeholder=&quot;Select an option&quot;&gt;
            &lt;option&gt;&lt;/option&gt;
            &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
            &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
            &lt;option value=&quot;3&quot;&gt;Option 3&lt;/option&gt;
            &lt;option value=&quot;4&quot;&gt;Option 4&lt;/option&gt;
        &lt;/select&gt;
        &lt;!--begin::Select2--&gt;
    &lt;/div&gt;
    &lt;!--end::Input group---&gt;

    &lt;!--begin::Actions--&gt;
    &lt;button id=&quot;kt_docs_formvalidation_select2_submit&quot; type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;
        &lt;span class=&quot;indicator-label&quot;&gt;
            Validation Form
        &lt;/span&gt;
        &lt;span class=&quot;indicator-progress&quot;&gt;
            Please wait... &lt;span class=&quot;spinner-border spinner-border-sm align-middle ms-2&quot;&gt;&lt;/span&gt;
        &lt;/span&gt;
    &lt;/button&gt;
    &lt;!--end::Actions--&gt;
&lt;/form&gt;
&lt;!--end::Form--&gt;</code></pre>
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
                        <h1 class="anchor fw-bold mb-5" id="tagify" data-kt-scroll-offset="50">
                            <a href="#tagify"></a>

                            Tagify
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            For more information on Tagify, please visit the <a href="https://yaireo.github.io/tagify/"
                                target="_blank">official website</a>.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Form-->
                                <form id="kt_docs_formvalidation_tagify" class="form" action="#"
                                    autocomplete="off">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="required fw-semibold fs-6 mb-2">Tagify Input</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control" name="tagify_input" value="" id="kt_tagify" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <button id="kt_docs_formvalidation_tagify_submit" type="submit"
                                        class="btn btn-primary">
                                        <span class="indicator-label">
                                            Validation Form
                                        </span>
                                        <span class="indicator-progress">
                                            Please wait... <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Form-->
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
                                            href="#kt_highlight_68e352d976e48" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e352d976e49" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e352d976e48"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">// Define form element
const form = document.getElementById(&#039;kt_docs_formvalidation_tagify&#039;);

// Init tagify --- for more info, please visit: https://yaireo.github.io/tagify/
var tags = new Tagify(document.querySelector(&quot;#kt_tagify&quot;), {
    whitelist: [&quot;Tag 1&quot;, &quot;Tag 2&quot;, &quot;Tag 3&quot;, &quot;Tag 4&quot;, &quot;Tag 5&quot;, &quot;Tag 6&quot;, &quot;Tag 7&quot;, &quot;Tag 8&quot;, &quot;Tag 9&quot;, &quot;Tag 10&quot;, &quot;Tag 11&quot;, &quot;Tag 12&quot;],
    maxTags: 6,
    dropdown: {
        maxItems: 20,           // &lt;- mixumum allowed rendered suggestions
        classname: &quot;tagify__inline__suggestions&quot;, // &lt;- custom classname for this dropdown, so it could be targeted
        enabled: 0,             // &lt;- show suggestions on focus
        closeOnSelect: false    // &lt;- do not hide the suggestions dropdown once an item has been selected
    }
});

tags.on(&quot;change&quot;, function(){
    // Revalidate the field when an option is chosen
    validator.revalidateField(&#039;tagify_input&#039;);
});

// Init form validation rules. For more info check the FormValidation plugin&#039;s official documentation:https://formvalidation.io/
var validator = FormValidation.formValidation(
    form,
    {
        fields: {
            &#039;tagify_input&#039;: {
                validators: {
                    notEmpty: {
                        message: &#039;Tagify input is required&#039;
                    }
                }
            },
        },

        plugins: {
            trigger: new FormValidation.plugins.Trigger(),
            bootstrap: new FormValidation.plugins.Bootstrap5({
                rowSelector: &#039;.fv-row&#039;,
                eleInvalidClass: &#039;&#039;,
                eleValidClass: &#039;&#039;
            })
        }
    }
);</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e352d976e49" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Form--&gt;
&lt;form id=&quot;kt_docs_formvalidation_tagify&quot; class=&quot;form&quot; action=&quot;#&quot; autocomplete=&quot;off&quot;&gt;
    &lt;!--begin::Input group--&gt;
    &lt;div class=&quot;fv-row mb-10&quot;&gt;
        &lt;!--begin::Label--&gt;
        &lt;label class=&quot;required fw-semibold fs-6 mb-2&quot;&gt;Tagify Input&lt;/label&gt;
        &lt;!--end::Label--&gt;

        &lt;!--begin::Input--&gt;
        &lt;input class=&quot;form-control&quot; name=&quot;tagify_input&quot; value=&quot;&quot; id=&quot;kt_tagify&quot; /&gt;
        &lt;!--end::Input--&gt;
    &lt;/div&gt;
    &lt;!--end::Input group--&gt;
    &lt;!--begin::Actions--&gt;
    &lt;button id=&quot;kt_docs_formvalidation_tagify_submit&quot; type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;
        &lt;span class=&quot;indicator-label&quot;&gt;
            Validation Form
        &lt;/span&gt;
        &lt;span class=&quot;indicator-progress&quot;&gt;
            Please wait... &lt;span class=&quot;spinner-border spinner-border-sm align-middle ms-2&quot;&gt;&lt;/span&gt;
        &lt;/span&gt;
    &lt;/button&gt;
    &lt;!--end::Actions--&gt;
&lt;/form&gt;
&lt;!--end::Form--&gt;</code></pre>
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
                        <h1 class="anchor fw-bold mb-5" id="Datepicker" data-kt-scroll-offset="50">
                            <a href="#Datepicker"></a>

                            Datepicker
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            For more information on Tempus Dominus Bootstrap Datepicker, please visit the <a
                                href="https://getdatepicker.com/" target="_blank">official website</a>.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Form-->
                                <form id="kt_docs_formvalidation_datepicker" class="form" action="#"
                                    autocomplete="off">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="required fw-semibold fs-6 mb-2">Datepicker Input</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control" name="datepicker_input" placeholder="Pick a date"
                                            id="kt_datepicker" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Actions-->
                                    <button id="kt_docs_formvalidation_datepicker_submit" type="submit"
                                        class="btn btn-primary">
                                        <span class="indicator-label">
                                            Validation Form
                                        </span>
                                        <span class="indicator-progress">
                                            Please wait... <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Form-->
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
                                            href="#kt_highlight_68e352d976e6f" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e352d976e70" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e352d976e6f"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">// Define form element
const form = document.getElementById(&quot;kt_docs_formvalidation_datepicker&quot;);

// Tempus Dominus Bootstrap Datepicker --- for more info, please visit: https://getdatepicker.com/
tempusDominus.extend(tempusDominus.plugins.customDateFormat);

new tempusDominus.TempusDominus(document.getElementById(&quot;kt_datepicker&quot;), {
    localization: {
        locale: &quot;en&quot;,
        format: &quot;dd/MM/yyyy, hh:mm T&quot;, // More info: https://getdatepicker.com/6/options/localization.html
    }
});

// Init form validation rules. For more info check the FormValidation plugin&quot;s official documentation:https://formvalidation.io/
var validator = FormValidation.formValidation(
    form,
    {
        fields: {
            &quot;datepicker_input&quot;: {
                validators: {
                    notEmpty: {
                        message: &quot;Flatpickr input is required&quot;
                    }
                }
            },
        },

        plugins: {
            trigger: new FormValidation.plugins.Trigger(),
            bootstrap: new FormValidation.plugins.Bootstrap5({
                rowSelector: &quot;.fv-row&quot;,
                eleInvalidClass: &quot;&quot;,
                eleValidClass: &quot;&quot;
            })
        }
    }
);

var input = form.querySelector(&quot;[name=datepicker_input]&quot;);
input.addEventListener(&quot;change&quot;, function() {
    // Revalidate it
    validator.revalidateField(&quot;datepicker_input&quot;);
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e352d976e70" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;form id=&quot;kt_docs_formvalidation_datepicker&quot; class=&quot;form&quot; action=&quot;#&quot; autocomplete=&quot;off&quot;&gt;
    &lt;!--begin::Input group--&gt;
    &lt;div class=&quot;fv-row mb-10&quot;&gt;
        &lt;!--begin::Label--&gt;
        &lt;label class=&quot;required fw-semibold fs-6 mb-2&quot;&gt;Datepicker Input&lt;/label&gt;
        &lt;!--end::Label--&gt;

        &lt;!--begin::Input--&gt;
        &lt;input class=&quot;form-control&quot; name=&quot;datepicker_input&quot; placeholder=&quot;Pick a date&quot; id=&quot;kt_datepicker&quot; /&gt;
        &lt;!--end::Input--&gt;
    &lt;/div&gt;
    &lt;!--end::Input group--&gt;

    &lt;!--begin::Actions--&gt;
    &lt;button id=&quot;kt_docs_formvalidation_datepicker_submit&quot; type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;
        &lt;span class=&quot;indicator-label&quot;&gt;
            Validation Form
        &lt;/span&gt;
        &lt;span class=&quot;indicator-progress&quot;&gt;
            Please wait... &lt;span class=&quot;spinner-border spinner-border-sm align-middle ms-2&quot;&gt;&lt;/span&gt;
        &lt;/span&gt;
    &lt;/button&gt;
    &lt;!--end::Actions--&gt;
&lt;/form&gt;</code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="inputmask" data-kt-scroll-offset="50">
                            <a href="#inputmask"></a>

                            Inputmask
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            For more information on Inputmask,
                            please visit the <a href="https://github.com/RobinHerbots/Inputmask" target="_blank">official
                                website</a>.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Form-->
                                <form id="kt_docs_formvalidation_inputmask" class="form" action="#"
                                    autocomplete="off">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="required fw-semibold fs-6 mb-2">Date:</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control-solid" name="inputmask_input"
                                            placeholder="Pick a date" id="kt_inputmask" />
                                        <!--end::Input-->

                                        <div class="form-text">
                                            Custom date format: <code>mm/dd/yyyy</code>
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Actions-->
                                    <button id="kt_docs_formvalidation_inputmask_submit" type="submit"
                                        class="btn btn-primary">
                                        <span class="indicator-label">
                                            Validation Form
                                        </span>
                                        <span class="indicator-progress">
                                            Please wait... <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Form-->
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
                                            href="#kt_highlight_68e352d976e96" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e352d976e97" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e352d976e96"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">// Define form element
const form = document.getElementById(&quot;kt_docs_formvalidation_inputmask&quot;);
const maskOptions = {
    &quot;mask&quot; : &quot;(999) 999-9999&quot;
};

// Phone
Inputmask(maskOptions).mask(&quot;#kt_inputmask&quot;);

var input = form.querySelector(&quot;[name=inputmask_input]&quot;);
input.addEventListener(&quot;change&quot;, function() {
    // Revalidate it
    validator.revalidateField(&quot;inputmask_input&quot;);
});

// Init form validation rules. For more info check the FormValidation plugin&quot;s official documentation:https://formvalidation.io/
var validator = FormValidation.formValidation(
    form,
    {
        fields: {
            &quot;inputmask_input&quot;: {
                validators: {
                    notEmpty: {
                        message: &quot;Inputmask input is required&quot;
                    },
                    callback: {
                        message: &quot;Invalid date&quot;,
                        callback: function (input) {
                            return Inputmask.isValid(input.value, maskOptions);
                        }
                    }
                }
            },
        },

        plugins: {
            trigger: new FormValidation.plugins.Trigger(),
            bootstrap: new FormValidation.plugins.Bootstrap5({
                rowSelector: &quot;.fv-row&quot;,
                eleInvalidClass: &quot;&quot;,
                eleValidClass: &quot;&quot;
            })
        }
    }
);

// Submit button handler
const submitButton = document.getElementById(&quot;kt_docs_formvalidation_inputmask_submit&quot;);
submitButton.addEventListener(&quot;click&quot;, function (e) {
    // Prevent default button action
    e.preventDefault();

    // Validate form before submit
    if (validator) {
        validator.validate().then(function (status) {
            console.log(&quot;validated!&quot;);

            if (status == &quot;Valid&quot;) {
                // Show loading indication
                submitButton.setAttribute(&quot;data-kt-indicator&quot;, &quot;on&quot;);

                // Disable button to avoid multiple click
                submitButton.disabled = true;

                // Simulate form submission. For more info check the plugin&quot;s official documentation: https://sweetalert2.github.io/
                setTimeout(function () {
                    // Remove loading indication
                    submitButton.removeAttribute(&quot;data-kt-indicator&quot;);

                    // Enable button
                    submitButton.disabled = false;

                    // Show popup confirmation
                    Swal.fire({
                        text: &quot;Form has been successfully submitted!&quot;,
                        icon: &quot;success&quot;,
                        buttonsStyling: false,
                        confirmButtonText: &quot;Ok, got it!&quot;,
                        customClass: {
                            confirmButton: &quot;btn btn-primary&quot;
                        }
                    });

                    //form.submit(); // Submit form
                }, 2000);
            }
        });
    }
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e352d976e97" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Form--&gt;
&lt;form id=&quot;kt_docs_formvalidation_inputmask&quot; class=&quot;form&quot; action=&quot;#&quot; autocomplete=&quot;off&quot;&gt;
    &lt;!--begin::Input group--&gt;
    &lt;div class=&quot;fv-row mb-10&quot;&gt;
        &lt;!--begin::Label--&gt;
        &lt;label class=&quot;required fw-semibold fs-6 mb-2&quot;&gt;Date:&lt;/label&gt;
        &lt;!--end::Label--&gt;

        &lt;!--begin::Input--&gt;
        &lt;input class=&quot;form-control form-control-solid&quot; name=&quot;inputmask_input&quot; placeholder=&quot;Pick a date&quot; id=&quot;kt_inputmask&quot; /&gt;
        &lt;!--end::Input--&gt;

        &lt;div class=&quot;form-text&quot;&gt;
            Custom date format: &lt;code&gt;mm/dd/yyyy&lt;/code&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;!--end::Input group--&gt;

    &lt;!--begin::Actions--&gt;
    &lt;button id=&quot;kt_docs_formvalidation_inputmask_submit&quot; type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;
        &lt;span class=&quot;indicator-label&quot;&gt;
            Validation Form
        &lt;/span&gt;
        &lt;span class=&quot;indicator-progress&quot;&gt;
            Please wait... &lt;span class=&quot;spinner-border spinner-border-sm align-middle ms-2&quot;&gt;&lt;/span&gt;
        &lt;/span&gt;
    &lt;/button&gt;
    &lt;!--end::Actions--&gt;
&lt;/form&gt;
&lt;!--end::Form--&gt;</code></pre>
                                        </div>
                                    </div>
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
                                <a href="#form-validation" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Form Validation</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#date-range-picker" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Date range picker</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#flatpickr" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Flatpickr</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#image-input" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Image Input</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#password-meter" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Password Meter</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#select2" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Select2</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#tagify" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Tagify</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#Datepicker" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Datepicker</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#inputmask" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Inputmask</span>
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
    <script src="{{ asset('assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/documentation/forms/formvalidation/advanced.js') }}"></script>
    <!--end::Vendors Javascript-->
@endsection


