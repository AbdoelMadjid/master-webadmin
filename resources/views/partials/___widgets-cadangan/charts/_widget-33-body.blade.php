<div class="card-body py-0 px-0">
		<!--begin::Nav-->
		<ul class="nav d-flex justify-content-between mb-3 mx-9">
			<!--begin::Item-->
			<li class="nav-item mb-3">
				<!--begin::Link-->
				<a class="nav-link btn btn-flex flex-center btn-active-{{ $navActiveColor }} btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px active"
					data-bs-toggle="tab" id="kt_charts_widget_{{ $widgetNumber }}_tab_1" href="#kt_charts_widget_{{ $widgetNumber }}_tab_content_1">1d</a>
				<!--end::Link-->
			</li>
			<!--end::Item-->
			<!--begin::Item-->
			<li class="nav-item mb-3">
				<!--begin::Link-->
				<a class="nav-link btn btn-flex flex-center btn-active-{{ $navActiveColor }} btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px"
					data-bs-toggle="tab" id="kt_charts_widget_{{ $widgetNumber }}_tab_2" href="#kt_charts_widget_{{ $widgetNumber }}_tab_content_2">5d</a>
				<!--end::Link-->
			</li>
			<!--end::Item-->
			<!--begin::Item-->
			<li class="nav-item mb-3">
				<!--begin::Link-->
				<a class="nav-link btn btn-flex flex-center btn-active-{{ $navActiveColor }} btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px"
					data-bs-toggle="tab" id="kt_charts_widget_{{ $widgetNumber }}_tab_3" href="#kt_charts_widget_{{ $widgetNumber }}_tab_content_3">1m</a>
				<!--end::Link-->
			</li>
			<!--end::Item-->
			<!--begin::Item-->
			<li class="nav-item mb-3">
				<!--begin::Link-->
				<a class="nav-link btn btn-flex flex-center btn-active-{{ $navActiveColor }} btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px"
					data-bs-toggle="tab" id="kt_charts_widget_{{ $widgetNumber }}_tab_4" href="#kt_charts_widget_{{ $widgetNumber }}_tab_content_4">6m</a>
				<!--end::Link-->
			</li>
			<!--end::Item-->
			<!--begin::Item-->
			<li class="nav-item mb-3">
				<!--begin::Link-->
				<a class="nav-link btn btn-flex flex-center btn-active-{{ $navActiveColor }} btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px"
					data-bs-toggle="tab" id="kt_charts_widget_{{ $widgetNumber }}_tab_5" href="#kt_charts_widget_{{ $widgetNumber }}_tab_content_5">1y</a>
				<!--end::Link-->
			</li>
			<!--end::Item-->
		</ul>
		<!--end::Nav-->
		<!--begin::Tab Content-->
		<div class="tab-content mt-n6">
			<!--begin::Tap pane-->
			<div class="tab-pane fade active show" id="kt_charts_widget_{{ $widgetNumber }}_tab_content_1">
				<!--begin::Chart-->
				<div id="kt_charts_widget_{{ $widgetNumber }}_chart_1" data-kt-chart-color="{{ $chartColor }}" class="min-h-auto h-200px ps-3 pe-6">
				</div>
				<!--end::Chart-->
				<!--begin::Table container-->
				<div class="table-responsive mx-9 mt-n6">
					<!--begin::Table-->
					<table class="table align-middle gs-0 gy-4">
						<!--begin::Table head-->
						<thead>
							<tr>
								<th class="min-w-100px"></th>
								<th class="min-w-100px text-end pe-0"></th>
								<th class="text-end min-w-50px"></th>
							</tr>
						</thead>
						<!--end::Table head-->
						<!--begin::Table body-->
						<tbody>
							<tr>
								<td>
									<a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
								</td>
								<td class="pe-0 text-end">
									<span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
								</td>
								<td class="pe-0 text-end">
									<span class="fw-bold fs-6 text-danger">-139.34</span>
								</td>
							</tr>
							<tr>
								<td>
									<a href="#" class="text-gray-600 fw-bold fs-6">3:10 PM</a>
								</td>
								<td class="pe-0 text-end">
									<span class="text-gray-800 fw-bold fs-6 me-1">$3,207.03</span>
								</td>
								<td class="pe-0 text-end">
									<span class="fw-bold fs-6 text-success">+576.24</span>
								</td>
							</tr>
							<tr>
								<td>
									<a href="#" class="text-gray-600 fw-bold fs-6">3:55 PM</a>
								</td>
								<td class="pe-0 text-end">
									<span class="text-gray-800 fw-bold fs-6 me-1">$3,274.94</span>
								</td>
								<td class="pe-0 text-end">
									<span class="fw-bold fs-6 text-success">+124.03</span>
								</td>
							</tr>
						</tbody>
						<!--end::Table body-->
					</table>
					<!--end::Table-->
				</div>
				<!--end::Table container-->
			</div>
			<!--end::Tap pane-->
			<!--begin::Tap pane-->
			<div class="tab-pane fade" id="kt_charts_widget_{{ $widgetNumber }}_tab_content_2">
				<!--begin::Chart-->
				<div id="kt_charts_widget_{{ $widgetNumber }}_chart_2" data-kt-chart-color="{{ $chartColor }}" class="min-h-auto h-200px ps-3 pe-6">
				</div>
				<!--end::Chart-->
				<!--begin::Table container-->
				<div class="table-responsive mx-9 mt-n6">
					<!--begin::Table-->
					<table class="table align-middle gs-0 gy-4">
						<!--begin::Table head-->
						<thead>
							<tr>
								<th class="min-w-100px"></th>
								<th class="min-w-100px text-end pe-0"></th>
								<th class="text-end min-w-50px"></th>
							</tr>
						</thead>
						<!--end::Table head-->
						<!--begin::Table body-->
						<tbody>
							<tr>
								<td>
									<a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
								</td>
								<td class="pe-0 text-end">
									<span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
								</td>
								<td class="pe-0 text-end">
									<span class="fw-bold fs-6 text-success">+231.01</span>
								</td>
							</tr>
							<tr>
								<td>
									<a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
								</td>
								<td class="pe-0 text-end">
									<span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
								</td>
								<td class="pe-0 text-end">
									<span class="fw-bold fs-6 text-primary">+233.07</span>
								</td>
							</tr>
							<tr>
								<td>
									<a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
								</td>
								<td class="pe-0 text-end">
									<span class="text-gray-800 fw-bold fs-6 me-1">$2,145.55</span>
								</td>
								<td class="pe-0 text-end">
									<span class="fw-bold fs-6 text-danger">+134.06</span>
								</td>
							</tr>
						</tbody>
						<!--end::Table body-->
					</table>
					<!--end::Table-->
				</div>
				<!--end::Table container-->
			</div>
			<!--end::Tap pane-->
			<!--begin::Tap pane-->
			<div class="tab-pane fade" id="kt_charts_widget_{{ $widgetNumber }}_tab_content_3">
				<!--begin::Chart-->
				<div id="kt_charts_widget_{{ $widgetNumber }}_chart_3" data-kt-chart-color="{{ $chartColor }}" class="min-h-auto h-200px ps-3 pe-6">
				</div>
				<!--end::Chart-->
				<!--begin::Table container-->
				<div class="table-responsive mx-9 mt-n6">
					<!--begin::Table-->
					<table class="table align-middle gs-0 gy-4">
						<!--begin::Table head-->
						<thead>
							<tr>
								<th class="min-w-100px"></th>
								<th class="min-w-100px text-end pe-0"></th>
								<th class="text-end min-w-50px"></th>
							</tr>
						</thead>
						<!--end::Table head-->
						<!--begin::Table body-->
						<tbody>
							<tr>
								<td>
									<a href="#" class="text-gray-600 fw-bold fs-6">12:40 AM</a>
								</td>
								<td class="pe-0 text-end">
									<span class="text-gray-800 fw-bold fs-6 me-1">$2,346.25</span>
								</td>
								<td class="pe-0 text-end">
									<span class="fw-bold fs-6 text-warning">+134.57</span>
								</td>
							</tr>
							<tr>
								<td>
									<a href="#" class="text-gray-600 fw-bold fs-6">11:30 PM</a>
								</td>
								<td class="pe-0 text-end">
									<span class="text-gray-800 fw-bold fs-6 me-1">$1,565.26</span>
								</td>
								<td class="pe-0 text-end">
									<span class="fw-bold fs-6 text-danger">+155.03</span>
								</td>
							</tr>
							<tr>
								<td>
									<a href="#" class="text-gray-600 fw-bold fs-6">4:25 PM</a>
								</td>
								<td class="pe-0 text-end">
									<span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
								</td>
								<td class="pe-0 text-end">
									<span class="fw-bold fs-6 text-success">+124.03</span>
								</td>
							</tr>
						</tbody>
						<!--end::Table body-->
					</table>
					<!--end::Table-->
				</div>
				<!--end::Table container-->
			</div>
			<!--end::Tap pane-->
			<!--begin::Tap pane-->
			<div class="tab-pane fade" id="kt_charts_widget_{{ $widgetNumber }}_tab_content_4">
				<!--begin::Chart-->
				<div id="kt_charts_widget_{{ $widgetNumber }}_chart_4" data-kt-chart-color="{{ $chartColor }}" class="min-h-auto h-200px ps-3 pe-6">
				</div>
				<!--end::Chart-->
				<!--begin::Table container-->
				<div class="table-responsive mx-9 mt-n6">
					<!--begin::Table-->
					<table class="table align-middle gs-0 gy-4">
						<!--begin::Table head-->
						<thead>
							<tr>
								<th class="min-w-100px"></th>
								<th class="min-w-100px text-end pe-0"></th>
								<th class="text-end min-w-50px"></th>
							</tr>
						</thead>
						<!--end::Table head-->
						<!--begin::Table body-->
						<tbody>
							<tr>
								<td>
									<a href="#" class="text-gray-600 fw-bold fs-6">3:20 PM</a>
								</td>
								<td class="pe-0 text-end">
									<span class="text-gray-800 fw-bold fs-6 me-1">$3,756.26</span>
								</td>
								<td class="pe-0 text-end">
									<span class="fw-bold fs-6 text-danger">+234.03</span>
								</td>
							</tr>
							<tr>
								<td>
									<a href="#" class="text-gray-600 fw-bold fs-6">10:30 AM</a>
								</td>
								<td class="pe-0 text-end">
									<span class="text-gray-800 fw-bold fs-6 me-1">$1,474.04</span>
								</td>
								<td class="pe-0 text-end">
									<span class="fw-bold fs-6 text-info">-134.03</span>
								</td>
							</tr>
							<tr>
								<td>
									<a href="#" class="text-gray-600 fw-bold fs-6">1:30 AM</a>
								</td>
								<td class="pe-0 text-end">
									<span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
								</td>
								<td class="pe-0 text-end">
									<span class="fw-bold fs-6 text-primary">+124.03</span>
								</td>
							</tr>
						</tbody>
						<!--end::Table body-->
					</table>
					<!--end::Table-->
				</div>
				<!--end::Table container-->
			</div>
			<!--end::Tap pane-->
			<!--begin::Tap pane-->
			<div class="tab-pane fade" id="kt_charts_widget_{{ $widgetNumber }}_tab_content_5">
				<!--begin::Chart-->
				<div id="kt_charts_widget_{{ $widgetNumber }}_chart_5" data-kt-chart-color="{{ $chartColor }}" class="min-h-auto h-200px ps-3 pe-6">
				</div>
				<!--end::Chart-->
				<!--begin::Table container-->
				<div class="table-responsive mx-9 mt-n6">
					<!--begin::Table-->
					<table class="table align-middle gs-0 gy-4">
						<!--begin::Table head-->
						<thead>
							<tr>
								<th class="min-w-100px"></th>
								<th class="min-w-100px text-end pe-0"></th>
								<th class="text-end min-w-50px"></th>
							</tr>
						</thead>
						<!--end::Table head-->
						<!--begin::Table body-->
						<tbody>
							<tr>
								<td>
									<a href="#" class="text-gray-600 fw-bold fs-6">3:30 PM</a>
								</td>
								<td class="pe-0 text-end">
									<span class="text-gray-800 fw-bold fs-6 me-1">$1,756.25</span>
								</td>
								<td class="pe-0 text-end">
									<span class="fw-bold fs-6 text-primary">+144.04</span>
								</td>
							</tr>
							<tr>
								<td>
									<a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
								</td>
								<td class="pe-0 text-end">
									<span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
								</td>
								<td class="pe-0 text-end">
									<span class="fw-bold fs-6 text-danger">+124.03</span>
								</td>
							</tr>
							<tr>
								<td>
									<a href="#" class="text-gray-600 fw-bold fs-6">12:30 AM</a>
								</td>
								<td class="pe-0 text-end">
									<span class="text-gray-800 fw-bold fs-6 me-1">$2,034.65</span>
								</td>
								<td class="pe-0 text-end">
									<span class="fw-bold fs-6 text-success">+184.05</span>
								</td>
							</tr>
						</tbody>
						<!--end::Table body-->
					</table>
					<!--end::Table-->
				</div>
				<!--end::Table container-->
			</div>
			<!--end::Tap pane-->
		</div>
		<!--end::Tab Content-->
	</div>
