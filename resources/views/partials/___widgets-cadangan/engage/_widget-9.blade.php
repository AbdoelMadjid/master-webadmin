@include('partials.widgets.engage._widget-8', [
    'widgetNumber' => 9,
    'cardClass' => 'card h-lg-100',
    'theme' => null,
    'cardStyle' => 'background: linear-gradient(112.14deg, #FF8A00 0%, #E96922 100%)',
    'bodyClass' => 'card-body',
    'rowClass' => 'row align-items-center',
    'leftColClass' => 'col-sm-7 pe-0 mb-5 mb-sm-0',
    'titleClass' => 'mb-6',
    'titleHtml' => '<h3 class="fs-2x fw-semibold text-white">Upgrade Your Plan</h3>',
    'descriptionHtml' => 'Flat cartoony and illustrations with vivid color',
    'descriptionClass' => 'fw-semibold text-white opacity-75',
    'itemsClass' => 'd-flex align-items-center flex-wrap d-grid gap-2',
    'itemsHtml' => '
        <div class="d-flex align-items-center me-5 me-xl-13">
            <div class="symbol symbol-30px symbol-circle me-3">
                <span class="symbol-label" style="background: rgba(255, 255, 255, 0.15);">
                    <i class="ki-duotone ki-abstract-41 fs-4 text-white">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </span>
            </div>
            <div class="m-0">
                <a href="pages/user-profile/projects.html" class="text-white text-opacity-75 fs-8">Projects</a>
                <span class="fw-bold text-white fs-7 d-block">Up to 500</span>
            </div>
        </div>
        <div class="d-flex align-items-center">
            <div class="symbol symbol-30px symbol-circle me-3">
                <span class="symbol-label" style="background: rgba(255, 255, 255, 0.15);">
                    <i class="ki-duotone ki-abstract-26 fs-4 text-white">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </span>
            </div>
            <div class="m-0">
                <a href="apps/user-management/users/list.html" class="text-white text-opacity-75 fs-8">Tasks</a>
                <span class="fw-bold text-white fs-7 d-block">Unlimited</span>
            </div>
        </div>
    ',
    'actionsClass' => 'm-0',
    'actionsHtml' => '<a href="#" class="btn btn-color-white bg-white bg-opacity-15 bg-hover-opacity-25 fw-semibold" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade Plan</a>',
    'rightColClass' => 'col-sm-5',
    'illustrationHtml' => '<img src="assets/media/svg/illustrations/easy/7.svg" class="h-200px h-lg-250px my-n6" alt="" />',
])
