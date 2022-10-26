<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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

Route::post('/login', function (Request $request) {
    if(Auth::attempt($request->only("email", "pass"))){
        echo("boa");
    }else{
        return view('login');
    }
});

Route::get('/personal_space', function () {
    return view('personal_space', ["optionSelected" => 0]);
});
Route::get('/personal_space/my_donations', function () {
    return view('personal_space', ["optionSelected" => 0]);
});
Route::get('/personal_space/my_requests', function () {
    return view('personal_space', ["optionSelected" => 1]);
});
Route::get('/personal_space/make_request', function () {
    return view('personal_space', ["optionSelected" => 2]);
});


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// require __DIR__.'/auth.php';
