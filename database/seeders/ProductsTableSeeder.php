<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'type' => 'pizza',
            'name' => 'Toskana',
            'slug' => 'toskana',
            'content' => 'pelat, mozzarella, zelene masline, bosiljak',
            'badge' => 'akcija',
            'prices' => json_encode(['mala' => 390, 'srednja' => 490, 'velika' => 740]),
            'image' => 'img/products/tuna.png'
        ]);
        Product::create([
            'type' => 'pizza',
            'name' => 'Fungi',
            'slug' => 'fungi',
            'content' => 'pelat, mozzarella, pečurke, masline, origano',
            'prices' => json_encode(['mala' => 420, 'srednja' => 560, 'velika' => 860]),
            'image' => 'img/products/fungi.png'
        ]);
        Product::create([
            'type' => 'pizza',
            'name' => 'Capricioza',
            'slug' => 'capricioza',
            'content' => 'pelat, mozzarella, pečurke, šunka',
            'prices' => json_encode(['mala' => 440, 'srednja' => 570, 'velika' => 860]),
            'image' => 'img/products/capricosa.png'
        ]);
        Product::create([
            'type' => 'pizza',
            'name' => 'Hot chilly peppers',
            'slug' => 'hot-chilly-peppers',            
            'badge' => 'novo',
            'content' => 'ljuti pelat, mozzarella, kulen, feferone, feta',
            'prices' => json_encode(['mala' => 520, 'srednja' => 660, 'velika' => 990]),
            'image' => 'img/products/madjarica.png'
        ]);
        Product::create([
            'type' => 'pizza',
            'name' => 'Garlic bacon',
            'slug' => 'garlic-bacon',
            'content' => 'pelat, šunka, mozzarella, pančeta, beli luk, bosiljak',
            'prices' => json_encode(['mala' => 560, 'srednja' => 730, 'velika' => 990]),
            'image' => 'img/products/bacon.png'
        ]);
        Product::create([
            'type' => 'pizza',
            'name' => 'Tuna (posno)',
            'slug' => 'tuna-posno',
            'content' => 'pelat, praziluk, biljni sir, tuna, masline',
            'prices' => json_encode(['mala' => 540, 'srednja' => 690, 'velika' => 1030]),
            'image' => 'img/products/tuna.png'
        ]);
        Product::create([
            'type' => 'pizza',
            'name' => 'Veggie (posno)',
            'slug' => 'veggie-posno',
            'content' => 'pelat, biljni sir, china mix, pečurke, crne masline',
            'prices' => json_encode(['mala' => 490, 'srednja' => 630, 'velika' => 1020]),
            'image' => 'img/products/vegeterijanska.png'
        ]);
        Product::create([
            'type' => 'pizza',
            'name' => 'BBQ',
            'slug' => 'bbq',            
            'badge' => 'akcija',
            'content' => 'BBQ pelat, dimljeni sir, kraški vrat, kulen, pančeta, crveni luk',
            'prices' => json_encode(['mala' => 590, 'srednja' => 790, 'velika' => 1190]),
            'image' => 'img/products/quatro.png'
        ]);
        Product::create([
            'type' => 'pizza',
            'name' => 'Tihi breg',
            'slug' => 'tihi-breg',
            'content' => 'pelat, šunka, mozzarella, pančeta, kobasica, kajmak',
            'prices' => json_encode(['mala' => 610, 'srednja' => 860, 'velika' => 1280]),
            'image' => 'img/products/vucija_pica.png'
        ]);
        Product::create([
            'type' => 'pizza',
            'name' => 'Pizza 66',
            'slug' => 'pizza-66',
            'content' => 'sour cream, pečenica, mozzarella, paradajz, rukola',
            'prices' => json_encode(['mala' => 560, 'srednja' => 730, 'velika' => 1140]),
            'image' => 'img/products/zlatiborska.png'
        ]);
        Product::create([
            'type' => 'pizza',
            'name' => 'Cezar pizza',
            'slug' => 'cezar-pizza',
            'content' => 'pavlaka, mozzarella, pileći file, pančeta, zelena salata, cezar dresing',            
            'badge' => 'novo',
            'prices' => json_encode(['mala' => 610, 'srednja' => 860, 'velika' => 1240]),
            'image' => 'img/products/fungi.png'
        ]);
        Product::create([
            'type' => 'pizza',
            'name' => 'Five mix chiese',
            'slug' => 'five-mix-chiese',            
            'badge' => 'akcija',
            'content' => 'ementaler, dimljeni sir, mozzarella, gorgonzola, parmezan',
            'prices' => json_encode(['mala' => 570, 'srednja' => 780, 'velika' => 1160]),
            'image' => 'img/products/4-vrste-sira.png'
        ]);
    }
}
