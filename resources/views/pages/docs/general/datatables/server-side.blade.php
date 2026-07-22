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
                    <div class="p-0">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="server-side">
                            <a href="#server-side"></a>
                            Server Side
                        </h1>
                        <!--end::Heading-->



                        <!--begin::Block-->
                        <div class="pt-5 pb-10">
                            <!--begin::Notice-->
                            <div class="d-flex align-items-center rounded py-5 px-4 bg-light-info "> <!--begin::Icon-->
                                <div class="d-flex h-80px w-80px flex-shrink-0 flex-center position-relative ms-3 me-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="text-primary h-80px w-80px position-absolute opacity-5">
                                        <path fill="currentColor"
                                            d="M10.2,21.23,4.91,18.17a3.58,3.58,0,0,1-1.8-3.11V8.94a3.58,3.58,0,0,1,1.8-3.11L10.2,2.77a3.62,3.62,0,0,1,3.6,0l5.29,3.06a3.58,3.58,0,0,1,1.8,3.11v6.12a3.58,3.58,0,0,1-1.8,3.11L13.8,21.23A3.62,3.62,0,0,1,10.2,21.23Z" />
                                    </svg> <i class="ki-duotone ki-design-frame fs-3x text-info  position-absolute"><span
                                            class="path1"></span><span class="path2"></span></i>
                                </div> <!--end::Icon-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-bold fs-6 lh-lg">
                                    With server-side processing enabled, all paging, searching, ordering actions that
                                    DataTables performs are handed
                                    off to a server where an SQL engine (or similar) can perform these actions on the large
                                    data set.
                                    For more information please check the official <a
                                        href="https://datatables.net/manual/server-side" target="_blank">documentation</a>.
                                </div> <!--end::Description-->
                            </div><!--end::Notice-->
                        </div>
                        <!--end::Block-->

                        <!--begin::CRUD-->
                        <div class="py-5">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-wrap mb-5">
                                <!--begin::Search-->
                                <div class="d-flex align-items-center position-relative my-1 mb-2 mb-md-0">
                                    <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6"><span
                                            class="path1"></span><span class="path2"></span></i> <input type="text"
                                        data-kt-docs-table-filter="search"
                                        class="form-control form-control-solid w-250px ps-15"
                                        placeholder="Search Customers" />
                                </div>
                                <!--end::Search-->

                                <!--begin::Toolbar-->
                                <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">
                                    <!--begin::Filter-->
                                    <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click"
                                        data-kt-menu-placement="bottom-end">
                                        <i class="ki-duotone ki-filter fs-2"><span class="path1"></span><span
                                                class="path2"></span></i> Filter
                                    </button>
                                    <!--begin::Menu 1-->
                                    <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true"
                                        id="kt-toolbar-filter">
                                        <!--begin::Header-->
                                        <div class="px-7 py-5">
                                            <div class="fs-4 text-gray-900 fw-bold">Filter Options</div>
                                        </div>
                                        <!--end::Header-->

                                        <!--begin::Separator-->
                                        <div class="separator border-gray-200"></div>
                                        <!--end::Separator-->

                                        <!--begin::Content-->
                                        <div class="px-7 py-5">
                                            <!--begin::Input group-->
                                            <div class="mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label fs-5 fw-semibold mb-3">Payment Type:</label>
                                                <!--end::Label-->

                                                <!--begin::Options-->
                                                <div class="d-flex flex-column flex-wrap fw-semibold"
                                                    data-kt-docs-table-filter="payment_type">
                                                    <!--begin::Option-->
                                                    <label
                                                        class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
                                                        <input class="form-check-input" type="radio" name="payment_type"
                                                            value="all" checked="checked" />
                                                        <span class="form-check-label text-gray-600">
                                                            All
                                                        </span>
                                                    </label>
                                                    <!--end::Option-->

                                                    <!--begin::Option-->
                                                    <label
                                                        class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
                                                        <input class="form-check-input" type="radio" name="payment_type"
                                                            value="visa" />
                                                        <span class="form-check-label text-gray-600">
                                                            Visa
                                                        </span>
                                                    </label>
                                                    <!--end::Option-->

                                                    <!--begin::Option-->
                                                    <label
                                                        class="form-check form-check-sm form-check-custom form-check-solid mb-3">
                                                        <input class="form-check-input" type="radio" name="payment_type"
                                                            value="mastercard" />
                                                        <span class="form-check-label text-gray-600">
                                                            Mastercard
                                                        </span>
                                                    </label>
                                                    <!--end::Option-->

                                                    <!--begin::Option-->
                                                    <label
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio" name="payment_type"
                                                            value="americanexpress" />
                                                        <span class="form-check-label text-gray-600">
                                                            American Express
                                                        </span>
                                                    </label>
                                                    <!--end::Option-->
                                                </div>
                                                <!--end::Options-->
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Actions-->
                                            <div class="d-flex justify-content-end">
                                                <button type="reset" class="btn btn-light btn-active-light-primary me-2"
                                                    data-kt-menu-dismiss="true"
                                                    data-kt-docs-table-filter="reset">Reset</button>

                                                <button type="submit" class="btn btn-primary" data-kt-menu-dismiss="true"
                                                    data-kt-docs-table-filter="filter">Apply</button>
                                            </div>
                                            <!--end::Actions-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Menu 1--> <!--end::Filter-->

                                    <!--begin::Add customer-->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="tooltip"
                                        title="Coming Soon">
                                        <i class="ki-duotone ki-plus fs-2"></i> Add Customer
                                    </button>
                                    <!--end::Add customer-->
                                </div>
                                <!--end::Toolbar-->

                                <!--begin::Group actions-->
                                <div class="d-flex justify-content-end align-items-center d-none"
                                    data-kt-docs-table-toolbar="selected">
                                    <div class="fw-bold me-5">
                                        <span class="me-2" data-kt-docs-table-select="selected_count"></span> Selected
                                    </div>

                                    <button type="button" class="btn btn-danger"
                                        data-kt-docs-table-select="delete_selected">
                                        Selection Action
                                    </button>
                                </div>
                                <!--end::Group actions-->
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Datatable-->
                            <table id="kt_datatable_example_1"
                                class="table align-middle table-row-dashed min-h-400px fs-6 gy-5">
                                <thead>
                                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                        <th class="w-10px pe-2">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                    data-kt-check-target="#kt_datatable_example_1 .form-check-input"
                                                    value="1" />
                                            </div>
                                        </th>
                                        <th>Customer Name</th>
                                        <th>Email</th>
                                        <th>Company</th>
                                        <th>Payment Method</th>
                                        <th>Created Date</th>
                                        <th class="text-end min-w-100px">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-600 fw-semibold">
                                </tbody>
                            </table>
                            <!--end::Datatable-->
                        </div>
                        <!--end::CRUD-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e521fa035a4" role="tab">HTML</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e521fa035aa" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e521fa035ab" role="tab">JSON</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e521fa035ac" role="tab">datatables.php</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e521fa035ad" role="tab">class-list-util.php</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e521fa035a4"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Wrapper--&gt;
