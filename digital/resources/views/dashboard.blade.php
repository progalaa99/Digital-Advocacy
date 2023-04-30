<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex antialiased ">

        <div class="bg-darkalaa p-8 mr-8 ">
            <h1 class="text-8xl text-white">Welcome</h1>
            <h2 class="text-2xl text-white">We are here to support you and help you solve the problem of
                electronic extortion, <br> with the availability of many services that
                help you to use the Internet safely,<br> do not hesitate to browse
                the entire site! what are you waiting for ? Lets start :) </h2>
        </div>
        <div class="bg-darkalaa p-4 mr-4 absolute top-60  right-60">
            <img class="w-128 h-128   rounded-tl-3xl rounded-bl-lg transform -translate-x-1/9 -translate-y-1/11 "
                src="/photo/manusecomputer.jpg" alt="Man Using computer">
        </div>
    </div>{{--      --}}
    <div class="flex-shrink-0 w-1/2 p-1 mr-2 h-10 w-60 bg-buttonalaa absolute top-1/2 left-1/2 transform -translate-x-2/3 -translate-y-1/2  border-none   rounded text-center items-center ">
        <a href="" class="font-semibold text-white py-12 text-2xl ">Technical Education</a>
    </div>
    <div class="absolute pt-20 top-1/2 left-1/2 transform -translate-x-2/3 -translate-y-9/3">
        <h1 class="text-4xl text-white">Our services</h1>
        
    </div>
    <div class="flex top-1/2 left-1/2 transform -translate-x-1/15 -translate-y-1/11">
        <div class="bg-gray-300 p-4 mr-4">
            <img class="w-32 h-32 pt-10  transform -translate-x-1/9 -translate-y-1/11 "
                src="/icon/privacy-svgrepo-com.svg" alt="شعار الشركة">
            <p>We teach you the safe
                use of the Internet !</p>
        </div>
        <div class="bg-gray-300 p-4 mr-4">
            <img class="w-32 h-32 pt-10  transform -translate-x-1/9 -translate-y-1/11 "
                src="/icon/privacy-svgrepo-com.svg" alt="شعار الشركة">
            <p>File a complaint and
                wait for the criminal
                to be arrested !</p>
        </div>
        <div class="bg-gray-300 p-4 mr-4">
            <img class="w-32 h-32 pt-10  transform -translate-x-1/9 -translate-y-1/11 "
                src="/icon/privacy-svgrepo-com.svg" alt="شعار الشركة">
            <p>emotional support

                Contact a specialist,
                tips !</p>
        </div>
    </div>


    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div> --}}
</x-app-layout>
