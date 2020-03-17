<?php

use Illuminate\Database\Seeder;
use App\Product;
use Carbon\Carbon;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Product::insert([
            [
                'name' => 'Herre Genser v1',
                'slug' => 'genser-v1',
                'details' => 'God kvalitet',
                'price' => 200,
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni veritatis officiis, commodi facere eum suscipit accusamus dolores nisi quaerat ea soluta magnam quia facilis quae sed. Voluptatum dignissimos doloremque obcaecati.',
                'gender' => 1,
                'brand_id' => 2,
                'created_at' => $now,
                'updated_at'=>$now,
            ],
            [
                'name' => 'Dame Genser v2',
                'slug' => 'genser-v2',
                'details' => 'God kvalitet',
                'price' => 259,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'gender' => 0,
                'brand_id' => 1,
                'created_at' => $now,
                'updated_at'=>$now,
            ],
            [
                'name' => 'Herre Genser v3',
                'slug' => 'genser-v3',
                'details' => 'God kvalitet',
                'price' => 459,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'gender' => 1,
                'brand_id' => 2,
                'created_at' => $now,
                'updated_at'=>$now,
            ],
            [
                'name' => 'Dame Genser v4',
                'slug' => 'genser-v4',
                'details' => 'God kvalitet',
                'price' => 852,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'gender' => 0,
                'brand_id' => 1,
                'created_at' => $now,
                'updated_at'=>$now,
            ],
        ]);
    }
}
