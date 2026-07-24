@extends('layouts.index')

@section('styles')
    @include('pages.help.pemrograman._schema-ui')
@endsection

@section('toolbar')
    @component('layouts.partials._toolbar')
        @slot('li_1')
            Help
        @endslot
        @slot('li_2')
            {{ __('help.skema_pemrograman') }}
        @endslot
        @slot('li_3')
            Skema Main Menu > App Support
        @endslot
    @endcomponent
@endsection

@section('content')
    @php
        $activeTab = request()->get('tab', 'menu');
        $validTabs = ['menu', 'app-profil', 'app-fitur', 'backup-db', 'data-login'];
        if (!in_array($activeTab, $validTabs)) {
            $activeTab = 'menu';
        }
        $currentUrl = url()->current();
    @endphp

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="schema-shell">
                <!--begin::Hero-->
                <div class="schema-hero mb-6">
                    <span class="schema-pill">{{ __('help.skema') }} > {{ __('help.app_support') }}</span>
                    <h2 class="fw-bold">{{ __('help.pages.skema.app-support.hero_title') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.skema.app-support.hero_lead') }}
                    </p>
                </div>
                <!--end::Hero-->

                <!--begin::Sub-Menu Nav Tabs-->
                <div class="card mb-6 border-0 shadow-none bg-transparent">
                    <div class="card-body p-0">
                        <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold flex-wrap gap-2" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link text-active-primary py-3 me-4 {{ $activeTab == 'menu' ? 'active' : '' }}" href="{{ $currentUrl }}?tab=menu">
                                     <i class="ki-duotone ki-element-11 fs-3 me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> {{ __('menu.menu_dinamis') }}
                                 </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-active-primary py-3 me-4 {{ $activeTab == 'app-profil' ? 'active' : '' }}" href="{{ $currentUrl }}?tab=app-profil">
                                     <i class="ki-duotone ki-picture fs-3 me-2"><span class="path1"></span><span class="path2"></span></i> {{ __('menu.app_profil') }}
                                 </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-active-primary py-3 me-4 {{ $activeTab == 'app-fitur' ? 'active' : '' }}" href="{{ $currentUrl }}?tab=app-fitur">
                                     <i class="ki-duotone ki-toggle-on fs-3 me-2"><span class="path1"></span><span class="path2"></span></i> {{ __('menu.app_fitur') }}
                                 </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-active-primary py-3 me-4 {{ $activeTab == 'backup-db' ? 'active' : '' }}" href="{{ $currentUrl }}?tab=backup-db">
                                     <i class="ki-duotone ki-cloud-add fs-3 me-2"><span class="path1"></span><span class="path2"></span></i> {{ __('menu.backup_db') }}
                                 </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-active-primary py-3 me-4 {{ $activeTab == 'data-login' ? 'active' : '' }}" href="{{ $currentUrl }}?tab=data-login">
                                     <i class="ki-duotone ki-chart-line fs-3 me-2"><span class="path1"></span><span class="path2"></span></i> {{ __('menu.data_login') }}
                                 </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--end::Sub-Menu Nav Tabs-->

                <!--begin::Tab Content Inclusion-->
                @include('pages.help.pemrograman.skema-main-menu.app-support.tabs._' . str_replace('-', '_', $activeTab))
                <!--end::Tab Content Inclusion-->
            </div>
        </div>
    </div>
@endsection
