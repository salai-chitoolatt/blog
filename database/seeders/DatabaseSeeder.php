<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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
        User::truncate();
        Post::truncate();
        Category::truncate();


        $user = User::factory()->create();

        $personal = Category::create([
            "name" => "Personal",
            "slug" => "personal"
        ]);

        $family = Category::create([
            "name" => "Family",
            "slug" => "family"
        ]);

        $work = Category::create([
            "name" => "Work",
            "slug" => "work"
        ]);

        Post::create([
            "user_id" => $user->id,
            "category_id" => $family->id,
            "title" => "My Family Post",
            "slug" => "my-first-post",
            "excerpt" => "<p>Lorem ipsum dolar sit amet.</p>",
            "body" => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas volutpat quis eros a ultrices. Sed vel nisi ut dolor cursus consequat. Aenean iaculis accumsan blandit. Suspendisse lobortis mattis posuere. Nullam a placerat augue, tempor dapibus lacus. Maecenas egestas ligula in ultrices venenatis. Donec et justo nec diam imperdiet tristique sed quis tortor. Nunc ultricies vehicula tristique. Etiam viverra semper tempor.</p>"
        ]);

        Post::create([
            "user_id" => $user->id,
            "category_id" => $work->id,
            "title" => "My Work Post",
            "slug" => "my-work-post",
            "excerpt" => "<p>Lorem ipsum dolar sit amet.</p>",
            "body" => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas volutpat quis eros a ultrices. Sed vel nisi ut dolor cursus consequat. Aenean iaculis accumsan blandit. Suspendisse lobortis mattis posuere. Nullam a placerat augue, tempor dapibus lacus. Maecenas egestas ligula in ultrices venenatis. Donec et justo nec diam imperdiet tristique sed quis tortor. Nunc ultricies vehicula tristique. Etiam viverra semper tempor.</p>"
        ]);
    }
}
