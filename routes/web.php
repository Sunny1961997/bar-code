<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeSliderController;
use App\Http\Controllers\ProductController;
use App\Models\Category;
use App\Models\HomeSlider;
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
    $categories = Category::all();
    $homeSliders = HomeSlider::all(); 
    return view('index', compact('categories', 'homeSliders'));
})->name('/');

Route::get('/sustainability', function () {
    return view('sustainability');
})->name('sustainability');

Route::get('/smart-compilance', function () {
    return view('smart_compilance');
})->name('smart-compilance');

Route::get('/insights', function () {
    return view('insights');
})->name('insights');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('categories', CategoryController::class);

    Route::resource('products', ProductController::class);

    Route::resource('home-sliders', HomeSliderController::class);

    Route::resource('blogs', BlogController::class);

    Route::post('/generate-codes', [ProductController::class, 'generateCodes'])->name('generate-codes');
});


