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
    <title>Keito</title>

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

        <nav class="navigation-menu navigation-menu--side-panel">
            <div class="side-panel--inner-wrapper">
                <div class="inner-wrapper--top-side">
                    <div class="top-side--social-wrapper">
                        <ul class="social-wrapper--social-list">
                            <li class="social-list--item">
                                <a href="index.html">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="social-list--item">
                                <a href="index.html">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="social-list--item">
                                <a href="index.html">
                                    <i class="fab fa-google"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="inner-wrapper--navigation-toggle">
                    <div class="navigation-toggle--toggle-wrapper">
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
                </div>
                <div class="inner-wrapper--bottom-side">







                    <div class="bottom-side--search-form">
                        <div class="search-form--toggle">
                            <div class="toggle--icon-wrapper">
                                <div class="icon-wrapper--show-icon icon-wrapper--icon">
                                    <i class="fa fa-search"></i>
                                </div>
                                <div class="icon-wrapper--hide-icon icon-wrapper--icon">
                                    <i class="fa fa-times"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="side-panel--navigation-menu-panel">
                <div class="navigation-menu-panel--menu-wrapper">
                    <ul class="menu-wrapper--menu-list active-window">
                        <li class="menu-item ">
                            <a href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                                {{ __('Home') }}</a>
                                <a href="{{ route('complaint') }}" :active="request()->routeIs('dashboard')">
                                    {{ __('Complaint') }}</a>

                        <a class="menu-item menu-item-has-children" href="{{ route('reports') }}"
                            :active="request() - > routeIs('dashboard')"> 
                            {{ __('Report') }}
                        </a>
                       
                            
                                
                        
                        </li>
                        
                        <li class="menu-item menu-item-has-children">
                            <a href="#">Blog</a>
                            <ul class="sub-menu">
                                {{-- <a  href="{{ route('blogedu.technical-edu') }}" :active="request()->routeIs('dashboard')">
                                    {{ __('Technical education') }}</a>
                                    <a href="{{ route('blogsupport.support') }}" :active="request()->routeIs('dashboard')">
                                        {{ __('Support') }}</a>  --}}
                                 <li class="menu-item"><a  href="{{ route('blogedu.technical-edu') }}" :active="request()->routeIs('dashboard')">
                                    {{ __('Technical education') }}</a>
                                    <a href="{{ route('blogsupport.support') }}" :active="request()->routeIs('dashboard')">
                                        {{ __('Support') }}</a></li>
                               
                                
                                   
                            </ul>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <div class="side-panel--shop-panel">
                <div class="shop-panel--menu-wrapper">
                </div>
            </div>
            <div class="side-panel--search-panel">
                <div class="search-panel--search-wrapper">
                    <form class="search-wrapper--form">
                        <input type="text" placeholder="Input some keywords...">
                        <button type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
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
                        <li class="menu-item menu-item-has-children">
                            <a href="#">Homepages</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="index.html">Home Classic</a></li>
                                <li class="menu-item"><a href="home-digital.html">Home Digital</a></li>
                                <li class="menu-item"><a href="home-creative.html">Home Creative</a></li>
                                <li class="menu-item"><a href="home-presentation.html">Home Presentation</a></li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="index.html">Home Single</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="single-glitch-links.html">Glitch Links</a></li>
                                        <li class="menu-item"><a href="single-slideshow.html">SlideshowMin</a></li>
                                        <li class="menu-item"><a href="single-hover-grid.html">Hover Grid</a></li>
                                        <li class="menu-item"><a href="single-html-video.html">HTML Video</a></li>
                                        <li class="menu-item"><a href="single-vimeo-video.html">Vimeo Video</a></li>
                                        <li class="menu-item"><a href="single-youtube-video.html">Youtube Video</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#">Portfolio</a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-has-children">
                                    <a href="index.html">Porfolio Scale</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="porfolio-scale-two-columns.html">Porfolio Scale
                                                2
                                                Columns</a></li>
                                        <li class="menu-item"><a href="porfolio-scale-three-columns.html">Porfolio
                                                Scale 3
                                                Columns</a></li>
                                        <li class="menu-item"><a href="porfolio-scale-four-columns.html">Porfolio
                                                Scale 4
                                                Columns</a></li>
                                        <li class="menu-item"><a href="porfolio-scale-metro.html">Porfolio Scale
                                                Metro</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="index.html">Porfolio Fade</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="porfolio-fade-two-columns.html">Porfolio Fade 2
                                                Columns</a></li>
                                        <li class="menu-item"><a href="porfolio-fade-three-columns.html">Porfolio Fade
                                                3
                                                Columns</a></li>
                                        <li class="menu-item"><a href="porfolio-fade-four-columns.html">Porfolio Fade
                                                4
                                                Columns</a></li>
                                        <li class="menu-item"><a href="porfolio-fade-metro.html">Porfolio Fade
                                                Metro</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="index.html">Porfolio Slide</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="porfolio-slide-two-columns.html">Porfolio Slide
                                                2
                                                Columns</a></li>
                                        <li class="menu-item"><a href="porfolio-slide-three-columns.html">Porfolio
                                                Slide 3
                                                Columns</a></li>
                                        <li class="menu-item"><a href="porfolio-slide-four-columns.html">Porfolio
                                                Slide 4
                                                Columns</a></li>
                                        <li class="menu-item"><a href="porfolio-slide-metro.html">Porfolio Slide
                                                Metro</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="index.html">Single Project</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="single-project-1.html">Single Project 1</a>
                                        </li>
                                        <li class="menu-item"><a href="single-project-2.html">Single Project 2</a>
                                        </li>
                                        <li class="menu-item"><a href="single-project-3.html">Single Project 3</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="index.html">Gallery</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="gallery-two-columns.html">Gallery 2 Columns</a>
                                        </li>
                                        <li class="menu-item"><a href="gallery-three-columns.html">Gallery 3
                                                Columns</a>
                                        </li>
                                        <li class="menu-item"><a href="gallery-four-columns.html">Gallery 4
                                                Columns</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="error-page.html">Error Page</a></li>
                                <li class="menu-item"><a href="about-us.html">About Us</a></li>
                                <li class="menu-item"><a href="services.html">Services</a></li>
                                <li class="menu-item"><a href="contact.html">Contact</a></li>
                                <li class="menu-item"><a href="pricing.html">Pricing</a></li>
                                <li class="menu-item"><a href="clients.html">Clients</a></li>
                                <li class="menu-item"><a href="team.html">Team</a></li>
                                <li class="menu-item"><a href="faq.html">FAQ</a></li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="index.html">Coming Soon</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="coming-soon-creative.html">Coming Soon
                                                Creative</a>
                                        </li>
                                        <li class="menu-item"><a href="coming-soon-simple.html">Coming Soon Simple</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#">Blog</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="blog-list.html">Blog List</a></li>
                                <li class="menu-item"><a href="blog-blocks.html">Blog Blocks</a></li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="index.html">Blog Grid</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="blog-grid-full-width.html">Full Width</a></li>
                                        <li class="menu-item"><a href="blog-grid-sidebar-layout.html">Sidebar
                                                Layout</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="index.html">Blog Boxed</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="blog-boxed-full-width.html">Full Width</a></li>
                                        <li class="menu-item"><a href="blog-boxed-sidebar-layout.html">Sidebar
                                                Layout</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="index.html">Blog Images</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="blog-images-full-width.html">Full Width</a>
                                        </li>
                                        <li class="menu-item"><a href="blog-images-sidebar-layout.html">Sidebar
                                                Layout</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="index.html">Blog Only Text</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="blog-only-text-full-width.html">Full Width</a>
                                        </li>
                                        <li class="menu-item"><a href="blog-only-text-sidebar-layout.html">Sidebar
                                                Layout</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="index.html">Blog Post Layout 1</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="blog-post-layout-1-full-width.html">Full
                                                Width</a>
                                        </li>
                                        <li class="menu-item"><a href="blog-post-layout-1-sidebar-layout.html">Sidebar
                                                Layout</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="index.html">Blog Post Layout 2</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="blog-post-layout-2-full-width.html">Full
                                                Width</a>
                                        </li>
                                        <li class="menu-item"><a href="blog-post-layout-2-sidebar-layout.html">Sidebar
                                                Layout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#">Shortcodes</a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-has-children">
                                    <a href="index.html">Interactive Elements</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="elements-testimonials-slider.html"><i
                                                    class="fas fa-sliders-h"></i>Testimonials Slider</a></li>
                                        <li class="menu-item"><a href="elements-background-slider.html"><i
                                                    class="fas fa-images"></i>Background Slider</a></li>
                                        <li class="menu-item"><a href="elements-video-toggles.html"><i
                                                    class="fas fa-video"></i>Video Toggles</a></li>
                                        <li class="menu-item"><a href="elements-contact-form.html"><i
                                                    class="fas fa-envelope"></i>Contact Form</a></li>
                                        <li class="menu-item"><a href="elements-recent-posts.html"><i
                                                    class="fas fa-comment-alt"></i>Recent Posts</a></li>
                                        <li class="menu-item"><a href="elements-hover-boxes.html"><i
                                                    class="fas fa-image"></i>Hover Boxes</a></li>
                                        <li class="menu-item"><a href="elements-google-maps.html"><i
                                                    class="fas fa-map"></i>Google
                                                Map</a></li>
                                        <li class="menu-item"><a href="elements-services.html"><i
                                                    class="fas fa-users"></i>Services</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="index.html">General Elements</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="elements-accordion-gallery.html"><i
                                                    class="fas fa-images"></i>Accordion Gallery</a></li>
                                        <li class="menu-item"><a href="elements-call-to-action.html"><i
                                                    class="fas fa-exclamation-triangle"></i>Call To Action</a></li>
                                        <li class="menu-item"><a href="elements-clients-slider.html"><i
                                                    class="fas fa-sliders-h"></i>Clients Slider</a></li>
                                        <li class="menu-item"><a href="elements-team-slider.html"><i
                                                    class="fas fa-sliders-h"></i>Team Slider</a></li>
                                        <li class="menu-item"><a href="elements-accordions.html"><i
                                                    class="fas fa-list-alt"></i>Accordions</a></li>
                                        <li class="menu-item"><a href="elements-subscribe.html"><i
                                                    class="fas fa-at"></i>Subscribe</a>
                                        </li>
                                        <li class="menu-item"><a href="elements-buttons.html"><i
                                                    class="fas fa-toggle-on"></i>Buttons</a></li>
                                        <li class="menu-item"><a href="elements-clients.html"><i
                                                    class="fas fa-address-card"></i>Clients</a></li>
                                        <li class="menu-item"><a href="elements-team.html"><i
                                                    class="fas fa-user-plus"></i>Team</a>
                                        </li>
                                        <li class="menu-item"><a href="elements-tabs.html"><i
                                                    class="fas fa-columns"></i>Tabs</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="index.html">Text & Containers</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="elements-pricing-tables.html"><i
                                                    class="fas fa-money-bill-alt"></i>Pricing Tables</a></li>
                                        <li class="menu-item"><a href="elements-info-banners.html"><i
                                                    class="fas fa-info-circle"></i>Info Banners</a></li>
                                        <li class="menu-item"><a href="elements-social-icons.html"><i
                                                    class="fab fa-facebook"></i>Social Icons</a></li>
                                        <li class="menu-item"><a href="elements-blockquote.html"><i
                                                    class="fas fa-quote-right"></i>Blockquote</a></li>
                                        <li class="menu-item"><a href="elements-lists.html"><i
                                                    class="fas fa-list-ul"></i>Lists</a>
                                        </li>
                                        <li class="menu-item"><a href="elements-headings.html"><i
                                                    class="fas fa-heading"></i>Headings</a>
                                        </li>
                                        <li class="menu-item"><a href="elements-columns.html"><i
                                                    class="fas fa-columns"></i>Columns</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="index.html">Infographics</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="elements-services-slider.html"><i
                                                    class="fas fa-sliders-h"></i>Services Slider</a></li>
                                        <li class="menu-item"><a href="elements-progress-bars.html"><i
                                                    class="fas fa-stopwatch"></i>Progress bars</a></li>
                                        <li class="menu-item"><a href="elements-steps-slider.html"><i
                                                    class="fas fa-sliders-h"></i>Steps Slider</a></li>
                                        <li class="menu-item"><a href="elements-countdown.html"><i
                                                    class="fas fa-hourglass"></i>Countdown</a></li>
                                        <li class="menu-item"><a href="elements-counters.html"><i
                                                    class="fas fa-clock"></i>Counters</a>
                                        </li>
                                        <li class="menu-item"><a href="elements-process-steps.html"><i
                                                    class="fas fa-sort-numeric-down"></i>Steps</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content-page-wrapper content-page-wrapper--side-menu">

            <section class="hero-header bg-position-center bg-size-cover"
                style="background-image: url('img/home/hero-classic.jpg')">
                <div class="hero-header--hero-content">
                    <div class="container">
                        <div class="hero-content--hero-wrapper">
                            <div class="hero-wrapper--content">
                                {{-- <h1 class="hero-heading white-color mb-15">مرحبا بك </h1> --}}
                                {{-- <p class="hero-subtitle white-color">نحن هنا لدعمك ومساعدتك في حل مشكلة
                                    الابتزاز الإلكتروني <br> مع توفر العديد من الخدمات التي
                                    تساعدك على استخدام الإنترنت بأمان <br> فلا تتردد في التصفح
                                    الموقع بأكمله! ماذا تنتظر ؟ لنبدأ :)</p> --}}
                            </div>
                            <div class="hero-content--video-wrapper">
                                <div class="video-toggle-type-1">
                                    <a class="video-play-button video-popup" href="#video-post-1">
                                        <i class="fas fa-play"></i>
                                    </a>
                                    <div id="video-post-1" class="white-popup-block mfp-hide mfp-fade">
                                        <div class="modal-video-box">
                                            <iframe src="https://www.youtube.com/embed/iGpuQ0ioPrM"
                                                allowfullscreen></iframe>
                                            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="about-us large-section">
                <div class="container">
                    <div class="row">
                        <div class="col section-heading">
                            <div class="section-heading--title">
                                <h2 class="title--show-title">
                                     نبذة عنا
                                </h2>
                                <h2 class="title--back-title">
                                    نبذة عنا
                                </h2>
                                <p class="title--subtitle">
                                    نحن هنا لدعمك ومساعدتك في حل مشكلة  الابتزاز الإلكتروني  مع توفر العديد من الخدمات التي تساعدك على استخدام الإنترنت بأمان  فلا تتردد في تصفح
                                     الموقع بأكمله! ماذا تنتظر ؟
                                      لنبدأ 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row about-us--images">
                        <div class="col-lg-6">
                            <div class="images--img-wrapper">
                                <img src="img/home/teamwork.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="images--img-wrapper m-0">
                                <img src="img/home/coworking-2.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row about-us--inner-wrapper pt-0">
                        <div class="col-lg-4 inner-wrapper--column-wrapper">
                            <p class="primary-color">Original ideas</p>
                            <h5>Testing for Perfection</h5>
                            <p>Lorem ipsum dolor sit amet, consectet adipisicing. Adipisci aliquid beat commodi
                                consectetur corporis cumque, deleniti doloribus facere fugiat</p>
                        </div>
                        <div class="col-lg-4 inner-wrapper--column-wrapper">
                            <p class="primary-color">Graphic designs</p>
                            <h5>Handcrafted Templates</h5>
                            <p>Lorem ipsum dolor sit amet, consectet adipisicing. Adipisci aliquid beat commodi
                                consectetur corporis cumque, deleniti doloribus facere fugiat</p>
                        </div>
                        <div class="col-lg-4 inner-wrapper--column-wrapper">
                            <p class="primary-color">SEO marketing</p>
                            <h5>Discussion of the Idea</h5>
                            <p>Lorem ipsum dolor sit amet, consectet adipisicing. Adipisci aliquid beat commodi
                                consectetur corporis cumque, deleniti doloribus facere fugiat</p>
                        </div>
                    </div> --}}
                </div>
            </section>

            <section class="services bg-position-center bg-size-cover"
                style="background-image: url(img/home/services.jpg)">
                <div class="gradient-background" style="opacity: 0.9;">
                </div>
                <div class="services-type-1 small-section">
                    <div class="container">
                        <div class="row z-index-100">
                            <div class="col-xl-4 col-md-6 col-xs-12" data-aos="fade-up" data-aos-delay="100"
                                data-aos-anchor-placement="top-bottom" data-aos-easing="ease-in-out"
                                data-aos-duration="700">
                                <div class="services-inner">
                                    <div class="services-inner--icon-wrapper">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                    <div class="services-inner--content-wrapper">
                                        <h5 class="content-wrapper--services-heading white-color">Unique
                                            Design</h5>
                                        <p class="white-color">Lorem ipsum dolor sit amet, consectet adipisicing elit.
                                            Aspernatur ea esse et eveniet fugiat inventore nihil nobis</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-xs-12" data-aos="fade-up" data-aos-delay="150"
                                data-aos-anchor-placement="top-bottom" data-aos-easing="ease-in-out"
                                data-aos-duration="700">
                                <div class="services-inner">
                                    <div class="services-inner--icon-wrapper">
                                        <i class="fas fa-chart-pie"></i>
                                    </div>
                                    <div class="services-inner--content-wrapper">
                                        <h5 class="content-wrapper--services-heading white-color">Keito Advantages</h5>
                                        <p class="white-color">Lorem ipsum dolor sit amet, consectet adipisicing elit.
                                            Aspernatur ea esse et eveniet fugiat inventore nihil nobis</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-xs-12" data-aos="fade-up" data-aos-delay="200"
                                data-aos-anchor-placement="top-bottom" data-aos-easing="ease-in-out"
                                data-aos-duration="700">
                                <div class="services-inner">
                                    <div class="services-inner--icon-wrapper">
                                        <i class="fas fa-globe"></i>
                                    </div>
                                    <div class="services-inner--content-wrapper">
                                        <h5 class="content-wrapper--services-heading white-color">Smooth Animations
                                        </h5>
                                        <p class="white-color">Lorem ipsum dolor sit amet, consectet adipisicing elit.
                                            Aspernatur ea esse et eveniet fugiat inventore nihil nobis</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-xs-12" data-aos="fade-up" data-aos-delay="350"
                                data-aos-anchor-placement="top-bottom" data-aos-easing="ease-in-out"
                                data-aos-duration="700">
                                <div class="services-inner">
                                    <div class="services-inner--icon-wrapper">
                                        <i class="far fa-gem"></i>
                                    </div>
                                    <div class="services-inner--content-wrapper">
                                        <h5 class="content-wrapper--services-heading white-color">Premium Plugins</h5>
                                        <p class="white-color">Lorem ipsum dolor sit amet, consectet adipisicing elit.
                                            Aspernatur ea esse et eveniet fugiat inventore nihil nobis</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-xs-12" data-aos="fade-up" data-aos-delay="400"
                                data-aos-anchor-placement="top-bottom" data-aos-easing="ease-in-out"
                                data-aos-duration="700">
                                <div class="services-inner">
                                    <div class="services-inner--icon-wrapper">
                                        <i class="fas fa-sitemap"></i>
                                    </div>
                                    <div class="services-inner--content-wrapper">
                                        <h5 class="content-wrapper--services-heading white-color">Live Support</h5>
                                        <p class="white-color">Lorem ipsum dolor sit amet, consectet adipisicing elit.
                                            Aspernatur ea esse et eveniet fugiat inventore nihil nobis</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-xs-12" data-aos="fade-up" data-aos-delay="450"
                                data-aos-anchor-placement="top-bottom" data-aos-easing="ease-in-out"
                                data-aos-duration="700">
                                <div class="services-inner">
                                    <div class="services-inner--icon-wrapper">
                                        <i class="fas fa-code"></i>
                                    </div>
                                    <div class="services-inner--content-wrapper">
                                        <h5 class="content-wrapper--services-heading white-color">Exclusive Elements
                                        </h5>
                                        <p class="white-color">Lorem ipsum dolor sit amet, consectet adipisicing elit.
                                            Aspernatur ea esse et eveniet fugiat inventore nihil nobis</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="offers-section large-section border-bottom-simple">
                <div class="container">
                    <div class="row offers-section--inner-wrapper">
                        <div class="col-lg-6">
                            <div class="inner-wrappper-img-wrapper">
                                <img src="img/home/offer.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-6 responsive-padding">
                            <div class="inner-wrapper--title-wrapper">
                                <h4>
                                    Present your services with flexible, convenient and multipurpose
                                </h4>
                            </div>
                            <div class="inner-wrapper--text-wrapper">
                                <p>
                                    Sed ut perspiciatis unde omnis natus error accusantium laudant, totam
                                    aper, eaque ipsa quae illo inventore veritatis quasi beatae vitae dicta sunt
                                    explicabo. Nemo enim ipsam voluptatem voluptas perspiciatis
                                    sit.
                                </p>
                            </div>
                            <div class="inner-wrapper--list-wrapper">
                                <ul class="list-type-1">
                                    <li>
                                        <p>Find more creative ideas for your projects</p>
                                    </li>
                                    <li>
                                        <p>Unlimited power and customization possibilities</p>
                                    </li>
                                    <li>
                                        <p>Keito advantages are pixel perfect design delivered</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="inner-wrapper--button-wrapper">
                                <div class="button-wrapper-type-1">
                                    <a href="index.html">
                                        <div class="btn-type-1">
                                            <i class="fa fa-angle-left"></i>Explore Features
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section
                class="about-company large-section overlay black-overlay parallax-window bg-size-cover bg-position-center"
                data-speed="0.4" data-src="img/home/coworking-3.jpg">
                <div class="container">
                    <div class="about-company--wrapper">
                        <h4 class="wrapper--title mb-25 white-color">
                            Beautiful and easy to use UI, professional animations and drag & drop feature
                        </h4>
                        <div class="button-wrapper-type-2">
                            <a href="blog-post-layout-1-full-width.html" class="btn-type-2">About Company</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="team-section large-section border-bottom-simple">
                <div class="container">
                    <div class="row">
                        <div class="col section-heading">
                            <div class="section-heading--title">
                                <h2 class="title--show-title">
                                    Our Team
                                </h2>
                                <h2 class="title--back-title">
                                    Our Team
                                </h2>
                                <p class="title--subtitle">
                                    Ex mei reformidans ancillae delicata, est amet dolor lobortis id, per no sadipscing
                                    persequeris sea ludus eirmod usu sint dicunt
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="swiper-container swiper-team-type-1 team-slider-type-1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="member-wrapper">
                                    <div class="member-wrapper--img-wrapper">
                                        <img src="img/team/home-team-1.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="member-wrapper--member-description">
                                        <div class="member-description--content-wrapper">
                                            <div class="content-wrapper--content">
                                                <h6 class="content--name white-color">Anastasia Doe</h6>
                                                <p class="content--position">Lead Developer</p>
                                                <div class="content--social-wrapper">
                                                    <a class="social-wrapper--social-box" href="blog-blocks.html"><i
                                                            class="fab fa-facebook-f"></i></a>
                                                    <a class="social-wrapper--social-box" href="blog-blocks.html"><i
                                                            class="fab fa-twitter"></i></a>
                                                    <a class="social-wrapper--social-box" href="blog-blocks.html"><i
                                                            class="fab fa-google-plus-g"></i></a>
                                                    <a class="social-wrapper--social-box" href="blog-blocks.html"><i
                                                            class="fab fa-linkedin-in"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide ">
                                <div class="member-wrapper">
                                    <div class="img-wrapper">
                                        <img src="img/team/home-team-2.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="member-wrapper--member-description">
                                        <div class="member-description--content-wrapper">
                                            <div class="content-wrapper--content">
                                                <h6 class="content--name white-color">Michael May</h6>
                                                <p class="content--position">Developer</p>
                                                <div class="content--social-wrapper">
                                                    <a class="social-wrapper--social-box" href="blog-blocks.html"><i
                                                            class="fab fa-facebook-f"></i></a>
                                                    <a class="social-wrapper--social-box" href="blog-blocks.html"><i
                                                            class="fab fa-twitter"></i></a>
                                                    <a class="social-wrapper--social-box" href="blog-blocks.html"><i
                                                            class="fab fa-google-plus-g"></i></a>
                                                    <a class="social-wrapper--social-box" href="blog-blocks.html"><i
                                                            class="fab fa-linkedin-in"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide ">
                                <div class="member-wrapper">
                                    <div class="img-wrapper">
                                        <img src="img/team/home-team-3.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="member-wrapper--member-description">
                                        <div class="member-description--content-wrapper">
                                            <div class="content-wrapper--content">
                                                <h6 class="content--name white-color">John Mark</h6>
                                                <p class="content--position">Lead Developer</p>
                                                <div class="content--social-wrapper">
                                                    <a class="social-wrapper--social-box" href="blog-blocks.html"><i
                                                            class="fab fa-facebook-f"></i></a>
                                                    <a class="social-wrapper--social-box" href="blog-blocks.html"><i
                                                            class="fab fa-twitter"></i></a>
                                                    <a class="social-wrapper--social-box" href="blog-blocks.html"><i
                                                            class="fab fa-google-plus-g"></i></a>
                                                    <a class="social-wrapper--social-box" href="blog-blocks.html"><i
                                                            class="fab fa-linkedin-in"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide ">
                                <div class="member-wrapper">
                                    <div class="img-wrapper">
                                        <img src="img/team/home-team-4.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="member-wrapper--member-description">
                                        <div class="member-description--content-wrapper">
                                            <div class="content-wrapper--content">
                                                <h6 class="content--name white-color">Kate Li</h6>
                                                <p class="content--position">Lead Developer</p>
                                                <div class="content--social-wrapper">
                                                    <a class="social-wrapper--social-box" href="blog-blocks.html"><i
                                                            class="fab fa-facebook-f"></i></a>
                                                    <a class="social-wrapper--social-box" href="blog-blocks.html"><i
                                                            class="fab fa-twitter"></i></a>
                                                    <a class="social-wrapper--social-box" href="blog-blocks.html"><i
                                                            class="fab fa-google-plus-g"></i></a>
                                                    <a class="social-wrapper--social-box" href="blog-blocks.html"><i
                                                            class="fab fa-linkedin-in"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide ">
                                <div class="member-wrapper">
                                    <div class="img-wrapper">
                                        <img src="img/team/home-team-5.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="member-wrapper--member-description">
                                        <div class="member-description--content-wrapper">
                                            <div class="content-wrapper--content">
                                                <h6 class="content--name white-color">Cory Tailor</h6>
                                                <p class="content--position">Lead Developer</p>
                                                <div class="content--social-wrapper">
                                                    <a class="social-wrapper--social-box" href="blog-blocks.html"><i
                                                            class="fab fa-facebook-f"></i></a>
                                                    <a class="social-wrapper--social-box" href="blog-blocks.html"><i
                                                            class="fab fa-twitter"></i></a>
                                                    <a class="social-wrapper--social-box" href="blog-blocks.html"><i
                                                            class="fab fa-google-plus-g"></i></a>
                                                    <a class="social-wrapper--social-box" href="blog-blocks.html"><i
                                                            class="fab fa-linkedin-in"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination-bullets-common"></div>
                    </div>
                </div>
            </section>

            <section
                class="about-company large-section overlay dark-overlay parallax-window bg-size-cover bg-position-center"
                data-speed="0.5" data-src="img/home/coworking.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 img-wrapper">
                            <div class="image bg-size-cover bg-position-center"
                                style="background-image: url('img/home/worker-4.jpg')">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 img-wrapper">
                            <div class="image bg-size-cover bg-position-center"
                                style="background-image: url('img/home/worker-5.jpg')">
                                <div class="video-wrapper-type-2 z-index-100">
                                    <a class="video-toggle-type-2 video-popup" href="#video-post-2">
                                        <div class="play-btn-scale">
                                            <i class="fa fa-play"></i>
                                        </div>
                                    </a>
                                    <div id="video-post-2" class="white-popup-block mfp-hide mfp-fade">
                                        <div class="modal-video-box">
                                            <iframe src="https://www.youtube.com/embed/iGpuQ0ioPrM"
                                                allowfullscreen></iframe>
                                            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 responsive-padding">
                            <div class="content-full-height">
                                <h4 class="white-color mb-10">
                                    Keito advantages are pixel perfect design
                                </h4>
                                <p class="mb-25">
                                    Sed ut perspiciatis unde omnis natus error accusantium laudantium, totam
                                    aperiam, eaque ipsa quae illo inventore veritatis quasi
                                </p>
                                <div class="button-wrapper-type-2">
                                    <a href="team.html" class="btn-type-2">Meet Our Team</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="portfolio-section">
                <div class="container">
                    <div class="row">
                        <div class="col section-heading">
                            <div class="section-heading--title">
                                <h2 class="title--show-title">
                                    Recent Projects
                                </h2>
                                <h2 class="title--back-title">
                                    Recent Projects
                                </h2>
                                <p class="title--subtitle">
                                    Ex mei reformidans ancillae delicata, est amet dolor lobortis id, per no sadipscing
                                    persequeris sea ludus eirmod usu sint dicunt
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="buttons-sort buttons-sort--button-type-1">
                    <button class="buttons-sort--button active-button" data-filter="*">All</button>
                    <button class="buttons-sort--button" data-filter=".web">Web</button>
                    <button class="buttons-sort--button" data-filter=".heath">Heath</button>
                    <button class="buttons-sort--button" data-filter=".nature">Nature</button>
                    <button class="buttons-sort--button" data-filter=".design">Design</button>
                </div>
                <div class="four-column-container">
                    <div class="grid" data-grid-layout-mode="masonry" data-grid-transition="0.7"
                        data-grid-stagger="140">
                        <div class="grid--grid-item grid--grid-item-25 web design nature">
                            <div class="grid-item--grid-inner slide-animation">
                                <img src="img/portfolio/mockup-1.jpg" class="img-fluid" alt="">
                                <a class="grid-inner--description-wrapper" href="blog-blocks.html">
                                    <div class="description-wrapper--content">
                                        <h5 class="content--title">Plant Mockup</h5>
                                        <div class="content--info-wrapper">
                                            <p class="info-wrapper--category">
                                                Nature
                                            </p>
                                            <span class="info-wrapper--separator">/</span>
                                            <p class="info-wrapper--category">
                                                Heath
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="grid--grid-item grid--grid-item-25 design heath">
                            <div class="grid-item--grid-inner slide-animation">
                                <img src="img/portfolio/mockup-2.jpg" class="img-fluid" alt="">
                                <a class="grid-inner--description-wrapper" href="blog-blocks.html">
                                    <div class="description-wrapper--content">
                                        <h5 class="content--title">Lamp Mockup</h5>
                                        <div class="content--info-wrapper">
                                            <p class="info-wrapper--category">
                                                Web
                                            </p>
                                            <span class="info-wrapper--separator">/</span>
                                            <p class="info-wrapper--category">
                                                Design
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="grid--grid-item grid--grid-item-25 web heath">
                            <div class="grid-item--grid-inner slide-animation">
                                <img src="img/portfolio/mockup-3.jpg" class="img-fluid" alt="">
                                <a class="grid-inner--description-wrapper" href="blog-blocks.html">
                                    <div class="description-wrapper--content">
                                        <h5 class="content--title">Bottles Mockup</h5>
                                        <div class="content--info-wrapper">
                                            <p class="info-wrapper--category">
                                                Tech
                                            </p>
                                            <span class="info-wrapper--separator">/</span>
                                            <p class="info-wrapper--category">
                                                Branding
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="grid--grid-item grid--grid-item-25 nature">
                            <div class="grid-item--grid-inner slide-animation">
                                <img src="img/portfolio/mockup-4.jpg" class="img-fluid" alt="">
                                <a class="grid-inner--description-wrapper" href="blog-blocks.html">
                                    <div class="description-wrapper--content">
                                        <h5 class="content--title">Fruits Mockup</h5>
                                        <div class="content--info-wrapper">
                                            <p class="info-wrapper--category">
                                                Lifestyle
                                            </p>
                                            <span class="info-wrapper--separator">/</span>
                                            <p class="info-wrapper--category">
                                                Sun
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="grid--grid-item grid--grid-item-25 design web">
                            <div class="grid-item--grid-inner slide-animation">
                                <img src="img/portfolio/mockup-5.jpg" class="img-fluid" alt="">
                                <a class="grid-inner--description-wrapper" href="blog-blocks.html">
                                    <div class="description-wrapper--content">
                                        <h5 class="content--title">Cup Mockup</h5>
                                        <div class="content--info-wrapper">
                                            <p class="info-wrapper--category">
                                                Art
                                            </p>
                                            <span class="info-wrapper--separator">/</span>
                                            <p class="info-wrapper--category">
                                                Design
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="grid--grid-item grid--grid-item-25 web nature">
                            <div class="grid-item--grid-inner slide-animation">
                                <img src="img/portfolio/mockup-6.jpg" class="img-fluid" alt="">
                                <a class="grid-inner--description-wrapper" href="blog-blocks.html">
                                    <div class="description-wrapper--content">
                                        <h5 class="content--title">Plant Mockup</h5>
                                        <div class="content--info-wrapper">
                                            <p class="info-wrapper--category">
                                                Nature
                                            </p>
                                            <span class="info-wrapper--separator">/</span>
                                            <p class="info-wrapper--category">
                                                Oxygen
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="grid--grid-item grid--grid-item-25 heath nature">
                            <div class="grid-item--grid-inner slide-animation">
                                <img src="img/portfolio/mockup-7.jpg" class="img-fluid" alt="">
                                <a class="grid-inner--description-wrapper" href="blog-blocks.html">
                                    <div class="description-wrapper--content">
                                        <h5 class="content--title">Cactus Mockup</h5>
                                        <div class="content--info-wrapper">
                                            <p class="info-wrapper--category">
                                                Nature
                                            </p>
                                            <span class="info-wrapper--separator">/</span>
                                            <p class="info-wrapper--category">
                                                Green
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="grid--grid-item grid--grid-item-25 nature design">
                            <div class="grid-item--grid-inner slide-animation">
                                <img src="img/portfolio/mockup-8.jpg" class="img-fluid" alt="">
                                <a class="grid-inner--description-wrapper" href="blog-blocks.html">
                                    <div class="description-wrapper--content">
                                        <h5 class="content--title">Pineapple Mockup</h5>
                                        <div class="content--info-wrapper">
                                            <p class="info-wrapper--category">
                                                Heath
                                            </p>
                                            <span class="info-wrapper--separator">/</span>
                                            <p class="info-wrapper--category">
                                                Art
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="features black-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="features--images col-xl-3 col-md-12 bg-size-cover bg-position-center"
                            style="background: url(img/home/feature2.jpg)"></div>
                        <div class="col-xl-3 col-md-12">
                            <div class="features--content-wrapper">
                                <p class="primary-color mb-10">Build perfect websites</p>
                                <h5 class="white-color mb-10">Pixel perfect design and maintainable clear
                                    code</h5>
                                <p class="gray-color mb-20">Lorem ipsum dolor sit amet magni, laborum
                                    adipisicing. Alias atque,laborum libero magni mollitia nam nisi quae
                                    adipisicing.</p>
                                <div class="button-wrapper-type-2">
                                    <a href="services.html" class="btn-type-2">Core Features</a>
                                </div>
                            </div>
                        </div>
                        <div class="features--images col-xl-3 col-md-12 bg-size-cover bg-position-center"
                            style="background: url(img/home/feature1.jpg)"></div>
                        <div class="col-xl-3 col-md-12">
                            <div class="features--content-wrapper">
                                <p class="primary-color mb-10">Build perfect websites</p>
                                <h5 class="white-color mb-10">Pixel perfect design and maintainable clear
                                    code</h5>
                                <p class="gray-color mb-20">Lorem ipsum dolor sit amet magni, laborum
                                    adipisicing. Alias atque,laborum libero magni mollitia nam nisi quae
                                    adipisicing.</p>
                                <div class="button-wrapper-type-2">
                                    <a href="services.html" class="btn-type-2">Core Features</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="counters">
                <div class="container-fluid">
                    <div class="counters-type-1">
                        <div class="row counters-wrapper counters-list-wrapper" data-animation-type="fade"
                            data-animation-duration="2">
                            <div class="col-lg-3 col-6 counter-box inner-wrapper--counter-wrapper">
                                <div class="counter-wrapper--counter">
                                    <p class="title-counter">Project Done</p>
                                    <span class="counter--value" data-counter-value="934">0</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6 counter-box inner-wrapper--counter-wrapper">
                                <div class="counter-wrapper--counter">
                                    <p class="title-counter">Photos taken</p>
                                    <span class="counter--value" data-counter-value="657">0</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6 counter-box inner-wrapper--counter-wrapper">
                                <div class="counter-wrapper--counter">
                                    <p class="title-counter">Awards received</p>
                                    <span class="counter--value" data-counter-value="432">0</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6 counter-box inner-wrapper--counter-wrapper">
                                <div class="counter-wrapper--counter">
                                    <p class="title-counter">People loved</p>
                                    <span class="counter--value" data-counter-value="523">0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="testimonials small-section bg-size-cover bg-position-center overlay black-overlay"
                style="background-image: url('img/home/coworking.jpg')">
                <div class="testimonials-slider-type-1">
                    <div class="swiper-wrapper">
                        <div class="testimonials-slider-type-1--item swiper-slide">
                            <div class="item--img">
                                <img src="img/testimonials/testimonial4.jpg" alt="">
                            </div>
                            <div class="item--content">
                                <h6 class="content--name">Maria Gray</h6>
                                <p class="content--position">Developer</p>
                                <div class="stars-wrapper">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
                                    “Thanks for a great session, you were grounded but inspirational. It was really
                                    impactful and there was a lot of positive feedback from a diverse audience. I really
                                    felt that we had the tools to enable the teams to
                                    experiment. … Our innovation champions in the business will reach out to you to
                                    discuss
                                    next steps.”</p>
                            </div>
                        </div>
                        <div class="testimonials-slider-type-1--item swiper-slide">
                            <div class="item--img">
                                <img src="img/testimonials/testimonial.jpg" alt="">
                            </div>
                            <div class="item--content">
                                <h6 class="name">Anna May</h6>
                                <p class="content--position">Designer</p>
                                <div class="stars-wrapper">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
                                    “Thank you for kicking off the inaugural PA360 in such style! I’m delighted to say
                                    that
                                    the day was a resounding success, and we have had some fantastic feedback. Those who
                                    attended were very impressed with your
                                    presentation. I look forward to working with you again.”
                                </p>
                            </div>
                        </div>
                        <div class="testimonials-slider-type-1--item swiper-slide">
                            <div class="item--img">
                                <img src="img/testimonials/testimonial2.jpg" alt="">
                            </div>
                            <div class="item--content">
                                <h6 class="name">John Smith</h6>
                                <p class="content--position">Designer</p>
                                <div class="stars-wrapper">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                </div>
                                <p>
                                    “Thanks so much for helping make yesterday be the success it was – your presentation
                                    content and professional skill in delivering a closing keynote after a long day was
                                    exceptional- thought provoking engaging with
                                    great humour too – a true professional!”</p>
                            </div>
                        </div>
                        <div class="testimonials-slider-type-1--item swiper-slide">
                            <div class="item--img">
                                <img src="img/testimonials/testimonial3.jpg" alt="">
                            </div>
                            <div class="item--content">
                                <h6 class="name">Lena Licko</h6>
                                <p class="content--position">Designer</p>
                                <div class="stars-wrapper">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
                                    “I attended your session on Strategic Thinking in NJ. I wanted to let you know how
                                    much
                                    I thoroughly enjoyed listening to your presentation. It was inspiring, thought
                                    provoking
                                    and entertaining all at the same
                                    time.Thank you for your time.”</p>
                            </div>
                        </div>
                        <div class="testimonials-slider-type-1--pagination"></div>
                    </div>
                </div>
            </section>

            <section class="latest-stories large-section">
                <div class="container">
                    <div class="row">
                        <div class="col section-heading">
                            <div class="section-heading--title">
                                <h2 class="title--show-title">
                                    Latest News
                                </h2>
                                <h2 class="title--back-title">
                                    Latest News
                                </h2>
                                <p class="title--subtitle">
                                    Ex mei reformidans ancillae delicata, est amet dolor lobortis id, per no sadipscing
                                    persequeris sea ludus eirmod usu sint dicunt
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-sm-12">
                            <div class="tilt-wrapper recent-posts-type-3 recent-posts-wrapper" data-tilt-value="5"
                                data-tilt-speed="500" data-tilt-scale="1" data-tilt-perspective="1000"
                                style="background-image: url(img/home/worker-4.jpg)">
                                <div class="recent-posts-wrapper--content-wrapper">
                                    <div class="content-wrapper--box-tilt">
                                        <h5 class="box-tilt--title">I help design my own tennis clothes</h5>
                                    </div>
                                    <div class="content-wrapper--box-tilt">
                                        <p class="box-tilt--content">Quo ei quod alii pertinax, ut solum eleifend nec,
                                            et
                                            error epicuri nominav</p>
                                    </div>
                                    <a href="blog-post-layout-1-full-width.html" class="content-wrapper--link">
                                        <p>Read the story</p>
                                        <i class="fa fa-long-arrow-alt-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-12">
                            <div class="tilt-wrapper recent-posts-type-3 recent-posts-wrapper" data-tilt-value="5"
                                data-tilt-speed="500" data-tilt-scale="1" data-tilt-perspective="1000"
                                style="background-image: url(img/home/team-2.jpg)">
                                <div class="recent-posts-wrapper--content-wrapper">
                                    <div class="content-wrapper--box-tilt">
                                        <h5 class="box-tilt--title">Design is not for philosophy it's for life</h5>
                                    </div>
                                    <div class="content-wrapper--box-tilt">
                                        <p class="box-tilt--content">Quo ei quod alii pertinax, ut solum eleifend nec,
                                            et
                                            error epicuri nominav</p>
                                    </div>
                                    <a href="blog-post-layout-1-full-width.html" class="content-wrapper--link">
                                        <p>Read the story</p>
                                        <i class="fa fa-long-arrow-alt-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-12">
                            <div class="tilt-wrapper recent-posts-type-3 recent-posts-wrapper" data-tilt-value="5"
                                data-tilt-speed="500" data-tilt-scale="1" data-tilt-perspective="1000"
                                style="background-image: url(img/home/worker-1.jpg)">
                                <div class="recent-posts-wrapper--content-wrapper">
                                    <div class="content-wrapper--box-tilt">
                                        <h5 class="box-tilt--title">How to Create Custom Newsletters</h5>
                                    </div>
                                    <div class="content-wrapper--box-tilt">
                                        <p class="box-tilt--content">Quo ei quod alii pertinax, ut solum eleifend nec,
                                            et
                                            error epicuri nominav</p>
                                    </div>
                                    <a href="blog-post-layout-1-full-width.html" class="content-wrapper--link">
                                        <p>Read the story</p>
                                        <i class="fa fa-long-arrow-alt-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <footer class="footer-type-1">
                <div class="footer-type-1--footer-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-3 col-md-6 col-xs-12">
                                <div class="footer-body--sidebar-widget">
                                    <h6 class="heading">About Us</h6>
                                    <p class="sidebar-widget--description">Keito is a team of brand strategists,
                                        creative designers and developers. Enjoy the Keito's original design, functional
                                        features, responsive
                                        layouts.</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-xs-12">
                                <div class="footer-body--sidebar-widget">
                                    <h6 class="heading">Blog</h6>
                                    <ul class="sidebar-widget--latest-posts">
                                        <li class="latest-posts--post">
                                            <a href="index.html" class="post--post-inner">
                                                <div class="post-inner--img-wrapper">
                                                    <img src="img/footer/footer-blog-3.jpg" alt=""
                                                        class="img-fluid">
                                                </div>
                                            </a>
                                            <div class="post--post-body">
                                                <h6 class="post-body--post-title"><a href="index.html">Everyday
                                                        people are not very
                                                        good designers</a></h6>
                                                <div class="post-body--description">
                                                    <p class="date">May 28, 2022</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="latest-posts--post">
                                            <a href="index.html" class="post--post-inner">
                                                <div class="post-inner--img-wrapper">
                                                    <img src="img/footer/footer-blog-5.jpg" alt=""
                                                        class="img-fluid">
                                                </div>
                                            </a>
                                            <div class="post--post-body">
                                                <h6 class="post-body--post-title"><a href="index.html">Good Design
                                                        is a Lot Like
                                                        Clear Thinking</a></h6>
                                                <div class="post-body--description">
                                                    <p class="date">June 14, 2022</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-xs-12">
                                <div class="footer-body--sidebar-widget">
                                    <h6 class="heading">Dribble</h6>
                                    <div class="sidebar-widget--social-networks">
                                        <div class="social-networks--dribble-widget">
                                            <a href="https://dribbble.com/" class="gallery--image-item">
                                                <img src="img/footer/footer-widget-1.jpg" alt=""
                                                    class="img-fluid">
                                                <i class="fab fa-dribbble"></i>
                                            </a>
                                            <a href="https://dribbble.com/" class="gallery--image-item">
                                                <img src="img/footer/footer-creative-3.jpg" alt=""
                                                    class="img-fluid">
                                                <i class="fab fa-dribbble"></i>
                                            </a>
                                            <a href="https://dribbble.com/" class="gallery--image-item">
                                                <img src="img/footer/footer-widget-2.jpg" alt=""
                                                    class="img-fluid">
                                                <i class="fab fa-dribbble"></i>
                                            </a>
                                            <a href="https://dribbble.com/" class="gallery--image-item">
                                                <img src="img/footer/footer-widget-4.jpg" alt=""
                                                    class="img-fluid">
                                                <i class="fab fa-dribbble"></i>
                                            </a>
                                            <a href="https://dribbble.com/" class="gallery--image-item">
                                                <img src="img/footer/footer-creative-1.jpg" alt=""
                                                    class="img-fluid">
                                                <i class="fab fa-dribbble"></i>
                                            </a>
                                            <a href="https://dribbble.com/" class="gallery--image-item">
                                                <img src="img/footer/footer-creative-2.jpg" alt=""
                                                    class="img-fluid">
                                                <i class="fab fa-dribbble"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-xs-12">
                                <div class="footer-body--sidebar-widget">
                                    <h6 class="heading">Connect</h6>
                                    <ul class="sidebar-widget--contact-info">
                                        <li>10 Main Isle Apt. 19485</li>
                                        <li><a href="index.html" class="animation-link">1-800-222-000</a></li>
                                        <li>Company name</li>
                                        <li><a href="index.html" class="animation-link"><span class="__cf_email__"
                                                    data-cfemail="bdcacacafdcad2cfd9cdcfd8cece93ded2d0">[email&#160;protected]</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
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
