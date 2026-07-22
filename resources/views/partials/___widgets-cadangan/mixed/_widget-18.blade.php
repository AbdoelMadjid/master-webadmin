@php
    $widgetNumber = $widgetNumber ?? 18;
    $menuId = $menuId ?? 'kt_menu_65a10b8a85f4d';
    $title = $title ?? 'Weekly Sales Stats';
    $subtitle = $subtitle ?? '890,344 Sales';
    $chartId = $chartId ?? 'kt_charts_mixed_widget_18_chart';
    $items = $items ?? [
        [
            'itemClass' => 'd-flex align-items-sm-center mb-7',
            'image' => 'assets/media/svg/brand-logos/plurk.svg',
            'title' => 'Top Authors',
            'subtitle' => 'Mark, Rowling, Esther',
            'badge' => '+82$',
        ],
        [
            'itemClass' => 'd-flex align-items-sm-center mb-7',
            'image' => 'assets/media/svg/brand-logos/telegram.svg',
            'title' => 'Popular Authors',
            'subtitle' => 'Randy, Steve, Mike',
            'badge' => '+280$',
        ],
        [
            'itemClass' => 'd-flex align-items-sm-center mb-7',
            'image' => 'assets/media/svg/brand-logos/vimeo.svg',
            'title' => 'New Users',
            'subtitle' => 'John, Pat, Jimmy',
            'badge' => '+4500$',
        ],
        [
            'itemClass' => 'd-flex align-items-sm-center',
            'image' => 'assets/media/svg/brand-logos/bebo.svg',
            'title' => 'Active Customers',
            'subtitle' => 'Mark, Rowling, Esther',
            'badge' => '+686$',
        ],
    ];
@endphp

<!--begin::Mixed Widget {{ $widgetNumber }}-->
<div class="card h-md-100">
    <!--begin::Beader-->
    <div class="card-header border-0 py-5">
        @include('partials.widgets.mixed.components._header-title-subtitle', [
            'title' => $title,
            'subtitle' => $subtitle,
        ])
        <div class="card-toolbar">
            <!--begin::Menu-->
            <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                <i class="ki-duotone ki-category fs-6">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                </i>
            </button>
            <!--begin::Menu 1-->
            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                id="{{ $menuId }}">
                <!--begin::Header-->
                <div class="px-7 py-5">
                    <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                </div>
                <!--end::Header-->
                <!--begin::Menu separator-->
                <div class="separator border-gray-200"></div>
                <!--end::Menu separator-->
                <!--begin::Form-->
                <div class="px-7 py-5">
                    <!--begin::Input group-->
                    <div class="mb-10">
                        <!--begin::Label-->
                        <label class="form-label fw-semibold">Status:</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <div>
                            <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true"
                                data-close-on-select="false" data-placeholder="Select option"
                                data-dropdown-parent="#{{ $menuId }}" data-allow-clear="true">
                                <option></option>
                                <option value="1">Approved</option>
                                <option value="2">Pending</option>
                                <option value="2">In Process</option>
                                <option value="2">Rejected</option>
                            </select>
                        </div>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-10">
                        <!--begin::Label-->
                        <label class="form-label fw-semibold">Member Type:</label>
                        <!--end::Label-->
                        <!--begin::Options-->
                        <div class="d-flex">
                            <!--begin::Options-->
                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                <input class="form-check-input" type="checkbox" value="1" />
                                <span class="form-check-label">Author</span>
                            </label>
                            <!--end::Options-->
                            <!--begin::Options-->
                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                <span class="form-check-label">Customer</span>
                            </label>
                            <!--end::Options-->
                        </div>
                        <!--end::Options-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-10">
                        <!--begin::Label-->
                        <label class="form-label fw-semibold">Notifications:</label>
                        <!--end::Label-->
                        <!--begin::Switch-->
                        <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="" name="notifications"
                                checked="checked" />
                            <label class="form-check-label">Enabled</label>
                        </div>
                        <!--end::Switch-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="d-flex justify-content-end">
                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                            data-kt-menu-dismiss="true">Reset</button>
                        <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Form-->
            </div>
            <!--end::Menu 1-->
            <!--end::Menu-->
        </div>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body p-0 d-flex flex-column">
        <!--begin::Items-->
        <div class="card-px pt-5 pb-10 flex-grow-1">
            @foreach ($items as $item)
                @include('partials.widgets.mixed.components._brand-list-item', [
                    'itemClass' => $item['itemClass'],
                    'sectionClass' => 'd-flex align-items-center flex-row-fluid flex-wrap',
                    'symbolClass' => 'symbol symbol-50px me-5',
                    'symbolLabelTag' => 'span',
                    'symbolLabelClass' => 'symbol-label',
                    'image' => $item['image'],
                    'imageClass' => 'h-50 align-self-center',
                    'href' => $item['href'] ?? '#',
                    'title' => $item['title'],
                    'titleClass' => 'text-gray-800 text-hover-primary fs-6 fw-bold',
                    'subtitle' => $item['subtitle'],
                    'subtitleClass' => 'text-muted fw-semibold d-block fs-7',
                    'badge' => $item['badge'],
                    'badgeClass' => 'badge badge-light fw-bold my-2',
                ])
            @endforeach
        </div>
        <!--end::Items-->
        <!--begin::Chart-->
        <div id="{{ $chartId }}" class="card-rounded-bottom" style="height: 150px"></div>
        <!--end::Chart-->
    </div>
    <!--end::Body-->
</div>
<!--end::Mixed Widget {{ $widgetNumber }}-->
