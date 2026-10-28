<?php

use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

Route::controller(LandingPageController::class)->group(function () {
    Route::get('/', 'index')->name('landing.home');
    Route::get('/about', 'about')->name('landing.about');
    Route::get('/booking', 'booking')->name('landing.booking');
    Route::get('/menu', 'menu')->name('landing.menu');
    Route::get('/service', 'service')->name('landing.service');
    Route::get('/team', 'team')->name('landing.team');
});

Route::prefix('admin')->name('admin.')->controller(AdminPageController::class)->group(function () {
    Route::get('/', 'index')->name('dashboard');
    Route::get('/advance-sweet-alert', 'sweetAlert')->name('sweet-alert');
    Route::get('/calendar', 'calendar')->name('calendar');
    Route::get('/form-elements', 'formElements')->name('form-elements');
    Route::get('/tables-datatable', 'tablesDatatable')->name('tables-datatable');
    Route::get('/login', 'login')->name('login');
});
