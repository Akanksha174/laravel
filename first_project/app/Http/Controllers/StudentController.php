<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Student;

class StudentController extends Controller
{
    //
    public function index(){
        //return "This is student data";
        $students = \App\Models\Student::where('City', 'Delhi')->get(); //at the place of all we can write where to perform sql operation
        return view('Students', ['students' => $students]);
        //another way of passing data --> compact('students');
    }
}
