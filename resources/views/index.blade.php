@extends('layouts.app')

@section('content')
    @include('components.nav')
    @include('components.intro')
    @include('components.download')
    @include('components.feature-images')
    @include('components.features-list')
    @include('components.help-and-support')
    @include('components.sponsor')
    @include('components.footer')
    @include('components.sponsor-banner')
@endsection
