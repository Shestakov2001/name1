<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SoloController extends Controller
{
    public function soloproduct($id){
        $product = Product::find($id);
        return view('soloproduct', ['p' => $product]);
    }
}
