<x-dashboard.paciente.layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="pt-8 pb-8 px-4 mx-auto lg:mx-0 lg:p-12">
            <!--Titulo-->
            <h2 class="mb-8 text-3xl lg:text-3xl font-bold text-gray-900 dark:text-white">Visão Geral</h2>

            <!--Grid-->
            <div id="grid" class="grid grid-cols-1 gap-4 lg:gap-10 lg:grid-cols-2 lg:mt-8">
                <div class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Laudo</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Paciente diagnosticado com Alzheimer em
                        março de 2020 após recorrentes episódios de falha de memória.</p>

                </div>
                <div class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Receita</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><strong>Submissão:
                        </strong>dd/mm/yyyy<br><strong>Vencimento: </strong>dd/mm/yyyy</p>
                </div>
                <div
                    class="p-6 lg:col-span-2 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Consultas</h5>


                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        DATA
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        PRESCRITOR
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        CONSULTÓRIO
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        STATUS
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        dd/mm/yyyy
                                    </th>
                                    <td class="px-6 py-4">
                                        Dr. João da Silva
                                    </td>
                                    <td class="px-6 py-4">
                                        Total Saúde
                                    </td>
                                    <td class="px-6 py-4">
                                        Realizada
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        dd/mm/yyyy
                                    </th>
                                    <td class="px-6 py-4">
                                        Dra. Luciana Azevedo
                                    </td>
                                    <td class="px-6 py-4">
                                        Health Plus
                                    </td>
                                    <td class="px-6 py-4">
                                        Realizada
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        dd/mm/yyyy
                                    </th>
                                    <td class="px-6 py-4">
                                        Dr. Adriano Melo
                                    </td>
                                    <td class="px-6 py-4">
                                        MultiMed
                                    </td>
                                    <td class="px-6 py-4">
                                        Agendada
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-gray-800">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        dd/mm/yyyy
                                    </th>
                                    <td class="px-6 py-4">
                                        Dra. Maria dos Santos
                                    </td>
                                    <td class="px-6 py-4">
                                        Health Plus
                                    </td>
                                    <td class="px-6 py-4">
                                        Aguardando Agendamento
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                        class="block inline-flex items-center px-5 mt-6 py-2 text-sm font-medium text-center text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 rounded-lg dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                        type="button">
                        Solicitar Agendamento
                    </button>
                    <div id="crud-modal" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div
                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                        Create New Product
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-toggle="crud-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <form class="p-4 md:p-5">
                                    <div class="grid gap-4 mb-4 grid-cols-1">
                                        <div class="col-span-2 sm:col-span-1">
                                            <label for="prescritor"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prescritor</label>
                                            <select id="prescritor"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                <option selected="">Selecione o prescritor</option>
                                                <option value="">Dr. João Silva</option>
                                                <option value="">Dra. Luciana Azevedo</option>
                                                <option value="">Dra. Verônica Dias</option>
                                                <option value="">Dra. Patrícia Cardoso</option>
                                                <option value="">Dr. Adriano Melo</option>
                                                <option value="">Dr. Henrique Souza</option>
                                                <option value="">Dr. Maria dos Santos</option>
                                                <option value="">Dr. Fernando Henrique Lima</option>
                                                <option value="">Dr. Augusto Borges</option>
                                                <option value="">Dra. Larissa Couto</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit"
                                        class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        Nova Solicitação
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </x-dashboard.layout>
