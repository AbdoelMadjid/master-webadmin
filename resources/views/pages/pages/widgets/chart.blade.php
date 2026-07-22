@extends('layouts.index')
@section('styles')
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .widget-showcase-row+.widget-showcase-row {
            margin-top: 2rem;
        }

        .widget-showcase-item {
            position: relative;
        }

        .widget-showcase-masonry {
            column-gap: 1.5rem;
            column-count: 1;
        }

        .widget-showcase-masonry .widget-showcase-row {
            display: contents;
        }

        .widget-showcase-masonry .widget-showcase-item {
            width: 100%;
            display: inline-block;
            vertical-align: top;
            break-inside: avoid;
            margin-bottom: 1.5rem;
        }

        .widget-showcase-masonry .widget-showcase-row.widget-showcase-featured {
            display: block;
            column-span: all;
            break-inside: avoid;
            margin-bottom: 1.5rem;
        }

        .widget-showcase-masonry .widget-showcase-row.widget-showcase-featured .widget-showcase-item {
            width: 100%;
            display: block;
        }

        @media (min-width: 992px) {
            .widget-showcase-masonry {
                column-count: 2;
            }
        }
    </style>
    <!--end::Vendor Stylesheets-->
@endsection
@section('toolbar')
    @component('layouts.partials._toolbar')
        @slot('li_1')
            Pages
        @endslot
        @slot('li_2')
            Widgets / Charts
        @endslot
    @endcomponent
@endsection
@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-xxl widget-showcase-masonry">
            @php
                $availableWidgets = collect(glob(resource_path('views/partials/widgets/chart/__widgets-*.blade.php')))
                    ->map(function ($path) {
                        if (preg_match('/__widgets-([0-9]+)\\.blade\\.php$/', $path, $matches)) {
                            return (int) $matches[1];
                        }
                        return null;
                    })
                    ->filter()
                    ->sort()
                    ->values();

                $featuredWidgets = $availableWidgets->intersect([22])->values();
                $masonryWidgets = $availableWidgets->diff([22])->values();
            @endphp

            @if ($featuredWidgets->isNotEmpty())
                <div class="row g-5 g-xl-10 widget-showcase-row widget-showcase-featured">
                    @foreach ($featuredWidgets as $id)
                        <div class="col-12 widget-showcase-item">
                            <x-widget-include-badge name="chart._widget-{{ $id }}" />
                            @include('partials.widgets.chart.__widgets-' . $id)
                        </div>
                    @endforeach
                </div>
            @endif

            <div class="row g-5 g-xl-10 widget-showcase-row">
                @foreach ($masonryWidgets as $id)
                    <div class="widget-showcase-item">
                        <x-widget-include-badge name="chart._widget-{{ $id }}" />
                        @include('partials.widgets.chart.__widgets-' . $id)
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
    <script>
        "use strict";

        (function initChartWidget21Fallback() {
            var element = document.getElementById("kt_charts_widget_21");
            if (!element || typeof ApexCharts === "undefined") {
                return;
            }

            // Skip when widget 21 has already been initialized successfully.
            if (element.querySelector(".apexcharts-canvas")) {
                return;
            }

            var labelColor = KTUtil.getCssVariableValue("--bs-gray-500");
            var borderColor = KTUtil.getCssVariableValue("--bs-gray-200");
            var baseColor = KTUtil.getCssVariableValue("--bs-primary");

            var options = {
                series: [{
                    name: "Hours",
                    data: [6, 8, 7, 9, 6, 10, 8]
                }],
                chart: {
                    type: "bar",
                    height: 325,
                    toolbar: {
                        show: false
                    }
                },
                plotOptions: {
                    bar: {
                        borderRadius: 6,
                        columnWidth: "45%"
                    }
                },
                dataLabels: {
                    enabled: false
                },
                legend: {
                    show: false
                },
                xaxis: {
                    categories: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
                    labels: {
                        style: {
                            colors: labelColor,
                            fontSize: "12px"
                        }
                    },
                    axisBorder: {
                        show: false
                    },
                    axisTicks: {
                        show: false
                    }
                },
                yaxis: {
                    labels: {
                        style: {
                            colors: labelColor,
                            fontSize: "12px"
                        }
                    }
                },
                stroke: {
                    show: true,
                    width: 2,
                    colors: ["transparent"]
                },
                fill: {
                    opacity: 1
                },
                grid: {
                    borderColor: borderColor,
                    strokeDashArray: 4,
                    yaxis: {
                        lines: {
                            show: true
                        }
                    },
                    xaxis: {
                        lines: {
                            show: false
                        }
                    }
                },
                colors: [baseColor],
                tooltip: {
                    y: {
                        formatter: function(val) {
                            return val + "h";
                        }
                    }
                }
            };

            var chart = new ApexCharts(element, options);
            setTimeout(function() {
                chart.render();
            }, 200);
        })();
    </script>
    <!--end::Custom Javascript-->
@endsection
