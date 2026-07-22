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
                            Ribbon is a custom micro element that can be used on a card element for additional
                            flair.
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
                            Use the <code>.ribbon</code> class within the <code>.card-header</code> element of a
                            <code>.card</code> component. Then add the ribbon content within the
                            <code>.card-header</code>
                            This example uses a simple ribbon on a card component.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <!--begin::Card-->
                            <div class="card card-bordered">
                                <div class="card-header ribbon">
                                    <div class="card-title">Ribbon Example</div>
                                    <div class="ribbon-label bg-primary">
                                        Ribbon
                                    </div>
                                </div>

                                <div class="card-body">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen
                                    book. It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                    with the release of Letraset sheets containing Lorem Ipsum passages, and more
                                    recently with desktop publishing software like Aldus PageMaker including
                                    versions of Lorem Ipsum.
                                </div>
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;card card-bordered&quot;&gt;
    &lt;div class=&quot;card-header ribbon&quot;&gt;
        &lt;div class=&quot;card-title&quot;&gt;Ribbon Example&lt;/div&gt;
        &lt;div class=&quot;ribbon-label bg-primary&quot;&gt;Ribbon&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        ...
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
                        <h1 class="anchor fw-bold mb-5" id="rounded" data-kt-scroll-offset="50">
                            <a href="#rounded"></a>

                            Rounded
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Add <code>.ribbon-[direction]</code> to add rounded corners on the specified ribbon
                            edge. The direction options are <code>start</code>, <code>end</code>, <code>top</code>
                            and <code>bottom</code>.<br />
                            Please note that the ribbon may overlap your card title, so align your titles
                            accordingly.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <!--begin::Row-->
                            <div class="row row-cols-1 row-cols-lg-3 g-9">
                                <!--begin::Col-->
                                <div class="col">
                                    <!--begin::Card-->
                                    <div class="card card-bordered">
                                        <div class="card-header ribbon ribbon-end">
                                            <div class="card-title">Ribbon Example</div>
                                            <div class="ribbon-label bg-primary">Ribbon</div>
                                        </div>

                                        <div class="card-body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem Ipsum has been the industry's standard dummy text ever
                                            since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting, remaining
                                            essentially unchanged.
                                        </div>
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col">
                                    <!--begin::Card-->
                                    <div class="card card-bordered">
                                        <div class="card-header ribbon ribbon-top">
                                            <div class="ribbon-label bg-primary">Ribbon</div>
                                            <div class="card-title">Ribbon Example</div>
                                        </div>

                                        <div class="card-body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem Ipsum has been the industry's standard dummy text ever
                                            since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting, remaining
                                            essentially unchanged.
                                        </div>
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col">
                                    <!--begin::Card-->
                                    <div class="card card-bordered">
                                        <div class="card-header justify-content-end ribbon ribbon-start">
                                            <div class="ribbon-label bg-primary">Ribbon</div>
                                            <div class="card-title">Ribbon Example</div>
                                        </div>

                                        <div class="card-body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem Ipsum has been the industry's standard dummy text ever
                                            since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting, remaining
                                            essentially unchanged.
                                        </div>
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Card--&gt;
&lt;div class=&quot;card card-bordered&quot;&gt;
    &lt;div class=&quot;card-header ribbon ribbon-end&quot;&gt;
        &lt;div class=&quot;ribbon-label bg-primary&quot;&gt;Ribbon&lt;/div&gt;
        &lt;div class=&quot;card-title&quot;&gt;Ribbon Example&lt;/div&gt;
    &lt;/div&gt;

    &lt;div class=&quot;card-body&quot;&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;
&lt;!--end::Card--&gt;

&lt;!--begin::Card--&gt;
&lt;div class=&quot;card card-bordered&quot;&gt;
    &lt;div class=&quot;card-header ribbon ribbon-top&quot;&gt;
        &lt;div class=&quot;ribbon-label bg-primary&quot;&gt;Ribbon&lt;/div&gt;
        &lt;div class=&quot;card-title&quot;&gt;Ribbon Example&lt;/div&gt;
    &lt;/div&gt;

    &lt;div class=&quot;card-body&quot;&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;
