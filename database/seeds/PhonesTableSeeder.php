<?php

use Illuminate\Database\Seeder;

class PhonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phones')->insert([
            'number' => '320 123 594',
            'type' => 'celular',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('phones')->insert([
            'number' => '310 123 594',
            'type' => 'celular',
            'user_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('phones')->insert([
            'number' => '300 123 594',
            'type' => 'celular',
            'user_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('phones')->insert([
            'number' => '300 932 762',
            'type' => 'celular',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('phones')->insert([
            'number' => '541 20 92',
            'type' => 'fijo',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
