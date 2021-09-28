<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{    
    public function index()
    {
        $products = Product::get();

        return view("product.index", ["products" => $products]);
    }

    public function create()
    {
        return view("product.create");
    }

    public function store(Request $request)
    {
        
        $originName     = $request->file("image")->getClientOriginalName();
        $fileName       = pathinfo($originName, PATHINFO_FILENAME);
        $extension      = $request->file("image")->getClientOriginalExtension();
        $fileName       = "product/". $fileName.'_'.time().'.'.$extension;

        $request->file("image")->storeAs(
            "public", $fileName
        );

        Product::insert([
            "name"       => $request->name,
            "image"      => $fileName,
            "price"      => $request->price,
            "facility"   => $request->facility,
        ]);      

        return redirect()->route("admin.product")->with("msg", "product telah ditambahkan");
    }

    public function edit($id)
    {
        $product = Product::where("id", $id)->first();

        return view("product.edit", ["product" => $product]);
    }

    public function update(Request $request, $id)
    {

        $product = Product::where("id", $id)->first();

        if($request->hasFile("image")){

            $path = public_path($product->image);

            $isExists = file_exists($path);

            if ($isExists) {
                unlink(storage_path('app/public/'.$product->image));
            }
                
            $originName     = $request->file("image")->getClientOriginalName();
            $fileName       = pathinfo($originName, PATHINFO_FILENAME);
            $extension      = $request->file("image")->getClientOriginalExtension();
            $fileName       = "product/". $fileName.'_'.time().'.'.$extension;

            $request->file("image")->storeAs(
                "public", $fileName
            );

            $product->update([
                "name"         => $request->name,
                "image"        => $fileName,
                "price"        => $request->price,
                "facility"     => $request->facility,
            ]);

        }else{

            $product->update([
                "name"         => $request->name,
                "price"        => $request->price,
                "facility"     => $request->facility,
            ]);
        }

        return redirect()->route("admin.product")->with("msg", "product telah diubah");
    }

    public function destroy($id)
    {
        $product = Product::where("id", $id)->first();
        $product->delete();

        return redirect()->route("admin.product")->with("msg", "product telah dihapus");
    }
}