&lt;!--end::Card--&gt;

&lt;!--begin::Card--&gt;
&lt;div class=&quot;card card-bordered&quot;&gt;
    &lt;div class=&quot;card-header justify-content-end ribbon ribbon-start&quot;&gt;
        &lt;div class=&quot;ribbon-label bg-primary&quot;&gt;Ribbon&lt;/div&gt;
        &lt;div class=&quot;card-title&quot;&gt;Ribbon Example&lt;/div&gt;
    &lt;/div&gt;

    &lt;div class=&quot;card-body&quot;&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;
&lt;!--end::Card--&gt;</code></pre>
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
                            Add <code>.ribbon-vertical</code> together with <code>.ribbon-top</code> to add a
                            vertical ribbon.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <!--begin::Row-->
                            <div class="row row-cols-1 row-cols-lg-2 g-9">
                                <!--begin::Col-->
                                <div class="col">
                                    <!--begin::Card-->
                                    <div class="card card-bordered">
                                        <div class="card-header ribbon ribbon-top ribbon-vertical">
                                            <div class="ribbon-label bg-danger">
                                                OK!
                                            </div>

                                            <div class="ribbon-label bg-warning" style="margin-right: 50px">
                                                COOL!
                                            </div>

                                            <div class="card-title">Ribbon Example</div>
                                        </div>

                                        <div class="card-body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem Ipsum has been the industry's standard dummy text ever
                                            since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book.
                                        </div>
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col">
                                    <!--begin::Card-->
                                    <div class="card card-bordered">
                                        <div class="card-header ribbon ribbon-top ribbon-vertical">
                                            <div class="ribbon-label bg-success">
                                                <i class="ki-solid ki-heart text-inverse-success fs-1"></i>
                                            </div>
                                            <div class="card-title">Ribbon Example</div>
                                        </div>

                                        <div class="card-body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem Ipsum has been the industry's standard dummy text ever
                                            since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book.
                                        </div>
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Card--&gt;
&lt;div class=&quot;card card-bordered&quot;&gt;
    &lt;div class=&quot;card-header ribbon ribbon-top ribbon-vertical&quot;&gt;
        &lt;div class=&quot;ribbon-label bg-danger&quot;&gt;
            OK!
        &lt;/div&gt;
        &lt;div class=&quot;card-title&quot;&gt;Ribbon Example&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;
&lt;!--end::Card--&gt;

&lt;!--begin::Card--&gt;
&lt;div class=&quot;card borcard-borderedder&quot;&gt;
    &lt;div class=&quot;card-header ribbon ribbon-top ribbon-vertical&quot;&gt;
        &lt;div class=&quot;ribbon-label bg-success&quot;&gt;
            &lt;i class=&quot;ki-solid ki-heart text-inverse-success fs-1&quot;&gt;&lt;/i&gt;
        &lt;/div&gt;
        &lt;div class=&quot;card-title&quot;&gt;Ribbon Example&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;
&lt;!--end::Card--&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="clip-ribbons" data-kt-scroll-offset="50">
                            <a href="#clip-ribbons"></a>

                            Clip Ribbons
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Add <code>.ribbon-clip</code> and <code>.ribbon-inner</code> to add a clip style ribbon
                            edge.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <!--begin::Row-->
                            <div class="row row-cols-1 row-cols-lg-2 g-10">
                                <!--begin::Col-->
                                <div class="col">
                                    <!--begin::Card-->
                                    <div class="card card-bordered">
                                        <div class="card-header ribbon ribbon-end ribbon-clip">
                                            <div class="ribbon-label">
                                                Ribbon
                                                <span class="ribbon-inner bg-info"></span>
                                            </div>
                                            <div class="card-title">Ribbon Example</div>
                                        </div>

                                        <div class="card-body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem Ipsum has been the industry's standard dummy text ever
                                            since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting, remaining
                                            essentially unchanged.
                                        </div>
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col">
                                    <!--begin::Card-->
                                    <div class="card card-bordered">
                                        <div class="card-header justify-content-end ribbon ribbon-start ribbon-clip">
                                            <div class="ribbon-label">
                                                Ribbon
                                                <span class="ribbon-inner bg-success"></span>
                                            </div>
                                            <div class="card-title">Ribbon Example</div>
                                        </div>

                                        <div class="card-body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem Ipsum has been the industry's standard dummy text ever
                                            since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting, remaining
                                            essentially unchanged.
                                        </div>
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Card--&gt;
&lt;div class=&quot;card card-bordered&quot;&gt;
    &lt;div class=&quot;card-header ribbon ribbon-end ribbon-clip&quot;&gt;
        &lt;div class=&quot;ribbon-label&quot;&gt;
            Ribbon
            &lt;span class=&quot;ribbon-inner bg-info&quot;&gt;&lt;/span&gt;
        &lt;/div&gt;
        &lt;div class=&quot;card-title&quot;&gt;Ribbon Example&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;
