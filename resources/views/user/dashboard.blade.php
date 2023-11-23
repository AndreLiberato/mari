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
        <nav id="navbar" class="fixed flex flex-wrap items-center justify-between w-full h-12 lg:h-20 bg-[#FBFBFB] text-neutral-500 shadow-lg dark:bg-neutral-600" data-te-navbar-ref>
            <div id="navbar-content" class="flex w-full flex-wrap items-center justify-between py-2 lg:py-2 px-2 lg:px-4">
                <div id="sidenav-button" class="flex lg:hidden">
                    <button class="inline-block rounded text-xs font-medium uppercase leading-tight text-neutral-900 shadow-md transition duration-150 ease-in-out hover:bg-[#04BF68] hover:opacity-45  hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-1 focus:ring-[#04BF68] active:bg-[#04BF68] active:opacity-30 active:shadow-lg" onclick="Button()">
                        <span class="flex text-neutral-500 hover:text-white text-xl font-extrabold cursor-pointer">
                            <i class="bi bi-filter-left px-1 rounded-md"></i>
                        </span>
                    </button>
                </div>
                <div id="logo">
                    <a class="flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 w-7 h-7 lg:w-10 lg:h-9" href="#">
                        <img src="{{ asset('img/logo_marijuana.png') }}" alt="logo_marijuana">
                    </a>
                </div>
                <div id="page-description" class="hidden lg:flex flex-grow items-center" data-te-collapse-item>
                    <ul class="list-style-none flex" data-te-navbar-nav-ref>
                        <li class="my-0 pl-2 pr-1" data-te-nav-item-ref>
                            <p class="text-neutral-600 disabled:text-black/30 dark:text-neutral-200  lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                                aria-current="page" href="#" data-te-nav-link-ref>
                                Área do Associado / Paciente
                            </p>
                        </li>
                    </ul>
                </div>
                <div id="user-profile" class="hidden lg:flex">
                    <a class="hidden-arrow flex items-center whitespace-nowrap transition duration-150 ease-in-out motion-reduce:transition-none h-12 w-12" href="#" id="dropdownMenuButton2" role="button" data-te-dropdown-toggle-ref aria-expanded="false">
                        <svg class="h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd" />
                            </svg>
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <section id="main" class="pt-[48px] lg:pt-[80px] w-full h-[calc(100vh-48px)] lg:h-[calc(100vh-80px)]">
        <div id="grid" class="lg:grid lg:grid-cols-8">
            <div id="sidenav" class="fixed lg:static lg:col-start-1 lg:col-span-1 h-[calc(100vh-48px)] lg:h-[calc(100vh-80px)] lg:left-0 left-[-300px] bg-[#04BF68] shadow text-black font-medium">
                <div class="pt-4"> 
                    <div id="home" class="px-5 py-2 flex lg:hidden items-center duration-300 cursor-pointer hover:bg-white hover:bg-opacity-70">
                        <i class="bi bi-person-circle"></i>
                        <span class="mx-2 my-[4px] text-sm text-black">Perfil</span>
                    </div>
                    <div id="home" class="px-5 py-2 flex items-center duration-300 cursor-pointer hover:bg-white hover:bg-opacity-70">
                        <i class="bi bi-house-door-fill"></i>
                        <span class="mx-2 my-[4px] text-sm text-black">Dashboard</span>
                    </div>
                    <div id="medical-files" class="px-5 py-2 flex items-center duration-300 cursor-pointer hover:bg-white hover:bg-opacity-70">
                        <i class="bi bi-file-earmark-text-fill"></i>
                        <span class="mx-2 my-[4px] text-sm text-black">Receitas</span>
                    </div>
                    <div id="documents" class="px-5 py-2 flex items-center duration-300 cursor-pointer hover:bg-white hover:bg-opacity-70">
                        <i class="bi bi-file-person-fill"></i>
                        <span class="mx-2 my-[4px] text-sm text-black">Documentos</span>
                    </div>
                </div>
            </div>
            <div id="content" class="py-6 px-6 lg:px-8 col-start-2 col-span-7" onclick="Close()">
                <div class="font-medium text-base lg:text-2xl text-black">
                    <h1>Olá, Associado!</h1>
                </div>
                <div class="mt-3 lg:mt-8 grid lg:grid-cols-2 gap-4">
                    <div class="tile">
                        <div
                            class="rounded-lg bg-white p-4 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                            <h5 class="mb-2 text-sm md:text-xl lg:text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                                Consultas Realizadas
                            </h5>
                            <p class="mb-4 text-xs md:text-base lg:text-base text-neutral-600 dark:text-neutral-200">
                                Total: 3 consultas
                            </p>
                        </div>
                    </div>
                    <div class="tile">
                        <div
                            class="rounded-lg bg-white p-4 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                            <h5 class="mb-2 text-sm md:text-xl lg:text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                                Consultas Agendadas
                            </h5>
                            <p class="mb-4 text-xs md:text-base lg:text-base text-neutral-600 dark:text-neutral-200">
                                Total: 0 consultas
                            </p>
                        </div>
                    </div>
                    <div class="tile">
                        <div
                            class="rounded-lg bg-white p-4 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                            <h5 class="mb-2 text-sm md:text-xl lg:text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                                Vencimento da Receita
                            </h5>
                            <p class="mb-4 text-xs md:text-base lg:text-base text-neutral-600 dark:text-neutral-200">
                                Data: 23 de Dezembro de 2023
                            </p>
                        </div>
                    </div>
                    <div class="tile">
                        <div
                            class="rounded-lg bg-white p-4 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                            <h5 class="mb-2 text-sm md:text-xl lg:text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                                Data da Próxima Consulta
                            </h5>
                            <p class="mb-4 text-xs md:text-base lg:text-base text-neutral-600 dark:text-neutral-200">
                                Consulta ainda não agendada.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function Button() {
            document.querySelector('#sidenav').classList.toggle('left-[-300px]')
        }
        
        function Close(){
            document.querySelector('#sidenav').classList.add('left-[-300px]')
        }
    </script>
</body>
</html>