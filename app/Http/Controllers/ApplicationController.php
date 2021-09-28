<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;

class ApplicationController extends Controller
{
    
    public function index()
    {
        $email      = Application::where("category", "email")->first();
        $address    = Application::where("category", "address")->first();
        $phone      = Application::where("category", "phone")->first();
        $whatsapp   = Application::where("category", "whatsapp")->first();
        $logo   = Application::where("category", "logo")->first();

        return view("application.index", 
            [
                "email"    => $email,
                "address"  => $address,
                "phone"    => $phone,
                "whatsapp" => $whatsapp,
                "logo" => $logo
            ]
        );
    }

    public function edit($id)
    {
        $application = Application::where("id", $id)->first();

        return view("application.edit", ["application" => $application]);
    }

    public function update(Request $request, $id)
    {
        $application = Application::where("id", $id)->first();

        $application->update([
            "value"      => $request->value,
        ]);

        return redirect()->route("admin.application")->with("msg", "$application->category telah diubah");
    }
}
