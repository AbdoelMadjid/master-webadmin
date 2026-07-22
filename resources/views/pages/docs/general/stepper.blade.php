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
                            Stepper is an exclusive plugin of Metronic for handling forms with multiple steps.
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
                            Stepper's CSS and Javascript files are bundled in the global style and scripts bundles and are
                            globally included in all pages:
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;link href=&quot;assets/css/style.bundle.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot;/&gt;
&lt;script src=&quot;assets/js/scripts.bundle.js&quot;&gt;&lt;/script&gt;</code></pre>
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
                                    Stepper does not come with its own custom CSS and it uses global input controls and
                                    related elements.
                                </li>
                                <li class="py-2">
                                    Stepper elements are defined with <code>data-kt-stepper-*</code> HTML attributes.
                                </li>
                                <li class="py-2">
                                    Stepper instances can be created programmatically. See below for more info.
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
                            Use <code>.stepper</code> and <code>.stepper-pills</code> classes to enable a basic form steps
                            with title, number and icon elements:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10 p-lg-20">
                                <!--begin::Stepper-->
                                <div class="stepper stepper-pills" id="kt_stepper_example_basic">
                                    <!--begin::Nav-->
                                    <div class="stepper-nav flex-center flex-wrap mb-10">
                                        <!--begin::Step 1-->
                                        <div class="stepper-item mx-8 my-4 current" data-kt-stepper-element="nav">
                                            <!--begin::Wrapper-->
                                            <div class="stepper-wrapper d-flex align-items-center">
                                                <!--begin::Icon-->
                                                <div class="stepper-icon w-40px h-40px">
                                                    <i class="stepper-check fas fa-check"></i>
                                                    <span class="stepper-number">1</span>
                                                </div>
                                                <!--end::Icon-->

                                                <!--begin::Label-->
                                                <div class="stepper-label">
                                                    <h3 class="stepper-title">
                                                        Step 1
                                                    </h3>

                                                    <div class="stepper-desc">
                                                        Description
                                                    </div>
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Wrapper-->

                                            <!--begin::Line-->
                                            <div class="stepper-line h-40px"></div>
                                            <!--end::Line-->
                                        </div>
                                        <!--end::Step 1-->

                                        <!--begin::Step 2-->
                                        <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav">
                                            <!--begin::Wrapper-->
                                            <div class="stepper-wrapper d-flex align-items-center">
                                                <!--begin::Icon-->
                                                <div class="stepper-icon w-40px h-40px">
                                                    <i class="stepper-check fas fa-check"></i>
                                                    <span class="stepper-number">2</span>
                                                </div>
                                                <!--begin::Icon-->

                                                <!--begin::Label-->
                                                <div class="stepper-label">
                                                    <h3 class="stepper-title">
                                                        Step 2
                                                    </h3>

                                                    <div class="stepper-desc">
                                                        Description
                                                    </div>
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Wrapper-->

                                            <!--begin::Line-->
                                            <div class="stepper-line h-40px"></div>
                                            <!--end::Line-->
                                        </div>
                                        <!--end::Step 2-->

                                        <!--begin::Step 3-->
                                        <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav">
                                            <!--begin::Wrapper-->
                                            <div class="stepper-wrapper d-flex align-items-center">
                                                <!--begin::Icon-->
                                                <div class="stepper-icon w-40px h-40px">
                                                    <i class="stepper-check fas fa-check"></i>
                                                    <span class="stepper-number">3</span>
                                                </div>
                                                <!--begin::Icon-->

                                                <!--begin::Label-->
                                                <div class="stepper-label">
                                                    <h3 class="stepper-title">
                                                        Step 3
                                                    </h3>

                                                    <div class="stepper-desc">
                                                        Description
                                                    </div>
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Wrapper-->

                                            <!--begin::Line-->
                                            <div class="stepper-line h-40px"></div>
                                            <!--end::Line-->
                                        </div>
                                        <!--end::Step 3-->

                                        <!--begin::Step 4-->
                                        <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav">
                                            <!--begin::Wrapper-->
                                            <div class="stepper-wrapper d-flex align-items-center">
                                                <!--begin::Icon-->
                                                <div class="stepper-icon w-40px h-40px">
                                                    <i class="stepper-check fas fa-check"></i>
                                                    <span class="stepper-number">4</span>
                                                </div>
                                                <!--begin::Icon-->

                                                <!--begin::Label-->
                                                <div class="stepper-label">
                                                    <h3 class="stepper-title">
                                                        Step 4
                                                    </h3>

                                                    <div class="stepper-desc">
                                                        Description
                                                    </div>
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Wrapper-->

                                            <!--begin::Line-->
                                            <div class="stepper-line h-40px"></div>
                                            <!--end::Line-->
                                        </div>
                                        <!--end::Step 4-->
                                    </div>
                                    <!--end::Nav-->

                                    <!--begin::Form-->
                                    <form class="form w-lg-500px mx-auto" novalidate="novalidate">
                                        <!--begin::Group-->
                                        <div class="mb-5">
                                            <!--begin::Step 1-->
                                            <div class="flex-column current" data-kt-stepper-element="content">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label">Example Label 1</label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-solid"
                                                        name="input1" placeholder="" value="" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label">Example Label 2</label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-solid"
                                                        name="input2" placeholder="" value="" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label">Example Label 3</label>
                                                    <!--end::Label-->

                                                    <!--begin::Switch-->
                                                    <label
                                                        class="form-check form-switch form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" checked="checked"
                                                            value="1" />
                                                        <span class="form-check-label">
                                                            Switch
                                                        </span>
                                                    </label>
                                                    <!--end::Switch-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--begin::Step 1-->

                                            <!--begin::Step 1-->
                                            <div class="flex-column" data-kt-stepper-element="content">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label">Example Label 1</label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-solid"
                                                        name="input1" placeholder="" value="" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label">Example Label 2</label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <textarea class="form-control form-control-solid" rows="3" name="input2" placeholder=""></textarea>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label">Example Label 3</label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <label class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" checked="checked" type="checkbox"
                                                            value="1" />
                                                        <span class="form-check-label">
                                                            Checkbox
                                                        </span>
                                                    </label>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--begin::Step 1-->

                                            <!--begin::Step 1-->
                                            <div class="flex-column" data-kt-stepper-element="content">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label d-flex align-items-center">
                                                        <span class="required">Input 1</span>


                                                        <span class="ms-1" data-bs-toggle="tooltip"
                                                            title="Example tooltip">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span></i></span> </label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-solid"
                                                        name="input1" placeholder="" value="" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label">
                                                        Input 2
                                                    </label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-solid"
                                                        name="input2" placeholder="" value="" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--begin::Step 1-->

                                            <!--begin::Step 1-->
                                            <div class="flex-column" data-kt-stepper-element="content">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label d-flex align-items-center">
                                                        <span class="required">Input 1</span>
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                            data-bs-toggle="tooltip" title="Example tooltip"></i>
                                                    </label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-solid"
                                                        name="input1" placeholder="" value="" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label">
                                                        Input 2
                                                    </label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-solid"
                                                        name="input2" placeholder="" value="" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label">
                                                        Input 3
                                                    </label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-solid"
                                                        name="input3" placeholder="" value="" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--begin::Step 1-->
                                        </div>
                                        <!--end::Group-->

                                        <!--begin::Actions-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Wrapper-->
                                            <div class="me-2">
                                                <button type="button" class="btn btn-light btn-active-light-primary"
                                                    data-kt-stepper-action="previous">
                                                    Back
                                                </button>
                                            </div>
                                            <!--end::Wrapper-->

                                            <!--begin::Wrapper-->
                                            <div>
                                                <button type="button" class="btn btn-primary"
                                                    data-kt-stepper-action="submit">
                                                    <span class="indicator-label">
                                                        Submit
                                                    </span>
                                                    <span class="indicator-progress">
                                                        Please wait... <span
                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                    </span>
                                                </button>

                                                <button type="button" class="btn btn-primary"
                                                    data-kt-stepper-action="next">
                                                    Continue
                                                </button>
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Stepper-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Notice-->
                        <div class="py-5">
                            <!--begin::Information-->
                            <div class="d-flex align-items-center rounded py-5 px-5 bg-light-success "><i
                                    class="ki-duotone ki-information-5 fs-3x text-success me-5"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span></i> <!--begin::Description-->
                                <div class="text-gray-700 fw-bold fs-6">
                                    Add <code>.mark-completed</code> class after <code>.stepper-item</code> to mark the step
                                    checked checked(Step 4) when it's active.
                                </div> <!--end::Description-->
                            </div><!--end::Information-->
                        </div>
                        <!--end::Notice-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e5bd04662f4" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e5bd04662f7" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5bd04662f4"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript"><code class="language-javascript">// Stepper lement
