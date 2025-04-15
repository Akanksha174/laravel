<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
{
public function sendemail(){
    $to = "aahna8434@gmail.com";
    $subject = "This is subject";
    $txt = "Hello world!";
    
    Mail::to($to)->send(new WelcomeMail($subject, $txt));
}
}   
?>