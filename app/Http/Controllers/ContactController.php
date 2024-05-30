<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showPage(){
        return view('pages.contatti');
    }

    public function save(Request $request){
    
        if($request->name==null||$request->email==null||$request->message==null){
            return redirect()->back()->with(['error'=>'Compila correttamente i campi!']);
        }
        
        Mail::to($request->email)->send(new ContactMail($request->name,$request->email,$request->message));
    

                
        return redirect(route('contatti.thankYou'));
        
    }

    public function thankYouPage(){
        
        return view('pages.thankyou');

    }
}