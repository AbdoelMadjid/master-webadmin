@php
    $user = $user ?? auth()->user();
    if ($user && !$user->relationLoaded('userDetail')) {
        $user->load('userDetail');
    }
    $detail = $user?->userDetail;

    // Format Alamat Lengkap
    $alamatParts = [];
    if (!empty($detail?->alamat_jalan)) {
        $alamatParts[] = $detail->alamat_jalan;
    }
    if (!empty($detail?->no_rumah)) {
        $alamatParts[] = 'No. ' . $detail->no_rumah;
    }
    if (!empty($detail?->blok)) {
        $alamatParts[] = 'Blok ' . $detail->blok;
    }
    if (!empty($detail?->rt_rw)) {
        $alamatParts[] = 'RT/RW ' . $detail->rt_rw;
    }
    if (!empty($detail?->desa_kelurahan)) {
        $alamatParts[] = 'Kel./Desa ' . $detail->desa_kelurahan;
    }
    if (!empty($detail?->kecamatan)) {
        $alamatParts[] = 'Kec. ' . $detail->kecamatan;
    }
    if (!empty($detail?->kabupaten_kota)) {
        $alamatParts[] = $detail->kabupaten_kota;
    }
    if (!empty($detail?->provinsi)) {
        $alamatParts[] = $detail->provinsi;
    }
    if (!empty($detail?->kode_pos)) {
        $alamatParts[] = $detail->kode_pos;
    }
    $alamatLengkap = !empty($alamatParts) ? implode(', ', $alamatParts) : null;

    $jenisKelaminText = match($detail?->jenis_kelamin) {
        'L' => 'Laki-laki',
        'P' => 'Perempuan',
        default => $detail?->jenis_kelamin ?? '-'
    };

    $kewarganegaraanText = match($detail?->kewarganegaraan) {
        'WNI' => 'Warga Negara Indonesia (WNI)',
        'WNA' => 'Warga Negara Asing (WNA)',
        default => $detail?->kewarganegaraan ?? '-'
    };
@endphp

