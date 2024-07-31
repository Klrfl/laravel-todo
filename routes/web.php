<?php

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $todos = Todo::all();
    return view('app', ['todos' => $todos]);
});

Route::post("/todo", function (Request $request) {
    $newTodo = new Todo;
    $newTodo['label'] = $request->label;

    $newTodo->saveOrFail();
    return view("components.todo", ['todo' => $newTodo]);
});

Route::get("/todo/{id}", function (string $id) {
    $todo = Todo::find($id);
    return view("components.todo", ["todo" => $todo]);
});
