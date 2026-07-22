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
                            Metronic customizes the <a href="https://getbootstrap.com/docs/5.2/components/accordion/"
                                class="fw-semibold">Bootstrap Accordion</a>&nbsp;
                            through the SASS variables in <code>src/sass/components/_variables.scss</code> and adds
                            additonal options in <code>src/sass/components/_accordion.scss</code>.
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
                            Click the accordions below to expand/collapse the accordion content.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Accordion-->
                                <div class="accordion" id="kt_accordion_1">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="kt_accordion_1_header_1">
                                            <button class="accordion-button fs-4 fw-semibold" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_body_1"
                                                aria-expanded="true" aria-controls="kt_accordion_1_body_1">
                                                Accordion Item #1
                                            </button>
                                        </h2>
                                        <div id="kt_accordion_1_body_1" class="accordion-collapse collapse show"
                                            aria-labelledby="kt_accordion_1_header_1" data-bs-parent="#kt_accordion_1">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is
                                                hidden by default, until the collapse plugin adds the
                                                appropriate classes that we use to style each element. These classes
                                                control the overall appearance, as well as the
                                                showing and hiding via CSS transitions. You can modify any of this
                                                with custom CSS or overriding our default variables.
                                                It's also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit
                                                overflow.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="kt_accordion_1_header_2">
                                            <button class="accordion-button fs-4 fw-semibold collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_body_2"
                                                aria-expanded="false" aria-controls="kt_accordion_1_body_2">
                                                Accordion Item #2
                                            </button>
                                        </h2>
                                        <div id="kt_accordion_1_body_2" class="accordion-collapse collapse"
                                            aria-labelledby="kt_accordion_1_header_2" data-bs-parent="#kt_accordion_1">
                                            <div class="accordion-body">
                                                <strong>This is the second item's accordion body.</strong> It is
                                                hidden by default, until the collapse plugin adds the
                                                appropriate classes that we use to style each element. These classes
                                                control the overall appearance, as well as the showing
                                                and hiding via CSS transitions. You can modify any of this with
                                                custom CSS or overriding our default variables.
                                                It's also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit
                                                overflow.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="kt_accordion_1_header_3">
                                            <button class="accordion-button fs-4 fw-semibold collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_body_3"
                                                aria-expanded="false" aria-controls="kt_accordion_1_body_3">
                                                Accordion Item #3
                                            </button>
                                        </h2>
                                        <div id="kt_accordion_1_body_3" class="accordion-collapse collapse"
                                            aria-labelledby="kt_accordion_1_header_3" data-bs-parent="#kt_accordion_1">
                                            <div class="accordion-body">
                                                <strong>This is the third item's accordion body.</strong> It is
                                                hidden by default, until the collapse plugin adds the appropriate
                                                classes that we use to style each element. These classes control the
                                                overall appearance, as well as the showing and hiding via CSS
                                                transitions.
                                                You can modify any of this with custom CSS or overriding our default
                                                variables. It's also worth noting that just about any
                                                HTML can go within the <code>.accordion-body</code>, though the
                                                transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Accordion-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Accordion--&gt;
