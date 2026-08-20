@extends('layouts.theme')

@section('content')
@php
    $activeTheme = \App\Services\WebsiteTemplateService::getActiveTheme();
    $themeConfig = $activeTheme?->config;

    $headerMenu = $themeConfig?->header_menu_list ?? [
        ['title' => 'Home', 'url' => '#kt_body', 'target' => '_self', 'feature_file' => ''],
        ['title' => 'How it Works', 'url' => '#how-it-works', 'target' => '_self', 'feature_file' => '_how-it-works'],
        ['title' => 'Achievements', 'url' => '#achievements', 'target' => '_self', 'feature_file' => '_statistics'],
        ['title' => 'Team', 'url' => '#team', 'target' => '_self', 'feature_file' => '_team'],
        ['title' => 'Portfolio', 'url' => '#portfolio', 'target' => '_self', 'feature_file' => '_projects'],
        ['title' => 'Pricing', 'url' => '#pricing', 'target' => '_self', 'feature_file' => '_pricing'],
    ];

    $includedViews = [];
@endphp

@foreach($headerMenu as $item)
    @php
        $featureFile = $item['feature_file'] ?? null;
        if (empty($featureFile) && !empty($item['url']) && str_starts_with($item['url'], '#') && $item['url'] !== '#kt_body') {
            $slugName = ltrim($item['url'], '#');
            $featureFile = '_' . str_replace('-', '_', $slugName);
        }

        $viewPath = !empty($featureFile) ? \App\Services\WebsiteTemplateService::resolveFeatureView($featureFile, $activeTheme) : null;
    @endphp

    @if($viewPath && !in_array($viewPath, $includedViews, true))
        @php $includedViews[] = $viewPath; @endphp
        <!--begin::{{ $item['title'] ?? 'Feature' }} Section-->
        @include($viewPath)
        <!--end::{{ $item['title'] ?? 'Feature' }} Section-->
    @endif
@endforeach

@if(empty($includedViews))
    @include('theme.default.features._how-it-works')
    @include('theme.default.features._statistics')
    @include('theme.default.features._team')
    @include('theme.default.features._projects')
    @include('theme.default.features._pricing')
    @include('theme.default.features._testimonials')
@endif
@endsection
