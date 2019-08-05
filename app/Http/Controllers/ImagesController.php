<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function imagesUpload(Request $request)
    {
        if(count($request->images)){
            foreach($request->images as $image){
                return $image;
                $image->store('images');
            }
        }

        return response()->json([
            'message' => 'Done'
        ]);
    }
}
