<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SafarioController extends Controller
{
    public function index(){
        return view('safario.index');
    }
    public function about(){
        return view('safario.about');
    }
    public function contact(){
        return view('safario.contact');
    }
    public function packages(){
        return view('safario.packages');
    }
}
