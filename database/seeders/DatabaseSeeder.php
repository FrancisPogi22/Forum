<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Post::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'd@example.com',
            'password' => 'd',
        ]);
    }
}