&lt;!--end::Card--&gt;

&lt;!--begin::Card--&gt;
&lt;div class=&quot;card card-bordered&quot;&gt;
    &lt;div class=&quot;card-header justify-content-end ribbon ribbon-start ribbon-clip&quot;&gt;
        &lt;div class=&quot;ribbon-label&quot;&gt;
            Ribbon
            &lt;span class=&quot;ribbon-inner bg-success&quot;&gt;&lt;/span&gt;
        &lt;/div&gt;
        &lt;div class=&quot;card-title&quot;&gt;Ribbon Example&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;
&lt;!--end::Card--&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="triangle" data-kt-scroll-offset="50">
                            <a href="#triangle"></a>

                            Triangle
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.ribbon-triangle</code> together with one of <code>.ribbon-top-start</code>,
                            <code>.ribbon-top-start</code>, <code>.ribbon-top-start</code>,
                            <code>.ribbon-top-start</code> direction classes
                            to have a triangle stle ribbon with icons positioned with the Bootstrap margin utility
                            classes. Use <code>.border-{color}</code> class to set a ribbon color:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <!--begin::Row-->
                            <div class="row row-cols-1 row-cols-lg-2 g-9">
                                <!--begin::Col-->
                                <div class="col">
                                    <!--begin::Ribbon wrapper 1-->
                                    <div class="overflow-hidden position-relative card-rounded">
                                        <!--begin::Ribbon-->
                                        <div class="ribbon ribbon-triangle ribbon-top-start border-primary">
                                            <!--begin::Ribbon icon-->
                                            <div class="ribbon-icon mt-n5 ms-n6">
                                                <i class="bi bi-check2 fs-2 text-white"></i>
                                            </div>
                                            <!--end::Ribbon icon-->
                                        </div>
                                        <!--end::Ribbon-->

                                        <!--begin::Card-->
                                        <div class="card card-bordered">
                                            <!--begin::Header-->
                                            <div class="card-header ribbon ribbon-top ribbon-vertical">
                                                <div class="card-title">Ribbon Example</div>
                                            </div>
                                            <!--end::Header-->

                                            <!--begin::Body-->
                                            <div class="card-body">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text
                                                ever since the 1500s, when an unknown printer took a galley of type
                                                and scrambled it to make a type specimen book.
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Ribbon wrapper 1-->
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col">
                                    <!--begin::Ribbon wrapper 2-->
                                    <div class="overflow-hidden position-relative card-rounded">
                                        <!--begin::Ribbon-->
                                        <div class="ribbon ribbon-triangle ribbon-top-end border-success">
                                            <!--begin::Ribbon icon-->
                                            <div class="ribbon-icon mt-n5 me-n6">
                                                <i class="ki-duotone ki-bluetooth fs-2 text-white"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Ribbon icon-->
                                        </div>
                                        <!--end::Ribbon-->

                                        <!--begin::Card-->
                                        <div class="card card-bordered">
                                            <!--begin::Header-->
                                            <div class="card-header ribbon ribbon-top ribbon-vertical">
                                                <div class="card-title">Ribbon Example</div>
                                            </div>
                                            <!--end::Header-->

                                            <!--begin::Body-->
                                            <div class="card-body">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text
                                                ever since the 1500s, when an unknown printer took a galley of type
                                                and scrambled it to make a type specimen book.
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Ribbon wrapper 2-->
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col">
                                    <!--begin::Wrapper-->
                                    <div class="overflow-hidden position-relative card-rounded">
                                        <!--begin::Card-->
                                        <div class="card card-bordered">
                                            <!--begin::Header-->
                                            <div class="card-header ribbon ribbon-top ribbon-vertical">
                                                <div class="card-title">Ribbon Example</div>
                                            </div>
                                            <!--end::Header-->

                                            <!--begin::Body-->
                                            <div class="card-body">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text
                                                ever since the 1500s, when an unknown printer took a galley of type
                                                and scrambled it to make a type specimen book.
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->

                                        <!--begin::Ribbon-->
                                        <div class="ribbon ribbon-triangle ribbon-bottom-start border-danger">
                                            <!--begin::Ribbon icon-->
                                            <div class="ribbon-icon mt-0 ms-n6">
                                                <i class="las la-highlighter fs-2 text-white"></i>
                                            </div>
                                            <!--end::Ribbon icon-->
                                        </div>
                                        <!--end::Ribbon-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col">
                                    <!--begin::Wrapper-->
                                    <div class="overflow-hidden position-relative card-rounded">
                                        <!--begin::Card-->
                                        <div class="card card-bordered">
                                            <!--begin::Header-->
                                            <div class="card-header ribbon ribbon-top ribbon-vertical">
                                                <div class="card-title">Ribbon Example</div>
                                            </div>
                                            <!--end::Header-->

                                            <!--begin::Body-->
                                            <div class="card-body">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text
                                                ever since the 1500s, when an unknown printer took a galley of type
                                                and scrambled it to make a type specimen book.
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->

                                        <!--begin::Ribbon-->
                                        <div class="ribbon ribbon-triangle ribbon-bottom-end border-gray-300">
                                            <!--begin::Icon-->
                                            <i class="bi bi-pencil position-relative me-n6 d-block fs-2 text-gray-900"></i>
                                            <!--end::Icon-->
                                        </div>
                                        <!--end::Ribbon-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Ribbon wrapper 1--&gt;
