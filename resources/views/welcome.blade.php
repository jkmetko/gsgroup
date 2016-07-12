@extends('layouts.master')

@section('content')
    <!-- Services Section -->
    @include('sections.services')

    <!-- Our Team Section -->
    @include('sections.produkty')

    <!-- Okamžité šetrenie Section -->
    @include('sections.setrenie')

    <!-- Starostlivosť Section -->
    @include('sections.starostlivost')

    <!-- Ochutnávky Section -->
    @include('sections.ochutnavky')

    <!-- Servis Section -->
    @include('sections.servis')

    <!-- Reklamné predmety Section -->
    @include('sections.reklamne_predmety')

    <!-- About Section -->
    {{--@include('sections.about')--}}

    <!-- Features Section -->
    {{--@include('sections.features')--}}

    <!-- Skills Section -->
{{--    @include('sections.skills')--}}

    <!-- History Section -->
{{--    @include('sections.history')--}}

    <!-- Portfolio Section -->
{{--    @include('sections.portfolio')--}}

    <!-- Video Section -->
{{--    @include('sections.video')--}}

    <!-- Prices Section -->
{{--    @include('sections.prices')--}}

    <!-- Subscribe Section -->
    @include('sections.subscription')
@endsection