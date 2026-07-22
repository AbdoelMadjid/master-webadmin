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
                            Password Meter is an exclusive component of Metronic that provides a simple and powerful
                            build-in Javascript solution to calculate the password strength when a user enters a password
                            string within an input field.
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
                            Password Meter's CSS and Javascript bundles are globally included in all pages.
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
                                    Password Meter structure comes in a few layers.
                                    <ul class="pt-3">
                                        <li class="py-2">Main Wrapper</li>
                                        <li class="py-2">Visibility Toggle</li>
                                        <li class="py-2">Highlight Meter</li>
                                    </ul>
                                </li>
                                <li class="py-2">
                                    The Main Wrapper should be a simple <code>div</code> element that will contain all the
                                    necessary components, such as: input field, input label and/or any additional spacing or
                                    note elements required. The Main Wrapper can be identified by adding
                                    <code>data-kt-password-meter="true"</code>.
                                </li>
                                <li class="py-2">
                                    The Visibility Toggle is an icon button positioned within the input field to toggle
                                    password state from hidden to visible and vice versa. The Visibility Toggle can be
                                    identified by adding <code>data-kt-password-meter-control="visibility"</code>.
                                </li>
                                <li class="py-2">
                                    The Highlight Meter is a group of elements that is structured in a way to display and
                                    highlight the password strength based on our Password Meter calculator. The Highlight
                                    Meter can be identified by adding
                                    <code>data-kt-password-meter-control="highlight"</code>.
                                </li>
                                <li class="py-2">
                                    Password Meter is usually added as an <code>input group</code> with our default form
                                    validation and our extended Bootstrap's utility classes for styling.
                                </li>
                                <li class="py-2">
                                    Password Meter instances can also be controlled programmatically. <a href="#methods"
                                        data-kt-scroll-toggle>See below for more info</a>.
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
                            Here's a basic example of our Password Meter.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-5 p-lg-15">
                                <!--begin::Main wrapper-->
                                <div id="kt_password_meter_example" class="fv-row" data-kt-password-meter="true">
                                    <!--begin::Wrapper-->
                                    <div class="mb-1">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold fs-6 mb-2">
                                            New Password
                                        </label>
                                        <!--end::Label-->

                                        <!--begin::Input wrapper-->
                                        <div class="position-relative mb-3">
                                            <input class="form-control form-control-lg form-control-solid" type="password"
                                                placeholder="" name="new_password" autocomplete="off" />

                                            <!--begin::Visibility toggle-->
                                            <span
                                                class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                                data-kt-password-meter-control="visibility">
                                                <i class="ki-duotone ki-eye-slash fs-1"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span></i> <i
                                                    class="ki-duotone ki-eye d-none fs-1"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span></i> </span>
                                            <!--end::Visibility toggle-->
                                        </div>
                                        <!--end::Input wrapper-->

                                        <!--begin::Highlight meter-->
                                        <div class="d-flex align-items-center mb-3"
                                            data-kt-password-meter-control="highlight">
                                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                            </div>
                                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                            </div>
                                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                            </div>
                                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                        </div>
                                        <!--end::Highlight meter-->
                                    </div>
                                    <!--end::Wrapper-->

                                    <!--begin::Hint-->
                                    <div class="text-muted">
                                        Use 8 or more characters with a mix of letters, numbers & symbols.
                                    </div>
                                    <!--end::Hint-->
                                </div>
                                <!--end::Main wrapper-->

                                <!--begin::Show score-->
                                <button id="kt_password_meter_example_show_score" type="button"
                                    class="btn btn-primary mt-5">Show Password Strength</button>
                                <!--end::Show score-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Main wrapper--&gt;
