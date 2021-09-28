<?php

use Illuminate\Database\Seeder;
use App\Application;

class ApplicationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Application::insert([
            "category"  => "email",
            "value"     => ""
        ]);
        
        Application::insert([
            "category"  => "address",
            "value"     => ""
        ]);
        
        Application::insert([
            "category"  => "phone",
            "value"     => ""
        ]);

        Application::insert([
            "category"  => "whatsapp",
            "value"     => ""
        ]);
    }
}
