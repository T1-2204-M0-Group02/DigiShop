<?php

namespace App\Http\Controllers\Cart;

use App\Enums\OrderStatusEnum;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Redirect;

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
        for ($i = 0; $i < count($cart); $i++) {
            if ($cart[$i]->product->id == $pid) {
                break;
            }
        }
        if ($i < count($cart)) {
            $cart[$i]->quantity += $quantity;
        } else {
            $cart[] = $cartItem;
        }
        $request->session()->put('cart', $cart);

        return $cart;
    }

    public function viewCart(Request $request) 
    {
        return view('fe.cart');
    }

    public function clearCart(Request $request) 
    {
        $request->session()->forget('cart');
        return Redirect::back();
    }

    public function changeCartItem(Request $request)
    {
        if ($request->session()->has('cart')) {
            try {
                $cart = $request->session()->get('cart');

                $pid = $request->pid;
                $quantity = $request->quantity;

                $total = 0;
                $subtotal = 0;
                for ($i = 0; $i < count($cart); $i++) {
                    if ($cart[$i]->product->id == $pid) {
                        $cart[$i]->quantity = $quantity;
                        $subtotal = $cart[$i]->quantity * $cart[$i]->product->getCurrentPrice();
                    }
                    $total += $cart[$i]->quantity * $cart[$i]->product->getCurrentPrice();
                }

                $request->session()->put('cart', $cart);
            } catch (\Throwable $th) {
                echo($cart) ;
            }
            return array("total" => $total, "subtotal" => $subtotal);
        }
    }

    public function removeCartItem(Request $request)
    {
        if ($request->session()->has('cart')) {
            $cart = $request->session()->get('cart');
            
            $pid = $request->pid;

            $total = 0;
            for ($i = 0; $i < count($cart); $i++) {
                if ($cart[$i]->product->id == $pid) {
                    unset($cart[$i]);
                }else {
                    $total += $cart[$i]->quantity * $cart[$i]->product->getCurrentPrice();
                }
            }

            if ($i < count($cart)) {
                unset($cart[$i]); 
            }

            $request->session()->put('cart', $cart);

            return array("cart" => $cart, "total" => $total);
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
            $cart['shipping_time'] = date_add(date_create(date('Y-m-d', time())),date_interval_create_from_date_string("7 days"));
            $cart['user_id'] = Auth()->user()->id;
            $cart['status'] = OrderStatusEnum::New;
            $ord = Order::create($cart);
            $cart = $request->session()->get('cart');
            foreach ($cart as $item) {
                $od = new OrderDetail();
                $od->order_id = $ord->id;
                $od->product_id = $item->product->id;
                $od->price = $item->product->getCurrentPrice();
                $od->quantity = $item->quantity;
                $od->save();
            }

            $request->session()->forget('cart');
            return view('fe.order.success', compact('ord'));
        }
        return Redirect::back();
    }

    public function orders()
    {
        $orders = Order::latest()->get();
        return view('fe.order.list', compact('orders'));
    }
}
