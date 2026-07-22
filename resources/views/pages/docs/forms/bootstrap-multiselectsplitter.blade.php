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
                            <b>Bootstrap Selectsplitter's</b>&nbsp; transforms a <code>&lt;select&gt;</code> containing one
                            or more <code>&lt;optgroup&gt;</code>
                            in two chained <code>&lt;select&gt;</code>.
                            For full documentation please check the <a
                                href="https://github.com/poolerMF/bootstrap-multiselectsplitter" target="_blank"
                                class="fw-semibold">plugin's repository</a>.
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
                            <b>Bootstrap Selectsplitter's</b>&nbsp; Javascript files are bundled in the global plugin
                            bundles and globally included in all pages:
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;script src=&quot;assets/plugins/global/plugins.bundle.js&quot;&gt;&lt;/script&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="example-1" data-kt-scroll-offset="50">
                            <a href="#example-1"></a>

                            Example 1
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Create a <code>&lt;select&gt;</code> with at least one <code>&lt;optgroup&gt;</code>.
                            Each <code>&lt;option&gt;</code> of your <code>&lt;select&gt;</code> must have a unique value.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <select id="kt_multiselectsplitter_example_1" multiple="multiple">
                                    <optgroup label="Category 1">
                                        <option value="1">Choice 1</option>
                                        <option value="2">Choice 2</option>
                                        <option value="3" selected="selected">Choice 3</option>
                                        <option value="4">Choice 4</option>
                                    </optgroup>
                                    <optgroup label="Category 2">
                                        <option value="5">Choice 5</option>
                                        <option value="6" selected="selected">Choice 6</option>
                                        <option value="7">Choice 7</option>
                                        <option value="8">Choice 8</option>
                                    </optgroup>
                                    <optgroup label="Category 3">
                                        <option value="9">Choice 9</option>
                                        <option value="10">Choice 10</option>
                                        <option value="11">Choice 11</option>
                                        <option value="12">Choice 12</option>
                                    </optgroup>
                                </select>
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
                                            href="#kt_highlight_68e3c37f3958c" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e3c37f3958f" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e3c37f3958c" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript"><code class="language-javascript">$(&quot;#kt_multiselectsplitter_example_1&quot;).multiselectsplitter();</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e3c37f3958f" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:300px"><code class="language-html">&lt;select id=&quot;kt_multiselectsplitter_example_1&quot; multiple=&quot;multiple&quot;&gt;
    &lt;optgroup label=&quot;Category 1&quot;&gt;
        &lt;option value=&quot;1&quot;&gt;Choice 1&lt;/option&gt;
        &lt;option value=&quot;2&quot;&gt;Choice 2&lt;/option&gt;
        &lt;option value=&quot;3&quot; selected=&quot;selected&quot;&gt;Choice 3&lt;/option&gt;
        &lt;option value=&quot;4&quot;&gt;Choice 4&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label=&quot;Category 2&quot;&gt;
        &lt;option value=&quot;5&quot;&gt;Choice 5&lt;/option&gt;
        &lt;option value=&quot;6&quot; selected=&quot;selected&quot;&gt;Choice 6&lt;/option&gt;
        &lt;option value=&quot;7&quot;&gt;Choice 7&lt;/option&gt;
        &lt;option value=&quot;8&quot;&gt;Choice 8&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label=&quot;Category 3&quot;&gt;
        &lt;option value=&quot;9&quot;&gt;Choice 9&lt;/option&gt;
        &lt;option value=&quot;10&quot;&gt;Choice 10&lt;/option&gt;
        &lt;option value=&quot;11&quot;&gt;Choice 11&lt;/option&gt;
        &lt;option value=&quot;12&quot;&gt;Choice 12&lt;/option&gt;
    &lt;/optgroup&gt;
