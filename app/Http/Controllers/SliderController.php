<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::get();

        return view("slider.index", ["sliders" => $sliders]);
    }

    public function create()
    {
        return view("slider.create");
    }

    public function store(Request $request)
    {
        
        $originName     = $request->file("image")->getClientOriginalName();
        $fileName       = pathinfo($originName, PATHINFO_FILENAME);
        $extension      = $request->file("image")->getClientOriginalExtension();
        $fileName       = "slider/". $fileName.'_'.time().'.'.$extension;

        $request->file("image")->storeAs(
            "public", $fileName
        );

        Slider::insert([
            "title"         => $request->title,
            "subtitle"      => $request->subtitle,
            "description"   => $request->description,
            "image"         => $fileName
        ]);      

        return redirect()->route("admin.slider")->with("msg", "slider telah ditambahkan");
    }

    public function edit($id)
    {
        $slider = Slider::where("id", $id)->first();

        return view("slider.edit", ["slider" => $slider]);
    }

    public function update(Request $request, $id)
    {
        $slider = Slider::where("id", $id)->first();

        if($request->hasFile("image")){

            $path = public_path($slider->image);

            $isExists = file_exists($path);

            if ($isExists) {
                unlink(storage_path('app/public/'.$slider->image));
            }
                
            $originName     = $request->file("image")->getClientOriginalName();
            $fileName       = pathinfo($originName, PATHINFO_FILENAME);
            $extension      = $request->file("image")->getClientOriginalExtension();
            $fileName       = "slider/". $fileName.'_'.time().'.'.$extension;

            $request->file("image")->storeAs(
                "public", $fileName
            );

            $slider->update([
                "title"         => $request->title,
                "subtitle"      => $request->subtitle,
                "description"   => $request->description,
                "image"         => $fileName
            ]);

        }else{

            $slider->update([
                "title"         => $request->title,
                "subtitle"      => $request->subtitle,
                "description"   => $request->description,
            ]);
        }

        return redirect()->route("admin.slider")->with("msg", "slider telah diubah");
    }

    public function destroy($id)
    {
        $slider = Slider::where("id", $id)->first();
        $slider->delete();

        return redirect()->route("admin.slider")->with("msg", "slider telah dihapus");
    }
}
