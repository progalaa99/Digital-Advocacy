<x-app-layout>
    <div class="bg-darkalaa p-4 w-3/2   flex justify-center items-center h-screen">
        <form class="flex flex-col items-center left-1/2 top-1/2  w-1/2 pt-10 " action="" method="POST" enctype="multipart/form-data">
          @csrf
            <label class="block  text-gray-700 font-bold mb-2   w-full h-128">
              <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block   text-white text-2xl">
                Title
              </span>
              <input type="text" name="name" class="mt-1 px-10 py-3 h-16 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"  />
            </label> <br>
            {{-- <label class="block p-2">
              <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-white">
               Body
              </span>
              <input type="text" name="nameblackmailer" class="mt-1 px-10 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"  />
            </label> --}}
            <label class="block text-gray-700 font-bold mb-2   w-full h-128">
              <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-white text-2xl text-white">
                body
              </span>
              <textarea type="text" name="Blackmailerinfo" class="border-gray-400 border rounded py-2 px-3 w-full h-64"  ></textarea>

            </label><br>
            <label class="block p-2 flex-col items-center "> 
              
                <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-white text-2xl text-white text-center">
                    Choose Blog Cover</span> 
               <input type="file" name="file" class="  block w-full text-sm text-slate-500 pl-20
                file:mr-4 file:py-2 file:px-3
                file:rounded-full file:border-0
                file:text-sm file:font-semibold
                file:bg-violet-50 file:text-violet-700
                hover:file:bg-violet-100
              "/> 
            </label><br>
           
            
            <div class="bg-buttonalaa border-none   rounded ">
              {{-- <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-white bg-buttonalaa"> --}}

              <button type="submit" class="font-semibold text-white py-2 px-5 text-1xl bg-buttonalaa ">Send</button>
            
              </div>
          
          </form>
    </div>
    @extends('footer')
   
</x-app-layout>
