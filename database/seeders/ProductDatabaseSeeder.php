<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'T-Shirt',
                'image' => 'products/1717078903.webp',
                'quantity' => 12,
                'cost' => 550,
                'description' => 'white T-shirt',
            ],
            [
                'id' => 2,
                'name' => 'Coat',
                'image' => 'products/1717078951.webp',
                'quantity' => 7,
                'cost' => 1800,
                'description' => 'Coat',
            ],
            [
                'id' => 3,
                'name' => 'Watch',
                'image' => 'products/1717079000.webp',
                'quantity' => 7,
                'cost' => 900,
                'description' => 'Watch',
            ],
            [
                'id' => 4,
                'name' => 'T-shirt',
                'image' => 'products/1717079039.webp',
                'quantity' => 7,
                'cost' => 450,
                'description' => 'Black-TShirt',
            ],
            [
                'id' => 5,
                'name' => 'Shoes',
                'image' => 'products/1717079085.webp',
                'quantity' => 7,
                'cost' => 1100,
                'description' => 'Shoes',
            ],
            [
                'id' => 6,
                'name' => 'Trouser',
                'image' => 'products/1717079123.webp',
                'quantity' => 7,
                'cost' => 600,
                'description' => 'Trouser',
            ],

        ]);
    }
}
