@extends('layouts.index')

@section('toolbar')
    @component('layouts.partials._toolbar')
        @slot('li_1')
            Manajemen Pengguna
        @endslot
        @slot('li_2')
            Reset Password
        @endslot
    @endcomponent
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            @if(session('info'))
                <div class="alert alert-info d-flex align-items-center p-4 mb-5">
                    <i class="ki-duotone ki-information-5 fs-2hx text-info me-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                    <div class="d-flex flex-column">
                        <h5 class="mb-1 text-gray-900 fw-bold">Notifikasi Permintaan Reset Password</h5>
                        <span>{{ session('info') }}</span>
                    </div>
                </div>
            @endif

            <div class="card card-flush">
                <!--begin::Card header-->
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4"><span class="path1"></span><span class="path2"></span></i>
                            <input type="text" id="reset_password_search_input" class="form-control form-control-solid w-250px ps-12" placeholder="Cari nama / email..." />
                        </div>
                        <!--end::Search-->
                    </div>

                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                        <div class="w-150px">
                            <select id="reset_password_status_filter" class="form-select form-select-solid">
                                <option value="">Semua Status</option>
                                <option value="Pending">Pending</option>
                                <option value="Reset Selesai">Selesai (Reset)</option>
                                <option value="Ditolak">Ditolak</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!--end::Card header-->

                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_reset_password_table">
                            <thead>
                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="w-50px text-center">No</th>
                                    <th class="min-w-200px">Pengguna</th>
                                    <th class="min-w-150px">Waktu Request</th>
                                    <th class="min-w-125px text-center">Status</th>
                                    <th class="min-w-175px">Penanganan</th>
                                    <th class="text-end min-w-175px pe-4">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                @forelse($requests as $index => $item)
                                    <tr class="{{ request('highlight') == $item->id ? 'bg-light-warning' : '' }}">
                                        <td class="text-center text-muted fw-bold">
                                            {{ $index + 1 }}
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-circle symbol-40px overflow-hidden me-3">
                                                    <img src="{{ $item->user ? $item->user->avatar_url : asset('assets/media/svg/avatars/default-avatar.svg') }}" alt="{{ $item->email }}" style="width: 40px; height: 40px; object-fit: cover;" onerror="this.onerror=null;this.src='{{ asset('assets/media/svg/avatars/default-avatar.svg') }}';" />
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <span class="text-gray-800 fw-bold mb-1">{{ $item->user->name ?? 'Pengguna' }}</span>
                                                    <span class="fs-7 text-muted">{{ $item->email }}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column">
                                                <span class="text-gray-800 fw-bold">{{ $item->created_at ? $item->created_at->format('d M Y, H:i') : '-' }}</span>
                                                <span class="fs-8 text-muted">{{ $item->created_at ? $item->created_at->diffForHumans() : '' }}</span>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            @if($item->status == 'pending')
                                                <span class="badge badge-light-warning fw-bold px-3 py-2">
                                                    <i class="ki-duotone ki-timer fs-6 text-warning me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> Pending
                                                </span>
                                            @elseif($item->status == 'completed')
                                                <span class="badge badge-light-success fw-bold px-3 py-2">
                                                    <i class="ki-duotone ki-check-circle fs-6 text-success me-1"><span class="path1"></span><span class="path2"></span></i> Reset Selesai
                                                </span>
                                            @else
                                                <span class="badge badge-light-danger fw-bold px-3 py-2">
                                                    <i class="ki-duotone ki-cross-circle fs-6 text-danger me-1"><span class="path1"></span><span class="path2"></span></i> Ditolak
                                                </span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($item->handler)
                                                <div class="d-flex flex-column">
                                                    <span class="fs-7 text-gray-800 fw-bold">{{ $item->handler->name }}</span>
                                                    <span class="fs-8 text-muted">{{ $item->handled_at ? $item->handled_at->format('d M Y H:i') : '' }}</span>
                                                </div>
                                            @else
                                                <span class="text-muted fs-7">-</span>
                                            @endif
                                        </td>
                                        <td class="text-end pe-4">
                                            @if($item->status == 'pending')
                                                <button type="button" class="btn btn-sm btn-primary me-2 btn-do-reset" data-id="{{ $item->id }}" data-email="{{ $item->email }}" data-name="{{ $item->user->name ?? 'User' }}">
                                                    <i class="ki-duotone ki-key fs-4 me-1"><span class="path1"></span><span class="path2"></span></i> Reset Pass
                                                </button>
                                                <button type="button" class="btn btn-sm btn-light-danger btn-do-reject" data-id="{{ $item->id }}" data-email="{{ $item->email }}">
                                                    Tolak
                                                </button>
                                            @else
                                                <span class="badge badge-light fs-8">Proses Selesai</span>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center py-10 text-muted">
                                            <i class="ki-duotone ki-information fs-3x text-gray-400 mb-3 d-block"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                            Belum ada data permintaan reset password.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--end::Card body-->
            </div>
        </div>
    </div>

    <!--begin::Modal Reset Password-->
    <div class="modal fade" id="kt_modal_process_reset" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="fw-bold">Set Kata Sandi Baru</h2>
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                </div>
                <form id="kt_modal_process_reset_form" action="#">
                    @csrf
                    <input type="hidden" id="reset_req_id" name="id" value="">
                    <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                        <div class="d-flex align-items-center gap-3 mb-6 p-4 rounded bg-light-primary">
                            <i class="ki-duotone ki-user fs-2hx text-primary"><span class="path1"></span><span class="path2"></span></i>
                            <div>
                                <h4 class="fw-bold mb-0 text-gray-900" id="reset_user_name_display">-</h4>
                                <span class="fs-7 text-muted" id="reset_user_email_display">-</span>
                            </div>
                        </div>

                        <div class="fv-row mb-7">
                            <label class="required fw-semibold fs-6 mb-2">Kata Sandi Baru</label>
                            <input type="text" name="password" id="reset_password_input" class="form-control form-control-solid" value="Password!12345" placeholder="Masukkan kata sandi baru (min. 8 karakter)" required />
                            <span class="text-muted fs-7">Default password: <code>Password!12345</code> (dapat diubah oleh Admin jika diperlukan)</span>
                        </div>

                        <div class="fv-row mb-7">
                            <label class="required fw-semibold fs-6 mb-2">Konfirmasi Kata Sandi Baru</label>
                            <input type="text" name="password_confirmation" id="reset_password_confirm_input" class="form-control form-control-solid" value="Password!12345" placeholder="Ketik ulang kata sandi baru" required />
                        </div>

                        <div class="fv-row">
                            <label class="fw-semibold fs-6 mb-2">Catatan Admin (Opsional)</label>
                            <textarea name="admin_notes" class="form-control form-control-solid" rows="2" placeholder="Catatan internal perihal reset password ini">Password otomatis di-reset ke Password!12345</textarea>
                        </div>
                    </div>
                    <div class="modal-footer flex-center">
                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary" id="kt_modal_process_reset_submit">
                            <span class="indicator-label">Simpan & Reset Password</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--end::Modal Reset Password-->
