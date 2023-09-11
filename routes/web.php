<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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


// Bypassing controller
// Route::get('/', function () {
//     return view('index');
// });

// Route without grouping
// Route::get('/', [PageController::class, 'index'])->name('index');
// Route::get('/services', [PageController::class, 'services'])->name('services');


// Route with group
Route::controller(PageController::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/about', 'about')->name('about');
    Route::get('/products', 'products')->name('products');
    Route::get('/services', 'services')->name('services');
});



