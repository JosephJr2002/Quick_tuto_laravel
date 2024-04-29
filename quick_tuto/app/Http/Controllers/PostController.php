<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
    
    public function index() 
    {
        $tableau = ['lolo', 'lala', 'lili'];
        $nom = 'Jennifer';
        $date = now();
        $contenu = 'Ceci est notre premier essai en Laravel à Abitech Solutions. Notre encadreur est super sympa et mignon. Il nous aime bien. Jennifer aime le petit dejeuner alors que Brice a un estomac solide qui ne prend pas de petit déjeuner.';
        $titre = 'Essai';
        $soustitre = 'La vie de jennifer et de Brice';
        $table = ['EFFICACITE', 'RAPIDITE', 'CONFIANCE'];
        $name = 'Brice';
        $data = now();
        $content = 'Ceci est mon premier essai en LARAVEL.';
        $titlle = 'APPRENTISSAGE';
        $undertitle = 'premiere page web laravel de BRICO';
        return view("welcome", compact('tableau', 'nom', 'date', 'contenu', 'titre', 'soustitre','table','name','data','content','titlle','undertitle'));
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
     }
    
    }
   