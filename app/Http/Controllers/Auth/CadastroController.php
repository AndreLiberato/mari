<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CadastroController extends Controller
{
    public function paciente()
    {
        $generos = Http::get('http://localhost:8080/static/genero')->json();
        $estadosCivis = Http::get('http://localhost:8080/static/estado_civil')->json();
        $unidadeFederativas = Http::get('http://localhost:8080/static/unidade_federativa/sigla')->json();



        return view('cadastroPaciente', compact('generos', 'estadosCivis', 'unidadeFederativas'));
    }

    public function store(Request $request) {
        dd($request);
    }
}
