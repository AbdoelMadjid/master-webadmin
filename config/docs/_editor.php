<?php

return [

    'menus_editor' => [
        [
            'route'    => 'docs.editors.ckeditor',
            'title'    => 'CKEditor',
            'children' => [
                ['route' => 'docs.editors.ckeditor.overview', 'title' => 'Overview'],
                ['route' => 'docs.editors.ckeditor.classic', 'title' => 'Classic'],
                ['route' => 'docs.editors.ckeditor.inline', 'title' => 'Inline'],
                ['route' => 'docs.editors.ckeditor.ballon', 'title' => 'Ballon'],
                ['route' => 'docs.editors.ckeditor.ballon-block', 'title' => 'Ballon Block'],
                ['route' => 'docs.editors.ckeditor.document', 'title' => 'Document'],
            ],
        ],
        [
            'route'    => 'docs.editors.quill',
            'title'    => 'Quill',
            'children' => [
                ['route' => 'docs.editors.quill.overview', 'title' => 'Overview'],
                ['route' => 'docs.editors.quill.basic', 'title' => 'Basic'],
                ['route' => 'docs.editors.quill.autosave', 'title' => 'Autosave'],
            ],
        ],
        [
            'route'    => 'docs.editors.tinymce',
            'title'    => 'TinyMCE',
            'children' => [
                ['route' => 'docs.editors.tinymce.overview', 'title' => 'Overview'],
                ['route' => 'docs.editors.tinymce.basic', 'title' => 'Basic'],
                ['route' => 'docs.editors.tinymce.plugins', 'title' => 'Plugin Addons'],
                ['route' => 'docs.editors.tinymce.hidden', 'title' => 'Hidden Menubar'],
            ],
        ],
    ],
];
