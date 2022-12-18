<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $products = Product::take(8)->get();
        return view('home', compact('products'));
    }
}
