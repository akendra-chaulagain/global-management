@php
  $course_home = App\Models\Navigation::find(2547)->client_childs;
  $course_child = App\Models\Navigation::find(2546)->courses_childs->take(4);





    $global_setting = app\Models\GlobalSetting::all()->first();
    $normal_gallary_notice = app\Models\Navigation::query()
        ->where('nav_category', 'Main')
        ->where('page_type', '!=', 'Job')
        ->where('page_type', '!=', 'Photo Gallery')
        ->where('page_type', '!=', 'Notice')
        ->where('parent_page_id', 0)
        ->where('page_status', '1')
        ->orderBy('position', 'ASC')
        ->get();
    if (isset($normal)) {
        $seo = $normal;
    } elseif (isset($job)) {
        $seo = $job;
    }
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <!-----SEO--------->

    <title> @stack('title') | {{ $seo->page_titile ?? $global_setting->page_title }}</title>
    <meta name="title" content="{{ $seo->page_titile ?? $global_setting->page_title }}">
    <meta name="description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
    <meta name="keywords" content="{{ $seo->page_keyword ?? $global_setting->page_keyword }}">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="1 days">
    <meta name="author" content="{{ $global_setting->site_name ?? '' }}">


    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ $global_setting->website_full_address ?? '' }}">
    <meta property="og:title" content="{{ $seo->page_title ?? $global_setting->page_title }}">
    <meta property="og:description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
    <meta property="og:image" content="{{ $seo->banner_image ?? '/uploads/icons/' . $global_setting->site_logo }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ $global_setting->website_full_address ?? '' }}">
    <meta property="twitter:title" content="{{ $seo->page_title ?? $global_setting->page_title }}">
    <meta property="twitter:description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
    <meta property="twitter:image"
        content="{{ $seo->banner_image ?? '/uploads/icons/' . $global_setting->site_logo }}">



    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ '/uploads/icons/' . $global_setting->favicon }}" type="image/png">

    <!--== All FontAwesome CSS ==-->
    <link href="/website/css/all.css" rel="stylesheet" />

    <link href="/website/css/bootstrap.min.css" rel="stylesheet">
    <link href="/website/css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href='https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/css/lightgallery.css'>
    <!-- custom style -->
    <link rel="stylesheet" href="/website/css/style.css">
</head>

<body>

    <div class="hearder">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/"><img
                        src="{{ '/uploads/icons/' . $global_setting->site_logo }}" alt="lgog"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">=</span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/">HOME</a>
                        </li>

                    
                        @foreach ($menus as $menu)
                            @php $submenus = $menu->childs; @endphp
                            <li class="nav-item dropdown" @if (isset($slug_detail) && $slug_detail->nav_name == $menu->nav_name)  @endif>

                                <a class="nav-link @if($menu->nav_name == "destination")dropdown-toggle @endif"
                                    @if ($menu->nav_name == 'destination') data-bs-toggle="dropdown" @endif
                                    aria-expanded="false"
                                    @if ($submenus->count() > 0) href="{{ route('category', $menu->nav_name) }}" @else href="  
                                                    {{ route('category', $menu->nav_name) }}" @endif>{{ $menu->caption }}</a>




                                @if ($submenus->count() > 0)
                                    <ul class="dropdown-menu">
                                        @foreach ($submenus as $sub)
                                            <li>

                                                <a class="dropdown-item"
                                                    href="{{ route('subcategory', [$menu->nav_name, $sub->nav_name]) }}">{{ $sub->caption }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/contact">CONTACT</a>
                        </li>


                    </ul>

                </div>
                <form action="" class="language-picker__form">
                    <select name="language-picker-select" id="language-picker-select">
                        <option class="english" lang="en" value="english" selected>English</option>
                        <option class="japanese" lang="de" value="japanese">Japanese</option>
                    </select>
                </form>
            </div>
        </nav>
    </div>
    @yield('content')



    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-content">
                        <h1>About Us</h1>
                        <ul>
                            <li><a href="/about-us">About Us</a> </li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="process.html">Our Process</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-content">

                        <h1>Service</h1>
                        <ul>
                            <li><a href="#">Counselling</a> </li>
                            <li><a href="#">Admission</a></li>
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-content">

                        <h1>Destinations</h1>
                        <ul>
                            @foreach ($course_home as $course_home_item)
                            <li><a href="/destination/{{ $course_home_item->nav_name }}">{{ $course_home_item->caption }}</a></li>
                                
                            @endforeach
                            
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-content">

                        <h1>Our Course</h1>
                        <ul>
                            @foreach ($course_child as $course_child_item)
                            <li><a href="/courses">{{ $course_child_item->caption }}</a></li>
                                
                            @endforeach
                           
                        </ul>
                    </div>
                </div>
            </div>
            <div class="icon-area">
                <h1 class="text-center">Global Management Foundation</h1>
                <h2 class="text-center">©
                    <script>
                        document.write(new Date().getFullYear())
                    </script> All rights reserved.
                </h2>
                <div class="icon text-center">
                    <a href="{{ $global_setting->facebook ?? '#' }}" target="_blank"><i
                            class="fa-brands fa-facebook"></i></a>
                    <a href="{{ $global_setting->twitter ?? '#' }}" target="_blank"><i
                            class="fa-brands fa-square-twitter"></i></a>
                    <a href="{{ $global_setting->instagram ?? '#' }}" target="_blank"><i
                            class="fa-brands fa-square-instagram"></i></a>
                    <a href="{{ $global_setting->youtube ?? '#' }}" target="_blank"><i
                            class="fa-brands fa-youtube"></i></a>
                    <a href="{{ $global_setting->linkedin ?? '#' }}" target="_blank"><i
                            class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </footer>





    <script src="/website/js/jquery-3.6.0.min.js"></script>

    <script src="website/js/bootstrap.min.js"></script>

    <script src="website/js/multi-animated-counter.js"></script>
    <script src="website/js/wow.min.js"></script>
    <!-- gllery js -->
    <script src="/website/js/gallery/picturefill.min.js"></script>
    <script src="/website/js/gallery/lightgallery.js"></script>
    <script src="/website/js/gallery/lg-pager.js"></script>
    <script src="/website/js/gallery/lg-autoplay.js"></script>
    <script src="/website/js/gallery/lg-fullscreen.js"></script>
    <script src="/website/js/gallery/lg-zoom.js"></script>
    <script src="/website/js/gallery/lg-hash.js"></script>
    <script src="/website/js/gallery/lg-share.js"></script>

    <!-- custom js -->
    <script src="/website/js/main.js"></script>
    <script type="text/javascript">
        wow = new WOW({
            boxClass: 'wow', // default
            animateClass: 'animated', // default
            offset: 0, // default
            mobile: true, // default
            live: true // default
        })
        wow.init();
    </script>









    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();

        // .........................button active.....................
    </script>





    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    @if (Session::has('contact'))
        <script>
            Swal.fire(
                'Thanks!',
                "Form submitted sucessfully!!!",
                'success'
            )
        </script>
    @endif
</body>

</html>
