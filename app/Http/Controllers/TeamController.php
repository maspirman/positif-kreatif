<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::get();

        return view("team.index", ["teams" => $teams]);
    }
    
    public function create()
    {
        return view("team.create");
    }
    
    public function store(Request $request)
    {
        $originName     = $request->file("image")->getClientOriginalName();
        $fileName       = pathinfo($originName, PATHINFO_FILENAME);
        $extension      = $request->file("image")->getClientOriginalExtension();
        $fileName       = "team/". $fileName.'_'.time().'.'.$extension;

        $request->file("image")->storeAs(
            "public", $fileName
        );

        Team::insert([
            "name"          => $request->name,
            "position"      => $request->position,
            "jargon"        => $request->jargon,
            "image"         => $fileName
        ]);      

        return redirect()->route("admin.team")->with("msg", "team telah ditambahkan");
    }
    
    public function edit($id)
    {
        $team = Team::where("id", $id)->first();

        return view("team.edit", ["team" => $team]);
    }
    
    public function update(Request $request, $id)
    {
        $team = Team::where("id", $id)->first();

        if($request->hasFile("image")){

            $path = public_path($team->image);

            $isExists = file_exists($path);

            if ($isExists) {
                unlink(storage_path('app/public/'.$team->image));
            }
                
            $originName     = $request->file("image")->getClientOriginalName();
            $fileName       = pathinfo($originName, PATHINFO_FILENAME);
            $extension      = $request->file("image")->getClientOriginalExtension();
            $fileName       = "team/". $fileName.'_'.time().'.'.$extension;

            $request->file("image")->storeAs(
                "public", $fileName
            );

            $team->update([
                "name"         => $request->name,
                "position"      => $request->position,
                "jargon"        => $request->jargon,
                "image"         => $fileName
            ]);

        }else{

            $team->update([
                "name"         => $request->name,
                "position"      => $request->position,
                "jargon"   => $request->jargon,
            ]);
        }

        return redirect()->route("admin.team")->with("msg", "team telah diubah");
    }
    
        public function destroy($id)
        {
            $team = Team::where("id", $id)->first();
            $team->delete();
    
            return redirect()->route("admin.team")->with("msg", "team telah dihapus");
        }
}
