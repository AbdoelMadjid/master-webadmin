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
                        <h1 class="anchor fw-bold mb-5" id="select2" data-kt-scroll-offset="50">
                            <a href="#select2"></a>

                            Select2
                        </h1>
                        <!--end::Heading-->



                        <!--begin::Example-->
                        <div class="mb-0">
                            <!--begin::Block-->
                            <div class="py-5">
                                Use Select2 controls inside KTMenu dropdown:
                            </div>
                            <!--end::Block-->

                            <!--begin::Block-->
                            <div class="py-5">
                                <!--begin::Wrapper-->
                                <div class="rounded border p-5 d-flex flex-wrap gap-4">
                                    <!--begin::Menu wrapper-->
                                    <div class="m-0">
                                        <!--begin::Menu toggle-->
                                        <button type="button" class="btn btn-primary rotate" data-kt-menu-trigger="click"
                                            data-kt-menu-placement="bottom-start" data-kt-menu-offset="0,5">
                                            Click to open menu

                                            <i class="ki-duotone ki-down fs-3 rotate-180 ms-3 me-0"></i> </button>
                                        <!--end::Menu toggle-->

                                        <!--begin::Menu dropdown-->
                                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                            id="kt_menu_select2">
                                            <!--begin::Header-->
                                            <div class="px-7 py-5">
                                                <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                                            </div>
                                            <!--end::Header-->

                                            <!--begin::Menu separator-->
                                            <div class="separator border-gray-200"></div>
                                            <!--end::Menu separator-->

                                            <!--begin::Form-->
                                            <div class="px-7 py-5">
                                                <!--begin::Input group-->
                                                <div class="mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label fw-semibold">Status:</label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <div>
                                                        <select class="form-select form-select-solid" multiple
                                                            data-kt-select2="true" multiple data-close-on-select="false"
                                                            data-placeholder="Select option"
                                                            data-dropdown-parent="#kt_menu_select2" data-allow-clear="true">
                                                            <option></option>
                                                            <option value="1">Approved</option>
                                                            <option value="2">Pending</option>
                                                            <option value="2">In Process</option>
                                                            <option value="2">Rejected</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label fw-semibold">Member Type:</label>
                                                    <!--end::Label-->

                                                    <!--begin::Options-->
                                                    <div class="d-flex">
                                                        <!--begin::Options-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="1" />
                                                            <span class="form-check-label">
                                                                Author
                                                            </span>
                                                        </label>
                                                        <!--end::Options-->

                                                        <!--begin::Options-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox" value="2"
                                                                checked="checked" />
                                                            <span class="form-check-label">
                                                                Customer
                                                            </span>
                                                        </label>
                                                        <!--end::Options-->
                                                    </div>
                                                    <!--end::Options-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label fw-semibold">Notifications:</label>
                                                    <!--end::Label-->

                                                    <!--begin::Switch-->
                                                    <div
                                                        class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            name="notifications" checked />
                                                        <label class="form-check-label">
                                                            Enabled
                                                        </label>
                                                    </div>
                                                    <!--end::Switch-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Actions-->
                                                <div class="d-flex justify-content-end">
                                                    <button type="reset"
                                                        class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                        data-kt-menu-dismiss="true">Reset</button>

                                                    <button type="submit" class="btn btn-sm btn-primary"
                                                        data-kt-menu-dismiss="true">Apply</button>
                                                </div>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::Form-->
                                        </div>
                                        <!--end::Menu dropdown-->
                                    </div>
                                    <!--end::Menu wrapper-->
                                </div>
                                <!--end::wrapper-->
                            </div>
                            <!--end::Block-->

                            <!--begin::Code-->
                            <div class="py-5">
                                <!--begin::Highlight-->
                                <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                        title="Copy code">copy</button>
                                    <div class="highlight-code">
                                        <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Menu wrapper--&gt;
