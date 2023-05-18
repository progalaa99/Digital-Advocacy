<x-app-layout>
  <div class="flex top-1/2 left-1/2 text-white">
    
    <div class="w-full flex justify-center flex-col  text-white">
      <div class="flex w-1/2 mx-auto justify-center items-center">
        <div class="w-1/3 bg-darkalaa p-4 m-2 rounded-md ">
            <img class="w-64 h-64 pt-10  transform -translate-x-1/9 -translate-y-1/11 fill-svgfill " fill="svgfill"
            src="/photo/doctor.jpg" alt="head-idea-icon">
            <div class="pt-5">
            <span class="text-1xl font-bold text-white">Name : Aya</span><br>
            <span class="text-1xl font-bold text-white">Phone : 077******</span><br>
            <span class="text-1xl font-bold text-white">Email : Aya@gmail.com</span><br>
            <span class="text-1xl font-bold text-white">Adress : Baghdad</span><br>
          </div>
        </div>
        <div class="w-1/3 bg-darkalaa p-4 m-2 rounded-md flex flex-col">
          <img class="w-64 h-64 pt-10  transform -translate-x-1/9 -translate-y-1/11 fill-svgfill " fill="svgfill"
            src="/photo/doctor.jpg" alt="head-idea-icon">
            <div class="pt-5">
            <span class="text-1xl font-bold text-white">Name : Aya</span><br>
            <span class="text-1xl font-bold text-white">Phone : 077******</span><br>
            <span class="text-1xl font-bold text-white">Email : Aya@gmail.com</span><br>
            <span class="text-1xl font-bold text-white">Adress : Baghdad</span><br>
          </div>
        </div>
        <div class="w-1/3 bg-darkalaa p-4 m-1 rounded-md  ">
          <img class="w-64 h-64 pt-10  transform -translate-x-1/9 -translate-y-1/11 fill-svgfill " fill="svgfill"
          src="/photo/doctor.jpg" alt="head-idea-icon">
          <div class="pt-5">
          <span class="text-1xl font-bold text-white">Name : Aya</span><br>
          <span class="text-1xl font-bold text-white">Phone : 077******</span><br>
          <span class="text-1xl font-bold text-white">Email : Aya@gmail.com</span><br>
          <span class="text-1xl font-bold text-white">Adress : Baghdad</span><br>
        </div> 
        </div>
      </div>
{{-- <div class="flex w-1/2 mx-auto justify-center items-center">
  <h1>view more</h1>
</div> --}}
<div class="flex w-1/2 mx-auto justify-center items-center">
  <h1 class="text-6xl font-bold">Article</h1>
</div>
{{--   2 div     --}}
<div class="w-full flex justify-center flex-col  text-white"><br><br>
  @if (auth()->user()->roleId === 1)
  <div class="flex justify-center items-center" ><br>
    <a href="{{route('blogsupport.create')}}" class="bg-buttonalaa  p-1 mr-2  w-20 h-30 border-none   rounded ">Add Blog</a>
  </div> 
   @endif
      <div class="flex w-1/2 mx-auto justify-center items-center">
       
       @foreach ($blogsupports as $blogsupport)
           
       
        <div class="w-1/3 bg-darkalaa p-4 m-2 rounded-md ">
            <img class="w-64 h-64 pt-10  transform -translate-x-1/9 -translate-y-1/11 fill-svgfill " fill="svgfill"
            src="{{$blogsupport->cover}}" alt="head-idea-icon">
            <div class="pt-5">
            <span class="text-1xl font-bold text-white">{{$blogsupport->title}}</span><br>
          </div>
          <div >
            <a href="{{route('blogsupport.show',['id'=>$blogsupport->id])}}" class="bg-buttonalaa w-6 p-1 mr-2  w-20 h-30 border-none   rounded">View</a>
          </div>
          @if (auth()->user()->roleId === 1)
          <div >
            <br>
            <a href="{{route('blogsupport.edit',['id'=>$blogsupport->id])}}" class="bg-buttonalaa w-6 p-1 mr-2  w-20 h-30 border-none   rounded">Edit</a>
            <a href="{{route('blogsupport.destroy',['id'=>$blogsupport->id])}}" class="bg-red-900 w-6 p-1 mr-2  w-20 h-30 border-none   rounded">Delete</a>
          </div> 
           @endif 
        </div>
        @endforeach
      </div>
     
    
    

    </div>
     <div class="pagination-links flex w-1/2 mx-auto justify-center items-center pt-10 pb-10 text-withe">
       {{ $blogsupports->links() }} 
    </div>
    
  </div> 
    
    @extends('footer')
   
</x-app-layout>
