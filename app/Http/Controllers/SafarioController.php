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
    public function reservations(){
        return view('safario.reservations');
    }
    public function login(){
        return view('safario.login');
    }
    public function signup(){
        return view('safario.signup');
    }
}
