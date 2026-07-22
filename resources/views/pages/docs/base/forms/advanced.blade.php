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
                            Metronic comes with advanced custom form controls powered with the Bootstrap's base form
                            elements mixed rich content for varuouse use case.
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="radio-buttons-example-1" data-kt-scroll-offset="50">
                            <a href="#radio-buttons-example-1"></a>

                            Radio Buttons Example 1
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Build rich radio buttons group using <code>data-kt-buttons="true"</code> special
                            attribute with
                            <a href="/html/metronic/docs/base/buttons" class="fw-semibold">Buttons</a>&nbsp; and
                            <a href="/html/metronic/docs/base/forms/controls" class="fw-semibold">Form
                                Controls</a>&nbsp; components:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Radio group-->
                                <div class="w-lg-50" data-kt-buttons="true">
                                    <!--begin::Radio button-->
                                    <label
                                        class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex flex-stack text-start p-6 mb-5">
                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-primary me-6">
                                                <input class="form-check-input" type="radio" name="plan"
                                                    value="startup" />
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <h2 class="d-flex align-items-center fs-3 fw-bold flex-wrap">
                                                    Startup
                                                </h2>
                                                <div class="fw-semibold opacity-50">
                                                    Best for startups
                                                </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Price-->
                                        <div class="ms-5">
                                            <span class="mb-2">$</span>
                                            <span class="fs-2x fw-bold">
                                                39
                                            </span>
                                            <span class="fs-7 opacity-50">/
                                                <span data-kt-element="period">Mon</span>
                                            </span>
                                        </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Radio button-->

                                    <!--begin::Radio button-->
                                    <label
                                        class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex flex-stack text-start p-6 mb-5 active">
                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-primary me-6">
                                                <input class="form-check-input" type="radio" name="plan"
                                                    checked="checked" value="advanced" />
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <h2 class="d-flex align-items-center fs-3 fw-bold flex-wrap">
                                                    Advanced
                                                    <span class="badge badge-light-success ms-2 fs-7">Most
                                                        popular</span>
                                                </h2>
                                                <div class="fw-semibold opacity-50">
                                                    Best for 100+ team size
                                                </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Price-->
                                        <div class="ms-5">
                                            <span class="mb-2">$</span>
                                            <span class="fs-2x fw-bold">
                                                139
                                            </span>
                                            <span class="fs-7 opacity-50">/
                                                <span data-kt-element="period">Mon</span>
                                            </span>
                                        </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Radio button-->

                                    <!--begin::Radio button-->
                                    <label
                                        class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex flex-stack text-start p-6">
                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-primary me-6">
                                                <input class="form-check-input" type="radio" name="plan"
                                                    value="enterprise" />
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <h2 class="d-flex align-items-center fs-3 fw-bold flex-wrap">
                                                    Enterprise
                                                </h2>
                                                <div class="fw-semibold opacity-50">
                                                    Best value for 1000+ team
                                                </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Price-->
                                        <div class="ms-5">
                                            <span class="mb-2">$</span>
                                            <span class="fs-2x fw-bold">
                                                339
                                            </span>
                                            <span class="fs-7 opacity-50">/
                                                <span data-kt-element="period">Mon</span>
                                            </span>
                                        </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Radio button-->
                                </div>
                                <!--end::Radio group-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Radio group--&gt;
