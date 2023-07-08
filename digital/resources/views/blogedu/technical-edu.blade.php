<!doctype html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-transcluent">
    <meta name="format-detection" content="telephone=no">
    <title>التعليم التكنلوجي</title>

    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link rel="stylesheet" href="css/swiper.min.css">

    <link rel="stylesheet" href="css/magnific-popup.min.css">

    <link rel="stylesheet" href="css/plyr.min.css">

    <link rel="stylesheet" href="css/aos.min.css">

    <link rel="stylesheet" href="css/main.css">

</head>

<body>

    <main class="page-wrapper">

        <div class="page-loader">
            <div class="preloader-wrapper">
                <div class='sk-cube-grid'>
                    <div class='sk-cube sk-cube-1'></div>
                    <div class='sk-cube sk-cube-2'></div>
                    <div class='sk-cube sk-cube-3'></div>
                    <div class='sk-cube sk-cube-4'></div>
                    <div class='sk-cube sk-cube-5'></div>
                    <div class='sk-cube sk-cube-6'></div>
                    <div class='sk-cube sk-cube-7'></div>
                    <div class='sk-cube sk-cube-8'></div>
                    <div class='sk-cube sk-cube-9'></div>
                </div>
            </div>
        </div>

        <nav class="navigation-menu navigation-menu-desktop navigation-menu--fullscreen-menu">
            <div class="fullscreen-menu--inner-wrapper">
                <div class="">
                    
                        <img class="fill-current h-16 w-16 mr-2 fixed-top" src="/icon/mainicon.svg" alt="شعار الموقع">

                </div>
                <div class="inner-wrapper--buttons-wrapper">
                    <div class="buttons-wrapper--toggle-wrapper" data-toggle-bar-width="22">
                        <div class="toggle-wrapper--bar toggle-wrapper--first-bar"></div>
                        <div class="toggle-wrapper--bar toggle-wrapper--second-bar"></div>
                        <div class="toggle-wrapper--bar toggle-wrapper--third-bar"></div>
                        <div class="toggle-wrapper--close">
                            <i class="fa fa-times"></i>
                        </div>
                    </div>

                    <div class="buttons-wrapper--search-form-wrapper">
                        {{-- <div class="search-form-wrapper--search-toggle">
                            <i class="fa fa-search show-icon"></i>
                            <i class="fa fa-times hidden-icon"></i>
                        </div> --}}
                        {{-- <div class="search-form-wrapper--search-form-window">
                            <div class="search-panel--search-wrapper">
                                <form class="search-wrapper--form">
                                    <input type="text" placeholder="Input some keywords...">
                                    <button type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="fullscreen-menu--fullscreen-window">
                <div class="fullscreen-window--inner-wrapper">
                    <div class="inner-wrapper--menu-wrapper">
                        <ul class="menu-wrapper--menu-list active-window">
                            <li class="menu-item ">
                                <a href="{{ route('dashboard') }}" :active="request() - > routeIs('dashboard')">
                                    {{ __('الصفحة الرئيسية ') }}</a>
                                    </li> 
                                    <li class="menu-item ">
                                <a href="{{ route('complaint') }}" :active="request() - > routeIs('dashboard')">
                                    {{ __('تقديم مشكلة') }}</a>
                                 </li>
                                    <li class="menu-item ">
                                <a class="menu-item menu-item-has-children" href="{{ route('reports') }}"
                                    :active="request() - > routeIs('dashboard')">
                                    {{ __('تقرير') }}
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="{{ route('profile.show') }}" :active="request() - > routeIs('dashboard')">
                                    {{ __('الملف الشخصي') }}</a>
                                 </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#">مقالات</a>
                                <ul class="sub-menu">
    
                                    <li class="menu-item">
                                        <a href="{{ route('blogedu.technical-edu') }}"
                                            :active="request() - > routeIs('dashboard')">
                                            {{ __('التعلم التكنلوجي') }}</a>
                                        </li>
                                            <li class="menu-item">
                                        <a href="{{ route('blogsupport.support') }}"
                                            :active="request() - > routeIs('dashboard')">
                                            {{ __('الدعم النفسي') }}</a>
                                    </li>
                                </ul>
                            </li>
                           
                           
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <nav class="navigation-menu navigation-menu--mobile-menu">
            <div class="mobile-menu--toggle-wrapper">
                <div class="toggle-wrapper--toggle">
                    <div class="toggle--menu-icon">
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu--inner-wrapper">
                <div class="inner-wrapper--menu-wrapper">
                    <ul class="menu-wrapper--menu-list active-window">

                        <li class="menu-item ">
                            <a href="{{ route('dashboard') }}" :active="request() - > routeIs('dashboard')">
                                {{ __('الصفحة الرئيسية ') }}</a>
                                </li> 
                                <li class="menu-item ">
                            <a href="{{ route('complaint') }}" :active="request() - > routeIs('dashboard')">
                                {{ __('تقديم مشكلة') }}</a>
                             </li>
                                <li class="menu-item ">
                            <a class="menu-item menu-item-has-children" href="{{ route('reports') }}"
                                :active="request() - > routeIs('dashboard')">
                                {{ __('تقرير') }}
                            </a>
                        </li>
                        <li class="menu-item ">
                            <a href="{{ route('profile.show') }}" :active="request() - > routeIs('dashboard')">
                                {{ __('الملف الشخصي') }}</a>
                             </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#">مقالات</a>
                            <ul class="sub-menu">

                                <li class="menu-item">
                                    <a href="{{ route('blogedu.technical-edu') }}"
                                        :active="request() - > routeIs('dashboard')">
                                        {{ __('التعلم التكنلوجي') }}</a>
                                    </li>
                                        <li class="menu-item">
                                    <a href="{{ route('blogsupport.support') }}"
                                        :active="request() - > routeIs('dashboard')">
                                        {{ __('الدعم النفسي') }}</a>
                                </li>
                            </ul>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content-page-wrapper">

            <header class="breadcrumbs-type-1 overlay bg-position-center bg-size-cover parallax-window gray-overlay"
                data-src="img/home/workspace-2.jpg" data-speed="0.3">
                <div class="container breadcrumbs--breadcrumbs-inner">
                    <h1 class="breadcrumbs-inner--page-title white-color">
                        التعليم التكنلوجي
                    </h1>
                    {{-- <ul class="breadcrumbs-inner--breadcrumbs-list">
                        <li>
                            <a href="index.html">
                                الصفحة الرئيسية
                            </a>
                        </li>
                        <li>
                            <a href="blog-boxed-full-width.html">
                                Blog Boxed
                            </a>
                        </li>
                        <li>
                            <a href="blog-boxed-full-width.html">
                                Full width
                            </a>
                        </li>
                    </ul> --}}
                </div>
            </header>

            <section class="blog-boxed">
                <div class="blog-boxed--blog-wrapper">
                    <div class="container">
                        @if (auth()->user()->roleId === 1)
                            <div class="flex justify-center items-center">
                                <a href="{{ route('blogedu.create') }}"
                                    class="bg-buttonalaa  p-1  w-20 h-30 border-none   rounded btn btn-primary mr-2">اضافة مقالة</a>
                            </div>
                        @endif
                        <article class="blog-wrapper--blog-post">
                            <div class="blog-post--post-wrapper">
                                @foreach ($blogedus as $blogedu)
                                <div class="post-wrapper--title">
                                   
                                        <a href="{{ route('blogedu.show', ['id' => $blogedu->id]) }} ">
                                            <h5>{{ $blogedu->title }}</h5>
                                        </a>
                                </div>
                                {{-- <div class="post-wrapper--content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores atque
                                        cupiditate deleniti dolore, doloribus explicabo hic illo impedit in iure
                                        consectetur iusto minus molestias nobis quis quisquam rem
                                        rerum suscipit
                                        temporibus velit vitae. Asperiores beatae itaque maiores.</p>
                                </div> --}}
                                <div class="post-wrapper--author border-bottom-simple">
                                    <div class="wrapper">
                                        <a href="index.html">
                                            <div class="author--img-wrapper">
                                                <img src="img/testimonials/testimonial5.jpg" alt=""
                                                    class="img-fluid">
                                            </div>
                                            <div class="author--author-name">
                                                <span>by John Doe</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="post-wrapper--data-wrapper">
                                    <div class="data-wrapper--date">
                                        <div class="date--post-details">
                                            <i class="fa fa-clock"></i>
                                            June 28, 2022
                                        </div>
                                        {{-- <div class="date--post-details">
                                            <span><i class="fas fa-comment-alt"></i>21</span>
                                            <span><i class="fas fa-heart"></i>36</span>
                                        </div> --}}
                                    </div>
                                    @if (auth()->user()->roleId === 1)
                                    <div class="mt-3">
                                        <a href="{{ route('blogedu.edit', ['id' => $blogedu->id]) }}" class="btn btn-primary mr-2">تعديل</a>
                                        <a href="{{ route('blogedu.destroy', ['id' => $blogedu->id]) }}" class="btn btn-danger">حذف</a>
                                    </div>
                                    
                                    @endif
                                </div>
                                @endforeach
                            </div>
                        </article>

                        <div class="pagination-links flex w-1/2 mx-auto justify-center items-center pt-10 text-withe">
                            {{ $blogedus->links() }}
                        </div>
                    </div>
                </div>
            </section>
            
            <footer class="footer-type-3 small-section">
                <div class="container mx-auto py-8">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="d-flex align-items-center">
                                <img class="w-32 h-32" src="/icon/code for iraq logo SVG.svg" alt="Code For Iraq Logo">
                                <span class="text-2xl font-bold text-white ml-4">البرمجة من أجل العراق</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center">
                                <h1 class="text-3xl text-white font-bold mb-4">تصفح الموقع</h1>
                                <a href="#" class="text-xl text-white font-bold d-block mb-2">الصفحة الرئيسية</a>
                                <a href="#" class="text-xl text-white font-bold d-block mb-2">تقديم مشكلة</a>
                                <a href="#" class="text-xl text-white font-bold d-block mb-2">الدعم النفسي</a>
                                <a href="#" class="text-xl text-white font-bold d-block mb-2">التعليم التكنولوجي</a>
                                <a href="#" class="text-xl text-white font-bold d-block mb-2">تقرير</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center">
                                <h1 class="text-3xl text-white font-bold mb-4">تواصل معنا</h1>
                                <span class="text-xl text-white font-bold d-block mb-2">We@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mx-auto py-4 text-center text-white">
                    <p class="text-xl font-bold">حقوق النشر © 2023
                        <span class="text-sm">(صنع بالكثير من الحب ❤)</span>
                    </p>
                </div>
                
            </footer>
        </div>
    </main>



    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>

    <script src="js/TweenMax.min.js"></script>

    <script src="js/imagesloaded.pkgd.min.js"></script>

    <script src="js/parallax-master.min.js"></script>
    <script src="js/parallax.min.js"></script>

    <script src="js/progressbar.min.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>

    <script src="js/three.min.js"></script>

    <script src="js/projector.min.js"></script>

    <script src="js/canvas-renderer.min.js"></script>

    <script src="js/isotope.pkgd.min.js"></script>

    <script src="js/packery.pkgd.min.js"></script>

    <script src="js/particles.min.js"></script>

    <script src="js/plyr.min.js"></script>

    <script src="js/tilt.jquery.min.js"></script>

    <script src="js/jquery.waypoints.min.js"></script>

    <script src="js/aos.min.js"></script>

    <script src="js/glitch-links.min.js"></script>

    <script src="js/slideshow.min.js"></script>

    <script src="js/sticky-sidebar.min.js"></script>

    <script src="js/swiper.min.js"></script>

    <script src="js/main.js"></script>

</body>

</html>
