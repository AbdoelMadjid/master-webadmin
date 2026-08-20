<div class="flex-equal text-end ms-1 d-flex align-items-center justify-content-end gap-2">
    <!--begin::Language Switcher-->
    <div>
        <button class="btn btn-sm btn-flex btn-light btn-active-color-primary rotate fs-7 fw-semibold h-35px w-35px w-sm-auto px-0 px-sm-3 d-inline-flex align-items-center justify-content-center"
            data-kt-menu-trigger="click"
            data-kt-menu-attach="parent"
            data-kt-menu-placement="bottom-end"
            data-bs-toggle="tooltip"
            data-bs-placement="top"
            title="{{ app()->getLocale() == 'id' ? __('auth.indonesian') : __('auth.english') }}">
            @if (app()->getLocale() == 'id')
                <img class="w-20px h-20px rounded me-0 me-sm-2" src="{{ asset('assets/media/flags/indonesia.svg') }}" alt="ID" />
                <span class="d-none d-sm-inline me-1 text-gray-800">{{ __('auth.indonesian') }}</span>
            @else
                <img class="w-20px h-20px rounded me-0 me-sm-2" src="{{ asset('assets/media/flags/united-states.svg') }}" alt="EN" />
                <span class="d-none d-sm-inline me-1 text-gray-800">{{ __('auth.english') }}</span>
            @endif
            <i class="ki-duotone ki-down fs-8 text-muted rotate-180 m-0 ms-1 d-none d-sm-inline-block"></i>
        </button>

        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-175px py-3 fs-7"
            data-kt-menu="true">
            <div class="menu-item px-3">
                <a href="{{ route('lang.switch', 'en') }}"
                    class="menu-link d-flex px-5 {{ app()->getLocale() == 'en' ? 'active' : '' }}"
                    @if (app()->getLocale() == 'en') style="background-color: #f1f0fe;" @endif>
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="{{ asset('assets/media/flags/united-states.svg') }}" alt="EN" />
                    </span>
                    <span @if (app()->getLocale() == 'en') style="color: #009ef7 !important; font-weight: 700 !important;" @else class="text-gray-800" @endif>{{ __('auth.english') }}</span>
                </a>
            </div>
            <div class="menu-item px-3">
                <a href="{{ route('lang.switch', 'id') }}"
                    class="menu-link d-flex px-5 {{ app()->getLocale() == 'id' ? 'active' : '' }}"
                    @if (app()->getLocale() == 'id') style="background-color: #f1f0fe;" @endif>
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="{{ asset('assets/media/flags/indonesia.svg') }}" alt="ID" />
                    </span>
                    <span @if (app()->getLocale() == 'id') style="color: #009ef7 !important; font-weight: 700 !important;" @else class="text-gray-800" @endif>{{ __('auth.indonesian') }}</span>
                </a>
            </div>
        </div>
    </div>
    <!--end::Language Switcher-->

    @if (Route::has('login'))
        @auth
            <a href="{{ route('homepage') }}"
                class="btn btn-sm btn-success h-35px w-35px w-sm-auto px-0 px-sm-4 d-inline-flex align-items-center justify-content-center fs-7 fw-semibold"
                data-bs-toggle="tooltip"
                data-bs-placement="top"
                title="Dashboard">
                <i class="ki-duotone ki-element-11 fs-2 p-0 m-0">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                </i>
                <span class="d-none d-sm-inline ms-2">Dashboard</span>
            </a>
        @else
            <a href="{{ route('login') }}"
                class="btn btn-sm btn-success h-35px w-35px w-sm-auto px-0 px-sm-4 d-inline-flex align-items-center justify-content-center fs-7 fw-semibold"
                data-bs-toggle="tooltip"
                data-bs-placement="top"
                title="{{ __('auth.title') }}">
                <i class="ki-duotone ki-entrance-right fs-2 p-0 m-0">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
                <span class="d-none d-sm-inline ms-2">{{ __('auth.title') }}</span>
            </a>
        @endauth
    @endif
</div>
