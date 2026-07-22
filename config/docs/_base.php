<?php

return [

    'menus_base' => [
        ['route' => 'docs.base.utilities', 'title' => 'Utilities'],
        [
            'route'    => 'docs.base.helpers',
            'title'    => 'Helpers',
            'children' => [
                [
                    'route' => 'docs.base.helpers.flex-layouts',
                    'title' => 'Flex Layouts',
                    'badge' => ['text'  => 'Exclusive', 'class' => 'badge-exclusive badge-light-success', 'tooltip' => 'In-house component'],
                ],
                ['route' => 'docs.base.helpers.text', 'title' => 'Text'],
                ['route' => 'docs.base.helpers.background', 'title' => 'Background'],
                ['route' => 'docs.base.helpers.borders', 'title' => 'Borders'],
                ['route' => 'docs.base.helpers.opacity', 'title' => 'Opacity'],
            ],
        ],
        [
            'route'    => 'docs.base.forms',
            'title'    => 'Forms',
            'children' => [
                ['route' => 'docs.base.forms.controls', 'title' => 'Controls'],
                ['route' => 'docs.base.forms.checks-radios', 'title' => 'Checks & Radios'],
                ['route' => 'docs.base.forms.input-group', 'title' => 'Input Group'],
                ['route' => 'docs.base.forms.floating-labels', 'title' => 'Floating Labels'],
                ['route' => 'docs.base.forms.advanced', 'title' => 'Advanced'],
            ],
        ],
        ['route' => 'docs.base.buttons', 'title' => 'Buttons'],
        ['route' => 'docs.base.accordion', 'title' => 'Accordion'],
        ['route' => 'docs.base.alerts', 'title' => 'Alerts'],
        ['route' => 'docs.base.badges', 'title' => 'Badges'],
        ['route' => 'docs.base.breadcrumb', 'title' => 'Breadcrumb'],
        [
            'route' => 'docs.base.bullets',
            'title' => 'Bullets',
            'badge' => ['text'  => 'Exclusive', 'class' => 'badge-exclusive badge-light-success', 'tooltip' => 'In-house component']
        ],
        ['route' => 'docs.base.cards', 'title' => 'Cards'],
        ['route' => 'docs.base.carousel', 'title' => 'Carousel'],
        [
            'route' => 'docs.base.indicator',
            'title' => 'indicator',
            'badge' => ['text'  => 'Exclusive', 'class' => 'badge-exclusive badge-light-success', 'tooltip' => 'In-house component']
        ],
        [
            'route' => 'docs.base.page-loading',
            'title' => 'Page Loading',
            'badge' => ['text'  => 'Exclusive', 'class' => 'badge-exclusive badge-light-success', 'tooltip' => 'In-house component']
        ],
        ['route' => 'docs.base.modal', 'title' => 'Modal'],
        [
            'route' => 'docs.base.overlay',
            'title' => 'Overlay',
            'badge' => ['text'  => 'Exclusive', 'class' => 'badge-exclusive badge-light-success', 'tooltip' => 'In-house component']
        ],
        ['route' => 'docs.base.pagination', 'title' => 'Pagination'],
        ['route' => 'docs.base.popovers', 'title' => 'Popovers'],
        [
            'route' => 'docs.base.hover',
            'title' => 'Hover',
            'badge' => ['text'  => 'Exclusive', 'class' => 'badge-exclusive badge-light-success', 'tooltip' => 'In-house component']
        ],
        [
            'route' => 'docs.base.pulse',
            'title' => 'Pulse',
            'badge' => ['text'  => 'Exclusive', 'class' => 'badge-exclusive badge-light-success', 'tooltip' => 'In-house component']
        ],
        [
            'route' => 'docs.base.rating',
            'title' => 'Rating',
            'badge' => ['text'  => 'Exclusive', 'class' => 'badge-exclusive badge-light-success', 'tooltip' => 'In-house component']
        ],
        [
            'route' => 'docs.base.ribbon',
            'title' => 'Ribbon',
            'badge' => ['text'  => 'Exclusive', 'class' => 'badge-exclusive badge-light-success', 'tooltip' => 'In-house component']
        ],
        [
            'route' => 'docs.base.rotate',
            'title' => 'Rotate',
            'badge' => ['text'  => 'Exclusive', 'class' => 'badge-exclusive badge-light-success', 'tooltip' => 'In-house component']
        ],
        [
            'route' => 'docs.base.separator',
            'title' => 'Separator',
            'badge' => ['text'  => 'Exclusive', 'class' => 'badge-exclusive badge-light-success', 'tooltip' => 'In-house component']
        ],
        [
            'route' => 'docs.base.symbol',
            'title' => 'Symbol',
            'badge' => ['text'  => 'Exclusive', 'class' => 'badge-exclusive badge-light-success', 'tooltip' => 'In-house component']
        ],
        ['route' => 'docs.base.tables', 'title' => 'Tables'],
        ['route' => 'docs.base.tabs', 'title' => 'Tabs'],
        ['route' => 'docs.base.toasts', 'title' => 'Toasts'],
        ['route' => 'docs.base.tooltips', 'title' => 'Tooltips'],
        ['route' => 'docs.base.underline', 'title' => 'Underline'],
    ],
];
