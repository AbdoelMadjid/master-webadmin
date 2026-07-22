<div id="kt_docs_header" class="docs-header align-items-stretch mb-2 mb-lg-10">
    <!--begin::Container-->
    <div class="container">
        <div class="d-flex align-items-stretch justify-content-between py-3 h-75px">
            <!--begin::Aside toggle-->
            <div class="d-flex align-items-center d-lg-none ms-n2 me-1" title="Show aside menu">
                <div class="btn btn-icon btn-flex btn-active-color-primary" id="kt_docs_aside_toggle">
                    <i class="ki-duotone ki-abstract-14 fs-2"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>
            <!--end::Aside toggle-->

            <!--begin::Logo-->
            <div class="d-flex d-lg-none align-items-center flex-grow-1 flex-lg-grow-0 me-3 me-lg-15">
                <a href="index">
                    <img alt="Logo" src="assets/media/logos/metronic-small.svg" class="h-25px" />
                </a>
            </div>
            <!--end::Logo-->

            <!--begin::Wrapper-->
            <div class="d-flex align-items-center justify-content-between flex-lg-grow-1">
                <!--begin::Header title-->
                <div class="d-flex align-items-center" id="kt_docs_header_title">

                    <!--begin::Page title-->
                    <div class="docs-page-title d-flex flex-column flex-lg-row align-items-lg-center py-5 mb-lg-0"
                        data-kt-swapper="true" data-kt-swapper-mode="prepend"
                        data-kt-swapper-parent="{default: '#kt_docs_content_container', 'lg': '#kt_docs_header_title'}">

                        <!--begin::Title-->
                        <h1 class="d-flex align-items-center text-gray-900 my-1 fs-4">
                            Documentation

                            <a href="/docs/getting-started/changelog"
                                class="badge fw-semibold fs-9 px-2 ms-2 bg-body text-gray-900 text-hover-primary shadow-sm">
                                v8.3.2 </a>
                        </h1>
                        <!--end::Title-->

                        <!--begin::Separator-->
                        <span class="d-none d-lg-block bullet h-20px w-1px bg-secondary mx-4"></span>
                        <!--end::Separator-->

                        @php
                            /**
                             * Cari path breadcrumb dari menu aktif
                             */
                            function findActivePath(array $menu, array $trail = []): ?array
                            {
                                $trail[] = $menu;

                                // cek aktif (route atau href)
                                if (
                                    (isset($menu['route']) && request()->routeIs($menu['route'])) ||
                                    (isset($menu['href']) && url()->current() === $menu['href'])
                                ) {
                                    return $trail;
                                }

                                // cek children
                                if (!empty($menu['children']) && is_array($menu['children'])) {
                                    foreach ($menu['children'] as $child) {
                                        $found = findActivePath($child, $trail);
                                        if ($found) {
                                            return $found;
                                        }
                                    }
                                }

                                return null;
                            }

                            /**
                             * Loop semua config (misal $configs berisi daftar file + key menu)
                             */
                            function getActiveBreadcrumb(array $configs): array
                            {
                                foreach ($configs as $configFile => $menuKeys) {
                                    foreach ($menuKeys as $menuKey) {
                                        $menus = config("$configFile.$menuKey", []);
                                        foreach ($menus as $menu) {
                                            $path = findActivePath($menu);
                                            if ($path) {
                                                return $path;
                                            }
                                        }
                                    }
                                }
                                return [];
                            }

                            // Config daftar menu group
                            $configs = [
                                'docs._getting' => ['menus_getting'],
                                'docs._base' => ['menus_base'],
                                'docs._forms' => ['menus_forms'],
                                'docs._editor' => ['menus_editor'],
                                'docs._charts' => ['menus_charts'],
                                'docs._general' => ['menus_general'],
                                'docs._icons' => ['menus_icons'],
                                'docs._laravel' => ['menus_getting'],
                            ];

                            $breadcrumbTrail = getActiveBreadcrumb($configs);
                        @endphp

                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-6 my-1">
                            <!-- Home -->
                            <li class="breadcrumb-item text-gray-600">
                                <a href="/docs/index" class="text-gray-600 text-hover-primary">Home</a>
                            </li>

                            @foreach ($breadcrumbTrail as $item)
                                <li class="breadcrumb-item"><span class="bullet w-5px h-2px"></span></li>
                                <li class="breadcrumb-item {{ $loop->last ? 'text-gray-900' : 'text-gray-600' }}">
                                    {{ $item['title'] }}
                                </li>
                            @endforeach
                        </ul>

                        <!--end::Breadcrumb-->

                        {{-- <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-6 my-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-gray-600">
                                <a href="/html/metronic/docs/index" class="text-gray-600 text-hover-primary">
                                    Home </a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-gray-600">TinyMCE</li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-gray-900">
                                {{ trim($__env->yieldContent('title')) ?: getPageTitle() }}
                            </li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb--> --}}
                    </div>
                    <!--end::Page title-->
                </div>
                <!--end::Header title-->

                <!--begin::Toolbar-->
                <div class="d-flex align-items-center">
                    <!--begin::Search-->
                    <div id="kt_docs_search" class="d-flex align-items-center w-lg-200px me-2 me-lg-3"
                        data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter"
                        data-kt-search-layout="menu" data-kt-search-responsive="lg" data-kt-menu-trigger="auto"
                        data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">

                        <!--begin::Tablet and mobile search toggle-->
                        <div data-kt-search-element="toggle" class="d-flex d-lg-none align-items-center">
                            <div class="btn btn-icon btn-color-gray-700 btn-active-color-primary bg-body w-40px h-40px">
                                <i class="ki-duotone ki-magnifier fs-2"><span class="path1"></span><span
                                        class="path2"></span></i>
                            </div>
                        </div>
                        <!--end::Tablet and mobile search toggle-->

                        <!--begin::Form-->
                        <form data-kt-search-element="form"
                            class="d-none d-lg-block w-100 mb-5 mb-lg-0 position-relative" autocomplete="off">
                            <!--begin::Hidden input(Added to disable form autocomplete)-->
                            <input type="hidden" />
                            <!--end::Hidden input-->

                            <!--begin::Icon-->
                            <i
                                class="ki-duotone ki-magnifier fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-4"><span
                                    class="path1"></span><span class="path2"></span></i>
                            <!--end::Icon-->

                            <!--begin::Input-->
                            <input type="text" class="form-control border-gray-200 h-40px bg-body ps-13 fs-7"
                                name="search" value="" placeholder="Search..." data-kt-search-element="input" />
                            <!--end::Input-->

                            <!--begin::Spinner-->
                            <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                                data-kt-search-element="spinner">
                                <span class="spinner-border h-15px w-15px align-middle text-gray-500"></span>
                            </span>
                            <!--end::Spinner-->

                            <!--begin::Reset-->
                            <span
                                class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4"
                                data-kt-search-element="clear">
                                <i class="ki-duotone ki-cross fs-2 me-0"><span class="path1"></span><span
                                        class="path2"></span></i>
                            </span>
                            <!--end::Reset-->
                        </form>
                        <!--end::Form-->

                        <!--begin::Menu-->
                        <div data-kt-search-element="content"
                            class="menu menu-sub menu-sub-dropdown w-300px w-md-350px py-7 ps-7 pe-5 overflow-hidden">
                            <!--begin::Wrapper-->
                            <div data-kt-search-element="wrapper">
                                <!--begin::Search results-->
                                <div data-kt-search-element="results" class="d-none">
                                    <!--begin::Items-->
                                    <div class="scroll-y mh-200px mh-lg-350px">
                                        <!--begin::Item-->
                                        <a href="index" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Overview</span>
                                            <span class="fw-semibold fs-base text-muted">Product Documentation</span>
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="getting-started/setup" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Quick Setup</span>
                                            <span class="fw-semibold fs-base text-muted">Quick project setup</span>
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="getting-started/build/gulp" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Gulp build</span>

                                            <span class="fw-semibold fs-base text-muted">Automate & enhance your build
                                                workflow</span>
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="getting-started/build/webpack" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Webpack</span>
                                            <span class="fw-semibold fs-base text-muted">Module bundler for build
                                                process automation</span>
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="getting-started/multi-demo" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Multi-demo</span>
                                            <span class="fw-semibold fs-base text-muted">Multi-demo concept &
                                                usage</span>
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="getting-started/file-structure" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">File Structure</span>
                                            <span class="fw-semibold fs-base text-muted">Theme File Structure
                                                Organization</span>
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="getting-started/customization/template" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Template</span>
                                            <span class="fw-semibold fs-base text-muted">Template Structure</span>
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="getting-started/customization/sass" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">SASS</span>
                                            <span class="fw-semibold fs-base text-muted">SASS Structure &
                                                Customization</span>
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="getting-started/customization/javascript" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Javacript</span>
                                            <span class="fw-semibold fs-base text-muted">Javacript Structure &
                                                Customization</span>
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="getting-started/customization/no-jquery" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">No jQuery</span>

                                            <span class="fw-semibold fs-base text-muted">Remove
                                                jQuery from build</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="getting-started/customization/custom-bundles"
                                            data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Custom Bundles</span>

                                            <span class="fw-semibold fs-base text-muted">Create
                                                Custom Bundles</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="getting-started/dark-mode" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Dark Mode</span>

                                            <span class="fw-semibold fs-base text-muted">Dark Mode
                                                Setup for Layout & Components</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="getting-started/illustrations" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Illustrations</span>

                                            <span class="fw-semibold fs-base text-muted">Vector
                                                Illustrations</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="getting-started/video-tutorials" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Video Tutorials</span>

                                            <span class="fw-semibold fs-base text-muted">Youtube
                                                video tutorials</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="getting-started/rtl" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">RTL Version</span>

                                            <span class="fw-semibold fs-base text-muted">Theme &
                                                Bootstrap RTL Version Setup</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="getting-started/changelog" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Changelog</span>

                                            <span class="fw-semibold fs-base text-muted">Versions
                                                & Updates Information</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="getting-started/updates" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Updates</span>

                                            <span class="fw-semibold fs-base text-muted">General
                                                Update Guidelines</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="getting-started/references" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">References</span>

                                            <span class="fw-semibold fs-base text-muted">3rd-party
                                                Libraries & Resources</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="base/utilities" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Utilities</span>

                                            <span class="fw-semibold fs-base text-muted">Extended
                                                Bootstrap Utilities</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="base/helpers/flex-layouts" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Flex Layouts</span>

                                            <span class="fw-semibold fs-base text-muted">Custom
                                                Bootstrap Flex Layouts</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="base/helpers/text" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Text</span>

                                            <span class="fw-semibold fs-base text-muted">Extended
                                                Bootstrap Text Utilities</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="base/helpers/background" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Background</span>

                                            <span class="fw-semibold fs-base text-muted">Extended
                                                Bootstrap Background Utilities</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="base/helpers/borders" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Borders</span>

                                            <span class="fw-semibold fs-base text-muted">Extended
                                                Bootstrap Border Utilities</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="base/helpers/opacity" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Opacity</span>

                                            <span class="fw-semibold fs-base text-muted">Extended
                                                Bootstrap Opacity Utilities</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="base/forms/controls" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Controls</span>

                                            <span class="fw-semibold fs-base text-muted">Extended
                                                Bootstrap Form Controls</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="base/forms/checks-radios" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Checks & Radios</span>

                                            <span class="fw-semibold fs-base text-muted">Extended
                                                Bootstrap Checks & Radios</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="base/forms/advanced" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Advanced</span>

                                            <span class="fw-semibold fs-base text-muted">Advanced
                                                Bootstrap Form Controls</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="base/forms/input-group" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Input Group</span>

                                            <span class="fw-semibold fs-base text-muted">Extended
                                                Bootstrap Input Group</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="base/forms/floating-labels" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Floating Labels</span>

                                            <span class="fw-semibold fs-base text-muted">Extended
                                                Bootstrap Floating Labels</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="base/buttons" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Buttons</span>

                                            <span class="fw-semibold fs-base text-muted">Extended
                                                Bootstrap Buttons</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="base/indicator" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Indicator</span>

                                            <span class="fw-semibold fs-base text-muted">Custom
                                                Bootstrap Indicator Component</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="base/page-loading" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Page Loading</span>

                                            <span class="fw-semibold fs-base text-muted">Custom
                                                Bootstrap Page Loading Component</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="base/rotate" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Rotate</span>

                                            <span class="fw-semibold fs-base text-muted">Custom
                                                Bootstrap Rotate Component</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="base/tables" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Tables</span>

                                            <span class="fw-semibold fs-base text-muted">Extended
                                                Bootstrap Tables and DataTable</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="base/cards" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Cards</span>

                                            <span class="fw-semibold fs-base text-muted">Extended
                                                Bootstrap Cards</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="base/symbol" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Symbol</span>

                                            <span class="fw-semibold fs-base text-muted">Custom
                                                Bootstrap Symbol Component For Avatars and
                                                Images</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="base/badges" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Badges</span>

                                            <span class="fw-semibold fs-base text-muted">Custom
                                                Bootstrap Badge Component</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="base/hover" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Hover</span>

                                            <span class="fw-semibold fs-base text-muted">Custom
                                                hover effects</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="base/pulse" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Pulse</span>

                                            <span class="fw-semibold fs-base text-muted">Custom
                                                Bootstrap Pulse Component</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="base/bullets" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Bullets</span>

                                            <span class="fw-semibold fs-base text-muted">Custom
                                                Bootstrap Bullet Component</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="base/accordion" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Accordion</span>

                                            <span class="fw-semibold fs-base text-muted">Extended
                                                Bootstrap Accordion</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="base/carousel" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Carousel</span>

                                            <span class="fw-semibold fs-base text-muted">Extended
                                                Bootstrap Carousel</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="base/overlay" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Bootstrap
                                                Overlay</span>

                                            <span class="fw-semibold fs-base text-muted">Custom
                                                Bootstrap Overlay Component</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="base/separator" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Separator</span>

                                            <span class="fw-semibold fs-base text-muted">Custom
                                                Bootstrap Separator Component</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="base/underline" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Underline</span>

                                            <span class="fw-semibold fs-base text-muted">Custom
                                                Bootstrap Underline Component</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="base/tabs" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Tabs</span>

                                            <span class="fw-semibold fs-base text-muted">Extended
                                                Bootstrap Tabs</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="base/breadcrumb" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Breadcrumb</span>

                                            <span class="fw-semibold fs-base text-muted">Customized
                                                Bootstrap Breadcrumb</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="base/modal" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Modal</span>

                                            <span class="fw-semibold fs-base text-muted">Customized
                                                Bootstrap Modals</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="base/tooltips" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Tooltips</span>

                                            <span class="fw-semibold fs-base text-muted">Extended
                                                Bootstrap Tooltips</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="base/popovers" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Popovers</span>

                                            <span class="fw-semibold fs-base text-muted">Extended
                                                Bootstrap Popovers</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="base/pagination" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Pagination</span>

                                            <span class="fw-semibold fs-base text-muted">Extended
                                                Bootstrap Pagination</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="base/rating" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Rating</span>

                                            <span class="fw-semibold fs-base text-muted">Custom
                                                Bootstrap Rating Component</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="base/ribbon" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Ribbon</span>

                                            <span class="fw-semibold fs-base text-muted">Custom
                                                Bootstrap Ribbon Component</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="base/alerts" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Alerts</span>

                                            <span class="fw-semibold fs-base text-muted">Customized
                                                Bootstrap Alerts</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="base/toasts" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Toasts</span>

                                            <span class="fw-semibold fs-base text-muted">Extended
                                                Bootstrap Toasts</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="forms/autosize" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Autosize
                                                Textarea</span>

                                            <span class="fw-semibold fs-base text-muted">Autosize
                                                Textarea Javascript Plugin</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="forms/select2" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Select2</span>

                                            <span class="fw-semibold fs-base text-muted">Select2
                                                and Bootstrap Integration</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="forms/clipboard" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Clipboard</span>

                                            <span class="fw-semibold fs-base text-muted">Clipboard.js
                                                and Bootstrap integration</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="forms/flatpickr" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Flatpickr</span>

                                            <span class="fw-semibold fs-base text-muted">Flatpickr
                                                and Bootstrap Integration for Bootstrap Datepicker
                                                and Timepicker</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="forms/tempus-dominus-datepicker" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Datepicker</span>

                                            <span class="fw-semibold fs-base text-muted">Tempus
                                                Dominus Bootstrap Datepicker</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="forms/formrepeater/overview" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Form Repeater
                                                Overview</span>

                                            <span class="fw-semibold fs-base text-muted">Form
                                                Repeater and Bootstrap Integration</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="forms/formrepeater/basic" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Basic Example</span>

                                            <span class="fw-semibold fs-base text-muted">Form
                                                Repeater Basic Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="forms/formrepeater/nested" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Nested Example</span>

                                            <span class="fw-semibold fs-base text-muted">Form
                                                Repeater Nested Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="forms/formrepeater/advanced" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Nested Example</span>

                                            <span class="fw-semibold fs-base text-muted">Form
                                                Repeater Nested Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="forms/formvalidation/overview" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">FormValidation
                                                Overview</span>

                                            <span class="fw-semibold fs-base text-muted">FormValidation
                                                and Bootstrap Integration</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="forms/formvalidation/basic" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Basic Example</span>

                                            <span class="fw-semibold fs-base text-muted">FormValidation
                                                Basic Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="forms/formvalidation/advanced" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Advanced
                                                Example</span>

                                            <span class="fw-semibold fs-base text-muted">FormValidation
                                                Advanced Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="forms/daterangepicker" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Date Range
                                                Picker</span>

                                            <span class="fw-semibold fs-base text-muted">Bootstrap
                                                Datepicker & Timepicker Implementation with
                                                Daterangepicker</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="forms/tagify" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Tagify</span>

                                            <span class="fw-semibold fs-base text-muted">Bootstrap
                                                Tags Implementation with Tagify</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="forms/dialer" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Dialer</span>

                                            <span class="fw-semibold fs-base text-muted">Custom
                                                Bootstrap Dialer and Input Spinner Component</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="forms/nouislider" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">noUiSlider</span>

                                            <span class="fw-semibold fs-base text-muted">noUiSlider
                                                and Bootstrap Integration</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="forms/password-meter" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Password Meter</span>

                                            <span class="fw-semibold fs-base text-muted">Custom
                                                Bootstrap Password Meter & Strength Checker
                                                Component</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="forms/inputmask" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Inputmask</span>

                                            <span class="fw-semibold fs-base text-muted">Inputmask
                                                Plugin & Bootstrap Integration</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="forms/bootstrap-multiselectsplitter" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Bootstrap
                                                Multiselectsplitter</span>

                                            <span class="fw-semibold fs-base text-muted">Bootstrap
                                                Multiselectsplitter Integration</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="forms/bootstrap-select" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Bootstrap
                                                Select</span>

                                            <span class="fw-semibold fs-base text-muted">Bootstrap
                                                Select Integration</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="forms/google-recaptcha" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Google
                                                reCAPTCHA</span>

                                            <span class="fw-semibold fs-base text-muted">Google
                                                reCAPTCHA & Bootstrap Integration</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="forms/dropzonejs" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">DropzoneJS</span>

                                            <span class="fw-semibold fs-base text-muted">DropzoneJS
                                                & Bootstrap Integration</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="forms/image-input" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Image Input</span>

                                            <span class="fw-semibold fs-base text-muted">KTImageInput
                                                Custom Bootstrap Image Input Component with
                                                Thumbnail Preview</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="forms/bootstrap-maxlength" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Bootstrap
                                                Maxlength</span>

                                            <span class="fw-semibold fs-base text-muted">A visual
                                                feedback indicator for the maxlength
                                                attribute.</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="charts/amcharts/charts" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">AmCharts</span>

                                            <span class="fw-semibold fs-base text-muted">AmCharts
                                                & Bootstrap Integration</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="charts/amcharts/maps" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">AmCharts</span>

                                            <span class="fw-semibold fs-base text-muted">AmCharts
                                                Maps & Bootstrap Integration</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="charts/amcharts/stock-charts" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">AmCharts</span>

                                            <span class="fw-semibold fs-base text-muted">AmCharts
                                                Stock & Bootstrap Integration</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="charts/apexcharts" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">ApexCharts</span>

                                            <span class="fw-semibold fs-base text-muted">ApexCharts
                                                & Bootstrap Integration</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="charts/chartjs" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Chartjs</span>

                                            <span class="fw-semibold fs-base text-muted">Chartjs &
                                                Bootstrap Integration</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="charts/flotcharts/overview" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Overview</span>

                                            <span class="fw-semibold fs-base text-muted">Attractive
                                                JavaScript plotting for jQuery</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="charts/flotcharts/basic" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Basic Chart</span>

                                            <span class="fw-semibold fs-base text-muted">Flotcharts
                                                Basic Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="charts/flotcharts/axis" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Axis Labels</span>

                                            <span class="fw-semibold fs-base text-muted">Flotcharts
                                                Axis Labels Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="charts/flotcharts/tracking" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Tracking Curves</span>

                                            <span class="fw-semibold fs-base text-muted">Flotcharts
                                                Tracking Curves Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="charts/flotcharts/dynamic" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Dynamic Chart</span>

                                            <span class="fw-semibold fs-base text-muted">Flotcharts
                                                Dynamic Chart Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="charts/flotcharts/stack" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Stack Chart
                                                Controls</span>

                                            <span class="fw-semibold fs-base text-muted">Flotcharts
                                                Stack Chart Controls Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="charts/flotcharts/bar" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Bar Chart</span>

                                            <span class="fw-semibold fs-base text-muted">Flotcharts
                                                Bar Chart Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="charts/flotcharts/pie" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Pie Chart</span>

                                            <span class="fw-semibold fs-base text-muted">Flotcharts
                                                Pie Chart Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="charts/google-charts/overview" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Overview</span>

                                            <span class="fw-semibold fs-base text-muted">Google
                                                Charts Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="charts/google-charts/column" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Column Chart</span>

                                            <span class="fw-semibold fs-base text-muted">Google
                                                Column Charts Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="charts/google-charts/pie" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Pie Chart</span>

                                            <span class="fw-semibold fs-base text-muted">Google
                                                Pie Charts Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="charts/google-charts/line" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Line Chart</span>

                                            <span class="fw-semibold fs-base text-muted">Google
                                                Line Charts Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="editors/tinymce/overview" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Tinymce
                                                Overview</span>

                                            <span class="fw-semibold fs-base text-muted">Tinymce
                                                Editor and Bootstrap Integration</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="editors/tinymce/basic" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Basic TinyMCE</span>

                                            <span class="fw-semibold fs-base text-muted">Tinymce
                                                Basic Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="editors/tinymce/plugins" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">TinyMCE Plugins</span>

                                            <span class="fw-semibold fs-base text-muted">Tinymce
                                                Editor Plugins Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="editors/tinymce/hidden" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">TinyMCE Menubar</span>

                                            <span class="fw-semibold fs-base text-muted">TinyMCE
                                                with Hidden Menubar Example</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="editors/ckeditor/overview" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Overview</span>

                                            <span class="fw-semibold fs-base text-muted">CKEditor
                                                & Bootstrap Integration</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="editors/ckeditor/classic" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">CKEditor
                                                Classic</span>

                                            <span class="fw-semibold fs-base text-muted">CKEditor
                                                Classic Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="editors/ckeditor/inline" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">CKEditor Inline</span>

                                            <span class="fw-semibold fs-base text-muted">CKEditor
                                                Inline Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="editors/ckeditor/balloon" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">CKEditor Ballon</span>

                                            <span class="fw-semibold fs-base text-muted">CKEditor
                                                Ballon Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="editors/ckeditor/balloon-block" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">CKEditor Balloon
                                                Block</span>

                                            <span class="fw-semibold fs-base text-muted">CKEditor
                                                Balloon Block Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="editors/ckeditor/document" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">CKEditor
                                                Document</span>

                                            <span class="fw-semibold fs-base text-muted">CKEditor
                                                Document Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="editors/quill/overview" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Quill Overview</span>

                                            <span class="fw-semibold fs-base text-muted">Quill &
                                                Bootstrap Integration</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="editors/quill/basic" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Quill Basic</span>

                                            <span class="fw-semibold fs-base text-muted">Quill
                                                Basic Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="editors/quill/autosave" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Quill Autosave</span>

                                            <span class="fw-semibold fs-base text-muted">Quill
                                                Autosave Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/datatables/overview" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">DataTables
                                                Overview</span>

                                            <span class="fw-semibold fs-base text-muted">DataTables
                                                & Bootstrap Integration</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/datatables/basic" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">DataTables</span>

                                            <span class="fw-semibold fs-base text-muted">DataTables
                                                Basic Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/datatables/advanced" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">DataTables</span>

                                            <span class="fw-semibold fs-base text-muted">DataTables
                                                Advanced Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/datatables/buttons/export" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">DataTables
                                                Export</span>

                                            <span class="fw-semibold fs-base text-muted">DataTables
                                                Button Export</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/datatables/buttons/-column-visibility"
                                            data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0"></span>

                                            <span class="fw-semibold fs-base text-muted"></span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/datatables/server-side" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">DataTables</span>

                                            <span class="fw-semibold fs-base text-muted">DataTables
                                                Ajax Server Side Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/datatables/subtable" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">API</span>

                                            <span class="fw-semibold fs-base text-muted">DataTables
                                                Subtable Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/datatables/api" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">API</span>

                                            <span class="fw-semibold fs-base text-muted">DataTables
                                                API Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/draggable/overview" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Draggable
                                                Overview</span>

                                            <span class="fw-semibold fs-base text-muted">Draggable
                                                and Bootstrap Integration</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/draggable/cards" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Simple List</span>

                                            <span class="fw-semibold fs-base text-muted">Draggable
                                                Simple List Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/draggable/multiple-containers" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Multiple
                                                Containers</span>

                                            <span class="fw-semibold fs-base text-muted">Draggable
                                                Multiple Containers Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/draggable/swappable" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Swappable</span>

                                            <span class="fw-semibold fs-base text-muted">Draggable
                                                Swappable Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/draggable/restricted" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Restricted</span>

                                            <span class="fw-semibold fs-base text-muted">Draggable
                                                Restricted Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/fslightbox" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Fullscreen
                                                Lightbox</span>

                                            <span class="fw-semibold fs-base text-muted">Fullscreen
                                                Lightbox & Bootstrap Integration</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/fullcalendar/overview" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Fullcalendar
                                                Overview</span>

                                            <span class="fw-semibold fs-base text-muted">Fullcalendar
                                                & Bootstrap Integration</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/fullcalendar/basic" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Basic</span>

                                            <span class="fw-semibold fs-base text-muted">Fullcalendar
                                                Basic Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/fullcalendar/drag-n-drop" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Drag-n-Drop</span>

                                            <span class="fw-semibold fs-base text-muted">Fullcalendar
                                                Drag & Drop Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/fullcalendar/selectable" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Selectable
                                                Dates</span>

                                            <span class="fw-semibold fs-base text-muted">Fullcalendar
                                                Selectable Dates Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/fullcalendar/background-events" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Background
                                                Events</span>

                                            <span class="fw-semibold fs-base text-muted">Fullcalendar
                                                Background Events Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/fullcalendar/locales" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Localization</span>

                                            <span class="fw-semibold fs-base text-muted">Fullcalendar
                                                Localization Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/fullcalendar/timezone" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Timezone</span>

                                            <span class="fw-semibold fs-base text-muted">Fullcalendar
                                                Timezone Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/jkanban/overview" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">jKanban
                                                Overview</span>

                                            <span class="fw-semibold fs-base text-muted">jKanban &
                                                Bootstrap Integration</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/jkanban/basic" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Basic</span>

                                            <span class="fw-semibold fs-base text-muted">jKanban
                                                Basic Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/jkanban/color" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Colored</span>

                                            <span class="fw-semibold fs-base text-muted">jKanban
                                                Colored Items Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/jkanban/restricted" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Restricted</span>

                                            <span class="fw-semibold fs-base text-muted">jKanban
                                                Restricted Items Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/jkanban/rich" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Rich Content</span>

                                            <span class="fw-semibold fs-base text-muted">jKanban
                                                Rich Content Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/jkanban/fixed-height" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Fixed Height</span>

                                            <span class="fw-semibold fs-base text-muted">jKanban
                                                Basic Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/menu/overview" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Menu Overview</span>

                                            <span class="fw-semibold fs-base text-muted">Custom
                                                Bootstrap KTMenu component with Nested Dropdown &
                                                Accordion Submenu</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/menu/customization" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Menu
                                                Customization</span>

                                            <span class="fw-semibold fs-base text-muted">Custom
                                                Bootstrap KTMenu component with Nested Dropdown &
                                                Accordion Submenu</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/menu/advanced" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Menu Advanced</span>

                                            <span class="fw-semibold fs-base text-muted">Custom
                                                Bootstrap KTMenu component with Nested Dropdown &
                                                Accordion Submenu</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/menu/integration" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Integration</span>

                                            <span class="fw-semibold fs-base text-muted">Use
                                                customm Bootstrap KTMenu component with Select2,
                                                Tempus Dominus Datepicker, Daterangepicker and
                                                more</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/menu/api" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Menu Api</span>

                                            <span class="fw-semibold fs-base text-muted">Custom
                                                Bootstrap KTMenu component with Nested Dropdown &
                                                Accordion Submenu</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/typedjs" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Typed.js</span>

                                            <span class="fw-semibold fs-base text-muted">Typed.js
                                                & Bootstrap Integration</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/stepper" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Stepper</span>

                                            <span class="fw-semibold fs-base text-muted">Custom
                                                Bootstrap Stepper & Wizard Component</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/scroll" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Scroll</span>

                                            <span class="fw-semibold fs-base text-muted">Custom
                                                Bootstrap Scrollbar Component</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/cookie" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Cookie</span>

                                            <span class="fw-semibold fs-base text-muted">Custom
                                                Cookie Component</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/cookiealert" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Cookie Alert</span>

                                            <span class="fw-semibold fs-base text-muted">Cookie
                                                Alert Component</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/cropper" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Cropper</span>

                                            <span class="fw-semibold fs-base text-muted">Cropper.js
                                                & Bootstrap Integration</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/drawer" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Drawer</span>

                                            <span class="fw-semibold fs-base text-muted">Custom
                                                Bootstrap Offcanvas & Drawer Component</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/toastr" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Toastr</span>

                                            <span class="fw-semibold fs-base text-muted">Toastr &
                                                Bootstrap Integration</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/blockui" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">BlockUI</span>

                                            <span class="fw-semibold fs-base text-muted">BlockUI &
                                                Bootstrap Integration</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/scrolltop" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Scrolltop</span>

                                            <span class="fw-semibold fs-base text-muted">Custom
                                                Bootstrap Scrolltop Component</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/search" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Search</span>

                                            <span class="fw-semibold fs-base text-muted">Custom
                                                Bootstrap Quick Search Component</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/smooth-scroll" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Smooth Scroll</span>

                                            <span class="fw-semibold fs-base text-muted">Smooth
                                                Scroll and Bootstrap Integration</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/sticky" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Sticky</span>

                                            <span class="fw-semibold fs-base text-muted">Custom
                                                Bootstrap Sticky Component</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/swapper" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Swapper</span>

                                            <span class="fw-semibold fs-base text-muted">Custom
                                                Bootstrap Swapper Component</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/sweetalert" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Sweet Alert</span>

                                            <span class="fw-semibold fs-base text-muted">Beautiful
                                                Replacement for Javascript Popups</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/toggle" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Toggle</span>

                                            <span class="fw-semibold fs-base text-muted">Custom
                                                Bootstrap Toggle Component</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/vis-timeline/overview" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Overview</span>

                                            <span class="fw-semibold fs-base text-muted">Vis-timeline
                                                & Bootstrap Integration</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/vis-timeline/basic" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Basic</span>

                                            <span class="fw-semibold fs-base text-muted">Vis-timeline
                                                Basic Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/vis-timeline/style" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Custom Styling</span>

                                            <span class="fw-semibold fs-base text-muted">Vis-timeline
                                                Custom Styling Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/vis-timeline/group" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Group</span>

                                            <span class="fw-semibold fs-base text-muted">Vis-timeline
                                                Group Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/vis-timeline/interaction" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Interaction</span>

                                            <span class="fw-semibold fs-base text-muted">Vis-timeline
                                                Interaction Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/vis-timeline/template" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Templates</span>

                                            <span class="fw-semibold fs-base text-muted">Vis-timeline
                                                Templates Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/jstree/overview" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">jsTree Overview</span>

                                            <span class="fw-semibold fs-base text-muted">jsTree &
                                                Bootstrap Integration</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/jstree/basic" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Basic</span>

                                            <span class="fw-semibold fs-base text-muted">jsTree
                                                Basic Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/jstree/contextual" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Contextual Menu</span>

                                            <span class="fw-semibold fs-base text-muted">jsTree
                                                Contextual Menu Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/jstree/customicons" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Custom Icons</span>

                                            <span class="fw-semibold fs-base text-muted">jsTree
                                                Custom Icons Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/jstree/dragdrop" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Drag & Drop</span>

                                            <span class="fw-semibold fs-base text-muted">jsTree
                                                Drag & Drop Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/jstree/checkable" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Checkable Tree</span>

                                            <span class="fw-semibold fs-base text-muted">jsTree
                                                Checkable Tree Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/jstree/ajax" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Ajax Data</span>

                                            <span class="fw-semibold fs-base text-muted">jsTree
                                                Ajax Data Examples</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/lozad" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Lozad</span>

                                            <span class="fw-semibold fs-base text-muted">Highly
                                                performant, light and configurable lazy loader in
                                                pure JS with no dependencies for images, iframes and
                                                more, using IntersectionObserver API.</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/tiny-slider/overview" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Tiny Slider
                                                Overview</span>

                                            <span class="fw-semibold fs-base text-muted">Tiny
                                                slider for all purposes</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/tiny-slider/basic" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Basic</span>

                                            <span class="fw-semibold fs-base text-muted">Tiny
                                                Slider Basic Example</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/tiny-slider/advanced" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Custom Navs</span>

                                            <span class="fw-semibold fs-base text-muted">Tiny
                                                Slider Custom Navigation Example</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/tiny-slider/thumbnails" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Thumbnails</span>

                                            <span class="fw-semibold fs-base text-muted">Tiny
                                                Slider Thumbnails Example</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/countup" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">CountUp</span>

                                            <span class="fw-semibold fs-base text-muted">Lightweight
                                                JavaScript class that can be used to quickly create
                                                animations that display numerical data in a more
                                                interesting way.</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="icons/keenicons" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">KeenIcons</span>

                                            <span class="fw-semibold fs-base text-muted">In-house
                                                Designed Icons In 3 Styles</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="icons/duotune" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Duotune</span>

                                            <span class="fw-semibold fs-base text-muted">In-house
                                                Designed Duotune SVG Icon Set</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="icons/bootstrap-icons" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Bootstrap Icons</span>

                                            <span class="fw-semibold fs-base text-muted">Bootstrap
                                                Icons and Flaticon Integration</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="icons/font-awesome" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Fontawesome</span>

                                            <span class="fw-semibold fs-base text-muted">Fontawesome
                                                Icons and Flaticon Integration</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="icons/line-awesome" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Line Awesome</span>

                                            <span class="fw-semibold fs-base text-muted">Line
                                                Awesome Icons and Flaticon Integration</span>



                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="changelog" data-kt-searchable="true"
                                            class="d-none d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Changelog</span>

                                            <span class="fw-semibold fs-base text-muted">Changelog</span>



                                        </a>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Items-->
                                </div>
                                <!--end::Search results-->
                                <!--begin::Recently viewed-->
                                <div class="mb-0" data-kt-search-element="main">
                                    <!--begin::Heading-->
                                    <div class="d-flex flex-stack fw-semibold mb-2">
                                        <!--begin::Label-->
                                        <span class="text-muted fs-base me-2">Suggestions:</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Heading-->

                                    <!--begin::Items-->
                                    <div class="scroll-y mh-200px mh-lg-325px">
                                        <!--begin::Item-->
                                        <a href="getting-started/setup"
                                            class="d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Quick Setup</span>
                                            <span class="fw-semibold fs-base text-muted">Quick
                                                project setup</span>
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="getting-started/dark-mode"
                                            class="d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Dark Mode</span>
                                            <span class="fw-semibold fs-base text-muted">Dark Mode
                                                Setup for Layout & Components</span>
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="forms/select2"
                                            class="d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Select2</span>
                                            <span class="fw-semibold fs-base text-muted">Select2
                                                and Bootstrap Integration</span>
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="forms/flatpickr"
                                            class="d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Flatpickr</span>
                                            <span class="fw-semibold fs-base text-muted">Flatpickr
                                                and Bootstrap Integration for Bootstrap Datepicker
                                                and Timepicker</span>
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="forms/tempus-dominus-datepicker"
                                            class="d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Datepicker</span>
                                            <span class="fw-semibold fs-base text-muted">Tempus
                                                Dominus Bootstrap Datepicker</span>
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/datatables/server-side"
                                            class="d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">DataTables</span>
                                            <span class="fw-semibold fs-base text-muted">DataTables
                                                Ajax Server Side Examples</span>
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="general/fullcalendar/overview"
                                            class="d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Fullcalendar
                                                Overview</span>
                                            <span class="fw-semibold fs-base text-muted">Fullcalendar
                                                & Bootstrap Integration</span>
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="icons/keenicons"
                                            class="d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">KeenIcons</span>
                                            <span class="fw-semibold fs-base text-muted">In-house
                                                Designed Icons In 3 Styles</span>
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="icons/duotune"
                                            class="d-flex flex-column text-gray-900 text-hover-primary py-2">
                                            <span class="fw-bold fs-5 mb-0">Duotune</span>
                                            <span class="fw-semibold fs-base text-muted">In-house
                                                Designed Duotune SVG Icon Set</span>
                                        </a>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Items-->
                                </div>
                                <!--end::Recently viewed-->
                                <!--begin::Empty-->
                                <div data-kt-search-element="empty" class="text-center d-none">
                                    <!--begin::Icon-->
                                    <div class="pt-10 pb-5">
                                        <i class="ki-duotone ki-search-list fs-4x opacity-50"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span></i>
                                    </div>
                                    <!--end::Icon-->

                                    <!--begin::Message-->
                                    <div class="pb-15 fw-semibold">
                                        <h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
                                        <div class="text-muted fs-7">Please try again with a
                                            different query</div>
                                    </div>
                                    <!--end::Message-->
                                </div>
                                <!--end::Empty-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Search-->

                    <script>
                        (function() {
                            const searchContent = document.querySelector(
                                '#kt_docs_search [data-kt-search-element="content"]'
                            );

                            if (!searchContent) {
                                return;
                            }

                            const docsBase = '/docs';
                            const links = searchContent.querySelectorAll('a[href]');

                            links.forEach((link) => {
                                const href = (link.getAttribute('href') || '').trim();

                                if (!href ||
                                    href.startsWith('#') ||
                                    href.startsWith('/') ||
                                    href.startsWith('javascript:') ||
                                    href.startsWith('http://') ||
                                    href.startsWith('https://')) {
                                    return;
                                }

                                link.setAttribute('href', `${docsBase}/${href.replace(/^\/+/, '')}`);
                            });
                        })();
                    </script>

                    <!--begin::Downloads link-->
                    <a class="btn btn-flex btn-outline border-gray-200 btn-color-gray-700 btn-active-color-primary bg-body h-40px fw-bold px-4 px-lg-6 me-2 me-lg-3"
                        href="https://devs.keenthemes.com/metronic" target="_blank">
                        Downloads
                    </a>
                    <!--end::Downloads link-->

                    <!--begin::Preview link-->
                    <a class="btn btn-primary btn-flex h-40px border-0 fw-bold px-4 px-lg-6"
                        href="/dashboard">Preview</a>
                    <!--end::Preview link-->

                    <!--begin::Theme mode-->
                    <div class="d-flex align-items-center">

                        <!--begin::Menu toggle-->
                        <a href="javascript:void(0)" class="btn btn-icon btn-icon-muted btn-active-icon-primar ms-1"
                            data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent"
                            data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-night-day theme-light-show fs-1"><span
                                    class="path1"></span><span class="path2"></span><span
                                    class="path3"></span><span class="path4"></span><span
                                    class="path5"></span><span class="path6"></span><span
                                    class="path7"></span><span class="path8"></span><span
                                    class="path9"></span><span class="path10"></span></i> <i
                                class="ki-duotone ki-moon theme-dark-show fs-1"><span class="path1"></span><span
                                    class="path2"></span></i></a>
                        <!--begin::Menu toggle-->

                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                            data-kt-menu="true" data-kt-element="theme-mode-menu">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3 my-0">
                                <a href="javascript:void(0)" class="menu-link px-3 py-2" data-kt-element="mode"
                                    data-kt-value="light">
                                    <span class="menu-icon" data-kt-element="icon">
                                        <i class="ki-duotone ki-night-day fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                            <span class="path6"></span>
                                            <span class="path7"></span>
                                            <span class="path8"></span>
                                            <span class="path9"></span>
                                            <span class="path10"></span>
                                        </i>
                                    </span>
                                    <span class="menu-title">Light</span>
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3 my-0">
                                <a href="javascript:void(0)" class="menu-link px-3 py-2" data-kt-element="mode"
                                    data-kt-value="dark">
                                    <span class="menu-icon" data-kt-element="icon">
                                        <i class="ki-duotone ki-moon fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </span>
                                    <span class="menu-title">Dark</span>
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3 my-0">
                                <a href="javascript:void(0)" class="menu-link px-3 py-2" data-kt-element="mode"
                                    data-kt-value="system">
                                    <span class="menu-icon" data-kt-element="icon">
                                        <i class="ki-duotone ki-screen fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>
                                    </span>
                                    <span class="menu-title">System</span>
                                </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->

                    </div>
                    <!--end::Theme mode-->
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Wrapper-->
        </div>

        <div class="border-gray-300 border-bottom border-bottom-dashed"></div>
    </div>
    <!--end::Container-->
</div>
