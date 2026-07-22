@include('partials.widgets.mixed._widget-3', [
    'widgetNumber' => 6,
    'title' => 'Sales Statistics',
    'subtitle' => 'Recent sales statistics',
    'menuId' => 'kt_menu_65a121487381e',
    'bodyVariant' => 'detailed',
    'detailedRows' => [
        [
            'rowClass' => 'row g-0 mt-5 mb-10',
            'items' => [
                [
                    'icon' => 'ki-bucket',
                    'iconPathCount' => 4,
                    'symbolBgClass' => 'bg-light-info',
                    'iconColorClass' => 'text-info',
                    'value' => '$2,034',
                    'label' => 'Author Sales',
                ],
                [
                    'icon' => 'ki-abstract-26',
                    'iconPathCount' => 2,
                    'symbolBgClass' => 'bg-light-danger',
                    'iconColorClass' => 'text-danger',
                    'value' => '$706',
                    'label' => 'Commision',
                ],
            ],
        ],
        [
            'rowClass' => 'row g-0',
            'items' => [
                [
                    'icon' => 'ki-basket',
                    'iconPathCount' => 4,
                    'symbolBgClass' => 'bg-light-success',
                    'iconColorClass' => 'text-success',
                    'value' => '$49',
                    'label' => 'Average Bid',
                ],
                [
                    'icon' => 'ki-barcode',
                    'iconPathCount' => 8,
                    'symbolBgClass' => 'bg-light-primary',
                    'iconColorClass' => 'text-primary',
                    'value' => '$5.8M',
                    'label' => 'All Time Sales',
                ],
            ],
        ],
    ],
    'detailedChartClass' => 'mixed-widget-6-chart card-rounded-bottom',
    'detailedChartColor' => 'primary',
    'detailedChartStyle' => 'height: 150px',
])