<!--begin::details View-->
<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
    <!--begin::Card header-->
    <div class="card-header cursor-pointer">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bold m-0 text-gray-900">
                <i class="ki-duotone ki-badge fs-2 text-primary me-2">
                    <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span>
                </i> Ringkasan Identitas Pengguna
            </h3>
        </div>
        <!--end::Card title-->
        <!--begin::Action-->
        <a href="{{ url('profil-pengguna?tab=pengaturan') }}" class="btn btn-sm btn-primary align-self-center">
            <i class="ki-duotone ki-pencil fs-4 me-1"><span class="path1"></span><span class="path2"></span></i> Edit Pengaturan & Identitas
        </a>
        <!--end::Action-->
    </div>
    <!--begin::Card header-->
    <!--begin::Card body-->
    <div class="card-body p-9">
        <!--begin::Row: Nama Lengkap-->
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">Nama Lengkap (KTP)</label>
            <div class="col-lg-8">
                <span class="fw-bold fs-6 text-gray-900">{{ $detail?->nama_lengkap ?? $user?->name ?? '-' }}</span>
            </div>
        </div>
        <!--end::Row-->

        <!--begin::Row: NIK-->
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">NIK (16 Digit KTP)</label>
            <div class="col-lg-8">
                <span class="fw-bold fs-6 text-gray-800">{{ $detail?->nik ?? '-' }}</span>
            </div>
        </div>
        <!--end::Row-->

        <!--begin::Row: Tempat & Tanggal Lahir-->
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">Tempat & Tanggal Lahir</label>
            <div class="col-lg-8">
                @php
                    $ttl = [];
                    if (!empty($detail?->tempat_lahir)) {
                        $ttl[] = $detail->tempat_lahir;
                    }
                    if (!empty($detail?->tanggal_lahir)) {
                        $ttl[] = $detail->tanggal_lahir->format('d F Y');
                    }
                @endphp
                <span class="fw-semibold fs-6 text-gray-800">{{ !empty($ttl) ? implode(', ', $ttl) : '-' }}</span>
            </div>
        </div>
        <!--end::Row-->

        <!--begin::Row: Jenis Kelamin-->
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">Jenis Kelamin</label>
            <div class="col-lg-8">
                <span class="fw-semibold fs-6 text-gray-800">{{ $jenisKelaminText }}</span>
            </div>
        </div>
        <!--end::Row-->

        <!--begin::Row: Golongan Darah-->
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">Golongan Darah</label>
            <div class="col-lg-8">
                <span class="fw-semibold fs-6 text-gray-800">{{ $detail?->golongan_darah ? 'Golongan ' . $detail->golongan_darah : '-' }}</span>
            </div>
        </div>
        <!--end::Row-->

        <!--begin::Row: Agama-->
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">Agama</label>
            <div class="col-lg-8">
                <span class="fw-semibold fs-6 text-gray-800">{{ $detail?->agama ?? '-' }}</span>
            </div>
        </div>
        <!--end::Row-->

        <!--begin::Row: Status Perkawinan-->
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">Status Perkawinan</label>
            <div class="col-lg-8">
                <span class="fw-semibold fs-6 text-gray-800">{{ $detail?->status_perkawinan ?? '-' }}</span>
            </div>
        </div>
        <!--end::Row-->

        <!--begin::Row: Pekerjaan-->
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">Pekerjaan</label>
            <div class="col-lg-8">
                <span class="fw-semibold fs-6 text-gray-800">{{ $detail?->pekerjaan ?? '-' }}</span>
            </div>
        </div>
        <!--end::Row-->

        <!--begin::Row: Kewarganegaraan-->
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">Kewarganegaraan</label>
            <div class="col-lg-8">
                <span class="fw-semibold fs-6 text-gray-800">{{ $kewarganegaraanText }}</span>
            </div>
        </div>
        <!--end::Row-->

        <!--begin::Row: Nomor HP-->
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">
                Nomor HP / WhatsApp
                <span class="ms-1" data-bs-toggle="tooltip" title="Nomor telepon aktif untuk komunikasi">
                    <i class="ki-duotone ki-information fs-7">
                        <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                    </i>
                </span>
            </label>
            <div class="col-lg-8 d-flex align-items-center">
                <span class="fw-bold fs-6 text-gray-800 me-2">{{ $detail?->no_hp ?? '-' }}</span>
                @if($detail?->no_hp)
                    <span class="badge badge-light-success">Aktif</span>
                @endif
            </div>
        </div>
        <!--end::Row-->

        <!--begin::Row: Email-->
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">Alamat Email (Akun)</label>
            <div class="col-lg-8">
                <span class="fw-semibold fs-6 text-gray-800 me-2">{{ $user?->email ?? '-' }}</span>
                <span class="badge badge-light-primary">Utama</span>
            </div>
        </div>
        <!--end::Row-->

        <!--begin::Row: Alamat Lengkap-->
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">Alamat Lengkap</label>
            <div class="col-lg-8">
                <span class="fw-semibold fs-6 text-gray-800">{{ $alamatLengkap ?? '-' }}</span>
            </div>
        </div>
        <!--end::Row-->

        @if(empty($detail?->nik) && empty($detail?->no_hp) && empty($detail?->alamat_jalan))
            <!--begin::Notice-->
            <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
                <i class="ki-duotone ki-information fs-2tx text-warning me-4">
                    <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                </i>
                <div class="d-flex flex-stack flex-grow-1">
                    <div class="fw-semibold">
                        <h4 class="text-gray-900 fw-bold">Identitas Anda belum lengkap!</h4>
                        <div class="fs-6 text-gray-700">
                            Silakan lengkapi NIK, nomor HP, dan alamat Anda pada tab 
                            <a class="fw-bold text-primary" href="{{ url('profil-pengguna?tab=pengaturan') }}">Pengaturan Profil</a>.
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Notice-->
        @endif
    </div>
    <!--end::Card body-->
</div>
<!--end::details View-->
