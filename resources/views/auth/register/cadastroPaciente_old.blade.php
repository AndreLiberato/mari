<x-layout>
    <div class="mx-auto max-w-5xl px-4 py-24 sm:px-6 sm:py-32 lg:px-8">
        <form enctype="multipart/form-data" action="{{ route('cadastro.paciente.store') }}" method="POST">
            @csrf
            <div class="space-y-12">
                {{-- Informações Pessoais --}}
                <div class="border-b border-gray-900/10 pb-12">
                    <h1 class="text-xl font-semibold leading-7 text-gray-900">Informações pessoais</h1>
                    <p class="mt-1 text-sm leading-6 text-gray-600">
                        As informações abaixo servirão para entendermos mais sobre você
                    </p>
                    <div class="mt-10 space-y-4 grid grid-cols-1 gap-x-8 gap-y-8 sm:grid-cols-6">
                        <div class="relative sm:col-span-6">
                            <input required type="text" name="nomeCompleto"
                                class="@error('nomeCompleto') bg-red-500 @enderror block rounded px-2.5 py-2.5 pt-5 w-full text-base text-gray-900 dark:bg-gray-700 border-2 border-neutral-600 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-app-green-light focus:outline-none focus:ring-0 focus:border-app-green-dark peer"
                                id="nomeCompletoInput" placeholder="" />
                            <label for="nomeCompletoInput"
                                class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-[0.8] top-4 z-10 origin-[0] start-2.5 peer-focus:text-app-green-dark peer-focus:dark:text-app-green-light peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-90 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
                                Nome completo
                            </label>
                            @error('nomeCompleto')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="relative sm:col-span-3">
                            <input type="text" name="nomeSocial"
                                class="@error('nomeCompleto') bg-red-500 @enderror block rounded px-2.5 py-2.5 pt-5 w-full text-base text-gray-900 dark:bg-gray-700 border-2 border-neutral-600 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-app-green-light focus:outline-none focus:ring-0 focus:border-app-green-dark peer"
                                id="nomeSocialInput" placeholder="" />
                            <label for="nomeSocialInput"
                                class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-[0.8] top-4 z-10 origin-[0] start-2.5 peer-focus:text-app-green-dark peer-focus:dark:text-app-green-light peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-90 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
                                Nome social
                            </label>
                        </div>

                        <div class="relative sm:col-span-3">
                            <input required type="text" name="cpf"
                                class="@error('nomeCompleto') bg-red-500 @enderror block rounded px-2.5 py-2.5 pt-5 w-full text-base text-gray-900 dark:bg-gray-700 border-2 border-neutral-600 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-app-green-light focus:outline-none focus:ring-0 focus:border-app-green-dark peer"
                                id="cpfInput" placeholder="" />
                            <label for="cpfInput"
                                class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-[0.8] top-4 z-10 origin-[0] start-2.5 peer-focus:text-app-green-dark peer-focus:dark:text-app-green-light peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-90 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
                                Número do CPF
                            </label>
                        </div>

                        <div class="relative sm:col-span-2">
                            <input type="text" name="numeroRegistroGeral"
                                class="@error('nomeCompleto') bg-red-500 @enderror block rounded px-2.5 py-2.5 pt-5 w-full text-base text-gray-900 dark:bg-gray-700 border-2 border-neutral-600 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-app-green-light focus:outline-none focus:ring-0 focus:border-app-green-dark peer"
                                id="numeroRegistroGeralInput" placeholder="" />
                            <label for="numeroRegistroGeralInput"
                                class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-[0.8] top-4 z-10 origin-[0] start-2.5 peer-focus:text-app-green-dark peer-focus:dark:text-app-green-light peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-90 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
                                Número do RG
                            </label>
                        </div>

                        <div class="relative sm:col-span-2">
                            <input type="text" name="nomeExpedidorRegistroGeral"
                                class="@error('nomeCompleto') bg-red-500 @enderror block rounded px-2.5 py-2.5 pt-5 w-full text-base text-gray-900 dark:bg-gray-700 border-2 border-neutral-600 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-app-green-light focus:outline-none focus:ring-0 focus:border-app-green-dark peer"
                                id="nomeExpedidorRegistroGeralInput" placeholder="" />
                            <label for="nomeExpedidorRegistroGeralInput"
                                class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-[0.8] top-4 z-10 origin-[0] start-2.5 peer-focus:text-app-green-dark peer-focus:dark:text-app-green-light peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-90 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
                                Órgão expedidor
                            </label>
                        </div>

                        <div class="relative sm:col-span-2">
                            <select
                                class="@error('nomeCompleto') bg-red-500 @enderror peer m-0 block h-[58px] w-full rounded border-2 border-solid border-neutral-600 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 focus:border-app-green-dark focus:text-neutral-700 focus:outline-none peer-focus:text-app-green-dark dark:border-neutral-600 dark:text-neutral-200 dark:focus:border-app-green-light dark:peer-focus:text-app-green-light"
                                name="unidadeFederativaRegistroGeral" id="unidadeFederativaRegistroGeralSelect">
                                <option hidden selected value="">Selecione um estado</option>
                                @foreach ($unidadeFederativas as $key => $unidadeFederativa)
                                    <option value="{{ $key }}">{{ $unidadeFederativa }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- <div class="relative sm:col-span-6">
                                    <label for="arquivoRegistroGeralInput"
                                        class="mb-2 inline-block text-neutral-700 dark:text-neutral-200">
                                        Documento de identificação com foto
                                    </label>
                                    <input accept="application/pdf" name="arquivoRegistroGeral"
                                        class="relative m-0 block w-full min-w-0 flex-auto cursor-pointer rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] font-normal leading-[2.15] text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:cursor-pointer file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                        id="arquivoRegistroGeralInput" type="file" />
                                </div> --}}

                        <div class="relative sm:col-span-3">
                            <select required
                                class="@error('nomeCompleto') bg-red-500 @enderror peer m-0 block h-[58px] w-full rounded border-2 border-solid border-neutral-600 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 focus:border-app-green-dark focus:text-neutral-700 focus:outline-none peer-focus:text-app-green-dark dark:border-neutral-600 dark:text-neutral-200 dark:focus:border-app-green-light dark:peer-focus:text-app-green-light"
                                name="genero" id="generoSelect">
                                <option hidden selected value="">Selecione um gênero</option>
                                @foreach ($generos as $key => $genero)
                                    <option value="{{ $key }}">{{ $genero }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="relative sm:col-span-3">
                            <select required
                                class="@error('nomeCompleto') bg-red-500 @enderror peer m-0 block h-[58px] w-full rounded border-2 border-solid border-neutral-600 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 focus:border-app-green-dark focus:text-neutral-700 focus:outline-none peer-focus:text-app-green-dark dark:border-neutral-600 dark:text-neutral-200 dark:focus:border-app-green-light dark:peer-focus:text-app-green-light"
                                name="estadoCivil" id="estadoCivilSelect">
                                <option hidden selected value="">Selecione um estado civil</option>
                                @foreach ($estadosCivis as $key => $estadoCivil)
                                    <option value="{{ $key }}">{{ $estadoCivil }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="relative sm:col-span-3">
                            <input required type="date" name="dataNascimento"
                                class="@error('nomeCompleto') bg-red-500 @enderror block rounded px-2.5 py-2.5 pt-5 w-full text-base text-gray-900 dark:bg-gray-700 border-2 border-neutral-600 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-app-green-light focus:outline-none focus:ring-0 focus:border-app-green-dark peer"
                                id="dataNascimentoInput" placeholder="" />
                            <label for="dataNascimentoInput"
                                class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-[0.8] top-4 z-10 origin-[0] start-2.5 peer-focus:text-app-green-dark peer-focus:dark:text-app-green-light peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-90 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
                                Data de nascimento
                            </label>
                        </div>

                        <div class="relative sm:col-span-3">
                            <select
                                class="@error('nomeCompleto') bg-red-500 @enderror peer m-0 block h-[58px] w-full rounded border-2 border-solid border-neutral-600 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 focus:border-app-green-dark focus:text-neutral-700 focus:outline-none peer-focus:text-app-green-dark dark:border-neutral-600 dark:text-neutral-200 dark:focus:border-app-green-light dark:peer-focus:text-app-green-light"
                                name="unidadeFederativaNascimento" id="unidadeFederativaNascimentoSelect">
                                <option hidden selected value="">Selecione o estado de nascimento
                                </option>
                                @foreach ($unidadeFederativas as $key => $unidadeFederativa)
                                    <option value="{{ $key }}">{{ $unidadeFederativa }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="relative sm:col-span-3">
                            <input required type="text" name="cidadeNascimento"
                                class="@error('nomeCompleto') bg-red-500 @enderror block rounded px-2.5 py-2.5 pt-5 w-full text-base text-gray-900 dark:bg-gray-700 border-2 border-neutral-600 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-app-green-light focus:outline-none focus:ring-0 focus:border-app-green-dark peer"
                                id="cidadeNascimentoInput" placeholder="" />
                            <label for="cidadeNascimentoInput"
                                class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-[0.8] top-4 z-10 origin-[0] start-2.5 peer-focus:text-app-green-dark peer-focus:dark:text-app-green-light peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-90 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
                                Cidade de nascimento
                            </label>
                        </div>

                        <div class="relative sm:col-span-3">
                            <input required type="text" name="profissao"
                                class="@error('nomeCompleto') bg-red-500 @enderror block rounded px-2.5 py-2.5 pt-5 w-full text-base text-gray-900 dark:bg-gray-700 border-2 border-neutral-600 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-app-green-light focus:outline-none focus:ring-0 focus:border-app-green-dark peer"
                                id="profissaoInput" placeholder="" />
                            <label for="profissaoInput"
                                class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-[0.8] top-4 z-10 origin-[0] start-2.5 peer-focus:text-app-green-dark peer-focus:dark:text-app-green-light peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-90 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
                                Profissão atual
                            </label>
                        </div>

                        <div class="relative sm:col-span-3">
                            <input type="text" name="planoSaude"
                                class="@error('nomeCompleto') bg-red-500 @enderror block rounded px-2.5 py-2.5 pt-5 w-full text-base text-gray-900 dark:bg-gray-700 border-2 border-neutral-600 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-app-green-light focus:outline-none focus:ring-0 focus:border-app-green-dark peer"
                                id="planoSaudeInput" placeholder="" />
                            <label for="planoSaudeInput"
                                class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-[0.8] top-4 z-10 origin-[0] start-2.5 peer-focus:text-app-green-dark peer-focus:dark:text-app-green-light peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-90 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
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
                        <div class="relative sm:col-span-3">
                            <input required type="text" name="codigoInternacional"
                                class="block rounded px-2.5 py-2.5 pt-5 w-full text-base text-gray-900 dark:bg-gray-700 border-2 border-neutral-600 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-app-green-light focus:outline-none focus:ring-0 focus:border-app-green-dark peer"
                                id="codigoInternacionalInput" placeholder="" />
                            <label for="codigoInternacionalInput"
                                class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-[0.8] top-4 z-10 origin-[0] start-2.5 peer-focus:text-app-green-dark peer-focus:dark:text-app-green-light peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-90 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
                                CID da patologia
                            </label>
                        </div>

                        <div class="relative sm:col-span-3">
                            <input required type="text" name="anoDiagnostico"
                                class="block rounded px-2.5 py-2.5 pt-5 w-full text-base text-gray-900 dark:bg-gray-700 border-2 border-neutral-600 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-app-green-light focus:outline-none focus:ring-0 focus:border-app-green-dark peer"
                                id="anoDiagnosticoInput" placeholder="" />
                            <label for="anoDiagnosticoInput"
                                class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-[0.8] top-4 z-10 origin-[0] start-2.5 peer-focus:text-app-green-dark peer-focus:dark:text-app-green-light peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-90 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
                                Ano de diagnóstico
                            </label>
                        </div>

                        <div class="relative sm:col-span-6">
                            <textarea required name="sintomas" id="sintomasInput" placeholder=""
                                class="block rounded px-2.5 pb-2.5 pt-5 w-full text-base text-gray-900 dark:bg-gray-700 border-2 border-neutral-600 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-app-green-light focus:outline-none focus:ring-0 focus:border-app-green-dark peer"></textarea>
                            <label for="sintomasInput"
                                class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-[0.8] top-4 z-10 origin-[0] start-2.5 peer-focus:text-app-green-dark peer-focus:dark:text-app-green-light peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-90 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
                                Sintomas da patologia
                            </label>
                        </div>
                    </div>
                </div>
                {{-- Documentos médicos --}}
                {{-- <div class="border-b border-gray-900/10 pb-12">
                            <h1 class="text-xl font-semibold leading-7 text-gray-900">Documentos médicos</h1>
                            <p class="mt-1 text-sm leading-6 text-gray-600">
                                As informções abaixo serão usadas para validar e compreender seu estado como paciente.
                            </p>
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                                <div class="relative sm:col-span-6">
                                    <label for="arquivoLaudoInput"
                                        class="mb-2 inline-block text-neutral-700 dark:text-neutral-200">
                                        Laúdo Médico
                                    </label>
                                    <input name="arquivoLaudo" accept="application/pdf"
                                        class="relative m-0 block w-full min-w-0 flex-auto cursor-pointer rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] font-normal leading-[2.15] text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:cursor-pointer file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                        id="arquivoLaudoInput" type="file" />
                                </div>

                                <div class="relative sm:col-span-6">
                                    <label for="arquivoReceitaInput"
                                        class="mb-2 inline-block text-neutral-700 dark:text-neutral-200">
                                        Receita Médico
                                    </label>
                                    <input name="arquivoReceita" accept="application/pdf"
                                        class="relative m-0 block w-full min-w-0 flex-auto cursor-pointer rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] font-normal leading-[2.15] text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:cursor-pointer file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                        id="arquivoReceitaInput" type="file" />
                                </div>

                            </div>
                        </div> --}}
                {{-- Informações de endereço --}}
                <div class="border-b border-gray-900/10 pb-12">
                    <h1 class="text-xl font-semibold leading-7 text-gray-900">Endereço residencial</h1>
                    <p class="mt-1 text-sm leading-6 text-gray-600">
                        As informções abaixo serão usadas para encontrar você.
                    </p>
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="relative sm:col-span-3">
                            <input required type="text" name="cep"
                                class="block rounded px-2.5 py-2.5 pt-5 w-full text-base text-gray-900 dark:bg-gray-700 border-2 border-neutral-600 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-app-green-light focus:outline-none focus:ring-0 focus:border-app-green-dark peer"
                                id="cepInput" placeholder="" />
                            <label for="cepInput"
                                class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-[0.8] top-4 z-10 origin-[0] start-2.5 peer-focus:text-app-green-dark peer-focus:dark:text-app-green-light peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-90 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
                                CEP
                            </label>
                        </div>

                        <div class="relative sm:col-span-3">
                            <input required type="text" name="logradouro"
                                class="block rounded px-2.5 py-2.5 pt-5 w-full text-base text-gray-900 dark:bg-gray-700 border-2 border-neutral-600 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-app-green-light focus:outline-none focus:ring-0 focus:border-app-green-dark peer"
                                id="logradouroInput" placeholder="" />
                            <label for="logradouroInput"
                                class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-[0.8] top-4 z-10 origin-[0] start-2.5 peer-focus:text-app-green-dark peer-focus:dark:text-app-green-light peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-90 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
                                Logradouro
                            </label>
                        </div>

                        <div class="relative sm:col-span-3">
                            <input required type="text" name="bairro"
                                class="block rounded px-2.5 py-2.5 pt-5 w-full text-base text-gray-900 dark:bg-gray-700 border-2 border-neutral-600 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-app-green-light focus:outline-none focus:ring-0 focus:border-app-green-dark peer"
                                id="bairroInput" placeholder="" />
                            <label for="bairroInput"
                                class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-[0.8] top-4 z-10 origin-[0] start-2.5 peer-focus:text-app-green-dark peer-focus:dark:text-app-green-light peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-90 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
                                Bairro
                            </label>
                        </div>

                        <div class="relative sm:col-span-3">
                            <input required type="text" name="numero"
                                class="block rounded px-2.5 py-2.5 pt-5 w-full text-base text-gray-900 dark:bg-gray-700 border-2 border-neutral-600 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-app-green-light focus:outline-none focus:ring-0 focus:border-app-green-dark peer"
                                id="numeroInput" placeholder="" />
                            <label for="numeroInput"
                                class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-[0.8] top-4 z-10 origin-[0] start-2.5 peer-focus:text-app-green-dark peer-focus:dark:text-app-green-light peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-90 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
                                Número
                            </label>
                        </div>

                        <div class="relative sm:col-span-3">
                            <select
                                class="peer m-0 block h-[58px] w-full rounded border-2 border-solid border-neutral-600 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 focus:border-app-green-dark focus:text-neutral-700 focus:outline-none peer-focus:text-app-green-dark dark:border-neutral-600 dark:text-neutral-200 dark:focus:border-app-green-light dark:peer-focus:text-app-green-light"
                                name="unidadeFederativa" id="unidadeFederativaSelect">
                                <option hidden selected value="">Selecione o estado do endereço</option>
                                @foreach ($unidadeFederativas as $key => $unidadeFederativa)
                                    <option value="{{ $key }}">{{ $unidadeFederativa }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="relative sm:col-span-3">
                            <input required type="text" name="cidade"
                                class="block rounded px-2.5 py-2.5 pt-5 w-full text-base text-gray-900 dark:bg-gray-700 border-2 border-neutral-600 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-app-green-light focus:outline-none focus:ring-0 focus:border-app-green-dark peer"
                                id="cidadeInput" placeholder="" />
                            <label for="cidadeInput"
                                class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-[0.8] top-4 z-10 origin-[0] start-2.5 peer-focus:text-app-green-dark peer-focus:dark:text-app-green-light peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-90 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
                                Cidade
                            </label>
                        </div>

                        <div class="relative sm:col-span-6">
                            <input type="text" name="complemento"
                                class="block rounded px-2.5 py-2.5 pt-5 w-full text-base text-gray-900 dark:bg-gray-700 border-2 border-neutral-600 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-app-green-light focus:outline-none focus:ring-0 focus:border-app-green-dark peer"
                                id="complementoInput" placeholder="" />
                            <label for="complementoInput"
                                class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-[0.8] top-4 z-10 origin-[0] start-2.5 peer-focus:text-app-green-dark peer-focus:dark:text-app-green-light peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-90 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
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

                        <div class="relative sm:col-span-6">
                            <input required type="email" name="email"
                                class="@error('nomeCompleto') bg-red-500 @enderror block rounded px-2.5 py-2.5 pt-5 w-full text-base text-gray-900 dark:bg-gray-700 border-2 border-neutral-600 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-app-green-light focus:outline-none focus:ring-0 focus:border-app-green-dark peer"
                                id="emailInput" placeholder="" />
                            <label for="emailInput"
                                class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-[0.8] top-4 z-10 origin-[0] start-2.5 peer-focus:text-app-green-dark peer-focus:dark:text-app-green-light peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-90 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
                                Email
                            </label>
                        </div>

                        <div class="relative sm:col-span-3">
                            <input required type="password" name="senha"
                                class="@error('nomeCompleto') bg-red-500 @enderror block rounded px-2.5 py-2.5 pt-5 w-full text-base text-gray-900 dark:bg-gray-700 border-2 border-neutral-600 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-app-green-light focus:outline-none focus:ring-0 focus:border-app-green-dark peer"
                                id="senhaInput" placeholder="" />
                            <label for="senhaInput"
                                class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-[0.8] top-4 z-10 origin-[0] start-2.5 peer-focus:text-app-green-dark peer-focus:dark:text-app-green-light peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-90 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
                                Senha
                            </label>
                        </div>

                        <div class="relative sm:col-span-3">
                            <input required type="password" name="confirmaSenha"
                                class="@error('nomeCompleto') bg-red-500 @enderror block rounded px-2.5 py-2.5 pt-5 w-full text-base text-gray-900 dark:bg-gray-700 border-2 border-neutral-600 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-app-green-light focus:outline-none focus:ring-0 focus:border-app-green-dark peer"
                                id="confirmaSenhaInput" placeholder="" />
                            <label for="confirmaSenhaInput"
                                class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-[0.8] top-4 z-10 origin-[0] start-2.5 peer-focus:text-app-green-dark peer-focus:dark:text-app-green-light peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-90 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
                                Confirme sua senha
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-between pt-12 pb-6">
                <a href="{{ route('home') }}"
                    class="inline-block rounded border-2 border-app-green-dark px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-app-green-dark transition duration-150 ease-in-out hover:bg-app-green-vivid hover:bg-opacity-10 focus:outline-none focus:ring-0 dark:border-app-green-light dark:text-app-green-light dark:hover:bg-app-green-dark dark:hover:bg-opacity-10"
                    data-te-ripple-init data-te-ripple-color="light">
                    Voltar para a home
                </a>
                <button type="submit"
                    class="inline-block rounded border-2 border-app-green-dark px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-app-green-dark transition duration-150 ease-in-out hover:bg-app-green-vivid hover:bg-opacity-10 focus:outline-none focus:ring-0 dark:border-app-green-light dark:text-app-green-light dark:hover:bg-app-green-dark dark:hover:bg-opacity-10"
                    data-te-ripple-init data-te-ripple-color="light">Enviar</button>
            </div>
        </form>
    </div>
</x-layout>
