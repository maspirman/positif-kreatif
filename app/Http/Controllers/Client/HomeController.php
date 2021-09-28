<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Slider;
use App\Services;
use App\Portofolio;
use App\Team;
use App\AboutUs;
use App\Application;
use App\Client;

class HomeController extends Controller
{
    public function index()
    {
        // slider
        $sliders    = Slider::get();

        $services   = Services::get();

        $portofolio = Portofolio::get();

        $teams      = Team::get();

        $clients      = Client::get();

        $about_us    = AboutUs::latest("id")->first();

        $address    = Application::where("category", "address")->first();
        $email      = Application::where("category", "email")->first();
        $phone      = Application::where("category", "phone")->first();
        $whatsapp   = Application::where("category", "whatsapp")->first();

        // TODO
        // skills -> belum 
        return view("client.home", compact([
            "slider"        => $slider,
            "services"      => $services,
            "portofolio"    => $portofolio,
            "teams"         => $teams,
            "about_us"      => $about_us,
            "address"       => $address,
            "email"         => $email,
            "phone"         => $phone,
            "whatsapp"      => $whatsapp
        ]));
    }
}
