<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    <!--GRID-->
    <header class="bg-gray-900">
        <nav class="relative flex w-full flex-wrap items-center justify-between bg-[#FBFBFB] py-2 text-neutral-500 shadow-lg hover:text-neutral-700 focus:text-neutral-700 dark:bg-neutral-600 lg:py-4"
            data-te-navbar-ref>
            <div class="flex w-full flex-wrap items-center justify-between px-3">
                <div>
                    <a class="mx-2 my-1 flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 lg:mb-0 lg:mt-0"
                        href="#">
                        <img class="w-10" src="{{ asset('img/logo_marijuana.png') }}" alt="logo_marijuana">

                    </a>
                </div>

                <div class="mt-2 flex-grow items-center lg:mt-0 lg:!flex lg:basis-auto" data-te-collapse-item>
                    <ul class="list-style-none mr-auto flex flex-col pl-0 lg:mt-1 lg:flex-row" data-te-navbar-nav-ref>
                        <li class="my-4 pl-2 lg:my-0 lg:pl-2 lg:pr-1" data-te-nav-item-ref>
                            <p class="text-neutral-600 disabled:text-black/30 dark:text-neutral-200  lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                                aria-current="page" href="#" data-te-nav-link-ref>
                                Área do Associado
                            </p>
                        </li>
                    </ul>
                </div>

                <div class="flex items-center px-4">
                    <a class="hidden-arrow flex items-center whitespace-nowrap transition duration-150 ease-in-out motion-reduce:transition-none"
                        href="#" id="dropdownMenuButton2" role="button" data-te-dropdown-toggle-ref
                        aria-expanded="false">
                        <img src="https://tecdn.b-cdn.net/img/new/avatars/2.jpg" class="rounded-full"
                            style="height: 40px; width: 40px" alt="Foto de perfil do associado" loading="lazy" />
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <section class="w-full mx-0 my-auto h-screen grid grid-cols-12">
        <nav class="col-start-1 col-span-2 left-0 top-auto z-[1035] shadow-zinc-400 shadow-[0_4px_12px_0_rgba(0,0,0,0.07),_0_2px_4px_rgba(0,0,0,0.05)] data-[te-sidenav-hidden='false']:translate-x-0"
            style="background: linear-gradient(to right, #B0F291, #04BF68)">
            <ul class="relative py-1.5 lg:py-2.5 m-0 list-none px-[0.3rem]" data-te-sidenav-menu-ref>
                <li class="relative">
                    <a class="flex h-12 cursor-pointer items-left truncate rounded-[5px] px-px lg:px-4 pb-2 pt-3 text-[0.875rem] text-black outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                        data-te-sidenav-link-ref>
                        <span class="mr-2 ml-1.5 lg:ml-0 pl-1 [&>svg]:h-6 [&>svg]:w-6 md:[&>svg]:h-5 md:pt-px md:[&>svg]:w-4 lg:pl-0 lg:[&>svg]:h-5 lg:[&>svg]:w-5 [&>svg]:text-black dark:[&>svg]:text-black">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M5 20v-8H2l10-9l4 3.6V4h3v5.3l3 2.7h-3v8h-5v-6h-4v6H5Zm5-9.975h4q0-.8-.6-1.313T12 8.2q-.8 0-1.4.513t-.6 1.312Z" />
                            </svg>
                        </span>
                        <span class="hidden md:flex font-medium lg:text-base md:text-sm">Página Inicial</span>
                    </a>
                </li>
                <li class="relative">
                    <a class="flex h-12 cursor-pointer items-left truncate rounded-[5px] px-px lg:px-4 pb-2 pt-3.5 text-[0.875rem] text-black outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                        data-te-sidenav-link-ref>
                        <span class="mr-2 ml-1.5 lg:ml-0 pl-1.5 [&>svg]:h-5 [&>svg]:w-5 md:[&>svg]:h-5 md:pt-px md:[&>svg]:w-4 lg:pl-0 lg:[&>svg]:h-5 lg:[&>svg]:w-5 [&>svg]:text-black dark:[&>svg]:text-black">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M8 12h8v-2H8v2Zm0-4h8V6H8v2Zm11.95 12.475L15.9 15.2q-.425-.575-1.05-.887T13.5 14H4V4q0-.825.588-1.413T6 2h12q.825 0 1.413.588T20 4v16q0 .125-.013.238t-.037.237ZM6 22q-.825 0-1.412-.588T4 20v-4h9.5q.25 0 .463.113t.362.312l4.2 5.5q-.125.05-.262.063T18 22H6Z" />
                            </svg>
                        </span>
                        <span class="hidden md:flex font-medium lg:text-base md:text-sm">Receitas</span>
                    </a>
                </li>
                <li class="relative">
                    <a class="flex h-12 cursor-pointer items-left truncate rounded-[5px] px-px lg:px-4 pb-2 pt-3.5 text-[0.875rem] text-black outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                        data-te-sidenav-link-ref>
                        <span class="mr-2 ml-1.5 lg:ml-0 pl-1.5 [&>svg]:h-5 [&>svg]:w-5 md:[&>svg]:h-5 md:pt-px md:[&>svg]:w-5 lg:pl-0 lg:[&>svg]:h-5 lg:[&>svg]:w-5 [&>svg]:text-black dark:[&>svg]:text-black">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M4 23q-.825 0-1.413-.588T2 21V7h2v14h11v2H4Zm4-4q-.825 0-1.413-.588T6 17V3q0-.825.588-1.413T8 1h7l6 6v10q0 .825-.588 1.413T19 19H8Zm6-11h5l-5-5v5Z" />
                            </svg>
                        </span>
                        <span class="hidden md:flex font-medium lg:text-base md:text-sm">Documentos</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="top-0 col-start-3 col-span-10">
            <div class="my-3 mx-5 md:my-8 md:mx-10 lg:my-8 lg:mx-10 font-medium text-base md:text-2xl lg:text-3xl text-zinc-400">
                <h1>Olá, Associado!</h1>
            </div>

            <div class="px-5 md:px-10 lg:px-10 grid grid-cols-2 gap-4">
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
    </section>

    <footer></footer>
</body>

</html>
