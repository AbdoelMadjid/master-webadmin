@extends('layouts.index')
@section('toolbar')
    @component('layouts.partials._toolbar')
        @slot('li_1')
            Pages
        @endslot
        @slot('li_2')
            Widgets
        @endslot
    @endcomponent
@endsection
@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="card">
                <div class="card-header border-0 pt-6">
                    <h3 class="card-title fw-bold">Widgets Categories</h3>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-6 col-xl-4">
                            <a href="{{ route('pages.widgets.calendar') }}" class="btn btn-light-primary w-100 text-start">Calendar</a>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <a href="{{ route('pages.widgets.cards') }}" class="btn btn-light-primary w-100 text-start">Cards</a>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <a href="{{ route('pages.widgets.charts') }}" class="btn btn-light-primary w-100 text-start">Charts</a>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <a href="{{ route('pages.widgets.engage') }}" class="btn btn-light-primary w-100 text-start">Engage</a>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <a href="{{ route('pages.widgets.feeds') }}" class="btn btn-light-primary w-100 text-start">Feeds</a>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <a href="{{ route('pages.widgets.forms') }}" class="btn btn-light-primary w-100 text-start">Forms</a>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <a href="{{ route('pages.widgets.general') }}" class="btn btn-light-primary w-100 text-start">General</a>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <a href="{{ route('pages.widgets.lists') }}" class="btn btn-light-primary w-100 text-start">Lists</a>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <a href="{{ route('pages.widgets.maps') }}" class="btn btn-light-primary w-100 text-start">Maps</a>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <a href="{{ route('pages.widgets.misc') }}" class="btn btn-light-primary w-100 text-start">Misc</a>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <a href="{{ route('pages.widgets.mixed') }}" class="btn btn-light-primary w-100 text-start">Mixed</a>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <a href="{{ route('pages.widgets.player') }}" class="btn btn-light-primary w-100 text-start">Player</a>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <a href="{{ route('pages.widgets.sliders') }}" class="btn btn-light-primary w-100 text-start">Sliders</a>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <a href="{{ route('pages.widgets.social') }}" class="btn btn-light-primary w-100 text-start">Social</a>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <a href="{{ route('pages.widgets.statistics') }}" class="btn btn-light-primary w-100 text-start">Statistics</a>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <a href="{{ route('pages.widgets.tables') }}" class="btn btn-light-primary w-100 text-start">Tables</a>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <a href="{{ route('pages.widgets.tiles') }}" class="btn btn-light-primary w-100 text-start">Tiles</a>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <a href="{{ route('pages.widgets.timeline') }}" class="btn btn-light-primary w-100 text-start">Timeline</a>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <a href="{{ route('pages.widgets.video') }}" class="btn btn-light-primary w-100 text-start">Video</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

