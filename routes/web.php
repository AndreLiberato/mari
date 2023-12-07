<?php

use App\Http\Controllers\Auth\Register\RegisterPacienteController;
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

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

Route::get('/profile', function () {
    return view('profile.index');
})->name('profile');

// Recursos de associados
Route::resources([
    // 'contribuinte'  => RegisterContribuinteController::class,
    'paciente'      => RegisterPacienteController::class,
    'prescritor'    => RegisterPrescritorController::class,
]);

Route::get('/registration_selector', function () {
    return view('registration_selector');
})->name('registration_selector');

Route::get('/error', function () {
    return view('error');
})->name('error');
