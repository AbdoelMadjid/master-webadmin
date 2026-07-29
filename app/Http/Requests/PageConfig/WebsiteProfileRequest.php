<?php

namespace App\Http\Requests\PageConfig;

use Illuminate\Foundation\Http\FormRequest;

class WebsiteProfileRequest extends FormRequest
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
            'name' => 'required|string|max:150',
            'name_en' => 'nullable|string|max:150',
            'established_year' => 'required|string|max:10',
            'logo' => 'nullable|image|mimes:png,jpg,jpeg,svg,webp|max:2048',
            'logo_mini' => 'nullable|image|mimes:png,jpg,jpeg,svg,webp|max:2048',
            'favicon' => 'nullable|image|mimes:png,jpg,jpeg,ico,svg,webp|max:1024',
            'address' => 'required|string|max:255',
            'address_en' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:50',
            'email' => 'nullable|email|max:100',
            'copyright_text' => 'nullable|string|max:255',
            'copyright_text_en' => 'nullable|string|max:255',
        ];
    }

    /**
     * Custom attributes
     */
    public function attributes(): array
    {
        return [
            'name' => app()->getLocale() == 'en' ? 'Website Name (ID)' : 'Nama Website / Kampus (ID)',
            'name_en' => app()->getLocale() == 'en' ? 'Website Name (EN)' : 'Nama Website / Kampus (EN)',
            'established_year' => app()->getLocale() == 'en' ? 'Established Year' : 'Tahun Berdiri / Aplikasi',
            'logo' => app()->getLocale() == 'en' ? 'Main Logo Image' : 'File Logo Utama',
            'logo_mini' => app()->getLocale() == 'en' ? 'Mini Logo Image' : 'File Logo Mini',
            'address' => app()->getLocale() == 'en' ? 'Address (ID)' : 'Alamat Kampus (ID)',
            'address_en' => app()->getLocale() == 'en' ? 'Address (EN)' : 'Alamat Kampus (EN)',
        ];
    }
}
