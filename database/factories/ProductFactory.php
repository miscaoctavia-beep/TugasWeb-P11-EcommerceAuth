<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'category_id' => Category::inRandomOrder()->first()->id,
            'name' => fake()->randomElement([
                'Kemeja Linen Premium',
                'Kaos Oversize Basic',
                'Celana Jeans Regular',
                'Hoodie Fleece Premium',
                'Sweater Rajut Casual',
                'Tas Selempang Wanita',
                'Tas Ransel Laptop',
                'Dompet Kulit Minimalis',
                'Sepatu Sneakers Casual',
                'Sandal Wanita Casual',
                'Jam Tangan Minimalis',
                'Headset Bluetooth',
                'Mouse Wireless',
                'Keyboard Mechanical',
                'Power Bank 10000mAh',
                'Tumbler Stainless',
                'Botol Minum Sport',
                'Parfum Eau de Toilette',
                'Skincare Facial Wash',
                'Body Lotion Moisturizing',
            ]),
            'description' => fake()->sentence(12),
            'price' => fake()->numberBetween(25000, 750000),
            'stock' => fake()->numberBetween(5, 100),
            'image' => null,
        ];
    }
}