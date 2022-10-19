   <div class="container">
       <h1 class="text-center post-tittle">OUR <span>RECENT</span> POSTS</h1>
       <div class="row">
        @foreach ($posts_parent as $posts_parent_item)
             <div class="col-md-4">
               <div class="posts">
                   <div class="img-box">
                       <a href="/detail/{{ $posts_parent_item->nav_name }}">
                           <img src="{{ $posts_parent_item->banner_image }}" alt="">
                           <span class="et_overlay"></span>
                       </a>
                   </div>
                   <a href="/detail/{{  $posts_parent_item->nav_name }}">
                       <h5>{{ $posts_parent_item->caption }}</h5>
                   </a>
               </div>
           </div>
        @endforeach
          
          
       </div>
   </div>
