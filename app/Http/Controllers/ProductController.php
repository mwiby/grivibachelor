<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ProductController extends Controller
{





    public function showOne($slug){
        $product = Product::where('slug', $slug)->with('brand')->firstOrFail();
        return ['product' => $product];
    }

  /*  public function show($gender,$c_slug,$slug){

    
        
        $brands = explode("/", $slug);

        $products = Product::whereHas('categories',function($query) use ($c_slug){
            $query->where('slug',$c_slug);
        })->where('gender',($gender == 'woman'? 0 : 1))
        ->with('brand')->get();
        return ['product' => $product];
    }
    */
}

