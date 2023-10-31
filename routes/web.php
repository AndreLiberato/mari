<?php

use App\Http\Controllers\Auth\CadastroController;
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

Route::get('/cadastro/paciente', [CadastroController::class, 'paciente'])->name('cadastro.paciente');
Route::post('/cadastro/paciente/store', [CadastroController::class, 'store'])->name('cadastro.paciente.store');

Route::get('/cadastroPrescritor', function () {
    return view('cadastroPrescritor');
});

Route::get('/login', function() {
    return view('auth.login');
});

Route::get('/user/dashboard', function() {
    return view('user.dashboard');
});
