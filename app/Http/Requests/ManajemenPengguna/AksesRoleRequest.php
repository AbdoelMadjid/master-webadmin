<?php

namespace App\Http\Requests\ManajemenPengguna;

use Illuminate\Foundation\Http\FormRequest;

class AksesRoleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'role_id'       => 'required|exists:roles,id',
            'permissions'   => 'nullable|array',
            'permissions.*' => 'string|exists:permissions,name',
        ];
    }

    public function messages(): array
    {
        return [
            'role_id.required' => 'Role wajib dipilih.',
            'role_id.exists'   => 'Role tidak valid.',
        ];
    }
}