&lt;div data-kt-buttons=&quot;true&quot;&gt;
    &lt;!--begin::Radio button--&gt;
    &lt;label class=&quot;btn btn-outline btn-outline-dashed btn-active-light-primary d-flex flex-stack text-start p-6 mb-5&quot;&gt;
        &lt;!--end::Description--&gt;
        &lt;div class=&quot;d-flex align-items-center me-2&quot;&gt;
            &lt;!--begin::Radio--&gt;
            &lt;div class=&quot;form-check form-check-custom form-check-solid form-check-primary me-6&quot;&gt;
                &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;plan&quot; value=&quot;startup&quot;/&gt;
            &lt;/div&gt;
            &lt;!--end::Radio--&gt;

            &lt;!--begin::Info--&gt;
            &lt;div class=&quot;flex-grow-1&quot;&gt;
                &lt;h2 class=&quot;d-flex align-items-center fs-3 fw-bold flex-wrap&quot;&gt;
                    Startup
                &lt;/h2&gt;
                &lt;div class=&quot;fw-semibold opacity-50&quot;&gt;
                    Best for startups
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;!--end::Info--&gt;
        &lt;/div&gt;
        &lt;!--end::Description--&gt;

        &lt;!--begin::Price--&gt;
        &lt;div class=&quot;ms-5&quot;&gt;
            &lt;span class=&quot;mb-2&quot;&gt;$&lt;/span&gt;
            &lt;span class=&quot;fs-2x fw-bold&quot;&gt;
                39
            &lt;/span&gt;
            &lt;span class=&quot;fs-7 opacity-50&quot;&gt;/
                &lt;span data-kt-element=&quot;period&quot;&gt;Mon&lt;/span&gt;
            &lt;/span&gt;
        &lt;/div&gt;
        &lt;!--end::Price--&gt;
    &lt;/label&gt;
    &lt;!--end::Radio button--&gt;

    &lt;!--begin::Radio button--&gt;
    &lt;label class=&quot;btn btn-outline btn-outline-dashed btn-active-light-primary d-flex flex-stack text-start p-6 mb-5 active&quot;&gt;
        &lt;!--end::Description--&gt;
        &lt;div class=&quot;d-flex align-items-center me-2&quot;&gt;
            &lt;!--begin::Radio--&gt;
            &lt;div class=&quot;form-check form-check-custom form-check-solid form-check-primary me-6&quot;&gt;
                &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;plan&quot; checked=&quot;checked&quot; value=&quot;advanced&quot;/&gt;
            &lt;/div&gt;
            &lt;!--end::Radio--&gt;

            &lt;!--begin::Info--&gt;
            &lt;div class=&quot;flex-grow-1&quot;&gt;
                &lt;h2 class=&quot;d-flex align-items-center fs-3 fw-bold flex-wrap&quot;&gt;
                    Advanced
                    &lt;span class=&quot;badge badge-light-success ms-2 fs-7&quot;&gt;Most popular&lt;/span&gt;
                &lt;/h2&gt;
                &lt;div class=&quot;fw-semibold opacity-50&quot;&gt;
                    Best for 100+ team size
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;!--end::Info--&gt;
        &lt;/div&gt;
        &lt;!--end::Description--&gt;

        &lt;!--begin::Price--&gt;
        &lt;div class=&quot;ms-5&quot;&gt;
            &lt;span class=&quot;mb-2&quot;&gt;$&lt;/span&gt;
            &lt;span class=&quot;fs-2x fw-bold&quot;&gt;
                139
            &lt;/span&gt;
            &lt;span class=&quot;fs-7 opacity-50&quot;&gt;/
                &lt;span data-kt-element=&quot;period&quot;&gt;Mon&lt;/span&gt;
            &lt;/span&gt;
        &lt;/div&gt;
        &lt;!--end::Price--&gt;
    &lt;/label&gt;
    &lt;!--end::Radio button--&gt;

    &lt;!--begin::Radio button--&gt;
    &lt;label class=&quot;btn btn-outline btn-outline-dashed btn-active-light-primary d-flex flex-stack text-start p-6&quot;&gt;
        &lt;!--end::Description--&gt;
        &lt;div class=&quot;d-flex align-items-center me-2&quot;&gt;
            &lt;!--begin::Radio--&gt;
            &lt;div class=&quot;form-check form-check-custom form-check-solid form-check-primary me-6&quot;&gt;
                &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;plan&quot; value=&quot;enterprise&quot;/&gt;
            &lt;/div&gt;
            &lt;!--end::Radio--&gt;

            &lt;!--begin::Info--&gt;
            &lt;div class=&quot;flex-grow-1&quot;&gt;
                &lt;h2 class=&quot;d-flex align-items-center fs-3 fw-bold flex-wrap&quot;&gt;
                    Enterprise
                &lt;/h2&gt;
                &lt;div class=&quot;fw-semibold opacity-50&quot;&gt;
                    Best value for 1000+ team
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;!--end::Info--&gt;
        &lt;/div&gt;
        &lt;!--end::Description--&gt;

        &lt;!--begin::Price--&gt;
        &lt;div class=&quot;ms-5&quot;&gt;
            &lt;span class=&quot;mb-2&quot;&gt;$&lt;/span&gt;
            &lt;span class=&quot;fs-2x fw-bold&quot;&gt;
                339
            &lt;/span&gt;
            &lt;span class=&quot;fs-7 opacity-50&quot;&gt;/
                &lt;span data-kt-element=&quot;period&quot;&gt;Mon&lt;/span&gt;
            &lt;/span&gt;
        &lt;/div&gt;
        &lt;!--end::Price--&gt;
    &lt;/label&gt;
    &lt;!--end::Radio button--&gt;
