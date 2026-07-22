<!--begin::Card widget 14-->
@php
    $imageUrl = $imageUrl ?? 'assets/media/stock/600x600/img-39.jpg';
    $title = $title ?? 'Wavy Curved Art';
    $lastBid = $lastBid ?? 'Last Bid: 1.07 ETH';
    $total = $total ?? '$2,630';
    $viewHref = $viewHref ?? 'apps/ecommerce/sales/listing.html';
@endphp
<div class="card card-flush h-xl-100">
    <!--begin::Body-->
    <div class="card-body text-center pb-5">
        <!--begin::Overlay-->
        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="{{ URL::asset($imageUrl) }}">
            <!--begin::Image-->
            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded mb-7"
                style="height: 266px;background-image:url('{{ URL::asset($imageUrl) }}')"></div>
            <!--end::Image-->
            <!--begin::Action-->
            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                <i class="ki-duotone ki-eye fs-3x text-white">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                </i>
            </div>
            <!--end::Action-->
        </a>
        <!--end::Overlay-->
        <!--begin::Info-->
        <div class="d-flex align-items-end flex-stack mb-1">
            <!--begin::Title-->
            <div class="text-start">
                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-4 d-block">{{ $title }}</span>
                <span class="text-gray-500 mt-1 fw-bold fs-6">{{ $lastBid }}</span>
            </div>
            <!--end::Title-->
            <!--begin::Total-->
            <span class="text-gray-600 text-end fw-bold fs-6">{{ $total }}</span>
            <!--end::Total-->
        </div>
        <!--end::Info-->
    </div>
    <!--end::Body-->
    <!--begin::Footer-->
    <div class="card-footer d-flex flex-stack pt-0">
        <!--begin::Link-->
        <a class="btn btn-sm btn-primary flex-shrink-0 me-2" data-bs-target="#kt_modal_bidding"
            data-bs-toggle="modal">Place a Bid</a>
        <!--end::Link-->
        <!--begin::Link-->
        <a class="btn btn-sm btn-light flex-shrink-0" href="{{ $viewHref }}">View Item</a>
        <!--end::Link-->
    </div>
    <!--end::Footer-->
</div>
<!--end::Card widget 14-->
