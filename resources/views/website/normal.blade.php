@php
    $breed = App\Models\Navigation::find(2550);
    $message = App\Models\Navigation::find(2551);
    
@endphp


@extends('layouts.master')
@push('title')
    {{ $normal->caption }}
@endpush
@section('content')
    <section class="bredcrumb-area" style="background: url(/website/images/about-banner.jpg) no-repeat;">
        <div class="overlay">
            <h3>About Us</h3>
        </div>
    </section>

    <!--  Page Content -->
    <section class="inner-page">
        <div class="container">
            <h1 class="text-center">{{ $breed->caption }}</h1>
            <p>{!! $breed->short_content !!}</p>
        </div>
        {!! $breed->long_content !!}
        <div class="message-area">
            <div class="container">
                <div class="message-box">
                    <h3>{!! $message->short_content !!}</h3>
                    <div class="row">
                        <div class="col-lg-8">
                            <p>{!! $message->long_content !!}</p>
                        </div>
                        <div class="col-lg-4">
                            <img src="{{ $message->banner_image }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
