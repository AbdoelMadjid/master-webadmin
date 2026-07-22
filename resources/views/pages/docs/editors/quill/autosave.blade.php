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
                    <!--begin::Notice-->
                    <div class="d-flex align-items-center rounded py-5 px-4 bg-light-info "> <!--begin::Icon-->
                        <div class="d-flex h-80px w-80px flex-shrink-0 flex-center position-relative ms-3 me-6"> <svg
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                class="text-primary h-80px w-80px position-absolute opacity-5">
                                <path fill="currentColor"
                                    d="M10.2,21.23,4.91,18.17a3.58,3.58,0,0,1-1.8-3.11V8.94a3.58,3.58,0,0,1,1.8-3.11L10.2,2.77a3.62,3.62,0,0,1,3.6,0l5.29,3.06a3.58,3.58,0,0,1,1.8,3.11v6.12a3.58,3.58,0,0,1-1.8,3.11L13.8,21.23A3.62,3.62,0,0,1,10.2,21.23Z" />
                            </svg> <i class="ki-duotone ki-design-frame fs-3x text-info  position-absolute"><span
                                    class="path1"></span><span class="path2"></span></i> </div> <!--end::Icon-->
                        <!--begin::Description-->
                        <div class="text-gray-700 fw-bold fs-6 lh-lg">
                            Quill is designed as an easy to use editor, to support content creation across the web. It is
                            built on top of consistent and predictable constructs, exposed through a powerful API. With
                            coverage across both ends of the complexity spectrum, Quill aims to be the defacto rich text
                            editor for the web. For more info see <a href="https://quilljs.com/docs/quickstart/"
                                class="fw-bold me-1">the official site</a>and <a class="fw-bold"
                                href="https://github.com/quilljs/quill">the Github repository</a>.
                        </div> <!--end::Description-->
                    </div><!--end::Notice-->
                    <!--begin::Section-->
                    <div class="pt-10">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" data-kt-scroll-offset="85" id="basic">
                            <a href="#basic" data-kt-scroll-toggle></a>
                            Autosave Example
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="mb-3">
                                Here's an example of Quill editor with autosave. Check out console logs to preview the
                                autosave function.
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div id="kt_docs_quill_autosave" name="kt_docs_quill_autosave">
                                <h1>Quick and Simple Quill Integration</h1>
                                <p>Here goes the&nbsp;<a href="javascript:void(0)">Minitial content of the editor</a>. Lorem Ipsum is
                                    simply dummy text of the&nbsp;<em>printing and typesetting</em>&nbsp;industry.</p>
                                <blockquote>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy
                                    text of the printing and typesetting industry.</blockquote>
                                <h3 style="text-align: right;">Flexible &amp; Powerful</h3>
                                <p style="text-align: right;"><strong>Lorem Ipsum has been the
                                        industry's</strong>&nbsp;standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled.</p>
                                <ul>
                                    <li>List item 1</li>
                                    <li>List item 2</li>
                                    <li>List item 3</li>
                                    <li>List item 4</li>
                                </ul>
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="pt-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e3cc8c4d745" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e3cc8c4d749" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e3cc8c4d745" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">var Delta = Quill.import(&#039;delta&#039;);
var quill = new Quill(&#039;#kt_docs_quill_autosave&#039;, {
    modules: {
        toolbar: true
    },
    placeholder: &#039;Type your text here...&#039;,
    theme: &#039;snow&#039;
});

// Store accumulated changes
var change = new Delta();
quill.on(&#039;text-change&#039;, function (delta) {
    change = change.compose(delta);
});

// Save periodically
setInterval(function () {
    if (change.length() &gt; 0) {
        console.log(&#039;Saving changes&#039;, change);
        /*
        Send partial changes
        $.post(&#039;/your-endpoint&#039;, {
        partial: JSON.stringify(change)
        });

        Send entire document
        $.post(&#039;/your-endpoint&#039;, {
        doc: JSON.stringify(quill.getContents())
        });
        */
        change = new Delta();
    }
}, 5 * 1000);

// Check for unsaved data
window.onbeforeunload = function () {
    if (change.length() &gt; 0) {
        return &#039;There are unsaved changes. Are you sure you want to leave?&#039;;
    }
}</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e3cc8c4d749" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;div id=&quot;kt_docs_quill_autosave&quot; name=&quot;kt_docs_quill_autosave&quot;&gt;
    &lt;h1&gt;Quick and Simple Quill Integration&lt;/h1&gt;
    &lt;p&gt;Here goes the&amp;nbsp;&lt;a href=&quot;#&quot;&gt;Minitial content of the editor&lt;/a&gt;. Lorem Ipsum is simply dummy text of the&amp;nbsp;&lt;em&gt;printing and typesetting&lt;/em&gt;&amp;nbsp;industry.&lt;/p&gt;
    &lt;blockquote&gt;Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry.&lt;/blockquote&gt;
    &lt;h3 style=&quot;text-align: right;&quot;&gt;Flexible &amp;amp; Powerful&lt;/h3&gt;
    &lt;p style=&quot;text-align: right;&quot;&gt;&lt;strong&gt;Lorem Ipsum has been the industry&#039;s&lt;/strong&gt;&amp;nbsp;standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.&lt;/p&gt;
    &lt;ul&gt;
        &lt;li&gt;List item 1&lt;/li&gt;
        &lt;li&gt;List item 2&lt;/li&gt;
        &lt;li&gt;List item 3&lt;/li&gt;
        &lt;li&gt;List item 4&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
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


                        <a href="https://1.envato.market/Vm7VRE" class="d-block mb-8">
                            <img src="https://devs.keenthemes.com/assets/media/banners/buy-metronic.png" alt="buy metronic"
                                class="mw-100 rounded-3" data-bs-toggle="popover" data-bs-trigger="hover"
                                data-bs-html="true" data-bs-placement="top" data-bs-title="<b>License Reminder</b>"
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
    <script src="{{ asset('assets/js/custom/documentation/editors/quill/autosave.js') }}"></script>
    <!--end::Vendors Javascript-->
@endsection


