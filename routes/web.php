<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

route::resource('/', LandingController::class);
route::get('/kursus', [LandingController::class, 'kursus'])->name('kursus');
route::get('/timkami', [LandingController::class, 'timkami'])->name('timkami');
route::get('/layanan', [LandingController::class, 'layanan'])->name('layanan');
route::get('/katalog', [LandingController::class, 'katalog'])->name('katalog');
route::get('/login', [LandingController::class, 'login'])->name('login');
route::get('/register', [LandingController::class, 'register'])->name('register');