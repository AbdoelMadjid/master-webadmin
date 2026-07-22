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
                            To use <strong class="me-1">AmCharts</strong> in your page you will need to include
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
                        <h1 class="anchor fw-bold mb-5" id="basic_stock_shart" data-kt-scroll-offset="50">
                            <a href="#basic_stock_shart"></a>

                            Basic Stock Chart
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
                                            href="#kt_highlight_68e505c8b5320" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e505c8b5324" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e505c8b5320" role="tabpanel">
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
        panX: true,
        panY: false,
        wheelX: &quot;panX&quot;,
        wheelY: &quot;zoomX&quot;,
        layout: root.verticalLayout
    }));

    chart.get(&quot;colors&quot;).set(&quot;step&quot;, 2);


    // Create axes
    // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
    // when axes are in opposite side, they should be added in reverse order
    var volumeAxisRenderer = am5xy.AxisRendererY.new(root, {
        opposite: true
    });
    volumeAxisRenderer.labels.template.setAll({
        centerY: am5.percent(100),
        maxPosition: 0.98
    });
    var volumeAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
        renderer: volumeAxisRenderer,
        height: am5.percent(30),
        layer: 5
    }));
    volumeAxis.axisHeader.set(&quot;paddingTop&quot;, 10);
    volumeAxis.axisHeader.children.push(am5.Label.new(root, {
        text: &quot;Volume&quot;,
        fontWeight: &quot;bold&quot;,
        paddingTop: 5,
        paddingBottom: 5
    }));

    var valueAxisRenderer = am5xy.AxisRendererY.new(root, {
        opposite: true,
        pan: &quot;zoom&quot;
    });
    valueAxisRenderer.labels.template.setAll({
        centerY: am5.percent(100),
        maxPosition: 0.98
    });
    var valueAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
        renderer: valueAxisRenderer,
        height: am5.percent(70),
        maxDeviation: 1
    }));
    valueAxis.axisHeader.children.push(am5.Label.new(root, {
        text: &quot;Value&quot;,
        fontWeight: &quot;bold&quot;,
        paddingBottom: 5,
        paddingTop: 5
    }));



    var dateAxisRenderer = am5xy.AxisRendererX.new(root, {
        pan: &quot;zoom&quot;
    });
    dateAxisRenderer.labels.template.setAll({
        minPosition: 0.01,
        maxPosition: 0.99
    });
    var dateAxis = chart.xAxes.push(am5xy.DateAxis.new(root, {
        groupData: true,
        maxDeviation: 0.5,
        baseInterval: {
            timeUnit: &quot;day&quot;,
            count: 1
        },
        renderer: dateAxisRenderer
    }));
    dateAxis.set(&quot;tooltip&quot;, am5.Tooltip.new(root, {}));


    // Add series
    // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
    var valueSeries1 = chart.series.push(am5xy.LineSeries.new(root, {
        name: &quot;XTD&quot;,
        valueYField: &quot;price1&quot;,
        calculateAggregates: true,
        valueXField: &quot;date&quot;,
        xAxis: dateAxis,
        yAxis: valueAxis,
        legendValueText: &quot;{valueY}&quot;
    }));

    var valueTooltip = valueSeries1.set(&quot;tooltip&quot;, am5.Tooltip.new(root, {
        getFillFromSprite: false,
        getStrokeFromSprite: true,
        getLabelFillFromSprite: true,
        autoTextColor: false,
        pointerOrientation: &quot;horizontal&quot;,
        labelText: &quot;{name}: {valueY} {valueYChangePercent.formatNumber(&#039;[#00ff00]+#,###.##|[#ff0000]#,###.##|[#999999]0&#039;)}%&quot;
    }));
    valueTooltip.get(&quot;background&quot;).set(&quot;fill&quot;, root.interfaceColors.get(&quot;background&quot;));

    var firstColor = chart.get(&quot;colors&quot;).getIndex(0);
    var volumeSeries = chart.series.push(am5xy.ColumnSeries.new(root, {
        name: &quot;XTD&quot;,
        fill: firstColor,
        stroke: firstColor,
        valueYField: &quot;quantity&quot;,
        valueXField: &quot;date&quot;,
        valueYGrouped: &quot;sum&quot;,
        xAxis: dateAxis,
        yAxis: volumeAxis,
        legendValueText: &quot;{valueY}&quot;,
        tooltip: am5.Tooltip.new(root, {
            labelText: &quot;{valueY}&quot;
        })
    }));
    volumeSeries.columns.template.setAll({
        strokeWidth: 0.2,
        strokeOpacity: 1,
        stroke: am5.color(0xffffff)
    });


    // Add legend to axis header
    // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/axis-headers/
    // https://www.amcharts.com/docs/v5/charts/xy-chart/legend-xy-series/
    var valueLegend = valueAxis.axisHeader.children.push(
        am5.Legend.new(root, {
            useDefaultMarker: true
        })
    );
    valueLegend.data.setAll([valueSeries1]);

    var volumeLegend = volumeAxis.axisHeader.children.push(
        am5.Legend.new(root, {
            useDefaultMarker: true
        })
    );
    volumeLegend.data.setAll([volumeSeries]);


    // Stack axes vertically
    // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/#Stacked_axes
    chart.rightAxesContainer.set(&quot;layout&quot;, root.verticalLayout);


    // Add cursor
    // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
    chart.set(&quot;cursor&quot;, am5xy.XYCursor.new(root, {}))


    // Add scrollbar
    // https://www.amcharts.com/docs/v5/charts/xy-chart/scrollbars/
    var scrollbar = chart.set(&quot;scrollbarX&quot;, am5xy.XYChartScrollbar.new(root, {
        orientation: &quot;horizontal&quot;,
        height: 50
    }));

    var sbDateAxis = scrollbar.chart.xAxes.push(am5xy.DateAxis.new(root, {
        groupData: true,
        groupIntervals: [{
            timeUnit: &quot;week&quot;,
            count: 1
        }],
        baseInterval: {
            timeUnit: &quot;day&quot;,
            count: 1
        },
        renderer: am5xy.AxisRendererX.new(root, {})
    }));

    var sbValueAxis = scrollbar.chart.yAxes.push(
        am5xy.ValueAxis.new(root, {
            renderer: am5xy.AxisRendererY.new(root, {})
        })
    );

    var sbSeries = scrollbar.chart.series.push(am5xy.LineSeries.new(root, {
        valueYField: &quot;price1&quot;,
        valueXField: &quot;date&quot;,
        xAxis: sbDateAxis,
        yAxis: sbValueAxis
    }));

    sbSeries.fills.template.setAll({
        visible: true,
        fillOpacity: 0.3
    });


    // Generate random data and set on series
    // https://www.amcharts.com/docs/v5/charts/xy-chart/series/#Setting_data
    var data = [];
    var price1 = 1000;
    var quantity = 10000;

    for (var i = 1; i &lt; 5000; i++) {
        price1 += Math.round((Math.random() &lt; 0.5 ? 1 : -1) * Math.random() * 20);

        if (price1 &lt; 100) {
            price1 = 100;
        }

        quantity += Math.round((Math.random() &lt; 0.5 ? 1 : -1) * Math.random() * 500);

        if (quantity &lt; 0) {
            quantity *= -1;
        }
        data.push({
            date: new Date(2010, 0, i).getTime(),
            price1: price1,
            quantity: quantity
        });
    }

    valueSeries1.data.setAll(data);
    volumeSeries.data.setAll(data);
    sbSeries.data.setAll(data);


    // Make stuff animate on load
    // https://www.amcharts.com/docs/v5/concepts/animations/
    chart.appear(1000, 100);

}); // end am5.ready()</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e505c8b5324" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;div class=&quot;card card-bordered&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        &lt;div id=&quot;kt_amcharts_1&quot; style=&quot;height: 500px;&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;script src=&quot;https://cdn.amcharts.com/lib/4/plugins/rangeSelector.js&quot;&gt;&lt;/script&gt;</code></pre>
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
                        <h1 class="anchor fw-bold mb-5" id="stock_comparison_chart" data-kt-scroll-offset="50">
                            <a href="#stock_comparison_chart"></a>

                            Stock Comparison Chart
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
                            <div class="card bordered">
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
                                            href="#kt_highlight_68e505c8b5372" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e505c8b5373" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e505c8b5372"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">am5.ready(function () {

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
    var chart = root.container.children.push(am5xy.XYChart.new(root, {
        panX: true,
        panY: false,
        wheelX: &quot;panX&quot;,
        wheelY: &quot;zoomX&quot;,
        layout: root.verticalLayout
    }));

    chart.get(&quot;colors&quot;).set(&quot;step&quot;, 2);


    // Create axes
    // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/

    // Y axis #1
    var valueAxisRenderer = am5xy.AxisRendererY.new(root, {
        opposite: true,
        pan: &quot;zoom&quot;
    });

    valueAxisRenderer.labels.template.setAll({
        centerY: am5.percent(100),
        maxPosition: 0.98
    });

    var valueAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
        renderer: valueAxisRenderer,
        maxDeviation: 1,
        extraMin: 0.2 // gives some extra space
    }));

    // Y axis #2
    var volumeAxisRenderer = am5xy.AxisRendererY.new(root, {
        opposite: true
    });

    volumeAxisRenderer.labels.template.setAll({
        forceHidden: true
    });

    volumeAxisRenderer.grid.template.setAll({
        forceHidden: true
    });

    var volumeAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
        renderer: volumeAxisRenderer,
        height: am5.percent(25),
        layer: 5,
        centerY: am5.p100,
        y: am5.p100
    }));

    volumeAxis.axisHeader.set(&quot;paddingTop&quot;, 10);


    // X axis
    var dateAxisRenderer = am5xy.AxisRendererX.new(root, {});

    dateAxisRenderer.labels.template.setAll({
        minPosition: 0.01,
        maxPosition: 0.99
    });

    var dateAxis = chart.xAxes.push(am5xy.DateAxis.new(root, {
        groupData: true,
        baseInterval: {
            timeUnit: &quot;day&quot;,
            count: 1
        },
        renderer: dateAxisRenderer
    }));

    dateAxis.set(&quot;tooltip&quot;, am5.Tooltip.new(root, {
        themeTags: [&quot;axis&quot;]
    }));


    // Add series
    // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
    var valueSeries1 = chart.series.push(am5xy.LineSeries.new(root, {
        name: &quot;XTD&quot;,
        valueYField: &quot;price1&quot;,
        calculateAggregates: true,
        valueYShow: &quot;valueYChangeSelectionPercent&quot;,
        valueXField: &quot;date&quot;,
        xAxis: dateAxis,
        yAxis: valueAxis,
        legendValueText: &quot;{valueY}&quot;
    }));

    var valueSeries2 = chart.series.push(am5xy.LineSeries.new(root, {
        name: &quot;BTD&quot;,
        valueYField: &quot;price2&quot;,
        calculateAggregates: true,
        valueYShow: &quot;valueYChangeSelectionPercent&quot;,
        valueXField: &quot;date&quot;,
        xAxis: dateAxis,
        yAxis: valueAxis,
        legendValueText: &quot;{valueY}&quot;
    }));


    // Add series tooltips
    // https://www.amcharts.com/docs/v5/charts/xy-chart/series/#Tooltips
    var valueTooltip = valueSeries1.set(&quot;tooltip&quot;, am5.Tooltip.new(root, {
        getFillFromSprite: false,
        getStrokeFromSprite: true,
        getLabelFillFromSprite: true,
        autoTextColor: false,
        pointerOrientation: &quot;horizontal&quot;,
        labelText: &quot;{name}: {valueY} {valueYChangePercent.formatNumber(&#039;[#00ff00]+#,###.##|[#ff0000]#,###.##|[#999999]0&#039;)}%&quot;
    }));
    valueTooltip.get(&quot;background&quot;).set(&quot;fill&quot;, root.interfaceColors.get(&quot;background&quot;));

    var valueTooltip2 = valueSeries2.set(&quot;tooltip&quot;, am5.Tooltip.new(root, {
        getFillFromSprite: false,
        getStrokeFromSprite: true,
        getLabelFillFromSprite: true,
        autoTextColor: false,
        pointerOrientation: &quot;horizontal&quot;,
        labelText: &quot;{name}: {valueY} {valueYChangePercent.formatNumber(&#039;[#00ff00]+#,###.##|[#ff0000]#,###.##|[#999999]0&#039;)}%&quot;
    }));
    valueTooltip2.get(&quot;background&quot;).set(&quot;fill&quot;, root.interfaceColors.get(&quot;background&quot;));

    var firstColor = chart.get(&quot;colors&quot;).getIndex(0);
    var volumeSeries = chart.series.push(am5xy.ColumnSeries.new(root, {
        name: &quot;XTD&quot;,
        fill: firstColor,
        stroke: firstColor,
        valueYField: &quot;quantity&quot;,
        valueXField: &quot;date&quot;,
        valueYGrouped: &quot;sum&quot;,
        xAxis: dateAxis,
        yAxis: volumeAxis,
        legendValueText: &quot;{valueY}&quot;,
        tooltip: am5.Tooltip.new(root, {
            labelText: &quot;{valueY}&quot;
        })
    }));
    volumeSeries.columns.template.setAll({
        width: am5.percent(40),
        strokeWidth: 0.2,
        strokeOpacity: 1,
        stroke: am5.color(0xffffff)
    });


    // Add legend to axis header
    // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/axis-headers/
    // https://www.amcharts.com/docs/v5/charts/xy-chart/legend-xy-series/
    var legend = chart.plotContainer.children.push(am5.Legend.new(root, {
        useDefaultMarker: true
    }));
    legend.data.setAll([valueSeries1, valueSeries2]);


    // Add cursor
    // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
    chart.set(&quot;cursor&quot;, am5xy.XYCursor.new(root, {}))


    // Add scrollbar
    // https://www.amcharts.com/docs/v5/charts/xy-chart/scrollbars/
    var scrollbar = chart.set(&quot;scrollbarX&quot;, am5xy.XYChartScrollbar.new(root, {
        orientation: &quot;horizontal&quot;,
        height: 50
    }));

    var sbDateAxis = scrollbar.chart.xAxes.push(am5xy.DateAxis.new(root, {
        groupData: true,
        groupIntervals: [{
            timeUnit: &quot;week&quot;,
            count: 1
        }],
        baseInterval: {
            timeUnit: &quot;day&quot;,
            count: 1
        },
        renderer: am5xy.AxisRendererX.new(root, {})
    }));

    var sbValueAxis = scrollbar.chart.yAxes.push(am5xy.ValueAxis.new(root, {
        renderer: am5xy.AxisRendererY.new(root, {})
    }));

    var sbSeries = scrollbar.chart.series.push(am5xy.LineSeries.new(root, {
        valueYField: &quot;price1&quot;,
        valueXField: &quot;date&quot;,
        xAxis: sbDateAxis,
        yAxis: sbValueAxis
    }));

    sbSeries.fills.template.setAll({
        visible: true,
        fillOpacity: 0.3
    });


    // Generate random data and set on series
    // https://www.amcharts.com/docs/v5/charts/xy-chart/series/#Setting_data
    var data = [];
    var price1 = 1000;
    var price2 = 2000;
    var quantity = 10000;

    for (var i = 1; i &lt; 5000; i++) {
        price1 += Math.round((Math.random() &lt; 0.5 ? 1 : -1) * Math.random() * 20);
        price2 += Math.round((Math.random() &lt; 0.5 ? 1 : -1) * Math.random() * 20);

        if (price1 &lt; 100) {
            price1 = 100;
        }

        if (price2 &lt; 100) {
            price2 = 100;
        }

        quantity += Math.round((Math.random() &lt; 0.5 ? 1 : -1) * Math.random() * 500);

        if (quantity &lt; 0) {
            quantity *= -1;
        }
        data.push({
            date: new Date(2010, 0, i).getTime(),
            price1: price1,
            price2: price2,
            quantity: quantity
        });
    }

    valueSeries1.data.setAll(data);
    valueSeries2.data.setAll(data);

    volumeSeries.data.setAll(data);
    sbSeries.data.setAll(data);


    // Make stuff animate on load
    // https://www.amcharts.com/docs/v5/concepts/animations/
    chart.appear(1000, 100);

}); // end am5.ready()</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e505c8b5373" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;div class=&quot;card card-bordered&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        &lt;div id=&quot;kt_amcharts_2&quot; style=&quot;height: 500px;&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;script src=&quot;https://cdn.amcharts.com/lib/4/plugins/rangeSelector.js&quot;&gt;&lt;/script&gt;</code></pre>
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
                        <h1 class="anchor fw-bold mb-5" id="candlesticks_chart" data-kt-scroll-offset="50">
                            <a href="#candlesticks_chart"></a>

                            Candlesticks Chart
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
                                            href="#kt_highlight_68e505c8b53bb" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e505c8b53bc" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e505c8b53bb"
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
    // https://www.amcharts.com/docs/v5/charts/xy-chart/
    var chart = root.container.children.push(am5xy.XYChart.new(root, {
        panX: true,
        panY: false,
        wheelX: &quot;panX&quot;,
        wheelY: &quot;zoomX&quot;,
        layout: root.verticalLayout
    }));

    chart.get(&quot;colors&quot;).set(&quot;step&quot;, 2);


    // Create axes
    // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
    var valueAxisRenderer = am5xy.AxisRendererY.new(root, {
        inside: true
    });
    valueAxisRenderer.labels.template.setAll({
        centerY: am5.percent(100),
        maxPosition: 0.98
    });
    var valueAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
        renderer: valueAxisRenderer,
        height: am5.percent(70)
    }));
    valueAxis.axisHeader.children.push(am5.Label.new(root, {
        text: &quot;Value&quot;,
        fontWeight: &quot;bold&quot;,
        paddingBottom: 5,
        paddingTop: 5
    }));

    var volumeAxisRenderer = am5xy.AxisRendererY.new(root, {
        inside: true
    });
    volumeAxisRenderer.labels.template.setAll({
        centerY: am5.percent(100),
        maxPosition: 0.98
    });
    var volumeAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
        renderer: volumeAxisRenderer,
        height: am5.percent(30),
        layer: 5,
        numberFormat: &quot;#a&quot;
    }));
    volumeAxis.axisHeader.set(&quot;paddingTop&quot;, 10);
    volumeAxis.axisHeader.children.push(am5.Label.new(root, {
        text: &quot;Volume&quot;,
        fontWeight: &quot;bold&quot;,
        paddingTop: 5,
        paddingBottom: 5
    }));


    var dateAxisRenderer = am5xy.AxisRendererX.new(root, {});
    dateAxisRenderer.labels.template.setAll({
        minPosition: 0.01,
        maxPosition: 0.99,
        minGridDistance: 40
    });
    var dateAxis = chart.xAxes.push(am5xy.DateAxis.new(root, {
        groupData: true,
        //groupCount: 20,
        baseInterval: { timeUnit: &quot;day&quot;, count: 1 },
        renderer: dateAxisRenderer
    }));
    dateAxis.set(&quot;tooltip&quot;, am5.Tooltip.new(root, {}));

    var color = root.interfaceColors.get(&quot;background&quot;);

    // Add series
    // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
    var valueSeries = chart.series.push(
        am5xy.CandlestickSeries.new(root, {
            fill: color,
            clustered: false,
            calculateAggregates: true,
            stroke: color,
            name: &quot;MSFT&quot;,
            xAxis: dateAxis,
            yAxis: valueAxis,
            valueYField: &quot;Close&quot;,
            openValueYField: &quot;Open&quot;,
            lowValueYField: &quot;Low&quot;,
            highValueYField: &quot;High&quot;,
            valueXField: &quot;Date&quot;,
            lowValueYGrouped: &quot;low&quot;,
            highValueYGrouped: &quot;high&quot;,
            openValueYGrouped: &quot;open&quot;,
            valueYGrouped: &quot;close&quot;,
            legendValueText: &quot;open: {openValueY} low: {lowValueY} high: {highValueY} close: {valueY}&quot;,
            legendRangeValueText: &quot;{valueYClose}&quot;
        })
    );

    var valueTooltip = valueSeries.set(&quot;tooltip&quot;, am5.Tooltip.new(root, {
        getFillFromSprite: false,
        getStrokeFromSprite: true,
        getLabelFillFromSprite: true,
        autoTextColor: false,
        pointerOrientation: &quot;horizontal&quot;,
        labelText: &quot;{name}: {valueY} {valueYChangePreviousPercent.formatNumber(&#039;[#00ff00]+#,###.##|[#ff0000]#,###.##|[#999999]0&#039;)}%&quot;
    }));
    valueTooltip.get(&quot;background&quot;).set(&quot;fill&quot;, root.interfaceColors.get(&quot;background&quot;));


    var firstColor = chart.get(&quot;colors&quot;).getIndex(0);
    var volumeSeries = chart.series.push(am5xy.ColumnSeries.new(root, {
        name: &quot;MSFT&quot;,
        clustered: false,
        fill: firstColor,
        stroke: firstColor,
        valueYField: &quot;Volume&quot;,
        valueXField: &quot;Date&quot;,
        valueYGrouped: &quot;sum&quot;,
        xAxis: dateAxis,
        yAxis: volumeAxis,
        legendValueText: &quot;{valueY}&quot;,
        tooltip: am5.Tooltip.new(root, {
            labelText: &quot;{valueY}&quot;
        })
    }));

    volumeSeries.columns.template.setAll({
        //strokeWidth: 0.5,
        //strokeOpacity: 1,
        //stroke: am5.color(0xffffff)
    });


    // Add legend to axis header
    // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/axis-headers/
    // https://www.amcharts.com/docs/v5/charts/xy-chart/legend-xy-series/
    var valueLegend = valueAxis.axisHeader.children.push(
        am5.Legend.new(root, {
            useDefaultMarker: true
        })
    );
    valueLegend.data.setAll([valueSeries]);

    var volumeLegend = volumeAxis.axisHeader.children.push(
        am5.Legend.new(root, {
            useDefaultMarker: true
        })
    );
    volumeLegend.data.setAll([volumeSeries]);


    // Stack axes vertically
    // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/#Stacked_axes
    chart.leftAxesContainer.set(&quot;layout&quot;, root.verticalLayout);


    // Add cursor
    // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
    chart.set(&quot;cursor&quot;, am5xy.XYCursor.new(root, {}))


    // Add scrollbar
    // https://www.amcharts.com/docs/v5/charts/xy-chart/scrollbars/
    var scrollbar = chart.set(&quot;scrollbarX&quot;, am5xy.XYChartScrollbar.new(root, {
        orientation: &quot;horizontal&quot;,
        height: 50
    }));

    var sbDateAxis = scrollbar.chart.xAxes.push(am5xy.DateAxis.new(root, {
        groupData: true,
        groupIntervals: [{
            timeUnit: &quot;week&quot;,
            count: 1
        }],
        baseInterval: {
            timeUnit: &quot;day&quot;,
            count: 1
        },
        renderer: am5xy.AxisRendererX.new(root, {})
    }));

    var sbValueAxis = scrollbar.chart.yAxes.push(
        am5xy.ValueAxis.new(root, {
            renderer: am5xy.AxisRendererY.new(root, {})
        })
    );

    var sbSeries = scrollbar.chart.series.push(am5xy.LineSeries.new(root, {
        valueYField: &quot;Adj Close&quot;,
        valueXField: &quot;Date&quot;,
        xAxis: sbDateAxis,
        yAxis: sbValueAxis
    }));

    sbSeries.fills.template.setAll({
        visible: true,
        fillOpacity: 0.3
    });


    // Load external data
    // https://www.amcharts.com/docs/v5/charts/xy-chart/series/#Setting_data
    am5.net.load(&quot;https://www.amcharts.com/wp-content/uploads/assets/stock/MSFT.csv&quot;).then(function (result) {

        // Parse loaded data
        var data = am5.CSVParser.parse(result.response, {
            delimiter: &quot;,&quot;,
            reverse: true,
            skipEmpty: true,
            useColumnNames: true
        });

        // Process data (convert dates and values)
        var processor = am5.DataProcessor.new(root, {
            dateFields: [&quot;Date&quot;],
            dateFormat: &quot;yyyy-MM-dd&quot;,
            numericFields: [&quot;Open&quot;, &quot;High&quot;, &quot;Low&quot;, &quot;Close&quot;, &quot;Adj Close&quot;, &quot;Volume&quot;]
        });
        processor.processMany(data);

        console.log(data)

        // Set data
        valueSeries.data.setAll(data);
        volumeSeries.data.setAll(data);
        sbSeries.data.setAll(data);
    });



    // Make stuff animate on load
    // https://www.amcharts.com/docs/v5/concepts/animations/
    chart.appear(1000, 100);

}); // end am5.ready()</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e505c8b53bc" role="tabpanel">
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
                                <a href="#basic_stock_shart" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Basic Stock Chart</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#stock_comparison_chart" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Stock Comparison Chart</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#candlesticks_chart" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Candlesticks Chart</span>
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
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/custom/documentation/charts/amcharts/stock-charts.js') }}"></script>
    <!--end::Custom Javascript-->
@endsection


