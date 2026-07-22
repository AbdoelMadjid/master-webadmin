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
                            Symbol is a custom component for avatars or labels with content colors.
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="avata" data-kt-scroll-offset="50">
                            <a href="#avata"></a>

                            Avatar
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Refer to below example to use Symbol for avatar image display:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10 pb-0 d-flex flex-wrap">
                                <div class="symbol symbol-50px me-10 mb-10">
                                    <img src="assets/media/avatars/300-6.jpg" alt="" />
                                </div>

                                <div class="symbol symbol-50px me-10 mb-10">
                                    <img src="assets/media/avatars/300-1.jpg" alt="" />
                                </div>

                                <div class="symbol symbol-50px me-10 mb-10">
                                    <img src="assets/media/avatars/300-2.jpg" alt="" />
                                </div>

                                <div class="symbol symbol-50px me-10 mb-10">
                                    <img src="assets/media/avatars/300-5.jpg" alt="" />
                                </div>

                                <div class="symbol symbol-50px me-10 mb-10">
                                    <img src="assets/media/avatars/300-20.jpg" alt="" />
                                </div>

                                <div class="symbol symbol-50px me-10 mb-10">
                                    <img src="assets/media/avatars/300-23.jpg" alt="" />
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
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;symbol symbol-50px&quot;&gt;
    &lt;img src=&quot;assets/media/avatars/300-6.jpg&quot; alt=&quot;&quot;/&gt;
