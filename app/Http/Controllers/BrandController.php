<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){
        
        $brands = Brand::all();
        if(!$brands->isEmpty()){
            return ['brands' => $brands];
        }
        else{
            return ['brands' => 'Ingen brands tilgjengelig'];
        }
    
    }
  
  
public function show($gender,$c_slug){

    if($gender !== 'woman' && $gender !== 'man'){
        return ['error' => 'Feil data input'];
    }
    else{
        $brands = Brand::whereHas("products", function($productQuery)
        use($gender, $c_slug) {
    
            return $productQuery->whereHas('categories', function($query) use ($c_slug){
            
                return $query->where('slug',$c_slug);
                
            })->where('gender',($gender == 'woman'? 0 : 1));
        })
        ->get();
             
            
        return ['brands' => $brands];
    }

}

}