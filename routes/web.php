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

Route::put("/todo/{id}", function (Request $request, string $id) {
    $todo = Todo::query()->findOrFail($id);

    if ($request->has('label')) {
        $todo->label = $request->label;
    }

    if ($request->has('is_done')) {
        $todo->is_done = $request->is_done;
    } else {
        $todo->is_done = !$request->is_done;
    }

    $todo->saveOrFail();

    return view("components.todo", ["todo" => $todo]);
});

Route::delete("/todo/{id}", function (string $id) {
    $deletedTodo = Todo::query()
        ->where('id', $id)
        ->delete($id);

    if ($deletedTodo != 1) {
        return response('not deleted', 500);
    }

    return response()->noContent(200);
});
