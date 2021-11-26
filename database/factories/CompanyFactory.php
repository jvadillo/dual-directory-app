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

    $table->foreignId('user_id')->constrained();
    $table->foreignId('category_id')->constrained();
    $table->foreignId('status_id')->constrained();
    $table->string('name');
    $table->string('email');
    $table->text('profile');
    $table->text('interest');
    $table->text('offer');
    $table->text('technologies');
    $table->json('urls'); // We want to store a list of strings. $cast in Model is needed
    $table->string('video_url')->nullable();

    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'email' => $this->faker->unique()->safeEmail(),
            'profile' => $this->faker->text($maxNbChars = 1000),
            'interest' => $this->faker->text($maxNbChars = 500),
            'offer' => $this->faker->text($maxNbChars = 300),
            'technologies' => $this->faker->text($maxNbChars = 100),
            'urls' => $this->faker->url(),
            'video_url' => $this->faker->url(),
        ];
    }

    
}
