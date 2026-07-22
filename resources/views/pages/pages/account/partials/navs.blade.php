<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ ($active ?? '') === 'overview' ? 'active' : '' }}"
            href="/pages/account/overview">{{ __('menu.overview') }}</a>
    </li>
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ ($active ?? '') === 'settings' ? 'active' : '' }}"
            href="/pages/account/settings">{{ __('menu.settings') }}</a>
    </li>
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ ($active ?? '') === 'security' ? 'active' : '' }}"
            href="/pages/account/security">{{ __('menu.security') }}</a>
    </li>
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ ($active ?? '') === 'activity' ? 'active' : '' }}"
            href="/pages/account/activity">{{ __('menu.activity') }}</a>
    </li>
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ ($active ?? '') === 'billing' ? 'active' : '' }}"
            href="/pages/account/billing">{{ __('menu.billing') }}</a>
    </li>
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ ($active ?? '') === 'statements' ? 'active' : '' }}"
            href="/pages/account/statements">{{ __('menu.statements') }}</a>
    </li>
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ ($active ?? '') === 'referrals' ? 'active' : '' }}"
            href="/pages/account/referrals">{{ __('menu.referrals') }}</a>
    </li>
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ ($active ?? '') === 'api-keys' ? 'active' : '' }}"
            href="/pages/account/api-keys">{{ __('menu.api_keys') }}</a>
    </li>
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ ($active ?? '') === 'logs' ? 'active' : '' }}"
            href="/pages/account/logs">{{ __('menu.logs') }}</a>
    </li>
</ul>
