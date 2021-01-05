<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
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
        User::create([
            'name' => 'Miloš Glogovac',
            'email' => 'milos.glogovac@gmail.com',
            'password' => bcrypt('losmi183'),
            'remember_token' => Str::random(60),
            'role' => 'admin',
            'address' => 'Knezmihajlova 65/4',
            'city' => 'PAnčevo',
            'phone' => '066085541'
        ]);
        User::create([
            'name' => 'Edi Mlekov',
            'email' => 'edimlekov@gmail.com',
            'password' => bcrypt('11111111'),
            'remember_token' => Str::random(60),
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'Pera Peric',
            'email' => 'pera@gmail.com',
            'password' => bcrypt('11111111'),
            'remember_token' => Str::random(60),
            'role' => 'customer'
        ]);
    }
}
