<?php

namespace App\Http\Requests\PageConfig\MenuWebsite;

use Illuminate\Foundation\Http\FormRequest;

class TopNavigationRequest extends FormRequest
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
            'parent_id' => 'nullable|exists:web_top_navigations,id',
            'target' => 'required|string|in:_self,_blank',
            'icon' => 'nullable|string|max:100',
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
            'parent_id' => app()->getLocale() == 'en' ? 'Parent Navigation' : 'Induk Navigasi',
            'target' => app()->getLocale() == 'en' ? 'Link Target' : 'Target Link',
            'order' => app()->getLocale() == 'en' ? 'Sort Order' : 'Urutan Tampil',
        ];
    }
}
