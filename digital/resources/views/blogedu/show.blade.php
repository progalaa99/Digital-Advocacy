<x-app-layout>
    <div class="flex top-1/2 left-1/2 text-black">
        <div class="w-full flex justify-center flex-col  text-black">
            <div class="flex flex-col w-1/2 mx-auto justify-center items-center pt-10">
              
                <div class="w-auto bg-white p-4 m-2 rounded-md  ">
                    <img class="w-256 h-256 pt-10  transform -translate-x-1/9 -translate-y-1/11 fill-svgfill "
                        fill="svgfill" src="/{{ $blogedu->cover }}" alt="head-idea-icon">
                </div> <br> <br>
                <div class="text-6xl font-bold text-black"> * {{ $blogedu->title }} *</div>
                <div class="text-2xl text-black fond-bold text-justify ">{{ $blogedu->body }}</div>
            </div>
        </div>
    </div>

    @extends('footer')

</x-app-layout>
