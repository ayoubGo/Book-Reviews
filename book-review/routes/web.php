<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello/{name}', function ($name) {
    return 'hello '. $name;
});


Route::resource('books', BookController::class);

