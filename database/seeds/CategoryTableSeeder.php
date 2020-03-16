<?php

use Illuminate\Database\Seeder;

use App\Category;
use Carbon\Carbon;


class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            ['name' => 'Bukse','slug' => 'c-bukse','created_at' => $now,'updated_at'=>$now],
            ['name' => 'Genser','slug' => 'c-genser','created_at' => $now,'updated_at'=>$now],
            ['name' => 'T-skjorte','slug' => 'c-tskjorte','created_at' => $now,'updated_at'=>$now],
            ['name' => 'Treningsoverdel','slug' => 'c-treningsoverdel','created_at' => $now,'updated_at'=>$now],
            ['name' => 'Treningsbukse','slug' => 'c-treningsbukse','created_at' => $now,'updated_at'=>$now],
            ['name' => 'Dress','slug' => 'c-dress','created_at' => $now,'updated_at'=>$now],
            ['name' => 'Kjole','slug' => 'c-kjole','created_at' => $now,'updated_at'=>$now],

        ]);
    }
}
