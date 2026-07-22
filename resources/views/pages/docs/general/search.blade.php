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
                            Quick Search is an exclusive advanced component of Metronic that provides a flexible and
                            powerful UI component to manage and handle layouts related to search. Quick Search also comes
                            with multiple custom hook points to allow advanced users to bind custom JS or search logic to
                            control and manipulate our Quick Search component.
                        </div>
                        <!--end::Block-->

                        <!--begin::Notice-->
                        <div class="py-5">
                            <!--begin::Information-->
                            <div class="d-flex align-items-center rounded py-5 px-5 bg-light-warning "><i
                                    class="ki-duotone ki-information-5 fs-3x text-warning me-5"><span
                                        class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-bold fs-6">
                                    The Quick Search component is a frontend only solution that manages element display
                                    orders and event triggers to show/hide certain layers. However, the search logic backend
                                    functionality is not included.
                                </div> <!--end::Description-->
                            </div><!--end::Information-->
                        </div>
                        <!--end::Notice-->
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
                            <b>Quick Search</b>&nbsp; hooks are globally included in our scripts bundle, however,
                            initialization is manually controlled and is required to be included.
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
                                    The Quick Search component is a highly robust and flexible frontend solution that comes
                                    with number of HTML elements to provide a rapid search layout.
                                    Quick Search starts with a simple <code>div</code> element that houses a number of HTML
                                    attributes to control and configure the Quick Search component.
                                    <a href="#options" data-kt-scroll-toggle>See below for more info</a>.
                                </li>
                                <li class="py-2">
                                    Quick Search structure comes in a few layers.
                                    <ul class="pt-3">
                                        <li class="py-2">Main Wrapper</li>
                                        <li class="py-2">Toggle Button</li>
                                        <li class="py-2">Main Content Element</li>
                                        <li class="py-2">Main Content Inner Wrapper</li>
                                        <li class="py-2">Input Form</li>
                                        <li class="py-2">Search Suggestion</li>
                                        <li class="py-2">Search Preference</li>
                                        <li class="py-2">Search Advanced Options</li>
                                        <li class="py-2">Search Results</li>
                                        <li class="py-2">Empty Search</li>
                                    </ul>
                                </li>
                                <li class="py-2">
                                    Each search UI HTML element within the main wrapper can be identified by the
                                    <code>data-kt-search-element</code> HTML attribute with a specific value. For example,
                                    <code>data-kt-search-element="toggle"</code> indicates that the current HTML element is
                                    a Toggle Button. <a href="#options" data-kt-scroll-toggle>See below for more info</a>.
                                </li>
                                <li class="py-2">
                                    Quick Search uses our extended Bootstrap's utility classes for styling.
                                </li>
                                <li class="py-2">
                                    Quick Search instances can also be controlled programmatically. <a href="#methods"
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
                        <h1 class="anchor fw-bold mb-5" id="basic-layout" data-kt-scroll-offset="50">
                            <a href="#basic-layout"></a>

                            Basic Layout
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Here's a basic example of our Quick Search.
                        </div>
                        <!--end::Block-->

                        <!--begin::Notice-->
                        <div class="py-5">
                            <!--begin::Information-->
                            <div class="d-flex align-items-center rounded py-5 px-5 bg-light-warning "><i
                                    class="ki-duotone ki-information-5 fs-3x text-warning me-5"><span
                                        class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-bold fs-6">
                                    In this demo, we're simulating the search results by randomly showing and hiding the
                                    search results layer on keypress within the input field.
                                </div> <!--end::Description-->
                            </div><!--end::Information-->
                        </div>
                        <!--end::Notice-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-5 p-lg-15">
                                <!--begin::Search-->
                                <div id="kt_docs_search_handler_basic" data-kt-search-keypress="true"
                                    data-kt-search-min-length="2" data-kt-search-enter="true"
                                    data-kt-search-layout="inline">

                                    <!--begin::Form-->
                                    <form data-kt-search-element="form" class="w-100 position-relative mb-5"
                                        autocomplete="off">
                                        <!--begin::Hidden input(Added to disable form autocomplete)-->
                                        <input type="hidden" />
                                        <!--end::Hidden input-->

                                        <!--begin::Icon-->
                                        <i
                                            class="ki-duotone ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y"><span
                                                class="path1"></span><span class="path2"></span></i> <!--end::Icon-->

                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-lg form-control-solid px-15"
                                            name="search" value=""
                                            placeholder="Search by username, full name or email..."
                                            data-kt-search-element="input" />
                                        <!--end::Input-->

                                        <!--begin::Spinner-->
                                        <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                                            data-kt-search-element="spinner">
                                            <span class="spinner-border h-15px w-15px align-middle text-gray-500"></span>
                                        </span>
                                        <!--end::Spinner-->

                                        <!--begin::Reset-->
                                        <span
                                            class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none"
                                            data-kt-search-element="clear">
                                            <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0"><span
                                                    class="path1"></span><span class="path2"></span></i> </span>
                                        <!--end::Reset-->
                                    </form>
                                    <!--end::Form-->

                                    <!--begin::Wrapper-->
                                    <div class="py-5">
                                        <!--begin::Suggestions-->
                                        <div data-kt-search-element="suggestions">
                                            <!--begin::Illustration-->
                                            <div class="text-center px-4">
                                                <img class="mw-100 mh-200px" alt="image"
                                                    src="assets/media/illustrations/sigma-1/1.png" />
                                            </div>
                                            <!--end::Illustration-->
                                        </div>
                                        <!--end::Suggestions-->

                                        <!--begin::Results-->
                                        <div data-kt-search-element="results" class="d-none">
                                            <!--begin::Users-->
                                            <div class="mh-300px scroll-y me-n5 pe-5">
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1"
                                                    data-kt-search-element="customer">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle me-5">
                                                        <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::Info-->
                                                    <div class="fw-semibold">
                                                        <span class="fs-6 text-gray-800 me-2">Emma Smith</span>
                                                        <span class="badge badge-light">Art Director</span>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1"
                                                    data-kt-search-element="customer">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle me-5">
                                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                            M </span>
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::Info-->
                                                    <div class="fw-semibold">
                                                        <span class="fs-6 text-gray-800 me-2">Melody Macy</span>
                                                        <span class="badge badge-light">Marketing Analytic</span>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1"
                                                    data-kt-search-element="customer">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle me-5">
                                                        <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::Info-->
                                                    <div class="fw-semibold">
                                                        <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                                                        <span class="badge badge-light">Software Enginer</span>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1"
                                                    data-kt-search-element="customer">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle me-5">
                                                        <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::Info-->
                                                    <div class="fw-semibold">
                                                        <span class="fs-6 text-gray-800 me-2">Sean Bean</span>
                                                        <span class="badge badge-light">Web Developer</span>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1"
                                                    data-kt-search-element="customer">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle me-5">
                                                        <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::Info-->
                                                    <div class="fw-semibold">
                                                        <span class="fs-6 text-gray-800 me-2">Brian Cox</span>
                                                        <span class="badge badge-light">UI/UX Designer</span>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1"
                                                    data-kt-search-element="customer">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle me-5">
                                                        <span
                                                            class="symbol-label bg-light-warning text-warning fw-semibold">
                                                            C </span>
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::Info-->
                                                    <div class="fw-semibold">
                                                        <span class="fs-6 text-gray-800 me-2">Mikaela Collins</span>
                                                        <span class="badge badge-light">Head Of Marketing</span>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1"
                                                    data-kt-search-element="customer">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle me-5">
                                                        <img alt="Pic" src="assets/media/avatars/300-9.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::Info-->
                                                    <div class="fw-semibold">
                                                        <span class="fs-6 text-gray-800 me-2">Francis Mitcham</span>
                                                        <span class="badge badge-light">Software Arcitect</span>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1"
                                                    data-kt-search-element="customer">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle me-5">
                                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                            O </span>
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::Info-->
                                                    <div class="fw-semibold">
                                                        <span class="fs-6 text-gray-800 me-2">Olivia Wild</span>
                                                        <span class="badge badge-light">System Admin</span>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1"
                                                    data-kt-search-element="customer">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle me-5">
                                                        <span
                                                            class="symbol-label bg-light-primary text-primary fw-semibold">
                                                            N </span>
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::Info-->
                                                    <div class="fw-semibold">
                                                        <span class="fs-6 text-gray-800 me-2">Neil Owen</span>
                                                        <span class="badge badge-light">Account Manager</span>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1"
                                                    data-kt-search-element="customer">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle me-5">
                                                        <img alt="Pic" src="assets/media/avatars/300-23.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::Info-->
                                                    <div class="fw-semibold">
                                                        <span class="fs-6 text-gray-800 me-2">Dan Wilson</span>
                                                        <span class="badge badge-light">Web Desinger</span>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Users-->
                                        </div>
                                        <!--end::Results-->
                                        <!--begin::Empty-->
                                        <div data-kt-search-element="empty" class="text-center d-none">
                                            <!--begin::Message-->
                                            <div class="fw-semibold py-0 mb-10">
                                                <div class="text-gray-600 fs-3 mb-2">No users found</div>

                                                <div class="text-gray-500 fs-6">Try to search by username, full name or
                                                    email...</div>
                                            </div>
                                            <!--end::Message-->

                                            <!--begin::Illustration-->
                                            <div class="text-center px-4">
                                                <img class="mw-100 mh-200px" alt="image"
                                                    src="assets/media/illustrations/sigma-1/2.png" />
                                            </div>
                                            <!--end::Illustration-->
                                        </div>
                                        <!--end::Empty-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Search-->
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
                                            href="#kt_highlight_68e5bbc17557b" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e5bbc175580" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5bbc17557b"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">var processs = function(search) {
    var timeout = setTimeout(function() {
        var number = KTUtil.getRandomInt(1, 6);

        // Hide recently viewed
        suggestionsElement.classList.add(&quot;d-none&quot;);

        if (number === 3) {
            // Hide results
            resultsElement.classList.add(&quot;d-none&quot;);
            // Show empty message
            emptyElement.classList.remove(&quot;d-none&quot;);
        } else {
            // Show results
            resultsElement.classList.remove(&quot;d-none&quot;);
            // Hide empty message
            emptyElement.classList.add(&quot;d-none&quot;);
        }

        // Complete search
        search.complete();
    }, 1500);
}

