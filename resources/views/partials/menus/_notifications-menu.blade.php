@php
    $userLoginLogs = auth()->check()
        ? \App\Models\AppSupport\DataLogin::where('user_id', auth()->id())
            ->orderBy('login_at', 'desc')
            ->limit(10)
            ->get()
        : collect();

    $unreadPasswordResets = collect();
    if (auth()->check()) {
        try {
            $unreadPasswordResets = \App\Models\ManajemenPengguna\PasswordResetRequest::with('user')
                ->where('status', 'pending')
                ->where('is_read', false)
                ->orderBy('created_at', 'desc')
                ->get();
        } catch (\Throwable $e) {
            $unreadPasswordResets = collect();
        }
    }
@endphp

<!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true" id="kt_menu_notifications">
    <!--begin::Heading-->
    <div class="d-flex flex-column bgi-no-repeat rounded-top"
        style="background-image:url('{{ asset('assets/media/misc/menu-header-bg.jpg') }}')">
        <!--begin::Title-->
        <h3 class="text-white fw-semibold px-9 mt-10 mb-6">
            Notifikasi <span class="fs-8 opacity-75 ps-3">Terbaru</span>
        </h3>
        <!--end::Title-->
        <!--begin::Tabs-->
        <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
            <li class="nav-item">
                <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab"
                    href="#kt_topbar_notifications_1">Peringatan
                    @if($unreadPasswordResets->count() > 0)
                        <span class="badge badge-circle badge-danger fs-9 ms-1 h-16px w-16px">{{ $unreadPasswordResets->count() }}</span>
                    @endif
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab"
                    href="#kt_topbar_notifications_2">Pengumuman</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab"
                    href="#kt_topbar_notifications_3">Logs</a>
            </li>
        </ul>
        <!--end::Tabs-->
    </div>
    <!--end::Heading-->
    <!--begin::Tab content-->
    <div class="tab-content">
        <!--begin::Tab panel: Peringatan-->
        <div class="tab-pane fade show active" id="kt_topbar_notifications_1" role="tabpanel">
            <!--begin::Items-->
            <div class="scroll-y mh-325px my-5 px-8">
                @forelse($unreadPasswordResets as $resetReq)
                    <div class="d-flex flex-stack py-4 border-bottom border-gray-200 border-bottom-dashed">
                        <div class="d-flex align-items-center me-2">
                            <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-danger">
                                    <i class="ki-duotone ki-key fs-2 text-danger">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                            </div>
                            <div class="mb-0 me-2">
                                <a href="{{ route('manajemenpengguna.reset-password.mark-read', $resetReq->id) }}" class="fs-6 text-gray-800 text-hover-primary fw-bold">
                                    Minta Reset Password
                                </a>
                                <div class="text-gray-500 fs-7">
                                    Dari <strong>{{ $resetReq->user->name ?? 'User' }}</strong> ({{ $resetReq->email }})
                                </div>
                            </div>
                        </div>
                        <span class="badge badge-light-danger fs-8">
                            {{ $resetReq->created_at ? $resetReq->created_at->diffForHumans() : 'Baru' }}
                        </span>
                    </div>
                @empty
                    <div class="d-flex flex-stack py-4 border-bottom border-gray-200 border-bottom-dashed">
                        <div class="d-flex align-items-center me-2">
                            <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-warning">
                                    <i class="ki-duotone ki-shield-tick fs-2 text-warning">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                            </div>
                            <div class="mb-0 me-2">
                                <a href="javascript:void(0)" class="fs-6 text-gray-800 text-hover-primary fw-bold">Sesi Login Aktif</a>
                                <div class="text-gray-500 fs-7">Akun Anda sedang terhubung secara aman</div>
                            </div>
                        </div>
                        <span class="badge badge-light-success fs-8">Aktif</span>
                    </div>

                    <div class="d-flex flex-stack py-4 border-bottom border-gray-200 border-bottom-dashed">
                        <div class="d-flex align-items-center me-2">
                            <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-primary">
                                    <i class="ki-duotone ki-timer fs-2 text-primary">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </div>
                            <div class="mb-0 me-2">
                                <a href="javascript:void(0)" class="fs-6 text-gray-800 text-hover-primary fw-bold">Idle Protection</a>
                                <div class="text-gray-500 fs-7">Auto logout aktif dalam 15 menit inaktivitas</div>
                            </div>
                        </div>
                        <span class="badge badge-light-primary fs-8">15 Mins</span>
                    </div>
                @endforelse
            </div>
            <!--end::Items-->
        </div>
        <!--end::Tab panel: Peringatan-->

        <!--begin::Tab panel: Pengumuman-->
        <div class="tab-pane fade" id="kt_topbar_notifications_2" role="tabpanel">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column px-9 py-8">
                <div class="text-center">
                    <div class="symbol symbol-50px mb-4">
                        <span class="symbol-label bg-light-primary">
                            <i class="ki-duotone ki-notification-on fs-2x text-primary">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </span>
                    </div>
                    <h4 class="text-gray-900 fw-bold mb-2">Pengumuman Sistem</h4>
                    <div class="text-gray-600 fs-7 pt-1 mb-4">
                        Selamat datang di Master WebAdmin. Fitur pengumuman resmi aplikasi akan ditampilkan pada bagian ini.
                    </div>
                    <span class="badge badge-light-info fs-7 fw-semibold px-4 py-2">Belum ada pengumuman baru</span>
                </div>
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Tab panel: Pengumuman-->

        <!--begin::Tab panel: Logs-->
        <div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
            <!--begin::Items-->
            <div class="scroll-y mh-325px my-5 px-8">
                @forelse($userLoginLogs as $log)
                    <div class="d-flex flex-stack py-3 border-bottom border-gray-200 border-bottom-dashed">
                        <div class="d-flex align-items-center me-2">
                            <div class="symbol symbol-35px me-3">
                                <span class="symbol-label bg-light-success">
                                    <i class="ki-duotone ki-key fs-2 text-success">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                            </div>
                            <div class="d-flex flex-column">
                                <a href="javascript:void(0)" class="text-gray-800 text-hover-primary fw-bold fs-7">
                                    Login Sukses ({{ $log->login_count }}x)
                                </a>
                                <span class="text-muted fs-8">IP: {{ $log->ip_address ?? '127.0.0.1' }}</span>
                            </div>
                        </div>
                        <span class="badge badge-light-success fs-8">
                            {{ $log->login_at ? $log->login_at->diffForHumans() : '-' }}
                        </span>
                    </div>
                @empty
                    <div class="text-center py-8 text-muted fs-7">
                        Belum ada catatan riwayat login untuk akun ini.
                    </div>
                @endforelse
            </div>
            <!--end::Items-->

            <!--begin::View more-->
            <div class="py-3 text-center border-top">
                <a href="{{ url('profil-pengguna?tab=log') }}" class="btn btn-color-gray-600 btn-active-color-primary fs-7">
                    Lihat Semua Riwayat Login
                    <i class="ki-duotone ki-arrow-right fs-5">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </a>
            </div>
            <!--end::View more-->
        </div>
        <!--end::Tab panel: Logs-->
    </div>
    <!--end::Tab content-->
</div>
<!--end::Menu-->
