<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{
    public function index(){
        $category = Category::all();
        $products = Product::all();
        return view('admin', ["category"=>$category, "product"=>$products]);
    }

    public function delete_category($id){
        $category = Category::find($id)->delete();
        return redirect()->route('admin');
    }

    public function delete_product($id){
        $product = Product::find($id)->delete();
        return redirect()->route('admin');
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

    public function red_tov($id)
    {
        $product = Product::find($id);
        return view('red_tov', ["product"=>$product]);
    }
    public function red_tov_submit($id, Request $req)
    {
        $product = Product::find($id);
        $product->name = $req->input('name');
        $product->photo = $req->input('photo');
        $product->price = $req->input('price');
        $product->year = $req->input('year');
        $product->country = $req->input('country');
        $product->model = $req->input('model');
        $product->count = $req->input('count');
        $product->id_cat = $req->input('id_cat');
        $product->save();

        return redirect()->route('red_tov', $id);
    }
}
