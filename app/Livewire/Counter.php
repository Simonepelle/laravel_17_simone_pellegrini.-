<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0; 

    public function render()
    {
        return view('livewire.counter');
    }

    public function increment(){
        $this->count++;
    }

    public function decrement(){
        $this->count--;
    }

    public function azzera(){
        $this->count=0;
    }

    public function setCounter($number){
        $this->count=$number;
    }
}