&lt;/select&gt;</code></pre>
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
                        <h1 class="anchor fw-bold mb-5" id="example-2" data-kt-scroll-offset="50">
                            <a href="#example-2"></a>

                            Example 2
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Multiple select of size 7 with group counter. Second select is cleared, when first changed:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <select id="kt_multiselectsplitter_example_2" multiple="multiple">
                                    <optgroup label="Category 1">
                                        <option value="1">Choice 1</option>
                                        <option value="2">Choice 2</option>
                                        <option value="3" selected="selected">Choice 3</option>
                                        <option value="4">Choice 4</option>
                                    </optgroup>
                                    <optgroup label="Category 2">
                                        <option value="5">Choice 5</option>
                                        <option value="6" selected="selected">Choice 6</option>
                                        <option value="7">Choice 7</option>
                                        <option value="8">Choice 8</option>
                                    </optgroup>
                                    <optgroup label="Category 3">
                                        <option value="9">Choice 9</option>
                                        <option value="10">Choice 10</option>
                                        <option value="11">Choice 11</option>
                                        <option value="12">Choice 12</option>
                                    </optgroup>
                                </select>
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
                                            href="#kt_highlight_68e3c37f395b4" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e3c37f395b5" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e3c37f395b4"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript"><code class="language-javascript">$(&quot;#kt_multiselectsplitter_example_2&quot;).multiselectsplitter({
    selectSize: 7,
    clearOnFirstChange: true,
    groupCounter: true
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e3c37f395b5" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:300px"><code class="language-html">&lt;select id=&quot;kt_multiselectsplitter_example_2&quot; multiple=&quot;multiple&quot;&gt;
    &lt;optgroup label=&quot;Category 1&quot;&gt;
        &lt;option value=&quot;1&quot;&gt;Choice 1&lt;/option&gt;
        &lt;option value=&quot;2&quot;&gt;Choice 2&lt;/option&gt;
        &lt;option value=&quot;3&quot; selected=&quot;selected&quot;&gt;Choice 3&lt;/option&gt;
        &lt;option value=&quot;4&quot;&gt;Choice 4&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label=&quot;Category 2&quot;&gt;
        &lt;option value=&quot;5&quot;&gt;Choice 5&lt;/option&gt;
        &lt;option value=&quot;6&quot; selected=&quot;selected&quot;&gt;Choice 6&lt;/option&gt;
        &lt;option value=&quot;7&quot;&gt;Choice 7&lt;/option&gt;
        &lt;option value=&quot;8&quot;&gt;Choice 8&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label=&quot;Category 3&quot;&gt;
        &lt;option value=&quot;9&quot;&gt;Choice 9&lt;/option&gt;
        &lt;option value=&quot;10&quot;&gt;Choice 10&lt;/option&gt;
        &lt;option value=&quot;11&quot;&gt;Choice 11&lt;/option&gt;
        &lt;option value=&quot;12&quot;&gt;Choice 12&lt;/option&gt;
    &lt;/optgroup&gt;
&lt;/select&gt;</code></pre>
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
                        <h1 class="anchor fw-bold mb-5" id="example-3" data-kt-scroll-offset="50">
                            <a href="#example-3"></a>

                            Example 3
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Multiple select with group counter. You can select maximum 2 options of all categories:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <select id="kt_multiselectsplitter_example_3" multiple="multiple">
                                    <optgroup label="Category 1">
                                        <option value="1">Choice 1</option>
                                        <option value="2">Choice 2</option>
                                        <option value="3" selected="selected">Choice 3</option>
                                        <option value="4">Choice 4</option>
                                    </optgroup>
                                    <optgroup label="Category 2">
                                        <option value="5">Choice 5</option>
                                        <option value="6" selected="selected">Choice 6</option>
                                        <option value="7">Choice 7</option>
                                        <option value="8">Choice 8</option>
                                    </optgroup>
                                    <optgroup label="Category 3">
                                        <option value="9">Choice 9</option>
                                        <option value="10">Choice 10</option>
                                        <option value="11">Choice 11</option>
                                        <option value="12">Choice 12</option>
                                    </optgroup>
                                </select>
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
                                            href="#kt_highlight_68e3c37f395d5" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e3c37f395d6" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e3c37f395d5"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript"><code class="language-javascript">$(&quot;#kt_multiselectsplitter_example_3&quot;).multiselectsplitter({
    groupCounter: true,
    maximumSelected: 2
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e3c37f395d6" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:300px"><code class="language-html">&lt;select id=&quot;kt_multiselectsplitter_example_3&quot; multiple=&quot;multiple&quot;&gt;
    &lt;optgroup label=&quot;Category 1&quot;&gt;
        &lt;option value=&quot;1&quot;&gt;Choice 1&lt;/option&gt;
        &lt;option value=&quot;2&quot;&gt;Choice 2&lt;/option&gt;
        &lt;option value=&quot;3&quot; selected=&quot;selected&quot;&gt;Choice 3&lt;/option&gt;
        &lt;option value=&quot;4&quot;&gt;Choice 4&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label=&quot;Category 2&quot;&gt;
        &lt;option value=&quot;5&quot;&gt;Choice 5&lt;/option&gt;
        &lt;option value=&quot;6&quot; selected=&quot;selected&quot;&gt;Choice 6&lt;/option&gt;
        &lt;option value=&quot;7&quot;&gt;Choice 7&lt;/option&gt;
        &lt;option value=&quot;8&quot;&gt;Choice 8&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label=&quot;Category 3&quot;&gt;
        &lt;option value=&quot;9&quot;&gt;Choice 9&lt;/option&gt;
        &lt;option value=&quot;10&quot;&gt;Choice 10&lt;/option&gt;
        &lt;option value=&quot;11&quot;&gt;Choice 11&lt;/option&gt;
        &lt;option value=&quot;12&quot;&gt;Choice 12&lt;/option&gt;
    &lt;/optgroup&gt;
