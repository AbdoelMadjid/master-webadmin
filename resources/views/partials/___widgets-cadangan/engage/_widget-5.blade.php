@include('partials.widgets.engage._widget-3', [
    'widgetNumber' => 5,
    'cardClass' => 'card bg-primary h-xl-100',
    'titleHtml' => 'How are you feeling today?<span class="fw-bolder">Here we are to Help</span>',
    'illustrationStyle' => "background-image:url('assets/media/svg/illustrations/easy/6.svg')",
    'primaryButton' => [
        'text' => 'Psychologist',
        'class' => 'btn btn-sm btn-success btn-color-white me-2',
        'modal_target' => '#kt_modal_invite_friends',
    ],
    'secondaryButton' => [
        'text' => 'Nurse',
        'class' => 'btn btn-sm bg-white btn-color-white bg-opacity-20',
        'href' => 'pages/careers/list.html',
    ],
])
