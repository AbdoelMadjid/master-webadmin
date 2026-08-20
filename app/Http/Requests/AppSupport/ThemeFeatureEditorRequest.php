<?php

namespace App\Http\Requests\AppSupport;

use Illuminate\Foundation\Http\FormRequest;

class ThemeFeatureEditorRequest extends FormRequest
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
            'theme_id' => ['nullable', 'exists:theme_frontpages,id'],
            'feature_file' => ['required', 'string', 'max:150'],
            'content' => ['required', 'string'],
        ];
    }

    /**
     * Get custom attributes for validator errors.
     */
    public function attributes(): array
    {
        return [
            'feature_file' => app()->getLocale() == 'en' ? 'Feature File' : 'File Feature',
            'content' => app()->getLocale() == 'en' ? 'Code Content' : 'Isi Kode',
        ];
    }
}
