@include('partials.widgets.lists._widget-2', [
    'widgetNumber' => 26,
    'cardClass' => 'card card-flush h-lg-50',
    'titleText' => 'External Links',
    'subtitleText' => null,
    'toolbarHtml' => '
        <div class="card-toolbar">
            <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                <i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                </i>
            </button>
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                <div class="menu-item px-3">
                    <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                </div>
                <div class="separator mb-3 opacity-75"></div>
                <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3">New Ticket</a>
                </div>
                <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3">New Customer</a>
                </div>
                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                    <a href="#" class="menu-link px-3">
                        <span class="menu-title">New Group</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">Admin Group</a>
                        </div>
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">Staff Group</a>
                        </div>
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">Member Group</a>
                        </div>
                    </div>
                </div>
                <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3">New Contact</a>
                </div>
                <div class="separator mt-3 opacity-75"></div>
                <div class="menu-item px-3">
                    <div class="menu-content px-3 py-3">
                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                    </div>
                </div>
            </div>
        </div>
    ',
    'itemsHtml' => '
        <div class="d-flex flex-stack">
            <a href="#" class="text-primary fw-semibold fs-6 me-2">Avg. Client Rating</a>
            <button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-primary justify-content-end">
                <i class="ki-duotone ki-exit-right-corner fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </button>
        </div>
        <div class="separator separator-dashed my-3"></div>
        <div class="d-flex flex-stack">
            <a href="#" class="text-primary fw-semibold fs-6 me-2">Instagram Followers</a>
            <button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-primary justify-content-end">
                <i class="ki-duotone ki-exit-right-corner fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </button>
        </div>
        <div class="separator separator-dashed my-3"></div>
        <div class="d-flex flex-stack">
            <a href="#" class="text-primary fw-semibold fs-6 me-2">Google Ads CPC</a>
            <button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-primary justify-content-end">
                <i class="ki-duotone ki-exit-right-corner fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </button>
        </div>
    ',
])
