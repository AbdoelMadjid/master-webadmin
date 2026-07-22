<?php

return [

    'apps_menus' => [
        [
            'route'    => 'apps.projects',
            'title'    => 'Projects',
            'icon'     => 'ki-duotone ki-rocket fs-2',
            'paths'    => 2,
            'children' => [
                ['route' => 'apps.projects.list',     'title' => 'My Projects'],
                ['route' => 'apps.projects.view',     'title' => 'View Project'],
                ['route' => 'apps.projects.targets',  'title' => 'Targets'],
                ['route' => 'apps.projects.budget',   'title' => 'Budget'],
                ['route' => 'apps.projects.users',    'title' => 'Users'],
                ['route' => 'apps.projects.files',    'title' => 'Files'],
                ['route' => 'apps.projects.activity', 'title' => 'Activity'],
                ['route' => 'apps.projects.settings', 'title' => 'Settings'],
            ],
        ],

        [
            'route'    => 'apps.ecommerce',
            'title'    => 'eCommerce',
            'icon'     => 'ki-duotone ki-handcart fs-2',
            'paths'    => 4,
            'children' => [
                [
                    'route'    => 'apps.ecommerce.catalog',
                    'title'    => 'Catalog',
                    'dropdown' => true,
                    'children' => [
                        ['route' => 'apps.ecommerce.catalog.products',     'title' => 'Products'],
                        ['route' => 'apps.ecommerce.catalog.categories',   'title' => 'Categories'],
                        ['route' => 'apps.ecommerce.catalog.add-product',  'title' => 'Add Product'],
                        ['route' => 'apps.ecommerce.catalog.edit-product', 'title' => 'Edit Product'],
                        ['route' => 'apps.ecommerce.catalog.add-category', 'title' => 'Add Category'],
                        ['route' => 'apps.ecommerce.catalog.edit-category', 'title' => 'Edit Category'],
                    ],
                ],
                [
                    'route'    => 'apps.ecommerce.sales',
                    'title'    => 'Sales',
                    'children' => [
                        ['route' => 'apps.ecommerce.sales.listing',  'title' => 'Orders Listing'],
                        ['route' => 'apps.ecommerce.sales.details',  'title' => 'Order Details'],
                        ['route' => 'apps.ecommerce.sales.add-order', 'title' => 'Add Order'],
                        ['route' => 'apps.ecommerce.sales.edit-order', 'title' => 'Edit Order'],
                    ],
                ],
                [
                    'route'    => 'apps.ecommerce.customers',
                    'title'    => 'Customers',
                    'children' => [
                        ['route' => 'apps.ecommerce.customers.listing', 'title' => 'Customer Listing'],
                        ['route' => 'apps.ecommerce.customers.details', 'title' => 'Customer Details'],
                    ],
                ],
                [
                    'route'    => 'apps.ecommerce.reports',
                    'title'    => 'Reports',
                    'children' => [
                        ['route' => 'apps.ecommerce.reports.view',           'title' => 'Products Viewed'],
                        ['route' => 'apps.ecommerce.reports.sales',          'title' => 'Sales'],
                        ['route' => 'apps.ecommerce.reports.returns',        'title' => 'Returns'],
                        ['route' => 'apps.ecommerce.reports.customer-orders', 'title' => 'Customer Orders'],
                        ['route' => 'apps.ecommerce.reports.shipping',       'title' => 'Shipping'],
                    ],
                ],
                ['route' => 'apps.ecommerce.settings', 'title' => 'Settings'],
            ],
        ],

        [
            'route'    => 'apps.contacts',
            'title'    => 'Contacts',
            'icon'     => 'ki-duotone ki-phone fs-2',
            'paths'    => 2,
            'children' => [
                ['route' => 'apps.contacts.getting-started', 'title' => 'Getting Started'],
                ['route' => 'apps.contacts.add-contact',     'title' => 'Add Contact'],
                ['route' => 'apps.contacts.edit-contact',    'title' => 'Edit Contact'],
                ['route' => 'apps.contacts.view-contact',    'title' => 'View Contact'],
            ],
        ],

        [
            'route'    => 'apps.support-center',
            'title'    => 'Support Center',
            'icon'     => 'ki-duotone ki-chart fs-2',
            'paths'    => 2,
            'children' => [
                ['route' => 'apps.support-center.overview', 'title' => 'Overview'],
                [
                    'route'    => 'apps.support-center.tickets',
                    'title'    => 'Tickets',
                    'dropdown' => true,
                    'children' => [
                        ['route' => 'apps.support-center.tickets.list', 'title' => 'Tickets List'],
                        ['route' => 'apps.support-center.tickets.view', 'title' => 'Tickets View'],
                    ],
                ],
                [
                    'route'    => 'apps.support-center.tutorials',
                    'title'    => 'Tutorials',
                    'dropdown' => true,
                    'children' => [
                        ['route' => 'apps.support-center.tutorials.list', 'title' => 'Tutorials List'],
                        ['route' => 'apps.support-center.tutorials.post', 'title' => 'Tutorials Post'],
                    ],
                ],
                ['route' => 'apps.support-center.faq',      'title' => 'FAQ'],
                ['route' => 'apps.support-center.licenses', 'title' => 'Licenses'],
                ['route' => 'apps.support-center.contact',  'title' => 'Contact Us'],
            ],
        ],

        [
            'route'    => 'apps.user-management',
            'title'    => 'User Management',
            'icon'     => 'ki-duotone ki-shield-tick fs-2',
            'paths'    => 2,
            'children' => [
                [
                    'route'    => 'apps.user-management.users',
                    'title'    => 'Users',
                    'children' => [
                        ['route' => 'apps.user-management.users.list', 'title' => 'Users List'],
                        ['route' => 'apps.user-management.users.view', 'title' => 'View User'],
                    ],
                ],
                [
                    'route'    => 'apps.user-management.roles',
                    'title'    => 'Roles',
                    'children' => [
                        ['route' => 'apps.user-management.roles.list', 'title' => 'Roles List'],
                        ['route' => 'apps.user-management.roles.view', 'title' => 'View Role'],
                    ],
                ],
                ['route' => 'apps.user-management.permissions', 'title' => 'Permissions'],
            ],
        ],

        [
            'route'    => 'apps.customers',
            'title'    => 'Customers',
            'icon'     => 'ki-duotone ki-briefcase fs-2',
            'paths'    => 2,
            'children' => [
                ['route' => 'apps.customers.getting-started', 'title' => 'Getting Started'],
                ['route' => 'apps.customers.list',            'title' => 'Customer Listing'],
                ['route' => 'apps.customers.view',            'title' => 'Customer Details'],
            ],
        ],

        [
            'route'    => 'apps.subscriptions',
            'title'    => 'Subscriptions',
            'icon'     => 'ki-duotone ki-basket fs-2',
            'paths'    => 4,
            'children' => [
                ['route' => 'apps.subscriptions.getting-started', 'title' => 'Getting Started'],
                ['route' => 'apps.subscriptions.list',            'title' => 'Subscription List'],
                ['route' => 'apps.subscriptions.add',             'title' => 'Add Subscription'],
                ['route' => 'apps.subscriptions.view',            'title' => 'View Subscription'],
            ],
        ],

        [
            'route'    => 'apps.invoices',
            'title'    => 'Invoices Manager',
            'icon'     => 'ki-duotone ki-credit-cart fs-2',
            'paths'    => 2,
            'children' => [
                [
                    'route'    => 'apps.invoices.view',
                    'title'    => 'View Invoices',
                    'dropdown' => true,
                    'children' => [
                        ['route' => 'apps.invoices.view.invoice-1', 'title' => 'Invoice 1'],
                        ['route' => 'apps.invoices.view.invoice-2', 'title' => 'Invoice 2'],
                        ['route' => 'apps.invoices.view.invoice-3', 'title' => 'Invoice 3'],
                    ],
                ],
                ['route' => 'apps.invoices.create', 'title' => 'Create Invoice'],
            ],
        ],

        [
            'route'    => 'apps.file-manager',
            'title'    => 'File Manager',
            'icon'     => 'ki-duotone ki-file-added fs-2',
            'paths'    => 2,
            'children' => [
                ['route' => 'apps.file-manager.folders',   'title' => 'Folders'],
                ['route' => 'apps.file-manager.files',    'title' => 'Files'],
                ['route' => 'apps.file-manager.blank',    'title' => 'Blank Directory'],
                ['route' => 'apps.file-manager.settings', 'title' => 'Settings'],
            ],
        ],

        [
            'route'    => 'apps.inbox',
            'title'    => 'Inbox',
            'icon'     => 'ki-duotone ki-sms fs-2',
            'paths'    => 2,
            'children' => [
                ['route' => 'apps.inbox.listing', 'title' => 'Messages', 'badge' => ['label' => '3', 'class' => 'badge badge-success']],
                ['route' => 'apps.inbox.compose', 'title' => 'Compose'],
                ['route' => 'apps.inbox.reply',   'title' => 'View & Reply'],
            ],
        ],

        [
            'route'    => 'apps.chat',
            'title'    => 'Chat',
            'icon'     => 'ki-duotone ki-message-text-2 fs-2',
            'paths'    => 3,
            'children' => [
                ['route' => 'apps.chat.private', 'title' => 'Private Chat'],
                ['route' => 'apps.chat.group',   'title' => 'Group Chat'],
                ['route' => 'apps.chat.drawer',  'title' => 'Drawer Chat'],
            ],
        ],
        [
            'route'    => 'apps.calendar',
            'title'    => 'Calendar',
            'icon'     => 'ki-duotone ki-calendar-8 fs-2',
            'paths'    => 8,
        ],
    ],
];
