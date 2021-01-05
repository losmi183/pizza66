<?php

namespace Database\Seeders;

use App\Models\AddonOption;
use Illuminate\Database\Seeder;

class AddonOptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AddonOption::create([
            'addon_id' => '1',
            'size' => 'M',
            'grams' => '100',
            'price' => '120'
        ]);
        AddonOption::create([
            'addon_id' => '1',
            'size' => 'L',
            'grams' => '150',
            'price' => '180'
        ]);
        AddonOption::create([
            'addon_id' => '1',
            'size' => 'XL',
            'grams' => '300',
            'price' => '300'
        ]);



        AddonOption::create([
            'addon_id' => '2',
            'size' => 'M',
            'grams' => '85',
            'price' => '120'
        ]);
        AddonOption::create([
            'addon_id' => '2',
            'size' => 'L',
            'grams' => '150',
            'price' => '180'
        ]);
        AddonOption::create([
            'addon_id' => '2',
            'size' => 'XL',
            'grams' => '300',
            'price' => '300'
        ]);



        AddonOption::create([
            'addon_id' => '3',
            'size' => 'M',
            'grams' => '70',
            'price' => '120'
        ]);
        AddonOption::create([
            'addon_id' => '3',
            'size' => 'L',
            'grams' => '100',
            'price' => '180'
        ]);
        AddonOption::create([
            'addon_id' => '3',
            'size' => 'XL',
            'grams' => '300',
            'price' => '300'
        ]);



        AddonOption::create([
            'addon_id' => '4',
            'size' => 'M',
            'grams' => '50',
            'price' => '120'
        ]);
        AddonOption::create([
            'addon_id' => '4',
            'size' => 'L',
            'grams' => '75',
            'price' => '180'
        ]);
        AddonOption::create([
            'addon_id' => '4',
            'size' => 'XL',
            'grams' => '150',
            'price' => '300'
        ]);




        AddonOption::create([
            'addon_id' => '5',
            'size' => 'M',
            'grams' => '50',
            'price' => '150'
        ]);
        AddonOption::create([
            'addon_id' => '5',
            'size' => 'L',
            'grams' => '75',
            'price' => '200'
        ]);
        AddonOption::create([
            'addon_id' => '5',
            'size' => 'XL',
            'grams' => '150',
            'price' => '300'
        ]);




        AddonOption::create([
            'addon_id' => '6',
            'size' => 'M',
            'grams' => '90',
            'price' => '180'
        ]);
        AddonOption::create([
            'addon_id' => '6',
            'size' => 'L',
            'grams' => '135',
            'price' => '250'
        ]);
        AddonOption::create([
            'addon_id' => '6',
            'size' => 'XL',
            'grams' => '300',
            'price' => '300'
        ]);




        AddonOption::create([
            'addon_id' => '7',
            'size' => 'M',
            'grams' => '100',
            'price' => '150'
        ]);
        AddonOption::create([
            'addon_id' => '7',
            'size' => 'L',
            'grams' => '150',
            'price' => '200'
        ]);
        AddonOption::create([
            'addon_id' => '7',
            'size' => 'XL',
            'grams' => '270',
            'price' => '500'
        ]);




        AddonOption::create([
            'addon_id' => '8',
            'size' => 'M',
            'grams' => '90',
            'price' => '120'
        ]);
        AddonOption::create([
            'addon_id' => '8',
            'size' => 'L',
            'grams' => '135',
            'price' => '250'
        ]);
        AddonOption::create([
            'addon_id' => '8',
            'size' => 'XL',
            'grams' => '250',
            'price' => '350'
        ]);


        
        AddonOption::create([
            'addon_id' => '9',
            'size' => 'M',
            'grams' => '85',
            'price' => '60'
        ]);
        AddonOption::create([
            'addon_id' => '9',
            'size' => 'L',
            'grams' => '125',
            'price' => '80'
        ]);

        AddonOption::create([
            'addon_id' => '10',
            'size' => 'M',
            'grams' => '40',
            'price' => '60'
        ]);
        AddonOption::create([
            'addon_id' => '10',
            'size' => 'L',
            'grams' => '60',
            'price' => '80'
        ]);

        AddonOption::create([
            'addon_id' => '11',
            'price' => '30'
        ]);

    }
}
