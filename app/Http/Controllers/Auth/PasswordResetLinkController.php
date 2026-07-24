<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\ManajemenPengguna\PasswordResetRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     */
    public function create(): View
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'email'],
        ], [
            'email.required' => __('auth.validation.email_required'),
            'email.email'    => __('auth.validation.email_email'),
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()
                ->withInput($request->only('email'))
                ->withErrors(['email' => 'Email tidak terdaftar dalam sistem.']);
        }

        // Cek apakah ada pengajuan reset password sebelumnya milik user ini
        $existingReq = PasswordResetRequest::where('user_id', $user->id)
            ->orWhere('email', $user->email)
            ->first();

        // Jika pengajuan sebelumnya masih berstatus pending
        if ($existingReq && $existingReq->status === 'pending') {
            return back()->with(
                'status',
                'Permintaan reset password Anda sebelumnya masih berstatus pending dan sedang menunggu persetujuan dari Admin.'
            );
        }

        // Jika sudah pernah diajukan dan statusnya bukan pending (sudah diproses/ditolak), perbarui kembali menjadi pending
        if ($existingReq) {
            $existingReq->update([
                'user_id'    => $user->id,
                'email'      => $user->email,
                'status'     => 'pending',
                'is_read'    => false,
                'handled_by' => null,
                'handled_at' => null,
                'created_at' => now(),
            ]);
        } else {
            PasswordResetRequest::create([
                'user_id'    => $user->id,
                'email'      => $user->email,
                'status'     => 'pending',
                'is_read'    => false,
                'handled_by' => null,
                'handled_at' => null,
            ]);
        }

        return back()->with(
            'status',
            'Permintaan reset password telah berhasil dikirimkan ke Master/Admin. Silakan tunggu konfirmasi dari Admin.'
        );
    }
}
