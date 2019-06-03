<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->insert([
            'home' => 'Car 50 # 20 -10',
            'city_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('addresses')->insert([
            'home' => 'Cir 01 # 70 - 01',
            'city_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('addresses')->insert([
            'home' => 'Call 80 # 80 -10',
            'city_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