&lt;div class=&quot;accordion&quot; id=&quot;kt_accordion_1&quot;&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot; id=&quot;kt_accordion_1_header_1&quot;&gt;
            &lt;button class=&quot;accordion-button fs-4 fw-semibold&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#kt_accordion_1_body_1&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;kt_accordion_1_body_1&quot;&gt;
                Accordion Item #1
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;kt_accordion_1_body_1&quot; class=&quot;accordion-collapse collapse show&quot; aria-labelledby=&quot;kt_accordion_1_header_1&quot; data-bs-parent=&quot;#kt_accordion_1&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                ...
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot; id=&quot;kt_accordion_1_header_2&quot;&gt;
            &lt;button class=&quot;accordion-button fs-4 fw-semibold collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#kt_accordion_1_body_2&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;kt_accordion_1_body_2&quot;&gt;
            Accordion Item #2
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;kt_accordion_1_body_2&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;kt_accordion_1_header_2&quot; data-bs-parent=&quot;#kt_accordion_1&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                ...
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot; id=&quot;kt_accordion_1_header_3&quot;&gt;
            &lt;button class=&quot;accordion-button fs-4 fw-semibold collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#kt_accordion_1_body_3&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;kt_accordion_1_body_3&quot;&gt;
            Accordion Item #3
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;kt_accordion_1_body_3&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;kt_accordion_1_header_3&quot; data-bs-parent=&quot;#kt_accordion_1&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
               ...
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;!--end::Accordion--&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="animated-icon" data-kt-scroll-offset="50">
                            <a href="#animated-icon"></a>

                            Animated Icon
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Add <code>.accordion-icon-toggle</code> class to add toggle based animated icon in
                            header:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Accordion-->
                                <div class="accordion accordion-icon-toggle" id="kt_accordion_2">
                                    <!--begin::Item-->
                                    <div class="mb-5">
                                        <!--begin::Header-->
                                        <div class="accordion-header py-3 d-flex" data-bs-toggle="collapse"
                                            data-bs-target="#kt_accordion_2_item_1">
                                            <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-4"><span
                                                        class="path1"></span><span class="path2"></span></i></span>
                                            <h3 class="fs-4 fw-semibold mb-0 ms-4">Accordion Item #1</h3>
                                        </div>
                                        <!--end::Header-->

                                        <!--begin::Body-->
                                        <div id="kt_accordion_2_item_1" class="fs-6 collapse show ps-10"
                                            data-bs-parent="#kt_accordion_2">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem Ipsum has been the industry's standard dummy text ever
                                            since the 1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a
                                            type specimen book. It has survived not only five centuries, but also
                                            the leap into electronic typesetting,
                                            remaining essentially unchanged.
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Item-->
                                    <div class="mb-5">
                                        <!--begin::Header-->
                                        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#kt_accordion_2_item_2">
                                            <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-4"><span
                                                        class="path1"></span><span class="path2"></span></i></span>
                                            <h3 class="fs-4 fw-semibold mb-0 ms-4">Accordion Item #2</h3>
                                        </div>
                                        <!--end::Header-->

                                        <!--begin::Body-->
                                        <div id="kt_accordion_2_item_2" class="collapse fs-6 ps-10"
                                            data-bs-parent="#kt_accordion_2">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem Ipsum has been the industry's standard dummy text ever
                                            since the 1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a
                                            type specimen book. It has survived not only five centuries, but also
                                            the leap into electronic typesetting,
                                            remaining essentially unchanged.
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Item-->
                                    <div class="mb-5">
                                        <!--begin::Header-->
                                        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#kt_accordion_2_item_3">
                                            <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-4"><span
                                                        class="path1"></span><span class="path2"></span></i></span>
                                            <h3 class="fs-4 fw-semibold mb-0 ms-4">Accordion Item #3</h3>
                                        </div>
                                        <!--end::Header-->

                                        <!--begin::Body-->
                                        <div id="kt_accordion_2_item_3" class="collapse fs-6 ps-10"
                                            data-bs-parent="#kt_accordion_2">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem Ipsum has been the industry's standard dummy text ever
                                            since the 1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a
                                            type specimen book. It has survived not only five centuries, but also
                                            the leap into electronic typesetting,
                                            remaining essentially unchanged.
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Accordion-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Accordion--&gt;
&lt;div class=&quot;accordion accordion-icon-toggle&quot; id=&quot;kt_accordion_2&quot;&gt;
    &lt;!--begin::Item--&gt;
    &lt;div class=&quot;mb-5&quot;&gt;
        &lt;!--begin::Header--&gt;
        &lt;div class=&quot;accordion-header py-3 d-flex&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#kt_accordion_2_item_1&quot;&gt;
            &lt;span class=&quot;accordion-icon&quot;&gt;
                &lt;i class=&quot;ki-duotone ki-arrow-right fs-4&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
            &lt;/span&gt;
            &lt;h3 class=&quot;fs-4 fw-semibold mb-0 ms-4&quot;&gt;The best way to quick start business&lt;/h3&gt;
        &lt;/div&gt;
        &lt;!--end::Header--&gt;

        &lt;!--begin::Body--&gt;
        &lt;div id=&quot;kt_accordion_2_item_1&quot; class=&quot;fs-6 collapse show ps-10&quot; data-bs-parent=&quot;#kt_accordion_2&quot;&gt;
            ...
        &lt;/div&gt;
        &lt;!--end::Body--&gt;
    &lt;/div&gt;
    &lt;!--end::Item--&gt;

    &lt;!--begin::Item--&gt;
    &lt;div class=&quot;mb-5&quot;&gt;
        &lt;!--begin::Header--&gt;
        &lt;div class=&quot;accordion-header py-3 d-flex collapsed&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#kt_accordion_2_item_2&quot;&gt;
            &lt;span class=&quot;accordion-icon&quot;&gt;
                &lt;i class=&quot;ki-duotone ki-arrow-right fs-4&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
            &lt;/span&gt;
            &lt;h3 class=&quot;fs-4 fw-semibold mb-0 ms-4&quot;&gt;How To Create Channel ?&lt;/h3&gt;
        &lt;/div&gt;
        &lt;!--end::Header--&gt;

        &lt;!--begin::Body--&gt;
        &lt;div id=&quot;kt_accordion_2_item_2&quot; class=&quot;collapse fs-6 ps-10&quot; data-bs-parent=&quot;#kt_accordion_2&quot;&gt;
            ...
        &lt;/div&gt;
        &lt;!--end::Body--&gt;
    &lt;/div&gt;
    &lt;!--end::Item--&gt;

    &lt;!--begin::Item--&gt;
    &lt;div class=&quot;mb-5&quot;&gt;
        &lt;!--begin::Header--&gt;
        &lt;div class=&quot;accordion-header py-3 d-flex collapsed&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#kt_accordion_2_item_3&quot;&gt;
            &lt;span class=&quot;accordion-icon&quot;&gt;
                &lt;i class=&quot;ki-duotone ki-arrow-right fs-4&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
            &lt;/span&gt;
            &lt;h3 class=&quot;fs-4 fw-semibold mb-0 ms-4&quot;&gt;What are the support terms &amp; conditions ?&lt;/h3&gt;
        &lt;/div&gt;
        &lt;!--end::Header--&gt;

        &lt;!--begin::Body--&gt;
        &lt;div id=&quot;kt_accordion_2_item_3&quot; class=&quot;collapse fs-6 ps-10&quot; data-bs-parent=&quot;#kt_accordion_2&quot;&gt;
            ...
        &lt;/div&gt;
        &lt;!--end::Body--&gt;
    &lt;/div&gt;
    &lt;!--end::Item--&gt;
