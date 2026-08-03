<?php

namespace App\Http\Requests\AppSupport;

use Illuminate\Foundation\Http\FormRequest;

class ChangelogRequest extends FormRequest
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
        $id = $this->route('id');

        return [
            'version'        => 'required|string|max:50|unique:changelogs,version,' . $id,
            'title'          => 'required|string|max:255',
            'title_id'       => 'nullable|string|max:255',
            'date'           => 'required|date',
            'type'           => 'required|string|in:major,minor,patch',
            'badge'          => 'required|string|max:50',
            'author'         => 'nullable|string|max:100',
            'description'    => 'required|string',
            'description_id' => 'nullable|string',
            'highlights_raw' => 'nullable|string',
            'commits_raw'    => 'nullable|string',
            'highlights'     => 'nullable|array',
            'commits'        => 'nullable|array',
        ];
    }
}
