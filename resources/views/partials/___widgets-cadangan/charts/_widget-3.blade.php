@include('partials.widgets.charts._widget-1', [
    'widgetNumber' => 3,
    'cardClass' => 'card card-flush overflow-hidden h-md-100',
    'headerClass' => 'card-header py-5',
    'title' => 'Sales This Months',
    'subtitle' => 'Users from all channels',
    'subtitleClass' => 'text-gray-500 mt-1 fw-semibold fs-6',
    'toolbarIconClass' => 'ki-duotone ki-dots-square fs-1',
    'bodyClass' => 'card-body d-flex justify-content-between flex-column pb-1 px-0',
    'chartId' => 'kt_charts_widget_3',
    'chartClass' => 'min-h-auto ps-4 pe-6',
    'chartStyle' => 'height: 300px',
    'bodyView' => 'partials.widgets.charts._widget-3-body',
])
