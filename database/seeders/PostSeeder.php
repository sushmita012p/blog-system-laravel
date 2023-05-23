<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $user = User::first();
        $category = Category::first();
       

        DB::table('posts')->insert([
            'name' => 'Chess',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum',
            'image' => '1684564470.jpg',
            'user_id' => 1,
            'category_id' => 1,
        ]);

        DB::table('posts')->insert([
            'name' => 'Laravel',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum',
            'image' => '1684564757.jpg',
            'user_id' => 1,
            'category_id' => 2,
        ]);
    }
}
