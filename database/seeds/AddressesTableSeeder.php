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
        $faker = Faker;
        DB::table('addresses')->insert([
            'home' => $faker->address,
            'city_id' => 1,
        ]);
    }
}
