   @php
        $course_home = App\Models\Navigation::find(2547)->client_childs;
   @endphp
   
   
   <section class="abroad">
        <div class="container">
            <h1 class="text-center abroad-tittle">EXPLORE YOUR <span>STUDY ABROAD OPTIONS</span></h1>
            <div class="row">
                @foreach ($course_home as $course_home_item)
                     <div class="col-md-4">
                    <div class="box">
                        <a href="/destination/{{ $course_home_item->nav_name }}">
                            <img src="{{ $course_home_item->banner_image }}" alt="">
                            <h1>Study In {{ $course_home_item->caption }}</h1>
                        </a>
                    </div>
                </div>
                @endforeach
               
                
            </div>
        </div>
    </section>