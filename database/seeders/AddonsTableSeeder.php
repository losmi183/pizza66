<?php

namespace Database\Seeders;

use App\Models\Addon;
use Illuminate\Database\Seeder;

class AddonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Addon::create([
            'name' => 'Sir',
        ]);

        Addon::create([
            'name' => 'Dimljeni sir',
        ]);

        Addon::create([
            'name' => 'Šunka',
        ]);

        Addon::create([
            'name' => 'Kulen',
        ]);

        Addon::create([
            'name' => 'Pančeta',
        ]);

        Addon::create([
            'name' => 'Pečenica',
        ]);

        Addon::create([
            'name' => 'Pileći file',
        ]);

        Addon::create([
            'name' => 'Kraški vrat',
        ]);
        
        Addon::create([
            'name' => 'Pečurke',
        ]);

        Addon::create([
            'name' => 'Masline',
        ]);

        Addon::create([
            'name' => 'Jaje',
        ]); 
    }
}
