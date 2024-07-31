<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * make new todo item.
     * */
    public function store(Request $request)
    {
        $newTodo = new Todo;
        $newTodo['label'] = $request->label;

        $newTodo->saveOrFail();
        return view("components.todo", ['todo' => $newTodo]);
    }



    public function update(Request $request, string $id)
    {
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
    }

    public function destroy(Request $request, string $id)
    {
        $deletedTodo = Todo::query()
            ->where('id', $id)
            ->delete($id);

        if ($deletedTodo != 1) {
            return response('not deleted', 500);
        }

        return response()->noContent(200);
    }
}
