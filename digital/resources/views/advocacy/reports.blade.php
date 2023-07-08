<x-app-layout>
    <nav class="navigation-menu navigation-menu-desktop navigation-menu--fullscreen-menu">
        <div class="fullscreen-menu--inner-wrapper">
            <div class="">
                
                    <img class="fill-current h-16 w-16 mr-2" src="/icon/mainicon.svg" alt="شعار الموقع">

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
    <div class=" top-1/2 left-1/2 text-black flex justify-center flex-raw ">
        <div id="" style="width: 900px; height: 300px;" class="bg-white pt-10 pl-20">{!! $chart->container() !!}</div>
        {{-- <div class="w-500 h-50 text-white">{!! $chart->container() !!}</div> --}}
        <div class="w-full flex justify-center flex-col  text-white">
            <div class="flex flex-col w-1/2 mx-auto justify-center items-center">
                <div class="grid grid-cols-2 gap-8 bg-red pt-10 top-1/2 left-0 ">
                    <div class="bg-white p-4 w-60 h-100 text-black  ">
                        <h1>The most exposed province</h1>
                        <h2 class="font-bold">@foreach ($regions as $region)
                            {{$region->region}}
                        @endforeach</h2>
                    </div>
                    
                    <div class="bg-white p-4 w-60 h-100 text-black">
                        <h1>Target age groups</h1>
                        <h2 class="font-bold">@foreach ($ageCounts as $ageCount) 
                           ( {{$ageCount->age}} ) 
                        @endforeach</h2>
                    </div>
                    <div class="bg-white p-4 w-60 h-100 text-black">
                        <h1>Male exposure rate: <span class="font-bold"> {{$malePercentage}}% </span></h1>
                        <h2>Female exposure rate: <span class="font-bold">{{$femalePercentage}}%</span> </h2>
                    </div>
                    <div class="bg-white p-4 w-60 h-100 text-black ">
                        <h1>The category most vulnerable to extortion:
                        </h1>
                        <h2 class="font-bold">@foreach ($genderCounts as $genderCount)
                            {{$genderCount->gender}}
                        @endforeach</h2>
                    </div>
                    <div class="bg-white p-4 w-60 h-100 text-black ">
                        <h1>Total Number Of Registrants
                        
                        <h2 class="font-bold">{{$totalCount}} Users</h2> 
                    </h1>
                    </div>
                </div>
                @extends('footer')
            </div>
        </div>

    </div>
</x-app-layout>
{!! $chart->script() !!}