&lt;/select&gt;</code></pre>
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
                        <h1 class="anchor fw-bold mb-5" id="example-4" data-kt-scroll-offset="50">
                            <a href="#example-4"></a>

                            Example 4
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Multiple select with group counter. You can select maximum 3 options ONLY from one cattegory:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <select id="kt_multiselectsplitter_example_4" multiple="multiple">
                                    <optgroup label="Category 1">
                                        <option value="1">Choice 1</option>
                                        <option value="2">Choice 2</option>
                                        <option value="3" selected="selected">Choice 3</option>
                                        <option value="4">Choice 4</option>
                                    </optgroup>
                                    <optgroup label="Category 2">
                                        <option value="5">Choice 5</option>
                                        <option value="6">Choice 6</option>
                                        <option value="7">Choice 7</option>
                                        <option value="8">Choice 8</option>
                                    </optgroup>
                                    <optgroup label="Category 3">
                                        <option value="9">Choice 9</option>
                                        <option value="10">Choice 10</option>
                                        <option value="11">Choice 11</option>
                                        <option value="12">Choice 12</option>
                                    </optgroup>
                                </select>
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
                                            href="#kt_highlight_68e3c37f395f4" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e3c37f395f5" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e3c37f395f4"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript"><code class="language-javascript">$(&quot;#kt_multiselectsplitter_example_4&quot;).multiselectsplitter({
    groupCounter: true,
    maximumSelected: 3,
    onlySameGroup: true
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e3c37f395f5" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:300px"><code class="language-html">&lt;select id=&quot;kt_multiselectsplitter_example_4&quot; multiple=&quot;multiple&quot;&gt;
    &lt;optgroup label=&quot;Category 1&quot;&gt;
        &lt;option value=&quot;1&quot;&gt;Choice 1&lt;/option&gt;
        &lt;option value=&quot;2&quot;&gt;Choice 2&lt;/option&gt;
        &lt;option value=&quot;3&quot; selected=&quot;selected&quot;&gt;Choice 3&lt;/option&gt;
        &lt;option value=&quot;4&quot;&gt;Choice 4&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label=&quot;Category 2&quot;&gt;
        &lt;option value=&quot;5&quot;&gt;Choice 5&lt;/option&gt;
        &lt;option value=&quot;6&quot;&gt;Choice 6&lt;/option&gt;
        &lt;option value=&quot;7&quot;&gt;Choice 7&lt;/option&gt;
        &lt;option value=&quot;8&quot;&gt;Choice 8&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label=&quot;Category 3&quot;&gt;
        &lt;option value=&quot;9&quot;&gt;Choice 9&lt;/option&gt;
        &lt;option value=&quot;10&quot;&gt;Choice 10&lt;/option&gt;
        &lt;option value=&quot;11&quot;&gt;Choice 11&lt;/option&gt;
        &lt;option value=&quot;12&quot;&gt;Choice 12&lt;/option&gt;
    &lt;/optgroup&gt;
