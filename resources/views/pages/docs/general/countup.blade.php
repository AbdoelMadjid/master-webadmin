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
                            CountUp.js is a dependency-free, lightweight Javascript class that can be used to quickly create
                            animations that display numerical data in a more interesting way.
                            For more info see <a href="https://inorganik.github.io/countUp.js/" class="fw-bold me-1">the
                                official site</a>and <a class="fw-bold" href="https://github.com/inorganik/CountUp.js">the
                                Github repository</a>.
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
                            CountUp.js's style and script bundles are separate from our global bundle and required to be
                            included and initialized manually on related pages.
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;script src=&quot;assets/plugins/global/plugins.bundle.js&quot;&gt;&lt;/script&gt;</code></pre>
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
                                    CountUp's Javascript is globally initialized with our <code>KTApp</code> wrapper defined
                                    in <code>src/js/components/app.js</code> within the <code>initCountUp</code> and
                                    <code>initCountUpTabs</code> functions.
                                </li>
                                <li class="py-2">
                                    To include CountUp into your project, you need to include a HTML attribute
                                    <code>data-kt-countup="true"</code> within the CountUp element along with the value that
                                    it will be counting to with <code>data-kt-countup-value</code>. For more options
                                    available, such as <code>loop</code> parameters and more, please refer to the <a
                                        href="#options" data-kt-scroll-toggle>options below</a>.
                                </li>
                                <li class="pt-2">
                                    CountUp instances can also be controlled programmatically. For more information on
                                    Smooth Scroll's other options, please refer to the official <a
                                        href="https://inorganik.github.io/countUp.js/" target="_blank">plugin site</a>.
                                </li>
                            </ul>
                        </div>
                        <!--end::Block-->
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
                            CountUp uses HTML attributes to set specific configurations. Here are some references for each
                            below. For complete list of options, please refer to the <a
                                href="https://github.com/ganlanyuan/tiny-slider" target="_blank">official documentation</a>.
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
                                                <code>data-kt-countup</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">mandatory</code>
                                            </td>
                                            <td>
                                                Enables the current element as the CountUp wrapper component. Accepts
                                                <code>true</code> or <code>false</code> values.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>data-kt-countup-value</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">mandatory</code>
                                            </td>
                                            <td>
                                                Defines the number that CountUp will count to. Accepts any integer values.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>data-kt-countup-start-val</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">optional</code>
                                            </td>
                                            <td>
                                                Defines the starting number for CountUp. Accepts any integer values.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>data-kt-countup-duration</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">optional</code>
                                            </td>
                                            <td>
                                                Defines the duration it takes to animate the numbers from start to end in
                                                ms. Accepts positive integer values.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>data-kt-countup-separator</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">optional</code>
                                            </td>
                                            <td>
                                                Defines the grouping separator(e.g: ',').
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>data-kt-countup-decimal-places</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">optional</code>
                                            </td>
                                            <td>
                                                Defines the numeric decimal places. Accepts positive integer values.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>data-kt-countup-prefix</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">optional</code>
                                            </td>
                                            <td>
                                                Defines the prefix character that will appear before CountUp (e.g. "$").
                                                Accepts string values.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>data-kt-countup-suffix</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">optional</code>
                                            </td>
                                            <td>
                                                Defines the suffix character that will appear after CountUp (e.g. "+").
                                                Accepts string values.
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end::Table-->
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
                            Visit CountUp.js's <a href="https://inorganik.github.io/countUp.js/" class="me-1">official
                                website</a> for more examples.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="d-flex rounded border p-5 p-lg-15 pb-lg-12">
                                <!--begin::Stat-->
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    <!--begin::Number-->
                                    <div class="d-flex align-items-center">
                                        <i class="ki-duotone ki-arrow-up fs-3 text-success me-2"><span
                                                class="path1"></span><span class="path2"></span></i>
                                        <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="4500"
                                            data-kt-countup-prefix="$">0</div>
                                    </div>
                                    <!--end::Number-->

                                    <!--begin::Label-->
                                    <div class="fw-semibold fs-6 ">Earnings</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Stat-->

                                <!--begin::Stat-->
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    <!--begin::Number-->
                                    <div class="d-flex align-items-center">
                                        <i class="ki-duotone ki-arrow-down fs-3 text-danger me-2"><span
                                                class="path1"></span><span class="path2"></span></i>
                                        <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="80">0</div>
                                    </div>
                                    <!--end::Number-->

                                    <!--begin::Label-->
                                    <div class="fw-semibold fs-6 ">Projects</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Stat-->

                                <!--begin::Stat-->
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    <!--begin::Number-->
                                    <div class="d-flex align-items-center">
                                        <i class="ki-duotone ki-arrow-up fs-3 text-success me-2"><span
                                                class="path1"></span><span class="path2"></span></i>
                                        <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="60"
                                            data-kt-countup-prefix="%">0</div>
                                    </div>
                                    <!--end::Number-->

                                    <!--begin::Label-->
                                    <div class="fw-semibold fs-6 ">Success Rate</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Stat-->
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
                                            href="#kt_highlight_68e5270eaecad" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5270eaecad"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;div class=&quot;border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3&quot;&gt;
    &lt;!--begin::Number--&gt;
    &lt;div class=&quot;d-flex align-items-center&quot;&gt;
        &lt;span class=&quot;svg-icon fs-3 text-success me-2&quot;&gt;
            ...
        &lt;/span&gt;
        &lt;div class=&quot;fs-2 fw-bold&quot; data-kt-countup=&quot;true&quot; data-kt-countup-value=&quot;4500&quot; data-kt-countup-prefix=&quot;$&quot;&gt;0&lt;/div&gt;
    &lt;/div&gt;
    &lt;!--end::Number--&gt;

    &lt;!--begin::Label--&gt;
    &lt;div class=&quot;fw-semibold fs-6 &quot;&gt;Earnings&lt;/div&gt;
    &lt;!--end::Label--&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="custom" data-kt-scroll-offset="50">
                            <a href="#custom"></a>

                            Custom
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            CountUp can be customized with any of our extended Bootstrap classes.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="d-flex rounded border p-5 p-lg-15 pb-lg-12 landing-dark-bg">
                                <!--begin::Items-->
                                <div class="d-flex flex-wrap flex-center justify-content-lg-between mx-auto w-xl-900px">
                                    <!--begin::Item-->
                                    <div
                                        class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bg-light rounded-circle">
                                        <!--begin::Symbol-->
                                        <i class="ki-duotone ki-element-11 fs-4x text-primary mb-3"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span><span class="path4"></span></i> <!--end::Symbol-->

                                        <!--begin::Info-->
                                        <div class="mb-0">
                                            <!--begin::Value-->
                                            <div class="fs-lg-2hx fs-2x fw-bold text-gray-800 d-flex flex-center">
                                                <div class="min-w-70px" data-kt-countup="true"
                                                    data-kt-countup-value="700" data-kt-countup-suffix="+">0</div>
                                            </div>
                                            <!--end::Value-->

                                            <!--begin::Label-->
                                            <span class="text-gray-600 fw-semibold fs-5 lh-0">
                                                Known Companies </span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div
                                        class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bg-light rounded-circle">
                                        <!--begin::Symbol-->
                                        <i class="ki-duotone ki-chart-pie-4 fs-4x text-primary mb-3"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span></i> <!--end::Symbol-->

                                        <!--begin::Info-->
                                        <div class="mb-0">
                                            <!--begin::Value-->
                                            <div class="fs-lg-2hx fs-2x fw-bold text-gray-800 d-flex flex-center">
                                                <div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="80"
                                                    data-kt-countup-suffix="K+">0</div>
                                            </div>
                                            <!--end::Value-->

                                            <!--begin::Label-->
                                            <span class="text-gray-600 fw-semibold fs-5 lh-0">
                                                Statistic Reports </span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div
                                        class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bg-light rounded-circle">
                                        <!--begin::Symbol-->
                                        <i class="ki-duotone ki-package fs-4x text-primary mb-3"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span></i> <!--end::Symbol-->

                                        <!--begin::Info-->
                                        <div class="mb-0">
                                            <!--begin::Value-->
                                            <div class="fs-lg-2hx fs-2x fw-bold text-gray-800 d-flex flex-center">
                                                <div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="35"
                                                    data-kt-countup-suffix="M+">0</div>
                                            </div>
                                            <!--end::Value-->

                                            <!--begin::Label-->
                                            <span class="text-gray-600 fw-semibold fs-5 lh-0">
                                                Secure Payments </span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Items-->
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
                                            href="#kt_highlight_68e5270eaed6a" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5270eaed6a"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;div class=&quot;d-flex flex-wrap flex-center justify-content-lg-between mx-auto w-xl-900px&quot;&gt;
    &lt;!--begin::Item--&gt;
    &lt;div
        class=&quot;d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bg-light rounded-circle&quot;&gt;
        &lt;!--begin::Symbol--&gt;
        &lt;span class=&quot;fs-4x text-primary mb-3&quot;&gt;
            ...
        &lt;/span&gt;
        &lt;!--end::Symbol--&gt;

        &lt;!--begin::Info--&gt;
        &lt;div class=&quot;mb-0&quot;&gt;
            &lt;!--begin::Value--&gt;
            &lt;div class=&quot;fs-lg-2hx fs-2x fw-bold text-white d-flex flex-center&quot;&gt;
                &lt;div class=&quot;min-w-70px&quot; data-kt-countup=&quot;true&quot; data-kt-countup-value=&quot;700&quot; data-kt-countup-suffix=&quot;+&quot;&gt;0&lt;/div&gt;
            &lt;/div&gt;
            &lt;!--end::Value--&gt;

            &lt;!--begin::Label--&gt;
            &lt;span class=&quot;text-gray-600 fw-semibold fs-5 lh-0&quot;&gt;
                Known Companies
            &lt;/span&gt;
            &lt;!--end::Label--&gt;
        &lt;/div&gt;
        &lt;!--end::Info--&gt;
    &lt;/div&gt;
    &lt;!--end::Item--&gt;

    ...
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
                        <h1 class="anchor fw-bold mb-5" id="update-values" data-kt-scroll-offset="50">
                            <a href="#update-values"></a>

                            Update Values
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Visit CountUp.js's <a href="https://github.com/inorganik/CountUp.js" class="me-1">official
                                docs</a> to learn the plugin API.
                            This example shows how to reinitialize CountUp instance with a new value and settings in order
                            to update the value.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="d-flex rounded border p-5 p-lg-15 pb-lg-12 mb-10">
                                <!--begin::Stat-->
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    <!--begin::Number-->
                                    <div class="d-flex align-items-center">
                                        <i class="ki-duotone ki-arrow-up fs-3 text-success me-2"><span
                                                class="path1"></span><span class="path2"></span></i>
                                        <div class="fs-2 fw-bold" id="kt_countup_1" data-kt-countup="true"
                                            data-kt-countup-value="4500" data-kt-countup-prefix="$">0</div>
                                    </div>
                                    <!--end::Number-->

                                    <!--begin::Label-->
                                    <div class="fw-semibold fs-6 ">Earnings</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Stat-->

                                <!--begin::Stat-->
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    <!--begin::Number-->
                                    <div class="d-flex align-items-center">
                                        <i class="ki-duotone ki-arrow-down fs-3 text-danger me-2"><span
                                                class="path1"></span><span class="path2"></span></i>
                                        <div class="fs-2 fw-bold" id="kt_countup_2" data-kt-countup="true"
                                            data-kt-countup-value="80">0</div>
                                    </div>
                                    <!--end::Number-->

                                    <!--begin::Label-->
                                    <div class="fw-semibold fs-6 ">Projects</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Stat-->

                                <!--begin::Stat-->
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    <!--begin::Number-->
                                    <div class="d-flex align-items-center">
                                        <i class="ki-duotone ki-arrow-up fs-3 text-success me-2"><span
                                                class="path1"></span><span class="path2"></span></i>
                                        <div class="fs-2 fw-bold" id="kt_countup_3" data-kt-countup="true"
                                            data-kt-countup-value="60" data-kt-countup-prefix="%">0</div>
                                    </div>
                                    <!--end::Number-->

                                    <!--begin::Label-->
                                    <div class="fw-semibold fs-6">Success Rate</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Stat-->
                            </div>

                            <button id="kt_countup_update" class="btn btn-primary">Update Values</button>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e5270eaedc2" role="tab">HTML</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e5270eaedc3" role="tab">JAVASCRIPT</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5270eaedc2"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;div class=&quot;border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3&quot;&gt;
    &lt;!--begin::Number--&gt;
    &lt;div class=&quot;d-flex align-items-center&quot;&gt;
        &lt;span class=&quot;svg-icon fs-3 text-success me-2&quot;&gt;
            ...
        &lt;/span&gt;
        &lt;div
            class=&quot;fs-2 fw-bold&quot;
            id=&quot;kt_countup_1&quot;
            data-kt-countup=&quot;true&quot;
            data-kt-countup-value=&quot;4500&quot;
            data-kt-countup-prefix=&quot;$&quot;
        &gt;0&lt;/div&gt;
    &lt;/div&gt;
    &lt;!--end::Number--&gt;

    &lt;!--begin::Label--&gt;
    &lt;div class=&quot;fw-semibold fs-6 &quot;&gt;Earnings&lt;/div&gt;
    &lt;!--end::Label--&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e5270eaedc3" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-Javascript" style="height:400px"><code class="language-Javascript">var button = document.querySelector(&quot;#kt_countup_update&quot;);

const count1 = new countUp.CountUp(&quot;kt_countup_1&quot;);
const count2 = new countUp.CountUp(&quot;kt_countup_2&quot;);
const count3 = new countUp.CountUp(&quot;kt_countup_3&quot;);

button.addEventListener(&quot;click&quot;, function() {
    count1.update(1000);
    count2.update(200);
    count3.update(300);
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
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="within-tabs" data-kt-scroll-offset="50">
                            <a href="#within-tabs"></a>

                            Within Tabs
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Here's a demo where CountUp will only start when visible within a tab container. Add
                            <code>data-kt-countup-tabs="true"</code> next to the <code>data-bs-toggle="tab"</code> HTML
                            attribute to define that the tab content has a CountUp element.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="d-flex flex-column rounded border p-5 p-lg-15 pb-lg-12">
                                <!--begin::Tabs-->
                                <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" data-kt-countup-tabs="true"
                                            href="#kt_docs_countup_tab_1">Tab 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" data-kt-countup-tabs="true"
                                            href="#kt_docs_countup_tab_2">Tab 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" data-kt-countup-tabs="true"
                                            href="#kt_docs_countup_tab_3">Tab 3</a>
                                    </li>
                                </ul>
                                <!--end::Tabs-->

                                <!--begin::Tab content-->
                                <div class="tab-content">
                                    <div id="kt_docs_countup_tab_1" class="tab-pane fade active show" role="tabpanel">
                                        <div class="fw-bold mb-5">Example tab content 1</div>
                                        <div class="d-flex">
                                            <!--begin::Stat-->
                                            <div
                                                class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                <!--begin::Number-->
                                                <div class="d-flex align-items-center">
                                                    <i class="ki-duotone ki-arrow-up fs-3 text-success me-2"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                    <div class="fs-2 fw-bold" data-kt-countup="true"
                                                        data-kt-countup-value="6800" data-kt-countup-prefix="$">0</div>
                                                </div>
                                                <!--end::Number-->

                                                <!--begin::Label-->
                                                <div class="fw-semibold fs-6 ">Earnings</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Stat-->

                                            <!--begin::Stat-->
                                            <div
                                                class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                <!--begin::Number-->
                                                <div class="d-flex align-items-center">
                                                    <i class="ki-duotone ki-arrow-down fs-3 text-danger me-2"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                    <div class="fs-2 fw-bold" data-kt-countup="true"
                                                        data-kt-countup-value="150">0</div>
                                                </div>
                                                <!--end::Number-->

                                                <!--begin::Label-->
                                                <div class="fw-semibold fs-6 ">Projects</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Stat-->

                                            <!--begin::Stat-->
                                            <div
                                                class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                <!--begin::Number-->
                                                <div class="d-flex align-items-center">
                                                    <i class="ki-duotone ki-arrow-up fs-3 text-success me-2"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                    <div class="fs-2 fw-bold" data-kt-countup="true"
                                                        data-kt-countup-value="45" data-kt-countup-prefix="%">0</div>
                                                </div>
                                                <!--end::Number-->

                                                <!--begin::Label-->
                                                <div class="fw-semibold fs-6 ">Success Rate</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Stat-->
                                        </div>
                                    </div>
                                    <div id="kt_docs_countup_tab_2" class="tab-pane fade" role="tabpanel">
                                        <div class="fw-bold mb-5">Example tab content 2</div>
                                        <div class="d-flex">
                                            <!--begin::Stat-->
                                            <div
                                                class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                <!--begin::Number-->
                                                <div class="d-flex align-items-center">
                                                    <i class="ki-duotone ki-arrow-up fs-3 text-success me-2"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                    <div class="fs-2 fw-bold" data-kt-countup="true"
                                                        data-kt-countup-value="9001" data-kt-countup-prefix="$">0</div>
                                                </div>
                                                <!--end::Number-->

                                                <!--begin::Label-->
                                                <div class="fw-semibold fs-6 ">Earnings</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Stat-->

                                            <!--begin::Stat-->
                                            <div
                                                class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                <!--begin::Number-->
                                                <div class="d-flex align-items-center">
                                                    <i class="ki-duotone ki-arrow-down fs-3 text-danger me-2"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                    <div class="fs-2 fw-bold" data-kt-countup="true"
                                                        data-kt-countup-value="745">0</div>
                                                </div>
                                                <!--end::Number-->

                                                <!--begin::Label-->
                                                <div class="fw-semibold fs-6 ">Projects</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Stat-->

                                            <!--begin::Stat-->
                                            <div
                                                class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                <!--begin::Number-->
                                                <div class="d-flex align-items-center">
                                                    <i class="ki-duotone ki-arrow-up fs-3 text-success me-2"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                    <div class="fs-2 fw-bold" data-kt-countup="true"
                                                        data-kt-countup-value="84" data-kt-countup-prefix="%">0</div>
                                                </div>
                                                <!--end::Number-->

                                                <!--begin::Label-->
                                                <div class="fw-semibold fs-6 ">Success Rate</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Stat-->
                                        </div>
                                    </div>
                                    <div id="kt_docs_countup_tab_3" class="tab-pane fade" role="tabpanel">
                                        <div class="fw-bold mb-5">Example tab content 3</div>
                                        <div class="d-flex">
                                            <!--begin::Stat-->
                                            <div
                                                class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                <!--begin::Number-->
                                                <div class="d-flex align-items-center">
                                                    <i class="ki-duotone ki-arrow-up fs-3 text-success me-2"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                    <div class="fs-2 fw-bold" data-kt-countup="true"
                                                        data-kt-countup-value="7855" data-kt-countup-prefix="$">0</div>
                                                </div>
                                                <!--end::Number-->

                                                <!--begin::Label-->
                                                <div class="fw-semibold fs-6 ">Earnings</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Stat-->

                                            <!--begin::Stat-->
                                            <div
                                                class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                <!--begin::Number-->
                                                <div class="d-flex align-items-center">
                                                    <i class="ki-duotone ki-arrow-down fs-3 text-danger me-2"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                    <div class="fs-2 fw-bold" data-kt-countup="true"
                                                        data-kt-countup-value="94">0</div>
                                                </div>
                                                <!--end::Number-->

                                                <!--begin::Label-->
                                                <div class="fw-semibold fs-6 ">Projects</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Stat-->

                                            <!--begin::Stat-->
                                            <div
                                                class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                <!--begin::Number-->
                                                <div class="d-flex align-items-center">
                                                    <i class="ki-duotone ki-arrow-up fs-3 text-success me-2"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                    <div class="fs-2 fw-bold" data-kt-countup="true"
                                                        data-kt-countup-value="69" data-kt-countup-prefix="%">0</div>
                                                </div>
                                                <!--end::Number-->

                                                <!--begin::Label-->
                                                <div class="fw-semibold fs-6 ">Success Rate</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Stat-->
                                        </div>
                                    </div>
                                </div>
                                <!--end::Tab content-->
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
                                            href="#kt_highlight_68e5270eaee5f" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5270eaee5f"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Tabs--&gt;
&lt;ul class=&quot;nav nav-tabs nav-line-tabs mb-5 fs-6&quot;&gt;
    &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link active&quot; data-bs-toggle=&quot;tab&quot; data-kt-countup-tabs=&quot;true&quot; href=&quot;#kt_docs_countup_tab_1&quot;&gt;Tab 1&lt;/a&gt;
    &lt;/li&gt;
    ...
&lt;/ul&gt;
&lt;!--end::Tabs--&gt;

&lt;!--begin::Tab content--&gt;
&lt;div class=&quot;tab-content&quot;&gt;
    &lt;div id=&quot;kt_docs_countup_tab_1&quot; class=&quot;tab-pane fade active show&quot; role=&quot;tabpanel&quot;&gt;
        &lt;div class=&quot;fw-bold mb-5&quot;&gt;Example tab content 1&lt;/div&gt;
        &lt;div class=&quot;d-flex&quot;&gt;
            &lt;!--begin::Stat--&gt;
            &lt;div class=&quot;border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3&quot;&gt;
                &lt;!--begin::Number--&gt;
                &lt;div class=&quot;d-flex align-items-center&quot;&gt;
                    &lt;span class=&quot;svg-icon fs-3 text-success me-2&quot;&gt;
                        ...
                    &lt;/span&gt;
                    &lt;div class=&quot;fs-2 fw-bold&quot; data-kt-countup=&quot;true&quot; data-kt-countup-value=&quot;6800&quot; data-kt-countup-prefix=&quot;$&quot;&gt;0&lt;/div&gt;
                &lt;/div&gt;
                &lt;!--end::Number--&gt;

                &lt;!--begin::Label--&gt;
                &lt;div class=&quot;fw-semibold fs-6 &quot;&gt;Earnings&lt;/div&gt;
                &lt;!--end::Label--&gt;
            &lt;/div&gt;
            &lt;!--end::Stat--&gt;

            ...
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div id=&quot;kt_docs_countup_tab_2&quot; class=&quot;tab-pane fade&quot; role=&quot;tabpanel&quot;&gt;
        ...
    &lt;/div&gt;
    &lt;div id=&quot;kt_docs_countup_tab_3&quot; class=&quot;tab-pane fade&quot; role=&quot;tabpanel&quot;&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;
&lt;!--end::Tab content--&gt;</code></pre>
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
                                <a href="#custom" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Custom</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#update-values" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Update Values</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#within-tabs" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Within Tabs</span>
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
    <script src="{{ asset('assets/js/custom/documentation/general/countup.js') }}"></script>
    <!--end::Vendors Javascript-->
@endsection


