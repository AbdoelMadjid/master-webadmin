@php
    $authUser = auth()->user();
    if ($authUser && !$authUser->relationLoaded('userDetail')) {
        $authUser->load('userDetail');
    }
    $detail = $authUser?->userDetail;

    $avatarUrl = getUserAvatarUrl($authUser);
    $userName = $authUser?->name ?? 'User Profile';
    $userEmail = $authUser?->email ?? '';
    $rolesArray = [];
    if ($authUser) {
        if (method_exists($authUser, 'getRoleNames')) {
            $rolesArray = $authUser
                ->getRoleNames()
                ->map(
                    fn($role) => function_exists('roleDisplayName')
                        ? roleDisplayName((string) $role) ?? (string) $role
                        : (string) $role,
                )
                ->filter()
                ->values()
                ->toArray();
        }
    }
    if (empty($rolesArray)) {
        $rolesArray = ['User'];
    }

    // Kalkulasi Persentase Kelengkapan Profil
    $profileFields = [
        'avatar' => !empty($authUser?->avatar),
        'nama_lengkap' => !empty($detail?->nama_lengkap ?? $authUser?->name),
        'email' => !empty($authUser?->email),
        'nik' => !empty($detail?->nik),
        'tempat_lahir' => !empty($detail?->tempat_lahir),
        'tanggal_lahir' => !empty($detail?->tanggal_lahir),
        'jenis_kelamin' => !empty($detail?->jenis_kelamin),
        'golongan_darah' => !empty($detail?->golongan_darah),
        'agama' => !empty($detail?->agama),
        'status_perkawinan' => !empty($detail?->status_perkawinan),
        'pekerjaan' => !empty($detail?->pekerjaan),
        'kewarganegaraan' => !empty($detail?->kewarganegaraan),
        'no_hp' => !empty($detail?->no_hp),
        'alamat_jalan' => !empty($detail?->alamat_jalan),
        'kabupaten_kota' => !empty($detail?->kabupaten_kota),
        'provinsi' => !empty($detail?->provinsi),
    ];

    $filledCount = count(array_filter($profileFields));
    $totalFields = count($profileFields);
    $profileCompletionPercentage = (int) round(($filledCount / $totalFields) * 100);

    $progressBarColorClass = match (true) {
        $profileCompletionPercentage >= 80 => 'bg-success',
        $profileCompletionPercentage >= 50 => 'bg-primary',
        $profileCompletionPercentage >= 25 => 'bg-warning',
        default => 'bg-danger',
    };

    // Kalkulasi Total Frekuensi Login User (akumulasi dataLogins)
    $totalLoginCount = 0;
    if ($authUser) {
        if (!$authUser->relationLoaded('dataLogins')) {
            $authUser->load('dataLogins');
        }
        $sumLogin = (int) $authUser->dataLogins->sum('login_count');
        $countLogin = (int) $authUser->dataLogins->count();
        $totalLoginCount = max($sumLogin, $countLogin);
    }
    if ($totalLoginCount <= 0) {
        $totalLoginCount = 1; // Default minimal 1 karena akun aktif/sedang login
    }
@endphp

