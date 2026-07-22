<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $locale = $request->string('locale')->toString();

        if (in_array($locale, ['en', 'id'], true)) {
            $request->session()->put('locale', $locale);
        }

        $request->authenticate();

        $request->session()->regenerate();

        if (in_array($locale, ['en', 'id'], true)) {
            $request->session()->put('locale', $locale);
        }

        return redirect()->intended(route('homepage', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $locale = $request->session()->get('locale');

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if (in_array($locale, ['en', 'id'], true)) {
            $request->session()->put('locale', $locale);
        }

        return redirect('/');
    }
}

