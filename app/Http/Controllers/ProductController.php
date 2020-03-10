<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ProductController extends Controller
{

    public function index(){

        $path = Route::current()->uri;
        $products;
        
        ($path === 'api/products/woman' 
            ?
            $products = Product::where('gender',0)->limit(9)->get()
            :
            $products = Product::where('gender',1)->limit(9)->get()
        );

        return $products;
    }

    public function show($slug){

        $product = Product::where('slug', $slug)->firstOrFail();
        return $product;
    }
    
}

