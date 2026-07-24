<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\ProfilPenggunaAvatarRequest;
use App\Http\Requests\User\ProfilPenggunaKeamananDeactivateRequest;
use App\Http\Requests\User\ProfilPenggunaKeamananPasswordRequest;
use App\Http\Requests\User\ProfilPenggunaPengaturanRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class ProfilPenggunaController extends Controller
{
    /**
     * Tampilkan halaman profil pengguna
     */
    public function index()
    {
        /** @var \App\Models\User $user */
        $user = auth()->user();
        if ($user) {
            $user->load('userDetail');
        }

        return view('pages.profil-pengguna', compact('user'));
    }

    /**
     * Update data pengaturan & identitas lengkap pengguna (users_details)
     */
    public function updatePengaturan(ProfilPenggunaPengaturanRequest $request)
    {
        /** @var \App\Models\User $user */
        $user = auth()->user();

        $data = $request->validated();

        $user->userDetail()->updateOrCreate(
            ['user_id' => $user->id],
            $data
        );

        if (!empty($data['nama_lengkap'])) {
            $user->update(['name' => $data['nama_lengkap']]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Data identitas dan profil pengguna berhasil diperbarui!',
        ]);
    }

    /**
     * Perbarui password akun pengguna
     */
    public function updatePassword(ProfilPenggunaKeamananPasswordRequest $request)
    {
        /** @var \App\Models\User $user */
        $user = auth()->user();

        $user->update([
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Password akun Anda berhasil diperbarui!',
        ]);
    }

    /**
     * Ajukan nonaktifkan akun ke Admin (status = deactivate_pending)
     */
    public function deactivateAccount(ProfilPenggunaKeamananDeactivateRequest $request)
    {
        /** @var \App\Models\User $user */
        $user = auth()->user();

        // Update status pengguna menjadi deactivate_pending untuk diajukan ke admin
        $user->update([
            'status' => 'deactivate_pending',
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Pengajuan nonaktifkan akun berhasil dikirim ke Admin. Akun Anda sedang menunggu persetujuan Admin.',
        ]);
    }

    /**
     * Batalkan pengajuan nonaktifkan akun (status = approved)
     */
    public function cancelDeactivateAccount(Request $request)
    {
        /** @var \App\Models\User $user */
        $user = auth()->user();

        if ($user->status === 'deactivate_pending') {
            $user->update([
                'status' => 'approved',
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Pengajuan nonaktifkan akun berhasil dibatalkan.',
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Tidak ada pengajuan deaktivasi aktif yang dapat dibatalkan.',
        ], 400);
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
