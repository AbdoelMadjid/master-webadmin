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
            Skema Main Menu > Manajemen Pengguna
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
                    <span class="schema-pill">Skema Main Menu > Manajemen Pengguna</span>
                    <h2 class="fw-bold">Skema & Arsitektur Modul Manajemen Pengguna</h2>
                    <p class="schema-lead">
                        Penjelasan arsitektur data, alur controller, dan skema pemrograman untuk seluruh sub-modul Manajemen Pengguna: User, Role, Permission, Akses Role, Akses User, dan Reset Password.
                    </p>
                </div>
                <!--end::Hero-->

                <!--begin::Sub-Menu Nav Tabs-->
                <div class="card mb-6 border-0 shadow-none bg-transparent">
                    <div class="card-body p-0">
                        <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold flex-wrap gap-2" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link text-active-primary py-3 me-4 {{ $activeTab == 'user' ? 'active' : '' }}" href="{{ $currentUrl }}?tab=user">
                                    <i class="ki-duotone ki-profile-user fs-3 me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> User / Pengguna
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-active-primary py-3 me-4 {{ $activeTab == 'role' ? 'active' : '' }}" href="{{ $currentUrl }}?tab=role">
                                    <i class="ki-duotone ki-shield-tick fs-3 me-2"><span class="path1"></span><span class="path2"></span></i> Role
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-active-primary py-3 me-4 {{ $activeTab == 'permission' ? 'active' : '' }}" href="{{ $currentUrl }}?tab=permission">
                                    <i class="ki-duotone ki-key fs-3 me-2"><span class="path1"></span><span class="path2"></span></i> Permission
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-active-primary py-3 me-4 {{ $activeTab == 'akses-role' ? 'active' : '' }}" href="{{ $currentUrl }}?tab=akses-role">
                                    <i class="ki-duotone ki-lock-2 fs-3 me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i> Akses Role
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-active-primary py-3 me-4 {{ $activeTab == 'akses-user' ? 'active' : '' }}" href="{{ $currentUrl }}?tab=akses-user">
                                    <i class="ki-duotone ki-user-tick fs-3 me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> Akses User
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-active-primary py-3 me-4 {{ $activeTab == 'reset-password' ? 'active' : '' }}" href="{{ $currentUrl }}?tab=reset-password">
                                    <i class="ki-duotone ki-lock-2 fs-3 me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i> Reset Password
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--end::Sub-Menu Nav Tabs-->

                <!--begin::Tab Content Inclusion-->
                @include('pages.help.pemrograman.skema-main-menu.manajemen-pengguna.tabs._' . str_replace('-', '_', $activeTab))
                <!--end::Tab Content Inclusion-->
            </div>
        </div>
    </div>
@endsection
