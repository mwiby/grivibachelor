<?php

use App\Brand;

use App\Product;
use App\Category;
use App\CategoryProduct;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        Brand::create([
            'name' => 'Gucci',
            'slug' => 'b-gucci',
            'image' => 'gucci.png',
            'created_at' => now(),
            'updated_at' => now(),
            
        ]);

        Brand::create([
            'name' => 'Vero Moda',
            'slug' => 'b-veroModa',
            'image' => 'veroModa.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Brand::create([
            'name' => 'Ralph lauren',
            'slug' => 'b-ralphLauren',
            'image' => 'ralph.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Brand::create([
            'name' => 'Nike',
            'slug' => 'b-nike',
            'image' => 'nike.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Brand::create([
            'name' => 'Tiger',
            'slug' => 'b-tiger',
            'image' => 'tiger.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Brand::create([
            'name' => 'Duffy',
            'slug' => 'b-duffy',
            'image' => 'duffy.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Brand::create([
            'name' => 'Only',
            'slug' => 'b-only',
            'image' => 'only.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        Product::create([
            'name' => 'Herre Genser v1',
            'slug' => 'genser-v1',
            'details' => 'God kvalitet',
            'price' => 199,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni veritatis officiis, commodi facere eum suscipit accusamus dolores nisi quaerat ea soluta magnam quia facilis quae sed. Voluptatum dignissimos doloremque obcaecati.',
            'image' => 'genser1.png',
            'gender' => 1,
            'brand_id' => 2,
        ]);
        Product::create([
            'name' => 'Dame Genser v2',
            'slug' => 'genser-v2',
            'details' => 'God kvalitet',
            'price' => 259,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'image' => 'genser2.png',
            'gender' => 0,
            'brand_id' => 1,
        ]);
        Product::create([
            'name' => 'Herre Genser v3',
            'slug' => 'genser-v3',
            'details' => 'God kvalitet',
            'price' => 459,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'image' => 'genser3.png',
            'gender' => 1,
            'brand_id' => 2,
        ]);
        Product::create([
            'name' => 'Dame Genser v4',
            'slug' => 'genser-v4',
            'details' => 'God kvalitet',
            'price' => 852,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'image' => 'genser4.png',
            'gender' => 0,
            'brand_id' => 1,
        ]);
        Product::create([
            'name' => 'Dame Genser v5',
            'slug' => 'genser-v5',
            'details' => 'God kvalitet',
            'price' => 459,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'image' => 'genser5.png',
            'gender' => 0,
            'brand_id' => 3,
        ]);
        Product::create([
            'name' => 'Dame Genser v6',
            'slug' => 'genser-v6',
            'details' => 'God kvalitet',
            'price' => 145,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'image' => 'genser6.png',
            'gender' => 0,
            'brand_id' => 2,
        ]);
        Product::create([
            'name' => 'Dame Genser v7',
            'slug' => 'genser-v7',
            'details' => 'God kvalitet',
            'price' => 359,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'image' => 'genser7.png',
            'gender' => 0,
            'brand_id' => 2,
        ]);
        Product::create([
            'name' => 'Dame Genser v8',
            'slug' => 'genser-v8',
            'details' => 'God kvalitet',
            'price' => 859,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'image' => 'genser8.png',
            'gender' => 0,
            'brand_id' => 4,
        ]);
        Product::create([
            'name' => 'Dame Genser v9',
            'slug' => 'genser-v9',
            'details' => 'God kvalitet',
            'price' => 159,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'image' => 'genser9.png',
            'gender' => 0,
            'brand_id' => 4,
        ]);
        Product::create([
            'name' => 'Kjole v1',
            'slug' => 'kjole-v1',
            'details' => 'God kvalitet',
            'price' => 159,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'image' => 'kjole1.png',
            'gender' => 0,
            'brand_id' => 4,
        ]);
        Product::create([
            'name' => 'Kjole v2',
            'slug' => 'kjole-v2',
            'details' => 'God kvalitet',
            'price' => 159,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'image' => 'kjole2.png',
            'gender' => 0,
            'brand_id' => 4,
        ]);
        Product::create([
            'name' => 'Kjole v3',
            'slug' => 'kjole-v3',
            'details' => 'God kvalitet',
            'price' => 459,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'image' => 'kjole3.png',
            'gender' => 0,
            'brand_id' => 5,
        ]);
        Product::create([
            'name' => 'Kjole v4',
            'slug' => 'kjole-v4',
            'details' => 'God kvalitet',
            'price' => 259,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'image' => 'kjole4.png',
            'gender' => 0,
            'brand_id' => 2,
        ]);
        Product::create([
            'name' => 'Kjole v5',
            'slug' => 'kjole-v5',
            'details' => 'God kvalitet',
            'price' => 886,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'image' => 'kjole5.png',
            'gender' => 0,
            'brand_id' => 4,
        ]);
        Product::create([
            'name' => 'Bukse v1',
            'slug' => 'bukse-v1',
            'details' => 'God kvalitet',
            'price' => 432,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'image' => 'bukse1.png',
            'gender' => 1,
            'brand_id' => 4,
        ]);
        Product::create([
            'name' => 'Bukse v2',
            'slug' => 'bukse-v2',
            'details' => 'God kvalitet',
            'price' => 559,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'image' => 'bukse2.png',
            'gender' => 1,
            'brand_id' => 5,
        ]);
        Product::create([
            'name' => 'Bukse v3',
            'slug' => 'bukse-v3',
            'details' => 'God kvalitet',
            'price' => 456,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptatem ullam officiis possimus modi necessitatibus cumque fugit blanditiis quia! Sapiente qui blanditiis nihil culpa perspiciatis nam delectus obcaecati nesciunt aut!',
            'image' => 'bukse3.png',
            'gender' => 0,
            'brand_id' => 2,
        ]);
        Product::create([
            'name' => 'Treningsbukse v1',
            'slug' => 'treningsbukse-v1',
            'details' => 'God kvalitet',
            'price' => 239,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptatem ullam officiis possimus modi necessitatibus cumque fugit blanditiis quia! Sapiente qui blanditiis nihil culpa perspiciatis nam delectus obcaecati nesciunt aut!',
            'image' => 'treningsbukse1.png',
            'gender' => 0,
            'brand_id' => 2,
        ]);
        Product::create([
            'name' => 'Treningsbukse v2',
            'slug' => 'treningsbukse-v2',
            'details' => 'God kvalitet',
            'price' => 529,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptatem ullam officiis possimus modi necessitatibus cumque fugit blanditiis quia! Sapiente qui blanditiis nihil culpa perspiciatis nam delectus obcaecati nesciunt aut!',
            'image' => 'treningsbukse2.png',
            'gender' => 1,
            'brand_id' => 2,
        ]);
        Product::create([
            'name' => 'Bukse v4',
            'slug' => 'bukse-v4',
            'details' => 'God kvalitet',
            'price' => 559,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptatem ullam officiis possimus modi necessitatibus cumque fugit blanditiis quia! Sapiente qui blanditiis nihil culpa perspiciatis nam delectus obcaecati nesciunt aut!',
            'image' => 'bukse4.png',
            'gender' => 1,
            'brand_id' => 2,
        ]);
        Product::create([
            'name' => 'Bukse v5',
            'slug' => 'bukse-v5',
            'details' => 'God kvalitet',
            'price' => 1499,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptatem ullam officiis possimus modi necessitatibus cumque fugit blanditiis quia! Sapiente qui blanditiis nihil culpa perspiciatis nam delectus obcaecati nesciunt aut!',
            'image' => 'bukse5.png',
            'gender' => 1,
            'brand_id' => 2,
        ]);
        Product::create([
            'name' => 'Bukse v6',
            'slug' => 'bukse-v6',
            'details' => 'God kvalitet',
            'price' => 550,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptatem ullam officiis possimus modi necessitatibus cumque fugit blanditiis quia! Sapiente qui blanditiis nihil culpa perspiciatis nam delectus obcaecati nesciunt aut!',
            'image' => 'bukse6.png',
            'gender' => 1,
            'brand_id' => 2,
        ]);
        Product::create([
            'name' => 'Bukse v7',
            'slug' => 'bukse-v7',
            'details' => 'God kvalitet',
            'price' => 899,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptatem ullam officiis possimus modi necessitatibus cumque fugit blanditiis quia! Sapiente qui blanditiis nihil culpa perspiciatis nam delectus obcaecati nesciunt aut!',
            'image' => 'bukse7.png',
            'gender' => 1,
            'brand_id' => 2,
        ]);
        Product::create([
            'name' => 'Treningsbukse v3',
            'slug' => 'treningsbukse v3',
            'details' => 'God kvalitet',
            'price' => 549,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptatem ullam officiis possimus modi necessitatibus cumque fugit blanditiis quia! Sapiente qui blanditiis nihil culpa perspiciatis nam delectus obcaecati nesciunt aut!',
            'image' => 'bukse8.png',
            'gender' => 1,
            'brand_id' => 2,
        ]);
        Product::create([
            'name' => 'TreningsBukse v4',
            'slug' => 'treningsbukse v4',
            'details' => 'God kvalitet',
            'price' => 1359,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptatem ullam officiis possimus modi necessitatibus cumque fugit blanditiis quia! Sapiente qui blanditiis nihil culpa perspiciatis nam delectus obcaecati nesciunt aut!',
            'image' => 'bukse9.png',
            'gender' => 1,
            'brand_id' => 2,
        ]);
        
        Category::create([
            'name' => 'Bukse',
            'slug' => 'c-bukse',
        ]);
        Category::create([
            'name' => 'Genser',
            'slug' => 'c-genser',
        ]);
        Category::create([
            'name' => 'T-skjorte',
            'slug' => 'c-tskjorte',
        ]);
        Category::create([
            'name' => 'Treningsoverdel',
            'slug' => 'c-treningsoverdel',
        ]);
        Category::create([
            'name' => 'Treningsbukse',
            'slug' => 'c-treningsbukse',
        ]);
        Category::create([
            'name' => 'Dress',
            'slug' => 'c-dress',
        ]);
        Category::create([
            'name' => 'Kjole',
            'slug' => 'c-kjole',
        ]);

        CategoryProduct::create([
            'product_id' => 1,
            'category_id' => 2,
        ]);
        CategoryProduct::create([
            'product_id' => 2,
            'category_id' => 2,
        ]);
        CategoryProduct::create([
            'product_id' => 3,
            'category_id' => 2,
        ]);
        CategoryProduct::create([
            'product_id' => 4,
            'category_id' => 2,
        ]);
        CategoryProduct::create([
            'product_id' => 5,
            'category_id' => 2,
        ]);
        CategoryProduct::create([
            'product_id' => 6,
            'category_id' => 2,
        ]);
        CategoryProduct::create([
            'product_id' => 7,
            'category_id' => 2,
        ]);
        CategoryProduct::create([
            'product_id' => 8,
            'category_id' => 2,
        ]);
        CategoryProduct::create([
            'product_id' => 9,
            'category_id' => 2,
        ]);
        CategoryProduct::create([
            'product_id' => 10,
            'category_id' => 7,
        ]);
        CategoryProduct::create([
            'product_id' => 11,
            'category_id' => 7,
        ]);
        CategoryProduct::create([
            'product_id' => 12,
            'category_id' => 7,
        ]);
        CategoryProduct::create([
            'product_id' => 13,
            'category_id' => 7,
        ]);
        CategoryProduct::create([
            'product_id' => 14,
            'category_id' => 7,
        ]);
        CategoryProduct::create([
            'product_id' => 15,
            'category_id' => 1,
        ]);
        CategoryProduct::create([
            'product_id' => 16,
            'category_id' => 1,
        ]);
        CategoryProduct::create([
            'product_id' => 17,
            'category_id' => 1,
        ]);
        CategoryProduct::create([
            'product_id' => 16,
            'category_id' => 5,
        ]);
        CategoryProduct::create([
            'product_id' => 17,
            'category_id' => 5,
        ]);
        CategoryProduct::create([
            'product_id' => 18,
            'category_id' => 1,
        ]);
        CategoryProduct::create([
            'product_id' => 19,
            'category_id' => 1,
        ]);
        CategoryProduct::create([
            'product_id' => 20,
            'category_id' => 1,
        ]);
        CategoryProduct::create([
            'product_id' => 21,
            'category_id' => 1,
        ]);
        CategoryProduct::create([
            'product_id' => 22,
            'category_id' => 1,
        ]);
        CategoryProduct::create([
            'product_id' => 23,
            'category_id' => 1,
        ]);
        CategoryProduct::create([
            'product_id' => 22,
            'category_id' => 5,
        ]);
        CategoryProduct::create([
            'product_id' => 23,
            'category_id' => 5,
        ]);


       
    }
}
