@php
    $widgetNumber = $widgetNumber ?? 3;
    $cardClass = $cardClass ?? 'card card-xl-stretch mb-xl-8';
    $title = $title ?? 'Sales Overview';
    $subtitle = $subtitle ?? 'Recent sales statistics';
    $menuId = $menuId ?? 'kt_menu_65a12148734da';
    $bodyVariant = $bodyVariant ?? 'overview';

    $overviewRows = $overviewRows ?? [
        [
            'rowClass' => 'row g-0',
            'cols' => [
                [
                    'colClass' => 'col mr-8',
                    'label' => 'Average Sale',
                    'value' => '$650',
                    'trend' => ['direction' => 'up', 'class' => 'text-success'],
                ],
                ['colClass' => 'col', 'label' => 'Commission', 'value' => '$233,600'],
            ],
        ],
        [
            'rowClass' => 'row g-0 mt-8',
            'cols' => [
                ['colClass' => 'col mr-8', 'label' => 'Annual Taxes 2019', 'value' => '$29,004'],
                [
                    'colClass' => 'col',
                    'label' => 'Annual Income',
                    'value' => '$1,480,00',
                    'trend' => ['direction' => 'down', 'class' => 'text-danger'],
                ],
            ],
        ],
    ];
    $detailedRows = $detailedRows ?? [
        [
            'rowClass' => 'row g-0 mt-5 mb-10',
            'items' => [
                [
                    'icon' => 'ki-bucket',
                    'iconPathCount' => 4,
                    'symbolBgClass' => 'bg-light-info',
                    'iconColorClass' => 'text-info',
                    'value' => '$2,034',
                    'label' => 'Author Sales',
                ],
                [
                    'icon' => 'ki-abstract-26',
                    'iconPathCount' => 2,
                    'symbolBgClass' => 'bg-light-danger',
                    'iconColorClass' => 'text-danger',
                    'value' => '$706',
                    'label' => 'Commision',
                ],
            ],
        ],
        [
            'rowClass' => 'row g-0',
            'items' => [
                [
                    'icon' => 'ki-basket',
                    'iconPathCount' => 4,
                    'symbolBgClass' => 'bg-light-success',
                    'iconColorClass' => 'text-success',
                    'value' => '$49',
                    'label' => 'Average Bid',
                ],
                [
                    'icon' => 'ki-barcode',
                    'iconPathCount' => 8,
                    'symbolBgClass' => 'bg-light-primary',
                    'iconColorClass' => 'text-primary',
                    'value' => '$5.8M',
                    'label' => 'All Time Sales',
                ],
            ],
        ],
    ];
@endphp

<!--begin::Mixed Widget {{ $widgetNumber }}-->
<div class="{{ $cardClass }}">
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

    @if ($bodyVariant === 'action')
        <!--begin::Body-->
        <div class="card-body d-flex flex-column">
            <div class="flex-grow-1">
                <div class="{{ $actionChartClass ?? 'mixed-widget-4-chart' }}"
                    data-kt-chart-color="{{ $actionChartColor ?? 'primary' }}"
                    style="{{ $actionChartStyle ?? 'height: 200px' }}"></div>
            </div>
            <div class="pt-5">
                <p class="text-center fs-6 pb-5">
                    <span class="badge badge-light-danger fs-8">{{ $noteBadge ?? 'Notes:' }}</span>&nbsp;
                    {{ $noteLine1 ?? 'Current sprint requires stakeholders' }}
                    <br />{{ $noteLine2 ?? 'to approve newly amended policies' }}
                </p>
                <a href="{{ $actionHref ?? '#' }}" class="{{ $actionButtonClass ?? 'btn btn-primary w-100 py-3' }}">
                    {{ $actionButtonText ?? 'Take Action' }}
                </a>
            </div>
        </div>
        <!--end::Body-->
    @elseif ($bodyVariant === 'detailed')
        <!--begin::Body-->
        <div class="card-body p-0 d-flex flex-column">
            <!--begin::Stats-->
            <div class="card-px pt-5 pb-10 flex-grow-1">
                @foreach ($detailedRows as $row)
                    <!--begin::Row-->
                    <div class="{{ $row['rowClass'] }}">
                        @foreach ($row['items'] as $item)
                            <!--begin::Col-->
                            <div class="col">
                                <div class="d-flex align-items-center me-2">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-3">
                                        <div class="symbol-label {{ $item['symbolBgClass'] }}">
                                            <i class="ki-duotone {{ $item['icon'] }} fs-1 {{ $item['iconColorClass'] }}">
                                                @for ($i = 1; $i <= $item['iconPathCount']; $i++)
                                                    <span class="path{{ $i }}"></span>
                                                @endfor
                                            </i>
                                        </div>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div>
                                        <div class="fs-4 text-gray-900 fw-bold">{{ $item['value'] }}</div>
                                        <div class="fs-7 text-muted fw-bold">{{ $item['label'] }}</div>
                                    </div>
                                    <!--end::Title-->
                                </div>
                            </div>
                            <!--end::Col-->
                        @endforeach
                    </div>
                    <!--end::Row-->
                @endforeach
            </div>
            <!--end::Stats-->
            <!--begin::Chart-->
            <div class="{{ $detailedChartClass ?? 'mixed-widget-6-chart card-rounded-bottom' }}"
                data-kt-chart-color="{{ $detailedChartColor ?? 'primary' }}"
                style="{{ $detailedChartStyle ?? 'height: 150px' }}"></div>
            <!--end::Chart-->
        </div>
        <!--end::Body-->
    @else
        <!--begin::Body-->
        <div class="card-body p-0 d-flex flex-column">
            <!--begin::Stats-->
            <div class="card-p pt-5 bg-body flex-grow-1">
                @foreach ($overviewRows as $row)
                    <!--begin::Row-->
                    <div class="{{ $row['rowClass'] }}">
                        @foreach ($row['cols'] as $col)
                            <!--begin::Col-->
                            <div class="{{ $col['colClass'] }}">
                                <!--begin::Label-->
                                <div class="fs-7 text-muted fw-bold">{{ $col['label'] }}</div>
                                <!--end::Label-->
                                <!--begin::Stat-->
                                @if (isset($col['trend']))
                                    <div class="d-flex align-items-center">
                                        <div class="fs-4 fw-bold">{{ $col['value'] }}</div>
                                        <i
                                            class="ki-duotone ki-arrow-{{ $col['trend']['direction'] }} fs-5 {{ $col['trend']['class'] }} ms-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                @else
                                    <div class="fs-4 fw-bold">{{ $col['value'] }}</div>
                                @endif
                                <!--end::Stat-->
                            </div>
                            <!--end::Col-->
                        @endforeach
                    </div>
                    <!--end::Row-->
                @endforeach
            </div>
            <!--end::Stats-->
            <!--begin::Chart-->
            <div class="{{ $overviewChartClass ?? 'mixed-widget-3-chart card-rounded-bottom' }}"
                data-kt-chart-color="{{ $overviewChartColor ?? 'primary' }}"
                style="{{ $overviewChartStyle ?? 'height: 150px' }}"></div>
            <!--end::Chart-->
        </div>
        <!--end::Body-->
    @endif
</div>
<!--end::Mixed Widget {{ $widgetNumber }}-->
