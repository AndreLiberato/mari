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

Route::get('/cadastroPaciente', function () {
    return view('cadastroPaciente');
});

Route::get('/cadastroPrescritor', function () {
    return view('cadastroPrescritor');
});

Route::get('/login', function() {
    return view('auth.login');
});

Route::get('/user/dashboard', function() {
    return view('user.dashboard');
});

Route::get('/user/profile/edit', function() {
    return view('user.profileEditPaciente');
});