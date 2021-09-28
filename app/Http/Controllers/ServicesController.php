<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Services::get();

        return view("services.index", ["services" => $services]);
    }

    public function create()
    {
        return view("services.create");
    }

    public function store(Request $request)
    {
        
        $originName     = $request->file("image")->getClientOriginalName();
        $fileName       = pathinfo($originName, PATHINFO_FILENAME);
        $extension      = $request->file("image")->getClientOriginalExtension();
        $fileName       = "services/". $fileName.'_'.time().'.'.$extension;

        $request->file("image")->storeAs(
            "public", $fileName
        );

        Services::insert([
            "title"      => $request->title,
            "subtitle"   => $request->subtitle,
            "image"      => $fileName,
        ]);      

        return redirect()->route("admin.services")->with("msg", "services telah ditambahkan");
    }

    public function edit($id)
    {
        $service = Services::where("id", $id)->first();

        return view("services.edit", ["service" => $service]);
    }

    public function update(Request $request, $id)
    {
        $services = Services::where("id", $id)->first();

        if($request->hasFile("image")){

            $path = public_path($services->image);

            $isExists = file_exists($path);

            if ($isExists) {
                unlink(storage_path('app/public/'.$services->image));
            }
                
            $originName     = $request->file("image")->getClientOriginalName();
            $fileName       = pathinfo($originName, PATHINFO_FILENAME);
            $extension      = $request->file("image")->getClientOriginalExtension();
            $fileName       = "services/". $fileName.'_'.time().'.'.$extension;

            $request->file("image")->storeAs(
                "public", $fileName
            );

            $services->update([
                "title"      => $request->title,
                "subtitle"   => $request->subtitle,
                "image"      => $fileName,
            ]);

        }else{

            $services->update([
                "title"      => $request->title,
                "subtitle"   => $request->subtitle,
            ]);
        }

        return redirect()->route("admin.services")->with("msg", "services telah diubah");
    }

    public function destroy($id)
    {
        $service = Services::where("id", $id)->first();
        $service->delete();

        return redirect()->route("admin.services")->with("msg", "services telah dihapus");
    }
}
