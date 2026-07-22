@php
    $widgetNumber = $widgetNumber ?? 8;
    $variant = $variant ?? 'subscription';
    $cardClass = $cardClass ?? 'card card-xl-stretch mb-xl-8';
    $bodyClass = $bodyClass ?? 'card-body';

    $teamWrapperClass = $teamWrapperClass ?? 'd-flex';
    $teamContainerClass = $teamContainerClass ?? 'd-flex flex-column mt-10';
    $teamTitle = $teamTitle ?? 'Team';
    $showTeamTitle = $showTeamTitle ?? true;
    $team = $team ?? [
        ['name' => 'Ana Stone', 'image' => 'assets/media/avatars/300-6.jpg', 'class' => 'symbol symbol-35px me-2'],
        ['name' => 'Mark Larson', 'image' => 'assets/media/avatars/300-5.jpg', 'class' => 'symbol symbol-35px me-2'],
        ['name' => 'Sam Harris', 'image' => 'assets/media/avatars/300-9.jpg', 'class' => 'symbol symbol-35px me-2'],
        ['name' => 'Alice Micto', 'image' => 'assets/media/avatars/300-10.jpg', 'class' => 'symbol symbol-35px'],
    ];
@endphp

<!--begin::Mixed Widget {{ $widgetNumber }}-->
<div class="{{ $cardClass }}">
    <!--begin::Body-->
    <div class="{{ $bodyClass }}">
        @if ($variant === 'campaign')
            <div class="flex-grow-1">
                <!--begin::Info-->
                <div class="d-flex align-items-center pe-2 mb-5">
                    <span class="text-muted fw-bold fs-5 flex-grow-1">{{ $timeText ?? '7 hours ago' }}</span>
                    <div class="symbol symbol-50px">
                        <span class="symbol-label bg-light">
                            <img src="{{ $campaignLogo ?? 'assets/media/svg/brand-logos/plurk.svg' }}"
                                class="h-50 align-self-center" alt="" />
                        </span>
                    </div>
                </div>
                <!--end::Info-->
                <!--begin::Link-->
                <a href="{{ $campaignHref ?? '#' }}"
                    class="{{ $campaignTitleClass ?? 'text-gray-900 fw-bold text-hover-primary fs-4' }}">
                    {{ $campaignTitle ?? 'PitStop - Multiple Email Generator' }}
                </a>
                <!--end::Link-->
                <!--begin::Desc-->
                <p class="{{ $campaignDescClass ?? 'py-3' }}">{{ $campaignLine1 ?? 'Pitstop creates quick email campaigns.' }}
                    <br />{{ $campaignLine2 ?? 'We help to strengthen your brand' }}
                    <br />{{ $campaignLine3 ?? 'for your every purpose.' }}
                </p>
                <!--end::Desc-->
            </div>
        @else
            <!--begin::Heading-->
            <div class="d-flex flex-stack">
                <!--begin:Info-->
                <div class="d-flex align-items-center">
                    <!--begin:Image-->
                    <div class="symbol symbol-60px me-5">
                        <span class="symbol-label bg-danger-light">
                            <img src="{{ $logoImage ?? 'assets/media/svg/brand-logos/plurk.svg' }}"
                                class="h-50 align-self-center" alt="" />
                        </span>
                    </div>
                    <!--end:Image-->
                    <!--begin:Title-->
                    <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                        <a href="{{ $titleHref ?? '#' }}" class="text-gray-900 fw-bold text-hover-primary fs-5">
                            {{ $title ?? 'Monthly Subscription' }}
                        </a>
                        <span class="text-muted fw-bold">{{ $subtitle ?? 'Due: 27 Apr 2020' }}</span>
                    </div>
                    <!--end:Title-->
                </div>
                <!--begin:Info-->
                <!--begin:Menu-->
                <div class="ms-1">
                    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-category fs-6">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>
                    </button>
                    <!--begin::Menu 2-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                        data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        <div class="separator mb-3 opacity-75"></div>
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">New Ticket</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">New Customer</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                            <!--begin::Menu item-->
                            <a href="#" class="menu-link px-3">
                                <span class="menu-title">New Group</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <!--end::Menu item-->
                            <!--begin::Menu sub-->
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Admin Group</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Staff Group</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Member Group</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu sub-->
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">New Contact</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        <div class="separator mt-3 opacity-75"></div>
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <div class="menu-content px-3 py-3">
                                <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                            </div>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu 2-->
                </div>
                <!--end::Menu-->
            </div>
            <!--end::Heading-->
            <!--begin:Stats-->
            <div class="d-flex flex-column w-100 mt-12">
                <span class="text-gray-900 me-2 fw-bold pb-3">{{ $progressLabel ?? 'Progress' }}</span>
                <div class="progress h-5px w-100">
                    <div class="{{ $progressBarClass ?? 'progress-bar bg-danger' }}" role="progressbar"
                        style="width: {{ $progressWidth ?? '75%' }}" aria-valuenow="{{ $progressAria ?? 75 }}"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <!--end:Stats-->
        @endif

        <!--begin:Team-->
        <div class="{{ $teamContainerClass }}">
            @if ($showTeamTitle)
                <div class="text-gray-900 me-2 fw-bold pb-4">{{ $teamTitle }}</div>
            @endif
            <div class="{{ $teamWrapperClass }}">
                @foreach ($team as $member)
                    <a href="{{ $member['href'] ?? '#' }}" class="{{ $member['class'] }}" data-bs-toggle="tooltip"
                        title="{{ $member['name'] }}">
                        <img src="{{ $member['image'] }}" alt="" />
                    </a>
                @endforeach
            </div>
        </div>
        <!--end:Team-->
    </div>
    <!--end::Body-->
</div>
<!--end::Mixed Widget {{ $widgetNumber }}-->
