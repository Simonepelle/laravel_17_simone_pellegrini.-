<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   
    public function welcome() {
        return view('welcome');
    }


    public function dashboard(){
        return view('dashboard');
    }

    public function showCounter(){
        return view('container_counter');
    }
}