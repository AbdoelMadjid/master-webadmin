<?php

namespace App\Http\Requests\AppSupport;

use Illuminate\Foundation\Http\FormRequest;

class ThemeConfigRequest extends FormRequest
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
            'theme_frontpage_id' => 'required|exists:theme_frontpages,id',
            'logo_default_file'  => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'logo_sticky_file'   => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'logo_footer_file'   => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'logo_default'       => 'nullable|string|max:255',
            'logo_sticky'        => 'nullable|string|max:255',
            'logo_footer'        => 'nullable|string|max:255',
            'header_menu'        => 'nullable|array',
            'header_menu.*.title'=> 'required|string|max:150',
            'header_menu.*.url'  => 'required|string|max:255',
            'header_menu.*.target' => 'nullable|string|in:_self,_blank',
            'header_menu.*.feature_file' => 'nullable|string|max:150',
            'footer_menu'        => 'nullable|array',
            'footer_menu.*.title'=> 'required|string|max:150',
            'footer_menu.*.url'  => 'required|string|max:255',
            'footer_menu.*.target' => 'nullable|string|in:_self,_blank',
        ];
    }

    /**
     * Custom messages for validation errors
     */
    public function messages(): array
    {
        return [
            'theme_frontpage_id.required' => app()->getLocale() == 'en' ? 'Theme ID is required.' : 'ID Tema wajib diisi.',
            'theme_frontpage_id.exists'   => app()->getLocale() == 'en' ? 'Selected theme not found.' : 'Tema terpilih tidak ditemukan.',
            'logo_default_file.image'     => app()->getLocale() == 'en' ? 'Logo default must be an image file.' : 'Logo default harus berupa file gambar.',
            'logo_sticky_file.image'      => app()->getLocale() == 'en' ? 'Logo sticky must be an image file.' : 'Logo sticky harus berupa file gambar.',
            'logo_footer_file.image'      => app()->getLocale() == 'en' ? 'Logo footer must be an image file.' : 'Logo footer harus berupa file gambar.',
            'header_menu.*.title.required'=> app()->getLocale() == 'en' ? 'Header menu title is required.' : 'Judul menu header wajib diisi.',
            'header_menu.*.url.required'  => app()->getLocale() == 'en' ? 'Header menu URL is required.' : 'URL menu header wajib diisi.',
            'footer_menu.*.title.required'=> app()->getLocale() == 'en' ? 'Footer menu title is required.' : 'Judul menu footer wajib diisi.',
            'footer_menu.*.url.required'  => app()->getLocale() == 'en' ? 'Footer menu URL is required.' : 'URL menu footer wajib diisi.',
        ];
    }
}
