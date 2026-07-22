@extends('layouts.index')
@section('styles')
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/custom/vis-timeline/vis-timeline.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
@endsection
@section('toolbar')
    @component('layouts.partials._toolbar')
        @slot('action')
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <!--begin::Secondary button-->
                <a href="/apps/customers/list" class="btn btn-sm fw-bold btn-secondary">Add Customer</a>
                <!--end::Secondary button-->
                <!--begin::Primary button-->
                <a href="/apps/ecommerce/sales/add-order" class="btn btn-sm fw-bold btn-primary">New Shipment</a>
                <!--end::Primary button-->
            </div>
        @endslot
    @endcomponent
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
									<!--begin::Row-->
									<div class="row gy-5 g-xl-10">
										<!--begin::Col-->
										<div class="col-xl-4 mb-xl-10">
											<!--begin::Engage widget 6-->
											<x-widget-include-badge name="engage._widget-6" />
											@include('partials.widgets.engage.__widgets-6')
											<!--end::Engage widget 6-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xl-8 mb-5 mb-xl-10">
											<!--begin::Row-->
											<div class="row g-lg-5 g-xl-10">
												<!--begin::Col-->
												<div class="col-md-6 col-xl-6 mb-5 mb-xl-10">
													<!--begin::Card widget 21-->
													<x-widget-include-badge name="card._widget-21" />
													@include('partials.widgets.card.__widgets-21')
													<!--end::Card widget 21-->
													<!--begin::Card widget 22-->
													<x-widget-include-badge name="card._widget-22" />
													@include('partials.widgets.card.__widgets-22')
													<!--end::Card widget 22-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-6 col-xl-6 mb-md-5 mb-xl-10">
													<!--begin::Card widget 23-->
													<x-widget-include-badge name="card._widget-23" />
													@include('partials.widgets.card.__widgets-23')
													<!--end::Card widget 23-->
													<!--begin::Card widget 24-->
													<x-widget-include-badge name="card._widget-24" />
													@include('partials.widgets.card.__widgets-24')
													<!--end::Card widget 24-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<div class="row gy-5 g-xl-10">
										<!--begin::Col-->
										<div class="col-xl-4 mb-xl-10">
											<!--begin::List widget 10-->
											<x-widget-include-badge name="list._widget-10" />
											@include('partials.widgets.list.__widgets-10')
											<!--end::List widget 10-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xl-8 mb-5 mb-xl-10">
											<!--begin::Row-->
											<div class="row g-5 g-xl-10 h-xxl-50 mb-0 mb-xl-10">
												<!--begin::Col-->
												<div class="col-xxl-6">
													<!--begin::Chart widget 6-->
													<x-widget-include-badge name="chart._widget-6" />
													@include('partials.widgets.chart.__widgets-6')
													<!--end::Chart widget 6-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-xxl-6 mb-5 mb-xl-0">
													<!--begin::List widget 8-->
													<x-widget-include-badge name="list._widget-8" />
													@include('partials.widgets.list.__widgets-8')
													<!--end::List widget 8-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
											<!--begin::Row-->
											<div class="row h-xxl-50">
												<!--begin::Col-->
												<div class="col">
													<!--begin::Chart widget 10-->
													<x-widget-include-badge name="chart._widget-10" />
													@include('partials.widgets.chart.__widgets-10')
													<!--end::Chart widget 10-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<div class="row gy-5 g-xl-10">
										<!--begin::Col-->
										<div class="col-xl-4">
											<!--begin::List widget 11-->
											<x-widget-include-badge name="list._widget-11" />
											@include('partials.widgets.list.__widgets-11')
											<!--end::List widget 11-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xl-8">
											<!--begin::Chart widget 18-->
											<x-widget-include-badge name="chart._widget-18" />
											@include('partials.widgets.chart.__widgets-18')
											<!--end::Chart widget 18-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
								</div>
								<!--end::Content container-->
							</div>
@endsection

@section('scripts')
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/custom/vis-timeline/vis-timeline.bundle.js') }}"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/bidding.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
    <!--end::Custom Javascript-->
@endsection



