@php
    $user = $user ?? auth()->user();
    $detail = $user?->userDetail;
@endphp

<form id="form_profil_pengaturan" action="{{ route('profil-pengguna.pengaturan.update') }}" method="POST" class="form">
    @csrf

    <!--begin::Card 1: Identitas Diri (KTP)-->
    <div class="card mb-5 mb-xl-10">
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_identitas_ktp">
            <div class="card-title m-0">
                <h3 class="fw-bold m-0 text-gray-900">
                    <i class="ki-duotone ki-badge fs-2 text-primary me-2">
                        <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span>
                    </i> Identitas Diri (Sesuai KTP)
                </h3>
            </div>
        </div>

        <div id="kt_account_identitas_ktp" class="collapse show">
            <div class="card-body border-top p-9">
                <!-- NIK & Nama Lengkap -->
                <div class="row mb-6">
                    <div class="col-lg-6 fv-row mb-4 mb-lg-0">
                        <label class="form-label fw-semibold fs-6">NIK (16 Digit KTP)</label>
                        <input type="text" name="nik" class="form-control form-control-lg form-control-solid" placeholder="Contoh: 3201234567890001" maxlength="16" value="{{ old('nik', $detail?->nik) }}" />
                    </div>
                    <div class="col-lg-6 fv-row">
                        <label class="form-label required fw-semibold fs-6">Nama Lengkap (Sesuai KTP)</label>
                        <input type="text" name="nama_lengkap" class="form-control form-control-lg form-control-solid" placeholder="Masukkan nama lengkap sesuai KTP" value="{{ old('nama_lengkap', $detail?->nama_lengkap ?? $user?->name) }}" required />
                    </div>
                </div>

                <!-- Tempat & Tanggal Lahir -->
                <div class="row mb-6">
                    <div class="col-lg-6 fv-row mb-4 mb-lg-0">
                        <label class="form-label fw-semibold fs-6">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control form-control-lg form-control-solid" placeholder="Contoh: Jakarta" value="{{ old('tempat_lahir', $detail?->tempat_lahir) }}" />
                    </div>
                    <div class="col-lg-6 fv-row">
                        <label class="form-label fw-semibold fs-6">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control form-control-lg form-control-solid" value="{{ old('tanggal_lahir', $detail?->tanggal_lahir ? $detail->tanggal_lahir->format('Y-m-d') : '') }}" />
                    </div>
                </div>

                <!-- Jenis Kelamin & Golongan Darah -->
                <div class="row mb-6">
                    <div class="col-lg-6 fv-row mb-4 mb-lg-0">
                        <label class="form-label fw-semibold fs-6">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-select form-select-solid form-select-lg fw-semibold" data-control="select2" data-placeholder="Pilih Jenis Kelamin">
                            <option value="">-- Pilih Jenis Kelamin --</option>
                            <option value="L" {{ old('jenis_kelamin', $detail?->jenis_kelamin) == 'L' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="P" {{ old('jenis_kelamin', $detail?->jenis_kelamin) == 'P' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>
                    <div class="col-lg-6 fv-row">
                        <label class="form-label fw-semibold fs-6">Golongan Darah</label>
                        <select name="golongan_darah" class="form-select form-select-solid form-select-lg fw-semibold" data-control="select2" data-placeholder="Pilih Golongan Darah">
                            <option value="">-- Pilih Golongan Darah --</option>
                            @foreach(['A', 'B', 'AB', 'O'] as $gol)
                                <option value="{{ $gol }}" {{ old('golongan_darah', $detail?->golongan_darah) == $gol ? 'selected' : '' }}>Golongan {{ $gol }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Agama & Status Perkawinan -->
                <div class="row mb-6">
                    <div class="col-lg-6 fv-row mb-4 mb-lg-0">
                        <label class="form-label fw-semibold fs-6">Agama</label>
                        <select name="agama" class="form-select form-select-solid form-select-lg fw-semibold" data-control="select2" data-placeholder="Pilih Agama">
                            <option value="">-- Pilih Agama --</option>
                            @foreach(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Khonghucu', 'Lainnya'] as $agm)
                                <option value="{{ $agm }}" {{ old('agama', $detail?->agama) == $agm ? 'selected' : '' }}>{{ $agm }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-6 fv-row">
                        <label class="form-label fw-semibold fs-6">Status Perkawinan</label>
                        <select name="status_perkawinan" class="form-select form-select-solid form-select-lg fw-semibold" data-control="select2" data-placeholder="Pilih Status Perkawinan">
                            <option value="">-- Pilih Status Perkawinan --</option>
                            @foreach(['Belum Kawin', 'Kawin', 'Cerai Hidup', 'Cerai Mati'] as $status)
                                <option value="{{ $status }}" {{ old('status_perkawinan', $detail?->status_perkawinan) == $status ? 'selected' : '' }}>{{ $status }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Pekerjaan & Kewarganegaraan -->
                <div class="row mb-6">
                    <div class="col-lg-6 fv-row mb-4 mb-lg-0">
                        <label class="form-label fw-semibold fs-6">Pekerjaan</label>
                        <input type="text" name="pekerjaan" class="form-control form-control-lg form-control-solid" placeholder="Contoh: Karyawan Swasta, PNS, Pengusaha" value="{{ old('pekerjaan', $detail?->pekerjaan) }}" />
                    </div>
                    <div class="col-lg-6 fv-row">
                        <label class="form-label fw-semibold fs-6">Kewarganegaraan</label>
                        <select name="kewarganegaraan" class="form-select form-select-solid form-select-lg fw-semibold" data-control="select2" data-placeholder="Pilih Kewarganegaraan">
                            <option value="WNI" {{ old('kewarganegaraan', $detail?->kewarganegaraan ?? 'WNI') == 'WNI' ? 'selected' : '' }}>Warga Negara Indonesia (WNI)</option>
                            <option value="WNA" {{ old('kewarganegaraan', $detail?->kewarganegaraan) == 'WNA' ? 'selected' : '' }}>Warga Negara Asing (WNA)</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Card 1-->

    <!--begin::Card 2: Kontak & Telepon-->
    <div class="card mb-5 mb-xl-10">
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_kontak_telepon">
            <div class="card-title m-0">
                <h3 class="fw-bold m-0 text-gray-900">
                    <i class="ki-duotone ki-phone fs-2 text-primary me-2">
                        <span class="path1"></span><span class="path2"></span>
                    </i> Informasi Kontak & Telepon
                </h3>
            </div>
        </div>

        <div id="kt_account_kontak_telepon" class="collapse show">
            <div class="card-body border-top p-9">
                <div class="row mb-6">
                    <div class="col-lg-6 fv-row mb-4 mb-lg-0">
                        <label class="form-label fw-semibold fs-6">Nomor HP / WhatsApp</label>
                        <div class="input-group input-group-solid input-group-lg">
                            <span class="input-group-text"><i class="ki-duotone ki-whatsapp fs-3"><span class="path1"></span><span class="path2"></span></i></span>
                            <input type="tel" name="no_hp" class="form-control form-control-lg form-control-solid" placeholder="Contoh: 081234567890" value="{{ old('no_hp', $detail?->no_hp) }}" />
                        </div>
                    </div>
                    <div class="col-lg-6 fv-row">
                        <label class="form-label fw-semibold fs-6">Alamat Email (Akun)</label>
                        <div class="input-group input-group-solid input-group-lg">
                            <span class="input-group-text"><i class="ki-duotone ki-sms fs-3"><span class="path1"></span><span class="path2"></span></i></span>
                            <input type="email" class="form-control form-control-lg form-control-solid bg-secondary" value="{{ $user?->email }}" readonly data-bs-toggle="tooltip" data-bs-placement="top" title="Email terikat dengan akun Anda" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Card 2-->

    <!--begin::Card 3: Alamat Dipisah-->
    <div class="card mb-5 mb-xl-10">
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_alamat_lengkap">
            <div class="card-title m-0">
                <h3 class="fw-bold m-0 text-gray-900">
                    <i class="ki-duotone ki-geolocation fs-2 text-primary me-2">
                        <span class="path1"></span><span class="path2"></span>
                    </i> Alamat Lengkap Sesuai KTP / Domisili
                </h3>
            </div>
        </div>

        <div id="kt_account_alamat_lengkap" class="collapse show">
            <div class="card-body border-top p-9">
                <!-- Jalan / Perumahan & No. Rumah -->
                <div class="row mb-6">
                    <div class="col-lg-8 fv-row mb-4 mb-lg-0">
                        <label class="form-label fw-semibold fs-6">Nama Jalan / Perumahan / Dusun</label>
                        <input type="text" name="alamat_jalan" class="form-control form-control-lg form-control-solid" placeholder="Contoh: Jl. Merdeka / Perum Melati" value="{{ old('alamat_jalan', $detail?->alamat_jalan) }}" />
                    </div>
                    <div class="col-lg-4 fv-row">
                        <label class="form-label fw-semibold fs-6">Nomor Rumah</label>
                        <input type="text" name="no_rumah" class="form-control form-control-lg form-control-solid" placeholder="Contoh: No. 12B" value="{{ old('no_rumah', $detail?->no_rumah) }}" />
                    </div>
                </div>

                <!-- RT / RW & Blok -->
                <div class="row mb-6">
                    <div class="col-lg-6 fv-row mb-4 mb-lg-0">
                        <label class="form-label fw-semibold fs-6">RT / RW</label>
                        <input type="text" name="rt_rw" class="form-control form-control-lg form-control-solid" placeholder="Contoh: 005/002" value="{{ old('rt_rw', $detail?->rt_rw) }}" />
                    </div>
                    <div class="col-lg-6 fv-row">
                        <label class="form-label fw-semibold fs-6">Blok / Kavling</label>
                        <input type="text" name="blok" class="form-control form-control-lg form-control-solid" placeholder="Contoh: Blok A3" value="{{ old('blok', $detail?->blok) }}" />
                    </div>
                </div>

                <!-- Desa / Kelurahan & Kecamatan -->
                <div class="row mb-6">
                    <div class="col-lg-6 fv-row mb-4 mb-lg-0">
                        <label class="form-label fw-semibold fs-6">Desa / Kelurahan</label>
                        <input type="text" name="desa_kelurahan" class="form-control form-control-lg form-control-solid" placeholder="Contoh: Kel. Sukamaju" value="{{ old('desa_kelurahan', $detail?->desa_kelurahan) }}" />
                    </div>
                    <div class="col-lg-6 fv-row">
                        <label class="form-label fw-semibold fs-6">Kecamatan</label>
                        <input type="text" name="kecamatan" class="form-control form-control-lg form-control-solid" placeholder="Contoh: Kec. Lengkong" value="{{ old('kecamatan', $detail?->kecamatan) }}" />
                    </div>
                </div>

                <!-- Kabupaten / Kota & Provinsi -->
                <div class="row mb-6">
                    <div class="col-lg-6 fv-row mb-4 mb-lg-0">
                        <label class="form-label fw-semibold fs-6">Kabupaten / Kota</label>
                        <input type="text" name="kabupaten_kota" class="form-control form-control-lg form-control-solid" placeholder="Contoh: Kota Bandung" value="{{ old('kabupaten_kota', $detail?->kabupaten_kota) }}" />
                    </div>
                    <div class="col-lg-6 fv-row">
                        <label class="form-label fw-semibold fs-6">Provinsi</label>
                        <input type="text" name="provinsi" class="form-control form-control-lg form-control-solid" placeholder="Contoh: Jawa Barat" value="{{ old('provinsi', $detail?->provinsi) }}" />
                    </div>
                </div>

                <!-- Kode Pos -->
                <div class="row mb-6">
                    <div class="col-lg-6 fv-row">
                        <label class="form-label fw-semibold fs-6">Kode Pos</label>
                        <input type="text" name="kode_pos" class="form-control form-control-lg form-control-solid" placeholder="Contoh: 40262" maxlength="10" value="{{ old('kode_pos', $detail?->kode_pos) }}" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Card 3-->

    <!--begin::Form Actions-->
    <div class="card mb-5 mb-xl-10">
        <div class="card-footer d-flex justify-content-end py-6 px-9">
            <button type="reset" class="btn btn-light btn-active-light-primary me-2">Batal</button>
            <button type="submit" class="btn btn-primary" id="btn_simpan_pengaturan">
                <span class="indicator-label"><i class="ki-duotone ki-check fs-2 me-1"></i> Simpan Perubahan</span>
                <span class="indicator-progress">Memproses... <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
        </div>
    </div>
    <!--end::Form Actions-->
</form>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const formEl = document.getElementById('form_profil_pengaturan');
        if (!formEl) return;

        formEl.addEventListener('submit', function (e) {
            e.preventDefault();

            const submitBtn = document.getElementById('btn_simpan_pengaturan');
            if (submitBtn) {
                submitBtn.setAttribute('data-kt-indicator', 'on');
                submitBtn.disabled = true;
            }

            const formData = new FormData(formEl);

            fetch(formEl.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json'
                }
            })
            .then(async (response) => {
                const data = await response.json();
                if (submitBtn) {
                    submitBtn.removeAttribute('data-kt-indicator');
                    submitBtn.disabled = false;
                }

                if (response.ok && data.success) {
                    if (typeof SwalHelper !== 'undefined' && SwalHelper.success) {
                        SwalHelper.success(data.message || 'Data identitas profil berhasil diperbarui!');
                    } else if (typeof Swal !== 'undefined') {
                        Swal.fire({ text: data.message, icon: 'success', buttonsStyling: false, confirmButtonText: 'OK', customClass: { confirmButton: 'btn btn-primary' } });
                    }
                } else if (response.status === 422) {
                    if (typeof SwalHelper !== 'undefined' && SwalHelper.validationError) {
                        SwalHelper.validationError({ responseJSON: data });
                    } else {
                        let errors = data.errors ? Object.values(data.errors).flat().join('<br>') : (data.message || 'Validasi gagal.');
                        if (typeof Swal !== 'undefined') {
                            Swal.fire({ html: errors, icon: 'error', buttonsStyling: false, confirmButtonText: 'OK', customClass: { confirmButton: 'btn btn-primary' } });
                        }
                    }
                } else {
                    if (typeof SwalHelper !== 'undefined' && SwalHelper.error) {
                        SwalHelper.error(data.message || 'Gagal memperbarui profil pengguna.');
                    } else if (typeof Swal !== 'undefined') {
                        Swal.fire({ text: data.message || 'Gagal memperbarui profil pengguna.', icon: 'error', buttonsStyling: false, confirmButtonText: 'OK', customClass: { confirmButton: 'btn btn-primary' } });
                    }
                }
            })
            .catch((err) => {
                if (submitBtn) {
                    submitBtn.removeAttribute('data-kt-indicator');
                    submitBtn.disabled = false;
                }
                if (typeof SwalHelper !== 'undefined' && SwalHelper.error) {
                    SwalHelper.error('Terjadi kesalahan jaringan atau server.');
                }
            });
        });
    });
</script>
