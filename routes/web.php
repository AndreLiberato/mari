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
    return view('index');
})->name('index');

Route::get('/login', function() {
    return view('auth.login');
})->name('login');

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->name('dashboard');

Route::get('/dashboard/paciente', function() {
    return view('dashboard.paciente.visaoGeral');
})->name('visaoGeralPaciente');

Route::get('/dashboard/paciente/prescritores', function() {
    return view('dashboard.paciente.prescritores');
})->name('prescritoresPaciente');

Route::get('/dashboard/paciente/laudos', function() {
    return view('dashboard.paciente.laudos');
})->name('laudosPaciente');

Route::get('/dashboard/paciente/receitas', function() {
    return view('dashboard.paciente.receitas');
})->name('receitasPaciente');

Route::get('/dashboard/prescritor', function() {
    return view('dashboard.prescritor');
})->name('dashboard');

Route::get('/dashboard/admin', function() {
    return view('dashboard.admin');
})->name('dashboard');

Route::get('/profile', function() {
    return view('profile.index');
})->name('profile');

