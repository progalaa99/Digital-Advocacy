<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware(['auth'])->name('verification.notice');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
// Nav Route
])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard');})->name('dashboard');
    Route::get('/site-message', function () { return view('advocacy.site-message');})->name('site-message');
    Route::get('/complaint', function () {return view('advocacy.complaint');})->name('complaint');

})
// BlogeduController
->group(function () {
    Route::post('/complaint.store/{user_id}', [App\Http\Controllers\ComplaintController::class, 'store'])->name('complaint.store');
    Route::get('/blogedu.create', [App\Http\Controllers\BlogeduController::class, 'create'])->name('blogedu.create');
    Route::post('/blogedu.store/{user_id}', [App\Http\Controllers\BlogeduController::class, 'store'])->name('blogedu.store');
    Route::get('/blogedu.technical-edu', [App\Http\Controllers\BlogeduController::class, 'index'])->name('blogedu.technical-edu');
    Route::get('/blogedu.show/{id}', [App\Http\Controllers\BlogeduController::class, 'show'])->name('blogedu.show');
    Route::post('/blogedu.update/{blogeduid}', [App\Http\Controllers\BlogeduController::class, 'update'])->name('blogedu.update');
    Route::get('/blogedu.edit/{id}', [App\Http\Controllers\BlogeduController::class, 'edit'])->name('blogedu.edit');
    Route::get('/blogedu.destroy/{id}', [App\Http\Controllers\BlogeduController::class, 'destroy'])->name('blogedu.destroy');
    Route::get('/region.reports', [App\Http\Controllers\AnalysisController::class, 'analysis'])->name('reports');
//blog Support Routes
})->group(function () {
    Route::get('/blogsupport.create', [App\Http\Controllers\BlogsupportController::class, 'create'])->name('blogsupport.create');
    Route::post('/blogsupport.store/{user_id}', [App\Http\Controllers\BlogsupportController::class, 'store'])->name('blogsupport.store');
    Route::get('/blogsupport.technical-edu', [App\Http\Controllers\BlogsupportController::class, 'index'])->name('blogsupport.technical-edu');;
    Route::get('/blogsupport.show/{id}', [App\Http\Controllers\BlogsupportController::class, 'show'])->name('blogsupport.show');

    Route::get('/blogsupport.support', [App\Http\Controllers\BlogsupportController::class, 'index'])->name('blogsupport.support');
    Route::post('/blogsupport.update/{blogsupportid}', [App\Http\Controllers\BlogsupportController::class, 'update'])->name('blogsupport.update');
    Route::get('/blogsupport.edit/{id}', [App\Http\Controllers\BlogsupportController::class, 'edit'])->name('blogsupport.edit');
    Route::get('/blogsupport.destroy/{id}', [App\Http\Controllers\BlogsupportController::class, 'destroy'])->name('blogsupport.destroy');

});
     
   
    

 
   





