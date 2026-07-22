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
                            <div class="">
                                <strong class="me-1">AmCharts</strong> is programming library for all your data
                                visualization needs. You can download and use it for free.

                                The only limitation of the free version is that a small link to this web site will be
                                displayed in the top left corner of your charts.
                                If you would like to use charts without this link, or you appreciate the software and would
                                like to support its creators,

                                <a href="http://www.amcharts.com/online-store/" class="fw-semibold" target="_blank">please
                                    purchase a commercial license</a>.

                                For more info please check <a class="fw-semibold" href="http://www.amcharts.com/demos/"
                                    target="_blank">AmCharts Home</a>.
                            </div>

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
                            To use <strong class="me-1">AmCharts</strong> in your page you will need to include. Please
                            note that some plugins below are optional. For example, if your project does not require AmChart
                            5's radar plugin, you do not need to include it.
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;script src=&quot;https://cdn.amcharts.com/lib/5/index.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;https://cdn.amcharts.com/lib/5/xy.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;https://cdn.amcharts.com/lib/5/percent.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;https://cdn.amcharts.com/lib/5/radar.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;https://cdn.amcharts.com/lib/5/themes/Animated.js&quot;&gt;&lt;/script&gt;</code></pre>
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
                            initialize the chart via javascript. Click on the legend items to show/hide series. A special
                            method `arrangeColumns` is added to this demo which nicely aniamtes columns so that they would
                            always be centered within the cell.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <!--begin::Card-->
                            <div class="card card-bordered">
                                <div class="card-body">
                                    <div id="kt_amcharts_1" style="height: 500px;"></div>
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
                                            href="#kt_highlight_68e50423edf89" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e50423edf8c" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e50423edf89" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">am5.ready(function () {

    // Create root element
    // https://www.amcharts.com/docs/v5/getting-started/#Root_element
    var root = am5.Root.new(&quot;kt_amcharts_1&quot;);

    // Set themes
    // https://www.amcharts.com/docs/v5/concepts/themes/
    root.setThemes([
        am5themes_Animated.new(root)
    ]);

    // Create chart
    // https://www.amcharts.com/docs/v5/charts/xy-chart/
    var chart = root.container.children.push(am5xy.XYChart.new(root, {
        panX: false,
        panY: false,
        wheelX: &quot;panX&quot;,
        wheelY: &quot;zoomX&quot;,
        layout: root.verticalLayout
    }));

    // Add legend
    // https://www.amcharts.com/docs/v5/charts/xy-chart/legend-xy-series/
    var legend = chart.children.push(
        am5.Legend.new(root, {
            centerX: am5.p50,
            x: am5.p50
        })
    );

    var data = [...]

    // Create axes
    // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
    var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
        categoryField: &quot;year&quot;,
        renderer: am5xy.AxisRendererX.new(root, {
            cellStartLocation: 0.1,
            cellEndLocation: 0.9
        }),
        tooltip: am5.Tooltip.new(root, {})
    }));

    xAxis.data.setAll(data);

    var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
        renderer: am5xy.AxisRendererY.new(root, {})
    }));

    // Add series
    // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
    function makeSeries(name, fieldName) {
        var series = chart.series.push(am5xy.ColumnSeries.new(root, {
            name: name,
            xAxis: xAxis,
            yAxis: yAxis,
            valueYField: fieldName,
            categoryXField: &quot;year&quot;
        }));

        series.columns.template.setAll({
            tooltipText: &quot;{name}, {categoryX}:{valueY}&quot;,
            width: am5.percent(90),
            tooltipY: 0
        });

        series.data.setAll(data);

        // Make stuff animate on load
        // https://www.amcharts.com/docs/v5/concepts/animations/
        series.appear();

        series.bullets.push(function () {
            return am5.Bullet.new(root, {
                locationY: 0,
                sprite: am5.Label.new(root, {
                    text: &quot;{valueY}&quot;,
                    fill: root.interfaceColors.get(&quot;alternativeText&quot;),
                    centerY: 0,
                    centerX: am5.p50,
                    populateText: true
                })
            });
        });

        legend.data.push(series);
    }

    makeSeries(&quot;Europe&quot;, &quot;europe&quot;);
    makeSeries(&quot;North America&quot;, &quot;namerica&quot;);
    makeSeries(&quot;Asia&quot;, &quot;asia&quot;);
    makeSeries(&quot;Latin America&quot;, &quot;lamerica&quot;);
    makeSeries(&quot;Middle East&quot;, &quot;meast&quot;);
    makeSeries(&quot;Africa&quot;, &quot;africa&quot;);


    // Make stuff animate on load
    // https://www.amcharts.com/docs/v5/concepts/animations/
    chart.appear(1000, 100);

}); // end am5.ready()</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e50423edf8c" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;div class=&quot;card card-bordered&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        &lt;div id=&quot;kt_amcharts_1&quot; style=&quot;height: 500px;&quot;&gt;&lt;/div&gt;
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
                            initialize the chart via javascript. This demo shows comparison of two line series from
                            different periods.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <!--begin::Card-->
                            <div class="card card-bordered">
                                <div class="card-body">
                                    <div id="kt_amcharts_2" style="height: 500px;"></div>
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
                                            href="#kt_highlight_68e50423edfc3" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e50423edfc4" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e50423edfc3"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">am5.ready(function () {
    var data = [];
    var price0 = 1000,
        price1 = 1200;

    for (var i = 0; i &lt; 360; i++) {
        price0 += Math.round((Math.random() &lt; 0.5 ? 1 : -1) * Math.random() * 100);
        data.push({ date0: new Date(2015, 0, i).getTime(), price0: price0 });
    }

    for (var i = 0; i &lt; 360; i++) {
        price1 += Math.round((Math.random() &lt; 0.5 ? 1 : -1) * Math.random() * 100);
        data.push({ date1: new Date(2017, 0, i).getTime(), price1: price1 });
    }

    // Create root element
    // https://www.amcharts.com/docs/v5/getting-started/#Root_element
    var root = am5.Root.new(&quot;kt_amcharts_2&quot;);

    // Set themes
    // https://www.amcharts.com/docs/v5/concepts/themes/
    root.setThemes([
        am5themes_Animated.new(root)
    ]);

    // Create chart
    // https://www.amcharts.com/docs/v5/charts/xy-chart/
    var chart = root.container.children.push(
        am5xy.XYChart.new(root, {
            panX: true,
            panY: true,
            wheelX: &quot;panX&quot;,
            wheelY: &quot;zoomX&quot;
        })
    );

    // Add cursor
    // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
    var cursor = chart.set(&quot;cursor&quot;, am5xy.XYCursor.new(root, {
        behavior: &quot;none&quot;
    }));
    cursor.lineY.set(&quot;visible&quot;, false);

    // Create axes
    // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
    var xAxis0 = chart.xAxes.push(
        am5xy.DateAxis.new(root, {
            baseInterval: { timeUnit: &quot;day&quot;, count: 1 },
            renderer: am5xy.AxisRendererX.new(root, {}),
            tooltip: am5.Tooltip.new(root, {}),
            tooltipDateFormat: &quot;yyyy-MM-dd&quot;
        })
    );

    var xAxis1 = chart.xAxes.push(
        am5xy.DateAxis.new(root, {
            marginTop: 10,
            baseInterval: { timeUnit: &quot;day&quot;, count: 1 },
            renderer: am5xy.AxisRendererX.new(root, {}),
            tooltip: am5.Tooltip.new(root, {}),
            tooltipDateFormat: &quot;yyyy-MM-dd&quot;
        })
    );

    var yAxis = chart.yAxes.push(
        am5xy.ValueAxis.new(root, {
            maxDeviation: 1,
            renderer: am5xy.AxisRendererY.new(root, { pan: &quot;zoom&quot; })
        })
    );

    // Add series
    // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
    var series0 = chart.series.push(
        am5xy.LineSeries.new(root, {
            name: &quot;Series&quot;,
            xAxis: xAxis0,
            yAxis: yAxis,
            valueYField: &quot;price0&quot;,
            valueXField: &quot;date0&quot;,
            tooltip: am5.Tooltip.new(root, {
                labelText: &quot;{valueY}&quot;
            })
        })
    );

    var series1 = chart.series.push(
        am5xy.LineSeries.new(root, {
            name: &quot;Series&quot;,
            xAxis: xAxis1,
            yAxis: yAxis,
            valueYField: &quot;price1&quot;,
            valueXField: &quot;date1&quot;,
            tooltip: am5.Tooltip.new(root, {
                labelText: &quot;{valueY}&quot;
            })
        })
    );

    // Add scrollbar
    // https://www.amcharts.com/docs/v5/charts/xy-chart/scrollbars/
    var scrollbar = chart.set(&quot;scrollbarX&quot;, am5xy.XYChartScrollbar.new(root, {
        orientation: &quot;horizontal&quot;,
        height: 60
    }));

    var sbDateAxis = scrollbar.chart.xAxes.push(
        am5xy.DateAxis.new(root, {
            baseInterval: {
                timeUnit: &quot;day&quot;,
                count: 1
            },
            renderer: am5xy.AxisRendererX.new(root, {})
        })
    );

    var sbValueAxis = scrollbar.chart.yAxes.push(
        am5xy.ValueAxis.new(root, {
            renderer: am5xy.AxisRendererY.new(root, {})
        })
    );

    var sbSeries = scrollbar.chart.series.push(
        am5xy.LineSeries.new(root, {
            valueYField: &quot;price0&quot;,
            valueXField: &quot;date0&quot;,
            xAxis: sbDateAxis,
            yAxis: sbValueAxis
        })
    );

    series0.data.setAll(data);
    series1.data.setAll(data);
    sbSeries.data.setAll(data);

    // Make stuff animate on load
    // https://www.amcharts.com/docs/v5/concepts/animations/
    series0.appear(1000);
    series1.appear(1000);
    chart.appear(1000, 100);

}); // end am5.ready()</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e50423edfc4" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;div class=&quot;card card-bordered&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        &lt;div id=&quot;kt_amcharts_2&quot; style=&quot;height: 500px;&quot;&gt;&lt;/div&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="pie_chart" data-kt-scroll-offset="50">
                            <a href="#pie_chart"></a>

                            Pie Chart
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Simply define a blank <code>div</code> with a unique <code>id</code> in your HTML markup. Then
                            initialize the chart via javascript. Each slice in pie series can have individual radius value,
                            coming directly from data.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <!--begin::Card-->
                            <div class="card border">
                                <div class="card-body">
                                    <div id="kt_amcharts_3" style="height: 500px;"></div>
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
                                            href="#kt_highlight_68e50423edff7" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e50423edff8" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e50423edff7"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">am5.ready(function () {
    // Create root element
    // https://www.amcharts.com/docs/v5/getting-started/#Root_element
    var root = am5.Root.new(&quot;kt_amcharts_3&quot;);

    // Set themes
    // https://www.amcharts.com/docs/v5/concepts/themes/
    root.setThemes([
        am5themes_Animated.new(root)
    ]);

    // Create chart
    // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
    var chart = root.container.children.push(am5percent.PieChart.new(root, {
        layout: root.verticalLayout
    }));

    // Create series
    // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
    var series = chart.series.push(am5percent.PieSeries.new(root, {
        alignLabels: true,
        calculateAggregates: true,
        valueField: &quot;value&quot;,
        categoryField: &quot;category&quot;
    }));

    series.slices.template.setAll({
        strokeWidth: 3,
        stroke: am5.color(0xffffff)
    });

    series.labelsContainer.set(&quot;paddingTop&quot;, 30)

    // Set up adapters for variable slice radius
    // https://www.amcharts.com/docs/v5/concepts/settings/adapters/
    series.slices.template.adapters.add(&quot;radius&quot;, function (radius, target) {
        var dataItem = target.dataItem;
        var high = series.getPrivate(&quot;valueHigh&quot;);

        if (dataItem) {
            var value = target.dataItem.get(&quot;valueWorking&quot;, 0);
            return radius * value / high
        }
        return radius;
    });

    // Set data
    // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
    series.data.setAll([{
        value: 10,
        category: &quot;One&quot;
    }, {
        value: 9,
        category: &quot;Two&quot;
    }, {
        value: 6,
        category: &quot;Three&quot;
    }, {
        value: 5,
        category: &quot;Four&quot;
    }, {
        value: 4,
        category: &quot;Five&quot;
    }, {
        value: 3,
        category: &quot;Six&quot;
    }]);

    // Create legend
    // https://www.amcharts.com/docs/v5/charts/percent-charts/legend-percent-series/
    var legend = chart.children.push(am5.Legend.new(root, {
        centerX: am5.p50,
        x: am5.p50,
        marginTop: 15,
        marginBottom: 15
    }));

    legend.data.setAll(series.dataItems);

    // Play initial series animation
    // https://www.amcharts.com/docs/v5/concepts/animations/#Animation_of_series
    series.appear(1000, 100);

}); // end am5.ready()</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e50423edff8" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;div class=&quot;card card-bordered&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        &lt;div id=&quot;kt_amcharts_3&quot; style=&quot;height: 500px;&quot;&gt;&lt;/div&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="radar-timeline_thart" data-kt-scroll-offset="50">
                            <a href="#radar-timeline_thart"></a>

                            Radar Timeline Chart
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
                            <div class="card border">
                                <div class="card-body">
                                    <div id="kt_amcharts_4" style="height: 500px;"></div>
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
                                            href="#kt_highlight_68e50423ee02c" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e50423ee02d" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e50423ee02c"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">am5.ready(function () {
    // Create root element
    // https://www.amcharts.com/docs/v5/getting-started/#Root_element
    var root = am5.Root.new(&quot;kt_amcharts_4&quot;);

    // Create custom theme
    // https://www.amcharts.com/docs/v5/concepts/themes/#Quick_custom_theme
    const myTheme = am5.Theme.new(root);
    myTheme.rule(&quot;Label&quot;).set(&quot;fontSize&quot;, 10);
    myTheme.rule(&quot;Grid&quot;).set(&quot;strokeOpacity&quot;, 0.06);

    // Set themes
    // https://www.amcharts.com/docs/v5/concepts/themes/
    root.setThemes([
        am5themes_Animated.new(root),
        myTheme
    ]);

    // Data
    var temperatures = {
        &quot;EUROPE&quot;: [...],
        &quot;AFRICA&quot;: [...],
        &quot;AMERICA&quot;: [...],
        &quot;ASIA&quot;: [...],
        &quot;OCEANIA&quot;: [...]
    }

    // Modify defaults
    root.numberFormatter.set(&quot;numberFormat&quot;, &quot;+#.0°C|#.0°C|0.0°C&quot;);

    var startYear = 1973;
    var endYear = 2016;
    var currentYear = 1995;

    var div = document.getElementById(&quot;chartdiv&quot;);

    var colorSet = am5.ColorSet.new(root, {});

    // Create chart
    // https://www.amcharts.com/docs/v5/charts/radar-chart/
    var chart = root.container.children.push(am5radar.RadarChart.new(root, {
        panX: false,
        panY: false,
        wheelX: &quot;panX&quot;,
        wheelY: &quot;zoomX&quot;,
        innerRadius: am5.percent(40),
        radius: am5.percent(65),
        startAngle: 270 - 170,
        endAngle: 270 + 170
    }));

    // Add cursor
    // https://www.amcharts.com/docs/v5/charts/radar-chart/#Cursor
    var cursor = chart.set(&quot;cursor&quot;, am5radar.RadarCursor.new(root, {
        behavior: &quot;zoomX&quot;,
        radius: am5.percent(40),
        innerRadius: -25
    }));
    cursor.lineY.set(&quot;visible&quot;, false);

    // Create axes and their renderers
    // https://www.amcharts.com/docs/v5/charts/radar-chart/#Adding_axes
    var xRenderer = am5radar.AxisRendererCircular.new(root, {
        minGridDistance: 10
    });

    xRenderer.labels.template.setAll({
        radius: 10,
        textType: &quot;radial&quot;,
        centerY: am5.p50
    });

    var yRenderer = am5radar.AxisRendererRadial.new(root, {
        axisAngle: 90
    });

    yRenderer.labels.template.setAll({
        centerX: am5.p50
    });

    var categoryAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
        maxDeviation: 0,
        categoryField: &quot;country&quot;,
        renderer: xRenderer
    }));

    var valueAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
        min: -3,
        max: 6,
        extraMax: 0.1,
        renderer: yRenderer
    }));

    // Create series
    // https://www.amcharts.com/docs/v5/charts/radar-chart/#Adding_series
    var series = chart.series.push(am5radar.RadarColumnSeries.new(root, {
        calculateAggregates: true,
        name: &quot;Series&quot;,
        xAxis: categoryAxis,
        yAxis: valueAxis,
        valueYField: &quot;value&quot; + currentYear,
        categoryXField: &quot;country&quot;,
        tooltip: am5.Tooltip.new(root, {
            labelText: &quot;{categoryX}: {valueY}&quot;
        })
    }));

    series.columns.template.set(&quot;strokeOpacity&quot;, 0);

    // Set up heat rules
    // https://www.amcharts.com/docs/v5/concepts/settings/heat-rules/
    series.set(&quot;heatRules&quot;, [{
        target: series.columns.template,
        key: &quot;fill&quot;,
        min: am5.color(0x673AB7),
        max: am5.color(0xF44336),
        dataField: &quot;valueY&quot;
    }]);

    // Add scrollbars
    // https://www.amcharts.com/docs/v5/charts/xy-chart/scrollbars/
    chart.set(&quot;scrollbarX&quot;, am5.Scrollbar.new(root, { orientation: &quot;horizontal&quot; }));
    chart.set(&quot;scrollbarY&quot;, am5.Scrollbar.new(root, { orientation: &quot;vertical&quot; }));

    // Add year label
    var yearLabel = chart.radarContainer.children.push(am5.Label.new(root, {
        fontSize: &quot;2em&quot;,
        text: currentYear.toString(),
        centerX: am5.p50,
        centerY: am5.p50,
        fill: am5.color(0x673AB7)
    }));

    // Generate and set data
    // https://www.amcharts.com/docs/v5/charts/radar-chart/#Setting_data
    var data = generateRadarData();
    series.data.setAll(data);
    categoryAxis.data.setAll(data);

    series.appear(1000);
    chart.appear(1000, 100);

    function generateRadarData() {
        var data = [];
        var i = 0;
        for (var continent in temperatures) {
            var continentData = temperatures[continent];

            continentData.forEach(function (country) {
                var rawDataItem = { &quot;country&quot;: country[0] }

                for (var y = 2; y &lt; country.length; y++) {
                    rawDataItem[&quot;value&quot; + (startYear + y - 2)] = country[y];
                }

                data.push(rawDataItem);
            });

            createRange(continent, continentData, i);
            i++;

        }
        return data;
    }

    function createRange(name, continentData, index) {
        var axisRange = categoryAxis.createAxisRange(categoryAxis.makeDataItem({ above: true }));
        axisRange.get(&quot;label&quot;).setAll({ text: name });
        // first country
        axisRange.set(&quot;category&quot;, continentData[0][0]);
        // last country
        axisRange.set(&quot;endCategory&quot;, continentData[continentData.length - 1][0]);

        // every 3rd color for a bigger contrast
        var fill = axisRange.get(&quot;axisFill&quot;);
        fill.setAll({
            toggleKey: &quot;active&quot;,
            cursorOverStyle: &quot;pointer&quot;,
            fill: colorSet.getIndex(index * 3),
            visible: true,
            innerRadius: -25
        });
        axisRange.get(&quot;grid&quot;).set(&quot;visible&quot;, false);

        var label = axisRange.get(&quot;label&quot;);
        label.setAll({
            fill: am5.color(0xffffff),
            textType: &quot;circular&quot;,
            radius: -16
        });

        fill.events.on(&quot;click&quot;, function (event) {
            var dataItem = event.target.dataItem;
            if (event.target.get(&quot;active&quot;)) {
                categoryAxis.zoom(0, 1);
            }
            else {
                categoryAxis.zoomToCategories(dataItem.get(&quot;category&quot;), dataItem.get(&quot;endCategory&quot;));
            }
        });
    }

    // Create controls
    var container = chart.children.push(am5.Container.new(root, {
        y: am5.percent(95),
        centerX: am5.p50,
        x: am5.p50,
        width: am5.percent(80),
        layout: root.horizontalLayout
    }));

    var playButton = container.children.push(am5.Button.new(root, {
        themeTags: [&quot;play&quot;],
        centerY: am5.p50,
        marginRight: 15,
        icon: am5.Graphics.new(root, {
            themeTags: [&quot;icon&quot;]
        })
    }));

    playButton.events.on(&quot;click&quot;, function () {
        if (playButton.get(&quot;active&quot;)) {
            slider.set(&quot;start&quot;, slider.get(&quot;start&quot;) + 0.0001);
        }
        else {
            slider.animate({
                key: &quot;start&quot;,
                to: 1,
                duration: 15000 * (1 - slider.get(&quot;start&quot;))
            });
        }
    })

    var slider = container.children.push(am5.Slider.new(root, {
        orientation: &quot;horizontal&quot;,
        start: 0.5,
        centerY: am5.p50
    }));

    slider.on(&quot;start&quot;, function (start) {
        if (start === 1) {
            playButton.set(&quot;active&quot;, false);
        }
    });

    slider.events.on(&quot;rangechanged&quot;, function () {
        updateRadarData(startYear + Math.round(slider.get(&quot;start&quot;, 0) * (endYear - startYear)));
    });

    function updateRadarData(year) {
        if (currentYear != year) {
            currentYear = year;
            yearLabel.set(&quot;text&quot;, currentYear.toString());
            am5.array.each(series.dataItems, function (dataItem) {
                var newValue = dataItem.dataContext[&quot;value&quot; + year];
                dataItem.set(&quot;valueY&quot;, newValue);
                dataItem.animate({ key: &quot;valueYWorking&quot;, to: newValue, duration: 500 });
            });
        }
    }
}); // end am5.ready()</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e50423ee02d" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;div class=&quot;card card-bordered&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        &lt;div id=&quot;kt_amcharts_4&quot; style=&quot;height: 500px;&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;script src=&quot;https://cdn.amcharts.com/lib/4/plugins/timeline.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;https://cdn.amcharts.com/lib/4/plugins/bullets.js&quot;&gt;&lt;/script&gt;</code></pre>
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
                        <h1 class="anchor fw-bold mb-5" id="solid_gauge_chart" data-kt-scroll-offset="50">
                            <a href="#solid_gauge_chart"></a>

                            Solid Gauge Chart
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
                                    <div id="kt_amcharts_5" style="height: 500px;"></div>
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
                                            href="#kt_highlight_68e50423ee075" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e50423ee076" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e50423ee075"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">am5.ready(function () {
    // Create root element
    // https://www.amcharts.com/docs/v5/getting-started/#Root_element
    var root = am5.Root.new(&quot;chartdiv&quot;);

    // Set themes
    // https://www.amcharts.com/docs/v5/concepts/themes/
    root.setThemes([
        am5themes_Animated.new(root)
    ]);

    // Create chart
    // https://www.amcharts.com/docs/v5/charts/radar-chart/
    var chart = root.container.children.push(am5radar.RadarChart.new(root, {
        panX: false,
        panY: false,
        wheelX: &quot;panX&quot;,
        wheelY: &quot;zoomX&quot;,
        innerRadius: am5.percent(20),
        startAngle: -90,
        endAngle: 180
    }));

    // Data
    var data = [{
        category: &quot;Research&quot;,
        value: 80,
        full: 100,
        columnSettings: {
            fill: chart.get(&quot;colors&quot;).getIndex(0)
        }
    }, {
        category: &quot;Marketing&quot;,
        value: 35,
        full: 100,
        columnSettings: {
            fill: chart.get(&quot;colors&quot;).getIndex(1)
        }
    }, {
        category: &quot;Distribution&quot;,
        value: 92,
        full: 100,
        columnSettings: {
            fill: chart.get(&quot;colors&quot;).getIndex(2)
        }
    }, {
        category: &quot;Human Resources&quot;,
        value: 68,
        full: 100,
        columnSettings: {
            fill: chart.get(&quot;colors&quot;).getIndex(3)
        }
    }];

    // Add cursor
    // https://www.amcharts.com/docs/v5/charts/radar-chart/#Cursor
    var cursor = chart.set(&quot;cursor&quot;, am5radar.RadarCursor.new(root, {
        behavior: &quot;zoomX&quot;
    }));

    cursor.lineY.set(&quot;visible&quot;, false);

    // Create axes and their renderers
    // https://www.amcharts.com/docs/v5/charts/radar-chart/#Adding_axes
    var xRenderer = am5radar.AxisRendererCircular.new(root, {
        //minGridDistance: 50
    });

    xRenderer.labels.template.setAll({
        radius: 10
    });

    xRenderer.grid.template.setAll({
        forceHidden: true
    });

    var xAxis = chart.xAxes.push(am5xy.ValueAxis.new(root, {
        renderer: xRenderer,
        min: 0,
        max: 100,
        strictMinMax: true,
        numberFormat: &quot;#&#039;%&#039;&quot;,
        tooltip: am5.Tooltip.new(root, {})
    }));

    var yRenderer = am5radar.AxisRendererRadial.new(root, {
        minGridDistance: 20
    });

    yRenderer.labels.template.setAll({
        centerX: am5.p100,
        fontWeight: &quot;500&quot;,
        fontSize: 18,
        templateField: &quot;columnSettings&quot;
    });

    yRenderer.grid.template.setAll({
        forceHidden: true
    });

    var yAxis = chart.yAxes.push(am5xy.CategoryAxis.new(root, {
        categoryField: &quot;category&quot;,
        renderer: yRenderer
    }));

    yAxis.data.setAll(data);

    // Create series
    // https://www.amcharts.com/docs/v5/charts/radar-chart/#Adding_series
    var series1 = chart.series.push(am5radar.RadarColumnSeries.new(root, {
        xAxis: xAxis,
        yAxis: yAxis,
        clustered: false,
        valueXField: &quot;full&quot;,
        categoryYField: &quot;category&quot;,
        fill: root.interfaceColors.get(&quot;alternativeBackground&quot;)
    }));

    series1.columns.template.setAll({
        width: am5.p100,
        fillOpacity: 0.08,
        strokeOpacity: 0,
        cornerRadius: 20
    });

    series1.data.setAll(data);

    var series2 = chart.series.push(am5radar.RadarColumnSeries.new(root, {
        xAxis: xAxis,
        yAxis: yAxis,
        clustered: false,
        valueXField: &quot;value&quot;,
        categoryYField: &quot;category&quot;
    }));

    series2.columns.template.setAll({
        width: am5.p100,
        strokeOpacity: 0,
        tooltipText: &quot;{category}: {valueX}%&quot;,
        cornerRadius: 20,
        templateField: &quot;columnSettings&quot;
    });

    series2.data.setAll(data);

    // Animate chart and series in
    // https://www.amcharts.com/docs/v5/concepts/animations/#Initial_animation
    series1.appear(1000);
    series2.appear(1000);
    chart.appear(1000, 100);
}); // end am5.ready()</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e50423ee076" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;div class=&quot;card card-bordered&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        &lt;div id=&quot;kt_amcharts_5&quot; style=&quot;height: 500px;&quot;&gt;&lt;/div&gt;
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
                                <a href="#pie_chart" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Pie Chart</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#radar-timeline_thart" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Radar Timeline Chart</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#solid_gauge_chart" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Solid Gauge Chart</span>
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
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/custom/documentation/charts/amcharts/charts.js') }}"></script>
@endsection


