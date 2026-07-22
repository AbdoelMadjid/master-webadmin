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
                        <h1 class="anchor fw-bold mb-5" data-kt-scroll-offset="85" id="basic">
                            <a href="#basic" data-kt-scroll-toggle></a>
                            Nested Example
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Repeater-->
                                <div id="kt_docs_repeater_nested">
                                    <!--begin::Form group-->
                                    <div class="form-group">
                                        <div data-repeater-list="kt_docs_repeater_nested_outer">
                                            <div data-repeater-item>
                                                <div class="form-group row mb-5">
                                                    <div class="col-md-3">
                                                        <label class="form-label">Name:</label>
                                                        <input type="email" class="form-control mb-2 mb-md-0"
                                                            placeholder="Enter full name" />
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="inner-repeater">
                                                            <div data-repeater-list="kt_docs_repeater_nested_inner"
                                                                class="mb-5">
                                                                <div data-repeater-item>
                                                                    <label class="form-label">Number:</label>
                                                                    <div class="input-group pb-3">
                                                                        <input type="email" class="form-control"
                                                                            placeholder="Enter contact number" />
                                                                        <button class="border btn btn-icon btn-light-danger"
                                                                            data-repeater-delete type="button">
                                                                            <i class="ki-duotone ki-trash fs-5"><span
                                                                                    class="path1"></span><span
                                                                                    class="path2"></span><span
                                                                                    class="path3"></span><span
                                                                                    class="path4"></span><span
                                                                                    class="path5"></span></i> </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-sm btn-flex btn-light-primary"
                                                                data-repeater-create type="button">
                                                                <i class="ki-duotone ki-plus fs-5"></i> Add Number
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div
                                                            class="form-check form-check-custom form-check-solid mt-2 mt-md-11">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="form_checkbox" />
                                                            <label class="form-check-label" for="form_checkbox">
                                                                Primary
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href="javascript:;" data-repeater-delete
                                                            class="btn btn-sm btn-flex btn-light mt-3 mt-md-9">
                                                            <i class="ki-duotone ki-trash fs-5"><span
                                                                    class="path1"></span><span class="path2"></span><span
                                                                    class="path3"></span><span class="path4"></span><span
                                                                    class="path5"></span></i> Delete Row
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
                                            <i class="ki-duotone ki-plus fs-3"></i> Add Row
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
                                            href="#kt_highlight_68e3c09ac26c7" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e3c09ac26cc" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e3c09ac26c7" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">$(&#039;#kt_docs_repeater_nested&#039;).repeater({
    repeaters: [{
        selector: &#039;.inner-repeater&#039;,
        show: function () {
            $(this).slideDown();
        },

        hide: function (deleteElement) {
            $(this).slideUp(deleteElement);
        }
    }],

    show: function () {
        $(this).slideDown();
    },

    hide: function (deleteElement) {
        $(this).slideUp(deleteElement);
    }
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e3c09ac26cc" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Repeater--&gt;
&lt;div id=&quot;kt_docs_repeater_nested&quot;&gt;
    &lt;!--begin::Form group--&gt;
    &lt;div class=&quot;form-group&quot;&gt;
        &lt;div data-repeater-list=&quot;kt_docs_repeater_nested_outer&quot;&gt;
            &lt;div data-repeater-item&gt;
                &lt;div class=&quot;form-group row mb-5&quot;&gt;
                    &lt;div class=&quot;col-md-3&quot;&gt;
                        &lt;label class=&quot;form-label&quot;&gt;Name:&lt;/label&gt;
                        &lt;input type=&quot;email&quot; class=&quot;form-control mb-2 mb-md-0&quot; placeholder=&quot;Enter full name&quot; /&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;col-md-3&quot;&gt;
                        &lt;div class=&quot;inner-repeater&quot;&gt;
                            &lt;div data-repeater-list=&quot;kt_docs_repeater_nested_inner&quot; class=&quot;mb-5&quot;&gt;
                                &lt;div data-repeater-item&gt;
                                    &lt;label class=&quot;form-label&quot;&gt;Number:&lt;/label&gt;
                                    &lt;div class=&quot;input-group pb-3&quot;&gt;
                                        &lt;input type=&quot;email&quot; class=&quot;form-control&quot; placeholder=&quot;Enter contact number&quot; /&gt;
                                        &lt;button class=&quot;border border-secondary btn btn-icon btn-flex btn-light-danger&quot; data-repeater-delete type=&quot;button&quot;&gt;
                                            &lt;i class=&quot;ki-duotone ki-trash fs-5&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;/i&gt;
                                        &lt;/button&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                            &lt;button class=&quot;btn btn-sm btn-flex btn-light-primary&quot; data-repeater-create type=&quot;button&quot;&gt;
                                &lt;i class=&quot;ki-duotone ki-plus fs-5&quot;&gt;&lt;/i&gt;
                                Add Number
                            &lt;/button&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;col-md-2&quot;&gt;
                        &lt;div class=&quot;form-check form-check-custom form-check-solid mt-2 mt-md-11&quot;&gt;
                            &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;form_checkbox&quot; /&gt;
                            &lt;label class=&quot;form-check-label&quot; for=&quot;form_checkbox&quot;&gt;
                                Primary
                            &lt;/label&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;col-md-4&quot;&gt;
                        &lt;a href=&quot;javascript:;&quot; data-repeater-delete class=&quot;btn btn-sm btn-flex btn-light-danger mt-3 mt-md-9&quot;&gt;
                            &lt;i class=&quot;ki-duotone ki-trash fs-5&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;/i&gt;
                            Delete Row
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
            Add Row
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
    <script src="{{ asset('assets/js/custom/documentation/forms/formrepeater/nested.js') }}"></script>
    <!--end::Custom Javascript-->
@endsection


