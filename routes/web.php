<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::get('/dashboard', function(){
        return view('dashboard');
    })->name('dashboard');
    Route::get('/roles', \App\Http\Livewire\Role::class)->name('roles');
    Route::get('/countries', \App\Http\Livewire\Country::class)->name('countries');
    Route::get('/states', \App\Http\Livewire\State::class)->name('states');
    Route::get('/cities', \App\Http\Livewire\City::class)->name('cities');
});

