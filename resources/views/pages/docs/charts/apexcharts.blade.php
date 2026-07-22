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
                            <strong class="me-1">ApexCharts</strong> is loaded with powerful features to fulfill your
                            data-visualization needs. For more info, please visit the <a href="https://apexcharts.com/"
                                target="_blank">plugin's site</a>
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
                            <strong>ApexCharts</strong>' CSS and Javascript files are bundled in the global style and
                            scripts bundles and are globally included in all pages:
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
                        <h1 class="anchor fw-bold mb-5" id="column_chart" data-kt-scroll-offset="50">
                            <a href="#column_chart"></a>

                            Column Chart
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Simply define a blank <code>div</code> with a unique <code>id</code> in your HTML markup. Then
                            initialize the chart via javascript.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <!--begin::Card-->
                            <div class="card card-bordered">
                                <div class="card-body">
                                    <div id="kt_apexcharts_1" style="height: 350px;"></div>
                                </div>
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e5062206e75" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e5062206e7a" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5062206e75" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">var element = document.getElementById(&#039;kt_apexcharts_1&#039;);

var height = parseInt(KTUtil.css(element, &#039;height&#039;));
var labelColor = KTUtil.getCssVariableValue(&#039;--kt-gray-500&#039;);
var borderColor = KTUtil.getCssVariableValue(&#039;--kt-gray-200&#039;);
var baseColor = KTUtil.getCssVariableValue(&#039;--kt-primary&#039;);
var secondaryColor = KTUtil.getCssVariableValue(&#039;--kt-gray-300&#039;);

if (!element) {
    return;
}

var options = {
    series: [{
        name: &#039;Net Profit&#039;,
        data: [44, 55, 57, 56, 61, 58]
    }, {
        name: &#039;Revenue&#039;,
        data: [76, 85, 101, 98, 87, 105]
    }],
    chart: {
        fontFamily: &#039;inherit&#039;,
        type: &#039;bar&#039;,
        height: height,
        toolbar: {
            show: false
        }
    },
    plotOptions: {
        bar: {
            horizontal: false,
            columnWidth: [&#039;30%&#039;],
            endingShape: &#039;rounded&#039;
        },
    },
    legend: {
        show: false
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        show: true,
        width: 2,
        colors: [&#039;transparent&#039;]
    },
    xaxis: {
        categories: [&#039;Feb&#039;, &#039;Mar&#039;, &#039;Apr&#039;, &#039;May&#039;, &#039;Jun&#039;, &#039;Jul&#039;],
        axisBorder: {
            show: false,
        },
        axisTicks: {
            show: false
        },
        labels: {
            style: {
                colors: labelColor,
                fontSize: &#039;12px&#039;
            }
        }
    },
    yaxis: {
        labels: {
            style: {
                colors: labelColor,
                fontSize: &#039;12px&#039;
            }
        }
    },
    fill: {
        opacity: 1
    },
    states: {
        normal: {
            filter: {
                type: &#039;none&#039;,
                value: 0
            }
        },
        hover: {
            filter: {
                type: &#039;none&#039;,
                value: 0
            }
        },
        active: {
            allowMultipleDataPointsSelection: false,
            filter: {
                type: &#039;none&#039;,
                value: 0
            }
        }
    },
    tooltip: {
        style: {
            fontSize: &#039;12px&#039;
        },
        y: {
            formatter: function (val) {
                return &#039;$&#039; + val + &#039; thousands&#039;
            }
        }
    },
    colors: [baseColor, secondaryColor],
    grid: {
        borderColor: borderColor,
        strokeDashArray: 4,
        yaxis: {
            lines: {
                show: true
            }
        }
    }
};

var chart = new ApexCharts(element, options);
chart.render();</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e5062206e7a" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;div class=&quot;card card-bordered&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        &lt;div id=&quot;kt_apexcharts_1&quot; style=&quot;height: 350px;&quot;&gt;&lt;/div&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="bar_chart" data-kt-scroll-offset="50">
                            <a href="#bar_chart"></a>

                            Bar Chart
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Simply define a blank <code>div</code> with a unique <code>id</code> in your HTML markup. Then
                            initialize the chart via javascript.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <!--begin::Card-->
                            <div class="card card-bordered">
                                <div class="card-body">
                                    <div id="kt_apexcharts_2" style="height: 350px;"></div>
                                </div>
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e5062206ec8" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e5062206ec9" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5062206ec8"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">var element = document.getElementById(&#039;kt_apexcharts_1&#039;);

var height = parseInt(KTUtil.css(element, &#039;height&#039;));
var labelColor = KTUtil.getCssVariableValue(&#039;--kt-gray-500&#039;);
var borderColor = KTUtil.getCssVariableValue(&#039;--kt-gray-200&#039;);
var baseColor = KTUtil.getCssVariableValue(&#039;--kt-warning&#039;);
var secondaryColor = KTUtil.getCssVariableValue(&#039;--kt-gray-300&#039;);

if (!element) {
    return;
}

var options = {
    series: [{
        name: &#039;Net Profit&#039;,
        data: [44, 55, 57, 56, 61, 58]
    }, {
        name: &#039;Revenue&#039;,
        data: [76, 85, 101, 98, 87, 105]
    }],
    chart: {
        fontFamily: &#039;inherit&#039;,
        type: &#039;bar&#039;,
        height: height,
        toolbar: {
            show: false
        }
    },
    plotOptions: {
        bar: {
            horizontal: true,
            columnWidth: [&#039;30%&#039;],
            endingShape: &#039;rounded&#039;
        },
    },
    legend: {
        show: false
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        show: true,
        width: 2,
        colors: [&#039;transparent&#039;]
    },
    xaxis: {
        categories: [&#039;Feb&#039;, &#039;Mar&#039;, &#039;Apr&#039;, &#039;May&#039;, &#039;Jun&#039;, &#039;Jul&#039;],
        axisBorder: {
            show: false,
        },
        axisTicks: {
            show: false
        },
        labels: {
            style: {
                colors: labelColor,
                fontSize: &#039;12px&#039;
            }
        }
    },
    yaxis: {
        labels: {
            style: {
                colors: labelColor,
                fontSize: &#039;12px&#039;
            }
        }
    },
    fill: {
        opacity: 1
    },
    states: {
        normal: {
            filter: {
                type: &#039;none&#039;,
                value: 0
            }
        },
        hover: {
            filter: {
                type: &#039;none&#039;,
                value: 0
            }
        },
        active: {
            allowMultipleDataPointsSelection: false,
            filter: {
                type: &#039;none&#039;,
                value: 0
            }
        }
    },
    tooltip: {
        style: {
            fontSize: &#039;12px&#039;
        },
        y: {
            formatter: function (val) {
                return &#039;$&#039; + val + &#039; thousands&#039;
            }
        }
    },
    colors: [baseColor, secondaryColor],
    grid: {
        borderColor: borderColor,
        strokeDashArray: 4,
        yaxis: {
            lines: {
                show: true
            }
        }
    }
};

var chart = new ApexCharts(element, options);
chart.render();</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e5062206ec9" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;div class=&quot;card card-bordered&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        &lt;div id=&quot;kt_apexcharts_2&quot; style=&quot;height: 350px;&quot;&gt;&lt;/div&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="line_chart" data-kt-scroll-offset="50">
                            <a href="#line_chart"></a>

                            Line Chart
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Simply define a blank <code>div</code> with a unique <code>id</code> in your HTML markup. Then
                            initialize the chart via javascript.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <!--begin::Card-->
                            <div class="card card-bordered">
                                <div class="card-body">
                                    <div id="kt_apexcharts_3" style="height: 350px;"></div>
                                </div>
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e5062206f0a" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e5062206f0b" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5062206f0a"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">var element = document.getElementById(&#039;kt_apexcharts_3&#039;);

var height = parseInt(KTUtil.css(element, &#039;height&#039;));
var labelColor = KTUtil.getCssVariableValue(&#039;--kt-gray-500&#039;);
var borderColor = KTUtil.getCssVariableValue(&#039;--kt-gray-200&#039;);
var baseColor = KTUtil.getCssVariableValue(&#039;--kt-info&#039;);
var lightColor = KTUtil.getCssVariableValue(&#039;--kt-info-light&#039;);

if (!element) {
    return;
}

var options = {
    series: [{
        name: &#039;Net Profit&#039;,
        data: [30, 40, 40, 90, 90, 70, 70]
    }],
    chart: {
        fontFamily: &#039;inherit&#039;,
        type: &#039;area&#039;,
        height: height,
        toolbar: {
            show: false
        }
    },
    plotOptions: {

    },
    legend: {
        show: false
    },
    dataLabels: {
        enabled: false
    },
    fill: {
        type: &#039;solid&#039;,
        opacity: 1
    },
    stroke: {
        curve: &#039;smooth&#039;,
        show: true,
        width: 3,
        colors: [baseColor]
    },
    xaxis: {
        categories: [&#039;Feb&#039;, &#039;Mar&#039;, &#039;Apr&#039;, &#039;May&#039;, &#039;Jun&#039;, &#039;Jul&#039;, &#039;Aug&#039;],
        axisBorder: {
            show: false,
        },
        axisTicks: {
            show: false
        },
        labels: {
            style: {
                colors: labelColor,
                fontSize: &#039;12px&#039;
            }
        },
        crosshairs: {
            position: &#039;front&#039;,
            stroke: {
                color: baseColor,
                width: 1,
                dashArray: 3
            }
        },
        tooltip: {
            enabled: true,
            formatter: undefined,
            offsetY: 0,
            style: {
                fontSize: &#039;12px&#039;
            }
        }
    },
    yaxis: {
        labels: {
            style: {
                colors: labelColor,
                fontSize: &#039;12px&#039;
            }
        }
    },
    states: {
        normal: {
            filter: {
                type: &#039;none&#039;,
                value: 0
            }
        },
        hover: {
            filter: {
                type: &#039;none&#039;,
                value: 0
            }
        },
        active: {
            allowMultipleDataPointsSelection: false,
            filter: {
                type: &#039;none&#039;,
                value: 0
            }
        }
    },
    tooltip: {
        style: {
            fontSize: &#039;12px&#039;
        },
        y: {
            formatter: function (val) {
                return &#039;$&#039; + val + &#039; thousands&#039;
            }
        }
    },
    colors: [lightColor],
    grid: {
        borderColor: borderColor,
        strokeDashArray: 4,
        yaxis: {
            lines: {
                show: true
            }
        }
    },
    markers: {
        strokeColor: baseColor,
        strokeWidth: 3
    }
};

var chart = new ApexCharts(element, options);
chart.render();</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e5062206f0b" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;div class=&quot;card card-bordered&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        &lt;div id=&quot;kt_apexcharts_3&quot; style=&quot;height: 350px;&quot;&gt;&lt;/div&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="multiline_chart" data-kt-scroll-offset="50">
                            <a href="#multiline_chart"></a>

                            Multiline Chart
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Simply define a blank <code>div</code> with a unique <code>id</code> in your HTML markup. Then
                            initialize the chart via javascript.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <!--begin::Card-->
                            <div class="card card-bordered">
                                <div class="card-body">
                                    <div id="kt_apexcharts_4" style="height: 350px;"></div>
                                </div>
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e5062206f50" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e5062206f51" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5062206f50"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">var element = document.getElementById(&#039;kt_apexcharts_4&#039;);

var height = parseInt(KTUtil.css(element, &#039;height&#039;));
var labelColor = KTUtil.getCssVariableValue(&#039;--kt-gray-500&#039;);
var borderColor = KTUtil.getCssVariableValue(&#039;--kt-gray-200&#039;);

var baseColor = KTUtil.getCssVariableValue(&#039;--kt-success&#039;);
var baseLightColor = KTUtil.getCssVariableValue(&#039;--kt-success-light&#039;);
var secondaryColor = KTUtil.getCssVariableValue(&#039;--kt-warning&#039;);
var secondaryLightColor = KTUtil.getCssVariableValue(&#039;--kt-warning-light&#039;);

if (!element) {
    return;
}

var options = {
    series: [{
        name: &#039;Net Profit&#039;,
        data: [60, 50, 80, 40, 100, 60]
    }, {
        name: &#039;Revenue&#039;,
        data: [70, 60, 110, 40, 50, 70]
    }],
    chart: {
        fontFamily: &#039;inherit&#039;,
        type: &#039;area&#039;,
        height: height,
        toolbar: {
            show: false
        }
    },
    plotOptions: {},
    legend: {
        show: false
    },
    dataLabels: {
        enabled: false
    },
    fill: {
        type: &#039;solid&#039;,
        opacity: 1
    },
    stroke: {
        curve: &#039;smooth&#039;
    },
    xaxis: {
        categories: [&#039;Feb&#039;, &#039;Mar&#039;, &#039;Apr&#039;, &#039;May&#039;, &#039;Jun&#039;, &#039;Jul&#039;],
        axisBorder: {
            show: false,
        },
        axisTicks: {
            show: false
        },
        labels: {
            style: {
                colors: labelColor,
                fontSize: &#039;12px&#039;
            }
        },
        crosshairs: {
            position: &#039;front&#039;,
            stroke: {
                color: labelColor,
                width: 1,
                dashArray: 3
            }
        },
        tooltip: {
            enabled: true,
            formatter: undefined,
            offsetY: 0,
            style: {
                fontSize: &#039;12px&#039;
            }
        }
    },
    yaxis: {
        labels: {
            style: {
                colors: labelColor,
                fontSize: &#039;12px&#039;
            }
        }
    },
    states: {
        normal: {
            filter: {
                type: &#039;none&#039;,
                value: 0
            }
        },
        hover: {
            filter: {
                type: &#039;none&#039;,
                value: 0
            }
        },
        active: {
            allowMultipleDataPointsSelection: false,
            filter: {
                type: &#039;none&#039;,
                value: 0
            }
        }
    },
    tooltip: {
        style: {
            fontSize: &#039;12px&#039;
        },
        y: {
            formatter: function (val) {
                return &#039;$&#039; + val + &#039; thousands&#039;
            }
        }
    },
    colors: [baseColor, secondaryColor],
    grid: {
        borderColor: borderColor,
        strokeDashArray: 4,
        yaxis: {
            lines: {
                show: true
            }
        }
    },
    markers: {
        colors: [baseLightColor, secondaryLightColor],
        strokeColor: [baseLightColor, secondaryLightColor],
        strokeWidth: 3
    }
};

var chart = new ApexCharts(element, options);
chart.render();</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e5062206f51" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;div class=&quot;card card-bordered&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        &lt;div id=&quot;kt_apexcharts_4&quot; style=&quot;height: 350px;&quot;&gt;&lt;/div&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="mixed_chart" data-kt-scroll-offset="50">
                            <a href="#mixed_chart"></a>

                            Mixed Chart
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Simply define a blank <code>div</code> with a unique <code>id</code> in your HTML markup. Then
                            initialize the chart via javascript.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <!--begin::Card-->
                            <div class="card card-bordered">
                                <div class="card-body">
                                    <div id="kt_apexcharts_5" style="height: 350px;"></div>
                                </div>
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e5062206f94" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e5062206f95" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5062206f94"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">var element = document.getElementById(&#039;kt_apexcharts_5&#039;);

var height = parseInt(KTUtil.css(element, &#039;height&#039;));
var labelColor = KTUtil.getCssVariableValue(&#039;--kt-gray-500&#039;);
var borderColor = KTUtil.getCssVariableValue(&#039;--kt-gray-200&#039;);

var baseColor = KTUtil.getCssVariableValue(&#039;--kt-primary&#039;);
var baseLightColor = KTUtil.getCssVariableValue(&#039;--kt-primary-light&#039;);
var secondaryColor = KTUtil.getCssVariableValue(&#039;--kt-info&#039;);

if (!element) {
    return;
}

var options = {
    series: [{
        name: &#039;Net Profit&#039;,
        type: &#039;bar&#039;,
        stacked: true,
        data: [40, 50, 65, 70, 50, 30]
    }, {
        name: &#039;Revenue&#039;,
        type: &#039;bar&#039;,
        stacked: true,
        data: [20, 20, 25, 30, 30, 20]
    }, {
        name: &#039;Expenses&#039;,
        type: &#039;area&#039;,
        data: [50, 80, 60, 90, 50, 70]
    }],
    chart: {
        fontFamily: &#039;inherit&#039;,
        stacked: true,
        height: height,
        toolbar: {
            show: false
        }
    },
    plotOptions: {
        bar: {
            stacked: true,
            horizontal: false,
            endingShape: &#039;rounded&#039;,
            columnWidth: [&#039;12%&#039;]
        },
    },
    legend: {
        show: false
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: &#039;smooth&#039;,
        show: true,
        width: 2,
        colors: [&#039;transparent&#039;]
    },
    xaxis: {
        categories: [&#039;Feb&#039;, &#039;Mar&#039;, &#039;Apr&#039;, &#039;May&#039;, &#039;Jun&#039;, &#039;Jul&#039;],
        axisBorder: {
            show: false,
        },
        axisTicks: {
            show: false
        },
        labels: {
            style: {
                colors: labelColor,
                fontSize: &#039;12px&#039;
            }
        }
    },
    yaxis: {
        max: 120,
        labels: {
            style: {
                colors: labelColor,
                fontSize: &#039;12px&#039;
            }
        }
    },
    fill: {
        opacity: 1
    },
    states: {
        normal: {
            filter: {
                type: &#039;none&#039;,
                value: 0
            }
        },
        hover: {
            filter: {
                type: &#039;none&#039;,
                value: 0
            }
        },
        active: {
            allowMultipleDataPointsSelection: false,
            filter: {
                type: &#039;none&#039;,
                value: 0
            }
        }
    },
    tooltip: {
        style: {
            fontSize: &#039;12px&#039;
        },
        y: {
            formatter: function (val) {
                return &#039;$&#039; + val + &#039; thousands&#039;
            }
        }
    },
    colors: [baseColor, secondaryColor, baseLightColor],
    grid: {
        borderColor: borderColor,
        strokeDashArray: 4,
        yaxis: {
            lines: {
                show: true
            }
        },
        padding: {
            top: 0,
            right: 0,
            bottom: 0,
            left: 0
        }
    }
};

var chart = new ApexCharts(element, options);
chart.render();</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e5062206f95" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;div class=&quot;card card-bordered&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        &lt;div id=&quot;kt_apexcharts_5&quot; style=&quot;height: 350px;&quot;&gt;&lt;/div&gt;
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
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="timeline_chart" data-kt-scroll-offset="50">
                            <a href="#timeline_chart"></a>

                            Timeline Chart
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Simply define a blank <code>div</code> with a unique <code>id</code> in your HTML markup. Then
                            initialize the chart via javascript.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <!--begin::Card-->
                            <div class="card card-bordered">
                                <div class="card-body">
                                    <div id="kt_apexcharts_6" style="height: 350px;"></div>
                                </div>
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e5062206fdb" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e5062206fdc" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5062206fdb"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">var element = document.getElementById(&#039;kt_apexcharts_6&#039;);

var height = parseInt(KTUtil.css(element, &#039;height&#039;));

var baseColor = KTUtil.getCssVariableValue(&#039;--kt-primary&#039;);
var baseLightColor = KTUtil.getCssVariableValue(&#039;--kt-success&#039;);
var secondaryColor = KTUtil.getCssVariableValue(&#039;--kt-info&#039;);

if (!element) {
    return;
}

var options = {
    series: [
        {
            name: &#039;Bob&#039;,
            data: [
                {
                    x: &#039;Design&#039;,
                    y: [
                        new Date(&#039;2019-03-05&#039;).getTime(),
                        new Date(&#039;2019-03-08&#039;).getTime()
                    ]
                },
                {
                    x: &#039;Code&#039;,
                    y: [
                        new Date(&#039;2019-03-02&#039;).getTime(),
                        new Date(&#039;2019-03-05&#039;).getTime()
                    ]
                },
                {
                    x: &#039;Code&#039;,
                    y: [
                        new Date(&#039;2019-03-05&#039;).getTime(),
                        new Date(&#039;2019-03-07&#039;).getTime()
                    ]
                },
                {
                    x: &#039;Test&#039;,
                    y: [
                        new Date(&#039;2019-03-03&#039;).getTime(),
                        new Date(&#039;2019-03-09&#039;).getTime()
                    ]
                },
                {
                    x: &#039;Test&#039;,
                    y: [
                        new Date(&#039;2019-03-08&#039;).getTime(),
                        new Date(&#039;2019-03-11&#039;).getTime()
                    ]
                },
                {
                    x: &#039;Validation&#039;,
                    y: [
                        new Date(&#039;2019-03-11&#039;).getTime(),
                        new Date(&#039;2019-03-16&#039;).getTime()
                    ]
                },
                {
                    x: &#039;Design&#039;,
                    y: [
                        new Date(&#039;2019-03-01&#039;).getTime(),
                        new Date(&#039;2019-03-03&#039;).getTime()
                    ]
                }
            ]
        },
        {
            name: &#039;Joe&#039;,
            data: [
                {
                    x: &#039;Design&#039;,
                    y: [
                        new Date(&#039;2019-03-02&#039;).getTime(),
                        new Date(&#039;2019-03-05&#039;).getTime()
                    ]
                },
                {
                    x: &#039;Test&#039;,
                    y: [
                        new Date(&#039;2019-03-06&#039;).getTime(),
                        new Date(&#039;2019-03-16&#039;).getTime()
                    ]
                },
                {
                    x: &#039;Code&#039;,
                    y: [
                        new Date(&#039;2019-03-03&#039;).getTime(),
                        new Date(&#039;2019-03-07&#039;).getTime()
                    ]
                },
                {
                    x: &#039;Deployment&#039;,
                    y: [
                        new Date(&#039;2019-03-20&#039;).getTime(),
                        new Date(&#039;2019-03-22&#039;).getTime()
                    ]
                },
                {
                    x: &#039;Design&#039;,
                    y: [
                        new Date(&#039;2019-03-10&#039;).getTime(),
                        new Date(&#039;2019-03-16&#039;).getTime()
                    ]
                }
            ]
        },
        {
            name: &#039;Dan&#039;,
            data: [
                {
                    x: &#039;Code&#039;,
                    y: [
                        new Date(&#039;2019-03-10&#039;).getTime(),
                        new Date(&#039;2019-03-17&#039;).getTime()
                    ]
                },
                {
                    x: &#039;Validation&#039;,
                    y: [
                        new Date(&#039;2019-03-05&#039;).getTime(),
                        new Date(&#039;2019-03-09&#039;).getTime()
                    ]
                },
            ]
        }
    ],
    chart: {
        type: &#039;rangeBar&#039;,
        fontFamily: &#039;inherit&#039;,
        height: height,
        toolbar: {
            show: false
        }
    },
    colors: [baseColor, secondaryColor, baseLightColor],
    plotOptions: {
        bar: {
            horizontal: true,
            barHeight: &#039;80%&#039;
        }
    },
    xaxis: {
        type: &#039;datetime&#039;
    },
    stroke: {
        width: 1
    },
    fill: {
        type: &#039;solid&#039;,
        opacity: 1
    },
    legend: {
        position: &#039;top&#039;,
        horizontalAlign: &#039;left&#039;
    }
};

var chart = new ApexCharts(element, options);
chart.render();</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e5062206fdc" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;div class=&quot;card card-bordered&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        &lt;div id=&quot;kt_apexcharts_6&quot; style=&quot;height: 350px;&quot;&gt;&lt;/div&gt;
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
                                <a href="#column_chart" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Column Chart</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#bar_chart" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Bar Chart</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#line_chart" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Line Chart</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#multiline_chart" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Multiline Chart</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#mixed_chart" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Mixed Chart</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#timeline_chart" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Timeline Chart</span>
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

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/custom/documentation/charts/apexcharts.js') }}"></script>
    <!--end::Custom Javascript-->
@endsection


