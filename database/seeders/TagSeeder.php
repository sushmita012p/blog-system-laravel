<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tags')->insert([
            'name' => 'Laravel',
        ]);
        DB::table('tags')->insert([
            'name' => 'PHP',
        ]);
        DB::table('tags')->insert([
            'name' => 'Chess',
        ]);
    }
}
