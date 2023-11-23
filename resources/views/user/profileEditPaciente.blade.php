<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body onload="EnableAccess()">
    <header>
        <nav class="fixed w-full h-15 lg:h-20 flex-wrap items-center justify-between bg-white text-neutral-500 shadow-lg hover:text-neutral-700 focus:text-neutral-700 dark:bg-neutral-600"
            data-te-navbar-ref>
            <div class="flex w-full flex-wrap items-center justify-between py-2 lg:py-4 px-2 lg:px-6">
                <div class="flex  lg:hidden">
                    <button
                        class="inline-block rounded text-xs font-medium uppercase leading-tight text-neutral-900 shadow-md transition duration-150 ease-in-out hover:bg-gradient-to-l from-[#B0F291] to-[#04BF68] hover:opacity-30  hover:shadow-lg focus:bg-white focus:shadow-lg focus:outline-none focus:ring-0 active:white active:shadow-lg">
                        <span class="flex text-neutral-500 hover:text-white text-xl font-extrabold cursor-pointer"
                            onclick="Button()">
                            <i class="bi bi-filter-left px-1 rounded-md"></i>
                        </span>
                    </button>
                </div>
                <div>
                    <a class="flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 w-8 h-8 lg:w-10 lg:h-10"
                        href="#">
                        <img class="w-10" src="{{ asset('img/logo_marijuana.png') }}" alt="logo_marijuana">

                    </a>
                </div>
                <div class="hidden lg:flex flex-grow items-center" data-te-collapse-item>
                    <ul class="list-style-none flex" data-te-navbar-nav-ref>
                        <li class="my-0 pl-2 pr-1" data-te-nav-item-ref>
                            <p class="text-neutral-600 disabled:text-black/30 dark:text-neutral-200  lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                                aria-current="page" href="#" data-te-nav-link-ref>
                                Área do Associado / Paciente / Editar Perfil
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="hidden lg:flex">
                    <a class="hidden-arrow flex items-center whitespace-nowrap transition duration-150 ease-in-out motion-reduce:transition-none h-10 w-10"
                        href="#" id="dropdownMenuButton2" role="button" data-te-dropdown-toggle-ref
                        aria-expanded="false">
                        <img src="https://tecdn.b-cdn.net/img/new/avatars/2.jpg" class="rounded-full"
                            alt="Foto de perfil do associado" loading="lazy" />
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <section class="pt-[48px] lg:pt-[80px]">
        <div class="w-full h-[calc(100vh-48px)] lg:h-[calc(100vh-80px)] lg:grid lg:grid-cols-8">
            <div
                class="sidebar fixed lg:flex lg:col-start-1 lg:col-span-1 h-[calc(100vh-48px)] lg:h-[calc(100vh-80px)] lg:left-0 left-[-300px] bg-gradient-to-r from-[#B0F291] to-[#04BF68] shadow">
                <div class="text-black font-medium">
                    <div class="pt-4">
                        <div class="pl-[18px] pr-7 py-1 flex items-center duration-300 cursor-pointer  hover:bg-white hover:bg-opacity-70"
                            onclick="EnableAccess()">
                            <i class="bi bi-shield-lock-fill"></i>
                            <span class="mx-2 my-2 text-sm text-black">Acesso</span>
                        </div>
                        <div class="pl-[18px] pr-7 py-1 flex items-center duration-300 cursor-pointer  hover:bg-white hover:bg-opacity-70"
                            onclick="EnablePacient()">
                            <i class="bi bi-heart-fill"></i>
                            <span class="mx-2 my-[4px] text-sm text-black">Paciente</span>
                        </div>
                        <div class="pl-[18px] pr-7 py-1 flex items-center duration-300 cursor-pointer  hover:bg-white hover:bg-opacity-70"
                            onclick="EnablePersonal()">
                            <i class="bi bi-person-fill"></i>
                            <span class="mx-2 my-[5px] text-sm text-black">Pessoal</span>
                        </div>
                        <div class="pl-[18px] pr-7 py-1 flex items-center duration-300 cursor-pointer  hover:bg-white hover:bg-opacity-70"
                            onclick="EnablePatology()">
                            <i class="bi bi-droplet-fill"></i>
                            <span class="mx-2 my-[5px] text-sm text-black">Patologia</span>
                        </div>
                        <div class="pl-[18px] pr-7 py-1 flex items-center duration-300 cursor-pointer  hover:bg-white hover:bg-opacity-70"
                            onclick="EnableDocuments()">
                            <i class="bi bi-file-earmark-medical-fill"></i>
                            <span class="mx-2 my-1.5 text-sm text-black">Documentos</span>
                        </div>
                        <div class="pl-[18px] pr-7 py-1 flex items-center duration-300 cursor-pointer  hover:bg-white hover:bg-opacity-70"
                            onclick="EnableContacts()">
                            <i class="bi bi-telephone-fill"></i>
                            <span class="mx-2 my-1.5 text-sm text-black">Contatos</span>
                        </div>
                        <div class="pl-[18px] pr-7 py-1 flex items-center  duration-300 cursor-pointer  hover:bg-white hover:bg-opacity-70"
                            onclick="EnableNotifications()">
                            <i class="bi bi-bell-fill"></i>
                            <span class="mx-2 my-1.5 text-sm text-black">Notificações</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="px-8 py-6 col-start-2 col-span-7" onclick="Close()">
                <div id="access" class="lg:pl-10 lg:py-5">
                    <div class="text-gray-900 text-2xl font-bold pb-4">
                        <h1>Informações de Acesso</h1>
                    </div>
                    <div class="sm:col-span-3 pt-6">
                        <label for="username" class="block text-sm font-medium text-gray-900">Nome de Usuario</label>
                        <div class="mt-2 w-full lg:w-[35%]">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="username" id="username" autocomplete="username"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>

                    <div class="sm:col-span-3 pt-6">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Senha</label>
                        <div class="mt-2 w-full lg:w-[35%]">
                            <input type="password" name="password" id="password"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3 pt-6">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Confirmar
                            senha</label>
                        <div class="mt-2 w-full lg:w-[35%]">
                            <input type="password" name="password" id="password"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3 pt-12">
                        <button type="button"
                            class="rounded-md bg-[#04BF68] w-[30%] lg:w-[8%] px-2.5 py-1.5 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-[#04BF68] hover:bg-opacity-70 active:bg-green-800">Salvar</button>
                        <button type="button"
                            class="rounded-md bg-red-500 w-[30%] lg:w-[8%] px-2.5 py-1.5 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-red-400 active:bg-red-800">Cancelar</button>
                    </div>
                </div>
                <div id="pacient" class="lg:pl-10 lg:py-5">
                    <div class="text-gray-900 text-2xl font-bold pb-4">
                        <h1>Informações do Paciente</h1>
                    </div>
                    <div class="sm:col-span-3 pt-6">
                        <label for="first-name"
                            class="disabled block text-sm font-medium leading-6 text-gray-900">Nome social</label>
                        <div class="mt-2 w-full lg:w-[35%]">
                            <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-0.5 focus:ring-inset focus:ring-neutral-500 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3 pt-6">
                        <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Nome do
                            paciente</label>
                        <div class="mt-2 w-full lg:w-[35%]">
                            <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3 pt-6">
                        <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Nome do
                            médico</label>
                        <div class="mt-2 w-full lg:w-[35%]">
                            <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3 pt-6">
                        <label for="first-name"
                            class="block text-sm font-medium leading-6 text-gray-900">CRM/UF</label>
                        <div class="mt-2 w-full lg:w-[35%]">
                            <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3 pt-12">
                        <button type="button"
                            class="rounded-md bg-[#04BF68] w-[30%] lg:w-[8%] px-2.5 py-1.5 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-[#04BF68] hover:bg-opacity-70 active:bg-green-800">Salvar</button>
                        <button type="button"
                            class="rounded-md bg-red-500 w-[30%] lg:w-[8%] px-2.5 py-1.5 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-red-400 active:bg-red-800">Cancelar</button>
                    </div>
                </div>
                <div id="personal" class="lg:pl-10 lg:py-5">
                    <div class="text-gray-900 text-2xl font-bold pb-4">
                        <h1>Informações Pessoais</h1>
                    </div>
                    <div class="col-span-full pt-6">
                        <label for="photo" class="block text-sm font-medium leading-6 text-gray-900">Foto de
                            Perfil</label>
                        <div class="mt-2 w-full lg:w-[35%] flex items-center gap-x-3">
                            <svg class="h-[120px] w-[120px] text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <button type="button"
                                class="ml-2 rounded-md bg-[#04BF68] px-2 py-1.5 text-xs font-semibold text-white shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-[#04BF68] hover:bg-opacity-70 active:bg-green-600">Alterar
                                Foto</button>
                        </div>
                    </div>
                    <div class="col-span-full pt-6">
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Endereço de
                            email</label>
                        <div class="mt-2 w-full lg:w-[35%]">
                            <input id="email" name="email" type="email" autocomplete="email"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3 pt-6">
                        <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">CPF</label>
                        <div class="mt-2 w-full lg:w-[35%]">
                            <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3 pt-6">
                        <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">RG</label>
                        <div class="mt-2 w-full lg:w-[35%]">
                            <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3 pt-6">
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Orgão
                            Expedidor</label>
                        <div class="mt-2 w-full lg:w-[35%]">
                            <input id="email" name="email" type="email" autocomplete="email"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3 pt-6">
                        <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Orgão
                            Expedidor UF</label>

                        <div class="mt-2 w-full lg:w-[35%]">
                            <select id="country" name="country" autocomplete="country-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                <option value=""></option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            </select>
                        </div>
                    </div>

                    <div class="sm:col-span-3 pt-6">
                        <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Gênero do
                            Responsável</label>

                        <div class="mt-2 w-full lg:w-[35%]">
                            <select id="state" name="state" autocomplete="state-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                <option value=""></option>
                                <option>Masculino</option>
                                <option>Feminino</option>
                                <option>Prefiro Não Informar</option>
                            </select>
                        </div>
                    </div>

                    <div class="sm:col-span-3 pt-6">
                        <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Estado
                            Civil</label>

                        <div class="mt-2 w-full lg:w-[35%]">
                            <select id="country" name="country" autocomplete="country-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                <option value=""></option>
                                <option value="Solteiro">Solteiro</option>
                                <option value="Casado">Casado</option>
                                <option value="Separado">Separado</option>
                                <option value="Divorciado">Divorciado</option>
                                <option value="Viúvo">Viúvo</option>
                                <option value="Amasiado">Amasiado</option>
                            </select>
                        </div>
                    </div>

                    <div class="sm:col-span-3 pt-6">
                        <label for="street-address" class="block text-sm font-medium leading-6 text-gray-900">Data de
                            Nascimento</label>
                        <div class="mt-2 w-full lg:w-[35%]">
                            <input type="date" name="street-address" id="street-address"
                                autocomplete="street-address"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3 pt-6">
                        <label for="street-address" class="block text-sm font-medium leading-6 text-gray-900">UF de
                            Nascimento</label>
                        <div class="mt-2 w-full lg:w-[35%]">
                            <select id="country" name="country" autocomplete="country-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                <option value=""></option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            </select>
                        </div>
                    </div>

                    <div class="sm:col-span-3 pt-6">
                        <label for="street-address" class="block text-sm font-medium leading-6 text-gray-900">Cidade
                            de Nascimento</label>
                        <div class="mt-2 w-full lg:w-[35%]">
                            <input type="text" name="street-address" id="street-address"
                                autocomplete="street-address"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3 pt-6">
                        <label for="street-address"
                            class="block text-sm font-medium leading-6 text-gray-900">Profissão</label>
                        <div class="mt-2 w-full lg:w-[35%]">
                            <input type="text" name="street-address" id="street-address"
                                autocomplete="street-address"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="col-span-ful pt-6">
                        <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900">Plano de
                            Saúde</label>
                        <div class="mt-2 w-full lg:w-[35%]">
                            <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3 pt-12">
                        <button type="button"
                            class="rounded-md bg-[#04BF68] w-[30%] lg:w-[8%] px-2.5 py-1.5 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-[#04BF68] hover:bg-opacity-70 active:bg-green-800">Salvar</button>
                        <button type="button"
                            class="rounded-md bg-red-500 w-[30%] lg:w-[8%] px-2.5 py-1.5 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-red-400 active:bg-red-800">Cancelar</button>
                    </div>
                </div>
                <div id="patology" class="lg:pl-10 lg:py-5">
                    <div class="text-gray-900 text-2xl font-bold pb-4">
                        <h1>Informações da Patologia</h1>
                    </div>
                    <div class="sm:col-span-3 pt-6">
                        <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">CID da
                            Patologia</label>
                        <div class="mt-2 w-full lg:w-[35%]">
                            <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3 pt-6">
                        <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Ano do
                            diagnóstico</label>
                        <div class="mt-2 w-full lg:w-[35%]">
                            <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="col-span-full pt-6">
                        <label for="about"
                            class="block text-sm font-medium leading-6 text-gray-900">Sintomas</label>
                        <div class="mt-2 w-full lg:w-[35%]">
                            <textarea id="about" name="about" rows="3"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                        </div>
                    </div>

                    <div class="sm:col-span-3 pt-12">
                        <button type="button"
                            class="rounded-md bg-[#04BF68] w-[30%] lg:w-[8%] px-2.5 py-1.5 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-[#04BF68] hover:bg-opacity-70 active:bg-green-800">Salvar</button>
                        <button type="button"
                            class="rounded-md bg-red-500 w-[30%] lg:w-[8%] px-2.5 py-1.5 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-red-400 active:bg-red-800">Cancelar</button>
                    </div>
                </div>
                <div id="documents" class="lg:pl-10 lg:py-5">
                    <div class="text-gray-900 text-2xl font-bold pb-4">
                        <h1>Documentação</h1>
                    </div>
                    <div class="sm:col-span-3 pt-6">
                        <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Receita
                            Médica</label>
                        <div class="mt-2 w-full lg:w-[35%]">
                            <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3 pt-6">
                        <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Laudo
                            Médico</label>
                        <div class="mt-2 w-full lg:w-[35%]">
                            <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3 pt-6">
                        <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Documento de
                            Identificação</label>
                        <div class="mt-2 w-full lg:w-[35%]">
                            <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3 pt-12">
                        <button type="button"
                            class="rounded-md bg-[#04BF68] w-[30%] lg:w-[8%] px-2.5 py-1.5 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-[#04BF68] hover:bg-opacity-70 active:bg-green-800">Salvar</button>
                        <button type="button"
                            class="rounded-md bg-red-500 w-[30%] lg:w-[8%] px-2.5 py-1.5 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-red-400 active:bg-red-800">Cancelar</button>
                    </div>
                </div>
                <div id="contacts" class="lg:pl-10 lg:py-5">
                    <div class="text-gray-900 text-2xl font-bold pb-4">
                        <h1>Contatos</h1>
                    </div>
                    <div class="sm:col-span-3 pt-6">
                        <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Telefone
                            Residencial</label>
                        <div class="mt-2 w-full lg:w-[35%]">
                            <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3 pt-6">
                        <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Telefone
                            móvel</label>
                        <div class="mt-2 w-full lg:w-[35%]">
                            <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-3 pt-6">
                        <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Email
                            Principal</label>
                        <div class="mt-2 w-full lg:w-[35%]">
                            <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3 pt-6">
                        <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Email
                            Alternativo</label>
                        <div class="mt-2 w-full lg:w-[35%]">
                            <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3 pt-12">
                        <button type="button"
                            class="rounded-md bg-[#04BF68] w-[30%] lg:w-[8%] px-2.5 py-1.5 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-[#04BF68] hover:bg-opacity-70 active:bg-green-800">Salvar</button>
                        <button type="button"
                            class="rounded-md bg-red-500 w-[30%] lg:w-[8%] px-2.5 py-1.5 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-red-400 active:bg-red-800">Cancelar</button>
                    </div>
                </div>
                <div id="notifications" class="lg:pl-10 lg:py-5">
                    <div class="text-gray-900 text-2xl font-bold pb-4">
                        <h1>Notificações</h1>
                    </div>
                    <fieldset>
                        <legend class="text-sm pt-1 font-semibold leading-6 text-gray-900">Por e-mail</legend>
                        <div class="mt-3 space-y-2">
                            <div class="flex gap-x-3">
                                <div class="flex h-6 items-center">
                                    <input id="comments" name="comments" type="checkbox"
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                </div>
                                <div class="text-sm leading-6">
                                    <label for="comments" class="font-medium text-gray-900">Comments</label>
                                    <p class="text-gray-500">Get notified when someones posts a comment on a posting.
                                    </p>
                                </div>
                            </div>
                            <div class="flex gap-x-3">
                                <div class="flex h-6 items-center">
                                    <input id="candidates" name="candidates" type="checkbox"
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                </div>
                                <div class="text-sm leading-6">
                                    <label for="candidates" class="font-medium text-gray-900">Candidates</label>
                                    <p class="text-gray-500">Get notified when a candidate applies for a job.</p>
                                </div>
                            </div>
                            <div class="flex gap-x-3">
                                <div class="flex h-6 items-center">
                                    <input id="offers" name="offers" type="checkbox"
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                </div>
                                <div class="text-sm leading-6">
                                    <label for="offers" class="font-medium text-gray-900">Offers</label>
                                    <p class="text-gray-500">Get notified when a candidate accepts or rejects an offer.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend class="text-sm pt-6 font-semibold leading-6 text-gray-900">Push Notifications</legend>
                        <p class="mt-1 text-sm leading-6 text-gray-600">These are delivered via SMS to your mobile
                            phone.</p>
                        <div class="mt-3 space-y-2">
                            <div class="flex items-center gap-x-3">
                                <input id="push-everything" name="push-notifications" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="push-everything"
                                    class="block text-sm font-medium leading-6 text-gray-900">Everything</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input id="push-email" name="push-notifications" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="push-email" class="block text-sm font-medium leading-6 text-gray-900">Same
                                    as email</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input id="push-nothing" name="push-notifications" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="push-nothing" class="block text-sm font-medium leading-6 text-gray-900">No
                                    push notifications</label>
                            </div>
                        </div>
                    </fieldset>

                    <div class="sm:col-span-3 pt-12">
                        <button type="button"
                            class="rounded-md bg-[#04BF68] w-[30%] lg:w-[8%] px-2.5 py-1.5 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-[#04BF68] hover:bg-opacity-70 active:bg-green-800">Salvar</button>
                        <button type="button"
                            class="rounded-md bg-red-500 w-[30%] lg:w-[8%] px-2.5 py-1.5 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-red-400 active:bg-red-800">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        function Button() {
            document.querySelector('.sidebar').classList.toggle('left-[-300px]')
        }
        
        function Close(){
            document.querySelector('.sidebar').classList.add('left-[-300px]')
        }

        function EnableAccess() {
            document.querySelector('#access').classList.remove('hidden');
            document.querySelector('#pacient').classList.add('hidden');
            document.querySelector('#personal').classList.add('hidden');
            document.querySelector('#patology').classList.add('hidden');
            document.querySelector('#documents').classList.add('hidden')
            document.querySelector('#contacts').classList.add('hidden')
            document.querySelector('#notifications').classList.add('hidden')

        }

        function EnablePacient() {
            document.querySelector('#access').classList.add('hidden')
            document.querySelector('#pacient').classList.remove('hidden');
            document.querySelector('#personal').classList.add('hidden')
            document.querySelector('#patology').classList.add('hidden')
            document.querySelector('#documents').classList.add('hidden')
            document.querySelector('#contacts').classList.add('hidden')
            document.querySelector('#notifications').classList.add('hidden')
        }

        function EnablePersonal() {
            document.querySelector('#access').classList.add('hidden')
            document.querySelector('#pacient').classList.add('hidden')
            document.querySelector('#personal').classList.remove('hidden');
            document.querySelector('#patology').classList.add('hidden')
            document.querySelector('#documents').classList.add('hidden')
            document.querySelector('#contacts').classList.add('hidden')
            document.querySelector('#notifications').classList.add('hidden')
        }

        function EnablePatology() {
            document.querySelector('#access').classList.add('hidden')
            document.querySelector('#pacient').classList.add('hidden')
            document.querySelector('#personal').classList.add('hidden')
            document.querySelector('#patology').classList.remove('hidden');
            document.querySelector('#documents').classList.add('hidden')
            document.querySelector('#contacts').classList.add('hidden')
            document.querySelector('#notifications').classList.add('hidden')
        }

        function EnableDocuments() {
            document.querySelector('#access').classList.add('hidden')
            document.querySelector('#pacient').classList.add('hidden')
            document.querySelector('#personal').classList.add('hidden')
            document.querySelector('#patology').classList.add('hidden');
            document.querySelector('#documents').classList.remove('hidden')
            document.querySelector('#contacts').classList.add('hidden')
            document.querySelector('#notifications').classList.add('hidden')
        }

        function EnableContacts() {
            document.querySelector('#access').classList.add('hidden')
            document.querySelector('#pacient').classList.add('hidden')
            document.querySelector('#personal').classList.add('hidden')
            document.querySelector('#patology').classList.add('hidden');
            document.querySelector('#documents').classList.add('hidden')
            document.querySelector('#contacts').classList.remove('hidden')
            document.querySelector('#notifications').classList.add('hidden')
        }

        function EnableNotifications() {
            document.querySelector('#access').classList.add('hidden')
            document.querySelector('#pacient').classList.add('hidden')
            document.querySelector('#personal').classList.add('hidden')
            document.querySelector('#patology').classList.add('hidden');
            document.querySelector('#documents').classList.add('hidden')
            document.querySelector('#contacts').classList.add('hidden')
            document.querySelector('#notifications').classList.remove('hidden')
        }
    </script>
</body>

</html>
