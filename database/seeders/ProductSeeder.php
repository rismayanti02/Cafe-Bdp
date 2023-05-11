<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Added Start
        $products = [
            [
                'name' => 'PHP',
                'image' => 'https://i.pinimg.com/564x/82/d9/8b/82d98b5cbb6938e42452d233305c7127.jpg',
                'price' => 120,
                'description' => 'PHP Language'
            ],
            [
                'name' => 'Laravel',
                'image' => 'https://i.pinimg.com/564x/d6/f8/b3/d6f8b3de5d2f068b81caff5acfa80950.jpg',
                'price' => 220,
                'description' => 'Laravel freamwork'
            ],
            [
                'name' => 'Python',
                'image' => 'https://i.pinimg.com/564x/11/83/af/1183af50c915bf62bbb58fba8a34365e.jpg',
                'price' => 300,
                'description' => 'Python Language'
            ],
            [
                'name' => 'Codeigniter',
                'image' => 'https://i.pinimg.com/564x/4e/d6/b4/4ed6b4aa135eac7246a85d3944c2440c.jpg',
                'price' => 110,
                'description' => 'Codeigniter freamwork'
            ],
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
        //Added End
    }
}