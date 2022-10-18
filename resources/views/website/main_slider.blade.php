<div id="main-slider" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach ($sliders as $key => $sliders_item)
            <div class="carousel-item  @if ($key == 0) active @endif">
                <img src="{{ $sliders_item->banner_image }}" class="d-block w-100" alt="...">
            </div>
        @endforeach


    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#main-slider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#main-slider" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
