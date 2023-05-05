<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
  Article, Category  
};
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    protected $perPage = 5;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $articles =Article::orderByDesc('id')->paginate($this->perPage);

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
        $categories = Category::get();
        $data = [
            'title' => $description = 'Ajouter un nouvel article',
            'description'=>$description,
            'categories'=>$categories,
        ];
        return view('article.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /* $validatedData = $request->validated();
        $validatedData['category_id'] = request('category', null);

        Auth::user()->articles()->create($validatedData);

        $success = 'Article ajouté';

        return back()->withSuccess($success); */
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        $data = [
            'title'=>$article->title.' - '.config('app.name'),
            'description'=>$article->title.'. '.Str::words($article->content, 10),
            'article'=>$article,
            'comments'=>$article->comments()->orderByDesc('created_at')->get(),
        ];
        return view('article.show', $data);
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
