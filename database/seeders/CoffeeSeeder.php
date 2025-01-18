<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Coffee;
use App\Models\User;

class CoffeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $coffees = [
            [
                'title' => 'Espresso',
                'description' => 'A concentrated form of coffee served in small, strong shots. Made by forcing hot water under pressure through very finely ground coffee beans.',
                'image_path' => 'coffee_images/espresso.jpg',
            ],
            [
                'title' => 'Cappuccino',
                'description' => 'An espresso-based coffee drink that is traditionally prepared with steamed milk foam. Equal parts espresso, steamed milk, and milk foam.',
                'image_path' => 'coffee_images/cappuccino.jpg',
            ],
            [
                'title' => 'Latte',
                'description' => 'A latte is a creamy coffee drink made with a shot of espresso and steamed milk, topped with a thin layer of foam. Its smooth, velvety texture and balanced flavor make it a popular choice for those who enjoy a milder coffee experience.',
                'image_path' => 'coffee_images/latte.jpg',
            ]
        ];

        foreach ($coffees as $coffee) {
            Coffee::create($coffee);
        }
    }
}
