<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeSliderController;
use App\Http\Controllers\NewsController;
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

Route::get('/compliance-solutions', function () {
    return view('compliance_solutions');
})->name('compliance-solutions');

Route::get('/about', [FrontController::class, 'about'])->name('about');

Route::post('/send-quote', [FrontController::class, 'sendQuote'])->name('send.quote');

Route::get('/partnership', function () {
    return view('partnership');
})->name('partnership');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/send-consultation', [FrontController::class, 'sendConsultation'])->name('send.consultation');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/insights/blogs', [FrontController::class, 'blogPage'])->name('blog');

Route::get('/insights/blogs/{slug}', [FrontController::class, 'individualBlog'])->name('blog.show');

Route::get('/insights/news', [FrontController::class, 'newsPage'])->name('news');

Route::get('/insights/news/{slug}', [FrontController::class, 'individualNews'])->name('insights.news.show');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('categories', CategoryController::class);

    Route::resource('products', ProductController::class);

    Route::resource('home-sliders', HomeSliderController::class);

    Route::resource('blogs', BlogController::class);

    Route::resource('news', NewsController::class);

    Route::resource('contents', ContentController::class);

    Route::post('/generate-codes', [ProductController::class, 'generateCodes'])->name('generate-codes');
});


