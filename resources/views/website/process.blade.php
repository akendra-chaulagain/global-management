@extends('layouts.master')
@push('title')
    {{ $process->caption }}
@endpush
@section('content')
    <section class="bredcrumb-area" style="background: url(/website/images/process-banner.jpg) no-repeat;">
        <div class="overlay">
            <h3>{{ $process->caption }}</h3>
        </div>
    </section>

    <!--  Page Content -->
    <section class="process-page">
        <div class="container">
            @foreach ($process_breed as $process_breed_item)
                  <div class="process-box">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="process-content">
                            <h6>{!! $process_breed_item->short_content !!}</h6>
                            <ul>
                                {!! $process_breed_item->long_content !!}
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <h3>{{ $process_breed_item->caption }}</h3>
                    </div>
                </div>
            </div>
            @endforeach
          
           
        </div>
    </section>
@endsection
