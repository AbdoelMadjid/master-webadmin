@forelse(($onlineUsers ?? []) as $user)
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="d-flex align-items-center p-3 rounded bg-light border border-gray-200 h-100">
            <!--begin::Avatar with online indicator-->
            <div class="symbol symbol-40px symbol-circle me-3 position-relative flex-shrink-0">
                <img src="{{ $user->avatar_url }}" alt="{{ $user->name }}" style="width: 40px; height: 40px; object-fit: cover;" onerror="this.onerror=null;this.src='{{ asset('assets/media/svg/avatars/default-avatar.svg') }}';" />
                <span class="position-absolute bottom-0 end-0 bg-success rounded-circle border border-2 border-body h-12px w-12px" title="Online"></span>
            </div>
            <!--end::Avatar-->
            
            <!--begin::User Info-->
            @php
                $loginTime = $user->dataLogins->first()?->login_at ?? $user->last_activity_at;
            @endphp
            <div class="d-flex flex-column overflow-hidden me-2">
                <a href="{{ url('profil-pengguna') }}" class="text-gray-900 fw-bold text-hover-primary text-truncate fs-6 mb-0">
                    {{ $user->name }}
                    @if($user->id === auth()->id())
                        <span class="badge badge-light-primary fs-9 ms-1 py-0 px-1">Saya</span>
                    @endif
                </a>
                <span class="text-muted fs-7 text-truncate" title="Durasi sejak login">
                    <i class="ki-duotone ki-time fs-8 text-success me-1"><span class="path1"></span><span class="path2"></span></i>
                    Login {{ $loginTime ? \Illuminate\Support\Carbon::parse($loginTime)->diffForHumans() : 'baru saja' }}
                </span>
            </div>
            <!--end::User Info-->
        </div>
    </div>
@empty
    <div class="col-12">
        <div class="text-center py-4 text-muted">
            <i class="ki-duotone ki-information-2 fs-2x text-muted mb-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
            <div class="fw-semibold fs-7">Tidak ada pengguna lain yang sedang online.</div>
        </div>
    </div>
@endforelse

@if(($onlineUsersCount ?? 0) > 16)
    <div class="col-12 text-center pt-2">
        <span class="badge badge-light-secondary text-gray-600 fs-8 fw-semibold px-3 py-2">
            +{{ number_format(($onlineUsersCount - 16)) }} pengguna lainnya juga sedang online
        </span>
    </div>
@endif
