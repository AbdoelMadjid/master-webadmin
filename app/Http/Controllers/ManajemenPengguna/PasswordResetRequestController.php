<?php

namespace App\Http\Controllers\ManajemenPengguna;

use App\Http\Controllers\Controller;
use App\Models\ManajemenPengguna\PasswordResetRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PasswordResetRequestController extends Controller
{
    /**
     * Display a listing of reset password requests.
     */
    public function index(Request $request)
    {
        // Mark specific request as read if highlighted from notification
        if ($request->has('highlight')) {
            PasswordResetRequest::where('id', $request->highlight)->update(['is_read' => true]);
        }

        $requests = PasswordResetRequest::with(['user', 'handler'])
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pages.manajemenpengguna.reset-password', compact('requests'));
    }

    /**
     * Mark notification as read and redirect to request page.
     */
    public function markAsRead($id)
    {
        $resetReq = PasswordResetRequest::findOrFail($id);
        $resetReq->update(['is_read' => true]);

        return redirect()->route('manajemenpengguna.reset-password', ['highlight' => $resetReq->id])
            ->with('info', "Membuka permintaan reset password dari {$resetReq->email}.");
    }

    /**
     * Process resetting password for the user.
     */
    public function processReset(Request $request, $id)
    {
        $request->validate([
            'password' => 'required|string|min:8|confirmed',
        ], [
            'password.required'  => 'Kata sandi baru wajib diisi.',
            'password.min'       => 'Kata sandi minimal 8 karakter.',
            'password.confirmed' => 'Konfirmasi kata sandi tidak cocok.',
        ]);

        $resetReq = PasswordResetRequest::with('user')->findOrFail($id);
        $user = $resetReq->user;

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Pengguna tidak ditemukan dalam sistem.',
            ], 404);
        }

        // Update user password
        $user->forceFill([
            'password' => Hash::make($request->password),
        ])->save();

        // Mark reset request as completed & read
        $resetReq->update([
            'status'      => 'completed',
            'is_read'     => true,
            'handled_by'  => Auth::id(),
            'handled_at'  => now(),
            'admin_notes' => $request->admin_notes ?? 'Password berhasil di-reset oleh Admin ke Password!12345.',
        ]);

        return response()->json([
            'success' => true,
            'message' => "Kata sandi akun '{$user->name}' ({$user->email}) berhasil di-reset oleh Admin.",
        ]);
    }

    /**
     * Reject reset password request.
     */
    public function reject(Request $request, $id)
    {
        $resetReq = PasswordResetRequest::with('user')->findOrFail($id);

        $resetReq->update([
            'status'      => 'rejected',
            'is_read'     => true,
            'handled_by'  => Auth::id(),
            'handled_at'  => now(),
            'admin_notes' => $request->admin_notes ?? 'Permintaan reset password ditolak oleh Admin.',
        ]);

        return response()->json([
            'success' => true,
            'message' => "Permintaan reset password untuk '{$resetReq->email}' telah ditolak.",
        ]);
    }
}
