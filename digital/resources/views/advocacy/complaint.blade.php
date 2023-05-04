<x-app-layout>
    <div class="flex flex-row space-x-4  absolute  top-3/2 pt-10 ">
        <div class="bg-darkalaa p-4 w-1/2">

            <form class="flex flex-col items-center ">
                {{-- <div class="shrink-0">
                  <img class="h-16 w-16 object-cover rounded-full" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1361&q=80" alt="Current profile photo" />
                </div> --}}
                <label class="block p-2">
                  <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-white">
                    Your Name
                  </span>
                  <input type="email" name="email" class="mt-1 px-10 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="you@example.com" />
                </label>
                <label class="block p-2">
                  <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-white">
                    Name of blackmailer
                  </span>
                  <input type="email" name="email" class="mt-1 px-10 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="you@example.com" />
                </label>
                <label class="block p-2">
                  <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-white">
                    Blackmailer information
                  </span>
                  <textarea type="email" name="email" class="mt-1 px-10 py-2 h-20 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="you@example.com" ></textarea>
                </label>
                <label class="block p-2 ">
                  {{-- <span class="sr-only">Choose profile photo</span> --}}
                  <input type="file" class="block w-full text-sm text-slate-500
                    file:mr-4 file:py-2 file:px-4
                    file:rounded-full file:border-0
                    file:text-sm file:font-semibold
                    file:bg-violet-50 file:text-violet-700
                    hover:file:bg-violet-100
                  "/>
                </label>
                <label class="block p-2">
                  <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-white">
                    Detailed information
                  </span>
                  <textarea  type="email" name="email" class="mt-1 px-10 py-2 h-40 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="you@example.com"></textarea> 
                </label>
                
                <div class="bg-buttonalaa border-none   rounded ">
                  {{-- <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-white bg-buttonalaa"> --}}

                  <button type="submit" class="font-semibold text-white py-2 px-5 text-1xl bg-buttonalaa ">Send</button>
                
                  </div>
              
              </form>
        </div>
        <div class="bg-red-500 p-4 w-1/2">
            <svg fill="svgfill" class="h-48 w-48 transform rotate-90" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 67.72"><defs><style>.cls-1{fill-rule:evenodd;}</style></defs><title>hand-shake</title><path class="cls-1" d="M3.24,16.78l2.3,28.47c.31,2.94,1,4.83,1.84,5.87a2.82,2.82,0,0,0,2.85.85l.27,0H21.78a3.84,3.84,0,0,0,3.31-1.32l.05-.06A8.31,8.31,0,0,0,26.32,46V14.57a1.21,1.21,0,0,1-.07-.43.49.49,0,0,1,0-.12A2.93,2.93,0,0,0,25,11.92a7.16,7.16,0,0,0-3.88-.78H7a4.3,4.3,0,0,0-3.19,1.17c-.67.8-.91,2.18-.58,4.33v.14ZM93.1,15.57a10.86,10.86,0,0,1,.09-1.43L88,10.65c-.75-.5-1.57-1.08-2.4-1.66-3-2.08-6-4.22-9.33-5.09a26.12,26.12,0,0,0-5.94-.82,20.38,20.38,0,0,0-5.46.6,14,14,0,0,0-3,1.14,10.75,10.75,0,0,0-2.31,1.64L56,10.63a1.59,1.59,0,0,1-.44.52L45.89,22.66a4.21,4.21,0,0,0,.84,1.85,4.09,4.09,0,0,0,1.78,1.26,5.77,5.77,0,0,0,2.52.31,8.21,8.21,0,0,0,4.42-1.83L58.14,22c.68-.56,1.25-1.08,1.81-1.59a24.11,24.11,0,0,1,3.78-3c3-1.8,6-1.86,9,3.12L87.93,48H93.1V15.57Zm1.23-4.39a5.67,5.67,0,0,1,.8-.9A8.24,8.24,0,0,1,100.8,8.5H114c2.77,0,5,.49,6.58,1.69,1.73,1.34,2.55,3.37,2.2,6.29l-2.92,30.21a10.68,10.68,0,0,1-2.2,6.27,6.74,6.74,0,0,1-5.7,2.22H100.09a6.06,6.06,0,0,1-4.26-1.31,8,8,0,0,1-2.15-2.81H89.57a7.09,7.09,0,0,1,.08,4.52,7.43,7.43,0,0,1-2.47,3.5,8.47,8.47,0,0,1-3.87,1.71,7.68,7.68,0,0,1-4.17-.46,10.83,10.83,0,0,1-4.91,3.13A8.53,8.53,0,0,1,69,63.22a10.44,10.44,0,0,1-5.56,3.46,10.22,10.22,0,0,1-6.62-1,9.76,9.76,0,0,1-2.29,1.35,8.61,8.61,0,0,1-3.55.65,9.66,9.66,0,0,1-6.55-2.39,19.2,19.2,0,0,1-3.68-5.09L34.19,48.8H29.11a9,9,0,0,1-1.51,3.63l-.07.1A6.74,6.74,0,0,1,21.7,55H10.61a5.66,5.66,0,0,1-5.56-1.89c-1.3-1.51-2.2-4-2.58-7.57v-.13L.17,17.05c-.46-3.06,0-5.23,1.28-6.71A7.13,7.13,0,0,1,6.87,8.06H21.1a10,10,0,0,1,5.57,1.27h0a5.73,5.73,0,0,1,2.43,3.25h9.55a27.48,27.48,0,0,1,7.13-3.67A19.39,19.39,0,0,1,54,8.27l3.27-3.89.12-.13a13.71,13.71,0,0,1,3-2.16A17.83,17.83,0,0,1,64.06.69,24.23,24.23,0,0,1,70.35,0,29.26,29.26,0,0,1,77,.92h0c3.81,1,7.1,3.31,10.3,5.55.77.54,1.53,1.07,2.35,1.62l4.65,3.09ZM15.77,38.76a2.66,2.66,0,1,1-2.65,2.65,2.66,2.66,0,0,1,2.65-2.65ZM86.36,50.92a1.57,1.57,0,0,1-.88-1L70.06,22.09c-1.71-2.86-3.25-2.94-4.75-2.05A22.52,22.52,0,0,0,62,22.71c-.68.62-1.36,1.24-1.92,1.7l-2.73,2.25a11.38,11.38,0,0,1-6.09,2.5,9,9,0,0,1-3.86-.5,7.28,7.28,0,0,1-3.11-2.22,7.44,7.44,0,0,1-1.59-4.11,1.58,1.58,0,0,1,.45-1.22l8.33-9.91a15,15,0,0,0-4.81.67,25.56,25.56,0,0,0-6.63,3.48,1.5,1.5,0,0,1-1,.33H29.41v30h5.67a1.55,1.55,0,0,1,1.38.84l7,12.15a17.79,17.79,0,0,0,3,4.34,6.77,6.77,0,0,0,4.58,1.6,5.63,5.63,0,0,0,2.3-.42,5.8,5.8,0,0,0,1.31-.75L50.14,55a1.54,1.54,0,0,1,2.71-1.45l4.94,9.23a6.67,6.67,0,0,0,8.87-1.54L59.55,50.06A1.54,1.54,0,0,1,60,47.93a1.56,1.56,0,0,1,2.13.47l7.49,11.77a5.81,5.81,0,0,0,3.78.32,7.65,7.65,0,0,0,3.44-2.24L70.07,45.47A1.55,1.55,0,0,1,72.8,44l7,13.22a4.44,4.44,0,0,0,3,.5,5.27,5.27,0,0,0,2.45-1.08,4.27,4.27,0,0,0,1.45-2,4.12,4.12,0,0,0-.23-3,1.48,1.48,0,0,1-.12-.71Zm20.32-12.16A2.66,2.66,0,1,1,104,41.41a2.66,2.66,0,0,1,2.65-2.65Z"/></svg>
            <p class="text-white font-bold text-center text-2xl p-10 m-10">We are here to help you, so do 
                not hesitate to mention all the 
                details related to the problem, 
                and we ask you to provide 
                correct and real information, 
                otherwise you will bear legal 
                penalties!</p>
        </div>
      </div>
      
      
    @extends('footer')
   
</x-app-layout>