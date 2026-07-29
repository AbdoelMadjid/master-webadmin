<?php

namespace App\Http\Requests\PageConfig\MenuWebsite;

use Illuminate\Foundation\Http\FormRequest;

class MainNavigationRequest extends FormRequest
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
            'title' => 'required|string|max:150',
            'title_en' => 'nullable|string|max:150',
            'url' => 'required|string|max:255',
            'type' => 'required|string|in:link,mega_menu,dropdown,header',
            'parent_id' => 'nullable|exists:web_main_navigations,id',
            'mega_menu_column' => 'required|integer|min:1|max:4',
            'target' => 'required|string|in:_self,_blank',
            'icon' => 'nullable|string|max:100',
            'badge' => 'nullable|string|max:50',
            'badge_color' => 'nullable|string|max:30',
            'order' => 'required|integer|min:0',
            'is_active' => 'nullable|boolean',
            'is_external' => 'nullable|boolean',
        ];
    }

    /**
     * Custom attribute names
     */
    public function attributes(): array
    {
        return [
            'title' => app()->getLocale() == 'en' ? 'Navigation Title (ID)' : 'Judul Navigasi (ID)',
            'title_en' => app()->getLocale() == 'en' ? 'Navigation Title (EN)' : 'Judul Navigasi (EN)',
            'url' => app()->getLocale() == 'en' ? 'URL / Route Name' : 'URL / Nama Route',
            'type' => app()->getLocale() == 'en' ? 'Menu Type' : 'Tipe Menu',
            'parent_id' => app()->getLocale() == 'en' ? 'Parent Navigation' : 'Induk Navigasi',
            'mega_menu_column' => app()->getLocale() == 'en' ? 'Mega Menu Column' : 'Kolom Mega Menu',
            'target' => app()->getLocale() == 'en' ? 'Link Target' : 'Target Link',
            'order' => app()->getLocale() == 'en' ? 'Sort Order' : 'Urutan Tampil',
        ];
    }
}
