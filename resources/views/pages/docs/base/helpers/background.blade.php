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
                        <h1 class="anchor fw-bold mb-5" id="bg-colors" data-kt-scroll-offset="50">
                            <a href="#bg-colors"></a>

                            Background Colors
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Easily set the background of an element to any contextual class as shown below:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">

                                <p class="bg-light text-inverse-light p-3 fw-semibold fw-6">
                                    .bg-light </p>


                                <p class="bg-primary text-inverse-primary p-3 fw-semibold fw-6">
                                    .bg-primary </p>


                                <p class="bg-secondary text-inverse-secondary p-3 fw-semibold fw-6">
                                    .bg-secondary </p>


                                <p class="bg-success text-inverse-success p-3 fw-semibold fw-6">
                                    .bg-success </p>


                                <p class="bg-info text-inverse-info p-3 fw-semibold fw-6">
                                    .bg-info </p>


                                <p class="bg-warning text-inverse-warning p-3 fw-semibold fw-6">
                                    .bg-warning </p>


                                <p class="bg-danger text-inverse-danger p-3 fw-semibold fw-6">
                                    .bg-danger </p>


                                <p class="bg-dark text-inverse-dark p-3 fw-semibold fw-6">
                                    .bg-dark </p>


                                <p class="bg-white text-inverse-white p-3 fw-semibold fw-6">
                                    .bg-white </p>


                                <p class="bg-body text-inverse-body p-3 fw-semibold fw-6">
                                    .bg-body </p>

                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;bg-light&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-primary&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-secondary&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-success&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-info&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-warning&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-danger&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-dark&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-white&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-body&quot;&gt;&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="light-bg-colors" data-kt-scroll-offset="50">
                            <a href="#light-bg-colors"></a>

                            Light Background Colors
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.bg-light-{color}</code> class to set an element's light background color
                            defined with <code>$theme-light-colors</code> in <code>sass/_variables.scss</code>:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <p class="bg-light-primary text-primary p-3 fw-semibold fw-6">.bg-light-primary</p>

                                <p class="bg-light-secondary text-secondary p-3 fw-semibold fw-6">
                                    .bg-light-secondary</p>

                                <p class="bg-light-success text-success p-3 fw-semibold fw-6">.bg-light-success</p>

                                <p class="bg-light-info text-info p-3 fw-semibold fw-6">.bg-light-info</p>

                                <p class="bg-light-warning text-warning p-3 fw-semibold fw-6">.bg-light-warning</p>

                                <p class="bg-light-danger text-danger p-3 fw-semibold fw-6">.bg-light-danger</p>

                                <p class="bg-light-dark text-dark p-3 fw-semibold fw-6">.bg-light-dark</p>

                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;bg-light-primary text-primary&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-light-secondary text-secondary&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-light-success text-success&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-light-info text-info&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-light-warning text-warning&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-light-danger text-danger&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-light-dark text-dark&quot;&gt;&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="active-bg-colors" data-kt-scroll-offset="50">
                            <a href="#active-bg-colors"></a>

                            Active Background Colors
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.bg-active-{color}</code> class to toggle an element's active background color
                            state with <code>.active</code> class:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">

                                <p class="bg-active-light text-active-inverse-light active p-3 fw-semibold fw-6">
                                    .bg-active-light</p>


                                <p class="bg-active-primary text-active-inverse-primary active p-3 fw-semibold fw-6">
                                    .bg-active-primary</p>


                                <p class="bg-active-secondary text-active-inverse-secondary active p-3 fw-semibold fw-6">
                                    .bg-active-secondary</p>


                                <p class="bg-active-success text-active-inverse-success active p-3 fw-semibold fw-6">
                                    .bg-active-success</p>


                                <p class="bg-active-info text-active-inverse-info active p-3 fw-semibold fw-6">
                                    .bg-active-info</p>


                                <p class="bg-active-warning text-active-inverse-warning active p-3 fw-semibold fw-6">
                                    .bg-active-warning</p>


                                <p class="bg-active-danger text-active-inverse-danger active p-3 fw-semibold fw-6">
                                    .bg-active-danger</p>


                                <p class="bg-active-dark text-active-inverse-dark active p-3 fw-semibold fw-6">
                                    .bg-active-dark</p>

                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;bg-active-light text-active-inverse-light active&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-active-primary text-active-inverse-primary active&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-active-secondary text-active-inverse-secondary active&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-active-success text-active-inverse-success active&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-active-info text-active-inverse-info active&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-active-warning text-active-inverse-warning active&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-active-danger text-active-inverse-danger active&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-active-dark text-active-inverse-dark active&quot;&gt;&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="hover-bg-colors" data-kt-scroll-offset="50">
                            <a href="#hover-bg-colors"></a>

                            Hover Background Colors
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.bg-hover-{color}</code> class to set an element's hover background color:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <p class="text-gray-600 bg-hover-light text-hover-inverse-light p-3 fw-semibold fw-6">
                                    .bg-hover-light</p>

                                <p class="text-gray-600 bg-hover-primary text-hover-inverse-primary p-3 fw-semibold fw-6">
                                    .bg-hover-primary</p>

                                <p
                                    class="text-gray-600 bg-hover-secondary text-hover-inverse-secondary p-3 fw-semibold fw-6">
                                    .bg-hover-secondary</p>

                                <p class="text-gray-600 bg-hover-success text-hover-inverse-success p-3 fw-semibold fw-6">
                                    .bg-hover-success</p>

                                <p class="text-gray-600 bg-hover-info text-hover-inverse-info p-3 fw-semibold fw-6">
                                    .bg-hover-info</p>

                                <p class="text-gray-600 bg-hover-warning text-hover-inverse-warning p-3 fw-semibold fw-6">
                                    .bg-hover-warning</p>

                                <p class="text-gray-600 bg-hover-danger text-hover-inverse-danger p-3 fw-semibold fw-6">
                                    .bg-hover-danger</p>

                                <p class="text-gray-600 bg-hover-dark text-hover-inverse-dark p-3 fw-semibold fw-6">
                                    .bg-hover-dark</p>

                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;bg-hover-light text-hover-inverse-light&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-hover-primary text-hover-inverse-primary&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-hover-secondary text-hover-inverse-secondary&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-hover-success text-hover-inverse-success&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-hover-info text-hover-inverse-info&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-hover-warning text-hover-inverse-warning&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-hover-danger text-hover-inverse-danger&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-hover-dark text-hover-inverse-dark&quot;&gt;&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="hover-light-bg-colors" data-kt-scroll-offset="50">
                            <a href="#hover-light-bg-colors"></a>

                            Hover Light Background Colors
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.bg-hover-light-{color}</code> class to set an element's hover light
                            background color:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <p class="text-gray-600 bg-hover-light-primary text-hover-primary p-3 fw-semibold fw-6">
                                    .bg-hover-light-primary</p>

                                <p
                                    class="text-gray-600 bg-hover-light-secondary text-hover-secondary p-3 fw-semibold fw-6">
                                    .bg-hover-light-secondary</p>

                                <p class="text-gray-600 bg-hover-light-success text-hover-success p-3 fw-semibold fw-6">
                                    .bg-hover-light-success</p>

                                <p class="text-gray-600 bg-hover-light-info text-hover-info p-3 fw-semibold fw-6">
                                    .bg-hover-light-info</p>

                                <p class="text-gray-600 bg-hover-light-warning text-hover-warning p-3 fw-semibold fw-6">
                                    .bg-hover-light-warning</p>

                                <p class="text-gray-600 bg-hover-light-danger text-hover-danger p-3 fw-semibold fw-6">
                                    .bg-hover-light-danger</p>

                                <p class="text-gray-600 bg-hover-light-dark text-hover-dark p-3 fw-semibold fw-6">
                                    .bg-hover-light-dark</p>

                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;bg-hover-light-primary text-hover-primary&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-hover-light-secondary text-hover-secondary&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-hover-light-success text-hover-success&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-hover-light-info text-hover-info&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-hover-light-warning text-hover-warning&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-hover-light-danger text-hover-danger&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-hover-light-dark text-hover-dark&quot;&gt;&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="opacity" data-kt-scroll-offset="50">
                            <a href="#opacity"></a>

                            Background Opacity
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.bg-opacity-{0, 5, 10, 15, 20, 25, 50, 75, 100}</code> class with
                            <code>.bg-{color}</code>
                            or <code>.bg-light-{color}</code> to set an element's background color with opacity:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10 d-flex flex-wrap">
                                <div class="d-flex flex-column me-5 mb-5">
                                    <div class="w-90px h-90px bg-opacity-0 bg-primary flex-grow-1"></div>
                                    <div class="fw-semibold py-2 w-150px">
                                        bg-opacity-0 </div>
                                </div>
                                <div class="d-flex flex-column me-5 mb-5">
                                    <div class="w-90px h-90px bg-opacity-5 bg-primary flex-grow-1"></div>
                                    <div class="fw-semibold py-2 w-150px">
                                        bg-opacity-5 </div>
                                </div>
                                <div class="d-flex flex-column me-5 mb-5">
                                    <div class="w-90px h-90px bg-opacity-10 bg-primary flex-grow-1"></div>
                                    <div class="fw-semibold py-2 w-150px">
                                        bg-opacity-10 </div>
                                </div>
                                <div class="d-flex flex-column me-5 mb-5">
                                    <div class="w-90px h-90px bg-opacity-15 bg-primary flex-grow-1"></div>
                                    <div class="fw-semibold py-2 w-150px">
                                        bg-opacity-15 </div>
                                </div>
                                <div class="d-flex flex-column me-5 mb-5">
                                    <div class="w-90px h-90px bg-opacity-20 bg-primary flex-grow-1"></div>
                                    <div class="fw-semibold py-2 w-150px">
                                        bg-opacity-20 </div>
                                </div>
                                <div class="d-flex flex-column me-5 mb-5">
                                    <div class="w-90px h-90px bg-opacity-25 bg-primary flex-grow-1"></div>
                                    <div class="fw-semibold py-2 w-150px">
                                        bg-opacity-25 </div>
                                </div>
                                <div class="d-flex flex-column me-5 mb-5">
                                    <div class="w-90px h-90px bg-opacity-50 bg-primary flex-grow-1"></div>
                                    <div class="fw-semibold py-2 w-150px">
                                        bg-opacity-50 </div>
                                </div>
                                <div class="d-flex flex-column me-5 mb-5">
                                    <div class="w-90px h-90px bg-opacity-75 bg-primary flex-grow-1"></div>
                                    <div class="fw-semibold py-2 w-150px">
                                        bg-opacity-75 </div>
                                </div>
                                <div class="d-flex flex-column me-5 mb-5">
                                    <div class="w-90px h-90px bg-opacity-100 bg-primary flex-grow-1"></div>
                                    <div class="fw-semibold py-2 w-150px">
                                        bg-opacity-100 </div>
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
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;bg-opacity-0 bg-primary&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-opacity-5 bg-primary&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-opacity-10 bg-primary&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-opacity-15 bg-primary&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-opacity-20 bg-primary&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-opacity-25 bg-primary&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-opacity-50 bg-primary&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-opacity-75 bg-primary&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-opacity-100 bg-primary&quot;&gt;&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="hover-opacity" data-kt-scroll-offset="50">
                            <a href="#hover-opacity"></a>

                            Hover Background Opacity
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.bg-hover-opacity-{0, 5, 10, 15, 20, 25, 50, 75, 100}</code> class with
                            <code>.bg-{color}</code>
                            or <code>.bg-light-{color}</code> to set an element's background color with opacity on
                            hover:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10 d-flex flex-wrap">
                                <div class="d-flex flex-column me-5 mb-5">
                                    <div class="w-90px h-90px bg-hover-opacity-0 bg-primary flex-grow-1"></div>
                                    <div class="fw-semibold py-2 w-175px">
                                        bg-hover-opacity-0 </div>
                                </div>
                                <div class="d-flex flex-column me-5 mb-5">
                                    <div class="w-90px h-90px bg-hover-opacity-5 bg-primary flex-grow-1"></div>
                                    <div class="fw-semibold py-2 w-175px">
                                        bg-hover-opacity-5 </div>
                                </div>
                                <div class="d-flex flex-column me-5 mb-5">
                                    <div class="w-90px h-90px bg-hover-opacity-10 bg-primary flex-grow-1"></div>
                                    <div class="fw-semibold py-2 w-175px">
                                        bg-hover-opacity-10 </div>
                                </div>
                                <div class="d-flex flex-column me-5 mb-5">
                                    <div class="w-90px h-90px bg-hover-opacity-15 bg-primary flex-grow-1"></div>
                                    <div class="fw-semibold py-2 w-175px">
                                        bg-hover-opacity-15 </div>
                                </div>
                                <div class="d-flex flex-column me-5 mb-5">
                                    <div class="w-90px h-90px bg-hover-opacity-20 bg-primary flex-grow-1"></div>
                                    <div class="fw-semibold py-2 w-175px">
                                        bg-hover-opacity-20 </div>
                                </div>
                                <div class="d-flex flex-column me-5 mb-5">
                                    <div class="w-90px h-90px bg-hover-opacity-25 bg-primary flex-grow-1"></div>
                                    <div class="fw-semibold py-2 w-175px">
                                        bg-hover-opacity-25 </div>
                                </div>
                                <div class="d-flex flex-column me-5 mb-5">
                                    <div class="w-90px h-90px bg-hover-opacity-50 bg-primary flex-grow-1"></div>
                                    <div class="fw-semibold py-2 w-175px">
                                        bg-hover-opacity-50 </div>
                                </div>
                                <div class="d-flex flex-column me-5 mb-5">
                                    <div class="w-90px h-90px bg-hover-opacity-75 bg-primary flex-grow-1"></div>
                                    <div class="fw-semibold py-2 w-175px">
                                        bg-hover-opacity-75 </div>
                                </div>
                                <div class="d-flex flex-column me-5 mb-5">
                                    <div class="w-90px h-90px bg-hover-opacity-100 bg-primary flex-grow-1"></div>
                                    <div class="fw-semibold py-2 w-175px">
                                        bg-hover-opacity-100 </div>
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
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;bg-hover-opacity-0 bg-primary&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-hover-opacity-5 bg-primary&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-hover-opacity-10 bg-primary&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-hover-opacity-15 bg-primary&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-hover-opacity-20 bg-primary&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-hover-opacity-25 bg-primary&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-hover-opacity-50 bg-primary&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-hover-opacity-75 bg-primary&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-hover-opacity-100 bg-primary&quot;&gt;&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="active-opacity" data-kt-scroll-offset="50">
                            <a href="#active-opacity"></a>

                            Active Background Opacity
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.bg-active-opacity-{0, 5, 10, 15, 20, 25, 50, 75, 100}</code> class with
                            <code>.bg-{color}</code>
                            or <code>.bg-light-{color}</code> to set an element's background color with opacity on
                            active state:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10 d-flex flex-wrap">
                                <div class="d-flex flex-column me-5 mb-5">
                                    <div class="w-90px h-90px bg-active-opacity-0 bg-primary active flex-grow-1">
                                    </div>
                                    <div class="fw-semibold py-2 w-175px">
                                        bg-active-opacity-0 </div>
                                </div>
                                <div class="d-flex flex-column me-5 mb-5">
                                    <div class="w-90px h-90px bg-active-opacity-5 bg-primary active flex-grow-1">
                                    </div>
                                    <div class="fw-semibold py-2 w-175px">
                                        bg-active-opacity-5 </div>
                                </div>
                                <div class="d-flex flex-column me-5 mb-5">
                                    <div class="w-90px h-90px bg-active-opacity-10 bg-primary active flex-grow-1">
                                    </div>
                                    <div class="fw-semibold py-2 w-175px">
                                        bg-active-opacity-10 </div>
                                </div>
                                <div class="d-flex flex-column me-5 mb-5">
                                    <div class="w-90px h-90px bg-active-opacity-15 bg-primary active flex-grow-1">
                                    </div>
                                    <div class="fw-semibold py-2 w-175px">
                                        bg-active-opacity-15 </div>
                                </div>
                                <div class="d-flex flex-column me-5 mb-5">
                                    <div class="w-90px h-90px bg-active-opacity-20 bg-primary active flex-grow-1">
                                    </div>
                                    <div class="fw-semibold py-2 w-175px">
                                        bg-active-opacity-20 </div>
                                </div>
                                <div class="d-flex flex-column me-5 mb-5">
                                    <div class="w-90px h-90px bg-active-opacity-25 bg-primary active flex-grow-1">
                                    </div>
                                    <div class="fw-semibold py-2 w-175px">
                                        bg-active-opacity-25 </div>
                                </div>
                                <div class="d-flex flex-column me-5 mb-5">
                                    <div class="w-90px h-90px bg-active-opacity-50 bg-primary active flex-grow-1">
                                    </div>
                                    <div class="fw-semibold py-2 w-175px">
                                        bg-active-opacity-50 </div>
                                </div>
                                <div class="d-flex flex-column me-5 mb-5">
                                    <div class="w-90px h-90px bg-active-opacity-75 bg-primary active flex-grow-1">
                                    </div>
                                    <div class="fw-semibold py-2 w-175px">
                                        bg-active-opacity-75 </div>
                                </div>
                                <div class="d-flex flex-column me-5 mb-5">
                                    <div class="w-90px h-90px bg-active-opacity-100 bg-primary active flex-grow-1">
                                    </div>
                                    <div class="fw-semibold py-2 w-175px">
                                        bg-active-opacity-100 </div>
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
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;bg-active-opacity-0 bg-primary active&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-active-opacity-5 bg-primary active&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-active-opacity-10 bg-primary active&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-active-opacity-15 bg-primary active&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-active-opacity-20 bg-primary active&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-active-opacity-25 bg-primary active&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-active-opacity-50 bg-primary active&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-active-opacity-75 bg-primary active&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg-active-opacity-100 bg-primary active&quot;&gt;&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="bg-image-classes" data-kt-scroll-offset="50">
                            <a href="#bg-image-classes"></a>

                            Background Image Classes
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Assign background image style values to an element with shorthand classes with the
                            format <code>bgi-{property}</code>.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            Where <code>property</code> is one of:
                            <ul class="pt-3">
                                <li class="py-2"><code>no-repeat</code> to set <code>background-repeat:
                                        no-repeat</code></li>
                                <li class="py-2"><code>position-y-top</code> to set <code>background-position-y:
                                        top</code></li>
                                <li class="py-2"><code>position-y-bottom</code> to set
                                    <code>background-position-y: bottom</code>
                                </li>
                                <li class="py-2"><code>position-y-center</code> to set
                                    <code>background-position-y: center</code>
                                </li>
                                <li class="py-2"><code>position-x-start</code> to set
                                    <code>background-position-x: left</code>
                                </li>
                                <li class="py-2"><code>position-x-end</code> to set <code>background-position-x:
                                        right</code></li>
                                <li class="py-2"><code>position-x-center</code> to set
                                    <code>background-position-x: center</code>
                                </li>
                                <li class="py-2"><code>position-bottom</code> to set <code>background-position: 0
                                        bottom</code></li>
                                <li class="py-2"><code>position-center</code> to set <code>background-position:
                                        center</code></li>
                            </ul>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;div style=&quot;background-image: url(image.png)&quot; class=&quot;bgi-no-repeat bgi-position-center&quot;&gt;&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="bg-image-size-classes" data-kt-scroll-offset="50">
                            <a href="#bg-image-size-classes"></a>

                            Background Image Size Classes
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use responsive-friendly background image size style values for an element with shorthand
                            classes with the format <code>.bgi-size-{breakpoint}-{property}</code>.
                            The classes are named using the format <code>.bgi-size-{property}</code> for
                            <code>xs</code> and <code>.bgi-size-{breakpoint}-{property}</code>
                            for <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code>, and
                            <code>xxl</code>.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            Where <code>property</code> is one of:
                            <ul class="pt-3">
                                <li class="py-2"><code>auto</code> to set <code>background-size: auto</code></li>
                                <li class="py-2"><code>cover</code> to set <code>background-size: cover</code>
                                </li>
                                <li class="py-2"><code>contain</code> to set <code>background-size:
                                        contain</code></li>
                            </ul>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;div style=&quot;background-image: url(image.png)&quot; class=&quot;bgi-size-contain bgi-size-lg-auto bgi-no-repeat bgi-position-center&quot;&gt;&lt;/div&gt;</code></pre>
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
                                <a href="#bg-colors" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Background Colors</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#light-bg-colors" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Light Background Colors</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#active-bg-colors" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Active Background Colors</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#hover-bg-colors" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Hover Background Colors</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#hover-light-bg-colors" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Hover Light Background Colors</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#opacity" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Background Opacity</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#hover-opacity" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Hover Background Opacity</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#active-opacity" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Active Background Opacity</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#bg-image-classes" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Background Image Classes</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#bg-image-size-classes" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Background Image Size Classes</span>
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


