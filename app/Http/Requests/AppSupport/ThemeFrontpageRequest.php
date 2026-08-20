<?php

namespace App\Http\Requests\AppSupport;

use Illuminate\Foundation\Http\FormRequest;

class ThemeFrontpageRequest extends FormRequest
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
        $id = $this->route('id') ?? $this->id;

        return [
            'name' => ['required', 'string', 'max:150'],
            'slug' => ['required', 'string', 'max:100', 'unique:theme_frontpages,slug,' . $id],
            'thumbnail' => ['nullable', 'string', 'max:255'],
            'view_path' => ['required', 'string', 'max:150'],
            'is_active' => ['nullable', 'boolean'],
        ];
    }
}