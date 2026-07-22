<!--begin::Card widget 15-->
@php
    $cardClass = $cardClass ?? 'card card-flush h-xl-100';
    $bodyClass = $bodyClass ?? 'card-body py-9';
    $rowClass = $rowClass ?? 'row gx-9 h-100';
    $leftColClass = $leftColClass ?? 'col-sm-6 mb-10 mb-sm-0';
    $rightColClass = $rightColClass ?? 'col-sm-6';
    $useOverlayImage = $useOverlayImage ?? true;
    $overlayClass = $overlayClass ?? 'd-block overlay h-100';
    $overlayLightbox = $overlayLightbox ?? 'lightbox-hot-sales';
    $imageHref = $imageHref ?? 'assets/media/stock/600x600/img-42.jpg';
    $overlayImageClass = $overlayImageClass ?? 'overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-200px h-100';
    $overlayImageStyle = $overlayImageStyle ?? "background-image:url('assets/media/stock/600x600/img-42.jpg')";
    $plainImageClass = $plainImageClass ?? 'bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-400px min-h-sm-100 h-100';
    $plainImageStyle = $plainImageStyle ?? '';
    $showOverlayLayer = $showOverlayLayer ?? true;

    $headerVariant = $headerVariant ?? 'title_only';
    $metaText = $metaText ?? 'NFT ID: 34356776';
    $titleText = $titleText ?? 'California Art';
    $titleHref = $titleHref ?? 'apps/projects/users.html';
    $headerBadgeText = $headerBadgeText ?? '';
    $headerBadgeClass = $headerBadgeClass ?? 'badge badge-light-primary flex-shrink-0 align-self-center py-3 px-4 fs-7';

    $item1Label = $item1Label ?? 'Creator';
    $item1Value = $item1Value ?? 'Robert Fox';
    $item1Href = $item1Href ?? 'apps/projects/users.html';
    $item1Avatar = $item1Avatar ?? 'assets/media/avatars/300-3.jpg';
    $item2Label = $item2Label ?? 'Instant Price';
    $item2Value = $item2Value ?? '4.2 ETH';
    $item2IsLink = $item2IsLink ?? true;
    $item2Href = $item2Href ?? '#';
    $item2SymbolBg = $item2SymbolBg ?? 'bg-success';

    $bodyVariant = $bodyVariant ?? 'bid_box';
    $bidTopLabel = $bidTopLabel ?? 'Last Bid';
    $bidValue = $bidValue ?? '2.48 ETH';
    $bidPrice = $bidPrice ?? '$6,047.84';
    $bidBottomLabel = $bidBottomLabel ?? 'Ending in';
    $bidBottomValue = $bidBottomValue ?? '06h 52m 47s';
    $descriptionText = $descriptionText ?? '';
    $stat1Value = $stat1Value ?? '';
    $stat1Label = $stat1Label ?? 'Due Date';
    $stat2CountupValue = $stat2CountupValue ?? '';
    $stat2Label = $stat2Label ?? 'Budget';

    $footerVariant = $footerVariant ?? 'actions';
    $primaryActionText = $primaryActionText ?? 'Place a Bid';
    $primaryActionHref = $primaryActionHref ?? '#';
    $primaryActionTarget = $primaryActionTarget ?? '#kt_modal_bidding';
    $secondaryActionText = $secondaryActionText ?? 'View Item';
    $secondaryActionHref = $secondaryActionHref ?? '#';
    $secondaryActionTarget = $secondaryActionTarget ?? '#kt_modal_users_search';
    $projectLinkText = $projectLinkText ?? 'View Project';
    $projectLinkHref = $projectLinkHref ?? 'apps/projects/project.html';
