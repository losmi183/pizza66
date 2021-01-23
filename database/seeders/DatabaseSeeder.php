<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call([
            ProductsTableSeeder::class,
            DrinksTableSeeder::class,
            BbqTableSeeder::class,
            AddonsTableSeeder::class,
            AddonOptionsTableSeeder::class,
            UsersTableSeeder::class,
            ActionsTableSeeder::class,
            PricesTableSeeder::class,
        ]);  
    }
}
