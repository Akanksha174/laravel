<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FormHandling extends Controller{
    public function getform(){
        return view('formhandling');
    }
}
?>