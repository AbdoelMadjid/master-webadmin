@include('partials.widgets.engage._widget-8', [
    'widgetNumber' => 14,
    'cardClass' => 'card border-0 mb-5 mb-xl-11',
    'cardStyle' => 'background-color: #844AFF',
    'bodyClass' => 'card-body py-0',
    'rowClass' => 'row align-items-center lh-1 h-100',
    'leftColClass' => 'col-7 ps-xl-10 pe-5',
    'titleClass' => 'fs-2qx fw-bold text-white mb-6',
    'titleHtml' => 'Upgrade Your Plan',
    'descriptionClass' => 'fw-semibold text-white fs-6 mb-10 d-block opacity-75',
    'itemsClass' => 'd-flex align-items-center flex-wrap d-grid gap-2 mb-9',
    'itemsHtml' => '
        <div class="d-flex align-items-center me-5 me-xl-13">
            <div class="symbol symbol-30px symbol-circle me-3">
                <span class="symbol-label" style="background: rgba(255, 255, 255, 0.1)">
                    <i class="ki-outline ki-abstract-41 fs-5 text-white"></i>
                </span>
            </div>
            <div class="text-white">
                <span class="fw-semibold d-block fs-8 opacity-75 mb-2">Projects</span>
                <span class="fw-bold fs-7">Up to 500</span>
            </div>
        </div>
        <div class="d-flex align-items-center">
            <div class="symbol symbol-30px symbol-circle me-3">
                <span class="symbol-label" style="background: rgba(255, 255, 255, 0.1)">
                    <i class="ki-outline ki-abstract-26 fs-5 text-white"></i>
                </span>
            </div>
            <div class="text-white">
                <span class="fw-semibold opacity-75 d-block fs-8 mb-2">Tasks</span>
                <span class="fw-bold fs-7">Unlimited</span>
            </div>
        </div>
    ',
    'actionsClass' => 'd-flex d-grid gap-2',
    'actionsHtml' => '
        <a href="#" class="btn btn-success me-lg-2" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
        <a href="#" class="btn text-white" style="background: rgba(255, 255, 255, 0.2)" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Help</a>
    ',
    'rightColClass' => 'col-5 pt-5 pt-lg-15',
    'illustrationClass' => 'bgi-no-repeat bgi-size-contain bgi-position-x-end bgi-position-y-bottom h-325px',
    'illustrationStyle' => "background-image:url('assets/media/svg/illustrations/easy/8.svg')",
])
