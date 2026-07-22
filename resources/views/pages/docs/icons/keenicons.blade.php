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
                            High quality and pixel perfect font icons available in 3 styles, duotone, outline and solid for
                            <b class="text-gray-900">Metronic</b>&nbsp;elements.
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="usage" data-kt-scroll-offset="50">
                            <a href="#usage"></a>

                            Ugage
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use KeenIcons with a spesific class as explained below:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border d-flex flex-wrap gap-6 p-10">
                                <i class="ki-duotone ki-wrench fs-2x"><span class="path1"></span><span
                                        class="path2"></span></i> <i class="ki-outline ki-wrench fs-2x"></i> <i
                                    class="ki-solid ki-wrench fs-2x"></i> <i class="ki-outline ki-chart fs-2x"></i> <i
                                    class="ki-duotone ki-chart fs-2x"><span class="path1"></span><span
                                        class="path2"></span></i> <i class="ki-solid ki-chart fs-2x"></i> <i
                                    class="ki-outline ki-gear fs-2x"></i> <i class="ki-duotone ki-gear fs-2x"><span
                                        class="path1"></span><span class="path2"></span></i> <i
                                    class="ki-solid ki-gear fs-2x"></i>
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;i class=&quot;ki-duotone ki-wrench fs-2x&quot;&gt;
    &lt;i class=&quot;path1&quot;&gt;&lt;/i&gt;
    &lt;i class=&quot;path2&quot;&gt;&lt;/i&gt;
&lt;/i&gt;

&lt;i class=&quot;ki-outline ki-wrench fs-2x&quot;&gt;&lt;/i&gt;

&lt;i class=&quot;ki-solid ki-wrench fs-2x&quot;&gt;&lt;/i&gt;

&lt;i class=&quot;ki-outline ki-chart fs-2x&quot;&gt;&lt;/i&gt;

&lt;i class=&quot;ki-duotone ki-chart fs-2x&quot;&gt;
    &lt;i class=&quot;path1&quot;&gt;&lt;/i&gt;
    &lt;i class=&quot;path2&quot;&gt;&lt;/i&gt;
&lt;/i&gt;

&lt;i class=&quot;ki-solid ki-chart fs-2x&quot;&gt;&lt;/i&gt;

&lt;i class=&quot;ki-outline ki-gear fs-2x&quot;&gt;&lt;/i&gt;

&lt;i class=&quot;ki-duotone ki-gear&quot;&gt;
 &lt;i class=&quot;path1&quot;&gt;&lt;/i&gt;
 &lt;i class=&quot;path2&quot;&gt;&lt;/i&gt;
&lt;/i&gt;

&lt;i class=&quot;ki-solid ki-gear fs-2x&quot;&gt;&lt;/i&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="styles" data-kt-scroll-offset="50">
                            <a href="#styles"></a>

                            Styles
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use Keenicons in 3 styles:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border d-flex flex-wrap flex-center gap-10 p-10">
                                <div class="d-flex flex-column flex-center w-150px">
                                    <i class="ki-duotone ki-chart fs-3x"><span class="path1"></span><span
                                            class="path2"></span></i> <span class="fs-7 fw-semibold pt-3">Duotone
                                        style</span>
                                </div>

                                <div class="d-flex flex-column flex-center w-150px">
                                    <i class="ki-solid ki-chart fs-3x"></i> <span class="fs-7 fw-semibold pt-3">Solid
                                        style</span>
                                </div>

                                <div class="d-flex flex-column flex-center w-150px">
                                    <i class="ki-outline ki-chart fs-3x"></i> <span class="fs-7 fw-semibold pt-3">Outline
                                        style</span>
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
                                    <pre class="language-html"><code class="language-html">// Duotone style
&lt;i class=&quot;ki-duotone ki-chart&quot;&gt;
    &lt;i class=&quot;path1&quot;&gt;&lt;/i&gt;
    &lt;i class=&quot;path2&quot;&gt;&lt;/i&gt;
&lt;/i&gt;

// Solid style
&lt;i class=&quot;ki-solid ki-chart&quot;&gt;&lt;/i&gt;

