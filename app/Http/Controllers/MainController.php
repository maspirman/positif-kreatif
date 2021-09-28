<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Slider;
use App\Services;
use App\Portofolio;
use App\Team;
use App\AboutUs;
use App\Application;
use App\Client;
use App\Testimonial;

class MainController extends Controller
{
    public function index()
    {
        // slider
        $sliders    = Slider::get();

        $services   = Services::get();

        $portofolio = Portofolio::get();

        $teams      = Team::get();

        $clients      = Client::get();
        $testimonial = Testimonial::get();

        $about_us    = AboutUs::latest("id")->first();

        $address    = Application::where("category", "address")->first();
        $email      = Application::where("category", "email")->first();
        $phone      = Application::where("category", "phone")->first();
        $whatsapp   = Application::where("category", "whatsapp")->first();
        $logo       = Application::where("category", "logo")->first();

        // TODO
        // skills -> belum 
        // note:penulisan syntax kurang tepat
        // return view("client.home", compact([
        //     // "slider"        => $slider,
        //     "services"      => $services,
        //     "portofolio"    => $portofolio,
        //     "teams"         => $teams,
        //     "about_us"      => $about_us,
        //     "address"       => $address,
        //     "email"         => $email,
        //     "phone"         => $phone,
        //     "whatsapp"      => $whatsapp
        // ]));
   
       $data = array(
            "services"      => $services,
            "portofolio"    => $portofolio,
            "teams"         => $teams,
            "about_us"      => $about_us,
            "address"       => $address,
            "clients"       => $clients,
            "testimonial"   => $testimonial,
            "email"         => $email,
            "phone"         => $phone,
            "whatsapp"      => $whatsapp,
            "logo"      => $logo
        );

       return view('client.home', $data);

    }
}
