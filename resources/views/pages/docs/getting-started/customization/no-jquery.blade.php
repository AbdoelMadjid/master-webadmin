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
                        <div class="pt-5">
                            All of our products <strong class="me-1">does not</strong> contain any jQuery within the core
                            layout and components.
                            However, the below listed plugins require, which is the main reason for jQuery's inclusion.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="pt-5 pb-2">
                            <ul>
                                <li class="py-2"><a href="https://jquery.com/" target="_blank">jQuery</a></li>
                                <li class="py-2"><a href="https://datatables.net/" target="_blank">DataTables</a></li>
                                <li class="py-2"><a href="https://select2.org/" target="_blank">Select2</a></li>
                                <li class="py-2"><a href="https://www.daterangepicker.com/" target="_blank">Date Range
                                        Picker</a></li>
                                <li class="py-2"><a href="https://github.com/mimo84/bootstrap-maxlength"
                                        target="_blank">Bootstrap Maxlength</a></li>
                                <li class="py-2"><a href="https://github.com/poolerMF/bootstrap-multiselectsplitter/"
                                        target="_blank">Bootstrap Multi Select Splitter</a></li>
                                <li class="py-2"><a href="https://developer.snapappointments.com/bootstrap-select/"
                                        target="_blank">Bootstrap Select</a></li>
                                <li class="py-2"><a href="http://www.flotcharts.org/" target="_blank">Flotcharts</a></li>
                                <li class="py-2"><a href="https://www.jstree.com/" target="_blank">jsTree</a></li>
                                <li class="py-2"><a href="https://github.com/DubFriend/jquery.repeater"
                                        target="_blank">Repeater</a></li>
                                <li class="py-2"><a href="https://github.com/petekeller2/toastr"
                                        target="_blank">Toastr</a></li>
                            </ul>
                        </div>
                        <!--end::Block-->

                        <!--begin::Notice-->
                        <div class="pb-5">
                            <!--begin::Information-->
                            <div class="d-flex align-items-center rounded py-5 px-5 bg-light-danger "><i
                                    class="ki-duotone ki-information-5 fs-3x text-danger me-5"><span
                                        class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-bold fs-6">
                                    After jQuery and above jQuery plugins removal, some pages might not function as expected
                                    and throw <code>$ is not defined</code> reference errors.
                                    However, the core layout and components function as expected without any issue.
                                </div> <!--end::Description-->
                            </div><!--end::Information-->
                        </div>
                        <!--end::Notice-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="remove-jquery" data-kt-scroll-offset="50">
                            <a href="#remove-jquery"></a>

                            Remove jQuery
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="pt-5">
                            Locate the <code>package.json</code> file within the tools folder:
                            <code>/theme/html/tools/</code> and remove below dependencies under <code>dependencies</code>
                            node:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-js" style="height:500px"><code class="language-js">&quot;dependencies&quot;: {
    &quot;jquery&quot;: &quot;3.6.0&quot;,
    &quot;jquery.repeater&quot;: &quot;^1.2.1&quot;,
    &quot;jstree&quot;: &quot;^3.3.11&quot;,
    &quot;select2&quot;: &quot;^4.1.0-rc.0&quot;,
    &quot;flot&quot;: &quot;^4.2.2&quot;,
    &quot;bootstrap-select&quot;: &quot;^1.13.18&quot;,
    &quot;bootstrap-multiselectsplitter&quot;: &quot;^1.0.4&quot;,
    &quot;bootstrap-daterangepicker&quot;: &quot;^3.1.0&quot;,
    &quot;bootstrap-maxlength&quot;: &quot;^1.10.1&quot;,
    &quot;datatables.net&quot;: &quot;^1.12.1&quot;,
    &quot;datatables.net-bs5&quot;: &quot;^1.12.1&quot;,
    &quot;datatables.net-buttons&quot;: &quot;^2.2.3&quot;,
    &quot;datatables.net-buttons-bs5&quot;: &quot;^2.2.3&quot;,
    &quot;datatables.net-colreorder&quot;: &quot;^1.5.6&quot;,
    &quot;datatables.net-colreorder-bs5&quot;: &quot;^1.5.6&quot;,
    &quot;datatables.net-datetime&quot;: &quot;^1.1.2&quot;,
    &quot;datatables.net-fixedcolumns&quot;: &quot;^4.1.0&quot;,
    &quot;datatables.net-fixedcolumns-bs5&quot;: &quot;^4.1.0&quot;,
    &quot;datatables.net-fixedheader&quot;: &quot;^3.2.3&quot;,
    &quot;datatables.net-fixedheader-bs5&quot;: &quot;^3.2.3&quot;,
    &quot;datatables.net-plugins&quot;: &quot;^1.11.5&quot;,
    &quot;datatables.net-responsive&quot;: &quot;^2.3.0&quot;,
    &quot;datatables.net-responsive-bs5&quot;: &quot;^2.3.0&quot;,
    &quot;datatables.net-rowgroup&quot;: &quot;^1.2.0&quot;,
    &quot;datatables.net-rowgroup-bs5&quot;: &quot;^1.2.0&quot;,
    &quot;datatables.net-rowreorder&quot;: &quot;^1.2.8&quot;,
    &quot;datatables.net-rowreorder-bs5&quot;: &quot;^1.2.8&quot;,
    &quot;datatables.net-scroller&quot;: &quot;^2.0.6&quot;,
    &quot;datatables.net-scroller-bs5&quot;: &quot;^2.0.6&quot;,
    &quot;datatables.net-select&quot;: &quot;^1.4.0&quot;,
    &quot;datatables.net-select-bs5&quot;: &quot;^1.4.0&quot;,
}</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="gulp-config" data-kt-scroll-offset="50">
                            <a href="#gulp-config"></a>

                            Gulp Config
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="pt-5">
                            Locate the gulp config file within the tools folder:
                            <code>/theme/html/tools/gulp.config.js</code> and remove below dependencies one by one:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-js" style="height:500px"><code class="language-js">const gulpConfig = {
    build: {
        plugins: {
            global: {
                src: {
                    mandatory: {
                        jquery: {
                            scripts: [&quot;{$config.path.node_modules}/jquery/dist/jquery.js&quot;],
                        }
                    }
                }
            },
            optional: {
                select2: {
                    styles: [
                        &quot;{$config.path.node_modules}/select2/dist/css/select2.css&quot;,
                    ],
                    scripts: [
                        &quot;{$config.path.node_modules}/select2/dist/js/select2.full.js&quot;,
                        &quot;{$config.path.common_src}/js/vendors/plugins/select2.init.js&quot;,
                    ],
                },
                &quot;bootstrap-maxlength&quot;: {
                    &quot;scripts&quot;: [
                        &quot;{$config.path.node_modules}/bootstrap-maxlength/src/bootstrap-maxlength.js&quot;
                    ]
                },
                daterangepicker: {
                    styles: [
                        &quot;{$config.path.node_modules}/bootstrap-daterangepicker/daterangepicker.css&quot;,
                    ],
                    scripts: [
                        &quot;{$config.path.node_modules}/bootstrap-daterangepicker/daterangepicker.js&quot;,
                    ],
                },
                inputmask: {
                    scripts: [
                        &quot;{$config.path.node_modules}/inputmask/dist/bindings/inputmask.binding.js&quot;
                    ]
                },
                &quot;bootstrap-multiselectsplitter&quot;: {
                    scripts: [
                        &quot;{$config.path.node_modules}/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.js&quot;,
                    ],
                },
                toastr: {
                    styles: [&quot;{$config.path.common_src}/plugins/toastr/build/toastr.css&quot;],
                    scripts: [&quot;{$config.path.common_src}/plugins/toastr/build/toastr.min.js&quot;],
                },
            }
        },
        custom: {
            &quot;datatables.net&quot;: {
                src: {
                    styles: [
                        &quot;{$config.path.node_modules}/datatables.net-bs5/css/dataTables.bootstrap5.css&quot;,
                        &quot;{$config.path.node_modules}/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css&quot;,
                        &quot;{$config.path.node_modules}/datatables.net-colreorder-bs5/css/colReorder.bootstrap5.min.css&quot;,
                        &quot;{$config.path.node_modules}/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css&quot;,
                        &quot;{$config.path.node_modules}/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css&quot;,
                        &quot;{$config.path.node_modules}/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css&quot;,
                        &quot;{$config.path.node_modules}/datatables.net-rowreorder-bs5/css/rowReorder.bootstrap5.min.css&quot;,
                        &quot;{$config.path.node_modules}/datatables.net-scroller-bs5/css/scroller.bootstrap5.min.css&quot;,
                        &quot;{$config.path.node_modules}/datatables.net-select-bs5/css/select.bootstrap5.min.css&quot;,
                        &quot;{$config.path.node_modules}/datatables.net-datetime/dist/dataTables.dateTime.min.css&quot;,
                    ],
                    scripts: [
                        &quot;{$config.path.node_modules}/datatables.net/js/jquery.dataTables.js&quot;,
                        &quot;{$config.path.node_modules}/datatables.net-bs5/js/dataTables.bootstrap5.js&quot;,
                        &quot;{$config.path.common_src}/js/vendors/plugins/datatables.init.js&quot;,
                        &quot;{$config.path.node_modules}/jszip/dist/jszip.min.js&quot;,
                        &quot;{$config.path.node_modules}/pdfmake/build/pdfmake.min.js&quot;,
                        &quot;{$config.path.node_modules}/pdfmake/build/vfs_fonts.js&quot;,
                        &quot;{$config.path.node_modules}/datatables.net-buttons/js/dataTables.buttons.min.js&quot;,
                        &quot;{$config.path.node_modules}/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js&quot;,
                        &quot;{$config.path.node_modules}/datatables.net-buttons/js/buttons.colVis.js&quot;,
                        &quot;{$config.path.node_modules}/datatables.net-buttons/js/buttons.flash.js&quot;,
                        &quot;{$config.path.node_modules}/datatables.net-buttons/js/buttons.html5.js&quot;,
                        &quot;{$config.path.node_modules}/datatables.net-buttons/js/buttons.print.js&quot;,
                        &quot;{$config.path.node_modules}/datatables.net-colreorder/js/dataTables.colReorder.min.js&quot;,
                        &quot;{$config.path.node_modules}/datatables.net-colreorder-bs5/js/colReorder.bootstrap5.js&quot;,
                        &quot;{$config.path.node_modules}/datatables.net-fixedcolumns/js/dataTables.fixedColumns.min.js&quot;,
                        &quot;{$config.path.node_modules}/datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.js&quot;,
                        &quot;{$config.path.node_modules}/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js&quot;,
                        &quot;{$config.path.node_modules}/datatables.net-fixedheader-bs5/js/fixedHeader.bootstrap5.js&quot;,
                        &quot;{$config.path.node_modules}/datatables.net-responsive/js/dataTables.responsive.min.js&quot;,
                        &quot;{$config.path.node_modules}/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js&quot;,
                        &quot;{$config.path.node_modules}/datatables.net-rowgroup/js/dataTables.rowGroup.min.js&quot;,
                        &quot;{$config.path.node_modules}/datatables.net-rowgroup-bs5/js/rowGroup.bootstrap5.js&quot;,
                        &quot;{$config.path.node_modules}/datatables.net-rowreorder/js/dataTables.rowReorder.min.js&quot;,
                        &quot;{$config.path.node_modules}/datatables.net-rowreorder-bs5/js/rowReorder.bootstrap5.js&quot;,
                        &quot;{$config.path.node_modules}/datatables.net-scroller/js/dataTables.scroller.min.js&quot;,
                        &quot;{$config.path.node_modules}/datatables.net-scroller-bs5/js/dataTables.bootstrap5.js&quot;,
                        &quot;{$config.path.node_modules}/datatables.net-select/js/dataTables.select.min.js&quot;,
                        &quot;{$config.path.node_modules}/datatables.net-select-bs5/js/dataTables.bootstrap5.js&quot;,
                        &quot;{$config.path.node_modules}/datatables.net-datetime/dist/dataTables.dateTime.min.js&quot;,
                        &quot;{$config.path.node_modules}/datatables.net-plugins/features/conditionalPaging/dataTables.conditionalPaging.js&quot;,
                    ]
                },
                dist: {
                    styles: &quot;{$config.dist}/plugins/custom/datatables/datatables.bundle.css&quot;,
                    scripts: &quot;{$config.dist}/plugins/custom/datatables/datatables.bundle.js&quot;,
                }
            },
            flot: {
                src: {
                    scripts: [
                        &quot;{$config.path.node_modules}/flot/dist/es5/jquery.flot.js&quot;,
                        &quot;{$config.path.node_modules}/flot/source/jquery.flot.resize.js&quot;,
                        &quot;{$config.path.node_modules}/flot/source/jquery.flot.categories.js&quot;,
                        &quot;{$config.path.node_modules}/flot/source/jquery.flot.pie.js&quot;,
                        &quot;{$config.path.node_modules}/flot/source/jquery.flot.stack.js&quot;,
                        &quot;{$config.path.node_modules}/flot/source/jquery.flot.crosshair.js&quot;,
                        &quot;{$config.path.node_modules}/flot/source/jquery.flot.axislabels.js&quot;
                    ]
                },
                dist: {
                    scripts: &quot;{$config.dist}/plugins/custom/flotcharts/flotcharts.bundle.js&quot;
                }
            },
            jstree: {
                src: {
                    styles: [
                        &quot;{$config.path.node_modules}/jstree/dist/themes/default/style.css&quot;
                    ],
                    scripts: [
                        &quot;{$config.path.node_modules}/jstree/dist/jstree.js&quot;
                    ],
                    images: [
                        &quot;{$config.path.common_src}/assets/media/plugins/jstree/32px.png&quot;,
                        &quot;{$config.path.node_modules}/jstree/dist/themes/default/throbber.gif&quot;
                    ]
                },
                dist: {
                    styles: &quot;{$config.dist}/plugins/custom/jstree/jstree.bundle.css&quot;,
                    scripts: &quot;{$config.dist}/plugins/custom/jstree/jstree.bundle.js&quot;,
                    images: &quot;{$config.dist}/plugins/custom/jstree/images/jstree&quot;
                }
            },
            formrepeater: {
                src: {
                    scripts: [
                        &quot;{$config.path.node_modules}/jquery.repeater/src/lib.js&quot;,
                        &quot;{$config.path.node_modules}/jquery.repeater/src/jquery.input.js&quot;,
                        &quot;{$config.path.node_modules}/jquery.repeater/src/repeater.js&quot;
                    ]
                },
                dist: {
                    scripts: &quot;{$config.dist}/plugins/custom/formrepeater/formrepeater.bundle.js&quot;,
                }
            },
            &quot;bootstrap-select&quot;: {
                src: {
                    styles: [
                        &quot;{$config.path.node_modules}/bootstrap-select/dist/css/bootstrap-select.css&quot;,
                    ],
                    scripts: [
                        &quot;{$config.path.node_modules}/bootstrap-select/dist/js/bootstrap-select.min.js&quot;,
                    ]
                },
                dist: {
                    styles: &quot;{$config.dist}/plugins/custom/bootstrap-select/bootstrap-select.bundle.css&quot;,
                    scripts: &quot;{$config.dist}/plugins/custom/bootstrap-select/bootstrap-select.bundle.js&quot;,
                }
            }
        }
    }
}</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="webpack-config" data-kt-scroll-offset="50">
                            <a href="#webpack-config"></a>

                            Webpack Config
                        </h1>
                        <!--end::Heading-->


                        <!--begin::List-->
                        <ol class="pt-5 pb-0">
                            <li class="py-5">
                                <!--begin::Block-->
                                <div class="pt-5">
                                    Locate the webpack javascript plugins config file within the tools folder:
                                    <code>/theme/html/tools/webpack/plugins/plugins.js</code> and remove below dependencies
                                    one by one:
                                </div>
                                <!--end::Block-->

                                <!--begin::Block-->
                                <div class="py-5">
                                    <!--begin::Highlight-->
                                    <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-js"><code class="language-js">window.jQuery = window.$ = require(&#039;jquery&#039;);
