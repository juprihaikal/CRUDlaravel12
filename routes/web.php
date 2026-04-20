<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\motorcontroller;

Route::resource('/motor', motorController::Class);

Route::get('/', function () {
    return view('welcome');
});
