<?php

namespace App\Http\Requests\User;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ProfilPenggunaAvatarRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'avatar_file' => 'required|image|mimes:jpeg,png,jpg,webp,svg|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'avatar_file.required' => 'File gambar avatar wajib dipilih.',
            'avatar_file.image'    => 'File harus berupa gambar.',
            'avatar_file.mimes'    => 'Format gambar yang diperbolehkan: jpeg, png, jpg, webp, svg.',
            'avatar_file.max'      => 'Ukuran gambar maksimal adalah 2MB.',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        if ($this->wantsJson() || $this->ajax()) {
            throw new HttpResponseException(response()->json([
                'success' => false,
                'message' => 'Validasi gagal, silakan periksa file gambar Anda.',
                'errors'  => $validator->errors(),
            ], 422));
        }

        parent::failedValidation($validator);
    }
}
