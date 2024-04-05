<?php

namespace App\Http\Controllers;


use App\Models\Tag;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth')->except('index' , 'show' , 'articleSearch');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->get();
        return view('welcome', compact('articles'));
    }

    public function articleSearch(Request $request){
        $query = $request->input('query');
        $articles = Article::search($query)->orderby('created_at', 'desc')->get();

        return View('articles\search-index' , compact('articles' , 'query'));
    }

    public function byCategory(Category $category)
    {

        $articles = $category->articles()->orderby('created_at', 'desc')->get();
        return view('articles.by-category', compact('category', 'articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=> 'required|unique:articles|min:5',
            'subtitle'=> 'required|min:5',
            'body'=> 'required|min:10',
            'image'=> 'image|required',
            'category'=> 'required',
            /*user story 5.1*/
            'tags'=> 'required',
            /*user story 5.1*/
        ]);

        $path=$request->file('image')->store('images','public');
        
        $article = Article::create([
            'title'=> $request->title,
            'subtitle'=> $request->subtitle,
            'body'=> $request->body,
            'image'=>'storage/'.$path, 
            'category_id'=> $request->category,
            'user_id' => Auth::user()->id,
        ]);

        /*user story 5.1 inizio*/

        $tags = explode(',' , $request->tags);

        foreach ($tags as $i => $tag) {
            $tags[$i] = trim($tag);
        }

        $tags = explode(',' , $request->tags);

        foreach ($tags as  $tag) {
            $newTag = Tag::updateOrCreate(

                ['name' => $tag],
                ['name' => strtolower($tag)],
            );

            $article->tags()->attach($newTag);
        }

        /*user story 5.1 fine*/

        return redirect()->back()->with('message' ,'Articolo creato correttamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }


}
