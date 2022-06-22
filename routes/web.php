<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Home', [
        'title' => 'Home'
    ]);
})->name('Home');

Route::get('/users', function () {
    return Inertia::render('Users', [
        'time' => now()->toTimeString(),
        'title' => 'Users',
    ]);
})->name('Users');

Route::get('/settings', function () {
    return Inertia::render('Settings', [
        'title' => 'Settings'
    ]);
})->name('Settings');

Route::post('/logout', function() {
    dd(request('foo'));
});
