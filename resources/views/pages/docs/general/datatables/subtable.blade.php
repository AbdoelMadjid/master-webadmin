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
                            DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, based
                            upon the foundations of progressive enhancement, and will add advanced interaction controls to
                            any HTML table.
                            For more info see <a href="https://datatables.net/" class="fw-semibold">the official site</a>.
                        </div> <!--end::Description-->
                    </div><!--end::Notice-->

                    <!--begin::Section-->
                    <div class="pt-10">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="subtable">
                            <a href="#subtable"></a>
                            Sub Datatable Example
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            This example shows the DataTables table with an expandable row. The sub-rows data are generated
                            by using DataTable's template methods with simple JS data objects that can either be generated
                            locally or retrieved from an API endpoint.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <table class="table align-middle table-row-dashed fs-6 gy-4" id="kt_docs_datatable_subtable">
                                <!--begin::Table head-->
                                <thead>
                                    <!--begin::Table row-->
                                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                        <th class="min-w-100px">Order ID</th>
                                        <th class="text-end min-w-100px">Created</th>
                                        <th class="text-end min-w-150px">Customer</th>
                                        <th class="text-end min-w-100px">Total</th>
                                        <th class="text-end min-w-100px">Profit</th>
                                        <th class="text-end min-w-50px">Status</th>
                                        <th class="text-end"></th>
                                    </tr>
                                    <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->


                                <!--begin::Table body-->
                                <tbody class="fw-bold text-gray-600">
                                    <!--begin::SubTable template-->
                                    <tr data-kt-docs-datatable-subtable="subtable_template" class="d-none">
                                        <td colspan="2">
                                            <div class="d-flex align-items-center gap-3">
                                                <a href="javascript:void(0)"
                                                    class="symbol symbol-50px bg-secondary bg-opacity-25 rounded">
                                                    <img src="/html/metronic/docs/assets/media/stock/ecommerce/"
                                                        alt="" data-kt-docs-datatable-subtable="template_image" />
                                                </a>
                                                <div class="d-flex flex-column text-muted">
                                                    <a href="javascript:void(0)" class="text-gray-900 text-hover-primary fw-bold"
                                                        data-kt-docs-datatable-subtable="template_name">Product name</a>
                                                    <div class="fs-7"
                                                        data-kt-docs-datatable-subtable="template_description">Product
                                                        description</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="text-gray-900 fs-7">Cost</div>
                                            <div class="text-muted fs-7 fw-bold"
                                                data-kt-docs-datatable-subtable="template_cost">1</div>
                                        </td>
                                        <td class="text-end">
                                            <div class="text-gray-900 fs-7">Qty</div>
                                            <div class="text-muted fs-7 fw-bold"
                                                data-kt-docs-datatable-subtable="template_qty">1</div>
                                        </td>
                                        <td class="text-end">
                                            <div class="text-gray-900 fs-7">Total</div>
                                            <div class="text-muted fs-7 fw-bold"
                                                data-kt-docs-datatable-subtable="template_total">name</div>
                                        </td>
                                        <td class="text-end">
                                            <div class="text-gray-900 fs-7 me-3">On hand</div>
                                            <div class="text-muted fs-7 fw-bold"
                                                data-kt-docs-datatable-subtable="template_stock">32</div>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <!--end::SubTable template-->
                                    <tr>

                                        <!--begin::Order ID-->
                                        <td>
                                            <a href="javascript:void(0)" class="text-gray-900 text-hover-primary">#XGT-346</a>
                                        </td>
                                        <!--end::Order ID-->

                                        <!--begin::Crated date-->
                                        <td class="text-end">
                                            7 October 2025, 2:25 pm </td>
                                        <!--end::Created date-->

                                        <!--begin::Customer-->
                                        <td class="text-end">
                                            <a href="" class="text-gray-900 text-hover-primary">Emma Smith</a>
                                        </td>
                                        <!--end::Customer-->

                                        <!--begin::Total-->
                                        <td class="text-end">
                                            $630.00 </td>
                                        <!--end::Total-->

                                        <!--begin::Profit-->
                                        <td class="text-end">
                                            <span class="text-gray-900 fw-bold">$86.70</span>
                                        </td>
                                        <!--end::Profit-->

                                        <!--begin::Status-->
                                        <td class="text-end">
                                            <span class="badge py-3 px-4 fs-7 badge-light-warning">Pending</span>
                                        </td>
                                        <!--end::Status-->

                                        <!--begin::Actions-->
                                        <td class="text-end">
                                            <button type="button"
                                                class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                                data-kt-docs-datatable-subtable="expand_row">
                                                <i class="ki-duotone ki-plus fs-3 m-0 toggle-off"></i> <i
                                                    class="ki-duotone ki-minus fs-3 m-0 toggle-on"></i> </button>
                                        </td>
                                        <!--end::Actions-->
                                    </tr>
                                    <tr>

                                        <!--begin::Order ID-->
                                        <td>
                                            <a href="javascript:void(0)" class="text-gray-900 text-hover-primary">#YHD-047</a>
                                        </td>
                                        <!--end::Order ID-->

                                        <!--begin::Crated date-->
                                        <td class="text-end">
                                            7 October 2025, 1:33 pm </td>
                                        <!--end::Created date-->

                                        <!--begin::Customer-->
                                        <td class="text-end">
                                            <a href="" class="text-gray-900 text-hover-primary">Melody Macy</a>
                                        </td>
                                        <!--end::Customer-->

                                        <!--begin::Total-->
                                        <td class="text-end">
                                            $25.00 </td>
                                        <!--end::Total-->

                                        <!--begin::Profit-->
                                        <td class="text-end">
                                            <span class="text-gray-900 fw-bold">$4.20</span>
                                        </td>
                                        <!--end::Profit-->

                                        <!--begin::Status-->
                                        <td class="text-end">
                                            <span class="badge py-3 px-4 fs-7 badge-light-primary">Confirmed</span>
                                        </td>
                                        <!--end::Status-->

                                        <!--begin::Actions-->
                                        <td class="text-end">
                                            <button type="button"
                                                class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                                data-kt-docs-datatable-subtable="expand_row">
                                                <i class="ki-duotone ki-plus fs-3 m-0 toggle-off"></i> <i
                                                    class="ki-duotone ki-minus fs-3 m-0 toggle-on"></i> </button>
                                        </td>
                                        <!--end::Actions-->
                                    </tr>
                                    <tr>

                                        <!--begin::Order ID-->
                                        <td>
                                            <a href="javascript:void(0)" class="text-gray-900 text-hover-primary">#SRR-678</a>
                                        </td>
                                        <!--end::Order ID-->

                                        <!--begin::Crated date-->
                                        <td class="text-end">
                                            7 October 2025, 10:25 am </td>
                                        <!--end::Created date-->

                                        <!--begin::Customer-->
                                        <td class="text-end">
                                            <a href="" class="text-gray-900 text-hover-primary">Max Smith</a>
                                        </td>
                                        <!--end::Customer-->

                                        <!--begin::Total-->
                                        <td class="text-end">
                                            $1,630.00 </td>
                                        <!--end::Total-->

                                        <!--begin::Profit-->
                                        <td class="text-end">
                                            <span class="text-gray-900 fw-bold">$203.90</span>
                                        </td>
                                        <!--end::Profit-->

                                        <!--begin::Status-->
                                        <td class="text-end">
                                            <span class="badge py-3 px-4 fs-7 badge-light-warning">Pending</span>
                                        </td>
                                        <!--end::Status-->

                                        <!--begin::Actions-->
                                        <td class="text-end">
                                            <button type="button"
                                                class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                                data-kt-docs-datatable-subtable="expand_row">
                                                <i class="ki-duotone ki-plus fs-3 m-0 toggle-off"></i> <i
                                                    class="ki-duotone ki-minus fs-3 m-0 toggle-on"></i> </button>
                                        </td>
                                        <!--end::Actions-->
                                    </tr>
                                    <tr>

                                        <!--begin::Order ID-->
                                        <td>
                                            <a href="javascript:void(0)" class="text-gray-900 text-hover-primary">#PXF-534</a>
                                        </td>
                                        <!--end::Order ID-->

                                        <!--begin::Crated date-->
                                        <td class="text-end">
                                            6 October 2025, 2:25 pm </td>
                                        <!--end::Created date-->

                                        <!--begin::Customer-->
                                        <td class="text-end">
                                            <a href="" class="text-gray-900 text-hover-primary">Sean Bean</a>
                                        </td>
                                        <!--end::Customer-->

                                        <!--begin::Total-->
                                        <td class="text-end">
                                            $119.00 </td>
                                        <!--end::Total-->

                                        <!--begin::Profit-->
                                        <td class="text-end">
                                            <span class="text-gray-900 fw-bold">$12.00</span>
                                        </td>
                                        <!--end::Profit-->

                                        <!--begin::Status-->
                                        <td class="text-end">
                                            <span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
                                        </td>
                                        <!--end::Status-->

                                        <!--begin::Actions-->
                                        <td class="text-end">
                                            <button type="button"
                                                class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                                data-kt-docs-datatable-subtable="expand_row">
                                                <i class="ki-duotone ki-plus fs-3 m-0 toggle-off"></i> <i
                                                    class="ki-duotone ki-minus fs-3 m-0 toggle-on"></i> </button>
                                        </td>
                                        <!--end::Actions-->
                                    </tr>
                                    <tr>

                                        <!--begin::Order ID-->
                                        <td>
                                            <a href="javascript:void(0)" class="text-gray-900 text-hover-primary">#XGD-249</a>
                                        </td>
                                        <!--end::Order ID-->

                                        <!--begin::Crated date-->
                                        <td class="text-end">
                                            5 October 2025, 2:25 pm </td>
                                        <!--end::Created date-->

                                        <!--begin::Customer-->
                                        <td class="text-end">
                                            <a href="" class="text-gray-900 text-hover-primary">Brian Cox</a>
                                        </td>
                                        <!--end::Customer-->

                                        <!--begin::Total-->
                                        <td class="text-end">
                                            $660.00 </td>
                                        <!--end::Total-->

                                        <!--begin::Profit-->
                                        <td class="text-end">
                                            <span class="text-gray-900 fw-bold">$52.26</span>
                                        </td>
                                        <!--end::Profit-->

                                        <!--begin::Status-->
                                        <td class="text-end">
                                            <span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
                                        </td>
                                        <!--end::Status-->

                                        <!--begin::Actions-->
                                        <td class="text-end">
                                            <button type="button"
                                                class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                                data-kt-docs-datatable-subtable="expand_row">
                                                <i class="ki-duotone ki-plus fs-3 m-0 toggle-off"></i> <i
                                                    class="ki-duotone ki-minus fs-3 m-0 toggle-on"></i> </button>
                                        </td>
                                        <!--end::Actions-->
                                    </tr>
                                    <tr>

                                        <!--begin::Order ID-->
                                        <td>
                                            <a href="javascript:void(0)" class="text-gray-900 text-hover-primary">#SKP-035</a>
                                        </td>
                                        <!--end::Order ID-->

                                        <!--begin::Crated date-->
                                        <td class="text-end">
                                            4 October 2025, 2:25 pm </td>
                                        <!--end::Created date-->

                                        <!--begin::Customer-->
                                        <td class="text-end">
                                            <a href="" class="text-gray-900 text-hover-primary">Brian Cox</a>
                                        </td>
                                        <!--end::Customer-->

                                        <!--begin::Total-->
                                        <td class="text-end">
                                            $290.00 </td>
                                        <!--end::Total-->

                                        <!--begin::Profit-->
                                        <td class="text-end">
                                            <span class="text-gray-900 fw-bold">$29.00</span>
                                        </td>
                                        <!--end::Profit-->

                                        <!--begin::Status-->
                                        <td class="text-end">
                                            <span class="badge py-3 px-4 fs-7 badge-light-danger">Rejected</span>
                                        </td>
                                        <!--end::Status-->

                                        <!--begin::Actions-->
                                        <td class="text-end">
                                            <button type="button"
                                                class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                                data-kt-docs-datatable-subtable="expand_row">
                                                <i class="ki-duotone ki-plus fs-3 m-0 toggle-off"></i> <i
                                                    class="ki-duotone ki-minus fs-3 m-0 toggle-on"></i> </button>
                                        </td>
                                        <!--end::Actions-->
                                    </tr>
                                </tbody>
                                <!--end::Table body-->
                            </table>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="pt-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e522dce2fa6" role="tab">HTML</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e522dce2fa9" role="tab">JAVASCRIPT</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e522dce2fa6"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;table class=&quot;table align-middle table-row-dashed fs-6 gy-4&quot; id=&quot;kt_docs_datatable_subtable&quot;&gt;
	&lt;!--begin::Table head--&gt;
	&lt;thead&gt;
		&lt;!--begin::Table row--&gt;
		&lt;tr class=&quot;text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0&quot;&gt;
			&lt;th class=&quot;min-w-100px&quot;&gt;Order ID&lt;/th&gt;
			&lt;th class=&quot;text-end min-w-100px&quot;&gt;Created&lt;/th&gt;
			&lt;th class=&quot;text-end min-w-150px&quot;&gt;Customer&lt;/th&gt;
			&lt;th class=&quot;text-end min-w-100px&quot;&gt;Total&lt;/th&gt;
			&lt;th class=&quot;text-end min-w-100px&quot;&gt;Profit&lt;/th&gt;
			&lt;th class=&quot;text-end min-w-50px&quot;&gt;Status&lt;/th&gt;
			&lt;th class=&quot;text-end&quot;&gt;&lt;/th&gt;
		&lt;/tr&gt;
		&lt;!--end::Table row--&gt;
	&lt;/thead&gt;
	&lt;!--end::Table head--&gt;


	&lt;!--begin::Table body--&gt;
	&lt;tbody class=&quot;fw-bold text-gray-600&quot;&gt;
		&lt;!--begin::SubTable template--&gt;
		&lt;tr data-kt-docs-datatable-subtable=&quot;subtable_template&quot; class=&quot;d-none&quot;&gt;
			&lt;td colspan=&quot;2&quot;&gt;
				&lt;div class=&quot;d-flex align-items-center gap-3&quot;&gt;
					&lt;a href=&quot;#&quot; class=&quot;symbol symbol-50px bg-secondary bg-opacity-25 rounded&quot;&gt;
						&lt;img src=&quot;/assets/media/stock/ecommerce/&quot; alt=&quot;&quot; data-kt-docs-datatable-subtable=&quot;template_image&quot; /&gt;
					&lt;/a&gt;
					&lt;div class=&quot;d-flex flex-column text-muted&quot;&gt;
						&lt;a href=&quot;#&quot; class=&quot;text-gray-900 text-hover-primary fw-bold&quot; data-kt-docs-datatable-subtable=&quot;template_name&quot;&gt;Product name&lt;/a&gt;
						&lt;div class=&quot;fs-7&quot; data-kt-docs-datatable-subtable=&quot;template_description&quot;&gt;Product description&lt;/div&gt;
					&lt;/div&gt;
				&lt;/div&gt;
			&lt;/td&gt;
			&lt;td class=&quot;text-end&quot;&gt;
				&lt;div class=&quot;text-gray-900 fs-7&quot;&gt;Cost&lt;/div&gt;
				&lt;div class=&quot;text-muted fs-7 fw-bold&quot; data-kt-docs-datatable-subtable=&quot;template_cost&quot;&gt;1&lt;/div&gt;
			&lt;/td&gt;
			&lt;td class=&quot;text-end&quot;&gt;
				&lt;div class=&quot;text-gray-900 fs-7&quot;&gt;Qty&lt;/div&gt;
				&lt;div class=&quot;text-muted fs-7 fw-bold&quot; data-kt-docs-datatable-subtable=&quot;template_qty&quot;&gt;1&lt;/div&gt;
			&lt;/td&gt;
			&lt;td class=&quot;text-end&quot;&gt;
				&lt;div class=&quot;text-gray-900 fs-7&quot;&gt;Total&lt;/div&gt;
				&lt;div class=&quot;text-muted fs-7 fw-bold&quot; data-kt-docs-datatable-subtable=&quot;template_total&quot;&gt;name&lt;/div&gt;
			&lt;/td&gt;
			&lt;td class=&quot;text-end&quot;&gt;
				&lt;div class=&quot;text-gray-900 fs-7 me-3&quot;&gt;On hand&lt;/div&gt;
				&lt;div class=&quot;text-muted fs-7 fw-bold&quot; data-kt-docs-datatable-subtable=&quot;template_stock&quot;&gt;32&lt;/div&gt;
			&lt;/td&gt;
			&lt;td&gt;&lt;/td&gt;
		&lt;/tr&gt;
		&lt;!--end::SubTable template--&gt;

		&lt;tr&gt;
			&lt;!--begin::Order ID--&gt;
			&lt;td&gt;
				&lt;a href=&quot;#&quot; class=&quot;text-gray-900 text-hover-primary&quot;&gt;#XGT-346&lt;/a&gt;
			&lt;/td&gt;
			&lt;!--end::Order ID--&gt;

			&lt;!--begin::Crated date--&gt;
			&lt;td class=&quot;text-end&quot;&gt;
				10 Nov 2021, 10:30 am
			&lt;/td&gt;
			&lt;!--end::Created date--&gt;

			&lt;!--begin::Customer--&gt;
			&lt;td class=&quot;text-end&quot;&gt;
				&lt;a href=&quot;&quot; class=&quot;text-gray-900 text-hover-primary&quot;&gt;Emma Smith&lt;/a&gt;
			&lt;/td&gt;
			&lt;!--end::Customer--&gt;

			&lt;!--begin::Total--&gt;
			&lt;td class=&quot;text-end&quot;&gt;
				$630.00
			&lt;/td&gt;
			&lt;!--end::Total--&gt;

			&lt;!--begin::Profit--&gt;
			&lt;td class=&quot;text-end&quot;&gt;
				&lt;span class=&quot;text-gray-900 fw-bold&quot;&gt;$86.70&lt;/span&gt;
			&lt;/td&gt;
			&lt;!--end::Profit--&gt;

			&lt;!--begin::Status--&gt;
			&lt;td class=&quot;text-end&quot;&gt;
				&lt;span class=&quot;badge py-3 px-4 fs-7 badge-light-primary&quot;&gt;Confirmed&lt;/span&gt;
			&lt;/td&gt;
			&lt;!--end::Status--&gt;

			&lt;!--begin::Actions--&gt;
			&lt;td class=&quot;text-end&quot;&gt;
				&lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px&quot;
					data-kt-docs-datatable-subtable=&quot;expand_row&quot;&gt;
					&lt;span class=&quot;svg-icon fs-3 m-0 toggle-off&quot;&gt;...&lt;/span&gt;
					&lt;span class=&quot;svg-icon fs-3 m-0 toggle-on&quot;&gt;...&lt;/span&gt;
				&lt;/button&gt;
			&lt;/td&gt;
			&lt;!--end::Actions--&gt;
		&lt;/tr&gt;

			...
	&lt;/tbody&gt;
	&lt;!--end::Table body--&gt;
