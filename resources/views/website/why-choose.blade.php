<div class="choose">
    <div class="container">
        <h1 class="text-center choose-tittle">WHY <span>CHOOSE</span> US ?</h1>
        <div class="choose_text">
            <p class="text-center">{!! $why_us_parent->short_content !!}</p>
        </div>

        <div class="row">
            @foreach ($why_us_id as $why_us_id_item)
            <div class="col-md-4">
                <div class="choose-content wow fadeInUp"data-wow-duration="1s" data-wow-delay="1s">
                    <img src="{{ $why_us_id_item->banner_image }}" alt="">
                    <h4>Quality Consistency</h4>
                    <h5>Trusted Over Time</h5>
                </div>
            </div>
           
            @endforeach

        </div>
    </div>
</div>