&lt;div class=&quot;fv-row&quot; data-kt-password-meter=&quot;true&quot;&gt;
    &lt;!--begin::Wrapper--&gt;
    &lt;div class=&quot;mb-1&quot;&gt;
        &lt;!--begin::Label--&gt;
        &lt;label class=&quot;form-label fw-semibold fs-6 mb-2&quot;&gt;
            New Password
        &lt;/label&gt;
        &lt;!--end::Label--&gt;

        &lt;!--begin::Input wrapper--&gt;
        &lt;div class=&quot;position-relative mb-3&quot;&gt;
            &lt;input class=&quot;form-control form-control-lg form-control-solid&quot;
                type=&quot;password&quot; placeholder=&quot;&quot; name=&quot;new_password&quot; autocomplete=&quot;off&quot; /&gt;

            &lt;!--begin::Visibility toggle--&gt;
            &lt;span class=&quot;btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2&quot;
                data-kt-password-meter-control=&quot;visibility&quot;&gt;
                    &lt;i class=&quot;ki-duotone ki-eye-slash fs-1&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;/i&gt;
                    &lt;i class=&quot;ki-duotone ki-eye d-none fs-1&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;/i&gt;
            &lt;/span&gt;
            &lt;!--end::Visibility toggle--&gt;
        &lt;/div&gt;
        &lt;!--end::Input wrapper--&gt;

        &lt;!--begin::Highlight meter--&gt;
        &lt;div class=&quot;d-flex align-items-center mb-3&quot; data-kt-password-meter-control=&quot;highlight&quot;&gt;
            &lt;div class=&quot;flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;flex-grow-1 bg-secondary bg-active-success rounded h-5px&quot;&gt;&lt;/div&gt;
        &lt;/div&gt;
        &lt;!--end::Highlight meter--&gt;
    &lt;/div&gt;
    &lt;!--end::Wrapper--&gt;

    &lt;!--begin::Hint--&gt;
    &lt;div class=&quot;text-muted&quot;&gt;
        Use 8 or more characters with a mix of letters, numbers &amp; symbols.
    &lt;/div&gt;
    &lt;!--end::Hint--&gt;
&lt;/div&gt;
&lt;!--end::Main wrapper--&gt;</code></pre>
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
                            Password Meter uses HTML attributes to identify the Main Wrapper, Visibility Toggle and
                            Highlight Meter. Here are the references for each below
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="fw-bold fs-2">HTML Attribute references</div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Table-->
                        <div class="py-5">
                            <div class="table-responsive border rounded">
                                <table class="table table-striped align-top mb-0 g-5">
                                    <thead>
                                        <tr class="fs-4 fw-bold text-gray-900 p-6">
                                            <th class="min-w-250px">Name</th>
                                            <th class="min-w-100px">Type</th>
                                            <th class="min-w-500px">Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <code>data-kt-password-meter</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">mandatory</code>
                                            </td>
                                            <td>
                                                Enables the wrapper element as the Main Wrapper for Password Meter. Accepts
                                                <code>true</code> or <code>false</code> values.

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-html"><code class="language-html">&lt;div data-kt-password-meter=&quot;true&quot;&gt;
    ...
&lt;/div&gt;</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>data-kt-password-meter-control</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">mandatory</code>
                                            </td>
                                            <td>
                                                <div class="mb-3">
                                                    Identifies the element as a Visibility Toggle or a Highlight Meter.
                                                    Accepts either <code>visibility</code> or <code>highlight</code> string
                                                    values. Both <code>data-kt-password-meter-control</code> HTML attributes
                                                    are mandatory and are required to be placed within the Main Wrapper.
                                                </div>

                                                <div class="mb-3">
                                                    Here's a sample input field group with the Visibility Toggle aligned to
                                                    the right of it to toggle password state from hidden to visible and vice
                                                    versa:

                                                    <div class="py-3">
                                                        <!--begin::Highlight-->
                                                        <div class="highlight"> <button class="highlight-copy btn"
                                                                data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                            <div class="highlight-code">
                                                                <pre class="language-html" style="height:300px"><code class="language-html">&lt;div class=&quot;position-relative mb-3&quot;&gt;
    &lt;!--begin::Input--&gt;
    &lt;input class=&quot;form-control form-control-lg form-control-solid&quot;
        type=&quot;password&quot;
        placeholder=&quot;&quot;
        name=&quot;new_password&quot;
        autocomplete=&quot;off&quot; /&gt;
    &lt;!--end::Input--&gt;

    &lt;!--begin::Visibility toggle--&gt;
    &lt;span class=&quot;btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2&quot;
        data-kt-password-meter-control=&quot;visibility&quot;&gt;
        &lt;i class=&quot;bi bi-eye-slash fs-2&quot;&gt;&lt;/i&gt;

        &lt;i class=&quot;bi bi-eye fs-2 d-none&quot;&gt;&lt;/i&gt;
    &lt;/span&gt;
    &lt;!--end::Visibility toggle--&gt;
