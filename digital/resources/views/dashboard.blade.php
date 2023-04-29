<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="flex">
        <div class="bg-gray-300 p-4 mr-4">
            <h1>Welcome</h1>
            <h2>We are here to support you and help you solve the problem of 
                electronic extortion, with the availability of many services <br> that 
                help you to use the Internet safely, do not hesitate to browse 
                the entire site! what are you waiting for ? Lets start :) </h2>
        </div>
        <div class="bg-gray-500 p-4">
            <img class="w-32 h-32 pt-10  transform -translate-x-1/9 -translate-y-1/11 " src="/icon/privacy-svgrepo-com.svg" alt="شعار الشركة">
        </div>
      </div>
      <div>
        <a href="">Technical Education</a>
      </div>
      <div>
        Our services
      </div>
      <div class="flex">
        <div class="bg-gray-300 p-4 mr-4">
            <img class="w-32 h-32 pt-10  transform -translate-x-1/9 -translate-y-1/11 " src="/icon/privacy-svgrepo-com.svg" alt="شعار الشركة">
<p>We teach you the safe 
    use of the Internet !</p>
        </div>
        <div class="bg-gray-300 p-4 mr-4">
            <img class="w-32 h-32 pt-10  transform -translate-x-1/9 -translate-y-1/11 " src="/icon/privacy-svgrepo-com.svg" alt="شعار الشركة">
<p>File a complaint and 
    wait for the criminal 
    to be arrested !</p>
        </div>
        <div class="bg-gray-300 p-4 mr-4">
            <img class="w-32 h-32 pt-10  transform -translate-x-1/9 -translate-y-1/11 " src="/icon/privacy-svgrepo-com.svg" alt="شعار الشركة">
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
