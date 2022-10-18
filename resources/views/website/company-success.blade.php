<section id="nr_services" class="row">
    <div class="container">
        <div class="row m0 text-center">
            @foreach ($statistics as $statistic)
                <div class="col-sm-3">
                    <div class="row m0 service">
                        <div class="row m0 innerRow">
                            <i class="fa {{ $statistic->icon_image_caption }}"></i>
                            <div class="serviceName" data-hover="{{ $statistic->caption }}">{{ $statistic->caption }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
