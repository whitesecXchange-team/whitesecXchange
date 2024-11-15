<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BountyController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [Controller::class, 'show_home'])->name('home');

Route::get('/register/choice', [AuthController::class, 'show_register_choice'])->name('register.choice');

Route::get('/login/choice', [AuthController::class, 'show_login_choice'])->name('login.choice');

Route::get('/contact-us', [Controller::class, 'show_contact_us'])->name('contact-us');

Route::get('/about-us', [Controller::class, 'show_about_us'])->name('about-us');

Route::get('/bounties', [Controller::class, 'show_bounties'])->name('bounties');

Route::get('/reports', [Controller::class, 'show_reports_page'])->name('reports.page');

Route::get('/register/hacker', [AuthController::class, 'show_register_hacker'])->name('register.hacker');

Route::get('/register/company', [AuthController::class, 'show_register_company'])->name('register.company');

Route::get('/login/hacker', [AuthController::class, 'show_login_hacker'])->name('login.hacker');

Route::get('/login/company', [AuthController::class, 'show_login_company'])->name('login.company');

Route::post('/register/hacker', [AuthController::class, 'user_register'])->name('user.register');

Route::post('/register/company', [AuthController::class, 'company_register'])->name('company.register');

Route::post('/login/hacker', [AuthController::class, 'user_login'])->name('user.login');

Route::post('/login/company', [AuthController::class, 'company_login'])->name('company.login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/user/{id}/profile', [UserController::class, 'profile'])->name('user.profile');

Route::get('/company/{id}/profile', [CompanyController::class, 'profile'])->name('company.profile');

Route::get('/bounty/{id}/details', [BountyController::class, 'show_details_bounty'])->name('bounty.details');

Route::get('/bounty/create', [BountyController::class, 'create'])->name('bounty.create')->middleware('auth:company');

Route::post('/bounty/store', [BountyController::class, 'store'])->name('bounty.store')->middleware('auth:company');

Route::get('/bounty/{id}/report', [ReportController::class, 'create'])->name('report.create')->middleware('auth');

Route::post('/bounty/{id}/report', [ReportController::class, 'store'])->name('report.store')->middleware('auth');

Route::get('/reports/{id}', [ReportController::class, 'show'])->name('reports.show');

Route::get('/report/{id}/download', [ReportController::class, 'download'])->name('report.download');

Route::get('/leaderboard', [Controller::class, 'leaderboard'])->name('leaderboard');

Route::post('/reports/{id}', [ReportController::class, 'approval'])->name('report.approval');

Route::post('/report/{reportId}/accept', [ReportController::class, 'acceptReport'])->name('report.acceptReport');