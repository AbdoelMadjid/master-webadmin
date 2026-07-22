<div class="card-rounded bg-light d-flex flex-stack flex-wrap p-5">
    <!--begin::Nav-->
    <ul class="nav flex-wrap border-transparent fw-bold">
        <li class="nav-item my-1">
            <a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase {{ ($active ?? '') === 'overview' ? 'active' : '' }}"
                href="/apps/support-center/overview">Overview</a>
        </li>
        <li class="nav-item my-1">
            <a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase {{ ($active ?? '') === 'tickets' ? 'active' : '' }}"
                href="/apps/support-center/tickets/list">Tickets</a>
        </li>
        <li class="nav-item my-1">
            <a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase {{ ($active ?? '') === 'tutorials' ? 'active' : '' }}"
                href="/apps/support-center/tutorials/list">Tutorials</a>
        </li>
        <li class="nav-item my-1">
            <a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase {{ ($active ?? '') === 'faq' ? 'active' : '' }}"
                href="/apps/support-center/faq">FAQ</a>
        </li>
        <li class="nav-item my-1">
            <a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase {{ ($active ?? '') === 'licenses' ? 'active' : '' }}"
                href="/apps/support-center/licenses">Licenses</a>
        </li>
        <li class="nav-item my-1">
            <a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase {{ ($active ?? '') === 'contact' ? 'active' : '' }}"
                href="/apps/support-center/contact">Contact US</a>
        </li>
    </ul>
    <!--end::Nav-->
    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#kt_modal_new_ticket"
        class="btn btn-primary fw-bold fs-8 fs-lg-base">Create Ticket</a>
</div>
