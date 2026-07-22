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
                            Here's an example of multiple basic <code>input</code> types within a <code>form</code> that has
                            FormValidation attached to it.
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
                        <h1 class="anchor fw-bold mb-5" id="text-input" data-kt-scroll-offset="50">
                            <a href="#text-input"></a>

                            Text Input
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Form-->
                                <form id="kt_docs_formvalidation_text" class="form" action="#" autocomplete="off">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="required fw-semibold fs-6 mb-2">Text Input</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input type="text" name="text_input"
                                            class="form-control form-control-solid mb-3 mb-lg-0" placeholder=""
                                            value="" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Actions-->
                                    <button id="kt_docs_formvalidation_text_submit" type="submit" class="btn btn-primary">
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
                                            href="#kt_highlight_68e351fe574d4" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e351fe574d8" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e351fe574d4" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">// Define form element
const form = document.getElementById(&#039;kt_docs_formvalidation_text&#039;);

// Init form validation rules. For more info check the FormValidation plugin&#039;s official documentation:https://formvalidation.io/
var validator = FormValidation.formValidation(
    form,
    {
        fields: {
            &#039;text_input&#039;: {
                validators: {
                    notEmpty: {
                        message: &#039;Text input is required&#039;
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

// Submit button handler
const submitButton = document.getElementById(&#039;kt_docs_formvalidation_text_submit&#039;);
submitButton.addEventListener(&#039;click&#039;, function (e) {
    // Prevent default button action
    e.preventDefault();

    // Validate form before submit
    if (validator) {
        validator.validate().then(function (status) {
            console.log(&#039;validated!&#039;);

            if (status == &#039;Valid&#039;) {
                // Show loading indication
                submitButton.setAttribute(&#039;data-kt-indicator&#039;, &#039;on&#039;);

                // Disable button to avoid multiple click
                submitButton.disabled = true;

                // Simulate form submission. For more info check the plugin&#039;s official documentation: https://sweetalert2.github.io/
                setTimeout(function () {
                    // Remove loading indication
                    submitButton.removeAttribute(&#039;data-kt-indicator&#039;);

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
                                    <div class="tab-pane fade " id="kt_highlight_68e351fe574d8" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Form--&gt;
&lt;form id=&quot;kt_docs_formvalidation_text&quot; class=&quot;form&quot; action=&quot;#&quot; autocomplete=&quot;off&quot;&gt;
    &lt;!--begin::Input group--&gt;
    &lt;div class=&quot;fv-row mb-10&quot;&gt;
        &lt;!--begin::Label--&gt;
        &lt;label class=&quot;required fw-semibold fs-6 mb-2&quot;&gt;Text Input&lt;/label&gt;
        &lt;!--end::Label--&gt;

        &lt;!--begin::Input--&gt;
        &lt;input type=&quot;text&quot; name=&quot;text_input&quot; class=&quot;form-control form-control-solid mb-3 mb-lg-0&quot; placeholder=&quot;&quot; value=&quot;&quot; /&gt;
        &lt;!--end::Input--&gt;
    &lt;/div&gt;
    &lt;!--end::Input group--&gt;

    &lt;!--begin::Actions--&gt;
    &lt;button id=&quot;kt_docs_formvalidation_text_submit&quot; type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;
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

                        <!--begin::Notice-->
                        <div class="py-5">
                            <!--begin::Information-->
                            <div class="d-flex align-items-center rounded py-5 px-5 bg-light-danger "><i
                                    class="ki-duotone ki-information-5 fs-3x text-danger me-5"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span></i> <!--begin::Description-->
                                <div class="text-gray-700 fw-bold fs-6">
                                    Add <code>fv-row</code> CSS class to the input group to identify the input field that
                                    requires FormValidation Javascript setup
                                    <code>rowSelector: '.fv-row'</code>.
                                </div> <!--end::Description-->
                            </div><!--end::Information-->
                        </div>
                        <!--end::Notice-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="email-input" data-kt-scroll-offset="50">
                            <a href="#email-input"></a>

                            Email Input
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Form-->
                                <form id="kt_docs_formvalidation_email" class="form" action="#"
                                    autocomplete="off">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="required fw-semibold fs-6 mb-2">Email Input</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input type="email" name="email_input"
                                            class="form-control form-control-solid mb-3 mb-lg-0" placeholder=""
                                            value="" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Actions-->
                                    <button id="kt_docs_formvalidation_email_submit" type="submit"
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
                                            href="#kt_highlight_68e351fe57502" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e351fe57503" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e351fe57502"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">// Define form element
const form = document.getElementById(&#039;kt_docs_formvalidation_email&#039;);

// Init form validation rules. For more info check the FormValidation plugin&#039;s official documentation:https://formvalidation.io/
var validator = FormValidation.formValidation(
    form,
    {
        fields: {
            &#039;email_input&#039;: {
                validators: {
                    emailAddress: {
                        message: &#039;The value is not a valid email address&#039;
                    },
                    notEmpty: {
                        message: &#039;Email address is required&#039;
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

// Submit button handler
const submitButton = document.getElementById(&#039;kt_docs_formvalidation_email_submit&#039;);
submitButton.addEventListener(&#039;click&#039;, function (e) {
    // Prevent default button action
    e.preventDefault();

    // Validate form before submit
    if (validator) {
        validator.validate().then(function (status) {
            console.log(&#039;validated!&#039;);

            if (status == &#039;Valid&#039;) {
                // Show loading indication
                submitButton.setAttribute(&#039;data-kt-indicator&#039;, &#039;on&#039;);

                // Disable button to avoid multiple click
                submitButton.disabled = true;

                // Simulate form submission. For more info check the plugin&#039;s official documentation: https://sweetalert2.github.io/
                setTimeout(function () {
                    // Remove loading indication
                    submitButton.removeAttribute(&#039;data-kt-indicator&#039;);

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
                                    <div class="tab-pane fade " id="kt_highlight_68e351fe57503" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Form--&gt;
&lt;form id=&quot;kt_docs_formvalidation_email&quot; class=&quot;form&quot; action=&quot;#&quot; autocomplete=&quot;off&quot;&gt;
    &lt;!--begin::Input group--&gt;
    &lt;div class=&quot;fv-row mb-10&quot;&gt;
        &lt;!--begin::Label--&gt;
        &lt;label class=&quot;required fw-semibold fs-6 mb-2&quot;&gt;Email Input&lt;/label&gt;
        &lt;!--end::Label--&gt;

        &lt;!--begin::Input--&gt;
        &lt;input type=&quot;email&quot; name=&quot;email_input&quot; class=&quot;form-control form-control-solid mb-3 mb-lg-0&quot; placeholder=&quot;&quot; value=&quot;&quot; /&gt;
        &lt;!--end::Input--&gt;
    &lt;/div&gt;
    &lt;!--end::Input group--&gt;

    &lt;!--begin::Actions--&gt;
    &lt;button id=&quot;kt_docs_formvalidation_email_submit&quot; type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;
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

                        <!--begin::Notice-->
                        <div class="py-5">
                            <!--begin::Information-->
                            <div class="d-flex align-items-center rounded py-5 px-5 bg-light-danger "><i
                                    class="ki-duotone ki-information-5 fs-3x text-danger me-5"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span></i> <!--begin::Description-->
                                <div class="text-gray-700 fw-bold fs-6">
                                    Is <code>example@b</code> valid email address?.
                                    Yes! It's valid email address. If you want to treat these kind of email addresses as
                                    invalid one,
                                    you can use <a href="https://formvalidation.io/guide/validators/regexp/"
                                        target="_blank">the regexp validator</a>&nbsp; to define expression of email
                                    address.
                                </div> <!--end::Description-->
                            </div><!--end::Information-->
                        </div>
                        <!--end::Notice-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="textarea-input" data-kt-scroll-offset="50">
                            <a href="#textarea-input"></a>

                            Textarea Input
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Form-->
                                <form id="kt_docs_formvalidation_textarea" class="form" action="#"
                                    autocomplete="off">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="required fw-semibold fs-6 mb-2">Textarea Input</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <textarea name="textarea_input" class="form-control form-control-solid"></textarea>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Actions-->
                                    <button id="kt_docs_formvalidation_textarea_submit" type="submit"
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
                                            href="#kt_highlight_68e351fe57524" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e351fe57525" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e351fe57524"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">// Define form element
const form = document.getElementById(&#039;kt_docs_formvalidation_textarea&#039;);

// Init form validation rules. For more info check the FormValidation plugin&#039;s official documentation:https://formvalidation.io/
var validator = FormValidation.formValidation(
    form,
    {
        fields: {
            &#039;textarea_input&#039;: {
                validators: {
                    notEmpty: {
                        message: &#039;Textarea input is required&#039;
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

// Submit button handler
const submitButton = document.getElementById(&#039;kt_docs_formvalidation_textarea_submit&#039;);
submitButton.addEventListener(&#039;click&#039;, function (e) {
    // Prevent default button action
    e.preventDefault();

    // Validate form before submit
    if (validator) {
        validator.validate().then(function (status) {
            console.log(&#039;validated!&#039;);

            if (status == &#039;Valid&#039;) {
                // Show loading indication
                submitButton.setAttribute(&#039;data-kt-indicator&#039;, &#039;on&#039;);

                // Disable button to avoid multiple click
                submitButton.disabled = true;

                // Simulate form submission. For more info check the plugin&#039;s official documentation: https://sweetalert2.github.io/
                setTimeout(function () {
                    // Remove loading indication
                    submitButton.removeAttribute(&#039;data-kt-indicator&#039;);

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
                                    <div class="tab-pane fade " id="kt_highlight_68e351fe57525" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Form--&gt;
&lt;form id=&quot;kt_docs_formvalidation_textarea&quot; class=&quot;form&quot; action=&quot;#&quot; autocomplete=&quot;off&quot;&gt;
    &lt;!--begin::Input group--&gt;
    &lt;div class=&quot;fv-row mb-10&quot;&gt;
        &lt;!--begin::Label--&gt;
        &lt;label class=&quot;required fw-semibold fs-6 mb-2&quot;&gt;Textarea Input&lt;/label&gt;
        &lt;!--end::Label--&gt;

        &lt;!--begin::Input--&gt;
        &lt;textarea name=&quot;textarea_input&quot; class=&quot;form-control form-control-solid&quot;&gt;&lt;/textarea&gt;
        &lt;!--end::Input--&gt;
    &lt;/div&gt;
    &lt;!--end::Input group--&gt;

    &lt;!--begin::Actions--&gt;
    &lt;button id=&quot;kt_docs_formvalidation_textarea_submit&quot; type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="input-group" data-kt-scroll-offset="50">
                            <a href="#input-group"></a>

                            Input Group
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Form-->
                                <form id="kt_docs_formvalidation_input_group" class="form" action="#"
                                    autocomplete="off">
                                    <!--begin::Input wrapper-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Input group-->
                                        <label for="basic-url" class="required fw-semibold fs-6 mb-2">Your URL</label>
                                        <div class="input-group mb-5">
                                            <span class="input-group-text" id="basic-addon3">example.com</span>
                                            <input type="text" class="form-control" id="basic-url"
                                                name="input_group_input" aria-describedby="basic-addon3" />
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Input wrapper-->

                                    <!--begin::Actions-->
                                    <button id="kt_docs_formvalidation_input_group_submit" type="submit"
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
                                            href="#kt_highlight_68e351fe57542" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e351fe57543" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e351fe57542"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">// Define form element
const form = document.getElementById(&#039;kt_docs_formvalidation_input_group&#039;);

// Init form validation rules. For more info check the FormValidation plugin&#039;s official documentation:https://formvalidation.io/
var validator = FormValidation.formValidation(
    form,
    {
        fields: {
            &#039;input_group_input&#039;: {
                validators: {
                    notEmpty: {
                        message: &#039;Textarea input is required&#039;
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

// Submit button handler
const submitButton = document.getElementById(&#039;kt_docs_formvalidation_input_group_submit&#039;);
submitButton.addEventListener(&#039;click&#039;, function (e) {
    // Prevent default button action
    e.preventDefault();

    // Validate form before submit
    if (validator) {
        validator.validate().then(function (status) {
            console.log(&#039;validated!&#039;);

            if (status == &#039;Valid&#039;) {
                // Show loading indication
                submitButton.setAttribute(&#039;data-kt-indicator&#039;, &#039;on&#039;);

                // Disable button to avoid multiple click
                submitButton.disabled = true;

                // Simulate form submission. For more info check the plugin&#039;s official documentation: https://sweetalert2.github.io/
                setTimeout(function () {
                    // Remove loading indication
                    submitButton.removeAttribute(&#039;data-kt-indicator&#039;);

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
                                    <div class="tab-pane fade " id="kt_highlight_68e351fe57543" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Form--&gt;
&lt;form id=&quot;kt_docs_formvalidation_input_group&quot; class=&quot;form&quot; action=&quot;#&quot; autocomplete=&quot;off&quot;&gt;
    &lt;!--begin::Input wrapper--&gt;
    &lt;div class=&quot;fv-row mb-10&quot;&gt;
        &lt;!--begin::Input group--&gt;
        &lt;label for=&quot;basic-url&quot; class=&quot;required fw-semibold fs-6 mb-2&quot;&gt;Your URL&lt;/label&gt;
        &lt;div class=&quot;input-group mb-5&quot;&gt;
            &lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon3&quot;&gt;example.com&lt;/span&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;basic-url&quot; name=&quot;input_group_input&quot; aria-describedby=&quot;basic-addon3&quot;/&gt;
        &lt;/div&gt;
        &lt;!--end::Input group--&gt;
    &lt;/div&gt;
    &lt;!--end::Input wrapper--&gt;

    &lt;!--begin::Actions--&gt;
    &lt;button id=&quot;kt_docs_formvalidation_input_group_submit&quot; type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="radio-input" data-kt-scroll-offset="50">
                            <a href="#radio-input"></a>

                            Radio Input
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Form-->
                                <form id="kt_docs_formvalidation_radio" class="form" action="#"
                                    autocomplete="off">
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="required fw-semibold fs-6 mb-5">Radio Input</label>
                                        <!--end::Label-->

                                        <!--begin::Input row-->
                                        <div class="d-flex flex-column fv-row">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid mb-5">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="radio_input" type="radio"
                                                    value="1" id="kt_docs_formvalidation_radio_option_1" />
                                                <!--end::Input-->

                                                <!--begin::Label-->
                                                <label class="form-check-label"
                                                    for="kt_docs_formvalidation_radio_option_1">
                                                    <div class="fw-semibold text-gray-800">Radio option 1</div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid mb-5">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="radio_input" type="radio"
                                                    value="2" id="kt_docs_formvalidation_radio_option_2" />
                                                <!--end::Input-->

                                                <!--begin::Label-->
                                                <label class="form-check-label"
                                                    for="kt_docs_formvalidation_radio_option_2">
                                                    <div class="fw-semibold text-gray-800">Radio option 2</div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="radio_input" type="radio"
                                                    value="3" id="kt_docs_formvalidation_radio_option_3" />
                                                <!--end::Input-->

                                                <!--begin::Label-->
                                                <label class="form-check-label"
                                                    for="kt_docs_formvalidation_radio_option_3">
                                                    <div class="fw-semibold text-gray-800">Radio option 3</div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Radio-->
                                        </div>
                                        <!--end::Input row-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Actions-->
                                    <button id="kt_docs_formvalidation_radio_submit" type="submit"
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
                                            href="#kt_highlight_68e351fe57561" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e351fe57562" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e351fe57561"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">// Define form element
const form = document.getElementById(&#039;kt_docs_formvalidation_radio&#039;);

// Init form validation rules. For more info check the FormValidation plugin&#039;s official documentation:https://formvalidation.io/
var validator = FormValidation.formValidation(
    form,
    {
        fields: {
            &#039;radio_input&#039;: {
                validators: {
                    notEmpty: {
                        message: &#039;Radio input is required&#039;
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

// Submit button handler
const submitButton = document.getElementById(&#039;kt_docs_formvalidation_radio_submit&#039;);
submitButton.addEventListener(&#039;click&#039;, function (e) {
    // Prevent default button action
    e.preventDefault();

    // Validate form before submit
    if (validator) {
        validator.validate().then(function (status) {
            console.log(&#039;validated!&#039;);

            if (status == &#039;Valid&#039;) {
                // Show loading indication
                submitButton.setAttribute(&#039;data-kt-indicator&#039;, &#039;on&#039;);

                // Disable button to avoid multiple click
                submitButton.disabled = true;

                // Simulate form submission. For more info check the plugin&#039;s official documentation: https://sweetalert2.github.io/
                setTimeout(function () {
                    // Remove loading indication
                    submitButton.removeAttribute(&#039;data-kt-indicator&#039;);

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
                                    <div class="tab-pane fade " id="kt_highlight_68e351fe57562" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Form--&gt;
&lt;form id=&quot;kt_docs_formvalidation_radio&quot; class=&quot;form&quot; action=&quot;#&quot; autocomplete=&quot;off&quot;&gt;
    &lt;!--begin::Input group--&gt;
    &lt;div class=&quot;mb-10&quot;&gt;
        &lt;!--begin::Label--&gt;
        &lt;label class=&quot;required fw-semibold fs-6 mb-5&quot;&gt;Radio Input&lt;/label&gt;
        &lt;!--end::Label--&gt;

        &lt;!--begin::Input row--&gt;
        &lt;div class=&quot;d-flex flex-column fv-row&quot;&gt;
            &lt;!--begin::Radio--&gt;
            &lt;div class=&quot;form-check form-check-custom form-check-solid mb-5&quot;&gt;
                &lt;!--begin::Input--&gt;
                &lt;input class=&quot;form-check-input me-3&quot; name=&quot;radio_input&quot; type=&quot;radio&quot; value=&quot;1&quot; id=&quot;kt_docs_formvalidation_radio_option_1&quot; /&gt;
                &lt;!--end::Input--&gt;

                &lt;!--begin::Label--&gt;
                &lt;label class=&quot;form-check-label&quot; for=&quot;kt_docs_formvalidation_radio_option_1&quot;&gt;
                    &lt;div class=&quot;fw-semibold text-gray-800&quot;&gt;Radio option 1&lt;/div&gt;
                &lt;/label&gt;
                &lt;!--end::Label--&gt;
            &lt;/div&gt;
            &lt;!--end::Radio--&gt;

            &lt;!--begin::Radio--&gt;
            &lt;div class=&quot;form-check form-check-custom form-check-solid mb-5&quot;&gt;
                &lt;!--begin::Input--&gt;
                &lt;input class=&quot;form-check-input me-3&quot; name=&quot;radio_input&quot; type=&quot;radio&quot; value=&quot;2&quot; id=&quot;kt_docs_formvalidation_radio_option_2&quot; /&gt;
                &lt;!--end::Input--&gt;

                &lt;!--begin::Label--&gt;
                &lt;label class=&quot;form-check-label&quot; for=&quot;kt_docs_formvalidation_radio_option_2&quot;&gt;
                    &lt;div class=&quot;fw-semibold text-gray-800&quot;&gt;Radio option 2&lt;/div&gt;
                &lt;/label&gt;
                &lt;!--end::Label--&gt;
            &lt;/div&gt;
            &lt;!--end::Radio--&gt;

            &lt;!--begin::Radio--&gt;
            &lt;div class=&quot;form-check form-check-custom form-check-solid&quot;&gt;
                &lt;!--begin::Input--&gt;
                &lt;input class=&quot;form-check-input me-3&quot; name=&quot;radio_input&quot; type=&quot;radio&quot; value=&quot;3&quot; id=&quot;kt_docs_formvalidation_radio_option_3&quot; /&gt;
                &lt;!--end::Input--&gt;

                &lt;!--begin::Label--&gt;
                &lt;label class=&quot;form-check-label&quot; for=&quot;kt_docs_formvalidation_radio_option_3&quot;&gt;
                    &lt;div class=&quot;fw-semibold text-gray-800&quot;&gt;Radio option 3&lt;/div&gt;
                &lt;/label&gt;
                &lt;!--end::Label--&gt;
            &lt;/div&gt;
            &lt;!--end::Radio--&gt;
        &lt;/div&gt;
        &lt;!--end::Input row--&gt;
    &lt;/div&gt;
    &lt;!--end::Input group--&gt;

    &lt;!--begin::Actions--&gt;
    &lt;button id=&quot;kt_docs_formvalidation_radio_submit&quot; type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;
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
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="checkbox-input" data-kt-scroll-offset="50">
                            <a href="#checkbox-input"></a>

                            Checkbox Input
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Form-->
                                <form id="kt_docs_formvalidation_checkbox" class="form" action="#"
                                    autocomplete="off">
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="required fw-semibold fs-6 mb-5">Checkbox Input</label>
                                        <!--end::Label-->

                                        <!--begin::Input row-->
                                        <div class="d-flex flex-column fv-row">
                                            <!--begin::Checkbox-->
                                            <div class="form-check form-check-custom form-check-solid mb-5">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="checkbox_input"
                                                    type="checkbox" value="1"
                                                    id="kt_docs_formvalidation_checkbox_option_1" />
                                                <!--end::Input-->

                                                <!--begin::Label-->
                                                <label class="form-check-label"
                                                    for="kt_docs_formvalidation_checkbox_option_1">
                                                    <div class="fw-semibold text-gray-800">Checkbox option 1</div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Checkbox-->

                                            <!--begin::Checkbox-->
                                            <div class="form-check form-check-custom form-check-solid mb-5">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="checkbox_input"
                                                    type="checkbox" value="2"
                                                    id="kt_docs_formvalidation_checkbox_option_2" />
                                                <!--end::Input-->

                                                <!--begin::Label-->
                                                <label class="form-check-label"
                                                    for="kt_docs_formvalidation_checkbox_option_2">
                                                    <div class="fw-semibold text-gray-800">Checkbox option 2</div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Checkbox-->

                                            <!--begin::Checkbox-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="checkbox_input"
                                                    type="checkbox" value="3"
                                                    id="kt_docs_formvalidation_checkbox_option_3" />
                                                <!--end::Input-->

                                                <!--begin::Label-->
                                                <label class="form-check-label"
                                                    for="kt_docs_formvalidation_checkbox_option_3">
                                                    <div class="fw-semibold text-gray-800">Checkbox option 3</div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Checkbox-->
                                        </div>
                                        <!--end::Input row-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Actions-->
                                    <button id="kt_docs_formvalidation_checkbox_submit" type="submit"
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
                        <div class="pt-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e351fe57587" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e351fe57588" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e351fe57587"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">// Define form element
const form = document.getElementById(&#039;kt_docs_formvalidation_checkbox&#039;);

// Init form validation rules. For more info check the FormValidation plugin&#039;s official documentation:https://formvalidation.io/
var validator = FormValidation.formValidation(
    form,
    {
        fields: {
            &#039;checkbox_input&#039;: {
                validators: {
                    notEmpty: {
                        message: &#039;Radio input is required&#039;
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

// Submit button handler
const submitButton = document.getElementById(&#039;kt_docs_formvalidation_checkbox_submit&#039;);
submitButton.addEventListener(&#039;click&#039;, function (e) {
    // Prevent default button action
    e.preventDefault();

    // Validate form before submit
    if (validator) {
        validator.validate().then(function (status) {
            console.log(&#039;validated!&#039;);

            if (status == &#039;Valid&#039;) {
                // Show loading indication
                submitButton.setAttribute(&#039;data-kt-indicator&#039;, &#039;on&#039;);

                // Disable button to avoid multiple click
                submitButton.disabled = true;

                // Simulate form submission. For more info check the plugin&#039;s official documentation: https://sweetalert2.github.io/
                setTimeout(function () {
                    // Remove loading indication
                    submitButton.removeAttribute(&#039;data-kt-indicator&#039;);

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
                                    <div class="tab-pane fade " id="kt_highlight_68e351fe57588" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Form--&gt;
&lt;form id=&quot;kt_docs_formvalidation_checkbox&quot; class=&quot;form&quot; action=&quot;#&quot; autocomplete=&quot;off&quot;&gt;
    &lt;!--begin::Input group--&gt;
    &lt;div class=&quot;mb-10&quot;&gt;
        &lt;!--begin::Label--&gt;
        &lt;label class=&quot;required fw-semibold fs-6 mb-5&quot;&gt;Checkbox Input&lt;/label&gt;
        &lt;!--end::Label--&gt;

        &lt;!--begin::Input row--&gt;
        &lt;div class=&quot;d-flex flex-column fv-row&quot;&gt;
            &lt;!--begin::Checkbox--&gt;
            &lt;div class=&quot;form-check form-check-custom form-check-solid mb-5&quot;&gt;
                &lt;!--begin::Input--&gt;
                &lt;input class=&quot;form-check-input me-3&quot; name=&quot;checkbox_input&quot; type=&quot;checkbox&quot; value=&quot;1&quot; id=&quot;kt_docs_formvalidation_checkbox_option_1&quot; /&gt;
                &lt;!--end::Input--&gt;

                &lt;!--begin::Label--&gt;
                &lt;label class=&quot;form-check-label&quot; for=&quot;kt_docs_formvalidation_checkbox_option_1&quot;&gt;
                    &lt;div class=&quot;fw-semibold text-gray-800&quot;&gt;Checkbox option 1&lt;/div&gt;
                &lt;/label&gt;
                &lt;!--end::Label--&gt;
            &lt;/div&gt;
            &lt;!--end::Checkbox--&gt;

            &lt;!--begin::Checkbox--&gt;
            &lt;div class=&quot;form-check form-check-custom form-check-solid mb-5&quot;&gt;
                &lt;!--begin::Input--&gt;
                &lt;input class=&quot;form-check-input me-3&quot; name=&quot;checkbox_input&quot; type=&quot;checkbox&quot; value=&quot;2&quot; id=&quot;kt_docs_formvalidation_checkbox_option_2&quot; /&gt;
                &lt;!--end::Input--&gt;

                &lt;!--begin::Label--&gt;
                &lt;label class=&quot;form-check-label&quot; for=&quot;kt_docs_formvalidation_checkbox_option_2&quot;&gt;
                    &lt;div class=&quot;fw-semibold text-gray-800&quot;&gt;Checkbox option 2&lt;/div&gt;
                &lt;/label&gt;
                &lt;!--end::Label--&gt;
            &lt;/div&gt;
            &lt;!--end::Checkbox--&gt;

            &lt;!--begin::Checkbox--&gt;
            &lt;div class=&quot;form-check form-check-custom form-check-solid&quot;&gt;
                &lt;!--begin::Input--&gt;
                &lt;input class=&quot;form-check-input me-3&quot; name=&quot;checkbox_input&quot; type=&quot;checkbox&quot; value=&quot;3&quot; id=&quot;kt_docs_formvalidation_checkbox_option_3&quot; /&gt;
                &lt;!--end::Input--&gt;

                &lt;!--begin::Label--&gt;
                &lt;label class=&quot;form-check-label&quot; for=&quot;kt_docs_formvalidation_checkbox_option_3&quot;&gt;
                    &lt;div class=&quot;fw-semibold text-gray-800&quot;&gt;Checkbox option 3&lt;/div&gt;
                &lt;/label&gt;
                &lt;!--end::Label--&gt;
            &lt;/div&gt;
            &lt;!--end::Checkbox--&gt;
        &lt;/div&gt;
        &lt;!--end::Input row--&gt;
    &lt;/div&gt;
    &lt;!--end::Input group--&gt;

    &lt;!--begin::Actions--&gt;
    &lt;button id=&quot;kt_docs_formvalidation_checkbox_submit&quot; type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;
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
                                <a href="#text-input" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Text Input</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#email-input" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Email Input</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#textarea-input" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Textarea Input</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#input-group" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Input Group</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#radio-input" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Radio Input</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#checkbox-input" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Checkbox Input</span>
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
    <script src="{{ asset('assets/js/custom/documentation/forms/formvalidation/basic.js') }}"></script>
    <!--end::Vendors Javascript-->
@endsection


