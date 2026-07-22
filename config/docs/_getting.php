<?php

return [

    'menus_getting' => [
        ['route' => 'docs.index', 'title' => 'Operview'],
        ['route' => 'docs.getting-started.setup', 'title' => 'Quick Setup'],
        [
            'route'    => 'docs.getting-started.build',
            'title'    => 'Build Assets',
            'children' => [
                ['route' => 'docs.getting-started.build.gulp',  'title' => 'Gulp'],
                ['route' => 'docs.getting-started.build.webpack', 'title' => 'Webpack'],
            ],
        ],
        ['route' => 'docs.getting-started.multi-demo', 'title' => 'Multi Demo'],
        ['route' => 'docs.getting-started.file-structure', 'title' => 'File Structure'],
        [
            'route'    => 'docs.getting-started.customization',
            'title'    => 'Customization',
            'children' => [
                ['route' => 'docs.getting-started.customization.template', 'title' => 'Template'],
                ['route' => 'docs.getting-started.customization.sass', 'title' => 'Sass'],
                ['route' => 'docs.getting-started.customization.javascript', 'title' => 'Javascript'],
                ['route' => 'docs.getting-started.customization.no-jquery', 'title' => 'No jQuery'],
                ['route' => 'docs.getting-started.customization.custom-bundles', 'title' => 'Custom Bundles'],
            ],
        ],
        ['route' => 'docs.getting-started.video-tutorials', 'title' => 'Video Tutorials'],
        [
            'route' => 'docs.getting-started.dark-mode',
            'title' => 'Dark Mode',
            'badge' => ['text'  => 'New', 'class' => 'badge-light-success']
        ],
        ['route' => 'docs.getting-started.rtl', 'title' => 'RTL Version'],
        [
            'href'  => 'https://devs.keenthemes.com/metronic',
            'title' => 'Downloads',
            'target' => '_blank',
        ],
        ['route' => 'docs.getting-started.illustrations', 'title' => 'Illustrations'],
        ['route' => 'docs.getting-started.updates', 'title' => 'Updates'],
        ['route' => 'docs.getting-started.references', 'title' => 'References'],
        [
            'href'  => 'https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog',
            'title' => 'Licenses & FAQs',
            'target' => '_blank',
        ],
        [
            'route' => 'docs.getting-started.changelog',
            'title' => 'Changelog',
            'badge' => ['text'  => 'v8.3.2', 'class' => 'badge-changelog badge-light-danger']
        ],
    ],
];
