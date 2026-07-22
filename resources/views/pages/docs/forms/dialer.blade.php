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
                            Dialer is an exclusive plugin of Metronic that enables user-friendly click based dialing
                            functionality for any text input.
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
                            Dialer's CSS and Javascript files are bundled in the global style and scripts bundles and are
                            globally included in all pages:
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
                                    Dialer does not come with its own custom CSS and it uses global input controls and
                                    related elements.
                                </li>
                                <li class="py-2">
                                    Dialer instances are automatically initialized through
                                    <code>data-kt-dialer="true"</code> HTML attribute on document ready event.
                                </li>
                                <li class="py-2">
                                    Dialer instances can be created programmatically without using the above HTML attribute.
                                    See below for more info.
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
                            Basic example of Dialer based on Input Group:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div>
                                    <label for="" class="form-label fw-semibold mb-5">Input Dialer Examples:</label>

                                    <!--begin::Dialer-->
                                    <div class="input-group w-md-300px" data-kt-dialer="true" data-kt-dialer-currency="true"
                                        data-kt-dialer-min="1000" data-kt-dialer-max="50000" data-kt-dialer-step="1000"
                                        data-kt-dialer-prefix="$">
                                        <!--begin::Decrease control-->
                                        <button class="btn btn-icon btn-outline btn-active-color-primary" type="button"
                                            data-kt-dialer-control="decrease">
                                            <i class="ki-duotone ki-minus fs-2"></i> </button>
                                        <!--end::Decrease control-->

                                        <!--begin::Input control-->
                                        <input type="text" class="form-control" readonly placeholder="Amount"
                                            value="$10000" data-kt-dialer-control="input" />
                                        <!--end::Input control-->

                                        <!--begin::Increase control-->
                                        <button class="btn btn-icon btn-outline btn-active-color-primary" type="button"
                                            data-kt-dialer-control="increase">
                                            <i class="ki-duotone ki-plus fs-2"></i> </button>
                                        <!--end::Increase control-->
                                    </div>
                                    <!--end::Dialer-->
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
                                    <pre class="language-html"><code class="language-html">&lt;!--begin::Dialer--&gt;
&lt;div class=&quot;input-group w-md-300px&quot;
    data-kt-dialer=&quot;true&quot;
    data-kt-dialer-currency=&quot;true&quot;
    data-kt-dialer-min=&quot;1000&quot;
    data-kt-dialer-max=&quot;50000&quot;
    data-kt-dialer-step=&quot;1000&quot;
    data-kt-dialer-prefix=&quot;$&quot;&gt;

    &lt;!--begin::Decrease control--&gt;
    &lt;button class=&quot;btn btn-icon btn-outline btn-active-color-primary&quot; type=&quot;button&quot; data-kt-dialer-control=&quot;decrease&quot;&gt;
        &lt;i class=&quot;ki-duotone ki-minus fs-2&quot;&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;!--end::Decrease control--&gt;

    &lt;!--begin::Input control--&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; readonly placeholder=&quot;Amount&quot; value=&quot;$10000&quot; data-kt-dialer-control=&quot;input&quot;/&gt;
    &lt;!--end::Input control--&gt;

    &lt;!--begin::Increase control--&gt;
    &lt;button class=&quot;btn btn-icon btn-outline btn-active-color-primary&quot; type=&quot;button&quot; data-kt-dialer-control=&quot;increase&quot;&gt;
        &lt;i class=&quot;ki-duotone ki-plus fs-2&quot;&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;!--end::Increase control--&gt;
&lt;/div&gt;
&lt;!--end::Dialer--&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="custom" data-kt-scroll-offset="50">
                            <a href="#custom"></a>

                            Custom
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            The Look and feel can be easily customized by using any input, button or icon variations:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">

                                <div>
                                    <label for="" class="form-label fw-semibold mb-5">Input Dialer Examples:</label>

                                    <!--begin::Dialer-->
                                    <div class="position-relative w-md-300px" data-kt-dialer="true"
                                        data-kt-dialer-min="1000" data-kt-dialer-max="50000" data-kt-dialer-step="1000"
                                        data-kt-dialer-prefix="$" data-kt-dialer-decimals="2">
                                        <!--begin::Decrease control-->
                                        <button type="button"
                                            class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0"
                                            data-kt-dialer-control="decrease">
                                            <i class="ki-duotone ki-minus-square fs-2"><span class="path1"></span><span
                                                    class="path2"></span></i> </button>
                                        <!--end::Decrease control-->

                                        <!--begin::Input control-->
                                        <input type="text" class="form-control form-control-solid border-0 ps-12"
                                            data-kt-dialer-control="input" placeholder="Amount" name="manageBudget"
                                            readonly value="$36,000.00" />
                                        <!--end::Input control-->

                                        <!--begin::Increase control-->
                                        <button type="button"
                                            class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0"
                                            data-kt-dialer-control="increase">
                                            <i class="ki-duotone ki-plus-square fs-2"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> </button>
                                        <!--end::Increase control-->
                                    </div>
                                    <!--end::Dialer-->
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
                                    <pre class="language-html"><code class="language-html">&lt;!--begin::Dialer--&gt;