<div class="d-flex flex-wrap flex-sm-nowrap">
    <!--begin: Pic-->
    <div class="me-7 mb-4">
        <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
            <!-- Avatar Image (Original size: 100px / 160px) -->
            <img src="{{ $avatarUrl }}" alt="{{ $userName }}" id="user_profile_avatar_preview"
                class="cursor-pointer rounded object-fit-cover"
                onerror="this.onerror=null;this.src='{{ asset('assets/media/svg/avatars/default-avatar.svg') }}';"
                onclick="document.getElementById('user_avatar_file_input').click()" data-bs-toggle="tooltip"
                title="Klik gambar untuk memilih & mengganti avatar" />

            <!-- Edit Button Badge -->
            <label
                class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-35px h-35px bg-body shadow position-absolute bottom-0 end-0 mb-2 me-2 cursor-pointer"
                onclick="document.getElementById('user_avatar_file_input').click()" data-bs-toggle="tooltip"
                title="Ganti Avatar">
                <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span class="path2"></span></i>
                <input type="file" id="user_avatar_file_input" accept=".png, .jpg, .jpeg, .webp, .svg"
                    style="display: none;" onchange="uploadUserAvatarDirect(this)" />
            </label>

            <!-- Online Status Indicator -->
            <div
                class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px">
            </div>
        </div>
    </div>
    <!--end::Pic-->

    <!--begin::Info-->
    <div class="flex-grow-1">
        <!--begin::Title-->
        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
            <!--begin::User-->
            <div class="d-flex flex-column">
                <!--begin::Name-->
                <div class="d-flex align-items-center mb-2">
                    <a href="javascript:void(0)"
                        class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{ $userName }}</a>
                    <a href="javascript:void(0)">
                        <i class="ki-duotone ki-verify fs-1 text-primary">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </a>
                </div>
                <!--end::Name-->
                <!--begin::Info-->
                <!--begin::Roles Badges-->
                <div class="d-flex flex-wrap align-items-center gap-2 mb-3">
                    @php
                        $badgeClasses = [
                            'badge-light-primary text-primary border border-primary-subtle',
                            'badge-light-success text-success border border-success-subtle',
                            'badge-light-info text-info border border-info-subtle',
                            'badge-light-warning text-warning border border-warning-subtle',
                            'badge-light-danger text-danger border border-danger-subtle',
                            'badge-light-dark text-dark border border-gray-300',
                        ];
                    @endphp
                    @foreach (array_slice($rolesArray, 0, 3) as $idx => $roleName)
                        <span
                            class="badge {{ $badgeClasses[$idx % count($badgeClasses)] }} fs-7 fw-bold d-inline-flex align-items-center px-3 py-2 shadow-xs"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Peran Akses: {{ $roleName }}">
                            <i class="ki-duotone ki-shield-tick fs-5 me-1">
                                <span class="path1"></span><span class="path2"></span>
                            </i>
                            {{ $roleName }}
                        </span>
                    @endforeach

                    @if (count($rolesArray) > 3)
                        @php
                            $extraRoles = array_slice($rolesArray, 3);
                            $extraRolesText = implode(', ', $extraRoles);
                        @endphp
                        <span
                            class="badge badge-light-dark text-gray-700 fs-7 fw-bold px-3 py-2 cursor-pointer border border-gray-300"
                            data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Peran Lainnya: {{ $extraRolesText }}">
                            +{{ count($extraRoles) }} Peran Lain
                        </span>
                    @endif
                </div>
                <!--end::Roles Badges-->

                <!--begin::Info (Location & Email)-->
                <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                    @php
                        $userLokasi = [];
                        if (!empty($detail?->kabupaten_kota)) {
                            $userLokasi[] = $detail->kabupaten_kota;
                        }
                        if (!empty($detail?->provinsi)) {
                            $userLokasi[] = $detail->provinsi;
                        }
                        $userLokasiText = !empty($userLokasi) ? implode(', ', $userLokasi) : 'Indonesia';
                    @endphp
                    <a href="javascript:void(0)"
                        class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
                        <i class="ki-duotone ki-geolocation fs-4 me-1">
                            <span class="path1"></span>
                            <span class="path2"></span> </i>{{ $userLokasiText }}</a>
                    @if ($userEmail !== '')
                        <a href="javascript:void(0)"
                            class="d-flex align-items-center text-gray-500 text-hover-primary mb-2">
                            <i class="ki-duotone ki-sms fs-4 me-1">
                                <span class="path1"></span>
                                <span class="path2"></span> </i>{{ $userEmail }}</a>
                    @endif
                </div>
                <!--end::Info-->
            </div>
            <!--end::User-->

            <!--begin::Actions-->
            <div class="d-flex my-4">
                <a href="javascript:void(0)" class="btn btn-sm btn-light me-2" id="kt_user_follow_button">
                    <i class="ki-duotone ki-check fs-3 d-none"></i>
                    <!--begin::Indicator label-->
                    <span class="indicator-label">Follow</span>
                    <!--end::Indicator label-->
                    <!--begin::Indicator progress-->
                    <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    <!--end::Indicator progress-->
                </a>
                <a href="javascript:void(0)" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal"
                    data-bs-target="#kt_modal_offer_a_deal">Hire Me</a>
                <!--begin::Menu-->
                <div class="me-0">
                    <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <i class="ki-solid ki-dots-horizontal fs-2x"></i>
                    </button>
                    <!--begin::Menu 3-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                        data-kt-menu="true">
                        <!--begin::Heading-->
                        <div class="menu-item px-3">
                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                Payments
                            </div>
                        </div>
                        <!--end::Heading-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="javascript:void(0)" class="menu-link px-3">Create Invoice</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="javascript:void(0)" class="menu-link flex-stack px-3">Create Payment
                                <span class="ms-2" data-bs-toggle="tooltip"
                                    title="Specify a target name for future usage and reference">
                                    <i class="ki-duotone ki-information fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i> </span></a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="javascript:void(0)" class="menu-link px-3">Generate Bill</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                            <a href="javascript:void(0)" class="menu-link px-3">
                                <span class="menu-title">Subscription</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <!--begin::Menu sub-->
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="javascript:void(0)" class="menu-link px-3">Plans</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="javascript:void(0)" class="menu-link px-3">Billing</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="javascript:void(0)" class="menu-link px-3">Statements</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator my-2"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3">
                                        <!--begin::Switch-->
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input w-30px h-20px" type="checkbox"
                                                value="1" checked="checked" name="notifications" />
                                            <!--end::Input-->
                                            <!--end::Label-->
                                            <span class="form-check-label text-muted fs-6">Recuring</span>
                                            <!--end::Label-->
                                        </label>
                                        <!--end::Switch-->
                                    </div>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu sub-->
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-1">
                            <a href="javascript:void(0)" class="menu-link px-3">Settings</a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu 3-->
                </div>
                <!--end::Menu-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Title-->

        <!--begin::Stats-->
        <div class="d-flex flex-wrap flex-stack">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-grow-1 pe-8">
                <!--begin::Stats-->
                <div class="d-flex flex-wrap">
                    <!--begin::Stat-->
                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                        <!--begin::Number-->
                        <div class="d-flex align-items-center">
                            <i class="ki-duotone ki-award fs-3 text-warning me-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>
                            <div class="fs-2 fw-bold" data-kt-countup="true"
                                data-kt-countup-value="{{ $authUser?->points ?? 0 }}">
                                0
                            </div>
                        </div>
                        <!--end::Number-->
                        <!--begin::Label-->
                        <div class="fw-semibold fs-6 text-gray-500">
                            Pencapaian Poin
                        </div>
                        <!--end::Label-->
                    </div>
                    <!--end::Stat-->
                    <!--begin::Stat: Total Login-->
                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3"
                        data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Total frekuensi akumulasi login pengguna ke sistem">
                        <!--begin::Number-->
                        <div class="d-flex align-items-center">
                            <i class="ki-duotone ki-key fs-3 text-primary me-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <div class="fs-2 fw-bold" data-kt-countup="true"
                                data-kt-countup-value="{{ $totalLoginCount }}">
                                0
                            </div>
                        </div>
                        <!--end::Number-->
                        <!--begin::Label-->
                        <div class="fw-semibold fs-6 text-gray-500">
                            Total Login
                        </div>
                        <!--end::Label-->
                    </div>
                    <!--end::Stat-->
                    <!--begin::Stat: Kelengkapan Data-->
                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3"
                        data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Persentase kelengkapan isi identitas profil">
                        <!--begin::Number-->
                        <div class="d-flex align-items-center">
                            <i class="ki-duotone ki-shield-check fs-3 text-success me-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <div class="fs-2 fw-bold" data-kt-countup="true"
                                data-kt-countup-value="{{ $profileCompletionPercentage }}"
                                data-kt-countup-suffix="%">
                                0
                            </div>
                        </div>
                        <!--end::Number-->
                        <!--begin::Label-->
                        <div class="fw-semibold fs-6 text-gray-500">
                            Kelengkapan Data
                        </div>
                        <!--end::Label-->
                    </div>
                    <!--end::Stat-->
                </div>
                <!--end::Stats-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Progress-->
            <div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
                <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                    <span class="fw-semibold fs-6 text-gray-500">Profile Completion</span>
                    <span class="fw-bold fs-6">{{ $profileCompletionPercentage }}%</span>
                </div>
                <div class="h-5px mx-3 w-100 bg-light mb-3">
                    <div class="{{ $progressBarColorClass }} rounded h-5px" role="progressbar"
                        style="width: {{ $profileCompletionPercentage }}%"
                        aria-valuenow="{{ $profileCompletionPercentage }}" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
            </div>
            <!--end::Progress-->
        </div>
        <!--end::Stats-->
    </div>
    <!--end::Info-->
