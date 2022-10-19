{{-- @php
    $breed = App\Models\Navigation::find($normal->parent_page_id);
    $global_setting = app\Models\GlobalSetting::all()->first();
    $side_bar = App\Models\Navigation::find($normal->parent_page_id)->childs;
    
@endphp --}}


@extends('layouts.master')
@push('title')
    {{ $courses->caption }}
@endpush
@section('content')
    <section class="bredcrumb-area" style="background: url(/website/images/banner.jpg) no-repeat;">
        <div class="overlay">
            <h3>{{ $courses->caption }}</h3>
        </div>
    </section>

    <!--  Course Area -->
    <section class="course-area">
        <div class="container">
            <div class="row">
                @foreach ($courses->courses_childs as $courses_item)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="course-box wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                            @if ($courses_item->banner_image)
                                <figure><img src="{{ $courses_item->banner_image }}" alt="course"></figure>
                            @endif

                            <h4>{{ $courses_item->caption }}</h4>
                            <p>{!! $courses_item->short_content !!}</p>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
@endsection