var clear = function(search) {
    // Show recently viewed
    suggestionsElement.classList.remove(&quot;d-none&quot;);
    // Hide results
    resultsElement.classList.add(&quot;d-none&quot;);
    // Hide empty message
    emptyElement.classList.add(&quot;d-none&quot;);
}

// Input handler
const handleInput = () =&gt; {
    // Select input field
    const inputField = element.querySelector(&quot;[data-kt-search-element=&quot;input&quot;]&quot;);

    // Handle keyboard press event
    inputField.addEventListener(&quot;keydown&quot;, e =&gt; {
        // Only apply action to Enter key press
        if(e.key === &quot;Enter&quot;){
            e.preventDefault(); // Stop form from submitting
        }
    });
}

// Elements
element = document.querySelector(&#039;#kt_docs_search_handler_basic&#039;);

if (!element) {
    return;
}

wrapperElement = element.querySelector(&quot;[data-kt-search-element=&quot;wrapper&quot;]&quot;);
suggestionsElement = element.querySelector(&quot;[data-kt-search-element=&quot;suggestions&quot;]&quot;);
resultsElement = element.querySelector(&quot;[data-kt-search-element=&quot;results&quot;]&quot;);
emptyElement = element.querySelector(&quot;[data-kt-search-element=&quot;empty&quot;]&quot;);

// Initialize search handler
searchObject = new KTSearch(element);

// Search handler
searchObject.on(&quot;kt.search.process&quot;, processs);

// Clear handler
searchObject.on(&quot;kt.search.clear&quot;, clear);

// Handle select
KTUtil.on(element, &quot;[data-kt-search-element=&quot;customer&quot;]&quot;, &quot;click&quot;, function() {
    //modal.hide();
});

// Handle input enter keypress
handleInput();</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e5bbc175580" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Main wrapper--&gt;
&lt;div
    id=&quot;kt_docs_search_handler_basic&quot;

    data-kt-search-keypress=&quot;true&quot;
    data-kt-search-min-length=&quot;2&quot;
    data-kt-search-enter=&quot;true&quot;
    data-kt-search-layout=&quot;inline&quot;&gt;

    &lt;!--begin::Input Form--&gt;
    &lt;form data-kt-search-element=&quot;form&quot; class=&quot;w-100 position-relative mb-5&quot; autocomplete=&quot;off&quot;&gt;
        &lt;!--begin::Hidden input(Added to disable form autocomplete)--&gt;
        &lt;input type=&quot;hidden&quot;/&gt;
        &lt;!--end::Hidden input--&gt;

        &lt;!--begin::Icon--&gt;
            &lt;!--begin::Svg Icon | path: magnifier--&gt;
        &lt;!--end::Icon--&gt;

        &lt;!--begin::Input--&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control form-control-lg form-control-solid px-15&quot;
            name=&quot;search&quot;
            value=&quot;&quot;
            placeholder=&quot;Search by username, full name or email...&quot;
            data-kt-search-element=&quot;input&quot;/&gt;
        &lt;!--end::Input--&gt;

        &lt;!--begin::Spinner--&gt;
        &lt;span class=&quot;position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5&quot; data-kt-search-element=&quot;spinner&quot;&gt;
            &lt;span class=&quot;spinner-border h-15px w-15px align-middle text-gray-500&quot;&gt;&lt;/span&gt;
        &lt;/span&gt;
        &lt;!--end::Spinner--&gt;

        &lt;!--begin::Reset--&gt;
        &lt;span class=&quot;btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none&quot;
            data-kt-search-element=&quot;clear&quot;&gt;

            &lt;!--begin::Svg Icon | path: cross--&gt;
        &lt;/span&gt;
        &lt;!--end::Reset--&gt;
    &lt;/form&gt;
    &lt;!--end::Form--&gt;

    &lt;!--begin::Wrapper--&gt;
    &lt;div class=&quot;py-5&quot;&gt;
        &lt;!--being::Search suggestion--&gt;
        &lt;div data-kt-search-element=&quot;suggestions&quot;&gt;
            ...
        &lt;/div&gt;
        &lt;!--end::Suggestion wrapper--&gt;

        &lt;!--begin::Search results--&gt;
        &lt;div data-kt-search-element=&quot;results&quot; class=&quot;d-none&quot;&gt;
            ...
        &lt;/div&gt;
        &lt;!--end::Search results--&gt;

        &lt;!--begin::Empty search--&gt;
        &lt;div data-kt-search-element=&quot;empty&quot; class=&quot;text-center d-none&quot;&gt;
            ...
        &lt;/div&gt;
        &lt;!--end::Empty search--&gt;
    &lt;/div&gt;
    &lt;!--end::Wrapper--&gt;
&lt;/div&gt;
&lt;!--end::Main wrapper--&gt;</code></pre>
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
                        <h1 class="anchor fw-bold mb-5" id="menu-layout" data-kt-scroll-offset="50">
                            <a href="#menu-layout"></a>

                            Menu Layout
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            This demo combines the Quick Search component with our menu component for unique interactive
                            dropdown search UI component.
                        </div>
                        <!--end::Block-->

                        <!--begin::Notice-->
                        <div class="py-5">
                            <!--begin::Information-->
                            <div class="d-flex align-items-center rounded py-5 px-5 bg-light-warning "><i
                                    class="ki-duotone ki-information-5 fs-3x text-warning me-5"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span></i> <!--begin::Description-->
                                <div class="text-gray-700 fw-bold fs-6">
                                    In this demo, we're simulating the search results by randomly showing and hiding the
                                    search results layer on keypress within the input field.
                                </div> <!--end::Description-->
                            </div><!--end::Information-->
                        </div>
                        <!--end::Notice-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-5 p-lg-15">
                                <!--begin::Search-->
                                <div id="kt_docs_search_handler_menu" class="d-flex align-items-stretch"
                                    data-kt-search-keypress="true" data-kt-search-min-length="2"
                                    data-kt-search-enter="true" data-kt-search-layout="menu" data-kt-menu-trigger="auto"
                                    data-kt-menu-overflow="false" data-kt-menu-placement="bottom-start"
                                    data-kt-menu-permanent="true">

                                    <!--begin::Search toggle-->
                                    <div class="d-flex align-items-center" data-kt-search-element="toggle"
                                        id="kt_header_search_toggle">
                                        <div class="btn btn-primary">
                                            Toggle Quick Search
                                        </div>
                                    </div>
                                    <!--end::Search toggle-->

                                    <!--begin::Menu-->
                                    <div data-kt-search-element="content"
                                        class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
                                        <!--begin::Wrapper-->
                                        <div data-kt-search-element="wrapper">
                                            <!--begin::Form-->
                                            <form data-kt-search-element="form" class="w-100 position-relative mb-3"
                                                autocomplete="off">
                                                <!--begin::Icon-->
                                                <i
                                                    class="ki-duotone ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 translate-middle-y ms-0"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                                <!--end::Icon-->

                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-flush ps-10"
                                                    name="search" value="" placeholder="Search..."
                                                    data-kt-search-element="input" />
                                                <!--end::Input-->

                                                <!--begin::Spinner-->
                                                <span
                                                    class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1"
                                                    data-kt-search-element="spinner">
                                                    <span
                                                        class="spinner-border h-15px w-15px align-middle text-gray-500"></span>
                                                </span>
                                                <!--end::Spinner-->

                                                <!--begin::Reset-->
                                                <span
                                                    class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none"
                                                    data-kt-search-element="clear">
                                                    <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0"><span
                                                            class="path1"></span><span class="path2"></span></i> </span>
                                                <!--end::Reset-->

                                                <!--begin::Toolbar-->
                                                <div class="position-absolute top-50 end-0 translate-middle-y"
                                                    data-kt-search-element="toolbar">
                                                    <!--begin::Preferences toggle-->
                                                    <div data-kt-search-element="preferences-show"
                                                        class="btn btn-icon w-20px btn-sm btn-active-color-primary me-1"
                                                        data-bs-toggle="tooltip" title="Show search preferences">
                                                        <i class="ki-duotone ki-setting-2 fs-1"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                    </div>
                                                    <!--end::Preferences toggle-->

                                                    <!--begin::Advanced search toggle-->
                                                    <div data-kt-search-element="advanced-options-form-show"
                                                        class="btn btn-icon w-20px btn-sm btn-active-color-primary"
                                                        data-bs-toggle="tooltip" title="Show more search options">
                                                        <i class="ki-duotone ki-down fs-2"></i>
                                                    </div>
                                                    <!--end::Advanced search toggle-->
                                                </div>
                                                <!--end::Toolbar-->
                                            </form>
                                            <!--end::Form-->

                                            <!--begin::Separator-->
                                            <div class="separator border-gray-200 mb-6"></div>
                                            <!--end::Separator-->
                                            <!--begin::Recently viewed-->
                                            <div data-kt-search-element="results" class="d-none">
                                                <!--begin::Items-->
                                                <div class="scroll-y mh-200px mh-lg-325px">
                                                    <!--begin::Category title-->
                                                    <h3 class="fs-5 text-muted m-0  pb-5"
                                                        data-kt-search-element="category-title">
                                                        Users </h3>
                                                    <!--end::Category title-->




                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <img src="assets/media/avatars/300-6.jpg" alt="" />
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column justify-content-start fw-semibold">
                                                            <span class="fs-6 fw-semibold">Karina Clark</span>
                                                            <span class="fs-7 fw-semibold text-muted">Marketing
                                                                Manager</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->



                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <img src="assets/media/avatars/300-2.jpg" alt="" />
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column justify-content-start fw-semibold">
                                                            <span class="fs-6 fw-semibold">Olivia Bold</span>
                                                            <span class="fs-7 fw-semibold text-muted">Software
                                                                Engineer</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->



                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <img src="assets/media/avatars/300-9.jpg" alt="" />
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column justify-content-start fw-semibold">
                                                            <span class="fs-6 fw-semibold">Ana Clark</span>
                                                            <span class="fs-7 fw-semibold text-muted">UI/UX Designer</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->



                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <img src="assets/media/avatars/300-14.jpg" alt="" />
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column justify-content-start fw-semibold">
                                                            <span class="fs-6 fw-semibold">Nick Pitola</span>
                                                            <span class="fs-7 fw-semibold text-muted">Art Director</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->



                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <img src="assets/media/avatars/300-11.jpg" alt="" />
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column justify-content-start fw-semibold">
                                                            <span class="fs-6 fw-semibold">Edward Kulnic</span>
                                                            <span class="fs-7 fw-semibold text-muted">System
                                                                Administrator</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->
                                                    <!--begin::Category title-->
                                                    <h3 class="fs-5 text-muted m-0 pt-5 pb-5"
                                                        data-kt-search-element="category-title">
                                                        Customers </h3>
                                                    <!--end::Category title-->



                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <img class="w-20px h-20px"
                                                                    src="assets/media/svg/brand-logos/volicity-9.svg"
                                                                    alt="" />
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column justify-content-start fw-semibold">
                                                            <span class="fs-6 fw-semibold">Company Rbranding</span>
                                                            <span class="fs-7 fw-semibold text-muted">UI Design</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->



                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <img class="w-20px h-20px"
                                                                    src="assets/media/svg/brand-logos/tvit.svg"
                                                                    alt="" />
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column justify-content-start fw-semibold">
                                                            <span class="fs-6 fw-semibold">Company Re-branding</span>
                                                            <span class="fs-7 fw-semibold text-muted">Web
                                                                Development</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->



                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <img class="w-20px h-20px"
                                                                    src="assets/media/svg/misc/infography.svg"
                                                                    alt="" />
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column justify-content-start fw-semibold">
                                                            <span class="fs-6 fw-semibold">Business Analytics App</span>
                                                            <span class="fs-7 fw-semibold text-muted">Administration</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->



                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <img class="w-20px h-20px"
                                                                    src="assets/media/svg/brand-logos/leaf.svg"
                                                                    alt="" />
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column justify-content-start fw-semibold">
                                                            <span class="fs-6 fw-semibold">EcoLeaf App Launch</span>
                                                            <span class="fs-7 fw-semibold text-muted">Marketing</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->



                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <img class="w-20px h-20px"
                                                                    src="assets/media/svg/brand-logos/tower.svg"
                                                                    alt="" />
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column justify-content-start fw-semibold">
                                                            <span class="fs-6 fw-semibold">Tower Group Website</span>
                                                            <span class="fs-7 fw-semibold text-muted">Google Adwords</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->

                                                    <!--begin::Category title-->
                                                    <h3 class="fs-5 text-muted m-0 pt-5 pb-5"
                                                        data-kt-search-element="category-title">
                                                        Projects </h3>
                                                    <!--end::Category title-->


                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <i class="ki-duotone ki-document fs-2 text-primary"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column">
                                                            <span class="fs-6 fw-semibold">Si-Fi Project by AU
                                                                Themes</span>
                                                            <span class="fs-7 fw-semibold text-muted">#45670</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->



                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <i class="ki-duotone ki-chart-simple fs-2 text-primary"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span><span
                                                                        class="path4"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column">
                                                            <span class="fs-6 fw-semibold">Shopix Mobile App
                                                                Planning</span>
                                                            <span class="fs-7 fw-semibold text-muted">#45690</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->



                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <i class="ki-duotone ki-message-text-2 fs-2 text-primary"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column">
                                                            <span class="fs-6 fw-semibold">Finance Monitoring SAAS
                                                                Discussion</span>
                                                            <span class="fs-7 fw-semibold text-muted">#21090</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->



                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <i class="ki-duotone ki-profile-circle fs-2 text-primary"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column">
                                                            <span class="fs-6 fw-semibold">Dashboard Analitics
                                                                Launch</span>
                                                            <span class="fs-7 fw-semibold text-muted">#34560</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->


                                                </div>
                                                <!--end::Items-->
                                            </div>
                                            <!--end::Recently viewed-->
                                            <!--begin::Recently viewed-->
                                            <div class="mb-4" data-kt-search-element="main">
                                                <!--begin::Heading-->
                                                <div class="d-flex flex-stack fw-semibold mb-4">
                                                    <!--begin::Label-->
                                                    <span class="text-muted fs-6 me-2">Recently Searched:</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Heading-->

                                                <!--begin::Items-->
                                                <div class="scroll-y mh-200px mh-lg-325px">
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <i
                                                                    class="ki-duotone ki-icons/duotune/electronics/elc004.svg fs-2 text-primary"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column">
                                                            <a href="javascript:void(0)"
                                                                class="fs-6 text-gray-800 text-hover-primary fw-semibold">BoomApp
                                                                by Keenthemes</a>
                                                            <span class="fs-7 text-muted fw-semibold">#45789</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <i class="ki-duotone ki-chart-simple fs-2 text-primary"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span><span
                                                                        class="path4"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column">
                                                            <a href="javascript:void(0)"
                                                                class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Kept
                                                                API Project Meeting</a>
                                                            <span class="fs-7 text-muted fw-semibold">#84050</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <i class="ki-duotone ki-chart fs-2 text-primary"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column">
                                                            <a href="javascript:void(0)"
                                                                class="fs-6 text-gray-800 text-hover-primary fw-semibold">"KPI
                                                                Monitoring App Launch</a>
                                                            <span class="fs-7 text-muted fw-semibold">#84250</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <i
                                                                    class="ki-duotone ki-icons/duotune/graphs/gra002.svg fs-2 text-primary"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column">
                                                            <a href="javascript:void(0)"
                                                                class="fs-6 text-gray-800 text-hover-primary fw-semibold">Project
                                                                Reference FAQ</a>
                                                            <span class="fs-7 text-muted fw-semibold">#67945</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <i class="ki-duotone ki-sms fs-2 text-primary"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column">
                                                            <a href="javascript:void(0)"
                                                                class="fs-6 text-gray-800 text-hover-primary fw-semibold">"FitPro
                                                                App Development</a>
                                                            <span class="fs-7 text-muted fw-semibold">#84250</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <i class="ki-duotone ki-bank fs-2 text-primary"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column">
                                                            <a href="javascript:void(0)"
                                                                class="fs-6 text-gray-800 text-hover-primary fw-semibold">Shopix
                                                                Mobile App</a>
                                                            <span class="fs-7 text-muted fw-semibold">#45690</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <i
                                                                    class="ki-duotone ki-icons/duotune/graphs/gra002.svg fs-2 text-primary"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column">
                                                            <a href="javascript:void(0)"
                                                                class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing
                                                                UI Design" Launch</a>
                                                            <span class="fs-7 text-muted fw-semibold">#24005</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Items-->
                                            </div>
                                            <!--end::Recently viewed-->
                                            <!--begin::Empty-->
                                            <div data-kt-search-element="empty" class="text-center d-none">
                                                <!--begin::Icon-->
                                                <div class="pt-10 pb-10">
                                                    <i class="ki-duotone ki-search-list fs-4x opacity-50"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i>
                                                </div>
                                                <!--end::Icon-->

                                                <!--begin::Message-->
                                                <div class="pb-15 fw-semibold">
                                                    <h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
                                                    <div class="text-muted fs-7">Please try again with a different query
                                                    </div>
                                                </div>
                                                <!--end::Message-->
                                            </div>
                                            <!--end::Empty-->
                                        </div>
                                        <!--end::Wrapper-->

                                        <!--begin::Preferences-->
                                        <form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
                                            <!--begin::Heading-->
                                            <h3 class="fw-semibold text-gray-900 mb-7">Advanced Search</h3>
                                            <!--end::Heading-->

                                            <!--begin::Input group-->
                                            <div class="mb-5">
                                                <input type="text"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Contains the word" name="query" />
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="mb-5">
                                                <!--begin::Radio group-->
                                                <div class="nav-group nav-group-fluid">
                                                    <!--begin::Option-->
                                                    <label>
                                                        <input type="radio" class="btn-check" name="type"
                                                            value="has" checked="checked" />
                                                        <span
                                                            class="btn btn-sm btn-color-muted btn-active btn-active-primary">
                                                            All
                                                        </span>
                                                    </label>
                                                    <!--end::Option-->

                                                    <!--begin::Option-->
                                                    <label>
                                                        <input type="radio" class="btn-check" name="type"
                                                            value="users" />
                                                        <span
                                                            class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                                                            Users
                                                        </span>
                                                    </label>
                                                    <!--end::Option-->

                                                    <!--begin::Option-->
                                                    <label>
                                                        <input type="radio" class="btn-check" name="type"
                                                            value="orders" />
                                                        <span
                                                            class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                                                            Orders
                                                        </span>
                                                    </label>
                                                    <!--end::Option-->

                                                    <!--begin::Option-->
                                                    <label>
                                                        <input type="radio" class="btn-check" name="type"
                                                            value="projects" />
                                                        <span
                                                            class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                                                            Projects
                                                        </span>
                                                    </label>
                                                    <!--end::Option-->
                                                </div>
                                                <!--end::Radio group-->
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="mb-5">
                                                <input type="text" name="assignedto"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Assigned to" value="" />
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="mb-5">
                                                <input type="text" name="collaborators"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Collaborators" value="" />
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="mb-5">
                                                <!--begin::Radio group-->
                                                <div class="nav-group nav-group-fluid">
                                                    <!--begin::Option-->
                                                    <label>
                                                        <input type="radio" class="btn-check" name="attachment"
                                                            value="has" checked="checked" />
                                                        <span
                                                            class="btn btn-sm btn-color-muted btn-active btn-active-primary">
                                                            Has attachment
                                                        </span>
                                                    </label>
                                                    <!--end::Option-->

                                                    <!--begin::Option-->
                                                    <label>
                                                        <input type="radio" class="btn-check" name="attachment"
                                                            value="any" />
                                                        <span
                                                            class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                                                            Any
                                                        </span>
                                                    </label>
                                                    <!--end::Option-->
                                                </div>
                                                <!--end::Radio group-->
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="mb-5">
                                                <select name="timezone" aria-label="Select a Timezone"
                                                    data-control="select2" data-placeholder="date_period"
                                                    class="form-select form-select-sm form-select-solid">
                                                    <option value="next">Within the next</option>
                                                    <option value="last">Within the last</option>
                                                    <option value="between">Between</option>
                                                    <option value="on">On</option>
                                                </select>
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="row mb-8">
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <input type="number" name="date_number"
                                                        class="form-control form-control-sm form-control-solid"
                                                        placeholder="Lenght" value="" />
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <select name="date_typer" aria-label="Select a Timezone"
                                                        data-control="select2" data-placeholder="Period"
                                                        class="form-select form-select-sm form-select-solid">
                                                        <option value="days">Days</option>
                                                        <option value="weeks">Weeks</option>
                                                        <option value="months">Months</option>
                                                        <option value="years">Years</option>
                                                    </select>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Actions-->
                                            <div class="d-flex justify-content-end">
                                                <button type="reset"
                                                    class="btn btn-sm btn-white fw-bold btn-active-light-primary me-2"
                                                    data-kt-search-element="advanced-options-form-cancel">Cancel</button>

                                                <a href="pages/search/horizontal" class="btn btn-sm fw-bold btn-primary"
                                                    data-kt-search-element="advanced-options-form-search">Search</a>
                                            </div>
                                            <!--end::Actions-->
                                        </form>
                                        <!--end::Preferences-->
                                        <!--begin::Preferences-->
                                        <form data-kt-search-element="preferences" class="pt-1 d-none">
                                            <!--begin::Heading-->
                                            <h3 class="fw-semibold text-gray-900 mb-7">Search Preferences</h3>
                                            <!--end::Heading-->

                                            <!--begin::Input group-->
                                            <div class="pb-4 border-bottom">
                                                <label
                                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                    <span
                                                        class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                                        Projects
                                                    </span>

                                                    <input class="form-check-input" type="checkbox" value="1"
                                                        checked="checked" />
                                                </label>
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="py-4 border-bottom">
                                                <label
                                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                    <span
                                                        class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                                        Targets
                                                    </span>
                                                    <input class="form-check-input" type="checkbox" value="1"
                                                        checked="checked" />
                                                </label>
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="py-4 border-bottom">
                                                <label
                                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                    <span
                                                        class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                                        Affiliate Programs
                                                    </span>
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </label>
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="py-4 border-bottom">
                                                <label
                                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                    <span
                                                        class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                                        Referrals
                                                    </span>
                                                    <input class="form-check-input" type="checkbox" value="1"
                                                        checked="checked" />
                                                </label>
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="py-4 border-bottom">
                                                <label
                                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                    <span
                                                        class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                                        Users
                                                    </span>
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </label>
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Actions-->
                                            <div class="d-flex justify-content-end pt-7">
                                                <button type="reset"
                                                    class="btn btn-sm btn-white fw-bold btn-active-light-primary me-2"
                                                    data-kt-search-element="preferences-dismiss">Cancel</button>
                                                <button type="submit" class="btn btn-sm fw-bold btn-primary">Save
                                                    Changes</button>
                                            </div>
                                            <!--end::Actions-->
                                        </form>
                                        <!--end::Preferences-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Search-->
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
                                            href="#kt_highlight_68e5bbc17577a" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e5bbc17577d" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5bbc17577a"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">var processs = function(search) {
    var timeout = setTimeout(function() {
        var number = KTUtil.getRandomInt(1, 3);

        // Hide recently viewed
        mainElement.classList.add(&quot;d-none&quot;);

        if (number === 3) {
            // Hide results
            resultsElement.classList.add(&quot;d-none&quot;);
            // Show empty message
            emptyElement.classList.remove(&quot;d-none&quot;);
        } else {
            // Show results
            resultsElement.classList.remove(&quot;d-none&quot;);
            // Hide empty message
            emptyElement.classList.add(&quot;d-none&quot;);
        }

        // Complete search
        search.complete();
    }, 1500);
}

