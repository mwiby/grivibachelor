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

    

}

