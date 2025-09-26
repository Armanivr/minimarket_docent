<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PagesController extends Controller
{
    public function home()
    {
        $products = Product::inRandomOrder()->take(100)->get();

        return view('home', ['products' => $products]);
    }

    public function aanbod()
    {
        $product = Product::all();
        return view('aanbod', ['products' => Product::all()]);
    }

    public function recent()
    {
        return view('recent');
    }

    public function contact()
    {
        return view('contact');
    }
}
