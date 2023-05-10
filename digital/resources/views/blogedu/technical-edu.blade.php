<x-app-layout>
  <div class="flex top-1/2 left-1/2 text-white">
   
        
    
    <div class="w-full flex justify-center flex-col  text-white">
      <div class="flex w-1/2 mx-auto justify-center items-center">
        @foreach ($blogedus as $blogedu)
        <div class="w-1/3 bg-darkalaa p-4 m-2 rounded-md border-b-2 ">
            <img class="w-64 h-64 pt-10  transform -translate-x-1/9 -translate-y-1/11 fill-svgfill " fill="svgfill"
            src="{{$blogedu->cover}}" alt="head-idea-icon">
            <div class="pt-5">
            <span class="text-1xl font-bold text-white text-center">{{$blogedu->title}}</span><br>
            </div>

        <div >
          <a href="{{route('blogedu.show',['id'=>$blogedu->id])}}" class="bg-buttonalaa w-6 p-1 mr-2  w-20 h-30 border-none   rounded">View</a>
        </div>
        </div>
       
        @endforeach
        
        {{-- <div class="w-1/3 bg-darkalaa p-4 m-2 rounded-md flex flex-col border-b-2">
          <img class="w-64 h-64 pt-10  transform -translate-x-1/9 -translate-y-1/11 fill-svgfill " fill="svgfill"
            src="/photo/doctor.jpg" alt="head-idea-icon">
            <div class="pt-5">
            <span class="text-1xl font-bold text-white">Name : Aya</span><br>
            
          </div>
          <div >
            <a href="" class="bg-buttonalaa w-6 p-1 mr-2  w-20 h-30 border-none   rounded">View</a>
          </div>
        </div>
        <div class="w-1/3 bg-darkalaa p-4 m-1 rounded-md border-b-2 ">
          <img class="w-64 h-64 pt-10  transform -translate-x-1/9 -translate-y-1/11 fill-svgfill " fill="svgfill"
          src="/photo/doctor.jpg" alt="head-idea-icon">
          <div class="pt-5">
          <span class="text-1xl font-bold text-white">Name : Aya</span><br>
          
        </div> 
        <div >
          <a href="" class="bg-buttonalaa w-6 p-1 mr-2  w-20 h-30 border-none   rounded">View</a>
        </div>
        </div> --}}
      </div>

      <div class="pagination-links flex w-1/2 mx-auto justify-center items-center pt-10 text-withe">
        {{ $blogedus->links() }}
      </div>
      </div>
    </div>
      


     
       

    
    

   
    
    @extends('footer')
   
</x-app-layout>
