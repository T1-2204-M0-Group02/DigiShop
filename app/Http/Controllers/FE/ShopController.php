<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('fe.shop.index',compact('products', 'categories'));
    }

    public function product($slug)
    {
        $product = Product::where('slug',$slug)->first();
        return view('fe.shop.detail', compact('product')); 
    }

}
