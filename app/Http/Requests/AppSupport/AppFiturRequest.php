<?php

namespace App\Http\Requests\AppSupport;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class AppFiturRequest extends FormRequest
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
            'active' => 'required|boolean',
        ];
    }

    /**
     * Pesan validasi kustom
     */
    public function messages(): array
    {
        return [
            'active.required' => 'Status fitur wajib diisi.',
            'active.boolean'  => 'Status fitur harus berupa boolean.',
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
