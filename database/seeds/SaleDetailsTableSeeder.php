<?php

use Illuminate\Database\Seeder;

class SaleDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sale_details')->insert([
            'product_discount' => 5000,
            'quantity' => 3,
            'sale_id' => 3,
            'product_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('sale_details')->insert([
            'product_discount' => 10000,
            'quantity' => 3,
            'sale_id' => 3,
            'product_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('sale_details')->insert([
            'product_discount' => 5000,
            'quantity' => 3,
            'sale_id' => 3,
            'product_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('sale_details')->insert([
            'product_discount' => 5000,
            'quantity' => 3,
            'sale_id' => 3,
            'product_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('sale_details')->insert([
            'product_discount' => 0,
            'quantity' => 1,
            'sale_id' => 1,
            'product_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('sale_details')->insert([
            'product_discount' => 0,
            'quantity' => 1,
            'sale_id' => 2,
            'product_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('sale_details')->insert([
            'product_discount' => 0,
            'quantity' => 1,
            'sale_id' => 2,
            'product_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
