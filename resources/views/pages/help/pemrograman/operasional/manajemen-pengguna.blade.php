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
            Operasional > Manajemen Pengguna
        @endslot
    @endcomponent
@endsection

@section('content')
    @php
        $activeTab = request()->get('tab', 'user');
        $validTabs = ['user', 'role', 'permission', 'akses-role', 'akses-user', 'reset-password'];
        if (!in_array($activeTab, $validTabs)) {
            $activeTab = 'user';
        }
        $currentUrl = url()->current();
    @endphp

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="schema-shell">
                <!--begin::Hero-->
                <div class="schema-hero mb-6">
                    <span class="schema-pill">{{ __('help.operasional') }} > {{ __('help.manajemen_pengguna') }}</span>
                    <h2 class="fw-bold">{{ __('help.pages.operasional.manajemen-pengguna.hero_title') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.operasional.manajemen-pengguna.hero_lead') }}
                    </p>
                </div>
                <!--end::Hero-->

                <!--begin::Sub-Menu Nav Tabs-->
                <div class="card mb-6 border-0 shadow-none bg-transparent">
                    <div class="card-body p-0">
                        <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold flex-wrap gap-2" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link text-active-primary py-3 me-4 {{ $activeTab == 'user' ? 'active' : '' }}" href="{{ $currentUrl }}?tab=user">
                                     <i class="ki-duotone ki-profile-user fs-3 me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> {{ __('menu.user') }}
                                 </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-active-primary py-3 me-4 {{ $activeTab == 'role' ? 'active' : '' }}" href="{{ $currentUrl }}?tab=role">
                                     <i class="ki-duotone ki-shield-tick fs-3 me-2"><span class="path1"></span><span class="path2"></span></i> {{ __('menu.role') }}
                                 </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-active-primary py-3 me-4 {{ $activeTab == 'permission' ? 'active' : '' }}" href="{{ $currentUrl }}?tab=permission">
                                     <i class="ki-duotone ki-key fs-3 me-2"><span class="path1"></span><span class="path2"></span></i> {{ __('menu.permission') }}
                                 </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-active-primary py-3 me-4 {{ $activeTab == 'akses-role' ? 'active' : '' }}" href="{{ $currentUrl }}?tab=akses-role">
                                     <i class="ki-duotone ki-lock-2 fs-3 me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i> {{ __('menu.akses_role') }}
                                 </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-active-primary py-3 me-4 {{ $activeTab == 'akses-user' ? 'active' : '' }}" href="{{ $currentUrl }}?tab=akses-user">
                                     <i class="ki-duotone ki-user-tick fs-3 me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> {{ __('menu.akses_user') }}
                                 </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-active-primary py-3 me-4 {{ $activeTab == 'reset-password' ? 'active' : '' }}" href="{{ $currentUrl }}?tab=reset-password">
                                     <i class="ki-duotone ki-lock-2 fs-3 me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i> {{ __('menu.reset_password') }}
                                 </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--end::Sub-Menu Nav Tabs-->

                <!--begin::Tab Content Inclusion-->
                @include('pages.help.pemrograman.operasional.tabs._' . str_replace('-', '_', $activeTab))
                <!--end::Tab Content Inclusion-->
            </div>
        </div>
    </div>
@endsection
