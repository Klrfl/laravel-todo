<?php

use App\Models\Todo;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $todos = Todo::all();
    return view('app', ['todos' => $todos]);
});

