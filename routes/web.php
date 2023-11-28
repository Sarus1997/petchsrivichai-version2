<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LangController;


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
    return view('home');
});

Route::get('home', function () {
    return view('home');
})->name('home');

Route::get('story', function () {
    return view('story');
})->name('story');

Route::get('news', function () {
    return view('news');
})->name('news');

Route::get('services', function () {
    return view('services');
})->name('services');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('news-more', function () {
    return view('news.news-more');
})->name('news-more');

Route::get('news_1', function () {
    return view('news.news_1');
})->name('news_1');

Route::get('news_2', function () {
    return view('news.news_2');
})->name('news_2');

Route::get('news_3', function () {
    return view('news.news_3');
})->name('news_3');

Route::get('full-dump', function () {
    return view('services.full-dump');
})->name('full-dump');

Route::get('trailer', function () {
    return view('services.trailer');
})->name('trailer');

Route::get('product-1', function () {
    return view('services.product-1');
})->name('product-1');

Route::get('product-2', function () {
    return view('services.product-2');
})->name('product-2');

Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');
