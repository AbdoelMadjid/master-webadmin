<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- Mirrored from htmlstream.com/preview/unify-v2.6.3/multipage/website/home-page-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Feb 2026 13:16:54 GMT -->

@php
    try {
        $webProfile = \App\Models\PageConfig\WebsiteProfile::getActiveProfile();
    } catch (\Throwable $e) {
        $webProfile = (object) [
            'name' => 'Universitas Unify',
            'name_en' => 'University of Unify',
            'favicon' => 'assets/img/logo/logo-mini.png',
        ];
    }
    $webName = app()->getLocale() == 'en' && !empty($webProfile->name_en ?? null) ? $webProfile->name_en : ($webProfile->name ?? 'Website');
    $webFavicon = asset($webProfile->favicon ?? 'assets/img/logo/logo-mini.png');
@endphp

<head>
    <base href="{{ url('/') }}/">
    <!-- Title -->
    <title>@yield('title', __('website.main')) - {{ $webName }}</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ $webFavicon }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Barlow:300,400,400i,500,700%7CAlegreya:400" rel="stylesheet">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/bootstrap.min.css">

    @yield('css')

    <!-- CSS Unify Theme -->
    <link rel="stylesheet" href="assets/css/styles.multipage-education.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
    <main>

        @include('website.templates.unify-education.partials.header')

        @yield('content')

        @include('website.templates.unify-education.partials.footer')

    </main>

    <!-- JS Global Compulsory -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="assets/vendor/popper.js/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- JS Implementing Plugins -->
    @yield('script')
</body>

</html>
