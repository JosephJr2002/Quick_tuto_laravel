<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $tableau = ['lolo', 'lala', 'lili'];
    $nom = 'Jennifer';
    $date = now();
    $contenu = 'Ceci est notre premier essai en Laravel à Abitech Solutions. Notre encadreur est super sympa et mignon. Il nous aime bien. Jennifer aime le petit dejeuner alors que Brice a un estomac solide qui ne prend pas de petit déjeuner.';
    $titre = 'Essai';
    $soustitre = 'La vie de jennifer et de Brice';
    $ttre ='WELCOME';
    $souttre ='Bienvenue dans le monde du laravel';
    $cont ='Le Laravel, un framework qui fournit des ressources essentielles et une experience de developpement incroyable tout en fournissant des fonctionalites puissantes. Il fournit une structure et un point de départ pour créer votre application, vous permettant de vous concentrer sur la création de quelque chose de nouveau. ';
    $pren = 'Jen ASSOGBA';
    $dat = now();
    return view("welcome", compact('tableau', 'nom', 'date', 'contenu', 'titre', 'soustitre', 'ttre', 'souttre', 'cont', 'pren', 'dat'));
    // $nom = 'Jennifer';
    // $date = now();
    // $contenu = 'Ceci est notre premier essai en Laravel à Abitech Solutions. Notre encadreur est super sympa et mignon. Il nous aime bien. Jennifer aime le petit dejeuner alors que Brice a un estomac solide qui ne prend pas de petit déjeuner.';
    // $titre = 'Essai';
    // $soustitre = 'La vie de jennifer et de Brice';
    // return view('welcome', compact('nom', 'date', 'contenu', 'titre', 'soustitre'));
    // return view('welcome')->with('nom', 'Bruce lee');
});

Route::get('/apropos', function () {
    $ttre= 'A propos de nous';
    $cont ='Nous vous fournissons plusieurs contenus de distraction qui vous permettrons de vous distraire et de vous détendre. Destressez-vous, grâce à nos contenus.';
    return view("apropos", compact('cont', 'ttre'));
});

Route::get('/posts', function () {
    return view('posts');
});

Route::get('/header', function () {
    return view('components.header');
});

