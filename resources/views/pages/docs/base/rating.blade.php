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
                            Rating is a custom component that can be used to display and edit star based rating.
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
                            Use <code>.rating</code> and <code>.rating-label</code> classes for displaying star
                            based ratings.
                            This examples uses a star icon from <a href="/html/metronic/docs/icons/duotune"
                                class="fw-semibold">Duotune Svg Icons</a>.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="rating">
                                    <div class="rating-label checked">
                                        <i class="ki-duotone ki-star fs-1"></i>
                                    </div>
                                    <div class="rating-label checked">
                                        <i class="ki-duotone ki-star fs-1"></i>
                                    </div>
                                    <div class="rating-label checked">
                                        <i class="ki-duotone ki-star fs-1"></i>
                                    </div>
                                    <div class="rating-label checked">
                                        <i class="ki-duotone ki-star fs-1"></i>
                                    </div>
                                    <div class="rating-label checked">
                                        <i class="ki-duotone ki-star fs-1"></i>
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
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;rating&quot;&gt;
    &lt;div class=&quot;rating-label checked&quot;&gt;
        &lt;i class=&quot;ki-duotone ki-star fs-1&quot;&gt;&lt;/i&gt;
    &lt;/div&gt;
    &lt;div class=&quot;rating-label checked&quot;&gt;
        &lt;i class=&quot;ki-duotone ki-star fs-1&quot;&gt;&lt;/i&gt;
    &lt;/div&gt;
    &lt;div class=&quot;rating-label checked&quot;&gt;
        &lt;i class=&quot;ki-duotone ki-star fs-1&quot;&gt;&lt;/i&gt;
    &lt;/div&gt;
    &lt;div class=&quot;rating-label checked&quot;&gt;
        &lt;i class=&quot;ki-duotone ki-star fs-1&quot;&gt;&lt;/i&gt;
    &lt;/div&gt;
    &lt;div class=&quot;rating-label checked&quot;&gt;
        &lt;i class=&quot;ki-duotone ki-star fs-1&quot;&gt;&lt;/i&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="bootstrap-icons" data-kt-scroll-offset="50">
                            <a href="#bootstrap-icons"></a>

                            Bootstrap Icons
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            As a star icon any font icons can be used as well.
                            This examples uses a star icon from
                            <a href="/html/metronic/docs/icons/bootstrap-icons" class="fw-semibold">Bootstrap
                                Icons</a>:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="rating">
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star fs-1"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star fs-1"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star fs-1"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star fs-1"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star fs-1"></i>
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
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;rating&quot;&gt;
    &lt;div class=&quot;rating-label me-2 checked&quot;&gt;
        &lt;i class=&quot;bi bi-star fs-1&quot;&gt;&lt;/i&gt;
    &lt;/div&gt;
    &lt;div class=&quot;rating-label me-2 checked&quot;&gt;
        &lt;i class=&quot;bi bi-star fs-1&quot;&gt;&lt;/i&gt;
    &lt;/div&gt;
    &lt;div class=&quot;rating-label me-2 checked&quot;&gt;
        &lt;i class=&quot;bi bi-star fs-1&quot;&gt;&lt;/i&gt;
    &lt;/div&gt;
    &lt;div class=&quot;rating-label me-2 checked&quot;&gt;
        &lt;i class=&quot;bi bi-star fs-1&quot;&gt;&lt;/i&gt;
    &lt;/div&gt;
    &lt;div class=&quot;rating-label me-2 checked&quot;&gt;
        &lt;i class=&quot;bi bi-star fs-1&quot;&gt;&lt;/i&gt;
    &lt;/div&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="star-states" data-kt-scroll-offset="50">
                            <a href="#star-states"></a>

                            Star States
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            By default each star's state is unchecked and to mark them as checked just use
                            <code>.checked</code> class for <code>.rating-label</code> element.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="rating">
                                    <div class="rating-label checked">
                                        <i class="ki-duotone ki-star fs-1"></i>
                                    </div>
                                    <div class="rating-label checked">
                                        <i class="ki-duotone ki-star fs-1"></i>
                                    </div>
                                    <div class="rating-label checked">
                                        <i class="ki-duotone ki-star fs-1"></i>
                                    </div>
                                    <div class="rating-label">
                                        <i class="ki-duotone ki-star fs-1"></i>
                                    </div>
                                    <div class="rating-label">
                                        <i class="ki-duotone ki-star fs-1"></i>
                                    </div>
                                </div>

                                <div class="separator my-10"></div>

                                <div class="rating">
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star fs-2"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star fs-2"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star fs-2"></i>
                                    </div>
                                    <div class="rating-label me-2">
                                        <i class="bi bi-star fs-2"></i>
                                    </div>
                                    <div class="rating-label me-2">
                                        <i class="bi bi-star fs-2"></i>
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
                                    <pre class="language-html" style="height:300px"><code class="language-html">&lt;div class=&quot;rating&quot;&gt;
    &lt;div class=&quot;rating-label checked&quot;&gt;
        &lt;i class=&quot;ki-duotone ki-star fs-1&quot;&gt;&lt;/i&gt;
    &lt;/div&gt;
    &lt;div class=&quot;rating-label checked&quot;&gt;
        &lt;i class=&quot;ki-duotone ki-star fs-1&quot;&gt;&lt;/i&gt;
    &lt;/div&gt;
    &lt;div class=&quot;rating-label checked&quot;&gt;
        &lt;i class=&quot;ki-duotone ki-star fs-1&quot;&gt;&lt;/i&gt;
    &lt;/div&gt;
    &lt;div class=&quot;rating-label&quot;&gt;
        &lt;i class=&quot;ki-duotone ki-star fs-1&quot;&gt;&lt;/i&gt;
    &lt;/div&gt;
    &lt;div class=&quot;rating-label&quot;&gt;
        &lt;i class=&quot;ki-duotone ki-star fs-1&quot;&gt;&lt;/i&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;rating&quot;&gt;
    &lt;div class=&quot;rating-label me-2 checked&quot;&gt;
        &lt;i class=&quot;bi bi-star fs-2&quot;&gt;&lt;/i&gt;
    &lt;/div&gt;
    &lt;div class=&quot;rating-label me-2 checked&quot;&gt;
        &lt;i class=&quot;bi bi-star fs-2&quot;&gt;&lt;/i&gt;
    &lt;/div&gt;
    &lt;div class=&quot;rating-label me-2 checked&quot;&gt;
        &lt;i class=&quot;bi bi-star fs-2&quot;&gt;&lt;/i&gt;
    &lt;/div&gt;
    &lt;div class=&quot;rating-label me-2&quot;&gt;
        &lt;i class=&quot;bi bi-star fs-2&quot;&gt;&lt;/i&gt;
    &lt;/div&gt;
    &lt;div class=&quot;rating-label me-2&quot;&gt;
        &lt;i class=&quot;bi bi-star fs-2&quot;&gt;&lt;/i&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="edit-mode" data-kt-scroll-offset="50">
                            <a href="#edit-mode"></a>

                            Edit Mode
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Default example-->
                        <!--begin::Block-->
                        <div class="py-5">
                            Enable editable rating with Label and Radio input elements. Hover and click on the below
                            rating to set a rating value that can be submitted along with attached radio inputs:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="rating">
                                    <!--begin::Reset rating-->
                                    <label class="btn btn-light fw-bold btn-sm rating-label me-3" for="kt_rating_input_0">
                                        Reset
                                    </label>
                                    <input class="rating-input" name="rating" value="0" checked type="radio"
                                        id="kt_rating_input_0" />
                                    <!--end::Reset rating-->

                                    <!--begin::Star 1-->
                                    <label class="rating-label" for="kt_rating_input_1">
                                        <i class="ki-duotone ki-star fs-1"></i> </label>
                                    <input class="rating-input" name="rating" value="1" type="radio"
                                        id="kt_rating_input_1" />
                                    <!--end::Star 1-->

                                    <!--begin::Star 2-->
                                    <label class="rating-label" for="kt_rating_input_2">
                                        <i class="ki-duotone ki-star fs-1"></i> </label>
                                    <input class="rating-input" name="rating" value="2" type="radio"
                                        id="kt_rating_input_2" />
                                    <!--end::Star 2-->

                                    <!--begin::Star 3-->
                                    <label class="rating-label" for="kt_rating_input_3">
                                        <i class="ki-duotone ki-star fs-1"></i> </label>
                                    <input class="rating-input" name="rating" value="3" type="radio"
                                        id="kt_rating_input_3" />
                                    <!--end::Star 3-->

                                    <!--begin::Star 4-->
                                    <label class="rating-label" for="kt_rating_input_4">
                                        <i class="ki-duotone ki-star fs-1"></i> </label>
                                    <input class="rating-input" name="rating" value="4" type="radio"
                                        id="kt_rating_input_4" />
                                    <!--end::Star 4-->

                                    <!--begin::Star 5-->
                                    <label class="rating-label" for="kt_rating_input_5">
                                        <i class="ki-duotone ki-star fs-1"></i> </label>
                                    <input class="rating-input" name="rating" value="5" type="radio"
                                        id="kt_rating_input_5" />
                                    <!--end::Star 5-->
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
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;div class=&quot;rating&quot;&gt;
    &lt;!--begin::Reset rating--&gt;
    &lt;label class=&quot;btn btn-light fw-bold btn-sm rating-label me-3&quot; for=&quot;kt_rating_input_0&quot;&gt;
        Reset
    &lt;/label&gt;
    &lt;input class=&quot;rating-input&quot; name=&quot;rating&quot; value=&quot;0&quot; checked type=&quot;radio&quot; id=&quot;kt_rating_input_0&quot;/&gt;
    &lt;!--end::Reset rating--&gt;

    &lt;!--begin::Star 1--&gt;
    &lt;label class=&quot;rating-label&quot; for=&quot;kt_rating_input_1&quot;&gt;
        &lt;i class=&quot;ki-duotone ki-star fs-1&quot;&gt;&lt;/i&gt;
    &lt;/label&gt;
    &lt;input class=&quot;rating-input&quot; name=&quot;rating&quot; value=&quot;1&quot; type=&quot;radio&quot; id=&quot;kt_rating_input_1&quot;/&gt;
    &lt;!--end::Star 1--&gt;

    &lt;!--begin::Star 2--&gt;
    &lt;label class=&quot;rating-label&quot; for=&quot;kt_rating_input_2&quot;&gt;
        &lt;i class=&quot;ki-duotone ki-star fs-1&quot;&gt;&lt;/i&gt;
    &lt;/label&gt;
    &lt;input class=&quot;rating-input&quot; name=&quot;rating&quot; value=&quot;2&quot; type=&quot;radio&quot; id=&quot;kt_rating_input_2&quot;/&gt;
    &lt;!--end::Star 2--&gt;

    &lt;!--begin::Star 3--&gt;
    &lt;label class=&quot;rating-label&quot; for=&quot;kt_rating_input_3&quot;&gt;
        &lt;i class=&quot;ki-duotone ki-star fs-1&quot;&gt;&lt;/i&gt;
    &lt;/label&gt;
    &lt;input class=&quot;rating-input&quot; name=&quot;rating&quot; value=&quot;3&quot; type=&quot;radio&quot; id=&quot;kt_rating_input_3&quot;/&gt;
    &lt;!--end::Star 3--&gt;

    &lt;!--begin::Star 4--&gt;
    &lt;label class=&quot;rating-label&quot; for=&quot;kt_rating_input_4&quot;&gt;
        &lt;i class=&quot;ki-duotone ki-star fs-1&quot;&gt;&lt;/i&gt;
    &lt;/label&gt;
    &lt;input class=&quot;rating-input&quot; name=&quot;rating&quot; value=&quot;4&quot; type=&quot;radio&quot; id=&quot;kt_rating_input_4&quot;/&gt;
    &lt;!--end::Star 4--&gt;

    &lt;!--begin::Star 5--&gt;
    &lt;label class=&quot;rating-label&quot; for=&quot;kt_rating_input_5&quot;&gt;
        &lt;i class=&quot;ki-duotone ki-star fs-1&quot;&gt;&lt;/i&gt;
    &lt;/label&gt;
    &lt;input class=&quot;rating-input&quot; name=&quot;rating&quot; value=&quot;5&quot; type=&quot;radio&quot; id=&quot;kt_rating_input_5&quot;/&gt;
    &lt;!--end::Star 5--&gt;
