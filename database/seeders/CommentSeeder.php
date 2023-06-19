<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();
        $post = Post::first();


        DB::table('comments')->insert([
            'comment' => 'Wonderful',
            'created_at' => '2023-05-23 05:32:40',
            'commented_by' => 'Prazuca',
            'post_id' => 1,
        ]);

        DB::table('comments')->insert([
            'comment' => 'Amazing',
            'created_at' => '2023-05-23 05:32:40',
            'commented_by' => 'Sabana',
            'post_id' => 2,
        ]);
    }
}