require(&#039;bootstrap-daterangepicker/daterangepicker.js&#039;);
require(&#039;bootstrap-maxlength/src/bootstrap-maxlength.js&#039;);
require(&#039;@/src/plugins/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js&#039;);
require(&#039;select2/dist/js/select2.full.min.js&#039;);
require(&#039;inputmask/dist/bindings/inputmask.binding.js&#039;);
require(&#039;@/src/js/vendors/plugins/select2.init.js&#039;);
window.toastr = require(&#039;@/src/plugins/toastr/build/toastr.min.js&#039;);
window.sessionTimeout = require(&#039;@/src/plugins/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js&#039;);
require(&#039;@/src/plugins/jquery-idletimer/idle-timer.min.js&#039;);
}</code></pre>
                                        </div>
                                    </div><!--end::Highlight-->
                                </div>
                                <!--end::Block-->
                            </li>

                            <li class="py-5">
                                <!--begin::Block-->
                                <div class="pt-5">
                                    Locate the webpack plugins sass config file within the tools folder:
                                    <code>/theme/html/tools/webpack/plugins/plugins.scss</code> and remove below
                                    dependencies one by one:
                                </div>
                                <!--end::Block-->

                                <!--begin::Block-->
                                <div class="py-5">
                                    <!--begin::Highlight-->
                                    <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-js"><code class="language-js">@import &quot;~select2/src/scss/core.scss&quot;;
@import &quot;~bootstrap-daterangepicker/daterangepicker.css&quot;;
@import &quot;~@/src/plugins/toastr/build/toastr.css&quot;;</code></pre>
                                        </div>
                                    </div><!--end::Highlight-->
                                </div>
                                <!--end::Block-->
                            </li>

                            <li class="py-5">
                                <!--begin::Block-->
                                <div class="pt-5">
                                    Locate the webpack main config file within the tools folder:
                                    <code>/theme/html/tools/webpack.config.js</code> and remove below datatables plugin
                                    dependencies completely under <code>importExtraPlugins</code> function:
                                </div>
                                <!--end::Block-->

                                <!--begin::Block-->
                                <div class="py-5">
                                    <!--begin::Highlight-->
                                    <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-js" style="height:500px"><code class="language-js">// datatables
files: {
    &#039;plugins/custom/datatables/datatables.bundle.js&#039;: [
        &quot;node_modules/datatables.net/js/jquery.dataTables.js&quot;,
        &quot;node_modules/datatables.net-bs5/js/dataTables.bootstrap5.js&quot;,
        &quot;../src/js/vendors/plugins/datatables.init.js&quot;,
        &quot;node_modules/jszip/dist/jszip.min.js&quot;,
        &quot;node_modules/pdfmake/build/pdfmake.min.js&quot;,
        &quot;node_modules/pdfmake/build/vfs_fonts.js&quot;,
        &quot;node_modules/datatables.net-buttons/js/dataTables.buttons.min.js&quot;,
        &quot;node_modules/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js&quot;,
        &quot;node_modules/datatables.net-buttons/js/buttons.colVis.js&quot;,
        &quot;node_modules/datatables.net-buttons/js/buttons.flash.js&quot;,
        &quot;node_modules/datatables.net-buttons/js/buttons.html5.js&quot;,
        &quot;node_modules/datatables.net-buttons/js/buttons.print.js&quot;,
        &quot;node_modules/datatables.net-colreorder/js/dataTables.colReorder.min.js&quot;,
        &quot;node_modules/datatables.net-colreorder-bs5/js/colReorder.bootstrap5.js&quot;,
        &quot;node_modules/datatables.net-fixedcolumns/js/dataTables.fixedColumns.min.js&quot;,
        &quot;node_modules/datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.js&quot;,
        &quot;node_modules/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js&quot;,
        &quot;node_modules/datatables.net-fixedheader-bs5/js/fixedHeader.bootstrap5.js&quot;,
        &quot;node_modules/datatables.net-responsive/js/dataTables.responsive.min.js&quot;,
        &quot;node_modules/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js&quot;,
        &quot;node_modules/datatables.net-rowgroup/js/dataTables.rowGroup.min.js&quot;,
        &quot;node_modules/datatables.net-rowgroup-bs5/js/rowGroup.bootstrap5.js&quot;,
        &quot;node_modules/datatables.net-rowreorder/js/dataTables.rowReorder.min.js&quot;,
        &quot;node_modules/datatables.net-rowreorder-bs5/js/rowReorder.bootstrap5.js&quot;,
        &quot;node_modules/datatables.net-scroller/js/dataTables.scroller.min.js&quot;,
        &quot;node_modules/datatables.net-scroller-bs5/js/dataTables.bootstrap5.js&quot;,
        &quot;node_modules/datatables.net-select/js/dataTables.select.min.js&quot;,
        &quot;node_modules/datatables.net-select-bs5/js/dataTables.bootstrap5.js&quot;,
        &quot;node_modules/datatables.net-datetime/dist/dataTables.dateTime.min.js&quot;,
    ],
    &#039;plugins/custom/datatables/pdfmake.min.js.map&#039;: [
        &#039;node_modules/pdfmake/build/pdfmake.min.js.map&#039;,
    ],
    &#039;plugins/custom/datatables/datatables.bundle.css&#039;: [
        &quot;node_modules/datatables.net-bs5/css/dataTables.bootstrap5.css&quot;,
        &quot;node_modules/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css&quot;,
        &quot;node_modules/datatables.net-colreorder-bs5/css/colReorder.bootstrap5.min.css&quot;,
        &quot;node_modules/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css&quot;,
        &quot;node_modules/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css&quot;,
        &quot;node_modules/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css&quot;,
        &quot;node_modules/datatables.net-rowreorder-bs5/css/rowReorder.bootstrap5.min.css&quot;,
        &quot;node_modules/datatables.net-scroller-bs5/css/scroller.bootstrap5.min.css&quot;,
        &quot;node_modules/datatables.net-select-bs5/css/select.bootstrap5.min.css&quot;,
        &quot;node_modules/datatables.net-datetime/dist/dataTables.dateTime.min.css&quot;,
    ]
}</code></pre>
                                        </div>
                                    </div><!--end::Highlight-->
                                </div>
                                <!--end::Block-->
                            </li>

                            <li class="pt-5">
                                <!--begin::Block-->
                                <div class="py-5">
                                    Remove following dependencies folders in
                                    <code>/theme/html/tools/webpack/plugins/custom</code> folder:
                                </div>
                                <!--end::Block-->

                                <!--begin::Block-->
                                <div class="pt-5">
                                    <ul>
                                        <li class="py-2"><code>floatchart</code></li>
                                        <li class="py-2"><code>formrepeater</code></li>
                                        <li class="py-2"><code>jstree</code></li>
                                    </ul>
                                </div>
                                <!--end::Block-->
                            </li>

                            <li class="pt-5">
                                <!--begin::Block-->
                                <div class="py-5">
                                    Remove following plugins js and css includes from the HTML templates:
                                </div>
                                <!--end::Block-->

                                <!--begin::Block-->
                                <div class="pt-5">
                                    <ul>
                                        <li class="py-2">
                                            <code>assets/plugins/custom/datatables/datatables.bundle.css</code></li>
                                        <li class="py-2">
                                            <code>assets/plugins/custom/datatables/datatables.bundle.js</code></li>
                                    </ul>
                                </div>
                                <!--end::Block-->
                            </li>
                        </ol>
                        <!--end::List-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="rebuild" data-kt-scroll-offset="50">
                            <a href="#rebuild"></a>

                            Rebuild
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="pt-5">
                            Remove <code>theme/html/tools/node_modules</code> folder and
                            <code>theme/html/tools/yarn.lock</code> in file the tools
                            folder and reinstall packages and build the assets with <a
                                href="/html/metronic/docs/getting-started/build/gulp">Gulp</a>&nbsp;
                            or <a href="/html/metronic/docs/getting-started/build/webpack">Webpack</a>.
                        </div>
                        <!--end::Block-->
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
                                <a href="#remove-jquery" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Remove jQuery</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#gulp-config" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Gulp Config</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#webpack-config" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Webpack Config</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#rebuild" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Rebuild</span>
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
@endsection


