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
                        <h1 class="anchor fw-bold mb-5" id="add-rows" data-kt-scroll-offset="50">
                            <a href="#add-rows"></a>

                            Add Rows
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            New rows can be added to a DataTable using the <code>row.add()</code> API method. Simply call
                            the API function with the data for the new row (be it an array or object).
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="my-5">
                            <div class="pb-10">
                                <button class="btn btn-primary" id="kt_datatable_example_1_addrow">Add New Row</button>
                            </div>

                            <table id="kt_datatable_example_1" class="table table-striped table-row-bordered gy-5 gs-7">
                                <thead>
                                    <tr class="fw-semibold fs-6 text-gray-800">
                                        <th>Column 1</th>
                                        <th>Column 2</th>
                                        <th>Column 3</th>
                                        <th>Column 4</th>
                                        <th>Column 5</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Column 1</th>
                                        <th>Column 2</th>
                                        <th>Column 3</th>
                                        <th>Column 4</th>
                                        <th>Column 5</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e5237b5118a" role="tab">HTML</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e5237b5118f" role="tab">JAVASCRIPT</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5237b5118a" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;div class=&quot;pb-10&quot;&gt;
    &lt;button class=&quot;btn btn-primary&quot; id=&quot;kt_datatable_example_1_addrow&quot;&gt;Add New Row&lt;/button&gt;
&lt;/div&gt;
&lt;table id=&quot;kt_datatable_example_1&quot; class=&quot;table table-striped table-row-bordered gy-5 gs-7&quot;&gt;
    &lt;thead&gt;
        &lt;tr class=&quot;fw-semibold fs-6 text-gray-800&quot;&gt;
            &lt;th&gt;Column 1&lt;/th&gt;
            &lt;th&gt;Column 2&lt;/th&gt;
            &lt;th&gt;Column 3&lt;/th&gt;
            &lt;th&gt;Column 4&lt;/th&gt;
            &lt;th&gt;Column 5&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tfoot&gt;
        &lt;tr&gt;
            &lt;th&gt;Column 1&lt;/th&gt;
            &lt;th&gt;Column 2&lt;/th&gt;
            &lt;th&gt;Column 3&lt;/th&gt;
            &lt;th&gt;Column 4&lt;/th&gt;
            &lt;th&gt;Column 5&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/tfoot&gt;
&lt;/table&gt;</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e5237b5118f" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript"><code class="language-javascript">var t = $(&quot;#kt_datatable_example_1&quot;).DataTable();
var counter = 1;

$(&quot;#kt_datatable_example_1_addrow&quot;).on(&quot;click&quot;, function() {
    t.row.add([
        counter + &quot;.1&quot;,
        counter + &quot;.2&quot;,
        counter + &quot;.3&quot;,
        counter + &quot;.4&quot;,
        counter + &quot;.5&quot;,
    ]).draw(false);

    counter++;
});

