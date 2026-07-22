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

        /* Masonry base */
        .widget-showcase-masonry .widget-showcase-item {
            width: 100%;
            display: inline-block;
            vertical-align: top;
            break-inside: avoid;
            margin-bottom: 1.5rem;
        }

        /* Masonry column count */
        .widget-showcase-masonry {
            column-count: 3;
            column-gap: 1.5rem;
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
            Widgets / Cards
        @endslot
    @endcomponent
@endsection
@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            @php
                $availableCards = collect(glob(resource_path('views/partials/widgets/card/__widgets-*.blade.php')))
                    ->map(function ($path) {
                        if (preg_match('/__widgets-([0-9]+)\\.blade\\.php$/', $path, $matches)) {
                            return (int) $matches[1];
                        }
                        return null;
                    })
                    ->filter()
                    ->sort()
                    ->values();

                $cardGroups = collect([
                    [1, 33],
                    [11, 12, 13],
                    [14, 16],
                    [3, 4],
                    [5, 27, 22],
                    [21, 23, 34, 36],
                    [8, 24, 37],
                    [6, 25, 7],
                    [2, 9, 10, 17, 18, 20],
                    [29, 30, 31, 32],
                    [38],
                    [15, 28],
                    [19],
                ]);

                $orderedCards = $cardGroups
                    ->flatten()
                    ->unique()
                    ->filter(function ($id) use ($availableCards) {
                        return $availableCards->contains($id);
                    })
                    ->values();

                $finalRowCards = collect([15, 28, 19]);
                $masonryCards = $orderedCards->diff($finalRowCards)->values();
                $finalTopRowCards = $orderedCards->intersect([15, 28])->values();
                $finalBottomRowCards = $orderedCards->intersect([19])->values();
            @endphp

            <div class="widget-showcase-masonry mb-10">
                @foreach ($masonryCards as $id)
                    <div class="widget-showcase-item">
                        <x-widget-include-badge name="card._widget-{{ $id }}" />
                        @include('partials.widgets.card.__widgets-' . $id)
                    </div>
                @endforeach
            </div>

            @if ($finalTopRowCards->isNotEmpty())
                <div class="row g-5 g-xl-8 mb-10">
                    @foreach ($finalTopRowCards as $id)
                        <div class="col-12 col-md-6">
                            <x-widget-include-badge name="card._widget-{{ $id }}" />
                            @include('partials.widgets.card.__widgets-' . $id)
                        </div>
                    @endforeach
                </div>
            @endif

            @if ($finalBottomRowCards->isNotEmpty())
                <div class="row g-5 g-xl-8 mb-10">
                    @foreach ($finalBottomRowCards as $id)
                        <div class="col-12 col-md-6">
                            <x-widget-include-badge name="card._widget-{{ $id }}" />
                            @include('partials.widgets.card.__widgets-' . $id)
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@endsection

@section('scripts')
    <!--begin::Vendors Javascript(used for this page only)-->
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

        (function initCardWidget1AChart() {
            var element = document.getElementById("kt_card_widget_2_chart");
            if (!element || typeof ApexCharts === "undefined") {
                return;
            }

            var color = element.getAttribute("data-kt-chart-color") || "primary";
            var height = parseInt(KTUtil.css(element, "height"));
            var labelColor = KTUtil.getCssVariableValue("--bs-gray-500");
            var primaryColor = KTUtil.isHexColor(color) ? color : KTUtil.getCssVariableValue("--bs-" + color);
            var secondaryColor = KTUtil.getCssVariableValue("--bs-gray-300");

            var options = {
                series: [{
                    name: "Sales",
                    data: [30, 75, 55, 45, 30, 60, 75, 50],
                    margin: {
                        left: 5,
                        right: 5
                    }
                }],
                chart: {
                    fontFamily: "inherit",
                    type: "bar",
                    height: height,
                    toolbar: {
                        show: false
                    },
                    sparkline: {
                        enabled: true
                    }
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: ["35%"],
                        borderRadius: 6
                    }
                },
                legend: {
                    show: false
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    show: true,
                    width: 4,
                    colors: ["transparent"]
                },
                xaxis: {
                    axisBorder: {
                        show: false
                    },
                    axisTicks: {
                        show: false
                    },
                    labels: {
                        show: false,
                        style: {
                            colors: labelColor,
                            fontSize: "12px"
                        }
                    },
                    crosshairs: {
                        show: false
                    }
                },
                yaxis: {
                    labels: {
                        show: false,
                        style: {
                            colors: labelColor,
                            fontSize: "12px"
                        }
                    }
                },
                fill: {
                    type: "solid"
                },
                states: {
                    normal: {
                        filter: {
                            type: "none",
                            value: 0
                        }
                    },
                    hover: {
                        filter: {
                            type: "none",
                            value: 0
                        }
                    },
                    active: {
                        allowMultipleDataPointsSelection: false,
                        filter: {
                            type: "none",
                            value: 0
                        }
                    }
                },
                tooltip: {
                    style: {
                        fontSize: "12px"
                    },
                    x: {
                        formatter: function(val) {
                            return "Feb: " + val;
                        }
                    },
                    y: {
                        formatter: function(val) {
                            return val + "%";
                        }
                    }
                },
                colors: [primaryColor, secondaryColor],
                grid: {
                    borderColor: false,
                    strokeDashArray: 4,
                    yaxis: {
                        lines: {
                            show: true
                        }
                    },
                    padding: {
                        top: 10,
                        left: 25,
                        right: 25
                    }
                }
            };

            var chart = new ApexCharts(element, options);
            setTimeout(function() {
                chart.render();
            }, 300);
        })();
    </script>
    <!--end::Custom Javascript-->
@endsection
