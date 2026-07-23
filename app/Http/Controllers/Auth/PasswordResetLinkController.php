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

        // Create password reset request for admin approval
        PasswordResetRequest::create([
            'user_id' => $user->id,
            'email'   => $user->email,
            'status'  => 'pending',
            'is_read' => false,
        ]);

        return back()->with(
            'status',
            'Permintaan reset password telah berhasil dikirimkan ke Master/Admin. Silakan tunggu konfirmasi dari Admin.'
        );
    }
}