</div>

<script>
    function uploadUserAvatarDirect(inputElem) {
        if (!inputElem.files || !inputElem.files[0]) {
            return;
        }

        var file = inputElem.files[0];
        var formData = new FormData();
        formData.append('avatar_file', file);

        // Instant local preview
        var reader = new FileReader();
        reader.onload = function(e) {
            var previewUrl = e.target.result;
            $('#user_profile_avatar_preview').attr('src', previewUrl);
            $('#topbar_user_avatar_img').attr('src', previewUrl);
            $('.user-avatar-img').attr('src', previewUrl);
        };
        reader.readAsDataURL(file);

        $.ajax({
            url: "{{ route('profil-pengguna.avatar.update') }}",
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                if (response.success) {
                    if (response.avatar_url) {
                        $('#user_profile_avatar_preview').attr('src', response.avatar_url);
                        $('#topbar_user_avatar_img').attr('src', response.avatar_url);
                        $('.user-avatar-img').attr('src', response.avatar_url);
                    }

                    if (typeof SwalHelper !== 'undefined') {
                        SwalHelper.success(response.message);
                    }
                } else {
                    if (typeof SwalHelper !== 'undefined') {
                        SwalHelper.error(response.message);
                    }
                }
            },
            error: function(xhr) {
                if (typeof SwalHelper !== 'undefined') {
                    SwalHelper.validationError(xhr);
                } else {
                    var msg = xhr.responseJSON && xhr.responseJSON.message ? xhr.responseJSON.message :
                        'Gagal memperbarui avatar.';
                    alert(msg);
                }
            }
        });
    }
</script>
