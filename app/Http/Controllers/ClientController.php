<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::get();

        return view("admin.client.index", ["clients" => $clients]);
    }

    public function create()
    {
        return view("admin.client.create");
    }

    public function store(Request $request)
    {
        $originName     = $request->file("image")->getClientOriginalName();
        $fileName       = pathinfo($originName, PATHINFO_FILENAME);
        $extension      = $request->file("image")->getClientOriginalExtension();
        $fileName       = "client/". $fileName.'_'.time().'.'.$extension;

        $request->file("image")->storeAs(
            "public", $fileName
        );

        Client::insert([
            "name"          => $request->name,
            "image"         => $fileName
        ]);      

        return redirect()->route("admin.client")->with("msg", "client telah ditambahkan");
    }

    public function edit($id)
    {
        $client = Client::where("id", $id)->first();

        return view("admin.client.edit", ["client" => $client]);
    }

    public function update(Request $request, $id)
    {
        $client = Client::where("id", $id)->first();

        if($request->hasFile("image")){

            $path = public_path($client->image);

            $isExists = file_exists($path);

            if ($isExists) {
                unlink(storage_path('app/public/'.$client->image));
            }
                
            $originName     = $request->file("image")->getClientOriginalName();
            $fileName       = pathinfo($originName, PATHINFO_FILENAME);
            $extension      = $request->file("image")->getClientOriginalExtension();
            $fileName       = "client/". $fileName.'_'.time().'.'.$extension;

            $request->file("image")->storeAs(
                "public", $fileName
            );

            $client->update([
                "name"         => $request->name,
                "image"         => $fileName,
            ]);

        }else{

            $client->update([
                "name"          => $request->name,
            ]);
        }

        return redirect()->route("admin.client")->with("msg", "client telah diubah");
    }

    public function destroy($id)
    {
        $client = Client::where("id", $id)->first();
        $client->delete();

        return redirect()->route("admin.client")->with("msg", "client telah dihapus");
    }
}
