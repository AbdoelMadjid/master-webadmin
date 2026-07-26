<?php

namespace App\Http\Requests\AppSupport;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class ReferensiItemRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        $id = $this->route('id') ?? $this->id;
        $kategoriId = $this->input('kategori_id');

        return [
            'kategori_id' => 'required|exists:referensi_kategori,id',
            'kode' => [
                'required',
                'string',
                'max:50',
                Rule::unique('referensi_item', 'kode')
                    ->where(function ($query) use ($kategoriId) {
                        return $query->where('kategori_id', $kategoriId);
                    })
                    ->ignore($id),
            ],
            'nama' => 'required|string|max:100',
            'urutan' => 'nullable|integer|min:0',
            'keterangan' => 'nullable|string',
            'is_active' => 'nullable|boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'kategori_id.required' => 'Kategori referensi wajib dipilih.',
            'kategori_id.exists' => 'Kategori referensi tidak valid.',
            'kode.required' => 'Kode opsi/item wajib diisi.',
            'kode.unique' => 'Kode opsi ini sudah ada dalam kategori yang dipilih.',
            'nama.required' => 'Nama opsi/item wajib diisi.',
            'urutan.integer' => 'Urutan harus berupa angka bulat.',
            'urutan.min' => 'Urutan minimal 0.',
        ];
    }

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
