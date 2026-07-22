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
                            BlockUI is an exclusive plugin of Metronic that allows element blocking with overlay and loading
                            indicator.
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
                            BlockUI's global style and scripts bundles and are globally included in all pages.
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
                        <h1 class="anchor fw-bold mb-5" id="basic-bxampleoverview" data-kt-scroll-offset="50">
                            <a href="#basic-bxampleoverview"></a>

                            Basic Example
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Click the below button to block the below content area:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10 mb-10" id="kt_block_ui_1_target">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inceptos imperdiet magna! Sed fusce
                                fames tempus litora venenatis.
                                Ac aliquet leo hendrerit taciti viverra? Nisl suscipit potenti accumsan quis ipsum purus
                                cursus.
                                Suspendisse ultrices morbi in purus lectus dictum porta; Commodo penatibus nec.
                            </div>

                            <button id="kt_block_ui_1_button" class="btn btn-primary">Block</button>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e5258e9dbab" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e5258e9dbae" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5258e9dbab" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript"><code class="language-javascript">var button = document.querySelector(&quot;#kt_block_ui_1_button&quot;);
var target = document.querySelector(&quot;#kt_block_ui_1_target&quot;);

var blockUI = new KTBlockUI(target);

button.addEventListener(&quot;click&quot;, function() {
    if (blockUI.isBlocked()) {
        blockUI.release();
        button.innerText = &quot;Block&quot;;
    } else {
        blockUI.block();
        button.innerText = &quot;Release&quot;;
    }
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e5258e9dbae" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;div class=&quot;rounded border p-10&quot; id=&quot;kt_block_ui_1_target&quot;&gt;
    Lorem ipsum dolor sit amet....
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="custom-message" data-kt-scroll-offset="50">
                            <a href="#custom-message"></a>

                            Custom Message
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Click the below button to block the below content area:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="mb-10" id="kt_block_ui_2_target">
                                <div class="rounded border p-10 scroll-y h-100px">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inceptos imperdiet magna! Sed
                                    fusce fames tempus litora venenatis.
                                    Ac aliquet leo hendrerit taciti viverra? Nisl suscipit potenti accumsan quis ipsum purus
                                    cursus.
                                    Suspendisse ultrices morbi in purus lectus dictum porta; Commodo penatibus nec.
                                </div>
                            </div>

                            <button id="kt_block_ui_2_button" class="btn btn-primary">Block</button>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e5258e9dbde" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e5258e9dbdf" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5258e9dbde"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript"><code class="language-javascript">var button = document.querySelector(&quot;#kt_block_ui_2_button&quot;);
var target = document.querySelector(&quot;#kt_block_ui_2_target&quot;);

var blockUI = new KTBlockUI(target, {
    message: &#039;&lt;div class=&quot;blockui-message&quot;&gt;&lt;span class=&quot;spinner-border text-primary&quot;&gt;&lt;/span&gt; Loading...&lt;/div&gt;&#039;,
});

button.addEventListener(&quot;click&quot;, function() {
    if (blockUI.isBlocked()) {
        blockUI.release();
        button.innerText = &quot;Block&quot;;
    } else {
        blockUI.block();
        button.innerText = &quot;Release&quot;;
    }
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e5258e9dbdf" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;div class=&quot;mb-10&quot; id=&quot;kt_block_ui_2_target&quot;&gt;
    &lt;div class=&quot;rounded border p-10 scroll-y h-100px&quot;&gt;
        Lorem ipsum dolor sit amet....
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="overlay-class" data-kt-scroll-offset="50">
                            <a href="#overlay-class"></a>

                            Overlay Class
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use custom class for overlay to change it's background color:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10 mb-10" id="kt_block_ui_3_target">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inceptos imperdiet magna! Sed fusce
                                fames tempus litora venenatis.
                                Ac aliquet leo hendrerit taciti viverra? Nisl suscipit potenti accumsan quis ipsum purus
                                cursus.
                                Suspendisse ultrices morbi in purus lectus dictum porta; Commodo penatibus nec.
                            </div>

                            <button id="kt_block_ui_3_button" class="btn btn-primary">Block</button>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e5258e9dc06" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e5258e9dc07" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5258e9dc06"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript"><code class="language-javascript">var button = document.querySelector(&quot;#kt_block_ui_3_button&quot;);
var target = document.querySelector(&quot;#kt_block_ui_3_target&quot;);

var blockUI = new KTBlockUI(target, {
    overlayClass: &quot;bg-danger bg-opacity-25&quot;,
});

button.addEventListener(&quot;click&quot;, function() {
    if (blockUI.isBlocked()) {
        blockUI.release();
        button.innerText = &quot;Block&quot;;
    } else {
        blockUI.block();
        button.innerText = &quot;Release&quot;;
    }
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e5258e9dc07" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;div class=&quot;rounded border p-10&quot; id=&quot;kt_block_ui_3_target&quot;&gt;
    Lorem ipsum dolor sit amet....
&lt;/div&gt;</code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="modal" data-kt-scroll-offset="50">
                            <a href="#modal"></a>

                            Modal
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Modal content blocking example:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_1">
                                    Launch demo modal
                                </button>

                                <!--begin::Modal-->
                                <div class="modal fade" tabindex="-1" id="kt_modal_1">
                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                        <div class="modal-content" id="kt_block_ui_4_target">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                <!--begin::Close-->
                                                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                    data-bs-dismiss="modal" aria-label="Close">
                                                    <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span
                                                            class="path2"></span></i>
                                                </div>
                                                <!--end::Close-->
                                            </div>

                                            <div class="modal-body py-lg-10 px-lg-20">
                                                <!--begin:Form-->
                                                <form class="form" action="#">
                                                    <!--begin::Input group-->
                                                    <div class="d-flex flex-column mb-8 fv-row">
                                                        <!--begin::Label-->
                                                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                            <span class="required">Target Title</span>


                                                            <span class="ms-1" data-bs-toggle="tooltip"
                                                                title="Specify a target name for future usage and reference">
                                                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span></i></span> </label>
                                                        <!--end::Label-->

                                                        <input type="text" class="form-control form-control-solid"
                                                            placeholder="Enter Target Title" name="target_title" />
                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Input group-->
                                                    <div class="d-flex flex-column mb-8 fv-row">
                                                        <label class="required fs-6 fw-semibold mb-2">Assign</label>

                                                        <select class="form-select form-select-solid"
                                                            data-control="select2" data-hide-search="true"
                                                            data-placeholder="Select a Team Member" name="team_assign">
                                                            <option value="">Select user...</option>
                                                            <option value="1">Karina Clark</option>
                                                            <option value="2">Robert Doe</option>
                                                            <option value="3">Niel Owen</option>
                                                            <option value="4">Olivia Wild</option>
                                                            <option value="5">Sean Bean</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Input group-->
                                                    <div class="d-flex flex-column mb-8">
                                                        <label class="fs-6 fw-semibold mb-2">Target Details</label>

                                                        <textarea class="form-control form-control-solid" rows="3" name="target_details"
                                                            placeholder="Type Target Details">
                                    </textarea>
                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Input group-->
                                                    <div class="mb-15 fv-row">
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex flex-stack">
                                                            <!--begin::Label-->
                                                            <div class="fw-semibold me-5">
                                                                <label class="fs-6">Notifications</label>

                                                                <div class="fs-7 text-muted">Allow Notifications by Phone
                                                                    or Email</div>
                                                            </div>
                                                            <!--end::Label-->

                                                            <!--begin::Checkboxes-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Checkbox-->
                                                                <label
                                                                    class="form-check form-check-custom form-check-solid me-10">
                                                                    <input class="form-check-input h-20px w-20px"
                                                                        type="checkbox" name="communication[]"
                                                                        value="email" checked="checked" />

                                                                    <span class="form-check-label fw-semibold">
                                                                        Email
                                                                    </span>
                                                                </label>
                                                                <!--end::Checkbox-->

                                                                <!--begin::Checkbox-->
                                                                <label
                                                                    class="form-check form-check-custom form-check-solid">
                                                                    <input class="form-check-input h-20px w-20px"
                                                                        type="checkbox" name="communication[]"
                                                                        value="phone" />

                                                                    <span class="form-check-label fw-semibold">
                                                                        Phone
                                                                    </span>
                                                                </label>
                                                                <!--end::Checkbox-->
                                                            </div>
                                                            <!--end::Checkboxes-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Actions-->
                                                    <div class="text-center">
                                                        <button class="btn btn-light me-3">
                                                            Cancel
                                                        </button>

                                                        <button id="kt_block_ui_4_button" class="btn btn-primary">
                                                            Block
                                                        </button>
                                                    </div>
                                                    <!--end::Actions-->
                                                </form>
                                                <!--end:Form-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Modal-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e5258e9dc70" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e5258e9dc71" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5258e9dc70"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript"><code class="language-javascript">var button = document.querySelector(&quot;#kt_block_ui_4_button&quot;);
var target = document.querySelector(&quot;#kt_block_ui_4_target&quot;);

var blockUI = new KTBlockUI(target);

button.addEventListener(&quot;click&quot;, function(e) {
    e.preventDefault();

    blockUI.block();

    setTimeout(function() {
        blockUI.release();
    }, 3000);
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e5258e9dc71" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;!--begin::Modal--&gt;
&lt;div class=&quot;modal fade&quot; tabindex=&quot;-1&quot; id=&quot;kt_modal_1&quot;&gt;
    &lt;div class=&quot;modal-dialog modal-dialog-centered mw-650px&quot;&gt;
        &lt;div class=&quot;modal-content&quot; id=&quot;kt_block_ui_4_target&quot;&gt;
            ....
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;!--end::Modal--&gt;</code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
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
                            The following are the BlockUI's functionality methods for more control.
                        </div>
                        <!--end::Block-->

                        <!--begin::Table-->
                        <div class="pt-2 pb-10">
                            <!--begin::Table wrapper-->
                            <div class="table-responsive border rounded">
                                <!--begin::Table-->
                                <table class="table table-striped mb-0 g-6">
                                    <!--begin::Head-->
                                    <thead>
                                        <tr class="fs-4 fw-bold p-6">
                                            <th class="min-w-200px">Name</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <!--end::Head-->

                                    <!--begin::Body-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <code>Constructor</code>
                                            </td>
                                            <td>
                                                Constructs a new instance of <code>KTBlockUI</code> class and initializes a
                                                Dialer control:
                                                <div class="pt-3 mb-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">var target = document.querySelector(&quot;#kt_blockui_target&quot;);
var blockUI = new KTBlockUI(target, options);</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>

                                                <!--begin::Information-->
                                                <div class="d-flex align-items-center rounded py-5 px-5 bg-light-info "><i
                                                        class="ki-duotone ki-information-5 fs-3x text-info me-5"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i> <!--begin::Description-->
                                                    <div class="text-gray-700 fw-bold fs-6">
                                                        For the constructor <code>options</code> refer to the next table.
                                                    </div> <!--end::Description-->
                                                </div><!--end::Information-->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>block()</code>
                                            </td>
                                            <td>
                                                Block target element

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">blockUI.block();</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>release</code>
                                            </td>
                                            <td>
                                                Release target element

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">blockUI.release();</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>isBlocked()</code>
                                            </td>
                                            <td>
                                                Check if target element is blocked.

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">if (blockUI.isBlocked() === true) {
    // do something
}</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>destroy()</code>
                                            </td>
                                            <td>
                                                Removes the component instance from element.
                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">blockUI.destroy();</code></pre>
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
                                            <th colspan="2">Static Methods</th>
                                        </tr>
                                    </thead>
                                    <!--end::Head-->

                                    <!--begin::Body-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <code>getInstance(DOMElement element)</code>
                                            </td>
                                            <td>
                                                Get BlockUI instance created and bind to a target element.

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">var target = document.querySelector(&quot;#kt_blockui_target&quot;);
var blockUI = KTBlockUI.getInstance(target);</code></pre>
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
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="constructor-options" data-kt-scroll-offset="50">
                            <a href="#constructor-options"></a>

                            Constructor Options
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            All options can be passed to the construction during the plugin initialization:
                        </div>
                        <!--end::Block-->

                        <!--begin::Table-->
                        <div class="py-5">
                            <div class="table-responsive border rounded">
                                <table class="table table-striped align-middle mb-0 g-5">
                                    <thead>
                                        <tr class="fs-4 fw-bold text-gray-900 p-6">
                                            <th class="min-w-150px">Name</th>
                                            <th class="min-w-150px">Type</th>
                                            <th class="min-w-150px">Default</th>
                                            <th class=" ">Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <code>zIndex</code>
                                            </td>
                                            <td>
                                                Object
                                            </td>
                                            <td>
                                                false
                                            </td>
                                            <td>
                                                Custom CSS z-index value of BlockUI's overlay element.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>overlayClass</code>
                                            </td>
                                            <td>
                                                String
                                            </td>
                                            <td>
                                                null
                                            </td>
                                            <td>
                                                Custom CSS class for BlockUI overlay element.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>overflow</code>
                                            </td>
                                            <td>
                                                String
                                            </td>
                                            <td>
                                                hidden
                                            </td>
                                            <td>
                                                Forces to set the target element's CSS overflow value to <code>hidden</code>
                                                if the target element does not have a CSS overflow value.
                                                Set the value to <code>auto</code> to ignore this behaviour.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>message</code>
                                            </td>
                                            <td>
                                                String
                                            </td>
                                            <td>
                                                <code>
                                                    &lt;span class=&quot;spinner-border text-primary&quot;&gt;&lt;/span&gt;
                                                </code>
                                            </td>
                                            <td>
                                                Sets BlockUI's HTML content centered within the target element.
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
                        <h1 class="anchor fw-bold mb-5" id="events" data-kt-scroll-offset="50">
                            <a href="#events"></a>

                            Events
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Below are few events for hooking into the Bootstrap BlockUI functionality.
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
                                            <th class="min-w-200px">Event Type</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <!--end::Head-->

                                    <!--begin::Body-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <code>kt.blockui.block</code>
                                            </td>
                                            <td>
                                                This event is fired before BlockUI is blocked.

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">var target = document.querySelector(&quot;#kt_blockui_target&quot;);
var blockUI = new KTBlockUI(target, options);

blockUI.on(&quot;kt.blockui.block&quot;, function() {
    console.log(&quot;before block&quot;);
});</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <code>kt.blockui.blocked</code>
                                            </td>
                                            <td>
                                                This event is fired after BlockUI is blocked.

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">var target = document.querySelector(&quot;#kt_blockui_target&quot;);
var blockUI = new KTBlockUI(target, options);

blockUI.on(&quot;kt.blockui.blocked&quot;, function() {
    console.log(&quot;after blocked&quot;);
});</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <code>kt.blockui.release</code>
                                            </td>
                                            <td>
                                                This event is fired before BlockUI release.

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">var target = document.querySelector(&quot;#kt_blockui_target&quot;);
var blockUI = new KTBlockUI(target, options);

blockUI.on(&quot;kt.blockui.release&quot;, function() {
    console.log(&quot;before release&quot;);
});</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <code>kt.blockui.released</code>
                                            </td>
                                            <td>
                                                This event is fired after BlockUI is released.

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">var target = document.querySelector(&quot;#kt_blockui_target&quot;);
var blockUI = new KTBlockUI(target, options);

blockUI.on(&quot;kt.blockui.released&quot;, function() {
    console.log(&quot;after released&quot;);
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
                                <a href="#usage" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Usage</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#basic-bxampleoverview" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Basic Example</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#custom-message" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Custom Message</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#overlay-class" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Overlay Class</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#modal" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Modal</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#methods" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Methods</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#constructor-options" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Constructor Options</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#events" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Events</span>
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
    <script src="{{ asset('assets/js/custom/documentation/general/blockui.js') }}"></script>
    <!--end::Vendors Javascript-->
@endsection


