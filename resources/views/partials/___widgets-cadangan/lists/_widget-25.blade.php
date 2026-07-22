@include('partials.widgets.lists._widget-1', [
    'widgetNumber' => 25,
    'cardClass' => 'card card-flush h-lg-50',
    'titleText' => 'Highlights',
    'subtitleText' => null,
    'toolbarHtml' => '
        <div class="card-toolbar d-none">
            <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm btn-light d-flex align-items-center px-4">
                <div class="text-gray-600 fw-bold">Loading date range...</div>
                <i class="ki-duotone ki-calendar-8 fs-1 ms-2 me-0">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                    <span class="path5"></span>
                    <span class="path6"></span>
                </i>
            </div>
        </div>
    ',
    'itemsHtml' => '
        <div class="d-flex flex-stack">
            <div class="text-gray-700 fw-semibold fs-6 me-2">Avg. Client Rating</div>
            <div class="d-flex align-items-senter">
                <i class="ki-duotone ki-arrow-up-right fs-2 text-success me-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
                <span class="text-gray-900 fw-bolder fs-6">7.8</span>
                <span class="text-gray-500 fw-bold fs-6">/10</span>
            </div>
        </div>
        <div class="separator separator-dashed my-3"></div>
        <div class="d-flex flex-stack">
            <div class="text-gray-700 fw-semibold fs-6 me-2">Avg. Quotes</div>
            <div class="d-flex align-items-senter">
                <i class="ki-duotone ki-arrow-down-right fs-2 text-danger me-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
                <span class="text-gray-900 fw-bolder fs-6">730</span>
            </div>
        </div>
        <div class="separator separator-dashed my-3"></div>
        <div class="d-flex flex-stack">
            <div class="text-gray-700 fw-semibold fs-6 me-2">Avg. Agent Earnings</div>
            <div class="d-flex align-items-senter">
                <i class="ki-duotone ki-arrow-up-right fs-2 text-success me-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
                <span class="text-gray-900 fw-bolder fs-6">$2,309</span>
            </div>
        </div>
    ',
])
