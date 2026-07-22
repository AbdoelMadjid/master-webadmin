@include('partials.widgets.mixed._widget-2', [
    'widgetNumber' => 12,
    'title' => 'Sales Progress',
    'chartClass' => 'mixed-widget-12-chart card-rounded-bottom bg-info',
    'chartStyle' => 'height: 250px',
    'statsContainerClass' => 'card-rounded bg-body mt-n10 position-relative card-px py-15',
    'rows' => [
        [
            'rowClass' => 'row g-0 mb-7',
            'cols' => [
                [
                    'colClass' => 'col mx-5',
                    'label' => 'Avarage Sale',
                    'value' => '$650',
                ],
                [
                    'colClass' => 'col mx-5',
                    'label' => 'Comissions',
                    'value' => '$29,500',
                ],
            ],
        ],
        [
            'rowClass' => 'row g-0',
            'cols' => [
                [
                    'colClass' => 'col mx-5',
                    'label' => 'Revenue',
                    'value' => '$55,000',
                ],
                [
                    'colClass' => 'col mx-5',
                    'label' => 'Expenses',
                    'value' => '$1,130,600',
                ],
            ],
        ],
    ],
])
