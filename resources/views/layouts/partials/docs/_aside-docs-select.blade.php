<div class="docs-aside-select flex-column-auto px-7 pt-5 pt-lg-0 pb-lg-5" id="kt_docs_aside_select">
    <!--begin::Select wrapper-->
    <div>
        <!--begin::Toggle-->
        <button type="button" class="btn btn-flex border flex-stack btn-light w-100 px-4 py-3 rotate"
            data-kt-menu-trigger="click" data-kt-menu-placement="bottom">
            <span class="d-flex align-items-center">
                <span class="d-flex flex-center w-20px h-20px me-2">
                    <img src="assets/media/framework-logos/html.png" alt="" class="mw-100" />
                </span>

                <span class="menu-title">
                    @if (request()->is('docs/laravel/*'))
                        Laravel
                    @else
                        HTML
                    @endif
                </span>
            </span>

            <span class="d-flex flex-center rotate-180 ms-3">
                <i class="ki-duotone ki-down fs-4"></i> </span>
        </button>
        <!--end::Toggle-->

        <!--begin::Menu-->
        <div class="docs-aside-select-menu menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-active-bg fw-semibold py-3 mh-75 hover-scroll"
            data-kt-menu="true">

            @php
                $docsMenus = [
                    [
                        'title' => 'HTML',
                        'tooltip' => 'Metronic HTML theme documentation',
                        'url' => '/docs/index',
                        'icon' => 'html.png',
                        'active' =>
                            request()->is('docs') || (request()->is('docs/*') && !request()->is('docs/laravel/*')),
                        'target' => null,
                    ],
                    /* [
                        'title' => 'Vue',
                        'tooltip' => 'Vue Starter Kit',
                        'url' => 'https://preview.keenthemes.com/metronic8/vue/docs/#/doc-overview',
                        'icon' => 'vue.png',
                        'active' => false,
                        'target' => '_blank',
                    ],
                    [
                        'title' => 'React',
                        'tooltip' => 'React Starter Kit',
                        'url' => 'https://preview.keenthemes.com/metronic8/react/docs/quick-start',
                        'icon' => 'react.png',
                        'active' => false,
                        'target' => '_blank',
                    ],
                    [
                        'title' => 'Angular',
                        'tooltip' => 'Angular Starter Kit',
                        'url' => 'https://preview.keenthemes.com/metronic8/angular/docs/quick-start',
                        'icon' => 'angular.png',
                        'active' => false,
                        'target' => '_blank',
                    ], */
                    [
                        'title' => 'Laravel',
                        'tooltip' => 'Laravel Starter Kit',
                        'url' => '/docs/laravel/index',
                        'icon' => 'laravel.png',
                        'active' => request()->is('docs/laravel/*'),
                        'target' => null,
                    ],
                ];
            @endphp

            @foreach ($docsMenus as $menuLanguage)
                <div class="menu-item px-3" data-bs-toggle="tooltip" data-bs-placement="right"
                    title="{{ $menuLanguage['tooltip'] }}" data-bs-html="true" data-bs-delay-show="1000">

                    <a href="{{ $menuLanguage['url'] }}"
                        class="menu-link px-3 {{ $menuLanguage['active'] ? 'active' : '' }}"
                        {{ $menuLanguage['target'] ? 'target=' . $menuLanguage['target'] : '' }}>

                        <span class="d-flex flex-center w-20px h-20px me-2">
                            <img src="{{ 'assets/media/framework-logos/' . $menuLanguage['icon'] }}" class="w-100"
                                alt="">
                        </span>

                        <span class="menu-title">
                            {{ $menuLanguage['title'] }}
                        </span>

                    </a>
                </div>
            @endforeach
        </div>
        <!--end::Menu-->
    </div>
    <!--end::Select wrapper-->
</div>
