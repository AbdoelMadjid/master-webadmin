@php
	$widgetNumber = $widgetNumber ?? 20;
	$cardClass = $cardClass ?? 'card card-flush h-xl-50';
	$headerClass = $headerClass ?? 'card-header py-5';
	$title = $title ?? 'Monthly Targets';
	$subtitle = $subtitle ?? null;
	$titleClass = $titleClass ?? 'card-title fw-bold text-gray-800';
	$titleDetailedClass = $titleDetailedClass ?? 'card-title align-items-start flex-column';
	$titleTextClass = $titleTextClass ?? 'card-label fw-bold text-gray-900';
	$subtitleClass = $subtitleClass ?? 'text-gray-500 mt-1 fw-semibold fs-6';
	$daterangeExtraAttrs = $daterangeExtraAttrs ?? '';
	$bodyClass = $bodyClass ?? 'card-body d-flex justify-content-between flex-column pb-0 px-0 pt-1';
	$chartId = $chartId ?? 'kt_charts_widget_20';
	$chartClass = $chartClass ?? 'min-h-auto ps-4 pe-6';
	$chartStyle = $chartStyle ?? 'height: 300px';
	$chartInfo = $chartInfo ?? 'Revenue';
	$bodyView = $bodyView ?? 'partials.widgets.charts._widget-20-body';
	$bodyData = $bodyData ?? [];
@endphp

<!--begin::Chart widget {{ $widgetNumber }}-->
<div class="{{ $cardClass }}">
	<!--begin::Header-->
	<div class="{{ $headerClass }}">
		<!--begin::Title-->
		@if ($subtitle)
			<h3 class="{{ $titleDetailedClass }}">
				<span class="{{ $titleTextClass }}">{{ $title }}</span>
				<span class="{{ $subtitleClass }}">{{ $subtitle }}</span>
			</h3>
		@else
			<h3 class="{{ $titleClass }}">{{ $title }}</h3>
		@endif
		<!--end::Title-->
		<!--begin::Toolbar-->
		<div class="card-toolbar">
			<!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
			<div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" {!! $daterangeExtraAttrs !!}
				class="btn btn-sm btn-light d-flex align-items-center px-4">
				<!--begin::Display range-->
				<div class="text-gray-600 fw-bold">Loading date range...</div>
				<!--end::Display range-->
				<i class="ki-duotone ki-calendar-8 text-gray-500 lh-0 fs-2 ms-2 me-0">
					<span class="path1"></span>
					<span class="path2"></span>
					<span class="path3"></span>
					<span class="path4"></span>
					<span class="path5"></span>
					<span class="path6"></span>
				</i>
			</div>
			<!--end::Daterangepicker-->
		</div>
		<!--end::Toolbar-->
	</div>
	<!--end::Header-->
	<!--begin::Card body-->
	<div class="{{ $bodyClass }}">
		@include($bodyView, array_merge(['chartId' => $chartId, 'chartClass' => $chartClass, 'chartStyle' => $chartStyle, 'chartInfo' => $chartInfo], $bodyData))
	</div>
	<!--end::Card body-->
</div>
<!--end::Chart widget {{ $widgetNumber }}-->
