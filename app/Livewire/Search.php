<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class Search extends Component
{
    public $q = '';

    public function render()
    {
        $articles = Article::all();
        return view('livewire.search',compact('articles'));
    }
}
