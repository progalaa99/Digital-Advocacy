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
    <title>المناصرة الرقمية</title>

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
                            <a href="{{ route('dashboard') }}" :active="request() - > routeIs('dashboard')">
                                {{ __('الصفحة الرئيسية ') }}</a>
                            <a href="{{ route('complaint') }}" :active="request() - > routeIs('dashboard')">
                                {{ __('تقديم مشكلة') }}</a>

                            <a class="menu-item menu-item-has-children" href="{{ route('reports') }}"
                                :active="request() - > routeIs('dashboard')">
                                {{ __('تقرير') }}
                            </a>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#">مقالات</a>
                            <ul class="sub-menu">
                               
                                <li class="menu-item"><a href="{{ route('blogedu.technical-edu') }}"
                                        :active="request() - > routeIs('dashboard')">
                                        {{ __('التعلم التكنلوجي') }}</a>
                                    <a href="{{ route('blogsupport.support') }}"
                                        :active="request() - > routeIs('dashboard')">
                                        {{ __('الدعم النفسي') }}</a>
                                </li>
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
                        <li class="menu-item ">
                            <a href="{{ route('dashboard') }}" :active="request() - > routeIs('dashboard')">
                                {{ __('الصفحة الرئيسية ') }}</a>
                            <a href="{{ route('complaint') }}" :active="request() - > routeIs('dashboard')">
                                {{ __('تقديم مشكلة') }}</a>

                            <a class="menu-item menu-item-has-children" href="{{ route('reports') }}"
                                :active="request() - > routeIs('dashboard')">
                                {{ __('تقرير') }}
                            </a>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#">مقالات</a>
                            <ul class="sub-menu">
                               
                                <li class="menu-item"><a href="{{ route('blogedu.technical-edu') }}"
                                        :active="request() - > routeIs('dashboard')">
                                        {{ __('التعلم التكنلوجي') }}</a>
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
        <div class="content-page-wrapper content-page-wrapper--side-menu">

            <header class="hero-header-parallax">
                <div class="parallax-scene hero-header--inner-wrapper">
                    <div class="inner-wrapper--image-wrapper" data-depth="0.1">
                        <div class="image-wrapper--image" style="background-image: url(img/home/coworking-2.jpg)">
                        </div>
                    </div>
                    <div class="inner-wrapper--content-wrapper" data-depth="0.35">
                        <div class="content-wrapper--content">
                            <div class="hero-content--video-wrapper">
                            </div>
                            <p class="hero-subtitle white-color text-center mb-10"> مرحبا بك في</p>
                            <h1 class="hero-heading text-center white-color">موقع المناصرة الرقمية </h1>
                        </div>
                    </div>
                    <div class="canvas-wrapper-particles" id="particles-wrapper" data-depth="0.1">
                    </div>
                </div>
            </header>

            <section class="about-us large-section">
                <div class="container">
                    <div class="row">
                        <div class="col section-heading-type-3">
                            <h2 class="section-heading--main-title">
                               نبذة عنا 
                            </h2>
                            <ul class="section-heading--angles">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row about-us--images">
                        <div class="col-lg-7">
                            {{-- <div class="images--img-wrapper bg-position-center bg-size-cover image"
                                style="background-image: url('img/home/team-3.jpg')">
                            </div> --}}
                        </div>
                        <div class="col-lg-5">
                            {{-- <div class="images--img-wrapper m-0 bg-position-center bg-size-cover image"
                                style="background-image: url('img/home/people-2.jpg')">
                            </div> --}}
                        </div>
                    </div>
                    <div class="row about-us--inner-wrapper border-top-simple">
                        <div class="col-lg-4 inner-wrapper--column-wrapper">
                            <h5 class="mb-10">المقالات والموارد التعليمية</h5>
                            <p class="pr-50">يحتوي الموقع على مجموعة من المقالات والموارد التعليمية التي توفر معلومات ونصائح حول الأمان السيبراني وكيفية حماية البيانات الشخصية على الإنترنت. تتناول هذه الموارد مواضيع مثل كلمات المرور القوية، والتحقق بخطوتين، والتعرف على البريد الإلكتروني المزيف، والتصيد الاحتيالي، والتشفير، وغيرها من المفاهيم الأساسية في مجال الأمن السيبراني.</p>
                        </div>
                        <div class="col-lg-4 inner-wrapper--column-wrapper">
                            <h5 class="mb-10">المجتمع والمنتدى</h5>
                            <p class="pr-50">
                                يوفر الموقع مجتمعًا نشطًا للمستخدمين يمكنهم مناقشة وتبادل المعلومات والأفكار حول الأمن السيبراني. يمكن للمستخدمين طرح الأسئلة ومشاركة التحديات وتقديم النصائح والحلول لبعضهم البعض. يعمل المجتمع على تعزيز التوعية والتفاعل وتعزيز الثقافة الأمنية في العالم الرقمي.</p>
                        </div>
                        <div class="col-lg-4 inner-wrapper--column-wrapper">
                            <h5 class="inner-wrapper--column-wrapper--title">باختصار، يهدف موقع المناصرة الرقمية إلى تمكين الأفراد وتوفير المعلومات والأدوات اللازمة للحفاظ على الأمان السيبراني وحماية المعلومات الشخصية على الإنترنت. يسعى الموقع لتعزيز التوعية وبناء مجتمع قوي من المهتمين بالأمن السيبراني.</h5>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col section-heading-type-3">
                                <h2 class="section-heading--main-title">
                                   خدماتنا
                                </h2>
                                <ul class="section-heading--angles">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- <section class="black-section">
                <div class="container-fluid">
                    <div class="services-slider-type-1">
                        <div class="swiper-container services-slider-wrapper--inner-wrapper steps-wrapper--swiper">
                            <div class="swiper-wrapper inner-wrapper--slides">
                                <div class="swiper-slide slides--slide">
                                    <div class="slide--content">
                                        <div class="content--icon">
                                            <i class="far fa-gem"></i>
                                        </div>
                                        <div class="content--title">
                                            <h5>
                                                Branding
                                            </h5>
                                        </div>
                                        <div class="content--text">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, autem.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide slides--slide">
                                    <div class="slide--content">
                                        <div class="content--icon">
                                            <i class="fas fa-code"></i>
                                        </div>
                                        <div class="content--title">
                                            <h5>
                                                UI/UX designs
                                            </h5>
                                        </div>
                                        <div class="content--text">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, autem.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide slides--slide">
                                    <div class="slide--content">
                                        <div class="content--icon">
                                            <i class="fas fa-globe"></i>
                                        </div>
                                        <div class="content--title">
                                            <h5>
                                                Resource use
                                            </h5>
                                        </div>
                                        <div class="content--text">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, autem.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide slides--slide">
                                    <div class="slide--content">
                                        <div class="content--icon">
                                            <i class="fas fa-volume-up"></i>
                                        </div>
                                        <div class="content--title">
                                            <h5>
                                                Audio Streaming
                                            </h5>
                                        </div>
                                        <div class="content--text">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, autem.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide slides--slide">
                                    <div class="slide--content">
                                        <div class="content--icon">
                                            <i class="fas fa-briefcase"></i>
                                        </div>
                                        <div class="content--title">
                                            <h5>Product Branding</h5>
                                        </div>
                                        <div class="content--text">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, autem.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="inner-wrapper--navigation">
                                <div class="navigation--swiper-navigation">
                                    <div
                                        class="steps-wrapper--swiper-button-prev swiper-navigation--swiper-button-prev swiper-navigation--swiper-button">
                                        <i class="fa fa-long-arrow-alt-left"></i>
                                    </div>
                                    <div
                                        class="steps-wrapper--swiper-button-next swiper-navigation--swiper-button-next swiper-navigation--swiper-button">
                                        <i class="fa fa-long-arrow-alt-right"></i>
                                    </div>
                                </div>
                                <div class="steps-wrapper--swiper-pagination navigation--swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}

            <section class="info-banners border-bottom-simple background-transparent">
                <div class="info-banners-type-1">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-4 image-wrapper parallax-window bg-size-cover bg-position-center"
                                data-speed="0.6" data-src="img/home/workspace-2.jpg">
                            </div>
                            <div class="col-xl-4 content-wrapper" data-aos="zoom-in" data-aos-delay="100"
                                data-aos-easing="ease-in-out" data-aos-duration="700">
                                <div class="content-wrapper--content">
                                    <div class="content--number-wrapper">
                                        <p class="mb-10">01</p>
                                    </div>
                                    <div class="content--description-wrapper">
                                        <h5 class="text-center mb-10">امانك على الانترنت</h5>
                                        <p class="text-center">نحن نعلمك الاستخدام الآمن للإنترنت!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 image-wrapper parallax-window bg-size-cover bg-position-center"
                                data-speed="0.6" data-src="img/home/recent-post-2.jpg">
                            </div>
                            <div class="col-xl-4 content-wrapper" data-aos="zoom-in" data-aos-delay="100"
                                data-aos-easing="ease-in-out" data-aos-duration="700">
                                <div class="content-wrapper--content">
                                    <div class="content--number-wrapper">
                                        <p class="mb-10">02</p>
                                    </div>
                                    <div class="content--description-wrapper">
                                        <h5 class="text-center mb-10">تقديم دعم</h5>
                                        <p class="text-center">الدعم العاطفي
                                            اتصل بأخصائي ، نصائح!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 image-wrapper parallax-window bg-size-cover bg-position-center"
                                data-speed="0.6" data-src="img/home/about-us-2.jpg">
                            </div>
                            <div class="col-xl-4 content-wrapper" data-aos="zoom-in" data-aos-delay="200"
                                data-aos-easing="ease-in-out" data-aos-duration="700">
                                <div class="content-wrapper--content">
                                    <div class="content--number-wrapper">
                                        <p class="mb-10">03</p>
                                    </div>
                                    <div class="content--description-wrapper">
                                        <h5 class="text-center mb-10">تقديم شكوى</h5>
                                        <p class="text-center">قدم شكوى وانتظر حتى يتم القبض على المجرم!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="tabs large-section">
                <div class="container">
                    <div class="tabs--tabs-wrapper tabs-type-1" data-tabs-animation-type="line-fill">
                        <div class="tabs-wrapper--header-wrapper">
                            <ul class="header-wrapper--header">
                                <li class="header--underline-fill"></li>
                            </ul>
                        </div>
                        <div class="tabs-wrapper--content-wrapper">
                            <div class="content-wrapper--tab" data-tabs-tab-title="Branding">
                                <div class="row tab--tab-content">
                                    <div class="col-lg-6">
                                        <div class="tab-content--img-wrapper">
                                            <img src="img/home/teamwork.jpg" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="tab-content--content-wrapper">
                                            <h2>Branding</h2>
                                            <p class="default-subtitle mb-5">We are delivering beautiful digital
                                                products for you</p>
                                            <p class="mb-20">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad aliquid
                                                atque dolorem, doloremque dolores eaque, eius et illo, in libero nihil
                                                provident quae quam repellat repudiandae voluptatum in libero nihil
                                                provident.
                                            </p>
                                            <div class="button-wrapper-type-5">
                                                <a href="services.html" class="btn-type-5">
                                                    Explore Features
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-wrapper--tab" data-tabs-tab-title="Marketing">
                                <div class="row tab--tab-content">
                                    <div class="col-lg-6">
                                        <div class="tab-content--img-wrapper">
                                            <img src="img/home/worker-2.jpg" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="tab-content--content-wrapper">
                                            <h2>Marketing</h2>
                                            <p class="default-subtitle mb-5">We are delivering beautiful digital
                                                products for you</p>
                                            <p class="mb-20">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad aliquid
                                                atque dolorem, doloremque dolores eaque, eius et illo, in libero nihil
                                                provident quae quam repellat repudiandae voluptatum in libero nihil
                                                provident.
                                            </p>
                                            <div class="button-wrapper-type-5">
                                                <a href="services.html" class="btn-type-5">
                                                    Explore Features
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-wrapper--tab" data-tabs-tab-title="Design">
                                <div class="row tab--tab-content">
                                    <div class="col-lg-6">
                                        <div class="tab-content--img-wrapper">
                                            <img src="img/home/services.jpg" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="tab-content--content-wrapper">
                                            <h2>Design</h2>
                                            <p class="default-subtitle mb-5">We are delivering beautiful digital
                                                products for you</p>
                                            <p class="mb-20">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad aliquid
                                                atque dolorem, doloremque dolores eaque, eius et illo, in libero nihil
                                                provident quae quam repellat repudiandae voluptatum in libero nihil
                                                provident.
                                            </p>
                                            <div class="button-wrapper-type-5">
                                                <a href="services.html" class="btn-type-5">
                                                    Explore Features
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-wrapper--tab" data-tabs-tab-title="Modern">
                                <div class="row tab--tab-content">
                                    <div class="col-lg-6">
                                        <div class="tab-content--img-wrapper">
                                            <img src="img/home/offer.jpg" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="tab-content--content-wrapper">
                                            <h2>Development</h2>
                                            <p class="default-subtitle mb-5">We are delivering beautiful digital
                                                products for you</p>
                                            <p class="mb-20">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad aliquid
                                                atque dolorem, doloremque dolores eaque, eius et illo, in libero nihil
                                                provident quae quam repellat repudiandae voluptatum in libero nihil
                                                provident.
                                            </p>
                                            <div class="button-wrapper-type-5">
                                                <a href="services.html" class="btn-type-5">
                                                    Explore Features
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-wrapper--tab" data-tabs-tab-title="Art">
                                <div class="row tab--tab-content">
                                    <div class="col-lg-6">
                                        <div class="tab-content--img-wrapper">
                                            <img src="img/home/teamwork-2.jpg" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="tab-content--content-wrapper">
                                            <h2>Management</h2>
                                            <p class="default-subtitle mb-5">We are delivering beautiful digital
                                                products for you</p>
                                            <p class="mb-20">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad aliquid
                                                atque dolorem, doloremque dolores eaque, eius et illo, in libero nihil
                                                provident quae quam repellat repudiandae voluptatum in libero nihil
                                                provident.
                                            </p>
                                            <div class="button-wrapper-type-5">
                                                <a href="services.html" class="btn-type-5">
                                                    Explore Features
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

         

            <section class="accordions">
                <div class="accordion-gallery">
                    <div class="accordion-gallery--inner-wrapper">
                        <div class="inner-wrapper--items-wrapper">
                            <div class="items-wrapper--item">
                                <div class="item--image-wrapper">
                                    <div class="image-wrapper--image-inner">
                                        <div class="image-inner--image">
                                            <div class="image--background  overlay gray-overlay"
                                                style="background-image: url('img/home/worker-2.jpg')">
                                            </div>
                                        </div>
                                        <div class="image-inner--content-wrapper">
                                            <div class="content-wrapper--content">
                                                <h2 class="white-color">
                                                    كل يوم هو فرصة للنمو والتطور
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="items-wrapper--item">
                                <div class="item--image-wrapper">
                                    <div class="image-wrapper--image-inner">
                                        <div class="image-inner--image">
                                            <div class="image--background overlay gray-overlay"
                                                style="background-image: url('img/home/recent-post-3.jpg')">
                                            </div>
                                        </div>
                                        <div class="image-inner--content-wrapper">
                                            <div class="content-wrapper--content">
                                                <h2 class="white-color">
                                                    الإيجابية هي مفتاح السعادة والنجاح في الحياة
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="items-wrapper--item">
                                <div class="item--image-wrapper">
                                    <div class="image-wrapper--image-inner">
                                        <div class="image-inner--image">
                                            <div class="image--background overlay gray-overlay"
                                                style="background-image: url('img/home/proffesion-1.jpg')">
                                            </div>
                                        </div>
                                        <div class="image-inner--content-wrapper">
                                            <div class="content-wrapper--content">
                                                <h2 class="white-color">
                                                    لديك القدرة على تحقيق أهدافك وتحقيق أحلامك
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="items-wrapper--item">
                                <div class="item--image-wrapper">
                                    <div class="image-wrapper--image-inner">
                                        <div class="image-inner--image">
                                            <div class="image--background overlay gray-overlay"
                                                style="background-image: url('img/home/friends.jpg')">
                                            </div>
                                        </div>
                                        <div class="image-inner--content-wrapper">
                                            <div class="content-wrapper--content">
                                                <h2 class="white-color">
                                                    العالم مليء بالأشخاص الرائعين واللحظات المميزة
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="items-wrapper--item">
                                <div class="item--image-wrapper">
                                    <div class="image-wrapper--image-inner">
                                        <div class="image-inner--image">
                                            <div class="image--background overlay gray-overlay"
                                                style="background-image: url('img/home/team-2.jpg')">
                                            </div>
                                        </div>
                                        <div class="image-inner--content-wrapper">
                                            <div class="content-wrapper--content">
                                                <h2 class="white-color">
                                                    الحياة مليئة بالفرص والإمكانيات الرائعة
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="items-wrapper--item-sizer"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="progress-bars-circle-type-2-section border-bottom-simple">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class=" progress-bar-circle-type-2">
                                <div class="progress-bar-circle-type-2--progress-wrapper">
                                    <div class="progress-bar-circle1 progress-bar-circle" data-progress='0.85'>
                                        <p class="skill-title">85%</p>
                                    </div>
                                    <div class="progress-wrapper--progress-title">
                                        <p>Concept</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="progress-bar-circle-type-2">
                                <div class="progress-bar-circle-type-2--progress-wrapper">
                                    <div class="progress-bar-circle2 progress-bar-circle" data-progress='0.90'>
                                        <p class="skill-title">90%</p>
                                    </div>
                                    <div class="progress-wrapper--progress-title">
                                        <p>Testing</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="progress-bar-circle-type-2">
                                <div class="progress-bar-circle-type-2--progress-wrapper">
                                    <div class="progress-bar-circle3 progress-bar-circle" data-progress='0.95'>
                                        <p class="skill-title">95</p>
                                    </div>
                                    <div class="progress-wrapper--progress-title">
                                        <p>Support</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="progress-bar-circle-type-2 mb-0">
                                <div class="progress-bar-circle-type-2--progress-wrapper">
                                    <div class="progress-bar-circle4 progress-bar-circle" data-progress='1'>
                                        <p class="skill-title">100%</p>
                                    </div>
                                    <div class="progress-wrapper--progress-title">
                                        <p>Idea</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            

            <section class="recent-posts large-section border-top-simple border-bottom-simple">
                <div class="recent-posts-type-1">
                    <div class="container">
                        <div class="row">
                            <div class="col section-heading-type-3">
                                <h2 class="section-heading--main-title">
                                    Recent Posts
                                </h2>
                                <ul class="section-heading--angles">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-4 col-lg-12">
                                <div class="recent-posts-type-1--post-card-wrapper">
                                    <div class="post-card-wrapper--card-content tilt-wrapper" data-tilt-value="5"
                                        data-tilt-speed="800" data-tilt-scale="1" data-tilt-perspective="800">
                                        <div class="card-content--card-head">
                                            <div class="card-head--img-wrapper">
                                                <a href="index.html">
                                                    <img src="img/home/offer.jpg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-content--card-body">
                                            <a href="index.html">
                                                <h5 class="default-title">The Great Content Debate</h5>
                                            </a>
                                            <p class="border-bottom-simple">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Accusamus blanditiis error explicabo laudantium
                                                maiores.</p>
                                            <div class="card-body--card-footer">
                                                <div class="card-footer--date">
                                                    <span><i class="fas fa-calendar-alt"></i>5 June, 2022
                                                    </span>
                                                </div>
                                                <div class="card-footer--post-general">
                                                    <span><i class="fas fa-comment-alt"></i>36</span>
                                                    <span><i class="fas fa-heart"></i>76</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-12">
                                <div class="recent-posts-type-1--post-card-wrapper">
                                    <div class="post-card-wrapper--card-content tilt-wrapper" data-tilt-value="5"
                                        data-tilt-speed="800" data-tilt-scale="1" data-tilt-perspective="800">
                                        <div class="card-content--card-head">
                                            <div class="card-head--img-wrapper">
                                                <a href="index.html">
                                                    <img src="img/home/recent-post.jpg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-content--card-body">
                                            <a href="index.html">
                                                <h5 class="default-title">5 Tips for Your Startup</h5>
                                            </a>
                                            <p class="border-bottom-simple">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Accusamus blanditiis error explicabo laudantium
                                                maiores.</p>
                                            <div class="card-body--card-footer">
                                                <div class="card-footer--date">
                                                    <span><i class="fas fa-calendar-alt"></i>12 May, 2022
                                                    </span>
                                                </div>
                                                <div class="card-footer--post-general">
                                                    <span><i class="fas fa-comment-alt"></i>26</span>
                                                    <span><i class="fas fa-heart"></i>61</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-12">
                                <div class="recent-posts-type-1--post-card-wrapper mb-0">
                                    <div class="post-card-wrapper--card-content tilt-wrapper" data-tilt-value="5"
                                        data-tilt-speed="800" data-tilt-scale="1" data-tilt-perspective="800">
                                        <div class="card-content--card-head">
                                            <div class="card-head--img-wrapper">
                                                <a href="index.html">
                                                    <img src="img/home/recent-post-4.jpg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-content--card-body">
                                            <a href="index.html">
                                                <h5 class="default-title">Turn Your Sketch with Keito</h5>
                                            </a>
                                            <p class="default-text border-bottom-simple">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Accusamus blanditiis error explicabo
                                                laudantium maiores.</p>
                                            <div class="card-body--card-footer">
                                                <div class="card-footer--date">
                                                    <span><i class="fas fa-calendar-alt"></i>25 April, 2022
                                                    </span>
                                                </div>
                                                <div class="card-footer--post-general">
                                                    <span><i class="fas fa-comment-alt"></i>45</span>
                                                    <span><i class="fas fa-heart"></i>66</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="socials small-section black-overlay overlay bg-position-center bg-size-cover"
                style="background-image: url('img/home/workspace-1.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col section-heading-type-2">
                            <h4 class="section-heading--main-title white-color mb-15">
                               تابعنا على منصات التواصل الاجتماعي
                            </h4>
                            <div class="social-icons-type-2 justify-content-center">
                                <a href="index.html" class="social-box facebook-h">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="index.html" class="social-box linkedin-h">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="index.html" class="social-box twitter-h">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="index.html" class="social-box instagram-h">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="index.html" class="social-box google-plus-h">
                                    <i class="fab fa-google"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <footer class="footer-type-3 small-section">
                <div class="footer-type-3--footer-body">
                    <div class="container">
                        <div class="footer-body--footer-sidebar">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-sm-12">
                                    <div class="footer-sidebar--sidebar-widget text-widget">
                                        <h6 class="sidebar-widget--sidebar-title">About Us</h6>
                                        <p>We provide high quality and cost effective services Since our foundation in
                                            2005 our goal has been to use digital technology to create experiences.</p>
                                        <h6 class="sidebar-widget--sidebar-title">Subscribe newsletter</h6>
                                        <form class="sidebar-widget--newsletter-form-widget">
                                            <input type="email" placeholder="Email*" required>
                                            <button type="submit"><i class="fa fa-envelope"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-sm-12">
                                    <div class="footer-sidebar--sidebar-widget latest-posts-widget">
                                        <h6 class="sidebar-widget--sidebar-title">Latest Posts</h6>
                                        <ul class="sidebar-widget--post-list">
                                            <li class="post-list--post">
                                                <a href="index.html">
                                                    <div class="post--img-wrapper">
                                                        <img src="img/footer/footer-creative-1.jpg" alt=""
                                                            class="img-fluid">
                                                    </div>
                                                </a>
                                                <div class="post--post-body">
                                                    <h6 class="post-body--post-title">
                                                        <a href="index.html">Good design is good business</a>
                                                    </h6>
                                                    <div class="post-body--description-box">
                                                        <p class="description-box--date">21 July 2022 | <a
                                                                href="index.html" class="animation-link">Jay
                                                                Hart</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="post-list--post"><a href="index.html">
                                                    <div class="post--img-wrapper">
                                                        <img src="img/footer/footer-creative-2.jpg" alt=""
                                                            class="img-fluid">
                                                    </div>
                                                </a>
                                                <div class="post--post-body">
                                                    <h6 class="post-body--post-title">
                                                        <a href="index.html">Design is thinking made visual</a>
                                                    </h6>
                                                    <div class="post-body--description-box">
                                                        <p class="description-box--date">18 May 2022 | <a
                                                                href="index.html" class="animation-link">Mike
                                                                Snow</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="post-list--post">
                                                <a href="index.html">
                                                    <div class="post--img-wrapper">
                                                        <img src="img/footer/footer-creative-3.jpg" alt=""
                                                            class="img-fluid">
                                                    </div>
                                                </a>
                                                <div class="post--post-body">
                                                    <h6 class="post-body--post-title">
                                                        <a href="index.html">The world’s business leaders</a>
                                                    </h6>
                                                    <div class="post-body--description-box">
                                                        <p class="description-box--date">5 June 2022 | <a
                                                                href="index.html" class="animation-link">Emily
                                                                Smith</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-sm-12">
                                    <div class="footer-sidebar--sidebar-widget contact-info-widget">
                                        <h6 class="sidebar-widget--sidebar-title">Contact Info</h6>
                                        <p class="description">We provide high quality and cost effective services
                                            Since our foundation in 2005 our goal has been to use digital technology to
                                            create experiences.</p>
                                        <ul class="sidebar-widget--contact-info">
                                            <li><i class="fa fa-map-marker"></i>
                                                <p>Factory, London, W2 5JU.</p>
                                            </li>
                                            <li><i class="fa fa-envelope"></i><a href="index.html"
                                                    class="animation-link"><span class="__cf_email__"
                                                        data-cfemail="83e6fbe2eef3efe6c3e7eceee2eaedade0ecee">[email&#160;protected]</span></a>
                                            </li>
                                            <li><i class="fa fa-phone"></i><a href="index.html"
                                                    class="animation-link">1-123-222-567</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-sm-12">
                                    <div class="footer-sidebar--sidebar-widget contact-info-widget">
                                        <h6 class="sidebar-widget--sidebar-title">Tag Cloud</h6>
                                        <div class="tag-cloud">
                                            <a href="index.html" class="tag-cloud--tag">Solution</a>
                                            <a href="index.html" class="tag-cloud--tag">Design</a>
                                            <a href="index.html" class="tag-cloud--tag">Visual</a>
                                            <a href="index.html" class="tag-cloud--tag">Gallery</a>
                                            <a href="index.html" class="tag-cloud--tag">Scss</a>
                                            <a href="index.html" class="tag-cloud--tag">Creative</a>
                                            <a href="index.html" class="tag-cloud--tag">Famous</a>
                                            <a href="index.html" class="tag-cloud--tag">People</a>
                                            <a href="index.html" class="tag-cloud--tag">Food</a>
                                            <a href="index.html" class="tag-cloud--tag">Science</a>
                                            <a href="index.html" class="tag-cloud--tag">HTML</a> <a
                                                href="index.html" class="tag-cloud--tag">Photo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-body--copyright-wrapper">
                            <p class="copyright-wrapper--copyright">
                                <i class="fa fa-copyright"></i>2022 Keito. All rights reserved.
                            </p>
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
