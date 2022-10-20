@extends('layouts.master')
@push('title')
   {{ $course_data->caption }}
@endpush
@section('content')


 <section class="bredcrumb-area" style="background: url(/website/images/australia-banner.jpg) no-repeat;">
        <div class="overlay">
            <h3>Study In {{ $course_data->caption }}</h3>
        </div>
    </section>
    <section class="tab-area">
        <div class="container">
            <div class="menu">
                <div class="button-tabs" id="button-tabs">
                    <button class="tablinks active" onclick="openCity(event, 'why')" id="defaultOpen">Why Australia</button>
                    <button class="tablinks" onclick="openCity(event, 'study')">Study In Australia</button>
                    <button class="tablinks" onclick="openCity(event, 'requirment')">REQUIREMENTS</button>
                    <button class="tablinks" onclick="openCity(event, 'living')">LIVING</button>
                    <button class="tablinks" onclick="openCity(event, 'cousrse')">Courses</button>
                    <button class="tablinks" onclick="openCity(event, 'institute')">INSTITUTES</button>

                </div>
                <div id="why" class="tabcontent">
                    <div class="destination">
                       {!! $course_data->getJob->salary !!}
                    </div>
                </div>
                <div id="study" class="tabcontent">
                    <div class="destination">
                         {!! $course_data->getJob->no_of_recruits !!}
                    </div>
                </div>
                <div id="requirment" class="tabcontent">
                    <div class="destination">
                         {!! $course_data->getJob->no_working_hr !!}
                        
                    </div>
                </div>
                <div id="living" class="tabcontent">
                    <div class="destination">
                         {!! $course_data->getJob->country !!}
                        
                    </div>
                </div>
                <div id="cousrse" class="tabcontent">
                    <div class="destination">
                         {!! $course_data->getJob->contract_time !!}
                        
                    </div>
                </div>
                <div id="institute" class="tabcontent">
                    <div class="destination">
                         {!! $course_data->getJob->institute !!}
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
