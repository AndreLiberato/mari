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
    return view('dashboard.prescritor.visaoGeral');
})->name('visaoGeralPrescritor');

Route::get('/dashboard/prescritor/pacientes', function() {
    return view('dashboard.prescritor.pacientes');
})->name('pacientesPrescritor');

Route::get('/dashboard/prescritor/consultas', function() {
    return view('dashboard.prescritor.consultas');
})->name('consultasPrescritor');

Route::get('/dashboard/admin', function() {
    return view('dashboard.admin.visaoGeral');
})->name('visaoGeralAdmin');

Route::get('/dashboard/admin/consultas', function() {
    return view('dashboard.admin.buscaConsultas');
})->name('consultasAdmin');

Route::get('/dashboard/admin/consultas/agendar', function() {
    return view('dashboard.admin.agendaConsultas');
})->name('agendarConsultasAdmin');

Route::get('/dashboard/admin/consultas/cancelar', function() {
    return view('dashboard.admin.cancelaConsultas');
})->name('cancelaConsultasAdmin');

Route::get('/dashboard/admin/financas', function() {
    return view('dashboard.admin.financas');
})->name('financasAdmin');

Route::get('/dashboard/admin/pacientes', function() {
    return view('dashboard.admin.pacientes');
})->name('pacientesAdmin');

Route::get('/dashboard/admin/plantacao', function() {
    return view('dashboard.admin.plantacao');
})->name('plantacaoAdmin');

Route::get('/dashboard/admin/prescritores', function() {
    return view('dashboard.admin.prescritores');
})->name('prescritoresAdmin');

Route::get('/profile', function() {
    return view('profile.index');
})->name('profile');

Route::get('/doctorprofile', function() {
    return view('doctorprofile.index');
})->name('doctorprofile');

Route::get('/diretoria', function() {
    return view('profile.diretoria');
})->name('diretoria');

Route::get('/depoimentos', function() {
    return view('profile.depoimentos');
})->name('depoimentos');

Route::get('/cadastro', function() {
    return view('profile.cadastro');
})->name('cadastro');

Route::get('/contato', function() {
    return view('profile.contato');
})->name('contato');

Route::get('/beneficios', function() {
    return view('profile.beneficios');
})->name('beneficios');
