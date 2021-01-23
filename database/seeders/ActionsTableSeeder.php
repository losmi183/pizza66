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
            'name' => 'Ponedeljak Tihi breg ',
            'new_price' => '1280',
            'description' => 'Tihi Breg 51cm + Pepsi cola 1.5L',
            'image' => '/img/actions/tihi-breg.jpg'
        ]);
        Action::create([
            'name' => 'Utorak Pizza 66',
            'new_price' => '1140',
            'description' => 'Pizza 66 51cm + Pepsi cola 1.5L',
            'image' => '/img/actions/pizza-66.jpg'
        ]);
        Action::create([
            'name' => 'Sreda Cezar pizza ',
            'new_price' => '1240',
            'description' => 'Cezar pizza 51cm + Pepsi cola 1.5L',
            'image' => '/img/actions/cezar-pizza.jpg'
        ]);
        Action::create([
            'name' => 'Četvrtak Garlic Bacon ',
            'new_price' => '990',
            'description' => 'Garlic Bacon pizza 51cm + Pepsi cola 1.5L',
            'image' => '/img/actions/garlic-bacon.jpg'
        ]);
        Action::create([
            'name' => 'Petak Hot chilly pepers ',
            'new_price' => '990',
            'description' => 'Hot chilly pepers 51cm + Pepsi cola 1.5L',
            'image' => '/img/actions/hot-chilly-pepers.jpg'
        ]);
        Action::create([
            'name' => 'Subota Five mix chiese',
            'new_price' => '1160',
            'description' => 'Five mix chiese 51cm + Pepsi cola 1.5L',
            'image' => '/img/actions/five-mix-chiese.jpg'
        ]);
        Action::create([
            'name' => 'Nedelja BBQ',
            'new_price' => '1190',
            'description' => 'BBQ 51cm + Pepsi cola 1.5L',
            'image' => '/img/actions/bbq.jpg'
        ]);

    }
}
