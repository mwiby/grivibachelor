<?php

use Illuminate\Database\Seeder;
use App\Brand;
use Carbon\Carbon;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        $now = Carbon::now()->toDateTimeString();


        Brand::insert([
            [
                'name' => 'Vero Moda',
                'slug' => 'b-veroModa',
                'image' => 'veroModa.png',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Gucci',
                'slug' => 'b-gucci',
                'image' => 'gucci.png',
                'created_at' => $now,
                'updated_at' => $now,
                
            ],
            [
                'name' => 'Ralph lauren',
                'slug' => 'b-ralphLauren',
                'image' => 'ralph.png',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Nike',
                'slug' => 'b-nike',
                'image' => 'nike.png',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Tiger',
                'slug' => 'b-tiger',
                'image' => 'tiger.png',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Duffy',
                'slug' => 'b-duffy',
                'image' => 'duffy.png',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Only',
                'slug' => 'b-only',
                'image' => 'only.png',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
