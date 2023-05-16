<x-app-layout>
    <div class=" top-1/2 left-1/2 text-white flex justify-center flex-raw ">
        {{-- <div id="columnchart_values" style="width: 900px; height: 300px;" class="bg-darkalaa"></div> --}}
        <div>{!! $chart->container() !!}</div>
        <div class="w-full flex justify-center flex-col  text-white">
            <div class="flex flex-col w-1/2 mx-auto justify-center items-center">
                <div class="grid grid-cols-2 gap-8 bg-red pt-10 top-1/2 left-0 ">
                    <div class="bg-darkalaa p-4 w-60 h-50 text-white border border-yellow-400 ">
                        <h1>The most exposed province</h1>
                        <h2 class="font-bold">@foreach ($regions as $region)
                            {{$region->region}}
                        @endforeach</h2>
                    </div>
                    
                    <div class="bg-darkalaa p-4 w-60 h-50 text-white border border-yellow-400">
                        <h1>Target age groups</h1>
                        <h2 class="font-bold">@foreach ($ageCounts as $ageCount) 
                           ( {{$ageCount->age}} ) 
                        @endforeach</h2>
                    </div>
                    <div class="bg-darkalaa p-4 w-60 h-50 text-white border border-yellow-400">
                        <h1>Male exposure rate: <span class="font-bold"> {{$malePercentage}}% </span></h1>
                        <h2>Female exposure rate: <span class="font-bold">{{$femalePercentage}}%</span> </h2>
                    </div>
                    <div class="bg-darkalaa p-4 w-60 h-50 text-white border border-yellow-400">
                        <h1>The category most vulnerable to extortion:
                        </h1>
                        <h2 class="font-bold">@foreach ($genderCounts as $genderCount)
                            {{$genderCount->gender}}
                        @endforeach</h2>
                    </div>
                    <div class="bg-darkalaa p-4 w-60 h-50 text-white border border-yellow-400">
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
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load("current", {
        packages: ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var allregions = @json($allregions);
        var data = google.visualization.arrayToDataTable([
            ["Element", "Density", {
                role: "style",
            }],
            [console.log(allregions[0]), 8.94, "#b87333"],
            // ["Basra", 10.49, "silver"],
            // ["Mosul", 19.30, "gold"],
            // ["Erbil", 8.94, "#b87333"],
            // ["Sulaymaniyah", 10.49, "silver"],
            // ["Kirkuk", 19.30, "gold"],
            // ["Najaf", 8.94, "#b87333"],
            // ["Karbala", 10.49, "silver"],
            // ["Maysan", 30, "gold"],
            // ["Wasit", 21.45, "color: #e5e4e2"],
            // ["Diwaniyah", 40, "gold"],
            // ["Babil", 8.94, "#b87333"],
            // ["Salahaddin", 10.49, "silver"],
            // ["Diyala", 100, "gold"],
            // ["Anbar", 21.45, "color: #e5e4e2"],
            // ["Thi Qar", 19.30, "gold"],
            // ["Samawah", 10.49, "silver"],
            // ["Qadisiyah", 19.30, "gold"],


        ]);

        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
            {
                calc: "stringify",
                sourceColumn: 1,
                type: "string",
                role: "annotation"
            },
            2
        ]);

        var options = {
            title: "Statistics of the extent to which the provinces are at risk from electronic extortion",
            width: 1000,
            height: 600,
            bar: {
                groupWidth: "85%"
            },
            legend: {
                position: "none",
            },
            backgroundColor: '#111828',
            textStyle: {
                color: '#ffffff' // تعيين لون النصوص إلى اللون الأبيض
            },
            titleTextStyle: {
                color: '#ffffff' // تحديد اللون المرغوب هنا
            },

        };
        var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
        chart.draw(view, options);
    }
</script>
