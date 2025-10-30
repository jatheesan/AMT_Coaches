<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('Admin@123'),
                'role' => 'admin'
            ],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => Hash::make('User@123'),
                'role' => 'user'
            ]
            ]);
    }
}
