<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $articles =Article::orderByDesc('id')->get();

       $data = [
        'title'=>'Les articles du blog - '.config('app.name'),
        'description'=>'Retrouvez tous les articles de '.config('app.name'),
        'articles'=>$articles,
    ];

    return view('article.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'formulaire de creation';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return 'affiches les details de article avec $id' .$id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //if user is auth = edit
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //mise en jour de l'article en database
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //supprimer l'article
    }
}
