<x-app-layout>
  {{$user_id = Auth::id(); }}
  <div class="flex flex-col md:flex-row">
      <div class="md:w-2/3 p-4">
          <form class="bg-white shadow-lg rounded px-8 pt-6 pb-8 mb-4" action="{{route('complaint.store',['user_id'=>$user_id])}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-4">
                  <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                      اسمك
                  </label>
                  <input type="text" name="name" id="name" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
              </div>
              <div class="mb-4">
                  <label class="block text-gray-700 text-sm font-bold mb-2" for="nameblackmailer">
                      اسم المبتز
                  </label>
                  <input type="text" name="nameblackmailer" id="nameblackmailer" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
              </div>
              <div class="mb-4">
                  <label class="block text-gray-700 text-sm font-bold mb-2" for="Blackmailerinfo">
                      معلومات المبتز الشخصية
                  </label>
                  <textarea name="Blackmailerinfo" id="Blackmailerinfo" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
              </div>
              <div class="mb-4">
                  <label class="block text-gray-700 text-sm font-bold mb-2" for="file">
                      ارفق الادلة
                  </label>
                  <input type="file" name="file" id="file" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
              </div>
              <div class="mb-4">
                  <label class="block text-gray-700 text-sm font-bold mb-2" for="Detailedinfo">
                      معلومات تفصيلية
                  </label>
                  <textarea name="Detailedinfo" id="Detailedinfo" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
              </div>
              <div class="flex justify-center">
                  <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                      إرسال
                  </button>
              </div>
          </form>
      </div>
      <div class="md:w-1/3 p-4">
          <div class="bg-white shadow-lg rounded px-8 pt-6 pb-8 mb-4">
              <svg class="h-16 w-16 mx-auto text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v14M6 12h12"></path>
              </svg>
              <p class="text-xl text-center font-bold mb-2">نحن هنا لمساعدتك</p>
              <p class="text-center text-gray-700 mb-4">فلا تتردد في ذكر كافة التفاصيل المتعلقة بالمشكلة، ونطلب منك تقديم معلومات صحيحة وحقيقية وإلا ستتحمل غرامات قانونية!</p>
          </div>
          <div class="bg-blue-100 border border-blue-500 text-blue-700 text-center rounded p-4">
              <h1 class="text-2xl text-blue-700 font-bold mb-2">!انتبه</h1>
              <p class="text-blue-700">يجب الانتباه إلى طريقة تحميل الأدلة، وذلك بوضعها كلها داخل ملف بي دي اف ثم ارفاقها.</p>
          </div>
      </div>
  </div>

  @extends('footer')

</x-app-layout>
