<x-app-layout>
    <div class="flex top-1/2 left-1/2 text-white">



        <div class="w-full flex justify-center flex-col  text-white">
            <div class="flex flex-col w-1/2 mx-auto justify-center items-center pt-10">
                <div class="text-6xl font-bold text-yellow-400"> * {{ $blogedu->title }} *</div>
                <div class="w-auto bg-darkalaa p-4 m-2 rounded-md  ">
                    <img class="w-256 h-256 pt-10  transform -translate-x-1/9 -translate-y-1/11 fill-svgfill "
                        fill="svgfill" src="/{{ $blogedu->cover }}" alt="head-idea-icon">
                </div>
                <div class="text-2xl text-white fond-bold text-justify text-lg">{{ $blogedu->body }}</div>
            </div>
        </div>
    </div>

    @extends('footer')

</x-app-layout>
