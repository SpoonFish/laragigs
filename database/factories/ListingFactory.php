<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "description" => $this->faker->paragraph(5),
            "tags" => str_replace(" ", ", ", $this->faker->words(3, true)),
            "title" => $this->faker->sentence(),
            "company_name" => $this->faker->company(),
            "email" => $this->faker->companyEmail(),
            "website" => $this->faker->url(),
            "location" => $this->faker->city(),
        ];
    }
}
