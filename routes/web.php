<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;



Route::get('/', function () {
    return view('welcome');
});

Route::view('register', 'registration_form');
Route::post('/register',[RegisterController::class, 'addData']);