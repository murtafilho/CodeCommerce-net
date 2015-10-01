<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    public function run(){
        DB::table('products')->truncate();
        factory(\CodeCommerce\Product::class,40)->create();
    }
}