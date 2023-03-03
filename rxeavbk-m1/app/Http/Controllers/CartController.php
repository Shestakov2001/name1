<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function show(){
        $carts = \App\Models\Cart::where('id_user', Auth::user()->id)->get();
            return view("cart",["carts"=>$carts]);
    }

    public function add($id){
        $product = \App\Models\Product::find($id);
        $bufferif = \App\Models\Cart::Where('id_product', "=", $id)->where('id_user', Auth::user()->id) -> get();

        if ($bufferif -> count() == 0) {
            $new_cart = new \App\Models\Cart;
            $new_cart->id_user = Auth::user()->id;
            $new_cart->id_product = $id;
            $new_cart->count = 1;
            $new_cart->id_buscet = 1;
            $new_cart->save();
        }
        else {
            $bufferif[0] -> count++;
            if($product->count < $bufferif[0] -> count){
                $bufferif[0] -> count--;
            }

            $bufferif[0] -> save();
        }

        return redirect('/product/'.$id);
    }

    public function plus($id){
        $cart = \App\Models\Cart::find($id);
        $product = \App\Models\Product::find($cart->id_product);
        $cart->count++;
        if($product->count < $cart->count){
            $cart->count--;
        }

        $cart->save();
        return redirect('/cart');
    }

    public function minus($id){
        $cart = \App\Models\Cart::find($id);
        $cart->count--;
        if($cart->count == 0){
            $cart->delete();
            return redirect('/cart');
        }
        else{
            $cart->save();
            return redirect('/cart');
        }
    }
}
