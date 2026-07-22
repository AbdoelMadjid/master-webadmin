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
                            FormValidation creates an interface to add and remove a repeatable group of input elements. For
                            more info see the official <a class="fw-bold"
                                href="https://github.com/DubFriend/jquery.repeater">Github repository</a>.
                        </div> <!--end::Description-->
                    </div><!--end::Notice-->
                    <!--begin::Section-->
                    <div class="py-10">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" data-kt-scroll-offset="85" id="advanced">
                            <a href="#advanced" data-kt-scroll-toggle></a>
                            Advanced Example
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Repeater-->
                                <div id="kt_docs_repeater_advanced">
                                    <!--begin::Form group-->
                                    <div class="form-group">
                                        <div data-repeater-list="kt_docs_repeater_advanced">
                                            <div data-repeater-item>
                                                <div class="form-group row mb-5">
                                                    <div class="col-md-3">
                                                        <label class="form-label">Select Options:</label>
                                                        <select class="form-select" data-kt-repeater="select2"
                                                            data-placeholder="Select an option">
                                                            <option></option>
                                                            <option value="1">Option 1</option>
                                                            <option value="2">Option 2</option>
                                                            <option value="3">Option 3</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label class="form-label">Datepicker:</label>
                                                        <input class="form-control" data-kt-repeater="datepicker"
                                                            placeholder="Pick a date" />
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Tags:</label>
                                                        <input class="form-control" data-kt-repeater="tagify"
                                                            value="tag1, tag2, tag3" />
                                                    </div>
                                                    <div class="col-md-2">
                                                        <a href="javascript:;" data-repeater-delete
                                                            class="btn btn-flex btn-sm btn-light-danger mt-3 mt-md-9">
                                                            <i class="ki-duotone ki-trash fs-5"><span
                                                                    class="path1"></span><span class="path2"></span><span
                                                                    class="path3"></span><span class="path4"></span><span
                                                                    class="path5"></span></i> Delete
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Form group-->

                                    <!--begin::Form group-->
                                    <div class="form-group">
                                        <a href="javascript:;" data-repeater-create class="btn btn-flex btn-light-primary">
                                            <i class="ki-duotone ki-plus fs-3"></i> Add
                                        </a>
                                    </div>
                                    <!--end::Form group-->
                                </div>
                                <!--end::Repeater-->
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
                                            href="#kt_highlight_68e3c11b39504" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e3c11b39507" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e3c11b39504" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">$(&#039;#kt_docs_repeater_advanced&#039;).repeater({
    initEmpty: false,

    defaultValues: {
        &#039;text-input&#039;: &#039;foo&#039;
    },

    show: function () {
        $(this).slideDown();

        // Re-init select2
        $(this).find(&#039;[data-kt-repeater=&quot;select2&quot;]&#039;).select2();

        // Re-init flatpickr
        $(this).find(&#039;[data-kt-repeater=&quot;datepicker&quot;]&#039;).flatpickr();

        // Re-init tagify
        new Tagify(this.querySelector(&#039;[data-kt-repeater=&quot;tagify&quot;]&#039;));
    },

    hide: function (deleteElement) {
        $(this).slideUp(deleteElement);
    },

    ready: function(){
        // Init select2
        $(&#039;[data-kt-repeater=&quot;select2&quot;]&#039;).select2();

        // Init flatpickr
        $(&#039;[data-kt-repeater=&quot;datepicker&quot;]&#039;).flatpickr();

        // Init Tagify
        new Tagify(document.querySelector(&#039;[data-kt-repeater=&quot;tagify&quot;]&#039;));
    }
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e3c11b39507" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Repeater--&gt;
&lt;div id=&quot;kt_docs_repeater_advanced&quot;&gt;
    &lt;!--begin::Form group--&gt;
    &lt;div class=&quot;form-group&quot;&gt;
        &lt;div data-repeater-list=&quot;kt_docs_repeater_advanced&quot;&gt;
            &lt;div data-repeater-item&gt;
                &lt;div class=&quot;form-group row mb-5&quot;&gt;
                    &lt;div class=&quot;col-md-3&quot;&gt;
                        &lt;label class=&quot;form-label&quot;&gt;Select Options:&lt;/label&gt;
                        &lt;select class=&quot;form-select&quot; data-kt-repeater=&quot;select2&quot; data-placeholder=&quot;Select an option&quot;&gt;
                            &lt;option&gt;&lt;/option&gt;
                            &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
                            &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
                            &lt;option value=&quot;3&quot;&gt;Option 3&lt;/option&gt;
                        &lt;/select&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;col-md-3&quot;&gt;
                        &lt;label class=&quot;form-label&quot;&gt;Datepicker:&lt;/label&gt;
                        &lt;input class=&quot;form-control&quot; data-kt-repeater=&quot;datepicker&quot; placeholder=&quot;Pick a date&quot; /&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;col-md-4&quot;&gt;
                        &lt;label class=&quot;form-label&quot;&gt;Tags:&lt;/label&gt;
                        &lt;input class=&quot;form-control&quot; data-kt-repeater=&quot;tagify&quot; value=&quot;tag1, tag2, tag3&quot;/&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;col-md-2&quot;&gt;
                        &lt;a href=&quot;javascript:;&quot; data-repeater-delete class=&quot;btn btn-flex btn-sm btn-light-danger mt-3 mt-md-9&quot;&gt;
                            &lt;i class=&quot;ki-duotone ki-trash fs-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;/i&gt;
                            Delete
                        &lt;/a&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;!--end::Form group--&gt;

    &lt;!--begin::Form group--&gt;
    &lt;div class=&quot;form-group&quot;&gt;
        &lt;a href=&quot;javascript:;&quot; data-repeater-create class=&quot;btn btn-flex btn-light-primary&quot;&gt;
            &lt;i class=&quot;ki-duotone ki-plus fs-3&quot;&gt;&lt;/i&gt;
            Add
        &lt;/a&gt;
    &lt;/div&gt;
    &lt;!--end::Form group--&gt;
&lt;/div&gt;
&lt;!--end::Repeater--&gt;</code></pre>
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
    <script src="{{ asset('assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/custom/documentation/forms/formrepeater/advanced.js') }}"></script>
    <!--end::Custom Javascript-->
@endsection


