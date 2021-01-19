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
            'image' => 'img/products/tuna.png'
        ]);
        Product::create([
            'type' => 'pizza',
            'name' => 'Fungi',
            'slug' => 'fungi',
            'content' => 'pelat, mozzarella, pečurke, masline, origano',
            'image' => 'img/products/fungi.png'
        ]);
        Product::create([
            'type' => 'pizza',
            'name' => 'Capricioza',
            'slug' => 'capricioza',
            'content' => 'pelat, mozzarella, pečurke, šunka',
            'image' => 'img/products/capricosa.png'
        ]);
        Product::create([
            'type' => 'pizza',
            'name' => 'Hot chilly peppers',
            'slug' => 'hot-chilly-peppers',            
            'badge' => 'novo',
            'content' => 'ljuti pelat, mozzarella, kulen, feferone, feta',
            'image' => 'img/products/madjarica.png'
        ]);
        Product::create([
            'type' => 'pizza',
            'name' => 'Garlic bacon',
            'slug' => 'garlic-bacon',
            'content' => 'pelat, šunka, mozzarella, pančeta, beli luk, bosiljak',
            'image' => 'img/products/bacon.png'
        ]);
        Product::create([
            'type' => 'pizza',
            'name' => 'Tuna (posno)',
            'slug' => 'tuna-posno',
            'content' => 'pelat, praziluk, biljni sir, tuna, masline',
            'image' => 'img/products/tuna.png'
        ]);
        Product::create([
            'type' => 'pizza',
            'name' => 'Veggie (posno)',
            'slug' => 'veggie-posno',
            'content' => 'pelat, biljni sir, china mix, pečurke, crne masline',
            'image' => 'img/products/vegeterijanska.png'
        ]);
        Product::create([
            'type' => 'pizza',
            'name' => 'BBQ',
            'slug' => 'bbq',            
            'badge' => 'akcija',
            'content' => 'BBQ pelat, dimljeni sir, kraški vrat, kulen, pančeta, crveni luk',
            'image' => 'img/products/quatro.png'
        ]);
        Product::create([
            'type' => 'pizza',
            'name' => 'Tihi breg',
            'slug' => 'tihi-breg',
            'content' => 'pelat, šunka, mozzarella, pančeta, kobasica, kajmak',
            'image' => 'img/products/vucija_pica.png'
        ]);
        Product::create([
            'type' => 'pizza',
            'name' => 'Pizza 66',
            'slug' => 'pizza-66',
            'content' => 'sour cream, pečenica, mozzarella, paradajz, rukola',
            'image' => 'img/products/zlatiborska.png'
        ]);
        Product::create([
            'type' => 'pizza',
            'name' => 'Cezar pizza',
            'slug' => 'cezar-pizza',
            'content' => 'pavlaka, mozzarella, pileći file, pančeta, zelena salata, cezar dresing',            
            'badge' => 'novo',
            'image' => 'img/products/fungi.png'
        ]);
        Product::create([
            'type' => 'pizza',
            'name' => 'Five mix chiese',
            'slug' => 'five-mix-chiese',            
            'badge' => 'akcija',
            'content' => 'ementaler, dimljeni sir, mozzarella, gorgonzola, parmezan',
            'image' => 'img/products/4-vrste-sira.png'
        ]);
    }
}
