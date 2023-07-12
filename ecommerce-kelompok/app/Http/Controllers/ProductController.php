<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        
        return view('product');
    }

    public function sport(){
        
        return view('sport');
    }

    public function work(){
        
        return view('work');
    }

    public function casual(){
        
        return view('casual');
    }

    public function heels(){
        
        return view('heels');
    }
}
