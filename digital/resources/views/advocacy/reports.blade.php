<x-app-layout>
    <div class="flex top-1/2 left-1/2 text-white">

        <div class="w-full flex justify-center flex-col  text-white">
            <div class="flex flex-col w-1/2 mx-auto justify-center items-center">
                

                <div id="columnchart_values" style="width: 900px; height: 300px;" class="bg-darkalaa"></div>


                <div class="grid grid-cols-2 gap-8 bg-red pt-10 top-1/2 left-0">
                    <div class="bg-red p-4 w-50">
                        <h1>The most exposed province</h1>
                        <h2>Baghdda</h2>
                    </div>
                    <div class="bg-yallow p-4">
                        <h1>Target age groups</h1>
                        <h2>14 , 16 , 20 ,55</h2>
                    </div>
                    <div class="bg-gray-200 p-4">
                        <h1>Male exposure rate: 40%

                            Female exposure rate: 70%
                        </h1>
                        <h2>Baghdda</h2>
                    </div>
                    <div class="bg-gray-200 p-4">
                        <h1>The category most vulnerable to

                        </h1>
                        <h2>extortion: females</h2>
                    </div>
                </div>


                @extends('footer')


            </div>
        </div>
        
    </div>
</x-app-layout>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load("current", {
                packages: ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ["Element", "Density", {
                        role: "style",
                    }],
                    ["Baghdad", 8.94, "#b87333"],
                    ["Basra", 10.49, "silver"],
                    ["Mosul", 19.30, "gold"],
                    ["Erbil", 8.94, "#b87333"],
                    ["Sulaymaniyah", 10.49, "silver"],
                    ["Kirkuk", 19.30, "gold"],
                    ["Najaf", 8.94, "#b87333"],
                    ["Karbala", 10.49, "silver"],
                    ["Maysan", 25, "gold"],
                    ["Wasit", 21.45, "color: #e5e4e2"],
                    ["Diwaniyah", 19.30, "gold"],
                    ["Babil", 8.94, "#b87333"],
                    ["Salahaddin", 10.49, "silver"],
                    ["Diyala", 19.30, "gold"],
                    ["Anbar", 21.45, "color: #e5e4e2"],
                    ["Thi Qar", 19.30, "gold"],
                    ["Samawah", 10.49, "silver"],
                    ["Qadisiyah", 19.30, "gold"],


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