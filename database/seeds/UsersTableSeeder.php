<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Rogelio',
            'email' => 'Roge@gmail.com',
            'email_verified_at' => now(),
            'password' => '123',
            'address_id' => 1,
            'role_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Alfonso',
            'email' => 'Alfo@gmail.com',
            'email_verified_at' => now(),
            'password' => '123',
            'address_id' => 2,
            'role_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Camila',
            'email' => 'Cami@gmail.com',
            'email_verified_at' => now(),
            'password' => '123',
            'address_id' => 3,
            'role_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
