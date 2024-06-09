<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

class Search extends Component
{
    use WithPagination;

    #[Url]
    public $q = '';

    public function render()
    {
        $articles = Article::where('title','LIKE','%'.$this->q. '%')->paginate(10);
        return view('livewire.search',compact('articles'));
    }
}
