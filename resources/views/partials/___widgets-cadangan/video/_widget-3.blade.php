<!--begin::Video widget 3-->
                    <div class="card card-flush h-xl-100" id="kt_player_widget_2">
                        <!--begin::Header-->
                        <div class="card-header bg-black">
                            <!--begin::Title-->
                            <h3 class="card-title fw-bold text-white">Player</h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                    data-kt-menu-overflow="true">
                                    <i class="ki-duotone ki-dots-square fs-1 text-white">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 2-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">
                                            Quick Actions
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator mb-3 opacity-75"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Ticket</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Customer</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                        data-kt-menu-placement="right-start">
                                        <!--begin::Menu item-->
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">New Group</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--end::Menu item-->
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Admin Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Staff Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Member Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Contact</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator mt-3 opacity-75"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3 py-3">
                                            <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 2-->
                                <!--end::Menu-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body bg-black pt-0">
                            <!--begin::Image-->
                            <div class="mx-auto mb-6 bgi-no-repeat bgi-size-contain bgi-position-center rounded-circle w-125px h-125px"
                                style="
                              background-image: url({{ URL::asset('assets/media/stock/600x600/img-59.jpg') }});
                            ">
                            </div>
                            <!--end::Image-->
                            <!--begin::Section-->
                            <div class="text-center mb-5">
                                <!--begin::Title-->
                                <h1 class="text-white fw-bold">Strange Friends</h1>
                                <!--end::Title-->
                                <!--begin::Title-->
                                <span class="text-white opacity-75 fw-semibold">Theresa Webb</span>
                                <!--end::Title-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Card body-->
                        <!--begin::Card Footer-->
                        <div class="card-footer bg-primary p-0 pb-9">
                            <div class="mt-n10">
                                <!--begin::Progress-->
                                <div class="mb-5">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack px-4 text-white opacity-75">
                                        <span class="current-time" data-kt-element="current-time">0:00</span>
                                        <span class="duration" data-kt-element="duration">0:00</span>
                                    </div>
                                    <!--end::Time-->
                                    <input type="range" class="form-range" data-kt-element="progress" min="0"
                                        max="100" value="0" step="0.01" />
                                </div>
                                <!--end::Progress-->
                                <!--begin::Toolbar-->
                                <div class="d-flex flex-center">
                                    <button class="btn btn-icon mx-1" data-kt-element="replay-button">
                                        <i class="bi bi-arrow-repeat fs-2 text-white"></i>
                                    </button>
                                    <button class="btn btn-icon mx-1" data-kt-element="play-prev-button">
                                        <i class="bi bi-caret-left-fill fs-2 text-white"></i>
                                    </button>
                                    <button class="btn btn-icon mx-6 play-pause" data-kt-element="play-button">
                                        <i class="bi bi-play-fill text-white fs-4x" data-kt-element="play-icon"></i>
                                        <i class="bi bi-pause-fill text-white fs-4x d-none"
                                            data-kt-element="pause-icon"></i>
                                    </button>
                                    <button class="btn btn-icon mx-1 next" data-kt-element="play-next-button">
                                        <i class="bi bi-caret-right-fill fs-2 text-white"></i>
                                    </button>
                                    <button class="btn btn-icon mx-1" data-kt-element="shuffle-button">
                                        <i class="bi bi-shuffle fs-2 text-white"></i>
                                    </button>
                                </div>
                                <!--end::Toolbar-->
                                <!--begin::Tracks-->
                                <audio data-kt-element="audio-track-1">
                                    <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-5.mp3"
                                        type="audio/mpeg" />
                                </audio>
                                <!--end::Tracks-->
                            </div>
                        </div>
                        <!--end::Card Footer-->
                    </div>
                    <!--end::Video widget 2-->