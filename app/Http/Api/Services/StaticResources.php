<?php

namespace App\Http\Api\Services;

use App\Http\Api\ApiLinks;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\ConnectionException;

class StaticResources
{
    public static function getGeneros()
    {
        try {
            $response = Http::get(ApiLinks::GENERO);
        } catch (ConnectionException $ce) {
            return view('erro');
        }

        if ($response->failed()) {
            return view('erro');
        }

        $generos = $response->json();
        return $generos;
    }

    public static function getEstadoCivil()
    {
        try {
            $response = Http::get(ApiLinks::ESTADO_CIVIL);
        } catch (ConnectionException $ce) {
            return view('erro');
        }

        if ($response->failed()) {
            return view('erro');
        }

        $estadosCivis = $response->json();
        return $estadosCivis;
    }

    public static function getUnidadeFederativa()
    {
        try {
            $response = Http::get(ApiLinks::NOME_UNIDADE_FEDERATIVA);
        } catch (ConnectionException $ce) {
            return view('erro');
        }

        if ($response->failed()) {
            return view('erro');
        }

        $unidadeFederativas = $response->json();
        return $unidadeFederativas;
    }
}
