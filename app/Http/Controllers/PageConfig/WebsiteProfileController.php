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

        // Handle Social Links Input
        if ($request->has('social_links')) {
            $inputLinks = $request->input('social_links', []);
            $defaultMeta = WebsiteProfile::getDefaultSocialLinks();
            $processedLinks = [];

            foreach ($defaultMeta as $key => $meta) {
                $item = $inputLinks[$key] ?? [];
                $isActive = isset($item['is_active']) && ($item['is_active'] == '1' || $item['is_active'] === true || $item['is_active'] === 'on');
                $url = isset($item['url']) ? trim($item['url']) : '';

                $processedLinks[$key] = [
                    'name' => $meta['name'],
                    'icon' => $meta['icon'],
                    'url' => $url,
                    'is_active' => $isActive,
                ];
            }

            $data['social_links'] = $processedLinks;
        }

        $profile->fill($data);
        $profile->save();

        return redirect()->back()->with('success', app()->getLocale() == 'en'
            ? 'Website profile updated successfully.'
            : 'Profil website berhasil diperbarui.');
    }

    public function toggleSocialStatus(Request $request, $key)
    {
        $profile = WebsiteProfile::where('is_active', true)->first();
        if (!$profile) {
            $profile = WebsiteProfile::getActiveProfile();
            $profile->is_active = true;
        }

        $socialLinks = $profile->social_links ?? WebsiteProfile::getDefaultSocialLinks();
        $defaultMeta = WebsiteProfile::getDefaultSocialLinks();

        if (!isset($socialLinks[$key])) {
            if (isset($defaultMeta[$key])) {
                $socialLinks[$key] = $defaultMeta[$key];
            } else {
                return response()->json([
                    'success' => false,
                    'message' => app()->getLocale() == 'en' ? 'Social media platform not found.' : 'Platform sosial media tidak ditemukan.',
                ], 404);
            }
        }

        $socialLinks[$key]['is_active'] = !(!empty($socialLinks[$key]['is_active']));
        if (isset($defaultMeta[$key])) {
            $socialLinks[$key]['name'] = $defaultMeta[$key]['name'];
            $socialLinks[$key]['icon'] = $defaultMeta[$key]['icon'];
        }

        $profile->social_links = $socialLinks;
        $profile->save();

        $platformName = $socialLinks[$key]['name'] ?? ucfirst($key);
        $statusText = !empty($socialLinks[$key]['is_active'])
            ? (app()->getLocale() == 'en' ? 'enabled (visible)' : 'diaktifkan (ditampilkan)')
            : (app()->getLocale() == 'en' ? 'disabled (hidden)' : 'dinonaktifkan (disembunyikan)');

        return response()->json([
            'success' => true,
            'message' => app()->getLocale() == 'en'
                ? "Social media '{$platformName}' visibility successfully {$statusText}."
                : "Status visibilitas sosial media '{$platformName}' berhasil {$statusText}.",
            'is_active' => !empty($socialLinks[$key]['is_active']),
        ]);
    }
}
