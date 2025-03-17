<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Student;

class StudentController extends Controller
{
    //
    public function index(){
        //return "This is student data";
        $students = \App\Models\Student::all();
        return view('Students', ['students' => $students]);
    }
}