&lt;div class=&quot;d-flex flex-stack mb-5&quot;&gt;
    &lt;!--begin::Search--&gt;
    &lt;div class=&quot;d-flex align-items-center position-relative my-1&quot;&gt;
        &lt;i class=&quot;ki-duotone ki-magnifier fs-1 position-absolute ms-6&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
        &lt;input type=&quot;text&quot; data-kt-docs-table-filter=&quot;search&quot; class=&quot;form-control form-control-solid w-250px ps-15&quot; placeholder=&quot;Search Customers&quot;/&gt;
    &lt;/div&gt;
    &lt;!--end::Search--&gt;

    &lt;!--begin::Toolbar--&gt;
    &lt;div class=&quot;d-flex justify-content-end&quot; data-kt-docs-table-toolbar=&quot;base&quot;&gt;
        &lt;!--begin::Filter--&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-light-primary me-3&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Coming Soon&quot;&gt;
            &lt;i class=&quot;ki-duotone ki-filter fs-2&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
            Filter
        &lt;/button&gt;
        &lt;!--end::Filter--&gt;

        &lt;!--begin::Add customer--&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Coming Soon&quot;&gt;
            &lt;i class=&quot;ki-duotone ki-plus fs-2&quot;&gt;&lt;/i&gt;
            Add Customer
        &lt;/button&gt;
        &lt;!--end::Add customer--&gt;
    &lt;/div&gt;
    &lt;!--end::Toolbar--&gt;

    &lt;!--begin::Group actions--&gt;
    &lt;div class=&quot;d-flex justify-content-end align-items-center d-none&quot; data-kt-docs-table-toolbar=&quot;selected&quot;&gt;
        &lt;div class=&quot;fw-bold me-5&quot;&gt;
            &lt;span class=&quot;me-2&quot; data-kt-docs-table-select=&quot;selected_count&quot;&gt;&lt;/span&gt; Selected
        &lt;/div&gt;

        &lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Coming Soon&quot;&gt;
            Selection Action
        &lt;/button&gt;
    &lt;/div&gt;
    &lt;!--end::Group actions--&gt;
&lt;/div&gt;
&lt;!--end::Wrapper--&gt;

&lt;!--begin::Datatable--&gt;
&lt;table id=&quot;kt_datatable_example_1&quot; class=&quot;table align-middle table-row-dashed fs-6 gy-5&quot;&gt;
    &lt;thead&gt;
    &lt;tr class=&quot;text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0&quot;&gt;
        &lt;th class=&quot;w-10px pe-2&quot;&gt;
            &lt;div class=&quot;form-check form-check-sm form-check-custom form-check-solid me-3&quot;&gt;
                &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; data-kt-check=&quot;true&quot; data-kt-check-target=&quot;#kt_datatable_example_1 .form-check-input&quot; value=&quot;1&quot;/&gt;
            &lt;/div&gt;
        &lt;/th&gt;
        &lt;th&gt;Customer Name&lt;/th&gt;
        &lt;th&gt;Email&lt;/th&gt;
        &lt;th&gt;Company&lt;/th&gt;
        &lt;th&gt;Payment Method&lt;/th&gt;
        &lt;th&gt;Created Date&lt;/th&gt;
        &lt;th class=&quot;text-end min-w-100px&quot;&gt;Actions&lt;/th&gt;
    &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody class=&quot;text-gray-600 fw-semibold&quot;&gt;
    &lt;/tbody&gt;
&lt;/table&gt;
&lt;!--end::Datatable--&gt;</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e521fa035aa" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">&quot;use strict&quot;;

