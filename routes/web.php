<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/login', 'login')->name('login');

// Route::view('/login', 'login')->name('login');
Route::view('/home', 'home')->name('home')->middleware('auth');

Route::post('login', function () {

    $credentials = request()->only('email', 'password');
    // return request();
    if (Auth::attempt($credentials)) {
        request()->session()->regenerate(); // Regenera la sesion
        // return 'autenticado';
        return redirect()->route('home');
    }
    // return 'no autenticado';
    return redirect()->route('login');
});
