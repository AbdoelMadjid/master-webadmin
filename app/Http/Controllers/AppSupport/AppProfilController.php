<?php

namespace App\Http\Controllers\AppSupport;

use App\Http\Controllers\Controller;
use App\Http\Requests\AppSupport\AppProfilRequest;
use App\Models\AppSupport\AppProfil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AppProfilController extends Controller
{
    /**
     * Tampilkan form profil aplikasi aktif (single application settings)
     */
    public function index(Request $request)
    {
        $appProfil = AppProfil::active()->first() ?? AppProfil::first();

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success'        => true,
                'data'           => $appProfil,
                'logo_url'       => $appProfil?->logo_url,
                'logo_small_url' => $appProfil?->logo_small_url,
                'favicon_url'    => $appProfil?->favicon_url,
            ]);
        }

        return view('pages.appsupport.app-profil', compact('appProfil'));
    }

    /**
     * Simpan data profil aplikasi baru (jika belum ada)
     */
    public function store(AppProfilRequest $request)
    {
        $data = $request->validated();
        $data['active'] = 1;

        // Reset status profil lain jika ada
        AppProfil::query()->update(['active' => 0]);

        // Upload Logo Utama (Panjang / Horizontal)
        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('app-profil', 'public');
        }

        // Upload Logo Ringkas (Kotak / Small Icon)
        if ($request->hasFile('logo_small')) {
            $data['logo_small'] = $request->file('logo_small')->store('app-profil', 'public');
        }

        // Upload Favicon Browser (Shortcut Icon)
        if ($request->hasFile('favicon')) {
            $data['favicon'] = $request->file('favicon')->store('app-profil', 'public');
        }

        $profil = AppProfil::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Profil aplikasi berhasil disimpan.',
            'data'    => array_merge($profil->toArray(), [
                'logo_url'       => $profil->logo_url,
                'logo_small_url' => $profil->logo_small_url,
                'favicon_url'    => $profil->favicon_url,
            ]),
        ]);
    }

    /**
     * Dapatkan detail profil aplikasi berdasarkan ID
     */
    public function show($id)
    {
        $profil = AppProfil::findOrFail($id);

        return response()->json([
            'success'        => true,
            'data'           => $profil,
            'logo_url'       => $profil->logo_url,
            'logo_small_url' => $profil->logo_small_url,
            'favicon_url'    => $profil->favicon_url,
        ]);
    }

    /**
     * Perbarui data profil aplikasi
     */
    public function update(AppProfilRequest $request, $id)
    {
        $profil = AppProfil::findOrFail($id);

        $data = $request->validated();
        $data['active'] = 1;

        // Reset status profil lain jika ada
        AppProfil::where('id', '!=', $id)->update(['active' => 0]);

        // Upload/Replace Logo Utama
        if ($request->hasFile('logo')) {
            if ($profil->logo && Storage::disk('public')->exists($profil->logo)) {
                Storage::disk('public')->delete($profil->logo);
            }
            $data['logo'] = $request->file('logo')->store('app-profil', 'public');
        }

        // Upload/Replace Logo Ringkas (Kotak)
        if ($request->hasFile('logo_small')) {
            if ($profil->logo_small && Storage::disk('public')->exists($profil->logo_small)) {
                Storage::disk('public')->delete($profil->logo_small);
            }
            $data['logo_small'] = $request->file('logo_small')->store('app-profil', 'public');
        }

        // Upload/Replace Favicon Browser
        if ($request->hasFile('favicon')) {
            if ($profil->favicon && Storage::disk('public')->exists($profil->favicon)) {
                Storage::disk('public')->delete($profil->favicon);
            }
            $data['favicon'] = $request->file('favicon')->store('app-profil', 'public');
        }

        $profil->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Profil aplikasi berhasil diperbarui.',
            'data'    => array_merge($profil->toArray(), [
                'logo_url'       => $profil->logo_url,
                'logo_small_url' => $profil->logo_small_url,
                'favicon_url'    => $profil->favicon_url,
            ]),
        ]);
    }

    /**
     * Hapus profil aplikasi (opsional)
     */
    public function destroy($id)
    {
        $profil = AppProfil::findOrFail($id);

        if ($profil->logo && Storage::disk('public')->exists($profil->logo)) {
            Storage::disk('public')->delete($profil->logo);
        }
        if ($profil->logo_small && Storage::disk('public')->exists($profil->logo_small)) {
            Storage::disk('public')->delete($profil->logo_small);
        }
        if ($profil->favicon && Storage::disk('public')->exists($profil->favicon)) {
            Storage::disk('public')->delete($profil->favicon);
        }

        $profil->delete();

        return response()->json([
            'success' => true,
            'message' => 'Profil aplikasi berhasil dihapus.',
        ]);
    }
}
