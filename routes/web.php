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
})->name('home');

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

Route::get('/user/contact', function() {
    return view('user.contact');
});

Route::get('/user/quemSomos', function() {
    return view('user.quemSomos');
});

Route::get('/user/dashboard/prescritor', function() {
    return view('user.dashboardPrescritor');
});

Route::get('/admin/dashboard', function() {
    return view('admin.dashboard');
});

Route::get('/user/pacient/profile/edit', function() {
    return view('user.profileEditPaciente');
});

Route::get('/user/prescritor/profile/edit', function() {
    return view('user.profileEditPrescritor');
});

Route::get('/user/profile', function() {
    return view('user.profilePage');
});
