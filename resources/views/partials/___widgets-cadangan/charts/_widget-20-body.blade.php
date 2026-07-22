<!--begin::Items-->
<div class="d-flex flex-wrap d-grid gap-5 px-9 mb-5">
	<!--begin::Item-->
	<div class="me-md-2">
		<!--begin::Statistics-->
		<div class="d-flex mb-2">
			<span class="fs-4 fw-semibold text-gray-500 me-1">$</span>
			<span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">12,706</span>
		</div>
		<!--end::Statistics-->
		<!--begin::Description-->
		<span class="fs-6 fw-semibold text-gray-500">Targets for April</span>
		<!--end::Description-->
	</div>
	<!--end::Item-->
	<!--begin::Item-->
	<div
		class="border-start-dashed border-end-dashed border-start border-end border-gray-300 px-5 ps-md-10 pe-md-7 me-md-5">
		<!--begin::Statistics-->
		<div class="d-flex mb-2">
			<span class="fs-4 fw-semibold text-gray-500 me-1">$</span>
			<span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">8,035</span>
		</div>
		<!--end::Statistics-->
		<!--begin::Description-->
		<span class="fs-6 fw-semibold text-gray-500">Actual for April</span>
		<!--end::Description-->
	</div>
	<!--end::Item-->
	<!--begin::Item-->
	<div class="m-0">
		<!--begin::Statistics-->
		<div class="d-flex align-items-center mb-2">
			<!--begin::Currency-->
			<span class="fs-4 fw-semibold text-gray-500 align-self-start me-1">$</span>
			<!--end::Currency-->
			<!--begin::Value-->
			<span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">4,684</span>
			<!--end::Value-->
			<!--begin::Label-->
			<span class="badge badge-light-success fs-base">
				<i class="ki-duotone ki-black-up fs-7 text-success ms-n1"></i>4.5%</span>
			<!--end::Label-->
		</div>
		<!--end::Statistics-->
		<!--begin::Description-->
		<span class="fs-6 fw-semibold text-gray-500">GAP</span>
		<!--end::Description-->
	</div>
	<!--end::Item-->
</div>
<!--end::Items-->
<!--begin::Chart-->
<div id="{{ $chartId }}" class="{{ $chartClass }}" data-kt-chart-info="{{ $chartInfo }}" style="{{ $chartStyle }}"></div>
<!--end::Chart-->
