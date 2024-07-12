<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();
        User::create([
            'name'=> 'Admin Aplikasi',
            'level'=> 'admin',
            'email'=> 'dinda@gmail.com',
            'password'=> bcrypt ('dinda'),
            'remember_token'=> Str::random(60),
        ]);
    }
}