&lt;/div&gt;
&lt;!--end::Radio group--&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <!--begin::Information-->
                            <div class="d-flex align-items-center rounded py-5 px-5 bg-light-info "><i
                                    class="ki-duotone ki-information-5 fs-3x text-info me-5"><span
                                        class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-bold fs-6"><code>data-kt-buttons="true"</code> is used
                                    to handle buttons toggle state with <code>.active</code> class within the group.
                                </div> <!--end::Description-->
                            </div><!--end::Information-->
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="radio-buttons-example-2" data-kt-scroll-offset="50">
                            <a href="#radio-buttons-example-2"></a>

                            Radio Buttons Example 2
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Build a rich radio buttons group with
                            <a href="/html/metronic/docs/base/buttons" class="fw-semibold">Buttons</a>,
                            <a href="/html/metronic/docs/base/forms/controls" class="fw-semibold">Form
                                Controls</a>&nbsp; and
                            <a href="/html/metronic/docs/icons/duotune" class="fw-semibold">Duotune Icon</a>&nbsp;
                            components:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="w-lg-50">
                                    <!--begin::Option-->
                                    <input type="radio" class="btn-check" name="radio_buttons_2" value="apps"
                                        checked="checked" id="kt_radio_buttons_2_option_1" />
                                    <label
                                        class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-5"
                                        for="kt_radio_buttons_2_option_1">
                                        <i class="ki-duotone ki-setting-2 fs-4x me-4"><span class="path1"></span><span
                                                class="path2"></span></i>
                                        <span class="d-block fw-semibold text-start">
                                            <span class="text-gray-900 fw-bold d-block fs-3">Authenticator
                                                Apps</span>
                                            <span class="text-muted fw-semibold fs-6">
                                                Get codes from an app like Google Authenticator, Microsoft
                                                Authenticator etc.
                                            </span>
                                        </span>
                                    </label>
                                    <!--end::Option-->

                                    <!--begin::Option-->
                                    <input type="radio" class="btn-check" name="radio_buttons_2" value="sms"
                                        id="kt_radio_buttons_2_option_2" />
                                    <label
                                        class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center"
                                        for="kt_radio_buttons_2_option_2">
                                        <i class="ki-duotone ki-message-text-2 fs-4x me-4"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span></i>
                                        <span class="d-block fw-semibold text-start">
                                            <span class="text-gray-900 fw-bold d-block fs-3">SMS</span>
                                            <span class="text-muted fw-semibold fs-6">We will send a code via SMS
                                                if you need to use your backup login method.</span>
                                        </span>
                                    </label>
                                    <!--end::Option-->
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
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Option--&gt;
&lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;radio_buttons_2&quot; value=&quot;apps&quot; checked=&quot;checked&quot;  id=&quot;kt_radio_buttons_2_option_1&quot;/&gt;
&lt;label class=&quot;btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-5&quot; for=&quot;kt_radio_buttons_2_option_1&quot;&gt;
    &lt;i class=&quot;ki-duotone ki-setting-2 fs-4x me-4&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;

    &lt;span class=&quot;d-block fw-semibold text-start&quot;&gt;
        &lt;span class=&quot;text-gray-900 fw-bold d-block fs-3&quot;&gt;Authenticator Apps&lt;/span&gt;
        &lt;span class=&quot;text-muted fw-semibold fs-6&quot;&gt;
            Get codes from an app like Google Authenticator,  Microsoft Authenticator, Authy or 1Password.
        &lt;/span&gt;
    &lt;/span&gt;
&lt;/label&gt;
&lt;!--end::Option--&gt;

&lt;!--begin::Option--&gt;
&lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;radio_buttons_2&quot; value=&quot;sms&quot; id=&quot;kt_radio_buttons_2_option_2&quot;/&gt;
&lt;label class=&quot;btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center&quot; for=&quot;kt_radio_buttons_2_option_2&quot;&gt;
    &lt;i class=&quot;ki-duotone ki-message-text-2 fs-4x me-4&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;/i&gt;

    &lt;span class=&quot;d-block fw-semibold text-start&quot;&gt;
        &lt;span class=&quot;text-gray-900 fw-bold d-block fs-3&quot;&gt;SMS&lt;/span&gt;
        &lt;span class=&quot;text-muted fw-semibold fs-6&quot;&gt;We will send a code via SMS if you need to use your backup login method.&lt;/span&gt;
    &lt;/span&gt;