@endphp
<div class="{{ $cardClass }}">
    <!--begin::Body-->
    <div class="{{ $bodyClass }}">
        <!--begin::Row-->
        <div class="{{ $rowClass }}">
            <!--begin::Col-->
            <div class="{{ $leftColClass }}">
                @if ($useOverlayImage)
                    <!--begin::Overlay-->
                    <a class="{{ $overlayClass }}" data-fslightbox="{{ $overlayLightbox }}" href="{{ $imageHref }}">
                        <!--begin::Image-->
                        <div class="{{ $overlayImageClass }}" style="{{ $overlayImageStyle }}"></div>
                        <!--end::Image-->
                        @if ($showOverlayLayer)
                            <!--begin::Action-->
                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                <i class="ki-duotone ki-eye fs-3x text-white">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </div>
                            <!--end::Action-->
                        @endif
                    </a>
                    <!--end::Overlay-->
                @else
                    <!--begin::Image-->
                    <div class="{{ $plainImageClass }}" style="{{ $plainImageStyle }}"></div>
                    <!--end::Image-->
                @endif
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="{{ $rightColClass }}">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column h-100">
                    <!--begin::Header-->
                    <div class="mb-7">
                        @if ($headerVariant === 'stack_badge')
                            <!--begin::Heading-->
                            <div class="d-flex flex-stack mb-6">
                                <!--begin::Title-->
                                <div class="flex-shrink-0 me-5">
                                    <span class="text-gray-500 fs-7 fw-bold me-2 d-block lh-1 pb-1">{{ $metaText }}</span>
                                    <span class="text-gray-800 fs-1 fw-bold">{{ $titleText }}</span>
                                </div>
                                <!--end::Title-->
                                <span class="{{ $headerBadgeClass }}">{{ $headerBadgeText }}</span>
                            </div>
                            <!--end::Heading-->
                        @else
                            <!--begin::Title-->
                            <div class="mb-6">
                                <span class="text-gray-500 fs-7 fw-bold me-2 d-block lh-1 pb-1">{{ $metaText }}</span>
                                <a href="{{ $titleHref }}" class="text-gray-800 text-hover-primary fs-1 fw-bold">{{ $titleText }}</a>
                            </div>
                            <!--end::Title-->
                        @endif
                        <!--begin::Items-->
                        <div class="d-flex align-items-center flex-wrap d-grid gap-2">
                            <!--begin::Item-->
                            <div class="d-flex align-items-center me-5 me-xl-13">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px symbol-circle me-3">
                                    <img src="{{ $item1Avatar }}" class="" alt="" />
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Info-->
                                <div class="m-0">
                                    <span class="fw-semibold text-gray-500 d-block fs-8">{{ $item1Label }}</span>
                                    <a href="{{ $item1Href }}" class="fw-bold text-gray-800 text-hover-primary fs-7">{{ $item1Value }}</a>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px symbol-circle me-3">
                                    <span class="symbol-label {{ $item2SymbolBg }}">
                                        <i class="ki-duotone ki-abstract-41 fs-5 text-white">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Info-->
                                <div class="m-0">
                                    <span class="fw-semibold text-gray-500 d-block fs-8">{{ $item2Label }}</span>
                                    @if ($item2IsLink)
                                        <a href="{{ $item2Href }}" class="fw-bold text-gray-800 text-hover-primary fs-7">{{ $item2Value }}</a>
                                    @else
                                        <span class="fw-bold text-gray-800 fs-7">{{ $item2Value }}</span>
                                    @endif
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Items-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    @if ($bodyVariant === 'description_stats')
                        <div class="mb-6">
                            <span class="fw-semibold text-gray-600 fs-6 mb-8 d-block">{{ $descriptionText }}</span>
                            <div class="d-flex">
                                <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3">
                                    <span class="fs-6 text-gray-700 fw-bold">{{ $stat1Value }}</span>
                                    <div class="fw-semibold text-gray-500">{{ $stat1Label }}</div>
                                </div>
                                <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 mb-3">
                                    <span class="fs-6 text-gray-700 fw-bold">$ <span class="ms-n1" data-kt-countup="true"
                                            data-kt-countup-value="{{ $stat2CountupValue }}">0</span></span>
                                    <div class="fw-semibold text-gray-500">{{ $stat2Label }}</div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="d-flex flex-column border border-1 border-gray-300 text-center pt-5 pb-7 mb-8 card-rounded">
                            <span class="fw-semibold text-gray-600 fs-7 pb-1">{{ $bidTopLabel }}</span>
                            <span class="fw-bold text-gray-800 fs-2hx lh-1 pb-1">{{ $bidValue }}</span>
                            <span class="fw-bold text-gray-600 fs-4 pb-5">{{ $bidPrice }}</span>
                            <span class="fw-semibold text-gray-600 fs-7 pb-1">{{ $bidBottomLabel }}</span>
                            <span class="fw-bold text-gray-800 fs-3">{{ $bidBottomValue }}</span>
                        </div>
                    @endif
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="d-flex flex-stack mt-auto bd-highlight">
                        @if ($footerVariant === 'users_link')
                            <!--begin::Users group-->
                            <div class="symbol-group symbol-hover flex-nowrap">
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                    <img alt="Pic" src="assets/media/avatars/300-2.jpg" />
                                </div>
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                                    <img alt="Pic" src="assets/media/avatars/300-3.jpg" />
                                </div>
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                    <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                </div>
                            </div>
                            <!--end::Users group-->
                            <!--begin::Actions-->
                            <a href="{{ $projectLinkHref }}"
                                class="d-flex align-items-center text-primary opacity-75-hover fs-6 fw-semibold">{{ $projectLinkText }}
                                <i class="ki-duotone ki-exit-right-corner fs-4 ms-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i></a>
                            <!--end::Actions-->
                        @else
                            <!--begin::Actions-->
                            <a href="{{ $primaryActionHref }}" class="btn btn-primary btn-sm flex-shrink-0 me-3" data-bs-toggle="modal"
                                data-bs-target="{{ $primaryActionTarget }}">{{ $primaryActionText }}</a>
                            <a href="{{ $secondaryActionHref }}" class="btn btn-light btn-sm flex-shrink-0" data-bs-toggle="modal"
                                data-bs-target="{{ $secondaryActionTarget }}">{{ $secondaryActionText }}</a>
                            <!--end::Actions-->
                        @endif
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Body-->
</div>
<!--end::Card widget 15-->
