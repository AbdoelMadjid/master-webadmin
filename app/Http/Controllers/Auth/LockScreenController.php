<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LockScreenRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LockScreenController extends Controller
{
    /**
     * Verify password to unlock the screen.
     */
    public function unlock(LockScreenRequest $request): JsonResponse
    {
        $user = Auth::user();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'success' => false,
                'message' => app()->getLocale() == 'en'
                    ? 'Invalid password. Please try again.'
                    : 'Password yang Anda masukkan salah. Silakan coba lagi.',
                'errors' => [
                    'password' => [
                        app()->getLocale() == 'en'
                            ? 'Invalid password.'
                            : 'Password yang Anda masukkan salah.'
                    ]
                ]
            ], 422);
        }

        return response()->json([
            'success' => true,
            'message' => app()->getLocale() == 'en'
                ? 'Screen unlocked successfully.'
                : 'Layar berhasil dibuka kembali.'
        ]);
    }
}