&lt;div class=&quot;m-0&quot;&gt;
    &lt;!--begin::Menu toggle--&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary rotate&quot; data-kt-menu-trigger=&quot;click&quot; data-kt-menu-placement=&quot;bottom-start&quot; data-kt-menu-offset=&quot;0,5&quot;&gt;
        Click to open menu

        &lt;i class=&quot;ki-duotone ki-down fs-3 rotate-180 ms-3 me-0&quot;&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;!--end::Menu toggle--&gt;

    &lt;!--begin::Menu dropdown--&gt;
    &lt;div class=&quot;menu menu-sub menu-sub-dropdown w-250px w-md-300px&quot; data-kt-menu=&quot;true&quot; id=&quot;kt_menu_select2&quot;&gt;
        &lt;!--begin::Header--&gt;
        &lt;div class=&quot;px-7 py-5&quot;&gt;
            &lt;div class=&quot;fs-5 text-gray-900 fw-bold&quot;&gt;Filter Options&lt;/div&gt;
        &lt;/div&gt;
        &lt;!--end::Header--&gt;

        &lt;!--begin::Menu separator--&gt;
        &lt;div class=&quot;separator border-gray-200&quot;&gt;&lt;/div&gt;
        &lt;!--end::Menu separator--&gt;

        &lt;!--begin::Form--&gt;
        &lt;div class=&quot;px-7 py-5&quot;&gt;
            &lt;!--begin::Input group--&gt;
            &lt;div class=&quot;mb-10&quot;&gt;
                &lt;!--begin::Label--&gt;
                &lt;label class=&quot;form-label fw-semibold&quot;&gt;Status:&lt;/label&gt;
                &lt;!--end::Label--&gt;

                &lt;!--begin::Input--&gt;
                &lt;div&gt;
                    &lt;select class=&quot;form-select form-select-solid&quot; multiple data-kt-select2=&quot;true&quot; multiple data-close-on-select=&quot;false&quot; data-placeholder=&quot;Select option&quot; data-dropdown-parent=&quot;#kt_menu_select2&quot; data-allow-clear=&quot;true&quot;&gt;
                        &lt;option&gt;&lt;/option&gt;
                        &lt;option value=&quot;1&quot;&gt;Approved&lt;/option&gt;
                        &lt;option value=&quot;2&quot;&gt;Pending&lt;/option&gt;
                        &lt;option value=&quot;2&quot;&gt;In Process&lt;/option&gt;
                        &lt;option value=&quot;2&quot;&gt;Rejected&lt;/option&gt;
                    &lt;/select&gt;
                &lt;/div&gt;
                &lt;!--end::Input--&gt;
            &lt;/div&gt;
            &lt;!--end::Input group--&gt;

            &lt;!--begin::Input group--&gt;
            &lt;div class=&quot;mb-10&quot;&gt;
                &lt;!--begin::Label--&gt;
                &lt;label class=&quot;form-label fw-semibold&quot;&gt;Member Type:&lt;/label&gt;
                &lt;!--end::Label--&gt;

                &lt;!--begin::Options--&gt;
                &lt;div class=&quot;d-flex&quot;&gt;
                    &lt;!--begin::Options--&gt;
                    &lt;label class=&quot;form-check form-check-sm form-check-custom form-check-solid me-5&quot;&gt;
                        &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;1&quot;/&gt;
                        &lt;span class=&quot;form-check-label&quot;&gt;
                            Author
                        &lt;/span&gt;
                    &lt;/label&gt;
                    &lt;!--end::Options--&gt;

                    &lt;!--begin::Options--&gt;
                    &lt;label class=&quot;form-check form-check-sm form-check-custom form-check-solid&quot;&gt;
                        &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;2&quot; checked=&quot;checked&quot;/&gt;
                        &lt;span class=&quot;form-check-label&quot;&gt;
                            Customer
                        &lt;/span&gt;
                    &lt;/label&gt;
                    &lt;!--end::Options--&gt;
                &lt;/div&gt;
                &lt;!--end::Options--&gt;
            &lt;/div&gt;
            &lt;!--end::Input group--&gt;

            &lt;!--begin::Input group--&gt;
            &lt;div class=&quot;mb-10&quot;&gt;
                &lt;!--begin::Label--&gt;
                &lt;label class=&quot;form-label fw-semibold&quot;&gt;Notifications:&lt;/label&gt;
                &lt;!--end::Label--&gt;

                &lt;!--begin::Switch--&gt;
                &lt;div class=&quot;form-check form-switch form-switch-sm form-check-custom form-check-solid&quot;&gt;
                    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; name=&quot;notifications&quot; checked /&gt;
                    &lt;label class=&quot;form-check-label&quot;&gt;
                        Enabled
                    &lt;/label&gt;
                &lt;/div&gt;
                &lt;!--end::Switch--&gt;
            &lt;/div&gt;
            &lt;!--end::Input group--&gt;

            &lt;!--begin::Actions--&gt;
            &lt;div class=&quot;d-flex justify-content-end&quot;&gt;
                &lt;button type=&quot;reset&quot; class=&quot;btn btn-sm btn-light btn-active-light-primary me-2&quot; data-kt-menu-dismiss=&quot;true&quot;&gt;Reset&lt;/button&gt;

                &lt;button type=&quot;submit&quot; class=&quot;btn btn-sm btn-primary&quot; data-kt-menu-dismiss=&quot;true&quot;&gt;Apply&lt;/button&gt;
            &lt;/div&gt;
            &lt;!--end::Actions--&gt;
        &lt;/div&gt;
        &lt;!--end::Form--&gt;
    &lt;/div&gt;
    &lt;!--end::Menu dropdown--&gt;
