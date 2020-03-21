<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        
        $categories = Category::all();
        
        return ['categories' => $categories];
    
    }
    public function show($gender,$c_slug){
        
        if($gender == 'man' || $gender == 'woman'){

            $products = Product::whereHas('categories',function($query) use ($c_slug){
                $query->where('slug',$c_slug);
            })->where('gender',($gender == 'woman'? 0 : 1))
            ->with('brand')->get();

            return ['products' => $products];
        }
        else{
            return ['error' => 'Oppgi riktig Kjønn'];
        }
       

    }
}
