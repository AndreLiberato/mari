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
    <header>
        <nav class="static flex w-full flex-wrap items-center justify-between bg-white text-neutral-500 shadow-lg hover:text-neutral-700 focus:text-neutral-700 dark:bg-neutral-600"
            data-te-navbar-ref>
            <div class="flex w-full flex-wrap items-center justify-between py-2 lg:py-4 px-2 lg:px-6">
                <div class="relative lg:hidden mt-0.5">
                    <button
                        class="inline-block rounded bg-white px-1 py-1 text-xs font-medium uppercase leading-tight text-neutral-900 shadow-md transition duration-150 ease-in-out hover:bg-gradient-to-l from-[#B0F291] to-[#04BF68] hover:opacity-30  hover:shadow-lg focus:bg-white focus:shadow-lg focus:outline-none focus:ring-0 active:white active:shadow-lg"
                        data-te-sidenav-toggle-ref data-te-target="#sidenav-2" aria-controls="#sidenav-2"
                        aria-haspopup="true">
                        <span class="block [&>svg]:h-5 [&>svg]:w-5 [&>svg]:text-neutral-900">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="h-5 w-5">
                                <path fill-rule="evenodd"
                                    d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </button>
                </div>
                <div>
                    <a class="flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900"
                        href="#">
                        <img class="navbar-logo" src="{{ asset('img/logo_marijuana.png') }}" alt="logo_marijuana">
                    </a>
                </div>
                <div class="hidden flex-grow lg:mt-0 lg:!flex lg:basis-auto" data-te-collapse-item>
                    <ul class="list-style-none mr-auto flex flex-col pl-0 lg:mt-1 lg:flex-row" data-te-navbar-nav-ref>
                        <li class="lg:my-0 lg:pl-4" data-te-nav-item-ref>
                            <p class="text-neutral-600 disabled:text-black/30 dark:text-neutral-200  lg:px-0 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                                aria-current="page" href="#" data-te-nav-link-ref>
                                Editar Perfil
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="flex items-center">
                    <a class="hidden-arrow flex items-center whitespace-nowrap transition duration-150 ease-in-out motion-reduce:transition-none h-8 w-8 lg:h-10 lg:w-10"
                        href="#" id="dropdownMenuButton2" role="button" data-te-dropdown-toggle-ref
                        aria-expanded="false">
                        <img src="https://tecdn.b-cdn.net/img/new/avatars/2.jpg" class="rounded-full"
                            alt="Foto de perfil do associado" loading="lazy" />
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <section class="w-full mx-0 my-auto h-screen grid grid-cols-12">
      
    </section>
</body>

</html>
