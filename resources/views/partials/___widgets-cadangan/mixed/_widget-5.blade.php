<!--begin::Mixed Widget 5-->
@php
    $items = $items ?? [
        [
            'itemClass' => 'd-flex flex-stack mb-5',
            'image' => 'assets/media/svg/brand-logos/plurk.svg',
            'title' => 'Top Authors',
            'subtitle' => 'Ricky Hunt, Sandra Trepp',
            'badge' => '+82$',
        ],
        [
            'itemClass' => 'd-flex flex-stack mb-5',
            'image' => 'assets/media/svg/brand-logos/figma-1.svg',
            'title' => 'Top Sales',
            'subtitle' => 'PitStop Emails',
            'badge' => '+82$',
        ],
        [
            'itemClass' => 'd-flex flex-stack',
            'image' => 'assets/media/svg/brand-logos/vimeo.svg',
            'title' => 'Top Engagement',
            'subtitle' => 'KT.com',
            'badge' => '+82$',
            'titleWrapClass' => 'py-1',
        ],
    ];
@endphp
<div class="card card-xl-stretch mb-xl-8">
    <!--begin::Beader-->
    <div class="card-header border-0 py-5">
        @include('partials.widgets.mixed.components._header-title-subtitle', [
            'title' => 'Trends',
            'subtitle' => 'Latest trends',
        ])
        <div class="card-toolbar">
            <!--begin::Menu-->
            @include('partials.widgets.mixed.components._menu-trigger-category')
            <!--begin::Menu 3-->
            @include('partials.widgets.mixed.components._menu-payments')
            <!--end::Menu 3-->
            <!--end::Menu-->
        </div>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body d-flex flex-column">
        <!--begin::Chart-->
        <div class="mixed-widget-5-chart card-rounded-top" data-kt-chart-color="primary" style="height: 150px"></div>
        <!--end::Chart-->
        <!--begin::Items-->
        <div class="mt-5">
            @foreach ($items as $item)
                @include('partials.widgets.mixed.components._brand-list-item', [
                    'itemClass' => $item['itemClass'],
                    'sectionClass' => 'd-flex align-items-center me-2',
                    'symbolClass' => 'symbol symbol-50px me-3',
                    'symbolLabelTag' => 'div',
                    'symbolLabelClass' => 'symbol-label bg-light',
                    'image' => $item['image'],
                    'imageClass' => 'h-50',
                    'titleWrapClass' => $item['titleWrapClass'] ?? '',
                    'href' => $item['href'] ?? '#',
                    'title' => $item['title'],
                    'titleClass' => 'fs-6 text-gray-800 text-hover-primary fw-bold',
                    'subtitle' => $item['subtitle'],
                    'subtitleClass' => 'fs-7 text-muted fw-semibold mt-1',
                    'badge' => $item['badge'],
                    'badgeClass' => 'badge badge-light fw-semibold py-4 px-3',
                ])
            @endforeach
        </div>
        <!--end::Items-->
    </div>
    <!--end::Body-->
</div>
<!--end::Mixed Widget 5-->
