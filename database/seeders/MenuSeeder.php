<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    public function run()
    {
        $menus = [
            [
                'title' => 'Chicken Chop',
                'image' => 'chicke-chop.jpg',
                'price' => 1200,
            ],
            [
                'title' => 'Beff Steak',
                'image' => 'beef-steak.jpg',
                'price' => 1500,
            ],
            [
                'title' => 'Lamb Chop',
                'image' => 'lamb-chop.jpg',
                'price' => 1800,
            ],
            [
                'title' => 'Fish & Chips',
                'image' => 'fish-chips.jpg',
                'price' => 1000,
            ],
            [
                'title' => 'Spaghetti',
                'image' => 'spaghetti.jpg',
                'price' => 800,
            ]

        ];

        foreach ($menus as $menu) {
            Menu::create($menu);
        }
    }
}
