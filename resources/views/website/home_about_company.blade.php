{{-- @php
$normal_gallary_notice = App\Models\Navigation::find(2445);
@endphp --}}



<section class="about">
    <div class="container">
        <h1 class="text-center about-tittle">{!! $about->short_content !!}</h1>
        <div class="about-content">
            <p>{{ $about->long_content }}</p>
        </div>
        <div class="button">
            <a href="/about-us">Learn More</a>
        </div>
    </div>
</section>
