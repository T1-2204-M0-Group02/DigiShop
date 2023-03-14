<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderDetail;

class CartController extends Controller
{
    public function addCart(Request $request) 
    {
        $pid = $request->pid;
        $quantity = $request->quantity;

        $prod = Product::find($pid);
        $cartItem = new CartItem($prod, $quantity);

        if ($request->session()->has('cart')) {
            $cart = $request->session()->get('cart');
        } else {
            $cart = [];
        }

        // xử lý cộng dồn nếu trùng product id
        for ($i = 0; $i < count($cart); $i++) {
            if ($cart[$i]->product->id == $pid) {
                break;
            }
        }

        if ($i < count($cart)) {
            // trường hợp product đã có trong cart => cộng dồn quantity
            $cart[$i]->quantity += $quantity;
        } else {
            $cart[] = $cartItem;
        }

        $request->session()->put('cart', $cart);
    }

    public function viewCart(Request $request) 
    {
        return view('fe.viewCart');
    }

    public function clearCart(Request $request) 
    {
        $request->session()->forget('cart');
    }

    public function changeCartItem(Request $request)
    {
        if ($request->session()->has('cart')) {
            $cart = $request->session()->get('cart');
            
            $pid = $request->pid;
            $quantity = $request->quantity;

            for ($i = 0; $i < count($cart); $i++) {
                if ($cart[$i]->product->id == $pid) {
                    break;
                }
            }

            if ($i < count($cart)) {
                $cart[$i]->quantity = $quantity;
            }

            $request->session()->put('cart', $cart);
        }
    }

    public function removeCartItem(Request $request)
    {
        if ($request->session()->has('cart')) {
            $cart = $request->session()->get('cart');
            
            $pid = $request->pid;

            for ($i = 0; $i < count($cart); $i++) {
                if ($cart[$i]->product->id == $pid) {
                    break;
                }
            }

            if ($i < count($cart)) {
                unset($cart[$i]); 
            }

            $request->session()->put('cart', $cart);
        }
    }

    public function checkout(Request $request) 
    {
        $total = 0;
        if ($request->session()->has('cart')) {
            $cart = $request->session()->get('cart');
            foreach ($cart as $item) {
                $total += $item->product->price * $item->quantity;
            }
        }

        return view('fe.checkout', compact('total'));
    }

    public function processCheckout(Request $request) 
    {
        if ($request->session()->has('cart')) {
            $cart = $request->all();
            $cart['order_date'] = date('Y-m-d', time());
            $cart['user_id'] = $request->session()->get('user')->id;
            $ord = Order::create($cart);
            //dd($ord);
            // lưu order detail
            $cart = $request->session()->get('cart');
            foreach ($cart as $item) {
                $od = new OrderDetail();
                $od->order_id = $ord->id;
                $od->product_id = $item->product->id;
                $od->price = $item->product->price;
                $od->quantity = $item->quantity;
                $od->save();
            }

            $request->session()->forget('cart');
        }
        return view('fe.thankyou');
    }
}
