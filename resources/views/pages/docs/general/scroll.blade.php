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
                            Scroll is an exclusive plugin of Metronic that provides better navite
                            scrolling experience with custom scrollbar style using CSS only and smart height calculation
                            with Javascript.
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" data-kt-scroll-offset="85" id="usage">
                            <a href="#usage" data-kt-scroll-toggle></a>
                            Usage
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            Scroll's style and scripts bundles are globally included in all pages.
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
                                    Scroll comes with its own CSS and JS files that creates the smooth logic and beautiful
                                    design for each of our custom scrollbars.
                                </li>
                                <li class="py-2">
                                    To initialize it, simply add the <code>.scroll</code> CSS class to the required HTML
                                    container.
                                </li>
                                <li class="py-2">
                                    Scroll instances can be created programmatically. <a href="#methods"
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
                        <h1 class="anchor fw-bold mb-5" id="basic" data-kt-scroll-offset="50">
                            <a href="#basic"></a>

                            Basic
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.scroll</code> in a HTML container with a suitable fixed height for a basic scroll
                            bar:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-5 p-lg-15">
                                <!--begin::Scroll-->
                                <div class="scroll h-400px px-5">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Leo vel fringilla est ullamcorper eget
                                        nulla. Faucibus vitae aliquet nec ullamcorper sit amet risus nullam eget. Sed
                                        faucibus turpis in eu mi. Velit egestas dui id ornare arcu odio. Arcu non odio
                                        euismod lacinia at quis risus sed vulputate. Sed egestas egestas fringilla phasellus
                                        faucibus scelerisque eleifend donec. Vehicula ipsum a arcu cursus. Gravida neque
                                        convallis a cras semper. Amet massa vitae tortor condimentum. Lectus mauris ultrices
                                        eros in cursus turpis massa. Orci sagittis eu volutpat odio facilisis mauris sit
                                        amet. Hac habitasse platea dictumst quisque sagittis purus sit amet volutpat. Erat
                                        pellentesque adipiscing commodo elit at imperdiet dui. Vestibulum morbi blandit
                                        cursus risus at ultrices.</p>

                                    <p>Quis ipsum suspendisse ultrices gravida dictum. Egestas egestas fringilla phasellus
                                        faucibus scelerisque eleifend donec. Vitae proin sagittis nisl rhoncus mattis
                                        rhoncus urna. Eget arcu dictum varius duis at consectetur lorem donec massa. Morbi
                                        tincidunt ornare massa eget. Ornare arcu dui vivamus arcu felis. Egestas purus
                                        viverra accumsan in nisl nisi scelerisque eu. Aliquet nec ullamcorper sit amet.
                                        Dignissim enim sit amet venenatis urna cursus eget. Accumsan sit amet nulla facilisi
                                        morbi tempus iaculis urna. Non consectetur a erat nam at. Ut morbi tincidunt augue
                                        interdum velit. Ridiculus mus mauris vitae ultricies leo integer malesuada.</p>

                                    <p>Ipsum dolor sit amet consectetur adipiscing. Blandit cursus risus at ultrices mi
                                        tempus imperdiet. Risus nullam eget felis eget. A lacus vestibulum sed arcu non.
                                        Tristique magna sit amet purus gravida quis blandit turpis cursus. Imperdiet nulla
                                        malesuada pellentesque elit. Nec dui nunc mattis enim ut tellus elementum sagittis.
                                        Ac placerat vestibulum lectus mauris. Facilisi etiam dignissim diam quis enim.
                                        Suspendisse faucibus interdum posuere lorem ipsum dolor. Mattis rhoncus urna neque
                                        viverra justo nec ultrices. Luctus accumsan tortor posuere ac ut consequat semper
                                        viverra nam. At varius vel pharetra vel turpis nunc eget. Accumsan sit amet nulla
                                        facilisi morbi tempus iaculis urna. Ut morbi tincidunt augue interdum velit euismod
                                        in.</p>

                                    <p>Etiam tempor orci eu lobortis elementum nibh. Libero volutpat sed cras ornare arcu.
                                        Risus sed vulputate odio ut enim. Iaculis nunc sed augue lacus viverra vitae. Enim
                                        neque volutpat ac tincidunt vitae. Iaculis at erat pellentesque adipiscing commodo
                                        elit at imperdiet dui. Nunc mi ipsum faucibus vitae aliquet nec ullamcorper sit
                                        amet. Ullamcorper a lacus vestibulum sed arcu. In dictum non consectetur a erat.
                                        Varius quam quisque id diam vel quam elementum. Cursus eget nunc scelerisque viverra
                                        mauris in aliquam sem fringilla. Sed viverra tellus in hac habitasse platea
                                        dictumst. Amet cursus sit amet dictum sit amet. Elit duis tristique sollicitudin
                                        nibh sit amet commodo nulla facilisi. Non tellus orci ac auctor augue mauris.</p>

                                    <p>Ut lectus arcu bibendum at varius vel. Arcu felis bibendum ut tristique et egestas
                                        quis. Sit amet commodo nulla facilisi nullam vehicula ipsum. Tellus cras adipiscing
                                        enim eu turpis egestas pretium. Imperdiet massa tincidunt nunc pulvinar sapien et.
                                        Integer eget aliquet nibh praesent tristique magna sit. Lacinia at quis risus sed
                                        vulputate odio ut. Amet mattis vulputate enim nulla aliquet porttitor lacus luctus
                                        accumsan. Aenean pharetra magna ac placerat vestibulum. Aenean euismod elementum
                                        nisi quis eleifend quam adipiscing vitae. Viverra nam libero justo laoreet sit amet
                                        cursus sit amet. Diam vel quam elementum pulvinar. Massa vitae tortor condimentum
                                        lacinia quis vel eros donec ac.</p>
                                </div>
                                <!--end::Scroll-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;scroll h-400px px-5&quot;&gt;
    ...
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
                        <h1 class="anchor fw-bold mb-5" id="hover" data-kt-scroll-offset="50">
                            <a href="#hover"></a>

                            Hover
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>.hover-scroll</code>, <code>.hover-scroll-y</code> and <code>.hover-scroll-x</code>
                            in a HTML container with a suitable fixed height to display the scrollbar with an overlay on
                            hover.
                            This ensures that the scrollbar is always within the specifiec container:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-5 p-lg-15">
                                <!--begin::Scroll-->
                                <div class="border rounded hover-scroll h-300px p-5 mb-10">
                                    <div style="width: 1200px">
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
                                </div>
                                <!--end::Scroll-->

                                <!--begin::Scroll-->
                                <div class="border rounded hover-scroll-y h-300px py-5 mb-10">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Leo vel fringilla est ullamcorper eget
                                        nulla. Faucibus vitae aliquet nec ullamcorper sit amet risus nullam eget. Sed
                                        faucibus turpis in eu mi. Velit egestas dui id ornare arcu odio. Arcu non odio
                                        euismod lacinia at quis risus sed vulputate. Sed egestas egestas fringilla phasellus
                                        faucibus scelerisque eleifend donec. Vehicula ipsum a arcu cursus. Gravida neque
                                        convallis a cras semper. Amet massa vitae tortor condimentum. Lectus mauris ultrices
                                        eros in cursus turpis massa. Orci sagittis eu volutpat odio facilisis mauris sit
                                        amet. Hac habitasse platea dictumst quisque sagittis purus sit amet volutpat. Erat
                                        pellentesque adipiscing commodo elit at imperdiet dui. Vestibulum morbi blandit
                                        cursus risus at ultrices.</p>

                                    <p>Quis ipsum suspendisse ultrices gravida dictum. Egestas egestas fringilla phasellus
                                        faucibus scelerisque eleifend donec. Vitae proin sagittis nisl rhoncus mattis
                                        rhoncus urna. Eget arcu dictum varius duis at consectetur lorem donec massa. Morbi
                                        tincidunt ornare massa eget. Ornare arcu dui vivamus arcu felis. Egestas purus
                                        viverra accumsan in nisl nisi scelerisque eu. Aliquet nec ullamcorper sit amet.
                                        Dignissim enim sit amet venenatis urna cursus eget. Accumsan sit amet nulla facilisi
                                        morbi tempus iaculis urna. Non consectetur a erat nam at. Ut morbi tincidunt augue
                                        interdum velit. Ridiculus mus mauris vitae ultricies leo integer malesuada.</p>

                                    <p>Ipsum dolor sit amet consectetur adipiscing. Blandit cursus risus at ultrices mi
                                        tempus imperdiet. Risus nullam eget felis eget. A lacus vestibulum sed arcu non.
                                        Tristique magna sit amet purus gravida quis blandit turpis cursus. Imperdiet nulla
                                        malesuada pellentesque elit. Nec dui nunc mattis enim ut tellus elementum sagittis.
                                        Ac placerat vestibulum lectus mauris. Facilisi etiam dignissim diam quis enim.
                                        Suspendisse faucibus interdum posuere lorem ipsum dolor. Mattis rhoncus urna neque
                                        viverra justo nec ultrices. Luctus accumsan tortor posuere ac ut consequat semper
                                        viverra nam. At varius vel pharetra vel turpis nunc eget. Accumsan sit amet nulla
                                        facilisi morbi tempus iaculis urna. Ut morbi tincidunt augue interdum velit euismod
                                        in.</p>

                                    <p>Etiam tempor orci eu lobortis elementum nibh. Libero volutpat sed cras ornare arcu.
                                        Risus sed vulputate odio ut enim. Iaculis nunc sed augue lacus viverra vitae. Enim
                                        neque volutpat ac tincidunt vitae. Iaculis at erat pellentesque adipiscing commodo
                                        elit at imperdiet dui. Nunc mi ipsum faucibus vitae aliquet nec ullamcorper sit
                                        amet. Ullamcorper a lacus vestibulum sed arcu. In dictum non consectetur a erat.
                                        Varius quam quisque id diam vel quam elementum. Cursus eget nunc scelerisque viverra
                                        mauris in aliquam sem fringilla. Sed viverra tellus in hac habitasse platea
                                        dictumst. Amet cursus sit amet dictum sit amet. Elit duis tristique sollicitudin
                                        nibh sit amet commodo nulla facilisi. Non tellus orci ac auctor augue mauris.</p>

                                    <p>Ut lectus arcu bibendum at varius vel. Arcu felis bibendum ut tristique et egestas
                                        quis. Sit amet commodo nulla facilisi nullam vehicula ipsum. Tellus cras adipiscing
                                        enim eu turpis egestas pretium. Imperdiet massa tincidunt nunc pulvinar sapien et.
                                        Integer eget aliquet nibh praesent tristique magna sit. Lacinia at quis risus sed
                                        vulputate odio ut. Amet mattis vulputate enim nulla aliquet porttitor lacus luctus
                                        accumsan. Aenean pharetra magna ac placerat vestibulum. Aenean euismod elementum
                                        nisi quis eleifend quam adipiscing vitae. Viverra nam libero justo laoreet sit amet
                                        cursus sit amet. Diam vel quam elementum pulvinar. Massa vitae tortor condimentum
                                        lacinia quis vel eros donec ac.</p>
                                </div>
                                <!--end::Scroll-->

                                <!--begin::Scroll-->
                                <div class="border rounded hover-scroll-x h-auto px-5 mb-10">
                                    <div style="width: 1200px">
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
                                    </div>
                                </div>
                                <!--end::Scroll-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;hover-scroll h-300px px-5&quot;&gt;
    &lt;div style=&quot;width: 1200px&quot;&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;hover-scroll-y h-300px px-5&quot;&gt;
    ...
