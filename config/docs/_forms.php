<?php

return [
    'menus_forms' => [
        ['route' => 'docs.forms.autosize', 'title' => 'Autosize'],
        ['route' => 'docs.forms.bootstrap-maxlength', 'title' => 'Bootstrap Maxlength'],
        ['route' => 'docs.forms.clipboard', 'title' => 'Clipboard'],
        ['route' => 'docs.forms.tempus-dominus-datepicker', 'title' => 'Tempus Dominus Datepicker'],
        ['route' => 'docs.forms.flatpickr', 'title' => 'Flatpickr'],
        ['route' => 'docs.forms.daterangepicker', 'title' => 'Date Range Picker'],
        [
            'route' => 'docs.forms.dialer',
            'title' => 'Dialer',
            'badge' => ['text'  => 'Exclusive', 'class' => 'badge-exclusive badge-light-success', 'tooltip' => 'In-house component']
        ],
        ['route' => 'docs.forms.dropzonejs', 'title' => 'DropZoneJS'],
        [
            'route'    => 'docs.forms.validation',
            'title'    => 'Form Validation',
            'children' => [
                ['route' => 'docs.forms.validation.overview', 'title' => 'Overview'],
                ['route' => 'docs.forms.validation.basic', 'title' => 'Basic'],
                ['route' => 'docs.forms.validation.advanced', 'title' => 'Advanced'],
            ],
        ],
        [
            'route'    => 'docs.forms.repeater',
            'title'    => 'Form Repeater',
            'children' => [
                ['route' => 'docs.forms.repeater.overview', 'title' => 'Overview'],
                ['route' => 'docs.forms.repeater.basic', 'title' => 'Basic'],
                ['route' => 'docs.forms.repeater.nested', 'title' => 'Nested'],
                ['route' => 'docs.forms.repeater.advanced', 'title' => 'Advanced'],
            ],
        ],
        [
            'route' => 'docs.forms.image-input',
            'title' => 'Image Input',
            'badge' => ['text'  => 'Exclusive', 'class' => 'badge-exclusive badge-light-success', 'tooltip' => 'In-house component']
        ],
        ['route' => 'docs.forms.inputmask', 'title' => 'Inputmask'],
        ['route' => 'docs.forms.bootstrap-multiselectsplitter', 'title' => 'Multiselectsplitter'],
        ['route' => 'docs.forms.nouislider', 'title' => 'noUiSlider'],
        [
            'route' => 'docs.forms.password-meter',
            'title' => 'Password Meter',
            'badge' => ['text'  => 'Exclusive', 'class' => 'badge-exclusive badge-light-success', 'tooltip' => 'In-house component']
        ],
        ['route' => 'docs.forms.google-recaptcha', 'title' => 'reCAPTCHA'],
        ['route' => 'docs.forms.select2', 'title' => 'Select2'],
        ['route' => 'docs.forms.tagify', 'title' => 'Tagify'],
    ],
];
