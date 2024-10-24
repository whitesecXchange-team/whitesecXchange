<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');   

Route::get('/register-choice', function(){
    return view('registerchoice');
})->name('register-choice');

Route::get('/login', function(){
    return view('login');
})->name('login');

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