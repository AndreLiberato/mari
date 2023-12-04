<x-layout>
    <section class="mx-auto bg-white dark:bg-gray-900">
        <div class="container p-10 max-w-max">
            <div class="g-6 flex h-full flex-wrap items-center justify-center text-neutral-800 dark:text-neutral-200">
                <div class="w-full">
                    <div class="block rounded-lg bg-white shadow-lg dark:bg-neutral-800">
                        <div class="g-0 lg:flex lg:flex-wrap">
                            <div class="px-4 md:px-0 lg:w-6/12">
                                <div class="md:mx-auto md:px-12 md:pb-12 md:w-5/6">
                                    <div
                                        class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                                        <a href="{{ route('index') }}"
                                            class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                                            <img class="w-8 h-8 mr-2" src="{{ asset('img/logo_marijuana.png') }}"
                                                alt="logo">
                                            Marijuana
                                        </a>
                                        <div
                                            class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                                            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                                                <h1
                                                    class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                                                    Login
                                                </h1>
                                                <form class="space-y-4 md:space-y-6" action="#">
                                                    <div>
                                                        <label for="email"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                            Email
                                                        </label>
                                                        <input type="email" name="email" id="email"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            placeholder="name@domain.com" required>
                                                    </div>
                                                    <div>
                                                        <label for="password"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                            Senha
                                                        </label>
                                                        <input type="password" name="password" id="password"
                                                            placeholder="••••••••"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            required>
                                                    </div>
                                                    <div class="flex items-center justify-between">
                                                        <div class="flex items-start">
                                                            <div class="flex items-center h-5">
                                                                <input id="remember" aria-describedby="remember"
                                                                    type="checkbox"
                                                                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
                                                                    required="">
                                                            </div>
                                                            <div class="ml-3 text-sm">
                                                                <label for="remember"
                                                                    class="text-gray-500 dark:text-gray-300">
                                                                    Lembrar email
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <a href="#"
                                                            class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">
                                                            Esqueceu sua senha?</a>
                                                    </div>
                                                    <button type="submit"
                                                        class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                                        Entrar
                                                    </button>
                                                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                                                        Não é associado?
                                                        <a href="#"
                                                            class="font-medium text-primary-600 hover:underline dark:text-primary-500">
                                                            Associe-se
                                                        </a>
                                                    </p>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center rounded-b-lg lg:w-6/12 lg:rounded-r-lg lg:rounded-bl-none"
                                style="background: linear-gradient(to right, #B0F291, #04BF68)">
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
</x-layout>
