@extends('layouts.index')
@section('styles')
    {{-- css_halaman_ini --}}
@endsection
@section('toolbar')
    @component('layouts.partials._toolbar')
        @slot('action')
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <!--begin::Secondary button-->
                <a href="/apps/customers/view" class="btn btn-sm fw-bold btn-secondary">Add Customer</a>
                <!--end::Secondary button-->
                <!--begin::Primary button-->
                <a href="javascript:void(0)" class="btn btn-sm fw-bold btn-primary">New Campaign</a>
                <!--end::Primary button-->
            </div>
        @endslot
    @endcomponent
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Row-->
            <div class="row gy-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-xxl-6">
                    <!--begin::Row-->
                    <div class="row gx-5 gx-xl-10">
                        <!--begin::Col-->
                        <div class="col-sm-6 mb-5 mb-xl-10">
                            <!--begin::List widget 1-->
                            <x-widget-include-badge name="list._widget-1" />
                            @include('partials.widgets.list.__widgets-1')
                            <!--end::List widget 1-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-sm-6 mb-5 mb-xl-10">
                            <!--begin::List widget 2-->
                            <x-widget-include-badge name="list._widget-2" />
                            @include('partials.widgets.list.__widgets-2')
                            <!--end::List widget 2-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Table widget 1-->
                    <x-widget-include-badge name="table._widget-1" />
                    @include('partials.widgets.table.__widgets-1')
                    <!--end::Table widget 1-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xxl-6 mb-5 mb-xl-10">
                    <!--begin::Chart widget 8-->
                    <x-widget-include-badge name="chart._widget-8" />
                    @include('partials.widgets.chart.__widgets-8')
                    <!--end::Chart widget 8-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row gy-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-xl-12 col-xxl-4">
                    <!--begin::Row-->
                    <div class="row gy-5 g-xl-10">
                        <!--begin::Col-->
                        <div class="col-md-6 col-xxl-12">
                            <!--begin::Card widget 1-->
                            <x-widget-include-badge name="card._widget-1" />
                            @include('partials.widgets.card.__widgets-1')
                            <!--end::Card widget 1-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 col-xxl-12">
                            <!--begin::List widget 3-->
                            <x-widget-include-badge name="list._widget-3" />
                            @include('partials.widgets.list.__widgets-3')
                            <!--end::List widget 3-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-12 col-xxl-8 mb-5 mb-xl-10">
                    <!--begin::Table Widget 3-->
                    <x-widget-include-badge name="table._widget-3" />
                    @include('partials.widgets.table.__widgets-3')
                    <!--end::Table Widget 3-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row gy-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Engage widget 7-->
                    <x-widget-include-badge name="engage._widget-7" />
                    @include('partials.widgets.engage.__widgets-7')
                    <!--end::Engage widget 7-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-8">
                    <!--begin::Timeline Widget 1-->
                    <x-widget-include-badge name="timeline._widget-1" />
                    @include('partials.widgets.timeline.__widgets-1')
                    <!--end::Timeline Widget 1-->
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
        <script src="{{ asset('assets/js/custom/utilities/modals/create-campaign.js') }}"></script>
    @endif
    <script src="{{ asset('assets/js/custom/utilities/modals/new-card.js') }}"></script>
    @if (true)
        <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
    @endif
    <!--end::Custom Javascript-->
@endsection
