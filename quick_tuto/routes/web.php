<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/',[PostController::class, 'index']);

Route::get('/apropos', function () {
    
    return view('apropos');
});

Route::get('/posts', function () {
    return view('posts');
});

Route::get('/header', function () {
    return view('components.header');
});

Route::get('/contact', function () {
    return view('contact');
});

