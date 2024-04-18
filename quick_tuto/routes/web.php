<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $tableau = ['lolo', 'lala', 'lili'];
    $nom = 'Jennifer';
    $date = now();
    $contenu = 'Ceci est notre premier essai en Laravel à Abitech Solutions. Notre encadreur est super sympa et mignon. Il nous aime bien. Jennifer aime le petit dejeuner alors que Brice a un estomac solide qui ne prend pas de petit déjeuner.';
    $titre = 'Essai';
    $soustitre = 'La vie de jennifer et de Brice';
    return view("welcome", compact('tableau', 'nom', 'date', 'contenu', 'titre', 'soustitre'));
    // $nom = 'Jennifer';
    // $date = now();
    // $contenu = 'Ceci est notre premier essai en Laravel à Abitech Solutions. Notre encadreur est super sympa et mignon. Il nous aime bien. Jennifer aime le petit dejeuner alors que Brice a un estomac solide qui ne prend pas de petit déjeuner.';
    // $titre = 'Essai';
    // $soustitre = 'La vie de jennifer et de Brice';
    // return view('welcome', compact('nom', 'date', 'contenu', 'titre', 'soustitre'));
    // return view('welcome')->with('nom', 'Bruce lee');
    // return view('welcome', [
    //     'nom' => 'Fifame',
    //     'date' => now(),
    //     'contenu' => 'Ceci est notre premier essai en Laravel à Abitech Solutions. Notre encadreur est super sympa et mignon. Il nous aime bien. Jennifer dort et Brice la taquine.',
    //     'titre' => 'Essai',
    //     'soustitre' => 'Bienvenu chez Brice',
    // ]);
});

Route::get('/apropos', function () {
    
    return view('apropos');
});

Route::get('/posts', function () {
    return view('posts');
});

Route::get('/header', function () {
    return view('components.header');
});

