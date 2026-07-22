@php
    $itemsHtml = <<<'HTML'
<div class="d-flex flex-stack">
    <div class="d-flex align-items-center me-3">
        <img src="assets/media/svg/brand-logos/laravel-2.svg" class="me-4 w-30px" alt="" />
        <div class="flex-grow-1">
            <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Laravel</a>
            <span class="text-gray-500 fw-semibold d-block fs-6">PHP Framework</span>
        </div>
    </div>
    <div class="d-flex align-items-center w-100 mw-125px">
        <div class="progress h-6px w-100 me-2 bg-light-success"><div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div></div>
        <span class="text-gray-500 fw-semibold">65%</span>
    </div>
</div>
<div class="separator separator-dashed my-3"></div>
<div class="d-flex flex-stack">
    <div class="d-flex align-items-center me-3">
        <img src="assets/media/svg/brand-logos/vue-9.svg" class="me-4 w-30px" alt="" />
        <div class="flex-grow-1">
            <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Vue 3</a>
            <span class="text-gray-500 fw-semibold d-block fs-6">JS Framework</span>
        </div>
    </div>
    <div class="d-flex align-items-center w-100 mw-125px">
        <div class="progress h-6px w-100 me-2 bg-light-warning"><div class="progress-bar bg-warning" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div></div>
        <span class="text-gray-500 fw-semibold">87%</span>
    </div>
</div>
<div class="separator separator-dashed my-3"></div>
<div class="d-flex flex-stack">
    <div class="d-flex align-items-center me-3">
        <img src="assets/media/svg/brand-logos/bootstrap5.svg" class="me-4 w-30px" alt="" />
        <div class="flex-grow-1">
            <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Bootstrap 5</a>
            <span class="text-gray-500 fw-semibold d-block fs-6">CSS Framework</span>
        </div>
    </div>
    <div class="d-flex align-items-center w-100 mw-125px">
        <div class="progress h-6px w-100 me-2 bg-light-primary"><div class="progress-bar bg-primary" role="progressbar" style="width: 44%" aria-valuenow="44" aria-valuemin="0" aria-valuemax="100"></div></div>
        <span class="text-gray-500 fw-semibold">44%</span>
    </div>
</div>
<div class="separator separator-dashed my-3"></div>
<div class="d-flex flex-stack">
    <div class="d-flex align-items-center me-3">
        <img src="assets/media/svg/brand-logos/angular-icon.svg" class="me-4 w-30px" alt="" />
        <div class="flex-grow-1">
            <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Angular 16</a>
            <span class="text-gray-500 fw-semibold d-block fs-6">JS Framework</span>
        </div>
    </div>
    <div class="d-flex align-items-center w-100 mw-125px">
        <div class="progress h-6px w-100 me-2 bg-light-info"><div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div></div>
        <span class="text-gray-500 fw-semibold">70%</span>
    </div>
</div>
<div class="separator separator-dashed my-3"></div>
<div class="d-flex flex-stack">
    <div class="d-flex align-items-center me-3">
        <img src="assets/media/svg/brand-logos/spring-3.svg" class="me-4 w-30px" alt="" />
        <div class="flex-grow-1">
            <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Spring</a>
            <span class="text-gray-500 fw-semibold d-block fs-6">Java Framework</span>
        </div>
    </div>
    <div class="d-flex align-items-center w-100 mw-125px">
        <div class="progress h-6px w-100 me-2 bg-light-danger"><div class="progress-bar bg-danger" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div></div>
        <span class="text-gray-500 fw-semibold">56%</span>
    </div>
</div>
<div class="separator separator-dashed my-3"></div>
<div class="d-flex flex-stack">
    <div class="d-flex align-items-center me-3">
        <img src="assets/media/svg/brand-logos/typescript-1.svg" class="me-4 w-30px" alt="" />
        <div class="flex-grow-1">
            <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">TypeScript</a>
            <span class="text-gray-500 fw-semibold d-block fs-6">Better Tooling</span>
        </div>
    </div>
    <div class="d-flex align-items-center w-100 mw-125px">
        <div class="progress h-6px w-100 me-2 bg-light-success"><div class="progress-bar bg-success" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div></div>
        <span class="text-gray-500 fw-semibold">82%</span>
    </div>
</div>
HTML;
@endphp

@include('partials.widgets.lists._widget-3', [
    'widgetNumber' => 21,
    'headerClass' => 'card-header border-0 pt-5',
    'titleText' => 'Active Lessons',
    'titleClass' => 'card-label fw-bold text-gray-900',
    'subtitleText' => 'Avg. 72% completed lessons',
    'subtitleClass' => 'text-muted mt-1 fw-semibold fs-7',
    'toolbarHtml' => '<div class="card-toolbar"><a href="#" class="btn btn-sm btn-light">All Lessons</a></div>',
    'bodyClass' => 'card-body pt-5',
    'itemsHtml' => $itemsHtml,
])
