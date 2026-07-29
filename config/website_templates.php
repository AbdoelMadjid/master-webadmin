<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default Website Template
    |--------------------------------------------------------------------------
    |
    | The default fallback template used when no template is selected or
    | when an active template is missing a specific page view.
    |
    */
    'default' => env('DEFAULT_WEBSITE_TEMPLATE', 'unify-education'),

    /*
    |--------------------------------------------------------------------------
    | Registered Website Templates
    |--------------------------------------------------------------------------
    |
    | Each registered template defines its metadata, preview thumbnail,
    | author, supported data integrations, and view path.
    |
    */
    'templates' => [
        'unify-education' => [
            'key' => 'unify-education',
            'name' => 'Unify Education (Standard Default)',
            'name_id' => 'Unify Education (Standar Bawaan)',
            'description' => 'Academic & higher education layout featuring vibrant hero banners, course search, research highlights, and campus life sections.',
            'description_id' => 'Tampilan akademis & pendidikan tinggi dengan banner beranda, pencarian program, hibah penelitian, dan kehidupan kampus.',
            'version' => '1.0.0',
            'author' => 'Master WebAdmin Team',
            'thumbnail' => 'assets/img/logo/logo.png',
            'view_path' => 'website.templates.unify-education',
            'is_active_standard' => true,
            'supports' => [
                'top_navigation',
                'main_navigation',
                'footer_navigation',
                'slide_banner',
                'call_to_action',
                'website_features',
                'bilingual_support',
            ],
        ],
    ],
];
