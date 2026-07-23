<?php

namespace App\Http\Requests\ManajemenPengguna;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $userId = $this->route('user') ?? $this->input('id');
        $isCreate = empty($userId);

        return [
            'name'     => 'required|string|max:255',
            'email'    => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users', 'email')->ignore($userId),
            ],
            'password' => $isCreate ? 'required|string|min:8' : 'nullable|string|min:8',
            'roles'    => 'nullable|array',
            'roles.*'  => 'string|exists:roles,name',
            'avatar'   => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'     => 'Nama Pengguna wajib diisi.',
            'email.required'    => 'Alamat Email wajib diisi.',
            'email.email'       => 'Format email tidak valid.',
            'email.unique'      => 'Email sudah terdaftar.',
            'password.required' => 'Kata sandi wajib diisi untuk pengguna baru.',
            'password.min'      => 'Kata sandi minimal 8 karakter.',
        ];
    }
}
