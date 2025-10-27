<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing.index');
});
Route::get('/homepage', function () {
    return view('homepage');
});

// Authentication routes
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function () {
    // Add your login logic here
    // This is a placeholder - implement actual authentication logic
    return redirect('/');
})->name('login.post');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');