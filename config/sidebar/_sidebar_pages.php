<?php

return [

    'pages_menus' => [
        [
            'route'    => 'pages.general',
            'title'    => 'General',
            'icon'     => 'ki-duotone ki-parcel fs-2',
            'paths'    => 5,
            'children' => [
                [
                    'route'    => 'pages.general.user-profile',
                    'title'    => 'User Profile',
                    'children' => [
                        ['route' => 'pages.general.user-profile.overview', 'title' => 'Overview'],
                        ['route' => 'pages.general.user-profile.projects', 'title' => 'Projects'],
                        ['route' => 'pages.general.user-profile.campaigns', 'title' => 'Campaigns'],
                        ['route' => 'pages.general.user-profile.documents', 'title' => 'Documents'],
                        ['route' => 'pages.general.user-profile.followers', 'title' => 'Followers'],
                        ['route' => 'pages.general.user-profile.activity',  'title' => 'Activity'],
                    ],
                ],
                [
                    'route'    => 'pages.general.corporate',
                    'title'    => 'Corporate',
                    'children' => [
                        ['route' => 'pages.general.corporate.about',    'title' => 'About'],
                        ['route' => 'pages.general.corporate.team',     'title' => 'Our Team'],
                        ['route' => 'pages.general.corporate.contact',  'title' => 'Contact Us'],
                        ['route' => 'pages.general.corporate.licenses', 'title' => 'Licenses'],
                        ['route' => 'pages.general.corporate.sitemap',  'title' => 'Sitemap'],
                    ],
                ],
                [
                    'route'    => 'pages.general.careers',
                    'title'    => 'Careers',
                    'children' => [
                        ['route' => 'pages.general.careers.list', 'title' => 'Careers List'],
                        ['route' => 'pages.general.careers.apply', 'title' => 'Careers Apply'],
                    ],
                ],
                [
                    'route'    => 'pages.general.faq',
                    'title'    => 'FAQ',
                    'children' => [
                        ['route' => 'pages.general.faq.classic', 'title' => 'FAQ Classic'],
                        ['route' => 'pages.general.faq.extended', 'title' => 'FAQ Extended'],
                    ],
                ],
                [
                    'route'    => 'pages.general.blog',
                    'title'    => 'Blog',
                    'children' => [
                        ['route' => 'pages.general.blog.home', 'title' => 'Blog Home'],
                        ['route' => 'pages.general.blog.post', 'title' => 'Blog Post'],
                    ],
                ],

                [
                    'route'    => 'pages.general.pricing',
                    'title'    => 'Pricing',
                    'children' => [
                        ['route' => 'pages.general.pricing.column', 'title' => 'Column Pricing'],
                        ['route' => 'pages.general.pricing.table', 'title' => 'Table Pricing'],
                    ],
                ],
                [
                    'route'    => 'pages.general.social',
                    'title'    => 'Social',
                    'children' => [
                        ['route' => 'pages.general.social.feeds',     'title' => 'Feeds'],
                        ['route' => 'pages.general.social.activity',   'title' => 'Activity'],
                        ['route' => 'pages.general.social.followers', 'title' => 'Followers'],
                        ['route' => 'pages.general.social.settings',  'title' => 'Settings'],
                    ],
                ],

            ],
        ],
        [
            'route'    => 'pages.account',
            'title'    => 'Account',
            'icon'     => 'ki-duotone ki-user-square fs-2',
            'paths'    => 3,
            'children' => [
                ['route' => 'pages.account.overview',   'title' => 'Overview'],
                ['route' => 'pages.account.settings',   'title' => 'Settings'],
                ['route' => 'pages.account.security',   'title' => 'Security'],
                ['route' => 'pages.account.activity',   'title' => 'Activity'],
                ['route' => 'pages.account.billing',    'title' => 'Billing'],
                ['route' => 'pages.account.statements', 'title' => 'Statements'],
                ['route' => 'pages.account.referrals',  'title' => 'Referrals'],
                ['route' => 'pages.account.api-keys',   'title' => 'API Keys'],
                ['route' => 'pages.account.logs',       'title' => 'Logs & Notifcations'],
            ],
        ],
        [
            'route'    => 'pages.authentication',
            'title'    => 'Authentication',
            'icon'     => 'ki-duotone ki-user fs-2',
            'paths'    => 2,
            'children' => [
                [
                    'route'    => 'pages.authentication.layouts.corporate',
                    'title'    => 'Corporate Layout',
                    'children' => [
                        ['route' => 'pages.authentication.layouts.corporate.sign-in',       'title' => 'Sign-in', 'target' => '_blank'],
                        ['route' => 'pages.authentication.layouts.corporate.sign-up',       'title' => 'Sign-up', 'target' => '_blank'],
                        ['route' => 'pages.authentication.layouts.corporate.two-factor',    'title' => 'Two-Factor', 'target' => '_blank'],
                        ['route' => 'pages.authentication.layouts.corporate.reset-password', 'title' => 'Reset Password', 'target' => '_blank'],
                        ['route' => 'pages.authentication.layouts.corporate.new-password',  'title' => 'New Password', 'target' => '_blank'],
                    ],
                ],
                [
                    'route'    => 'pages.authentication.layouts.overlay',
                    'title'    => 'Overlay Layout',
                    'children' => [
                        ['route' => 'pages.authentication.layouts.overlay.sign-in',       'title' => 'Sign-in', 'target' => '_blank'],
                        ['route' => 'pages.authentication.layouts.overlay.sign-up',       'title' => 'Sign-up', 'target' => '_blank'],
                        ['route' => 'pages.authentication.layouts.overlay.two-factor',    'title' => 'Two-Factor', 'target' => '_blank'],
                        ['route' => 'pages.authentication.layouts.overlay.reset-password', 'title' => 'Reset Password', 'target' => '_blank'],
                        ['route' => 'pages.authentication.layouts.overlay.new-password',  'title' => 'New Password', 'target' => '_blank'],
                    ],
                ],
                [
                    'route'    => 'pages.authentication.layouts.creative',
                    'title'    => 'Creative Layout',
                    'children' => [
                        ['route' => 'pages.authentication.layouts.creative.sign-in',       'title' => 'Sign-in', 'target' => '_blank'],
                        ['route' => 'pages.authentication.layouts.creative.sign-up',       'title' => 'Sign-up', 'target' => '_blank'],
                        ['route' => 'pages.authentication.layouts.creative.two-factor',    'title' => 'Two-Factor', 'target' => '_blank'],
                        ['route' => 'pages.authentication.layouts.creative.reset-password', 'title' => 'Reset Password', 'target' => '_blank'],
                        ['route' => 'pages.authentication.layouts.creative.new-password',  'title' => 'New Password', 'target' => '_blank'],
                    ],
                ],
                [
                    'route'    => 'pages.authentication.layouts.fancy',
                    'title'    => 'Fancy Layout',
                    'children' => [
                        ['route' => 'pages.authentication.layouts.fancy.sign-in',       'title' => 'Sign-in', 'target' => '_blank'],
                        ['route' => 'pages.authentication.layouts.fancy.sign-up',       'title' => 'Sign-up', 'target' => '_blank'],
                        ['route' => 'pages.authentication.layouts.fancy.two-factor',    'title' => 'Two-Factor', 'target' => '_blank'],
                        ['route' => 'pages.authentication.layouts.fancy.reset-password', 'title' => 'Reset Password', 'target' => '_blank'],
                        ['route' => 'pages.authentication.layouts.fancy.new-password',  'title' => 'New Password', 'target' => '_blank'],
                    ],
                ],
                [
                    'route'    => 'pages.authentication.email',
                    'title'    => 'Email Templates',
                    'children' => [
                        ['route' => 'pages.authentication.email.welcome-message',        'title' => 'Welcome Message', 'target' => '_blank'],
                        ['route' => 'pages.authentication.email.reset-password',         'title' => 'Reset Password', 'target' => '_blank'],
                        ['route' => 'pages.authentication.email.subscription-confirmed', 'title' => 'Subscription Confirmed', 'target' => '_blank'],
                        ['route' => 'pages.authentication.email.card-declined',          'title' => 'Credit Card Declined', 'target' => '_blank'],
                        ['route' => 'pages.authentication.email.promo-1',                'title' => 'Promo 1', 'target' => '_blank'],
                        ['route' => 'pages.authentication.email.promo-2',                'title' => 'Promo 2', 'target' => '_blank'],
                        ['route' => 'pages.authentication.email.promo-3',                'title' => 'Promo 3', 'target' => '_blank'],
                    ],
                ],
                [
                    'route'    => 'pages.authentication.general',
                    'title'    => 'General',
                    'children' => [
                        ['route' => 'pages.authentication.general.welcome-message',      'title' => 'Welcome Message', 'target' => '_blank'],
                        ['route' => 'pages.authentication.general.verify-email',         'title' => 'Verify Email', 'target' => '_blank'],
                        ['route' => 'pages.authentication.general.coming-soon',          'title' => 'Coming Soon', 'target' => '_blank'],
                        ['route' => 'pages.authentication.general.password-confirmation', 'title' => 'Password Confirmation', 'target' => '_blank'],
                        ['route' => 'pages.authentication.general.account-deactivated',  'title' => 'Account Deactivation', 'target' => '_blank'],
                        ['route' => 'pages.authentication.general.error-404',            'title' => 'Error 404', 'target' => '_blank'],
                        ['route' => 'pages.authentication.general.error-500',            'title' => 'Error 500', 'target' => '_blank'],
                    ],
                ],
                ['route' => 'pages.authentication.extended.multi-steps-sign-up', 'title' => 'Multi-steps Sign-up', 'target' => '_blank'],
            ],
        ],
        [
            'route'    => 'pages.utilities',
            'title'    => 'Utilities',
            'icon'     => 'ki-duotone ki-abstract-7 fs-2',
            'paths'    => 21,
            'children' => [
                [
                    'route'    => 'pages.utilities.modals',
                    'title'    => 'Modals',
                    'children' => [
                        [
                            'route'    => 'pages.utilities.modals.general',
                            'title'    => 'General',
                            'children' => [
                                ['route' => 'pages.utilities.modals.general.invite-friends', 'title' => 'Invite Friends'],
                                ['route' => 'pages.utilities.modals.general.view-users',     'title' => 'View Users'],
                                ['route' => 'pages.utilities.modals.general.select-users',   'title' => 'Select Users'],
                                ['route' => 'pages.utilities.modals.general.upgrade-plan',   'title' => 'Upgrade Plan'],
                                ['route' => 'pages.utilities.modals.general.share-earn',     'title' => 'Share & Earn'],
                            ],
                        ],
                        [
                            'route'    => 'pages.utilities.modals.forms',
                            'title'    => 'Forms',
                            'children' => [
                                ['route' => 'pages.utilities.modals.forms.new-target',      'title' => 'New Target'],
                                ['route' => 'pages.utilities.modals.forms.new-card',        'title' => 'New Card'],
                                ['route' => 'pages.utilities.modals.forms.new-address',     'title' => 'New Address'],
                                ['route' => 'pages.utilities.modals.forms.create-api-key',  'title' => 'Create API Key'],
                                ['route' => 'pages.utilities.modals.forms.bidding',         'title' => 'Bidding'],
                            ],
                        ],
                        [
                            'route'    => 'pages.utilities.modals.wizards',
                            'title'    => 'Wizards',
                            'children' => [
                                ['route' => 'pages.utilities.modals.wizards.create-app',                'title' => 'Create App'],
                                ['route' => 'pages.utilities.modals.wizards.create-campaign',           'title' => 'Create Campaign'],
                                ['route' => 'pages.utilities.modals.wizards.create-account',            'title' => 'Create Business Acc'],
                                ['route' => 'pages.utilities.modals.wizards.create-project',            'title' => 'Create Project'],
                                ['route' => 'pages.utilities.modals.wizards.top-up-wallet',             'title' => 'Top Up Wallet'],
                                ['route' => 'pages.utilities.modals.wizards.offer-a-deal',              'title' => 'Offer a Deal'],
                                ['route' => 'pages.utilities.modals.wizards.two-factor-authentication', 'title' => 'Two Factor Auth'],
                            ],
                        ],
                        [
                            'route'    => 'pages.utilities.modals.search',
                            'title'    => 'Search',
                            'children' => [
                                ['route' => 'pages.utilities.modals.search.users',           'title' => 'Users'],
                                ['route' => 'pages.utilities.modals.search.select-location', 'title' => 'Select Location'],
                            ],
                        ],
                    ],
                ],
                [
                    'route'    => 'pages.utilities.search',
                    'title'    => 'Search',
                    'children' => [
                        ['route' => 'pages.utilities.search.horizontal',    'title' => 'Horizontal'],
                        ['route' => 'pages.utilities.search.vertical',      'title' => 'Vertical'],
                    ],
                ],
                [
                    'route'    => 'pages.utilities.wizards',
                    'title'    => 'Wizards',
                    'children' => [
                        ['route' => 'pages.utilities.wizards.horizontal',   'title' => 'Horizontal'],
                        ['route' => 'pages.utilities.wizards.vertical',     'title' => 'Vertical'],
                    ],
                ],
            ],
        ],
        [
            'route'    => 'pages.widgets',
            'title'    => 'Widgets',
            'icon'     => 'ki-duotone ki-design-frame fs-2',
            'paths'    => 2,
            'children' => [
                ['route' => 'pages.widgets.card', 'title' => 'Card', 'title_key' => 'cards'],
                ['route' => 'pages.widgets.chart', 'title' => 'Chart', 'title_key' => 'charts'],
                ['route' => 'pages.widgets.engage', 'title' => 'Engage', 'title_key' => 'engage'],
                ['route' => 'pages.widgets.list', 'title' => 'List', 'title_key' => 'lists'],
            ],
            'children_collapsed' => [
                ['route' => 'pages.widgets.maps', 'title' => 'Maps', 'title_key' => 'maps'],
                ['route' => 'pages.widgets.player', 'title' => 'Player', 'title_key' => 'player'],
                ['route' => 'pages.widgets.slider', 'title' => 'Slider', 'title_key' => 'sliders'],
                ['route' => 'pages.widgets.table', 'title' => 'Table', 'title_key' => 'tables'],
                ['route' => 'pages.widgets.timeline', 'title' => 'Timeline', 'title_key' => 'timeline'],
                ['route' => 'pages.widgets.video', 'title' => 'Video', 'title_key' => 'video'],
            ],

        ],
    ],
];
