<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;





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