&lt;/div&gt;
&lt;!--end::Accordion--&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="collapse-icon" data-kt-scroll-offset="50">
                            <a href="#collapse-icon"></a>

                            Collapse Icon
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Add <code>.accordion-icon-collapse</code> class to add toggle based animated icon in
                            header:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Accordion-->
                                <div class="accordion accordion-icon-collapse" id="kt_accordion_3">
                                    <!--begin::Item-->
                                    <div class="mb-5">
                                        <!--begin::Header-->
                                        <div class="accordion-header py-3 d-flex" data-bs-toggle="collapse"
                                            data-bs-target="#kt_accordion_3_item_1">
                                            <span class="accordion-icon">
                                                <i class="ki-duotone ki-plus-square fs-3 accordion-icon-off"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span></i> <i
                                                    class="ki-duotone ki-minus-square fs-3 accordion-icon-on"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </span>
                                            <h3 class="fs-4 fw-semibold mb-0 ms-4">Accordion Item #1</h3>
                                        </div>
                                        <!--end::Header-->

                                        <!--begin::Body-->
                                        <div id="kt_accordion_3_item_1" class="fs-6 collapse show ps-10"
                                            data-bs-parent="#kt_accordion_3">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem Ipsum has been the industry's standard dummy text ever
                                            since the 1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a
                                            type specimen book. It has survived not only five centuries, but also
                                            the leap into electronic typesetting,
                                            remaining essentially unchanged.
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Item-->
                                    <div class="mb-5">
                                        <!--begin::Header-->
                                        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#kt_accordion_3_item_2">
                                            <span class="accordion-icon">
                                                <i class="ki-duotone ki-plus-square fs-3 accordion-icon-off"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span></i> <i
                                                    class="ki-duotone ki-minus-square fs-3 accordion-icon-on"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </span>
                                            <h3 class="fs-4 fw-semibold mb-0 ms-4">Accordion Item #2</h3>
                                        </div>
                                        <!--end::Header-->

                                        <!--begin::Body-->
                                        <div id="kt_accordion_3_item_2" class="collapse fs-6 ps-10"
                                            data-bs-parent="#kt_accordion_3">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem Ipsum has been the industry's standard dummy text ever
                                            since the 1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a
                                            type specimen book. It has survived not only five centuries, but also
                                            the leap into electronic typesetting,
                                            remaining essentially unchanged.
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Item-->
                                    <div class="mb-5">
                                        <!--begin::Header-->
                                        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#kt_accordion_3_item_3">
                                            <span class="accordion-icon">
                                                <i class="ki-duotone ki-plus-square fs-3 accordion-icon-off"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span></i> <i
                                                    class="ki-duotone ki-minus-square fs-3 accordion-icon-on"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </span>
                                            <h3 class="fs-4 fw-semibold mb-0 ms-4">Accordion Item #3</h3>
                                        </div>
                                        <!--end::Header-->

                                        <!--begin::Body-->
                                        <div id="kt_accordion_3_item_3" class="collapse fs-6 ps-10"
                                            data-bs-parent="#kt_accordion_3">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem Ipsum has been the industry's standard dummy text ever
                                            since the 1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a
                                            type specimen book. It has survived not only five centuries, but also
                                            the leap into electronic typesetting,
                                            remaining essentially unchanged.
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Accordion-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Accordion--&gt;
&lt;div class=&quot;accordion accordion-icon-collapse&quot; id=&quot;kt_accordion_3&quot;&gt;
    &lt;!--begin::Item--&gt;
    &lt;div class=&quot;mb-5&quot;&gt;
        &lt;!--begin::Header--&gt;
        &lt;div class=&quot;accordion-header py-3 d-flex&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#kt_accordion_3_item_1&quot;&gt;
            &lt;span class=&quot;accordion-icon&quot;&gt;
                &lt;i class=&quot;ki-duotone ki-plus-square fs-3 accordion-icon-off&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;/i&gt;
                &lt;i class=&quot;ki-duotone ki-minus-square fs-3 accordion-icon-on&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
            &lt;/span&gt;
            &lt;h3 class=&quot;fs-4 fw-semibold mb-0 ms-4&quot;&gt;The best way to quick start business&lt;/h3&gt;
        &lt;/div&gt;
        &lt;!--end::Header--&gt;

        &lt;!--begin::Body--&gt;
        &lt;div id=&quot;kt_accordion_3_item_1&quot; class=&quot;fs-6 collapse show ps-10&quot; data-bs-parent=&quot;#kt_accordion_3&quot;&gt;
            ...
        &lt;/div&gt;
        &lt;!--end::Body--&gt;
    &lt;/div&gt;
    &lt;!--end::Item--&gt;

    &lt;!--begin::Item--&gt;
    &lt;div class=&quot;mb-5&quot;&gt;
        &lt;!--begin::Header--&gt;
        &lt;div class=&quot;accordion-header py-3 d-flex collapsed&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#kt_accordion_3_item_2&quot;&gt;
            &lt;span class=&quot;accordion-icon&quot;&gt;
            &lt;i class=&quot;ki-duotone ki-plus-square fs-3 accordion-icon-off&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;/i&gt;
            &lt;i class=&quot;ki-duotone ki-minus-square fs-3 accordion-icon-on&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
            &lt;/span&gt;
            &lt;h3 class=&quot;fs-4 fw-semibold mb-0 ms-4&quot;&gt;How To Create Channel ?&lt;/h3&gt;
        &lt;/div&gt;
        &lt;!--end::Header--&gt;

        &lt;!--begin::Body--&gt;
        &lt;div id=&quot;kt_accordion_3_item_2&quot; class=&quot;collapse fs-6 ps-10&quot; data-bs-parent=&quot;#kt_accordion_3&quot;&gt;
            ...
        &lt;/div&gt;
        &lt;!--end::Body--&gt;
    &lt;/div&gt;
    &lt;!--end::Item--&gt;

    &lt;!--begin::Item--&gt;
    &lt;div class=&quot;mb-5&quot;&gt;
        &lt;!--begin::Header--&gt;
        &lt;div class=&quot;accordion-header py-3 d-flex collapsed&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#kt_accordion_3_item_3&quot;&gt;
            &lt;span class=&quot;accordion-icon&quot;&gt;
            &lt;i class=&quot;ki-duotone ki-plus-square fs-3 accordion-icon-off&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;/i&gt;
            &lt;i class=&quot;ki-duotone ki-minus-square fs-3 accordion-icon-on&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
            &lt;/span&gt;
            &lt;h3 class=&quot;fs-4 fw-semibold mb-0 ms-4&quot;&gt;What are the support terms &amp; conditions ?&lt;/h3&gt;
        &lt;/div&gt;
        &lt;!--end::Header--&gt;

        &lt;!--begin::Body--&gt;
        &lt;div id=&quot;kt_accordion_3_item_3&quot; class=&quot;collapse fs-6 ps-10&quot; data-bs-parent=&quot;#kt_accordion_3&quot;&gt;
            ...
        &lt;/div&gt;
        &lt;!--end::Body--&gt;
    &lt;/div&gt;
    &lt;!--end::Item--&gt;
&lt;/div&gt;
&lt;!--end::Accordion--&gt;</code></pre>
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
                                <a href="#animated-icon" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Animated Icon</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#collapse-icon" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Collapse Icon</span>
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