&lt;/div&gt;
&lt;!--end::Menu wrapper--&gt;</code></pre>
                                    </div>
                                </div><!--end::Highlight-->
                            </div>
                            <!--end::Code-->
                        </div>
                        <!--end::Example-->
                    </div>
                    <!--end::Section-->


                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="tempus-dominus-datepicker" data-kt-scroll-offset="50">
                            <a href="#tempus-dominus-datepicker"></a>

                            Tempus Dominus Datepicker
                        </h1>
                        <!--end::Heading-->



                        <!--begin::Example-->
                        <div class="mb-0">
                            <!--begin::Block-->
                            <div class="py-5">
                                Use Tempus Dominus Datepicker controls inside KTMenu dropdown:
                            </div>
                            <!--end::Block-->

                            <!--begin::Block-->
                            <div class="py-5">
                                <!--begin::Wrapper-->
                                <div class="rounded border p-5 d-flex flex-wrap gap-4">
                                    <!--begin::Menu wrapper-->
                                    <div class="m-0">
                                        <!--begin::Menu toggle-->
                                        <button type="button" class="btn btn-primary rotate" data-kt-menu-trigger="click"
                                            data-kt-menu-placement="bottom-start" data-kt-menu-offset="0,5">
                                            Click to open menu

                                            <i class="ki-duotone ki-down fs-3 rotate-180 ms-3 me-0"></i> </button>
                                        <!--end::Menu toggle-->

                                        <!--begin::Menu dropdown-->
                                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                            id="kt_menu_tempus_dominus_datepicker">
                                            <!--begin::Header-->
                                            <div class="px-7 py-5">
                                                <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                                            </div>
                                            <!--end::Header-->

                                            <!--begin::Menu separator-->
                                            <div class="separator border-gray-200"></div>
                                            <!--end::Menu separator-->

                                            <!--begin::Form-->
                                            <div class="px-7 py-5">
                                                <!--begin::Input group-->
                                                <div class="mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label fw-semibold">Date:</label>
                                                    <!--end::Label-->

                                                    <div class="input-group" id="kt_td_picker_basic"
                                                        data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                        <input id="kt_td_picker_basic_input" type="text"
                                                            class="form-control" data-td-target="#kt_td_picker_basic" />
                                                        <span class="input-group-text"
                                                            data-td-target="#kt_td_picker_basic"
                                                            data-td-toggle="datetimepicker">
                                                            <i class="ki-duotone ki-calendar fs-2"><span
                                                                    class="path1"></span><span class="path2"></span></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label fw-semibold">Member Type:</label>
                                                    <!--end::Label-->

                                                    <!--begin::Options-->
                                                    <div class="d-flex">
                                                        <!--begin::Options-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="1" />
                                                            <span class="form-check-label">
                                                                Author
                                                            </span>
                                                        </label>
                                                        <!--end::Options-->

                                                        <!--begin::Options-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="2" checked="checked" />
                                                            <span class="form-check-label">
                                                                Customer
                                                            </span>
                                                        </label>
                                                        <!--end::Options-->
                                                    </div>
                                                    <!--end::Options-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label fw-semibold">Notifications:</label>
                                                    <!--end::Label-->

                                                    <!--begin::Switch-->
                                                    <div
                                                        class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            name="notifications" checked />
                                                        <label class="form-check-label">
                                                            Enabled
                                                        </label>
                                                    </div>
                                                    <!--end::Switch-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Actions-->
                                                <div class="d-flex justify-content-end">
                                                    <button type="reset"
                                                        class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                        data-kt-menu-dismiss="true">Reset</button>

                                                    <button type="submit" class="btn btn-sm btn-primary"
                                                        data-kt-menu-dismiss="true">Apply</button>
                                                </div>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::Form-->
                                        </div>
                                        <!--end::Menu dropdown-->
                                    </div>
                                    <!--end::Menu wrapper-->
                                </div>
                                <!--end::wrapper-->
                            </div>
                            <!--end::Block-->

                            <!--begin::Code-->
                            <div class="py-5">
                                <!--begin::Highlight-->
                                <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                        title="Copy code">copy</button>
                                    <ul class="nav nav-pills" role="tablist">
                                        <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                                href="#kt_highlight_68e524cd04bd6" role="tab">JAVASCRIPT</a></li>
                                        <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                                href="#kt_highlight_68e524cd04bda" role="tab">HTML</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="kt_highlight_68e524cd04bd6"
                                            role="tabpanel">
                                            <div class="highlight-code">
                                                <pre class="language-javascript"><code class="language-javascript">const picker = new tempusDominus.TempusDominus(document.getElementById(&quot;kt_td_picker_basic&quot;), {
    //put your config here
});

