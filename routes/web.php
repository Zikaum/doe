<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;

Route::get('/', function () {
    return view('home', ["headerSelected" => 0]);
});
Route::get('/requirements', function () {
    return view('requirements', ["headerSelected" => 1]);
});
Route::get('/register', function () {
    return view('register', ["headerSelected" => 2]);
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
    
    return view('register', ["headerSelected" => 2]);
});

Route::get('/login', function () {
    return view('login', ["headerSelected" => 3]);
});
