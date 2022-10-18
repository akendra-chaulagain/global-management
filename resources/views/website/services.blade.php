  <div class="services">
      <div class="container">
          <h1 class="text-center">OUR SERVICES</h1>
          <h6 class="text-center"> {{ $services_parent->short_content }}</h6>
          <div class="row">
            @foreach ($services_data as $services_parent_item)
                 <div class="col-md-4">
                  <div class="services-content wow fadeInUp"data-wow-duration="1s" data-wow-delay="1s">
                      <img src="{{ $services_parent_item->banner_image }}" alt="">
                      <h2 class=" text-center">{{ $services_parent_item->caption }}</h2>
                      <p>{!! $services_parent_item->short_content !!}
                      </p>
                  </div>
              </div>
            @endforeach
             
              
          </div>
      </div>
  </div>
