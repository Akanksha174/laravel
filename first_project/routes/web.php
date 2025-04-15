<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::post('/login',[Login::class,'loginbtn']);
Route::view('/login' ,'login');
Route::view('/profile' ,'profile');
Route::view('/home', 'home');
Route::view('/abt','about');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return (
        "<h1 style='color: Red;'>Hello, Laravel</h1>
        <script> alert('Welcome to Laravel!');</script>
        ");
});
Route::get('/lpu/{name}', function ($name) {
    return (
        "<h1 style='color: Red;'>Hello, {$name}</h1>
        <script> alert('Welcome to lpu!');</script>
        ");
});
Route::get('/lpu1/{name?}', function($name="User"){
    return (ucfirst($name)." is studying in lpu");
});

Route::get('/home/{name}/{age}', function ($name, $age) {
    return view('home', ['name' => $name, 'age' => $age]);
});

// Route::get('/sum/{num1}/{num2}', function ($num1, $num2) {
//     return view("The addition of $num1 and $num2 is".$num1+$num2);
// });

Route::get('/sum/{num1}/{num2}', function ($num1, $num2) {
    return view('sum',["num1"=>$num1,"num2"=>$num2,]);
});



Route::get('/Main', function () {
    return view('HomePage');
});

Route::get('/array', function(){
    $mydetails=[
    "name" => "abc",
    "regNo"=>1234,
    "phoneNo"=>489237423,
    "Email"=> "abc@gmail.com"
];
    return response()->json($mydetails);
});

//cookie 
Route::get('/setcookie', function(){
    return response("Cookie has been set")->cookie('username','Amit', 100000);
});

Route::get('/getcookie', function(){
    return request()->cookie('username');
    return "Stored Cookie value is" .$username;
});

//deleting cookie
Route::get('/deletecookie', function(){
    return response("Cookie value is deleted")
    ->cookie('','',-1);
});

//Controller
use App\Http\Controllers\FormHandling;
use App\Http\Controllers\MailingController;
use App\Http\Controllers\Myfileuploading;

// Route::get('/formhandling', [FormHandling::class, 'getform']);
// Route::post('/submit', [FormHandling::class, 'submitform']);

// //Database 
// // use App\Http\Controllers\StudentController;
// // Route::get('/getdata', [StudentController::class, 'index']);

// use App\Http\Controllers\ProductController;
// Route::get('/showdata', [ProductController::class, 'showdata']);

// use App\Http\Controllers\TaskController;
// Route::get('/tasks', [TaskController::class, 'index']);

//fileupload
Route::view('/file','fileupload');
Route::post('/uploadfile',[FileUploadController::class, 'onClick']);
Route::get('\sendemail',[MailingController::class,'sendemail']);
Route::view('/myprofile','myprofile');

Route::get('/welcome-page', function () {
    return view('welcome');
});
?> 



