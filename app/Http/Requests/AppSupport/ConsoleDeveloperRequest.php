<?php

namespace App\Http\Requests\AppSupport;

use Illuminate\Foundation\Http\FormRequest;

class ConsoleDeveloperRequest extends FormRequest
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
        $actionType = $this->input('request_type');

        if ($actionType === 'git') {
            return [
                'action'         => 'required|string|in:status,pull,push,commit_push,create_tag,force_tag,view_tags,delete_tag,reset_local,sync_origin,switch_branch,list_branches,log,auto_release,fetch_all,git_diff',
                'commit_message' => 'required_if:action,commit_push,auto_release|nullable|string|max:255',
                'tag_name'       => 'required_if:action,create_tag,force_tag,delete_tag,auto_release|nullable|string|max:50',
                'branch_name'    => 'required_if:action,switch_branch|nullable|string|max:100',
            ];
        }

        if ($actionType === 'maintenance') {
            return [
                'action' => 'required|string|in:clear_cache,optimize,storage_link,post_clone_init,migrate,seed_menu,migrate_fresh_seed',
            ];
        }

        if ($actionType === 'generator') {
            return [
                'subfolder'      => 'required|string|max:100|regex:/^[a-zA-Z0-9_-]+$/',
                'feature'        => 'required|string|max:100|regex:/^[a-zA-Z0-9_-]+$/',
                'generator_type' => 'required|string|in:full,model,controller,request,blade',
            ];
        }

        if ($actionType === 'file_utility') {
            return [
                'utility_type' => 'required|string|in:add_prefix,remove_prefix,html_to_blade',
                'target_path'  => 'required|string|max:255',
                'prefix'       => 'required_if:utility_type,add_prefix,remove_prefix|nullable|string|max:50',
            ];
        }

        return [];
    }

    /**
     * Custom validation messages.
     */
    public function messages(): array
    {
        return [
            'action.required'         => 'Aksi wajib dipilih.',
            'commit_message.required_if'=>'Pesan commit wajib diisi saat melakukan Commit & Push.',
            'tag_name.required_if'    => 'Nama versi tag wajib diisi.',
            'branch_name.required_if' => 'Nama branch tujuan wajib diisi.',
            'subfolder.required'      => 'Nama subfolder wajib diisi (contoh: MasterData, AppSupport).',
            'feature.required'        => 'Nama fitur/model wajib diisi.',
            'subfolder.regex'         => 'Nama subfolder hanya boleh huruf, angka, strip, dan underscore.',
            'feature.regex'           => 'Nama fitur hanya boleh huruf, angka, strip, dan underscore.',
            'target_path.required'    => 'Path folder target wajib diisi.',
            'prefix.required_if'      => 'Teks prefix wajib diisi untuk penambahan/penghapusan prefix massal.',
        ];
    }
}
