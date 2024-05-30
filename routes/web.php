<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;

Route::get('/',[PageController::class,'welcome'] );

Route::get('/articoli',[ArticleController::class,'index'])->name('articles');


Route::get('/articolo/id={id}',[ArticleController::class,'show'])->name('articolo');


Route::get('/articolo/edit',function(){
  return 'pagina di edit';
});


Route::get('/contatti',[ContactController::class,'showPage'])->name('contatti.showPage');



Route::post('/salva-contatto',[ContactController::class,'save'])->name('contatti.salva');

Route::get('/thank-you',[ContactController::class , 'thankYouPage'])->name('contatti.thankYou');


Route::get('/seeder', function(){
 
  Article::create([

    'title'=>'Articolo 1',
    'body'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."

  ]);

  Article::create([

    'title'=>'Articolo 2',
    'body'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."

  ]);

  Article::create([

    'title'=>'Articolo 3',
    'body'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."

  ]);


});


Route::get('/article/create',[ArticleController::class,'create'])->name('article.create');
Route::post('/article/store',[ArticleController::class,'store'])->name('article.store');


Route::get('/dashboard',[PageController::class,'dashboard'])->name('dashboard');


Route::get('/article-by-author/{author}',[ArticleController::class,'articleByAuthor'])->name('article.byAuthor');
Route::get('/article-by-category/{category}',[ArticleController::class,'articleByCategory'])->name('article.byCategory');

Route::resource('categories',CategoryController::class);

Route::get('/counter',[PageController::class,'showCounter']);



