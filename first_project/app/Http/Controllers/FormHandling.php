<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FormHandling extends Controller{
    public function getform(){
      
        return view('formhandling');
    }

    public function submitform(Request $request){
        echo "<pre>";
        print_r($request);
        echo $request->name;
    }
}
?>