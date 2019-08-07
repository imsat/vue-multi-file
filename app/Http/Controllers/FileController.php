<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(count($request->uploads)){
            foreach($request->uploads as $file){

                $fileSize          = $file->getSize();
                $oiginalName       = $file->getClientOriginalName();
                $originalExtension =  $file->getClientOriginalExtension();
                $fileName = time().'.'.$oiginalName.'.'.$fileSize.'.'.$originalExtension;

                $file->move("uploads", $oiginalName);
//                $file->store('files'); //filesystem-files ************
//                $file->storePubliclyAs('public',  $fileName); //public folder

//                $image->move(public_path('files'), $fileName); //generate You don't have permission to access /files/ on this server. 1st time
//                Storage::disk('local')->putFileAs('files/'.$fileName,$image,$fileName);
//                file_put_contents('fileg',$image, $fileName);
//                $file->move(public_path('files'), $fileName);
            }
        }
        return response()->json([
            'message' => 'Done'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function show(File $file)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function edit(File $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, File $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy(File $file)
    {
        //
    }
}
