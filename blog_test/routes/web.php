<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('home', function () {
    return view('client.pages.home');
});

Route::get('about', function () {
    return view('client.pages.about');
});

Route::get('contact', function () {
    return view('client.pages.contact');
});

Route::get('category', function () {
    return view('client.pages.fashion');
});

Route::get('blog',function(){
    return view('client.pages.blog-single'); 
});
