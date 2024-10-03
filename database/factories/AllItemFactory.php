<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AllFactory>
 */
class AllItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = ['active', 'mainten', 'stock', 'broken'];
        shuffle($status);
        return [
            'item_name' => fake()->colorName(),
            'amount' => fake()->randomDigit(),
            'status' => $status[0],
            'place' => fake()->city(),
            'description' => fake()->text(100),
            'author_id' => User::all()->random()->id,
        ];
    }
}
