 {{-- <section id="aboutus" style="background: #f7f7f7">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="aboutContent">
                        <div class="member">
                            <div class="textsPart">
                                  <h3>{{ $message->caption }}</h3>
                                  <p>{!! $message->long_content !!}.</p>
                            </div>
                            <div class="memImg">
                                <img src="{{$message->banner_image  }}" alt="">
                            </div>
                            <div class="memberIntro">
                                <div class="namePro">
                                    <span class="name">{{ $message->caption }}</span> {!! $message->short_content !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </section> --}}


    <div class="study-area">
        <div class="container">
            <div class="study">
                <div class="study-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h1>{{ $message_parent->caption }}</h1>
                            <p>{!! $message_parent->short_content !!}</p>
                        </div>
                        <div class="col-md-6">
                            <div class="study-video">
                               {!! $message_parent->icon_image_caption !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="couter-content" id="counter">
                    <div class="container">
                        <div class="row">
                            @foreach ($message_parent->childs as $message_parent_item)
                                  <div class="col-lg-3 col-md-3 col-12">
                                <div class="counter">
                                    <h1 class="counter" data-TargetNum="{{ $message_parent_item->caption }}" data-Speed="1000">0</h1>
                                    <h5>{!! $message_parent_item->short_content ?? " " !!}</h5>
                                </div>
                            </div>
                            @endforeach
                          
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>