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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
})->group(function () {
    Route::get('/site-message', function () {
        return view('advocacy.site-message');
    })->name('site-message');
})->group(function () {
    Route::get('/complaint', function () {
        return view('advocacy.complaint');
    })->name('complaint');
// })->group(function () {
//     Route::get('/support', function () {
//         return view('blogsupport.support');
//     })->name('support');
})

->group(function () {
    Route::post('/complaint.store/{user_id}', [App\Http\Controllers\ComplaintController::class, 'store'])->name('complaint.store');
})->group(function () {
    Route::get('/blogedu.create', [App\Http\Controllers\BlogeduController::class, 'create'])->name('blogedu.create');
})->group(function () {
        Route::post('/blogedu.store/{user_id}', [App\Http\Controllers\BlogeduController::class, 'store'])->name('blogedu.store');
})->group(function () {
    Route::get('/blogedu.technical-edu', [App\Http\Controllers\BlogeduController::class, 'index'])->name('blogedu.technical-edu');
})->group(function () {
    Route::get('/blogedu.show/{id}', [App\Http\Controllers\BlogeduController::class, 'show'])->name('blogedu.show');;
})->group(function () {
    Route::get('/region.reports', [App\Http\Controllers\AnalysisController::class, 'analysis'])->name('reports');


//blog Support Routes
})->group(function () {
    Route::get('/blogsupport.create', [App\Http\Controllers\BlogsupportController::class, 'create'])->name('blogsupport.create');
})->group(function () {
        Route::post('/blogsupport.store/{user_id}', [App\Http\Controllers\BlogsupportController::class, 'store'])->name('blogsupport.store');
})->group(function () {
    Route::get('/blogsupport.technical-edu', [App\Http\Controllers\BlogsupportController::class, 'index'])->name('blogsupport.technical-edu');;
})->group(function () {
    Route::get('/blogsupport.show/{id}', [App\Http\Controllers\BlogsupportController::class, 'show'])->name('blogsupport.show');
})->group(function () {
    Route::get('/blogsupport.support', [App\Http\Controllers\BlogsupportController::class, 'index'])->name('blogsupport.support');
}) ;
     
   
    

 
   





