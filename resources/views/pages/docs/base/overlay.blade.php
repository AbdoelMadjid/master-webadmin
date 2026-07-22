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
                            Overlay is a custom component to create an overlay effect on elements.
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
                            Use <code>.overlay</code> on an element and wrap the element's primary content with
                            <code>.overlay-wrapper</code> and the overlay content with <code>.overlay-layer</code>
                            and set the overlay backgroud color with opacity with <code>.bg-white
                                .bg-opacity-5</code>:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <!--begin::Card-->
                                        <div class="card  overlay">
                                            <div class="card-body p-0">
                                                <div class="overlay-wrapper">
                                                    <img src="assets/media/stock/600x400/img-1.jpg" alt=""
                                                        class="w-100 card-rounded" />
                                                </div>
                                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                    <a href="javascript:void(0)" class="btn btn-primary btn-shadow">Explore</a>
                                                    <a href="javascript:void(0)"
                                                        class="btn btn-light-primary btn-shadow ms-2">Purchase</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Card-->
                                    </div>

                                    <div class="col-lg-4">
                                        <!--begin::Card-->
                                        <div class="card overlay">
                                            <div class="card-body p-0">
                                                <div class="overlay-wrapper">
                                                    <img src="assets/media/stock/600x400/img-2.jpg" alt=""
                                                        class="w-100 card-rounded" />
                                                </div>
                                                <div
                                                    class="overlay-layer card-rounded bg-dark bg-opacity-25 align-items-end justify-content-center">
                                                    <div class="d-flex flex-grow-1 flex-center  py-5">
                                                        <a href="javascript:void(0)" class="btn btn-primary btn-shadow">Explore</a>
                                                        <a href="javascript:void(0)"
                                                            class="btn btn-light-primary btn-shadow ms-2">Purchase</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Card-->
                                    </div>

                                    <div class="col-lg-4">
                                        <!--begin::Card-->
                                        <div class="card overlay">
                                            <div class="card-body p-0">
                                                <div class="overlay-wrapper">
                                                    <img src="assets/media/stock/600x400/img-3.jpg" alt=""
                                                        class="w-100 card-rounded" />
                                                </div>
                                                <div
                                                    class="overlay-layer card-rounded bg-dark bg-opacity-25 align-items-start justify-content-center">
                                                    <div class="d-flex flex-grow-1 flex-center py-5">
                                                        <a href="javascript:void(0)" class="btn btn-primary btn-shadow">Explore</a>
                                                        <a href="javascript:void(0)"
                                                            class="btn btn-light-primary btn-shadow ms-2">Purchase</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Card-->
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
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col-lg-4&quot;&gt;
        &lt;!--begin::Card--&gt;
        &lt;div class=&quot;card  overlay overflow-hidden&quot;&gt;
            &lt;div class=&quot;card-body p-0&quot;&gt;
                &lt;div class=&quot;overlay-wrapper&quot;&gt;
                    &lt;img src=&quot;assets/media/stock/600x400/img-1.jpg&quot; alt=&quot;&quot; class=&quot;w-100 rounded&quot;/&gt;
                &lt;/div&gt;
                &lt;div class=&quot;overlay-layer bg-dark bg-opacity-25&quot;&gt;
                    &lt;a href=&quot;#&quot; class=&quot;btn btn-primary btn-shadow&quot;&gt;Explore&lt;/a&gt;
                    &lt;a href=&quot;#&quot; class=&quot;btn btn-light-primary btn-shadow ms-2&quot;&gt;Purchase&lt;/a&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;!--end::Card--&gt;
    &lt;/div&gt;

    &lt;div class=&quot;col-lg-4&quot;&gt;
        &lt;!--begin::Card--&gt;
        &lt;div class=&quot;card  overlay overflow-hidden&quot;&gt;
            &lt;div class=&quot;card-body p-0&quot;&gt;
                &lt;div class=&quot;overlay-wrapper&quot;&gt;
                    &lt;img src=&quot;assets/media/stock/600x400/img-2.jpg&quot; alt=&quot;&quot; class=&quot;w-100 rounded&quot;/&gt;
                &lt;/div&gt;
                &lt;div class=&quot;overlay-layer bg-dark bg-opacity-25 align-items-end justify-content-center&quot;&gt;
                    &lt;div class=&quot;d-flex flex-grow-1 flex-center  py-5&quot;&gt;
                        &lt;a href=&quot;#&quot; class=&quot;btn btn-primary btn-shadow&quot;&gt;Explore&lt;/a&gt;
                        &lt;a href=&quot;#&quot; class=&quot;btn btn-light-primary btn-shadow ms-2&quot;&gt;Purchase&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;!--end::Card--&gt;
    &lt;/div&gt;

    &lt;div class=&quot;col-lg-4&quot;&gt;
        &lt;!--begin::Card--&gt;
        &lt;div class=&quot;card  overlay overflow-hidden&quot;&gt;
            &lt;div class=&quot;card-body p-0&quot;&gt;
                &lt;div class=&quot;overlay-wrapper&quot;&gt;
                    &lt;img src=&quot;assets/media/stock/600x400/img-3.jpg&quot; alt=&quot;&quot; class=&quot;w-100 rounded&quot;/&gt;
                &lt;/div&gt;
                &lt;div class=&quot;overlay-layer bg-dark bg-opacity-25 align-items-start justify-content-center&quot;&gt;
                    &lt;div class=&quot;d-flex flex-grow-1 flex-center py-5&quot;&gt;
                        &lt;a href=&quot;#&quot; class=&quot;btn btn-primary btn-shadow&quot;&gt;Explore&lt;/a&gt;
                        &lt;a href=&quot;#&quot; class=&quot;btn btn-light-primary btn-shadow ms-2&quot;&gt;Purchase&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;!--end::Card--&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="default-shown" data-kt-scroll-offset="50">
                            <a href="#default-shown"></a>

                            Default Shown
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.overlay-block</code> on an element to display its overlay content by default:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <!--begin::Card-->
                                        <div class="card overlay overlay-block">
                                            <div class="card-body p-0">
                                                <div class="overlay-wrapper">
                                                    <img src="assets/media/stock/600x400/img-1.jpg" alt=""
                                                        class="w-100 card-rounded" />
                                                </div>
                                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                    <img src="assets/media/svg/misc/video-play.svg" class="h-60px"
                                                        alt="" />
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Card-->
                                    </div>

                                    <div class="col-lg-4">
                                        <!--begin::Card-->
                                        <div class="card overlay overlay-block">
                                            <div class="card-body p-0">
                                                <div class="overlay-wrapper">
                                                    <img src="assets/media/stock/600x400/img-2.jpg" alt=""
                                                        class="w-100 card-rounded" />
                                                </div>
                                                <div
                                                    class="overlay-layer card-rounded bg-dark bg-opacity-25 align-items-end justify-content-center">
                                                    <div class="d-flex flex-grow-1 flex-center  py-5">
                                                        <img src="assets/media/svg/misc/video-play.svg" class="h-60px"
                                                            alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Card-->
                                    </div>

                                    <div class="col-lg-4">
                                        <!--begin::Card-->
                                        <div class="card overlay overlay-block">
                                            <div class="card-body p-0">
                                                <div class="overlay-wrapper">
                                                    <img src="assets/media/stock/600x400/img-3.jpg" alt=""
                                                        class="w-100 card-rounded" />
                                                </div>
                                                <div
                                                    class="overlay-layer card-rounded bg-dark bg-opacity-25 align-items-start justify-content-center">
                                                    <div class="d-flex flex-grow-1 flex-center py-5">
                                                        <img src="assets/media/svg/misc/video-play.svg" class="h-60px"
                                                            alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Card-->
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
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col-lg-4&quot;&gt;
        &lt;!--begin::Card--&gt;
        &lt;div class=&quot;card overlay overlay-block&quot;&gt;
            &lt;div class=&quot;card-body p-0&quot;&gt;
                &lt;div class=&quot;overlay-wrapper&quot;&gt;
                    &lt;img src=&quot;assets/media/stock/600x400/img-1.jpg&quot; alt=&quot;&quot; class=&quot;w-100 card-rounded&quot;/&gt;
                &lt;/div&gt;
                &lt;div class=&quot;overlay-layer card-rounded bg-dark bg-opacity-25&quot;&gt;
                    &lt;a href=&quot;#&quot; class=&quot;btn btn-primary btn-shadow&quot;&gt;Explore&lt;/a&gt;
                    &lt;a href=&quot;#&quot; class=&quot;btn btn-light-primary btn-shadow ms-2&quot;&gt;Purchase&lt;/a&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;!--end::Card--&gt;
    &lt;/div&gt;

    &lt;div class=&quot;col-lg-4&quot;&gt;
        &lt;!--begin::Card--&gt;
        &lt;div class=&quot;card  overlay overflow-hidden&quot;&gt;
            &lt;div class=&quot;card-body p-0&quot;&gt;
                &lt;div class=&quot;overlay-wrapper&quot;&gt;
                    &lt;img src=&quot;assets/media/stock/600x400/img-2.jpg&quot; alt=&quot;&quot; class=&quot;w-100 card-rounded&quot;/&gt;
                &lt;/div&gt;
                &lt;div class=&quot;overlay-layer card-rounded bg-dark bg-opacity-25 align-items-end justify-content-center&quot;&gt;
                    &lt;div class=&quot;d-flex flex-grow-1 flex-center  py-5&quot;&gt;
                        &lt;a href=&quot;#&quot; class=&quot;btn btn-primary btn-shadow&quot;&gt;Explore&lt;/a&gt;
                        &lt;a href=&quot;#&quot; class=&quot;btn btn-light-primary btn-shadow ms-2&quot;&gt;Purchase&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;!--end::Card--&gt;
    &lt;/div&gt;

    &lt;div class=&quot;col-lg-4&quot;&gt;
        &lt;!--begin::Card--&gt;
        &lt;div class=&quot;card  overlay overflow-hidden&quot;&gt;
            &lt;div class=&quot;card-body p-0&quot;&gt;
                &lt;div class=&quot;overlay-wrapper&quot;&gt;
                    &lt;img src=&quot;assets/media/stock/600x400/img-3.jpg&quot; alt=&quot;&quot; class=&quot;w-100 card-rounded&quot;/&gt;
                &lt;/div&gt;
                &lt;div class=&quot;overlay-layer card-rounded bg-dark bg-opacity-25 align-items-start justify-content-center&quot;&gt;
                    &lt;div class=&quot;d-flex flex-grow-1 flex-center py-5&quot;&gt;
                        &lt;a href=&quot;#&quot; class=&quot;btn btn-primary btn-shadow&quot;&gt;Explore&lt;/a&gt;
                        &lt;a href=&quot;#&quot; class=&quot;btn btn-light-primary btn-shadow ms-2&quot;&gt;Purchase&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;!--end::Card--&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="content-blocking" data-kt-scroll-offset="50">
                            <a href="#content-blocking"></a>

                            Content Blocking
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.overlay-block</code> class for blocking an element content.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <!--begin::Card-->
                                        <div class="card shadow">
                                            <div class="card-header">
                                                <h3 class="card-title">Content Blocking</h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="overlay overlay-block card-rounded">
                                                    <div class="overlay-wrapper p-5">
                                                        Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry.
                                                        Lorem Ipsum has been the industry's standard dummy text ever
                                                        since the 1500s,
                                                        when an unknown printer took a galley of type and scrambled
                                                        it to.
                                                    </div>

                                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-5">
                                                        <div class="spinner-border text-primary" role="status">
                                                            <span class="visually-hidden">Loading...</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Card-->
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
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;card shadow&quot;&gt;
    &lt;div class=&quot;card-header&quot;&gt;
        &lt;h3 class=&quot;card-title&quot;&gt;Content Blocking&lt;/h3&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        &lt;div class=&quot;overlay overlay-block card-rounded&quot;&gt;
            &lt;div class=&quot;overlay-wrapper p-5&quot;&gt;
                Lorem Ipsum is simply dummy text...
            &lt;/div&gt;
            &lt;div class=&quot;overlay-layer card-rounded bg-dark bg-opacity-5&quot;&gt;
                &lt;div class=&quot;spinner-border text-primary&quot; role=&quot;status&quot;&gt;
                    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="ard-blocking" data-kt-scroll-offset="50">
                            <a href="#ard-blocking"></a>

                            Card Blocking
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.overlay-block</code> class for blocking card element.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <!--begin::Card-->
                                        <div class="card card-border overlay overlay-block">
                                            <div class="card-header">
                                                <h3 class="card-title">Card Blocking</h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="overlay-wrapper p-5">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.
                                                    Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s,
                                                    when an unknown printer took a galley of type and scrambled it
                                                    to.
                                                </div>

                                                <div class="overlay-layer card-rounded bg-dark bg-opacity-5">
                                                    <div class="spinner-border text-primary" role="status">
                                                        <span class="visually-hidden">Loading...</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Card-->
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
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;card card-border overlay overlay-block&quot;&gt;
    &lt;div class=&quot;card-header&quot;&gt;
        &lt;h3 class=&quot;card-title&quot;&gt;Card Blocking&lt;/h3&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        &lt;div class=&quot;overlay-wrapper p-5&quot;&gt;
            Lorem Ipsum is simply dummy text....
        &lt;/div&gt;
        &lt;div class=&quot;overlay-layer card-rounded bg-dark bg-opacity-5&quot;&gt;
            &lt;div class=&quot;spinner-border text-primary&quot; role=&quot;status&quot;&gt;
                &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
            &lt;/div&gt;
        &lt;/div&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="modal-blocking" data-kt-scroll-offset="50">
                            <a href="#modal-blocking"></a>

                            Modal Blocking
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.overlay-block</code> class block a modal's content.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">Launch
                                            modal</button>

                                        <!--begin::Modal Body Overlay-->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal Title
                                                        </h5>

                                                        <!--begin::Close-->
                                                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                            data-bs-dismiss="modal" aria-label="Close">
                                                            <i class="ki-duotone ki-cross fs-2x"><span
                                                                    class="path1"></span><span class="path2"></span></i>
                                                        </div>
                                                        <!--end::Close-->
                                                    </div>

                                                    <!--begin::Overlay-->
                                                    <div class="modal-body overlay overlay-block">
                                                        Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry.
                                                        Lorem Ipsum has been the industry's standard dummy text ever
                                                        since the 1500s,
                                                        when an unknown printer took a galley of type and scrambled
                                                        it to make a type specimen book.
                                                        It has survived not only five centuries, but also the leap
                                                        into electronic typesetting,
                                                        remaining essentially unchanged. Lorem Ipsum is simply dummy
                                                        text of the printing and typesetting industry.
                                                        Lorem Ipsum has been the industry's standard dummy text ever
                                                        since the 1500s,

                                                        <!--begin::Overlay Layer-->
                                                        <div class="overlay-layer bg-dark bg-opacity-5">
                                                            <div class="spinner-border text-primary" role="status">
                                                                <span class="visually-hidden">Loading...</span>
                                                            </div>
                                                        </div>
                                                        <!--end::Overlay Layer-->
                                                    </div>
                                                    <!--end::Overlay-->

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-primary fw-semibold"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary ">Ok</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Modal Body Overlay-->
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
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;button type=&quot;button&quot; class=&quot;btn btn-primary me-2&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#exampleModal&quot;&gt;Launch modal&lt;/button&gt;