&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="background-image" data-kt-scroll-offset="50">
                            <a href="#background-image"></a>

                            Background Image
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Refer to below example to place avatar as background image:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10 pb-0 d-flex flex-wrap">
                                <div class="symbol symbol-50px me-10 mb-10">
                                    <div class="symbol-label"
                                        style="background-image:url('assets/media/avatars/300-12.jpg')">
                                    </div>
                                </div>

                                <div class="symbol symbol-50px me-10 mb-10">
                                    <div class="symbol-label"
                                        style="background-image: url('assets/media/avatars/300-9.jpg')">
                                    </div>
                                </div>

                                <div class="symbol symbol-50px me-10 mb-10">
                                    <div class="symbol-label"
                                        style="background-image: url('assets/media/avatars/300-10.jpg')">
                                    </div>
                                </div>

                                <div class="symbol symbol-50px me-10 mb-10">
                                    <div class="symbol-label"
                                        style="background-image: url('assets/media/avatars/300-21.jpg')">
                                    </div>
                                </div>

                                <div class="symbol symbol-50px me-10 mb-10">
                                    <div class="symbol-label"
                                        style="background-image: url('assets/media/avatars/300-14.jpg')">
                                    </div>
                                </div>

                                <div class="symbol symbol-50px me-10 mb-10">
                                    <div class="symbol-label"
                                        style="background-image: url('assets/media/avatars/300-11.jpg')">
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
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;symbol symbol-50px&quot;&gt;
    &lt;div class=&quot;symbol-label&quot; style=&quot;background-image:url(&#039;assets/media/avatars/300-12.jpg&#039;)&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="ratio" data-kt-scroll-offset="50">
                            <a href="#ratio"></a>

                            Ratio
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.symbol-2by3</code> class to set avatar background image with 2 by 3 ratio:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10 pb-0 d-flex flex-wrap">
                                <div class="symbol symbol-50px symbol-2by3 me-10 mb-10">
                                    <div class="symbol-label"
                                        style="background-image:url('assets/media/avatars/300-6.jpg')">
                                    </div>
                                </div>

                                <div class="symbol symbol-50px symbol-2by3 me-10 mb-10">
                                    <div class="symbol-label"
                                        style="background-image:url('assets/media/avatars/300-1.jpg')">
                                    </div>
                                </div>

                                <div class="symbol symbol-50px symbol-2by3 me-10 mb-10">
                                    <div class="symbol-label"
                                        style="background-image:url('assets/media/avatars/300-2.jpg')">
                                    </div>
                                </div>

                                <div class="symbol symbol-50px symbol-2by3 me-10 mb-10">
                                    <div class="symbol-label"
                                        style="background-image:url('assets/media/avatars/300-5.jpg')">
                                    </div>
                                </div>

                                <div class="symbol symbol-50px symbol-2by3 me-10 mb-10">
                                    <div class="symbol-label"
                                        style="background-image:url('assets/media/avatars/300-20.jpg')">
                                    </div>
                                </div>

                                <div class="symbol symbol-50px symbol-2by3 me-10 mb-10">
                                    <div class="symbol-label"
                                        style="background-image:url('assets/media/avatars/300-23.jpg')">
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
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;symbol symbol-50px symbol-2by3&quot;&gt;
    &lt;img src=&quot;assets/media/avatars/300-6.jpg&quot; alt=&quot;&quot;/&gt;
&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="label" data-kt-scroll-offset="50">
                            <a href="#label"></a>

                            Label
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Set symbol label within <code>.symbol-label</code> element and style it with text and
                            background utility classes:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10 pb-0 d-flex flex-wrap">
                                <div class="symbol symbol-50px me-10 mb-10">
                                    <div class="symbol-label fs-2 fw-semibold text-success">A</div>
                                </div>

                                <div class="symbol symbol-50px me-10 mb-10">
                                    <div class="symbol-label fs-2 fw-semibold bg-danger text-inverse-danger">L
                                    </div>
                                </div>

                                <div class="symbol symbol-50px me-10 mb-10">
                                    <div class="symbol-label fs-2 fw-semibold text-danger">C</div>
                                </div>

                                <div class="symbol symbol-50px me-10 mb-10">
                                    <div class="symbol-label fs-2 fw-semibold bg-primary text-inverse-primary">T
                                    </div>
                                </div>

                                <div class="symbol symbol-50px me-10 mb-10">
                                    <div class="symbol-label fs-2 fw-semibold text-warning">X</div>
                                </div>

                                <div class="symbol symbol-50px me-10 mb-10">
                                    <div class="symbol-label fs-2 fw-semibold bg-info text-inverse-info">S</div>
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
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;symbol symbol-50px&quot;&gt;
    &lt;div class=&quot;symbol-label fs-2 fw-semibold text-success&quot;&gt;A&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;symbol symbol-50px&quot;&gt;
    &lt;div class=&quot;symbol-label fs-2 fw-semibold bg-danger text-inverse-danger&quot;&gt;L&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;symbol symbol-50px&quot;&gt;
    &lt;div class=&quot;symbol-label fs-2 fw-semibold text-danger&quot;&gt;C&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;symbol symbol-50px&quot;&gt;
    &lt;div class=&quot;symbol-label fs-2 fw-semibold bg-primary text-inverse-primary&quot;&gt;T&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;symbol symbol-50px&quot;&gt;
    &lt;div class=&quot;symbol-label fs-2 fw-semibold text-warning&quot;&gt;X&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;symbol symbol-50px&quot;&gt;
    &lt;div class=&quot;symbol-label fs-2 fw-semibold bg-info text-inverse-info&quot;&gt;S&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="badge" data-kt-scroll-offset="50">
                            <a href="#badge"></a>

                            Badge
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Add a badge element using <code>.badge</code> component inside a symbol element:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10 pb-0 d-flex flex-wrap">
                                <div class="symbol symbol-50px me-10 mb-10">
                                    <div class="symbol-label fs-2 fw-semibold">A</div>
                                    <span class="symbol-badge badge badge-circle bg-danger start-100">3</span>
                                </div>

                                <div class="symbol symbol-50px me-10 mb-10">
                                    <div class="symbol-label fs-2 fw-semibold">A</div>
                                    <span class="symbol-badge badge badge-circle bg-success top-100 start-100">3</span>
                                </div>

                                <div class="symbol symbol-50px me-10 mb-10">
                                    <div class="symbol-label fs-2 fw-semibold">A</div>
                                    <span class="symbol-badge badge badge-circle bg-primary start-0">3</span>
                                </div>

                                <div class="symbol symbol-50px me-10 mb-10">
                                    <div class="symbol-label fs-2 fw-semibold">A</div>
                                    <span class="symbol-badge badge badge-circle bg-warning start-0 top-100">3</span>
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
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;symbol symbol-50px&quot;&gt;
    &lt;div class=&quot;symbol-label fs-2 fw-semibold&quot;&gt;A&lt;/div&gt;
    &lt;span class=&quot;symbol-badge badge badge-circle bg-danger start-100&quot;&gt;3&lt;/span&gt;
&lt;/div&gt;

&lt;div class=&quot;symbol symbol-50px&quot;&gt;
    &lt;div class=&quot;symbol-label fs-2 fw-semibold&quot;&gt;A&lt;/div&gt;
    &lt;span class=&quot;symbol-badge badge badge-circle bg-success top-100 start-100&quot;&gt;3&lt;/span&gt;
&lt;/div&gt;

&lt;div class=&quot;symbol symbol-50px&quot;&gt;
    &lt;div class=&quot;symbol-label fs-2 fw-semibold&quot;&gt;A&lt;/div&gt;
    &lt;span class=&quot;symbol-badge badge badge-circle bg-primary start-0&quot;&gt;3&lt;/span&gt;
&lt;/div&gt;

&lt;div class=&quot;symbol symbol-50px&quot;&gt;
    &lt;div class=&quot;symbol-label fs-2 fw-semibold&quot;&gt;A&lt;/div&gt;
    &lt;span class=&quot;symbol-badge badge badge-circle bg-warning start-0 top-100&quot;&gt;3&lt;/span&gt;
&lt;/div&gt;</code></pre>
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
                            Use <code>.symbol-circle</code> and <code>.symbol-square</code> classes to change a
                            symbol element's style:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10 pb-0 d-flex flex-wrap">
                                <div class="symbol symbol-50px me-10 mb-10">
                                    <div class="symbol-label"
                                        style="background-image:url('assets/media/avatars/300-6.jpg')">
                                    </div>
                                </div>

                                <div class="symbol symbol-50px me-10 mb-10">
                                    <div class="symbol-label fs-2 fw-semibold text-success">A</div>
                                </div>

                                <div class="symbol symbol-50px symbol-circle me-10 mb-10">
                                    <div class="symbol-label"
                                        style="background-image:url('assets/media/avatars/300-6.jpg')">
                                    </div>
                                </div>

                                <div class="symbol symbol-50px symbol-circle me-10 mb-10">
                                    <div class="symbol-label fs-2 fw-semibold text-success">A</div>
                                </div>

                                <div class="symbol symbol-50px symbol-square me-10 mb-10">
                                    <div class="symbol-label"
                                        style="background-image:url('assets/media/avatars/300-6.jpg')">
                                    </div>
                                </div>

                                <div class="symbol symbol-50px symbol-square me-10 mb-10">
                                    <div class="symbol-label fs-2 fw-semibold text-success">A</div>
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
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;symbol symbol-50px&quot;&gt;
    &lt;div class=&quot;symbol-label&quot; style=&quot;background-image:url(assets/media/avatars/300-6.jpg)&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;symbol symbol-50px&quot;&gt;
&lt;div class=&quot;symbol-label fs-2 fw-semibold text-success&quot;&gt;A&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;symbol symbol-50px symbol-circle&quot;&gt;
    &lt;div class=&quot;symbol-label&quot; style=&quot;background-image:url(assets/media/avatars/300-6.jpg)&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;symbol symbol-50px symbol-circle&quot;&gt;
    &lt;div class=&quot;symbol-label fs-2 fw-semibold text-success&quot;&gt;A&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;symbol symbol-50px symbol-square&quot;&gt;
    &lt;div class=&quot;symbol-label&quot; style=&quot;background-image:url(assets/media/avatars/300-6.jpg)&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;symbol symbol-50px symbol-square&quot;&gt;
    &lt;div class=&quot;symbol-label fs-2 fw-semibold text-success&quot;&gt;A&lt;/div&gt;
&lt;/div&gt;</code></pre>
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
                            Assign responsive-friendly size to a symbol element with shorthand classes.

                            The classes are named using the format <code>.symbol-{size}</code> for <code>xs</code>
                            and <code>.symbol-{breakpoint}-{size}</code>
                            for <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code>, and
                            <code>xxl</code>.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            Where <code>size</code> is one of:
                            <ul class="pt-3">
                                <li class="py-2"><code>20px</code> - for classes that set height and width to
                                    20px</li>
                                <li class="py-2"><code>25px</code> - for classes that set height and width to
                                    25px</li>
                                <li class="py-2"><code>30px</code> - for classes that set height and width to
                                    30px</li>
                                <li class="py-2"><code>35px</code> - for classes that set height and width to
                                    35px</li>
                                <li class="py-2"><code>40px</code> - for classes that set height and width to
                                    40px</li>
                                <li class="py-2"><code>45px</code> - for classes that set height and width to
                                    45px</li>
                                <li class="py-2"><code>50px</code> - for classes that set height and width to
                                    50px</li>
                                <li class="py-2"><code>55px</code> - for classes that set height and width to
                                    55px</li>
                                <li class="py-2"><code>60px</code> - for classes that set height and width to
                                    60px</li>
                                <li class="py-2"><code>65px</code> - for classes that set height and width to
                                    65px</li>
                                <li class="py-2"><code>70px</code> - for classes that set height and width to
                                    70px</li>
                                <li class="py-2"><code>75px</code> - for classes that set height and width to
                                    75px</li>
                                <li class="py-2"><code>90px</code> - for classes that set height and width to
                                    90px</li>
                                <li class="py-2"><code>100px</code> - for classes that set height and width to
                                    100px</li>
                                <li class="py-2"><code>125px</code> - for classes that set height and width to
                                    125px</li>
                                <li class="py-2"><code>150px</code> - for classes that set height and width to
                                    150px</li>
                                <li class="py-2"><code>160px</code> - for classes that set height and width to
                                    160px</li>
                                <li class="py-2"><code>175px</code> - for classes that set height and width to
                                    175px</li>
                                <li class="py-2"><code>200px</code> - for classes that set height and width to
                                    200px</li>
                            </ul>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10 pb-0 d-flex flex-wrap align-items-center">
                                <div class="symbol symbol-30px me-10 mb-10">
                                    <div class="symbol-label fs-2 fw-semibold text-success">A</div>
                                </div>

                                <div class="symbol symbol-50px me-10 mb-10">
                                    <div class="symbol-label fs-2 fw-semibold text-success">A</div>
                                </div>

                                <div class="symbol symbol-75px me-10 mb-10">
                                    <div class="symbol-label fs-2 fw-semibold text-success">A</div>
                                </div>

                                <div class="symbol symbol-100px me-10 mb-10">
                                    <div class="symbol-label fs-2 fw-semibold text-success">A</div>
                                </div>

                                <div class="symbol symbol-125px me-10 mb-10">
                                    <div class="symbol-label fs-2 fw-semibold text-success">A</div>
                                </div>

                                <div class="symbol symbol-150px me-10 mb-10">
                                    <div class="symbol-label fs-2 fw-semibold text-success">A</div>
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
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;symbol symbol-30px&quot;&gt;
  &lt;div class=&quot;symbol-label fs-2 fw-semibold text-success&quot;&gt;A&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;symbol symbol-50px&quot;&gt;
  &lt;div class=&quot;symbol-label fs-2 fw-semibold text-success&quot;&gt;A&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;symbol symbol-75px&quot;&gt;
  &lt;div class=&quot;symbol-label fs-2 fw-semibold text-success&quot;&gt;A&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;symbol symbol-100px&quot;&gt;
  &lt;div class=&quot;symbol-label fs-2 fw-semibold text-success&quot;&gt;A&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;symbol symbol-125px&quot;&gt;
  &lt;div class=&quot;symbol-label fs-2 fw-semibold text-success&quot;&gt;A&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;symbol symbol-150px&quot;&gt;
  &lt;div class=&quot;symbol-label fs-2 fw-semibold text-success&quot;&gt;A&lt;/div&gt;
&lt;/div&gt;</code></pre>
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
                            Wrap symbols with <code>.symbol-group</code> class to have a group with slighly
                            overlapped symbols:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10 pb-0 d-flex flex-wrap">
                                <div class="symbol-group symbol-hover">
                                    <div class="symbol symbol-circle symbol-50px mb-10">
                                        <img src="assets/media/avatars/300-6.jpg" alt="" />
                                    </div>

                                    <div class="symbol symbol-circle symbol-50px mb-10">
                                        <div class="symbol-label fs-2 fw-semibold bg-danger text-inverse-danger">L
                                        </div>
                                    </div>

                                    <div class="symbol symbol-circle symbol-50px mb-10">
                                        <img src="assets/media/avatars/300-2.jpg" alt="" />
                                    </div>

                                    <div class="symbol symbol-circle symbol-50px mb-10">
                                        <div class="symbol-label fs-2 fw-semibold bg-success text-inverse-success">
                                            A</div>
                                    </div>

                                    <div class="symbol symbol-circle symbol-50px mb-10">
                                        <img src="assets/media/avatars/300-20.jpg" alt="" />
                                    </div>

                                    <div class="symbol symbol-circle symbol-50px mb-10">
                                        <img src="assets/media/avatars/300-23.jpg" alt="" />
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
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;symbol-group symbol-hover&quot;&gt;
    &lt;div class=&quot;symbol symbol-circle symbol-50px&quot;&gt;
        &lt;img src=&quot;assets/media/avatars/300-6.jpg&quot; alt=&quot;&quot;/&gt;
    &lt;/div&gt;

    &lt;div class=&quot;symbol symbol-circle symbol-50px mb-10&quot;&gt;
        &lt;div class=&quot;symbol-label fs-2 fw-semibold bg-danger text-inverse-danger&quot;&gt;L&lt;/div&gt;
    &lt;/div&gt;

    &lt;div class=&quot;symbol symbol-circle symbol-50px&quot;&gt;
        &lt;img src=&quot;assets/media/avatars/300-2.jpg&quot; alt=&quot;&quot;/&gt;
    &lt;/div&gt;

    &lt;div class=&quot;symbol symbol-circle symbol-50px mb-10&quot;&gt;
        &lt;div class=&quot;symbol-label fs-2 fw-semibold bg-success text-inverse-success&quot;&gt;A&lt;/div&gt;
    &lt;/div&gt;

    &lt;div class=&quot;symbol symbol-circle symbol-50px&quot;&gt;
        &lt;img src=&quot;assets/media/avatars/300-20.jpg&quot; alt=&quot;&quot;/&gt;
    &lt;/div&gt;

    &lt;div class=&quot;symbol symbol-circle symbol-50px&quot;&gt;
        &lt;img src=&quot;assets/media/avatars/300-23.jpg&quot; alt=&quot;&quot;/&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
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
                                <a href="#avata" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Avatar</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#background-image" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Background Image</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#ratio" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Ratio</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#label" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Label</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#badge" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Badge</span>
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
                                <a href="#group" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Group</span>
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


