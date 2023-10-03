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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dash', function () {
        return view('dash.index ');
    })->name('dash');
});

Route::get('/profile/show', function () {
    return view('profile.show');
});


//Vehiculo
Route::get('vehiculo', \App\Livewire\Vehiculo::class)->name('vehiculo');
//Mantenimientos
Route::get('mantenimiento', \App\Livewire\Mantenimiento::class)->name('mantenimiento');
//Pieza
Route::get('pieza', \App\Livewire\Pieza::class)->name('pieza');

Route::get('/mant/show', function () {
    return view('cruds.crudmant');
});