@php
    $itemsHtml = <<<'HTML'
<div class="">
    <div class="d-flex flex-stack">
        <div class="d-flex align-items-center me-5">
            <img src="assets/media/svg/brand-logos/atica.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
            <div class="me-5">
                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Abstergo Ltd.</a>
                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Community</span>
            </div>
        </div>
        <div class="d-flex align-items-center">
            <span class="text-gray-800 fw-bold fs-4 me-3">579</span>
            <div class="m-0">
                <span class="badge badge-light-success fs-base">
                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>2.6%
                </span>
            </div>
        </div>
    </div>
    <div class="separator separator-dashed my-3"></div>
    <div class="d-flex flex-stack">
        <div class="d-flex align-items-center me-5">
            <img src="assets/media/svg/brand-logos/telegram-2.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
            <div class="me-5">
                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Binford Ltd.</a>
                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social Media</span>
            </div>
        </div>
        <div class="d-flex align-items-center">
            <span class="text-gray-800 fw-bold fs-4 me-3">2,588</span>
            <div class="m-0">
                <span class="badge badge-light-danger fs-base">
                    <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1"><span class="path1"></span><span class="path2"></span></i>0.4%
                </span>
            </div>
        </div>
    </div>
    <div class="separator separator-dashed my-3"></div>
    <div class="d-flex flex-stack">
        <div class="d-flex align-items-center me-5">
            <img src="assets/media/svg/brand-logos/balloon.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
            <div class="me-5">
                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Barone LLC.</a>
                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Messanger</span>
            </div>
        </div>
        <div class="d-flex align-items-center">
            <span class="text-gray-800 fw-bold fs-4 me-3">794</span>
            <div class="m-0">
                <span class="badge badge-light-success fs-base">
                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>0.2%
                </span>
            </div>
        </div>
    </div>
    <div class="separator separator-dashed my-3"></div>
    <div class="d-flex flex-stack">
        <div class="d-flex align-items-center me-5">
            <img src="assets/media/svg/brand-logos/kickstarter.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
            <div class="me-5">
                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Abstergo Ltd.</a>
                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Video Channel</span>
            </div>
        </div>
        <div class="d-flex align-items-center">
            <span class="text-gray-800 fw-bold fs-4 me-3">1,578</span>
            <div class="m-0">
                <span class="badge badge-light-success fs-base">
                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>4.1%
                </span>
            </div>
        </div>
    </div>
    <div class="separator separator-dashed my-3"></div>
    <div class="d-flex flex-stack">
        <div class="d-flex align-items-center me-5">
            <img src="assets/media/svg/brand-logos/vimeo.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
            <div class="me-5">
                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Biffco Enterprises</a>
                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
            </div>
        </div>
        <div class="d-flex align-items-center">
            <span class="text-gray-800 fw-bold fs-4 me-3">3,458</span>
            <div class="m-0">
                <span class="badge badge-light-success fs-base">
                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>8.3%
                </span>
            </div>
        </div>
    </div>
    <div class="separator separator-dashed my-3"></div>
    <div class="d-flex flex-stack">
        <div class="d-flex align-items-center me-5">
            <img src="assets/media/svg/brand-logos/plurk.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
            <div class="me-5">
                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Big Kahuna Burger</a>
                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
            </div>
        </div>
        <div class="d-flex align-items-center">
            <span class="text-gray-800 fw-bold fs-4 me-3">2,047</span>
            <div class="m-0">
                <span class="badge badge-light-success fs-base">
                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>1.9%
                </span>
            </div>
        </div>
    </div>
</div>
HTML;
@endphp

@include('partials.widgets.lists._widget-18', [
    'widgetNumber' => 23,
    'titleText' => 'Lading Teams',
    'subtitleText' => '8k social visitors',
    'toolbarHtml' => '',
    'bodyClass' => 'card-body pt-5',
    'itemsWrapperClass' => '',
    'itemsHtml' => $itemsHtml,
])
