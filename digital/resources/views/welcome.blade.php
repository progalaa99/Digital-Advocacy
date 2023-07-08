@extends('header')

@section('content')
   
    <div class="flex flex-col bg-darkalaa relative justify-center items-center min-h-screen bg-center selection:bg-red-500 selection:text-white bg-111828">

        <div class="font-bold text-white text-center p-4">
            <h1 class="text-4xl md:text-8xl">Welcome</h1>
            <h2 class="text-lg md:text-3xl text-center">You must log in first to access the site. If you do not have an account, register a new account</h2>
        </div>

        <div class="flex flex-col p-4">
            @if (Route::has('login'))
                <div>
                    @auth
                        <div class="flex justify-center mt-4">
                            <div class="w-40 md:w-48 bg-buttonalaa rounded text-center">
                                <a href="{{ url('/dashboard') }}" class="font-semibold text-white py-2">Home</a>
                            </div>
                        </div>
                    @else
                        <div class="flex flex-col items-center mt-4">
                            <div class="w-40 md:w-48 bg-buttonalaa rounded text-center mb-2">
                                <a href="{{ route('login') }}" class="font-semibold text-white py-2">Log in</a>
                            </div>
                            @if (Route::has('register'))
                                <div class="w-40 md:w-48 bg-buttonalaa rounded text-center">
                                    <a href="{{ route('register') }}" class="font-semibold text-white py-2">Register</a>
                                </div>
                            @endif
                        </div>
                    @endauth
                </div>
            @endif
        </div>

        <div class="p-4">
            <img class="w-24 md:w-32 h-24 md:h-32" src="/icon/privacy-svgrepo-com.svg" alt="شعار الشركة">
        </div>
         
    </div>

@endsection
