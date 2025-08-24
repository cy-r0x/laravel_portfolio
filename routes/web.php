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
    return view('home');
})->name('home');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/resume', function () {
    return view('resume');
})->name('resume');

// Keep this route for backward compatibility
Route::get('/welcome', function () {
    return view('welcome');
});

// Legacy routes - consider removing or updating these later
Route::get('/lp1', function () {
    return view('lp1');
})->name('lp1');

