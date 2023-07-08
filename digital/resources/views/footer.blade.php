<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  
<body class="  antialiased ">


    

    

    
    

    <footer class="bg-darkalaa border-t border-fillsvg">
        <div class="flex w-1/2 mx-auto justify-center items-center h-auto max-h-full">
            <div class="w-1/3 bg-darkalaa p-4 m-2 rounded-md">
                <img class="w-32 h-32 pt-10  transform -translate-x-1/9 -translate-y-1/11 fill-svgfill " fill="svgfill"
                src="/icon/code for iraq logo SVG.svg" alt="head-idea-icon">
                <span class="text-2xl font-bold text-white">Code For Iraq</span>
            </div>
            <div class="w-1/3 bg-darkalaa p-4 m-2 rounded-md flex flex-col">
               <span class="text-3xl text-white font-bold">Other Page</span>  
               <a href="" class="text-1xl text-white font-bold">Home</a>
               <a href="" class="text-1xl text-white font-bold">complaint</a>
               <a href="" class="text-1xl text-white font-bold">support</a>
               <a href="" class="text-1xl text-white font-bold">Technical Education</a>
               <a href="" class="text-1xl text-white font-bold"> Report</a>  
            </div>
            <div class="w-1/3 bg-darkalaa p-4 m-1 rounded-md  ">
                <span class="text-3xl text-white font-bold ">Contact Us</span>  
                <span class="text-1xl text-white font-bold">We@gmail.com</span>  
            </div>
          </div>
        <div class="flex w-1/2 mx-auto justify-center items-center text-white">
             <p class="text-1xl font-bold">Copyright © 2023
                <span class="text-sm mr-1">( Made With Love ❤)</span>
             </p>
            
             
        </div>
    </footer>
    
@yield('content')

   
</body>
</html>