<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage; // Aggiunta per l'uso di Storage

class ArticleController extends Controller
{
    public function __construct() // Correzione del nome del costruttore
    {
        $this->middleware('auth')->except('index', 'show', 'articleSearch');

        $this->categories = Category::all();
        View::share('categories', $this->categories);
    }

    public function index()
    {
        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->get();
        return view('articles.index', compact('articles'));
    }

    public function articleSearch(Request $request)
    {
        $query = $request->input('query');
        $articles = Article::search($query)->orderBy('created_at', 'desc')->get();

        return view('articles.search-index', compact('articles', 'query')); // Correzione del percorso della vista
    }

    public function byCategory(Category $category)
    {
        $articles = $category->articles()->where('is_accepted', true)->orderBy('created_at', 'desc')->get();
        return view('articles.by-category', compact('category', 'articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        // Validazione e creazione dell'articolo
    }

    public function show(Article $article)
    {
        return view('articles.show', compact('article')); // Correzione del percorso della vista
    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article')); // Correzione del percorso della vista
    }

    public function update(Request $request, Article $article)
    {
        // Validazione e aggiornamento dell'articolo
    }

    public function destroy(Article $article)
    {
        foreach ($article->tags as $tag) {
            $article->tags()->detach($tag);
        }

        $article->delete();

        return redirect(route('writer.dashboard'))->with('message', 'Articolo cancellato');
    }
}