&lt;/div&gt;</code></pre>
                                                            </div>
                                                        </div><!--end::Highlight-->
                                                    </div>
                                                </div>

                                                Here's a sample code structure for the Highlight Meter to display and
                                                highlight the password strength based on our Password Meter calculator:

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-html"><code class="language-html">&lt;!--begin::Highlight meter--&gt;
&lt;div class=&quot;d-flex align-items-center mb-3&quot; data-kt-password-meter-control=&quot;highlight&quot;&gt;
    &lt;div class=&quot;flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;flex-grow-1 bg-secondary bg-active-success rounded h-5px&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;!--end::Highlight meter--&gt;</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
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
                                    All Bootstrap styling classes can be modified to suit your project needs. However, the
                                    structure and position of the HTML elements should remain the same.
                                </div> <!--end::Description-->
                            </div><!--end::Information-->
                        </div>
                        <!--end::Notice-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="methods" data-kt-scroll-offset="50">
                            <a href="#methods"></a>

                            Methods
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            All Password Meter components are initialized automatically, however the following are Password
                            Meter's functionality methods to initialize explicitly for more control without
                            <code>data-kt-password-meter="true"</code>.
                        </div>
                        <!--end::Block-->

                        <!--begin::Table-->
                        <div class="py-2">
                            <!--begin::Table wrapper-->
                            <div class="table-responsive border rounded">
                                <!--begin::Table-->
                                <table class="table table-striped mb-0 g-6">
                                    <!--begin::Head-->
                                    <thead>
                                        <tr class="fs-4 fw-bold p-6">
                                            <th class="min-w-150px">Name</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <!--end::Head-->

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
                                                <code>createInstances (DOMString selector)</code>
                                            </td>
                                            <td>
                                                Initializes Password Meter instances by selector. Default value of
                                                <code>selector</code> is <code>[data-kt-password-meter]</code>.
                                                This method can be used to initialize dynamicly populated Password Meter
                                                instances(e.g: after Ajax request).
                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">KTPasswordMeter.createInstances();</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>getInstance (DOMElement element)</code>
                                            </td>
                                            <td>
                                                Get the Password Meter instance created

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">var passwordMeterElement = document.querySelector(&quot;#kt_password_meter_control&quot;);
var passwordMeter = KTPasswordMeter.getInstance(passwordMeterElement);</code></pre>
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
                                            <th colspan="2">Public Methods</th>
                                        </tr>
                                    </thead>
                                    <!--end::Head-->

                                    <!--begin::Body-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <code>Constructor</code>
                                            </td>
                                            <td>
                                                Constructs a new instance of <code>KTPasswordMeter</code> class and
                                                initializes a Password Meter control with custom options:
                                                <div class="pt-3 mb-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">var options = {
    minLength: 8,
    checkUppercase: true,
    checkLowercase: true,
    checkDigit: true,
    checkChar: true,
    scoreHighlightClass: &quot;active&quot;
};
var passwordMeterElement = document.querySelector(&quot;#kt_password_meter_control&quot;);
var passwordMeter = new KTPasswordMeter(passwordMeterElement, options);</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>

                                                <!--begin::Information-->
                                                <div class="d-flex align-items-center rounded py-5 px-5 bg-light-info "><i
                                                        class="ki-duotone ki-information-5 fs-3x text-info me-5"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i> <!--begin::Description-->
                                                    <div class="text-gray-700 fw-bold fs-6">
                                                        Remove <code>data-kt-password-meter="true"</code> attribute to
                                                        avoid lazy initializes.
                                                    </div> <!--end::Description-->
                                                </div><!--end::Information-->
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <code>check</code>
                                            </td>
                                            <td>
                                                Triggers the Password Meter to check the input string password strength.
                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">passwordMeter.check();</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>getScore</code>
                                            </td>
                                            <td>
                                                <div class="mb-3">
                                                    Returns the password strength score based on the input string. The score
                                                    is calculated based on the characters used within the input string.
                                                </div>

                                                Each character is split into 4 types to generate the password strength:
                                                <code>lowercase letters</code>, <code>uppercase letters</code>,
                                                <code>numbers</code> and special characters like <code>@ $ % !</code>. The
                                                password strength score starts from <code>0</code> and ends at
                                                <code>100</code>.

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">passwordMeter.getScore();</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>reset</code>
                                            </td>
                                            <td>
                                                Resets the password meter's strength calculation.
                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">passwordMeter.reset();</code></pre>
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
                                <a href="#markup-reference" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
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
    <script src="{{ asset('assets/js/custom/documentation/forms/password-meter.js') }}"></script>
    <!--end::Vendors Javascript-->
@endsection


