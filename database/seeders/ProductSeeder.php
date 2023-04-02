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
                'gallery' => 'https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D3D253C/1592019058170_0..png'
            ],
            [
                'name' => 'Mobile',
                'price' => '$200',
                'description' => 'Smart Phone',
                'category' => 'Phone',
                'gallery' => 'https://i.gadgets360cdn.com/products/televisions/large/1548154685_832_panasonic_32-inch-lcd-full-hd-tv-th-l32u20.jpg'
            ],
            [
                'name' => 'Laptop',
                'price' => '$2000',
                'description' => 'Laptop thinkpad',
                'category' => 'Laptop',
                'gallery' => 'https://4.imimg.com/data4/PM/KH/MY-34794816/lcd-500x500.png'
            ],
            [
                'name' => 'Utensils',
                'price' => '$10',
                'description' => 'Utensils',
                'category' => 'Cooking',
                'gallery' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTFx-2-wTOcfr5at01ojZWduXEm5cZ-sRYPJA&usqp=CAU'
            ]
        ]);
    }
}
