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
                            Metronic extends <a href="https://getbootstrap.com/docs/5.2/components/card/"
                                class="fw-semibold">Bootstrap Card</a>&nbsp;
                            through the SASS variables in <code>src/sass/components/_variables.scss</code> and adds
                            additonal options
                            in <code>src/sass/components/_card.scss/</code>.
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
                            Basic Card example with
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="card shadow-sm">
                                <div class="card-header">
                                    <h3 class="card-title">Title</h3>
                                    <div class="card-toolbar">
                                        <button type="button" class="btn btn-sm btn-light">
                                            Action
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's
                                    standard dummy text ever since the 1500s, when an unknown printer took a galley
                                    of type and scrambled it to
                                    make a type specimen book. It has survived not only five centuries, but also the
                                    leap into electronic typesetting,
                                    remaining essentially unchanged. It was popularised in the 1960s with the
                                    release of Letraset sheets containing
                                    Lorem Ipsum passages, and more recently with desktop publishing software like
                                    Aldus PageMaker including versions of Lorem Ipsum.
                                </div>
                                <div class="card-footer">
                                    Footer
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
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;card shadow-sm&quot;&gt;
    &lt;div class=&quot;card-header&quot;&gt;
        &lt;h3 class=&quot;card-title&quot;&gt;Title&lt;/h3&gt;
        &lt;div class=&quot;card-toolbar&quot;&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-light&quot;&gt;
                Action
            &lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        Lorem Ipsum is simply dummy text...
    &lt;/div&gt;
    &lt;div class=&quot;card-footer&quot;&gt;
        Footer
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
                        <h1 class="anchor fw-bold mb-5" id="card-scroll" data-kt-scroll-offset="50">
                            <a href="#card-scroll"></a>

                            Card Scroll
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.card-scroll</code> and <a href="" class="fw-bold" target="_blank">height
                                classes</a> <code>.h-{size}</code>
                            on a card's body to have a card with scrollable content:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="card shadow-sm">
                                <div class="card-header">
                                    <h3 class="card-title">Title</h3>
                                    <div class="card-toolbar">
                                        <button type="button" class="btn btn-sm btn-light">
                                            Action
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body card-scroll h-200px">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's
                                        standard dummy text ever since the 1500s, when an unknown printer took a
                                        galley of type and scrambled it to
                                        make a type specimen book. It has survived not only five centuries, but also
                                        the leap into electronic typesetting,
                                        remaining essentially unchanged. It was popularised in the 1960s with the
                                        release of Letraset sheets containing
                                        Lorem Ipsum passages, and more recently with desktop publishing software
                                        like Aldus PageMaker including versions of Lorem Ipsum.
                                    </p>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's
                                        standard dummy text ever since the 1500s, when an unknown printer took a
                                        galley of type and scrambled it to
                                        make a type specimen book. It has survived not only five centuries, but also
                                        the leap into electronic typesetting,
                                        remaining essentially unchanged. It was popularised in the 1960s with the
                                        release of Letraset sheets containing
                                        Lorem Ipsum passages, and more recently with desktop publishing software
                                        like Aldus PageMaker including versions of Lorem Ipsum.
                                    </p>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's
                                        standard dummy text ever since the 1500s, when an unknown printer took a
                                        galley of type and scrambled it to
                                        make a type specimen book. It has survived not only five centuries, but also
                                        the leap into electronic typesetting,
                                        remaining essentially unchanged. It was popularised in the 1960s with the
                                        release of Letraset sheets containing
                                        Lorem Ipsum passages, and more recently with desktop publishing software
                                        like Aldus PageMaker including versions of Lorem Ipsum.
                                    </p>
                                </div>
                                <div class="card-footer">
                                    Footer
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
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;card bg-light shadow-sm&quot;&gt;
    &lt;div class=&quot;card-header&quot;&gt;
        &lt;h3 class=&quot;card-title&quot;&gt;Title&lt;/h3&gt;
        &lt;div class=&quot;card-toolbar&quot;&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-light&quot;&gt;
                Action
            &lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-body card-scroll h-200px&quot;&gt;
        Lorem Ipsum is simply dummy text...
    &lt;/div&gt;
    &lt;div class=&quot;card-footer&quot;&gt;
        Footer
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
                        <h1 class="anchor fw-bold mb-5" id="collapsible" data-kt-scroll-offset="50">
                            <a href="#collapsible"></a>

                            Collapsible
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Add on Bootstrap's <code>.collapse</code> plugin to enable quick collapsible cards. For
                            more info,
                            please refer to the <a href="https://getbootstrap.com/docs/5.0/components/collapse/"
                                target="_blank">official documentation</a>.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="card shadow-sm">
                                <div class="card-header collapsible cursor-pointer rotate" data-bs-toggle="collapse"
                                    data-bs-target="#kt_docs_card_collapsible">
                                    <h3 class="card-title">Title</h3>
                                    <div class="card-toolbar rotate-180">
                                        <i class="ki-duotone ki-down fs-1"></i>
                                    </div>
                                </div>
                                <div id="kt_docs_card_collapsible" class="collapse show">
                                    <div class="card-body">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's
                                        standard dummy text ever since the 1500s, when an unknown printer took a
                                        galley of type and scrambled it to
                                        make a type specimen book. It has survived not only five centuries, but also
                                        the leap into electronic typesetting,
                                        remaining essentially unchanged. It was popularised in the 1960s with the
                                        release of Letraset sheets containing
                                        Lorem Ipsum passages, and more recently with desktop publishing software
                                        like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                    <div class="card-footer">
                                        Footer
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
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;card shadow-sm&quot;&gt;
    &lt;div class=&quot;card-header collapsible cursor-pointer rotate&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#kt_docs_card_collapsible&quot;&gt;
        &lt;h3 class=&quot;card-title&quot;&gt;Title&lt;/h3&gt;
        &lt;div class=&quot;card-toolbar rotate-180&quot;&gt;
            &lt;i class=&quot;ki-duotone ki-down fs-1&quot;&gt;&lt;/i&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div id=&quot;kt_docs_card_collapsible&quot; class=&quot;collapse show&quot;&gt;
        &lt;div class=&quot;card-body&quot;&gt;
            Lorem Ipsum is simply dummy text...
        &lt;/div&gt;
        &lt;div class=&quot;card-footer&quot;&gt;
            Footer
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
                        <h1 class="anchor fw-bold mb-5" id="linkable" data-kt-scroll-offset="50">
                            <a href="#linkable"></a>

                            Linkable
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Basic Card example with
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="javascript:void(0)" class="card hover-elevate-up shadow-sm parent-hover">
                                        <div class="card-body d-flex align-items">
                                            <i class="ki-duotone ki-rocket fs-1"><span class="path1"></span><span
                                                    class="path2"></span></i>
                                            <span class="ms-3 text-gray-700 parent-hover-primary fs-6 fw-bold">
                                                Example link title
                                            </span>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-4">
                                    <a href="javascript:void(0)" class="card hover-elevate-up shadow-sm parent-hover">
                                        <div class="card-body d-flex align-items">
                                            <i class="ki-duotone ki-timer fs-1"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i>
                                            <span class="ms-3 text-gray-700 parent-hover-primary fs-6 fw-bold">
                                                Example link title
                                            </span>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-4">
                                    <a href="javascript:void(0)" class="card hover-elevate-up shadow-sm parent-hover">
                                        <div class="card-body d-flex align-items">
                                            <i class="ki-duotone ki-bucket fs-1"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></i>
                                            <span class="ms-3 text-gray-700 parent-hover-primary fs-6 fw-bold">
                                                Example link title
                                            </span>
                                        </div>
                                    </a>
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
                                    <pre class="language-html"><code class="language-html">&lt;a href=&quot;#&quot; class=&quot;card hover-elevate-up shadow-sm parent-hover&quot;&gt;
    &lt;div class=&quot;card-body d-flex align-items&quot;&gt;
        &lt;span class=&quot;svg-icon fs-1&quot;&gt;
            ...
        &lt;/span&gt;

        &lt;span class=&quot;ms-3 text-gray-700 parent-hover-primary fs-6 fw-bold&quot;&gt;
            Example link title
        &lt;/span&gt;
    &lt;/div&gt;