&lt;div class=&quot;overflow-hidden position-relative card-rounded&quot;&gt;
    &lt;!--begin::Ribbon--&gt;
    &lt;div class=&quot;ribbon ribbon-triangle ribbon-top-start border-primary&quot;&gt;
        &lt;!--begin::Ribbon icon--&gt;
        &lt;div class=&quot;ribbon-icon mt-n5 ms-n6&quot;&gt;
            &lt;i class=&quot;bi bi-check2 fs-2 text-white&quot;&gt;&lt;/i&gt;
        &lt;/div&gt;
        &lt;!--end::Ribbon icon--&gt;
    &lt;/div&gt;
    &lt;!--end::Ribbon--&gt;

    &lt;!--begin::Card--&gt;
    &lt;div class=&quot;card card-bordered&quot;&gt;
        &lt;!--begin::Header--&gt;
        &lt;div class=&quot;card-header ribbon ribbon-top ribbon-vertical&quot;&gt;
            &lt;div class=&quot;card-title&quot;&gt;Ribbon Example&lt;/div&gt;
        &lt;/div&gt;
        &lt;!--end::Header--&gt;

        &lt;!--begin::Body--&gt;
        &lt;div class=&quot;card-body&quot;&gt;
            ...
        &lt;/div&gt;
        &lt;!--end::Body--&gt;
    &lt;/div&gt;
    &lt;!--end::Card--&gt;
&lt;/div&gt;
&lt;!--end::Ribbon wrapper 1--&gt;

