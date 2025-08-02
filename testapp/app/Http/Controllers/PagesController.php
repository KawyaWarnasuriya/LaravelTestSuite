<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function aboutus(){
        return view('aboutus');
    }

    public function contact(){
        return view('contact');
    }

    public function tests(){
        return view('tests');
    }
}
