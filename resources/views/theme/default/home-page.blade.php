@extends('layouts.theme')

@section('content')
<!--begin::How It Works Section-->
@include('theme.default.features._how-it-works')
<!--end::How It Works Section-->
<!--begin::Statistics Section-->
@include('theme.default.features._statistics')
<!--end::Statistics Section-->
<!--begin::Team Section-->
@include('theme.default.features._team')
<!--end::Team Section-->
<!--begin::Projects Section-->
@include('theme.default.features._projects')
<!--end::Projects Section-->
<!--begin::Pricing Section-->
@include('theme.default.features._pricing')
<!--end::Pricing Section-->
<!--begin::Testimonials Section-->
@include('theme.default.features._testimonials')
<!--end::Testimonials Section-->
@endsection