var clear = function(search) {
    // Show recently viewed
    mainElement.classList.remove(&quot;d-none&quot;);
    // Hide results
    resultsElement.classList.add(&quot;d-none&quot;);
    // Hide empty message
    emptyElement.classList.add(&quot;d-none&quot;);
}

var handlePreferences = function() {
    // Preference show handler
    preferencesShowElement.addEventListener(&quot;click&quot;, function() {
        wrapperElement.classList.add(&quot;d-none&quot;);
        preferencesElement.classList.remove(&quot;d-none&quot;);
    });

    // Preference dismiss handler
    preferencesDismissElement.addEventListener(&quot;click&quot;, function() {
        wrapperElement.classList.remove(&quot;d-none&quot;);
        preferencesElement.classList.add(&quot;d-none&quot;);
    });
}

var handleAdvancedOptionsForm = function() {
    // Show
    advancedOptionsFormShowElement.addEventListener(&quot;click&quot;, function() {
        wrapperElement.classList.add(&quot;d-none&quot;);
        advancedOptionsFormElement.classList.remove(&quot;d-none&quot;);
    });

    // Cancel
    advancedOptionsFormCancelElement.addEventListener(&quot;click&quot;, function() {
        wrapperElement.classList.remove(&quot;d-none&quot;);
        advancedOptionsFormElement.classList.add(&quot;d-none&quot;);
    });

    // Search
    advancedOptionsFormSearchElement.addEventListener(&quot;click&quot;, function() {

    });
}

