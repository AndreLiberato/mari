<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>

    <div class="bg-white">
        <div class="mx-auto max-w-7xl px-4 py-24 sm:px-6 sm:py-32 lg:px-8">
            <div class="mx-auto max-w-2xl">
                <form enctype="multipart/form-data" action="{{ route('cadastro.paciente.store') }}" method="POST">
                    @csrf
                    <div class="space-y-12">
                        {{-- Informações Pessoais --}}
                        <div class="border-b border-gray-900/10 pb-12">
                            <h1 class="text-xl font-semibold leading-7 text-gray-900">Informações pessoais</h1>
                            <p class="mt-1 text-sm leading-6 text-gray-600">
                                As informações abaixo servirão para entendermos mais sobre você
                            </p>
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                                <div class="relative mb-4 sm:col-span-6">
                                    <input required type="text" name="nomeCompleto"
                                        class="peer m-0 block h-[58px] w-full rounded border-2 border-solid border-neutral-600 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 transition duration-200 ease-linear placeholder:text-transparent focus:border-app-green-dark focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-700 focus:outline-none peer-focus:text-app-green-dark dark:border-neutral-600 dark:text-neutral-200 dark:focus:border-app-green-light dark:peer-focus:text-app-green-light [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]"
                                        id="nomeCompletoInput" placeholder="Nome completo" />
                                    <label for="nomeCompletoInput"
                                        class="pointer-events-none absolute left-0 top-0 origin-[0_0] border border-solid border-transparent px-3 py-4 text-neutral-500 transition-[opacity,_transform] duration-200 ease-linear peer-focus:-translate-y-2 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-app-green-dark peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-app-green-light">
                                        Nome completo
                                    </label>
                                </div>

                                <div class="relative mb-4 sm:col-span-3">
                                    <input type="text" name="nomeSocial"
                                        class="peer m-0 block h-[58px] w-full rounded border-2 border-solid border-neutral-600 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 transition duration-200 ease-linear placeholder:text-transparent focus:border-app-green-dark focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-700 focus:outline-none peer-focus:text-app-green-dark dark:border-neutral-600 dark:text-neutral-200 dark:focus:border-app-green-light dark:peer-focus:text-app-green-light [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]"
                                        id="nomeSocialInput" placeholder="Nome social" />
                                    <label for="nomeSocialInput"
                                        class="pointer-events-none absolute left-0 top-0 origin-[0_0] border border-solid border-transparent px-3 py-4 text-neutral-500 transition-[opacity,_transform] duration-200 ease-linear peer-focus:-translate-y-2 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-app-green-dark peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-app-green-light">
                                        Nome social
                                    </label>
                                </div>

                                <div class="relative mb-4 sm:col-span-3">
                                    <input required type="text" name="cpf"
                                        class="peer m-0 block h-[58px] w-full rounded border-2 border-solid border-neutral-600 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 transition duration-200 ease-linear placeholder:text-transparent focus:border-app-green-dark focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-700 focus:outline-none peer-focus:text-app-green-dark dark:border-neutral-600 dark:text-neutral-200 dark:focus:border-app-green-light dark:peer-focus:text-app-green-light [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]"
                                        id="cpfInput" placeholder="Número do CPF" />
                                    <label for="cpfInput"
                                        class="pointer-events-none absolute left-0 top-0 origin-[0_0] border border-solid border-transparent px-3 py-4 text-neutral-500 transition-[opacity,_transform] duration-200 ease-linear peer-focus:-translate-y-2 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-app-green-dark peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-app-green-light">
                                        Número do CPF
                                    </label>
                                </div>

                                <div class="relative mb-4 sm:col-span-2">
                                    <input type="text" name="numeroRegistroGeral"
                                        class="peer m-0 block h-[58px] w-full rounded border-2 border-solid border-neutral-600 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 transition duration-200 ease-linear placeholder:text-transparent focus:border-app-green-dark focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-700 focus:outline-none peer-focus:text-app-green-dark dark:border-neutral-600 dark:text-neutral-200 dark:focus:border-app-green-light dark:peer-focus:text-app-green-light [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]"
                                        id="numeroRegistroGeralInput" placeholder="Número do RG" />
                                    <label for="numeroRegistroGeralInput"
                                        class="pointer-events-none absolute left-0 top-0 origin-[0_0] border border-solid border-transparent px-3 py-4 text-neutral-500 transition-[opacity,_transform] duration-200 ease-linear peer-focus:-translate-y-2 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-app-green-dark peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-app-green-light">
                                        Número do RG
                                    </label>
                                </div>

                                <div class="relative mb-4 sm:col-span-2">
                                    <input type="text" name="nomeExpedidorRegistroGeral"
                                        class="peer m-0 block h-[58px] w-full rounded border-2 border-solid border-neutral-600 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 transition duration-200 ease-linear placeholder:text-transparent focus:border-app-green-dark focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-700 focus:outline-none peer-focus:text-app-green-dark dark:border-neutral-600 dark:text-neutral-200 dark:focus:border-app-green-light dark:peer-focus:text-app-green-light [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]"
                                        id="nomeExpedidorRegistroGeralInput" placeholder="Órgão expedidor" />
                                    <label for="nomeExpedidorRegistroGeralInput"
                                        class="pointer-events-none absolute left-0 top-0 origin-[0_0] border border-solid border-transparent px-3 py-4 text-neutral-500 transition-[opacity,_transform] duration-200 ease-linear peer-focus:-translate-y-2 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-app-green-dark peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-app-green-light">
                                        Órgão expedidor
                                    </label>
                                </div>

                                <div class="relative mb-4 sm:col-span-2">
                                    <select
                                        class="peer m-0 block h-[58px] w-full rounded border-2 border-solid border-neutral-600 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 focus:border-app-green-dark focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-700 focus:outline-none peer-focus:text-app-green-dark dark:border-neutral-600 dark:text-neutral-200 dark:focus:border-app-green-light dark:peer-focus:text-app-green-light"
                                        name="unidadeFederativaRegistroGeral" id="unidadeFederativaRegistroGeralSelect">
                                        <option hidden selected value="">Selecione um estado</option>
                                        @foreach ($unidadeFederativas as $key => $unidadeFederativa)
                                            <option value="{{ $key }}">{{ $unidadeFederativa }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="relative mb-4 sm:col-span-6">
                                    <label for="arquivoRegistroGeralInput"
                                        class="mb-2 inline-block text-neutral-700 dark:text-neutral-200">
                                        Documento de identificação com foto
                                    </label>
                                    <input accept="application/pdf" name="arquivoRegistroGeral"
                                        class="relative m-0 block w-full min-w-0 flex-auto cursor-pointer rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] font-normal leading-[2.15] text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:cursor-pointer file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                        id="arquivoRegistroGeralInput" type="file" />
                                </div>

                                <div class="relative mb-4 sm:col-span-3">
                                    <select required
                                        class="peer m-0 block h-[58px] w-full rounded border-2 border-solid border-neutral-600 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 focus:border-app-green-dark focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-700 focus:outline-none peer-focus:text-app-green-dark dark:border-neutral-600 dark:text-neutral-200 dark:focus:border-app-green-light dark:peer-focus:text-app-green-light"
                                        name="genero" id="generoSelect">
                                        <option hidden selected value="">Selecione um gênero</option>
                                        @foreach ($generos as $key => $genero)
                                            <option value="{{ $key }}">{{ $genero }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="relative mb-4 sm:col-span-3">
                                    <select required
                                        class="peer m-0 block h-[58px] w-full rounded border-2 border-solid border-neutral-600 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 focus:border-app-green-dark focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-700 focus:outline-none peer-focus:text-app-green-dark dark:border-neutral-600 dark:text-neutral-200 dark:focus:border-app-green-light dark:peer-focus:text-app-green-light"
                                        name="estadoCivil" id="estadoCivilSelect">
                                        <option hidden selected value="">Selecione um estado civil</option>
                                        @foreach ($estadosCivis as $key => $estadoCivil)
                                            <option value="{{ $key }}">{{ $estadoCivil }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="relative mb-4 sm:col-span-3" data-te-datepicker-init>
                                    <input required type="text" name="dataNascimento"
                                        class="peer m-0 block h-[58px] w-full rounded border-2 border-solid border-neutral-600 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 transition duration-200 ease-linear placeholder:text-transparent focus:border-app-green-dark focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-700 focus:outline-none peer-focus:text-app-green-dark dark:border-neutral-600 dark:text-neutral-200 dark:focus:border-app-green-light dark:peer-focus:text-app-green-light [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]"
                                        id="dataNascimentoInput" placeholder="Data de nascimento" />
                                    <label for="dataNascimentoInput"
                                        class="pointer-events-none absolute left-0 top-0 origin-[0_0] border border-solid border-transparent px-3 py-4 text-neutral-500 transition-[opacity,_transform] duration-200 ease-linear peer-focus:-translate-y-2 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-app-green-dark peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-app-green-light">
                                        Data de nascimento
                                    </label>
                                </div>

                                <div class="relative mb-4 sm:col-span-3">
                                    <select
                                        class="peer m-0 block h-[58px] w-full rounded border-2 border-solid border-neutral-600 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 focus:border-app-green-dark focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-700 focus:outline-none peer-focus:text-app-green-dark dark:border-neutral-600 dark:text-neutral-200 dark:focus:border-app-green-light dark:peer-focus:text-app-green-light"
                                        name="unidadeFederativaNascimento" id="unidadeFederativaNascimentoSelect">
                                        <option hidden selected value="">Selecione o estado de nascimento</option>
                                        @foreach ($unidadeFederativas as $key => $unidadeFederativa)
                                            <option value="{{ $key }}">{{ $unidadeFederativa }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="relative mb-4 sm:col-span-3">
                                    <input required type="text" name="cidadeNascimento"
                                        class="peer m-0 block h-[58px] w-full rounded border-2 border-solid border-neutral-600 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 transition duration-200 ease-linear placeholder:text-transparent focus:border-app-green-dark focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-700 focus:outline-none peer-focus:text-app-green-dark dark:border-neutral-600 dark:text-neutral-200 dark:focus:border-app-green-light dark:peer-focus:text-app-green-light [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]"
                                        id="cidadeNascimentoInput" placeholder="Cidade de nascimento" />
                                    <label for="cidadeNascimentoInput"
                                        class="pointer-events-none absolute left-0 top-0 origin-[0_0] border border-solid border-transparent px-3 py-4 text-neutral-500 transition-[opacity,_transform] duration-200 ease-linear peer-focus:-translate-y-2 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-app-green-dark peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-app-green-light">
                                        Cidade de nascimento
                                    </label>
                                </div>

                                <div class="relative mb-4 sm:col-span-3">
                                    <input required type="text" name="profissao"
                                        class="peer m-0 block h-[58px] w-full rounded border-2 border-solid border-neutral-600 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 transition duration-200 ease-linear placeholder:text-transparent focus:border-app-green-dark focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-700 focus:outline-none peer-focus:text-app-green-dark dark:border-neutral-600 dark:text-neutral-200 dark:focus:border-app-green-light dark:peer-focus:text-app-green-light [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]"
                                        id="profissaoInput" placeholder="Profissão atual" />
                                    <label for="profissaoInput"
                                        class="pointer-events-none absolute left-0 top-0 origin-[0_0] border border-solid border-transparent px-3 py-4 text-neutral-500 transition-[opacity,_transform] duration-200 ease-linear peer-focus:-translate-y-2 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-app-green-dark peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-app-green-light">
                                        Profissão atual
                                    </label>
                                </div>

                                <div class="relative mb-4 sm:col-span-3">
                                    <input type="text" name="planoSaude"
                                        class="peer m-0 block h-[58px] w-full rounded border-2 border-solid border-neutral-600 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 transition duration-200 ease-linear placeholder:text-transparent focus:border-app-green-dark focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-700 focus:outline-none peer-focus:text-app-green-dark dark:border-neutral-600 dark:text-neutral-200 dark:focus:border-app-green-light dark:peer-focus:text-app-green-light [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]"
                                        id="planoSaudeInput" placeholder="Plano de saúde" />
                                    <label for="planoSaudeInput"
                                        class="pointer-events-none absolute left-0 top-0 origin-[0_0] border border-solid border-transparent px-3 py-4 text-neutral-500 transition-[opacity,_transform] duration-200 ease-linear peer-focus:-translate-y-2 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-app-green-dark peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-app-green-light">
                                        Plano de saúde
                                    </label>
                                </div>

                            </div>
                        </div>
                        {{-- Informações sobre a patologia --}}
                        <div class="border-b border-gray-900/10 pb-12">
                            <h1 class="text-xl font-semibold leading-7 text-gray-900">Informações sobre a patologia
                            </h1>
                            <p class="mt-1 text-sm leading-6 text-gray-600">
                                As informções abaixo descrevem o tipo de doença que possui e nos ajuda a entender como
                                podemos te ajudar.
                            </p>
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                                <div class="relative mb-4 sm:col-span-3">
                                    <input required type="text" name="codigoInternacional"
                                        class="peer m-0 block h-[58px] w-full rounded border-2 border-solid border-neutral-600 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 transition duration-200 ease-linear placeholder:text-transparent focus:border-app-green-dark focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-700 focus:outline-none peer-focus:text-app-green-dark dark:border-neutral-600 dark:text-neutral-200 dark:focus:border-app-green-light dark:peer-focus:text-app-green-light [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]"
                                        id="codigoInternacionalInput" placeholder="CID da patologia" />
                                    <label for="codigoInternacionalInput"
                                        class="pointer-events-none absolute left-0 top-0 origin-[0_0] border border-solid border-transparent px-3 py-4 text-neutral-500 transition-[opacity,_transform] duration-200 ease-linear peer-focus:-translate-y-2 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-app-green-dark peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-app-green-light">
                                        CID da patologia
                                    </label>
                                </div>

                                <div class="relative mb-4 sm:col-span-3">
                                    <input required type="text" name="anoDiagnostico"
                                        class="peer m-0 block h-[58px] w-full rounded border-2 border-solid border-neutral-600 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 transition duration-200 ease-linear placeholder:text-transparent focus:border-app-green-dark focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-700 focus:outline-none peer-focus:text-app-green-dark dark:border-neutral-600 dark:text-neutral-200 dark:focus:border-app-green-light dark:peer-focus:text-app-green-light [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]"
                                        id="anoDiagnosticoInput" placeholder="Ano de diagnóstico" />
                                    <label for="anoDiagnosticoInput"
                                        class="pointer-events-none absolute left-0 top-0 origin-[0_0] border border-solid border-transparent px-3 py-4 text-neutral-500 transition-[opacity,_transform] duration-200 ease-linear peer-focus:-translate-y-2 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-app-green-dark peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-app-green-light">
                                        Ano de diagnóstico
                                    </label>
                                </div>

                                <div class="relative mb-4 sm:col-span-6">
                                    <textarea required name="sintomas" id="sintomasInput"
                                        class="peer m-0 block h-[58px] w-full rounded border-2 border-solid border-neutral-600 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 transition duration-200 ease-linear placeholder:text-transparent focus:border-app-green-dark focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-700 focus:outline-none peer-focus:text-app-green-dark dark:border-neutral-600 dark:text-neutral-200 dark:focus:border-app-green-light dark:peer-focus:text-app-green-light [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]"></textarea>
                                    <label for="sintomasInput"
                                        class="pointer-events-none absolute left-0 top-0 origin-[0_0] border border-solid border-transparent px-3 py-4 text-neutral-500 transition-[opacity,_transform] duration-200 ease-linear peer-focus:-translate-y-2 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-app-green-dark peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-app-green-light">
                                        Sintomas da patologia
                                    </label>
                                </div>

                            </div>
                        </div>
                        {{-- Documentos médicos --}}
                        <div class="border-b border-gray-900/10 pb-12">
                            <h1 class="text-xl font-semibold leading-7 text-gray-900">Documentos médicos</h1>
                            <p class="mt-1 text-sm leading-6 text-gray-600">
                                As informções abaixo serão usadas para validar e compreender seu estado como paciente.
                            </p>
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                                <div class="relative mb-4 sm:col-span-6">
                                    <label for="arquivoLaudoInput"
                                        class="mb-2 inline-block text-neutral-700 dark:text-neutral-200">
                                        Laúdo Médico
                                    </label>
                                    <input name="arquivoLaudo" accept="application/pdf"
                                        class="relative m-0 block w-full min-w-0 flex-auto cursor-pointer rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] font-normal leading-[2.15] text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:cursor-pointer file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                        id="arquivoLaudoInput" type="file" />
                                </div>

                                <div class="relative mb-4 sm:col-span-6">
                                    <label for="arquivoReceitaInput"
                                        class="mb-2 inline-block text-neutral-700 dark:text-neutral-200">
                                        Receita Médico
                                    </label>
                                    <input name="arquivoReceita" accept="application/pdf"
                                        class="relative m-0 block w-full min-w-0 flex-auto cursor-pointer rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] font-normal leading-[2.15] text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:cursor-pointer file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                        id="arquivoReceitaInput" type="file" />
                                </div>

                            </div>
                        </div>
                        {{-- Informações de endereço --}}
                        <div class="border-b border-gray-900/10 pb-12">
                            <h1 class="text-xl font-semibold leading-7 text-gray-900">Endereço residencial</h1>
                            <p class="mt-1 text-sm leading-6 text-gray-600">
                                As informções abaixo serão usadas para encontrar você.
                            </p>
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                                <div class="relative mb-4 sm:col-span-3">
                                    <input required type="text" name="anoDiagnostico"
                                        class="peer m-0 block h-[58px] w-full rounded border-2 border-solid border-neutral-600 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 transition duration-200 ease-linear placeholder:text-transparent focus:border-app-green-dark focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-700 focus:outline-none peer-focus:text-app-green-dark dark:border-neutral-600 dark:text-neutral-200 dark:focus:border-app-green-light dark:peer-focus:text-app-green-light [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]"
                                        id="cepInput" placeholder="CEP" />
                                    <label for="cepInput"
                                        class="pointer-events-none absolute left-0 top-0 origin-[0_0] border border-solid border-transparent px-3 py-4 text-neutral-500 transition-[opacity,_transform] duration-200 ease-linear peer-focus:-translate-y-2 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-app-green-dark peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-app-green-light">
                                        CEP
                                    </label>
                                </div>

                                <div class="relative mb-4 sm:col-span-3">
                                    <input required type="text" name="logradouro"
                                        class="peer m-0 block h-[58px] w-full rounded border-2 border-solid border-neutral-600 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 transition duration-200 ease-linear placeholder:text-transparent focus:border-app-green-dark focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-700 focus:outline-none peer-focus:text-app-green-dark dark:border-neutral-600 dark:text-neutral-200 dark:focus:border-app-green-light dark:peer-focus:text-app-green-light [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]"
                                        id="logradouroInput" placeholder="Logradouro" />
                                    <label for="logradouroInput"
                                        class="pointer-events-none absolute left-0 top-0 origin-[0_0] border border-solid border-transparent px-3 py-4 text-neutral-500 transition-[opacity,_transform] duration-200 ease-linear peer-focus:-translate-y-2 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-app-green-dark peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-app-green-light">
                                        Logradouro
                                    </label>
                                </div>

                                <div class="relative mb-4 sm:col-span-3">
                                    <input required type="text" name="bairro"
                                        class="peer m-0 block h-[58px] w-full rounded border-2 border-solid border-neutral-600 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 transition duration-200 ease-linear placeholder:text-transparent focus:border-app-green-dark focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-700 focus:outline-none peer-focus:text-app-green-dark dark:border-neutral-600 dark:text-neutral-200 dark:focus:border-app-green-light dark:peer-focus:text-app-green-light [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]"
                                        id="bairroInput" placeholder="Bairro" />
                                    <label for="bairroInput"
                                        class="pointer-events-none absolute left-0 top-0 origin-[0_0] border border-solid border-transparent px-3 py-4 text-neutral-500 transition-[opacity,_transform] duration-200 ease-linear peer-focus:-translate-y-2 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-app-green-dark peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-app-green-light">
                                        Bairro
                                    </label>
                                </div>

                                <div class="relative mb-4 sm:col-span-3">
                                    <input required type="text" name="numero"
                                        class="peer m-0 block h-[58px] w-full rounded border-2 border-solid border-neutral-600 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 transition duration-200 ease-linear placeholder:text-transparent focus:border-app-green-dark focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-700 focus:outline-none peer-focus:text-app-green-dark dark:border-neutral-600 dark:text-neutral-200 dark:focus:border-app-green-light dark:peer-focus:text-app-green-light [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]"
                                        id="numeroInput" placeholder="Número" />
                                    <label for="numeroInput"
                                        class="pointer-events-none absolute left-0 top-0 origin-[0_0] border border-solid border-transparent px-3 py-4 text-neutral-500 transition-[opacity,_transform] duration-200 ease-linear peer-focus:-translate-y-2 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-app-green-dark peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-app-green-light">
                                        Número
                                    </label>
                                </div>

                                <div class="relative mb-4 sm:col-span-3">
                                    <select
                                        class="peer m-0 block h-[58px] w-full rounded border-2 border-solid border-neutral-600 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 focus:border-app-green-dark focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-700 focus:outline-none peer-focus:text-app-green-dark dark:border-neutral-600 dark:text-neutral-200 dark:focus:border-app-green-light dark:peer-focus:text-app-green-light"
                                        name="unidadeFederativa" id="unidadeFederativaSelect">
                                        <option hidden selected value="">Selecione o estado do endereço</option>
                                        @foreach ($unidadeFederativas as $key => $unidadeFederativa)
                                            <option value="{{ $key }}">{{ $unidadeFederativa }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="relative mb-4 sm:col-span-3">
                                    <input required type="text" name="cidade"
                                        class="peer m-0 block h-[58px] w-full rounded border-2 border-solid border-neutral-600 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 transition duration-200 ease-linear placeholder:text-transparent focus:border-app-green-dark focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-700 focus:outline-none peer-focus:text-app-green-dark dark:border-neutral-600 dark:text-neutral-200 dark:focus:border-app-green-light dark:peer-focus:text-app-green-light [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]"
                                        id="cidadeInput" placeholder="Cidade" />
                                    <label for="cidadeInput"
                                        class="pointer-events-none absolute left-0 top-0 origin-[0_0] border border-solid border-transparent px-3 py-4 text-neutral-500 transition-[opacity,_transform] duration-200 ease-linear peer-focus:-translate-y-2 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-app-green-dark peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-app-green-light">
                                        Cidade
                                    </label>
                                </div>

                                <div class="relative mb-4 sm:col-span-6">
                                    <input type="text" name="complemento"
                                        class="peer m-0 block h-[58px] w-full rounded border-2 border-solid border-neutral-600 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 transition duration-200 ease-linear placeholder:text-transparent focus:border-app-green-dark focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-700 focus:outline-none peer-focus:text-app-green-dark dark:border-neutral-600 dark:text-neutral-200 dark:focus:border-app-green-light dark:peer-focus:text-app-green-light [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]"
                                        id="complementoInput" placeholder="Complemento" />
                                    <label for="complementoInput"
                                        class="pointer-events-none absolute left-0 top-0 origin-[0_0] border border-solid border-transparent px-3 py-4 text-neutral-500 transition-[opacity,_transform] duration-200 ease-linear peer-focus:-translate-y-2 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-app-green-dark peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-app-green-light">
                                        Complemento
                                    </label>
                                </div>

                            </div>
                        </div>
                        {{-- Informações de Login --}}
                        <div class="border-b border-gray-900/10 pb-12">
                            <h1 class="text-xl font-semibold leading-7 text-gray-900">Informações de login</h1>
                            <p class="mt-1 text-sm leading-6 text-gray-600">
                                As informções abaixo serão usadas para realizar login no sistema.
                            </p>
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                                <div class="relative mb-4 sm:col-span-6">
                                    <input required type="email" name="email"
                                        class="peer m-0 block h-[58px] w-full rounded border-2 border-solid border-neutral-600 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 transition duration-200 ease-linear placeholder:text-transparent focus:border-app-green-dark focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-700 focus:outline-none peer-focus:text-app-green-dark dark:border-neutral-600 dark:text-neutral-200 dark:focus:border-app-green-light dark:peer-focus:text-app-green-light [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]"
                                        id="emailInput" placeholder="Email" />
                                    <label for="emailInput"
                                        class="pointer-events-none absolute left-0 top-0 origin-[0_0] border border-solid border-transparent px-3 py-4 text-neutral-500 transition-[opacity,_transform] duration-200 ease-linear peer-focus:-translate-y-2 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-app-green-dark peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-app-green-light">
                                        Email
                                    </label>
                                </div>

                                <div class="relative mb-4 sm:col-span-3">
                                    <input required type="password" name="confirmaSenha"
                                        class="peer m-0 block h-[58px] w-full rounded border-2 border-solid border-neutral-600 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 transition duration-200 ease-linear placeholder:text-transparent focus:border-app-green-dark focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-700 focus:outline-none peer-focus:text-app-green-dark dark:border-neutral-600 dark:text-neutral-200 dark:focus:border-app-green-light dark:peer-focus:text-app-green-light [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]"
                                        id="senhaInput" placeholder="Senha" />
                                    <label for="senhaInput"
                                        class="pointer-events-none absolute left-0 top-0 origin-[0_0] border border-solid border-transparent px-3 py-4 text-neutral-500 transition-[opacity,_transform] duration-200 ease-linear peer-focus:-translate-y-2 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-app-green-dark peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-app-green-light">
                                        Senha
                                    </label>
                                </div>

                                <div class="relative mb-4 sm:col-span-3">
                                    <input required type="password"
                                        class="peer m-0 block h-[58px] w-full rounded border-2 border-solid border-neutral-600 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 transition duration-200 ease-linear placeholder:text-transparent focus:border-app-green-dark focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-700 focus:outline-none peer-focus:text-app-green-dark dark:border-neutral-600 dark:text-neutral-200 dark:focus:border-app-green-light dark:peer-focus:text-app-green-light [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]"
                                        id="confiirmaSenhaInput" placeholder="Confirme sua senha" />
                                    <label for="confiirmaSenhaInput"
                                        class="pointer-events-none absolute left-0 top-0 origin-[0_0] border border-solid border-transparent px-3 py-4 text-neutral-500 transition-[opacity,_transform] duration-200 ease-linear peer-focus:-translate-y-2 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-app-green-dark peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-app-green-light">
                                        Confirme sua senha
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
