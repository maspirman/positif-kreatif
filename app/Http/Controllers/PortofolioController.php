<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portofolio;

class PortofolioController extends Controller
{
    public function index()
    {
        $portofolios = Portofolio::get();

        return view("portofolio.index", ["portofolios" => $portofolios]);
    }

    public function create()
    {
        return view("portofolio.create");
    }

    public function store(Request $request)
    {
        
        $originName     = $request->file("image")->getClientOriginalName();
        $fileName       = pathinfo($originName, PATHINFO_FILENAME);
        $extension      = $request->file("image")->getClientOriginalExtension();
        $fileName       = "portofolio/". $fileName.'_'.time().'.'.$extension;

        $request->file("image")->storeAs(
            "public", $fileName
        );

        Portofolio::insert([
            "title"         => $request->title,
            "image"         => $fileName,
            "category"      => $request->category,
            "client"        => $request->client,
            "date"          => $request->date,
            "skills"        => $request->skills,
            "link"          => $request->link,
            "description"   =>$request->description
        ]);      

        return redirect()->route("admin.portofolio")->with("msg", "portofolio telah ditambahkan");
    }

    public function edit($id)
    {
        $portofolio = Portofolio::where("id", $id)->first();

        return view("portofolio.edit", ["portofolio" => $portofolio]);
    }

    public function update(Request $request, $id)
    {

        $portofolio = Portofolio::where("id", $id)->first();

        if($request->hasFile("image")){

            $path = public_path($portofolio->image);

            $isExists = file_exists($path);

            if ($isExists) {
                unlink(storage_path('app/public/'.$portofolio->image));
            }
                
            $originName     = $request->file("image")->getClientOriginalName();
            $fileName       = pathinfo($originName, PATHINFO_FILENAME);
            $extension      = $request->file("image")->getClientOriginalExtension();
            $fileName       = "portofolio/". $fileName.'_'.time().'.'.$extension;

            $request->file("image")->storeAs(
                "public", $fileName
            );

            $portofolio->update([
                "title"         => $request->title,
                "image"         => $fileName,
                "category"      => $request->category,
                "client"        => $request->client,
                "date"          => $request->date,
                "skills"        => $request->skills,
                "link"          => $request->link,
                "description"   =>$request->description
            ]);

        }else{

            $portofolio->update([
                "title"         => $request->title,
                "category"      => $request->category,
                "client"        => $request->client,
                "date"          => $request->date,
                "skills"        => $request->skills,
                "link"          => $request->link,
                "description"   =>$request->description
            ]);
        }

        return redirect()->route("admin.portofolio")->with("msg", "portofolio telah diubah");
    }

    public function destroy($id)
    {
        $portofolio = Portofolio::where("id", $id)->first();
        $portofolio->delete();

        return redirect()->route("admin.portofolio")->with("msg", "portofolio telah dihapus");
    }
}
