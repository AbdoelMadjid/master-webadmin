@extends('layouts.index')
@section('styles')
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/custom/vis-timeline/vis-timeline.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
@endsection
@section('toolbar')
    @component('layouts.partials._toolbar')
        @slot('action')
            @include('partials.general._button-1')
            @include('partials.menus._menu-1')
        @endslot
    @endcomponent
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Row-->
            <div class="row g-5 g-xl-10 mb-xl-10">
                <!--begin::Col-->
                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                    <!--begin::Card widget 5-->
                    <x-widget-include-badge name="card._widget-5" />
                    @include('partials.widgets.card.__widgets-5')
                    <!--end::Card widget 5-->
                    <!--begin::Card widget 6-->
                    <x-widget-include-badge name="card._widget-6" />
                    @include('partials.widgets.card.__widgets-6')
                    <!--end::Card widget 6-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                    <!--begin::Card widget 7-->
                    <x-widget-include-badge name="card._widget-7" />
                    @include('partials.widgets.card.__widgets-7')
                    <!--end::Card widget 7-->
                    <!--begin::Card widget 8-->
                    <x-widget-include-badge name="card._widget-8" />
                    @include('partials.widgets.card.__widgets-8')
                    <!--end::Card widget 8-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-lg-12 col-xl-12 col-xxl-6 mb-5 mb-xl-0">
                    <!--begin::Chart widget 3-->
                    <x-widget-include-badge name="chart._widget-3" />
                    @include('partials.widgets.chart.__widgets-3')
                    <!--end::Chart widget 3-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row gy-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-xl-6 mb-xl-10">
                    <!--begin::Table widget 2-->
                    <x-widget-include-badge name="table._widget-2" />
                    @include('partials.widgets.table.__widgets-2')
                    <!--end::Table widget 2-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-6 mb-5 mb-xl-10">
                    <!--begin::Chart widget 4-->
                    <x-widget-include-badge name="chart._widget-4" />
                    @include('partials.widgets.chart.__widgets-4')
                    <!--end::Chart widget 4-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row gy-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-xl-4 mb-xl-10">
                    <!--begin::Engage widget 4-->
                    <x-widget-include-badge name="engage._widget-4" />
                    @include('partials.widgets.engage.__widgets-4')
                    <!--end::Engage widget 4-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-8 mb-5 mb-xl-10">
                    <!--begin::Table Widget 5-->
                    <x-widget-include-badge name="table._widget-5" />
                    @include('partials.widgets.table.__widgets-5')
                    <!--end::Table Widget 5-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row gy-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::List widget 5-->
                    <x-widget-include-badge name="list._widget-5" />
                    @include('partials.widgets.list.__widgets-5')
                    <!--end::List widget 5-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-8">
                    <!--begin::Table Widget 6-->
                    <x-widget-include-badge name="table._widget-6" />
                    @include('partials.widgets.table.__widgets-6')
                    <!--end::Table Widget 6-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Content container-->
    </div>
@endsection
@section('scripts')
    <!--begin::Vendors Javascript(used for this page only)-->
    @if (true)
        <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    @endif
    <script src="{{ asset('assets/plugins/custom/vis-timeline/vis-timeline.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    @if (true)
        <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
        <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
        <script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
        <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
        <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
    @endif
    <!--end::Custom Javascript-->
@endsection
