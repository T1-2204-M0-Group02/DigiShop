<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\WishListItem;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderDetail;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('fe.home', compact('categories', 'products'));
    }


}
