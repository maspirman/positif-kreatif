<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AboutUs;

class AboutUsController extends Controller
{
    public function index() 
    {
        $aboutUs = AboutUs::latest("id")->first();

        return view("about-us.index", ["aboutUs" => $aboutUs]);
    }

    public function create() 
    {
        $aboutUs = AboutUs::latest("id")->first();

        return view("about-us.create", ["aboutUs" => $aboutUs]);
    }

    public function store(Request $request)
    {
        AboutUs::insert([
            "description" => $request->description
        ]);

        return redirect()->route("admin.about-us")->with("about us berhasil diperbarui");
    }
}
