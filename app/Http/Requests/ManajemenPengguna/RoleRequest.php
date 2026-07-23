<?php

namespace App\Http\Requests\ManajemenPengguna;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RoleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $roleId = $this->route('role') ?? $this->input('id');

        return [
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('roles', 'name')->ignore($roleId),
            ],
            'permissions'   => 'nullable|array',
            'permissions.*' => 'string|exists:permissions,name',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nama Role wajib diisi.',
            'name.unique'   => 'Nama Role sudah ada di database.',
        ];
    }
}