&lt;div class=&quot;position-relative w-md-300px&quot;
    data-kt-dialer=&quot;true&quot;
    data-kt-dialer-min=&quot;1000&quot;
    data-kt-dialer-max=&quot;50000&quot;
    data-kt-dialer-step=&quot;1000&quot;
    data-kt-dialer-prefix=&quot;$&quot;
    data-kt-dialer-decimals=&quot;2&quot;&gt;

    &lt;!--begin::Decrease control--&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0&quot; data-kt-dialer-control=&quot;decrease&quot;&gt;
        &lt;i class=&quot;ki-duotone ki-minus-square fs-2&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;!--end::Decrease control--&gt;

    &lt;!--begin::Input control--&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control form-control-solid border-0 ps-12&quot; data-kt-dialer-control=&quot;input&quot; placeholder=&quot;Amount&quot; name=&quot;manageBudget&quot; readonly value=&quot;$36,000.00&quot; /&gt;
    &lt;!--end::Input control--&gt;

    &lt;!--begin::Increase control--&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0&quot; data-kt-dialer-control=&quot;increase&quot;&gt;
        &lt;i class=&quot;ki-duotone ki-plus-square fs-2&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;!--end::Increase control--&gt;
&lt;/div&gt;
&lt;!--end::Dialer--&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->

                        <div class="py-5">
                            <!--begin::Information-->
                            <div class="d-flex align-items-center rounded py-5 px-5 bg-light-warning "><i
                                    class="ki-duotone ki-information-5 fs-3x text-warning me-5"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span></i> <!--begin::Description-->
                                <div class="text-gray-700 fw-bold fs-6">
                                    While customizing the look and feel, ensure to maintain the control
                                    attributes(<code>data-kt-dialer-control="*"</code>) in order Dialer to function as
                                    expected.
                                </div> <!--end::Description-->
                            </div><!--end::Information-->
                        </div>
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="javascript" data-kt-scroll-offset="50">
                            <a href="#javascript"></a>

                            Javascript
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            An example of Dialer initialized in Javascript:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">

                                <div>
                                    <label for="" class="form-label fw-semibold mb-5">Input Dialer
                                        Example:</label>

                                    <!--begin::Dialer-->
                                    <div class="position-relative w-md-300px" id="kt_dialer_example_1">
                                        <!--begin::Decrease control-->
                                        <button type="button"
                                            class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0"
                                            data-kt-dialer-control="decrease">
                                            <i class="ki-duotone ki-minus-square fs-2"><span class="path1"></span><span
                                                    class="path2"></span></i> </button>
                                        <!--end::Decrease control-->

                                        <!--begin::Input control-->
                                        <input type="text" class="form-control form-control-solid border-0 ps-12"
                                            data-kt-dialer-control="input" placeholder="Amount" name="manageBudget"
                                            readonly value="$36,000.00" />
                                        <!--end::Input control-->

                                        <!--begin::Increase control-->
                                        <button type="button"
                                            class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0"
                                            data-kt-dialer-control="increase">
                                            <i class="ki-duotone ki-plus-square fs-2"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> </button>
                                        <!--end::Increase control-->
                                    </div>
                                    <!--end::Dialer-->
                                </div>

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
                                            href="#kt_highlight_68e3508bc2ee9" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e3508bc2eed" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e3508bc2ee9"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript"><code class="language-javascript">// Dialer container element
