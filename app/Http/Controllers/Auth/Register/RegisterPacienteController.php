<?php

namespace App\Http\Controllers\Auth\Register;

use App\Http\Api\Services\StaticResources;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class RegisterPacienteController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        $generos = StaticResources::getGeneros();
        $estadosCivis = StaticResources::getEstadoCivil();
        $unidadeFederativas = StaticResources::getUnidadeFederativa();

        return view('auth.register.paciente', compact('generos', 'estadosCivis', 'unidadeFederativas'));
    }

    public function store(Request $request)
    {
        $cadastroFormInfo = $request->all();

        $response = Http::post('http://localhost:8080/cadastro/paciente', $cadastroFormInfo);

        if ($response->status() == 201) {
            return redirect()->route('login')->with('cadastro_sucesso', 'Paciente cadastrado com sucesso!.');
            // return view('auth.login')->with('cadastro_sucesso', 'Paciente cadastrado.');
        } elseif ($response->status() == 400) {
            return redirect()->route('paciente.create')->withErrors($response->json());
        } else {
            return view('error');
        }
    }
}
