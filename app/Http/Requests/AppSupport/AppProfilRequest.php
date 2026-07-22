<?php

namespace App\Http\Requests\AppSupport;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class AppProfilRequest extends FormRequest
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
            'nama_aplikasi'      => 'required|string|max:255',
            'singkatan_aplikasi' => 'nullable|string|max:50',
            'tahun'              => 'required|string|max:10',
            'pembuat'            => 'required|string|max:255',
            'deskripsi'          => 'nullable|string',
            'active'             => 'nullable|boolean',
            'logo'               => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'logo_small'         => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'favicon'            => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,ico|max:1024',
        ];
    }

    /**
     * Pesan validasi kustom
     */
    public function messages(): array
    {
        return [
            'nama_aplikasi.required' => 'Nama aplikasi wajib diisi.',
            'tahun.required'         => 'Tahun rilis / footer wajib diisi.',
            'pembuat.required'       => 'Nama pembuat / developer wajib diisi.',
            'logo.image'             => 'Berkas logo utama harus berupa gambar.',
            'logo.max'               => 'Ukuran logo utama tidak boleh lebih dari 2MB.',
            'logo_small.image'       => 'Berkas logo ringkas (kotak) harus berupa gambar.',
            'logo_small.max'         => 'Ukuran logo ringkas tidak boleh lebih dari 2MB.',
            'favicon.image'          => 'Berkas favicon harus berupa gambar / ikon.',
            'favicon.max'            => 'Ukuran favicon tidak boleh lebih dari 1MB.',
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
