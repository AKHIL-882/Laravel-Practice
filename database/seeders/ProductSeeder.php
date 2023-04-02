<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Mobile',
                'price' => '$150',
                'description' => 'Smart Phone',
                'category' => 'Phone',
                'gallery' => 'https://cdn1.smartprix.com/rx-iGNlyOFEo-w1200-h1200/GNlyOFEo.jpg'
            ],
            [
                'name' => 'Mobile',
                'price' => '$200',
                'description' => 'Smart Phone',
                'category' => 'Phone',
                'gallery' => 'https://i.gadgets360cdn.com/products/large/moto-g52-db-709x800-1649827920.jpg'
            ],
            [
                'name' => 'Laptop',
                'price' => '$2000',
                'description' => 'Laptop thinkpad',
                'category' => 'Laptop',
                'gallery' => 'https://cdn1.smartprix.com/rx-i4U4FAoxX-w1200-h1200/4U4FAoxX.jpg'
            ],
            [
                'name' => 'Utensils',
                'price' => '$10',
                'description' => 'Utensils',
                'category' => 'Cooking',
                'gallery' => 'https://cdn.pixabay.com/photo/2017/02/15/10/39/salad-2068220__340.jpg'
            ]
        ]);
    }
}
