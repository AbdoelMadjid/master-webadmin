<div data-kt-stepper-element="content">
    <!--begin::Wrapper-->
    <div class="w-100">
        <!--begin::Heading-->
        <div class="mb-13">
            <!--begin::Title-->
            <h2 class="mb-3">Deal Details</h2>
            <!--end::Title-->
            <!--begin::Description-->
            <div class="text-muted fw-semibold fs-5">
                If you need more info, please check out
                <a href="javascript:void(0)" class="link-primary fw-bold">FAQ Page</a>.
            </div>
            <!--end::Description-->
        </div>
        <!--end::Heading-->
        <!--begin::Input group-->
        <div class="fv-row mb-8">
            <!--begin::Label-->
            <label class="required fs-6 fw-semibold mb-2">Customer</label>
            <!--end::Label-->
            <!--begin::Input-->
            <select class="form-select form-select-solid" data-control="select2" data-placeholder="Select an option"
                name="details_customer">
                <option></option>
                <option value="1" selected="selected">Keenthemes</option>
                <option value="2">CRM App</option>
            </select>
            <!--end::Input-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="fv-row mb-8">
            <!--begin::Label-->
            <label class="required fs-6 fw-semibold mb-2">Deal Title</label>
            <!--end::Label-->
            <!--begin::Input-->
            <input type="text" class="form-control form-control-solid" placeholder="Enter Deal Title"
                name="details_title" value="Marketing Campaign" />
            <!--end::Input-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="fv-row mb-8">
            <!--begin::Label-->
            <label class="fs-6 fw-semibold mb-2">Deal Description</label>
            <!--end::Label-->
            <!--begin::Label-->
            <textarea class="form-control form-control-solid" rows="3" placeholder="Enter Deal Description"
                name="details_description">Experience share market at your fingertips with TICK PRO stock investment mobile trading app</textarea>
            <!--end::Label-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="fv-row mb-8">
            <label class="required fs-6 fw-semibold mb-2">Activation Date</label>
            <div class="position-relative d-flex align-items-center">
                <!--begin::Icon-->
                <i class="ki-duotone ki-calendar-8 fs-2 position-absolute mx-4">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                    <span class="path5"></span>
                    <span class="path6"></span>
                </i>
                <!--end::Icon-->
                <!--begin::Datepicker-->
                <input class="form-control form-control-solid ps-12" placeholder="Pick date range"
                    name="details_activation_date" />
                <!--end::Datepicker-->
            </div>
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="fv-row mb-15">
            <!--begin::Wrapper-->
            <div class="d-flex flex-stack">
                <!--begin::Label-->
                <div class="me-5">
                    <label class="required fs-6 fw-semibold">Notifications</label>
                    <div class="fs-7 fw-semibold text-muted">
                        Allow Notifications by Phone or Email
                    </div>
                </div>
                <!--end::Label-->
                <!--begin::Checkboxes-->
                <div class="d-flex">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-10">
                        <!--begin::Input-->
                        <input class="form-check-input h-20px w-20px" type="checkbox" value="email"
                            name="details_notifications[]" />
                        <!--end::Input-->
                        <!--begin::Label-->
                        <span class="form-check-label fw-semibold">Email</span>
                        <!--end::Label-->
                    </label>
                    <!--end::Checkbox-->
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid">
                        <!--begin::Input-->
                        <input class="form-check-input h-20px w-20px" type="checkbox" value="phone" checked="checked"
                            name="details_notifications[]" />
                        <!--end::Input-->
                        <!--begin::Label-->
                        <span class="form-check-label fw-semibold">Phone</span>
                        <!--end::Label-->
                    </label>
                    <!--end::Checkbox-->
                </div>
                <!--end::Checkboxes-->
            </div>
            <!--begin::Wrapper-->
        </div>
        <!--end::Input group-->
        <!--begin::Actions-->
        <div class="d-flex flex-stack">
            <button type="button" class="btn btn-lg btn-light me-3" data-kt-element="details-previous">
                Deal Type
            </button>
            <button type="button" class="btn btn-lg btn-primary" data-kt-element="details-next">
                <span class="indicator-label">Financing</span>
                <span class="indicator-progress">Please wait...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                </span>
            </button>
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Wrapper-->
</div>