&lt;/div&gt;

&lt;div class=&quot;hover-scroll-x h-300px px-5&quot;&gt;
    &lt;div style=&quot;width: 1200px&quot;&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="auto-height" data-kt-scroll-offset="50">
                            <a href="#auto-height"></a>

                            Auto Height
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Here's an example of using JS to initialize a scroll element with smart height calculation as
                            explained in the <a href="#options" data-kt-scroll-toggle>Options References</a>.

                            When using this method to initialize the scrollbar, the scrollbar container height will always
                            fit within the window height, regardless of screen size.<br /><br />

                            <a href="#kt_example_js_anchor" class="me-1" data-kt-scroll-toggle>Click here</a> to
                            centralize the page to the scrolling container. You can try to resize your browser height and
                            see the scroll container automatically re-calculates its own height to fit within the viewport
                            at all times.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div id="kt_example_js_anchor" class="rounded border p-10 p-lg-20">
                                <!--begin::Scroll-->
                                <h3 id="kt_example_js_header" class="pb-5">This is a header</h3>
                                <div class="scroll pe-5" data-kt-scroll="true" data-kt-scroll-height="auto"
                                    data-kt-scroll-wrappers="#kt_example_js_content"
                                    data-kt-scroll-dependencies="#kt_example_js_header, #kt_example_js_footer, #kt_header"
                                    data-kt-scroll-offset="100px">
                                    <div id="kt_example_js_content">
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
                                </div>
                                <h3 id="kt_example_js_footer" class="pt-5">This is a footer</h3>
                                <!--end::Scroll-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Header--&gt;
