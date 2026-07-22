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
                    <!--begin::Layout-->
                    <div class="d-flex flex-column flex-xl-row">
                        <!--begin::Content-->
                        <div class="flex-lg-row-fluid me-lg-10">
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
                                    Sticky is an exclusive plugin of Metronic that provides a simple, smooth and lightweight
                                    for initializing sticky components without any Javascript.
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
                                    Sticky's script bundles are globally included and initialized in all pages.
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
                                            Sticky's Javascript is globally initialized and added into our script bundle.
                                        </li>
                                        <li class="py-2">
                                            Add <code>data-kt-sticky="true"</code> to a HTML element to enable it. There are
                                            multiple additional HTML attributes you can include to configure Sticky
                                            directly.
                                        </li>
                                        <li class="py-2">
                                            Sticky is a wrapping element, therefore, by itself it doesn't do much. However,
                                            adding multiple HTML components into sticky's container will allow all contained
                                            HTML components to be sticky on browser scroll.
                                        </li>
                                        <li class="py-2">
                                            Sticky instances can also be controlled programmatically. <a href="#methods"
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
                                <h1 class="anchor fw-bold mb-5" id="basic-example" data-kt-scroll-offset="50">
                                    <a href="#basic-example"></a>

                                    Basic Example
                                </h1>
                                <!--end::Heading-->


                                <!--begin::Block-->
                                <div class="py-5">
                                    <div class="mb-3">
                                        The example sticky component is previewed on the right side of the screen. There are
                                        a variety HTML attributes added in the <code>div</code> wrapper (in this example,
                                        our wrapper element is a <code>.card</code>), please refer to the <a href="#options"
                                            class="me-1" data-kt-scroll-toggle>markup reference</a> below to view what
                                        each of them do.
                                    </div>
                                </div>
                                <!--end::Block-->

                                <!--begin::Notice-->
                                <div class="py-5">
                                    <!--begin::Information-->
                                    <div class="d-flex align-items-center rounded py-5 px-5 bg-light-primary "><i
                                            class="ki-duotone ki-information-5 fs-3x text-primary me-5"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span></i> <!--begin::Description-->
                                        <div class="text-gray-700 fw-bold fs-6">
                                            A sticky component is a simple wrapper element. Anything that gets added into a
                                            sticky component will also be sticky.
                                        </div> <!--end::Description-->
                                    </div><!--end::Information-->
                                </div>
                                <!--end::Notice-->

                                <!--begin::Code-->
                                <div class="py-5">
                                    <!--begin::Highlight-->
                                    <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;div class=&quot;card card-flush bg-light mb-0&quot;
    data-kt-sticky=&quot;true&quot;
    data-kt-sticky-name=&quot;docs-sticky-summary&quot;
    data-kt-sticky-offset=&quot;{default: false, xl: &#039;200px&#039;}&quot;
    data-kt-sticky-width=&quot;{lg: &#039;250px&#039;, xl: &#039;300px&#039;}&quot;
    data-kt-sticky-left=&quot;auto&quot;
    data-kt-sticky-top=&quot;100px&quot;
    data-kt-sticky-animation=&quot;false&quot;
    data-kt-sticky-zindex=&quot;95&quot;
&gt;
    ...
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div><!--end::Highlight-->
                                </div>
                                <!--end::Code-->
                            </div>
                            <!--end::Section-->


                            <!--begin::Drawer-->
                            <div id="kt_drawer_example_basic" class="bg-white" data-kt-drawer="true"
                                data-kt-drawer-activate="true" data-kt-drawer-toggle="#kt_drawer_example_basic_button"
                                data-kt-drawer-close="#kt_drawer_example_basic_close"
                                data-kt-drawer-width="{default:'300px', 'md': '500px'}">

                                <!--begin::Card-->
                                <div class="card w-100 rounded-0">
                                    <!--begin::Card header-->
                                    <div class="card-header pe-5">
                                        <!--begin::Title-->
                                        <div class="card-title">
                                            <!--begin::User-->
                                            <div class="d-flex justify-content-center flex-column me-3">
                                                <a href="javascript:void(0)"
                                                    class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 lh-1">Example
                                                    Basic</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Title-->

                                        <!--begin::Card toolbar-->
                                        <div class="card-toolbar">
                                            <!--begin::Close-->
                                            <div class="btn btn-sm btn-icon btn-active-light-primary"
                                                id="kt_drawer_example_basic_close">
                                                <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span
                                                        class="path2"></span></i>
                                            </div>
                                            <!--end::Close-->
                                        </div>
                                        <!--end::Card toolbar-->
                                    </div>
                                    <!--end::Card header-->

                                    <!--begin::Card body-->
                                    <div class="card-body hover-scroll-overlay-y">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Leo vel fringilla est ullamcorper
                                            eget nulla. Faucibus vitae aliquet nec ullamcorper sit amet risus nullam eget.
                                            Sed faucibus turpis in eu mi. Velit egestas dui id ornare arcu odio. Arcu non
                                            odio euismod lacinia at quis risus sed vulputate. Sed egestas egestas fringilla
                                            phasellus faucibus scelerisque eleifend donec. Vehicula ipsum a arcu cursus.
                                            Gravida neque convallis a cras semper. Amet massa vitae tortor condimentum.
                                            Lectus mauris ultrices eros in cursus turpis massa. Orci sagittis eu volutpat
                                            odio facilisis mauris sit amet. Hac habitasse platea dictumst quisque sagittis
                                            purus sit amet volutpat. Erat pellentesque adipiscing commodo elit at imperdiet
                                            dui. Vestibulum morbi blandit cursus risus at ultrices.</p>

                                        <p>Quis ipsum suspendisse ultrices gravida dictum. Egestas egestas fringilla
                                            phasellus faucibus scelerisque eleifend donec. Vitae proin sagittis nisl rhoncus
                                            mattis rhoncus urna. Eget arcu dictum varius duis at consectetur lorem donec
                                            massa. Morbi tincidunt ornare massa eget. Ornare arcu dui vivamus arcu felis.
                                            Egestas purus viverra accumsan in nisl nisi scelerisque eu. Aliquet nec
                                            ullamcorper sit amet. Dignissim enim sit amet venenatis urna cursus eget.
                                            Accumsan sit amet nulla facilisi morbi tempus iaculis urna. Non consectetur a
                                            erat nam at. Ut morbi tincidunt augue interdum velit. Ridiculus mus mauris vitae
                                            ultricies leo integer malesuada.</p>

                                        <p>Ipsum dolor sit amet consectetur adipiscing. Blandit cursus risus at ultrices mi
                                            tempus imperdiet. Risus nullam eget felis eget. A lacus vestibulum sed arcu non.
                                            Tristique magna sit amet purus gravida quis blandit turpis cursus. Imperdiet
                                            nulla malesuada pellentesque elit. Nec dui nunc mattis enim ut tellus elementum
                                            sagittis. Ac placerat vestibulum lectus mauris. Facilisi etiam dignissim diam
                                            quis enim. Suspendisse faucibus interdum posuere lorem ipsum dolor. Mattis
                                            rhoncus urna neque viverra justo nec ultrices. Luctus accumsan tortor posuere ac
                                            ut consequat semper viverra nam. At varius vel pharetra vel turpis nunc eget.
                                            Accumsan sit amet nulla facilisi morbi tempus iaculis urna. Ut morbi tincidunt
                                            augue interdum velit euismod in.</p>

                                        <p>Etiam tempor orci eu lobortis elementum nibh. Libero volutpat sed cras ornare
                                            arcu. Risus sed vulputate odio ut enim. Iaculis nunc sed augue lacus viverra
                                            vitae. Enim neque volutpat ac tincidunt vitae. Iaculis at erat pellentesque
                                            adipiscing commodo elit at imperdiet dui. Nunc mi ipsum faucibus vitae aliquet
                                            nec ullamcorper sit amet. Ullamcorper a lacus vestibulum sed arcu. In dictum non
                                            consectetur a erat. Varius quam quisque id diam vel quam elementum. Cursus eget
                                            nunc scelerisque viverra mauris in aliquam sem fringilla. Sed viverra tellus in
                                            hac habitasse platea dictumst. Amet cursus sit amet dictum sit amet. Elit duis
                                            tristique sollicitudin nibh sit amet commodo nulla facilisi. Non tellus orci ac
                                            auctor augue mauris.</p>

                                        <p>Ut lectus arcu bibendum at varius vel. Arcu felis bibendum ut tristique et
                                            egestas quis. Sit amet commodo nulla facilisi nullam vehicula ipsum. Tellus cras
                                            adipiscing enim eu turpis egestas pretium. Imperdiet massa tincidunt nunc
                                            pulvinar sapien et. Integer eget aliquet nibh praesent tristique magna sit.
                                            Lacinia at quis risus sed vulputate odio ut. Amet mattis vulputate enim nulla
                                            aliquet porttitor lacus luctus accumsan. Aenean pharetra magna ac placerat
                                            vestibulum. Aenean euismod elementum nisi quis eleifend quam adipiscing vitae.
                                            Viverra nam libero justo laoreet sit amet cursus sit amet. Diam vel quam
                                            elementum pulvinar. Massa vitae tortor condimentum lacinia quis vel eros donec
                                            ac.</p>
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end::Drawer-->
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
                                    Sticky uses HTML attributes to define the certain configurations. Here are the
                                    references for each below
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
                                                    <th class="min-w-400px">Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <code>data-kt-sticky</code>
                                                    </td>
                                                    <td>
                                                        <code class="ms-0">mandatory</code>
                                                    </td>
                                                    <td>
                                                        Defines the element as a drawer view component. Accepts
                                                        <code>true</code> or <code>false</code> values.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <code>data-kt-sticky-name</code>
                                                    </td>
                                                    <td>
                                                        <code class="ms-0">optional</code>
                                                    </td>
                                                    <td>
                                                        Defines the sticky component's name for identification and used to
                                                        append a special attribute to Body element to indicate the sticky's
                                                        on scroll state.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <code>data-kt-sticky-offset</code>
                                                    </td>
                                                    <td>
                                                        <code class="ms-0">optional</code>
                                                    </td>
                                                    <td>
                                                        <div class="mb-3">
                                                            Specifies the sticky component's offset value from the top for
                                                            when it toggles from a regular state to a sticky state. Accepts
                                                            <code>px</code> value. For example: <code>50px</code>.
                                                        </div>

                                                        <div class="mb-3">
                                                            This is also compatible with Bootstrap's standard breakpoint
                                                            sizing (eg: <code>sm, md, lg, xl</code>) with a similar
                                                            <code>px</code> values. For responsive options, this attribute
                                                            value must be written as an object string to enable multiple
                                                            responsive breakpoints.
                                                        </div>

                                                        For example: <code>{default:'30px', 'md': '50px'}</code> indicates
                                                        that the sticky component will stick on screen when
                                                        <code>50px</code> from the top is scrolled on screens larger than
                                                        <code>md</code> and <code>30px</code> form the top for every other
                                                        screen size.<br />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <code>data-kt-sticky-reverse</code>
                                                    </td>
                                                    <td>
                                                        <code class="ms-0">optional</code>
                                                    </td>
                                                    <td>
                                                        Resets the sticky element back to it's original state when user
                                                        starts rever scrolling. Accepts <code>true</code> or
                                                        <code>false</code> values. Default value is set too
                                                        <code>false</code>.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <code>data-kt-sticky-width</code>
                                                    </td>
                                                    <td>
                                                        <code class="ms-0">mandatory</code>
                                                    </td>
                                                    <td>
                                                        <div class="mb-3">
                                                            Specifies the sticky component's width in a <code>px</code>
                                                            value. For example: <code>400px</code>.
                                                        </div>

                                                        kt_docs_content_container

                                                        <div class="mb-3">
                                                            This is also compatible with Bootstrap's standard breakpoint
                                                            sizing (eg: <code>sm, md, lg, xl</code>) with a similar
                                                            <code>px</code> values. For responsive options, this attribute
                                                            value must be written as an object string to enable multiple
                                                            responsive breakpoints.
                                                        </div>

                                                        <div class="mb-3">
                                                            For example: <code>{default:'300px', 'md': '500px'}</code>
                                                            indicates that the sticky component has <code>500px</code>
                                                            width on screens larger than <code>md</code> and
                                                            <code>300px</code> for every other screen size.<br />
                                                        </div>

                                                        <div class="mb-0">
                                                            To use width from other element just pass a JSON value with
                                                            element selector:
                                                            <code>data-kt-sticky-width="{target: '#reference_element_id'}"</code>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <code>data-kt-sticky-left</code>
                                                    </td>
                                                    <td>
                                                        <code class="ms-0">optional</code>
                                                    </td>
                                                    <td>
                                                        <div class="mb-3">
                                                            Specifies the sticky component's left position from the parent
                                                            container in either a <code>px</code> value or
                                                            <code>auto</code>. For example: <code>100px</code>.
                                                        </div>

                                                        <div class="mb-3">
                                                            This is also compatible with Bootstrap's standard breakpoint
                                                            sizing (eg: <code>sm, md, lg, xl</code>) with a similar
                                                            <code>px</code> values. For responsive options, this attribute
                                                            value must be written as an object string to enable multiple
                                                            responsive breakpoints.
                                                        </div>

                                                        For example: <code>{default:'auto', 'md': '50px'}</code> indicates
                                                        that the sticky component has a left position of <code>50px</code>
                                                        on screens larger than <code>md</code> and is <code>auto</code> for
                                                        every other screen size.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <code>data-kt-sticky-top</code>
                                                    </td>
                                                    <td>
                                                        <code class="ms-0">optional</code>
                                                    </td>
                                                    <td>
                                                        <div class="mb-3">
                                                            Specifies the sticky component's top position from the parent
                                                            container in either a <code>px</code> value or
                                                            <code>auto</code>. For example: <code>100px</code>.
                                                        </div>

                                                        <div class="mb-3">
                                                            This is also compatible with Bootstrap's standard breakpoint
                                                            sizing (eg: <code>sm, md, lg, xl</code>) with a similar
                                                            <code>px</code> values. For responsive options, this attribute
                                                            value must be written as an object string to enable multiple
                                                            responsive breakpoints.
                                                        </div>

                                                        For example: <code>{default:'auto', 'md': '50px'}</code> indicates
                                                        that the sticky component has a top position of <code>50px</code> on
                                                        screens larger than <code>md</code> and is <code>auto</code> for
                                                        every other screen size.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <code>data-kt-sticky-animation</code>
                                                    </td>
                                                    <td>
                                                        <code class="ms-0">optional</code>
                                                    </td>
                                                    <td>
                                                        Toggles the sticky component's animation introduction. Suitable to
                                                        be enabled when the sticky component is required to slide into
                                                        position when transitioning from a regular state to a sticky state.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <code>data-kt-sticky-zindex</code>
                                                    </td>
                                                    <td>
                                                        <code class="ms-0">optional</code>
                                                    </td>
                                                    <td>
                                                        Toggles the sticky component's <code>z-index</code> value. Accepts a
                                                        <code>number</code> value.
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
                                <h1 class="anchor fw-bold mb-5" id="methods" data-kt-scroll-offset="50">
                                    <a href="#methods"></a>

                                    Methods
                                </h1>
                                <!--end::Heading-->


                                <!--begin::Block-->
                                <div class="py-5">
                                    All sticky components are initialized automatically, however the following are Sticky's
                                    functionality methods for more control.
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
                                                    <th class="min-w-175px">Name</th>
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
                                                        <code>KTSticky (DOMElement element)</code>
                                                    </td>
                                                    <td>
                                                        Constructs a new instance of <code>KTSticky</code> class and
                                                        initializes a Sticky control:
                                                        <div class="pt-3 mb-3">
                                                            <!--begin::Highlight-->
                                                            <div class="highlight"> <button class="highlight-copy btn"
                                                                    data-bs-toggle="tooltip"
                                                                    title="Copy code">copy</button>
                                                                <div class="highlight-code">
                                                                    <pre class="language-javascript"><code class="language-javascript">var stickyElement = document.querySelector(&quot;#kt_sticky_control&quot;);
var sticky = new KTSticky(stickyElement);</code></pre>
                                                                </div>
                                                            </div><!--end::Highlight-->
                                                        </div>

                                                        <!--begin::Information-->
                                                        <div
                                                            class="d-flex align-items-center rounded py-5 px-5 bg-light-success ">
                                                            <i class="ki-duotone ki-information-5 fs-3x text-success me-5"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span class="path3"></span></i>
                                                            <!--begin::Description-->
                                                            <div class="text-gray-700 fw-bold fs-6">
                                                                Remove <code>data-kt-sticky="true"</code> attribute to
                                                                avoid lazy initialization.
                                                            </div> <!--end::Description-->
                                                        </div><!--end::Information-->
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <code>createInstances (DOMString selector)</code>
                                                    </td>
                                                    <td>
                                                        Initializes Sticky instances by selector. Default value of
                                                        <code>selector</code> is <code>[data-kt-sticky="true"]</code>.
                                                        This method can be used to initialize dynamicly populated Sticky
                                                        instances(e.g: after Ajax request).
                                                        <div class="pt-3">
                                                            <!--begin::Highlight-->
                                                            <div class="highlight"> <button class="highlight-copy btn"
                                                                    data-bs-toggle="tooltip"
                                                                    title="Copy code">copy</button>
                                                                <div class="highlight-code">
                                                                    <pre class="language-javascript"><code class="language-javascript">KTSticky.createInstances();</code></pre>
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
                                                        Get the Sticky instance created

                                                        <div class="pt-3">
                                                            <!--begin::Highlight-->
                                                            <div class="highlight"> <button class="highlight-copy btn"
                                                                    data-bs-toggle="tooltip"
                                                                    title="Copy code">copy</button>
                                                                <div class="highlight-code">
                                                                    <pre class="language-javascript"><code class="language-javascript">var stickyElement = document.querySelector(&quot;#kt_sticky_example_1&quot;);
var sticky = KTSticky.getInstance(stickyElement);</code></pre>
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
                                                        <code>update</code>
                                                    </td>
                                                    <td>
                                                        Forces the sticky component to update with any modifications done.
                                                        <div class="pt-3">
                                                            <!--begin::Highlight-->
                                                            <div class="highlight"> <button class="highlight-copy btn"
                                                                    data-bs-toggle="tooltip"
                                                                    title="Copy code">copy</button>
                                                                <div class="highlight-code">
                                                                    <pre class="language-javascript"><code class="language-javascript">sticky.update();</code></pre>
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
                            <!--begin::Section-->
                            <div class="pt-10">

                                <!--begin::Heading-->
                                <h1 class="anchor fw-bold mb-5" id="events" data-kt-scroll-offset="50">
                                    <a href="#events"></a>

                                    Events
                                </h1>
                                <!--end::Heading-->


                                <!--begin::Block-->
                                <div class="py-5">
                                    Below are few events for hooking into the Sticky functionality.
                                </div>
                                <!--end::Block-->

                                <!--begin::Table-->
                                <div class="pt-2">
                                    <!--begin::Table wrapper-->
                                    <div class="table-responsive border rounded">
                                        <!--begin::Table-->
                                        <table class="table table-striped mb-0 g-6">
                                            <!--begin::Head-->
                                            <thead>
                                                <tr class="fs-4 fw-bold p-6">
                                                    <th class="min-w-125x">Event Type</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <!--end::Head-->

                                            <!--begin::Body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <code>kt.sticky.on</code>
                                                    </td>
                                                    <td>
                                                        This event fires on when sticky is enabled from a regular state to a
                                                        sticky state.

                                                        <div class="pt-3">
                                                            <!--begin::Highlight-->
                                                            <div class="highlight"> <button class="highlight-copy btn"
                                                                    data-bs-toggle="tooltip"
                                                                    title="Copy code">copy</button>
                                                                <div class="highlight-code">
                                                                    <pre class="language-javascript"><code class="language-javascript">var stickyElement = document.querySelector(&quot;#kt_sticky_example_1&quot;);
var sticky = KTSticky.getInstance(stickyElement);
sticky.on(&quot;kt.sticky.on&quot;, function() {
    // console.log(&quot;kt.sticky.on event is fired&quot;);
});</code></pre>
                                                                </div>
                                                            </div><!--end::Highlight-->
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <code>kt.sticky.off</code>
                                                    </td>
                                                    <td>
                                                        This event fires on when sticky is disnabled from a sticky state to
                                                        a regular state.

                                                        <div class="pt-3">
                                                            <!--begin::Highlight-->
                                                            <div class="highlight"> <button class="highlight-copy btn"
                                                                    data-bs-toggle="tooltip"
                                                                    title="Copy code">copy</button>
                                                                <div class="highlight-code">
                                                                    <pre class="language-javascript"><code class="language-javascript">var stickyElement = document.querySelector(&quot;#kt_sticky_example_1&quot;);
var sticky = KTSticky.getInstance(stickyElement);
sticky.on(&quot;kt.sticky.off&quot;, function() {
    // console.log(&quot;kt.sticky.off event is fired&quot;);
});</code></pre>
                                                                </div>
                                                            </div><!--end::Highlight-->
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <code>kt.sticky.change</code>
                                                    </td>
                                                    <td>
                                                        This event fires on when sticky is changed from either a regular
                                                        state to a sticky state or vice versa.

                                                        <div class="pt-3">
                                                            <!--begin::Highlight-->
                                                            <div class="highlight"> <button class="highlight-copy btn"
                                                                    data-bs-toggle="tooltip"
                                                                    title="Copy code">copy</button>
                                                                <div class="highlight-code">
                                                                    <pre class="language-javascript"><code class="language-javascript">var stickyElement = document.querySelector(&quot;#kt_sticky_example_1&quot;);
var sticky = KTSticky.getInstance(stickyElement);
sticky.on(&quot;kt.sticky.change&quot;, function() {
    // console.log(&quot;kt.sticky.change event is fired&quot;);
});</code></pre>
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
                        <!--end::Content-->

                        <!--begin::Sidebar-->
                        <div class="flex-column flex-lg-row-auto w-100 w-xl-300px pt-10 mb-10">
                            <!--begin::Card-->
                            <div class="card card-flush bg-light mb-0" data-kt-sticky="true"
                                data-kt-sticky-name="docs-sticky-summary"
                                data-kt-sticky-offset="{default: false, xl: '50px'}"
                                data-kt-sticky-width="{lg: '250px', xl: '300px'}" data-kt-sticky-left="auto"
                                data-kt-sticky-top="50px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Basic Example</h2>
                                    </div>
                                    <!--end::Card title-->

                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::More options-->
                                        <a href="javascript:void(0)" class="btn btn-sm btn-light btn-icon"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <i class="ki-duotone ki-dots-horizontal fs-3x"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-6 w-200px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="javascript:void(0)" class="menu-link px-3">
                                                    Pause Subscription
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="javascript:void(0)" class="menu-link px-3"
                                                    data-kt-subscriptions-view-action="delete">
                                                    Edit Subscription
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="javascript:void(0)" class="menu-link text-danger px-3"
                                                    data-kt-subscriptions-view-action="edit">
                                                    Cancel Subscription
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                        <!--end::More options-->
                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                                <!--end::Card header-->

                                <!--begin::Card body-->
                                <div class="card-body pt-0 fs-6">
                                    <!--begin::Section-->
                                    <div class="mb-7">

                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-60px symbol-circle me-3">
                                                <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Info-->
                                            <div class="d-flex flex-column">
                                                <!--begin::Name-->
                                                <a href="javascript:void(0)"
                                                    class="fs-4 fw-bold text-gray-900 text-hover-primary me-2">Sean
                                                    Bean</a>
                                                <!--end::Name-->

                                                <!--begin::Email-->
                                                <a href="javascript:void(0)"
                                                    class="fw-semibold text-gray-600 text-hover-primary">sean@dellito.com</a>
                                                <!--end::Email-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Section-->

                                    <!--begin::Seperator-->
                                    <div class="separator separator-dashed mb-7"></div>
                                    <!--end::Seperator-->

                                    <!--begin::Section-->
                                    <div class="mb-7">
                                        <!--begin::Title-->
                                        <h5 class="mb-4">Product details</h5>
                                        <!--end::Title-->

                                        <!--begin::Details-->
                                        <div class="mb-0">
                                            <!--begin::Plan-->
                                            <span class="badge badge-info me-2">Basic Bundle</span>
                                            <!--end::Plan-->

                                            <!--begin::Price-->
                                            <span class="fw-semibold text-gray-600">$149.99 / Year</span>
                                            <!--end::Price-->
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Section-->

                                    <!--begin::Seperator-->
                                    <div class="separator separator-dashed mb-7"></div>
                                    <!--end::Seperator-->

                                    <!--begin::Section-->
                                    <div class="mb-10">
                                        <!--begin::Title-->
                                        <h5 class="mb-4">Payment Details</h5>
                                        <!--end::Title-->

                                        <!--begin::Details-->
                                        <div class="mb-0">
                                            <!--begin::Card info-->
                                            <div class="fw-semibold text-gray-600 d-flex align-items-center">
                                                Mastercard

                                                <img src="assets/media/svg/card-logos/mastercard.svg" class="w-35px ms-2"
                                                    alt="" />
                                            </div>
                                            <!--end::Card info-->

                                            <!--begin::Card expiry-->
                                            <div class="fw-semibold text-gray-600">Expires Dec 2024</div>
                                            <!--end::Card expiry-->
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Section-->

                                    <!--begin::Seperator-->
                                    <div class="separator separator-dashed mb-7"></div>
                                    <!--end::Seperator-->

                                    <!--begin::Section-->
                                    <div class="mb-10">
                                        <!--begin::Title-->
                                        <h5 class="mb-4">Subscription Details</h5>
                                        <!--end::Title-->

                                        <!--begin::Details-->
                                        <table class="table fs-6 fw-semibold gs-0 gy-2 gx-2">
                                            <!--begin::Row-->
                                            <tr class="">
                                                <td class="text-gray-500">Subscription ID:</td>
                                                <td class="text-gray-800">sub_4567_8765</td>
                                            </tr>
                                            <!--end::Row-->

                                            <!--begin::Row-->
                                            <tr class="">
                                                <td class="text-gray-500">Started:</td>
                                                <td class="text-gray-800">15 Apr 2021</td>
                                            </tr>
                                            <!--end::Row-->

                                            <!--begin::Row-->
                                            <tr class="">
                                                <td class="text-gray-500">Status:</td>
                                                <td><span class="badge badge-light-success">Active</span></td>
                                            </tr>
                                            <!--end::Row-->

                                            <!--begin::Row-->
                                            <tr class="">
                                                <td class="text-gray-500">Next Invoice:</td>
                                                <td class="text-gray-800">15 Apr 2022</td>
                                            </tr>
                                            <!--end::Row-->
                                        </table>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Section-->

                                    <!--begin::Actions-->
                                    <div class="mb-0">
                                        <a href="apps/subscriptions/add" class="btn btn-primary"
                                            id="kt_subscriptions_create_button">
                                            Edit Subscription
                                        </a>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Sidebar-->
                    </div>
                    <!--end::Layout-->
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


