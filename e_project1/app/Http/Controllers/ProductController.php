<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
	  public function index()
    {
        $products = Product::inRandomOrder()->take(8)->get();
        return view('main')->with('products', $products);
    }



    public function show($slug){
    	$product = Product::where('slug', $slug)->firstOrFail();
    	return view('product.show')->with('product', $product);

    }
}
