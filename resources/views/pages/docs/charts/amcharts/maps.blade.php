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
&lt;script src=&quot;https://cdn.amcharts.com/lib/5/map.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;https://cdn.amcharts.com/lib/5/geodata/worldLow.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;https://cdn.amcharts.com/lib/5/geodata/usaLow.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js&quot;&gt;&lt;/script&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="basic-map" data-kt-scroll-offset="50">
                            <a href="#basic-map"></a>

                            Basic Map
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
                                            href="#kt_highlight_68e504f76330d" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e504f763311" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e504f76330d" role="tabpanel">
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

    // Create the map chart
    // https://www.amcharts.com/docs/v5/charts/map-chart/
    var chart = root.container.children.push(am5map.MapChart.new(root, {
        panX: &quot;translateX&quot;,
        panY: &quot;translateY&quot;,
        projection: am5map.geoMercator()
    }));

    // Create main polygon series for countries
    // https://www.amcharts.com/docs/v5/charts/map-chart/map-polygon-series/
    var polygonSeries = chart.series.push(am5map.MapPolygonSeries.new(root, {
        geoJSON: am5geodata_worldLow,
        exclude: [&quot;AQ&quot;]
    }));

    polygonSeries.mapPolygons.template.setAll({
        tooltipText: &quot;{name}&quot;,
        toggleKey: &quot;active&quot;,
        interactive: true
    });

    polygonSeries.mapPolygons.template.states.create(&quot;hover&quot;, {
        fill: root.interfaceColors.get(&quot;primaryButtonHover&quot;)
    });

    polygonSeries.mapPolygons.template.states.create(&quot;active&quot;, {
        fill: root.interfaceColors.get(&quot;primaryButtonHover&quot;)
    });

    // US Series
    // Create main polygon series for countries
    // https://www.amcharts.com/docs/v5/charts/map-chart/map-polygon-series/
    var polygonSeriesUS = chart.series.push(am5map.MapPolygonSeries.new(root, {
        geoJSON: am5geodata_usaLow
    }));

    polygonSeriesUS.mapPolygons.template.setAll({
        tooltipText: &quot;{name}&quot;,
        toggleKey: &quot;active&quot;,
        interactive: true
    });

    var colors = am5.ColorSet.new(root, {});

    polygonSeriesUS.mapPolygons.template.set(&quot;fill&quot;, colors.getIndex(3));

    polygonSeriesUS.mapPolygons.template.states.create(&quot;hover&quot;, {
        fill: root.interfaceColors.get(&quot;primaryButtonHover&quot;)
    });

    polygonSeriesUS.mapPolygons.template.states.create(&quot;active&quot;, {
        fill: root.interfaceColors.get(&quot;primaryButtonHover&quot;)
    });

    // Add zoom control
    // https://www.amcharts.com/docs/v5/charts/map-chart/map-pan-zoom/#Zoom_control
    chart.set(&quot;zoomControl&quot;, am5map.ZoomControl.new(root, {}));

    // Set clicking on &quot;water&quot; to zoom out
    chart.chartContainer.get(&quot;background&quot;).events.on(&quot;click&quot;, function () {
        chart.goHome();
    })

    // Make stuff animate on load
    chart.appear(1000, 100);
}); // end am5.ready()</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e504f763311" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;div class=&quot;card card-bordered&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        &lt;div id=&quot;kt_amcharts_1&quot; style=&quot;height: 500px;&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;script src=&quot;https://cdn.amcharts.com/lib/4/geodata/worldLow.js&quot;&gt;&lt;/script&gt;</code></pre>
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
                        <h1 class="anchor fw-bold mb-5" id="animated_map" data-kt-scroll-offset="50">
                            <a href="#animated_map"></a>

                            Animated Map
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
                                            href="#kt_highlight_68e504f76334a" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e504f76334b" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e504f76334a"
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

    // Create the map chart
    // https://www.amcharts.com/docs/v5/charts/map-chart/
    var chart = root.container.children.push(am5map.MapChart.new(root, {
        panX: &quot;rotateX&quot;,
        panY: &quot;translateY&quot;,
        projection: am5map.geoMercator(),
        homeGeoPoint: { latitude: 2, longitude: 2 }
    }));

    var cont = chart.children.push(am5.Container.new(root, {
        layout: root.horizontalLayout,
        x: 20,
        y: 40
    }));

    // Add labels and controls
    cont.children.push(am5.Label.new(root, {
        centerY: am5.p50,
        text: &quot;Map&quot;
    }));

    var switchButton = cont.children.push(am5.Button.new(root, {
        themeTags: [&quot;switch&quot;],
        centerY: am5.p50,
        icon: am5.Circle.new(root, {
            themeTags: [&quot;icon&quot;]
        })
    }));

    switchButton.on(&quot;active&quot;, function () {
        if (!switchButton.get(&quot;active&quot;)) {
            chart.set(&quot;projection&quot;, am5map.geoMercator());
            chart.set(&quot;panY&quot;, &quot;translateY&quot;);
            chart.set(&quot;rotationY&quot;, 0);
            backgroundSeries.mapPolygons.template.set(&quot;fillOpacity&quot;, 0);
        } else {
            chart.set(&quot;projection&quot;, am5map.geoOrthographic());
            chart.set(&quot;panY&quot;, &quot;rotateY&quot;)

            backgroundSeries.mapPolygons.template.set(&quot;fillOpacity&quot;, 0.1);
        }
    });

    cont.children.push(
        am5.Label.new(root, {
            centerY: am5.p50,
            text: &quot;Globe&quot;
        })
    );

    // Create series for background fill
    // https://www.amcharts.com/docs/v5/charts/map-chart/map-polygon-series/#Background_polygon
    var backgroundSeries = chart.series.push(am5map.MapPolygonSeries.new(root, {}));
    backgroundSeries.mapPolygons.template.setAll({
        fill: root.interfaceColors.get(&quot;alternativeBackground&quot;),
        fillOpacity: 0,
        strokeOpacity: 0
    });

    // Add background polygon
    // https://www.amcharts.com/docs/v5/charts/map-chart/map-polygon-series/#Background_polygon
    backgroundSeries.data.push({
        geometry: am5map.getGeoRectangle(90, 180, -90, -180)
    });

    // Create main polygon series for countries
    // https://www.amcharts.com/docs/v5/charts/map-chart/map-polygon-series/
    var polygonSeries = chart.series.push(am5map.MapPolygonSeries.new(root, {
        geoJSON: am5geodata_worldLow
    }));

    // Create line series for trajectory lines
    // https://www.amcharts.com/docs/v5/charts/map-chart/map-line-series/
    var lineSeries = chart.series.push(am5map.MapLineSeries.new(root, {}));
    lineSeries.mapLines.template.setAll({
        stroke: root.interfaceColors.get(&quot;alternativeBackground&quot;),
        strokeOpacity: 0.3
    });

    // Create point series for markers
    // https://www.amcharts.com/docs/v5/charts/map-chart/map-point-series/
    var pointSeries = chart.series.push(am5map.MapPointSeries.new(root, {}));

    pointSeries.bullets.push(function () {
        var circle = am5.Circle.new(root, {
            radius: 7,
            tooltipText: &quot;Drag me!&quot;,
            cursorOverStyle: &quot;pointer&quot;,
            tooltipY: 0,
            fill: am5.color(0xffba00),
            stroke: root.interfaceColors.get(&quot;background&quot;),
            strokeWidth: 2,
            draggable: true
        });

        circle.events.on(&quot;dragged&quot;, function (event) {
            var dataItem = event.target.dataItem;
            var projection = chart.get(&quot;projection&quot;);
            var geoPoint = chart.invert({ x: circle.x(), y: circle.y() });

            dataItem.setAll({
                longitude: geoPoint.longitude,
                latitude: geoPoint.latitude
            });
        });

        return am5.Bullet.new(root, {
            sprite: circle
        });
    });

    var paris = addCity({ latitude: 48.8567, longitude: 2.351 }, &quot;Paris&quot;);
    var toronto = addCity({ latitude: 43.8163, longitude: -79.4287 }, &quot;Toronto&quot;);
    var la = addCity({ latitude: 34.3, longitude: -118.15 }, &quot;Los Angeles&quot;);
    var havana = addCity({ latitude: 23, longitude: -82 }, &quot;Havana&quot;);

    var lineDataItem = lineSeries.pushDataItem({
        pointsToConnect: [paris, toronto, la, havana]
    });

    var planeSeries = chart.series.push(am5map.MapPointSeries.new(root, {}));

    var plane = am5.Graphics.new(root, {
        svgPath:
            &quot;m2,106h28l24,30h72l-44,-133h35l80,132h98c21,0 21,34 0,34l-98,0 -80,134h-35l43,-133h-71l-24,30h-28l15,-47&quot;,
        scale: 0.06,
        centerY: am5.p50,
        centerX: am5.p50,
        fill: am5.color(0x000000)
    });

    planeSeries.bullets.push(function () {
        var container = am5.Container.new(root, {});
        container.children.push(plane);
        return am5.Bullet.new(root, { sprite: container });
    });

    var planeDataItem = planeSeries.pushDataItem({
        lineDataItem: lineDataItem,
        positionOnLine: 0,
        autoRotate: true
    });

    planeDataItem.animate({
        key: &quot;positionOnLine&quot;,
        to: 1,
        duration: 10000,
        loops: Infinity,
        easing: am5.ease.yoyo(am5.ease.linear)
    });

    planeDataItem.on(&quot;positionOnLine&quot;, function (value) {
        if (value &gt;= 0.99) {
            plane.set(&quot;rotation&quot;, 180);
        } else if (value &lt;= 0.01) {
            plane.set(&quot;rotation&quot;, 0);
        }
    });

    function addCity(coords, title) {
        return pointSeries.pushDataItem({
            latitude: coords.latitude,
            longitude: coords.longitude
        });
    }

    // Make stuff animate on load
    chart.appear(1000, 100);

}); // end am5.ready()</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e504f76334b" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;div class=&quot;card card-bordered&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        &lt;div id=&quot;kt_amcharts_2&quot; style=&quot;height: 500px;&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;script src=&quot;https://cdn.amcharts.com/lib/4/geodata/worldLow.js&quot;&gt;&lt;/script&gt;</code></pre>
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
                        <h1 class="anchor fw-bold mb-5" id="rotating_map" data-kt-scroll-offset="50">
                            <a href="#rotating_map"></a>

                            Rotating Map
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Simply define a blank <code>div</code> with a unique <code>id</code> in your HTML markup. Then
                            initialize the chart via javascript. With amCharts 4 you can create amazing Map charts and you
                            don’t have to be limited to flattened representation of Earth. As you can see in this demo, you
                            can use an orthographic projection to display the planet as an interactive globe.
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
                                            href="#kt_highlight_68e504f763387" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e504f763388" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e504f763387"
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


    // Create the map chart
    // https://www.amcharts.com/docs/v5/charts/map-chart/
    var chart = root.container.children.push(am5map.MapChart.new(root, {
        panX: &quot;rotateX&quot;,
        panY: &quot;rotateY&quot;,
        projection: am5map.geoOrthographic(),
        paddingBottom: 20,
        paddingTop: 20,
        paddingLeft: 20,
        paddingRight: 20
    }));


    // Create main polygon series for countries
    // https://www.amcharts.com/docs/v5/charts/map-chart/map-polygon-series/
    var polygonSeries = chart.series.push(am5map.MapPolygonSeries.new(root, {
        geoJSON: am5geodata_worldLow
    }));

    polygonSeries.mapPolygons.template.setAll({
        tooltipText: &quot;{name}&quot;,
        toggleKey: &quot;active&quot;,
        interactive: true
    });

    polygonSeries.mapPolygons.template.states.create(&quot;hover&quot;, {
        fill: root.interfaceColors.get(&quot;primaryButtonHover&quot;)
    });


    // Create series for background fill
    // https://www.amcharts.com/docs/v5/charts/map-chart/map-polygon-series/#Background_polygon
    var backgroundSeries = chart.series.push(am5map.MapPolygonSeries.new(root, {}));
    backgroundSeries.mapPolygons.template.setAll({
        fill: root.interfaceColors.get(&quot;alternativeBackground&quot;),
        fillOpacity: 0.1,
        strokeOpacity: 0
    });
    backgroundSeries.data.push({
        geometry: am5map.getGeoRectangle(90, 180, -90, -180)
    });


    // Create graticule series
    // https://www.amcharts.com/docs/v5/charts/map-chart/graticule-series/
    var graticuleSeries = chart.series.push(am5map.GraticuleSeries.new(root, {}));
    graticuleSeries.mapLines.template.setAll({ strokeOpacity: 0.1, stroke: root.interfaceColors.get(&quot;alternativeBackground&quot;) })


    // Rotate animation
    chart.animate({
        key: &quot;rotationX&quot;,
        from: 0,
        to: 360,
        duration: 30000,
        loops: Infinity
    });


    // Make stuff animate on load
    chart.appear(1000, 100);

}); // end am5.ready()</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e504f763388" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;div class=&quot;card card-bordered&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        &lt;div id=&quot;kt_amcharts_3&quot; style=&quot;height: 500px;&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;script src=&quot;https://cdn.amcharts.com/lib/4/geodata/worldLow.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;https://cdn.amcharts.com/lib/4/geodata/continentsLow.js&quot;&gt;&lt;/script&gt;</code></pre>
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
                        <h1 class="anchor fw-bold mb-5" id="timezone_map" data-kt-scroll-offset="50">
                            <a href="#timezone_map"></a>

                            Timezone Map
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
                                            href="#kt_highlight_68e504f7633b3" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e504f7633b4" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e504f7633b3"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">am5.ready(function () {

    // Create root element
    // https://www.amcharts.com/docs/v5/getting-started/#Root_element
    var root = am5.Root.new(&quot;kt_amcharts_4&quot;);

    // Set themes
    // https://www.amcharts.com/docs/v5/concepts/themes/
    root.setThemes([
        am5themes_Animated.new(root)
    ]);

    // Create the map chart
    // https://www.amcharts.com/docs/v5/charts/map-chart/
    var chart = root.container.children.push(
        am5map.MapChart.new(root, {
            panX: &quot;translateX&quot;,
            panY: &quot;translateY&quot;,
            projection: am5map.geoMercator()
        })
    );

    var colorSet = am5.ColorSet.new(root, {});

    // Create main polygon series for time zone areas
    // https://www.amcharts.com/docs/v5/charts/map-chart/map-polygon-series/
    var areaSeries = chart.series.push(
        am5map.MapPolygonSeries.new(root, {
            geoJSON: am5geodata_worldTimeZoneAreasLow
        })
    );

    var areaPolygonTemplate = areaSeries.mapPolygons.template;
    areaPolygonTemplate.setAll({ fillOpacity: 0.6 });
    areaPolygonTemplate.adapters.add(&quot;fill&quot;, function (fill, target) {
        return am5.Color.saturate(
            colorSet.getIndex(areaSeries.mapPolygons.indexOf(target)),
            0.5
        );
    });

    areaPolygonTemplate.states.create(&quot;hover&quot;, { fillOpacity: 0.8 });

    // Create main polygon series for time zones
    // https://www.amcharts.com/docs/v5/charts/map-chart/map-polygon-series/
    var zoneSeries = chart.series.push(
        am5map.MapPolygonSeries.new(root, {
            geoJSON: am5geodata_worldTimeZonesLow
        })
    );

    zoneSeries.mapPolygons.template.setAll({
        fill: am5.color(0x000000),
        fillOpacity: 0.08
    });

    var zonePolygonTemplate = zoneSeries.mapPolygons.template;
    zonePolygonTemplate.setAll({ interactive: true, tooltipText: &quot;{id}&quot; });
    zonePolygonTemplate.states.create(&quot;hover&quot;, { fillOpacity: 0.3 });

    // labels
    var labelSeries = chart.series.push(am5map.MapPointSeries.new(root, {}));
    labelSeries.bullets.push(() =&gt; {
        return am5.Bullet.new(root, {
            sprite: am5.Label.new(root, {
                text: &quot;{id}&quot;,
                populateText: true,
                centerX: am5.p50,
                centerY: am5.p50,
                fontSize: &quot;0.7em&quot;
            })
        });
    });

    // create labels for each zone
    zoneSeries.events.on(&quot;datavalidated&quot;, () =&gt; {
        am5.array.each(zoneSeries.dataItems, (dataItem) =&gt; {
            var centroid = dataItem.get(&quot;mapPolygon&quot;).visualCentroid();
            labelSeries.pushDataItem({
                id: dataItem.get(&quot;id&quot;),
                geometry: {
                    type: &quot;Point&quot;,
                    coordinates: [centroid.longitude, centroid.latitude]
                }
            });
        });
    });

    // Add zoom control
    // https://www.amcharts.com/docs/v5/charts/map-chart/map-pan-zoom/#Zoom_control
    chart.set(&quot;zoomControl&quot;, am5map.ZoomControl.new(root, {}));

    // Add labels and controls
    var cont = chart.children.push(
        am5.Container.new(root, {
            layout: root.horizontalLayout,
            x: 20,
            y: 40
        })
    );

    cont.children.push(
        am5.Label.new(root, {
            centerY: am5.p50,
            text: &quot;Map&quot;
        })
    );

    var switchButton = cont.children.push(
        am5.Button.new(root, {
            themeTags: [&quot;switch&quot;],
            centerY: am5.p50,
            icon: am5.Circle.new(root, {
                themeTags: [&quot;icon&quot;]
            })
        })
    );

    switchButton.on(&quot;active&quot;, function () {
        if (!switchButton.get(&quot;active&quot;)) {
            chart.set(&quot;projection&quot;, am5map.geoMercator());
            chart.set(&quot;panX&quot;, &quot;translateX&quot;);
            chart.set(&quot;panY&quot;, &quot;translateY&quot;);
        } else {
            chart.set(&quot;projection&quot;, am5map.geoOrthographic());
            chart.set(&quot;panX&quot;, &quot;rotateX&quot;);
            chart.set(&quot;panY&quot;, &quot;rotateY&quot;);
        }
    });

    cont.children.push(
        am5.Label.new(root, {
            centerY: am5.p50,
            text: &quot;Globe&quot;
        })
    );
    // Make stuff animate on load
    chart.appear(1000, 100);

}); // end am5.ready()</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e504f7633b4" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;div class=&quot;card card-bordered&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        &lt;div id=&quot;kt_amcharts_4&quot; style=&quot;height: 500px;&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;script src=&quot;https://cdn.amcharts.com/lib/4/geodata/worldTimeZoneAreasHigh.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;https://cdn.amcharts.com/lib/4/geodata/worldTimeZonesHigh.js&quot;&gt;&lt;/script&gt;</code></pre>
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
                                <a href="#basic-map" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Basic Map</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#animated_map" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Animated Map</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#rotating_map" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Rotating Map</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#timezone_map" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Timezone Map</span>
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
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/custom/documentation/charts/amcharts/maps.js') }}"></script>
    <!--end::Custom Javascript-->
@endsection


