<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $req)
    {
        if($req->filter == null)
        {
            $products = \App\Models\Product::all();
        }
        else
        {
            if($req->category == "all")
            {
                if($req->sort == "bol")
                {
                    $products = \App\Models\Product::orderBy($req->filter,"desc")->get();
                }
                elseif($req->sort == "men")
                {
                    $products = \App\Models\Product::orderBy($req->filter,"asc")->get();
                }
            }
            else
            {
                if($req->sort == "bol")
                {
                    $products = \App\Models\Product::orderBy($req->filter,"desc")->where('id_cat', $req->category)->get();
                }
                elseif($req->sort == "men")
                {
                    $products = \App\Models\Product::orderBy($req->filter,"asc")->where('id_cat', $req->category)->get();
                }
            }
        }
        $category = \App\Models\Category::all();
        return view("catalog", ["products"=>$products ,"category"=>$category]);
    }

    public function product($id)

    {
        $product = \App\Models\Product::find($id);
        return view("product",["product"=>$product]);
    }


}