&lt;/table&gt;</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e522dce2fa9" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">&quot;use strict&quot;;

// Class definition
var KTDocsDatatableSubtable = function () {
    var table;
    var datatable;
    var template;

    // Private methods
    const initDatatable = () =&gt; {
        // Set date data order
        const tableRows = table.querySelectorAll(&#039;tbody tr&#039;);

        tableRows.forEach(row =&gt; {
            const dateRow = row.querySelectorAll(&#039;td&#039;);
            const realDate = moment(dateRow[1].innerHTML, &quot;DD MMM YYYY, LT&quot;).format(); // select date from 2nd column in table

            // Skip template
            if (!row.closest(&#039;[data-kt-docs-datatable-subtable=&quot;subtable_template&quot;]&#039;)) {
                dateRow[1].setAttribute(&#039;data-order&#039;, realDate);
                dateRow[1].innerText = moment(realDate).fromNow();
            }
        });

        // Get subtable template
        const subtable = document.querySelector(&#039;[data-kt-docs-datatable-subtable=&quot;subtable_template&quot;]&#039;);
        template = subtable.cloneNode(true);
        template.classList.remove(&#039;d-none&#039;);

        // Remove subtable template
        subtable.parentNode.removeChild(subtable);

        // Init datatable --- more info on datatables: https://datatables.net/manual/
        datatable = $(table).DataTable({
            &quot;info&quot;: false,
            &#039;order&#039;: [],
            &quot;lengthChange&quot;: false,
            &#039;pageLength&#039;: 6,
            &#039;ordering&#039;: false,
            &#039;paging&#039;: false,
            &#039;columnDefs&#039;: [
                { orderable: false, targets: 0 }, // Disable ordering on column 0 (checkbox)
                { orderable: false, targets: 6 }, // Disable ordering on column 6 (actions)
            ]
        });

        // Re-init functions on every table re-draw -- more info: https://datatables.net/reference/event/draw
        datatable.on(&#039;draw&#039;, function () {
            resetSubtable();
            handleActionButton();
        });
    }

    // Subtable data sample
    const data = [
        {
            image: &#039;76&#039;,
            name: &#039;Go Pro 8&#039;,
            description: &#039;Latest  version of Go Pro.&#039;,
            cost: &#039;500.00&#039;,
            qty: &#039;1&#039;,
            total: &#039;500.00&#039;,
            stock: &#039;12&#039;
        },
        {
            image: &#039;60&#039;,
            name: &#039;Bose Earbuds&#039;,
            description: &#039;Top quality earbuds from Bose.&#039;,
            cost: &#039;300.00&#039;,
            qty: &#039;1&#039;,
            total: &#039;300.00&#039;,
            stock: &#039;8&#039;
        },
        {
            image: &#039;211&#039;,
            name: &#039;Dry-fit Sports T-shirt&#039;,
            description: &#039;Comfortable sportswear for everyday use.&#039;,
            cost: &#039;89.00&#039;,
            qty: &#039;1&#039;,
            total: &#039;89.00&#039;,
            stock: &#039;18&#039;
        },
        {
            image: &#039;21&#039;,
            name: &#039;Apple Airpod 3&#039;,
            description: &#039;Apple\&#039;s latest and most advanced earbuds.&#039;,
            cost: &#039;200.00&#039;,
            qty: &#039;2&#039;,
            total: &#039;400.00&#039;,
            stock: &#039;32&#039;
        },
        {
            image: &#039;83&#039;,
            name: &#039;Nike Pumps&#039;,
            description: &#039;Apple\&#039;s latest and most advanced headphones.&#039;,
            cost: &#039;200.00&#039;,
            qty: &#039;1&#039;,
            total: &#039;200.00&#039;,
            stock: &#039;8&#039;
        }
    ];

    // Handle action button
    const handleActionButton = () =&gt; {
        const buttons = document.querySelectorAll(&#039;[data-kt-docs-datatable-subtable=&quot;expand_row&quot;]&#039;);

        // Sample row items counter --- for demo purpose only, remove this variable in your project
        const rowItems = [4, 1, 5, 1, 4, 2];

        buttons.forEach((button, index) =&gt; {
            button.addEventListener(&#039;click&#039;, e =&gt; {
                e.stopImmediatePropagation();
                e.preventDefault();

                const row = button.closest(&#039;tr&#039;);
                const rowClasses = [&#039;isOpen&#039;, &#039;border-bottom-0&#039;];

                // Get total number of items to generate --- for demo purpose only, remove this code snippet in your project
                const demoData = [];
                for (var j = 0; j &lt; rowItems[index]; j++) {
                    demoData.push(data[j]);
                }
                // End of generating demo data

                // Handle subtable expanded state
                if (row.classList.contains(&#039;isOpen&#039;)) {
                    // Remove all subtables from current order row
                    while (row.nextSibling &amp;&amp; row.nextSibling.getAttribute(&#039;data-kt-docs-datatable-subtable&#039;) === &#039;subtable_template&#039;) {
                        row.nextSibling.parentNode.removeChild(row.nextSibling);
                    }
                    row.classList.remove(...rowClasses);
                    button.classList.remove(&#039;active&#039;);
                } else {
                    populateTemplate(demoData, row);
                    row.classList.add(...rowClasses);
                    button.classList.add(&#039;active&#039;);
                }
            });
        });
    }

    // Populate template with content/data -- content/data can be replaced with relevant data from database or API
    const populateTemplate = (data, target) =&gt; {
        data.forEach((d, index) =&gt; {
            // Clone template node
            const newTemplate = template.cloneNode(true);

            // Stock badges
            const lowStock = `&lt;div class=&quot;badge badge-light-warning&quot;&gt;Low Stock&lt;/div&gt;`;
            const inStock = `&lt;div class=&quot;badge badge-light-success&quot;&gt;In Stock&lt;/div&gt;`;

            // Select data elements
            const image = newTemplate.querySelector(&#039;[data-kt-docs-datatable-subtable=&quot;template_image&quot;]&#039;);
            const name = newTemplate.querySelector(&#039;[data-kt-docs-datatable-subtable=&quot;template_name&quot;]&#039;);
            const description = newTemplate.querySelector(&#039;[data-kt-docs-datatable-subtable=&quot;template_description&quot;]&#039;);
            const cost = newTemplate.querySelector(&#039;[data-kt-docs-datatable-subtable=&quot;template_cost&quot;]&#039;);
            const qty = newTemplate.querySelector(&#039;[data-kt-docs-datatable-subtable=&quot;template_qty&quot;]&#039;);
            const total = newTemplate.querySelector(&#039;[data-kt-docs-datatable-subtable=&quot;template_total&quot;]&#039;);
            const stock = newTemplate.querySelector(&#039;[data-kt-docs-datatable-subtable=&quot;template_stock&quot;]&#039;);

            // Populate elements with data
            const imageSrc = image.getAttribute(&#039;src&#039;);
            image.setAttribute(&#039;src&#039;, imageSrc + d.image + &#039;.png&#039;);
            name.innerText = d.name;
            description.innerText = d.description;
            cost.innerText = d.cost;
            qty.innerText = d.qty;
            total.innerText = d.total;
            if (d.stock &gt; 10) {
                stock.innerHTML = inStock;
            } else {
                stock.innerHTML = lowStock;
            }

            // New template border controller
            // When only 1 row is available
            if (data.length === 1) {
                let borderClasses = [&#039;rounded&#039;, &#039;rounded-end-0&#039;];
                newTemplate.querySelectorAll(&#039;td&#039;)[0].classList.add(...borderClasses);
                borderClasses = [&#039;rounded&#039;, &#039;rounded-start-0&#039;];
                newTemplate.querySelectorAll(&#039;td&#039;)[4].classList.add(...borderClasses);

                // Remove bottom border
                newTemplate.classList.add(&#039;border-bottom-0&#039;);
            } else {
                // When multiple rows detected
                if (index === (data.length - 1)) { // first row
                    let borderClasses = [&#039;rounded-start&#039;, &#039;rounded-bottom-0&#039;];
                    newTemplate.querySelectorAll(&#039;td&#039;)[0].classList.add(...borderClasses);
                    borderClasses = [&#039;rounded-end&#039;, &#039;rounded-bottom-0&#039;];
                    newTemplate.querySelectorAll(&#039;td&#039;)[4].classList.add(...borderClasses);
                }
                if (index === 0) { // last row
                    let borderClasses = [&#039;rounded-start&#039;, &#039;rounded-top-0&#039;];
                    newTemplate.querySelectorAll(&#039;td&#039;)[0].classList.add(...borderClasses);
                    borderClasses = [&#039;rounded-end&#039;, &#039;rounded-top-0&#039;];
                    newTemplate.querySelectorAll(&#039;td&#039;)[4].classList.add(...borderClasses);

                    // Remove bottom border on last row
                    newTemplate.classList.add(&#039;border-bottom-0&#039;);
                }
            }

            // Insert new template into table
            const tbody = table.querySelector(&#039;tbody&#039;);
            tbody.insertBefore(newTemplate, target.nextSibling);
        });
    }

    // Reset subtable
    const resetSubtable = () =&gt; {
        const subtables = document.querySelectorAll(&#039;[data-kt-docs-datatable-subtable=&quot;subtable_template&quot;]&#039;);
        subtables.forEach(st =&gt; {
            st.parentNode.removeChild(st);
        });

        const rows = table.querySelectorAll(&#039;tbody tr&#039;);
        rows.forEach(r =&gt; {
            r.classList.remove(&#039;isOpen&#039;);
            if (r.querySelector(&#039;[data-kt-docs-datatable-subtable=&quot;expand_row&quot;]&#039;)) {
                r.querySelector(&#039;[data-kt-docs-datatable-subtable=&quot;expand_row&quot;]&#039;).classList.remove(&#039;active&#039;);
            }
        });
    }

    // Public methods
    return {
        init: function () {
            table = document.querySelector(&#039;#kt_docs_datatable_subtable&#039;);

            if (!table) {
                return;
            }

            initDatatable();
            handleActionButton();
        }
    }
}();

// Webpack support
if (typeof module !== &#039;undefined&#039;) {
    module.exports = KTDocsDatatableSubtable;
}

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTDocsDatatableSubtable.init();
});</code></pre>
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
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/custom/documentation/general/datatables/subtable.js') }}"></script>
    <!--end::Custom Javascript-->
@endsection


