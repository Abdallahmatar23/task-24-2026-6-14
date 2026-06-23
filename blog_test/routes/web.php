<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('home', [HomeController::class, 'index'])->name("home");

Route::get('about', [AboutController::class, 'index'])->name('about');

Route::get('contact', [ContactController::class, 'index'])->name('contact');

Route::get('category', function () {
    return view('client.pages.fashion');
})->name('category');

Route::get('blog', function () {
    return view('client.pages.blog-single');
})->name('blog');

Route::get('full-width', function () {
    return view('client.pages.standard-fullwidth');
})->name('full-width');

Route::get('left-sidebar', function () {
    return view('client.pages.standard-left-sidebar');
})->name('left-sidebar');

Route::get('right-sidebar', function () {
    return view('client.pages.standard-right-sidebar');
})->name('right-sidebar');

Route::get('audio', function () {
    return view('client.pages.post-audio');
})->name('audio');

Route::get('gallery', function () {
    return view('client.pages.post-gallery');
})->name('gallery');

Route::get('image', function () {
    return view('client.pages.post-image');
})->name('image');

Route::get('video', function () {
    return view('client.pages.post-video');
})->name('video');

Route::get('link', function () {
    return view('client.pages.post-link');
})->name('link');

Route::post('store-contact',[ContactController::class,'store']);

Route::get('view',function(){
    view('client.pages.view');
})->name('view');