var dialerElement = document.querySelector(&quot;#kt_dialer_example_1&quot;);

// Create dialer object and initialize a new instance
var dialerObject = new KTDialer(dialerElement, {
    min: 1000,
    max: 50000,
    step: 1000,
    prefix: &quot;$&quot;,
    decimals: 2
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e3508bc2eed" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;!--begin::Dialer--&gt;
&lt;div class=&quot;position-relative w-md-300px&quot; id=&quot;kt_dialer_example_1&quot;&gt;
    &lt;!--begin::Decrease control--&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0&quot; data-kt-dialer-control=&quot;decrease&quot;&gt;
        &lt;i class=&quot;ki-duotone ki-minus-square fs-2&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;!--end::Decrease control--&gt;

    &lt;!--begin::Input control--&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control form-control-solid border-0 ps-12&quot; data-kt-dialer-control=&quot;input&quot; name=&quot;manageBudget&quot; readonly value=&quot;$36,000.00&quot; /&gt;
    &lt;!--end::Input control--&gt;

    &lt;!--begin::Increase control--&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0&quot; data-kt-dialer-control=&quot;increase&quot;&gt;
        &lt;i class=&quot;ki-duotone ki-plus-square fs-2&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;!--end::Increase control--&gt;
&lt;/div&gt;
&lt;!--end::Dialer--&gt;</code></pre>
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
                        <h1 class="anchor fw-bold mb-5" id="options" data-kt-scroll-offset="50">
                            <a href="#options"></a>

                            Options
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            All options can be passed via HTML attributes <code>data-kt-dialer-{option}</code> as well the
                            <code>option</code> below that represents the Javascript options object key:
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
                                            <th class="min-w-500px">Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <code>min</code>
                                            </td>
                                            <td>
                                                Number
                                            </td>
                                            <td>
                                                null
                                            </td>
                                            <td>
                                                Seta a minimum value of the input.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>max</code>
                                            </td>
                                            <td>
                                                Number
                                            </td>
                                            <td>
                                                null
                                            </td>
                                            <td>
                                                Sets a maximum value of the input.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>step</code>
                                            </td>
                                            <td>
                                                Number
                                            </td>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                Sets a step value for dialing.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>decimals</code>
                                            </td>
                                            <td>
                                                Integer
                                            </td>
                                            <td>
                                                0
                                            </td>
                                            <td>
                                                Sets a decimals number for float value formating.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>prefix</code>
                                            </td>
                                            <td>
                                                String
                                            </td>
                                            <td>
                                                ' '
                                            </td>
                                            <td>
                                                Displays the formatted input value with a prefix string.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>suffix</code>
                                            </td>
                                            <td>
                                                String
                                            </td>
                                            <td>
                                                ' '
                                            </td>
                                            <td>
                                                Displays the formatted input value with a suffix string.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>currency</code>
                                            </td>
                                            <td>
                                                String
                                            </td>
                                            <td>
                                                'true'
                                            </td>
                                            <td>
                                                Displays currency formatted input value. E.g: 1,200,450.50$
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
                            The following are the Dialer's functionality methods for more control.
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
                                            <th class="min-w-300px">Name</th>
                                            <th class="min-w-500px">Description</th>
                                        </tr>
                                    </thead>
                                    <!--end::Head-->

                                    <!--begin::Body-->
                                    <tbody>
                                        <tr class="fs-4 fw-bold p-6">
                                            <th colspan="2">Static Methods</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>createInstances(DOMString selector)</code>
                                            </td>
                                            <td>
                                                Initializes Bootstrap Dialer instances by selector. Default value of
                                                <code>selector</code> is <code>[data-kt-dialer="true"]</code>.
                                                This method can be used to initialize dynamicly populated Bootstrap Dialer
                                                instances(e.g: after Ajax request).
                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">KTDialer.createInstances();</code></pre>
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
                                                Get the Dialer instance created

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">var dialerElement = document.querySelector(&quot;#kt_dialer_example_1&quot;);
var dialerObject = KTDialer.getInstance(dialerElement);</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>

                                        <tr class="fs-4 fw-bold p-6">
                                            <th colspan="2">Public Methods</th>
                                        </tr>

                                        <tr>
                                            <td>
                                                <code>KTDialer(DOMElement element, Object options)</code>
                                            </td>
                                            <td>
                                                Constructs a new instance of <code>KTDialer</code> class and initializes a
                                                Dialer control:
                                                <div class="pt-3 mb-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">var dialerElement = document.querySelector(&quot;#kt_dialer_control&quot;);
var dialerObject = new KTDialer(dialerElement, options);</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->

                                                </div>

                                                <!--begin::Information-->
                                                <div class="d-flex align-items-center rounded py-5 px-5 bg-light-info "><i
                                                        class="ki-duotone ki-information-5 fs-3x text-info me-5"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i> <!--begin::Description-->
                                                    <div class="text-gray-700 fw-bold fs-6">
                                                        Remove <code>data-kt-dialer="true"</code> attribute to avoid lazy
                                                        initializes.
                                                    </div> <!--end::Description-->
                                                </div><!--end::Information-->
                                                <!--begin::Information-->
                                                <div class="d-flex align-items-center rounded py-5 px-5 bg-light-warning ">
                                                    <i class="ki-duotone ki-information-5 fs-3x text-warning me-5"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i> <!--begin::Description-->
                                                    <div class="text-gray-700 fw-bold fs-6">
                                                        For <code>options</code> object refer to above Options Reference
                                                        section.
                                                    </div> <!--end::Description-->
                                                </div><!--end::Information-->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>increase()</code>
                                            </td>
                                            <td>
                                                Increases the input value with the configured step value.

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">dialerObject.increase();</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>decrease()</code>
                                            </td>
                                            <td>
                                                Decreases the input value with the configured step value.

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">dialerObject.decrease();</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>setValue(Number value)</code>
                                            </td>
                                            <td>
                                                Sets a new value.

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">dialerObject.setValue(50);</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>getValue()</code>
                                            </td>
                                            <td>
                                                Gets current value.

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">var value = dialerObject.getValue();</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>setMinValue(Number value)</code>
                                            </td>
                                            <td>
                                                Sets a new <code>min</code> value.

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">dialerObject.setMinValue(50);</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>setMaxValue(Number value)</code>
                                            </td>
                                            <td>
                                                Sets a new <code>max</code> value.

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">dialerObject.setMaxValue(5.5);</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>update()</code>
                                            </td>
                                            <td>
                                                Updates current value with <code>min</code> and <code>max</code> values
                                                validation.

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">dialerObject.update();</code></pre>
                                                        </div>
                                                    </div><!--end::Highlight-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>getElement()</code>
                                            </td>
                                            <td>
                                                Returns the Dialer's attached DOM element.

                                                <div class="pt-3">
                                                    <!--begin::Highlight-->
                                                    <div class="highlight"> <button class="highlight-copy btn"
                                                            data-bs-toggle="tooltip" title="Copy code">copy</button>
                                                        <div class="highlight-code">
                                                            <pre class="language-javascript"><code class="language-javascript">var element = dialerObject.getElement();</code></pre>
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
                                                            <pre class="language-javascript"><code class="language-javascript">dialerObject.destroy();</code></pre>
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
                            Below are few events for hooking into the Dialer functionality.
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
                                            <th class="min-w-200px">Event Type</th>
                                            <th class="min-w-500px">Description</th>
                                        </tr>
                                    </thead>
                                    <!--end::Head-->

                                    <!--begin::Body-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <code>kt.dialer.increase</code>
                                            </td>
                                            <td>
                                                This event fires before running the <code>increase</code> method
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>kt.dialer.increased</code>
                                            </td>
                                            <td>
                                                This event fires after running the <code>increase</code> method
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>kt.dialer.decrease</code>
                                            </td>
                                            <td>
                                                This event fires before running the <code>decrease</code> method
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>kt.dialer.decreased</code>
                                            </td>
                                            <td>
                                                This event fires before after the <code>decrease</code> method
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>kt.dialer.change</code>
                                            </td>
                                            <td>
                                                This event fires before running the <code>increase</code> or the
                                                <code>decrease</code> method
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>kt.dialer.changed</code>
                                            </td>
                                            <td>
                                                This event fires after running the <code>increase</code> or the
                                                <code>decrease</code> method
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Body-->
                                </table>
                            </div>
                        </div>
                        <!--end::Table-->

                        <div class="pt-3">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-javascript"><code class="language-javascript">var dialerElement = document.querySelector(&quot;#kt_dialer_example_1&quot;);
var dialerObject = new KTDialer(dialerElement, { /* options */ });
dialerObject.on(&#039;kt.dialer.increase&#039;, function(){
    // do something...
});</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
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
                                <a href="#custom" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Custom</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#javascript" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Javascript</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#options" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Options</span>
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
    <script src="{{ asset('assets/js/custom/documentation/forms/dialer.js') }}"></script>
    <!--end::Vendors Javascript-->
@endsection


