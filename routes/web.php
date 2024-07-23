<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/blog-home', function () {
    return view('blog-home');
});

Route::get('/blog-post', function () {
    return view('blog-post');
});

Route::get('/portfolio-item', function () {
    return view('portfolio-item');
});

Route::get('/portfolio-overview', function () {
    return view('portfolio-overview');
});
