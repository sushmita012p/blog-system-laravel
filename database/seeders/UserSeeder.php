<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
        DB::table('users')->insert([
            'firstname' => 'Sushmita',
            'lastname' => 'Poudel',
            'email' => 'sushmitapoudel071@gmail.com',
            'password' => Hash::make('sushmita'),
            'role_as' => '1',
        ]);

        DB::table('users')->insert([
            'firstname' => 'Prazuca',
            'lastname' => 'Sharma',
            'email' => 'susneyjr@gmail.com',
            'password' => Hash::make('prazucaa'),
            'role_as' => '0',
        ]);
    }
}
