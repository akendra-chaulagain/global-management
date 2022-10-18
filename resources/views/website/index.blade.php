@extends('layouts.master')
@push('title')
    Home
@endpush

@section('content')
    @include('website.main_slider')
    @include('website.home_about_company')
    @include('website.why-choose')
    @include('website.why_study_abroad')
    @include('website.services')
    



    
@endsection
