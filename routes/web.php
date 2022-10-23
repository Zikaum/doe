<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;

Route::get('/', function () {
    return view('home');
});
Route::get('/requirements', function () {
    return view('requirements');
});
Route::get('/register', function () {
    return view('register');
});
Route::post('/register', function (Request $request) {
    User::create([
        "name" => $request->name,
        "pass" => $request->pass,
        "blood_type" => $request->bloodType,
        "cep" => $request->cep,
        "state" => $request->state,
        "city" => $request->city,
        "age" => $request->age,
        "email" => $request->email
    ]);
    
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});