&lt;/a&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="removable" data-kt-scroll-offset="50">
                            <a href="#removable"></a>

                            Removable
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Add <code>data-kt-card-action="remove"</code> attribute to enable removing the card on
                            click with confirm popup:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="card shadow-sm">
                                <div class="card-header">
                                    <h3 class="card-title">Title</h3>
                                    <div class="card-toolbar">
                                        <a href="javascript:void(0)" class="btn btn-icon btn-sm btn-active-color-primary"
                                            data-kt-card-action="remove" data-kt-card-confirm="true"
                                            data-kt-card-confirm-message="Are you sure to remove this card ?"
                                            data-bs-toggle="tooltip" title="Remove card" data-bs-dismiss="click">
                                            <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                                    class="path2"></span></i> </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's
                                    standard dummy text ever since the 1500s, when an unknown printer took a galley
                                    of type and scrambled it to
                                    make a type specimen book. It has survived not only five centuries, but also the
                                    leap into electronic typesetting,
                                    remaining essentially unchanged. It was popularised in the 1960s with the
                                    release of Letraset sheets containing
                                    Lorem Ipsum passages, and more recently with desktop publishing software like
                                    Aldus PageMaker including versions of Lorem Ipsum.
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
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;card shadow-sm&quot;&gt;
    &lt;div class=&quot;card-header&quot;&gt;
        &lt;h3 class=&quot;card-title&quot;&gt;Title&lt;/h3&gt;
        &lt;div class=&quot;card-toolbar&quot;&gt;
            &lt;a href=&quot;#&quot; class=&quot;btn btn-icon btn-sm btn-active-color-primary&quot; data-kt-card-action=&quot;remove&quot; data-kt-card-confirm=&quot;true&quot; data-kt-card-confirm-message=&quot;Are you sure to remove this card ?&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Remove card&quot; data-bs-dismiss=&quot;click&quot;&gt;
                &lt;i class=&quot;ki-duotone ki-cross fs-1&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/div&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="flush-borders" data-kt-scroll-offset="50">
                            <a href="#flush-borders"></a>

                            Flush Borders
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.card-flush</code> class to remove a card header and footer borders:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="card card-flush shadow-sm">
                                <div class="card-header">
                                    <h3 class="card-title">Title</h3>
                                    <div class="card-toolbar">
                                        <button type="button" class="btn btn-sm btn-light">
                                            Action
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body py-5">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's
                                    standard dummy text ever since the 1500s, when an unknown printer took a galley
                                    of type and scrambled it to
                                    make a type specimen book. It has survived not only five centuries, but also the
                                    leap into electronic typesetting,
                                    remaining essentially unchanged. It was popularised in the 1960s with the
                                    release of Letraset sheets containing
                                    Lorem Ipsum passages, and more recently with desktop publishing software like
                                    Aldus PageMaker including versions of Lorem Ipsum.
                                </div>
                                <div class="card-footer">
                                    Footer
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
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;card card-flush shadow-sm&quot;&gt;
    &lt;div class=&quot;card-header&quot;&gt;
        &lt;h3 class=&quot;card-title&quot;&gt;Title&lt;/h3&gt;
        &lt;div class=&quot;card-toolbar&quot;&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-light&quot;&gt;
                Action
            &lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-body py-5&quot;&gt;
        Lorem Ipsum is simply dummy text...
    &lt;/div&gt;
    &lt;div class=&quot;card-footer&quot;&gt;
        Footer
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
                        <h1 class="anchor fw-bold mb-5" id="reset-side-paddings" data-kt-scroll-offset="50">
                            <a href="#reset-side-paddings"></a>

                            Reset Side Paddings
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Add <code>.card-px-0</code> to reset a card header, body and footer's side paddings:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="card card-px-0 shadow-sm">
                                <div class="card-header">
                                    <h3 class="card-title">Title</h3>
                                    <div class="card-toolbar">
                                        <button type="button" class="btn btn-sm btn-light">
                                            Action
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's
                                    standard dummy text ever since the 1500s, when an unknown printer took a galley
                                    of type and scrambled it to
                                    make a type specimen book. It has survived not only five centuries, but also the
                                    leap into electronic typesetting,
                                    remaining essentially unchanged. It was popularised in the 1960s with the
                                    release of Letraset sheets containing
                                    Lorem Ipsum passages, and more recently with desktop publishing software like
                                    Aldus PageMaker including versions of Lorem Ipsum.
                                </div>
                                <div class="card-footer">
                                    Footer
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
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;card card-px-0 shadow-sm&quot;&gt;
    &lt;div class=&quot;card-header&quot;&gt;
        &lt;h3 class=&quot;card-title&quot;&gt;Title&lt;/h3&gt;
        &lt;div class=&quot;card-toolbar&quot;&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-light&quot;&gt;
                Action
            &lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        Lorem Ipsum is simply dummy text...
    &lt;/div&gt;
    &lt;div class=&quot;card-footer&quot;&gt;
        Footer
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
                        <h1 class="anchor fw-bold mb-5" id="bordered-style" data-kt-scroll-offset="50">
                            <a href="#bordered-style"></a>

                            Bordered Style
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Add <code>.card-bordered</code> to a card to remove it's shadow and enable borders.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="card card-bordered">
                                <div class="card-header">
                                    <h3 class="card-title">Title</h3>
                                    <div class="card-toolbar">
                                        <button type="button" class="btn btn-sm btn-light">
                                            Action
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's
                                    standard dummy text ever since the 1500s, when an unknown printer took a galley
                                    of type and scrambled it to
                                    make a type specimen book. It has survived not only five centuries, but also the
                                    leap into electronic typesetting,
                                    remaining essentially unchanged. It was popularised in the 1960s with the
                                    release of Letraset sheets containing
                                    Lorem Ipsum passages, and more recently with desktop publishing software like
                                    Aldus PageMaker including versions of Lorem Ipsum.
                                </div>
                                <div class="card-footer">
                                    Footer
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
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;card card-bordered&quot;&gt;
    &lt;div class=&quot;card-header&quot;&gt;
        &lt;h3 class=&quot;card-title&quot;&gt;Title&lt;/h3&gt;
        &lt;div class=&quot;card-toolbar&quot;&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-light&quot;&gt;
                Action
            &lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        Lorem Ipsum is simply dummy text...
    &lt;/div&gt;
    &lt;div class=&quot;card-footer&quot;&gt;
        Footer
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
                        <h1 class="anchor fw-bold mb-5" id="dashed-style" data-kt-scroll-offset="50">
                            <a href="#dashed-style"></a>

                            Dashed Style
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Add <code>.card-dashed</code> to a card to remove it's shadow and enable dashed style
                            borders.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="card card-dashed">
                                <div class="card-header">
                                    <h3 class="card-title">Title</h3>
                                    <div class="card-toolbar">
                                        <button type="button" class="btn btn-sm btn-light">
                                            Action
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's
                                    standard dummy text ever since the 1500s, when an unknown printer took a galley
                                    of type and scrambled it to
                                    make a type specimen book. It has survived not only five centuries, but also the
                                    leap into electronic typesetting,
                                    remaining essentially unchanged. It was popularised in the 1960s with the
                                    release of Letraset sheets containing
                                    Lorem Ipsum passages, and more recently with desktop publishing software like
                                    Aldus PageMaker including versions of Lorem Ipsum.
                                </div>
                                <div class="card-footer">
                                    Footer
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
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;card card-dashed&quot;&gt;
    &lt;div class=&quot;card-header&quot;&gt;
        &lt;h3 class=&quot;card-title&quot;&gt;Title&lt;/h3&gt;
        &lt;div class=&quot;card-toolbar&quot;&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-light&quot;&gt;
                Action
            &lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        Lorem Ipsum is simply dummy text...
    &lt;/div&gt;
    &lt;div class=&quot;card-footer&quot;&gt;
        Footer
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
                        <h1 class="anchor fw-bold mb-5" id="card-stretch" data-kt-scroll-offset="50">
                            <a href="#card-stretch"></a>

                            Card Stretch
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            To have same height cards within <a href="https://getbootstrap.com/docs/5.2/layout/grid/"
                                class="">Bootstrap</a>
                            Grid use <code>.card-{mode}</code> or responsive <code>.card-{breakpoint}-{mode}</code>
                            for <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code>, and
                            <code>xxl</code>.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            Where <code>mode</code> is one of:
                            <ul class="pt-3">
                                <li class="py-2"><code>stretch</code> - for setting 100% stretch height</li>
                                <li class="py-2"><code>stretch-75</code> - for setting 75% stretch height</li>
                                <li class="py-2"><code>stretch-50</code> - for setting 50% stretch height</li>
                                <li class="py-2"><code>stretch-33</code> - for setting 33.333% stretch height
                                </li>
                                <li class="py-2"><code>stretch-25</code> - for setting 25% stretch height</li>
                            </ul>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="row g-5">
                                <div class="col-lg-4">
                                    <div class="card card-stretch card-bordered mb-5">
                                        <div class="card-header">
                                            <h3 class="card-title">Height 100%</h3>
                                        </div>
                                        <div class="card-body">
                                            Lorem Ipsum is simply dummy text
                                        </div>
                                        <div class="card-footer">
                                            Footer
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="card  card-stretch-50 card-bordered mb-5">
                                        <div class="card-header">
                                            <h3 class="card-title">Height 50%</h3>
                                        </div>
                                        <div class="card-body">
                                            Lorem Ipsum is simply dummy text
                                        </div>
                                        <div class="card-footer">
                                            Footer
                                        </div>
                                    </div>

                                    <div class="card  card-stretch-50 card-bordered mb-5">
                                        <div class="card-header">
                                            <h3 class="card-title">Height 50%</h3>
                                        </div>
                                        <div class="card-body">
                                            Lorem Ipsum is simply dummy text
                                        </div>
                                        <div class="card-footer">
                                            Footer
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="card  card-stretch-33 card-bordered mb-5">
                                        <div class="card-header">
                                            <h3 class="card-title">Height 33.333%</h3>
                                        </div>
                                        <div class="card-body">
                                            Lorem Ipsum is simply dummy text
                                        </div>
                                        <div class="card-footer">
                                            Footer
                                        </div>
                                    </div>

                                    <div class="card  card-stretch-33 card-bordered mb-5">
                                        <div class="card-header">
                                            <h3 class="card-title">Height 33.333%</h3>
                                        </div>
                                        <div class="card-body">
                                            Lorem Ipsum is simply dummy text
                                        </div>
                                        <div class="card-footer">
                                            Footer
                                        </div>
                                    </div>

                                    <div class="card  card-stretch-33 card-bordered mb-5">
                                        <div class="card-header">
                                            <h3 class="card-title">Height 33.333%</h3>
                                        </div>
                                        <div class="card-body">
                                            Lorem Ipsum is simply dummy text
                                        </div>
                                        <div class="card-footer">
                                            Footer
                                        </div>
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
                                    <pre class="language-html" style="height:500px"><code class="language-html">&lt;div class=&quot;row g-5&quot;&gt;
    &lt;div class=&quot;col-lg-4&quot;&gt;
        &lt;div class=&quot;card card-stretch card-bordered mb-5&quot;&gt;
            &lt;div class=&quot;card-header&quot;&gt;
                &lt;h3 class=&quot;card-title&quot;&gt;Height 100%&lt;/h3&gt;
            &lt;/div&gt;
            &lt;div class=&quot;card-body&quot;&gt;
                Lorem Ipsum is simply dummy text
            &lt;/div&gt;
            &lt;div class=&quot;card-footer&quot;&gt;
                Footer
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class=&quot;col-lg-4&quot;&gt;
        &lt;div class=&quot;card card-stretch-50 card-bordered mb-5&quot;&gt;
            &lt;div class=&quot;card-header&quot;&gt;
                &lt;h3 class=&quot;card-title&quot;&gt;Height 100%&lt;/h3&gt;
            &lt;/div&gt;
            &lt;div class=&quot;card-body&quot;&gt;
                Lorem Ipsum is simply dummy text
            &lt;/div&gt;
            &lt;div class=&quot;card-footer&quot;&gt;
                Footer
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class=&quot;card card-stretch-50 card-bordered mb-5&quot;&gt;
            &lt;div class=&quot;card-header&quot;&gt;
                &lt;h3 class=&quot;card-title&quot;&gt;Height 100%&lt;/h3&gt;
            &lt;/div&gt;
            &lt;div class=&quot;card-body&quot;&gt;
                Lorem Ipsum is simply dummy text
            &lt;/div&gt;
            &lt;div class=&quot;card-footer&quot;&gt;
                Footer
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class=&quot;col-lg-4&quot;&gt;
        &lt;div class=&quot;card card-stretch-33 card-bordered mb-5&quot;&gt;
            &lt;div class=&quot;card-header&quot;&gt;
                &lt;h3 class=&quot;card-title&quot;&gt;Height 33.333%&lt;/h3&gt;
            &lt;/div&gt;
            &lt;div class=&quot;card-body&quot;&gt;
                Lorem Ipsum is simply dummy text
            &lt;/div&gt;
            &lt;div class=&quot;card-footer&quot;&gt;
                Footer
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class=&quot;card card-stretch-33 card-bordered mb-5&quot;&gt;
            &lt;div class=&quot;card-header&quot;&gt;
                &lt;h3 class=&quot;card-title&quot;&gt;Height 33.333%&lt;/h3&gt;
            &lt;/div&gt;
            &lt;div class=&quot;card-body&quot;&gt;
                Lorem Ipsum is simply dummy text
            &lt;/div&gt;
            &lt;div class=&quot;card-footer&quot;&gt;
                Footer
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class=&quot;card card-stretch-33 card-bordered mb-5&quot;&gt;
            &lt;div class=&quot;card-header&quot;&gt;
                &lt;h3 class=&quot;card-title&quot;&gt;Height 33.333%&lt;/h3&gt;
            &lt;/div&gt;
            &lt;div class=&quot;card-body&quot;&gt;
                Lorem Ipsum is simply dummy text
            &lt;/div&gt;
            &lt;div class=&quot;card-footer&quot;&gt;
                Footer
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
                        <h1 class="anchor fw-bold mb-5" id="utility-classes" data-kt-scroll-offset="50">
                            <a href="#utility-classes"></a>

                            Utility Classes
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.card-{property}</code> class on other elements to required card style
                            properties defined
                            through the SASS variables in <code>src/sass/components/_variables.scss</code> and
                            <code>src/sass/components/_card.scss/</code>.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            Where <code>property</code> is one of:
                            <ul class="pt-3">
                                <li class="py-2"><code>p</code> - to set paddings from card</li>
                                <li class="py-2"><code>px</code> - to set left and right paddings of card</li>
                                <li class="py-2"><code>py</code> - to set top and bottom paddings of card</li>
                                <li class="py-2"><code>card-rounded</code> - to set border radiuses of card</li>
                                <li class="py-2"><code>card-rounded-top</code> - to set top left and top right
                                    radiuses of card</li>
                                <li class="py-2"><code>card-rounded-bottom</code> - to set bottom left and top
                                    right radiuses of card</li>
                            </ul>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="row g-5">
                                <div class="col-lg-6">
                                    <div class="card card-bordered">
                                        <div class="card-header">
                                            <h3 class="card-title">Fluid Image</h3>
                                            <div class="card-toolbar">
                                                <button type="button" class="btn btn-sm btn-light">
                                                    Action
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="card-p mb-10">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry.
                                            </div>

                                            <div class="text-center px-4">
                                                <img class="mw-100 mh-300px card-rounded-bottom" alt=""
                                                    src="/html/metronic/docs/assets/media/illustrations/sigma-1/1.png" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">

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
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;card shadow-sm&quot;&gt;
    &lt;div class=&quot;card-header&quot;&gt;
        &lt;h3 class=&quot;card-title&quot;&gt;Fluid Image&lt;/h3&gt;
        &lt;div class=&quot;card-toolbar&quot;&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-light&quot;&gt;
                Action
            &lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-body p-0&quot;&gt;
        &lt;div class=&quot;card-p mb-10&quot;&gt;Lorem Ipsum is simply dummy text ...

        &lt;div class=&quot;text-center px-4&quot;&gt;
            &lt;img class=&quot;mw-100 mh-300px card-rounded-bottom&quot; alt=&quot;&quot; src=&quot;examples.png&quot;/&gt;
        &lt;/div&gt;
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
                                <a href="#card-scroll" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Card Scroll</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#collapsible" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Collapsible</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#linkable" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Linkable</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#removable" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Removable</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#flush-borders" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Flush Borders</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#reset-side-paddings" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Reset Side Paddings</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#bordered-style" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Bordered Style</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#dashed-style" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Dashed Style</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#card-stretch" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Card Stretch</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#utility-classes" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Utility Classes</span>
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


