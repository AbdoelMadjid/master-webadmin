<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ ($active ?? '') === 'overview' ? 'active' : '' }}"
            href="/pages/general/user-profile/overview">{{ __('menu.overview') }}</a>
    </li>
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ ($active ?? '') === 'projects' ? 'active' : '' }}"
            href="/pages/general/user-profile/projects">{{ __('menu.projects') }}</a>
    </li>
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ ($active ?? '') === 'campaigns' ? 'active' : '' }}"
            href="/pages/general/user-profile/campaigns">{{ __('menu.campaigns') }}</a>
    </li>
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ ($active ?? '') === 'documents' ? 'active' : '' }}"
            href="/pages/general/user-profile/documents">{{ __('menu.documents') }}</a>
    </li>
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ ($active ?? '') === 'followers' ? 'active' : '' }}"
            href="/pages/general/user-profile/followers">{{ __('menu.followers') }}</a>
    </li>
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ ($active ?? '') === 'activity' ? 'active' : '' }}"
            href="/pages/general/user-profile/activity">{{ __('menu.activity') }}</a>
    </li>
</ul>
