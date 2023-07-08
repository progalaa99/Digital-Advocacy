<x-app-layout>
   
    <div class=" top-1/2 left-1/2 text-black flex justify-center flex-raw ">
        <div id="" style="width: 900px; height: 300px;" class="bg-white pt-10 pl-20">{!! $chart->container() !!}</div>
        {{-- <div class="w-500 h-50 text-white">{!! $chart->container() !!}</div> --}}
        <div class="w-full flex justify-center flex-col  text-white">
            <div class="flex flex-col w-1/2 mx-auto justify-center items-center">
                <div class="grid grid-cols-2 gap-8 bg-red pt-10 top-1/2 left-0 ">
                    <div class="bg-white p-4 w-60 h-100 text-black  ">
                        <h1>The most exposed province</h1>
                        <h2 class="font-bold">@foreach ($regions as $region)
                            {{$region->region}}
                        @endforeach</h2>
                    </div>
                    
                    <div class="bg-white p-4 w-60 h-100 text-black">
                        <h1>Target age groups</h1>
                        <h2 class="font-bold">@foreach ($ageCounts as $ageCount) 
                           ( {{$ageCount->age}} ) 
                        @endforeach</h2>
                    </div>
                    <div class="bg-white p-4 w-60 h-100 text-black">
                        <h1>Male exposure rate: <span class="font-bold"> {{$malePercentage}}% </span></h1>
                        <h2>Female exposure rate: <span class="font-bold">{{$femalePercentage}}%</span> </h2>
                    </div>
                    <div class="bg-white p-4 w-60 h-100 text-black ">
                        <h1>The category most vulnerable to extortion:
                        </h1>
                        <h2 class="font-bold">@foreach ($genderCounts as $genderCount)
                            {{$genderCount->gender}}
                        @endforeach</h2>
                    </div>
                    <div class="bg-white p-4 w-60 h-100 text-black ">
                        <h1>Total Number Of Registrants
                        
                        <h2 class="font-bold">{{$totalCount}} Users</h2> 
                    </h1>
                    </div>
                </div>
                @extends('footer')
            </div>
        </div>

    </div>
</x-app-layout>
{!! $chart->script() !!}

