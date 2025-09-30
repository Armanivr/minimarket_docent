<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $products = Product::inRandomOrder()->take(100)->get();


        return view('home', ['products' => $products]);
    }

    public function aanbod(){
        $products = Product::all();
        return view('aanbod', ['products' => $products]);
    }

    public function contact(){
        return view('contact');
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function recent() {
        return view('recent');
    }
}
