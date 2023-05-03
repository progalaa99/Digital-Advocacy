<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="flex antialiased top-1/2 left-1/2">
        <div class="bg-darkalaa p-48 mr-48 top-1/2 left-1/2">
            {{-- <h1 class="text-8xl text-white font-bold ">Welcome</h1> --}}
            <h2 class="text-2xl text-white  text-center">We are really sorry for the problem you encountered! Don't worry dear, we are all exposed to 
                different problems and so is life, but the most important thing is to learn from mistakes.
                There is a saying by Andre Gide that I would like to mention to you
                <blockquote class="font-bold"> " Life is a very unfair teacher. First it tests us, then it teaches "</blockquote>
                We direct you to the psychological support page, so you can contact a specialist if you need that.
                You can also see the instructions on how to deal with your feelings in such moments</h2>
        </div>
    </div>{{--      --}}
    <div class="flex-shrink-0 w-1/2 p-1 mr-2 h-10 w-60 bg-buttonalaa absolute top-1/2 left-1/2 transform -translate-x-2/3 -translate-y-1/2  border-none   rounded text-center items-center ">
        <a href="" class="font-semibold text-white py-12 text-2xl ">View Support Page</a>
    </div>
    @extends('footer')
   
</x-app-layout>
