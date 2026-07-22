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
                            Tempus Dominus is the successor to the very popular "eonasdan/bootstrap-datetimepicker". The
                            plugin provides a wide array of options that allow developers to
                            provide date and or time selections to users as simple pickers, date of birth selection,
                            appointments and more.

                            For full documentation please check the <a href="https://getdatepicker.com/" target="_blank"
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
                            Tempus Dominus's CSS and Javascript files are bundled in the global plugin bundles and globally
                            included in all pages:
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
                        <h1 class="anchor fw-bold mb-5" id="initialization" data-kt-scroll-offset="50">
                            <a href="#initialization"></a>

                            Initialization
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            <ul class="py-0">
                                <li class="py-2">
                                    Tempus Dominus's CSS is highly customized in
                                    <code>sass/vendors/plugins/_tempus-dominus.scss</code> SCSS file in order to use it as
                                    native component within the design system.
                                    The SCSS code is compiled into <code>assets/plugins/global/plugins.bundle.css</code> and
                                    globally included in all pages.
                                </li>
                                <li class="py-2">
                                    Tempus Dominus's Javascript is globally initialized with some predefined settings in
                                    <code>src/js/vendors/plugins/tempus-dominus.init.js</code> and the initialization code
                                    is bundled within
                                    <code>assets/plugins/global/plugins.bundle.js</code> and globally included in all pages.
                                </li>
                                <li class="py-2">
                                    To start usin Tempus Dominus right away, check the official <a
                                        href="https://getdatepicker.com/6/options/" class="fw-semibold"
                                        target="_blank">Getting Started</a>&nbsp;guide.
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

                            Basic Example
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            This is the simplest setup you can have with Bootstrap and Font Awesome 6:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-0">
                                    <label for="" class="form-label">Select a date and time:</label>

                                    <div class="input-group" id="kt_td_picker_basic" data-td-target-input="nearest"
                                        data-td-target-toggle="nearest">
                                        <input id="kt_td_picker_basic_input" type="text" class="form-control"
                                            data-td-target="#kt_td_picker_basic" />
                                        <span class="input-group-text" data-td-target="#kt_td_picker_basic"
                                            data-td-toggle="datetimepicker">
                                            <i class="ki-duotone ki-calendar fs-2"><span class="path1"></span><span
                                                    class="path2"></span></i> </span>
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
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e34f3111c7f" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e34f3111c82" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e34f3111c7f" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript"><code class="language-javascript">new tempusDominus.TempusDominus(document.getElementById(&quot;kt_td_picker_basic&quot;), {
    //put your config here
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e34f3111c82" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;div class=&quot;input-group&quot; id=&quot;kt_td_picker_simple&quot; data-td-target-input=&quot;nearest&quot; data-td-target-toggle=&quot;nearest&quot;&gt;
    &lt;input id=&quot;kt_td_picker_basic_input&quot; type=&quot;text&quot; class=&quot;form-control&quot; data-td-target=&quot;#kt_td_picker_basic&quot;/&gt;
    &lt;span class=&quot;input-group-text&quot; data-td-target=&quot;#kt_td_picker_basic&quot; data-td-toggle=&quot;datetimepicker&quot;&gt;
        &lt;i class=&quot;ki-duotone ki-calendar fs-2&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
    &lt;/span&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="button" data-kt-scroll-offset="50">
                            <a href="#button"></a>

                            Button Example
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            This is the simplest setup you can have with Bootstrap and Font Awesome 6:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-0">
                                    <button id="kt_td_picker_button" class="btn btn-flex flex-center btn-primary">
                                        Pick date & time
                                        <i class="ki-duotone ki-calendar-8 fs-2 ms-3 pe-0"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span><span class="path4"></span><span
                                                class="path5"></span><span class="path6"></span></i> </button>
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
                                            href="#kt_highlight_68e34f3111cad" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e34f3111cae" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e34f3111cad"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript"><code class="language-javascript">new tempusDominus.TempusDominus(document.getElementById(&quot;kt_td_picker_button&quot;), {
    //put your config here
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e34f3111cae" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;button id=&quot;kt_td_picker_button&quot; class=&quot;btn btn-flex flex-center btn-primary&quot;&gt;
    Pick date &amp; time
    &lt;i class=&quot;ki-duotone ki-calendar-8 fs-2 ms-3 pe-0&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path6&quot;&gt;&lt;/span&gt;&lt;/i&gt;
&lt;/button&gt;</code></pre>
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
                        <h1 class="anchor fw-bold mb-5" id="localization" data-kt-scroll-offset="50">
                            <a href="#localization"></a>

                            Localization
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            For localization support include a required localization in the Gulp config
                            <code>node_modules/@eonasdan/tempus-dominus/dist/locales/de.js</code>
                            <code>tools/gulp.config.js</code> or in the Webpack config
                            <code>tools/webpack/plugins/plugins.js</code> set <code>locale: "de"</code>:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-0">
                                    <label for="" class="form-label">German Localization:</label>

                                    <div class="input-group" id="kt_td_picker_localization"
                                        data-td-target-input="nearest" data-td-target-toggle="nearest">
                                        <input type="text" class="form-control"
                                            data-td-target="#kt_td_picker_localization" />
                                        <span class="input-group-text" data-td-target="#kt_td_picker_localization"
                                            data-td-toggle="datetimepicker">
                                            <i class="ki-duotone ki-calendar fs-2"><span class="path1"></span><span
                                                    class="path2"></span></i> </span>
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
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e34f3111cd4" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e34f3111cd5" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e34f3111cd4"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript"><code class="language-javascript">new tempusDominus.TempusDominus(document.getElementById(&quot;kt_td_picker_localization&quot;), {
    localization: {
        locale: &quot;de&quot;,
        startOfTheWeek: 1,
        format: &quot;dd/MM/yyyy&quot;
    }
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e34f3111cd5" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;div class=&quot;input-group&quot; id=&quot;kt_td_picker_localization&quot; data-td-target-input=&quot;nearest&quot; data-td-target-toggle=&quot;nearest&quot;&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-td-target=&quot;#kt_td_picker_localization&quot;/&gt;
    &lt;span class=&quot;input-group-text&quot; data-td-target=&quot;#kt_td_picker_localization&quot; data-td-toggle=&quot;datetimepicker&quot;&gt;
        &lt;i class=&quot;ki-duotone ki-calendar fs-2&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
    &lt;/span&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="date-only" data-kt-scroll-offset="50">
                            <a href="#date-only"></a>

                            Date Only
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            This is the simplest setup you can have with Bootstrap and Font Awesome 6:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-0">
                                    <label for="" class="form-label">Select a date and time:</label>

                                    <div class="input-group" id="kt_td_picker_date_only" data-td-target-input="nearest"
                                        data-td-target-toggle="nearest">
                                        <input id="kt_td_picker_date_only_input" type="text" class="form-control"
                                            data-td-target="#kt_td_picker_date_only" />
                                        <span class="input-group-text" data-td-target="#kt_td_picker_date_only"
                                            data-td-toggle="datetimepicker">
                                            <i class="ki-duotone ki-calendar fs-2"><span class="path1"></span><span
                                                    class="path2"></span></i> </span>
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
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e34f3111cf8" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e34f3111cf9" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e34f3111cf8"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript"><code class="language-javascript">new tempusDominus.TempusDominus(document.getElementById(&quot;kt_td_picker_date_only&quot;), {
    display: {
        viewMode: &quot;calendar&quot;,
        components: {
            decades: true,
            year: true,
            month: true,
            date: true,
            hours: false,
            minutes: false,
            seconds: false
        }
    }
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e34f3111cf9" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;div class=&quot;input-group&quot; id=&quot;kt_td_picker_date_only&quot; data-td-target-input=&quot;nearest&quot; data-td-target-toggle=&quot;nearest&quot;&gt;
    &lt;input id=&quot;kt_td_picker_date_only_input&quot; type=&quot;text&quot; class=&quot;form-control&quot; data-td-target=&quot;#kt_td_picker_date_only&quot;/&gt;
    &lt;span class=&quot;input-group-text&quot; data-td-target=&quot;#kt_td_picker_date_only&quot; data-td-toggle=&quot;datetimepicker&quot;&gt;
        &lt;i class=&quot;ki-duotone ki-calendar fs-2&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
    &lt;/span&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="time-only" data-kt-scroll-offset="50">
                            <a href="#time-only"></a>

                            Time Only
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            This is the simplest setup you can have with Bootstrap and Font Awesome 6:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-0">
                                    <label for="" class="form-label">Select a date and time:</label>

                                    <div class="input-group" id="kt_td_picker_time_only" data-td-target-input="nearest"
                                        data-td-target-toggle="nearest">
                                        <input id="kt_td_picker_time_only_input" type="text" class="form-control"
                                            data-td-target="#kt_td_picker_time_only" />
                                        <span class="input-group-text" data-td-target="#kt_td_picker_time_only"
                                            data-td-toggle="datetimepicker">
                                            <i class="ki-duotone ki-calendar fs-2"><span class="path1"></span><span
                                                    class="path2"></span></i> </span>
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
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e34f3111d1d" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e34f3111d1e" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e34f3111d1d"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript"><code class="language-javascript">new tempusDominus.TempusDominus(document.getElementById(&quot;kt_td_picker_time_only&quot;), {
    display: {
        viewMode: &quot;clock&quot;,
        components: {
            decades: false,
            year: false,
            month: false,
            date: false,
            hours: true,
            minutes: true,
            seconds: false
        }
    }
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e34f3111d1e" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;div class=&quot;input-group&quot; id=&quot;kt_td_picker_time_only&quot; data-td-target-input=&quot;nearest&quot; data-td-target-toggle=&quot;nearest&quot;&gt;
    &lt;input id=&quot;kt_td_picker_time_only_input&quot; type=&quot;text&quot; class=&quot;form-control&quot; data-td-target=&quot;#kt_td_picker_time_only&quot;/&gt;
    &lt;span class=&quot;input-group-text&quot; data-td-target=&quot;#kt_td_picker_time_only&quot; data-td-toggle=&quot;datetimepicker&quot;&gt;
        &lt;i class=&quot;ki-duotone ki-calendar fs-2&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
    &lt;/span&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="linked-pickers" data-kt-scroll-offset="50">
                            <a href="#linked-pickers"></a>

                            Linked Pickers
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            This is the simplest setup you can have with Bootstrap and Font Awesome 6:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="kt_td_picker_linked_1_input" class="form-label">From</label>
                                        <div class="input-group log-event" id="kt_td_picker_linked_1"
                                            data-td-target-input="nearest" data-td-target-toggle="nearest">
                                            <input id="kt_td_picker_linked_1_input" type="text" class="form-control"
                                                data-td-target="#kt_td_picker_linked_1" />
                                            <span class="input-group-text" data-td-target="#kt_td_picker_linked_1"
                                                data-td-toggle="datetimepicker">
                                                <i class="ki-duotone ki-calendar fs-2"><span class="path1"></span><span
                                                        class="path2"></span></i> </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="kt_td_picker_linked_2_input" class="form-label">To</label>
                                        <div class="input-group log-event" id="kt_td_picker_linked_2"
                                            data-td-target-input="nearest" data-td-target-toggle="nearest">
                                            <input id="kt_td_picker_linked_2_input" type="text" class="form-control"
                                                data-td-target="#kt_td_picker_linked_2" />
                                            <span class="input-group-text" data-td-target="#kt_td_picker_linked_2"
                                                data-td-toggle="datetimepicker">
                                                <i class="ki-duotone ki-calendar fs-2"><span class="path1"></span><span
                                                        class="path2"></span></i> </span>
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
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e34f3111d4d" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e34f3111d4e" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e34f3111d4d"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript"><code class="language-javascript">const linkedPicker1Element = document.getElementById(&quot;kt_td_picker_linked_1&quot;);
const linked1 = new tempusDominus.TempusDominus(linkedPicker1Element);
const linked2 = new tempusDominus.TempusDominus(document.getElementById(&quot;kt_td_picker_linked_2&quot;), {
    useCurrent: false,
});

//using event listeners
linkedPicker1Element.addEventListener(tempusDominus.Namespace.events.change, (e) =&gt; {
    linked2.updateOptions({
        restrictions: {
        minDate: e.detail.date,
        },
    });
});

//using subscribe method
const subscription = linked2.subscribe(tempusDominus.Namespace.events.change, (e) =&gt; {
    linked1.updateOptions({
        restrictions: {
        maxDate: e.date,
        },
    });
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e34f3111d4e" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col-sm-6&quot;&gt;
        &lt;label for=&quot;kt_td_picker_linked_1_input&quot; class=&quot;form-label&quot;&gt;From&lt;/label&gt;
        &lt;div class=&quot;input-group log-event&quot; id=&quot;kt_td_picker_linked_1&quot; data-td-target-input=&quot;nearest&quot; data-td-target-toggle=&quot;nearest&quot;&gt;
            &lt;input id=&quot;kt_td_picker_linked_1_input&quot; type=&quot;text&quot; class=&quot;form-control&quot; data-td-target=&quot;#kt_td_picker_linked_1&quot;/&gt;
            &lt;span class=&quot;input-group-text&quot; data-td-target=&quot;#kt_td_picker_linked_1&quot; data-td-toggle=&quot;datetimepicker&quot;&gt;
                &lt;i class=&quot;ki-duotone ki-calendar fs-2&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
            &lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-sm-6&quot;&gt;
        &lt;label for=&quot;kt_td_picker_linked_2_input&quot; class=&quot;form-label&quot;&gt;To&lt;/label&gt;
        &lt;div class=&quot;input-group log-event&quot; id=&quot;kt_td_picker_linked_2&quot; data-td-target-input=&quot;nearest&quot; data-td-target-toggle=&quot;nearest&quot;&gt;
            &lt;input id=&quot;kt_td_picker_linked_2_input&quot; type=&quot;text&quot; class=&quot;form-control&quot; data-td-target=&quot;#kt_td_picker_linked_2&quot;/&gt;
            &lt;span class=&quot;input-group-text&quot; data-td-target=&quot;#kt_td_picker_linked_2&quot; data-td-toggle=&quot;datetimepicker&quot;&gt;
                &lt;i class=&quot;ki-duotone ki-calendar fs-2&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
            &lt;/span&gt;
        &lt;/div&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="custom-icons" data-kt-scroll-offset="50">
                            <a href="#custom-icons"></a>

                            Custom Icons
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            This is the simplest setup you can have with Bootstrap and Font Awesome 6:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-0">
                                    <label for="" class="form-label">Select a date and time:</label>

                                    <div class="input-group" id="kt_td_picker_custom_icons"
                                        data-td-target-input="nearest" data-td-target-toggle="nearest">
                                        <input id="kt_td_picker_custom_icons_input" type="text" class="form-control"
                                            data-td-target="#kt_td_picker_custom_icons" />
                                        <span class="input-group-text" data-td-target="#kt_td_picker_custom_icons"
                                            data-td-toggle="datetimepicker">
                                            <i class="ki-duotone ki-calendar fs-2"><span class="path1"></span><span
                                                    class="path2"></span></i> </span>
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
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e34f3111d78" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e34f3111d79" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e34f3111d78"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript"><code class="language-javascript">new tempusDominus.TempusDominus(document.getElementById(&quot;kt_td_picker_custom_icons&quot;), {
    display: {
    icons: {
        time: &quot;ki-outline ki-time fs-1&quot;,
        date: &quot;ki-outline ki-calendar fs-1&quot;,
        up: &quot;ki-outline ki-up fs-1&quot;,
        down: &quot;ki-outline ki-down fs-1&quot;,
        previous: &quot;ki-outline ki-left fs-1&quot;,
        next: &quot;ki-outline ki-right fs-1&quot;,
        today: &quot;ki-outline ki-check fs-1&quot;,
        clear: &quot;ki-outline ki-trash fs-1&quot;,
        close: &quot;ki-outline ki-cross fs-1&quot;,
    },
    buttons: {
        today: true,
        clear: true,
        close: true,
    },
    }
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e34f3111d79" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;div class=&quot;input-group&quot; id=&quot;kt_td_picker_custom_icons&quot; data-td-target-input=&quot;nearest&quot; data-td-target-toggle=&quot;nearest&quot;&gt;
    &lt;input id=&quot;kt_td_picker_custom_icons_input&quot; type=&quot;text&quot; class=&quot;form-control&quot; data-td-target=&quot;#kt_td_picker_custom_icons&quot;/&gt;
    &lt;span class=&quot;input-group-text&quot; data-td-target=&quot;#kt_td_picker_custom_icons&quot; data-td-toggle=&quot;datetimepicker&quot;&gt;
        &lt;i class=&quot;ki-duotone ki-calendar fs-2&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
    &lt;/span&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="inline" data-kt-scroll-offset="50">
                            <a href="#inline"></a>

                            Inline View
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            This is the simplest setup you can have with Bootstrap and Font Awesome 6:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <label for="datetimepicker1" class="form-label">Inline</label>
                                <div class="mb-0">
                                    <div id="kt_td_picker_inline"></div>
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
                                            href="#kt_highlight_68e34f3111dac" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e34f3111dad" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e34f3111dac"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript"><code class="language-javascript">new tempusDominus.TempusDominus(document.getElementById(&quot;kt_td_picker_inline&quot;), {
    display: {
        inline: true
    }
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e34f3111dad" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;div id=&quot;kt_td_picker_inline&quot;&gt;&lt;/div&gt;</code></pre>
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
                        <h1 class="anchor fw-bold mb-5" id="multiple-dates" data-kt-scroll-offset="50">
                            <a href="#multiple-dates"></a>

                            Multiple Dates
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            This is the simplest setup you can have with Bootstrap and Font Awesome 6:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-0">
                                    <label for="" class="form-label">Select a date and time:</label>

                                    <div class="input-group" id="kt_td_picker_multiple_dates"
                                        data-td-target-input="nearest" data-td-target-toggle="nearest">
                                        <input id="kt_td_picker_multiple_dates_input" type="text" class="form-control"
                                            data-td-target="#kt_td_picker_multiple_dates" />
                                        <span class="input-group-text" data-td-target="#kt_td_picker_multiple_dates"
                                            data-td-toggle="datetimepicker">
                                            <i class="ki-duotone ki-calendar fs-2"><span class="path1"></span><span
                                                    class="path2"></span></i> </span>
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
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e34f3111dd2" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e34f3111dd3" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e34f3111dd2"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript"><code class="language-javascript">new tempusDominus.TempusDominus(document.getElementById(&quot;kt_td_picker_multiple_dates&quot;), {
    multipleDates: true
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e34f3111dd3" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;div class=&quot;input-group&quot; id=&quot;kt_td_picker_multiple_dates&quot; data-td-target-input=&quot;nearest&quot; data-td-target-toggle=&quot;nearest&quot;&gt;
    &lt;input id=&quot;kt_td_picker_multiple_dates_input&quot; type=&quot;text&quot; class=&quot;form-control&quot; data-td-target=&quot;#kt_td_picker_multiple_dates&quot;/&gt;
    &lt;span class=&quot;input-group-text&quot; data-td-target=&quot;#kt_td_picker_multiple_dates&quot; data-td-toggle=&quot;datetimepicker&quot;&gt;
        &lt;i class=&quot;ki-duotone ki-calendar fs-2&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
    &lt;/span&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="modal-example" data-kt-scroll-offset="50">
                            <a href="#modal-example"></a>

                            Modal Example
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use Datepicker within Bootstrap Modal:
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
                                    <div class="modal-dialog">
                                        <div class="modal-content">
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

                                            <div class="modal-body">
                                                <div class="input-group" id="kt_td_picker_modal"
                                                    data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                    <input id="kt_td_picker_modal_input" type="text"
                                                        class="form-control" data-td-target="#kt_td_picker_modal" />
                                                    <span class="input-group-text" data-td-target="#kt_td_picker_modal"
                                                        data-td-toggle="datetimepicker">
                                                        <i class="ki-duotone ki-calendar fs-2"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
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
                                            href="#kt_highlight_68e34f3111e09" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e34f3111e0a" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e34f3111e09"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript"><code class="language-javascript">new tempusDominus.TempusDominus(document.getElementById(&quot;kt_td_picker_modal&quot;), {
    //put your config here
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e34f3111e0a" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Modal--&gt;
&lt;div class=&quot;modal fade&quot; tabindex=&quot;-1&quot; id=&quot;kt_modal_1&quot;&gt;
    &lt;div class=&quot;modal-dialog&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h5 class=&quot;modal-title&quot;&gt;Modal title&lt;/h5&gt;
                &lt;!--begin::Close--&gt;
                &lt;div class=&quot;btn btn-icon btn-sm btn-active-light-primary ms-2&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;
                    &lt;i class=&quot;ki-duotone ki-cross fs-2&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
                &lt;/div&gt;
                &lt;!--end::Close--&gt;
            &lt;/div&gt;

            &lt;div class=&quot;modal-body&quot;&gt;
                &lt;div class=&quot;input-group&quot; id=&quot;kt_td_picker_modal&quot; data-td-target-input=&quot;nearest&quot; data-td-target-toggle=&quot;nearest&quot;&gt;
                    &lt;input id=&quot;kt_td_picker_modal_input&quot; type=&quot;text&quot; class=&quot;form-control&quot; data-td-target=&quot;#kt_td_picker_modal&quot;/&gt;
                    &lt;span class=&quot;input-group-text&quot; data-td-target=&quot;#kt_td_picker_modal&quot; data-td-toggle=&quot;datetimepicker&quot;&gt;
                        &lt;i class=&quot;ki-duotone ki-calendar fs-2&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
                    &lt;/span&gt;
                &lt;/div&gt;
            &lt;/div&gt;

            &lt;div class=&quot;modal-footer&quot;&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
            &lt;/div&gt;
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
                                    <span class="menu-title">Basic Example</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#button" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Button Example</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#localization" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Localization</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#date-only" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Date Only</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#time-only" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Time Only</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#linked-pickers" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Linked Pickers</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#custom-icons" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Custom Icons</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#inline" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Inline View</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#multiple-dates" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Multiple Dates</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#modal-example" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Modal Example</span>
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
    <script src="{{ asset('assets/js/custom/documentation/forms/tempus-dominus-datepicker.js') }}"></script>
    <!--end::Vendors Javascript-->
@endsection


