<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{



    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
    public function brand()
    {
        return $this->belongsto('App\Brand');
    }

    public function presentPrice()
    {
        return money_format('$%i', $this->price / 100);
    }
}
