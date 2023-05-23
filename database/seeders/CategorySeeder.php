<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('categories')->insert([
            'name' => 'Sports',
            'description' => 'Covering various sports events, analysis, player profiles, and sports news.',
            'image' => '1684564470.jpg',
        ]);

        DB::table('categories')->insert([
            'name' => 'Technology',
            'description' => 'Covering various tech events, analysis.',
            'image' => '1684760092.jpg',
        ]);

       
    }
}
