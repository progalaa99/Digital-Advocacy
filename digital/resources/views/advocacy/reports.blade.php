<x-app-layout>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ["Element", "Density", {
                    role: "style"
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
                title: "the names of the governorates in Iraq",
                width: 1000,
                height: 600,
                bar: {
                    groupWidth: "80%"
                },
                legend: {
                    position: "none"
                },
                backgroundColor: '#111828',
                textStyle: {
                    color: '#ffffff' // تعيين لون النصوص إلى اللون الأبيض
                },
                titleTextStyle: {
                    color: '#ffffff' // تحديد اللون المرغوب هنا
                }
            };
            var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
            chart.draw(view, options);
        }
    </script>
    <div id="columnchart_values" style="width: 900px; height: 300px;" class="bg-darkalaa"></div>
    @extends('footer')

</x-app-layout>
