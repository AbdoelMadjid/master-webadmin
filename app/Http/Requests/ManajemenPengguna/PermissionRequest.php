<?php

namespace App\Http\Requests\ManajemenPengguna;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PermissionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $permissionId = $this->route('permission') ?? $this->input('id');

        return [
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('permissions', 'name')->ignore($permissionId),
            ],
            'roles'   => 'nullable|array',
            'roles.*' => 'string|exists:roles,name',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nama Permission wajib diisi.',
            'name.unique'   => 'Nama Permission sudah ada di database.',
        ];
    }
}