&lt;!--begin::Modal Body Overlay--&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;exampleModal&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;exampleModalLabel&quot; aria-hidden=&quot;true&quot;&gt;
    &lt;div class=&quot;modal-dialog modal-dialog-centered&quot; role=&quot;document&quot;&gt;
        &lt;div class=&quot;modal-content modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalLabel&quot;&gt;Modal Title&lt;/h5&gt;

                &lt;!--begin::Close--&gt;
                &lt;div class=&quot;btn btn-icon btn-sm btn-active-light-primary ms-2&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;
                    &lt;i class=&quot;ki-duotone ki-cross fs-2x&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
                &lt;/div&gt;
                &lt;!--end::Close--&gt;
            &lt;/div&gt;

            &lt;!--begin::Overlay--&gt;
            &lt;div class=&quot;modal-body overlay overlay-block&quot;&gt;
                Lorem Ipsum is simply dummy text ...

                &lt;!--begin::Overlay Layer--&gt;
                &lt;div class=&quot;overlay-layer bg-dark bg-opacity-5&quot;&gt;
                    &lt;div class=&quot;spinner-border text-primary&quot; role=&quot;status&quot;&gt;
                        &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;!--end::Overlay Layer--&gt;
            &lt;/div&gt;
            &lt;!--end::Overlay--&gt;

            &lt;div class=&quot;modal-footer&quot;&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-light-primary fw-semibold&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary &quot;&gt;Ok&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;!--end::Modal Body Overlay--&gt;</code></pre>
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
                                <a href="#default-shown" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Default Shown</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#content-blocking" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Content Blocking</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#ard-blocking" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Card Blocking</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#modal-blocking" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Modal Blocking</span>
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


