<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DrinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'type' => 'drink',
            'slug' => 'coca-cola',
            'name' => 'Coca cola',
            'price' => '80',
            'discount' => '50',
            'image' => 'img/products/coca-cola.png',
        ]);
        Product::create([
            'type' => 'drink',
            'slug' => 'coca-cola-zero',
            'name' => 'Coca cola zero',
            'price' => '80',
            'discount' => '50',
            'badge' => 'akcija',
            'image' => 'img/products/coca-cola-zero.png',
        ]);
        Product::create([
            'type' => 'drink',
            'slug' => 'cockta',
            'name' => 'Cockta',
            'price' => '60',
            'discount' => '50',
            'image' => 'img/products/cockta.png',
        ]);
        Product::create([
            'type' => 'drink',
            'slug' => 'fanta-pomorandza',
            'name' => 'Fanta pomorandza',
            'price' => '60',
            'discount' => '50',
            'image' => 'img/products/fanta-pomorandza.png',
        ]);
        Product::create([
            'type' => 'drink',
            'slug' => 'ivi-pomorandza',
            'name' => 'Ivi pomorandza',
            'price' => '80',
            'discount' => '50',
            'badge' => 'novo',
            'image' => 'img/products/ivi-pomorandza.png',
        ]);
        Product::create([
            'type' => 'drink',
            'slug' => 'mirinda-blueberry',
            'name' => 'Mirinda blueberry',
            'price' => '70',
            'discount' => '50',
            'image' => 'img/products/mirinda-blueberry.png',
        ]);
        Product::create([
            'type' => 'drink',
            'slug' => 'pepsi-limenka',
            'name' => 'Pepsi limenka',
            'price' => '70',
            'discount' => '50',            
            'badge' => 'akcija',
            'image' => 'img/products/pepsi-limenka.png',
        ]);
        Product::create([
            'type' => 'drink',
            'slug' => 'pepsi-max',
            'name' => 'Pepsi max',
            'price' => '100',
            'image' => 'img/products/pepsi-max.png',
        ]);
        Product::create([
            'type' => 'drink',
            'slug' => 'pepsi-twist',
            'name' => 'Pepsi twist',
            'price' => '70',
            'image' => 'img/products/pepsi-twist.png',
        ]);
        Product::create([
            'type' => 'drink',
            'slug' => 'schweppes',
            'name' => 'Schweppes',
            'price' => '90',            
            'badge' => 'novo',
            'image' => 'img/products/schweppes.png',
        ]);
        Product::create([
            'type' => 'drink',
            'slug' => 'schweppes-pink',
            'name' => 'Schweppes pink',
            'price' => '90',
            'image' => 'img/products/schweppes-pink.png',
        ]);
        Product::create([
            'type' => 'drink',
            'slug' => 'sprite',
            'name' => 'Sprite',
            'price' => '80',
            'badge' => 'akcija',
            'image' => 'img/products/sprite.png',
        ]);
        Product::create([
            'type' => 'drink',
            'slug' => 'sprite-limenka',
            'name' => 'Sprite limenka',
            'price' => '80',
            'badge' => 'novo',
            'image' => 'img/products/sprite-limenka.png',
        ]);
    }
}
