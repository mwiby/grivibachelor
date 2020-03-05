<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        
        $categories = Category::get();
        
        return $categories;
    
    }
    public function show(){

        $products;
        
        if(request('category')){
            $products = Category::where('name',request('category'))->firstOrFail()->products;
        }
        else {
            $products = 'Ingen produkter i denne Kategorien';
        }
        return $products;
    }
}
