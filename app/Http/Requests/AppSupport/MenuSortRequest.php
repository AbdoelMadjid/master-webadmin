<?php

namespace App\Http\Requests\AppSupport;

use Illuminate\Foundation\Http\FormRequest;

class MenuSortRequest extends FormRequest
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
            'orders'          => 'required|array',
            'orders.*.id'     => 'required|integer|exists:menus,id',
            'orders.*.orders' => 'required|integer|min:0',
        ];
    }

    /**
     * Custom messages for validation errors.
     */
    public function messages(): array
    {
        return [
            'orders.required'          => 'Data urutan menu wajib dikirimkan.',
            'orders.array'             => 'Format urutan menu harus berupa array.',
            'orders.*.id.required'     => 'ID menu tidak boleh kosong.',
            'orders.*.id.exists'       => 'ID menu tidak ditemukan di database.',
            'orders.*.orders.required' => 'Nilai urutan tidak boleh kosong.',
        ];
    }
}
