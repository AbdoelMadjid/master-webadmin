<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\ProfilPenggunaAvatarRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProfilPenggunaController extends Controller
{
    /**
     * Tampilkan halaman profil pengguna
     */
    public function index()
    {
        return view('pages.profil-pengguna');
    }

    /**
     * Upload dan simpan avatar pengguna baru secara langsung via AJAX
     */
    public function updateAvatar(ProfilPenggunaAvatarRequest $request)
    {
        /** @var \App\Models\User $user */
        $user = auth()->user();

        if ($request->hasFile('avatar_file')) {
            $file = $request->file('avatar_file');

            $uploadDir = public_path('uploads/avatars');
            if (!File::exists($uploadDir)) {
                File::makeDirectory($uploadDir, 0755, true, true);
            }

            // Hapus avatar lama jika fisik filenya ada di uploads/avatars/
            if ($user->avatar && str_contains($user->avatar, 'uploads/avatars/')) {
                $oldPath = public_path($user->avatar);
                if (File::exists($oldPath)) {
                    File::delete($oldPath);
                }
            }

            $filename = 'avatar_' . $user->id . '_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move($uploadDir, $filename);

            $avatarPath = 'uploads/avatars/' . $filename;
            $user->update(['avatar' => $avatarPath]);

            $avatarUrl = getUserAvatarUrl($user);

            return response()->json([
                'success'    => true,
                'message'    => 'Avatar pengguna berhasil diperbarui!',
                'avatar_url' => $avatarUrl,
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Tidak ada file gambar yang diunggah.',
        ], 400);
    }
}
