<div class="d-flex flex-stack px-lg-10">
    <div class="me-0">
        <button class="btn btn-flex btn-link btn-color-gray-700 btn-active-color-primary rotate fs-base"
            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0px, 0px">
            @if (app()->getLocale() == 'id')
                <img class="w-20px h-20px rounded me-3" src="assets/media/flags/indonesia.svg" alt="" />
                <span class="me-1">{{ __('auth.indonesian') }}</span>
            @else
                <img class="w-20px h-20px rounded me-3" src="assets/media/flags/united-states.svg"
                    alt="" />
                <span class="me-1">{{ __('auth.english') }}</span>
            @endif
            <i class="ki-duotone ki-down fs-5 text-muted rotate-180 m-0"></i>
        </button>

        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4 fs-7"
            data-kt-menu="true" @if (!empty($menuId)) id="{{ $menuId }}" @endif>
            <div class="menu-item px-3">
                <a href="{{ route('lang.switch', 'en') }}"
                    class="menu-link d-flex px-5 {{ app()->getLocale() == 'en' ? 'active' : '' }}">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="assets/media/flags/united-states.svg" alt="" />
                    </span>
                    <span>{{ __('auth.english') }}</span>
                </a>
            </div>

            <div class="menu-item px-3">
                <a href="{{ route('lang.switch', 'id') }}"
                    class="menu-link d-flex px-5 {{ app()->getLocale() == 'id' ? 'active' : '' }}">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="assets/media/flags/indonesia.svg" alt="" />
                    </span>
                    <span>{{ __('auth.indonesian') }}</span>
                </a>
            </div>
        </div>
    </div>

    <div class="d-flex fw-semibold text-primary fs-base gap-5">
        <a href="/pages/general/corporate/team" target="_blank">{{ __('auth.terms') }}</a>
        <a href="/pages/general/pricing/column" target="_blank">{{ __('auth.plans') }}</a>
        <a href="/pages/general/corporate/contact" target="_blank">{{ __('auth.contact_us') }}</a>
    </div>
</div>
