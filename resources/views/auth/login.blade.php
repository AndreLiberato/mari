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
    <section class="p-14 mx-auto bg-neutral-200 dark:bg-neutral-700">
        <div class="container p-10 max-w-max">
            <div class="g-6 flex h-full flex-wrap items-center justify-center text-neutral-800 dark:text-neutral-200">
                <div class="w-full">
                    <div class="block rounded-lg bg-white shadow-lg dark:bg-neutral-800">
                        <div class="g-0 lg:flex lg:flex-wrap">
                            <div class="px-4 md:px-0 lg:w-6/12">
                                <div class="md:mx-auto md:px-12 md:pb-12 md:w-5/6"> 
                                    <div class="items-center flex flex-col">
                                        <img class="w-48 pt-12" src="{{ asset('img/logo_marijuana.png') }}"
                                            alt="logo_marijuana">
                                        <h4 class="mb-12 mt-1 pb-1 text-xl font-semibold">
                                            Marijuana
                                        </h4>
                                    </div>
                                    

                                    <form>
                                        <p class="mb-4">Informações de login</p>

                                        <div class="relative mb-4">
                                            <input type="email"
                                                class="block rounded px-2.5 py-2.5 pt-5 w-full text-base text-gray-900 dark:bg-gray-700 border-2 border-neutral-600 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-app-green-light focus:outline-none focus:ring-0 focus:border-app-green-dark peer"
                                                id="emailInput" placeholder="" />
                                            <label for="emailInput"
                                                class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-[0.8] top-4 z-10 origin-[0] start-2.5 peer-focus:text-app-green-dark peer-focus:dark:text-app-green-light peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-90 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
                                                Endereço de Email
                                            </label>
                                        </div>

                                        <div class="relative mb-4">
                                            <input type="password"
                                                class="block rounded px-2.5 py-2.5 pt-5 w-full text-base text-gray-900 dark:bg-gray-700 border-2 border-neutral-600 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-app-green-light focus:outline-none focus:ring-0 focus:border-app-green-dark peer"
                                                id="passwordInput" placeholder="" />
                                            <label for="passwordInput"
                                                class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-[0.8] top-4 z-10 origin-[0] start-2.5 peer-focus:text-app-green-dark peer-focus:dark:text-app-green-light peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-90 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
                                                Senha
                                            </label>
                                        </div>

                                        <div class="mb-12 pb-1 pt-1 text-center">
                                            <a class="mb-3 inline-block w-full rounded px-6 pb-2 pt-2.5 text-xs bg-gradient-to-r from-app-green-light to-app-green-medium font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)]"
                                                type="button" data-te-ripple-init data-te-ripple-color="light">
                                                Entrar
                                            </a>

                                            <a href="#!">Esqueceu a senha?</a>
                                        </div>

                                        <div class="flex items-center justify-between pb-6">
                                            <p class="mb-0 mr-2">Ainda não é associado?</p>
                                            <a href="{{ route('cadastro.paciente') }}"
                                                class="inline-block rounded border-2 border-app-green-dark px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-app-green-dark transition duration-150 ease-in-out hover:bg-app-green-vivid hover:bg-opacity-10 focus:outline-none focus:ring-0 dark:border-app-green-light dark:text-app-green-light dark:hover:bg-app-green-dark dark:hover:bg-opacity-10"
                                                data-te-ripple-init data-te-ripple-color="light">
                                                Associe-se
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div
                                class="flex items-center rounded-b-lg lg:w-6/12 lg:rounded-r-lg lg:rounded-bl-none bg-gradient-to-r from-app-green-light to-app-green-medium">
                                <div class="px-4 py-6 text-white md:mx-6 md:p-12">
                                    <h4 class="mb-6 text-xl font-semibold text-black">
                                        Somos mais do que uma associação
                                    </h4>
                                    <p class="text-sm text-black">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex
                                        ea commodo consequat.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
