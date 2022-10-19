@extends('layouts.master')
@push('title')
    {{ $japan_parent->caption }}
@endpush
@section('content')
    <section class="bredcrumb-area" style="background: url(/website/images/japan-banner.jpg) no-repeat;">
        <div class="overlay">
            <h3>Study In {{ $japan_parent->caption }}</h3>
        </div>
    </section>
    <div class="container">
        <div class="study-japan">
            <h1 class="text-center">{!! $japan_parent->short_content !!}</h1>
            <p>{!! $japan_parent->long_content !!}</p>
        </div>
    </div>
    @foreach ($japan_parent_childs as $japan_parent_child)
        <div class="japan">
            <div class="container">
                <h1 class="text-center">{!! $japan_parent_child->short_content !!}</h1>

                <div class="city-box">
                    <div class="row">
                      
                        @php
                            $japan_data = App\Models\Navigation::find($japan_parent_child->id)->client_childs;
                            // return $japan_data;
                            
                        @endphp
                        
                        @foreach ($japan_data as $item)
                            <div class="col-lg-3 col-md-3 col-12">
                            <div class="japan-content">
                                <div>
                                    <img src="{{ $item->banner_image }}" alt="">
                                    <h3>{{ $item->caption }}</h3>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                      
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
