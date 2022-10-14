<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
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
        // \App\Models\User::factory(10)->create();

        $user = User::factory()->create();

        $user->seller()->create();

        Category::create([
            'type' => 'women'
        ]);

        Category::create([
            'type' => 'men'
        ]);

        Category::create([
            'type' => 'kids'
        ]);

        Category::create([
            'type' => 'home'
        ]);
    }
}
