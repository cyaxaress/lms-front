@extends('Front::layout.master')
@section('content')
    <main id="index" class="mrt-205">
        <article class="container article">
            @include('Front::layout.header-ads')
            @include('Front::layout.top-info')
            @include('Front::layout.latestCourses')
        </article>
        <main id="single">
@endsection
