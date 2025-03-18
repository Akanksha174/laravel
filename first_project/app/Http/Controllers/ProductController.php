<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function showdata(){
        //return "This is product data";
        $products = \App\Models\Product::all(); 
        return view('Products', ['products' => $products]);
        //another way of passing data --> compact('products');
    }
}
