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
            ],
            [
                'title' => 'Mocha',
                'description' => 'A mocha is a chocolate-flavored variant of a latte. It is made with espresso, steamed milk, and chocolate syrup, often topped with whipped cream.',
                'image_path' => 'coffee_images/mocha.jpg',
            ],
            [
                'title' => 'Americano',
                'description' => 'An Americano is made by diluting espresso with hot water, resulting in a drink similar in strength to regular black coffee but with a different flavor profile.',
                'image_path' => 'coffee_images/americano.jpg',
            ],
            [
                'title' => 'Flat White',
                'description' => 'A flat white is an espresso-based drink that consists of a shot of espresso with steamed milk and a thin layer of microfoam, offering a creamy texture and strong coffee flavor.',
                'image_path' => 'coffee_images/flat_white.jpg',
            ],
            [
                'title' => 'Macchiato',
                'description' => 'A macchiato is an espresso coffee with a small amount of foamed milk on top. The name "macchiato" means "stained" in Italian, referring to the milk stain on the espresso.',
                'image_path' => 'coffee_images/macchiato.jpg',
            ],
            [
                'title' => 'Cortado',
                'description' => 'A cortado is an espresso with an equal amount of warm milk, balancing the strong flavor of the coffee with the creaminess of the milk.',
                'image_path' => 'coffee_images/cortado.jpg',
            ],
        ];

        foreach ($coffees as $coffee) {
            // Check if the coffee already exists in the database
            if (!Coffee::where('title', $coffee['title'])->exists()) {
                Coffee::create($coffee);
            }
        }
    }
}
