<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class TaskController extends Controller
{
    public function index()
    {
        $tasks = [
            ["id" => 1, "title" => "Task 1", "status" => "pending"],
            ["id" => 2, "title" => "Task 2", "status" => "completed"],
            ["id" => 3, "title" => "Task 3", "status" => "pending"],
        ];
        return response()->json($tasks);
    }
}
