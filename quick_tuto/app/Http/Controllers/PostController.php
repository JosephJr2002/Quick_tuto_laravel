<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class postController extends Controller
// {
    
//     public function index() 
//     {
//         $tableau = ['lolo', 'lala', 'lili'];
//         $nom = 'Jennifer';
//         $date = now();
//         $contenu = 'Ceci est notre premier essai en Laravel à Abitech Solutions. Notre encadreur est super sympa et mignon. Il nous aime bien. Jennifer aime le petit dejeuner alors que Brice a un estomac solide qui ne prend pas de petit déjeuner.';
//         $titre = 'Essai';
//         $soustitre = 'La vie de jennifer et de Brice';
//         $table = ['EFFICACITE', 'RAPIDITE', 'CONFIANCE'];
//         $name = 'Brice';
//         $data = now();
//         $content = 'Ceci est mon premier essai en LARAVEL.';
//         $titlle = 'APPRENTISSAGE';
//         $undertitle = 'premiere page web laravel de BRICO';
//         return view("welcome", compact('tableau', 'nom', 'date', 'contenu', 'titre', 'soustitre','table','name','data','content','titlle','undertitle'));
//         // $nom = 'Jennifer';
//         // $date = now();
//         // $contenu = 'Ceci est notre premier essai en Laravel à Abitech Solutions. Notre encadreur est super sympa et mignon. Il nous aime bien. Jennifer aime le petit dejeuner alors que Brice a un estomac solide qui ne prend pas de petit déjeuner.';
//         // $titre = 'Essai';
//         // $soustitre = 'La vie de jennifer et de Brice';
//         // return view('welcome', compact('nom', 'date', 'contenu', 'titre', 'soustitre'));
//         // return view('welcome')->with('nom', 'Bruce lee');
//         // return view('welcome', [
//         //     'nom' => 'Fifame',
//         //     'date' => now(),
//         //     'contenu' => 'Ceci est notre premier essai en Laravel à Abitech Solutions. Notre encadreur est super sympa et mignon. Il nous aime bien. Jennifer dort et Brice la taquine.',
//         //     'titre' => 'Essai',
//         //     'soustitre' => 'Bienvenu chez Brice',
//         // ]);
//      }
    
//     }


namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request; 


class PostController extends Controller
{
    public function index()
    {
        // Generate 10 dummy posts and save them directly to the database
        // Post::factory()->count(10)->create(); 
        $all_posts = Post::simplePaginate(5);       

    return view('welcome', compact('all_posts'));
    }

    public function create()
    {

        return view('nouveau');
    }

    public function store(Request $request) 
    {
        $titre = $request->input('titre');
        $soustitre = $request->input('soustitre');
        $contenu = $request->input('contenu');
        $auteur = $request->input('auteur');
        $ecritle = $request->input('ecritle');

        $request->validate([
            'titre' => 'required|unique:posts|max:255',
            'soustitre' => 'required|unique:posts|max:255',
            'contenu' => 'required|unique:posts|min:1',
            'auteur' => 'required|max:255',
            'ecritle' => 'required|date',
        ]);

        // Pass the retrieved posts to the view
        $posts= new Post;
        $posts->titre = $titre;
        $posts->soustitre=$soustitre;
        $posts->contenu=$contenu;
        $posts->auteur=$auteur;
        $posts->ecritle=$ecritle;
        $posts->save();

        return redirect("/")->with('success', 'Publication crée avec succès');
    }

}

