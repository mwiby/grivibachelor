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
        
        ($path === 'api/products/Woman' 
            ?
            $products = Product::where('gender',0)->limit(9)->get()
            
            :
            $products = Product::where('gender',1)->limit(9)->get()
            
        );
        return $products;
    }

    public function show(Product $product){

        return $product;
    }
    
}

