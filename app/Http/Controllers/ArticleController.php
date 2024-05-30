<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreArticleRequest;


class ArticleController extends Controller
{
    public function index(){
        $articles = Article::paginate(8);
        
        
        return view('pages.articoli',compact('articles'));
    }


    public function show($id){

        $article = Article::findOrFail($id); 

        return view('pages.articolo',compact('article'));

    }
    
    

    public function create(){
        $authors=Author::all();

        $categories = Category::all();
        return view('pages.articles.create',compact('authors','categories'));
        
    }

    public function store(StoreArticleRequest $request){       
        
              
        

        $article = Article::create([
            'title'=>$request->title,
            'body'=>$request->body,
            'author_id'=>$request->author_id
        ]);

        $article->categories()->attach(array_unique($request->categories));

        if($request->hasFile('cover')){
           
            $article->cover=$request->file('cover')->storeAs('public/covers/'.$article->id,'cover.jpg');
            $article->save();
            
        }


       return redirect()->back()->with(['success'=>'Articolo inserito con successo']);
    }


    public function articleByAuthor(Author $author){

        $articles =$author->articles->sortByDesc('created_at');
        return view('pages.articoli',compact('articles'));
    }

    public function articleByCategory(Category $category){

        $articles =$category->articles->sortByDesc('created_at');
        return view('pages.articoli',compact('articles'));
    }
}