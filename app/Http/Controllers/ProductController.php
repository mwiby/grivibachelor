<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ProductController extends Controller
{


    public function show($slug){

        $product = Product::where('slug', $slug)->firstOrFail();
        return view('welcome', ['product' => $product]);
    }
    
}