const menuEl = document.querySelector(&quot;#kt_menu_tempus_dominus_datepicker&quot;);

if (menuEl) {
    var menu = KTMenu.getInstance(menuEl);

    if (menu) {
        menu.on(&quot;kt.menu.dropdown.hide&quot;, function(item) {
            if (picker.display.isVisible === true) {
                return false; // prevent hide
            }
        });
    }
}</code></pre>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade " id="kt_highlight_68e524cd04bda" role="tabpanel">
                                            <div class="highlight-code">
                                                <pre class="language-html" style="height:500px"><code class="language-html">&lt;!--begin::Menu wrapper--&gt;
    &lt;div class=&quot;m-0&quot;&gt;
        &lt;!--begin::Menu toggle--&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary rotate&quot; data-kt-menu-trigger=&quot;click&quot; data-kt-menu-placement=&quot;bottom-start&quot; data-kt-menu-offset=&quot;0,5&quot;&gt;
            Click to open menu

            &lt;i class=&quot;ki-duotone ki-down fs-3 rotate-180 ms-3 me-0&quot;&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;!--end::Menu toggle--&gt;

        &lt;!--begin::Menu dropdown--&gt;
        &lt;div class=&quot;menu menu-sub menu-sub-dropdown w-250px w-md-300px&quot; data-kt-menu=&quot;true&quot; id=&quot;kt_menu_select2&quot;&gt;
            &lt;!--begin::Header--&gt;
            &lt;div class=&quot;px-7 py-5&quot;&gt;
                &lt;div class=&quot;fs-5 text-gray-900 fw-bold&quot;&gt;Filter Options&lt;/div&gt;
            &lt;/div&gt;
            &lt;!--end::Header--&gt;

            &lt;!--begin::Menu separator--&gt;
            &lt;div class=&quot;separator border-gray-200&quot;&gt;&lt;/div&gt;
            &lt;!--end::Menu separator--&gt;

            &lt;!--begin::Form--&gt;
            &lt;div class=&quot;px-7 py-5&quot;&gt;
                &lt;!--begin::Input group--&gt;
                &lt;div class=&quot;mb-10&quot;&gt;
                    &lt;!--begin::Label--&gt;
                    &lt;label class=&quot;form-label fw-semibold&quot;&gt;Date:&lt;/label&gt;
                    &lt;!--end::Label--&gt;

                    &lt;div class=&quot;input-group&quot; id=&quot;kt_td_picker_basic&quot; data-td-target-input=&quot;nearest&quot; data-td-target-toggle=&quot;nearest&quot;&gt;
                        &lt;input id=&quot;kt_td_picker_basic_input&quot; type=&quot;text&quot; class=&quot;form-control&quot; data-td-target=&quot;#kt_td_picker_basic&quot;/&gt;
                        &lt;span class=&quot;input-group-text&quot; data-td-target=&quot;#kt_td_picker_basic&quot; data-td-toggle=&quot;datetimepicker&quot;&gt;
                            &lt;?php echo Theme::getIcon(&quot;calendar&quot;, &quot;fs-2&quot;)?&gt;
                        &lt;/span&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;!--end::Input group--&gt;

                &lt;!--begin::Input group--&gt;
                &lt;div class=&quot;mb-10&quot;&gt;
                    &lt;!--begin::Label--&gt;
                    &lt;label class=&quot;form-label fw-semibold&quot;&gt;Member Type:&lt;/label&gt;
                    &lt;!--end::Label--&gt;

                    &lt;!--begin::Options--&gt;
                    &lt;div class=&quot;d-flex&quot;&gt;
                        &lt;!--begin::Options--&gt;
                        &lt;label class=&quot;form-check form-check-sm form-check-custom form-check-solid me-5&quot;&gt;
                            &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;1&quot;/&gt;
                            &lt;span class=&quot;form-check-label&quot;&gt;
                                Author
                            &lt;/span&gt;
                        &lt;/label&gt;
                        &lt;!--end::Options--&gt;

                        &lt;!--begin::Options--&gt;
                        &lt;label class=&quot;form-check form-check-sm form-check-custom form-check-solid&quot;&gt;
                            &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;2&quot; checked=&quot;checked&quot;/&gt;
                            &lt;span class=&quot;form-check-label&quot;&gt;
                                Customer
                            &lt;/span&gt;
                        &lt;/label&gt;
                        &lt;!--end::Options--&gt;
                    &lt;/div&gt;
                    &lt;!--end::Options--&gt;
                &lt;/div&gt;
                &lt;!--end::Input group--&gt;

                &lt;!--begin::Input group--&gt;
                &lt;div class=&quot;mb-10&quot;&gt;
                    &lt;!--begin::Label--&gt;
                    &lt;label class=&quot;form-label fw-semibold&quot;&gt;Notifications:&lt;/label&gt;
                    &lt;!--end::Label--&gt;

                    &lt;!--begin::Switch--&gt;
                    &lt;div class=&quot;form-check form-switch form-switch-sm form-check-custom form-check-solid&quot;&gt;
                        &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; name=&quot;notifications&quot; checked /&gt;
                        &lt;label class=&quot;form-check-label&quot;&gt;
                            Enabled
                        &lt;/label&gt;
                    &lt;/div&gt;
                    &lt;!--end::Switch--&gt;
                &lt;/div&gt;
                &lt;!--end::Input group--&gt;

                &lt;!--begin::Actions--&gt;
                &lt;div class=&quot;d-flex justify-content-end&quot;&gt;
                    &lt;button type=&quot;reset&quot; class=&quot;btn btn-sm btn-light btn-active-light-primary me-2&quot; data-kt-menu-dismiss=&quot;true&quot;&gt;Reset&lt;/button&gt;

                    &lt;button type=&quot;submit&quot; class=&quot;btn btn-sm btn-primary&quot; data-kt-menu-dismiss=&quot;true&quot;&gt;Apply&lt;/button&gt;
                &lt;/div&gt;
                &lt;!--end::Actions--&gt;
            &lt;/div&gt;
            &lt;!--end::Form--&gt;
        &lt;/div&gt;
        &lt;!--end::Menu dropdown--&gt;
    &lt;/div&gt;
    &lt;!--end::Menu wrapper--&gt;</code></pre>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end::Highlight-->
                            </div>
                            <!--end::Code-->
                        </div>
                        <!--end::Example-->
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
                                <a href="#select2" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Select2</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#tempus-dominus-datepicker" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Tempus Dominus Datepicker</span>
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
    <script src="{{ asset('assets/js/custom/documentation/general/menu/integration.js') }}"></script>
    <!--end::Vendors Javascript-->
@endsection