&lt;/label&gt;
&lt;!--end::Option--&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="radio-buttons-example-3" data-kt-scroll-offset="50">
                            <a href="#radio-buttons-example-3"></a>

                            Radio Buttons Example 3
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Build a rich radio buttons group with
                            <a href="/html/metronic/docs/base/buttons" class="fw-semibold">Buttons</a>,
                            <a href="/html/metronic/docs/base/symbol" class="fw-semibold">Symbol</a>&nbsp; and
                            <a href="/html/metronic/docs/icons/duotune" class="fw-semibold">Duotune Icon</a>&nbsp;
                            components:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="w-lg-50">
                                    <!--begin:Option-->
                                    <label class="d-flex flex-stack mb-5 cursor-pointer">
                                        <!--begin:Label-->
                                        <span class="d-flex align-items-center me-2">
                                            <!--begin:Icon-->
                                            <span class="symbol symbol-50px me-6">
                                                <span class="symbol-label bg-light-primary">
                                                    <i class="ki-duotone ki-compass fs-1 text-primary"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                </span>
                                            </span>
                                            <!--end:Icon-->

                                            <!--begin:Info-->
                                            <span class="d-flex flex-column">
                                                <span class="fw-bold fs-6">Quick Online Courses</span>
                                                <span class="fs-7 text-muted">Creating a clear text structure is
                                                    just one SEO</span>
                                            </span>
                                            <!--end:Info-->
                                        </span>
                                        <!--end:Label-->

                                        <!--begin:Input-->
                                        <span class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="radio" name="category"
                                                value="1" />
                                        </span>
                                        <!--end:Input-->
                                    </label>
                                    <!--end::Option-->

                                    <!--begin:Option-->
                                    <label class="d-flex flex-stack mb-5 cursor-pointer">
                                        <!--begin:Label-->
                                        <span class="d-flex align-items-center me-2">
                                            <!--begin:Icon-->
                                            <span class="symbol symbol-50px me-6">
                                                <span class="symbol-label bg-light-danger  ">
                                                    <i class="ki-duotone ki-element-11 fs-1 text-danger"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span></i>
                                                </span>
                                            </span>
                                            <!--end:Icon-->

                                            <!--begin:Info-->
                                            <span class="d-flex flex-column">
                                                <span class="fw-bold fs-6">Face to Face Discussions</span>
                                                <span class="fs-7 text-muted">Creating a clear text structure is
                                                    just one aspect</span>
                                            </span>
                                            <!--end:Info-->
                                        </span>
                                        <!--end:Label-->

                                        <!--begin:Input-->
                                        <span class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="radio" name="category"
                                                value="2" />
                                        </span>
                                        <!--end:Input-->
                                    </label>
                                    <!--end::Option-->

                                    <!--begin:Option-->
                                    <label class="d-flex flex-stack cursor-pointer">
                                        <!--begin:Label-->
                                        <span class="d-flex align-items-center me-2">
                                            <!--begin:Icon-->
                                            <span class="symbol symbol-50px me-6">
                                                <span class="symbol-label bg-light-success">
                                                    <i class="ki-duotone ki-timer fs-1 text-success"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i>
                                                </span>
                                            </span>
                                            <!--end:Icon-->

                                            <!--begin:Info-->
                                            <span class="d-flex flex-column">
                                                <span class="fw-bold fs-6">Full Intro Training</span>
                                                <span class="fs-7 text-muted">Creating a clear text structure
                                                    copywriting</span>
                                            </span>
                                            <!--end:Info-->
                                        </span>
                                        <!--end:Label-->

                                        <!--begin:Input-->
                                        <span class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="radio" name="category"
                                                value="3" />
                                        </span>
                                        <!--end:Input-->
                                    </label>
                                    <!--end::Option-->
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
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin:Option--&gt;
&lt;label class=&quot;d-flex flex-stack mb-5 cursor-pointer&quot;&gt;
    &lt;!--begin:Label--&gt;
    &lt;span class=&quot;d-flex align-items-center me-2&quot;&gt;
        &lt;!--begin:Icon--&gt;
        &lt;span class=&quot;symbol symbol-50px me-6&quot;&gt;
            &lt;span class=&quot;symbol-label bg-light-primary&quot;&gt;
                &lt;i class=&quot;ki-duotone ki-compass fs-1 text-primary&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
            &lt;/span&gt;
        &lt;/span&gt;
        &lt;!--end:Icon--&gt;

        &lt;!--begin:Info--&gt;
        &lt;span class=&quot;d-flex flex-column&quot;&gt;
            &lt;span class=&quot;fw-bold fs-6&quot;&gt;Quick Online Courses&lt;/span&gt;
            &lt;span class=&quot;fs-7 text-muted&quot;&gt;Creating a clear text structure is just one SEO&lt;/span&gt;
        &lt;/span&gt;
        &lt;!--end:Info--&gt;
    &lt;/span&gt;
    &lt;!--end:Label--&gt;

    &lt;!--begin:Input--&gt;
    &lt;span class=&quot;form-check form-check-custom form-check-solid&quot;&gt;
        &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot;  name=&quot;category&quot; value=&quot;1&quot;/&gt;
    &lt;/span&gt;
    &lt;!--end:Input--&gt;
&lt;/label&gt;
&lt;!--end::Option--&gt;

&lt;!--begin:Option--&gt;
&lt;label class=&quot;d-flex flex-stack mb-5 cursor-pointer&quot;&gt;
    &lt;!--begin:Label--&gt;
    &lt;span class=&quot;d-flex align-items-center me-2&quot;&gt;
        &lt;!--begin:Icon--&gt;
        &lt;span class=&quot;symbol symbol-50px me-6&quot;&gt;
            &lt;span class=&quot;symbol-label bg-light-danger&quot;&gt;
                &lt;i class=&quot;ki-duotone ki-element-11 fs-1 text-danger&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;/i&gt;
            &lt;/span&gt;
        &lt;/span&gt;
        &lt;!--end:Icon--&gt;

        &lt;!--begin:Info--&gt;
        &lt;span class=&quot;d-flex flex-column&quot;&gt;
            &lt;span class=&quot;fw-bold fs-6&quot;&gt;Face to Face Discussions&lt;/span&gt;
            &lt;span class=&quot;fs-7 text-muted&quot;&gt;Creating a clear text structure is just one aspect&lt;/span&gt;
        &lt;/span&gt;
        &lt;!--end:Info--&gt;
    &lt;/span&gt;
    &lt;!--end:Label--&gt;

    &lt;!--begin:Input--&gt;
    &lt;span class=&quot;form-check form-check-custom form-check-solid&quot;&gt;
        &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;category&quot; value=&quot;2&quot;/&gt;
    &lt;/span&gt;
    &lt;!--end:Input--&gt;
&lt;/label&gt;
&lt;!--end::Option--&gt;

&lt;!--begin:Option--&gt;
&lt;label class=&quot;d-flex flex-stack cursor-pointer&quot;&gt;
    &lt;!--begin:Label--&gt;
    &lt;span class=&quot;d-flex align-items-center me-2&quot;&gt;
        &lt;!--begin:Icon--&gt;
        &lt;span class=&quot;symbol symbol-50px me-6&quot;&gt;
            &lt;span class=&quot;symbol-label bg-light-success&quot;&gt;
                &lt;i class=&quot;ki-duotone ki-timer fs-1 text-success&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;/i&gt;
            &lt;/span&gt;
        &lt;/span&gt;
        &lt;!--end:Icon--&gt;

        &lt;!--begin:Info--&gt;
        &lt;span class=&quot;d-flex flex-column&quot;&gt;
            &lt;span class=&quot;fw-bold fs-6&quot;&gt;Full Intro Training&lt;/span&gt;
            &lt;span class=&quot;fs-7 text-muted&quot;&gt;Creating a clear text structure copywriting&lt;/span&gt;
        &lt;/span&gt;
        &lt;!--end:Info--&gt;
    &lt;/span&gt;
    &lt;!--end:Label--&gt;

    &lt;!--begin:Input--&gt;
    &lt;span class=&quot;form-check form-check-custom form-check-solid&quot;&gt;
        &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;category&quot; value=&quot;3&quot;/&gt;
    &lt;/span&gt;
    &lt;!--end:Input--&gt;