@endsection

@section('styles')
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('scripts')
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script>
        $(document).ready(function() {
            var resetTable = $('#kt_reset_password_table').DataTable({
                pageLength: 10,
                order: [],
                columnDefs: [
                    { orderable: false, targets: [0, 5] },
                    { className: 'text-end pe-4', targets: [5] }
                ],
                language: {
                    search: "",
                    searchPlaceholder: "Cari data..."
                }
            });

            $('#reset_password_search_input').on('keyup input', function() {
                resetTable.search(this.value).draw();
            });

            $('#reset_password_status_filter').on('change', function() {
                resetTable.column(3).search(this.value).draw();
            });

            $(document).on('click', '.btn-do-reset', function() {
                var reqId = $(this).data('id');
                var reqEmail = $(this).data('email');
                var reqName = $(this).data('name');

                $('#reset_req_id').val(reqId);
                $('#reset_user_name_display').text(reqName);
                $('#reset_user_email_display').text(reqEmail);
                $('#reset_password_input').val('Password!12345');
                $('#reset_password_confirm_input').val('Password!12345');

                $('#kt_modal_process_reset').modal('show');
            });

            $('#kt_modal_process_reset_form').on('submit', function(e) {
                e.preventDefault();
                var reqId = $('#reset_req_id').val();
                var formData = $(this).serialize();

                $.ajax({
                    url: "{{ url('manajemenpengguna/reset-password') }}/" + reqId + "/reset",
                    type: "POST",
                    data: formData,
                    success: function(res) {
                        if (res.success) {
                            $('#kt_modal_process_reset').modal('hide');
                            SwalHelper.success(res.message, function() {
                                location.reload();
                            });
                        }
                    },
                    error: function(xhr) {
                        SwalHelper.validationError(xhr);
                    }
                });
            });

            $(document).on('click', '.btn-do-reject', function() {
                var reqId = $(this).data('id');
                var reqEmail = $(this).data('email');

                Swal.fire({
                    title: 'Tolak Permintaan Reset?',
                    text: "Apakah Anda yakin ingin menolak permintaan reset password dari '" + reqEmail + "'?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Ya, Tolak',
                    cancelButtonText: 'Batal',
                    customClass: {
                        confirmButton: 'btn btn-danger',
                        cancelButton: 'btn btn-light'
                    }
                }).then(function(result) {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ url('manajemenpengguna/reset-password') }}/" + reqId + "/reject",
                            type: "POST",
                            data: { _token: "{{ csrf_token() }}" },
                            success: function(res) {
                                if (res.success) {
                                    SwalHelper.success(res.message, function() {
                                        location.reload();
                                    });
                                }
                            },
                            error: function(xhr) {
                                SwalHelper.error(xhr.responseJSON?.message || 'Gagal menolak permintaan.');
                            }
                        });
                    }
                });
            });
        });
    </script>
@endsection
