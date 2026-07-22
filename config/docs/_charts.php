<?php

return [

    'menus_charts' => [
        [
            'route'    => 'docs.charts.amcharts',
            'title'    => 'AmCharts',
            'children' => [
                ['route' => 'docs.charts.amcharts.charts', 'title' => 'AmChart Charts'],
                ['route' => 'docs.charts.amcharts.maps', 'title' => 'AmChart Maps'],
                ['route' => 'docs.charts.amcharts.stock-charts', 'title' => 'AmChart Stock Charts'],
            ],
        ],
        ['route' => 'docs.charts.apexcharts', 'title' => 'ApexCharts'],
        ['route' => 'docs.charts.chartjs', 'title' => 'ChartJS'],
        [
            'route'    => 'docs.charts.flotcharts',
            'title'    => 'Flotcharts',
            'children' => [
                ['route' => 'docs.charts.flotcharts.overview', 'title' => 'Overview'],
                ['route' => 'docs.charts.flotcharts.basic', 'title' => 'Basic Chart'],
                ['route' => 'docs.charts.flotcharts.axis', 'title' => 'Axis Labels'],
                ['route' => 'docs.charts.flotcharts.tracking', 'title' => 'Tracking Curves'],
                ['route' => 'docs.charts.flotcharts.dynamic', 'title' => 'Dynamic Chart'],
                ['route' => 'docs.charts.flotcharts.stack', 'title' => 'Stack Chart Controls'],
                ['route' => 'docs.charts.flotcharts.bar', 'title' => 'Bar Chart'],
                ['route' => 'docs.charts.flotcharts.pie', 'title' => 'Pie Chart'],
            ],
        ],
        [
            'route'    => 'docs.charts.google-charts',
            'title'    => 'Google Charts',
            'children' => [
                ['route' => 'docs.charts.google-charts.overview', 'title' => 'Overview'],
                ['route' => 'docs.charts.google-charts.column', 'title' => 'Column Chart'],
                ['route' => 'docs.charts.google-charts.pie', 'title' => 'Pie Chart'],
                ['route' => 'docs.charts.google-charts.line', 'title' => 'Line Chart'],
            ],
        ],
    ],
];
