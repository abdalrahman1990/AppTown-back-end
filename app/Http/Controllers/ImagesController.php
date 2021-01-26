<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function upload(Request $request)
    {

        if (count($request->images)) {
            foreach ($request->images as $image) {
                $name= time().".".$image->extension();
                $image->move(public_path()."/img/",$name);
            }
        }
        return response()->json([
            "message" => "Done"
        ]);
    }

    public function uploadFile(Request $request)
    {

        if (count($request->files)) {
            foreach ($request->files as $file) {
              //  $name= $file.".".$file->extension();
                $file->move(public_path()."/files/");
            }
        }
        return response()->json([
            "message" => "Done"
        ]);
    }
}
