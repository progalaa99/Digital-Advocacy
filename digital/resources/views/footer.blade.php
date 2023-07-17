<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="your-styles.css">
</head>
<body class="antialiased" style="direction: rtl;">

    <footer class="bg-darkalaa border-t border-fillsvg">
        <div class="container mx-auto flex flex-wrap justify-center items-center py-8">
            <div class="w-full md:w-1/3 px-4">
                <div class="flex items-center">
                    <img class="w-32 h-32" src="/icon/code for iraq logo SVG.svg" alt="Code For Iraq Logo">
                    <span class="text-2xl font-bold text-white ml-4">البرمجة من أجل العراق</span>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-4">
                <div class="flex flex-col">
                    <span class="text-3xl text-white font-bold mb-4">تصفح الموقع</span>
                    <a href="{{ route('dashboard') }}" class="text-xl text-white font-bold mb-2">الصفحة الرئيسية</a>
                    <a href="{{ route('complaint') }}" class="text-xl text-white font-bold mb-2">تقديم مشكلة</a>
                    <a href="{{ route('blogsupport.support') }}" class="text-xl text-white font-bold mb-2">الدعم النفسي</a>
                    <a href="{{ route('blogedu.technical-edu') }}" class="text-xl text-white font-bold mb-2">التعليم التكنولوجي</a>
                    <a href="{{ route('reports') }}" class="text-xl text-white font-bold mb-2">تقرير</a>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-4">
                <div class="flex flex-col">
                    <span class="text-3xl text-white font-bold mb-4">تواصل معنا</span>
                    <span class="text-xl text-white font-bold mb-2">We@gmail.com</span>
                </div>
            </div>
        </div>
        <div class="container mx-auto py-4 text-center text-white">
            <p class="text-xl font-bold">حقوق النشر © 2023
                <span class="text-sm">(صنع بالكثير من الحب ❤)</span>
            </p>
        </div>
    </footer>

    @yield('content')

</body>
</html>