// Automatically add a first row of data
$(&quot;#kt_datatable_example_1_addrow&quot;).click();</code></pre>
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
                        <h1 class="anchor fw-bold mb-5" id="form-inputs" data-kt-scroll-offset="50">
                            <a href="#form-inputs"></a>

                            Form Inputs
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            In order to perform paging, ordering, searching etc, DataTables can remove rows and cells from
                            the document
                            (i.e. those rows / cells which are not needed are not inserted into the document).
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="my-5">
                            <div class="pb-10">
                                <button class="btn btn-primary" id="kt_datatable_example_2_submit">Submit Form</button>
                            </div>

                            <table id="kt_datatable_example_2" class="table table-row-bordered table-row-dashed gy-5">
                                <thead>
                                    <tr class="fw-semibold fs-6 text-gray-800">
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td><input type="text" class="form-control  form-control-solid" id="row-1-age"
                                                name="row-1-age" value="61" /></td>
                                        <td><input type="text" class="form-control  form-control-solid"
                                                id="row-1-position" name="row-1-position" value="System Architect" /></td>
                                        <td>
                                            <select class="form-select  form-select-solid" size="1" id="row-1-office"
                                                name="row-1-office">
                                                <option value="Edinburgh" selected="selected">
                                                    Edinburgh
                                                </option>
                                                <option value="London">
                                                    London
                                                </option>
                                                <option value="New York">
                                                    New York
                                                </option>
                                                <option value="San Francisco">
                                                    San Francisco
                                                </option>
                                                <option value="Tokyo">
                                                    Tokyo
                                                </option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td><input type="text" class="form-control  form-control-solid" id="row-2-age"
                                                name="row-2-age" value="63" /></td>
                                        <td><input type="text" class="form-control  form-control-solid"
                                                id="row-2-position" name="row-2-position" value="Accountant" /></td>
                                        <td>
                                            <select class="form-select  form-select-solid" size="1" id="row-2-office"
                                                name="row-2-office">
                                                <option value="Edinburgh">
                                                    Edinburgh
                                                </option>
                                                <option value="London">
                                                    London
                                                </option>
                                                <option value="New York">
                                                    New York
                                                </option>
                                                <option value="San Francisco">
                                                    San Francisco
                                                </option>
                                                <option value="Tokyo" selected="selected">
                                                    Tokyo
                                                </option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td><input type="text" class="form-control  form-control-solid" id="row-3-age"
                                                name="row-3-age" value="66" /></td>
                                        <td><input type="text" class="form-control  form-control-solid"
                                                id="row-3-position" name="row-3-position"
                                                value="Junior Technical Author" /></td>
                                        <td>
                                            <select class="form-select  form-select-solid" size="1"
                                                id="row-3-office" name="row-3-office">
                                                <option value="Edinburgh">
                                                    Edinburgh
                                                </option>
                                                <option value="London">
                                                    London
                                                </option>
                                                <option value="New York">
                                                    New York
                                                </option>
                                                <option value="San Francisco" selected="selected">
                                                    San Francisco
                                                </option>
                                                <option value="Tokyo">
                                                    Tokyo
                                                </option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td><input type="text" class="form-control  form-control-solid" id="row-4-age"
                                                name="row-4-age" value="22" /></td>
                                        <td><input type="text" class="form-control  form-control-solid"
                                                id="row-4-position" name="row-4-position"
                                                value="Senior Javascript Developer" /></td>
                                        <td>
                                            <select class="form-select  form-select-solid" size="1"
                                                id="row-4-office" name="row-4-office">
                                                <option value="Edinburgh" selected="selected">
                                                    Edinburgh
                                                </option>
                                                <option value="London">
                                                    London
                                                </option>
                                                <option value="New York">
                                                    New York
                                                </option>
                                                <option value="San Francisco">
                                                    San Francisco
                                                </option>
                                                <option value="Tokyo">
                                                    Tokyo
                                                </option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Airi Satou</td>
                                        <td><input type="text" class="form-control  form-control-solid" id="row-5-age"
                                                name="row-5-age" value="33" /></td>
                                        <td><input type="text" class="form-control  form-control-solid"
                                                id="row-5-position" name="row-5-position" value="Accountant" /></td>
                                        <td>
                                            <select class="form-select  form-select-solid" size="1"
                                                id="row-5-office" name="row-5-office">
                                                <option value="Edinburgh">
                                                    Edinburgh
                                                </option>
                                                <option value="London">
                                                    London
                                                </option>
                                                <option value="New York">
                                                    New York
                                                </option>
                                                <option value="San Francisco">
                                                    San Francisco
                                                </option>
                                                <option value="Tokyo" selected="selected">
                                                    Tokyo
                                                </option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Brielle Williamson</td>
                                        <td><input type="text" class="form-control  form-control-solid" id="row-6-age"
                                                name="row-6-age" value="61" /></td>
                                        <td><input type="text" class="form-control  form-control-solid"
                                                id="row-6-position" name="row-6-position"
                                                value="Integration Specialist" /></td>
                                        <td>
                                            <select class="form-select  form-select-solid" size="1"
                                                id="row-6-office" name="row-6-office">
                                                <option value="Edinburgh">
                                                    Edinburgh
                                                </option>
                                                <option value="London">
                                                    London
                                                </option>
                                                <option value="New York" selected="selected">
                                                    New York
                                                </option>
                                                <option value="San Francisco">
                                                    San Francisco
                                                </option>
                                                <option value="Tokyo">
                                                    Tokyo
                                                </option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Herrod Chandler</td>
                                        <td><input type="text" class="form-control  form-control-solid" id="row-7-age"
                                                name="row-7-age" value="59" /></td>
                                        <td><input type="text" class="form-control  form-control-solid"
                                                id="row-7-position" name="row-7-position" value="Sales Assistant" /></td>
                                        <td>
                                            <select class="form-select  form-select-solid" size="1"
                                                id="row-7-office" name="row-7-office">
                                                <option value="Edinburgh">
                                                    Edinburgh
                                                </option>
                                                <option value="London">
                                                    London
                                                </option>
                                                <option value="New York">
                                                    New York
                                                </option>
                                                <option value="San Francisco" selected="selected">
                                                    San Francisco
                                                </option>
                                                <option value="Tokyo">
                                                    Tokyo
                                                </option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Rhona Davidson</td>
                                        <td><input type="text" class="form-control  form-control-solid" id="row-8-age"
                                                name="row-8-age" value="55" /></td>
                                        <td><input type="text" class="form-control  form-control-solid"
                                                id="row-8-position" name="row-8-position"
                                                value="Integration Specialist" /></td>
                                        <td>
                                            <select class="form-select  form-select-solid" size="1"
                                                id="row-8-office" name="row-8-office">
                                                <option value="Edinburgh">
                                                    Edinburgh
                                                </option>
                                                <option value="London">
                                                    London
                                                </option>
                                                <option value="New York">
                                                    New York
                                                </option>
                                                <option value="San Francisco">
                                                    San Francisco
                                                </option>
                                                <option value="Tokyo" selected="selected">
                                                    Tokyo
                                                </option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Colleen Hurst</td>
                                        <td><input type="text" class="form-control  form-control-solid" id="row-9-age"
                                                name="row-9-age" value="39" /></td>
                                        <td><input type="text" class="form-control  form-control-solid"
                                                id="row-9-position" name="row-9-position" value="Javascript Developer" />
                                        </td>
                                        <td>
                                            <select class="form-select  form-select-solid" size="1"
                                                id="row-9-office" name="row-9-office">
                                                <option value="Edinburgh">
                                                    Edinburgh
                                                </option>
                                                <option value="London">
                                                    London
                                                </option>
                                                <option value="New York">
                                                    New York
                                                </option>
                                                <option value="San Francisco" selected="selected">
                                                    San Francisco
                                                </option>
                                                <option value="Tokyo">
                                                    Tokyo
                                                </option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sonya Frost</td>
                                        <td><input type="text" class="form-control  form-control-solid"
                                                id="row-10-age" name="row-10-age" value="23" /></td>
                                        <td><input type="text" class="form-control  form-control-solid"
                                                id="row-10-position" name="row-10-position" value="Software Engineer" />
                                        </td>
                                        <td>
                                            <select class="form-select  form-select-solid" size="1"
                                                id="row-10-office" name="row-10-office">
                                                <option value="Edinburgh" selected="selected">
                                                    Edinburgh
                                                </option>
                                                <option value="London">
                                                    London
                                                </option>
                                                <option value="New York">
                                                    New York
                                                </option>
                                                <option value="San Francisco">
                                                    San Francisco
                                                </option>
                                                <option value="Tokyo">
                                                    Tokyo
                                                </option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jena Gaines</td>
                                        <td><input type="text" class="form-control  form-control-solid"
                                                id="row-11-age" name="row-11-age" value="30" /></td>
                                        <td><input type="text" class="form-control  form-control-solid"
                                                id="row-11-position" name="row-11-position" value="Office Manager" />
                                        </td>
                                        <td>
                                            <select class="form-select  form-select-solid" size="1"
                                                id="row-11-office" name="row-11-office">
                                                <option value="Edinburgh">
                                                    Edinburgh
                                                </option>
                                                <option value="London" selected="selected">
                                                    London
                                                </option>
                                                <option value="New York">
                                                    New York
                                                </option>
                                                <option value="San Francisco">
                                                    San Francisco
                                                </option>
                                                <option value="Tokyo">
                                                    Tokyo
                                                </option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Quinn Flynn</td>
                                        <td><input type="text" class="form-control  form-control-solid"
                                                id="row-12-age" name="row-12-age" value="22" /></td>
                                        <td><input type="text" class="form-control  form-control-solid"
                                                id="row-12-position" name="row-12-position" value="Support Lead" /></td>
                                        <td>
                                            <select class="form-select  form-select-solid" size="1"
                                                id="row-12-office" name="row-12-office">
                                                <option value="Edinburgh" selected="selected">
                                                    Edinburgh
                                                </option>
                                                <option value="London">
                                                    London
                                                </option>
                                                <option value="New York">
                                                    New York
                                                </option>
                                                <option value="San Francisco">
                                                    San Francisco
                                                </option>
                                                <option value="Tokyo">
                                                    Tokyo
                                                </option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Charde Marshall</td>
                                        <td><input type="text" class="form-control  form-control-solid"
                                                id="row-13-age" name="row-13-age" value="36" /></td>
                                        <td><input type="text" class="form-control  form-control-solid"
                                                id="row-13-position" name="row-13-position" value="Regional Director" />
                                        </td>
                                        <td>
                                            <select class="form-select  form-select-solid" size="1"
                                                id="row-13-office" name="row-13-office">
                                                <option value="Edinburgh">
                                                    Edinburgh
                                                </option>
                                                <option value="London">
                                                    London
                                                </option>
                                                <option value="New York">
                                                    New York
                                                </option>
                                                <option value="San Francisco" selected="selected">
                                                    San Francisco
                                                </option>
                                                <option value="Tokyo">
                                                    Tokyo
                                                </option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Haley Kennedy</td>
                                        <td><input type="text" class="form-control  form-control-solid"
                                                id="row-14-age" name="row-14-age" value="43" /></td>
                                        <td><input type="text" class="form-control  form-control-solid"
                                                id="row-14-position" name="row-14-position"
                                                value="Senior Marketing Designer" /></td>
                                        <td>
                                            <select class="form-select  form-select-solid" size="1"
                                                id="row-14-office" name="row-14-office">
                                                <option value="Edinburgh">
                                                    Edinburgh
                                                </option>
                                                <option value="London" selected="selected">
                                                    London
                                                </option>
                                                <option value="New York">
                                                    New York
                                                </option>
                                                <option value="San Francisco">
                                                    San Francisco
                                                </option>
                                                <option value="Tokyo">
                                                    Tokyo
                                                </option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tatyana Fitzpatrick</td>
                                        <td><input type="text" class="form-control  form-control-solid"
                                                id="row-15-age" name="row-15-age" value="19" /></td>
                                        <td><input type="text" class="form-control  form-control-solid"
                                                id="row-15-position" name="row-15-position" value="Regional Director" />
                                        </td>
                                        <td>
                                            <select class="form-select  form-select-solid" size="1"
                                                id="row-15-office" name="row-15-office">
                                                <option value="Edinburgh">
                                                    Edinburgh
                                                </option>
                                                <option value="London" selected="selected">
                                                    London
                                                </option>
                                                <option value="New York">
                                                    New York
                                                </option>
                                                <option value="San Francisco">
                                                    San Francisco
                                                </option>
                                                <option value="Tokyo">
                                                    Tokyo
                                                </option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Michael Silva</td>
                                        <td><input type="text" class="form-control  form-control-solid"
                                                id="row-16-age" name="row-16-age" value="66" /></td>
                                        <td><input type="text" class="form-control  form-control-solid"
                                                id="row-16-position" name="row-16-position" value="Marketing Designer" />
                                        </td>
                                        <td>
                                            <select class="form-select  form-select-solid" size="1"
                                                id="row-16-office" name="row-16-office">
                                                <option value="Edinburgh">
                                                    Edinburgh
                                                </option>
                                                <option value="London" selected="selected">
                                                    London
                                                </option>
                                                <option value="New York">
                                                    New York
                                                </option>
                                                <option value="San Francisco">
                                                    San Francisco
                                                </option>
                                                <option value="Tokyo">
                                                    Tokyo
                                                </option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Paul Byrd</td>
                                        <td><input type="text" class="form-control  form-control-solid"
                                                id="row-17-age" name="row-17-age" value="64" /></td>
                                        <td><input type="text" class="form-control  form-control-solid"
                                                id="row-17-position" name="row-17-position"
                                                value="Chief Financial Officer (CFO)" /></td>
                                        <td>
                                            <select class="form-select  form-select-solid" size="1"
                                                id="row-17-office" name="row-17-office">
                                                <option value="Edinburgh">
                                                    Edinburgh
                                                </option>
                                                <option value="London">
                                                    London
                                                </option>
                                                <option value="New York" selected="selected">
                                                    New York
                                                </option>
                                                <option value="San Francisco">
                                                    San Francisco
                                                </option>
                                                <option value="Tokyo">
                                                    Tokyo
                                                </option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Gloria Little</td>
                                        <td><input type="text" class="form-control  form-control-solid"
                                                id="row-18-age" name="row-18-age" value="59" /></td>
                                        <td><input type="text" class="form-control  form-control-solid"
                                                id="row-18-position" name="row-18-position"
                                                value="Systems Administrator" /></td>
                                        <td>
                                            <select class="form-select  form-select-solid" size="1"
                                                id="row-18-office" name="row-18-office">
                                                <option value="Edinburgh">
                                                    Edinburgh
                                                </option>
                                                <option value="London">
                                                    London
                                                </option>
                                                <option value="New York" selected="selected">
                                                    New York
                                                </option>
                                                <option value="San Francisco">
                                                    San Francisco
                                                </option>
                                                <option value="Tokyo">
                                                    Tokyo
                                                </option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Bradley Greer</td>
                                        <td><input type="text" class="form-control  form-control-solid"
                                                id="row-19-age" name="row-19-age" value="41" /></td>
                                        <td><input type="text" class="form-control  form-control-solid"
                                                id="row-19-position" name="row-19-position" value="Software Engineer" />
                                        </td>
                                        <td>
                                            <select class="form-select  form-select-solid" size="1"
                                                id="row-19-office" name="row-19-office">
                                                <option value="Edinburgh">
                                                    Edinburgh
                                                </option>
                                                <option value="London" selected="selected">
                                                    London
                                                </option>
                                                <option value="New York">
                                                    New York
                                                </option>
                                                <option value="San Francisco">
                                                    San Francisco
                                                </option>
                                                <option value="Tokyo">
                                                    Tokyo
                                                </option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e5237b51202" role="tab">HTML</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e5237b51203" role="tab">JAVASCRIPT</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5237b51202"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;div class=&quot;pb-10&quot;&gt;
    &lt;button class=&quot;btn btn-primary&quot; id=&quot;kt_datatable_example_2_submit&quot;&gt;Submit Form&lt;/button&gt;
&lt;/div&gt;
&lt;table id=&quot;kt_datatable_example_2&quot; class=&quot;table table-row-bordered table-row-dashed gy-5&quot;&gt;
    &lt;thead&gt;
        &lt;tr class=&quot;fw-semibold fs-6 text-gray-800&quot;&gt;
            &lt;th&gt;Name&lt;/th&gt;
            &lt;th&gt;Age&lt;/th&gt;
            &lt;th&gt;Position&lt;/th&gt;
            &lt;th&gt;Office&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
        &lt;tr&gt;
            &lt;td&gt;Tiger Nixon&lt;/td&gt;
            &lt;td&gt;&lt;input type=&quot;text&quot; class=&quot;form-control  form-control-solid&quot; id=&quot;row-1-age&quot; name=&quot;row-1-age&quot; value=&quot;61&quot;/&gt;&lt;/td&gt;
            &lt;td&gt;&lt;input type=&quot;text&quot; class=&quot;form-control  form-control-solid&quot; id=&quot;row-1-position&quot; name=&quot;row-1-position&quot; value=&quot;System Architect&quot;/&gt;&lt;/td&gt;
            &lt;td&gt;
                &lt;select  class=&quot;form-select  form-select-solid&quot; size=&quot;1&quot; id=&quot;row-1-office&quot; name=&quot;row-1-office&quot;&gt;
                    &lt;option value=&quot;Edinburgh&quot; selected=&quot;selected&quot;&gt;
                        Edinburgh
                    &lt;/option&gt;
                    &lt;option value=&quot;London&quot;&gt;
                        London
                    &lt;/option&gt;
                    &lt;option value=&quot;New York&quot;&gt;
                        New York
                    &lt;/option&gt;
                    &lt;option value=&quot;San Francisco&quot;&gt;
                        San Francisco
                    &lt;/option&gt;
                    &lt;option value=&quot;Tokyo&quot;&gt;
                        Tokyo
                    &lt;/option&gt;
                &lt;/select&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;Garrett Winters&lt;/td&gt;
            &lt;td&gt;&lt;input type=&quot;text&quot; class=&quot;form-control  form-control-solid&quot; id=&quot;row-2-age&quot; name=&quot;row-2-age&quot; value=&quot;63&quot;/&gt;&lt;/td&gt;
            &lt;td&gt;&lt;input type=&quot;text&quot; class=&quot;form-control  form-control-solid&quot; id=&quot;row-2-position&quot; name=&quot;row-2-position&quot; value=&quot;Accountant&quot;/&gt;&lt;/td&gt;
            &lt;td&gt;
                &lt;select  class=&quot;form-select  form-select-solid&quot; size=&quot;1&quot; id=&quot;row-2-office&quot; name=&quot;row-2-office&quot;&gt;
                    &lt;option value=&quot;Edinburgh&quot;&gt;
                        Edinburgh
                    &lt;/option&gt;
                    &lt;option value=&quot;London&quot;&gt;
                        London
                    &lt;/option&gt;
                    &lt;option value=&quot;New York&quot;&gt;
                        New York
                    &lt;/option&gt;
                    &lt;option value=&quot;San Francisco&quot;&gt;
                        San Francisco
                    &lt;/option&gt;
                    &lt;option value=&quot;Tokyo&quot; selected=&quot;selected&quot;&gt;
                        Tokyo
                    &lt;/option&gt;
                &lt;/select&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
    &lt;/tbody&gt;
&lt;/table&gt;</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e5237b51203" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript"><code class="language-javascript">var table = $(&quot;#kt_datatable_example_2&quot;).DataTable({
    columnDefs: [{
        orderable: false,
        targets: [1, 2, 3]
    }]
});

$(&quot;#kt_datatable_example_2_submit&quot;).click(function() {
    var data = table.$(&quot;input, select&quot;).serialize();
    alert(
        &quot;The following data would have been submitted to the server: \n\n&quot; +
        data.substr(0, 120) + &quot;...&quot;
    );
    return false;
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
                        <!--begin::Menu-->
                        <ul id="kt_sidebar_nav"
                            class="nav nav-flush menu menu-column menu-title-gray-700 menu-bullet-gray-300 menu-state-primary fw-semibold fs-6 mb-8">
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#add-rows" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Add Rows</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#form-inputs" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Form Inputs</span>
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
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/custom/documentation/general/datatables/api.js') }}"></script>
    <!--end::Custom Javascript-->
@endsection


