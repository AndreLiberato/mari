<?php

namespace App\Http\Controllers\Auth;

use App\Http\Api\Services\StaticResources;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function paciente()
    {
        $generos = StaticResources::getGeneros();
        $estadosCivis = StaticResources::getEstadoCivil();
        $unidadeFederativas = StaticResources::getUnidadeFederativa();

        return view('auth.cadastro.cadastroPaciente', compact('generos', 'estadosCivis', 'unidadeFederativas'));
    }

    public function store(Request $request)
    {
        $cadastroFormInfo = $request->all();

        $response = Http::post('http://localhost:8080/cadastro/paciente', $cadastroFormInfo);

        if ($response->status() == 201) {
            return view('auth.login')->with('sucesso', 'Paciente cadastrado.');
        } elseif ($response->status() == 400) {
            return redirect()->route('cadastro.paciente')->withErrors($response->json());
        } else {
            return view('erro');
        }
    }
}
