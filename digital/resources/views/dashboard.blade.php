<x-app-layout>
    <div class="flex antialiased ">

        <div class="bg-darkalaa p-48 mr-48 ">
            <h1 class="text-8xl text-white font-bold ">Welcome</h1>  
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
        <a href="{{route('blogedu.technical-edu')}}" class="font-semibold text-white py-12 text-2xl ">Technical Education</a>
    </div>
    <div class="absolute pt-20 top-1/2 left-1/2 transform -translate-x-2/3 -translate-y-9/3">
        <h1 class="text-4xl text-white font-bold">Our services</h1>
        
    </div>
    <div class="flex    w-1/2 mx-auto absolute bottom-20 left-1/2 transform -translate-x-1/2 place-items-center">
        <div class="bg-gray-300 p-4 mr-4 rounded-md border-mainBorderDiv bg-maindiv shadow-md shadow-gray-600 flex flex-col justify-center items-center ">
            <img class="w-32 h-32 pt-10  transform -translate-x-1/9 -translate-y-1/11 fill-svgfill " fill="svgfill"
                src="/icon/head-idea-icon.svg" alt="head-idea-icon">
                
            <p class="font-bold text-center">We teach you the safe
                use of the Internet !</p>
        </div>
        <div class="bg-gray-300 p-4 mr-4 rounded-md border-mainBorderDiv bg-maindiv shadow-md shadow-gray-600 flex flex-col justify-center items-center ">
            <img class="w-32 h-32 pt-10  transform -translate-x-1/9 -translate-y-1/11 "
                src="/icon/suggestion-box-icon.svg" alt="شعار الشركة">
            <p class="font-bold text-center">File a complaint and
                wait for the criminal
             to be arrested !</p>
        </div>
        <div class="bg-gray-300 p-4 mr-4 rounded-md border-mainBorderDiv bg-maindiv shadow-md shadow-gray-600 flex flex-col justify-center items-center">
            <img class="w-32 h-32 pt-10  transform -translate-x-1/9 -translate-y-1/11 "
                src="/icon/negative-thoughts-icon.svg" alt="شعار الشركة">
            <p class="font-bold text-center">emotional support

                Contact a specialist,
                tips !</p>
        </div>
    </div>

    @extends('footer')
   
</x-app-layout>
