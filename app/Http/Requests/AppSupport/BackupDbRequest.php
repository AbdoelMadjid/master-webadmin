<?php

namespace App\Http\Requests\AppSupport;

use Illuminate\Foundation\Http\FormRequest;

class BackupDbRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'backup_name' => 'nullable|string|max:100|regex:/^[a-zA-Z0-9_\-]+$/',
            'dump_type'   => 'required|in:full,structure_only',
            'table_scope' => 'required|in:all,custom',
            'tables'      => 'nullable|required_if:table_scope,custom|array',
            'tables.*'    => 'string',
        ];
    }

    /**
     * Custom messages for validation errors.
     */
    public function messages(): array
    {
        return [
            'backup_name.regex'           => 'Nama backup hanya boleh berisi huruf, angka, underscore (_), dan tanda hubung (-).',
            'dump_type.required'          => 'Tipe backup wajib dipilih.',
            'dump_type.in'                => 'Tipe backup tidak valid.',
            'table_scope.required'        => 'Cakupan tabel wajib dipilih.',
            'table_scope.in'              => 'Cakupan tabel tidak valid.',
            'tables.required_if'          => 'Pilih minimal satu tabel jika memilih opsi "Pilih Tabel Tertentu".',
            'tables.array'                => 'Format daftar tabel tidak valid.',
        ];
    }
}