&lt;/label&gt;
&lt;!--end::Option--&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="radio-buttons-example-4" data-kt-scroll-offset="50">
                            <a href="#radio-buttons-example-4"></a>

                            Radio Buttons Example 4
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Build rich radio buttons group using <code>data-kt-buttons="true"</code> special
                            attribute with
                            <a href="/html/metronic/docs/base/buttons" class="fw-semibold">Buttons</a>,
                            <a href="/html/metronic/docs/base/forms/controls" class="fw-semibold">Form
                                Controls</a>&nbsp; and
                            <a href="/html/metronic/docs/icons/duotune" class="fw-semibold">Duotune Icon</a>&nbsp;
                            components:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Heading-->
                                <div class="mb-3">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-5 fw-semibold">
                                        <span class="required">Specify Your API Method</span>

                                        <span class="m2-1" data-bs-toggle="tooltip"
                                            title="Your billing numbers will be calculated based on your API method">
                                            <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> </span>
                                    </label>
                                    <!--end::Label-->

                                    <!--begin::Description-->
                                    <div class="fs-7 fw-semibold text-muted">If you need more info, please check
                                        budget planning</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Heading-->

                                <!--begin::Radio group-->
                                <div class="btn-group w-100 w-lg-50" data-kt-buttons="true"
                                    data-kt-buttons-target="[data-kt-button]">
                                    <!--begin::Radio-->
                                    <label class="btn btn-outline btn-color-muted btn-active-success"
                                        data-kt-button="true">
                                        <!--begin::Input-->
                                        <input class="btn-check" type="radio" name="method" value="1" />
                                        <!--end::Input-->
                                        Open API
                                    </label>
                                    <!--end::Radio-->

                                    <!--begin::Radio-->
                                    <label class="btn btn-outline btn-color-muted btn-active-success active"
                                        data-kt-button="true">
                                        <!--begin::Input-->
                                        <input class="btn-check" type="radio" name="method" checked="checked"
                                            value="2" />
                                        <!--end::Input-->
                                        SQL Call
                                    </label>
                                    <!--end::Radio-->

                                    <!--begin::Radio-->
                                    <label class="btn btn-outline btn-color-muted btn-active-success"
                                        data-kt-button="true">
                                        <!--begin::Input-->
                                        <input class="btn-check" type="radio" name="method" value="3" />
                                        <!--end::Input-->
                                        UI/UX
                                    </label>
                                    <!--end::Radio-->

                                    <!--begin::Radio-->
                                    <label class="btn btn-outline btn-color-muted btn-active-success"
                                        data-kt-button="true">
                                        <!--begin::Input-->
                                        <input class="btn-check" type="radio" name="method" value="4" />
                                        <!--end::Input-->
                                        Docs
                                    </label>
                                    <!--end::Radio-->
                                </div>
                                <!--end::Radio group-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Heading--&gt;
&lt;div class=&quot;mb-3&quot;&gt;
    &lt;!--begin::Label--&gt;
    &lt;label class=&quot;d-flex align-items-center fs-5 fw-semibold&quot;&gt;
        &lt;span class=&quot;required&quot;&gt;Specify Your API Method&lt;/span&gt;

        &lt;span class=&quot;m2-1&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Your billing numbers will be calculated based on your API method&quot;&gt;
            &lt;i class=&quot;ki-duotone ki-information fs-7&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;/i&gt;
        &lt;/span&gt;
    &lt;/label&gt;
    &lt;!--end::Label--&gt;

    &lt;!--begin::Description--&gt;
    &lt;div class=&quot;fs-7 fw-semibold text-muted&quot;&gt;If you need more info, please check budget planning&lt;/div&gt;
    &lt;!--end::Description--&gt;
&lt;/div&gt;
&lt;!--end::Heading--&gt;

