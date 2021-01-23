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
        /**
         * Fixed Actions
         */
        Action::create([
            'name' => 'Posne pice Tuna i Veggie',
            'new_price' => '490',
            'description' => 'pelat, praziluk, biljni sir, tuna, masline, china mix, pečurke, crne masline.',
            'image' => '/img/actions/posno.jpg',
            'day' => 0,
            'fixed' => 1
        ]);

        /**
         * Daily actions
         */
        Action::create([
            'name' => 'Ponedeljak Tihi breg ',
            'new_price' => '1280',
            'description' => 'Tihi Breg 51cm + Pepsi cola 1.5L',
            'image' => '/img/actions/tihi-breg.jpg',
            'day' => 1
        ]);
        Action::create([
            'name' => 'Utorak Pizza 66',
            'new_price' => '1140',
            'description' => 'Pizza 66 51cm + Pepsi cola 1.5L',
            'image' => '/img/actions/pizza-66.jpg',
            'day' => 2
        ]);
        Action::create([
            'name' => 'Sreda Cezar pizza ',
            'new_price' => '1240',
            'description' => 'Cezar pizza 51cm + Pepsi cola 1.5L',
            'image' => '/img/actions/cezar-pizza.jpg',
            'day' => 3
        ]);
        Action::create([
            'name' => 'Četvrtak Garlic Bacon ',
            'new_price' => '990',
            'description' => 'Garlic Bacon pizza 51cm + Pepsi cola 1.5L',
            'image' => '/img/actions/garlic-bacon.jpg',
            'day' => 4
        ]);
        Action::create([
            'name' => 'Petak Hot chilly pepers ',
            'new_price' => '990',
            'description' => 'Hot chilly pepers 51cm + Pepsi cola 1.5L',
            'image' => '/img/actions/hot-chilly-pepers.jpg',
            'day' => 5
        ]);
        Action::create([
            'name' => 'Subota Five mix chiese',
            'new_price' => '1160',
            'description' => 'Five mix chiese 51cm + Pepsi cola 1.5L',
            'image' => '/img/actions/five-mix-chiese.jpg',
            'day' => 6
        ]);
        Action::create([
            'name' => 'Nedelja BBQ',
            'new_price' => '1190',
            'description' => 'BBQ 51cm + Pepsi cola 1.5L',
            'image' => '/img/actions/bbq.jpg',
            'day' => 7
        ]);

    }
}
