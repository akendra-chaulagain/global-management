   <div class="gallery">
        <div class="container">
             <h1 class="text-center">OUR GALLERY</h1>
            <div class="gallery-view">
                <div class="row" id="lightgallery"> 
                    @foreach ($gallery as $gallery_item)
                          <div class="item col-md-3" data-src="/uploads/photo_gallery/{{ $gallery_item->file }}" data-sub-html="<h4>{{ $gallery_item->caption }}</h4>">
                        <a href="">
                            <img src="/uploads/photo_gallery/{{ $gallery_item->file }}" alt="{{ $gallery_item->caption }}"/>
                            <i class="fa-solid fa-expand"></i>
                        </a>
                    </div>
                    @endforeach
                  
                   
                </div>
            </div>
        </div>
    </div>