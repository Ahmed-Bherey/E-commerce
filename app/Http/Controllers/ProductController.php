<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function showproducts(){
        $products = Product::all();
        return view('welcome' , compact('products'));
    }

    public function search(){
        $search_text = $_GET['query'];
        $products = Product::where('product_name' , 'LIKE' , '%'.$search_text.'%')->with('category')->get();
        return view('enduser.search' , compact('products'));
    }
}
