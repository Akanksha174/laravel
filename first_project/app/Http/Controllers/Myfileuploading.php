<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Myfileuploading extends Controller
{
    public function onClick(Request $req)
    {
        $path = $req->file('myfile')->store('images','public');
        $filearray=explode("/",$path);
        $filename=$filearray[1];
        return view('fileupload',['path'=>$filename]);
        return $path;
    }
}