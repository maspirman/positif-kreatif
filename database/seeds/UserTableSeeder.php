<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            "name"  => "admin",
            "email" => "admin@gmail.com",
            "password"  => Hash::make("12345678")
        ]);
    }
}