// Elements
element = document.querySelector(&quot;#kt_docs_search_handler_menu&quot;);

if (!element) {
    return;
}

wrapperElement = element.querySelector(&quot;[data-kt-search-element=&quot;wrapper&quot;]&quot;);
formElement = element.querySelector(&quot;[data-kt-search-element=&quot;form&quot;]&quot;);
mainElement = element.querySelector(&quot;[data-kt-search-element=&quot;main&quot;]&quot;);
resultsElement = element.querySelector(&quot;[data-kt-search-element=&quot;results&quot;]&quot;);
emptyElement = element.querySelector(&quot;[data-kt-search-element=&quot;empty&quot;]&quot;);

preferencesElement = element.querySelector(&quot;[data-kt-search-element=&quot;preferences&quot;]&quot;);
preferencesShowElement = element.querySelector(&quot;[data-kt-search-element=&quot;preferences-show&quot;]&quot;);
preferencesDismissElement = element.querySelector(&quot;[data-kt-search-element=&quot;preferences-dismiss&quot;]&quot;);

advancedOptionsFormElement = element.querySelector(&quot;[data-kt-search-element=&quot;advanced-options-form&quot;]&quot;);
advancedOptionsFormShowElement = element.querySelector(&quot;[data-kt-search-element=&quot;advanced-options-form-show&quot;]&quot;);
advancedOptionsFormCancelElement = element.querySelector(&quot;[data-kt-search-element=&quot;advanced-options-form-cancel&quot;]&quot;);
advancedOptionsFormSearchElement = element.querySelector(&quot;[data-kt-search-element=&quot;advanced-options-form-search&quot;]&quot;);

// Initialize search handler
searchObject = new KTSearch(element);

// Search handler
searchObject.on(&quot;kt.search.process&quot;, processs);

// Clear handler
searchObject.on(&quot;kt.search.clear&quot;, clear);

// Custom handlers
handlePreferences();
handleAdvancedOptionsForm();</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e5bbc17577d" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Main wrapper--&gt;
&lt;div id=&quot;kt_docs_search_handler_menu&quot;
    class=&quot;d-flex align-items-stretch&quot;

    data-kt-search-keypress=&quot;true&quot;
    data-kt-search-min-length=&quot;2&quot;
    data-kt-search-enter=&quot;true&quot;
    data-kt-search-layout=&quot;menu&quot;

    data-kt-menu-trigger=&quot;auto&quot;
    data-kt-menu-overflow=&quot;false&quot;
    data-kt-menu-permanent=&quot;true&quot;
    data-kt-menu-placement=&quot;bottom-start&quot;&gt;

    &lt;!--begin::Search toggle--&gt;
    &lt;div class=&quot;d-flex align-items-center&quot; data-kt-search-element=&quot;toggle&quot; id=&quot;kt_header_search_toggle&quot;&gt;
        &lt;div class=&quot;btn btn-primary&quot;&gt;
            Toggle Quick Search
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;!--end::Search toggle--&gt;

    &lt;!--begin::Menu--&gt;
    &lt;div data-kt-search-element=&quot;content&quot; class=&quot;menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px&quot;&gt;
        &lt;!--begin::Wrapper--&gt;
        &lt;div data-kt-search-element=&quot;wrapper&quot;&gt;
        &lt;!--begin::Form--&gt;
            &lt;form data-kt-search-element=&quot;form&quot; class=&quot;w-100 position-relative mb-3&quot; autocomplete=&quot;off&quot;&gt;
                &lt;!--begin::Icon--&gt;
                    &lt;!--begin::Svg Icon | path: magnifier--&gt;
                &lt;!--end::Icon--&gt;

                &lt;!--begin::Input--&gt;
                &lt;input type=&quot;text&quot;
                    class=&quot;form-control form-control-flush ps-10&quot;
                    name=&quot;search&quot;
                    value=&quot;&quot;
                    placeholder=&quot;Search...&quot;
                    data-kt-search-element=&quot;input&quot;/&gt;
                &lt;!--end::Input--&gt;

                &lt;!--begin::Spinner--&gt;
                &lt;span class=&quot;position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1&quot;
                    data-kt-search-element=&quot;spinner&quot;&gt;
                    &lt;span class=&quot;spinner-border h-15px w-15px align-middle text-gray-500&quot;&gt;&lt;/span&gt;
                &lt;/span&gt;
                &lt;!--end::Spinner--&gt;

                &lt;!--begin::Reset--&gt;
                &lt;span class=&quot;btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none&quot;
                    data-kt-search-element=&quot;clear&quot;&gt;
                    &lt;!--begin::Svg Icon | path: cross--&gt;
                &lt;/span&gt;
                &lt;!--end::Reset--&gt;

                &lt;!--begin::Toolbar--&gt;
                &lt;div class=&quot;position-absolute top-50 end-0 translate-middle-y&quot; data-kt-search-element=&quot;toolbar&quot;&gt;
                    &lt;!--begin::Preferences toggle--&gt;
                    &lt;div data-kt-search-element=&quot;preferences-show&quot;
                        class=&quot;btn btn-icon w-20px btn-sm btn-active-color-primary me-1&quot;
                        data-bs-toggle=&quot;tooltip&quot;
                        title=&quot;Show search preferences&quot;&gt;
                        &lt;!--begin::Svg Icon | path: setting-2--&gt;
                    &lt;/div&gt;
                    &lt;!--end::Preferences toggle--&gt;

                    &lt;!--begin::Advanced search toggle--&gt;
                    &lt;div data-kt-search-element=&quot;advanced-options-form-show&quot;
                        class=&quot;btn btn-icon w-20px btn-sm btn-active-color-primary&quot;
                        data-bs-toggle=&quot;tooltip&quot;
                        title=&quot;Show more search options&quot;&gt;
                        &lt;!--begin::Svg Icon | path: down--&gt;
                    &lt;/div&gt;
                    &lt;!--end::Advanced search toggle--&gt;
                &lt;/div&gt;
                &lt;!--end::Toolbar--&gt;
            &lt;/form&gt;
            &lt;!--end::Form--&gt;

            &lt;!--begin::Search results--&gt;
            &lt;div data-kt-search-element=&quot;results&quot; class=&quot;d-none&quot;&gt;
                ...
            &lt;/div&gt;
            &lt;!--end::Search results--&gt;

            &lt;!--begin::Main content element--&gt;
            &lt;div data-kt-search-element=&quot;main&quot;&gt;
                ...
            &lt;/div&gt;
            &lt;!--end::Main content element--&gt;

            &lt;!--begin::Empty search--&gt;
            &lt;div data-kt-search-element=&quot;empty&quot; class=&quot;text-center d-none&quot;&gt;
                ...
            &lt;/div&gt;
            &lt;!--end::Empty search--&gt;
        &lt;/div&gt;
        &lt;!--end::Wrapper--&gt;

        &lt;!--begin::Search Advanced Options--&gt;
        &lt;div data-kt-search-element=&quot;advanced-options-form&quot;&gt;
            ...
        &lt;/div&gt;
        &lt;!--end::Search Advanced Options--&gt;

        &lt;!--begin::Search Preference--&gt;
        &lt;div data-kt-search-element=&quot;preferences&quot;&gt;
            ...
        &lt;/div&gt;
        &lt;!--end::Search Preference--&gt;
    &lt;/div&gt;
    &lt;!--end::Menu--&gt;
&lt;/div&gt;
&lt;!--end::Main wrapper--&gt;</code></pre>
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
                        <h1 class="anchor fw-bold mb-5" id="responsive-layout" data-kt-scroll-offset="50">
                            <a href="#responsive-layout"></a>

                            Responsive Layout
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            This demo showcases Search UI's responsive solution. It displays as a full inline input field on
                            large screens, and converts into an icon toggle button on smaller screens.
                        </div>
                        <!--end::Block-->

                        <!--begin::Notice-->
                        <div class="py-5">
                            <!--begin::Information-->
                            <div class="d-flex align-items-center rounded py-5 px-5 bg-light-warning "><i
                                    class="ki-duotone ki-information-5 fs-3x text-warning me-5"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span></i> <!--begin::Description-->
                                <div class="text-gray-700 fw-bold fs-6">
                                    In this demo, we're simulating the search results by randomly showing and hiding the
                                    search results layer on keypress within the input field.
                                </div> <!--end::Description-->
                            </div><!--end::Information-->
                        </div>
                        <!--end::Notice-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-5 p-lg-15">
                                <!--begin::Search-->
                                <div id="kt_docs_search_handler_responsive" class="d-flex align-items-center w-lg-400px"
                                    data-kt-search-keypress="true" data-kt-search-min-length="2"
                                    data-kt-search-enter="enter" data-kt-search-layout="menu"
                                    data-kt-search-responsive="lg" data-kt-menu-trigger="auto"
                                    data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start">

                                    <!--begin::Tablet and mobile search toggle-->
                                    <div data-kt-search-element="toggle" class="d-flex d-lg-none align-items-center">
                                        <div class="btn btn-icon btn-active-light-primary">
                                            <i class="ki-duotone ki-magnifier fs-1"><span class="path1"></span><span
                                                    class="path2"></span></i>
                                        </div>
                                    </div>
                                    <!--end::Tablet and mobile search toggle-->

                                    <!--begin::Form-->
                                    <form data-kt-search-element="form"
                                        class="d-none d-lg-block w-100 position-relative mb-5 mb-lg-0" autocomplete="off">
                                        <!--begin::Hidden input(Added to disable form autocomplete)-->
                                        <input type="hidden" />
                                        <!--end::Hidden input-->

                                        <!--begin::Icon-->
                                        <i
                                            class="ki-duotone ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 translate-middle-y ms-5"><span
                                                class="path1"></span><span class="path2"></span></i> <!--end::Icon-->

                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid ps-14"
                                            name="search" value="" placeholder="Search..."
                                            data-kt-search-element="input" />
                                        <!--end::Input-->

                                        <!--begin::Spinner-->
                                        <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-6"
                                            data-kt-search-element="spinner">
                                            <span class="spinner-border h-15px w-15px align-middle text-gray-500"></span>
                                        </span>
                                        <!--end::Spinner-->

                                        <!--begin::Reset-->
                                        <span
                                            class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none"
                                            data-kt-search-element="clear">
                                            <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0"><span
                                                    class="path1"></span><span class="path2"></span></i> </span>
                                        <!--end::Reset-->
                                    </form>
                                    <!--end::Form-->

                                    <!--begin::Menu-->
                                    <div data-kt-search-element="content"
                                        class="menu menu-sub menu-sub-dropdown w-300px w-md-400px py-7 px-7 overflow-hidden">
                                        <!--begin::Wrapper-->
                                        <div data-kt-search-element="wrapper">
                                            <!--begin::Categories-->
                                            <div data-kt-search-element="categories"
                                                class="d-flex overflow-auto position-relative" data-kt-buttons="true">
                                                <!--begin::Category items-->
                                                <a class="btn btn-light-primary active rounded-pill me-1 py-2 px-4"
                                                    data-kt-search-category="all">All</a>
                                                <a class="btn btn-light-primary rounded-pill me-1 py-2 px-4"
                                                    data-kt-search-category="targets">Targets</a>
                                                <a class="btn btn-light-primary rounded-pill me-1 py-2 px-4"
                                                    data-kt-search-category="projects">Projects</a>
                                                <a class="btn btn-light-primary rounded-pill me-1 py-2 px-4"
                                                    data-kt-search-category="users">Users</a>
                                                <!--end::Category items-->

                                                <!--begin::Preferences toggle-->
                                                <div data-kt-search-element="preferences-show"
                                                    class="btn btn-icon btn-sm btn-active-color-primary ms-auto">
                                                    <i class="ki-duotone ki-dots-square fs-2x"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span></i>
                                                </div>
                                                <!--end::Preferences toggle-->
                                            </div>
                                            <!--end::Categories-->

                                            <!--begin::Separator-->
                                            <div class="separator border-gray-200 my-6"></div>
                                            <!--end::Separator-->
                                            <!--begin::Recently viewed-->
                                            <div data-kt-search-element="results" class="d-none">
                                                <!--begin::Items-->
                                                <div class="scroll-y mh-200px mh-lg-300px my-2 me-n2 pe-2">
                                                    <!--begin::Category title-->
                                                    <h3 class="fs-4 fw-semibold m-0  pb-5"
                                                        data-kt-search-element="category-title">
                                                        Targets </h3>
                                                    <!--end::Category title-->



                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                        data-kt-search-category="targets">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-30px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <img class="w-20px h-20px"
                                                                    src="assets/media/svg/brand-logos/volicity-9.svg"
                                                                    alt="" />
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="fw-semibold">
                                                            <span class="fs-6 text-gray-800 me-2">Company Rbranding</span>
                                                            <span class="badge badge-light">UI Design</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->



                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                        data-kt-search-category="targets">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-30px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <img class="w-20px h-20px"
                                                                    src="assets/media/svg/brand-logos/tvit.svg"
                                                                    alt="" />
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="fw-semibold">
                                                            <span class="fs-6 text-gray-800 me-2">Company
                                                                Re-branding</span>
                                                            <span class="badge badge-light">Web Development</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->



                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                        data-kt-search-category="targets">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-30px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <img class="w-20px h-20px"
                                                                    src="assets/media/svg/misc/infography.svg"
                                                                    alt="" />
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="fw-semibold">
                                                            <span class="fs-6 text-gray-800 me-2">Business Analytics
                                                                App</span>
                                                            <span class="badge badge-light">Administration</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->



                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                        data-kt-search-category="targets">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-30px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <img class="w-20px h-20px"
                                                                    src="assets/media/svg/brand-logos/atica.svg"
                                                                    alt="" />
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="fw-semibold">
                                                            <span class="fs-6 text-gray-800 me-2">5G Mobile Billing</span>
                                                            <span class="badge badge-light">Database Design</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->



                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                        data-kt-search-category="targets">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-30px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <img class="w-20px h-20px"
                                                                    src="assets/media/svg/brand-logos/rgb.svg"
                                                                    alt="" />
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="fw-semibold">
                                                            <span class="fs-6 text-gray-800 me-2">UI/UX Conference</span>
                                                            <span class="badge badge-light">Server Setup</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->



                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                        data-kt-search-category="targets">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-30px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <img class="w-20px h-20px"
                                                                    src="assets/media/svg/brand-logos/leaf.svg"
                                                                    alt="" />
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="fw-semibold">
                                                            <span class="fs-6 text-gray-800 me-2">EcoLeaf App Launch</span>
                                                            <span class="badge badge-light">Marketing</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->



                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                        data-kt-search-category="targets">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-30px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <img class="w-20px h-20px"
                                                                    src="assets/media/svg/brand-logos/tower.svg"
                                                                    alt="" />
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="fw-semibold">
                                                            <span class="fs-6 text-gray-800 me-2">Tower Group
                                                                Website</span>
                                                            <span class="badge badge-light">Google Adwords</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->

                                                    <!--begin::Category title-->
                                                    <h3 class="fs-4 fw-semibold m-0 pt-10 pb-5"
                                                        data-kt-search-element="category-title">
                                                        Projects </h3>
                                                    <!--end::Category title-->


                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                        data-kt-search-category="projects">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-30px me-4">
                                                            <span class="symbol-label bg-light-primary">
                                                                <i class="ki-duotone ki-document fs-2 text-primary"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="fw-semibold">
                                                            <span class="fs-6 text-gray-800">Si-Fi Project by AU
                                                                Themes</span>
                                                            <span class="fs-7 text-muted">#45670</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->



                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                        data-kt-search-category="projects">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-30px me-4">
                                                            <span class="symbol-label bg-light-primary">
                                                                <i class="ki-duotone ki-wallet fs-2 text-primary"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span><span
                                                                        class="path4"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="fw-semibold">
                                                            <span class="fs-6 text-gray-800">"Create FireStone API"
                                                                Target</span>
                                                            <span class="fs-7 text-muted">#84250</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->



                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                        data-kt-search-category="projects">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-30px me-4">
                                                            <span class="symbol-label bg-light-primary">
                                                                <i class="ki-duotone ki-package fs-2 text-primary"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="fw-semibold">
                                                            <span class="fs-6 text-gray-800">Reference to "FureStibe"
                                                                Project FAQ</span>
                                                            <span class="fs-7 text-muted">#67945</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->



                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                        data-kt-search-category="projects">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-30px me-4">
                                                            <span class="symbol-label bg-light-primary">
                                                                <i class="ki-duotone ki-graph-3 fs-2 text-primary"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="fw-semibold">
                                                            <span class="fs-6 text-gray-800">"Landing UI Design" Project
                                                                Launch</span>
                                                            <span class="fs-7 text-muted">#24005</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->



                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                        data-kt-search-category="projects">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-30px me-4">
                                                            <span class="symbol-label bg-light-primary">
                                                                <i class="ki-duotone ki-chart-simple fs-2 text-primary"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span><span
                                                                        class="path4"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="fw-semibold">
                                                            <span class="fs-6 text-gray-800">Shopix Mobile App
                                                                Planning</span>
                                                            <span class="fs-7 text-muted">#45690</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->



                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                        data-kt-search-category="projects">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-30px me-4">
                                                            <span class="symbol-label bg-light-primary">
                                                                <i class="ki-duotone ki-message-text-2 fs-2 text-primary"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="fw-semibold">
                                                            <span class="fs-6 text-gray-800">Finance Monitoring SAAS
                                                                Discussion</span>
                                                            <span class="fs-7 text-muted">#21090</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->



                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                        data-kt-search-category="projects">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-30px me-4">
                                                            <span class="symbol-label bg-light-primary">
                                                                <i class="ki-duotone ki-profile-circle fs-2 text-primary"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="fw-semibold">
                                                            <span class="fs-6 text-gray-800">Dashboard Analitics
                                                                Launch</span>
                                                            <span class="fs-7 text-muted">#34560</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->


                                                    <!--begin::Category title-->
                                                    <h3 class="fs-4 fw-semibold m-0 pt-10 pb-5"
                                                        data-kt-search-element="category-title">
                                                        Users </h3>
                                                    <!--end::Category title-->




                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                        data-kt-search-category="users">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-30px me-4">
                                                            <img src="assets/media/avatars/300-6.jpg" alt="" />
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="fw-semibold">
                                                            <span class="fs-6 text-gray-800 me-2">Karina Clark</span>
                                                            <span class="badge badge-light">Marketing Manager</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->



                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                        data-kt-search-category="users">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-30px me-4">
                                                            <img src="assets/media/avatars/300-2.jpg" alt="" />
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="fw-semibold">
                                                            <span class="fs-6 text-gray-800 me-2">Olivia Bold</span>
                                                            <span class="badge badge-light">Software Engineer</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->



                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                        data-kt-search-category="users">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-30px me-4">
                                                            <img src="assets/media/avatars/300-5.jpg" alt="" />
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="fw-semibold">
                                                            <span class="fs-6 text-gray-800 me-2">Sean Wild</span>
                                                            <span class="badge badge-light">Web Developer</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->



                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                        data-kt-search-category="users">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-30px me-4">
                                                            <img src="assets/media/avatars/300-23.jpg" alt="" />
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="fw-semibold">
                                                            <span class="fs-6 text-gray-800 me-2">Karina Clark</span>
                                                            <span class="badge badge-light">Google Expert</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->



                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                        data-kt-search-category="users">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-30px me-4">
                                                            <img src="assets/media/avatars/300-9.jpg" alt="" />
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="fw-semibold">
                                                            <span class="fs-6 text-gray-800 me-2">Ana Clark</span>
                                                            <span class="badge badge-light">UI/UX Designer</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->



                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                        data-kt-search-category="users">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-30px me-4">
                                                            <img src="assets/media/avatars/300-14.jpg" alt="" />
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="fw-semibold">
                                                            <span class="fs-6 text-gray-800 me-2">Nick Pitola</span>
                                                            <span class="badge badge-light">Art Director</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->



                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                                        data-kt-search-category="users">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-30px me-4">
                                                            <img src="assets/media/avatars/300-11.jpg" alt="" />
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="fw-semibold">
                                                            <span class="fs-6 text-gray-800 me-2">Edward Kulnic</span>
                                                            <span class="badge badge-light">System Administrator</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Items-->
                                            </div>
                                            <!--end::Recently viewed-->
                                            <!--begin::Recently viewed-->
                                            <div data-kt-search-element="recently-viewed">
                                                <!--begin::Heading-->
                                                <div class="d-flex flex-stack fw-semibold">
                                                    <span class="text-muted fs-5 me-2">Recently Viewed:</span>

                                                    <!--begin::Clear-->
                                                    <div data-kt-search-element="recently-viewed-clear"
                                                        class="btn btn-link fw-6">
                                                        Clear
                                                    </div>
                                                    <!--end::Clear-->
                                                </div>
                                                <!--end::Heading-->

                                                <!--begin::Items-->
                                                <div class="scroll-y mh-200px mh-lg-300px my-2 me-n2 pe-2">
                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-30px me-4">
                                                            <span class="symbol-label bg-light-primary">
                                                                <i class="ki-duotone ki-document fs-2 text-primary"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="fw-semibold">
                                                            <span class="fs-6 text-gray-800">Si-Fi Project by AU
                                                                Themes</span>
                                                            <span class="fs-7 text-muted">#45670</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-30px me-4">
                                                            <span class="symbol-label bg-light-primary">
                                                                <i class="ki-duotone ki-wallet fs-2 text-primary"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span><span
                                                                        class="path4"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="fw-semibold">
                                                            <span class="fs-6 text-gray-800">"Create FireStone API"
                                                                Target</span>
                                                            <span class="fs-7 text-muted">#84250</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-30px me-4">
                                                            <span class="symbol-label bg-light-primary">
                                                                <i class="ki-duotone ki-package fs-2 text-primary"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="fw-semibold">
                                                            <span class="fs-6 text-gray-800">Reference to "FureStibe"
                                                                Project FAQ</span>
                                                            <span class="fs-7 text-muted">#67945</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-30px me-4">
                                                            <span class="symbol-label bg-light-primary">
                                                                <i class="ki-duotone ki-graph-3 fs-2 text-primary"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="fw-semibold">
                                                            <span class="fs-6 text-gray-800">"Landing UI Design" Project
                                                                Launch</span>
                                                            <span class="fs-7 text-muted">#24005</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-30px me-4">
                                                            <span class="symbol-label bg-light-primary">
                                                                <i class="ki-duotone ki-chart-simple fs-2 text-primary"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span><span
                                                                        class="path4"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="fw-semibold">
                                                            <span class="fs-6 text-gray-800">Shopix Mobile App
                                                                Planning</span>
                                                            <span class="fs-7 text-muted">#45690</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-30px me-4">
                                                            <span class="symbol-label bg-light-primary">
                                                                <i class="ki-duotone ki-message-text-2 fs-2 text-primary"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="fw-semibold">
                                                            <span class="fs-6 text-gray-800">Finance Monitoring SAAS
                                                                Discussion</span>
                                                            <span class="fs-7 text-muted">#21090</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <a href="javascript:void(0)"
                                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-30px me-4">
                                                            <span class="symbol-label bg-light-primary">
                                                                <i class="ki-duotone ki-profile-circle fs-2 text-primary"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="fw-semibold">
                                                            <span class="fs-6 text-gray-800">Dashboard Analitics
                                                                Launch</span>
                                                            <span class="fs-7 text-muted">#34560</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Items-->
                                            </div>
                                            <!--end::Recently viewed-->
                                            <!--begin::Empty-->
                                            <div data-kt-search-element="empty" class="text-center d-none">
                                                <!--begin::Icon-->
                                                <div class="pt-10 pb-10">
                                                    <i class="ki-duotone ki-search-list fs-4x opacity-50"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i>
                                                </div>
                                                <!--end::Icon-->

                                                <!--begin::Message-->
                                                <div class="pb-15 fw-semibold">
                                                    <h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
                                                    <div class="text-muted fs-7">Please try again with a different query
                                                    </div>
                                                </div>
                                                <!--end::Message-->
                                            </div>
                                            <!--end::Empty-->
                                        </div>
                                        <!--end::Wrapper-->

                                        <!--begin::Preferences-->
                                        <div data-kt-search-element="preferences" class="d-none">
                                            <!--begin::Heading-->
                                            <h3 class="fw-semibold text-gray-900 pb-10 m-0">Search Preferences</h3>
                                            <!--end::Heading-->

                                            <!--begin::Input group-->
                                            <div class="pb-4 border-bottom">
                                                <label
                                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid justify-content-between">
                                                    <span
                                                        class="form-check-label text-gray-700 fs-5 fw-semibold ms-0 me-2">
                                                        Projects
                                                    </span>
                                                    <input class="form-check-input" type="checkbox" value="1"
                                                        checked="checked" />
                                                </label>
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="py-4 border-bottom">
                                                <label
                                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid justify-content-between">
                                                    <span
                                                        class="form-check-label text-gray-700 fs-5 fw-semibold ms-0 me-2">
                                                        Targets
                                                    </span>
                                                    <input class="form-check-input" type="checkbox" value="1"
                                                        checked="checked" />
                                                </label>
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="py-4 border-bottom">
                                                <label
                                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid justify-content-between">
                                                    <span
                                                        class="form-check-label text-gray-700 fs-5 fw-semibold ms-0 me-2">
                                                        Affiliate Programs
                                                    </span>
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </label>
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="py-4 border-bottom">
                                                <label
                                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid justify-content-between">
                                                    <span
                                                        class="form-check-label text-gray-700 fs-5 fw-semibold ms-0 me-2">
                                                        Referrals
                                                    </span>
                                                    <input class="form-check-input" type="checkbox" value="1"
                                                        checked="checked" />
                                                </label>
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="py-4 border-bottom">
                                                <label
                                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid justify-content-between">
                                                    <span
                                                        class="form-check-label text-gray-700 fs-5 fw-semibold ms-0 me-2">
                                                        Users
                                                    </span>
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </label>
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Actions-->
                                            <div class="d-flex justify-content-end pt-10">
                                                <button type="reset"
                                                    class="btn btn-white btn-active-light-primary me-2 px-6"
                                                    data-kt-search-element="preferences-dismiss">Cancel</button>
                                                <button type="submit" class="btn btn-primary  px-6">Save
                                                    Changes</button>
                                            </div>
                                            <!--end::Actions-->
                                        </div>
                                        <!--end::Preferences-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Search-->
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
                                            href="#kt_highlight_68e5bbc175940" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e5bbc175942" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5bbc175940"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">var processs = function(search) {
    var timeout = setTimeout(function() {
        var number = KTUtil.getRandomInt(1, 3);

        // Hide recently viewed
        recentlyViewedElement.classList.add(&quot;d-none&quot;);

        if (number === 3) {
            // Hide results
            resultsElement.classList.add(&quot;d-none&quot;);
            // Show empty message
            emptyElement.classList.remove(&quot;d-none&quot;);
        } else {
            // Show results
            resultsElement.classList.remove(&quot;d-none&quot;);
            // Hide empty message
            emptyElement.classList.add(&quot;d-none&quot;);
        }

        // Complete search
        search.complete();
    }, 1500);
}

