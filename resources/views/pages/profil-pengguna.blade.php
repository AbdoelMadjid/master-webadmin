@extends('layouts.index')
@section('styles')
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
@endsection
@section('toolbar')
    @component('layouts.partials._toolbar')
        @slot('li_1')
            Pages
        @endslot
        @slot('li_2')
            Account
        @endslot
    @endcomponent
@endsection
@section('content')
    @php
        $activeTab = request()->query('tab', 'ringkasan');
        $tabMap = [
            'ringkasan'   => 'pages.profil.tabs._ringkasan',
            'overview'    => 'pages.profil.tabs._ringkasan',
            'pengaturan'  => 'pages.profil.tabs._pengaturan',
            'settings'    => 'pages.profil.tabs._pengaturan',
            'keamanan'    => 'pages.profil.tabs._keamanan',
            'security'    => 'pages.profil.tabs._keamanan',
            'aktivitas'   => 'pages.profil.tabs._aktivitas',
            'activity'    => 'pages.profil.tabs._aktivitas',
            'tagihan'     => 'pages.profil.tabs._tagihan',
            'billing'     => 'pages.profil.tabs._tagihan',
            'pernyataan'  => 'pages.profil.tabs._pernyataan',
            'statements'  => 'pages.profil.tabs._pernyataan',
            'referensi'   => 'pages.profil.tabs._referensi',
            'referrals'   => 'pages.profil.tabs._referensi',
            'kunci-api'   => 'pages.profil.tabs._kunci_api',
            'api-keys'    => 'pages.profil.tabs._kunci_api',
            'log'         => 'pages.profil.tabs._log',
            'logs'        => 'pages.profil.tabs._log',
        ];
        $tabPartial = $tabMap[$activeTab] ?? 'pages.profil.tabs._ringkasan';
    @endphp

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">
            <!--begin::Navbar-->
            <div class="card mb-5 mb-xl-10">
                <div class="card-body pt-9 pb-0">
                    <!--begin::Details-->
                    @include('pages.pages.account.partials.details')
                    <!--end::Details-->
                    <!--begin::Navs-->
                    @include('pages.profil.partials.navs', ['active' => $activeTab])
                    <!--end::Navs-->
                </div>
            </div>
            <!--end::Navbar-->

            @include($tabPartial)
        </div>
        <!--end::Content container-->
    </div>
@endsection

@section('scripts')
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/custom/pages/user-profile/general.js') }}"></script>
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/offer-a-deal/type.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/offer-a-deal/details.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/offer-a-deal/finance.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/offer-a-deal/complete.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/offer-a-deal/main.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>

    @if (in_array($activeTab, ['pengaturan', 'settings']))
        <script src="{{ asset('assets/js/custom/account/settings/signin-methods.js') }}"></script>
        <script src="{{ asset('assets/js/custom/account/settings/profile-details.js') }}"></script>
        <script src="{{ asset('assets/js/custom/account/settings/deactivate-account.js') }}"></script>
        <script src="{{ asset('assets/js/custom/utilities/modals/two-factor-authentication.js') }}"></script>
    @elseif (in_array($activeTab, ['keamanan', 'security']))
        <script src="{{ asset('assets/js/custom/account/settings/signin-methods.js') }}"></script>
        <script src="{{ asset('assets/js/custom/account/security/security-summary.js') }}"></script>
        <script src="{{ asset('assets/js/custom/account/security/license-usage.js') }}"></script>
        <script src="{{ asset('assets/js/custom/account/settings/deactivate-account.js') }}"></script>
    @elseif (in_array($activeTab, ['tagihan', 'billing']))
        <script src="{{ asset('assets/js/custom/account/billing/general.js') }}"></script>
        <script src="{{ asset('assets/js/custom/utilities/modals/new-card.js') }}"></script>
        <script src="{{ asset('assets/js/custom/utilities/modals/new-address.js') }}"></script>
    @endif
    <!--end::Custom Javascript-->
@endsection
