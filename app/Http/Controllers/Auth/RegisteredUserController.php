<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => [
                'required',
                'confirmed',
                'min:9',
                function (string $attribute, mixed $value, \Closure $fail) {
                    if (! is_string($value)) {
                        return;
                    }

                    if (! preg_match('/[A-Z]/', $value)) {
                        $fail(__('auth.validation.password_uppercase'));
                    }

                    if (! preg_match('/\d/', $value)) {
                        $fail(__('auth.validation.password_number'));
                    }

                    if (! preg_match('/[^A-Za-z0-9]/', $value)) {
                        $fail(__('auth.validation.password_symbol'));
                    }
                },
            ],
        ], [
            'name.required' => __('auth.validation.name_required'),
            'name.string' => __('auth.validation.name_string'),
            'name.max' => __('auth.validation.name_max', ['max' => 255]),
            'email.required' => __('auth.validation.email_required'),
            'email.email' => __('auth.validation.email_email'),
            'email.max' => __('auth.validation.email_max', ['max' => 255]),
            'email.unique' => __('auth.validation.email_unique'),
            'password.required' => __('auth.validation.password_required'),
            'password.min' => __('auth.validation.password_min'),
            'password.confirmed' => __('auth.validation.password_confirmed'),
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('homepage', absolute: false));
    }
}