// Outline style
&lt;i class=&quot;ki-outline ki-chart&quot;&gt;&lt;/i&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="colors" data-kt-scroll-offset="50">
                            <a href="#colors"></a>

                            Colors
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            The inline icons can be colored using <code>.text-{color}</code> class that defined with
                            <code>$theme-text-colors</code> variable in <code>sass/_variables.scss</code>:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border d-flex flex-wrap p-10">


                                <div class="d-flex flex-column flex-center w-150px me-10 mb-5">
                                    <i class="ki-outline ki-graph-up fs-2x text-white bg-dark"></i>
                                    <div class="fw-semibold py-2">
                                        white </div>
                                </div>



                                <div class="d-flex flex-column flex-center w-150px me-10 mb-5">
                                    <i class="ki-outline ki-graph-up fs-2x text-primary "></i>
                                    <div class="fw-semibold py-2">
                                        primary </div>
                                </div>



                                <div class="d-flex flex-column flex-center w-150px me-10 mb-5">
                                    <i class="ki-outline ki-graph-up fs-2x text-secondary "></i>
                                    <div class="fw-semibold py-2">
                                        secondary </div>
                                </div>



                                <div class="d-flex flex-column flex-center w-150px me-10 mb-5">
                                    <i class="ki-outline ki-graph-up fs-2x text-light "></i>
                                    <div class="fw-semibold py-2">
                                        light </div>
                                </div>



                                <div class="d-flex flex-column flex-center w-150px me-10 mb-5">
                                    <i class="ki-outline ki-graph-up fs-2x text-success "></i>
                                    <div class="fw-semibold py-2">
                                        success </div>
                                </div>



                                <div class="d-flex flex-column flex-center w-150px me-10 mb-5">
                                    <i class="ki-outline ki-graph-up fs-2x text-info "></i>
                                    <div class="fw-semibold py-2">
                                        info </div>
                                </div>



                                <div class="d-flex flex-column flex-center w-150px me-10 mb-5">
                                    <i class="ki-outline ki-graph-up fs-2x text-warning "></i>
                                    <div class="fw-semibold py-2">
                                        warning </div>
                                </div>



                                <div class="d-flex flex-column flex-center w-150px me-10 mb-5">
                                    <i class="ki-outline ki-graph-up fs-2x text-danger "></i>
                                    <div class="fw-semibold py-2">
                                        danger </div>
                                </div>



                                <div class="d-flex flex-column flex-center w-150px me-10 mb-5">
                                    <i class="ki-outline ki-graph-up fs-2x text-dark "></i>
                                    <div class="fw-semibold py-2">
                                        dark </div>
                                </div>



                                <div class="d-flex flex-column flex-center w-150px me-10 mb-5">
                                    <i class="ki-outline ki-graph-up fs-2x text-muted "></i>
                                    <div class="fw-semibold py-2">
                                        muted </div>
                                </div>



                                <div class="d-flex flex-column flex-center w-150px me-10 mb-5">
                                    <i class="ki-outline ki-graph-up fs-2x text-gray-100 "></i>
                                    <div class="fw-semibold py-2">
                                        gray-100 </div>
                                </div>



                                <div class="d-flex flex-column flex-center w-150px me-10 mb-5">
                                    <i class="ki-outline ki-graph-up fs-2x text-gray-200 "></i>
                                    <div class="fw-semibold py-2">
                                        gray-200 </div>
                                </div>



                                <div class="d-flex flex-column flex-center w-150px me-10 mb-5">
                                    <i class="ki-outline ki-graph-up fs-2x text-gray-300 "></i>
                                    <div class="fw-semibold py-2">
                                        gray-300 </div>
                                </div>



                                <div class="d-flex flex-column flex-center w-150px me-10 mb-5">
                                    <i class="ki-outline ki-graph-up fs-2x text-gray-400 "></i>
                                    <div class="fw-semibold py-2">
                                        gray-400 </div>
                                </div>



                                <div class="d-flex flex-column flex-center w-150px me-10 mb-5">
                                    <i class="ki-outline ki-graph-up fs-2x text-gray-500 "></i>
                                    <div class="fw-semibold py-2">
                                        gray-500 </div>
                                </div>



                                <div class="d-flex flex-column flex-center w-150px me-10 mb-5">
                                    <i class="ki-outline ki-graph-up fs-2x text-gray-600 "></i>
                                    <div class="fw-semibold py-2">
                                        gray-600 </div>
                                </div>



                                <div class="d-flex flex-column flex-center w-150px me-10 mb-5">
                                    <i class="ki-outline ki-graph-up fs-2x text-gray-700 "></i>
                                    <div class="fw-semibold py-2">
                                        gray-700 </div>
                                </div>



                                <div class="d-flex flex-column flex-center w-150px me-10 mb-5">
                                    <i class="ki-outline ki-graph-up fs-2x text-gray-800 "></i>
                                    <div class="fw-semibold py-2">
                                        gray-800 </div>
                                </div>



                                <div class="d-flex flex-column flex-center w-150px me-10 mb-5">
                                    <i class="ki-outline ki-graph-up fs-2x text-gray-900 "></i>
                                    <div class="fw-semibold py-2">
                                        gray-900 </div>
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
                                    <pre class="language-html" style="height:300px"><code class="language-html">&lt;i class=&quot;ki-outline ki-graph-up text-white&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;ki-outline ki-graph-up text-primary&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;ki-outline ki-graph-up text-secondary&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;ki-outline ki-graph-up text-light&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;ki-outline ki-graph-up text-success&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;ki-outline ki-graph-up text-info&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;ki-outline ki-graph-up text-warning&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;ki-outline ki-graph-up text-danger&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;ki-outline ki-graph-up text-dark&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;ki-outline ki-graph-up text-muted&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;ki-outline ki-graph-up text-gray-100&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;ki-outline ki-graph-up text-gray-200&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;ki-outline ki-graph-up text-gray-300&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;ki-outline ki-graph-up text-gray-400&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;ki-outline ki-graph-up text-gray-500&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;ki-outline ki-graph-up text-gray-600&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;ki-outline ki-graph-up text-gray-700&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;ki-outline ki-graph-up text-gray-800&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;ki-outline ki-graph-up text-gray-900&quot;&gt;&lt;/i&gt;</code></pre>
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
                            The font icons can be sized using <code>.fs-{size}</code> class that defined with
                            <code>$font-sizes</code> variable in <code>sass/_variables.scss</code>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            Where <code>size</code> is one of:
                            <ul class="pt-3">
                                <li class="py-2"><code>1</code> - sets icon size that equals to <code>&lt;h1&gt; </code>
                                    font size</li>
                                <li class="py-2"><code>2</code> - sets icon size that equals to <code>&lt;h2&gt; </code>
                                    font size</li>
                                <li class="py-2"><code>3</code> - sets icon size that equals to <code>&lt;h3&gt; </code>
                                    font size</li>
                                <li class="py-2"><code>4</code> - sets icon size that equals to <code>&lt;h4&gt; </code>
                                    font size</li>
                                <li class="py-2"><code>5</code> - sets icon size that equals to <code>&lt;h5&gt; </code>
                                    font size</li>
                                <li class="py-2"><code>6</code> - sets icon size that equals to <code>&lt;h6&gt; </code>
                                    font size</li>
                                <li class="py-2"><code>7</code> - sets icon size that equals to <code>&lt;h7&gt; </code>
                                    font size</li>

                                <li class="py-2"><code>7</code> - sets icon size that equals to <code>0.95 of
                                        $font-size-base</code> where <code>$font-size-base: 1rem</code></li>
                                <li class="py-2"><code>8</code> - sets icon size that equals to <code>0.85 of
                                        $font-size-base</code> where <code>$font-size-base: 1rem</code></li>
                                <li class="py-2"><code>9</code> - sets icon size that equals to <code>0.75 of
                                        $font-size-base</code> where <code>$font-size-base: 1rem</code></li>
                                <li class="py-2"><code>10</code> - sets icon size that equals to <code>0.5 of
                                        $font-size-base</code> where <code>$font-size-base: 1rem</code></li>

                                <li class="py-2"><code>base</code> - sets icon size that equals to
                                    <code>$font-size-base</code> where <code>$font-size-base: 1rem</code>
                                </li>
                                <li class="py-2"><code>fluid</code> - sets icon size that equals to <code>100%</code>
                                </li>

                                <li class="py-2"><code>2x</code> - sets icon size that equals to <code>2 of
                                        $font-size-base</code> where <code>$font-size-base: 1rem</code></li>
                                <li class="py-2"><code>2qx</code> - sets icon size that equals to <code>2.25 of
                                        $font-size-base</code> where <code>$font-size-base: 1rem</code></li>
                                <li class="py-2"><code>2hx</code> - sets icon size that equals to <code>2.5 of
                                        $font-size-base</code> where <code>$font-size-base: 1rem</code></li>
                                <li class="py-2"><code>2tx</code> - sets icon size that equals to <code>2.75 of
                                        $font-size-base</code> where <code>$font-size-base: 1rem</code></li>
                                <li class="py-2"><code>3x</code> - sets icon size that equals to <code>3 of
                                        $font-size-base</code> where <code>$font-size-base: 1rem</code></li>
                                <li class="py-2"><code>3qx</code> - sets icon size that equals to <code>3.25 of
                                        $font-size-base</code> where <code>$font-size-base: 1rem</code></li>
                                <li class="py-2"><code>3hx</code> - sets icon size that equals to <code>3.5 of
                                        $font-size-base</code> where <code>$font-size-base: 1rem</code></li>
                                <li class="py-2"><code>3tx</code> - sets icon size that equals to <code>3.75 of
                                        $font-size-base</code> where <code>$font-size-base: 1rem</code></li>
                                <li class="py-2"><code>4x</code> - sets icon size that equals to <code>4 of
                                        $font-size-base</code> where <code>$font-size-base: 1rem</code></li>
                                <li class="py-2"><code>4qx</code> - sets icon size that equals to <code>4.25 of
                                        $font-size-base</code> where <code>$font-size-base: 1rem</code></li>
                                <li class="py-2"><code>4hx</code> - sets icon size that equals to <code>4.5 of
                                        $font-size-base</code> where <code>$font-size-base: 1rem</code></li>
                                <li class="py-2"><code>4tx</code> - sets icon size that equals to <code>4.75 of
                                        $font-size-base</code> where <code>$font-size-base: 1rem</code></li>
                                <li class="py-2"><code>5x</code> - sets icon size that equals to <code>5 of
                                        $font-size-base</code> where <code>$font-size-base: 1rem</code></li>
                                <li class="py-2"><code>5qx</code> - sets icon size that equals to <code>5.25 of
                                        $font-size-base</code> where <code>$font-size-base: 1rem</code></li>
                                <li class="py-2"><code>5hx</code> - sets icon size that equals to <code>5.5 of
                                        $font-size-base</code> where <code>$font-size-base: 1rem</code></li>
                                <li class="py-2"><code>5tx</code> - sets icon size that equals to <code>5.75 of
                                        $font-size-base</code> where <code>$font-size-base: 1rem</code></li>
                            </ul>
                        </div>
                        <!--end::Block-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border d-flex flex-wrap p-10">

                                <div class="d-flex flex-column h-100px w-100px me-10 mb-5">
                                    <div class="d-flex flex-center flex-grow-1">
                                        <i class="ki-outline ki-calendar-add fs-5x"></i>
                                    </div>

                                    <div class="fw-semibold py-2 text-center">
                                        .fs-5x </div>
                                </div>


                                <div class="d-flex flex-column h-100px w-100px me-10 mb-5">
                                    <div class="d-flex flex-center flex-grow-1">
                                        <i class="ki-outline ki-calendar-add fs-4x"></i>
                                    </div>

                                    <div class="fw-semibold py-2 text-center">
                                        .fs-4x </div>
                                </div>


                                <div class="d-flex flex-column h-100px w-100px me-10 mb-5">
                                    <div class="d-flex flex-center flex-grow-1">
                                        <i class="ki-outline ki-calendar-add fs-3x"></i>
                                    </div>

                                    <div class="fw-semibold py-2 text-center">
                                        .fs-3x </div>
                                </div>


                                <div class="d-flex flex-column h-100px w-100px me-10 mb-5">
                                    <div class="d-flex flex-center flex-grow-1">
                                        <i class="ki-outline ki-calendar-add fs-2tx"></i>
                                    </div>

                                    <div class="fw-semibold py-2 text-center">
                                        .fs-2tx </div>
                                </div>


                                <div class="d-flex flex-column h-100px w-100px me-10 mb-5">
                                    <div class="d-flex flex-center flex-grow-1">
                                        <i class="ki-outline ki-calendar-add fs-2hx"></i>
                                    </div>

                                    <div class="fw-semibold py-2 text-center">
                                        .fs-2hx </div>
                                </div>


                                <div class="d-flex flex-column h-100px w-100px me-10 mb-5">
                                    <div class="d-flex flex-center flex-grow-1">
                                        <i class="ki-outline ki-calendar-add fs-2qx"></i>
                                    </div>

                                    <div class="fw-semibold py-2 text-center">
                                        .fs-2qx </div>
                                </div>


                                <div class="d-flex flex-column h-100px w-100px me-10 mb-5">
                                    <div class="d-flex flex-center flex-grow-1">
                                        <i class="ki-outline ki-calendar-add fs-2x"></i>
                                    </div>

                                    <div class="fw-semibold py-2 text-center">
                                        .fs-2x </div>
                                </div>


                                <div class="d-flex flex-column h-100px w-100px me-10 mb-5">
                                    <div class="d-flex flex-center flex-grow-1">
                                        <i class="ki-outline ki-calendar-add fs-1"></i>
                                    </div>

                                    <div class="fw-semibold py-2 text-center">
                                        .fs-1 </div>
                                </div>


                                <div class="d-flex flex-column h-100px w-100px me-10 mb-5">
                                    <div class="d-flex flex-center flex-grow-1">
                                        <i class="ki-outline ki-calendar-add fs-2"></i>
                                    </div>

                                    <div class="fw-semibold py-2 text-center">
                                        .fs-2 </div>
                                </div>


                                <div class="d-flex flex-column h-100px w-100px me-10 mb-5">
                                    <div class="d-flex flex-center flex-grow-1">
                                        <i class="ki-outline ki-calendar-add fs-3"></i>
                                    </div>

                                    <div class="fw-semibold py-2 text-center">
                                        .fs-3 </div>
                                </div>


                                <div class="d-flex flex-column h-100px w-100px me-10 mb-5">
                                    <div class="d-flex flex-center flex-grow-1">
                                        <i class="ki-outline ki-calendar-add fs-5"></i>
                                    </div>

                                    <div class="fw-semibold py-2 text-center">
                                        .fs-5 </div>
                                </div>


                                <div class="d-flex flex-column h-100px w-100px me-10 mb-5">
                                    <div class="d-flex flex-center flex-grow-1">
                                        <i class="ki-outline ki-calendar-add fs-6"></i>
                                    </div>

                                    <div class="fw-semibold py-2 text-center">
                                        .fs-6 </div>
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
                                    <pre class="language-html"><code class="language-html">&lt;i class=&quot;ki-outline ki-calendar-add fs-5x&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;ki-outline ki-calendar-add fs-4x&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;ki-outline ki-calendar-add fs-3x&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;ki-outline ki-calendar-add fs-2tx&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;ki-outline ki-calendar-add fs-2hx&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;ki-outline ki-calendar-add fs-2qx&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;ki-outline ki-calendar-add fs-2x&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;ki-outline ki-calendar-add fs-1&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;ki-outline ki-calendar-add fs-2&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;ki-outline ki-calendar-add fs-3&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;ki-outline ki-calendar-add fs-5&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;ki-outline ki-calendar-add fs-6&quot;&gt;&lt;/i&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-0">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="listing" data-kt-scroll-offset="50">
                            <a href="#listing"></a>

                        </h1>
                        <!--end::Heading-->



                        <!--begin::Heading holder-->
                        <div class="d-flex flex-stack flex-wrap gap-4 mb-10">
                            <!--begin::Heading-->
                            <div class="d-flex flex-column">
                                <!--begin::Title-->
                                <h1 class="text-gray-900 fw-bold fs-1 mb-1 letter-spacing">
                                    KeenIcons
                                </h1>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <span class="text-gray-600 fw-semibold fs-5 letter-spacing">
                                    573 pixel perfect icons in 3 styles
                                </span>
                                <!--end::Description-->
                            </div>
                            <!--end::Heading-->

                            <!--begin::Icon styles-->
                            <div class="d-flex gap-4 border border-gray-300 border-dashed rounded-2 py-3 px-3">
                                <!--begin::Option-->
                                <label class="form-check form-check-custom form-check-solid me-2 cursor-pointer">
                                    <input class="form-check-input h-20px w-20px" type="radio" value="duotone"
                                        checked="checked" name="style" data-kt-keenicons-style-toggle="true" />
                                    <span class="form-check-label fs-7 fw-bold">
                                        Duotone </span>
                                </label>
                                <!--end::Option-->
                                <!--begin::Option-->
                                <label class="form-check form-check-custom form-check-solid me-2 cursor-pointer">
                                    <input class="form-check-input h-20px w-20px" type="radio" value="solid"
                                        name="style" data-kt-keenicons-style-toggle="true" />
                                    <span class="form-check-label fs-7 fw-bold">
                                        Solid </span>
                                </label>
                                <!--end::Option-->
                                <!--begin::Option-->
                                <label class="form-check form-check-custom form-check-solid me-2 cursor-pointer">
                                    <input class="form-check-input h-20px w-20px" type="radio" value="outline"
                                        name="style" data-kt-keenicons-style-toggle="true" />
                                    <span class="form-check-label fs-7 fw-bold">
                                        Outline </span>
                                </label>
                                <!--end::Option-->
                            </div>
                            <!--end::Icon styles-->
                        </div>
                        <!--end::Heading holder-->

                        <style>
                            .keenicons-duotone .ki-solid,
                            .keenicons-duotone .ki-outline {
                                display: none;
                            }

                            .keenicons-solid .ki-duotone,
                            .keenicons-solid .ki-outline {
                                display: none;
                            }

                            .keenicons-outline .ki-solid,
                            .keenicons-outline .ki-duotone {
                                display: none;
                            }
                        </style>

                        <!--begin::Listing-->
                        <div class="keenicons-duotone" id="kt_docs_keenicons_listing">
                            <h1 class="fs-1 fw-bolder text-gray-900 mb-6">
                                Abstract </h1>

                            <!--begin::Category-->
                            <div class="row mb-10">
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-33 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-33 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-33 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-33 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-27 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-27 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-27 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-27 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-26 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-26 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-26 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-26 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-32 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-32 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-32 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-32 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-18 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-18 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-18 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-18 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-24 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-24 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-24 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-24 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-30 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-30 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-30 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-30 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-8 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-8 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-8 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-8 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-9 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-9 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-9 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-9 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-31 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-31 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-31 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-31 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-25 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-25 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-25 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-25 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-19 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-19 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-19 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-19 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-21 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-21 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-21 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-21 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-35 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-35 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-35 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-35 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-34 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-34 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-34 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-34 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-20 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-20 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-20 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-20 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-36 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-36 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-36 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-36 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-22 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-22 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-22 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-22 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-23 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-23 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-23 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-23 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-37 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-37 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-37 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-37 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-44 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-44 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-44 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-44 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-abstract fs-2x"></i>
                                            <i class="ki-outline ki-abstract fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-45 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-45 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-45 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-45 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-47 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-47 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-47 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-47 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-46 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-46 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-46 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-46 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-42 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-42 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-42 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-42 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-43 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-43 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-43 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-43 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-41 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-41 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-41 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-41 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-40 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-40 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-40 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-40 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-48 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-abstract-48 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-48 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-48 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-49 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-abstract-49 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-49 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-49 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-12 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-12 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-12 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-12 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-2 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-2 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-2 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-2 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-3 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-3 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-3 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-3 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-13 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-13 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-13 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-13 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-39 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-39 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-39 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-39 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-11 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-11 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-11 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-11 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-1 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-1 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-1 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-1 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-10 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-10 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-10 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-10 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-38 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-38 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-38 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-38 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-14 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-14 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-14 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-14 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-28 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-28 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-28 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-28 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-4 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-4 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-4 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-4 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-5 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-5 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-5 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-5 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-29 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-29 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-29 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-29 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-15 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-15 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-15 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-15 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-17 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-17 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-17 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-17 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-7 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-7 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-7 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-7 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-6 fs-2x"></i> <i
                                                class="ki-solid ki-abstract-6 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-6 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="0">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-6 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-abstract-16 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-abstract-16 fs-2x"></i> <i
                                                class="ki-outline ki-abstract-16 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        abstract-16 </span>
                                </div>
                            </div>
                            <!--end::Category-->
                            <h1 class="fs-1 fw-bolder text-gray-900 mb-6">
                                Settings </h1>

                            <!--begin::Category-->
                            <div class="row mb-10">
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-toggle-on fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-toggle-on fs-2x"></i> <i
                                                class="ki-outline ki-toggle-on fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        toggle-on </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-toggle-on-circle fs-2x"><span
                                                    class="path1"></span><span class="path2"></span></i> <i
                                                class="ki-solid ki-toggle-on-circle fs-2x"></i> <i
                                                class="ki-outline ki-toggle-on-circle fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        toggle-on-circle </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-toggle-off fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-toggle-off fs-2x"></i> <i
                                                class="ki-outline ki-toggle-off fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        toggle-off </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-category fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></i> <i
                                                class="ki-solid ki-category fs-2x"></i> <i
                                                class="ki-outline ki-category fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="4">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        category </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-setting fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-setting fs-2x"></i>
                                            <i class="ki-outline ki-setting fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        setting </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-toggle-off-circle fs-2x"><span
                                                    class="path1"></span><span class="path2"></span></i> <i
                                                class="ki-solid ki-toggle-off-circle fs-2x"></i> <i
                                                class="ki-outline ki-toggle-off-circle fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        toggle-off-circle </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-more-2 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></i> <i class="ki-solid ki-more-2 fs-2x"></i>
                                            <i class="ki-outline ki-more-2 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="4">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        more-2 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-setting-4 fs-2x"></i> <i
                                                class="ki-solid ki-setting-4 fs-2x"></i> <i
                                                class="ki-outline ki-setting-4 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="0">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        setting-4 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-setting-2 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-setting-2 fs-2x"></i> <i
                                                class="ki-outline ki-setting-2 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        setting-2 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-setting-3 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span><span class="path5"></span></i> <i
                                                class="ki-solid ki-setting-3 fs-2x"></i> <i
                                                class="ki-outline ki-setting-3 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="5">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        setting-3 </span>
                                </div>
                            </div>
                            <!--end::Category-->
                            <h1 class="fs-1 fw-bolder text-gray-900 mb-6">
                                Design </h1>

                            <!--begin::Category-->
                            <div class="row mb-10">
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-eraser fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-eraser fs-2x"></i> <i
                                                class="ki-outline ki-eraser fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        eraser </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-paintbucket fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-paintbucket fs-2x"></i> <i
                                                class="ki-outline ki-paintbucket fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        paintbucket </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-add-item fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-add-item fs-2x"></i> <i
                                                class="ki-outline ki-add-item fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        add-item </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-design-2 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-design-2 fs-2x"></i> <i
                                                class="ki-outline ki-design-2 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        design-2 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-brush fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-brush fs-2x"></i>
                                            <i class="ki-outline ki-brush fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        brush </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-size fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-size fs-2x"></i> <i
                                                class="ki-outline ki-size fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        size </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-design fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-design fs-2x"></i>
                                            <i class="ki-outline ki-design fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        design </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-copy fs-2x"></i> <i
                                                class="ki-solid ki-copy fs-2x"></i> <i
                                                class="ki-outline ki-copy fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="0">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        copy </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-text fs-2x"></i> <i
                                                class="ki-solid ki-text fs-2x"></i> <i
                                                class="ki-outline ki-text fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="0">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        text </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-design-frame fs-2x"><span
                                                    class="path1"></span><span class="path2"></span></i> <i
                                                class="ki-solid ki-design-frame fs-2x"></i> <i
                                                class="ki-outline ki-design-frame fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        design-frame </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-bucket fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></i> <i class="ki-solid ki-bucket fs-2x"></i>
                                            <i class="ki-outline ki-bucket fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="4">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        bucket </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-glass fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-glass fs-2x"></i> <i
                                                class="ki-outline ki-glass fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        glass </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-feather fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-feather fs-2x"></i>
                                            <i class="ki-outline ki-feather fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        feather </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-pencil fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-pencil fs-2x"></i>
                                            <i class="ki-outline ki-pencil fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        pencil </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-colors-square fs-2x"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span><span class="path4"></span></i> <i
                                                class="ki-solid ki-colors-square fs-2x"></i> <i
                                                class="ki-outline ki-colors-square fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="4">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        colors-square </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-design-mask fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-design-mask fs-2x"></i> <i
                                                class="ki-outline ki-design-mask fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        design-mask </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-bucket-square fs-2x"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span></i> <i
                                                class="ki-solid ki-bucket-square fs-2x"></i> <i
                                                class="ki-outline ki-bucket-square fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        bucket-square </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-copy-success fs-2x"><span
                                                    class="path1"></span><span class="path2"></span></i> <i
                                                class="ki-solid ki-copy-success fs-2x"></i> <i
                                                class="ki-outline ki-copy-success fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        copy-success </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-color-swatch fs-2x"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span><span class="path4"></span><span
                                                    class="path5"></span><span class="path6"></span><span
                                                    class="path7"></span><span class="path8"></span><span
                                                    class="path9"></span><span class="path10"></span><span
                                                    class="path11"></span><span class="path12"></span><span
                                                    class="path13"></span><span class="path14"></span><span
                                                    class="path15"></span><span class="path16"></span><span
                                                    class="path17"></span><span class="path18"></span><span
                                                    class="path19"></span><span class="path20"></span><span
                                                    class="path21"></span></i> <i
                                                class="ki-solid ki-color-swatch fs-2x"></i> <i
                                                class="ki-outline ki-color-swatch fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="21">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        color-swatch </span>
                                </div>
                            </div>
                            <!--end::Category-->
                            <h1 class="fs-1 fw-bolder text-gray-900 mb-6">
                                Social Media </h1>

                            <!--begin::Category-->
                            <div class="row mb-10">
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-instagram fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-instagram fs-2x"></i> <i
                                                class="ki-outline ki-instagram fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        instagram </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-snapchat fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-snapchat fs-2x"></i> <i
                                                class="ki-outline ki-snapchat fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        snapchat </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-classmates fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-classmates fs-2x"></i> <i
                                                class="ki-outline ki-classmates fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        classmates </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-facebook fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-facebook fs-2x"></i> <i
                                                class="ki-outline ki-facebook fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        facebook </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-whatsapp fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-whatsapp fs-2x"></i> <i
                                                class="ki-outline ki-whatsapp fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        whatsapp </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-social-media fs-2x"><span
                                                    class="path1"></span><span class="path2"></span></i> <i
                                                class="ki-solid ki-social-media fs-2x"></i> <i
                                                class="ki-outline ki-social-media fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        social-media </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-youtube fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-youtube fs-2x"></i>
                                            <i class="ki-outline ki-youtube fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        youtube </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-dribbble fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span><span class="path5"></span><span
                                                    class="path6"></span></i> <i
                                                class="ki-solid ki-dribbble fs-2x"></i> <i
                                                class="ki-outline ki-dribbble fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="6">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        dribbble </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-twitter fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-twitter fs-2x"></i>
                                            <i class="ki-outline ki-twitter fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        twitter </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-tiktok fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-tiktok fs-2x"></i>
                                            <i class="ki-outline ki-tiktok fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        tiktok </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-behance fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-behance fs-2x"></i>
                                            <i class="ki-outline ki-behance fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        behance </span>
                                </div>
                            </div>
                            <!--end::Category-->
                            <h1 class="fs-1 fw-bolder text-gray-900 mb-6">
                                It Network </h1>

                            <!--begin::Category-->
                            <div class="row mb-10">
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-underlining fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-underlining fs-2x"></i> <i
                                                class="ki-outline ki-underlining fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        underlining </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-disconnect fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span><span class="path5"></span></i> <i
                                                class="ki-solid ki-disconnect fs-2x"></i> <i
                                                class="ki-outline ki-disconnect fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="5">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        disconnect </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-code fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></i> <i class="ki-solid ki-code fs-2x"></i> <i
                                                class="ki-outline ki-code fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="4">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        code </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-gear fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-gear fs-2x"></i> <i
                                                class="ki-outline ki-gear fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        gear </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-loading fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-loading fs-2x"></i>
                                            <i class="ki-outline ki-loading fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        loading </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-scroll fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-scroll fs-2x"></i> <i
                                                class="ki-outline ki-scroll fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        scroll </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-wrench fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-wrench fs-2x"></i>
                                            <i class="ki-outline ki-wrench fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        wrench </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-square-brackets fs-2x"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span><span class="path4"></span></i> <i
                                                class="ki-solid ki-square-brackets fs-2x"></i> <i
                                                class="ki-outline ki-square-brackets fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="4">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        square-brackets </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-frame fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></i> <i class="ki-solid ki-frame fs-2x"></i>
                                            <i class="ki-outline ki-frame fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="4">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        frame </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-message-programming fs-2x"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span><span class="path4"></span></i> <i
                                                class="ki-solid ki-message-programming fs-2x"></i> <i
                                                class="ki-outline ki-message-programming fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="4">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        message-programming </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-data fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span><span class="path5"></span></i> <i
                                                class="ki-solid ki-data fs-2x"></i> <i
                                                class="ki-outline ki-data fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="5">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        data </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-fasten fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-fasten fs-2x"></i>
                                            <i class="ki-outline ki-fasten fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        fasten </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-click fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span><span class="path5"></span></i> <i
                                                class="ki-solid ki-click fs-2x"></i> <i
                                                class="ki-outline ki-click fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="5">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        click </span>
                                </div>
                            </div>
                            <!--end::Category-->
                            <h1 class="fs-1 fw-bolder text-gray-900 mb-6">
                                Technologies </h1>

                            <!--begin::Category-->
                            <div class="row mb-10">
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-tech-wifi fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-tech-wifi fs-2x"></i> <i
                                                class="ki-outline ki-tech-wifi fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        tech-wifi </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-joystick fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></i> <i
                                                class="ki-solid ki-joystick fs-2x"></i> <i
                                                class="ki-outline ki-joystick fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="4">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        joystick </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-faceid fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span><span class="path5"></span><span
                                                    class="path6"></span></i> <i class="ki-solid ki-faceid fs-2x"></i>
                                            <i class="ki-outline ki-faceid fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="6">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        faceid </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-technology-3 fs-2x"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span><span class="path4"></span></i> <i
                                                class="ki-solid ki-technology-3 fs-2x"></i> <i
                                                class="ki-outline ki-technology-3 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="4">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        technology-3 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-technology-2 fs-2x"><span
                                                    class="path1"></span><span class="path2"></span></i> <i
                                                class="ki-solid ki-technology-2 fs-2x"></i> <i
                                                class="ki-outline ki-technology-2 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        technology-2 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-electricity fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span><span class="path5"></span><span
                                                    class="path6"></span><span class="path7"></span><span
                                                    class="path8"></span><span class="path9"></span><span
                                                    class="path10"></span></i> <i
                                                class="ki-solid ki-electricity fs-2x"></i> <i
                                                class="ki-outline ki-electricity fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="10">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        electricity </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-fingerprint-scanning fs-2x"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span><span class="path4"></span><span
                                                    class="path5"></span></i> <i
                                                class="ki-solid ki-fingerprint-scanning fs-2x"></i> <i
                                                class="ki-outline ki-fingerprint-scanning fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="5">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        fingerprint-scanning </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-technology-4 fs-2x"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span><span class="path4"></span><span
                                                    class="path5"></span><span class="path6"></span><span
                                                    class="path7"></span></i> <i
                                                class="ki-solid ki-technology-4 fs-2x"></i> <i
                                                class="ki-outline ki-technology-4 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="7">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        technology-4 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-artificial-intelligence fs-2x"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span><span class="path4"></span><span
                                                    class="path5"></span><span class="path6"></span><span
                                                    class="path7"></span><span class="path8"></span></i> <i
                                                class="ki-solid ki-artificial-intelligence fs-2x"></i> <i
                                                class="ki-outline ki-artificial-intelligence fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="8">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        artificial-intelligence </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-technology fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span><span class="path5"></span><span
                                                    class="path6"></span><span class="path7"></span><span
                                                    class="path8"></span><span class="path9"></span></i> <i
                                                class="ki-solid ki-technology fs-2x"></i> <i
                                                class="ki-outline ki-technology fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="9">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        technology </span>
                                </div>
                            </div>
                            <!--end::Category-->
                            <h1 class="fs-1 fw-bolder text-gray-900 mb-6">
                                Ecommerce </h1>

                            <!--begin::Category-->
                            <div class="row mb-10">
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-basket-ok fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></i> <i
                                                class="ki-solid ki-basket-ok fs-2x"></i> <i
                                                class="ki-outline ki-basket-ok fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="4">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        basket-ok </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-cheque fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span><span class="path5"></span><span
                                                    class="path6"></span><span class="path7"></span></i> <i
                                                class="ki-solid ki-cheque fs-2x"></i> <i
                                                class="ki-outline ki-cheque fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="7">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        cheque </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-handcart fs-2x"></i> <i
                                                class="ki-solid ki-handcart fs-2x"></i> <i
                                                class="ki-outline ki-handcart fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="0">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        handcart </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-shop fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span><span class="path5"></span></i> <i
                                                class="ki-solid ki-shop fs-2x"></i> <i
                                                class="ki-outline ki-shop fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="5">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        shop </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-tag fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-tag fs-2x"></i> <i
                                                class="ki-outline ki-tag fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        tag </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-purchase fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-purchase fs-2x"></i> <i
                                                class="ki-outline ki-purchase fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        purchase </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-discount fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-discount fs-2x"></i> <i
                                                class="ki-outline ki-discount fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        discount </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-package fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-package fs-2x"></i> <i
                                                class="ki-outline ki-package fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        package </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-percentage fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-percentage fs-2x"></i> <i
                                                class="ki-outline ki-percentage fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        percentage </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-barcode fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span><span class="path5"></span><span
                                                    class="path6"></span><span class="path7"></span><span
                                                    class="path8"></span></i> <i class="ki-solid ki-barcode fs-2x"></i>
                                            <i class="ki-outline ki-barcode fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="8">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        barcode </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-lots-shopping fs-2x"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span><span class="path4"></span><span
                                                    class="path5"></span><span class="path6"></span><span
                                                    class="path7"></span><span class="path8"></span></i> <i
                                                class="ki-solid ki-lots-shopping fs-2x"></i> <i
                                                class="ki-outline ki-lots-shopping fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="8">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        lots-shopping </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-basket fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></i> <i class="ki-solid ki-basket fs-2x"></i>
                                            <i class="ki-outline ki-basket fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="4">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        basket </span>
                                </div>
                            </div>
                            <!--end::Category-->
                            <h1 class="fs-1 fw-bolder text-gray-900 mb-6">
                                Archive </h1>

                            <!--begin::Category-->
                            <div class="row mb-10">
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-book-square fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-book-square fs-2x"></i> <i
                                                class="ki-outline ki-book-square fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        book-square </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-receipt-square fs-2x"><span
                                                    class="path1"></span><span class="path2"></span></i> <i
                                                class="ki-solid ki-receipt-square fs-2x"></i> <i
                                                class="ki-outline ki-receipt-square fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        receipt-square </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-save-2 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-save-2 fs-2x"></i>
                                            <i class="ki-outline ki-save-2 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        save-2 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-archive-tick fs-2x"><span
                                                    class="path1"></span><span class="path2"></span></i> <i
                                                class="ki-solid ki-archive-tick fs-2x"></i> <i
                                                class="ki-outline ki-archive-tick fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        archive-tick </span>
                                </div>
                            </div>
                            <!--end::Category-->
                            <h1 class="fs-1 fw-bolder text-gray-900 mb-6">
                                Security </h1>

                            <!--begin::Category-->
                            <div class="row mb-10">
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-shield-search fs-2x"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span></i> <i
                                                class="ki-solid ki-shield-search fs-2x"></i> <i
                                                class="ki-outline ki-shield-search fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        shield-search </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-password-check fs-2x"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span><span class="path4"></span><span
                                                    class="path5"></span></i> <i
                                                class="ki-solid ki-password-check fs-2x"></i> <i
                                                class="ki-outline ki-password-check fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="5">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        password-check </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-shield-tick fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-shield-tick fs-2x"></i> <i
                                                class="ki-outline ki-shield-tick fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        shield-tick </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-lock fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-lock fs-2x"></i> <i
                                                class="ki-outline ki-lock fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        lock </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-key fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-key fs-2x"></i> <i
                                                class="ki-outline ki-key fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        key </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-shield fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-shield fs-2x"></i>
                                            <i class="ki-outline ki-shield fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        shield </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-shield-cross fs-2x"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span></i> <i
                                                class="ki-solid ki-shield-cross fs-2x"></i> <i
                                                class="ki-outline ki-shield-cross fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        shield-cross </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-key-square fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-key-square fs-2x"></i> <i
                                                class="ki-outline ki-key-square fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        key-square </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-eye-slash fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></i> <i
                                                class="ki-solid ki-eye-slash fs-2x"></i> <i
                                                class="ki-outline ki-eye-slash fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="4">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        eye-slash </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-security-check fs-2x"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span><span class="path4"></span></i> <i
                                                class="ki-solid ki-security-check fs-2x"></i> <i
                                                class="ki-outline ki-security-check fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="4">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        security-check </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-lock-3 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-lock-3 fs-2x"></i> <i
                                                class="ki-outline ki-lock-3 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        lock-3 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-scan-barcode fs-2x"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span><span class="path4"></span><span
                                                    class="path5"></span><span class="path6"></span><span
                                                    class="path7"></span><span class="path8"></span></i> <i
                                                class="ki-solid ki-scan-barcode fs-2x"></i> <i
                                                class="ki-outline ki-scan-barcode fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="8">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        scan-barcode </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-lock-2 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span><span class="path5"></span></i> <i
                                                class="ki-solid ki-lock-2 fs-2x"></i> <i
                                                class="ki-outline ki-lock-2 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="5">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        lock-2 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-eye fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-eye fs-2x"></i> <i
                                                class="ki-outline ki-eye fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        eye </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-shield-slash fs-2x"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span></i> <i
                                                class="ki-solid ki-shield-slash fs-2x"></i> <i
                                                class="ki-outline ki-shield-slash fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        shield-slash </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-security-user fs-2x"><span
                                                    class="path1"></span><span class="path2"></span></i> <i
                                                class="ki-solid ki-security-user fs-2x"></i> <i
                                                class="ki-outline ki-security-user fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        security-user </span>
                                </div>
                            </div>
                            <!--end::Category-->
                            <h1 class="fs-1 fw-bolder text-gray-900 mb-6">
                                General </h1>

                            <!--begin::Category-->
                            <div class="row mb-10">
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-triangle fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-triangle fs-2x"></i> <i
                                                class="ki-outline ki-triangle fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        triangle </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-subtitle fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span><span class="path5"></span></i> <i
                                                class="ki-solid ki-subtitle fs-2x"></i> <i
                                                class="ki-outline ki-subtitle fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="5">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        subtitle </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-ghost fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-ghost fs-2x"></i> <i
                                                class="ki-outline ki-ghost fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        ghost </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-information fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-information fs-2x"></i> <i
                                                class="ki-outline ki-information fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        information </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-milk fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-milk fs-2x"></i> <i
                                                class="ki-outline ki-milk fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        milk </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-home fs-2x"></i> <i
                                                class="ki-solid ki-home fs-2x"></i> <i
                                                class="ki-outline ki-home fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="0">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        home </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-happy-emoji fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-happy-emoji fs-2x"></i> <i
                                                class="ki-outline ki-happy-emoji fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        happy-emoji </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-mouse-square fs-2x"><span
                                                    class="path1"></span><span class="path2"></span></i> <i
                                                class="ki-solid ki-mouse-square fs-2x"></i> <i
                                                class="ki-outline ki-mouse-square fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        mouse-square </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-filter-tick fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-filter-tick fs-2x"></i> <i
                                                class="ki-outline ki-filter-tick fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        filter-tick </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-filter-search fs-2x"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span></i> <i
                                                class="ki-solid ki-filter-search fs-2x"></i> <i
                                                class="ki-outline ki-filter-search fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        filter-search </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-wifi-home fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></i> <i
                                                class="ki-solid ki-wifi-home fs-2x"></i> <i
                                                class="ki-outline ki-wifi-home fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="4">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        wifi-home </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-trash-square fs-2x"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span><span class="path4"></span></i> <i
                                                class="ki-solid ki-trash-square fs-2x"></i> <i
                                                class="ki-outline ki-trash-square fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="4">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        trash-square </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-paper-clip fs-2x"></i> <i
                                                class="ki-solid ki-paper-clip fs-2x"></i> <i
                                                class="ki-outline ki-paper-clip fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="0">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        paper-clip </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-archive fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-archive fs-2x"></i> <i
                                                class="ki-outline ki-archive fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        archive </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-pin fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-pin fs-2x"></i> <i
                                                class="ki-outline ki-pin fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        pin </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-wifi-square fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></i> <i
                                                class="ki-solid ki-wifi-square fs-2x"></i> <i
                                                class="ki-outline ki-wifi-square fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="4">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        wifi-square </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-auto-brightness fs-2x"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span></i> <i
                                                class="ki-solid ki-auto-brightness fs-2x"></i> <i
                                                class="ki-outline ki-auto-brightness fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        auto-brightness </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-coffee fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span><span class="path5"></span><span
                                                    class="path6"></span></i> <i class="ki-solid ki-coffee fs-2x"></i>
                                            <i class="ki-outline ki-coffee fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="6">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        coffee </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-icon fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-icon fs-2x"></i> <i
                                                class="ki-outline ki-icon fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        icon </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-emoji-happy fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></i> <i
                                                class="ki-solid ki-emoji-happy fs-2x"></i> <i
                                                class="ki-outline ki-emoji-happy fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="4">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        emoji-happy </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-general-mouse fs-2x"><span
                                                    class="path1"></span><span class="path2"></span></i> <i
                                                class="ki-solid ki-general-mouse fs-2x"></i> <i
                                                class="ki-outline ki-general-mouse fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        general-mouse </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-ranking fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></i> <i class="ki-solid ki-ranking fs-2x"></i>
                                            <i class="ki-outline ki-ranking fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="4">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        ranking </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-slider fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></i> <i class="ki-solid ki-slider fs-2x"></i>
                                            <i class="ki-outline ki-slider fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="4">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        slider </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-crown-2 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-crown-2 fs-2x"></i> <i
                                                class="ki-outline ki-crown-2 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        crown-2 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-rescue fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-rescue fs-2x"></i>
                                            <i class="ki-outline ki-rescue fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        rescue </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-flash-circle fs-2x"><span
                                                    class="path1"></span><span class="path2"></span></i> <i
                                                class="ki-solid ki-flash-circle fs-2x"></i> <i
                                                class="ki-outline ki-flash-circle fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        flash-circle </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-safe-home fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-safe-home fs-2x"></i> <i
                                                class="ki-outline ki-safe-home fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        safe-home </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-cloud-change fs-2x"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span></i> <i
                                                class="ki-solid ki-cloud-change fs-2x"></i> <i
                                                class="ki-outline ki-cloud-change fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        cloud-change </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-crown fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-crown fs-2x"></i>
                                            <i class="ki-outline ki-crown fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        crown </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-filter-edit fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-filter-edit fs-2x"></i> <i
                                                class="ki-outline ki-filter-edit fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        filter-edit </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-picture fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-picture fs-2x"></i>
                                            <i class="ki-outline ki-picture fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        picture </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-verify fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-verify fs-2x"></i>
                                            <i class="ki-outline ki-verify fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        verify </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-send fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-send fs-2x"></i> <i
                                                class="ki-outline ki-send fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        send </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-tag-cross fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-tag-cross fs-2x"></i> <i
                                                class="ki-outline ki-tag-cross fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        tag-cross </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-cloud-add fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-cloud-add fs-2x"></i> <i
                                                class="ki-outline ki-cloud-add fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        cloud-add </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-home-3 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-home-3 fs-2x"></i>
                                            <i class="ki-outline ki-home-3 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        home-3 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-disk fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-disk fs-2x"></i> <i
                                                class="ki-outline ki-disk fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        disk </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-trash fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span><span class="path5"></span></i> <i
                                                class="ki-solid ki-trash fs-2x"></i> <i
                                                class="ki-outline ki-trash fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="5">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        trash </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-star fs-2x"></i> <i
                                                class="ki-solid ki-star fs-2x"></i> <i
                                                class="ki-outline ki-star fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="0">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        star </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-cd fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-cd fs-2x"></i> <i
                                                class="ki-outline ki-cd fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        cd </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-home-2 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-home-2 fs-2x"></i>
                                            <i class="ki-outline ki-home-2 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        home-2 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-mouse-circle fs-2x"><span
                                                    class="path1"></span><span class="path2"></span></i> <i
                                                class="ki-solid ki-mouse-circle fs-2x"></i> <i
                                                class="ki-outline ki-mouse-circle fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        mouse-circle </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-home-1 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-home-1 fs-2x"></i>
                                            <i class="ki-outline ki-home-1 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        home-1 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-call fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span><span class="path5"></span><span
                                                    class="path6"></span><span class="path7"></span><span
                                                    class="path8"></span></i> <i class="ki-solid ki-call fs-2x"></i> <i
                                                class="ki-outline ki-call fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="8">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        call </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-gift fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></i> <i class="ki-solid ki-gift fs-2x"></i> <i
                                                class="ki-outline ki-gift fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="4">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        gift </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-share fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span><span class="path5"></span><span
                                                    class="path6"></span></i> <i class="ki-solid ki-share fs-2x"></i>
                                            <i class="ki-outline ki-share fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="6">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        share </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-sort fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></i> <i class="ki-solid ki-sort fs-2x"></i> <i
                                                class="ki-outline ki-sort fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="4">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        sort </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-magnifier fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-magnifier fs-2x"></i> <i
                                                class="ki-outline ki-magnifier fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        magnifier </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-filter-square fs-2x"><span
                                                    class="path1"></span><span class="path2"></span></i> <i
                                                class="ki-solid ki-filter-square fs-2x"></i> <i
                                                class="ki-outline ki-filter-square fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        filter-square </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-tree fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-tree fs-2x"></i> <i
                                                class="ki-outline ki-tree fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        tree </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-filter fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-filter fs-2x"></i>
                                            <i class="ki-outline ki-filter fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        filter </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-switch fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-switch fs-2x"></i>
                                            <i class="ki-outline ki-switch fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        switch </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-cloud fs-2x"></i> <i
                                                class="ki-solid ki-cloud fs-2x"></i> <i
                                                class="ki-outline ki-cloud fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="0">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        cloud </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-cup fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-cup fs-2x"></i> <i
                                                class="ki-outline ki-cup fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        cup </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-diamonds fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-diamonds fs-2x"></i> <i
                                                class="ki-outline ki-diamonds fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        diamonds </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-status fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-status fs-2x"></i> <i
                                                class="ki-outline ki-status fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        status </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-rocket fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-rocket fs-2x"></i>
                                            <i class="ki-outline ki-rocket fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        rocket </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-cloud-download fs-2x"><span
                                                    class="path1"></span><span class="path2"></span></i> <i
                                                class="ki-solid ki-cloud-download fs-2x"></i> <i
                                                class="ki-outline ki-cloud-download fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        cloud-download </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-menu fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></i> <i class="ki-solid ki-menu fs-2x"></i> <i
                                                class="ki-outline ki-menu fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="4">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        menu </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-chrome fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-chrome fs-2x"></i>
                                            <i class="ki-outline ki-chrome fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        chrome </span>
                                </div>
                            </div>
                            <!--end::Category-->
                            <h1 class="fs-1 fw-bolder text-gray-900 mb-6">
                                Location </h1>

                            <!--begin::Category-->
                            <div class="row mb-10">
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-geolocation-home fs-2x"><span
                                                    class="path1"></span><span class="path2"></span></i> <i
                                                class="ki-solid ki-geolocation-home fs-2x"></i> <i
                                                class="ki-outline ki-geolocation-home fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        geolocation-home </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-map fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-map fs-2x"></i> <i
                                                class="ki-outline ki-map fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        map </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-telephone-geolocation fs-2x"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span></i> <i
                                                class="ki-solid ki-telephone-geolocation fs-2x"></i> <i
                                                class="ki-outline ki-telephone-geolocation fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        telephone-geolocation </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-satellite fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span><span class="path5"></span><span
                                                    class="path6"></span></i> <i
                                                class="ki-solid ki-satellite fs-2x"></i> <i
                                                class="ki-outline ki-satellite fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="6">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        satellite </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-flag fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-flag fs-2x"></i> <i
                                                class="ki-outline ki-flag fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        flag </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-focus fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-focus fs-2x"></i>
                                            <i class="ki-outline ki-focus fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        focus </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-pointers fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-pointers fs-2x"></i> <i
                                                class="ki-outline ki-pointers fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        pointers </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-compass fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-compass fs-2x"></i>
                                            <i class="ki-outline ki-compass fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        compass </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-route fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></i> <i class="ki-solid ki-route fs-2x"></i>
                                            <i class="ki-outline ki-route fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="4">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        route </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-geolocation fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-geolocation fs-2x"></i> <i
                                                class="ki-outline ki-geolocation fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        geolocation </span>
                                </div>
                            </div>
                            <!--end::Category-->
                            <h1 class="fs-1 fw-bolder text-gray-900 mb-6">
                                Education </h1>

                            <!--begin::Category-->
                            <div class="row mb-10">
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-brifecase-timer fs-2x"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span></i> <i
                                                class="ki-solid ki-brifecase-timer fs-2x"></i> <i
                                                class="ki-outline ki-brifecase-timer fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        brifecase-timer </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-briefcase fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-briefcase fs-2x"></i> <i
                                                class="ki-outline ki-briefcase fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        briefcase </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-clipboard fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-clipboard fs-2x"></i> <i
                                                class="ki-outline ki-clipboard fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        clipboard </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-bookmark-2 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-bookmark-2 fs-2x"></i> <i
                                                class="ki-outline ki-bookmark-2 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        bookmark-2 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-note fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-note fs-2x"></i> <i
                                                class="ki-outline ki-note fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        note </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-note-2 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></i> <i class="ki-solid ki-note-2 fs-2x"></i>
                                            <i class="ki-outline ki-note-2 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="4">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        note-2 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-book-open fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></i> <i
                                                class="ki-solid ki-book-open fs-2x"></i> <i
                                                class="ki-outline ki-book-open fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="4">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        book-open </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-book fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></i> <i class="ki-solid ki-book fs-2x"></i> <i
                                                class="ki-outline ki-book fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="4">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        book </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-teacher fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-teacher fs-2x"></i>
                                            <i class="ki-outline ki-teacher fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        teacher </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-award fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-award fs-2x"></i> <i
                                                class="ki-outline ki-award fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        award </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-brifecase-tick fs-2x"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span></i> <i
                                                class="ki-solid ki-brifecase-tick fs-2x"></i> <i
                                                class="ki-outline ki-brifecase-tick fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        brifecase-tick </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-brifecase-cros fs-2x"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span></i> <i
                                                class="ki-solid ki-brifecase-cros fs-2x"></i> <i
                                                class="ki-outline ki-brifecase-cros fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        brifecase-cros </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-bookmark fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-bookmark fs-2x"></i> <i
                                                class="ki-outline ki-bookmark fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        bookmark </span>
                                </div>
                            </div>
                            <!--end::Category-->
                            <h1 class="fs-1 fw-bolder text-gray-900 mb-6">
                                Business </h1>

                            <!--begin::Category-->
                            <div class="row mb-10">
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-chart-line fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-chart-line fs-2x"></i> <i
                                                class="ki-outline ki-chart-line fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        chart-line </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-chart fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-chart fs-2x"></i>
                                            <i class="ki-outline ki-chart fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        chart </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-graph-3 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-graph-3 fs-2x"></i>
                                            <i class="ki-outline ki-graph-3 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        graph-3 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-chart-pie-3 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-chart-pie-3 fs-2x"></i> <i
                                                class="ki-outline ki-chart-pie-3 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        chart-pie-3 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-graph-2 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-graph-2 fs-2x"></i> <i
                                                class="ki-outline ki-graph-2 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        graph-2 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-chart-line-down fs-2x"><span
                                                    class="path1"></span><span class="path2"></span></i> <i
                                                class="ki-solid ki-chart-line-down fs-2x"></i> <i
                                                class="ki-outline ki-chart-line-down fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        chart-line-down </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-chart-pie-too fs-2x"><span
                                                    class="path1"></span><span class="path2"></span></i> <i
                                                class="ki-solid ki-chart-pie-too fs-2x"></i> <i
                                                class="ki-outline ki-chart-pie-too fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        chart-pie-too </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-chart-pie-4 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-chart-pie-4 fs-2x"></i> <i
                                                class="ki-outline ki-chart-pie-4 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        chart-pie-4 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-chart-line-down-2 fs-2x"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span></i> <i
                                                class="ki-solid ki-chart-line-down-2 fs-2x"></i> <i
                                                class="ki-outline ki-chart-line-down-2 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        chart-line-down-2 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-graph-4 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-graph-4 fs-2x"></i>
                                            <i class="ki-outline ki-graph-4 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        graph-4 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-chart-line-up-2 fs-2x"><span
                                                    class="path1"></span><span class="path2"></span></i> <i
                                                class="ki-solid ki-chart-line-up-2 fs-2x"></i> <i
                                                class="ki-outline ki-chart-line-up-2 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        chart-line-up-2 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-badge fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span><span class="path5"></span></i> <i
                                                class="ki-solid ki-badge fs-2x"></i> <i
                                                class="ki-outline ki-badge fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="5">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        badge </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-chart-line-up fs-2x"><span
                                                    class="path1"></span><span class="path2"></span></i> <i
                                                class="ki-solid ki-chart-line-up fs-2x"></i> <i
                                                class="ki-outline ki-chart-line-up fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        chart-line-up </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-chart-simple-3 fs-2x"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span><span class="path4"></span></i> <i
                                                class="ki-solid ki-chart-simple-3 fs-2x"></i> <i
                                                class="ki-outline ki-chart-simple-3 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="4">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        chart-simple-3 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-chart-pie-simple fs-2x"><span
                                                    class="path1"></span><span class="path2"></span></i> <i
                                                class="ki-solid ki-chart-pie-simple fs-2x"></i> <i
                                                class="ki-outline ki-chart-pie-simple fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        chart-pie-simple </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-chart-simple-2 fs-2x"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span><span class="path4"></span></i> <i
                                                class="ki-solid ki-chart-simple-2 fs-2x"></i> <i
                                                class="ki-outline ki-chart-simple-2 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="4">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        chart-simple-2 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-graph-up fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span><span class="path5"></span><span
                                                    class="path6"></span></i> <i
                                                class="ki-solid ki-graph-up fs-2x"></i> <i
                                                class="ki-outline ki-graph-up fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="6">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        graph-up </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-chart-line-star fs-2x"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span></i> <i
                                                class="ki-solid ki-chart-line-star fs-2x"></i> <i
                                                class="ki-outline ki-chart-line-star fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        chart-line-star </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-graph fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></i> <i class="ki-solid ki-graph fs-2x"></i>
                                            <i class="ki-outline ki-graph fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="4">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        graph </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-chart-simple fs-2x"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span><span class="path4"></span></i> <i
                                                class="ki-solid ki-chart-simple fs-2x"></i> <i
                                                class="ki-outline ki-chart-simple fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="4">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        chart-simple </span>
                                </div>
                            </div>
                            <!--end::Category-->
                            <h1 class="fs-1 fw-bolder text-gray-900 mb-6">
                                Files Folders </h1>

                            <!--begin::Category-->
                            <div class="row mb-10">
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-tablet-delete fs-2x"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span></i> <i
                                                class="ki-solid ki-tablet-delete fs-2x"></i> <i
                                                class="ki-outline ki-tablet-delete fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        tablet-delete </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-file-added fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-file-added fs-2x"></i> <i
                                                class="ki-outline ki-file-added fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        file-added </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-file-up fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-file-up fs-2x"></i>
                                            <i class="ki-outline ki-file-up fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        file-up </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-minus-folder fs-2x"><span
                                                    class="path1"></span><span class="path2"></span></i> <i
                                                class="ki-solid ki-minus-folder fs-2x"></i> <i
                                                class="ki-outline ki-minus-folder fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        minus-folder </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-file fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-file fs-2x"></i> <i
                                                class="ki-outline ki-file fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        file </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-delete-files fs-2x"><span
                                                    class="path1"></span><span class="path2"></span></i> <i
                                                class="ki-solid ki-delete-files fs-2x"></i> <i
                                                class="ki-outline ki-delete-files fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        delete-files </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-add-folder fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-add-folder fs-2x"></i> <i
                                                class="ki-outline ki-add-folder fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        add-folder </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-file-left fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-file-left fs-2x"></i> <i
                                                class="ki-outline ki-file-left fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        file-left </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-file-deleted fs-2x"><span
                                                    class="path1"></span><span class="path2"></span></i> <i
                                                class="ki-solid ki-file-deleted fs-2x"></i> <i
                                                class="ki-outline ki-file-deleted fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        file-deleted </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-some-files fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-some-files fs-2x"></i> <i
                                                class="ki-outline ki-some-files fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        some-files </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-file-right fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-file-right fs-2x"></i> <i
                                                class="ki-outline ki-file-right fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        file-right </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-notepad fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span><span class="path5"></span></i> <i
                                                class="ki-solid ki-notepad fs-2x"></i> <i
                                                class="ki-outline ki-notepad fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="5">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        notepad </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-notepad-bookmark fs-2x"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span><span class="path4"></span><span
                                                    class="path5"></span><span class="path6"></span></i> <i
                                                class="ki-solid ki-notepad-bookmark fs-2x"></i> <i
                                                class="ki-outline ki-notepad-bookmark fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="6">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        notepad-bookmark </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-document fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-document fs-2x"></i> <i
                                                class="ki-outline ki-document fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        document </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-like-folder fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-like-folder fs-2x"></i> <i
                                                class="ki-outline ki-like-folder fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        like-folder </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-folder-up fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-folder-up fs-2x"></i> <i
                                                class="ki-outline ki-folder-up fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        folder-up </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-folder-added fs-2x"><span
                                                    class="path1"></span><span class="path2"></span></i> <i
                                                class="ki-solid ki-folder-added fs-2x"></i> <i
                                                class="ki-outline ki-folder-added fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        folder-added </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-file-down fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-file-down fs-2x"></i> <i
                                                class="ki-outline ki-file-down fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        file-down </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-filter-tablet fs-2x"><span
                                                    class="path1"></span><span class="path2"></span></i> <i
                                                class="ki-solid ki-filter-tablet fs-2x"></i> <i
                                                class="ki-outline ki-filter-tablet fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        filter-tablet </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-tablet-book fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-tablet-book fs-2x"></i> <i
                                                class="ki-outline ki-tablet-book fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        tablet-book </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-update-file fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></i> <i
                                                class="ki-solid ki-update-file fs-2x"></i> <i
                                                class="ki-outline ki-update-file fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="4">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        update-file </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-add-notepad fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></i> <i
                                                class="ki-solid ki-add-notepad fs-2x"></i> <i
                                                class="ki-outline ki-add-notepad fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="4">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        add-notepad </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-questionnaire-tablet fs-2x"><span
                                                    class="path1"></span><span class="path2"></span></i> <i
                                                class="ki-solid ki-questionnaire-tablet fs-2x"></i> <i
                                                class="ki-outline ki-questionnaire-tablet fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        questionnaire-tablet </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-tablet-up fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-tablet-up fs-2x"></i> <i
                                                class="ki-outline ki-tablet-up fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        tablet-up </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-tablet-ok fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-tablet-ok fs-2x"></i> <i
                                                class="ki-outline ki-tablet-ok fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        tablet-ok </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-update-folder fs-2x"><span
                                                    class="path1"></span><span class="path2"></span></i> <i
                                                class="ki-solid ki-update-folder fs-2x"></i> <i
                                                class="ki-outline ki-update-folder fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        update-folder </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-files-tablet fs-2x"><span
                                                    class="path1"></span><span class="path2"></span></i> <i
                                                class="ki-solid ki-files-tablet fs-2x"></i> <i
                                                class="ki-outline ki-files-tablet fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        files-tablet </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-folder-down fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-folder-down fs-2x"></i> <i
                                                class="ki-outline ki-folder-down fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        folder-down </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-notepad-edit fs-2x"><span
                                                    class="path1"></span><span class="path2"></span></i> <i
                                                class="ki-solid ki-notepad-edit fs-2x"></i> <i
                                                class="ki-outline ki-notepad-edit fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        notepad-edit </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-tablet-text-up fs-2x"><span
                                                    class="path1"></span><span class="path2"></span></i> <i
                                                class="ki-solid ki-tablet-text-up fs-2x"></i> <i
                                                class="ki-outline ki-tablet-text-up fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        tablet-text-up </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-search-list fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-search-list fs-2x"></i> <i
                                                class="ki-outline ki-search-list fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        search-list </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-tablet-text-down fs-2x"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span><span class="path4"></span></i> <i
                                                class="ki-solid ki-tablet-text-down fs-2x"></i> <i
                                                class="ki-outline ki-tablet-text-down fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="4">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        tablet-text-down </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-add-files fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-add-files fs-2x"></i> <i
                                                class="ki-outline ki-add-files fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        add-files </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-tablet-down fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-tablet-down fs-2x"></i> <i
                                                class="ki-outline ki-tablet-down fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        tablet-down </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-delete-folder fs-2x"><span
                                                    class="path1"></span><span class="path2"></span></i> <i
                                                class="ki-solid ki-delete-folder fs-2x"></i> <i
                                                class="ki-outline ki-delete-folder fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        delete-folder </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-folder fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-folder fs-2x"></i>
                                            <i class="ki-outline ki-folder fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        folder </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-file-sheet fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-file-sheet fs-2x"></i> <i
                                                class="ki-outline ki-file-sheet fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        file-sheet </span>
                                </div>
                            </div>
                            <!--end::Category-->
                            <h1 class="fs-1 fw-bolder text-gray-900 mb-6">
                                Software </h1>

                            <!--begin::Category-->
                            <div class="row mb-10">
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-bootstrap fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-bootstrap fs-2x"></i> <i
                                                class="ki-outline ki-bootstrap fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        bootstrap </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-figma fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span><span class="path5"></span></i> <i
                                                class="ki-solid ki-figma fs-2x"></i> <i
                                                class="ki-outline ki-figma fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="5">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        figma </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-dropbox fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span><span class="path5"></span></i> <i
                                                class="ki-solid ki-dropbox fs-2x"></i> <i
                                                class="ki-outline ki-dropbox fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="5">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        dropbox </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-xaomi fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-xaomi fs-2x"></i>
                                            <i class="ki-outline ki-xaomi fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        xaomi </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-microsoft fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></i> <i
                                                class="ki-solid ki-microsoft fs-2x"></i> <i
                                                class="ki-outline ki-microsoft fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="4">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        microsoft </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-android fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span><span class="path5"></span><span
                                                    class="path6"></span></i> <i class="ki-solid ki-android fs-2x"></i>
                                            <i class="ki-outline ki-android fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="6">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        android </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-vue fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-vue fs-2x"></i> <i
                                                class="ki-outline ki-vue fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        vue </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-js fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-js fs-2x"></i> <i
                                                class="ki-outline ki-js fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        js </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-spring-framework fs-2x"></i> <i
                                                class="ki-solid ki-spring-framework fs-2x"></i> <i
                                                class="ki-outline ki-spring-framework fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="0">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        spring-framework </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-github fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-github fs-2x"></i>
                                            <i class="ki-outline ki-github fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        github </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-dj fs-2x"></i> <i class="ki-solid ki-dj fs-2x"></i>
                                            <i class="ki-outline ki-dj fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="0">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        dj </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-google-play fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-google-play fs-2x"></i> <i
                                                class="ki-outline ki-google-play fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        google-play </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-angular fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-angular fs-2x"></i> <i
                                                class="ki-outline ki-angular fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        angular </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-soft-3 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-soft-3 fs-2x"></i>
                                            <i class="ki-outline ki-soft-3 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        soft-3 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-python fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-python fs-2x"></i>
                                            <i class="ki-outline ki-python fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        python </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-soft-2 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-soft-2 fs-2x"></i>
                                            <i class="ki-outline ki-soft-2 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        soft-2 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-ts fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-ts fs-2x"></i> <i class="ki-outline ki-ts fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        ts </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-xd fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-xd fs-2x"></i> <i class="ki-outline ki-xd fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        xd </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-spotify fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-spotify fs-2x"></i>
                                            <i class="ki-outline ki-spotify fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        spotify </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-js-2 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-js-2 fs-2x"></i> <i
                                                class="ki-outline ki-js-2 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        js-2 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-laravel fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span><span class="path5"></span><span
                                                    class="path6"></span><span class="path7"></span></i> <i
                                                class="ki-solid ki-laravel fs-2x"></i> <i
                                                class="ki-outline ki-laravel fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="7">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        laravel </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-css fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-css fs-2x"></i> <i
                                                class="ki-outline ki-css fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        css </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-google fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-google fs-2x"></i>
                                            <i class="ki-outline ki-google fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        google </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-photoshop fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-photoshop fs-2x"></i> <i
                                                class="ki-outline ki-photoshop fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        photoshop </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-twitch fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-twitch fs-2x"></i> <i
                                                class="ki-outline ki-twitch fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        twitch </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-illustrator fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></i> <i
                                                class="ki-solid ki-illustrator fs-2x"></i> <i
                                                class="ki-outline ki-illustrator fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="4">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        illustrator </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-pails fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span><span class="path5"></span><span
                                                    class="path6"></span><span class="path7"></span><span
                                                    class="path8"></span><span class="path9"></span></i> <i
                                                class="ki-solid ki-pails fs-2x"></i> <i
                                                class="ki-outline ki-pails fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="9">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        pails </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-react fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-react fs-2x"></i>
                                            <i class="ki-outline ki-react fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        react </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-html fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-html fs-2x"></i> <i
                                                class="ki-outline ki-html fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        html </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-slack fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span><span class="path5"></span><span
                                                    class="path6"></span><span class="path7"></span><span
                                                    class="path8"></span></i> <i class="ki-solid ki-slack fs-2x"></i>
                                            <i class="ki-outline ki-slack fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="8">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        slack </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-soft fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span><span class="path5"></span><span
                                                    class="path6"></span></i> <i class="ki-solid ki-soft fs-2x"></i> <i
                                                class="ki-outline ki-soft fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="6">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        soft </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-yii fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-yii fs-2x"></i> <i
                                                class="ki-outline ki-yii fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        yii </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-apple fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-apple fs-2x"></i>
                                            <i class="ki-outline ki-apple fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        apple </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-vuesax fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-vuesax fs-2x"></i> <i
                                                class="ki-outline ki-vuesax fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        vuesax </span>
                                </div>
                            </div>
                            <!--end::Category-->
                            <h1 class="fs-1 fw-bolder text-gray-900 mb-6">
                                Time </h1>

                            <!--begin::Category-->
                            <div class="row mb-10">
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-calendar-add fs-2x"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span><span class="path4"></span><span
                                                    class="path5"></span><span class="path6"></span></i> <i
                                                class="ki-solid ki-calendar-add fs-2x"></i> <i
                                                class="ki-outline ki-calendar-add fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="6">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        calendar-add </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-calendar-search fs-2x"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span><span class="path4"></span></i> <i
                                                class="ki-solid ki-calendar-search fs-2x"></i> <i
                                                class="ki-outline ki-calendar-search fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="4">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        calendar-search </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-calendar-2 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span><span class="path5"></span></i> <i
                                                class="ki-solid ki-calendar-2 fs-2x"></i> <i
                                                class="ki-outline ki-calendar-2 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="5">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        calendar-2 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-calendar-tick fs-2x"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span><span class="path4"></span><span
                                                    class="path5"></span><span class="path6"></span></i> <i
                                                class="ki-solid ki-calendar-tick fs-2x"></i> <i
                                                class="ki-outline ki-calendar-tick fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="6">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        calendar-tick </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-time fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-time fs-2x"></i> <i
                                                class="ki-outline ki-time fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        time </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-watch fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i class="ki-solid ki-watch fs-2x"></i>
                                            <i class="ki-outline ki-watch fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        watch </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-calendar-edit fs-2x"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span></i> <i
                                                class="ki-solid ki-calendar-edit fs-2x"></i> <i
                                                class="ki-outline ki-calendar-edit fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        calendar-edit </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-calendar fs-2x"><span class="path1"></span><span
                                                    class="path2"></span></i> <i
                                                class="ki-solid ki-calendar fs-2x"></i> <i
                                                class="ki-outline ki-calendar fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="2">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        calendar </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-calendar-8 fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span><span class="path5"></span><span
                                                    class="path6"></span></i> <i
                                                class="ki-solid ki-calendar-8 fs-2x"></i> <i
                                                class="ki-outline ki-calendar-8 fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="6">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        calendar-8 </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-timer fs-2x"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> <i
                                                class="ki-solid ki-timer fs-2x"></i> <i
                                                class="ki-outline ki-timer fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="3">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        timer </span>
                                </div>
                                <div class="col-md-3 col-lg-2 text-center mb-6" data-kt-icon-preview="true">
                                    <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                                        <div class="overlay-wrapper text-gray-600">
                                            <i class="ki-duotone ki-calendar-remove fs-2x"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span><span class="path4"></span><span
                                                    class="path5"></span><span class="path6"></span></i> <i
                                                class="ki-solid ki-calendar-remove fs-2x"></i> <i
                                                class="ki-outline ki-calendar-remove fs-2x"></i>
                                        </div>
                                        <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                                            <button class="btn btn-primary btn-sm" data-kt-icon-use="true"
                                                data-kt-icon-paths="6">
                                                Use
                                            </button>
                                        </div>
                                    </div>

                                    <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                                        calendar-remove </span>
                                </div>
                            </div>
                            <!--end::Category-->
                            <h1 class="fs-1 fw-bolder text-gray-900 mb-6">
                                Support </h1>

                            <!--begin::Category-->
                            @include('pages.docs.icons.keenicons._support')
                            <!--end::Category-->
                            <h1 class="fs-1 fw-bolder text-gray-900 mb-6">
                                Users </h1>

                            <!--begin::Category-->
                            @include('pages.docs.icons.keenicons._users')
                            <!--end::Category-->
                            <h1 class="fs-1 fw-bolder text-gray-900 mb-6">
                                Medicine </h1>

                            <!--begin::Category-->
                            @include('pages.docs.icons.keenicons._medicine')
                            <!--end::Category-->
                            <h1 class="fs-1 fw-bolder text-gray-900 mb-6">
                                Burger Menu </h1>

                            <!--begin::Category-->
                            @include('pages.docs.icons.keenicons._burger_menu')
                            <!--end::Category-->
                            <h1 class="fs-1 fw-bolder text-gray-900 mb-6">
                                Typography </h1>

                            <!--begin::Category-->
                            @include('pages.docs.icons.keenicons._typography')
                            <!--end::Category-->
                            <h1 class="fs-1 fw-bolder text-gray-900 mb-6">
                                Finance </h1>

                            <!--begin::Category-->
                            @include('pages.docs.icons.keenicons._finance')
                            <!--end::Category-->
                            <h1 class="fs-1 fw-bolder text-gray-900 mb-6">
                                Weather </h1>

                            <!--begin::Category-->
                            @include('pages.docs.icons.keenicons._weather')
                            <!--end::Category-->
                            <h1 class="fs-1 fw-bolder text-gray-900 mb-6">
                                Arrows </h1>

                            <!--begin::Category-->
                            @include('pages.docs.icons.keenicons._arrows')
                            <!--end::Category-->
                            <h1 class="fs-1 fw-bolder text-gray-900 mb-6">
                                Communication </h1>

                            <!--begin::Category-->
                            @include('pages.docs.icons.keenicons._communication')
                            <!--end::Category-->
                            <h1 class="fs-1 fw-bolder text-gray-900 mb-6">
                                Notifications </h1>

                            <!--begin::Category-->
                            @include('pages.docs.icons.keenicons._notifications')
                            <!--end::Category-->
                            <h1 class="fs-1 fw-bolder text-gray-900 mb-6">Delivery And Logistics</h1>
                            <!--begin::Category-->
                            @include('pages.docs.icons.keenicons._delivery_logistics')
                            <!--end::Category-->
                            <h1 class="fs-1 fw-bolder text-gray-900 mb-6">Devices</h1>
                            <!--begin::Category-->
                            @include('pages.docs.icons.keenicons._device')
                            <!--end::Category-->
                            <h1 class="fs-1 fw-bolder text-gray-900 mb-6">Grid</h1>
                            <!--begin::Category-->
                            @include('pages.docs.icons.keenicons._grid')
                            <!--end::Category-->
                        </div>
                        <!--end::Listing-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Use modal-->
                    <div class="modal fade" id="kt_keenicons_use">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header py-5">
                                    <h5 class="modal-title m-0" id="kt_keenicons_use_title"></h5>

                                    <!--begin::Close-->
                                    <button class="btn btn-sm btn-color-muted btn-active-color-primary mt-n1 me-n7"
                                        data-bs-dismiss="modal">
                                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                                class="path2"></span></i> </button>
                                    <!--end::Close-->
                                </div>

                                <div class="modal-body py-8">
                                    <pre class="bg-light bg-opacity-75 rounded p-5 m-0" id="kt_keenicons_use_code"></pre>

                                    <button id="kt_keenicons_use_code_copy"
                                        data-clipboard-target="#kt_keenicons_use_code"
                                        class="btn btn-icon btn-color-gray-500 btn-active-color-primary btn-sm position-absolute top-0 end-0 mt-9 me-8">
                                        <i class="ki-duotone ki-copy fs-3"></i> <i
                                            class="ki-duotone ki-check fs-3 d-none"></i> </button>
                                </div>

                                <div class="modal-footer py-5">
                                    <button type="button" class="btn btn-light"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Use modal-->
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
                                    <span class="menu-title">Ugage</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#styles" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Styles</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#colors" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Colors</span>
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
                                <a href="#listing" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Listing</span>
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