var clear = function(search) {
    // Show recently viewed
    recentlyViewedElement.classList.remove(&quot;d-none&quot;);
    // Hide results
    resultsElement.classList.add(&quot;d-none&quot;);
    // Hide empty message
    emptyElement.classList.add(&quot;d-none&quot;);
}

// Elements
element = document.querySelector(&quot;#kt_docs_search_handler_responsive&quot;);

if (!element) {
    return;
}

wrapperElement = element.querySelector(&quot;[data-kt-search-element=&quot;wrapper&quot;]&quot;);
recentlyViewedElement = element.querySelector(&quot;[data-kt-search-element=&quot;recently-viewed&quot;]&quot;);
resultsElement = element.querySelector(&quot;[data-kt-search-element=&quot;results&quot;]&quot;);
emptyElement = element.querySelector(&quot;[data-kt-search-element=&quot;empty&quot;]&quot;);
preferencesElement = element.querySelector(&quot;[data-kt-search-element=&quot;preferences&quot;]&quot;);
preferencesShowElement = element.querySelector(&quot;[data-kt-search-element=&quot;preferences-show&quot;]&quot;);
preferencesDismissElement = element.querySelector(&quot;[data-kt-search-element=&quot;preferences-dismiss&quot;]&quot;);

// Initialize search handler
searchObject = new KTSearch(element);

// Search handler
searchObject.on(&quot;kt.search.process&quot;, processs);

// Clear handler
searchObject.on(&quot;kt.search.clear&quot;, clear);

// Preference show handler
preferencesShowElement.addEventListener(&quot;click&quot;, function() {
    wrapperElement.classList.add(&quot;d-none&quot;);
    preferencesElement.classList.remove(&quot;d-none&quot;);
});

// Preference dismiss handler
preferencesDismissElement.addEventListener(&quot;click&quot;, function() {
    wrapperElement.classList.remove(&quot;d-none&quot;);
    preferencesElement.classList.add(&quot;d-none&quot;);
});
}</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e5bbc175942" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Main wrapper--&gt;
&lt;div
    id=&quot;kt_docs_search_handler_responsive&quot;
    class=&quot;d-flex align-items-center w-lg-400px&quot;

    data-kt-search-keypress=&quot;true&quot;
    data-kt-search-min-length=&quot;2&quot;
    data-kt-search-enter=&quot;enter&quot;
    data-kt-search-layout=&quot;menu&quot;
    data-kt-search-responsive=&quot;lg&quot;

    data-kt-menu-trigger=&quot;auto&quot;
    data-kt-menu-permanent=&quot;true&quot;
    data-kt-menu-placement=&quot;bottom-start&quot;&gt;

    &lt;!--begin::Tablet and mobile search toggle--&gt;
    &lt;div data-kt-search-element=&quot;toggle&quot; class=&quot;d-flex d-lg-none align-items-center&quot;&gt;
        &lt;div class=&quot;btn btn-icon btn-active-light-primary&quot;&gt;
            &lt;?php echo Theme::getIcon(&quot;magnifier&quot;, &quot;fs-1&quot;)?&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;!--end::Tablet and mobile search toggle--&gt;

    &lt;!--begin::Form--&gt;
    &lt;form data-kt-search-element=&quot;form&quot; class=&quot;d-none d-lg-block w-100 position-relative mb-5 mb-lg-0&quot; autocomplete=&quot;off&quot;&gt;
        &lt;!--begin::Hidden input(Added to disable form autocomplete)--&gt;
        &lt;input type=&quot;hidden&quot;/&gt;
        &lt;!--end::Hidden input--&gt;

        &lt;!--begin::Icon--&gt;
        &lt;?php echo Theme::getIcon(&quot;magnifier&quot;, &quot;fs-2 fs-lg-1 text-gray-500 position-absolute top-50 translate-middle-y ms-5&quot;)?&gt;
        &lt;!--end::Icon--&gt;

        &lt;!--begin::Input--&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control form-control-solid ps-14&quot; name=&quot;search&quot; value=&quot;&quot; placeholder=&quot;Search...&quot; data-kt-search-element=&quot;input&quot;/&gt;
        &lt;!--end::Input--&gt;

        &lt;!--begin::Spinner--&gt;
        &lt;span class=&quot;position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-6&quot; data-kt-search-element=&quot;spinner&quot;&gt;
            &lt;span class=&quot;spinner-border h-15px w-15px align-middle text-gray-500&quot;&gt;&lt;/span&gt;
        &lt;/span&gt;
        &lt;!--end::Spinner--&gt;

        &lt;!--begin::Reset--&gt;
        &lt;span class=&quot;btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none&quot; data-kt-search-element=&quot;clear&quot;&gt;
            &lt;?php echo Theme::getIcon(&quot;cross&quot;, &quot;fs-2 fs-lg-1 me-0&quot;)?&gt;
        &lt;/span&gt;
        &lt;!--end::Reset--&gt;
    &lt;/form&gt;
    &lt;!--end::Form--&gt;

    &lt;!--begin::Menu--&gt;
    &lt;div data-kt-search-element=&quot;content&quot; class=&quot;menu menu-sub menu-sub-dropdown w-300px w-md-400px py-7 px-7 overflow-hidden&quot;&gt;
        &lt;!--begin::Wrapper--&gt;
        &lt;div data-kt-search-element=&quot;wrapper&quot;&gt;
            &lt;!--begin::Categories--&gt;
            &lt;div data-kt-search-element=&quot;categories&quot;&gt;
                ...
            &lt;/div&gt;
            &lt;!--end::Categories--&gt;

            &lt;!--begin::Search results--&gt;
            &lt;div data-kt-search-element=&quot;results&quot; class=&quot;d-none&quot;&gt;
                ...
            &lt;/div&gt;
            &lt;!--end::Search results--&gt;

            &lt;!--begin::Recently viewed--&gt;
            &lt;div data-kt-search-element=&quot;recently-viewed&quot;&gt;
                ...
            &lt;/div&gt;
            &lt;!--end::Recently viewed--&gt;

            &lt;!--begin::Empty search--&gt;
            &lt;div data-kt-search-element=&quot;empty&quot; class=&quot;text-center d-none&quot;&gt;
                ...
            &lt;/div&gt;
            &lt;!--end::Empty search--&gt;
        &lt;/div&gt;
        &lt;!--end::Wrapper--&gt;

        &lt;!--begin::Preferences--&gt;
        &lt;div data-kt-search-element=&quot;preferences&quot;
            ...
        &lt;/div&gt;
        &lt;!--end::Preferences--&gt;
    &lt;/div&gt;
    &lt;!--end::Menu--&gt;
