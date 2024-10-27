<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/register/choice', function(){
    return view('registerchoice');
})->name('register.choice');

Route::get('/login/choice', function(){
    return view('loginChoice');
})->name('login.choice');

Route::get('/contact-us', function() {
    return view('contactus');
})->name('contact-us');

Route::get('/about-us', function() {
    return view('aboutus');
})->name('about-us');

Route::get('/bounties', function() {
    return view('bounties');
})->name('bounties');

Route::get('/leaderboard', function() {
    return view('leaderboard');
})->name('leaderboard');

Route::get('/reports', function () {
    return view('reports');
})->name('reports');

Route::get('/register/hacker', function(){ return view('registerHacker'); })->name('register.hacker');
Route::get('/register/company', function(){ return view('registerCompany'); })->name('register.company');

Route::get('/login/hacker', function() {
    return view('loginHacker');
})->name('login.hacker');

Route::get('/login/company', function() {
    return view('loginCompany');
})->name('login.company');

Route::post('/register/hacker', [AuthController::class, 'user_register'])->name('user.register');

Route::post('/register/company', [AuthController::class, 'company_register'])->name('company.register');

Route::post('/login/hacker', [AuthController::class, 'user_login'])->name('user.login');

Route::post('/login/company', [AuthController::class, 'company_login'])->name('company.login');

Route::get('/user/{id}/profile', [UserController::class, 'profile'])->name('user.profile');

Route::get('/company/{id}/profile', [CompanyController::class, 'profile'])->name('company.profile');
