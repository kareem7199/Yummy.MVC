<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => env('USER_NAME'),
            'email' => env('USER_EMAIL'),
            'password' => bcrypt(env('USER_PASSWORD')),
        ]);
    }
}