&lt;!--begin::Radio group--&gt;
&lt;div class=&quot;btn-group w-100 w-lg-50&quot; data-kt-buttons=&quot;true&quot; data-kt-buttons-target=&quot;[data-kt-button]&quot;&gt;
    &lt;!--begin::Radio--&gt;
    &lt;label class=&quot;btn btn-outline btn-color-muted btn-active-success&quot; data-kt-button=&quot;true&quot;&gt;
        &lt;!--begin::Input--&gt;
        &lt;input class=&quot;btn-check&quot; type=&quot;radio&quot; name=&quot;method&quot; value=&quot;1&quot;/&gt;
        &lt;!--end::Input--&gt;
        Open API
    &lt;/label&gt;
    &lt;!--end::Radio--&gt;

    &lt;!--begin::Radio--&gt;
    &lt;label class=&quot;btn btn-outline btn-color-muted btn-active-success active&quot; data-kt-button=&quot;true&quot;&gt;
        &lt;!--begin::Input--&gt;
        &lt;input class=&quot;btn-check&quot; type=&quot;radio&quot; name=&quot;method&quot; checked=&quot;checked&quot; value=&quot;2&quot;/&gt;
        &lt;!--end::Input--&gt;
        SQL Call
    &lt;/label&gt;
    &lt;!--end::Radio--&gt;

    &lt;!--begin::Radio--&gt;
    &lt;label class=&quot;btn btn-outline btn-color-muted btn-active-success&quot; data-kt-button=&quot;true&quot;&gt;
        &lt;!--begin::Input--&gt;
        &lt;input class=&quot;btn-check&quot; type=&quot;radio&quot; name=&quot;method&quot; value=&quot;3&quot; /&gt;
        &lt;!--end::Input--&gt;
        UI/UX
    &lt;/label&gt;
    &lt;!--end::Radio--&gt;

    &lt;!--begin::Radio--&gt;
    &lt;label class=&quot;btn btn-outline btn-color-muted btn-active-success&quot; data-kt-button=&quot;true&quot;&gt;
        &lt;!--begin::Input--&gt;
        &lt;input class=&quot;btn-check&quot; type=&quot;radio&quot; name=&quot;method&quot; value=&quot;4&quot;  /&gt;
        &lt;!--end::Input--&gt;
        Docs
    &lt;/label&gt;
    &lt;!--end::Radio--&gt;
&lt;/div&gt;
&lt;!--end::Radio group--&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="checkbox-with-label" data-kt-scroll-offset="50">
                            <a href="#checkbox-with-label"></a>

                            Checkbox with Label
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            With <code>&lt;label&gt;</code> tag make custom checkbox input with label and
                            description:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Input group-->
                                <div class="d-flex flex-stack w-lg-50">
                                    <!--begin::Label-->
                                    <div class="me-5">
                                        <label class="fs-6 fw-semibold form-label">Save Card for further
                                            billing?</label>
                                        <div class="fs-7 fw-semibold text-muted">If you need more info, please
                                            check budget planning</div>
                                    </div>
                                    <!--end::Label-->

                                    <!--begin::Switch-->
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"
                                            checked="checked" />
                                        <span class="form-check-label fw-semibold text-nowrap text-muted">
                                            Save Card
                                        </span>
                                    </label>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Input group--&gt;
&lt;div class=&quot;d-flex flex-stack w-lg-50&quot;&gt;
    &lt;!--begin::Label--&gt;
    &lt;div class=&quot;me-5&quot;&gt;
        &lt;label class=&quot;fs-6 fw-semibold form-label&quot;&gt;Save Card for further billing?&lt;/label&gt;
        &lt;div class=&quot;fs-7 fw-semibold text-muted&quot;&gt;If you need more info, please check budget planning&lt;/div&gt;
    &lt;/div&gt;
    &lt;!--end::Label--&gt;

    &lt;!--begin::Switch--&gt;
    &lt;label class=&quot;form-check form-switch form-check-custom form-check-solid&quot;&gt;
        &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;1&quot; checked=&quot;checked&quot;/&gt;
        &lt;span class=&quot;form-check-label fw-semibold text-muted&quot;&gt;
            Save Card
        &lt;/span&gt;
    &lt;/label&gt;
    &lt;!--end::Switch--&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="input-with-icon" data-kt-scroll-offset="50">
                            <a href="#input-with-icon"></a>

                            Input with Icon
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Build a custom input control with
                            <a href="/html/metronic/docs/base/forms/controls" class="fw-semibold">Form
                                Controls</a>&nbsp; and
                            <a href="/html/metronic/docs/icons/duotune" class="fw-semibold">Duotune Icon</a>&nbsp;
                            components:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Input wrapper-->
                                <div class="w-lg-50 position-relative">
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" minlength="3"
                                        maxlength="4" placeholder="CVV" name="card_cvv" />
                                    <!--end::Input-->

                                    <!--begin::CVV icon-->
                                    <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                                        <i class="ki-duotone ki-credit-cart fs-2hx"><span class="path1"></span><span
                                                class="path2"></span></i>
                                    </div>
                                    <!--end::CVV icon-->
                                </div>
                                <!--end::Input wrapper-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Input wrapper--&gt;
&lt;div class=&quot;w-lg-50 position-relative&quot;&gt;
    &lt;!--begin::Input--&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control form-control-solid&quot; minlength=&quot;3&quot; maxlength=&quot;4&quot; placeholder=&quot;CVV&quot; name=&quot;card_cvv&quot;/&gt;
    &lt;!--end::Input--&gt;

    &lt;!--begin::CVV icon--&gt;
    &lt;div class=&quot;position-absolute translate-middle-y top-50 end-0 me-3&quot;&gt;
        &lt;i class=&quot;ki-duotone ki-credit-cart fs-2hx&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
    &lt;/div&gt;
    &lt;!--end::CVV icon--&gt;
