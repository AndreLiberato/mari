<x-dashboard.admin.layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto lg:mx-0 lg:p-12">
            <!--Titulo-->
            <h2 class="text-3xl lg:text-3xl font-bold text-gray-900 dark:text-white">Pacientes</h2>

            <!--Grid-->
            <div id="grid" class="lg:mt-8">
                <div class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-base text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Paciente
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Tipo
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        CPF/Nº de Identificação
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Patologia
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Dosagem
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Status
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Maria da Glória Araújo
                                    </th>
                                    <td class="px-6 py-4">
                                        Humano
                                    </td>
                                    <td class="px-6 py-4">
                                        xxx.xxx.xxx-xx
                                    </td>
                                    <td class="px-6 py-4">
                                        Mal de Parkinson
                                    </td>
                                    <td class="px-6 py-4">
                                        300mg/dia
                                    </td>
                                    <td class="px-6 py-4 font-medium text-primary-600 dark:text-primary-500 hover:underline">
                                        Ativo
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Pedro Alves
                                    </th>
                                    <td class="px-6 py-4">
                                        Humano
                                    </td>
                                    <td class="px-6 py-4">
                                        xxx.xxx.xxx-xx
                                    </td>
                                    <td class="px-6 py-4">
                                        Transtorno de Ansiedade Generalizada
                                    </td>
                                    <td class="px-6 py-4">
                                        900mg/dia
                                    </td>
                                    <td class="px-6 py-4 font-medium text-primary-600 dark:text-primary-500 hover:underline">
                                        Ativo
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Rose Cavalcante
                                    </th>
                                    <td class="px-6 py-4">
                                        Humano
                                    </td>
                                    <td class="px-6 py-4">
                                        xxx.xxx.xxx-xx
                                    </td>
                                    <td class="px-6 py-4">
                                        Mal de Alzheimer
                                    </td>
                                    <td class="px-6 py-4">
                                        2.000mg/dia
                                    </td>
                                    <td class="px-6 py-4 font-medium text-primary-600 dark:text-primary-500 hover:underline">
                                        Ativo
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Rodrigo Lins
                                    </th>
                                    <td class="px-6 py-4">
                                        Humano
                                    </td>
                                    <td class="px-6 py-4">
                                        xxx.xxx.xxx-xx
                                    </td>
                                    <td class="px-6 py-4">
                                        Isquemia Cerebral
                                    </td>
                                    <td class="px-6 py-4">
                                        200mg/dia
                                    </td>
                                    <td class="px-6 py-4 font-medium text-primary-600 dark:text-primary-500 hover:underline">
                                        Ativo
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium  text-gray-900 whitespace-nowrap dark:text-white">
                                        Luciana Ribeiro
                                    </th>
                                    <td class="px-6 py-4">
                                        Humano
                                    </td>
                                    <td class="px-6 py-4">
                                        xxx.xxx.xxx-xx
                                    </td>
                                    <td class="px-6 py-4">
                                        Mal de Parkinson
                                    </td>
                                    <td class="px-6 py-4">
                                        300mg/dia
                                    </td>
                                    <td class="px-6 py-4 font-medium text-primary-600 dark:text-primary-500 hover:underline">
                                        Ativo
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Sérgio Gomes
                                    </th>
                                    <td class="px-6 py-4">
                                        Humano
                                    </td>
                                    <td class="px-6 py-4">
                                        xxx.xxx.xxx-xx
                                    </td>
                                    <td class="px-6 py-4">
                                        Isquemia
                                    </td>
                                    <td class="px-6 py-4">
                                        200mg/dia
                                    </td>
                                    <td class="px-6 py-4 font-medium hover:underline">
                                        Finalizado
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Simone Cabral
                                    </th>
                                    <td class="px-6 py-4">
                                        Humano
                                    </td>
                                    <td class="px-6 py-4">
                                        xxx.xxx.xxx-xx
                                    </td>
                                    <td class="px-6 py-4">
                                        Mal de Alzheimer
                                    </td>
                                    <td class="px-6 py-4">
                                        1.800mg/dia
                                    </td>
                                    <td class="px-6 py-4 font-medium text-red-600 dark:text-red-400 hover:underline">
                                        Óbito
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                        <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4 mt-4"
                            aria-label="Table navigation">
                            <span
                                class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-4 md:mb-0 block w-full md:inline md:w-auto">Exibindo
                                <span class="font-semibold text-gray-900 dark:text-white">1-7</span> de <span
                                    class="font-semibold text-gray-900 dark:text-white">18</span></span>
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
                                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Próximo</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="mt-4">
                        <button data-modal-target="remover" data-modal-toggle="remover"
                            class="block inline-flex items-center mt-2 lg:mt-0 px-5 py-2 text-sm font-medium text-center text-white bg-red-500 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg dark:bg-red-500 dark:hover:bg-red-400 dark:focus:ring-red-600"
                            type="button">
                            Remover Paciente
                        </button>
                        <div id="remover" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div
                                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                            Remover Paciente
                                        </h3>
                                        <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-toggle="remover">
                                            <svg class="w-3 h-3" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <form class="p-4 md:p-5">
                                        <div class="grid gap-4 mb-4 grid-cols-1">
                                            <div class="col-span-2 sm:col-span-1">
                                                <form class="max-w-sm mx-auto">
                                                    <div class="mb-5">
                                                        <label for="nome"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
                                                        <input type="name" id="nome"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500"
                                                            placeholder="Nome do Paciente" required>
                                                    </div>
                                                    <div class="mb-5">
                                                        <label for="CPF/Nº ID"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                            CPF/Nº ID</label>
                                                        <input type="CPF/Nº ID" id="CPF/Nº ID"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500"
                                                            placeholder="Seu CPF/Nº ID" required>
                                                    </div>
                                                    <div class="mb-5">
                                                        <label for="prescritor"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo
                                                            de Paciente</label>
                                                        <select id="prescritor"
                                                            class="bg-gray-50 mb-5 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500">
                                                            <option selected="">Tipo do paciente</option>
                                                            <option value="">Humano</option>
                                                            <option value="">Animal</option>
                                                        </select>
                                                    </div>
                                                    <button type="submit"
                                                        class="text-white bg-red-600 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-500 dark:hover:bg-red-400 dark:focus:ring-red-300">Remover</button>
                                                </form>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
    </x-dashboard.layout>
