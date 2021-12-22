<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'location' => $this->faker->streetAddress(),
            'short_description' => $this->faker->text($maxNbChars = 250),
            'profile' => $this->faker->text($maxNbChars = 1000),
            'offer' => $this->faker->text($maxNbChars = 300),
            //'technologies' => $this->faker->text($maxNbChars = 100),
            'website' => $this->faker->url(),
            'linkedin' => $this->faker->url(),
            'video_url' => $this->faker->url(),
            
            'category_id' => $this->faker->numberBetween(1, 4),
            'status_id' => $this->faker->numberBetween(1, 2),
            
        ];
    }

    
}