&lt;/select&gt;</code></pre>
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
                        <h1 class="anchor fw-bold mb-5" id="example-4" data-kt-scroll-offset="50">
                            <a href="#example-4"></a>

                            Example 5
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Multiple select with custom functions for creating options. Select works even with custom text.
                            On background, original select is correctly updated with original values. Maximum alert message
                            was changed:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <select id="kt_multiselectsplitter_example_5" multiple="multiple">
                                    <optgroup label="Category 1">
                                        <option value="1">Choice 1</option>
                                        <option value="2">Choice 2</option>
                                        <option value="3">Choice 3</option>
                                        <option value="4">Choice 4</option>
                                    </optgroup>
                                    <optgroup label="Category 2">
                                        <option value="5">Choice 5</option>
                                        <option value="6">Choice 6</option>
                                        <option value="7">Choice 7</option>
                                        <option value="8">Choice 8</option>
                                    </optgroup>
                                    <optgroup label="Category 3">
                                        <option value="9">Choice 9</option>
                                        <option value="10">Choice 10</option>
                                        <option value="11">Choice 11</option>
                                        <option value="12">Choice 12</option>
                                    </optgroup>
                                </select>
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
                                            href="#kt_highlight_68e3c37f39614" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e3c37f39615" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e3c37f39614"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript"><code class="language-javascript">$(&quot;#kt_multiselectsplitter_example_5&quot;).multiselectsplitter({
    size: 6,
    groupCounter: true,
    maximumSelected: 2,
    maximumAlert: function(maximumSelected) {
        alert(&quot;You choose &quot; + ( maximumSelected + 1 ) + &quot; options. Are you crazy ?&quot;);
    },
    createFirstSelect: function (label, $originalSelect) {
        return &quot;&lt;option class=\&quot;text-success\&quot;&gt;prefix - &quot; + label + &quot;&lt;/option&gt;&quot;;
    },
    createSecondSelect: function (label, $firstSelect) {
        return &quot;&lt;option class=\&quot;text-danger\&quot;&gt; ??? &lt;/option&gt;&quot;;
    }
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e3c37f39615" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:300px"><code class="language-html">&lt;select id=&quot;kt_multiselectsplitter_example_5&quot; multiple=&quot;multiple&quot;&gt;
    &lt;optgroup label=&quot;Category 1&quot;&gt;
        &lt;option value=&quot;1&quot;&gt;Choice 1&lt;/option&gt;
        &lt;option value=&quot;2&quot;&gt;Choice 2&lt;/option&gt;
        &lt;option value=&quot;3&quot;&gt;Choice 3&lt;/option&gt;
        &lt;option value=&quot;4&quot;&gt;Choice 4&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label=&quot;Category 2&quot;&gt;
        &lt;option value=&quot;5&quot;&gt;Choice 5&lt;/option&gt;
        &lt;option value=&quot;6&quot;&gt;Choice 6&lt;/option&gt;
        &lt;option value=&quot;7&quot;&gt;Choice 7&lt;/option&gt;
        &lt;option value=&quot;8&quot;&gt;Choice 8&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label=&quot;Category 3&quot;&gt;
        &lt;option value=&quot;9&quot;&gt;Choice 9&lt;/option&gt;
        &lt;option value=&quot;10&quot;&gt;Choice 10&lt;/option&gt;
        &lt;option value=&quot;11&quot;&gt;Choice 11&lt;/option&gt;
        &lt;option value=&quot;12&quot;&gt;Choice 12&lt;/option&gt;
    &lt;/optgroup&gt;
&lt;/select&gt;</code></pre>
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
                                <a href="#example-1" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Example 1</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#example-2" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Example 2</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#example-3" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Example 3</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#example-4" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Example 5</span>
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
    <script src="{{ asset('assets/js/custom/documentation/forms/multiselectsplitter.js') }}"></script>
    <!--end::Vendors Javascript-->
@endsection


