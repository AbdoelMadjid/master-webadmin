@php
    $widgetNumber = $widgetNumber ?? 18;
    $cardClass = $cardClass ?? 'card card-flush h-xl-100';
    $headerClass = $headerClass ?? 'card-header pt-7';
    $titleText = $titleText ?? 'Lading Companies';
    $subtitleText = $subtitleText ?? '8k social visitors';
    $toolbarHtml = $toolbarHtml ?? <<<'HTML'
<ul class="nav me-n1" id="kt_chart_widget_11_tabs">
    <li class="nav-item">
        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1" data-bs-toggle="tab" id="kt_list_widget_18_tab_1" href="#kt_list_widget_18_tab_content_1">2021</a>
    </li>
    <li class="nav-item">
        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1 active" data-bs-toggle="tab" id="kt_list_widget_18_tab_2" href="#kt_list_widget_18_tab_content_2">Month</a>
    </li>
</ul>
HTML;
    $bodyClass = $bodyClass ?? 'card-body pt-4';
    $itemsWrapperClass = $itemsWrapperClass ?? '';
    $itemsHtml = $itemsHtml ?? null;
@endphp

<!--begin::List widget {{ $widgetNumber }}-->
<div class="{{ $cardClass }}">
    <!--begin::Header-->
    <div class="{{ $headerClass }}">
        <!--begin::Title-->
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-gray-800">{{ $titleText }}</span>
            <span class="text-gray-500 mt-1 fw-semibold fs-6">{{ $subtitleText }}</span>
        </h3>
        <!--end::Title-->
        <!--begin::Toolbar-->
        <div class="card-toolbar">
            {!! $toolbarHtml !!}
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="{{ $bodyClass }}">
        @if(!empty($itemsHtml))
            <!--begin::Items-->
            <div class="{{ $itemsWrapperClass }}">
                {!! $itemsHtml !!}
            </div>
            <!--end::Items-->
        @else
        <!--begin::Tab Content-->
        <div class="tab-content">
            <!--begin::Tap pane-->
            <div class="tab-pane fade" id="kt_list_widget_18_tab_content_1">
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center me-5">
                        <!--begin::Flag-->
                        <img src="assets/media/svg/brand-logos/kickstarter.svg" class="me-4 w-30px"
                            style="border-radius: 4px" alt="" />
                        <!--end::Flag-->
                        <!--begin::Content-->
                        <div class="me-5">
                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Abstergo Ltd.</a>
                            <!--end::Title-->
                            <!--begin::Desc-->
                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Video Channel</span>
                            <!--end::Desc-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center">
                        <!--begin::Number-->
                        <span class="text-gray-800 fw-bold fs-4 me-3">1,578</span>
                        <!--end::Number-->
                        <!--begin::Info-->
                        <div class="m-0">
                            <!--begin::Label-->
                            <span class="badge badge-light-success fs-base">
                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>4.1%</span>
                            <!--end::Label-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-dashed my-4"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center me-5">
                        <!--begin::Flag-->
                        <img src="assets/media/svg/brand-logos/balloon.svg" class="me-4 w-30px"
                            style="border-radius: 4px" alt="" />
                        <!--end::Flag-->
                        <!--begin::Content-->
                        <div class="me-5">
                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Barone LLC.</a>
                            <!--end::Title-->
                            <!--begin::Desc-->
                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Messanger</span>
                            <!--end::Desc-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center">
                        <!--begin::Number-->
                        <span class="text-gray-800 fw-bold fs-4 me-3">794</span>
                        <!--end::Number-->
                        <!--begin::Info-->
                        <div class="m-0">
                            <!--begin::Label-->
                            <span class="badge badge-light-success fs-base">
                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>0.2%</span>
                            <!--end::Label-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-dashed my-4"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center me-5">
                        <!--begin::Flag-->
                        <img src="assets/media/svg/brand-logos/plurk.svg" class="me-4 w-30px" style="border-radius: 4px"
                            alt="" />
                        <!--end::Flag-->
                        <!--begin::Content-->
                        <div class="me-5">
                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Big Kahuna
                                Burger</a>
                            <!--end::Title-->
                            <!--begin::Desc-->
                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
                            <!--end::Desc-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center">
                        <!--begin::Number-->
                        <span class="text-gray-800 fw-bold fs-4 me-3">2,047</span>
                        <!--end::Number-->
                        <!--begin::Info-->
                        <div class="m-0">
                            <!--begin::Label-->
                            <span class="badge badge-light-success fs-base">
                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>1.9%</span>
                            <!--end::Label-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-dashed my-4"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center me-5">
                        <!--begin::Flag-->
                        <img src="assets/media/svg/brand-logos/vimeo.svg" class="me-4 w-30px" style="border-radius: 4px"
                            alt="" />
                        <!--end::Flag-->
                        <!--begin::Content-->
                        <div class="me-5">
                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Biffco
                                Enterprises</a>
                            <!--end::Title-->
                            <!--begin::Desc-->
                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
                            <!--end::Desc-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center">
                        <!--begin::Number-->
                        <span class="text-gray-800 fw-bold fs-4 me-3">3,458</span>
                        <!--end::Number-->
                        <!--begin::Info-->
                        <div class="m-0">
                            <!--begin::Label-->
                            <span class="badge badge-light-success fs-base">
                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>8.3%</span>
                            <!--end::Label-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-dashed my-4"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center me-5">
                        <!--begin::Flag-->
                        <img src="assets/media/svg/brand-logos/atica.svg" class="me-4 w-30px" style="border-radius: 4px"
                            alt="" />
                        <!--end::Flag-->
                        <!--begin::Content-->
                        <div class="me-5">
                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Abstergo Ltd.</a>
                            <!--end::Title-->
                            <!--begin::Desc-->
                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Community</span>
                            <!--end::Desc-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center">
                        <!--begin::Number-->
                        <span class="text-gray-800 fw-bold fs-4 me-3">579</span>
                        <!--end::Number-->
                        <!--begin::Info-->
                        <div class="m-0">
                            <!--begin::Label-->
                            <span class="badge badge-light-success fs-base">
                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>2.6%</span>
                            <!--end::Label-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-dashed my-4"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center me-5">
                        <!--begin::Flag-->
                        <img src="assets/media/svg/brand-logos/telegram-2.svg" class="me-4 w-30px"
                            style="border-radius: 4px" alt="" />
                        <!--end::Flag-->
                        <!--begin::Content-->
                        <div class="me-5">
                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Binford Ltd.</a>
                            <!--end::Title-->
                            <!--begin::Desc-->
                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social Media</span>
                            <!--end::Desc-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center">
                        <!--begin::Number-->
                        <span class="text-gray-800 fw-bold fs-4 me-3">2,588</span>
                        <!--end::Number-->
                        <!--begin::Info-->
                        <div class="m-0">
                            <!--begin::Label-->
                            <span class="badge badge-light-danger fs-base">
                                <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>0.4%</span>
                            <!--end::Label-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Item-->
            </div>
            <!--end::Tap pane-->
            <!--begin::Tap pane-->
            <div class="tab-pane fade show active" id="kt_list_widget_18_tab_content_2">
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center me-5">
                        <!--begin::Flag-->
                        <img src="assets/media/svg/brand-logos/atica.svg" class="me-4 w-30px"
                            style="border-radius: 4px" alt="" />
                        <!--end::Flag-->
                        <!--begin::Content-->
                        <div class="me-5">
                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Abstergo Ltd.</a>
                            <!--end::Title-->
                            <!--begin::Desc-->
                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Community</span>
                            <!--end::Desc-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center">
                        <!--begin::Number-->
                        <span class="text-gray-800 fw-bold fs-4 me-3">579</span>
                        <!--end::Number-->
                        <!--begin::Info-->
                        <div class="m-0">
                            <!--begin::Label-->
                            <span class="badge badge-light-success fs-base">
                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>2.6%</span>
                            <!--end::Label-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-dashed my-4"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center me-5">
                        <!--begin::Flag-->
                        <img src="assets/media/svg/brand-logos/telegram-2.svg" class="me-4 w-30px"
                            style="border-radius: 4px" alt="" />
                        <!--end::Flag-->
                        <!--begin::Content-->
                        <div class="me-5">
                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Binford Ltd.</a>
                            <!--end::Title-->
                            <!--begin::Desc-->
                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social Media</span>
                            <!--end::Desc-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center">
                        <!--begin::Number-->
                        <span class="text-gray-800 fw-bold fs-4 me-3">2,588</span>
                        <!--end::Number-->
                        <!--begin::Info-->
                        <div class="m-0">
                            <!--begin::Label-->
                            <span class="badge badge-light-danger fs-base">
                                <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>0.4%</span>
                            <!--end::Label-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-dashed my-4"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center me-5">
                        <!--begin::Flag-->
                        <img src="assets/media/svg/brand-logos/balloon.svg" class="me-4 w-30px"
                            style="border-radius: 4px" alt="" />
                        <!--end::Flag-->
                        <!--begin::Content-->
                        <div class="me-5">
                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Barone LLC.</a>
                            <!--end::Title-->
                            <!--begin::Desc-->
                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Messanger</span>
                            <!--end::Desc-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center">
                        <!--begin::Number-->
                        <span class="text-gray-800 fw-bold fs-4 me-3">794</span>
                        <!--end::Number-->
                        <!--begin::Info-->
                        <div class="m-0">
                            <!--begin::Label-->
                            <span class="badge badge-light-success fs-base">
                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>0.2%</span>
                            <!--end::Label-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-dashed my-4"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center me-5">
                        <!--begin::Flag-->
                        <img src="assets/media/svg/brand-logos/kickstarter.svg" class="me-4 w-30px"
                            style="border-radius: 4px" alt="" />
                        <!--end::Flag-->
                        <!--begin::Content-->
                        <div class="me-5">
                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Abstergo Ltd.</a>
                            <!--end::Title-->
                            <!--begin::Desc-->
                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Video Channel</span>
                            <!--end::Desc-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center">
                        <!--begin::Number-->
                        <span class="text-gray-800 fw-bold fs-4 me-3">1,578</span>
                        <!--end::Number-->
                        <!--begin::Info-->
                        <div class="m-0">
                            <!--begin::Label-->
                            <span class="badge badge-light-success fs-base">
                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>4.1%</span>
                            <!--end::Label-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-dashed my-4"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center me-5">
                        <!--begin::Flag-->
                        <img src="assets/media/svg/brand-logos/vimeo.svg" class="me-4 w-30px"
                            style="border-radius: 4px" alt="" />
                        <!--end::Flag-->
                        <!--begin::Content-->
                        <div class="me-5">
                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Biffco
                                Enterprises</a>
                            <!--end::Title-->
                            <!--begin::Desc-->
                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
                            <!--end::Desc-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center">
                        <!--begin::Number-->
                        <span class="text-gray-800 fw-bold fs-4 me-3">3,458</span>
                        <!--end::Number-->
                        <!--begin::Info-->
                        <div class="m-0">
                            <!--begin::Label-->
                            <span class="badge badge-light-success fs-base">
                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>8.3%</span>
                            <!--end::Label-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-dashed my-4"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center me-5">
                        <!--begin::Flag-->
                        <img src="assets/media/svg/brand-logos/plurk.svg" class="me-4 w-30px"
                            style="border-radius: 4px" alt="" />
                        <!--end::Flag-->
                        <!--begin::Content-->
                        <div class="me-5">
                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Big Kahuna
                                Burger</a>
                            <!--end::Title-->
                            <!--begin::Desc-->
                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
                            <!--end::Desc-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center">
                        <!--begin::Number-->
                        <span class="text-gray-800 fw-bold fs-4 me-3">2,047</span>
                        <!--end::Number-->
                        <!--begin::Info-->
                        <div class="m-0">
                            <!--begin::Label-->
                            <span class="badge badge-light-success fs-base">
                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>1.9%</span>
                            <!--end::Label-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Item-->
            </div>
            <!--end::Tap pane-->
        </div>
        <!--end::Tab Content-->
        @endif
    </div>
    <!--end: Card Body-->
</div>
<!--end::List widget {{ $widgetNumber }}-->