&lt;h3 id=&quot;kt_example_js_header&quot; class=&quot;pb-5&quot;&gt;This is a header&lt;/h3&gt;
&lt;!--end::Header--&gt;

&lt;!--begin::Scroll--&gt;
&lt;div class=&quot;scroll pe-5&quot;
data-kt-scroll=&quot;true&quot;
data-kt-scroll-height=&quot;auto&quot;
data-kt-scroll-wrappers=&quot;#kt_example_js_content&quot;
data-kt-scroll-dependencies=&quot;#kt_example_js_header, #kt_example_js_footer, #kt_header&quot;
data-kt-scroll-offset=&quot;100px&quot;&gt;
    &lt;div id=&quot;kt_example_js_content&quot;&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;
&lt;!--end::Scroll--&gt;

&lt;!--begin::Footer--&gt;
&lt;h3 id=&quot;kt_example_js_footer&quot; class=&quot;pt-5&quot;&gt;This is a footer&lt;/h3&gt;
&lt;!--end::Footer--&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="fixed-height" data-kt-scroll-offset="50">
                            <a href="#fixed-height"></a>

                            Fixed Height
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Here's an example of initializing a scroll element with fixed height for responsive breakpoints
                            as described in the <a href="#options" data-kt-scroll-toggle>Options References</a>.
                            The below examples shows a scroll element with fixed height <code>{default: '200px', lg:
                                '300px'}</code> which means the element's height is set <code>400px</code> for breakpoints
                            above <code>lg</code> and
                            <code>100px</code> for breakpoints below <code>lg</code>. Try to resize your browser screen to
                            see this example in action.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div id="kt_example_js_anchor" class="rounded border p-10 p-lg-20">
                                <!--begin::Scroll-->
                                <div class="scroll pe-5" data-kt-scroll="true"
                                    data-kt-scroll-height="{default: '100px', lg: '300px'}">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Leo vel fringilla est ullamcorper eget
                                        nulla. Faucibus vitae aliquet nec ullamcorper sit amet risus nullam eget. Sed
                                        faucibus turpis in eu mi. Velit egestas dui id ornare arcu odio. Arcu non odio
                                        euismod lacinia at quis risus sed vulputate. Sed egestas egestas fringilla phasellus
                                        faucibus scelerisque eleifend donec. Vehicula ipsum a arcu cursus. Gravida neque
                                        convallis a cras semper. Amet massa vitae tortor condimentum. Lectus mauris ultrices
                                        eros in cursus turpis massa. Orci sagittis eu volutpat odio facilisis mauris sit
                                        amet. Hac habitasse platea dictumst quisque sagittis purus sit amet volutpat. Erat
                                        pellentesque adipiscing commodo elit at imperdiet dui. Vestibulum morbi blandit
                                        cursus risus at ultrices.</p>

                                    <p>Quis ipsum suspendisse ultrices gravida dictum. Egestas egestas fringilla phasellus
                                        faucibus scelerisque eleifend donec. Vitae proin sagittis nisl rhoncus mattis
                                        rhoncus urna. Eget arcu dictum varius duis at consectetur lorem donec massa. Morbi
                                        tincidunt ornare massa eget. Ornare arcu dui vivamus arcu felis. Egestas purus
                                        viverra accumsan in nisl nisi scelerisque eu. Aliquet nec ullamcorper sit amet.
                                        Dignissim enim sit amet venenatis urna cursus eget. Accumsan sit amet nulla facilisi
                                        morbi tempus iaculis urna. Non consectetur a erat nam at. Ut morbi tincidunt augue
                                        interdum velit. Ridiculus mus mauris vitae ultricies leo integer malesuada.</p>

                                    <p>Ipsum dolor sit amet consectetur adipiscing. Blandit cursus risus at ultrices mi
                                        tempus imperdiet. Risus nullam eget felis eget. A lacus vestibulum sed arcu non.
                                        Tristique magna sit amet purus gravida quis blandit turpis cursus. Imperdiet nulla
                                        malesuada pellentesque elit. Nec dui nunc mattis enim ut tellus elementum sagittis.
                                        Ac placerat vestibulum lectus mauris. Facilisi etiam dignissim diam quis enim.
                                        Suspendisse faucibus interdum posuere lorem ipsum dolor. Mattis rhoncus urna neque
                                        viverra justo nec ultrices. Luctus accumsan tortor posuere ac ut consequat semper
                                        viverra nam. At varius vel pharetra vel turpis nunc eget. Accumsan sit amet nulla
                                        facilisi morbi tempus iaculis urna. Ut morbi tincidunt augue interdum velit euismod
                                        in.</p>

                                    <p>Etiam tempor orci eu lobortis elementum nibh. Libero volutpat sed cras ornare arcu.
                                        Risus sed vulputate odio ut enim. Iaculis nunc sed augue lacus viverra vitae. Enim
                                        neque volutpat ac tincidunt vitae. Iaculis at erat pellentesque adipiscing commodo
                                        elit at imperdiet dui. Nunc mi ipsum faucibus vitae aliquet nec ullamcorper sit
                                        amet. Ullamcorper a lacus vestibulum sed arcu. In dictum non consectetur a erat.
                                        Varius quam quisque id diam vel quam elementum. Cursus eget nunc scelerisque viverra
                                        mauris in aliquam sem fringilla. Sed viverra tellus in hac habitasse platea
                                        dictumst. Amet cursus sit amet dictum sit amet. Elit duis tristique sollicitudin
                                        nibh sit amet commodo nulla facilisi. Non tellus orci ac auctor augue mauris.</p>

                                    <p>Ut lectus arcu bibendum at varius vel. Arcu felis bibendum ut tristique et egestas
                                        quis. Sit amet commodo nulla facilisi nullam vehicula ipsum. Tellus cras adipiscing
                                        enim eu turpis egestas pretium. Imperdiet massa tincidunt nunc pulvinar sapien et.
                                        Integer eget aliquet nibh praesent tristique magna sit. Lacinia at quis risus sed
                                        vulputate odio ut. Amet mattis vulputate enim nulla aliquet porttitor lacus luctus
                                        accumsan. Aenean pharetra magna ac placerat vestibulum. Aenean euismod elementum
                                        nisi quis eleifend quam adipiscing vitae. Viverra nam libero justo laoreet sit amet
                                        cursus sit amet. Diam vel quam elementum pulvinar. Massa vitae tortor condimentum
                                        lacinia quis vel eros donec ac.</p>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Leo vel fringilla est ullamcorper eget
                                        nulla. Faucibus vitae aliquet nec ullamcorper sit amet risus nullam eget. Sed
                                        faucibus turpis in eu mi. Velit egestas dui id ornare arcu odio. Arcu non odio
                                        euismod lacinia at quis risus sed vulputate. Sed egestas egestas fringilla phasellus
                                        faucibus scelerisque eleifend donec. Vehicula ipsum a arcu cursus. Gravida neque
                                        convallis a cras semper. Amet massa vitae tortor condimentum. Lectus mauris ultrices
                                        eros in cursus turpis massa. Orci sagittis eu volutpat odio facilisis mauris sit
                                        amet. Hac habitasse platea dictumst quisque sagittis purus sit amet volutpat. Erat
                                        pellentesque adipiscing commodo elit at imperdiet dui. Vestibulum morbi blandit
                                        cursus risus at ultrices.</p>

                                    <p>Quis ipsum suspendisse ultrices gravida dictum. Egestas egestas fringilla phasellus
                                        faucibus scelerisque eleifend donec. Vitae proin sagittis nisl rhoncus mattis
                                        rhoncus urna. Eget arcu dictum varius duis at consectetur lorem donec massa. Morbi
                                        tincidunt ornare massa eget. Ornare arcu dui vivamus arcu felis. Egestas purus
                                        viverra accumsan in nisl nisi scelerisque eu. Aliquet nec ullamcorper sit amet.
                                        Dignissim enim sit amet venenatis urna cursus eget. Accumsan sit amet nulla facilisi
                                        morbi tempus iaculis urna. Non consectetur a erat nam at. Ut morbi tincidunt augue
                                        interdum velit. Ridiculus mus mauris vitae ultricies leo integer malesuada.</p>

                                    <p>Ipsum dolor sit amet consectetur adipiscing. Blandit cursus risus at ultrices mi
                                        tempus imperdiet. Risus nullam eget felis eget. A lacus vestibulum sed arcu non.
                                        Tristique magna sit amet purus gravida quis blandit turpis cursus. Imperdiet nulla
                                        malesuada pellentesque elit. Nec dui nunc mattis enim ut tellus elementum sagittis.
                                        Ac placerat vestibulum lectus mauris. Facilisi etiam dignissim diam quis enim.
                                        Suspendisse faucibus interdum posuere lorem ipsum dolor. Mattis rhoncus urna neque
                                        viverra justo nec ultrices. Luctus accumsan tortor posuere ac ut consequat semper
                                        viverra nam. At varius vel pharetra vel turpis nunc eget. Accumsan sit amet nulla
                                        facilisi morbi tempus iaculis urna. Ut morbi tincidunt augue interdum velit euismod
                                        in.</p>

                                    <p>Etiam tempor orci eu lobortis elementum nibh. Libero volutpat sed cras ornare arcu.
                                        Risus sed vulputate odio ut enim. Iaculis nunc sed augue lacus viverra vitae. Enim
                                        neque volutpat ac tincidunt vitae. Iaculis at erat pellentesque adipiscing commodo
                                        elit at imperdiet dui. Nunc mi ipsum faucibus vitae aliquet nec ullamcorper sit
                                        amet. Ullamcorper a lacus vestibulum sed arcu. In dictum non consectetur a erat.
                                        Varius quam quisque id diam vel quam elementum. Cursus eget nunc scelerisque viverra
                                        mauris in aliquam sem fringilla. Sed viverra tellus in hac habitasse platea
                                        dictumst. Amet cursus sit amet dictum sit amet. Elit duis tristique sollicitudin
                                        nibh sit amet commodo nulla facilisi. Non tellus orci ac auctor augue mauris.</p>

                                    <p>Ut lectus arcu bibendum at varius vel. Arcu felis bibendum ut tristique et egestas
                                        quis. Sit amet commodo nulla facilisi nullam vehicula ipsum. Tellus cras adipiscing
                                        enim eu turpis egestas pretium. Imperdiet massa tincidunt nunc pulvinar sapien et.
                                        Integer eget aliquet nibh praesent tristique magna sit. Lacinia at quis risus sed
                                        vulputate odio ut. Amet mattis vulputate enim nulla aliquet porttitor lacus luctus
                                        accumsan. Aenean pharetra magna ac placerat vestibulum. Aenean euismod elementum
                                        nisi quis eleifend quam adipiscing vitae. Viverra nam libero justo laoreet sit amet
                                        cursus sit amet. Diam vel quam elementum pulvinar. Massa vitae tortor condimentum
                                        lacinia quis vel eros donec ac.</p>
                                </div>
                                <!--end::Scroll-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;!--begin::Scroll--&gt;
