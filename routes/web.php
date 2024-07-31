<?php

use App\Http\Controllers\TodoController;
use App\Models\Todo;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $todos = Todo::all();
    return view('app', ['todos' => $todos]);
});

Route::post("/todo", [TodoController::class, 'store']);
Route::put("/todo/{id}", [TodoController::class, 'update']);
Route::delete("/todo/{id}", [TodoController::class, 'destroy']);
