@php
    $currentTab = request()->query('tab', $active ?? 'ringkasan');
@endphp
<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ in_array($currentTab, ['ringkasan', 'overview']) ? 'active' : '' }}"
            href="/profil-pengguna?tab=ringkasan">{{ __('menu.overview') }}</a>
    </li>
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ in_array($currentTab, ['pengaturan', 'settings']) ? 'active' : '' }}"
            href="/profil-pengguna?tab=pengaturan">{{ __('menu.settings') }}</a>
    </li>
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ in_array($currentTab, ['keamanan', 'security']) ? 'active' : '' }}"
            href="/profil-pengguna?tab=keamanan">{{ __('menu.security') }}</a>
    </li>
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ in_array($currentTab, ['aktivitas', 'activity']) ? 'active' : '' }}"
            href="/profil-pengguna?tab=aktivitas">{{ __('menu.activity') }}</a>
    </li>
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ in_array($currentTab, ['tagihan', 'billing']) ? 'active' : '' }}"
            href="/profil-pengguna?tab=tagihan">{{ __('menu.billing') }}</a>
    </li>
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ in_array($currentTab, ['pernyataan', 'statements']) ? 'active' : '' }}"
            href="/profil-pengguna?tab=pernyataan">{{ __('menu.statements') }}</a>
    </li>
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ in_array($currentTab, ['referensi', 'referrals']) ? 'active' : '' }}"
            href="/profil-pengguna?tab=referensi">{{ __('menu.referrals') }}</a>
    </li>
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ in_array($currentTab, ['kunci-api', 'api-keys']) ? 'active' : '' }}"
            href="/profil-pengguna?tab=kunci-api">{{ __('menu.api_keys') }}</a>
    </li>
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ in_array($currentTab, ['log', 'logs']) ? 'active' : '' }}"
            href="/profil-pengguna?tab=log">{{ __('menu.logs') }}</a>
    </li>
</ul>