// Class definition
var KTDatatablesServerSide = function () {
    // Shared variables
    var table;
    var dt;
    var filterPayment;

    // Private functions
    var initDatatable = function () {
        dt = $(&quot;#kt_datatable_example_1&quot;).DataTable({
            searchDelay: 500,
            processing: true,
            serverSide: true,
            order: [[5, &#039;desc&#039;]],
            stateSave: true,
            select: {
                style: &#039;multi&#039;,
                selector: &#039;td:first-child input[type=&quot;checkbox&quot;]&#039;,
                className: &#039;row-selected&#039;
            },
            ajax: {
                url: &quot;https://preview.keenthemes.com/api/datatables.php&quot;,
            },
            columns: [
                { data: &#039;RecordID&#039; },
                { data: &#039;Name&#039; },
                { data: &#039;Email&#039; },
                { data: &#039;Company&#039; },
                { data: &#039;CreditCardNumber&#039; },
                { data: &#039;Datetime&#039; },
                { data: null },
            ],
            columnDefs: [
                {
                    targets: 0,
                    orderable: false,
                    render: function (data) {
                        return `
                            &lt;div class=&quot;form-check form-check-sm form-check-custom form-check-solid&quot;&gt;
                                &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;${data}&quot; /&gt;
                            &lt;/div&gt;`;
                    }
                },
                {
                    targets: 4,
                    render: function (data, type, row) {
                        return `&lt;img src=&quot;${hostUrl}assets/media/svg/card-logos/${row.CreditCardType}.svg&quot; class=&quot;w-35px me-3&quot; alt=&quot;${row.CreditCardType}&quot;&gt;` + data;
                    }
                },
                {
                    targets: -1,
                    data: null,
                    orderable: false,
                    className: &#039;text-end&#039;,
                    render: function (data, type, row) {
                        return `
                            &lt;a href=&quot;#&quot; class=&quot;btn btn-light btn-active-light-primary btn-sm&quot; data-kt-menu-trigger=&quot;click&quot; data-kt-menu-placement=&quot;bottom-end&quot; data-kt-menu-flip=&quot;top-end&quot;&gt;
                                Actions
                                &lt;span class=&quot;svg-icon fs-5 m-0&quot;&gt;
                                    &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; xmlns:xlink=&quot;http://www.w3.org/1999/xlink&quot; width=&quot;24px&quot; height=&quot;24px&quot; viewBox=&quot;0 0 24 24&quot; version=&quot;1.1&quot;&gt;
                                        &lt;g stroke=&quot;none&quot; stroke-width=&quot;1&quot; fill=&quot;none&quot; fill-rule=&quot;evenodd&quot;&gt;
                                            &lt;polygon points=&quot;0 0 24 0 24 24 0 24&quot;&gt;&lt;/polygon&gt;
                                            &lt;path d=&quot;M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z&quot; fill=&quot;currentColor&quot; fill-rule=&quot;nonzero&quot; transform=&quot;translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)&quot;&gt;&lt;/path&gt;
                                        &lt;/g&gt;
                                    &lt;/svg&gt;
                                &lt;/span&gt;
                            &lt;/a&gt;
                            &lt;!--begin::Menu--&gt;
                            &lt;div class=&quot;menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4&quot; data-kt-menu=&quot;true&quot;&gt;
                                &lt;!--begin::Menu item--&gt;
                                &lt;div class=&quot;menu-item px-3&quot;&gt;
                                    &lt;a href=&quot;#&quot; class=&quot;menu-link px-3&quot; data-kt-docs-table-filter=&quot;edit_row&quot;&gt;
                                        Edit
                                    &lt;/a&gt;
                                &lt;/div&gt;
                                &lt;!--end::Menu item--&gt;

                                &lt;!--begin::Menu item--&gt;
                                &lt;div class=&quot;menu-item px-3&quot;&gt;
                                    &lt;a href=&quot;#&quot; class=&quot;menu-link px-3&quot; data-kt-docs-table-filter=&quot;delete_row&quot;&gt;
                                        Delete
                                    &lt;/a&gt;
                                &lt;/div&gt;
                                &lt;!--end::Menu item--&gt;
                            &lt;/div&gt;
                            &lt;!--end::Menu--&gt;
                        `;
                    },
                },
            ],
            // Add data-filter attribute
            createdRow: function (row, data, dataIndex) {
                $(row).find(&#039;td:eq(4)&#039;).attr(&#039;data-filter&#039;, data.CreditCardType);
            }
        });

        table = dt.$;

        // Re-init functions on every table re-draw -- more info: https://datatables.net/reference/event/draw
        dt.on(&#039;draw&#039;, function () {
            initToggleToolbar();
            toggleToolbars();
            handleDeleteRows();
            KTMenu.createInstances();
        });
    }

    // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
    var handleSearchDatatable = function () {
        const filterSearch = document.querySelector(&#039;[data-kt-docs-table-filter=&quot;search&quot;]&#039;);
        filterSearch.addEventListener(&#039;keyup&#039;, function (e) {
            dt.search(e.target.value).draw();
        });
    }

    // Filter Datatable
    var handleFilterDatatable = () =&gt; {
        // Select filter options
        filterPayment = document.querySelectorAll(&#039;[data-kt-docs-table-filter=&quot;payment_type&quot;] [name=&quot;payment_type&quot;]&#039;);
        const filterButton = document.querySelector(&#039;[data-kt-docs-table-filter=&quot;filter&quot;]&#039;);

        // Filter datatable on submit
        filterButton.addEventListener(&#039;click&#039;, function () {
            // Get filter values
            let paymentValue = &#039;&#039;;

            // Get payment value
            filterPayment.forEach(r =&gt; {
                if (r.checked) {
                    paymentValue = r.value;
                }

                // Reset payment value if &quot;All&quot; is selected
                if (paymentValue === &#039;all&#039;) {
                    paymentValue = &#039;&#039;;
                }
            });

            // Filter datatable --- official docs reference: https://datatables.net/reference/api/search()
            dt.search(paymentValue).draw();
        });
    }

    // Delete customer
    var handleDeleteRows = () =&gt; {
        // Select all delete buttons
        const deleteButtons = document.querySelectorAll(&#039;[data-kt-docs-table-filter=&quot;delete_row&quot;]&#039;);

        deleteButtons.forEach(d =&gt; {
            // Delete button on click
            d.addEventListener(&#039;click&#039;, function (e) {
                e.preventDefault();

                // Select parent row
                const parent = e.target.closest(&#039;tr&#039;);

                // Get customer name
                const customerName = parent.querySelectorAll(&#039;td&#039;)[1].innerText;

                // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
                Swal.fire({
                    text: &quot;Are you sure you want to delete &quot; + customerName + &quot;?&quot;,
                    icon: &quot;warning&quot;,
                    showCancelButton: true,
                    buttonsStyling: false,
                    confirmButtonText: &quot;Yes, delete!&quot;,
                    cancelButtonText: &quot;No, cancel&quot;,
                    customClass: {
                        confirmButton: &quot;btn fw-bold btn-danger&quot;,
                        cancelButton: &quot;btn fw-bold btn-active-light-primary&quot;
                    }
                }).then(function (result) {
                    if (result.value) {
                        // Simulate delete request -- for demo purpose only
                        Swal.fire({
                            text: &quot;Deleting &quot; + customerName,
                            icon: &quot;info&quot;,
                            buttonsStyling: false,
                            showConfirmButton: false,
                            timer: 2000
                        }).then(function () {
                            Swal.fire({
                                text: &quot;You have deleted &quot; + customerName + &quot;!.&quot;,
                                icon: &quot;success&quot;,
                                buttonsStyling: false,
                                confirmButtonText: &quot;Ok, got it!&quot;,
                                customClass: {
                                    confirmButton: &quot;btn fw-bold btn-primary&quot;,
                                }
                            }).then(function () {
                                // delete row data from server and re-draw datatable
                                dt.draw();
                            });
                        });
                    } else if (result.dismiss === &#039;cancel&#039;) {
                        Swal.fire({
                            text: customerName + &quot; was not deleted.&quot;,
                            icon: &quot;error&quot;,
                            buttonsStyling: false,
                            confirmButtonText: &quot;Ok, got it!&quot;,
                            customClass: {
                                confirmButton: &quot;btn fw-bold btn-primary&quot;,
                            }
                        });
                    }
                });
            })
        });
    }

    // Reset Filter
    var handleResetForm = () =&gt; {
        // Select reset button
        const resetButton = document.querySelector(&#039;[data-kt-docs-table-filter=&quot;reset&quot;]&#039;);

        // Reset datatable
        resetButton.addEventListener(&#039;click&#039;, function () {
            // Reset payment type
            filterPayment[0].checked = true;

            // Reset datatable --- official docs reference: https://datatables.net/reference/api/search()
            dt.search(&#039;&#039;).draw();
        });
    }

    // Init toggle toolbar
    var initToggleToolbar = function () {
        // Toggle selected action toolbar
        // Select all checkboxes
        const container = document.querySelector(&#039;#kt_datatable_example_1&#039;);
        const checkboxes = container.querySelectorAll(&#039;[type=&quot;checkbox&quot;]&#039;);

        // Select elements
        const deleteSelected = document.querySelector(&#039;[data-kt-docs-table-select=&quot;delete_selected&quot;]&#039;);

        // Toggle delete selected toolbar
        checkboxes.forEach(c =&gt; {
            // Checkbox on click event
            c.addEventListener(&#039;click&#039;, function () {
                setTimeout(function () {
                    toggleToolbars();
                }, 50);
            });
        });

        // Deleted selected rows
        deleteSelected.addEventListener(&#039;click&#039;, function () {
            // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
            Swal.fire({
                text: &quot;Are you sure you want to delete selected customers?&quot;,
                icon: &quot;warning&quot;,
                showCancelButton: true,
                buttonsStyling: false,
                showLoaderOnConfirm: true,
                confirmButtonText: &quot;Yes, delete!&quot;,
                cancelButtonText: &quot;No, cancel&quot;,
                customClass: {
                    confirmButton: &quot;btn fw-bold btn-danger&quot;,
                    cancelButton: &quot;btn fw-bold btn-active-light-primary&quot;
                },
            }).then(function (result) {
                if (result.value) {
                    // Simulate delete request -- for demo purpose only
                    Swal.fire({
                        text: &quot;Deleting selected customers&quot;,
                        icon: &quot;info&quot;,
                        buttonsStyling: false,
                        showConfirmButton: false,
                        timer: 2000
                    }).then(function () {
                        Swal.fire({
                            text: &quot;You have deleted all selected customers!.&quot;,
                            icon: &quot;success&quot;,
                            buttonsStyling: false,
                            confirmButtonText: &quot;Ok, got it!&quot;,
                            customClass: {
                                confirmButton: &quot;btn fw-bold btn-primary&quot;,
                            }
                        }).then(function () {
                            // delete row data from server and re-draw datatable
                            dt.draw();
                        });

                        // Remove header checked box
                        const headerCheckbox = container.querySelectorAll(&#039;[type=&quot;checkbox&quot;]&#039;)[0];
                        headerCheckbox.checked = false;
                    });
                } else if (result.dismiss === &#039;cancel&#039;) {
                    Swal.fire({
                        text: &quot;Selected customers was not deleted.&quot;,
                        icon: &quot;error&quot;,
                        buttonsStyling: false,
                        confirmButtonText: &quot;Ok, got it!&quot;,
                        customClass: {
                            confirmButton: &quot;btn fw-bold btn-primary&quot;,
                        }
                    });
                }
            });
        });
    }

    // Toggle toolbars
    var toggleToolbars = function () {
        // Define variables
        const container = document.querySelector(&#039;#kt_datatable_example_1&#039;);
        const toolbarBase = document.querySelector(&#039;[data-kt-docs-table-toolbar=&quot;base&quot;]&#039;);
        const toolbarSelected = document.querySelector(&#039;[data-kt-docs-table-toolbar=&quot;selected&quot;]&#039;);
        const selectedCount = document.querySelector(&#039;[data-kt-docs-table-select=&quot;selected_count&quot;]&#039;);

        // Select refreshed checkbox DOM elements
        const allCheckboxes = container.querySelectorAll(&#039;tbody [type=&quot;checkbox&quot;]&#039;);

        // Detect checkboxes state &amp; count
        let checkedState = false;
        let count = 0;

        // Count checked boxes
        allCheckboxes.forEach(c =&gt; {
            if (c.checked) {
                checkedState = true;
                count++;
            }
        });

        // Toggle toolbars
        if (checkedState) {
            selectedCount.innerHTML = count;
            toolbarBase.classList.add(&#039;d-none&#039;);
            toolbarSelected.classList.remove(&#039;d-none&#039;);
        } else {
            toolbarBase.classList.remove(&#039;d-none&#039;);
            toolbarSelected.classList.add(&#039;d-none&#039;);
        }
    }

    // Public methods
    return {
        init: function () {
            initDatatable();
            handleSearchDatatable();
            initToggleToolbar();
            handleFilterDatatable();
            handleDeleteRows();
            handleResetForm();
        }
    }
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTDatatablesServerSide.init();
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e521fa035ab" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">[
    {
        &quot;RecordID&quot;: 1,
        &quot;OrderID&quot;: &quot;49349-387&quot;,
        &quot;Name&quot;: &quot;Dugald Beastall&quot;,
        &quot;Email&quot;: &quot;dbeastall0@ezinearticles.com&quot;,
        &quot;Address&quot;: &quot;88 Scott Crossing&quot;,
        &quot;City&quot;: &quot;Daze&quot;,
        &quot;Country&quot;: &quot;China&quot;,
        &quot;CountryCode&quot;: &quot;CN&quot;,
        &quot;Company&quot;: &quot;Hammes-Mitchell&quot;,
        &quot;Currency&quot;: &quot;CNY&quot;,
        &quot;Notes&quot;: &quot;mus vivamus vestibulum sagittis sapien cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus etiam vel augue&quot;,
        &quot;Department&quot;: &quot;Human Resources&quot;,
        &quot;Website&quot;: &quot;amazon.com&quot;,
        &quot;Latitude&quot;: 20.0429063,
        &quot;Longitude&quot;: 110.354037,
        &quot;Datetime&quot;: &quot;2020-04-10 05:48:26&quot;,
        &quot;TimeZone&quot;: &quot;Asia\/Chongqing&quot;,
        &quot;Money&quot;: &quot;$178460.50&quot;,
        &quot;Gender&quot;: &quot;M&quot;,
        &quot;CreditCardNumber&quot;: &quot;4682474206308&quot;,
        &quot;CreditCardType&quot;: &quot;visa&quot;
    },
    {
        &quot;RecordID&quot;: 2,
        &quot;OrderID&quot;: &quot;51808-213&quot;,
        &quot;Name&quot;: &quot;Aristotle Aicken&quot;,
        &quot;Email&quot;: &quot;aaicken1@friendfeed.com&quot;,
        &quot;Address&quot;: &quot;4 Merrick Court&quot;,
        &quot;City&quot;: &quot;Hobo&quot;,
        &quot;Country&quot;: &quot;Philippines&quot;,
        &quot;CountryCode&quot;: &quot;PH&quot;,
        &quot;Company&quot;: &quot;Schimmel, Towne and Torp&quot;,
        &quot;Currency&quot;: &quot;PHP&quot;,
        &quot;Notes&quot;: &quot;sed sagittis nam congue risus semper porta volutpat quam pede&quot;,
        &quot;Department&quot;: &quot;Sales&quot;,
        &quot;Website&quot;: &quot;answers.com&quot;,
        &quot;Latitude&quot;: 13.5085076,
        &quot;Longitude&quot;: 123.1804731,
        &quot;Datetime&quot;: &quot;2020-10-02 05:40:48&quot;,
        &quot;TimeZone&quot;: &quot;Asia\/Manila&quot;,
        &quot;Money&quot;: &quot;$1150804.73&quot;,
        &quot;Gender&quot;: &quot;M&quot;,
        &quot;CreditCardNumber&quot;: &quot;372301415416298&quot;,
        &quot;CreditCardType&quot;: &quot;americanexpress&quot;
    },
    {
        &quot;RecordID&quot;: 3,
        &quot;OrderID&quot;: &quot;58443-0015&quot;,
        &quot;Name&quot;: &quot;Yvonne Comiam&quot;,
        &quot;Email&quot;: &quot;ycomiam2@oracle.com&quot;,
        &quot;Address&quot;: &quot;5284 Fieldstone Parkway&quot;,
        &quot;City&quot;: &quot;Damu&quot;,
        &quot;Country&quot;: &quot;China&quot;,
        &quot;CountryCode&quot;: &quot;CN&quot;,
        &quot;Company&quot;: &quot;Padberg Group&quot;,
        &quot;Currency&quot;: &quot;CNY&quot;,
        &quot;Notes&quot;: &quot;luctus et ultrices posuere cubilia curae nulla dapibus dolor vel est donec odio justo sollicitudin ut suscipit a feugiat et&quot;,
        &quot;Department&quot;: &quot;Engineering&quot;,
        &quot;Website&quot;: &quot;ox.ac.uk&quot;,
        &quot;Latitude&quot;: 24.134518,
        &quot;Longitude&quot;: 111.485304,
        &quot;Datetime&quot;: &quot;2020-07-08 23:05:11&quot;,
        &quot;TimeZone&quot;: &quot;Asia\/Shanghai&quot;,
        &quot;Money&quot;: &quot;$54341.33&quot;,
        &quot;Gender&quot;: &quot;F&quot;,
        &quot;CreditCardNumber&quot;: &quot;4017956514996&quot;,
        &quot;CreditCardType&quot;: &quot;visa&quot;
    },
    {
        &quot;RecordID&quot;: 4,
        &quot;OrderID&quot;: &quot;49288-0189&quot;,
        &quot;Name&quot;: &quot;Benton Reynalds&quot;,
        &quot;Email&quot;: &quot;breynalds3@studiopress.com&quot;,
        &quot;Address&quot;: &quot;65026 Ruskin Lane&quot;,
        &quot;City&quot;: &quot;Gelap&quot;,
        &quot;Country&quot;: &quot;Indonesia&quot;,
        &quot;CountryCode&quot;: &quot;ID&quot;,
        &quot;Company&quot;: &quot;Koss and Sons&quot;,
        &quot;Currency&quot;: &quot;IDR&quot;,
        &quot;Notes&quot;: &quot;volutpat quam pede lobortis ligula sit amet eleifend pede libero quis orci nullam molestie nibh in&quot;,
        &quot;Department&quot;: &quot;Business Development&quot;,
        &quot;Website&quot;: &quot;dot.gov&quot;,
        &quot;Latitude&quot;: -6.9654201,
        &quot;Longitude&quot;: 112.2443628,
        &quot;Datetime&quot;: &quot;2020-11-24 22:01:00&quot;,
        &quot;TimeZone&quot;: &quot;Asia\/Jakarta&quot;,
        &quot;Money&quot;: &quot;$77709.51&quot;,
        &quot;Gender&quot;: &quot;M&quot;,
        &quot;CreditCardNumber&quot;: &quot;337941293027131&quot;,
        &quot;CreditCardType&quot;: &quot;americanexpress&quot;
    },
    {
        &quot;RecordID&quot;: 5,
        &quot;OrderID&quot;: &quot;10675-002&quot;,
        &quot;Name&quot;: &quot;Cody Drysdell&quot;,
        &quot;Email&quot;: &quot;cdrysdell4@youku.com&quot;,
        &quot;Address&quot;: &quot;80916 Dottie Hill&quot;,
        &quot;City&quot;: &quot;Ne\u1e96alim&quot;,
        &quot;Country&quot;: &quot;Israel&quot;,
        &quot;CountryCode&quot;: &quot;IL&quot;,
        &quot;Company&quot;: &quot;Boyer Group&quot;,
        &quot;Currency&quot;: &quot;ILS&quot;,
        &quot;Notes&quot;: &quot;maecenas ut massa quis augue luctus tincidunt nulla mollis molestie lorem quisque ut erat curabitur gravida nisi at nibh&quot;,
        &quot;Department&quot;: &quot;Training&quot;,
        &quot;Website&quot;: &quot;huffingtonpost.com&quot;,
        &quot;Latitude&quot;: 32.058597,
        &quot;Longitude&quot;: 34.9136,
        &quot;Datetime&quot;: &quot;2020-12-03 20:02:41&quot;,
        &quot;TimeZone&quot;: &quot;Asia\/Jerusalem&quot;,
        &quot;Money&quot;: &quot;$1045848.44&quot;,
        &quot;Gender&quot;: &quot;F&quot;,
        &quot;CreditCardNumber&quot;: &quot;372301498885559&quot;,
        &quot;CreditCardType&quot;: &quot;americanexpress&quot;
    },
    {
        &quot;RecordID&quot;: 6,
        &quot;OrderID&quot;: &quot;35356-028&quot;,
        &quot;Name&quot;: &quot;Sebastiano Mingard&quot;,
        &quot;Email&quot;: &quot;smingard5@wsj.com&quot;,
        &quot;Address&quot;: &quot;6121 Armistice Road&quot;,
        &quot;City&quot;: &quot;Starcevica&quot;,
        &quot;Country&quot;: &quot;Bosnia and Herzegovina&quot;,
        &quot;CountryCode&quot;: &quot;BA&quot;,
        &quot;Company&quot;: &quot;Kiehn-Runte&quot;,
        &quot;Currency&quot;: &quot;BAM&quot;,
        &quot;Notes&quot;: &quot;a odio in hac habitasse platea dictumst maecenas ut massa quis augue luctus tincidunt nulla mollis molestie lorem quisque ut&quot;,
        &quot;Department&quot;: &quot;Business Development&quot;,
        &quot;Website&quot;: &quot;cbsnews.com&quot;,
        &quot;Latitude&quot;: 44.7607693,
        &quot;Longitude&quot;: 17.2038547,
        &quot;Datetime&quot;: &quot;2020-07-05 07:12:56&quot;,
        &quot;TimeZone&quot;: &quot;Europe\/Sarajevo&quot;,
        &quot;Money&quot;: &quot;$703053.38&quot;,
        &quot;Gender&quot;: &quot;M&quot;,
        &quot;CreditCardNumber&quot;: &quot;4017956322929&quot;,
        &quot;CreditCardType&quot;: &quot;visa&quot;
    },
    {
        &quot;RecordID&quot;: 7,
        &quot;OrderID&quot;: &quot;54868-5792&quot;,
        &quot;Name&quot;: &quot;Nickie Debill&quot;,
        &quot;Email&quot;: &quot;ndebill6@weebly.com&quot;,
        &quot;Address&quot;: &quot;92202 Rutledge Avenue&quot;,
        &quot;City&quot;: &quot;Greenwood&quot;,
        &quot;Country&quot;: &quot;Canada&quot;,
        &quot;CountryCode&quot;: &quot;CA&quot;,
        &quot;Company&quot;: &quot;Wiza-Blanda&quot;,
        &quot;Currency&quot;: &quot;CAD&quot;,
        &quot;Notes&quot;: &quot;eros vestibulum ac est lacinia nisi venenatis tristique fusce congue diam&quot;,
        &quot;Department&quot;: &quot;Business Development&quot;,
        &quot;Website&quot;: &quot;printfriendly.com&quot;,
        &quot;Latitude&quot;: 44.98345,
        &quot;Longitude&quot;: -64.89879,
        &quot;Datetime&quot;: &quot;2020-01-29 04:28:02&quot;,
        &quot;TimeZone&quot;: &quot;America\/Moncton&quot;,
        &quot;Money&quot;: &quot;$564744.00&quot;,
        &quot;Gender&quot;: &quot;F&quot;,
        &quot;CreditCardNumber&quot;: &quot;337941218508546&quot;,
        &quot;CreditCardType&quot;: &quot;americanexpress&quot;
    },
    {
        &quot;RecordID&quot;: 8,
        &quot;OrderID&quot;: &quot;11822-0656&quot;,
        &quot;Name&quot;: &quot;Anstice Ygoe&quot;,
        &quot;Email&quot;: &quot;aygoe7@japanpost.jp&quot;,
        &quot;Address&quot;: &quot;6 Hollow Ridge Junction&quot;,
        &quot;City&quot;: &quot;Wushi&quot;,
        &quot;Country&quot;: &quot;China&quot;,
        &quot;CountryCode&quot;: &quot;CN&quot;,
        &quot;Company&quot;: &quot;Goodwin LLC&quot;,
        &quot;Currency&quot;: &quot;CNY&quot;,
        &quot;Notes&quot;: &quot;sit amet nunc viverra dapibus nulla suscipit ligula in lacus curabitur&quot;,
        &quot;Department&quot;: &quot;Legal&quot;,
        &quot;Website&quot;: &quot;netlog.com&quot;,
        &quot;Latitude&quot;: 31.491169,
        &quot;Longitude&quot;: 120.31191,
        &quot;Datetime&quot;: &quot;2020-01-21 06:16:04&quot;,
        &quot;TimeZone&quot;: &quot;Asia\/Chongqing&quot;,
        &quot;Money&quot;: &quot;$1099551.54&quot;,
        &quot;Gender&quot;: &quot;F&quot;,
        &quot;CreditCardNumber&quot;: &quot;5438780052553151&quot;,
        &quot;CreditCardType&quot;: &quot;mastercard&quot;
    },
    {
        &quot;RecordID&quot;: 9,
        &quot;OrderID&quot;: &quot;60681-3006&quot;,
        &quot;Name&quot;: &quot;Iseabal Bottomley&quot;,
        &quot;Email&quot;: &quot;ibottomley8@reverbnation.com&quot;,
        &quot;Address&quot;: &quot;225 Birchwood Junction&quot;,
        &quot;City&quot;: &quot;Timbuktu&quot;,
        &quot;Country&quot;: &quot;Mali&quot;,
        &quot;CountryCode&quot;: &quot;ML&quot;,
        &quot;Company&quot;: &quot;Stark-Mills&quot;,
        &quot;Currency&quot;: &quot;XOF&quot;,
        &quot;Notes&quot;: &quot;varius ut blandit non interdum in ante vestibulum ante ipsum primis in faucibus orci luctus et&quot;,
        &quot;Department&quot;: &quot;Human Resources&quot;,
        &quot;Website&quot;: &quot;themeforest.net&quot;,
        &quot;Latitude&quot;: 16.7665887,
        &quot;Longitude&quot;: -3.0025615,
        &quot;Datetime&quot;: &quot;2020-07-02 19:36:35&quot;,
        &quot;TimeZone&quot;: &quot;Africa\/Bamako&quot;,
        &quot;Money&quot;: &quot;$137510.03&quot;,
        &quot;Gender&quot;: &quot;F&quot;,
        &quot;CreditCardNumber&quot;: &quot;5358043968138476&quot;,
        &quot;CreditCardType&quot;: &quot;mastercard&quot;
    },
    {
        &quot;RecordID&quot;: 10,
        &quot;OrderID&quot;: &quot;75847-1501&quot;,
        &quot;Name&quot;: &quot;Cobby McWhirter&quot;,
        &quot;Email&quot;: &quot;cmcwhirter9@goo.ne.jp&quot;,
        &quot;Address&quot;: &quot;50557 Hudson Court&quot;,
        &quot;City&quot;: &quot;Villa Gesell&quot;,
        &quot;Country&quot;: &quot;Argentina&quot;,
        &quot;CountryCode&quot;: &quot;AR&quot;,
        &quot;Company&quot;: &quot;Bruen, Kutch and Bartell&quot;,
        &quot;Currency&quot;: &quot;ARS&quot;,
        &quot;Notes&quot;: &quot;suscipit nulla elit ac nulla sed vel enim sit amet&quot;,
        &quot;Department&quot;: &quot;Engineering&quot;,
        &quot;Website&quot;: &quot;vimeo.com&quot;,
        &quot;Latitude&quot;: -34.7368519,
        &quot;Longitude&quot;: -58.5019467,
        &quot;Datetime&quot;: &quot;2020-11-18 00:32:20&quot;,
        &quot;TimeZone&quot;: &quot;America\/Argentina\/Buenos_Aires&quot;,
        &quot;Money&quot;: &quot;$189903.13&quot;,
        &quot;Gender&quot;: &quot;M&quot;,
        &quot;CreditCardNumber&quot;: &quot;5339559580646442&quot;,
        &quot;CreditCardType&quot;: &quot;mastercard&quot;
    }
]</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e521fa035ac" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-php" style="height:400px"><code class="language-php">&lt;?php
include &#039;class-list-util.php&#039;;

class DataTableApi
{
    public $columnsDefault = [
        &#039;RecordID&#039;         =&gt; true,
        &#039;OrderID&#039;          =&gt; true,
        &#039;Name&#039;             =&gt; true,
        &#039;Country&#039;          =&gt; true,
        &#039;CountryCode&#039;      =&gt; true,
        &#039;City&#039;             =&gt; true,
        &#039;Company&#039;          =&gt; true,
        &#039;Address&#039;          =&gt; true,
        &#039;Email&#039;            =&gt; true,
        &#039;Currency&#039;         =&gt; true,
        &#039;Notes&#039;            =&gt; true,
        &#039;Department&#039;       =&gt; true,
        &#039;Website&#039;          =&gt; true,
        &#039;Latitude&#039;         =&gt; true,
        &#039;Longitude&#039;        =&gt; true,
        &#039;Datetime&#039;         =&gt; true,
        &#039;TimeZone&#039;         =&gt; true,
        &#039;Money&#039;            =&gt; true,
        &#039;Gender&#039;           =&gt; true,
        &#039;CreditCardNumber&#039; =&gt; true,
        &#039;CreditCardType&#039;   =&gt; true,
    ];

    public function __construct()
    {
        header(&#039;Content-Type: application/json&#039;);
        header(&#039;Access-Control-Allow-Origin: *&#039;);
        header(&#039;Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS&#039;);
        header(&#039;Access-Control-Allow-Headers: *&#039;);
    }

    public function init()
    {
        if (isset($_REQUEST[&#039;columnsDef&#039;]) &amp;&amp; is_array($_REQUEST[&#039;columnsDef&#039;])) {
            foreach ($_REQUEST[&#039;columnsDef&#039;] as $field) {
                $columnsDefault[$field] = true;
            }
        }

        // get all raw data
        $alldata = $this-&gt;getJsonDecode();

        $data = [];
        // internal use; filter selected columns only from raw data
        foreach ($alldata as $d) {
            $data[] = $this-&gt;filterArray($d, $this-&gt;columnsDefault);
        }

        // filter by general search keyword
        if (isset($_REQUEST[&#039;search&#039;][&#039;value&#039;]) &amp;&amp; $_REQUEST[&#039;search&#039;][&#039;value&#039;]) {
            $data = $this-&gt;arraySearch($data, $_REQUEST[&#039;search&#039;][&#039;value&#039;]);
        }

        // count data
        $totalRecords = $totalDisplay = count($data);

        // sort
        if (isset($_REQUEST[&#039;order&#039;][0][&#039;column&#039;]) &amp;&amp; $_REQUEST[&#039;order&#039;][0][&#039;dir&#039;]) {
            $column = $_REQUEST[&#039;order&#039;][0][&#039;column&#039;];
            $dir    = $_REQUEST[&#039;order&#039;][0][&#039;dir&#039;];
            usort($data, function ($a, $b) use ($column, $dir) {
                $a = array_slice($a, $column, 1);
                $b = array_slice($b, $column, 1);
                $a = array_pop($a);
                $b = array_pop($b);

                if ($dir === &#039;asc&#039;) {
                    return $a &gt; $b ? 1 : -1;
                }

                return $a &lt; $b ? 1 : -1;
            });
        }

        // pagination length
        if (isset($_REQUEST[&#039;length&#039;])) {
            $data = array_splice($data, $_REQUEST[&#039;start&#039;], $_REQUEST[&#039;length&#039;]);
        }

        $data = $this-&gt;reformat($data);

        $result = [
            &#039;recordsTotal&#039;    =&gt; $totalRecords,
            &#039;recordsFiltered&#039; =&gt; $totalDisplay,
            &#039;data&#039;            =&gt; $data,
        ];

        echo json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }

    public function filterArray($array, $allowed = [])
    {
        return array_filter(
            $array,
            function ($val, $key) use ($allowed) { // N.b. $val, $key not $key, $val
                return isset($allowed[$key]) &amp;&amp; ($allowed[$key] === true || $allowed[$key] === $val);
            },
            ARRAY_FILTER_USE_BOTH
        );
    }

    public function filterKeyword($data, $search, $field = &#039;&#039;)
    {
        $filter = &#039;&#039;;
        if (isset($search[&#039;value&#039;])) {
            $filter = $search[&#039;value&#039;];
        }
        if (!empty($filter)) {
            if (!empty($field)) {
                if (strpos(strtolower($field), &#039;date&#039;) !== false) {
                    // filter by date range
                    $data = $this-&gt;filterByDateRange($data, $filter, $field);
                } else {
                    // filter by column
                    $data = array_filter($data, function ($a) use ($field, $filter) {
                        return (boolean) preg_match(&quot;/$filter/i&quot;, $a[$field]);
                    });
                }

            } else {
                // general filter
                $data = array_filter($data, function ($a) use ($filter) {
                    return (boolean) preg_grep(&quot;/$filter/i&quot;, (array) $a);
                });
            }
        }

        return $data;
    }

    public function filterByDateRange($data, $filter, $field)
    {
        // filter by range
        if (!empty($range = array_filter(explode(&#039;|&#039;, $filter)))) {
            $filter = $range;
        }

        if (is_array($filter)) {
            foreach ($filter as &amp;$date) {
                // hardcoded date format
                $date = date_create_from_format(&#039;m/d/Y&#039;, stripcslashes($date));
            }
            // filter by date range
            $data = array_filter($data, function ($a) use ($field, $filter) {
                // hardcoded date format
                $current = date_create_from_format(&#039;m/d/Y&#039;, $a[$field]);
                $from    = $filter[0];
                $to      = $filter[1];
                if ($from &lt;= $current &amp;&amp; $to &gt;= $current) {
                    return true;
                }

                return false;
            });
        }

        return $data;
    }

    public function getJsonDecode(): mixed
    {
        return json_decode(file_get_contents(&#039;customers.json&#039;), true);
    }

    /**
     * @param  array  $data
     *
     * @return array
     */
    public function reformat($data): array
    {
        return array_map(function ($item) {
            // hide credit card number
            $item[&#039;CreditCardNumber&#039;] = &#039;**** &#039;.substr($item[&#039;CreditCardNumber&#039;], -4);

            $item[&#039;CreditCardType&#039;] = $item[&#039;CreditCardType&#039;] === &#039;americanexpress&#039; ? &#039;american-express&#039; : $item[&#039;CreditCardType&#039;];

            // reformat datetime
            $item[&#039;Datetime&#039;] = date(&#039;d M Y, g:i a&#039;, strtotime($item[&#039;Datetime&#039;]));

            return $item;
        }, $data);
    }

    public function arraySearch($array, $keyword)
    {
        return array_filter($array, function ($a) use ($keyword) {
            return (boolean) preg_grep(&quot;/$keyword/i&quot;, (array) $a);
        });
    }

}

$api = new DataTableApi;
$api-&gt;init();</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e521fa035ad" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-php" style="height:400px"><code class="language-php">&lt;?php
/**
 * class-list-util.php
 *
 * List utility class
 */

/**
 * List utility.
 *
 * Utility class to handle operations on an array of objects.
 */
class List_Util
{
    /**
     * The input array.
     *
     * @access private
     * @var array
     */
    private $input = array();

    /**
     * The output array.
     *
     * @access private
     * @var array
     */
    private $output = array();

    /**
     * Temporary arguments for sorting.
     *
     * @access private
     * @var array
     */
    private $orderby = array();

    /**
     * Constructor.
     *
     * Sets the input array.
     *
     *
     * @param  array  $input  Array to perform operations on.
     */
    public function __construct($input)
    {
        $this-&gt;output = $this-&gt;input = $input;
    }

    /**
     * Returns the original input array.
     *
     * @access public
     *
     * @return array The input array.
     */
    public function get_input()
    {
        return $this-&gt;input;
    }

    /**
     * Returns the output array.
     *
     * @access public
     *
     * @return array The output array.
     */
    public function get_output()
    {
        return $this-&gt;output;
    }

    /**
     * Filters the list, based on a set of key =&gt; value arguments.
     *
     *
     * @param  array  $args  Optional. An array of key =&gt; value arguments to match
     *                         against each object. Default empty array.
     * @param  string  $operator  Optional. The logical operation to perform. &#039;AND&#039; means
     *                         all elements from the array must match. &#039;OR&#039; means only
     *                         one element needs to match. &#039;NOT&#039; means no elements may
     *                         match. Default &#039;AND&#039;.
     *
     * @return array Array of found values.
     */
    public function filter($args = array(), $operator = &#039;AND&#039;)
    {
        if (empty($args)) {
            return $this-&gt;output;
        }

        $operator = strtoupper($operator);

        if (!in_array($operator, array(&#039;AND&#039;, &#039;OR&#039;, &#039;NOT&#039;), true)) {
            return array();
        }

        $count    = count($args);
        $filtered = array();

        foreach ($this-&gt;output as $key =&gt; $obj) {
            $to_match = (array) $obj;

            $matched = 0;
            foreach ($args as $m_key =&gt; $m_value) {
                if (array_key_exists($m_key, $to_match) &amp;&amp; $m_value == $to_match[$m_key]) {
                    $matched++;
                }
            }

            if (
                (&#039;AND&#039; == $operator &amp;&amp; $matched == $count) ||
                (&#039;OR&#039; == $operator &amp;&amp; $matched &gt; 0) ||
                (&#039;NOT&#039; == $operator &amp;&amp; 0 == $matched)
            ) {
                $filtered[$key] = $obj;
            }
        }

        $this-&gt;output = $filtered;

        return $this-&gt;output;
    }

    /**
     * Plucks a certain field out of each object in the list.
     *
     * This has the same functionality and prototype of
     * array_column() (PHP 5.5) but also supports objects.
     *
     *
     * @param  int|string  $field  Field from the object to place instead of the entire object
     * @param  int|string  $index_key  Optional. Field from the object to use as keys for the new array.
     *                              Default null.
     *
     * @return array Array of found values. If `$index_key` is set, an array of found values with keys
     *               corresponding to `$index_key`. If `$index_key` is null, array keys from the original
     *               `$list` will be preserved in the results.
     */
    public function pluck($field, $index_key = null)
    {
        if (!$index_key) {
            /*
             * This is simple. Could at some point wrap array_column()
             * if we knew we had an array of arrays.
             */
            foreach ($this-&gt;output as $key =&gt; $value) {
                if (is_object($value)) {
                    $this-&gt;output[$key] = $value-&gt;$field;
                } else {
                    $this-&gt;output[$key] = $value[$field];
                }
            }

            return $this-&gt;output;
        }

        /*
         * When index_key is not set for a particular item, push the value
         * to the end of the stack. This is how array_column() behaves.
         */
        $newlist = array();
        foreach ($this-&gt;output as $value) {
            if (is_object($value)) {
                if (isset($value-&gt;$index_key)) {
                    $newlist[$value-&gt;$index_key] = $value-&gt;$field;
                } else {
                    $newlist[] = $value-&gt;$field;
                }
            } else {
                if (isset($value[$index_key])) {
                    $newlist[$value[$index_key]] = $value[$field];
                } else {
                    $newlist[] = $value[$field];
                }
            }
        }

        $this-&gt;output = $newlist;

        return $this-&gt;output;
    }

    /**
     * Sorts the list, based on one or more orderby arguments.
     *
     *
     * @param  string|array  $orderby  Optional. Either the field name to order by or an array
     *                                    of multiple orderby fields as $orderby =&gt; $order.
     * @param  string  $order  Optional. Either &#039;ASC&#039; or &#039;DESC&#039;. Only used if $orderby
     *                                    is a string.
     * @param  bool  $preserve_keys  Optional. Whether to preserve keys. Default false.
     *
     * @return array The sorted array.
     */
    public function sort($orderby = array(), $order = &#039;ASC&#039;, $preserve_keys = false)
    {
        if (empty($orderby)) {
            return $this-&gt;output;
        }

        if (is_string($orderby)) {
            $orderby = array($orderby =&gt; $order);
        }

        foreach ($orderby as $field =&gt; $direction) {
            $orderby[$field] = &#039;DESC&#039; === strtoupper($direction) ? &#039;DESC&#039; : &#039;ASC&#039;;
        }

        $this-&gt;orderby = $orderby;

        if ($preserve_keys) {
            uasort($this-&gt;output, array($this, &#039;sort_callback&#039;));
        } else {
            usort($this-&gt;output, array($this, &#039;sort_callback&#039;));
        }

        $this-&gt;orderby = array();

        return $this-&gt;output;
    }

    /**
     * Callback to sort the list by specific fields.
     *
     * @access private
     *
     * @param  object|array  $a  One object to compare.
     * @param  object|array  $b  The other object to compare.
     *
     * @return int 0 if both objects equal. -1 if second object should come first, 1 otherwise.
     * @see    List_Util::sort()
     *
     */
    private function sort_callback($a, $b)
    {
        if (empty($this-&gt;orderby)) {
            return 0;
        }

        $a = (array) $a;
        $b = (array) $b;

        foreach ($this-&gt;orderby as $field =&gt; $direction) {
            if (!isset($a[$field]) || !isset($b[$field])) {
                continue;
            }

            if ($a[$field] == $b[$field]) {
                continue;
            }

            $results = &#039;DESC&#039; === $direction ? array(1, -1) : array(-1, 1);

            if (is_numeric($a[$field]) &amp;&amp; is_numeric($b[$field])) {
                return ($a[$field] &lt; $b[$field]) ? $results[0] : $results[1];
            }

            return 0 &gt; strcmp($a[$field], $b[$field]) ? $results[0] : $results[1];
        }

        return 0;
    }
}

function list_filter($list, $args = array(), $operator = &#039;AND&#039;)
{
    if (!is_array($list)) {
        return array();
    }

    $util = new List_Util($list);

    return $util-&gt;filter($args, $operator);
}</code></pre>
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
    <script src="{{ asset('assets/js/custom/documentation/general/datatables/server-side.js') }}"></script>
    <!--end::Custom Javascript-->
@endsection


