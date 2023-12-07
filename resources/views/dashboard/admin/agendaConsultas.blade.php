<x-dashboard.admin.layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto lg:mx-0 lg:p-12">
            <h2 class="text-3xl lg:text-3xl font-bold text-gray-900 dark:text-white">Agendar Consultas</h2>

            <div class="lg:mt-8">
                <div
                    class="mb-4 bg-white border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <form>
                        <label for="default-search"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="default-search"
                                class="block w-full p-4 ps-10 text-sm text-gray-900 border-gray-300 rounded-lg bg-white focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Pesquise uma consulta por paciente, prescritor ou data" required>
                            <button type="submit"
                                class="text-white absolute end-2.5 bottom-2.5 bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Pesquisar</button>
                        </div>
                    </form>
                </div>
                <div
                    class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="relative overflow-x-auto sm:rounded-lg">
                        <table class="w-full text-base text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        paciente
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        prescritor
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        status do prescritor
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        status da receita
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        tipo
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        validação
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Marcela Coelho
                                    </th>
                                    <td class="px-6 py-4">
                                        Dra. Luciana Azevedo
                                    </td>
                                    <td class="px-6 py-4 text-primary-600 dark:text-primary-500">
                                        Disponível
                                    </td>
                                    <td class="px-6 py-4 text-yellow-400 dark:text-yellow-300">
                                        A vencer
                                    </td>
                                    <td class="px-6 py-4">
                                        Retorno
                                    </td>
                                    <td class="px-6 py-3 text-red-500 dark:text-red-400">
                                        <button type="submit"
                                            class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                            Aceitar
                                        </button>
                                        <button type="submit"
                                            class="text-white lg:ml-3 bg-red-600 hover:bg-red-400 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-red-500 dark:hover:bg-red-400 dark:focus:ring-red-300">
                                            Negar
                                        </button>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Bob (cachorro)
                                    </th>
                                    <td class="px-6 py-4">
                                        Dr. Diego Silva
                                    </td>
                                    <td class="px-6 py-4 text-red-500 dark:text-red-400">
                                        Indisponível
                                    </td>
                                    <td class="px-6 py-4 text-red-500 dark:text-red-400">
                                        Vencida
                                    </td>
                                    <td class="px-6 py-4">
                                        Retorno
                                    </td>
                                    <td class="px-6 py-3 text-red-500 dark:text-red-400">
                                        <button type="submit"
                                            class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                            Aceitar
                                        </button>
                                        <button type="submit"
                                            class="text-white lg:ml-3 bg-red-600 hover:bg-red-400 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-red-500 dark:hover:bg-red-400 dark:focus:ring-red-300">
                                            Negar
                                        </button>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Simba (gato)
                                    </th>
                                    <td class="px-6 py-4">
                                        Dr. Márcio Lemos
                                    </td>
                                    <td class="px-6 py-4 text-primary-600 dark:text-primary-500">
                                        Disponível
                                    </td>
                                    <td class="px-6 py-4 text-red-500 dark:text-red-400">
                                        Vencida
                                    </td>
                                    <td class="px-6 py-4">
                                        Retorno
                                    </td>
                                    <td class="px-6 py-3 text-red-500 dark:text-red-400">
                                        <button type="submit"
                                            class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                            Aceitar
                                        </button>
                                        <button type="submit"
                                            class="text-white lg:ml-3 bg-red-600 hover:bg-red-400 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-red-500 dark:hover:bg-red-400 dark:focus:ring-red-300">
                                            Negar
                                        </button>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Marcos Vieira
                                    </th>
                                    <td class="px-6 py-4">
                                        Dra. Patrícia Cardoso
                                    </td>
                                    <td class="px-6 py-4 text-yellow-400 dark:text-yellow-300">
                                        Ocupado
                                    </td>
                                    <td class="px-6 py-4">
                                        Primeira vez
                                    </td>
                                    <td class="px-6 py-4">
                                        Primeira vez
                                    </td>
                                    <td class="px-6 py-3 text-red-500 dark:text-red-400">
                                        <button type="submit"
                                            class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                            Aceitar
                                        </button>
                                        <button type="submit"
                                            class="text-white lg:ml-3 bg-red-600 hover:bg-red-400 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-red-500 dark:hover:bg-red-400 dark:focus:ring-red-300">
                                            Negar
                                        </button>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Antônio da Silva
                                    </th>
                                    <td class="px-6 py-4">
                                        Dr. João Silva
                                    </td>
                                    <td class="px-6 py-4 text-primary-600 dark:text-primary-500">
                                        Disponível
                                    </td>
                                    <td class="px-6 py-4">
                                        Primeira vez
                                    </td>
                                    <td class="px-6 py-4">
                                        Primeira vez
                                    </td>
                                    <td class="px-6 py-3 text-red-500 dark:text-red-400">
                                        <button type="submit"
                                            class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                            Aceitar
                                        </button>
                                        <button type="submit"
                                            class="text-white lg:ml-3 bg-red-600 hover:bg-red-400 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-red-500 dark:hover:bg-red-400 dark:focus:ring-red-300">
                                            Negar
                                        </button>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Marcela Coelho
                                    </th>
                                    <td class="px-6 py-4">
                                        Dr. João Silva
                                    </td>
                                    <td class="px-6 py-4 text-primary-600 dark:text-primary-500">
                                        Disponível
                                    </td>
                                    <td class="px-6 py-4 text-red-500 dark:text-red-400">
                                        Vencida
                                    </td>
                                    <td class="px-6 py-4">
                                        Retorno
                                    </td>
                                    <td class="px-6 py-3 text-red-500 dark:text-red-400">
                                        <button type="submit"
                                            class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                            Aceitar
                                        </button>
                                        <button type="submit"
                                            class="text-white lg:ml-3 bg-red-600 hover:bg-red-400 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-red-500 dark:hover:bg-red-400 dark:focus:ring-red-300">
                                            Negar
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4 mt-4"
                            aria-label="Table navigation">
                            <span
                                class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-4 md:mb-0 block w-full md:inline md:w-auto">Exibindo
                                <span class="font-semibold text-gray-900 dark:text-white">1-6</span> de <span
                                    class="font-semibold text-gray-900 dark:text-white">xxx</span></span>
                            <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
                                <li>
                                    <a href="#" aria-current="page"
                                        class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-primary-600 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Anterior</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-primary-50 border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">3</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="disabled flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">...</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">7</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">8</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">9</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Próximo</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </x-dashboard.layout>
