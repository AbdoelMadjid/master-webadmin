<?php

namespace App\Http\Requests\AppSupport;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class MenuBatchRequest extends FormRequest
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
            'batch_mode'                        => 'nullable|string|in:new,existing',
            'existing_main_menu_id'             => 'required_if:batch_mode,existing|nullable|exists:menus,id',
            'category'                          => 'nullable|string|max:100',
            'main_menu'                         => 'required_if:batch_mode,new|nullable|array',
            'main_menu.name'                    => 'required_if:batch_mode,new|nullable|string|max:255',
            'main_menu.title_en'               => 'nullable|string|max:255',
            'main_menu.url'                     => 'required_if:batch_mode,new|nullable|string|max:255',
            'main_menu.title_key'               => 'nullable|string|max:100',
            'main_menu.icon'                    => 'nullable|string|max:100',
            'main_menu.paths'                   => 'nullable|integer',
            'main_menu.orders'                  => 'nullable|integer',
            'main_menu.permissions'             => 'nullable|array',
            'main_menu.roles'                   => 'nullable|array',

            'sub_menus'                         => 'nullable|array',
            'sub_menus.*.name'                  => 'required|string|max:255',
            'sub_menus.*.title_en'             => 'nullable|string|max:255',
            'sub_menus.*.url'                   => 'required|string|max:255',
            'sub_menus.*.title_key'             => 'nullable|string|max:100',
            'sub_menus.*.icon'                  => 'nullable|string|max:100',
            'sub_menus.*.paths'                 => 'nullable|integer',
            'sub_menus.*.orders'                => 'nullable|integer',
            'sub_menus.*.permissions'           => 'nullable|array',
            'sub_menus.*.roles'                 => 'nullable|array',

            'sub_menus.*.sub_sub_menus'         => 'nullable|array',
            'sub_menus.*.sub_sub_menus.*.name'  => 'required|string|max:255',
            'sub_menus.*.sub_sub_menus.*.title_en' => 'nullable|string|max:255',
            'sub_menus.*.sub_sub_menus.*.url'   => 'required|string|max:255',
            'sub_menus.*.sub_sub_menus.*.title_key' => 'nullable|string|max:100',
            'sub_menus.*.sub_sub_menus.*.icon'  => 'nullable|string|max:100',
            'sub_menus.*.sub_sub_menus.*.paths' => 'nullable|integer',
            'sub_menus.*.sub_sub_menus.*.orders' => 'nullable|integer',
            'sub_menus.*.sub_sub_menus.*.permissions' => 'nullable|array',
            'sub_menus.*.sub_sub_menus.*.roles' => 'nullable|array',
        ];
    }

    /**
     * Pesan validasi kustom
     */
    public function messages(): array
    {
        return [
            'main_menu.name.required'                  => 'Nama menu utama wajib diisi.',
            'main_menu.url.required'                   => 'URL / Route menu utama wajib diisi.',
            'sub_menus.*.name.required'                => 'Nama sub menu wajib diisi.',
            'sub_menus.*.url.required'                 => 'URL / Route sub menu wajib diisi.',
            'sub_menus.*.sub_sub_menus.*.name.required' => 'Nama sub-sub menu wajib diisi.',
            'sub_menus.*.sub_sub_menus.*.url.required'  => 'URL / Route sub-sub menu wajib diisi.',
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
                'message' => 'Validasi gagal, silakan periksa input partai menu Anda.',
                'errors'  => $validator->errors(),
            ], 422));
        }

        parent::failedValidation($validator);
    }
}
