<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class ProfilPenggunaKeamananPasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'current_password' => ['required', 'current_password'],
            'password'         => [
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

                    if (! preg_match('/[a-z]/', $value)) {
                        $fail(__('auth.validation.password_lowercase'));
                    }

                    if (! preg_match('/\d/', $value)) {
                        $fail(__('auth.validation.password_number'));
                    }
                },
            ],
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'current_password'      => 'Password Saat Ini',
            'password'              => 'Password Baru',
            'password_confirmation' => 'Konfirmasi Password Baru',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'current_password.required'         => 'Password saat ini wajib diisi.',
            'current_password.current_password' => 'Password saat ini tidak sesuai dengan password akun Anda.',
            'password.required'                 => __('auth.validation.password_required'),
            'password.min'                      => __('auth.validation.password_min'),
            'password.confirmed'                => __('auth.validation.password_confirmed'),
        ];
    }
}
