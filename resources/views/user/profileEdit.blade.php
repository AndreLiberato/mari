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

<body>
    <header>
        <nav class="flex w-full h-15 lg:h-20 flex-wrap items-center justify-between bg-white text-neutral-500 shadow-lg hover:text-neutral-700 focus:text-neutral-700 dark:bg-neutral-600"
            data-te-navbar-ref>
            <div class="flex w-full flex-wrap items-center justify-between py-2 lg:py-4 px-2 lg:px-6">
                <div class="flex  lg:hidden">
                    <button
                        class="inline-block rounded text-xs font-medium uppercase leading-tight text-neutral-900 shadow-md transition duration-150 ease-in-out hover:bg-gradient-to-l from-[#B0F291] to-[#04BF68] hover:opacity-30  hover:shadow-lg focus:bg-white focus:shadow-lg focus:outline-none focus:ring-0 active:white active:shadow-lg">
                        <span class="flex text-neutral-500 hover:text-white text-xl font-extrabold cursor-pointer"
                            onclick="Open()">
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

    <section>
        <div class="w-full h-[calc(100vh-48px)] lg:h-[calc(100vh-80px)] lg:grid lg:grid-cols-8">
            <div
                class="sidebar fixed lg:flex lg:col-start-1 lg:col-span-1 h-[calc(100vh-48px)] lg:h-[calc(100vh-80px)] lg:left-0 left-[-300px] bg-gradient-to-r from-[#B0F291] to-[#04BF68] shadow">
                <div class="text-black font-medium">
                    <div class="pt-4">
                        <div
                            class="pl-[18px] pr-7 py-1 flex items-center duration-300 cursor-pointer  hover:bg-white hover:bg-opacity-70">
                            <i class="bi bi-shield-lock-fill"></i>
                            <span class="mx-2 my-2 text-sm text-black">Acesso</span>
                        </div>
                        <div
                            class="pl-[18px] pr-7 py-1 flex items-center duration-300 cursor-pointer  hover:bg-white hover:bg-opacity-70">
                            <i class="bi bi-heart-fill"></i>
                            <span class="mx-2 my-[4px] text-sm text-black">Paciente</span>
                        </div>
                        <div
                            class="pl-[18px] pr-7 py-1 flex items-center duration-300 cursor-pointer  hover:bg-white hover:bg-opacity-70">
                            <i class="bi bi-person-fill"></i>
                            <span class="mx-2 my-[5px] text-sm text-black">Pessoal</span>
                        </div>
                        <div
                            class="pl-[18px] pr-7 py-1 flex items-center duration-300 cursor-pointer  hover:bg-white hover:bg-opacity-70">
                            <i class="bi bi-droplet-fill"></i>
                            <span class="mx-2 my-[5px] text-sm text-black">Patologia</span>
                        </div>
                        <div
                            class="pl-[18px] pr-7 py-1 flex items-center duration-300 cursor-pointer  hover:bg-white hover:bg-opacity-70">
                            <i class="bi bi-file-earmark-medical-fill"></i>
                            <span class="mx-2 my-1.5 text-sm text-black">Documentos</span>
                        </div>
                        <div
                            class="pl-[18px] pr-7 py-1 flex items-center duration-300 cursor-pointer  hover:bg-white hover:bg-opacity-70">
                            <i class="bi bi-telephone-fill"></i>
                            <span class="mx-2 my-1.5 text-sm text-black">Contatos</span>
                        </div>
                        <div
                            class="pl-[18px] pr-7 py-1 flex items-center  duration-300 cursor-pointer  hover:bg-white hover:bg-opacity-70">
                            <i class="bi bi-bell-fill"></i>
                            <span class="mx-2 my-1.5 text-sm text-black">Notificações</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="px-8 py-6 col-start-2 col-span-7">
                <div>
                    <div class="col-span-full">
                        <label for="photo" class="block text-sm font-medium leading-6 text-gray-900">Foto de Perfil</label>                        <div class="mt-2 flex items-center gap-x-3">
                            <svg class="h-[120px] w-[120px] text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <button type="button"
                                class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Alterar Foto</button>
                        </div>
                    </div>
                    <div>
                        <label for="username" class="block text-sm font-medium  text-gray-900">Nome de Usuario</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="username" id="username" autocomplete="username"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Senha</label>
                        <div class="mt-2">
                            <input type="password" name="password" id="password"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Confirmar
                            senha</label>
                        <div class="mt-2">
                            <input type="password" name="password" id="password"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                </div>
            </div>
    </section>


    <script>
        function Open() {
            document.querySelector('.sidebar').classList.toggle('left-[-300px]')
        }

        function Close() {
            document.querySelector('.sidebar').classList.toggle('left-[-300px]')
        }
    </script>
</body>

</html>
