<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        
        $categories = Category::all();
        
        return view('welcome', ['categories' => $categories]);
    
    }
    public function show($gender,$c_slug){
        
        $products = Product::whereHas('categories',function($query) use ($c_slug){
            $query->where('slug',$c_slug);
        })->where('gender', $gender)->get();
        
        return view('welcome', ['products' => $products]);

    }
}
