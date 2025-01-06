<?php
use App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthenticatedSessionController;
use Illuminate\Support\Facades\Auth;



Route::get('/', [Controller::class, 'home'])->middleware('auth')->name('home');

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');
