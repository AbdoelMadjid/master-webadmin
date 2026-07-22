<div class="current" data-kt-stepper-element="content">
    <!--begin::Wrapper-->
    <div class="w-100">
        <!--begin::Heading-->
        <div class="pb-10 pb-lg-15">
            <!--begin::Title-->
            <h2 class="fw-bold d-flex align-items-center text-gray-900">
                Set Amount to Top Up
                <span class="ms-1" data-bs-toggle="tooltip"
                    title="You will be charged the set amount from your selected payment option">
                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                    </i>
                </span>
            </h2>
            <!--end::Title-->
            <!--begin::Notice-->
            <div class="text-muted fw-semibold fs-6">
                If you need more info, please check out
                <a href="javascript:void(0)"> class="link-primary fw-bold">Help Page</a>.
            </div>
            <!--end::Notice-->
        </div>
        <!--end::Heading-->
        <!--begin::Input group-->
        <div class="mb-10 fv-row">
            <!--begin::Label-->
            <label class="form-label mb-3">
                <span class="required">Top Up Amount</span>
            </label>
            <!--end::Label-->
            <!--begin::Input-->
            <input type="text" class="form-control form-control-lg form-control-solid" name="top_up_amount"
                placeholder="" value="" autocomplete="off" />
            <!--end::Input-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="mb-10">
            <!--begin::Label-->
            <label class="required fw-semibold fs-6 mb-5">Currency Type</label>
            <!--end::Label-->
            <!--begin::Row-->
            <div class="row row-cols-1 row-cols-md-2 g-5">
                <!--begin::Col-->
                <div class="col">
                    <!--begin::Option-->
                    <input type="radio" class="btn-check" name="currency_type" value="dollar"
                        id="kt_radio_buttons_2_option_1" checked="checked" />
                    <label
                        class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center h-100"
                        for="kt_radio_buttons_2_option_1">
                        <i class="ki-duotone ki-dollar fs-3hx text-primary">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                        <span class="d-block fw-semibold text-start">
                            <span class="text-gray-900 fw-bold d-block fs-3">Cash</span>
                            <span class="text-muted fw-semibold fs-6">Top up wallet using cash
                                from one of your saved
                                payment options.</span>
                        </span>
                    </label>
                    <!--end::Option-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col">
                    <!--begin::Option-->
                    <input type="radio" class="btn-check" name="currency_type" value="crypto"
                        id="kt_radio_buttons_2_option_2" />
                    <label
                        class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center h-100"
                        for="kt_radio_buttons_2_option_2">
                        <i class="ki-duotone ki-bitcoin fs-3hx text-primary">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        <span class="d-block fw-semibold text-start">
                            <span class="text-gray-900 fw-bold d-block fs-3">Crypto</span>
                            <span class="text-muted fw-semibold fs-6">Top up wallet using a
                                crypto currency.</span>
                        </span>
                    </label>
                    <!--end::Option-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Input group-->
    </div>
    <!--end::Wrapper-->
</div>