&lt;/div&gt;
&lt;!--end::Main wrapper--&gt;</code></pre>
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
                        <h1 class="anchor fw-bold mb-5" id="markup-reference" data-kt-scroll-offset="50">
                            <a href="#markup-reference"></a>

                            Markup Reference
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="fw-bold fs-2">Main wrapper HTML Attribute references</div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <b>Quick Search</b>&nbsp; uses HTML attributes within the Main Wrapper to configure the frontend
                            logic. Here are the references for each below
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
                                                <code>data-kt-search-keypress</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">optional</code>
                                            </td>
                                            <td>
                                                Enable search on any keyboard keypress. Accepts <code>true</code> or
                                                <code>false</code> values.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>data-kt-search-enter</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">optional</code>
                                            </td>
                                            <td>
                                                Enable search on any keyboard <code>Enter</code> keypress. Accepts
                                                <code>true</code> or <code>false</code> values.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>data-kt-search-responsive</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">optional</code>
                                            </td>
                                            <td>
                                                <div class="mb-3">
                                                    Defines the responsive mode for the input field's position. Useful for
                                                    an inline input field to display itself within a dropdown menu on mobile
                                                    to save space.
                                                    Accepts <code>sm, md, lg, xl</code> and <code>null</code> values.
                                                </div>

                                                For example: <code>data-kt-search-responsive="lg"</code> indicates that
                                                the Quick Search component input field will be displayed
                                                inline with the parent container from <code>lg</code> screen sizes and
                                                above, and hidden (re-positioned into the dropdown menu) on smaller screens.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>data-kt-search-min-length</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">optional</code>
                                            </td>
                                            <td>
                                                Defines the number of characters required before the search event is
                                                triggered. Accepts <code>numeric</code> values.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>data-kt-search-layout</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">optional</code>
                                            </td>
                                            <td>
                                                Defines Quick Search's layout type. Accepts <code>inline</code> and
                                                <code>menu</code>values.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>data-kt-search-show-on-focus</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">optional</code>
                                            </td>
                                            <td>
                                                Enables menu dropdown to show when the input field detects a focus event.
                                                Accepts <code>true</code> or <code>false</code> values.
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end::Table-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="fw-bold fs-2">HTML Attribute Identifiers references</div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            Quick Search also use HTML attributes to identify the HTML elements that are used within the
                            Main Wrapper. Here are the references for each below
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
                                            <th class="min-w-500px">Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <code>data-kt-search-element</code>
                                            </td>
                                            <td>
                                                <code class="ms-0">mandatory</code>
                                            </td>
                                            <td>
                                                <div class="mb-3">
                                                    Identifies the HTML element as a specific Quick Search element. All
                                                    Quick Search elements must be added within the Main Wrapper. The main
                                                    wrapper does not have a specific attribute to identify it. It's simply a
                                                    wrapping <code>div</code> element that wraps all Quick Search inner
                                                    elements.
                                                </div>

                                                <div class="mb-3">
                                                    Here are the list of Quick Search elements available:

                                                    <ul class="pt-3">
                                                        <li class="py-2"><code>form</code></li>
                                                        <li class="py-2"><code>input</code></li>
                                                        <li class="py-2"><code>spinner</code></li>
                                                        <li class="py-2"><code>clear</code></li>
                                                        <li class="py-2"><code>toggle</code></li>
                                                        <li class="py-2"><code>content</code></li>


                                                        <li class="py-2"><code>toolbar</code></li>
                                                        <li class="py-2"><code>empty</code></li>
                                                        <li class="py-2"><code>results</code></li>
                                                        <li class="py-2"><code>suggestions</code></li>
                                                    </ul>
                                                </div>

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-html"><code class="language-html">&lt;div&gt;
    &lt;div data-kt-search-element=&quot;form&quot;&gt;
        ...
        &lt;input data-kt-search-element=&quot;input&quot; /&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
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
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="methods" data-kt-scroll-offset="50">
                            <a href="#methods"></a>

                            Methods
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            The following are Search UI's functionality methods for more control.
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
                                            <th class="min-w-400px">Name</th>
                                            <th class="min-w-500px">Description</th>
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
                                                <code>getInstance(DOMElement element)</code>
                                            </td>
                                            <td>
                                                Get the Search UI instance that has been created and returns the Search UI
                                                DOM element.

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">var searchElement = document.querySelector(&quot;#kt_search_example_1&quot;);
var search = KTSearch.getInstance(searchElement);</code></pre>
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
                                                <code>new KTSearch(DOMElement element)</code>
                                            </td>
                                            <td>
                                                Initialize a new Quick Search control.

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">var searchElement = document.querySelector(&quot;#kt_search_control&quot;);
var search = new KTSearch(searchElement);</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>show</code>
                                            </td>
                                            <td>
                                                Triggers the menu to show. Only applicable when
                                                <code>data-kt-search-layout</code> is set to <code>menu</code>
                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">search.show();</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>hide</code>
                                            </td>
                                            <td>
                                                Triggers the menu to hide. Only applicable when
                                                <code>data-kt-search-layout</code> is set to <code>menu</code>
                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">search.hide();</code></pre>
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
                                                Updates the menu responsiveness. Only applicable when
                                                <code>data-kt-search-layout</code> is set to <code>menu</code>
                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">search.update();</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>search</code>
                                            </td>
                                            <td>
                                                Triggers the search event to begin searching.
                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">search.search();</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>complete</code>
                                            </td>
                                            <td>
                                                Triggers the completed search event.
                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">search.complete();</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>clear</code>
                                            </td>
                                            <td>
                                                Clears the search input field and resets the Search UI.
                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">search.clear();</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>isProcessing</code>
                                            </td>
                                            <td>
                                                Returns <code>true</code> or <code>false</code> to indicate if there's a
                                                search event still running.
                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">search.isProcessing();</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>getQuery</code>
                                            </td>
                                            <td>
                                                Returns the Search UI input string.
                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">search.getQuery();</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>getMenu</code>
                                            </td>
                                            <td>
                                                Returns the Search UI menu element. Only applicable when
                                                <code>data-kt-search-layout</code> is set to <code>menu</code>
                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">search.getMenu();</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>getFormElement</code>
                                            </td>
                                            <td>
                                                Returns the Search UI form element.
                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">search.getFormElement();</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>getInputElement</code>
                                            </td>
                                            <td>
                                                Returns the Search UI input field element.
                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">search.getInputElement();</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>getContentElement</code>
                                            </td>
                                            <td>
                                                Returns the Search UI content element.
                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">search.getContentElement();</code></pre>
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
                                                Returns the Search UI element.
                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">search.getElement();</code></pre>
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
                            Below are few events for hooking into Quick Search's functionality.
                        </div>
                        <!--end::Block-->

                        <!--begin::Table-->
                        <div class="pt-2 pb-5">
                            <!--begin::Table wrapper-->
                            <div class="table-responsive border rounded">
                                <!--begin::Table-->
                                <table class="table table-striped align-middle mb-0 g-5">
                                    <!--begin::Head-->
                                    <thead>
                                        <tr class="fs-4 fw-bold text-gray-900 p-6">
                                            <th class="min-w-300px">Event Type</th>
                                            <th class="min-w-500px">Description</th>
                                        </tr>
                                    </thead>
                                    <!--end::Head-->

                                    <!--begin::Body-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <code>kt.search.process</code>
                                            </td>
                                            <td>
                                                This event fires when search begins processing.
                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">var searchElement = document.querySelector(&quot;#kt_search_example_1&quot;);
