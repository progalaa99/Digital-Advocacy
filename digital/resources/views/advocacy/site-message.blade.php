<x-app-layout>
    <div class="flex items-center justify-center bg-white py-16">
        <div class="bg-white p-8 text-black max-w-xl text-center">
            <h2 class="text-2xl font-bold mb-6">نحن حقا آسفون للمشكلة التي واجهتها</h2>
            <p class="mb-6">لا تقلق عزيزي ، فنحن جميعًا نتعرض لمشاكل مختلفة  ، ولكن أهم شيء هو التعلم من الأخطاء.</p>
            <p class="mb-6">هناك قول مأثور لأندريه جيد أود أن أذكره لك:</p>
            <blockquote class="text-lg font-bold mb-6">"الحياة معلم غير عادل للغاية. أولاً تختبرنا ، ثم تعلمنا."</blockquote>
            <p class="mb-6">نوجهك إلى صفحة الدعم النفسي ، حتى تتمكن من الاتصال بأخصائي إذا احتجت إلى ذلك. يمكنك أيضًا الاطلاع على الإرشادات حول كيفية التعامل مع مشاعرك في مثل هذه اللحظات.</p>
        </div>
    </div>
    <div class="flex justify-center mt-6">
        <a href="{{ route('blogsupport.support') }}" class="bg-buttonalaa px-8 py-4 text-white font-semibold rounded text-xl">View Support Page</a>
    </div>
    @extends('footer')
</x-app-layout>
