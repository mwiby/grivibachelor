<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ClothesController extends Controller {



    public function index($gender){

     if($gender === 'woman' ){
            
            $categories = Category::whereHas('products', function($query){
                $query->where('gender',0);
            })->get();

            $products = Product::where('gender',0)->limit(6)->get();
  
            return view('welcome', ['products' => $products,'categories' => $categories]);
        }
     else
        if($gender === 'man' ){
            
            $categories = Category::whereHas('products', function($query){
                $query->where('gender',1);
            })->get();

            $products = Product::where('gender',1)->limit(6)->get();
            return view('welcome', ['products' => $products,'categories' => $categories]);
        }
        else{
            abort(404);
        }
        

    }
}