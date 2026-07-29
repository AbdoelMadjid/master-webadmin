<?php

namespace App\Http\Requests\PageContent;

use Illuminate\Foundation\Http\FormRequest;

class SlideBannerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title_prefix' => 'nullable|string|max:255',
            'title_prefix_en' => 'nullable|string|max:255',
            'title_highlight' => 'required|string|max:255',
            'title_highlight_en' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'description_en' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,webp,svg|max:5120',
            'image_url' => 'nullable|string|max:500',
            'button_text' => 'nullable|string|max:100',
            'button_text_en' => 'nullable|string|max:100',
            'button_url' => 'nullable|string|max:500',
            'order' => 'nullable|integer|min:0',
            'is_active' => 'nullable|boolean',
        ];
    }
}
