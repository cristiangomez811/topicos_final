<?php

use Illuminate\Database\Seeder;

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sales')->insert([
            'sale_date' => now(),
            'sale_discount' => 0,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('sales')->insert([
            'sale_date' => now(),
            'sale_discount' => 45000,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('sales')->insert([
            'sale_date' => now(),
            'sale_discount' => 15000,
            'user_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
