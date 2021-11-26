<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();


        Category::factory()->create(['name' => 'Desarrollo de Software / IT']);
        Category::factory()->create(['name' => 'Producción industrial']);
        Category::factory()->create(['name' => 'Ingeniería']);
        Category::factory()->create(['name' => 'Centro tecnológico']);

        Status::factory()->create(['name' => 'Participa']);
        Status::factory()->create(['name' => 'No participa']);


    }
}