&lt;/div&gt;
&lt;!--end::Input wrapper--&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="share-input-values" data-kt-scroll-offset="50">
                            <a href="#share-input-values"></a>

                            Share Input Values
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Build a custom input field that can copy the input value into your clipboard by button
                            action. This input field uses <a href="
        https://clipboardjs.com/" class="me-1"
                                target="_blank">ChipboardJS</a> to copy the values.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Title-->
                                <h4 class="fs-5 fw-semibold text-gray-800">Share my referral link with friends</h4>
                                <!--end::Title-->

                                <!--begin::Title-->
                                <div class="d-flex">
                                    <input id="kt_share_earn_link_input" type="text"
                                        class="form-control form-control-solid me-3 flex-grow-1" name="search"
                                        value="https://keenthemes.com/?ref=keenthemes_user" />

                                    <button id="kt_share_earn_link_copy_button"
                                        class="btn btn-light fw-bold flex-shrink-0"
                                        data-clipboard-target="#kt_share_earn_link_input">Copy Link</button>
                                </div>
                                <!--end::Title-->
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
                                            href="#kt_highlight_68dfff5252312" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68dfff5252317" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68dfff5252312"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">var button = document.querySelector(&#039;#kt_share_earn_link_copy_button&#039;);
var input = document.querySelector(&#039;#kt_share_earn_link_input&#039;);
var clipboard = new ClipboardJS(button);

if (!clipboard) {
    return;
}

//  Copy text to clipboard. For more info check the plugin&#039;s documentation: https://clipboardjs.com/
clipboard.on(&#039;success&#039;, function(e) {
    var buttonCaption = button.innerHTML;
    //Add bgcolor
    input.classList.add(&#039;bg-success&#039;);
    input.classList.add(&#039;text-inverse-success&#039;);

    button.innerHTML = &#039;Copied!&#039;;

    setTimeout(function() {
        button.innerHTML = buttonCaption;

        // Remove bgcolor
        input.classList.remove(&#039;bg-success&#039;);
        input.classList.remove(&#039;text-inverse-success&#039;);
    }, 3000);  // 3seconds

    e.clearSelection();
        });</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68dfff5252317" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Input wrapper--&gt;
&lt;div class=&quot;w-100&quot;&gt;
    &lt;!--begin::Title--&gt;
    &lt;h4 class=&quot;fs-5 fw-semibold text-gray-800&quot;&gt;Share my referral link with friends&lt;/h4&gt;
    &lt;!--end::Title--&gt;

    &lt;!--begin::Title--&gt;
    &lt;div class=&quot;d-flex&quot;&gt;
        &lt;input id=&quot;kt_share_earn_link_input&quot; type=&quot;text&quot; class=&quot;form-control form-control-solid me-3 flex-grow-1&quot;
        name=&quot;search&quot; value=&quot;https://keenthemes.com/?ref=keenthemes_user&quot; /&gt;

        &lt;button id=&quot;kt_share_earn_link_copy_button&quot; class=&quot;btn btn-light fw-bold flex-shrink-0&quot;
        data-clipboard-target=&quot;#kt_share_earn_link_input&quot;&gt;Copy Link&lt;/button&gt;
    &lt;/div&gt;
    &lt;!--end::Title--&gt;
&lt;/div&gt;
&lt;!--end::Input wrapper--&gt;</code></pre>
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
                        <h1 class="anchor fw-bold mb-5" id="interactive-button-value" data-kt-scroll-offset="50">
                            <a href="#interactive-button-value"></a>

                            Interactive Button Values
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Build a custom input group where button click actions will update the input values.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Input wrapper-->
                                <div class="d-flex flex-column w-lg-50">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span>Options</span>


                                        <span class="ms-1" data-bs-toggle="tooltip" title="Select an option.">
                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span></i></span> </label>
                                    <!--end::Label-->

                                    <!--begin::Buttons-->
                                    <div class="d-flex flex-stack gap-5 mb-3" data-kt-buttons="true">
                                        <button type="button" class="btn btn-light-primary w-100"
                                            data-kt-docs-advanced-forms="interactive">10</button>
                                        <button type="button" class="btn btn-light-primary w-100 active"
                                            data-kt-docs-advanced-forms="interactive">50</button>
                                        <button type="button" class="btn btn-light-primary w-100"
                                            data-kt-docs-advanced-forms="interactive">100</button>
                                    </div>
                                    <!--begin::Buttons-->

                                    <input type="text" class="form-control form-control-solid"
                                        placeholder="Enter Amount" value="50" name="interactive_amount" />
                                </div>
                                <!--end::Input wrapper-->
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
                                            href="#kt_highlight_68dfff525235d" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68dfff525235f" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68dfff525235d"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript"><code class="language-javascript">const options = document.querySelectorAll(&#039;[data-kt-docs-advanced-forms=&quot;interactive&quot;]&#039;);
const inputEl = document.querySelector(&#039;[name=&quot;interactive_amount&quot;]&#039;);
options.forEach(option =&gt; {
    option.addEventListener(&#039;click&#039;, e =&gt; {
        e.preventDefault();

        inputEl.value = e.target.innerText;
    });
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68dfff525235f" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Input wrapper--&gt;
&lt;div class=&quot;d-flex flex-column mb-8 fv-row&quot;&gt;
    &lt;!--begin::Label--&gt;
    &lt;label class=&quot;d-flex align-items-center fs-6 fw-semibold mb-2&quot;&gt;
        &lt;span class=&quot;required&quot;&gt;Options&lt;/span&gt;

        &lt;span class=&quot;ms-1&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Select an option.&quot;&gt;
            &lt;i class=&quot;ki-duotone ki-information text-gray-500 fs-7&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;/i&gt;
        &lt;/span&gt;
    &lt;/label&gt;
    &lt;!--end::Label--&gt;

    &lt;!--begin::Buttons--&gt;
    &lt;div class=&quot;d-flex flex-stack gap-5 mb-3&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-light-primary w-100&quot; data-kt-docs-advanced-forms=&quot;interactive&quot;&gt;10&lt;/button&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-light-primary w-100&quot; data-kt-docs-advanced-forms=&quot;interactive&quot;&gt;50&lt;/button&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-light-primary w-100&quot; data-kt-docs-advanced-forms=&quot;interactive&quot;&gt;100&lt;/button&gt;
    &lt;/div&gt;
    &lt;!--begin::Buttons--&gt;

    &lt;input type=&quot;text&quot; class=&quot;form-control form-control-solid&quot; placeholder=&quot;Enter Amount&quot; name=&quot;amount&quot; /&gt;
&lt;/div&gt;
&lt;!--end::Input wrapper--&gt;</code></pre>
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
                        <h1 class="anchor fw-bold mb-5" id="interactive-slider" data-kt-scroll-offset="50">
                            <a href="#interactive-slider"></a>

                            Interactive Slider
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Build a custom slider based on <a href="/html/metronic/docs/forms/nouislider"
                                class="me-1">noUISlider</a> with a custom interactive label.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Input wrapper-->
                                <div class="w-lg-50">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold mb-2">
                                        Daily Budget

                                        <span class="m2-1" data-bs-toggle="tooltip"
                                            title="Choose the budget allocated for each day. Higher budget will generate better results">
                                            <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> </span>
                                    </label>
                                    <!--end::Label-->

                                    <!--begin::Slider-->
                                    <div class="d-flex flex-column text-center">
                                        <div class="d-flex align-items-start justify-content-center mb-7">
                                            <span class="fw-bold fs-4 mt-1 me-2">$</span>
                                            <span class="fw-bold fs-3x"
                                                id="kt_docs_forms_advanced_interactive_slider_label"></span>
                                            <span class="fw-bold fs-3x">.00</span>
                                        </div>
                                        <div id="kt_docs_forms_advanced_interactive_slider" class="noUi-sm"></div>
                                    </div>
                                    <!--end::Slider-->
                                </div>
                                <!--end::Input wrapper-->
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
                                            href="#kt_highlight_68dfff525238d" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68dfff525238e" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68dfff525238d"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">var budgetSlider = document.querySelector(&quot;#kt_docs_forms_advanced_interactive_slider&quot;);
var budgetValue = document.querySelector(&quot;#kt_docs_forms_advanced_interactive_slider_label&quot;);

noUiSlider.create(budgetSlider, {
    start: [5],
    connect: true,
    range: {
        &quot;min&quot;: 1,
        &quot;max&quot;: 500
    }
});

budgetSlider.noUiSlider.on(&quot;update&quot;, function (values, handle) {
    budgetValue.innerHTML = Math.round(values[handle]);
    if (handle) {
        budgetValue.innerHTML = Math.round(values[handle]);
    }
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68dfff525238e" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Input wrapper--&gt;
&lt;div class=&quot;w-lg-50&quot;&gt;
    &lt;!--begin::Label--&gt;
    &lt;label class=&quot;fs-6 fw-semibold mb-2&quot;&gt;
        Daily Budget

        &lt;span class=&quot;m2-1&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Choose the budget allocated for each day. Higher budget will generate better results&quot;&gt;
            &lt;i class=&quot;ki-duotone ki-information fs-7&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;/i&gt;
        &lt;/span&gt;
    &lt;/label&gt;
    &lt;!--end::Label--&gt;

    &lt;!--begin::Slider--&gt;
    &lt;div class=&quot;d-flex flex-column text-center&quot;&gt;
        &lt;div class=&quot;d-flex align-items-start justify-content-center mb-7&quot;&gt;
            &lt;span class=&quot;fw-bold fs-4 mt-1 me-2&quot;&gt;$&lt;/span&gt;
            &lt;span class=&quot;fw-bold fs-3x&quot; id=&quot;kt_modal_create_campaign_budget_label&quot;&gt;&lt;/span&gt;
            &lt;span class=&quot;fw-bold fs-3x&quot;&gt;.00&lt;/span&gt;
        &lt;/div&gt;
        &lt;div id=&quot;kt_modal_create_campaign_budget_slider&quot; class=&quot;noUi-sm&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;!--end::Slider--&gt;
&lt;/div&gt;
&lt;!--end::Input wrapper--&gt;</code></pre>
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
                                <a href="#radio-buttons-example-1" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Radio Buttons Example 1</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#radio-buttons-example-2" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Radio Buttons Example 2</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#radio-buttons-example-3" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Radio Buttons Example 3</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#radio-buttons-example-4" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Radio Buttons Example 4</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#checkbox-with-label" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Checkbox with Label</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#input-with-icon" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Input with Icon</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#share-input-values" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Share Input Values</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#interactive-button-value" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Interactive Button Values</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#interactive-slider" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Interactive Slider</span>
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
    <script src="{{ asset('assets/js/custom/documentation/base/forms/advanced.js') }}"></script>
    <!--end::Vendors Javascript-->
@endsection


