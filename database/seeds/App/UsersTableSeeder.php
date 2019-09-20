<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => env('USER_NAME', 'Administrador Supremo'),
            'email' => env('USER_EMAIL', 'admin@vocehd.com'),
            'password' => env('USER_PASSWORD', 'password')
        ]);
    }
}
