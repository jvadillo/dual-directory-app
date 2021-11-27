<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Company;
use App\Models\Status;
use App\Models\User;
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

        User::factory()->create([
            'name' => 'Jon',
            'email' => 'jvadillo@egibide.org',
            'password' => bcrypt('12345Abcde'),
        ]);

        User::factory(20)->create();


        Category::factory()->create(['name' => 'Desarrollo de Software / IT']);
        Category::factory()->create(['name' => 'Producción industrial']);
        Category::factory()->create(['name' => 'Ingeniería']);
        Category::factory()->create(['name' => 'Centro tecnológico']);

        Status::factory()->create(['name' => 'Participa']);
        Status::factory()->create(['name' => 'No participa']);

        // Generate unique votes. Ensure idea_id and user_id are unique for each row
        foreach (range(1, 20) as $user_id) {
            Company::factory()->create([
                'user_id' => $user_id
            ]);
        }
            


    }
}
