<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CitiesTableSeeder::class);
        $this->call(AddressesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PhonesTableSeeder::class);
        $this->call(SalesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ProvidersTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(SaleDetailsTableSeeder::class);
    }
}
