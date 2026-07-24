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
