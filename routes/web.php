<?php

use Illuminate\Support\Facades\Route;
use App\Models\todo;

Route::get('/', function () {
    $todo =  todo::orderby('id', 'asc')->get();
    return view('home',[
        'todo'=> $todo
    ]);
});