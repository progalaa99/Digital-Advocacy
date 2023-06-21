@extends('header')

@section('content')
   
    <div
        class=" flex flex-col bg-darkalaa relative sm:flex sm:justify-center sm:items-center min-h-screen  bg-center  selection:bg-red-500 selection:text-white bg-111828">
        

        <div class=" font-bold text-white text-center items-center justify-center p-1 mr-2  ">
            <h1 class="text-8xl">Welcome</h1>
            <h2 class="text-3xl text-center">You must log in first to access the site, if you do not have an account,<br>
                register a new account</h2>

        </div>





        <div class=" relative  flex p-1  right-14  "> 
            @if (Route::has('login'))
                <div class="absolute inset-0 ">
                    @auth
                        <div class=" flex  top-30 left-30 right-30 text-center translate-x-15">

                            <div
                                class="flex-shrink-0 w-1/2 p-1 mr-2 h-10 w-20 bg-buttonalaa   border-none   rounded text-center">

                                <a href="{{ url('/dashboard') }}" class="font-semibold text-white ">Home</a>
                            </div>
                        </div>
                    @else
                        <div class=" flex  top-30 left-30 right-30 text-center translate-x-15">

                            <div
                                class="flex-shrink-0 w-1/2 p-1 mr-2 h-10 w-20 bg-buttonalaa   border-none   rounded text-center">
                                <a href="{{ route('login') }}" class=" font-semibold text-white   ">Log in</a>
                            </div>
                            @if (Route::has('register'))
                                <div
                                    class="flex-shrink-0 w-1/2  p-1 mr-2 h-10 w-20 bg-buttonalaa   border-none   rounded text-center">
                                    <a href="{{ route('register') }}" class=" font-semibold text-white   ">Register</a>
                                </div>
                            @endif
                        </div>
                    @endauth
                </div>
            @endif
        </div>
        <div class="p-2">
            <img class="w-32 h-32 pt-10  transform -translate-x-1/9 -translate-y-1/11 " src="/icon/privacy-svgrepo-com.svg"
                alt="شعار الشركة">
        </div>
         
    </div>
    {{-- </body>
</html> --}}
@endsection
