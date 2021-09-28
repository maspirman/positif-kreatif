<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonial = Testimonial::get();

        return view("testimonial.index", ["testimonial" => $testimonial]);
    }
    
    public function create()
    {
        return view("testimonial.create");
    }
    
    public function store(Request $request)
    {
        $originName     = $request->file("image")->getClientOriginalName();
        $fileName       = pathinfo($originName, PATHINFO_FILENAME);
        $extension      = $request->file("image")->getClientOriginalExtension();
        $fileName       = "testimonial/". $fileName.'_'.time().'.'.$extension;

        $request->file("image")->storeAs(
            "public", $fileName
        );

        Testimonial::insert([
            "name"          => $request->name,
            "pesan"      => $request->pesan,
            "image"         => $fileName
        ]);      

        return redirect()->route("admin.testimonial")->with("msg", "Testimonial telah ditambahkan");
    }
    
    public function edit($id)
    {
        $testimonial = Testimonial::where("id", $id)->first();

        return view("testimonial.edit", ["testimonial" => $testimonial]);
    }
    
    public function update(Request $request, $id)
    {
        $testimonial = Testimonial::where("id", $id)->first();

        if($request->hasFile("image")){

            $path = public_path($testimonial->image);

            $isExists = file_exists($path);

            if ($isExists) {
                unlink(storage_path('app/public/'.$testimonial->image));
            }
                
            $originName     = $request->file("image")->getClientOriginalName();
            $fileName       = pathinfo($originName, PATHINFO_FILENAME);
            $extension      = $request->file("image")->getClientOriginalExtension();
            $fileName       = "testimonial/". $fileName.'_'.time().'.'.$extension;

            $request->file("image")->storeAs(
                "public", $fileName
            );

            $testimonial->update([
                "name"          => $request->name,
            "pesan"      => $request->pesan,
            "image"         => $fileName
            ]);

        }else{

            $testimonial->update([
                "name"          => $request->name,
            "pesan"      => $request->pesan,
            ]);
        }

        return redirect()->route("admin.testimonial")->with("msg", "testimonial telah diubah");
    }
    
        public function destroy($id)
        {
            $testimonial = Testimonial::where("id", $id)->first();
            $testimonial->delete();
    
            return redirect()->route("admin.testimonial")->with("msg", "testimonial telah dihapus");
        }
}
