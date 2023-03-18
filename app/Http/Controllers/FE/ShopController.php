<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ShopController extends Controller
{
    public function index()
    {
        $productsShown = 12;
        $products = Product::latest()->paginate($productsShown);
        $categories = Category::all();
        return view('fe.shop.index',compact('products', 'categories'));
    }

    public function product($slug)
    {
        $reviews = Review::all();
        $product = Product::where('slug', $slug)->firstOrFail();
        $relatedProducts = Product::where('category_id', $product->category_id)->get();
        return view('fe.shop.detail', compact('relatedProducts', 'product', 'reviews')); 
    }

    public function review(Request $request)
    {
        Review::create($request->all());
        return Redirect::back();
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $searchProducts = Product::query()
            ->select('products.id', 'products.slug', 'products.name', 'products.description', 'products.price', 'products.image', 'products.sale')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->where('products.name', 'LIKE', "%{$search}%")
            ->orWhere('categories.name', 'LIKE', "%{$search}%")
            ->get();
        return view('fe.search', compact('searchProducts'));
    }
}
