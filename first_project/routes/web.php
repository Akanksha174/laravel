<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/about', function () {
    return view('about');
});
    Route::redirect('/home', '/about');

Route::get('/Main', function () {
    return view('HomePage');
});