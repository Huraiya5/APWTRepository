<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller

{
    public function product(){
        $products = ["Chair"=>"1200","Table"=>"2000","Fan"=>"2800","Laptop"=>"6000"];
        return view('product')->with('products', $products);
    }
}
