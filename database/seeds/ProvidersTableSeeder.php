<?php

use Illuminate\Database\Seeder;

class ProvidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('providers')->insert([
            'name' => 'Jumbo',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('providers')->insert([
            'name' => 'Golty',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('providers')->insert([
            'name' => 'Hercules GYM',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
