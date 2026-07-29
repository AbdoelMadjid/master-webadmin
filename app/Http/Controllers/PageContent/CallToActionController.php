<?php

namespace App\Http\Controllers\PageContent;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageContent\CallToActionRequest;
use App\Models\PageContent\CallToAction;
use Illuminate\Http\Request;

class CallToActionController extends Controller
{
    public function index()
    {
        if (!auth()->user()->can('read pagecontent/call-to-action') && !auth()->user()->hasRole('Super Admin')) {
            abort(403, app()->getLocale() == 'en' ? 'Unauthorized action.' : 'Anda tidak memiliki hak akses untuk halaman ini.');
        }

        $cta = CallToAction::first();

        if (!$cta) {
            $cta = CallToAction::create([
                'title' => 'Bergabunglah dengan Universitas Kami',
                'title_en' => 'Join Our University',
                'description' => 'Mulai perjalanan akademik Anda bersama kami dan raih masa depan gemilang dengan program pendidikan berkualitas.',
                'description_en' => 'Start your academic journey with us and achieve a brilliant future with quality education programs.',
                'primary_button_text' => 'Daftar Sekarang',
                'primary_button_text_en' => 'Apply Now',
                'primary_button_url' => 'website/apply-for-all-intake',
                'secondary_button_text' => 'Hubungi Kami',
                'secondary_button_text_en' => 'Contact Us',
                'secondary_button_url' => 'website/contacts',
                'is_active' => true,
            ]);
        }

        return view('pages.pagecontent.call-to-action', compact('cta'));
    }

    public function update(CallToActionRequest $request, $id = null)
    {
        if (!auth()->user()->can('update pagecontent/call-to-action') && !auth()->user()->hasRole('Super Admin')) {
            return response()->json([
                'success' => false,
                'message' => app()->getLocale() == 'en' ? 'Unauthorized action.' : 'Anda tidak memiliki hak akses untuk memperbarui data.',
            ], 403);
        }

        $cta = CallToAction::first();
        if (!$cta) {
            $cta = new CallToAction();
        }

        $validated = $request->validated();
        $validated['is_active'] = $request->has('is_active') ? (bool) $request->is_active : false;

        $cta->fill($validated);
        $cta->save();

        return response()->json([
            'success' => true,
            'message' => app()->getLocale() == 'en'
                ? 'Call to Action configuration updated successfully.'
                : 'Konfigurasi Call to Action berhasil disimpan.',
            'data' => $cta,
        ]);
    }

    public function toggleStatus(Request $request, $id = null)
    {
        if (!auth()->user()->can('update pagecontent/call-to-action') && !auth()->user()->hasRole('Super Admin')) {
            return response()->json([
                'success' => false,
                'message' => app()->getLocale() == 'en' ? 'Unauthorized action.' : 'Anda tidak memiliki hak akses untuk mengubah status.',
            ], 403);
        }

        $cta = CallToAction::first();
        if ($cta) {
            $cta->is_active = !$cta->is_active;
            $cta->save();
        }

        $statusText = $cta && $cta->is_active
            ? (app()->getLocale() == 'en' ? 'enabled (visible)' : 'diaktifkan (ditampilkan)')
            : (app()->getLocale() == 'en' ? 'disabled (hidden)' : 'dinonaktifkan (disembunyikan)');

        return response()->json([
            'success' => true,
            'message' => app()->getLocale() == 'en'
                ? "Call to Action section successfully {$statusText}."
                : "Status seksi Call to Action berhasil {$statusText}.",
            'is_active' => $cta ? $cta->is_active : false,
        ]);
    }
}
