@extends('layouts.master')

@section('content')
    <!-- Services Section -->
    @include('sections.services')

    <!-- Why us Section -->
    @include('sections.why_us')

    <!-- Why us Section -->
    @include('sections.starostlivost')

    <!-- About Section -->
    @include('sections.about')

    <!-- Features Section -->
    {{--@include('sections.features')--}}

    <!-- Skills Section -->
{{--    @include('sections.skills')--}}

    <!-- History Section -->
{{--    @include('sections.history')--}}

    <!-- Our Team Section -->
    @include('sections.our_team')

    <!-- Portfolio Section -->
    @include('sections.portfolio')

    <!-- Video Section -->
    @include('sections.video')

    <!-- Prices Section -->
    @include('sections.prices')

    <!-- Subscribe Section -->
    @include('sections.subscription')
@endsection