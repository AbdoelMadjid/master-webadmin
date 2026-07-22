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
                            <strong class="me-1">Clipboard</strong> is a modern approach to copy text to clipboard. No
                            Flash. No frameworks.
                            For full documentation please check the <a href="https://clipboardjs.com/" target="_blank"
                                class="fw-semibold">plugin's site</a>.
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
                            <strong>Clipboard</strong>'s CSS and Javascript files are bundled in the global plugin bundles
                            and globally included in all pages:
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;link href=&quot;assets/plugins/global/plugins.bundle.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot;/&gt;
&lt;script src=&quot;assets/plugins/global/plugins.bundle.js&quot;&gt;&lt;/script&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="basic-usage" data-kt-scroll-offset="50">
                            <a href="#basic-usage"></a>

                            Basic Usage
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Simply add the attribute <code>data-clipboard-target</code> to an action button with the input
                            element's <code>id</code> to get it working. Then add the clipboard JS to initialize it.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <!--begin::Card-->
                            <div class="card card-bordered">
                                <div class="card-body">
                                    <!--begin::Input group-->
                                    <div class="input-group">
                                        <!--begin::Input-->
                                        <input id="kt_clipboard_1" type="text" class="form-control"
                                            placeholder="name@example.com" value="name@example.com" />
                                        <!--end::Input-->

                                        <!--begin::Button-->
                                        <button class="btn btn-light-primary" data-clipboard-target="#kt_clipboard_1">
                                            Copy
                                        </button>
                                        <!--end::Button-->
                                    </div>
                                    <!--end::Input group-->
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
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e33d22c95d3" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e33d22c95d8" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e33d22c95d3" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">// Select elements
const target = document.getElementById(&#039;kt_clipboard_1&#039;);
const button = target.nextElementSibling;

// Init clipboard -- for more info, please read the offical documentation: https://clipboardjs.com/
var clipboard = new ClipboardJS(button, {
    target: target,
    text: function() {
        return target.value;
    }
});

// Success action handler
clipboard.on(&#039;success&#039;, function(e) {
    const currentLabel = button.innerHTML;

    // Exit label update when already in progress
    if(button.innerHTML === &#039;Copied!&#039;){
        return;
    }

    // Update button label
    button.innerHTML = &#039;Copied!&#039;;

    // Revert button label after 3 seconds
    setTimeout(function(){
        button.innerHTML = currentLabel;
    }, 3000)
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e33d22c95d8" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;div class=&quot;card card-bordered&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        &lt;!--begin::Input group--&gt;
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;!--begin::Input--&gt;
            &lt;input id=&quot;kt_clipboard_1&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;name@example.com&quot; value=&quot;name@example.com&quot; /&gt;
            &lt;!--end::Input--&gt;

            &lt;!--begin::Button--&gt;
            &lt;button class=&quot;btn btn-light-primary&quot; data-clipboard-target=&quot;#kt_clipboard_1&quot;&gt;
                Copy
            &lt;/button&gt;
            &lt;!--end::Button--&gt;
        &lt;/div&gt;
        &lt;!--begin::Input group--&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="cut-example" data-kt-scroll-offset="50">
                            <a href="#cut-example"></a>

                            Cut Example
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Add <code>data-clipboard-action="cut"</code> to the action button element to define a cut
                            action. Then add the clipboard JS to initialize it.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <!--begin::Card-->
                            <div class="card card-bordered">
                                <div class="card-body">
                                    <!--begin::Input-->
                                    <textarea id="kt_clipboard_2" class="form-control mb-3">This is an example to cut with Clipboard</textarea>
                                    <!--end::Input-->

                                    <!--begin::Button-->
                                    <button class="btn btn-light-primary" data-clipboard-action="cut"
                                        data-clipboard-target="#kt_clipboard_2">
                                        Cut
                                    </button>
                                    <!--end::Button-->
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
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e33d22c9619" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e33d22c961a" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e33d22c9619"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">// Select elements
const target = document.getElementById(&#039;kt_clipboard_2&#039;);
const button = target.nextElementSibling;

// Init clipboard -- for more info, please read the offical documentation: https://clipboardjs.com/
var clipboard = new ClipboardJS(button, {
    target: target,
    text: function() {
        return target.innerText;
    }
});

// Success action handler
clipboard.on(&#039;success&#039;, function(e) {
    const currentLabel = button.innerHTML;

    // Exit label update when already in progress
    if(button.innerHTML === &#039;Copied!&#039;){
        return;
    }

    // Update button label
    button.innerHTML = &#039;Copied!&#039;;

    // Revert button label after 3 seconds
    setTimeout(function(){
        button.innerHTML = currentLabel;
    }, 3000)
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e33d22c961a" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;div class=&quot;card card-bordered&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        &lt;!--begin::Input--&gt;
        &lt;textarea id=&quot;kt_clipboard_2&quot; class=&quot;form-control mb-3&quot;&gt;This is an example to cut with Clipboard&lt;/textarea&gt;
        &lt;!--end::Input--&gt;

        &lt;!--begin::Button--&gt;
        &lt;button class=&quot;btn btn-light-primary&quot; data-clipboard-action=&quot;cut&quot; data-clipboard-target=&quot;#kt_clipboard_2&quot;&gt;
            Cut
        &lt;/button&gt;
        &lt;!--end::Button--&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="predefined-value" data-kt-scroll-offset="50">
                            <a href="#predefined-value"></a>

                            Predefined Value
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Add the <code>data-clipboard-text</code> to an action button and it will copy the value set on
                            click. Then add the clipboard JS to initialize it.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <!--begin::Card-->
                            <div class="card card-bordered">
                                <div class="card-body">
                                    <!--begin::Button-->
                                    <button id="kt_clipboard_3" class="btn btn-light-primary"
                                        data-clipboard-text="Just because you can doesn't mean you should — clipboard.js">
                                        Copy to clipboard
                                    </button>
                                    <!--end::Button-->
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
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e33d22c9652" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e33d22c9653" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e33d22c9652"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">// Select element
const target = document.getElementById(&#039;kt_clipboard_3&#039;);

// Init clipboard -- for more info, please read the offical documentation: https://clipboardjs.com/
clipboard = new ClipboardJS(target);

// Success action handler
clipboard.on(&#039;success&#039;, function (e) {
    const currentLabel = target.innerHTML;

    // Exit label update when already in progress
    if (target.innerHTML === &#039;Copied!&#039;) {
        return;
    }

    // Update button label
    target.innerHTML = &#039;Copied!&#039;;

    // Revert button label after 3 seconds
    setTimeout(function () {
        target.innerHTML = currentLabel;
    }, 3000)
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e33d22c9653" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;div class=&quot;card card-bordered&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        &lt;!--begin::Button--&gt;
        &lt;button id=&quot;kt_clipboard_3&quot; class=&quot;btn btn-light-primary&quot; data-clipboard-text=&quot;Just because you can doesn&#039;t mean you should — clipboard.js&quot;&gt;
            Copy to clipboard
        &lt;/button&gt;
        &lt;!--end::Button--&gt;
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
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="static-element" data-kt-scroll-offset="50">
                            <a href="#static-element"></a>

                            Static Element
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Add the attribute <code>data-clipboard-target</code> to an action button with the static
                            element's <code>id</code> to get it working. Then add the clipboard JS to initialize it.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <!--begin::Card-->
                            <div class="card card-bordered">
                                <div class="card-body">
                                    <!--begin::Row-->
                                    <div class="d-flex align-items-center flex-wrap">
                                        <!--begin::Input-->
                                        <div id="kt_clipboard_4" class="me-5">This is a sample static text string to
                                            copy!</div>
                                        <!--end::Input-->

                                        <!--begin::Button-->
                                        <button class="btn btn-icon btn-sm btn-light"
                                            data-clipboard-target="#kt_clipboard_4">
                                            <i class="ki-duotone ki-copy fs-2 text-muted"></i> </button>
                                        <!--end::Button-->
                                    </div>
                                    <!--end::Row-->
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
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e33d22c96a7" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e33d22c96a8" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e33d22c96a7"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">// Select elements
const target = document.getElementById(&#039;kt_clipboard_4&#039;);
const button = target.nextElementSibling;

// Init clipboard -- for more info, please read the offical documentation: https://clipboardjs.com/
clipboard = new ClipboardJS(button, {
    target: target,
    text: function () {
        return target.innerHTML;
    }
});

// Success action handler
clipboard.on(&#039;success&#039;, function (e) {
    var checkIcon = button.querySelector(&#039;.ki-check&#039;);
    var copyIcon = button.querySelector(&#039;.ki-copy&#039;);

    // Exit check icon when already showing
    if (checkIcon) {
        return;
    }

    // Create check icon
    checkIcon = document.createElement(&#039;i&#039;);
    checkIcon.classList.add(&#039;ki-duotone&#039;);
    checkIcon.classList.add(&#039;ki-check&#039;);
    checkIcon.classList.add(&#039;fs-2x&#039;);

    // Append check icon
    button.appendChild(checkIcon);

    // Highlight target
    const classes = [&#039;text-success&#039;, &#039;fw-boldest&#039;];
    target.classList.add(...classes);

    // Highlight button
    button.classList.add(&#039;btn-success&#039;);

    // Hide copy icon
    copyIcon.classList.add(&#039;d-none&#039;);

    // Revert button label after 3 seconds
    setTimeout(function () {
        // Remove check icon
        copyIcon.classList.remove(&#039;d-none&#039;);

        // Revert icon
        button.removeChild(checkIcon);

        // Remove target highlight
        target.classList.remove(...classes);

        // Remove button highlight
        button.classList.remove(&#039;btn-success&#039;);
    }, 3000)
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e33d22c96a8" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;div class=&quot;card card-bordered&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        &lt;!--begin::Row--&gt;
        &lt;div class=&quot;d-flex align-items-center flex-wrap&quot;&gt;
            &lt;!--begin::Input--&gt;
            &lt;div id=&quot;kt_clipboard_4&quot; class=&quot;me-5&quot;&gt;This is a sample static text string to copy!&lt;/div&gt;
            &lt;!--end::Input--&gt;

            &lt;!--begin::Button--&gt;
            &lt;button class=&quot;btn btn-icon btn-sm btn-light&quot; data-clipboard-target=&quot;#kt_clipboard_4&quot;&gt;
                &lt;i class=&quot;ki-duotone ki-copy fs-2 text-muted&quot;&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;!--end::Button--&gt;
        &lt;/div&gt;
        &lt;!--end::Row--&gt;
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
                                <a href="#basic-usage" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Basic Usage</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#cut-example" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Cut Example</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#predefined-value" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Predefined Value</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#static-element" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Static Element</span>
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
    <script src="{{ asset('assets/js/custom/documentation/forms/clipboard.js') }}"></script>
    <!--end::Vendors Javascript-->
@endsection


