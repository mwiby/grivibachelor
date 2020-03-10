<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        
        $categories = Category::all();
        
        return $categories;
    
    }
    public function show($slug){

        $products = Category::where('slug',$slug)->firstOrFail()->products;
        

        if($products->isEmpty()){
            $products = 'Ingen produkter i denne Kategorien';
            return $products;
        }
        else {

            ddd($products);
            return $products;
        }
    }
}
