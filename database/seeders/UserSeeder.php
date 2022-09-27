<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' =>'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'role' =>'admin',
        ]);
        DB::table('users')->insert([
            'name' => 'user1',
            'email' =>'user1@gmail.com',
            'password' => Hash::make('user123'),
            'role' =>'user1',
        ]);
        DB::table('users')->insert([
            'name' => 'user2',
            'email' =>'user2@gmail.com',
            'password' => Hash::make('user1234'),
            'role' =>'user2',
        ]);
    }
}
