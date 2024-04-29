<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'index']);

Route::get('/apropos', function () {
    $ttre= 'A propos de nous';
    $cont ='Nous vous fournissons plusieurs contenus de distraction qui vous permettrons de vous distraire et de vous détendre. Destressez-vous, grâce à nos contenus.';
    return view("apropos", compact('cont', 'ttre'));
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/header', function () {
    return view('components.header');
});

Route::get('/posts', function () {
    return view('posts');
});

Route::get('/nouveau', [PostController::class, 'create']);
Route::post('/nouveau', [PostController::class, 'store']);
