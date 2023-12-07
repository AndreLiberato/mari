<x-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-4xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Cadastro de paciente</h2>
            <form action="{{ route('paciente.store') }}" method="POST">
                @csrf
                <div class="grid gap-4 sm:grid-cols-6 sm:gap-6">
                    <div class="sm:col-span-4">
                        <label for="nomeCompletoInput"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Nome completo <span class="text-red-600">*</span>
                        </label>
                        <input type="text" name="nomeCompleto" id="nomeCompletoInput"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Insira seu nome completo" required>
                        @error('nomeCompleto')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Vixe!
                                </span>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <label for="generoSelect"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Gênero <span class="text-red-600">*</span>
                        </label>
                        <select name="genero" id="generoSelect"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required>
                            <option value="" selected>Selecione seu Gênero</option>
                            @foreach ($generos as $key => $genero)
                                <option value="{{ $key }}">{{ $genero }}</option>
                            @endforeach
                        </select>
                        @error('genero')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Vixe!
                                </span>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <label for="cpfInput"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            CPF <span class="text-red-600">*</span>
                        </label>
                        <input type="text" name="cpf" id="cpfInput"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Insira seu CPF"
                            required>
                        @error('cpf')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Vixe!
                                </span>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <label for="nomeSocialInput"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Nome Social
                        </label>
                        <input type="text" name="nomeSocial" id="nomeSocialInput"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Insira seu Nome Social">
                        @error('nomeSocial')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Vixe!
                                </span>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <label for="estadoCivilSelect"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Estado Civil <span class="text-red-600">*</span>
                        </label>
                        <select name="estadoCivil" id="estadoCivilSelect"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required>
                            <option value="" selected>Selecione um Estado Civil</option>
                            @foreach ($estadosCivis as $key => $estadoCivil)
                                <option value="{{ $key }}">{{ $estadoCivil }}</option>
                            @endforeach
                        </select>
                        @error('estadoCivil')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Vixe!
                                </span>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <label for="unidadeFederativaNascimentoSelect"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            UF de Nascimento <span class="text-red-600">*</span>
                        </label>
                        <select name="unidadeFederativaNascimento" id="unidadeFederativaNascimentoSelect"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required>
                            <option value="" selected>Selecione sua UF de Nascimento</option>
                            @foreach ($unidadeFederativas as $key => $unidadeFederativa)
                                <option value="{{ $key }}">{{ $unidadeFederativa }}</option>
                            @endforeach
                        </select>
                        @error('unidadeFederativaNascimento')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Vixe!
                                </span>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <label for="cidadeNascimentoInput"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Cidade de Nascimento <span class="text-red-600">*</span>
                        </label>
                        <input type="text" name="cidadeNascimento" id="cidadeNascimentoInput"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Insira sua Cidade de Nascimento" required>
                        @error('cidadeNascimento')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Vixe!
                                </span>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <label for="dataNascimentoInput"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Data de Nascimento <span class="text-red-600">*</span>
                        </label>
                        <input datepicker datepicker-format="yyyy-mm-dd" type="text" name="dataNascimento"
                            id="dataNascimentoInput"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Selecione uma Data" required>
                        @error('dataNascimento')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Vixe!
                                </span>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <label for="profissaoInput"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Profissão
                        </label>
                        <input type="text" name="profissao" id="profissaoInput"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Insira sua Profissão">
                        @error('profissao')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Vixe!
                                </span>{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="sm:col-span-4">
                        <label for="planoSaudeInput"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Plano de Saúde
                        </label>
                        <input type="text" name="planoSaude" id="planoSaudeInput"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Insira seu Plano de Saúde">
                        @error('planoSaude')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Vixe!
                                </span>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="sm:col-span-3">
                        <label for="emailInput" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Endereço de Email <span class="text-red-600">*</span>
                        </label>
                        <input type="email" name="email" id="emailInput"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Insira seu endereço de email" required>
                        @error('email')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Vixe!
                                </span>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="sm:col-span-3">
                        <label for="senhaInput" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Senha <span class="text-red-600">*</span>
                        </label>
                        <input type="password" name="senha" id="senhaInput"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="••••••••" required>
                        @error('senha')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Vixe!
                                </span>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="sm:col-span-4 flex items-start">
                        <div class="flex items-center h-5">
                            <input name="termos" id="termosCheckbox" aria-describedby="termos" value="aceito" type="checkbox"
                                class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
                                required>
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="termosCheckbox" class="font-light text-gray-500 dark:text-gray-300">
                                Estou estou ciente e concordo com os <a
                                    class="font-medium text-primary-600 hover:underline dark:text-primary-500"
                                    href="#">Termos e Condições</a>.</label>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end">
                    <button type="submit"
                        class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                        Enviar dados
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-layout>
