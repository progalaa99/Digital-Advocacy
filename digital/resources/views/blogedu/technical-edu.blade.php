<x-app-layout>
  <div class="flex top-1/2 left-1/2 text-white">
   
     
    
    <div class="w-full flex justify-center flex-col  text-white">
      @if (auth()->user()->roleId === 1)
    <div >
      <a href="{{route('blogedu.create')}}" class="bg-buttonalaa w-6 p-1 mr-2  w-20 h-30 border-none   rounded">Add Blog</a>
    </div> 
     @endif  
     
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
        @if (auth()->user()->roleId === 1)
    <div >
      <br>
      <a href="{{route('blogedu.create')}}" class="bg-buttonalaa w-6 p-1 mr-2  w-20 h-30 border-none   rounded">Edit</a>
      <a href="{{route('blogedu.create')}}" class="bg-red-900 w-6 p-1 mr-2  w-20 h-30 border-none   rounded">Delete</a>
    </div> 
     @endif 
        </div>
       
        @endforeach
        
      
      </div>
 
      <div class="pagination-links flex w-1/2 mx-auto justify-center items-center pt-10 text-withe">
        {{ $blogedus->links() }}
      </div>
      <div class="flex w-1/2 mx-auto justify-center items-center pt-20 text-white text-justify">
        “Learning is the key to development and growth. It enables us to acquire new knowledge and skills, open new horizons for thinking and innovation. Through learning, we overcome challenges and realize our true potential. Let us always be educated, the world is constantly changing and knowledge is the most powerful weapon we can carry.”
      </div>
      </div>
    </div>
      


     
       

    
    

   
    
    @extends('footer')
   
</x-app-layout>
