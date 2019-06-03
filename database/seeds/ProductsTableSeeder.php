<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'guayos',
            'price' => 100000,
            'stock' => 10,
            'provider_id' => 1,
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => 'camisa colombia',
            'price' => 150000,
            'stock' => 5,
            'provider_id' => 1,
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => 'pantaloneta',
            'price' => 10000,
            'stock' => 50,
            'provider_id' => 1,
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => 'medias',
            'price' => 5000,
            'stock' => 100,
            'provider_id' => 1,
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => 'nacional',
            'price' => 50000,
            'stock' => 10,
            'provider_id' => 2,
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => 'futsal',
            'price' => 80000,
            'stock' => 3,
            'provider_id' => 1,
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => '5 kilos',
            'price' => 10000,
            'stock' => 3,
            'provider_id' => 3,
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => 'futsal',
            'price' => 20000,
            'stock' => 3,
            'provider_id' => 3,
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
