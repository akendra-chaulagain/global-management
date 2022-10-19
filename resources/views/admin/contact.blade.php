@php
    $global_setting = app\Models\GlobalSetting::all()->first();
    
@endphp


@extends('layouts.master')

@push('title')
    Contact
@endpush

@section('content')
    <section class="bredcrumb-area" style="background: url(/website/images/about-banner.jpg) no-repeat;">
        <div class="overlay">
            <h3>Contact Us</h3>
        </div>
    </section>

    <section class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="info-box">
                        <div class="contact-icon"><i class="fa-solid fa-location-dot"></i></div>
                        <h5>Address</h5>
                        <p>{{ $global_setting->website_full_address }}
                            {{ $global_setting->address_ne }}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="info-box">
                        <div class="contact-icon"><i class="fa-solid fa-phone"></i></div>
                        <h5>Call Us</h5>
                        <p><a href="tel:{{ $global_setting->phone }}">{{ $global_setting->phone }}</a></p>
                        <p><a href="tel:{{ $global_setting->phone_ne }}">{{ $global_setting->phone_ne }}</a></p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="info-box">
                        <div class="contact-icon"><i class="fa-solid fa-envelope"></i></div>
                        <h5>Email</h5>
                        <p><a href="mailto:{{ $global_setting->site_email }}">{{ $global_setting->site_email }}</a></p>
                        {{-- <p><a href="mailto:japan@gmfnepal.edu.np">japan@gmfnepal.edu.np</a></p> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="inqury-form">
        <div class="container">
            <h2>Get In Touch</h2>
            <form action="{{ route('contactstore') }}" method="POST" enctype='multipart/form-data'>
                @csrf
                <div class="mb-3">
                    <input name="name" type="text" class="form-control"placeholder="Name" required>

                    <input name="email" type="email" class="form-control"placeholder="Email" required>

                </div>
                <div class="mb-3">
                    <textarea name="message" class="form-control" rows="5" placeholder="Message"></textarea>
                </div>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </section>
    <section class="map-area">
        <div class="container-fuild">
           {!! $global_setting->page_keyword !!}
        </div>
    </section>
@endsection
