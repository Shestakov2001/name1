<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $order = \App\Models\Cart::where('id_user', Auth::user()->id)->where('status', 'Новая')->get();
        $carts = \App\Models\Cart::where('id_user', Auth::user()->id)->where('status', 'Корзина')->get();
        return view("home", ["order"=>$order, "carts"=>$carts]);
    }
    public function accept(Request $req)
    {
        $carts = \App\Models\Cart::where('id_user', Auth::user()->id)->where('status', 'Корзина')->get();
        $user= User::find(auth()->user()->id);
        if(Hash::check($req->password, $user->password))
        {
        foreach($carts as $cart)
            {
                $cart->status = "Новая";
                $cart->save();
            }
        }
        return redirect('home');
    }
}
