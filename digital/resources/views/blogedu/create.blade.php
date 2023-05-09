<x-app-layout>
    <div class="bg-darkalaa p-4 w-3/2  ">
        <form class="flex flex-col items-center " action="" method="POST" enctype="multipart/form-data">
          @csrf
            <label class="block p-2">
              <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-white">
                Title
              </span>
              <input type="text" name="name" class="mt-1 px-10 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"  />
            </label>
            <label class="block p-2">
              <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-white">
               Body
              </span>
              <input type="text" name="nameblackmailer" class="mt-1 px-10 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"  />
            </label>
            <label class="block p-2">
              <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-white">
                Blackmailer information
              </span>
              <textarea type="text" name="Blackmailerinfo" class="mt-1 px-10 py-2 h-20 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"  ></textarea>
            </label>
            <label class="block  "> 
              
              <span class="mr-10">Choose profile photo</span> 
               <input type="file" name="file" class="  block w-full text-sm text-slate-500 pl-20
                file:mr-4 file:py-2 file:px-3
                file:rounded-full file:border-0
                file:text-sm file:font-semibold
                file:bg-violet-50 file:text-violet-700
                hover:file:bg-violet-100
              "/> 
            </label>
           
            
            <div class="bg-buttonalaa border-none   rounded ">
              {{-- <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-white bg-buttonalaa"> --}}

              <button type="submit" class="font-semibold text-white py-2 px-5 text-1xl bg-buttonalaa ">Send</button>
            
              </div>
          
          </form>
    </div>
    @extends('footer')
   
</x-app-layout>