&lt;!--begin::Ribbon wrapper 2--&gt;
&lt;div class=&quot;overflow-hidden position-relative card-rounded&quot;&gt;
    &lt;!--begin::Ribbon--&gt;
    &lt;div class=&quot;ribbon ribbon-triangle ribbon-top-start border-primary&quot;&gt;
        &lt;!--begin::Ribbon icon--&gt;
        &lt;div class=&quot;ribbon-icon mt-n5 me-n6&quot;&gt;
            &lt;?php echo Theme::getIcon(&quot;bluetooth&quot;, &quot;fs-2 text-white&quot;)?&gt;
        &lt;/div&gt;
        &lt;!--end::Ribbon icon--&gt;
    &lt;/div&gt;
    &lt;!--end::Ribbon--&gt;

    &lt;!--begin::Card--&gt;
    &lt;div class=&quot;card card-bordered&quot;&gt;
        &lt;!--begin::Header--&gt;
        &lt;div class=&quot;card-header ribbon ribbon-top ribbon-vertical&quot;&gt;
            &lt;div class=&quot;card-title&quot;&gt;Ribbon Example&lt;/div&gt;
        &lt;/div&gt;
        &lt;!--end::Header--&gt;

        &lt;!--begin::Body--&gt;
        &lt;div class=&quot;card-body&quot;&gt;
            ...
        &lt;/div&gt;
        &lt;!--end::Body--&gt;
    &lt;/div&gt;
    &lt;!--end::Card--&gt;
&lt;/div&gt;
&lt;!--end::Ribbon wrapper 2--&gt;

&lt;!--begin::Ribbon wrapper 3--&gt;
&lt;div class=&quot;overflow-hidden position-relative card-rounded&quot;&gt;
    &lt;!--begin::Card--&gt;
    &lt;div class=&quot;card card-bordered&quot;&gt;
        &lt;!--begin::Header--&gt;
        &lt;div class=&quot;card-header ribbon ribbon-top ribbon-vertical&quot;&gt;
            &lt;div class=&quot;card-title&quot;&gt;Ribbon Example&lt;/div&gt;
        &lt;/div&gt;
        &lt;!--end::Header--&gt;

        &lt;!--begin::Body--&gt;
        &lt;div class=&quot;card-body&quot;&gt;
            ...
        &lt;/div&gt;
        &lt;!--end::Body--&gt;
    &lt;/div&gt;
    &lt;!--end::Card--&gt;

    &lt;!--begin::Ribbon--&gt;
    &lt;div class=&quot;ribbon ribbon-triangle ribbon-bottom-start border-danger&quot;&gt;
        &lt;!--begin::Ribbon icon--&gt;
        &lt;div class=&quot;ribbon-icon mt-0 ms-n6&quot;&gt;
            &lt;i class=&quot;las la-highlighter fs-2 text-white&quot;&gt;&lt;/i&gt;
        &lt;/div&gt;
        &lt;!--end::Ribbon icon--&gt;
    &lt;/div&gt;
    &lt;!--end::Ribbon--&gt;
&lt;/div&gt;
&lt;!--end::Ribbon wrapper 3--&gt;

&lt;!--begin::Ribbon wrapper 4--&gt;
&lt;div class=&quot;overflow-hidden position-relative card-rounded&quot;&gt;
    &lt;!--begin::Card--&gt;
    &lt;div class=&quot;card card-bordered&quot;&gt;
        &lt;!--begin::Header--&gt;
        &lt;div class=&quot;card-header ribbon ribbon-top ribbon-vertical&quot;&gt;
            &lt;div class=&quot;card-title&quot;&gt;Ribbon Example&lt;/div&gt;
        &lt;/div&gt;
        &lt;!--end::Header--&gt;

        &lt;!--begin::Body--&gt;
        &lt;div class=&quot;card-body&quot;&gt;
            ...
        &lt;/div&gt;
        &lt;!--end::Body--&gt;
    &lt;/div&gt;
    &lt;!--end::Card--&gt;

    &lt;!--begin::Ribbon--&gt;
    &lt;div class=&quot;ribbon ribbon-triangle ribbon-bottom-start border-gray-300&quot;&gt;
        &lt;!--begin::Ribbon icon--&gt;
        &lt;div class=&quot;ribbon-icon mt-0 me-n6&quot;&gt;
            &lt;i class=&quot;bi bi-pencil fs-2 text-white&quot;&gt;&lt;/i&gt;
        &lt;/div&gt;
        &lt;!--end::Ribbon icon--&gt;
    &lt;/div&gt;
    &lt;!--end::Ribbon--&gt;
&lt;/div&gt;
&lt;!--end::Ribbon wrapper 4--&gt;</code></pre>
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
                                <a href="#rounded" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Rounded</span>
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
                                <a href="#clip-ribbons" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Clip Ribbons</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#triangle" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Triangle</span>
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


