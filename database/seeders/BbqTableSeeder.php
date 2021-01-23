<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class BbqTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'type' => 'bbq',
            'slug' => 'djacka-pljeskavica',
            'name' => 'Djačka Pljeskavica',
            'price' => '140',
            'image' => 'img/products/djacka-pljeskavica.jpg',
        ]);
        Product::create([
            'type' => 'bbq',
            'slug' => 'srednja-pljeskavica',
            'name' => 'Srednja Pljeskavica',
            'price' => '170',
            'image' => 'img/products/srednja-pljeskavica.jpg',
        ]);
        Product::create([
            'type' => 'bbq',
            'slug' => 'velika-pljeskavica',
            'name' => 'Velika Pljeskavica',
            'price' => '210',
            'image' => 'img/products/velika-pljeskavica.jpg',
        ]);
        Product::create([
            'type' => 'bbq',
            'slug' => 'dupla-pljeskavica',
            'name' => 'Dupla Pljeskavica',
            'price' => '230',
            'image' => 'img/products/dupla-pljeskavica.jpg',
        ]);
        Product::create([
            'type' => 'bbq',
            'slug' => 'gurmanska-mala',
            'name' => 'Gurmanska mala Pljeskavica',
            'price' => '210',
            'image' => 'img/products/gurmanska-mala.jpg',
        ]);
        Product::create([
            'type' => 'bbq',
            'slug' => 'gurmanska-velika',
            'name' => 'Gurmanska velika Pljeskavica',
            'price' => '270',
            'image' => 'img/products/gurmanska-velika.jpg',
        ]);
        Product::create([
            'type' => 'bbq',
            'slug' => 'pljeskavica-66',
            'name' => 'Pljeskavica 66 Pljeskavica',
            'price' => '300',
            'image' => 'img/products/pljeskavica-66.jpg',
        ]);
        Product::create([
            'type' => 'bbq',
            'slug' => 'punjena-pljeskavica',
            'name' => 'Punjena Pljeskavica',
            'price' => '230',
            'image' => 'img/products/punjena-pljeskavica.jpg',
        ]);
        Product::create([
            'type' => 'bbq',
            'slug' => 'punjena-pljeskavica',
            'name' => 'Punjena Pljeskavica sa 3 vrste sira',
            'price' => '240',
            'image' => 'img/products/punjena-pljeskavica-3.jpg',
        ]);
        Product::create([
            'type' => 'bbq',
            'slug' => 'cevapi-5',
            'name' => 'Ćevapi 5 komada',
            'price' => '210',
            'image' => 'img/products/cevapi-5.jpg',
        ]);
        Product::create([
            'type' => 'bbq',
            'slug' => 'cevapi-10',
            'name' => 'Ćevapi 10 komada',
            'price' => '300',
            'image' => 'img/products/cevapi-10.jpg',
        ]);

    }
}