&lt;div class=&quot;scroll pe-5&quot;
    data-kt-scroll=&quot;true&quot;
    data-kt-scroll-height=&quot;{default: &#039;100px&#039;, lg: &#039;300px&#039;}&quot;&gt;
    ...
&lt;/div&gt;
&lt;!--end::Scroll--&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="change-scroll-position" data-kt-scroll-offset="50">
                            <a href="#change-scroll-position"></a>

                            Change Scroll Position
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Here's an example of initializing a scroll element with fixed height for responsive breakpoints
                            as described in the <a href="#options" data-kt-scroll-toggle>Options References</a>.
                            The below examples shows a scroll element with fixed height <code>{default: '200px', lg:
                                '300px'}</code> which means the element's height is set <code>400px</code> for breakpoints
                            above <code>lg</code> and
                            <code>100px</code> for breakpoints below <code>lg</code>. Try to resize your browser screen to
                            see this example in action.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10 p-lg-20">
                                <!--begin::Scroll-->
                                <div id="kt_scroll_change_pos" class="scroll pe-5 mb-10" data-kt-scroll="true"
                                    data-kt-scroll-height="{default: '100px', lg: '300px'}">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Leo vel fringilla est ullamcorper eget
                                        nulla. Faucibus vitae aliquet nec ullamcorper sit amet risus nullam eget. Sed
                                        faucibus turpis in eu mi. Velit egestas dui id ornare arcu odio. Arcu non odio
                                        euismod lacinia at quis risus sed vulputate. Sed egestas egestas fringilla phasellus
                                        faucibus scelerisque eleifend donec. Vehicula ipsum a arcu cursus. Gravida neque
                                        convallis a cras semper. Amet massa vitae tortor condimentum. Lectus mauris ultrices
                                        eros in cursus turpis massa. Orci sagittis eu volutpat odio facilisis mauris sit
                                        amet. Hac habitasse platea dictumst quisque sagittis purus sit amet volutpat. Erat
                                        pellentesque adipiscing commodo elit at imperdiet dui. Vestibulum morbi blandit
                                        cursus risus at ultrices.</p>

                                    <p>Quis ipsum suspendisse ultrices gravida dictum. Egestas egestas fringilla phasellus
                                        faucibus scelerisque eleifend donec. Vitae proin sagittis nisl rhoncus mattis
                                        rhoncus urna. Eget arcu dictum varius duis at consectetur lorem donec massa. Morbi
                                        tincidunt ornare massa eget. Ornare arcu dui vivamus arcu felis. Egestas purus
                                        viverra accumsan in nisl nisi scelerisque eu. Aliquet nec ullamcorper sit amet.
                                        Dignissim enim sit amet venenatis urna cursus eget. Accumsan sit amet nulla facilisi
                                        morbi tempus iaculis urna. Non consectetur a erat nam at. Ut morbi tincidunt augue
                                        interdum velit. Ridiculus mus mauris vitae ultricies leo integer malesuada.</p>

                                    <p>Ipsum dolor sit amet consectetur adipiscing. Blandit cursus risus at ultrices mi
                                        tempus imperdiet. Risus nullam eget felis eget. A lacus vestibulum sed arcu non.
                                        Tristique magna sit amet purus gravida quis blandit turpis cursus. Imperdiet nulla
                                        malesuada pellentesque elit. Nec dui nunc mattis enim ut tellus elementum sagittis.
                                        Ac placerat vestibulum lectus mauris. Facilisi etiam dignissim diam quis enim.
                                        Suspendisse faucibus interdum posuere lorem ipsum dolor. Mattis rhoncus urna neque
                                        viverra justo nec ultrices. Luctus accumsan tortor posuere ac ut consequat semper
                                        viverra nam. At varius vel pharetra vel turpis nunc eget. Accumsan sit amet nulla
                                        facilisi morbi tempus iaculis urna. Ut morbi tincidunt augue interdum velit euismod
                                        in.</p>

                                    <p>Etiam tempor orci eu lobortis elementum nibh. Libero volutpat sed cras ornare arcu.
                                        Risus sed vulputate odio ut enim. Iaculis nunc sed augue lacus viverra vitae. Enim
                                        neque volutpat ac tincidunt vitae. Iaculis at erat pellentesque adipiscing commodo
                                        elit at imperdiet dui. Nunc mi ipsum faucibus vitae aliquet nec ullamcorper sit
                                        amet. Ullamcorper a lacus vestibulum sed arcu. In dictum non consectetur a erat.
                                        Varius quam quisque id diam vel quam elementum. Cursus eget nunc scelerisque viverra
                                        mauris in aliquam sem fringilla. Sed viverra tellus in hac habitasse platea
                                        dictumst. Amet cursus sit amet dictum sit amet. Elit duis tristique sollicitudin
                                        nibh sit amet commodo nulla facilisi. Non tellus orci ac auctor augue mauris.</p>

                                    <p>Ut lectus arcu bibendum at varius vel. Arcu felis bibendum ut tristique et egestas
                                        quis. Sit amet commodo nulla facilisi nullam vehicula ipsum. Tellus cras adipiscing
                                        enim eu turpis egestas pretium. Imperdiet massa tincidunt nunc pulvinar sapien et.
                                        Integer eget aliquet nibh praesent tristique magna sit. Lacinia at quis risus sed
                                        vulputate odio ut. Amet mattis vulputate enim nulla aliquet porttitor lacus luctus
                                        accumsan. Aenean pharetra magna ac placerat vestibulum. Aenean euismod elementum
                                        nisi quis eleifend quam adipiscing vitae. Viverra nam libero justo laoreet sit amet
                                        cursus sit amet. Diam vel quam elementum pulvinar. Massa vitae tortor condimentum
                                        lacinia quis vel eros donec ac.</p>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Leo vel fringilla est ullamcorper eget
                                        nulla. Faucibus vitae aliquet nec ullamcorper sit amet risus nullam eget. Sed
                                        faucibus turpis in eu mi. Velit egestas dui id ornare arcu odio. Arcu non odio
                                        euismod lacinia at quis risus sed vulputate. Sed egestas egestas fringilla phasellus
                                        faucibus scelerisque eleifend donec. Vehicula ipsum a arcu cursus. Gravida neque
                                        convallis a cras semper. Amet massa vitae tortor condimentum. Lectus mauris ultrices
                                        eros in cursus turpis massa. Orci sagittis eu volutpat odio facilisis mauris sit
                                        amet. Hac habitasse platea dictumst quisque sagittis purus sit amet volutpat. Erat
                                        pellentesque adipiscing commodo elit at imperdiet dui. Vestibulum morbi blandit
                                        cursus risus at ultrices.</p>

                                    <p>Quis ipsum suspendisse ultrices gravida dictum. Egestas egestas fringilla phasellus
                                        faucibus scelerisque eleifend donec. Vitae proin sagittis nisl rhoncus mattis
                                        rhoncus urna. Eget arcu dictum varius duis at consectetur lorem donec massa. Morbi
                                        tincidunt ornare massa eget. Ornare arcu dui vivamus arcu felis. Egestas purus
                                        viverra accumsan in nisl nisi scelerisque eu. Aliquet nec ullamcorper sit amet.
                                        Dignissim enim sit amet venenatis urna cursus eget. Accumsan sit amet nulla facilisi
                                        morbi tempus iaculis urna. Non consectetur a erat nam at. Ut morbi tincidunt augue
                                        interdum velit. Ridiculus mus mauris vitae ultricies leo integer malesuada.</p>

                                    <p>Ipsum dolor sit amet consectetur adipiscing. Blandit cursus risus at ultrices mi
                                        tempus imperdiet. Risus nullam eget felis eget. A lacus vestibulum sed arcu non.
                                        Tristique magna sit amet purus gravida quis blandit turpis cursus. Imperdiet nulla
                                        malesuada pellentesque elit. Nec dui nunc mattis enim ut tellus elementum sagittis.
                                        Ac placerat vestibulum lectus mauris. Facilisi etiam dignissim diam quis enim.
                                        Suspendisse faucibus interdum posuere lorem ipsum dolor. Mattis rhoncus urna neque
                                        viverra justo nec ultrices. Luctus accumsan tortor posuere ac ut consequat semper
                                        viverra nam. At varius vel pharetra vel turpis nunc eget. Accumsan sit amet nulla
                                        facilisi morbi tempus iaculis urna. Ut morbi tincidunt augue interdum velit euismod
                                        in.</p>

                                    <p>Etiam tempor orci eu lobortis elementum nibh. Libero volutpat sed cras ornare arcu.
                                        Risus sed vulputate odio ut enim. Iaculis nunc sed augue lacus viverra vitae. Enim
                                        neque volutpat ac tincidunt vitae. Iaculis at erat pellentesque adipiscing commodo
                                        elit at imperdiet dui. Nunc mi ipsum faucibus vitae aliquet nec ullamcorper sit
                                        amet. Ullamcorper a lacus vestibulum sed arcu. In dictum non consectetur a erat.
                                        Varius quam quisque id diam vel quam elementum. Cursus eget nunc scelerisque viverra
                                        mauris in aliquam sem fringilla. Sed viverra tellus in hac habitasse platea
                                        dictumst. Amet cursus sit amet dictum sit amet. Elit duis tristique sollicitudin
                                        nibh sit amet commodo nulla facilisi. Non tellus orci ac auctor augue mauris.</p>

                                    <p>Ut lectus arcu bibendum at varius vel. Arcu felis bibendum ut tristique et egestas
                                        quis. Sit amet commodo nulla facilisi nullam vehicula ipsum. Tellus cras adipiscing
                                        enim eu turpis egestas pretium. Imperdiet massa tincidunt nunc pulvinar sapien et.
                                        Integer eget aliquet nibh praesent tristique magna sit. Lacinia at quis risus sed
                                        vulputate odio ut. Amet mattis vulputate enim nulla aliquet porttitor lacus luctus
                                        accumsan. Aenean pharetra magna ac placerat vestibulum. Aenean euismod elementum
                                        nisi quis eleifend quam adipiscing vitae. Viverra nam libero justo laoreet sit amet
                                        cursus sit amet. Diam vel quam elementum pulvinar. Massa vitae tortor condimentum
                                        lacinia quis vel eros donec ac.</p>
                                </div>
                                <!--end::Scroll-->

                                <div class="d-flex gap-3">
                                    <button class="btn btn-primary" id="kt_scroll_change_pos_top">Scroll to Top</button>
                                    <button class="btn btn-primary" id="kt_scroll_change_pos_bottom">Scroll to
                                        Bottom</button>
                                </div>
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Highlight-->
                        <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                title="Copy code">copy</button>
                            <ul class="nav nav-pills" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                        href="#kt_highlight_68e5baab5d75a" role="tab">JAVASCRIPT</a></li>
                                <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                        href="#kt_highlight_68e5baab5d75d" role="tab">HTML</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="kt_highlight_68e5baab5d75a" role="tabpanel">
                                    <div class="highlight-code">
                                        <pre class="language-javascript"><code class="language-javascript">var scroll = document.querySelector(&quot;#kt_scroll_change_pos&quot;);
var btnTop = document.querySelector(&quot;#kt_scroll_change_pos_top&quot;);
var btnBottom = document.querySelector(&quot;#kt_scroll_change_pos_bottom&quot;);

btnTop.addEventListener(&quot;click&quot;, function (e) {
    scroll.scrollTop = 0;
});

btnBottom.addEventListener(&quot;click&quot;, function (e) {
    scroll.scrollTop = parseInt(scroll.scrollHeight);
});</code></pre>
                                    </div>
                                </div>
                                <div class="tab-pane fade " id="kt_highlight_68e5baab5d75d" role="tabpanel">
                                    <div class="highlight-code">
                                        <pre class="language-html"><code class="language-html">&lt;!--begin::Scroll--&gt;
&lt;div class=&quot;scroll pe-5&quot;
    data-kt-scroll=&quot;true&quot;
    data-kt-scroll-height=&quot;{default: &#039;100px&#039;, lg: &#039;300px&#039;}&quot;&gt;
    ...
&lt;/div&gt;
&lt;!--end::Scroll--&gt;</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div><!--end::Highlight-->
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
                            Scroll uses both CSS and HTML attributes to define the scroll configuration. Here are the
                            references for each below
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="fw-bold fs-2">CSS classes references</div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Table-->
                        <div class="py-5">
                            <div class="table-responsive border rounded">
                                <table class="table table-striped align-top mb-0 g-5">
                                    <thead>
                                        <tr class="fs-4 fw-bold text-gray-900 p-6">
                                            <th class="min-w-250px">Name</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <code>scroll</code>
                                            </td>
                                            <td>
                                                Enabled our custom scroll bar
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>scroll-x</code>
                                            </td>
                                            <td>
                                                Explicitly defines scrolling on the X-axis
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>scroll-y</code>
                                            </td>
                                            <td>
                                                Explicitly defines scrolling on the Y-axis
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>hover-scroll</code>
                                            </td>
                                            <td>
                                                Displays scrollbar only on hover. Scrollbar is hidden by default.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>hover-scroll-x</code>
                                            </td>
                                            <td>
                                                Displays scrollbar only on hover explicitly defined for X-axis. Scrollbar is
                                                hidden by default.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>hover-scroll-y</code>
                                            </td>
                                            <td>
                                                Displays scrollbar only on hover explicitly defined for Y-axis. Scrollbar is
                                                hidden by default.
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end::Table-->

                        <!--begin::Notice-->
                        <div class="py-5">
                            <!--begin::Information-->
                            <div class="d-flex align-items-center rounded py-5 px-5 bg-light-warning "><i
                                    class="ki-duotone ki-information-5 fs-3x text-warning me-5"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span></i> <!--begin::Description-->
                                <div class="text-gray-700 fw-bold fs-6">
                                    Please note that the classes above is not required to be paired with the default
                                    <code>.scroll</code> class. For example, if you require the scrollbar to appear on
                                    hover, <code>.hover-scroll</code> is only required.
                                </div> <!--end::Description-->
                            </div><!--end::Information-->
                        </div>
                        <!--end::Notice-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="fw-bold fs-2">HTML attribute references</div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Table-->
                        <div class="py-5">
                            <div class="table-responsive border rounded">
                                <table class="table table-striped align-top mb-0 g-5">
                                    <thead>
                                        <tr class="fs-4 fw-bold text-gray-900 p-6">
                                            <th class="min-w-300px">Name</th>
                                            <th class="min-w-100px">Type</th>
                                            <th class="min-w-500px">Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <code>data-kt-scroll</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">mandatory</code>
                                            </td>
                                            <td>
                                                Accepts <code>true</code> and <code>false</code> values, when
                                                <code>true</code> is set <code>KTScroll</code>
                                                Javascript class automatically initializes the scroll instance with smart
                                                height calculation.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>data-kt-scroll-activate</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">mandatory</code>
                                            </td>
                                            <td>
                                                <div class="mb-3">
                                                    Specifies the specific breakpoint to enable or disable the smart height
                                                    calculation.
                                                </div>

                                                <div class="mb-3">
                                                    It uses Bootstrap's standard breakpoint sizing (eg: <code>sm, md, lg,
                                                        xl</code>) with a <code>true</code> or <code>false</code> value.
                                                    This attribute value can be written as an object string to enable
                                                    multiple responsive breakpoints.
                                                </div>

                                                For example: <code>{default: false, lg: true}</code> specifies that the
                                                smart height calculation will only fire on <code>lg</code> screen sizes and
                                                above.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>data-kt-scroll-height</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">mandatory</code>
                                            </td>
                                            <td>
                                                <div class="mb-3">
                                                    Defines the scroll container height. It accepts all values similar with
                                                    CSS <code>height</code> styling. For example: <code>auto</code>,
                                                    <code>100%</code> or <code>500px</code>.
                                                </div>

                                                <div class="mb-3">
                                                    You can also use the Bootstrap's standard breakpoint size options
                                                    <code>sm, md, lg, xl</code>) to specify conditional height values for
                                                    different screen sizes.
                                                    For example: <code>{default: '200px', lg: '400px'}</code>
                                                </div>

                                                When <code>auto</code> value is set, Scroll does the smart height
                                                calculation by subtracting from browser's
                                                window height, the dependencies and wrapper elements heights, such as border
                                                width, padding top, padding bottom, margin top and margin bottom
                                                style values dynamically.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>data-kt-scroll-min-height</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">optional</code>
                                            </td>
                                            <td>
                                                <div class="mb-3">
                                                    Defines the scroll container minimum height. It accepts all values
                                                    similar with CSS <code>min-height</code> styling. For example:
                                                    <code>auto</code>, <code>100%</code> or <code>500px</code>.
                                                </div>

                                                When <code>auto</code> value is set, Scroll does the smart minimum height
                                                calculation by subtracting from browser's
                                                window height, the dependencies and wrapper elements heights, such as border
                                                width, padding top, padding bottom, margin top and margin bottom
                                                style values dynamically.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>data-kt-scroll-max-height</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">optional</code>
                                            </td>
                                            <td>
                                                <div class="mb-3">
                                                    Defines the scroll container maximum height. It accepts all values
                                                    similar with CSS <code>max-height</code> styling. For example:
                                                    <code>auto</code>, <code>100%</code> or <code>500px</code>.
                                                </div>

                                                When <code>auto</code> value is set, Scroll does the smart maximum height
                                                calculation by subtracting from browser's
                                                window height, the dependencies and wrapper elements heights, such as border
                                                width, padding top, padding bottom, margin top and margin bottom
                                                style values dynamically.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>data-kt-scroll-dependencies</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">optional</code>
                                            </td>
                                            <td>
                                                <div class="mb-3">
                                                    Defines the HTML elements to include in the smart height calculation to
                                                    ensure that the main scroll container will have the correct height size
                                                    to be displayed along with the included HTML elements within the
                                                    viewport. This calculation also includes border, margins and padding
                                                    spacings.<br />
                                                </div>

                                                <div class="mb-3">
                                                    For example, if the dependant elements calculates up to
                                                    <code>200px</code> with all borders, margins and paddings included. The
                                                    smart height calculation will return the size of the viewport height
                                                    (<code class="ms-0">100vh</code> height) minus
                                                    <code>200px</code>.<br />
                                                </div>

                                                It accepts HTML <code>id</code> string values that can be separated by
                                                commas (<code>,</code>) for selecting multiple HTML elements. For example:
                                                <code>#kt_aside_logo, #kt_aside_footer</code>.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>data-kt-scroll-wrappers</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">optional</code>
                                            </td>
                                            <td>
                                                <div class="mb-3">
                                                    Defines which related HTML elements border width, padding top, padding
                                                    bottom, margin top and margin bottom to be subtracted from the smart
                                                    height calculation.
                                                </div>

                                                <div class="mb-3">
                                                    Typically used to define the parent/ancenstor HTML element to ensure
                                                    that the scroll container doesn't overlap over the parent element's
                                                    border, padding or margin spacings. However, there's no limit to the
                                                    number of HTML elements that can be defined here.
                                                </div>

                                                Accepts Javascript HTML elements query selector string. For example:
                                                <code>#kt_aside_menu</code> or <code>#kt_aside_menu, #kt_aside_footer,
                                                    #kt_aside_body</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>data-kt-scroll-offset</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">optional</code>
                                            </td>
                                            <td>
                                                <div class="mb-3">
                                                    Defines a CSS value in <code>px</code> as offset to substitude in the
                                                    smart height calculation. For example: <code>20px</code>.
                                                </div>

                                                <div class="mb-3">
                                                    You can also use the Bootstrap's standard breakpoint size options
                                                    (<code>sm, md, lg, xl</code>) to specify conditional height values for
                                                    different screen sizes.
                                                    For example: <code>{default: '20px', lg: '40px'}</code>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <code>data-kt-scroll-save-state</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">optional</code>
                                            </td>
                                            <td>
                                                <div class="mb-3">
                                                    Accepts <code>true</code> and <code>false</code> values, when
                                                    <code>true</code> is set <code>KTScroll</code>
                                                    remembers last scroll position in user Cookies and on page reload
                                                    automatically initializes the scroll with last scrolled position.
                                                </div>

                                                <div class="mb-3">
                                                    This feature requires HTML ID attribute to be set for a select element
                                                    in order to use it as unique identificator in user Cookie.
                                                </div>
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
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="api-methods" data-kt-scroll-offset="50">
                            <a href="#api-methods"></a>

                            API Methods
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            The following are the Scroll's functionality methods for more control.
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
                                            <th class="min-w-250px">Name</th>
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
                                                <code>createInstances(DOMString selector)</code>
                                            </td>
                                            <td>
                                                Initializes Scroll instances by selector. Default value of
                                                <code>selector</code> is <code>[data-kt-scroll="true"]</code>.
                                                This method can be used to initialize dynamicly populated Scroll
                                                instances(e.g: after Ajax request).
                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">KTScroll.createInstances();</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>getInstance(DOMElement element)</code>
                                            </td>
                                            <td>
                                                Get the Scroll instance created

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">var scrollElement = document.querySelector(&quot;#kt_scroll_control&quot;);
var scroll = KTScroll.getInstance(scrollElement);</code></pre>
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
                                                <code>KTScroll(DOMElement element, Object options)</code>
                                            </td>
                                            <td>
                                                Constructs a new instance of <code>KTScroll</code> class and initializes a
                                                Scroll control:
                                                <div class="pt-3 mb-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">var scrollElement = document.querySelector(&quot;#kt_scroll_control&quot;);
var scroll = new KTScroll(scrollElement, {saveState: true});</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>

                                                <!--begin::Information-->
                                                <div class="d-flex align-items-center rounded py-5 px-5 bg-light-info "><i
                                                        class="ki-duotone ki-information-5 fs-3x text-info me-5"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i> <!--begin::Description-->
                                                    <div class="text-gray-700 fw-bold fs-6">
                                                        Remove <code>data-kt-scroll="true"</code> attribute to avoid lazy
                                                        initialization.
                                                        Option <code>saveState</code> replicates
                                                        <code>data-kt-scroll-save-state</code> option functionaliy as
                                                        described above.
                                                    </div> <!--end::Description-->
                                                </div><!--end::Information-->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>getHeight</code>
                                            </td>
                                            <td>
                                                Gets the current scroll container height

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">scroll.getHeight();</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>update</code>
                                            </td>
                                            <td>
                                                Force the scroll container to update itself.
                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">scroll.update();</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>getElement</code>
                                            </td>
                                            <td>
                                                Returns the Scroll's attached DOM element.

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">var element = scroll.getElement();</code></pre>
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
                                <a href="#hover" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Hover</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#auto-height" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Auto Height</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#fixed-height" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Fixed Height</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#change-scroll-position" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Change Scroll Position</span>
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
                                <a href="#api-methods" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">API Methods</span>
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
    <script src="{{ asset('assets/js/custom/documentation/general/scroll.js') }}"></script>
    <!--end::Vendors Javascript-->
@endsection


