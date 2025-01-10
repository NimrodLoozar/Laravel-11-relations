<?php

namespace Database\Seeders;

use App\Models\Affiliation;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->count(10)->create();
        User::factory()->user()->create();
        Tag::factory(5)->create();
        Post::factory(10)->create();
        Affiliation::factory(5)->create();
    }
}
