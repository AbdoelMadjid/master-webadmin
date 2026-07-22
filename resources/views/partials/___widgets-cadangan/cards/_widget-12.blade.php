<!--begin::Card widget 12-->
@include('partials.widgets.cards._widget-8', [
    'cardClass' => $cardClass ?? 'card overflow-hidden h-md-50 mb-5 mb-xl-10',
    'amount' => $amount ?? '47,769,700',
    'showCurrency' => false,
    'showBadge' => false,
    'suffixText' => $unit ?? 'Tons',
    'description' => $description ?? 'Total Online Sales',
    'chartId' => $chartId ?? 'kt_card_widget_12_chart',
])
<!--end::Card widget 12-->
