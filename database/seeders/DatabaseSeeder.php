<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserProfile;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(1)->has(
        //     UserProfile::factory(1)->count(1)
        // )->create();

        // 3 post for every user profile
        User::factory()
            ->has(\App\Models\Post::factory()->count(3))
            ->create();
    }
}