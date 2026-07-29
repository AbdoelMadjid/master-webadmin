<?php

namespace App\Http\Controllers\PageConfig;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageConfig\WebsiteProfileRequest;
use App\Models\PageConfig\WebsiteProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WebsiteProfileController extends Controller
{
    public function index(Request $request)
    {
        $activeTab = $request->get('tab', 'identity');
        $profile = WebsiteProfile::getActiveProfile();

        return view('pages.pageconfig.website-profile', compact('activeTab', 'profile'));
    }

    public function update(WebsiteProfileRequest $request)
    {
        $profile = WebsiteProfile::where('is_active', true)->first();

        if (!$profile) {
            $profile = new WebsiteProfile();
            $profile->is_active = true;
        }

        $data = $request->validated();

        // Handle Main Logo Upload
        if ($request->hasFile('logo')) {
            if ($profile->logo && !str_starts_with($profile->logo, 'assets/')) {
                Storage::disk('public')->delete($profile->logo);
            }
            $path = $request->file('logo')->store('website/logo', 'public');
            $data['logo'] = 'storage/' . $path;
        }

        // Handle Logo Mini Upload
        if ($request->hasFile('logo_mini')) {
            if ($profile->logo_mini && !str_starts_with($profile->logo_mini, 'assets/')) {
                Storage::disk('public')->delete($profile->logo_mini);
            }
            $path = $request->file('logo_mini')->store('website/logo', 'public');
            $data['logo_mini'] = 'storage/' . $path;
        }

        // Handle Favicon Upload
        if ($request->hasFile('favicon')) {
            if ($profile->favicon && !str_starts_with($profile->favicon, 'assets/')) {
                Storage::disk('public')->delete($profile->favicon);
            }
            $path = $request->file('favicon')->store('website/logo', 'public');
            $data['favicon'] = 'storage/' . $path;
        }

        $profile->fill($data);
        $profile->save();

        return redirect()->back()->with('success', app()->getLocale() == 'en'
            ? 'Website profile updated successfully.'
            : 'Profil website berhasil diperbarui.');
    }
}
