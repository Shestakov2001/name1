<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{
    public function index(){
        return view('admin');
    }

    public function create_category(Request $req){
        $category = new Category();
        $category -> name = $req -> name;
        $category -> save();
        return redirect()->route('admin');
    }

    public function create_product(Request $req){
        $product = new Product();
        $product -> name = $req -> name;
        $product -> photo = $req -> photo;
        $product -> price = $req -> price;
        $product -> year = $req -> year;
        $product -> country = $req -> country;
        $product -> model = $req -> model;
        $product -> count = $req -> count;
        $product -> id_cat = $req -> id_cat;
        $product -> save();
        return redirect()->route('admin');
    }
}
