<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        Article::factory()->count(20)->create();
        Comment::factory()->count(20)->create();

        $list = ["NEWS", "TECH", "MOBILE", "ARTICLE", "APP"];

        foreach($list as $name) {
            Category::create(["name" => $name]);
        }
    }
}
