<div data-kt-stepper-element="content">
    <!--begin::Wrapper-->
    <div class="w-100">
        <!--begin::Heading-->
        <div class="pb-10 pb-lg-12">
            <!--begin::Title-->
            <h1 class="fw-bold text-gray-900">Currency</h1>
            <!--end::Title-->
            <!--begin::Description-->
            <div class="text-muted fw-semibold fs-6">
                If you need more info, please check
                <a href="javascript:void(0)"> class="link-primary">Top Up Guidelines</a>
            </div>
            <!--end::Description-->
        </div>
        <!--end::Heading-->
        <!--begin::Dollar options-->
        <div class="" data-kt-modal-top-up-wallet-option="dollar">
            <!--begin::Input group-->
            <div class="fv-row mb-10">
                <!--begin::Label-->
                <label class="required fs-6 fw-semibold mb-2">Select a payment method</label>
                <!--End::Label-->
                <!--begin::Row-->
                <div class="row row-cols-1 row-cols-md-2 g-5">
                    <!--begin::Col-->
                    <div class="col">
                        <!--begin::Option-->
                        <input type="radio" class="btn-check" name="payment_methods" value="dollar"
                            id="kt_modal_top_up_wallet_payment_method_option_0" checked="checked" />
                        <label
                            class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-start gap-5 h-100"
                            for="kt_modal_top_up_wallet_payment_method_option_0">
                            <!--begin::Icon-->
                            <img src="assets/media/svg/card-logos/mastercard.svg" alt=""
                                class="w-50px" />
                            <!--end::Icon-->
                            <!--begin::Card details-->
                            <div class="d-flex align-items-start flex-column gap-3">
                                <div class="d-flex align-items-center">
                                    <!--begin::Card name-->
                                    <span>Personal</span>
                                    <!--end::Card name-->
                                    <!--begin::Badge-->
                                    <div class="badge badge-primary ms-5">
                                        Primary
                                    </div>
                                    <!--end::Badge-->
                                </div>
                                <!--begin::Card number-->
                                <div class="text-gray-900 fw-bold">
                                    **** 8742
                                </div>
                                <!--end::Card number-->
                                <!--begin::Card expiry-->
                                <div class="text-muted">exp 01/23</div>
                                <!--end::Card expiry-->
                            </div>
                            <!--end::Card details-->
                        </label>
                        <!--end::Option-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col">
                        <!--begin::Option-->
                        <input type="radio" class="btn-check" name="payment_methods" value="dollar"
                            id="kt_modal_top_up_wallet_payment_method_option_1" />
                        <label
                            class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-start gap-5 h-100"
                            for="kt_modal_top_up_wallet_payment_method_option_1">
                            <!--begin::Icon-->
                            <img src="assets/media/svg/card-logos/visa.svg" alt=""
                                class="w-50px" />
                            <!--end::Icon-->
                            <!--begin::Card details-->
                            <div class="d-flex align-items-start flex-column gap-3">
                                <div class="d-flex align-items-center">
                                    <!--begin::Card name-->
                                    <span>Family</span>
                                    <!--end::Card name-->
                                </div>
                                <!--begin::Card number-->
                                <div class="text-gray-900 fw-bold">
                                    **** 1141
                                </div>
                                <!--end::Card number-->
                                <!--begin::Card expiry-->
                                <div class="text-muted">exp 05/24</div>
                                <!--end::Card expiry-->
                            </div>
                            <!--end::Card details-->
                        </label>
                        <!--end::Option-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col">
                        <!--begin::Option-->
                        <input type="radio" class="btn-check" name="payment_methods" value="dollar"
                            id="kt_modal_top_up_wallet_payment_method_option_2" />
                        <label
                            class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-start gap-5 h-100"
                            for="kt_modal_top_up_wallet_payment_method_option_2">
                            <!--begin::Icon-->
                            <img src="assets/media/svg/card-logos/mastercard.svg" alt=""
                                class="w-50px" />
                            <!--end::Icon-->
                            <!--begin::Card details-->
                            <div class="d-flex align-items-start flex-column gap-3">
                                <div class="d-flex align-items-center">
                                    <!--begin::Card name-->
                                    <span>Company</span>
                                    <!--end::Card name-->
                                </div>
                                <!--begin::Card number-->
                                <div class="text-gray-900 fw-bold">
                                    **** 8839
                                </div>
                                <!--end::Card number-->
                                <!--begin::Card expiry-->
                                <div class="text-muted">exp 07/24</div>
                                <!--end::Card expiry-->
                            </div>
                            <!--end::Card details-->
                        </label>
                        <!--end::Option-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col">
                        <!--begin::Add new card-->
                        <a href="{{ route('pages.utilities.modals.forms.new-card') }}"
                            class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex flex-column flex-center gap-5 h-100">
                            <!--begin::Icon-->
                            <i class="ki-duotone ki-plus-circle fs-3hx text-primary">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <!--end::Icon-->
                            <!--begin::Label-->
                            <div class="fs-5 fw-bold">Add New Card</div>
                            <!--end::Label-->
                        </a>
                        <!--end::Add new card-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Input group-->
        </div>
        <!--end::Dollar options-->
        <!--begin::Crypto options-->
        <div class="d-none" data-kt-modal-top-up-wallet-option="crypto">
            <!--begin::Input group-->
            <div class="mb-10">
                <!--begin::Label-->
                <label class="required fs-6 fw-semibold mb-2">Select a coin</label>
                <!--End::Label-->
                <!--begin::Row-->
                <div class="row row-cols-2 row-cols-md-4 g-5">
                    <!--begin::Col-->
                    <div class="col">
                        <!--begin::Option-->
                        <input type="radio" class="btn-check" name="select_coin" value="dollar"
                            id="kt_modal_top_up_wallet_coin_option_0" checked="checked" />
                        <label
                            class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex flex-column flex-center gap-5 h-100"
                            for="kt_modal_top_up_wallet_coin_option_0">
                            <!--begin::Icon-->
                            <img src="assets/media/svg/coins/binance.svg" alt=""
                                class="w-50px" />
                            <!--end::Icon-->
                            <!--begin::Label-->
                            <div class="fs-5 fw-bold">Binance</div>
                            <!--end::Label-->
                        </label>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col">
                        <!--begin::Option-->
                        <input type="radio" class="btn-check" name="select_coin" value="dollar"
                            id="kt_modal_top_up_wallet_coin_option_1" />
                        <label
                            class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex flex-column flex-center gap-5 h-100"
                            for="kt_modal_top_up_wallet_coin_option_1">
                            <!--begin::Icon-->
                            <img src="assets/media/svg/coins/bitcoin.svg" alt=""
                                class="w-50px" />
                            <!--end::Icon-->
                            <!--begin::Label-->
                            <div class="fs-5 fw-bold">Bitcoin</div>
                            <!--end::Label-->
                        </label>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col">
                        <!--begin::Option-->
                        <input type="radio" class="btn-check" name="select_coin" value="dollar"
                            id="kt_modal_top_up_wallet_coin_option_2" />
                        <label
                            class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex flex-column flex-center gap-5 h-100"
                            for="kt_modal_top_up_wallet_coin_option_2">
                            <!--begin::Icon-->
                            <img src="assets/media/svg/coins/chainlink.svg" alt=""
                                class="w-50px" />
                            <!--end::Icon-->
                            <!--begin::Label-->
                            <div class="fs-5 fw-bold">Chainlink</div>
                            <!--end::Label-->
                        </label>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col">
                        <!--begin::Option-->
                        <input type="radio" class="btn-check" name="select_coin" value="dollar"
                            id="kt_modal_top_up_wallet_coin_option_3" />
                        <label
                            class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex flex-column flex-center gap-5 h-100"
                            for="kt_modal_top_up_wallet_coin_option_3">
                            <!--begin::Icon-->
                            <img src="assets/media/svg/coins/coin.svg" alt=""
                                class="w-50px" />
                            <!--end::Icon-->
                            <!--begin::Label-->
                            <div class="fs-5 fw-bold">Coin</div>
                            <!--end::Label-->
                        </label>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col">
                        <!--begin::Option-->
                        <input type="radio" class="btn-check" name="select_coin" value="dollar"
                            id="kt_modal_top_up_wallet_coin_option_4" />
                        <label
                            class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex flex-column flex-center gap-5 h-100"
                            for="kt_modal_top_up_wallet_coin_option_4">
                            <!--begin::Icon-->
                            <img src="assets/media/svg/coins/ethereum.svg" alt=""
                                class="w-50px" />
                            <!--end::Icon-->
                            <!--begin::Label-->
                            <div class="fs-5 fw-bold">Ethereum</div>
                            <!--end::Label-->
                        </label>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col">
                        <!--begin::Option-->
                        <input type="radio" class="btn-check" name="select_coin" value="dollar"
                            id="kt_modal_top_up_wallet_coin_option_5" />
                        <label
                            class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex flex-column flex-center gap-5 h-100"
                            for="kt_modal_top_up_wallet_coin_option_5">
                            <!--begin::Icon-->
                            <img src="assets/media/svg/coins/filecoin.svg" alt=""
                                class="w-50px" />
                            <!--end::Icon-->
                            <!--begin::Label-->
                            <div class="fs-5 fw-bold">Filecoin</div>
                            <!--end::Label-->
                        </label>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Input group-->
        </div>
        <!--end::Crypto options-->
    </div>
    <!--end::Wrapper-->
</div>
