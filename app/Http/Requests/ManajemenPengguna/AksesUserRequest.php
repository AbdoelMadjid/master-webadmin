<?php

namespace App\Http\Requests\ManajemenPengguna;

use Illuminate\Foundation\Http\FormRequest;

class AksesUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'user_id'       => 'required|exists:users,id',
            'roles'         => 'nullable|array',
            'roles.*'       => 'string|exists:roles,name',
            'permissions'   => 'nullable|array',
            'permissions.*' => 'string|exists:permissions,name',
        ];
    }

    public function messages(): array
    {
        return [
            'user_id.required' => 'Pengguna wajib dipilih.',
            'user_id.exists'   => 'Pengguna tidak valid.',
        ];
    }
}