var search = KTSearch.getInstance(searchElement);
search.on(&quot;kt.search.process&quot;, function() {
    // console.log(&quot;kt.search.process event is fired&quot;);
});</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>kt.search.clear</code>
                                            </td>
                                            <td>
                                                This event fires when search input field is about to be cleared.
                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">var searchElement = document.querySelector(&quot;#kt_search_example_1&quot;);
var search = KTSearch.getInstance(searchElement);
search.on(&quot;kt.search.clear&quot;, function() {
    // console.log(&quot;kt.search.clear event is fired&quot;);
});</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>kt.search.cleared</code>
                                            </td>
                                            <td>
                                                This event fires when search input field has been cleared.
                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">var searchElement = document.querySelector(&quot;#kt_search_example_1&quot;);
var search = KTSearch.getInstance(searchElement);
search.on(&quot;kt.search.cleared&quot;, function() {
    // console.log(&quot;kt.search.cleared event is fired&quot;);
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
                                <a href="#basic-layout" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Basic Layout</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#menu-layout" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Menu Layout</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#responsive-layout" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Responsive Layout</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#markup-reference" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Markup Reference</span>
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
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/custom/documentation/general/search/basic.js') }}"></script>
    <script src="{{ asset('assets/js/custom/documentation/general/search/menu.js') }}"></script>
    <script src="{{ asset('assets/js/custom/documentation/general/search/responsive.js') }}"></script>
    <!--end::Custom Javascript-->
@endsection


