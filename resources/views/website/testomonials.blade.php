 <div class="video-area">
     <div class="container">
         <h1 class="text-center">WHAT OUR <span>STUDENTS</span> HAVE TO SAY</h1>
         <h5 class="text-center">Testimonials</h5>
         <div class="row">
             @foreach ($testomonial_parent as $testimonial_item)
                 <div class="col-md-4" style="height: 315px">
                     {!! $testimonial_item->icon_image_caption !!}
                 </div>
             @endforeach


         </div>
     </div>
 </div>