var element = document.querySelector(&quot;#kt_stepper_example_basic&quot;);

// Initialize Stepper
var stepper = new KTStepper(element);

// Handle next step
stepper.on(&quot;kt.stepper.next&quot;, function (stepper) {
    stepper.goNext(); // go next step
});

// Handle previous step
stepper.on(&quot;kt.stepper.previous&quot;, function (stepper) {
    stepper.goPrevious(); // go previous step
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e5bd04662f7" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Stepper--&gt;
&lt;div class=&quot;stepper stepper-pills&quot; id=&quot;kt_stepper_example_basic&quot;&gt;
&lt;!--begin::Nav--&gt;
&lt;div class=&quot;stepper-nav flex-center flex-wrap mb-10&quot;&gt;
    &lt;!--begin::Step 1--&gt;
    &lt;div class=&quot;stepper-item mx-8 my-4 current&quot; data-kt-stepper-element=&quot;nav&quot;&gt;
        &lt;!--begin::Wrapper--&gt;
        &lt;div class=&quot;stepper-wrapper d-flex align-items-center&quot;&gt;
            &lt;!--begin::Icon--&gt;
            &lt;div class=&quot;stepper-icon w-40px h-40px&quot;&gt;
                &lt;i class=&quot;stepper-check fas fa-check&quot;&gt;&lt;/i&gt;
                &lt;span class=&quot;stepper-number&quot;&gt;1&lt;/span&gt;
            &lt;/div&gt;
            &lt;!--end::Icon--&gt;

            &lt;!--begin::Label--&gt;
            &lt;div class=&quot;stepper-label&quot;&gt;
                &lt;h3 class=&quot;stepper-title&quot;&gt;
                    Step 1
                &lt;/h3&gt;

                &lt;div class=&quot;stepper-desc&quot;&gt;
                    Description
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;!--end::Label--&gt;
        &lt;/div&gt;
        &lt;!--end::Wrapper--&gt;

        &lt;!--begin::Line--&gt;
        &lt;div class=&quot;stepper-line h-40px&quot;&gt;&lt;/div&gt;
        &lt;!--end::Line--&gt;
    &lt;/div&gt;
    &lt;!--end::Step 1--&gt;

    &lt;!--begin::Step 2--&gt;
    &lt;div class=&quot;stepper-item mx-8 my-4&quot; data-kt-stepper-element=&quot;nav&quot;&gt;
        &lt;!--begin::Wrapper--&gt;
        &lt;div class=&quot;stepper-wrapper d-flex align-items-center&quot;&gt;
             &lt;!--begin::Icon--&gt;
            &lt;div class=&quot;stepper-icon w-40px h-40px&quot;&gt;
                &lt;i class=&quot;stepper-check fas fa-check&quot;&gt;&lt;/i&gt;
                &lt;span class=&quot;stepper-number&quot;&gt;2&lt;/span&gt;
            &lt;/div&gt;
            &lt;!--begin::Icon--&gt;

            &lt;!--begin::Label--&gt;
            &lt;div class=&quot;stepper-label&quot;&gt;
                &lt;h3 class=&quot;stepper-title&quot;&gt;
                    Step 2
                &lt;/h3&gt;

                &lt;div class=&quot;stepper-desc&quot;&gt;
                    Description
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;!--end::Label--&gt;
        &lt;/div&gt;
        &lt;!--end::Wrapper--&gt;

        &lt;!--begin::Line--&gt;
        &lt;div class=&quot;stepper-line h-40px&quot;&gt;&lt;/div&gt;
        &lt;!--end::Line--&gt;
    &lt;/div&gt;
    &lt;!--end::Step 2--&gt;

    &lt;!--begin::Step 3--&gt;
    &lt;div class=&quot;stepper-item mx-8 my-4&quot; data-kt-stepper-element=&quot;nav&quot;&gt;
        &lt;!--begin::Wrapper--&gt;
        &lt;div class=&quot;stepper-wrapper d-flex align-items-center&quot;&gt;
             &lt;!--begin::Icon--&gt;
            &lt;div class=&quot;stepper-icon w-40px h-40px&quot;&gt;
                &lt;i class=&quot;stepper-check fas fa-check&quot;&gt;&lt;/i&gt;
                &lt;span class=&quot;stepper-number&quot;&gt;3&lt;/span&gt;
            &lt;/div&gt;
            &lt;!--begin::Icon--&gt;

            &lt;!--begin::Label--&gt;
            &lt;div class=&quot;stepper-label&quot;&gt;
                &lt;h3 class=&quot;stepper-title&quot;&gt;
                    Step 3
                &lt;/h3&gt;

                &lt;div class=&quot;stepper-desc&quot;&gt;
                    Description
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;!--end::Label--&gt;
        &lt;/div&gt;
        &lt;!--end::Wrapper--&gt;

        &lt;!--begin::Line--&gt;
        &lt;div class=&quot;stepper-line h-40px&quot;&gt;&lt;/div&gt;
        &lt;!--end::Line--&gt;
    &lt;/div&gt;
    &lt;!--end::Step 3--&gt;

    &lt;!--begin::Step 4--&gt;
    &lt;div class=&quot;stepper-item mx-8 my-4&quot; data-kt-stepper-element=&quot;nav&quot;&gt;
        &lt;!--begin::Wrapper--&gt;
        &lt;div class=&quot;stepper-wrapper d-flex align-items-center&quot;&gt;
             &lt;!--begin::Icon--&gt;
            &lt;div class=&quot;stepper-icon w-40px h-40px&quot;&gt;
                &lt;i class=&quot;stepper-check fas fa-check&quot;&gt;&lt;/i&gt;
                &lt;span class=&quot;stepper-number&quot;&gt;4&lt;/span&gt;
            &lt;/div&gt;
            &lt;!--begin::Icon--&gt;

            &lt;!--begin::Label--&gt;
            &lt;div class=&quot;stepper-label&quot;&gt;
                &lt;h3 class=&quot;stepper-title&quot;&gt;
                    Step 4
                &lt;/h3&gt;

                &lt;div class=&quot;stepper-desc&quot;&gt;
                    Description
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;!--end::Label--&gt;
        &lt;/div&gt;
        &lt;!--end::Wrapper--&gt;

        &lt;!--begin::Line--&gt;
        &lt;div class=&quot;stepper-line h-40px&quot;&gt;&lt;/div&gt;
        &lt;!--end::Line--&gt;
    &lt;/div&gt;
    &lt;!--end::Step 4--&gt;
&lt;/div&gt;
&lt;!--end::Nav--&gt;

    &lt;!--begin::Form--&gt;
    &lt;form class=&quot;form w-lg-500px mx-auto&quot; novalidate=&quot;novalidate&quot; id=&quot;kt_stepper_example_basic_form&quot;&gt;
        &lt;!--begin::Group--&gt;
        &lt;div class=&quot;mb-5&quot;&gt;
            &lt;!--begin::Step 1--&gt;
            &lt;div class=&quot;flex-column current&quot; data-kt-stepper-element=&quot;content&quot;&gt;
                &lt;!--begin::Input group--&gt;
                &lt;div class=&quot;fv-row mb-10&quot;&gt;
                    &lt;!--begin::Label--&gt;
                    &lt;label class=&quot;form-label&quot;&gt;Example Label 1&lt;/label&gt;
                    &lt;!--end::Label--&gt;

                    &lt;!--begin::Input--&gt;
                    &lt;input type=&quot;text&quot; class=&quot;form-control form-control-solid&quot; name=&quot;input1&quot; placeholder=&quot;&quot; value=&quot;&quot;/&gt;
                    &lt;!--end::Input--&gt;
                &lt;/div&gt;
                &lt;!--end::Input group--&gt;

                &lt;!--begin::Input group--&gt;
                &lt;div class=&quot;fv-row mb-10&quot;&gt;
                    &lt;!--begin::Label--&gt;
                    &lt;label class=&quot;form-label&quot;&gt;Example Label 2&lt;/label&gt;
                    &lt;!--end::Label--&gt;

                    &lt;!--begin::Input--&gt;
                    &lt;input type=&quot;text&quot; class=&quot;form-control form-control-solid&quot; name=&quot;input2&quot; placeholder=&quot;&quot; value=&quot;&quot;/&gt;
                    &lt;!--end::Input--&gt;
                &lt;/div&gt;
                &lt;!--end::Input group--&gt;

                &lt;!--begin::Input group--&gt;
                &lt;div class=&quot;fv-row mb-10&quot;&gt;
                    &lt;!--begin::Label--&gt;
                    &lt;label class=&quot;form-label&quot;&gt;Example Label 3&lt;/label&gt;
                    &lt;!--end::Label--&gt;

                    &lt;!--begin::Switch--&gt;
                    &lt;label class=&quot;form-check form-switch form-check-custom form-check-solid&quot;&gt;
                        &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; checked=&quot;checked&quot; value=&quot;1&quot;/&gt;
                        &lt;span class=&quot;form-check-label&quot;&gt;
                            Switch
                        &lt;/span&gt;
                    &lt;/label&gt;
                    &lt;!--end::Switch--&gt;
                &lt;/div&gt;
                &lt;!--end::Input group--&gt;
            &lt;/div&gt;
            &lt;!--begin::Step 1--&gt;

            &lt;!--begin::Step 1--&gt;
            &lt;div class=&quot;flex-column&quot; data-kt-stepper-element=&quot;content&quot;&gt;
                &lt;!--begin::Input group--&gt;
                &lt;div class=&quot;fv-row mb-10&quot;&gt;
                    &lt;!--begin::Label--&gt;
                    &lt;label class=&quot;form-label&quot;&gt;Example Label 1&lt;/label&gt;
                    &lt;!--end::Label--&gt;

                    &lt;!--begin::Input--&gt;
                    &lt;input type=&quot;text&quot; class=&quot;form-control form-control-solid&quot; name=&quot;input1&quot; placeholder=&quot;&quot; value=&quot;&quot;/&gt;
                    &lt;!--end::Input--&gt;
                &lt;/div&gt;
                &lt;!--end::Input group--&gt;

                &lt;!--begin::Input group--&gt;
                &lt;div class=&quot;fv-row mb-10&quot;&gt;
                    &lt;!--begin::Label--&gt;
                    &lt;label class=&quot;form-label&quot;&gt;Example Label 2&lt;/label&gt;
                    &lt;!--end::Label--&gt;

                    &lt;!--begin::Input--&gt;
                    &lt;textarea class=&quot;form-control form-control-solid&quot; rows=&quot;3&quot; name=&quot;input2&quot; placeholder=&quot;&quot;&gt;&lt;/textarea&gt;
                    &lt;!--end::Input--&gt;
                &lt;/div&gt;
                &lt;!--end::Input group--&gt;

                &lt;!--begin::Input group--&gt;
                &lt;div class=&quot;fv-row mb-10&quot;&gt;
                    &lt;!--begin::Label--&gt;
                    &lt;label class=&quot;form-label&quot;&gt;Example Label 3&lt;/label&gt;
                    &lt;!--end::Label--&gt;

                    &lt;!--begin::Input--&gt;
                    &lt;label class=&quot;form-check form-check-custom form-check-solid&quot;&gt;
                        &lt;input class=&quot;form-check-input&quot; checked=&quot;checked&quot; type=&quot;checkbox&quot; value=&quot;1&quot;/&gt;
                        &lt;span class=&quot;form-check-label&quot;&gt;
                            Checkbox
                        &lt;/span&gt;
                    &lt;/label&gt;
                    &lt;!--end::Input--&gt;
                &lt;/div&gt;
                &lt;!--end::Input group--&gt;
            &lt;/div&gt;
            &lt;!--begin::Step 1--&gt;

            &lt;!--begin::Step 1--&gt;
            &lt;div class=&quot;flex-column&quot; data-kt-stepper-element=&quot;content&quot;&gt;
                &lt;!--begin::Input group--&gt;
                &lt;div class=&quot;fv-row mb-10&quot;&gt;
                    &lt;!--begin::Label--&gt;
                    &lt;label class=&quot;form-label d-flex align-items-center&quot;&gt;
                        &lt;span class=&quot;required&quot;&gt;Input 1&lt;/span&gt;
                        &lt;i class=&quot;fas fa-exclamation-circle ms-2 fs-7&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Example tooltip&quot;&gt;&lt;/i&gt;
                    &lt;/label&gt;
                    &lt;!--end::Label--&gt;

                    &lt;!--begin::Input--&gt;
                    &lt;input type=&quot;text&quot; class=&quot;form-control form-control-solid&quot; name=&quot;input1&quot; placeholder=&quot;&quot; value=&quot;&quot;/&gt;
                    &lt;!--end::Input--&gt;
                &lt;/div&gt;
                &lt;!--end::Input group--&gt;

                &lt;!--begin::Input group--&gt;
                &lt;div class=&quot;fv-row mb-10&quot;&gt;
                    &lt;!--begin::Label--&gt;
                    &lt;label class=&quot;form-label&quot;&gt;
                        Input 2
                    &lt;/label&gt;
                    &lt;!--end::Label--&gt;

                    &lt;!--begin::Input--&gt;
                    &lt;input type=&quot;text&quot; class=&quot;form-control form-control-solid&quot; name=&quot;input2&quot; placeholder=&quot;&quot; value=&quot;&quot;/&gt;
                    &lt;!--end::Input--&gt;
                &lt;/div&gt;
                &lt;!--end::Input group--&gt;
            &lt;/div&gt;
            &lt;!--begin::Step 1--&gt;

            &lt;!--begin::Step 1--&gt;
            &lt;div class=&quot;flex-column&quot; data-kt-stepper-element=&quot;content&quot;&gt;
                &lt;!--begin::Input group--&gt;
                &lt;div class=&quot;fv-row mb-10&quot;&gt;
                    &lt;!--begin::Label--&gt;
                    &lt;label class=&quot;form-label d-flex align-items-center&quot;&gt;
                        &lt;span class=&quot;required&quot;&gt;Input 1&lt;/span&gt;
                        &lt;i class=&quot;fas fa-exclamation-circle ms-2 fs-7&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Example tooltip&quot;&gt;&lt;/i&gt;
                    &lt;/label&gt;
                    &lt;!--end::Label--&gt;

                    &lt;!--begin::Input--&gt;
                    &lt;input type=&quot;text&quot; class=&quot;form-control form-control-solid&quot; name=&quot;input1&quot; placeholder=&quot;&quot; value=&quot;&quot;/&gt;
                    &lt;!--end::Input--&gt;
                &lt;/div&gt;
                &lt;!--end::Input group--&gt;

                &lt;!--begin::Input group--&gt;
                &lt;div class=&quot;fv-row mb-10&quot;&gt;
                    &lt;!--begin::Label--&gt;
                    &lt;label class=&quot;form-label&quot;&gt;
                        Input 2
                    &lt;/label&gt;
                    &lt;!--end::Label--&gt;

                    &lt;!--begin::Input--&gt;
                    &lt;input type=&quot;text&quot; class=&quot;form-control form-control-solid&quot; name=&quot;input2&quot; placeholder=&quot;&quot; value=&quot;&quot;/&gt;
                    &lt;!--end::Input--&gt;
                &lt;/div&gt;
                &lt;!--end::Input group--&gt;

                &lt;!--begin::Input group--&gt;
                &lt;div class=&quot;fv-row mb-10&quot;&gt;
                    &lt;!--begin::Label--&gt;
                    &lt;label class=&quot;form-label&quot;&gt;
                        Input 3
                    &lt;/label&gt;
                    &lt;!--end::Label--&gt;

                    &lt;!--begin::Input--&gt;
                    &lt;input type=&quot;text&quot; class=&quot;form-control form-control-solid&quot; name=&quot;input3&quot; placeholder=&quot;&quot; value=&quot;&quot;/&gt;
                    &lt;!--end::Input--&gt;
                &lt;/div&gt;
                &lt;!--end::Input group--&gt;
            &lt;/div&gt;
            &lt;!--begin::Step 1--&gt;
        &lt;/div&gt;
        &lt;!--end::Group--&gt;

        &lt;!--begin::Actions--&gt;
        &lt;div class=&quot;d-flex flex-stack&quot;&gt;
            &lt;!--begin::Wrapper--&gt;
            &lt;div class=&quot;me-2&quot;&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-light btn-active-light-primary&quot; data-kt-stepper-action=&quot;previous&quot;&gt;
                    Back
                &lt;/button&gt;
            &lt;/div&gt;
            &lt;!--end::Wrapper--&gt;

            &lt;!--begin::Wrapper--&gt;
            &lt;div&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-kt-stepper-action=&quot;submit&quot;&gt;
                    &lt;span class=&quot;indicator-label&quot;&gt;
                        Submit
                    &lt;/span&gt;
                    &lt;span class=&quot;indicator-progress&quot;&gt;
                        Please wait... &lt;span class=&quot;spinner-border spinner-border-sm align-middle ms-2&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;
                &lt;/button&gt;

                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-kt-stepper-action=&quot;next&quot;&gt;
                    Continue
                &lt;/button&gt;
            &lt;/div&gt;
            &lt;!--end::Wrapper--&gt;
        &lt;/div&gt;
        &lt;!--end::Actions--&gt;
    &lt;/form&gt;
    &lt;!--end::Form--&gt;
&lt;/div&gt;
&lt;!--end::Stepper--&gt;</code></pre>
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
                        <h1 class="anchor fw-bold mb-5" id="vertical" data-kt-scroll-offset="50">
                            <a href="#vertical"></a>

                            Vertical
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.stepper-column</code> class to enable a stepper with vertical navigation layout:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10 p-lg-20">

                                <!--begin::Stepper-->
                                <div class="stepper stepper-pills stepper-column d-flex flex-column flex-lg-row"
                                    id="kt_stepper_example_vertical">
                                    <!--begin::Aside-->
                                    <div class="d-flex flex-row-auto w-100 w-lg-300px">
                                        <!--begin::Nav-->
                                        <div class="stepper-nav flex-cente">
                                            <!--begin::Step 1-->
                                            <div class="stepper-item me-5 current" data-kt-stepper-element="nav">
                                                <!--begin::Wrapper-->
                                                <div class="stepper-wrapper d-flex align-items-center">
                                                    <!--begin::Icon-->
                                                    <div class="stepper-icon w-40px h-40px">
                                                        <i class="stepper-check fas fa-check"></i>
                                                        <span class="stepper-number">1</span>
                                                    </div>
                                                    <!--end::Icon-->

                                                    <!--begin::Label-->
                                                    <div class="stepper-label">
                                                        <h3 class="stepper-title">
                                                            Step 1
                                                        </h3>

                                                        <div class="stepper-desc">
                                                            Description
                                                        </div>
                                                    </div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Wrapper-->

                                                <!--begin::Line-->
                                                <div class="stepper-line h-40px"></div>
                                                <!--end::Line-->
                                            </div>
                                            <!--end::Step 1-->

                                            <!--begin::Step 2-->
                                            <div class="stepper-item me-5" data-kt-stepper-element="nav">
                                                <!--begin::Wrapper-->
                                                <div class="stepper-wrapper d-flex align-items-center">
                                                    <!--begin::Icon-->
                                                    <div class="stepper-icon w-40px h-40px">
                                                        <i class="stepper-check fas fa-check"></i>
                                                        <span class="stepper-number">2</span>
                                                    </div>
                                                    <!--begin::Icon-->

                                                    <!--begin::Label-->
                                                    <div class="stepper-label">
                                                        <h3 class="stepper-title">
                                                            Step 2
                                                        </h3>

                                                        <div class="stepper-desc">
                                                            Description
                                                        </div>
                                                    </div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Wrapper-->

                                                <!--begin::Line-->
                                                <div class="stepper-line h-40px"></div>
                                                <!--end::Line-->
                                            </div>
                                            <!--end::Step 2-->

                                            <!--begin::Step 3-->
                                            <div class="stepper-item me-5" data-kt-stepper-element="nav">
                                                <!--begin::Wrapper-->
                                                <div class="stepper-wrapper d-flex align-items-center">
                                                    <!--begin::Icon-->
                                                    <div class="stepper-icon w-40px h-40px">
                                                        <i class="stepper-check fas fa-check"></i>
                                                        <span class="stepper-number">3</span>
                                                    </div>
                                                    <!--begin::Icon-->

                                                    <!--begin::Label-->
                                                    <div class="stepper-label">
                                                        <h3 class="stepper-title">
                                                            Step 3
                                                        </h3>

                                                        <div class="stepper-desc">
                                                            Description
                                                        </div>
                                                    </div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Wrapper-->

                                                <!--begin::Line-->
                                                <div class="stepper-line h-40px"></div>
                                                <!--end::Line-->
                                            </div>
                                            <!--end::Step 3-->

                                            <!--begin::Step 4-->
                                            <div class="stepper-item me-5" data-kt-stepper-element="nav">
                                                <!--begin::Wrapper-->
                                                <div class="stepper-wrapper d-flex align-items-center">
                                                    <!--begin::Icon-->
                                                    <div class="stepper-icon w-40px h-40px">
                                                        <i class="stepper-check fas fa-check"></i>
                                                        <span class="stepper-number">4</span>
                                                    </div>
                                                    <!--begin::Icon-->

                                                    <!--begin::Label-->
                                                    <div class="stepper-label">
                                                        <h3 class="stepper-title">
                                                            Step 4
                                                        </h3>

                                                        <div class="stepper-desc">
                                                            Description
                                                        </div>
                                                    </div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Step 4-->
                                        </div>
                                        <!--end::Nav-->
                                    </div>

                                    <!--begin::Content-->
                                    <div class="flex-row-fluid">
                                        <!--begin::Form-->
                                        <form class="form w-lg-400px mx-auto" novalidate="novalidate">
                                            <!--begin::Group-->
                                            <div class="mb-5">
                                                <!--begin::Step 1-->
                                                <div class="flex-column current" data-kt-stepper-element="content">
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-10">
                                                        <!--begin::Label-->
                                                        <label class="form-label">Example Label 1</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <input type="text" class="form-control form-control-solid"
                                                            name="input1" placeholder="" value="" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-10">
                                                        <!--begin::Label-->
                                                        <label class="form-label">Example Label 2</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <input type="text" class="form-control form-control-solid"
                                                            name="input2" placeholder="" value="" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-10">
                                                        <!--begin::Label-->
                                                        <label class="form-label">Example Label 3</label>
                                                        <!--end::Label-->

                                                        <!--begin::Switch-->
                                                        <label
                                                            class="form-check form-switch form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox"
                                                                checked="checked" value="1" />
                                                            <span class="form-check-label">
                                                                Switch
                                                            </span>
                                                        </label>
                                                        <!--end::Switch-->
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <!--begin::Step 1-->

                                                <!--begin::Step 1-->
                                                <div class="flex-column" data-kt-stepper-element="content">
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-10">
                                                        <!--begin::Label-->
                                                        <label class="form-label">Example Label 1</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <input type="text" class="form-control form-control-solid"
                                                            name="input1" placeholder="" value="" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-10">
                                                        <!--begin::Label-->
                                                        <label class="form-label">Example Label 2</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <textarea class="form-control form-control-solid" rows="3" name="input2" placeholder=""></textarea>
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-10">
                                                        <!--begin::Label-->
                                                        <label class="form-label">Example Label 3</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <label class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" checked="checked"
                                                                type="checkbox" value="1" />
                                                            <span class="form-check-label">
                                                                Checkbox
                                                            </span>
                                                        </label>
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <!--begin::Step 1-->

                                                <!--begin::Step 1-->
                                                <div class="flex-column" data-kt-stepper-element="content">
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-10">
                                                        <!--begin::Label-->
                                                        <label class="form-label d-flex align-items-center">
                                                            <span class="required">Input 1</span>
                                                            <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                data-bs-toggle="tooltip" title="Example tooltip"></i>
                                                        </label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <input type="text" class="form-control form-control-solid"
                                                            name="input1" placeholder="" value="" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-10">
                                                        <!--begin::Label-->
                                                        <label class="form-label">
                                                            Input 2
                                                        </label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <input type="text" class="form-control form-control-solid"
                                                            name="input2" placeholder="" value="" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <!--begin::Step 1-->

                                                <!--begin::Step 1-->
                                                <div class="flex-column" data-kt-stepper-element="content">
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-10">
                                                        <!--begin::Label-->
                                                        <label class="form-label d-flex align-items-center">
                                                            <span class="required">Input 1</span>
                                                            <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                data-bs-toggle="tooltip" title="Example tooltip"></i>
                                                        </label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <input type="text" class="form-control form-control-solid"
                                                            name="input1" placeholder="" value="" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-10">
                                                        <!--begin::Label-->
                                                        <label class="form-label">
                                                            Input 2
                                                        </label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <input type="text" class="form-control form-control-solid"
                                                            name="input2" placeholder="" value="" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-10">
                                                        <!--begin::Label-->
                                                        <label class="form-label">
                                                            Input 3
                                                        </label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <input type="text" class="form-control form-control-solid"
                                                            name="input3" placeholder="" value="" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <!--begin::Step 1-->
                                            </div>
                                            <!--end::Group-->

                                            <!--begin::Actions-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Wrapper-->
                                                <div class="me-2">
                                                    <button type="button" class="btn btn-light btn-active-light-primary"
                                                        data-kt-stepper-action="previous">
                                                        Back
                                                    </button>
                                                </div>
                                                <!--end::Wrapper-->

                                                <!--begin::Wrapper-->
                                                <div>
                                                    <button type="button" class="btn btn-primary"
                                                        data-kt-stepper-action="submit">
                                                        <span class="indicator-label">
                                                            Submit
                                                        </span>
                                                        <span class="indicator-progress">
                                                            Please wait... <span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                        </span>
                                                    </button>

                                                    <button type="button" class="btn btn-primary"
                                                        data-kt-stepper-action="next">
                                                        Continue
                                                    </button>
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Actions-->
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                </div>
                                <!--end::Stepper-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Notice-->
                        <div class="py-5">
                            <!--begin::Information-->
                            <div class="d-flex align-items-center rounded py-5 px-5 bg-light-success "><i
                                    class="ki-duotone ki-information-5 fs-3x text-success me-5"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span></i> <!--begin::Description-->
                                <div class="text-gray-700 fw-bold fs-6">
                                    Add <code>.mark-completed</code> class after <code>.stepper-item</code> to mark the step
                                    checked checked(Step 4) when it's active.
                                </div> <!--end::Description-->
                            </div><!--end::Information-->
                        </div>
                        <!--end::Notice-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e5bd046634a" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e5bd046634b" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5bd046634a"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript"><code class="language-javascript">// Stepper lement
var element = document.querySelector(&quot;#kt_stepper_example_vertical&quot;);

// Initialize Stepper
var stepper = new KTStepper(element);

// Handle next step
stepper.on(&quot;kt.stepper.next&quot;, function (stepper) {
    stepper.goNext(); // go next step
});

// Handle previous step
stepper.on(&quot;kt.stepper.previous&quot;, function (stepper) {
    stepper.goPrevious(); // go previous step
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e5bd046634b" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Stepper--&gt;
&lt;div class=&quot;stepper stepper-pills stepper-column d-flex flex-column flex-lg-row&quot; id=&quot;kt_stepper_example_vertical&quot;&gt;
    &lt;!--begin::Aside--&gt;
    &lt;div class=&quot;d-flex flex-row-auto w-100 w-lg-300px&quot;&gt;
    &lt;!--begin::Nav--&gt;
    &lt;div class=&quot;stepper-nav flex-cente&quot;&gt;
        &lt;!--begin::Step 1--&gt;
        &lt;div class=&quot;stepper-item me-5 current&quot; data-kt-stepper-element=&quot;nav&quot;&gt;
            &lt;!--begin::Wrapper--&gt;
            &lt;div class=&quot;stepper-wrapper d-flex align-items-center&quot;&gt;
                &lt;!--begin::Icon--&gt;
                &lt;div class=&quot;stepper-icon w-40px h-40px&quot;&gt;
                    &lt;i class=&quot;stepper-check fas fa-check&quot;&gt;&lt;/i&gt;
                    &lt;span class=&quot;stepper-number&quot;&gt;1&lt;/span&gt;
                &lt;/div&gt;
                &lt;!--end::Icon--&gt;

                &lt;!--begin::Label--&gt;
                &lt;div class=&quot;stepper-label&quot;&gt;
                    &lt;h3 class=&quot;stepper-title&quot;&gt;
                        Step 1
                    &lt;/h3&gt;

                    &lt;div class=&quot;stepper-desc&quot;&gt;
                        Description
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;!--end::Label--&gt;
            &lt;/div&gt;
            &lt;!--end::Wrapper--&gt;

            &lt;!--begin::Line--&gt;
            &lt;div class=&quot;stepper-line h-40px&quot;&gt;&lt;/div&gt;
            &lt;!--end::Line--&gt;
        &lt;/div&gt;
        &lt;!--end::Step 1--&gt;

        &lt;!--begin::Step 2--&gt;
        &lt;div class=&quot;stepper-item me-5&quot; data-kt-stepper-element=&quot;nav&quot;&gt;
            &lt;!--begin::Wrapper--&gt;
            &lt;div class=&quot;stepper-wrapper d-flex align-items-center&quot;&gt;
                &lt;!--begin::Icon--&gt;
                &lt;div class=&quot;stepper-icon w-40px h-40px&quot;&gt;
                    &lt;i class=&quot;stepper-check fas fa-check&quot;&gt;&lt;/i&gt;
                    &lt;span class=&quot;stepper-number&quot;&gt;2&lt;/span&gt;
                &lt;/div&gt;
                &lt;!--begin::Icon--&gt;

                &lt;!--begin::Label--&gt;
                &lt;div class=&quot;stepper-label&quot;&gt;
                    &lt;h3 class=&quot;stepper-title&quot;&gt;
                        Step 2
                    &lt;/h3&gt;

                    &lt;div class=&quot;stepper-desc&quot;&gt;
                        Description
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;!--end::Label--&gt;
            &lt;/div&gt;
            &lt;!--end::Wrapper--&gt;

            &lt;!--begin::Line--&gt;
            &lt;div class=&quot;stepper-line h-40px&quot;&gt;&lt;/div&gt;
            &lt;!--end::Line--&gt;
        &lt;/div&gt;
        &lt;!--end::Step 2--&gt;

        &lt;!--begin::Step 3--&gt;
        &lt;div class=&quot;stepper-item me-5&quot; data-kt-stepper-element=&quot;nav&quot;&gt;
            &lt;!--begin::Wrapper--&gt;
            &lt;div class=&quot;stepper-wrapper d-flex align-items-center&quot;&gt;
                &lt;!--begin::Icon--&gt;
                &lt;div class=&quot;stepper-icon w-40px h-40px&quot;&gt;
                    &lt;i class=&quot;stepper-check fas fa-check&quot;&gt;&lt;/i&gt;
                    &lt;span class=&quot;stepper-number&quot;&gt;3&lt;/span&gt;
                &lt;/div&gt;
                &lt;!--begin::Icon--&gt;

                &lt;!--begin::Label--&gt;
                &lt;div class=&quot;stepper-label&quot;&gt;
                    &lt;h3 class=&quot;stepper-title&quot;&gt;
                        Step 3
                    &lt;/h3&gt;

                    &lt;div class=&quot;stepper-desc&quot;&gt;
                        Description
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;!--end::Label--&gt;
            &lt;/div&gt;
            &lt;!--end::Wrapper--&gt;

            &lt;!--begin::Line--&gt;
            &lt;div class=&quot;stepper-line h-40px&quot;&gt;&lt;/div&gt;
            &lt;!--end::Line--&gt;
        &lt;/div&gt;
        &lt;!--end::Step 3--&gt;

        &lt;!--begin::Step 4--&gt;
        &lt;div class=&quot;stepper-item me-5&quot; data-kt-stepper-element=&quot;nav&quot;&gt;
            &lt;!--begin::Wrapper--&gt;
            &lt;div class=&quot;stepper-wrapper d-flex align-items-center&quot;&gt;
                &lt;!--begin::Icon--&gt;
                &lt;div class=&quot;stepper-icon w-40px h-40px&quot;&gt;
                    &lt;i class=&quot;stepper-check fas fa-check&quot;&gt;&lt;/i&gt;
                    &lt;span class=&quot;stepper-number&quot;&gt;4&lt;/span&gt;
                &lt;/div&gt;
                &lt;!--begin::Icon--&gt;

                &lt;!--begin::Label--&gt;
                &lt;div class=&quot;stepper-label&quot;&gt;
                    &lt;h3 class=&quot;stepper-title&quot;&gt;
                        Step 4
                    &lt;/h3&gt;

                    &lt;div class=&quot;stepper-desc&quot;&gt;
                        Description
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;!--end::Label--&gt;
            &lt;/div&gt;
            &lt;!--end::Wrapper--&gt;
        &lt;/div&gt;
        &lt;!--end::Step 4--&gt;
    &lt;/div&gt;
    &lt;!--end::Nav--&gt;
    &lt;/div&gt;

    &lt;!--begin::Content--&gt;
    &lt;div class=&quot;flex-row-fluid&quot;&gt;
        &lt;!--begin::Form--&gt;
        &lt;form class=&quot;form w-lg-500px mx-auto&quot; novalidate=&quot;novalidate&quot;&gt;
            &lt;!--begin::Group--&gt;
            &lt;div class=&quot;mb-5&quot;&gt;
                &lt;!--begin::Step 1--&gt;
                &lt;div class=&quot;flex-column current&quot; data-kt-stepper-element=&quot;content&quot;&gt;
                    &lt;!--begin::Input group--&gt;
                    &lt;div class=&quot;fv-row mb-10&quot;&gt;
                        &lt;!--begin::Label--&gt;
                        &lt;label class=&quot;form-label&quot;&gt;Example Label 1&lt;/label&gt;
                        &lt;!--end::Label--&gt;

                        &lt;!--begin::Input--&gt;
                        &lt;input type=&quot;text&quot; class=&quot;form-control form-control-solid&quot; name=&quot;input1&quot; placeholder=&quot;&quot; value=&quot;&quot;/&gt;
                        &lt;!--end::Input--&gt;
                    &lt;/div&gt;
                    &lt;!--end::Input group--&gt;

                    &lt;!--begin::Input group--&gt;
                    &lt;div class=&quot;fv-row mb-10&quot;&gt;
                        &lt;!--begin::Label--&gt;
                        &lt;label class=&quot;form-label&quot;&gt;Example Label 2&lt;/label&gt;
                        &lt;!--end::Label--&gt;

                        &lt;!--begin::Input--&gt;
                        &lt;input type=&quot;text&quot; class=&quot;form-control form-control-solid&quot; name=&quot;input2&quot; placeholder=&quot;&quot; value=&quot;&quot;/&gt;
                        &lt;!--end::Input--&gt;
                    &lt;/div&gt;
                    &lt;!--end::Input group--&gt;

                    &lt;!--begin::Input group--&gt;
                    &lt;div class=&quot;fv-row mb-10&quot;&gt;
                        &lt;!--begin::Label--&gt;
                        &lt;label class=&quot;form-label&quot;&gt;Example Label 3&lt;/label&gt;
                        &lt;!--end::Label--&gt;

                        &lt;!--begin::Switch--&gt;
                        &lt;label class=&quot;form-check form-switch form-check-custom form-check-solid&quot;&gt;
                            &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; checked=&quot;checked&quot; value=&quot;1&quot;/&gt;
                            &lt;span class=&quot;form-check-label&quot;&gt;
                                Switch
                            &lt;/span&gt;
                        &lt;/label&gt;
                        &lt;!--end::Switch--&gt;
                    &lt;/div&gt;
                    &lt;!--end::Input group--&gt;
                &lt;/div&gt;
                &lt;!--begin::Step 1--&gt;

                &lt;!--begin::Step 1--&gt;
                &lt;div class=&quot;flex-column&quot; data-kt-stepper-element=&quot;content&quot;&gt;
                &lt;!--begin::Input group--&gt;
                    &lt;div class=&quot;fv-row mb-10&quot;&gt;
                        &lt;!--begin::Label--&gt;
                        &lt;label class=&quot;form-label&quot;&gt;Example Label 1&lt;/label&gt;
                        &lt;!--end::Label--&gt;

                        &lt;!--begin::Input--&gt;
                        &lt;input type=&quot;text&quot; class=&quot;form-control form-control-solid&quot; name=&quot;input1&quot; placeholder=&quot;&quot; value=&quot;&quot;/&gt;
                        &lt;!--end::Input--&gt;
                    &lt;/div&gt;
                    &lt;!--end::Input group--&gt;

                    &lt;!--begin::Input group--&gt;
                    &lt;div class=&quot;fv-row mb-10&quot;&gt;
                        &lt;!--begin::Label--&gt;
                        &lt;label class=&quot;form-label&quot;&gt;Example Label 2&lt;/label&gt;
                        &lt;!--end::Label--&gt;

                        &lt;!--begin::Input--&gt;
                        &lt;textarea class=&quot;form-control form-control-solid&quot; rows=&quot;3&quot; name=&quot;input2&quot; placeholder=&quot;&quot;&gt;&lt;/textarea&gt;
                        &lt;!--end::Input--&gt;
                    &lt;/div&gt;
                    &lt;!--end::Input group--&gt;

                    &lt;!--begin::Input group--&gt;
                    &lt;div class=&quot;fv-row mb-10&quot;&gt;
                        &lt;!--begin::Label--&gt;
                        &lt;label class=&quot;form-label&quot;&gt;Example Label 3&lt;/label&gt;
                        &lt;!--end::Label--&gt;

                        &lt;!--begin::Input--&gt;
                        &lt;label class=&quot;form-check form-check-custom form-check-solid&quot;&gt;
                            &lt;input class=&quot;form-check-input&quot; checked=&quot;checked&quot; type=&quot;checkbox&quot; value=&quot;1&quot;/&gt;
                            &lt;span class=&quot;form-check-label&quot;&gt;
                                Checkbox
                            &lt;/span&gt;
                        &lt;/label&gt;
                        &lt;!--end::Input--&gt;
                    &lt;/div&gt;
                    &lt;!--end::Input group--&gt;
                &lt;/div&gt;
                &lt;!--begin::Step 1--&gt;

                &lt;!--begin::Step 1--&gt;
                &lt;div class=&quot;flex-column&quot; data-kt-stepper-element=&quot;content&quot;&gt;
                    &lt;!--begin::Input group--&gt;
                    &lt;div class=&quot;fv-row mb-10&quot;&gt;
                        &lt;!--begin::Label--&gt;
                        &lt;label class=&quot;form-label d-flex align-items-center&quot;&gt;
                            &lt;span class=&quot;required&quot;&gt;Input 1&lt;/span&gt;
                            &lt;i class=&quot;fas fa-exclamation-circle ms-2 fs-7&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Example tooltip&quot;&gt;&lt;/i&gt;
                        &lt;/label&gt;
                        &lt;!--end::Label--&gt;

                        &lt;!--begin::Input--&gt;
                        &lt;input type=&quot;text&quot; class=&quot;form-control form-control-solid&quot; name=&quot;input1&quot; placeholder=&quot;&quot; value=&quot;&quot;/&gt;
                        &lt;!--end::Input--&gt;
                    &lt;/div&gt;
                    &lt;!--end::Input group--&gt;

                    &lt;!--begin::Input group--&gt;
                    &lt;div class=&quot;fv-row mb-10&quot;&gt;
                        &lt;!--begin::Label--&gt;
                        &lt;label class=&quot;form-label&quot;&gt;
                            Input 2
                        &lt;/label&gt;
                        &lt;!--end::Label--&gt;

                        &lt;!--begin::Input--&gt;
                        &lt;input type=&quot;text&quot; class=&quot;form-control form-control-solid&quot; name=&quot;input2&quot; placeholder=&quot;&quot; value=&quot;&quot;/&gt;
                        &lt;!--end::Input--&gt;
                    &lt;/div&gt;
                    &lt;!--end::Input group--&gt;
                &lt;/div&gt;
                &lt;!--begin::Step 1--&gt;

                &lt;!--begin::Step 1--&gt;
                &lt;div class=&quot;flex-column&quot; data-kt-stepper-element=&quot;content&quot;&gt;
                    &lt;!--begin::Input group--&gt;
                    &lt;div class=&quot;fv-row mb-10&quot;&gt;
                        &lt;!--begin::Label--&gt;
                        &lt;label class=&quot;form-label d-flex align-items-center&quot;&gt;
                            &lt;span class=&quot;required&quot;&gt;Input 1&lt;/span&gt;
                            &lt;i class=&quot;fas fa-exclamation-circle ms-2 fs-7&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Example tooltip&quot;&gt;&lt;/i&gt;
                        &lt;/label&gt;
                        &lt;!--end::Label--&gt;

                        &lt;!--begin::Input--&gt;
                        &lt;input type=&quot;text&quot; class=&quot;form-control form-control-solid&quot; name=&quot;input1&quot; placeholder=&quot;&quot; value=&quot;&quot;/&gt;
                        &lt;!--end::Input--&gt;
                    &lt;/div&gt;
                    &lt;!--end::Input group--&gt;

                    &lt;!--begin::Input group--&gt;
                    &lt;div class=&quot;fv-row mb-10&quot;&gt;
                        &lt;!--begin::Label--&gt;
                        &lt;label class=&quot;form-label&quot;&gt;
                            Input 2
                        &lt;/label&gt;
                        &lt;!--end::Label--&gt;

                        &lt;!--begin::Input--&gt;
                        &lt;input type=&quot;text&quot; class=&quot;form-control form-control-solid&quot; name=&quot;input2&quot; placeholder=&quot;&quot; value=&quot;&quot;/&gt;
                        &lt;!--end::Input--&gt;
                    &lt;/div&gt;
                    &lt;!--end::Input group--&gt;

                    &lt;!--begin::Input group--&gt;
                    &lt;div class=&quot;fv-row mb-10&quot;&gt;
                        &lt;!--begin::Label--&gt;
                        &lt;label class=&quot;form-label&quot;&gt;
                            Input 3
                        &lt;/label&gt;
                        &lt;!--end::Label--&gt;

                        &lt;!--begin::Input--&gt;
                        &lt;input type=&quot;text&quot; class=&quot;form-control form-control-solid&quot; name=&quot;input3&quot; placeholder=&quot;&quot; value=&quot;&quot;/&gt;
                        &lt;!--end::Input--&gt;
                    &lt;/div&gt;
                    &lt;!--end::Input group--&gt;
                &lt;/div&gt;
                &lt;!--begin::Step 1--&gt;
            &lt;/div&gt;
            &lt;!--end::Group--&gt;

            &lt;!--begin::Actions--&gt;
            &lt;div class=&quot;d-flex flex-stack&quot;&gt;
                &lt;!--begin::Wrapper--&gt;
                &lt;div class=&quot;me-2&quot;&gt;
                    &lt;button type=&quot;button&quot; class=&quot;btn btn-light btn-active-light-primary&quot; data-kt-stepper-action=&quot;previous&quot;&gt;
                        Back
                    &lt;/button&gt;
                &lt;/div&gt;
                &lt;!--end::Wrapper--&gt;

                &lt;!--begin::Wrapper--&gt;
                &lt;div&gt;
                    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-kt-stepper-action=&quot;submit&quot;&gt;
                        &lt;span class=&quot;indicator-label&quot;&gt;
                            Submit
                        &lt;/span&gt;
                        &lt;span class=&quot;indicator-progress&quot;&gt;
                            Please wait... &lt;span class=&quot;spinner-border spinner-border-sm align-middle ms-2&quot;&gt;&lt;/span&gt;
                        &lt;/span&gt;
                    &lt;/button&gt;

                    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-kt-stepper-action=&quot;next&quot;&gt;
                        Continue
                    &lt;/button&gt;
                &lt;/div&gt;
                &lt;!--end::Wrapper--&gt;
            &lt;/div&gt;
            &lt;!--end::Actions--&gt;
        &lt;/form&gt;
        &lt;!--end::Form--&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;!--end::Stepper--&gt;</code></pre>
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
                        <h1 class="anchor fw-bold mb-5" id="clickable-navigation" data-kt-scroll-offset="50">
                            <a href="#clickable-navigation"></a>

                            Clickable Navigation
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Add <code>data-kt-stepper-action="step"</code> attribute to Stepper navigation links to setup a
                            Stepper with clickable navigation:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10 p-lg-20">
                                <!--begin::Stepper-->
                                <div class="stepper stepper-pills" id="kt_stepper_example_clickable">
                                    <!--begin::Nav-->
                                    <div class="stepper-nav flex-center flex-wrap mb-10">
                                        <!--begin::Step 1-->
                                        <div class="stepper-item mx-8 my-4 current" data-kt-stepper-element="nav"
                                            data-kt-stepper-action="step">
                                            <!--begin::Wrapper-->
                                            <div class="stepper-wrapper d-flex align-items-center">
                                                <!--begin::Icon-->
                                                <div class="stepper-icon w-40px h-40px">
                                                    <i class="stepper-check fas fa-check"></i>
                                                    <span class="stepper-number">1</span>
                                                </div>
                                                <!--end::Icon-->

                                                <!--begin::Label-->
                                                <div class="stepper-label">
                                                    <h3 class="stepper-title">
                                                        Step 1
                                                    </h3>

                                                    <div class="stepper-desc">
                                                        Description
                                                    </div>
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Wrapper-->

                                            <!--begin::Line-->
                                            <div class="stepper-line h-40px"></div>
                                            <!--end::Line-->
                                        </div>
                                        <!--end::Step 1-->

                                        <!--begin::Step 2-->
                                        <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav"
                                            data-kt-stepper-action="step">
                                            <!--begin::Wrapper-->
                                            <div class="stepper-wrapper d-flex align-items-center">
                                                <!--begin::Icon-->
                                                <div class="stepper-icon w-40px h-40px">
                                                    <i class="stepper-check fas fa-check"></i>
                                                    <span class="stepper-number">2</span>
                                                </div>
                                                <!--begin::Icon-->

                                                <!--begin::Label-->
                                                <div class="stepper-label">
                                                    <h3 class="stepper-title">
                                                        Step 2
                                                    </h3>

                                                    <div class="stepper-desc">
                                                        Description
                                                    </div>
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Wrapper-->

                                            <!--begin::Line-->
                                            <div class="stepper-line h-40px"></div>
                                            <!--end::Line-->
                                        </div>
                                        <!--end::Step 2-->

                                        <!--begin::Step 3-->
                                        <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav"
                                            data-kt-stepper-action="step">
                                            <!--begin::Wrapper-->
                                            <div class="stepper-wrapper d-flex align-items-center">
                                                <!--begin::Icon-->
                                                <div class="stepper-icon w-40px h-40px">
                                                    <i class="stepper-check fas fa-check"></i>
                                                    <span class="stepper-number">3</span>
                                                </div>
                                                <!--begin::Icon-->

                                                <!--begin::Label-->
                                                <div class="stepper-label">
                                                    <h3 class="stepper-title">
                                                        Step 3
                                                    </h3>

                                                    <div class="stepper-desc">
                                                        Description
                                                    </div>
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Wrapper-->

                                            <!--begin::Line-->
                                            <div class="stepper-line h-40px"></div>
                                            <!--end::Line-->
                                        </div>
                                        <!--end::Step 3-->

                                        <!--begin::Step 4-->
                                        <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav"
                                            data-kt-stepper-action="step">
                                            <!--begin::Wrapper-->
                                            <div class="stepper-wrapper d-flex align-items-center">
                                                <!--begin::Icon-->
                                                <div class="stepper-icon w-40px h-40px">
                                                    <i class="stepper-check fas fa-check"></i>
                                                    <span class="stepper-number">4</span>
                                                </div>
                                                <!--begin::Icon-->

                                                <!--begin::Label-->
                                                <div class="stepper-label">
                                                    <h3 class="stepper-title">
                                                        Step 4
                                                    </h3>

                                                    <div class="stepper-desc">
                                                        Description
                                                    </div>
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Step 4-->
                                    </div>
                                    <!--end::Nav-->

                                    <!--begin::Form-->
                                    <form class="form w-lg-500px mx-auto" novalidate="novalidate">
                                        <!--begin::Group-->
                                        <div class="mb-5">
                                            <!--begin::Step 1-->
                                            <div class="flex-column current" data-kt-stepper-element="content">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label">Example Label 1</label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-solid"
                                                        name="input1" placeholder="" value="" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label">Example Label 2</label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-solid"
                                                        name="input2" placeholder="" value="" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label">Example Label 3</label>
                                                    <!--end::Label-->

                                                    <!--begin::Switch-->
                                                    <label
                                                        class="form-check form-switch form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" checked="checked"
                                                            value="1" />
                                                        <span class="form-check-label">
                                                            Switch
                                                        </span>
                                                    </label>
                                                    <!--end::Switch-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--begin::Step 1-->

                                            <!--begin::Step 1-->
                                            <div class="flex-column" data-kt-stepper-element="content">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label">Example Label 1</label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-solid"
                                                        name="input1" placeholder="" value="" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label">Example Label 2</label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <textarea class="form-control form-control-solid" rows="3" name="input2" placeholder=""></textarea>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label">Example Label 3</label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <label class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" checked="checked" type="checkbox"
                                                            value="1" />
                                                        <span class="form-check-label">
                                                            Checkbox
                                                        </span>
                                                    </label>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--begin::Step 1-->

                                            <!--begin::Step 1-->
                                            <div class="flex-column" data-kt-stepper-element="content">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label d-flex align-items-center">
                                                        <span class="required">Input 1</span>
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                            data-bs-toggle="tooltip" title="Example tooltip"></i>
                                                    </label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-solid"
                                                        name="input1" placeholder="" value="" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label">
                                                        Input 2
                                                    </label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-solid"
                                                        name="input2" placeholder="" value="" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--begin::Step 1-->

                                            <!--begin::Step 1-->
                                            <div class="flex-column" data-kt-stepper-element="content">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label d-flex align-items-center">
                                                        <span class="required">Input 1</span>
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                            data-bs-toggle="tooltip" title="Example tooltip"></i>
                                                    </label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-solid"
                                                        name="input1" placeholder="" value="" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label">
                                                        Input 2
                                                    </label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-solid"
                                                        name="input2" placeholder="" value="" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label">
                                                        Input 3
                                                    </label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-solid"
                                                        name="input3" placeholder="" value="" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--begin::Step 1-->
                                        </div>
                                        <!--end::Group-->

                                        <!--begin::Actions-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Wrapper-->
                                            <div class="me-2">
                                                <button type="button" class="btn btn-light btn-active-light-primary"
                                                    data-kt-stepper-action="previous">
                                                    Back
                                                </button>
                                            </div>
                                            <!--end::Wrapper-->

                                            <!--begin::Wrapper-->
                                            <div>
                                                <button type="button" class="btn btn-primary"
                                                    data-kt-stepper-action="submit">
                                                    <span class="indicator-label">
                                                        Submit
                                                    </span>
                                                    <span class="indicator-progress">
                                                        Please wait... <span
                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                    </span>
                                                </button>

                                                <button type="button" class="btn btn-primary"
                                                    data-kt-stepper-action="next">
                                                    Continue
                                                </button>
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Stepper-->
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
                                            href="#kt_highlight_68e5bd0466398" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e5bd0466399" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5bd0466398"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript"><code class="language-javascript">// Stepper lement
var element = document.querySelector(&quot;#kt_stepper_example_clickable&quot;);

// Initialize Stepper
var stepper = new KTStepper(element);

// Handle navigation click
stepper.on(&quot;kt.stepper.click&quot;, function (stepper) {
    stepper.goTo(stepper.getClickedStepIndex()); // go to clicked step
});

// Handle next step
stepper.on(&quot;kt.stepper.next&quot;, function (stepper) {
    stepper.goNext(); // go next step
});

// Handle previous step
stepper.on(&quot;kt.stepper.previous&quot;, function (stepper) {
    stepper.goPrevious(); // go previous step
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e5bd0466399" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Stepper--&gt;
&lt;div class=&quot;stepper stepper-pills&quot; id=&quot;kt_stepper_example_clickable&quot;&gt;
&lt;!--begin::Nav--&gt;
&lt;div class=&quot;stepper-nav flex-center flex-wrap mb-10&quot;&gt;
    &lt;!--begin::Step 1--&gt;
    &lt;div class=&quot;stepper-item mx-8 my-4 current&quot; data-kt-stepper-element=&quot;nav&quot; data-kt-stepper-action=&quot;step&quot;&gt;
        &lt;!--begin::Wrapper--&gt;
        &lt;div class=&quot;stepper-wrapper d-flex align-items-center&quot;&gt;
            &lt;!--begin::Icon--&gt;
            &lt;div class=&quot;stepper-icon w-40px h-40px&quot;&gt;
                &lt;i class=&quot;stepper-check fas fa-check&quot;&gt;&lt;/i&gt;
                &lt;span class=&quot;stepper-number&quot;&gt;1&lt;/span&gt;
            &lt;/div&gt;
            &lt;!--end::Icon--&gt;

            &lt;!--begin::Label--&gt;
            &lt;div class=&quot;stepper-label&quot;&gt;
                &lt;h3 class=&quot;stepper-title&quot;&gt;
                    Step 1
                &lt;/h3&gt;

                &lt;div class=&quot;stepper-desc&quot;&gt;
                    Description
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;!--end::Label--&gt;
        &lt;/div&gt;
        &lt;!--end::Wrapper--&gt;

        &lt;!--begin::Line--&gt;
        &lt;div class=&quot;stepper-line h-40px&quot;&gt;&lt;/div&gt;
        &lt;!--end::Line--&gt;
    &lt;/div&gt;
    &lt;!--end::Step 1--&gt;

    &lt;!--begin::Step 2--&gt;
    &lt;div class=&quot;stepper-item mx-8 my-4&quot; data-kt-stepper-element=&quot;nav&quot; data-kt-stepper-action=&quot;step&quot;&gt;
        &lt;!--begin::Wrapper--&gt;
        &lt;div class=&quot;stepper-wrapper d-flex align-items-center&quot;&gt;
             &lt;!--begin::Icon--&gt;
            &lt;div class=&quot;stepper-icon w-40px h-40px&quot;&gt;
                &lt;i class=&quot;stepper-check fas fa-check&quot;&gt;&lt;/i&gt;
                &lt;span class=&quot;stepper-number&quot;&gt;2&lt;/span&gt;
            &lt;/div&gt;
            &lt;!--begin::Icon--&gt;

            &lt;!--begin::Label--&gt;
            &lt;div class=&quot;stepper-label&quot;&gt;
                &lt;h3 class=&quot;stepper-title&quot;&gt;
                    Step 2
                &lt;/h3&gt;

                &lt;div class=&quot;stepper-desc&quot;&gt;
                    Description
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;!--end::Label--&gt;
        &lt;/div&gt;
        &lt;!--end::Wrapper--&gt;

        &lt;!--begin::Line--&gt;
        &lt;div class=&quot;stepper-line h-40px&quot;&gt;&lt;/div&gt;
        &lt;!--end::Line--&gt;
    &lt;/div&gt;
    &lt;!--end::Step 2--&gt;

    &lt;!--begin::Step 3--&gt;
    &lt;div class=&quot;stepper-item mx-8 my-4&quot; data-kt-stepper-element=&quot;nav&quot; data-kt-stepper-action=&quot;step&quot;&gt;
       &lt;!--begin::Wrapper--&gt;
        &lt;div class=&quot;stepper-wrapper d-flex align-items-center&quot;&gt;
            &lt;!--begin::Icon--&gt;
            &lt;div class=&quot;stepper-icon w-40px h-40px&quot;&gt;
                &lt;i class=&quot;stepper-check fas fa-check&quot;&gt;&lt;/i&gt;
                &lt;span class=&quot;stepper-number&quot;&gt;3&lt;/span&gt;
            &lt;/div&gt;
            &lt;!--begin::Icon--&gt;

            &lt;!--begin::Label--&gt;
            &lt;div class=&quot;stepper-label&quot;&gt;
                &lt;h3 class=&quot;stepper-title&quot;&gt;
                    Step 3
                &lt;/h3&gt;

                &lt;div class=&quot;stepper-desc&quot;&gt;
                    Description
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;!--end::Label--&gt;
        &lt;/div&gt;
        &lt;!--end::Wrapper--&gt;

        &lt;!--begin::Line--&gt;
        &lt;div class=&quot;stepper-line h-40px&quot;&gt;&lt;/div&gt;
        &lt;!--end::Line--&gt;
    &lt;/div&gt;
    &lt;!--end::Step 3--&gt;

    &lt;!--begin::Step 4--&gt;
    &lt;div class=&quot;stepper-item mx-8 my-4&quot; data-kt-stepper-element=&quot;nav&quot; data-kt-stepper-action=&quot;step&quot;&gt;
        &lt;!--begin::Wrapper--&gt;
        &lt;div class=&quot;stepper-wrapper d-flex align-items-center&quot;&gt;
            &lt;!--begin::Icon--&gt;
            &lt;div class=&quot;stepper-icon w-40px h-40px&quot;&gt;
                &lt;i class=&quot;stepper-check fas fa-check&quot;&gt;&lt;/i&gt;
                &lt;span class=&quot;stepper-number&quot;&gt;4&lt;/span&gt;
            &lt;/div&gt;
            &lt;!--begin::Icon--&gt;

            &lt;!--begin::Label--&gt;
            &lt;div class=&quot;stepper-label&quot;&gt;
                &lt;h3 class=&quot;stepper-title&quot;&gt;
                    Step 4
                &lt;/h3&gt;

                &lt;div class=&quot;stepper-desc&quot;&gt;
                    Description
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;!--end::Label--&gt;
        &lt;/div&gt;
        &lt;!--end::Wrapper--&gt;
    &lt;/div&gt;
    &lt;!--end::Step 4--&gt;
&lt;/div&gt;
&lt;!--end::Nav--&gt;

    &lt;!--begin::Form--&gt;
    &lt;form class=&quot;form w-lg-500px mx-auto&quot; novalidate=&quot;novalidate&quot; id=&quot;kt_stepper_example_basic_form&quot;&gt;
        &lt;!--begin::Group--&gt;
        &lt;div class=&quot;mb-5&quot;&gt;
            &lt;!--begin::Step 1--&gt;
            &lt;div class=&quot;flex-column current&quot; data-kt-stepper-element=&quot;content&quot;&gt;
                &lt;!--begin::Input group--&gt;
                &lt;div class=&quot;fv-row mb-10&quot;&gt;
                    &lt;!--begin::Label--&gt;
                    &lt;label class=&quot;form-label&quot;&gt;Example Label 1&lt;/label&gt;
                    &lt;!--end::Label--&gt;

                    &lt;!--begin::Input--&gt;
                    &lt;input type=&quot;text&quot; class=&quot;form-control form-control-solid&quot; name=&quot;input1&quot; placeholder=&quot;&quot; value=&quot;&quot;/&gt;
                    &lt;!--end::Input--&gt;
                &lt;/div&gt;
                &lt;!--end::Input group--&gt;

                &lt;!--begin::Input group--&gt;
                &lt;div class=&quot;fv-row mb-10&quot;&gt;
                    &lt;!--begin::Label--&gt;
                    &lt;label class=&quot;form-label&quot;&gt;Example Label 2&lt;/label&gt;
                    &lt;!--end::Label--&gt;

                    &lt;!--begin::Input--&gt;
                    &lt;input type=&quot;text&quot; class=&quot;form-control form-control-solid&quot; name=&quot;input2&quot; placeholder=&quot;&quot; value=&quot;&quot;/&gt;
                    &lt;!--end::Input--&gt;
                &lt;/div&gt;
                &lt;!--end::Input group--&gt;

                &lt;!--begin::Input group--&gt;
                &lt;div class=&quot;fv-row mb-10&quot;&gt;
                    &lt;!--begin::Label--&gt;
                    &lt;label class=&quot;form-label&quot;&gt;Example Label 3&lt;/label&gt;
                    &lt;!--end::Label--&gt;

                    &lt;!--begin::Switch--&gt;
                    &lt;label class=&quot;form-check form-switch form-check-custom form-check-solid&quot;&gt;
                        &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; checked=&quot;checked&quot; value=&quot;1&quot;/&gt;
                        &lt;span class=&quot;form-check-label&quot;&gt;
                            Switch
                        &lt;/span&gt;
                    &lt;/label&gt;
                    &lt;!--end::Switch--&gt;
                &lt;/div&gt;
                &lt;!--end::Input group--&gt;
            &lt;/div&gt;
            &lt;!--begin::Step 1--&gt;

            &lt;!--begin::Step 1--&gt;
            &lt;div class=&quot;flex-column&quot; data-kt-stepper-element=&quot;content&quot;&gt;
                &lt;!--begin::Input group--&gt;
                &lt;div class=&quot;fv-row mb-10&quot;&gt;
                    &lt;!--begin::Label--&gt;
                    &lt;label class=&quot;form-label&quot;&gt;Example Label 1&lt;/label&gt;
                    &lt;!--end::Label--&gt;

                    &lt;!--begin::Input--&gt;
                    &lt;input type=&quot;text&quot; class=&quot;form-control form-control-solid&quot; name=&quot;input1&quot; placeholder=&quot;&quot; value=&quot;&quot;/&gt;
                    &lt;!--end::Input--&gt;
                &lt;/div&gt;
                &lt;!--end::Input group--&gt;

                &lt;!--begin::Input group--&gt;
                &lt;div class=&quot;fv-row mb-10&quot;&gt;
                    &lt;!--begin::Label--&gt;
                    &lt;label class=&quot;form-label&quot;&gt;Example Label 2&lt;/label&gt;
                    &lt;!--end::Label--&gt;

                    &lt;!--begin::Input--&gt;
                    &lt;textarea class=&quot;form-control form-control-solid&quot; rows=&quot;3&quot; name=&quot;input2&quot; placeholder=&quot;&quot;&gt;&lt;/textarea&gt;
                    &lt;!--end::Input--&gt;
                &lt;/div&gt;
                &lt;!--end::Input group--&gt;

                &lt;!--begin::Input group--&gt;
                &lt;div class=&quot;fv-row mb-10&quot;&gt;
                    &lt;!--begin::Label--&gt;
                    &lt;label class=&quot;form-label&quot;&gt;Example Label 3&lt;/label&gt;
                    &lt;!--end::Label--&gt;

                    &lt;!--begin::Input--&gt;
                    &lt;label class=&quot;form-check form-check-custom form-check-solid&quot;&gt;
                        &lt;input class=&quot;form-check-input&quot; checked=&quot;checked&quot; type=&quot;checkbox&quot; value=&quot;1&quot;/&gt;
                        &lt;span class=&quot;form-check-label&quot;&gt;
                            Checkbox
                        &lt;/span&gt;
                    &lt;/label&gt;
                    &lt;!--end::Input--&gt;
                &lt;/div&gt;
                &lt;!--end::Input group--&gt;
            &lt;/div&gt;
            &lt;!--begin::Step 1--&gt;

            &lt;!--begin::Step 1--&gt;
            &lt;div class=&quot;flex-column&quot; data-kt-stepper-element=&quot;content&quot;&gt;
                &lt;!--begin::Input group--&gt;
                &lt;div class=&quot;fv-row mb-10&quot;&gt;
                    &lt;!--begin::Label--&gt;
                    &lt;label class=&quot;form-label d-flex align-items-center&quot;&gt;
                        &lt;span class=&quot;required&quot;&gt;Input 1&lt;/span&gt;
                        &lt;i class=&quot;fas fa-exclamation-circle ms-2 fs-7&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Example tooltip&quot;&gt;&lt;/i&gt;
                    &lt;/label&gt;
                    &lt;!--end::Label--&gt;

                    &lt;!--begin::Input--&gt;
                    &lt;input type=&quot;text&quot; class=&quot;form-control form-control-solid&quot; name=&quot;input1&quot; placeholder=&quot;&quot; value=&quot;&quot;/&gt;
                    &lt;!--end::Input--&gt;
                &lt;/div&gt;
                &lt;!--end::Input group--&gt;

                &lt;!--begin::Input group--&gt;
                &lt;div class=&quot;fv-row mb-10&quot;&gt;
                    &lt;!--begin::Label--&gt;
                    &lt;label class=&quot;form-label&quot;&gt;
                        Input 2
                    &lt;/label&gt;
                    &lt;!--end::Label--&gt;

                    &lt;!--begin::Input--&gt;
                    &lt;input type=&quot;text&quot; class=&quot;form-control form-control-solid&quot; name=&quot;input2&quot; placeholder=&quot;&quot; value=&quot;&quot;/&gt;
                    &lt;!--end::Input--&gt;
                &lt;/div&gt;
                &lt;!--end::Input group--&gt;
            &lt;/div&gt;
            &lt;!--begin::Step 1--&gt;

            &lt;!--begin::Step 1--&gt;
            &lt;div class=&quot;flex-column&quot; data-kt-stepper-element=&quot;content&quot;&gt;
                &lt;!--begin::Input group--&gt;
                &lt;div class=&quot;fv-row mb-10&quot;&gt;
                    &lt;!--begin::Label--&gt;
                    &lt;label class=&quot;form-label d-flex align-items-center&quot;&gt;
                        &lt;span class=&quot;required&quot;&gt;Input 1&lt;/span&gt;
                        &lt;i class=&quot;fas fa-exclamation-circle ms-2 fs-7&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Example tooltip&quot;&gt;&lt;/i&gt;
                    &lt;/label&gt;
                    &lt;!--end::Label--&gt;

                    &lt;!--begin::Input--&gt;
                    &lt;input type=&quot;text&quot; class=&quot;form-control form-control-solid&quot; name=&quot;input1&quot; placeholder=&quot;&quot; value=&quot;&quot;/&gt;
                    &lt;!--end::Input--&gt;
                &lt;/div&gt;
                &lt;!--end::Input group--&gt;

                &lt;!--begin::Input group--&gt;
                &lt;div class=&quot;fv-row mb-10&quot;&gt;
                    &lt;!--begin::Label--&gt;
                    &lt;label class=&quot;form-label&quot;&gt;
                        Input 2
                    &lt;/label&gt;
                    &lt;!--end::Label--&gt;

                    &lt;!--begin::Input--&gt;
                    &lt;input type=&quot;text&quot; class=&quot;form-control form-control-solid&quot; name=&quot;input2&quot; placeholder=&quot;&quot; value=&quot;&quot;/&gt;
                    &lt;!--end::Input--&gt;
                &lt;/div&gt;
                &lt;!--end::Input group--&gt;

                &lt;!--begin::Input group--&gt;
                &lt;div class=&quot;fv-row mb-10&quot;&gt;
                    &lt;!--begin::Label--&gt;
                    &lt;label class=&quot;form-label&quot;&gt;
                        Input 3
                    &lt;/label&gt;
                    &lt;!--end::Label--&gt;

                    &lt;!--begin::Input--&gt;
                    &lt;input type=&quot;text&quot; class=&quot;form-control form-control-solid&quot; name=&quot;input3&quot; placeholder=&quot;&quot; value=&quot;&quot;/&gt;
                    &lt;!--end::Input--&gt;
                &lt;/div&gt;
                &lt;!--end::Input group--&gt;
            &lt;/div&gt;
            &lt;!--begin::Step 1--&gt;
        &lt;/div&gt;
        &lt;!--end::Group--&gt;

        &lt;!--begin::Actions--&gt;
        &lt;div class=&quot;d-flex flex-stack&quot;&gt;
            &lt;!--begin::Wrapper--&gt;
            &lt;div class=&quot;me-2&quot;&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-light btn-active-light-primary&quot; data-kt-stepper-action=&quot;previous&quot;&gt;
                    Back
                &lt;/button&gt;
            &lt;/div&gt;
            &lt;!--end::Wrapper--&gt;

            &lt;!--begin::Wrapper--&gt;
            &lt;div&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-kt-stepper-action=&quot;submit&quot;&gt;
                    &lt;span class=&quot;indicator-label&quot;&gt;
                        Submit
                    &lt;/span&gt;
                    &lt;span class=&quot;indicator-progress&quot;&gt;
                        Please wait... &lt;span class=&quot;spinner-border spinner-border-sm align-middle ms-2&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;
                &lt;/button&gt;

                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-kt-stepper-action=&quot;next&quot;&gt;
                    Continue
                &lt;/button&gt;
            &lt;/div&gt;
            &lt;!--end::Wrapper--&gt;
        &lt;/div&gt;
        &lt;!--end::Actions--&gt;
    &lt;/form&gt;
    &lt;!--end::Form--&gt;
&lt;/div&gt;
&lt;!--end::Stepper--&gt;</code></pre>
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
                        <h1 class="anchor fw-bold mb-5" id="modal" data-kt-scroll-offset="50">
                            <a href="#modal"></a>

                            Modal
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Click the below toggle button to see a modal with a stepper.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_1">
                                    Launch demo modal
                                </button>

                                <div class="modal fade" tabindex="-1" id="kt_modal_1">
                                    <div class="modal-dialog mw-800px">
                                        <form class="modal-content stepper stepper-pills" id="kt_stepper_example_modal">
                                            <div class="modal-header px-10">
                                                <h3 class="modal-title">Modal title</h3>

                                                <!--begin::Close-->
                                                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                    data-bs-dismiss="modal" aria-label="Close">
                                                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                                            class="path2"></span></i>
                                                </div>
                                                <!--end::Close-->
                                            </div>

                                            <div class="modal-body px-10">
                                                <!--begin::Stepper-->
                                                <div>
                                                    <!--begin::Nav-->
                                                    <div class="stepper-nav flex-center flex-wrap mb-10">
                                                        <!--begin::Step 1-->
                                                        <div class="stepper-item mx-4 my-4 current"
                                                            data-kt-stepper-element="nav">
                                                            <!--begin::Wrapper-->
                                                            <div class="stepper-wrapper d-flex align-items-center">
                                                                <!--begin::Icon-->
                                                                <div class="stepper-icon w-40px h-40px">
                                                                    <i class="stepper-check fas fa-check"></i>
                                                                    <span class="stepper-number">1</span>
                                                                </div>
                                                                <!--end::Icon-->

                                                                <!--begin::Label-->
                                                                <div class="stepper-label">
                                                                    <h3 class="stepper-title">
                                                                        Step 1
                                                                    </h3>

                                                                    <div class="stepper-desc">
                                                                        Description
                                                                    </div>
                                                                </div>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Wrapper-->

                                                            <!--begin::Line-->
                                                            <div class="stepper-line h-40px"></div>
                                                            <!--end::Line-->
                                                        </div>
                                                        <!--end::Step 1-->

                                                        <!--begin::Step 2-->
                                                        <div class="stepper-item mx-4 my-4" data-kt-stepper-element="nav">
                                                            <!--begin::Wrapper-->
                                                            <div class="stepper-wrapper d-flex align-items-center">
                                                                <!--begin::Icon-->
                                                                <div class="stepper-icon w-40px h-40px">
                                                                    <i class="stepper-check fas fa-check"></i>
                                                                    <span class="stepper-number">2</span>
                                                                </div>
                                                                <!--begin::Icon-->

                                                                <!--begin::Label-->
                                                                <div class="stepper-label">
                                                                    <h3 class="stepper-title">
                                                                        Step 2
                                                                    </h3>

                                                                    <div class="stepper-desc">
                                                                        Description
                                                                    </div>
                                                                </div>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Wrapper-->

                                                            <!--begin::Line-->
                                                            <div class="stepper-line h-40px"></div>
                                                            <!--end::Line-->
                                                        </div>
                                                        <!--end::Step 2-->

                                                        <!--begin::Step 3-->
                                                        <div class="stepper-item mx-4 my-4" data-kt-stepper-element="nav">
                                                            <!--begin::Wrapper-->
                                                            <div class="stepper-wrapper d-flex align-items-center">
                                                                <!--begin::Icon-->
                                                                <div class="stepper-icon w-40px h-40px">
                                                                    <i class="stepper-check fas fa-check"></i>
                                                                    <span class="stepper-number">3</span>
                                                                </div>
                                                                <!--begin::Icon-->

                                                                <!--begin::Label-->
                                                                <div class="stepper-label">
                                                                    <h3 class="stepper-title">
                                                                        Step 3
                                                                    </h3>

                                                                    <div class="stepper-desc">
                                                                        Description
                                                                    </div>
                                                                </div>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Wrapper-->

                                                            <!--begin::Line-->
                                                            <div class="stepper-line h-40px"></div>
                                                            <!--end::Line-->
                                                        </div>
                                                        <!--end::Step 3-->

                                                        <!--begin::Step 4-->
                                                        <div class="stepper-item mx-4 my-4" data-kt-stepper-element="nav">
                                                            <!--begin::Wrapper-->
                                                            <div class="stepper-wrapper d-flex align-items-center">
                                                                <!--begin::Icon-->
                                                                <div class="stepper-icon w-40px h-40px">
                                                                    <i class="stepper-check fas fa-check"></i>
                                                                    <span class="stepper-number">4</span>
                                                                </div>
                                                                <!--begin::Icon-->

                                                                <!--begin::Label-->
                                                                <div class="stepper-label">
                                                                    <h3 class="stepper-title">
                                                                        Step 4
                                                                    </h3>

                                                                    <div class="stepper-desc">
                                                                        Description
                                                                    </div>
                                                                </div>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Wrapper-->

                                                            <!--begin::Line-->
                                                            <div class="stepper-line h-40px"></div>
                                                            <!--end::Line-->
                                                        </div>
                                                        <!--end::Step 4-->
                                                    </div>
                                                    <!--end::Nav-->

                                                    <!--begin::Group-->
                                                    <div class="px-20 mb-5 scroll-y mh-300px">
                                                        <!--begin::Step 1-->
                                                        <div class="flex-column current"
                                                            data-kt-stepper-element="content">
                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-10">
                                                                <!--begin::Label-->
                                                                <label class="form-label">Example Label 1</label>
                                                                <!--end::Label-->

                                                                <!--begin::Input-->
                                                                <input type="text"
                                                                    class="form-control form-control-solid" name="input1"
                                                                    placeholder="" value="" />
                                                                <!--end::Input-->
                                                            </div>
                                                            <!--end::Input group-->

                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-10">
                                                                <!--begin::Label-->
                                                                <label class="form-label">Example Label 2</label>
                                                                <!--end::Label-->

                                                                <!--begin::Input-->
                                                                <input type="text"
                                                                    class="form-control form-control-solid" name="input2"
                                                                    placeholder="" value="" />
                                                                <!--end::Input-->
                                                            </div>
                                                            <!--end::Input group-->

                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-10">
                                                                <!--begin::Label-->
                                                                <label class="form-label">Example Label 3</label>
                                                                <!--end::Label-->

                                                                <!--begin::Switch-->
                                                                <label
                                                                    class="form-check form-switch form-check-custom form-check-solid">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        checked="checked" value="1" />
                                                                    <span class="form-check-label">
                                                                        Switch
                                                                    </span>
                                                                </label>
                                                                <!--end::Switch-->
                                                            </div>
                                                            <!--end::Input group-->
                                                        </div>
                                                        <!--begin::Step 1-->

                                                        <!--begin::Step 1-->
                                                        <div class="flex-column" data-kt-stepper-element="content">
                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-10">
                                                                <!--begin::Label-->
                                                                <label class="form-label">Example Label 1</label>
                                                                <!--end::Label-->

                                                                <!--begin::Input-->
                                                                <input type="text"
                                                                    class="form-control form-control-solid" name="input1"
                                                                    placeholder="" value="" />
                                                                <!--end::Input-->
                                                            </div>
                                                            <!--end::Input group-->

                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-10">
                                                                <!--begin::Label-->
                                                                <label class="form-label">Example Label 2</label>
                                                                <!--end::Label-->

                                                                <!--begin::Input-->
                                                                <textarea class="form-control form-control-solid" rows="3" name="input2" placeholder=""></textarea>
                                                                <!--end::Input-->
                                                            </div>
                                                            <!--end::Input group-->

                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-10">
                                                                <!--begin::Label-->
                                                                <label class="form-label">Example Label 3</label>
                                                                <!--end::Label-->

                                                                <!--begin::Input-->
                                                                <label
                                                                    class="form-check form-check-custom form-check-solid">
                                                                    <input class="form-check-input" checked="checked"
                                                                        type="checkbox" value="1" />
                                                                    <span class="form-check-label">
                                                                        Checkbox
                                                                    </span>
                                                                </label>
                                                                <!--end::Input-->
                                                            </div>
                                                            <!--end::Input group-->
                                                        </div>
                                                        <!--begin::Step 1-->

                                                        <!--begin::Step 1-->
                                                        <div class="flex-column" data-kt-stepper-element="content">
                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-10">
                                                                <!--begin::Label-->
                                                                <label class="form-label d-flex align-items-center">
                                                                    <span class="required">Input 1</span>


                                                                    <span class="ms-1" data-bs-toggle="tooltip"
                                                                        title="Example tooltip">
                                                                        <i
                                                                            class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span><span
                                                                                class="path3"></span></i></span> </label>
                                                                <!--end::Label-->

                                                                <!--begin::Input-->
                                                                <input type="text"
                                                                    class="form-control form-control-solid" name="input1"
                                                                    placeholder="" value="" />
                                                                <!--end::Input-->
                                                            </div>
                                                            <!--end::Input group-->

                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-10">
                                                                <!--begin::Label-->
                                                                <label class="form-label">
                                                                    Input 2
                                                                </label>
                                                                <!--end::Label-->

                                                                <!--begin::Input-->
                                                                <input type="text"
                                                                    class="form-control form-control-solid" name="input2"
                                                                    placeholder="" value="" />
                                                                <!--end::Input-->
                                                            </div>
                                                            <!--end::Input group-->
                                                        </div>
                                                        <!--begin::Step 1-->

                                                        <!--begin::Step 1-->
                                                        <div class="flex-column" data-kt-stepper-element="content">
                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-10">
                                                                <!--begin::Label-->
                                                                <label class="form-label d-flex align-items-center">
                                                                    <span class="required">Input 1</span>
                                                                    <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                        data-bs-toggle="tooltip"
                                                                        title="Example tooltip"></i>
                                                                </label>
                                                                <!--end::Label-->

                                                                <!--begin::Input-->
                                                                <input type="text"
                                                                    class="form-control form-control-solid" name="input1"
                                                                    placeholder="" value="" />
                                                                <!--end::Input-->
                                                            </div>
                                                            <!--end::Input group-->

                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-10">
                                                                <!--begin::Label-->
                                                                <label class="form-label">
                                                                    Input 2
                                                                </label>
                                                                <!--end::Label-->

                                                                <!--begin::Input-->
                                                                <input type="text"
                                                                    class="form-control form-control-solid" name="input2"
                                                                    placeholder="" value="" />
                                                                <!--end::Input-->
                                                            </div>
                                                            <!--end::Input group-->

                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-10">
                                                                <!--begin::Label-->
                                                                <label class="form-label">
                                                                    Input 3
                                                                </label>
                                                                <!--end::Label-->

                                                                <!--begin::Input-->
                                                                <input type="text"
                                                                    class="form-control form-control-solid" name="input3"
                                                                    placeholder="" value="" />
                                                                <!--end::Input-->
                                                            </div>
                                                            <!--end::Input group-->
                                                        </div>
                                                        <!--begin::Step 1-->
                                                    </div>
                                                    <!--end::Group-->
                                                </div>
                                                <!--end::Stepper-->
                                            </div>

                                            <div class="modal-footer px-10 d-flex flex-stack">
                                                <!--begin::Wrapper-->
                                                <div class="me-2">
                                                    <button type="button" class="btn btn-light btn-active-light-primary"
                                                        data-kt-stepper-action="previous">
                                                        Back
                                                    </button>
                                                </div>
                                                <!--end::Wrapper-->

                                                <!--begin::Wrapper-->
                                                <div>
                                                    <button type="button" class="btn btn-primary"
                                                        data-kt-stepper-action="submit">
                                                        <span class="indicator-label">
                                                            Submit
                                                        </span>
                                                        <span class="indicator-progress">
                                                            Please wait... <span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                        </span>
                                                    </button>

                                                    <button type="button" class="btn btn-primary"
                                                        data-kt-stepper-action="next">
                                                        Continue
                                                    </button>
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                        </form>
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
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e5bd04663f2" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e5bd04663f3" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5bd04663f2"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript"><code class="language-javascript">// Stepper lement
var element = document.querySelector(&quot;#kt_stepper_example_modal&quot;);

// Initialize Stepper
var stepper = new KTStepper(element);

// Handle next step
stepper.on(&quot;kt.stepper.next&quot;, function () {
    stepper.goNext(); // go next step
});

// Handle previous step
stepper.on(&quot;kt.stepper.previous&quot;, function () {
    stepper.goPrevious(); // go previous step
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e5bd04663f3" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#kt_modal_1&quot;&gt;
    Launch demo modal
&lt;/button&gt;

&lt;div class=&quot;modal fade&quot; tabindex=&quot;-1&quot; id=&quot;kt_modal_1&quot;&gt;
    &lt;div class=&quot;modal-dialog mw-800px&quot;&gt;
        &lt;form class=&quot;modal-content stepper stepper-pills&quot; id=&quot;kt_stepper_example_modal&quot;&gt;
            &lt;div class=&quot;modal-header px-10&quot;&gt;
                &lt;h3 class=&quot;modal-title&quot;&gt;Modal title&lt;/h3&gt;

                &lt;!--begin::Close--&gt;
                &lt;div class=&quot;btn btn-icon btn-sm btn-active-light-primary ms-2&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;
                    &lt;i class=&quot;ki-duotone ki-cross fs-1&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
                &lt;/div&gt;
                &lt;!--end::Close--&gt;
            &lt;/div&gt;

            &lt;div class=&quot;modal-body px-10&quot;&gt;
                &lt;!--begin::Stepper--&gt;
                &lt;div&gt;
                    &lt;!--begin::Nav--&gt;
                    &lt;div class=&quot;stepper-nav flex-center flex-wrap mb-10&quot;&gt;
                        &lt;!--begin::Step 1--&gt;
                        &lt;div class=&quot;stepper-item mx-4 my-4 current&quot; data-kt-stepper-element=&quot;nav&quot;&gt;
                            &lt;!--begin::Wrapper--&gt;
                            &lt;div class=&quot;stepper-wrapper d-flex align-items-center&quot;&gt;
                                &lt;!--begin::Icon--&gt;
                                &lt;div class=&quot;stepper-icon w-40px h-40px&quot;&gt;
                                    &lt;i class=&quot;stepper-check fas fa-check&quot;&gt;&lt;/i&gt;
                                    &lt;span class=&quot;stepper-number&quot;&gt;1&lt;/span&gt;
                                &lt;/div&gt;
                                &lt;!--end::Icon--&gt;

                                &lt;!--begin::Label--&gt;
                                &lt;div class=&quot;stepper-label&quot;&gt;
                                    &lt;h3 class=&quot;stepper-title&quot;&gt;
                                        Step 1
                                    &lt;/h3&gt;

                                    &lt;div class=&quot;stepper-desc&quot;&gt;
                                        Description
                                    &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;!--end::Label--&gt;
                            &lt;/div&gt;
                            &lt;!--end::Wrapper--&gt;

                            &lt;!--begin::Line--&gt;
                            &lt;div class=&quot;stepper-line h-40px&quot;&gt;&lt;/div&gt;
                            &lt;!--end::Line--&gt;
                        &lt;/div&gt;
                        &lt;!--end::Step 1--&gt;

                        &lt;!--begin::Step 2--&gt;
                        &lt;div class=&quot;stepper-item mx-4 my-4&quot; data-kt-stepper-element=&quot;nav&quot;&gt;
                            &lt;!--begin::Wrapper--&gt;
                            &lt;div class=&quot;stepper-wrapper d-flex align-items-center&quot;&gt;
                                &lt;!--begin::Icon--&gt;
                                &lt;div class=&quot;stepper-icon w-40px h-40px&quot;&gt;
                                    &lt;i class=&quot;stepper-check fas fa-check&quot;&gt;&lt;/i&gt;
                                    &lt;span class=&quot;stepper-number&quot;&gt;2&lt;/span&gt;
                                &lt;/div&gt;
                                &lt;!--begin::Icon--&gt;

                                &lt;!--begin::Label--&gt;
                                &lt;div class=&quot;stepper-label&quot;&gt;
                                    &lt;h3 class=&quot;stepper-title&quot;&gt;
                                        Step 2
                                    &lt;/h3&gt;

                                    &lt;div class=&quot;stepper-desc&quot;&gt;
                                        Description
                                    &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;!--end::Label--&gt;
                            &lt;/div&gt;
                            &lt;!--end::Wrapper--&gt;

                            &lt;!--begin::Line--&gt;
                            &lt;div class=&quot;stepper-line h-40px&quot;&gt;&lt;/div&gt;
                            &lt;!--end::Line--&gt;
                        &lt;/div&gt;
                        &lt;!--end::Step 2--&gt;

                        &lt;!--begin::Step 3--&gt;
                        &lt;div class=&quot;stepper-item mx-4 my-4&quot; data-kt-stepper-element=&quot;nav&quot;&gt;
                            &lt;!--begin::Wrapper--&gt;
                            &lt;div class=&quot;stepper-wrapper d-flex align-items-center&quot;&gt;
                                &lt;!--begin::Icon--&gt;
                                &lt;div class=&quot;stepper-icon w-40px h-40px&quot;&gt;
                                    &lt;i class=&quot;stepper-check fas fa-check&quot;&gt;&lt;/i&gt;
                                    &lt;span class=&quot;stepper-number&quot;&gt;3&lt;/span&gt;
                                &lt;/div&gt;
                                &lt;!--begin::Icon--&gt;

                                &lt;!--begin::Label--&gt;
                                &lt;div class=&quot;stepper-label&quot;&gt;
                                    &lt;h3 class=&quot;stepper-title&quot;&gt;
                                        Step 3
                                    &lt;/h3&gt;

                                    &lt;div class=&quot;stepper-desc&quot;&gt;
                                        Description
                                    &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;!--end::Label--&gt;
                            &lt;/div&gt;
                            &lt;!--end::Wrapper--&gt;

                            &lt;!--begin::Line--&gt;
                            &lt;div class=&quot;stepper-line h-40px&quot;&gt;&lt;/div&gt;
                            &lt;!--end::Line--&gt;
                        &lt;/div&gt;
                        &lt;!--end::Step 3--&gt;

                        &lt;!--begin::Step 4--&gt;
                        &lt;div class=&quot;stepper-item mx-4 my-4&quot; data-kt-stepper-element=&quot;nav&quot;&gt;
                            &lt;!--begin::Wrapper--&gt;
                            &lt;div class=&quot;stepper-wrapper d-flex align-items-center&quot;&gt;
                                &lt;!--begin::Icon--&gt;
                                &lt;div class=&quot;stepper-icon w-40px h-40px&quot;&gt;
                                    &lt;i class=&quot;stepper-check fas fa-check&quot;&gt;&lt;/i&gt;
                                    &lt;span class=&quot;stepper-number&quot;&gt;4&lt;/span&gt;
                                &lt;/div&gt;
                                &lt;!--begin::Icon--&gt;

                                &lt;!--begin::Label--&gt;
                                &lt;div class=&quot;stepper-label&quot;&gt;
                                    &lt;h3 class=&quot;stepper-title&quot;&gt;
                                        Step 4
                                    &lt;/h3&gt;

                                    &lt;div class=&quot;stepper-desc&quot;&gt;
                                        Description
                                    &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;!--end::Label--&gt;
                            &lt;/div&gt;
                            &lt;!--end::Wrapper--&gt;

                            &lt;!--begin::Line--&gt;
                            &lt;div class=&quot;stepper-line h-40px&quot;&gt;&lt;/div&gt;
                            &lt;!--end::Line--&gt;
                        &lt;/div&gt;
                        &lt;!--end::Step 4--&gt;
                    &lt;/div&gt;
                    &lt;!--end::Nav--&gt;

                    &lt;!--begin::Group--&gt;
                    &lt;div class=&quot;px-20 mb-5 scroll-y mh-300px&quot;&gt;
                        &lt;!--begin::Step 1--&gt;
                        &lt;div class=&quot;flex-column current&quot; data-kt-stepper-element=&quot;content&quot;&gt;
                            &lt;!--begin::Input group--&gt;
                            &lt;div class=&quot;fv-row mb-10&quot;&gt;
                                &lt;!--begin::Label--&gt;
                                &lt;label class=&quot;form-label&quot;&gt;Example Label 1&lt;/label&gt;
                                &lt;!--end::Label--&gt;

                                &lt;!--begin::Input--&gt;
                                &lt;input type=&quot;text&quot; class=&quot;form-control form-control-solid&quot; name=&quot;input1&quot; placeholder=&quot;&quot; value=&quot;&quot;/&gt;
                                &lt;!--end::Input--&gt;
                            &lt;/div&gt;
                            &lt;!--end::Input group--&gt;

                            &lt;!--begin::Input group--&gt;
                            &lt;div class=&quot;fv-row mb-10&quot;&gt;
                                &lt;!--begin::Label--&gt;
                                &lt;label class=&quot;form-label&quot;&gt;Example Label 2&lt;/label&gt;
                                &lt;!--end::Label--&gt;

                                &lt;!--begin::Input--&gt;
                                &lt;input type=&quot;text&quot; class=&quot;form-control form-control-solid&quot; name=&quot;input2&quot; placeholder=&quot;&quot; value=&quot;&quot;/&gt;
                                &lt;!--end::Input--&gt;
                            &lt;/div&gt;
                            &lt;!--end::Input group--&gt;

                            &lt;!--begin::Input group--&gt;
                            &lt;div class=&quot;fv-row mb-10&quot;&gt;
                                &lt;!--begin::Label--&gt;
                                &lt;label class=&quot;form-label&quot;&gt;Example Label 3&lt;/label&gt;
                                &lt;!--end::Label--&gt;

                                &lt;!--begin::Switch--&gt;
                                &lt;label class=&quot;form-check form-switch form-check-custom form-check-solid&quot;&gt;
                                    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; checked=&quot;checked&quot; value=&quot;1&quot;/&gt;
                                    &lt;span class=&quot;form-check-label&quot;&gt;
                                        Switch
                                    &lt;/span&gt;
                                &lt;/label&gt;
                                &lt;!--end::Switch--&gt;
                            &lt;/div&gt;
                            &lt;!--end::Input group--&gt;
                        &lt;/div&gt;
                        &lt;!--begin::Step 1--&gt;

                        &lt;!--begin::Step 1--&gt;
                        &lt;div class=&quot;flex-column&quot; data-kt-stepper-element=&quot;content&quot;&gt;
                        &lt;!--begin::Input group--&gt;
                            &lt;div class=&quot;fv-row mb-10&quot;&gt;
                                &lt;!--begin::Label--&gt;
                                &lt;label class=&quot;form-label&quot;&gt;Example Label 1&lt;/label&gt;
                                &lt;!--end::Label--&gt;

                                &lt;!--begin::Input--&gt;
                                &lt;input type=&quot;text&quot; class=&quot;form-control form-control-solid&quot; name=&quot;input1&quot; placeholder=&quot;&quot; value=&quot;&quot;/&gt;
                                &lt;!--end::Input--&gt;
                            &lt;/div&gt;
                            &lt;!--end::Input group--&gt;

                            &lt;!--begin::Input group--&gt;
                            &lt;div class=&quot;fv-row mb-10&quot;&gt;
                                &lt;!--begin::Label--&gt;
                                &lt;label class=&quot;form-label&quot;&gt;Example Label 2&lt;/label&gt;
                                &lt;!--end::Label--&gt;

                                &lt;!--begin::Input--&gt;
                                &lt;textarea class=&quot;form-control form-control-solid&quot; rows=&quot;3&quot; name=&quot;input2&quot; placeholder=&quot;&quot;&gt;&lt;/textarea&gt;
                                &lt;!--end::Input--&gt;
                            &lt;/div&gt;
                            &lt;!--end::Input group--&gt;

                            &lt;!--begin::Input group--&gt;
                            &lt;div class=&quot;fv-row mb-10&quot;&gt;
                                &lt;!--begin::Label--&gt;
                                &lt;label class=&quot;form-label&quot;&gt;Example Label 3&lt;/label&gt;
                                &lt;!--end::Label--&gt;

                                &lt;!--begin::Input--&gt;
                                &lt;label class=&quot;form-check form-check-custom form-check-solid&quot;&gt;
                                    &lt;input class=&quot;form-check-input&quot; checked=&quot;checked&quot; type=&quot;checkbox&quot; value=&quot;1&quot;/&gt;
                                    &lt;span class=&quot;form-check-label&quot;&gt;
                                        Checkbox
                                    &lt;/span&gt;
                                &lt;/label&gt;
                                &lt;!--end::Input--&gt;
                            &lt;/div&gt;
                            &lt;!--end::Input group--&gt;
                        &lt;/div&gt;
                        &lt;!--begin::Step 1--&gt;

                        &lt;!--begin::Step 1--&gt;
                        &lt;div class=&quot;flex-column&quot; data-kt-stepper-element=&quot;content&quot;&gt;
                            &lt;!--begin::Input group--&gt;
                            &lt;div class=&quot;fv-row mb-10&quot;&gt;
                                &lt;!--begin::Label--&gt;
                                &lt;label class=&quot;form-label d-flex align-items-center&quot;&gt;
                                    &lt;span class=&quot;required&quot;&gt;Input 1&lt;/span&gt;
                                &lt;/label&gt;
                                &lt;!--end::Label--&gt;

                                &lt;!--begin::Input--&gt;
                                &lt;input type=&quot;text&quot; class=&quot;form-control form-control-solid&quot; name=&quot;input1&quot; placeholder=&quot;&quot; value=&quot;&quot;/&gt;
                                &lt;!--end::Input--&gt;
                            &lt;/div&gt;
                            &lt;!--end::Input group--&gt;

                            &lt;!--begin::Input group--&gt;
                            &lt;div class=&quot;fv-row mb-10&quot;&gt;
                                &lt;!--begin::Label--&gt;
                                &lt;label class=&quot;form-label&quot;&gt;
                                    Input 2
                                &lt;/label&gt;
                                &lt;!--end::Label--&gt;

                                &lt;!--begin::Input--&gt;
                                &lt;input type=&quot;text&quot; class=&quot;form-control form-control-solid&quot; name=&quot;input2&quot; placeholder=&quot;&quot; value=&quot;&quot;/&gt;
                                &lt;!--end::Input--&gt;
                            &lt;/div&gt;
                            &lt;!--end::Input group--&gt;
                        &lt;/div&gt;
                        &lt;!--begin::Step 1--&gt;

                        &lt;!--begin::Step 1--&gt;
                        &lt;div class=&quot;flex-column&quot; data-kt-stepper-element=&quot;content&quot;&gt;
                            &lt;!--begin::Input group--&gt;
                            &lt;div class=&quot;fv-row mb-10&quot;&gt;
                                &lt;!--begin::Label--&gt;
                                &lt;label class=&quot;form-label d-flex align-items-center&quot;&gt;
                                    &lt;span class=&quot;required&quot;&gt;Input 1&lt;/span&gt;
                                    &lt;i class=&quot;fas fa-exclamation-circle ms-2 fs-7&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Example tooltip&quot;&gt;&lt;/i&gt;
                                &lt;/label&gt;
                                &lt;!--end::Label--&gt;

                                &lt;!--begin::Input--&gt;
                                &lt;input type=&quot;text&quot; class=&quot;form-control form-control-solid&quot; name=&quot;input1&quot; placeholder=&quot;&quot; value=&quot;&quot;/&gt;
                                &lt;!--end::Input--&gt;
                            &lt;/div&gt;
                            &lt;!--end::Input group--&gt;

                            &lt;!--begin::Input group--&gt;
                            &lt;div class=&quot;fv-row mb-10&quot;&gt;
                                &lt;!--begin::Label--&gt;
                                &lt;label class=&quot;form-label&quot;&gt;
                                    Input 2
                                &lt;/label&gt;
                                &lt;!--end::Label--&gt;

                                &lt;!--begin::Input--&gt;
                                &lt;input type=&quot;text&quot; class=&quot;form-control form-control-solid&quot; name=&quot;input2&quot; placeholder=&quot;&quot; value=&quot;&quot;/&gt;
                                &lt;!--end::Input--&gt;
                            &lt;/div&gt;
                            &lt;!--end::Input group--&gt;

                            &lt;!--begin::Input group--&gt;
                            &lt;div class=&quot;fv-row mb-10&quot;&gt;
                                &lt;!--begin::Label--&gt;
                                &lt;label class=&quot;form-label&quot;&gt;
                                    Input 3
                                &lt;/label&gt;
                                &lt;!--end::Label--&gt;

                                &lt;!--begin::Input--&gt;
                                &lt;input type=&quot;text&quot; class=&quot;form-control form-control-solid&quot; name=&quot;input3&quot; placeholder=&quot;&quot; value=&quot;&quot;/&gt;
                                &lt;!--end::Input--&gt;
                            &lt;/div&gt;
                            &lt;!--end::Input group--&gt;
                        &lt;/div&gt;
                        &lt;!--begin::Step 1--&gt;
                    &lt;/div&gt;
                    &lt;!--end::Group--&gt;
                &lt;/div&gt;
                &lt;!--end::Stepper--&gt;
            &lt;/div&gt;

            &lt;div class=&quot;modal-footer px-10 d-flex flex-stack&quot;&gt;
                &lt;!--begin::Wrapper--&gt;
                &lt;div class=&quot;me-2&quot;&gt;
                    &lt;button type=&quot;button&quot; class=&quot;btn btn-light btn-active-light-primary&quot; data-kt-stepper-action=&quot;previous&quot;&gt;
                        Back
                    &lt;/button&gt;
                &lt;/div&gt;
                &lt;!--end::Wrapper--&gt;

                &lt;!--begin::Wrapper--&gt;
                &lt;div&gt;
                    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-kt-stepper-action=&quot;submit&quot;&gt;
                        &lt;span class=&quot;indicator-label&quot;&gt;
                            Submit
                        &lt;/span&gt;
                        &lt;span class=&quot;indicator-progress&quot;&gt;
                            Please wait... &lt;span class=&quot;spinner-border spinner-border-sm align-middle ms-2&quot;&gt;&lt;/span&gt;
                        &lt;/span&gt;
                    &lt;/button&gt;

                    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-kt-stepper-action=&quot;next&quot;&gt;
                        Continue
                    &lt;/button&gt;
                &lt;/div&gt;
                &lt;!--end::Wrapper--&gt;
            &lt;/div&gt;
        &lt;/form&gt;
    &lt;/div&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="markup-reference" data-kt-scroll-offset="50">
                            <a href="#markup-reference"></a>

                            Markup Reference
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            For the sake of design abstraction Stepper does not depend on design structure with
                            CSS classes. Instead, it defines it's dependant elements via HTML attributes
                            explained in the below table:
                        </div>
                        <!--end::Block-->

                        <!--begin::Table-->
                        <div class="py-5">
                            <div class="table-responsive border rounded">
                                <table class="table table-striped align-middle mb-0 g-5">
                                    <thead>
                                        <tr class="fs-4 fw-bold text-gray-900 p-6">
                                            <th class="min-w-300px">Name</th>
                                            <th class="min-w-500px">Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <code>data-kt-stepper-element="nav"</code>
                                            </td>
                                            <td>
                                                Represents a step's navigation indicator element that may contain of step
                                                title, description, icon and number.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>data-kt-stepper-element="content"</code>
                                            </td>
                                            <td>
                                                Represents a step content element that may contain of form elements.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>data-kt-stepper-action="next"</code>
                                            </td>
                                            <td>
                                                Represents a next button.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>data-kt-stepper-action="previous"</code>
                                            </td>
                                            <td>
                                                Represents a previous button.
                                            </td>
                                        </tr>
                                        <!--
                            <tr>
                                <td>
                                    <code>data-kt-stepper-state="hide-on-last-step"</code>
                                </td>
                                <td>
                                    Hides the previous button on the last step.
                                </td>
                            </tr>
                            -->
                                        <tr>
                                            <td>
                                                <code>data-kt-stepper-action="submit"</code>
                                            </td>
                                            <td>
                                                Represents a submit button that is shown in final step.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>data-kt-stepper-action="step"</code>
                                            </td>
                                            <td>
                                                Enables clickable steps when set to stepper navigation links.
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end::Table-->

                        <!--begin::Notice-->
                        <div class="py-5">
                            <!--begin::Information-->
                            <div class="d-flex align-items-center rounded py-5 px-5 bg-light-warning "><i
                                    class="ki-duotone ki-information-5 fs-3x text-warning me-5"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span></i> <!--begin::Description-->
                                <div class="text-gray-700 fw-bold fs-6">
                                    <code>.current</code>, <code>.pending</code> and <code>.completed</code> classes are
                                    applied to <code>data-kt-stepper-element="nav"</code> and
                                    <code>data-kt-stepper-element="content"</code> elements to highlight current, pending
                                    and competed step states.
                                </div> <!--end::Description-->
                            </div><!--end::Information-->
                        </div>
                        <!--end::Notice-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="methods" data-kt-scroll-offset="50">
                            <a href="#methods"></a>

                            Methods
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            The following are the Stepper's functionality methods for more control.
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
                                            <th class="min-w-400px">Name</th>
                                            <th class="min-w-500px">Description</th>
                                        </tr>
                                    </thead>
                                    <!--end::Head-->

                                    <!--begin::Body-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <code>KTStepper(DOMElement element, Object options)</code>
                                            </td>
                                            <td>
                                                Constructs a stepper object by given DOM element and options.
                                                <code>startIndex</code> is starting steps index. Default value is
                                                <code>startIndex: 1</code>
                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">var stepperEl = document.querySelector(&quot;#kt_stepper_example&quot;);
var options = {startIndex: 1};
var stepper = new KTStepper(stepperEl, options);</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>goTo(Integer index)</code>
                                            </td>
                                            <td>
                                                Activates a step by given index. <code>index</code> is an integer value(e.g:
                                                1, 2, 3 ...) that represents the step's order number.

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">stepper.goTo(index);</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>goNext()</code>
                                            </td>
                                            <td>
                                                Activates next step.
                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">stepper.goNext();</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>goPrevious()</code>
                                            </td>
                                            <td>
                                                Activates previous step.

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">stepper.goPrevious();</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>goFirst()</code>
                                            </td>
                                            <td>
                                                Activates the first step.

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">stepper.goFirst();</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <code>goLast()</code>
                                            </td>
                                            <td>
                                                Activates the last step.

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">stepper.goLast();</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <code>getClickedStepIndex()</code>
                                            </td>
                                            <td>
                                                Returns the clicked step index number as integer when stepper nav link is
                                                set with <code>data-kt-stepper-action="step"</code> attribute.

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">stepper.getClickedStepIndex();</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <code>getCurrentStepIndex()</code>
                                            </td>
                                            <td>
                                                Returns the current step index number as integer.

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">stepper.getCurrentStepIndex();</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <code>getNextStepIndex()</code>
                                            </td>
                                            <td>
                                                Returns the next step's index number as integer.

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">stepper.getNextStepIndex();</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <code>getPreviousStepIndex()</code>
                                            </td>
                                            <td>
                                                Returns the previous step's index number as integer.

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">stepper.getPreviousStepIndex();</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <code>getElement()</code>
                                            </td>
                                            <td>
                                                Returns the Stepper's attached DOM element.

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">var element = stepper.getElement();</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>destroy()</code>
                                            </td>
                                            <td>
                                                Removes the component instance from element.
                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">blockUI.destroy();</code></pre>
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
                                            <th colspan="2">Static Methods</th>
                                        </tr>
                                    </thead>
                                    <!--end::Head-->

                                    <!--begin::Body-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <code>getInstance(DOMElement element)</code>
                                            </td>
                                            <td>
                                                Get the Stepper instance created

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">var stepperElement = document.querySelector(&quot;#kt_stepper_example_1&quot;);
var stepper = KTStepper.getInstance(stepperElement);</code></pre>
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
                        <h1 class="anchor fw-bold mb-5" id="events" data-kt-scroll-offset="50">
                            <a href="#events"></a>

                            Events
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Below are few events for hooking into the Stepper functionality.
                        </div>
                        <!--end::Block-->

                        <!--begin::Table-->
                        <div class="pt-2 pb-5">
                            <!--begin::Table wrapper-->
                            <div class="table-responsive border rounded">
                                <!--begin::Table-->
                                <table class="table table-striped align-middle mb-0 g-5">
                                    <!--begin::Head-->
                                    <thead>
                                        <tr class="fs-4 fw-bold text-gray-900 p-6">
                                            <th class="min-w-300px">Event Type</th>
                                            <th class="min-w-500px">Description</th>
                                        </tr>
                                    </thead>
                                    <!--end::Head-->

                                    <!--begin::Body-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <code>kt.stepper.next</code>
                                            </td>
                                            <td>
                                                This event fires on next navigation button click.
                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">var stepperEl = document.querySelector(&quot;#kt_stepper_example&quot;);
var stepper = new KTStepper(stepperEl);
stepper.on(&quot;kt.stepper.next&quot;, function() {
    // console.log(&quot;kt.stepper.next event is fired&quot;);
});</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>kt.stepper.previous</code>
                                            </td>
                                            <td>
                                                This event fires on previous navigation button click.
                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">stepper.on(&quot;kt.stepper.previous&quot;, function() {
    // console.log(&quot;kt.stepper.previous event is fired&quot;);
});</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>kt.stepper.change</code>
                                            </td>
                                            <td>
                                                This event fires before current step change.
                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">stepper.on(&quot;kt.stepper.change&quot;, function() {
    // console.log(&quot;kt.stepper.change event is fired&quot;);
});</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>kt.stepper.changed</code>
                                            </td>
                                            <td>
                                                This event fires after current step change.
                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">stepper.on(&quot;kt.stepper.changed&quot;, function() {
    // console.log(&quot;kt.stepper.changed event is fired&quot;);
});</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>kt.stepper.click</code>
                                            </td>
                                            <td>
                                                This event fires on clickable navigation link click.
                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">stepper.on(&quot;kt.stepper.click&quot;, function() {
    stepper.goTo(stepper.getClickedStepIndex()); // go to clicked step
});</code></pre>
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
                                <a href="#vertical" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Vertical</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#clickable-navigation" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Clickable Navigation</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#modal" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Modal</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#markup-reference" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Markup Reference</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#methods" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Methods</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#events" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Events</span>
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
    <script src="{{ asset('assets/js/custom/documentation/general/stepper.js') }}"></script>
    <!--end::Vendors Javascript-->
@endsection


