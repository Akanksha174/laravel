<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Myfileuploading extends Controller
{
    public function onClick(Request $req)
    {
        $path = $req->file('file')->store('public');
        return $path;
    }
}