<?php

use App\CategoryProduct;
use Illuminate\Database\Seeder;

class Category_ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryProduct::insert([
        
        [
            'product_id' => 1,
            'category_id' => 2,
        ],
        [
            'product_id' => 2,
            'category_id' => 2,
        ],
        [
            'product_id' => 3,
            'category_id' => 2,
        ],
        [
            'product_id' => 4,
            'category_id' => 2,
        ],
        ]);


    }
}
