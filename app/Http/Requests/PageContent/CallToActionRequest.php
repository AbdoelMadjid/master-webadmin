<?php

namespace App\Http\Requests\PageContent;

use Illuminate\Foundation\Http\FormRequest;

class CallToActionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'title_en' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'description_en' => 'nullable|string',
            'primary_button_text' => 'nullable|string|max:100',
            'primary_button_text_en' => 'nullable|string|max:100',
            'primary_button_url' => 'nullable|string|max:500',
            'secondary_button_text' => 'nullable|string|max:100',
            'secondary_button_text_en' => 'nullable|string|max:100',
            'secondary_button_url' => 'nullable|string|max:500',
            'is_active' => 'nullable|boolean',
        ];
    }
}
