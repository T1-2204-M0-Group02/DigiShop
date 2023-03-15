<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('fe.home', compact('categories', 'products'));
    }
    public function product($slug)
    {
        $prod = Product::where('slug', $slug)->first();
        return view('fe.shop.detail', compact('prod'));
    }
}
