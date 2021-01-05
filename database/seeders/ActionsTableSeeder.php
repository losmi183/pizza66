<?php

namespace Database\Seeders;

use App\Models\Action;
use Illuminate\Database\Seeder;

class ActionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Action::create([
            'name' => 'Tihi breg ',
            'old_price' => '1400 RSD',
            'new_price' => '1200 RSD',
            'description' => 'Besplatna dostava: Starcevo, Omoljica, Ivanovo i Brestovac',
            'image' => '/img/actions/1.jpg'
        ]);
        Action::create([
            'name' => 'Pizza po izboru',
            'new_price' => 'Pepsi Cola Gratis',
            'description' => 'Besplatna dostava: Starcevo, Omoljica, Ivanovo i Brestovac',
            'image' => '/img/actions/2.jpg'
        ]);
        Action::create([
            'name' => 'Nedeljom Porodična ',
            'new_price' => '20% popusta',
            'description' => 'Besplatna dostava: Starcevo, Omoljica, Ivanovo i Brestovac',
            'image' => '/img/actions/2.jpg'
        ]);
    }
}
