<?php

namespace App\Http\Requests\AppSupport;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class MenuRequest extends FormRequest
{
    /**
     * Tentukan apakah pengguna diizinkan untuk membuat permintaan ini.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Dapatkan aturan validasi yang berlaku untuk permintaan ini.
     */
    public function rules(): array
    {
        return [
            'name'         => 'required|string|max:255',
            'url'          => 'required|string|max:255',
            'category'     => 'nullable|string|max:100',
            'icon'         => 'nullable|string|max:100',
            'paths'        => 'nullable|integer',
            'orders'       => 'nullable|integer',
            'main_menu_id' => 'nullable|exists:menus,id',
            'active'       => 'nullable|boolean',
        ];
    }

    /**
     * Pesan validasi kustom
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Nama menu wajib diisi.',
            'url.required'  => 'URL / Route menu wajib diisi.',
        ];
    }

    /**
     * Respon JSON untuk kegagalan validasi AJAX
     */
    protected function failedValidation(Validator $validator)
    {
        if ($this->wantsJson() || $this->ajax()) {
            throw new HttpResponseException(response()->json([
                'success' => false,
                'message' => 'Validasi gagal, silakan periksa input Anda.',
                'errors'  => $validator->errors(),
            ], 422));
        }

        parent::failedValidation($validator);
    }
}
