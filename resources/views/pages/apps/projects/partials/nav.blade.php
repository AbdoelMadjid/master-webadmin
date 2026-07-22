<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
    <li class="nav-item">
        <a class="nav-link text-active-primary py-5 me-6 {{ ($active ?? '') === 'view' ? 'active' : '' }}"
            href="/apps/projects/view">Overview</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-active-primary py-5 me-6 {{ ($active ?? '') === 'targets' ? 'active' : '' }}"
            href="/apps/projects/targets">Targets</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-active-primary py-5 me-6 {{ ($active ?? '') === 'budget' ? 'active' : '' }}"
            href="/apps/projects/budget">Budget</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-active-primary py-5 me-6 {{ ($active ?? '') === 'users' ? 'active' : '' }}"
            href="/apps/projects/users">Users</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-active-primary py-5 me-6 {{ ($active ?? '') === 'files' ? 'active' : '' }}"
            href="/apps/projects/files">Files</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-active-primary py-5 me-6 {{ ($active ?? '') === 'activity' ? 'active' : '' }}"
            href="/apps/projects/activity">Activity</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-active-primary py-5 me-6 {{ ($active ?? '') === 'settings' ? 'active' : '' }}"
            href="/apps/projects/settings">Settings</a>
    </li>
</ul>
