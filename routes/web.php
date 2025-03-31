<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Lab9Controller;

Route::get('/', function () {
    return view('index');
});
Route::get('/registration', function () {
    return view('registration');
});

Route::get('/', [Lab9Controller::class, 'showIndex']);
Route::get('/registration', [Lab9Controller::class, 'showRegistrationForm']);
Route::post('/registration', [Lab9Controller::class, 'handleFormSubmission']);
