@php
    $userLoginLogs = auth()->check()
        ? \App\Models\AppSupport\DataLogin::where('user_id', auth()->id())
            ->orderBy('login_at', 'desc')
            ->limit(10)
            ->get()
        : collect();

    $unreadPasswordResets = collect();
    $pendingUsers = collect();
    $pendingDeactivations = collect();
    if (auth()->check()) {
        $authUser = auth()->user();
        $isAdminOrMaster = method_exists($authUser, 'hasAnyRole') 
            ? $authUser->hasAnyRole(['master', 'admin', 'Master', 'Admin'])
            : in_array(strtolower($authUser->role ?? ''), ['master', 'admin']);

        if ($isAdminOrMaster) {
            try {
                $unreadPasswordResets = \App\Models\ManajemenPengguna\PasswordResetRequest::with('user')
                    ->where('status', 'pending')
                    ->where('is_read', false)
                    ->orderBy('created_at', 'desc')
                    ->get();
            } catch (\Throwable $e) {
                $unreadPasswordResets = collect();
            }

            try {
                $pendingUsers = \App\Models\User::where('status', 'pending')
                    ->where('is_read', false)
                    ->orderBy('created_at', 'desc')
                    ->get();
            } catch (\Throwable $e) {
                $pendingUsers = collect();
            }

            try {
                $pendingDeactivations = \App\Models\User::where('status', 'deactivate_pending')
                    ->where('is_read', false)
                    ->orderBy('updated_at', 'desc')
                    ->get();
            } catch (\Throwable $e) {
                $pendingDeactivations = collect();
            }
        }
    }
    $totalPeringatan = $unreadPasswordResets->count() + $pendingUsers->count() + $pendingDeactivations->count();
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
                    @if($totalPeringatan > 0)
                        <span class="badge badge-circle badge-danger fs-9 ms-1 h-16px w-16px">{{ $totalPeringatan }}</span>
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
            <div class="scroll-y mh-325px my-3 px-8">
                @foreach($pendingUsers as $pendingUser)
                    <div class="d-flex align-items-start py-3 border-bottom border-gray-200 border-bottom-dashed">
                        <div class="symbol symbol-35px me-3 flex-shrink-0 mt-1">
                            <span class="symbol-label bg-light-warning">
                                <i class="ki-duotone ki-profile-user fs-2 text-warning">
                                    <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span>
                                </i>
                            </span>
                        </div>
                        <div class="d-flex flex-column flex-grow-1">
                            <a href="{{ route('manajemenpengguna.users.mark-read', $pendingUser->id) }}" class="fs-6 text-gray-800 text-hover-primary fw-bold mb-1">
                                Pendaftaran Akun Baru
                            </a>
                            <div class="text-gray-700 fs-7 mb-2">
                                <strong>{{ $pendingUser->name }}</strong> ({{ $pendingUser->email }})
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="badge badge-light-warning fs-8">
                                    <i class="ki-duotone ki-time fs-8 text-warning me-1"><span class="path1"></span><span class="path2"></span></i>
                                    {{ $pendingUser->created_at ? $pendingUser->created_at->diffForHumans() : 'Baru' }}
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach

                @foreach($unreadPasswordResets as $resetReq)
                    <div class="d-flex align-items-start py-3 border-bottom border-gray-200 border-bottom-dashed">
                        <div class="symbol symbol-35px me-3 flex-shrink-0 mt-1">
                            <span class="symbol-label bg-light-danger">
                                <i class="ki-duotone ki-key fs-2 text-danger">
                                    <span class="path1"></span><span class="path2"></span>
                                </i>
                            </span>
                        </div>
                        <div class="d-flex flex-column flex-grow-1">
                            <a href="{{ route('manajemenpengguna.reset-password.mark-read', $resetReq->id) }}" class="fs-6 text-gray-800 text-hover-primary fw-bold mb-1">
                                Minta Reset Password
                            </a>
                            <div class="text-gray-700 fs-7 mb-2">
                                Dari <strong>{{ $resetReq->user->name ?? 'User' }}</strong> ({{ $resetReq->email }})
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="badge badge-light-danger fs-8">
                                    <i class="ki-duotone ki-time fs-8 text-danger me-1"><span class="path1"></span><span class="path2"></span></i>
                                    {{ $resetReq->created_at ? $resetReq->created_at->diffForHumans() : 'Baru' }}
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach

                @foreach($pendingDeactivations as $deactUser)
                    <div class="d-flex align-items-start py-3 border-bottom border-gray-200 border-bottom-dashed">
                        <div class="symbol symbol-35px me-3 flex-shrink-0 mt-1">
                            <span class="symbol-label bg-light-danger">
                                <i class="ki-duotone ki-shield-cross fs-2 text-danger">
                                    <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                                </i>
                            </span>
                        </div>
                        <div class="d-flex flex-column flex-grow-1">
                            <a href="{{ route('manajemenpengguna.users.mark-read', $deactUser->id) }}" class="fs-6 text-gray-800 text-hover-primary fw-bold mb-1">
                                Pengajuan Deaktivasi Akun
                            </a>
                            <div class="text-gray-700 fs-7 mb-2">
                                Dari <strong>{{ $deactUser->name }}</strong> ({{ $deactUser->email }})
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="badge badge-light-danger fs-8">
                                    <i class="ki-duotone ki-time fs-8 text-danger me-1"><span class="path1"></span><span class="path2"></span></i>
                                    {{ $deactUser->updated_at ? $deactUser->updated_at->diffForHumans() : 'Baru' }}
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach

                @if($pendingUsers->isEmpty() && $unreadPasswordResets->isEmpty() && $pendingDeactivations->isEmpty())
                    <div class="d-flex align-items-start py-3 border-bottom border-gray-200 border-bottom-dashed">
                        <div class="symbol symbol-35px me-3 flex-shrink-0 mt-1">
                            <span class="symbol-label bg-light-warning">
                                <i class="ki-duotone ki-shield-tick fs-2 text-warning">
                                    <span class="path1"></span><span class="path2"></span>
                                </i>
                            </span>
                        </div>
                        <div class="d-flex flex-column flex-grow-1">
                            <a href="javascript:void(0)" class="fs-6 text-gray-800 fw-bold mb-1">Sesi Login Aktif</a>
                            <div class="text-gray-500 fs-7 mb-2">Akun Anda terhubung secara aman</div>
                            <div class="d-flex align-items-center">
                                <span class="badge badge-light-success fs-8">
                                    <i class="ki-duotone ki-check-circle fs-8 text-success me-1"><span class="path1"></span><span class="path2"></span></i>
                                    Aktif
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-start py-3">
                        <div class="symbol symbol-35px me-3 flex-shrink-0 mt-1">
                            <span class="symbol-label bg-light-primary">
                                <i class="ki-duotone ki-timer fs-2 text-primary">
                                    <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                                </i>
                            </span>
                        </div>
                        <div class="d-flex flex-column flex-grow-1">
                            <a href="javascript:void(0)" class="fs-6 text-gray-800 fw-bold mb-1">Idle Protection</a>
                            <div class="text-gray-500 fs-7 mb-2">Auto logout aktif dalam 15 menit inaktivitas</div>
                            <div class="d-flex align-items-center">
                                <span class="badge badge-light-primary fs-8">
                                    <i class="ki-duotone ki-time fs-8 text-primary me-1"><span class="path1"></span><span class="path2"></span></i>
                                    15 Mins
                                </span>
                            </div>
                        </div>
                    </div>
                @endif
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
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span>
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
            <div class="scroll-y mh-325px my-3 px-8">
                @forelse($userLoginLogs as $log)
                    <div class="d-flex align-items-start py-3 border-bottom border-gray-200 border-bottom-dashed">
                        <div class="symbol symbol-35px me-3 flex-shrink-0 mt-1">
                            <span class="symbol-label bg-light-success">
                                <i class="ki-duotone ki-key fs-2 text-success">
                                    <span class="path1"></span><span class="path2"></span>
                                </i>
                            </span>
                        </div>
                        <div class="d-flex flex-column flex-grow-1">
                            <a href="javascript:void(0)" class="text-gray-800 text-hover-primary fw-bold fs-7 mb-1">
                                Login Sukses ({{ $log->login_count }}x)
                            </a>
                            <div class="text-muted fs-8 mb-2">IP: {{ $log->ip_address ?? '127.0.0.1' }}</div>
                            <div class="d-flex align-items-center">
                                <span class="badge badge-light-success fs-8">
                                    <i class="ki-duotone ki-time fs-8 text-success me-1"><span class="path1"></span><span class="path2"></span></i>
                                    {{ $log->login_at ? $log->login_at->diffForHumans() : '-' }}
                                </span>
                            </div>
                        </div>
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