&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                        <!--end::Default example-->

                        <!--begin::Default example-->
                        <!--begin::Block-->
                        <div class="pt-15 pb-5">
                            Rating with default value can be setup through a radio input's
                            <code>checked="checked"</code> state. This examples shows a rating with 3 stars default
                            value:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="rating">
                                    <!--begin::Reset rating-->
                                    <label class="btn btn-light fw-bold btn-sm rating-label me-3"
                                        for="kt_rating_2_input_0">
                                        Reset
                                    </label>
                                    <input class="rating-input" name="rating2" value="0" checked type="radio"
                                        id="kt_rating_2_input_0" />
                                    <!--end::Reset rating-->

                                    <!--begin::Star 1-->
                                    <label class="rating-label" for="kt_rating_2_input_1">
                                        <i class="ki-duotone ki-star fs-1"></i> </label>
                                    <input class="rating-input" name="rating2" value="1" type="radio"
                                        id="kt_rating_2_input_1" />
                                    <!--end::Star 1-->

                                    <!--begin::Star 2-->
                                    <label class="rating-label" for="kt_rating_2_input_2">
                                        <i class="ki-duotone ki-star fs-1"></i> </label>
                                    <input class="rating-input" name="rating2" value="2" type="radio"
                                        id="kt_rating_2_input_2" />
                                    <!--end::Star 2-->

                                    <!--begin::Star 3-->
                                    <label class="rating-label" for="kt_rating_2_input_3">
                                        <i class="ki-duotone ki-star fs-1"></i> </label>
                                    <input class="rating-input" name="rating2" value="3" type="radio"
                                        checked="checked" id="kt_rating_2_input_3" />
                                    <!--end::Star 3-->

                                    <!--begin::Star 4-->
                                    <label class="rating-label" for="kt_rating_2_input_4">
                                        <i class="ki-duotone ki-star fs-1"></i> </label>
                                    <input class="rating-input" name="rating2" value="4" type="radio"
                                        id="kt_rating_2_input_4" />
                                    <!--end::Star 4-->

                                    <!--begin::Star 5-->
                                    <label class="rating-label" for="kt_rating_2_input_5">
                                        <i class="ki-duotone ki-star fs-1"></i> </label>
                                    <input class="rating-input" name="rating2" value="5" type="radio"
                                        id="kt_rating_2_input_5" />
                                    <!--end::Star 5-->
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
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;div class=&quot;rating&quot;&gt;
    &lt;!--begin::Reset rating--&gt;
    &lt;label class=&quot;btn btn-light fw-bold btn-sm rating-label me-3&quot; for=&quot;kt_rating_2_input_0&quot;&gt;
        Reset
    &lt;/label&gt;
    &lt;input class=&quot;rating-input&quot; name=&quot;rating2&quot; value=&quot;0&quot; checked type=&quot;radio&quot; id=&quot;kt_rating_2_input_0&quot;/&gt;
    &lt;!--end::Reset rating--&gt;

    &lt;!--begin::Star 1--&gt;
    &lt;label class=&quot;rating-label&quot; for=&quot;kt_rating_2_input_1&quot;&gt;
        &lt;i class=&quot;ki-duotone ki-star fs-1&quot;&gt;&lt;/i&gt;
    &lt;/label&gt;
    &lt;input class=&quot;rating-input&quot; name=&quot;rating2&quot; value=&quot;1&quot; type=&quot;radio&quot; id=&quot;kt_rating_2_input_1&quot;/&gt;
    &lt;!--end::Star 1--&gt;

    &lt;!--begin::Star 2--&gt;
    &lt;label class=&quot;rating-label&quot; for=&quot;kt_rating_2_input_2&quot;&gt;
        &lt;i class=&quot;ki-duotone ki-star fs-1&quot;&gt;&lt;/i&gt;
    &lt;/label&gt;
    &lt;input class=&quot;rating-input&quot; name=&quot;rating2&quot; value=&quot;2&quot; type=&quot;radio&quot; id=&quot;kt_rating_2_input_2&quot;/&gt;
    &lt;!--end::Star 2--&gt;

    &lt;!--begin::Star 3--&gt;
    &lt;label class=&quot;rating-label&quot; for=&quot;kt_rating_2_input_3&quot;&gt;
        &lt;i class=&quot;ki-duotone ki-star fs-1&quot;&gt;&lt;/i&gt;
    &lt;/label&gt;
    &lt;input class=&quot;rating-input&quot; name=&quot;rating2&quot; value=&quot;3&quot; type=&quot;radio&quot; checked=&quot;checked&quot; id=&quot;kt_rating_2_input_3&quot;/&gt;
    &lt;!--end::Star 3--&gt;

    &lt;!--begin::Star 4--&gt;
    &lt;label class=&quot;rating-label&quot; for=&quot;kt_rating_2_input_4&quot;&gt;
        &lt;i class=&quot;ki-duotone ki-star fs-1&quot;&gt;&lt;/i&gt;
    &lt;/label&gt;
    &lt;input class=&quot;rating-input&quot; name=&quot;rating2&quot; value=&quot;4&quot; type=&quot;radio&quot; id=&quot;kt_rating_2_input_4&quot;/&gt;
    &lt;!--end::Star 4--&gt;

    &lt;!--begin::Star 5--&gt;
    &lt;label class=&quot;rating-label&quot; for=&quot;kt_rating_2_input_5&quot;&gt;
        &lt;i class=&quot;ki-duotone ki-star fs-1&quot;&gt;&lt;/i&gt;
    &lt;/label&gt;
    &lt;input class=&quot;rating-input&quot; name=&quot;rating2&quot; value=&quot;5&quot; type=&quot;radio&quot; id=&quot;kt_rating_2_input_5&quot;/&gt;
    &lt;!--end::Star 5--&gt;
&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                        <!--end::Default example-->
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
                                <a href="#bootstrap-icons" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Bootstrap Icons</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#star-states" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Star States</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#edit-mode" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Edit Mode</span>
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


