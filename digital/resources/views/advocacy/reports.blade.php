<x-app-layout>
    <div class="flex justify-center items-center">
        <div class="bg-white w-96 h-auto p-10">
            {!! $chart->container() !!}
        </div>
        <div class="flex flex-col justify-center items-center">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 bg-red p-10">
                <div class="bg-white p-4">
                    <h1 class="text-xl font-bold">المحافظة الأكثر تعرضاً للابتزاز</h1>
                    <h2 class="font-bold">
                        @foreach ($regions as $region)
                            {{$region->region}}
                        @endforeach
                    </h2>
                </div>
                <div class="bg-white p-4">
                    <h1 class="text-xl font-bold">الفئات العمرية المستهدفة</h1>
                    <h2 class="font-bold">
                        @foreach ($ageCounts as $ageCount) 
                            ({{$ageCount->age}})
                        @endforeach
                    </h2>
                </div>
                <div class="bg-white p-4">
                    <h1 class="text-xl font-bold">معدل تعرض الذكور</h1>
                    <h2 class="font-bold">{{$malePercentage}}%</h2>
                    <h1 class="text-xl font-bold">معدل تعرض الإناث</h1>
                    <h2 class="font-bold">{{$femalePercentage}}%</h2>
                </div>
                <div class="bg-white p-4">
                    <h1 class="text-xl font-bold">الفئة الأكثر عرضة للابتزاز</h1>
                    <h2 class="font-bold">
                        @foreach ($genderCounts as $genderCount)
                            {{$genderCount->gender}}
                        @endforeach
                    </h2>
                </div>
                <div class="bg-white p-4">
                    <h1 class="text-xl font-bold">إجمالي عدد المسجلين</h1>
                    <h2 class="font-bold">{{$totalCount}} مستخدم</h2>
                </div>
            </div>
            @extends('footer')
        </div>
    </div>
</x-app-layout>
{!! $chart->script() !!}
