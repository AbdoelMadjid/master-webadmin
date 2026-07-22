@php
	$widgetNumber = $widgetNumber ?? 33;
	$cardClass = $cardClass ?? 'card card-flush h-xl-100';
	$headerValue = $headerValue ?? '3,274.94';
	$headerValueClass = $headerValueClass ?? 'fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2';
	$headerBadgeClass = $headerBadgeClass ?? 'badge badge-light-success fs-base';
	$headerBadgeIconClass = $headerBadgeIconClass ?? 'ki-duotone ki-arrow-up fs-5 text-success ms-n1';
	$headerBadgeText = $headerBadgeText ?? '9.2%';
	$description = $description ?? 'Etherium rate';
	$navActiveColor = $navActiveColor ?? 'danger';
	$chartColor = $chartColor ?? 'info';
@endphp

<!--begin::Chart Widget {{ $widgetNumber }}-->
<div class="{{ $cardClass }}">
	<!--begin::Header-->
	<div class="card-header pt-5 mb-6">
		<!--begin::Title-->
		<h3 class="card-title align-items-start flex-column">
			<!--begin::Statistics-->
			<div class="d-flex align-items-center mb-2">
				<!--begin::Currency-->
				<span class="fs-3 fw-semibold text-gray-500 align-self-start me-1">$</span>
				<!--end::Currency-->
				<!--begin::Value-->
				<span class="{{ $headerValueClass }}">{{ $headerValue }}</span>
				<!--end::Value-->
				<!--begin::Label-->
				<span class="{{ $headerBadgeClass }}">
					<i class="{{ $headerBadgeIconClass }}">
						<span class="path1"></span>
						<span class="path2"></span>
					</i>{{ $headerBadgeText }}</span>
				<!--end::Label-->
			</div>
			<!--end::Statistics-->
			<!--begin::Description-->
			<span class="fs-6 fw-semibold text-gray-500">{{ $description }}</span>
			<!--end::Description-->
		</h3>
		<!--end::Title-->
		<!--begin::Toolbar-->
		<div class="card-toolbar">
			<!--begin::Menu-->
			<button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
				data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
				<i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1">
					<span class="path1"></span>
					<span class="path2"></span>
					<span class="path3"></span>
					<span class="path4"></span>
				</i>
			</button>
			<!--begin::Menu 2-->
			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
				data-kt-menu="true">
				<!--begin::Menu item-->
				<div class="menu-item px-3">
					<div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
				</div>
				<!--end::Menu item-->
				<!--begin::Menu separator-->
				<div class="separator mb-3 opacity-75"></div>
				<!--end::Menu separator-->
				<!--begin::Menu item-->
				<div class="menu-item px-3">
					<a href="#" class="menu-link px-3">New Ticket</a>
				</div>
				<!--end::Menu item-->
				<!--begin::Menu item-->
				<div class="menu-item px-3">
					<a href="#" class="menu-link px-3">New Customer</a>
				</div>
				<!--end::Menu item-->
				<!--begin::Menu item-->
				<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
					<!--begin::Menu item-->
					<a href="#" class="menu-link px-3">
						<span class="menu-title">New Group</span>
						<span class="menu-arrow"></span>
					</a>
					<!--end::Menu item-->
					<!--begin::Menu sub-->
					<div class="menu-sub menu-sub-dropdown w-175px py-4">
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<a href="#" class="menu-link px-3">Admin Group</a>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<a href="#" class="menu-link px-3">Staff Group</a>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<a href="#" class="menu-link px-3">Member Group</a>
						</div>
						<!--end::Menu item-->
					</div>
					<!--end::Menu sub-->
				</div>
				<!--end::Menu item-->
				<!--begin::Menu item-->
				<div class="menu-item px-3">
					<a href="#" class="menu-link px-3">New Contact</a>
				</div>
				<!--end::Menu item-->
				<!--begin::Menu separator-->
				<div class="separator mt-3 opacity-75"></div>
				<!--end::Menu separator-->
				<!--begin::Menu item-->
				<div class="menu-item px-3">
					<div class="menu-content px-3 py-3">
						<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
					</div>
				</div>
				<!--end::Menu item-->
			</div>
			<!--end::Menu 2-->
			<!--end::Menu-->
		</div>
		<!--end::Toolbar-->
	</div>
	<!--end::Header-->
	<!--begin::Body-->
		@php
		$bodyView = $bodyView ?? null;
		$bodyData = $bodyData ?? [];
	@endphp
	@if ($bodyView)
		@include($bodyView, array_merge(['widgetNumber' => $widgetNumber, 'navActiveColor' => $navActiveColor, 'chartColor' => $chartColor], $bodyData))
	@else
		@include('partials.widgets.charts._widget-33-body', ['widgetNumber' => $widgetNumber, 'navActiveColor' => $navActiveColor, 'chartColor' => $chartColor])
	@endif
	<!--end::Body-->
</div>
<!--end::Chart Widget {{ $widgetNumber }}-->


