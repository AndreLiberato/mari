<?php

namespace App\Http\Api;


class ApiLinks
{
    const BASE_API_URL = "https://marijuana-api-22e31cc2869d.herokuapp.com";

    // Auth
    const CADASTRO_PACIENTE = self::BASE_API_URL."/cadastro/paciente";

    // Enum
    const ENUM_BASE_URL = self::BASE_API_URL."/enum";
    const ESTADO_CIVIL = self::ENUM_BASE_URL."/estado_civil";
    const FORMACAO_ACADEMICA = self::ENUM_BASE_URL."/formacao_academica";
    const GENERO = self::ENUM_BASE_URL."/genero";
    const TIPO_ARQUIVO = self::ENUM_BASE_URL."/tipo_arquivo";
    const NOME_UNIDADE_FEDERATIVA = self::ENUM_BASE_URL."/nome_unidade_federativa";
    const SIGLA_UNIDADE_FEDERATIVA = self::ENUM_BASE_URL."/sigla_unidade_federativa";


}
