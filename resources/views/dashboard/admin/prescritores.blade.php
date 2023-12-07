<x-dashboard.admin.layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto lg:mx-0 lg:p-12">
            <!--Titulo-->
            <h2 class="text-3xl lg:text-3xl font-bold text-gray-900 dark:text-white">Prescritores</h2>

            <!--Grid-->
            <div id="grid" class="lg:mt-8">
                <div class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="relative overflow-x-auto sm:rounded-lg">
                        <table class="w-full text-base text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Prescritor
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Tipo
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Crm/crmv
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Consultório
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
                                        Dr. João Silva
                                    </th>
                                    <td class="px-6 py-4">
                                        Médico
                                    </td>
                                    <td class="px-6 py-4">
                                        012345-6
                                    </td>
                                    <td class="px-6 py-4">
                                        Total Saúde
                                    </td>
                                    <td
                                        class="px-6 py-4 font-medium text-primary-600 dark:text-primary-500 hover:underline">
                                        Disponível
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Dra. Luciana Azevedo
                                    </th>
                                    <td class="px-6 py-4">
                                        Médico
                                    </td>
                                    <td class="px-6 py-4">
                                        098754-6
                                    </td>
                                    <td class="px-6 py-4">
                                        Health Plus
                                    </td>
                                    <td
                                        class="px-6 py-4 font-medium text-primary-600 dark:text-primary-500 hover:underline">
                                        Disponível
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Dr. Henrique Braga
                                    </th>
                                    <td class="px-6 py-4">
                                        Médico Veterinário
                                    </td>
                                    <td class="px-6 py-4">
                                        543210-9
                                    </td>
                                    <td class="px-6 py-4">
                                        Petfriendly
                                    </td>
                                    <td
                                        class="px-6 py-4 font-medium text-yellow-400 dark:text-yellow-300 hover:underline">
                                        Ocupado
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Dr. Márcio Lemos
                                    </th>
                                    <td class="px-6 py-4">
                                        Médico Veterinário
                                    </td>
                                    <td class="px-6 py-4">
                                        845621-7
                                    </td>
                                    <td class="px-6 py-4">
                                        Petfriendly
                                    </td>
                                    <td
                                        class="px-6 py-4 font-medium text-primary-600 dark:text-primary-500 hover:underline">
                                        Disponível
                                    </td>
                                </tr>

                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Dra. Verônica Dias
                                    </th>
                                    <td class="px-6 py-4">
                                        Médico
                                    </td>
                                    <td class="px-6 py-4">
                                        482165-3
                                    </td>
                                    <td class="px-6 py-4">
                                        MultiMed
                                    </td>
                                    <td class="px-6 py-4 font-medium text-red-600 dark:text-red-400 hover:underline">
                                        Indisponível
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Dr. Diego Silva
                                    </th>
                                    <td class="px-6 py-4">
                                        Médico Veterinário
                                    </td>
                                    <td class="px-6 py-4">
                                        384197-5
                                    </td>
                                    <td class="px-6 py-4">
                                        Animall
                                    </td>
                                    <td class="px-6 py-4 font-medium text-red-600 dark:text-red-400 hover:underline">
                                        Indisponível
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Dra. Patrícia Cardoso
                                    </th>
                                    <td class="px-6 py-4">
                                        Médico
                                    </td>
                                    <td class="px-6 py-4">
                                        785439-1
                                    </td>
                                    <td class="px-6 py-4">
                                        Health Plus
                                    </td>
                                    <td
                                        class="px-6 py-4 font-medium text-yellow-400 dark:text-yellow-300 hover:underline">
                                        Ocupado
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4 mt-4"
                            aria-label="Table navigation">
                            <span
                                class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-4 md:mb-0 block w-full md:inline md:w-auto">Exibindo
                                <span class="font-semibold text-gray-900 dark:text-white">1-7</span> de <span
                                    class="font-semibold text-gray-900 dark:text-white">20</span></span>
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
                            Remover Prescritor
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
                                            Remover Prescritor
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
                                                            placeholder="Nome do Prescritor" required>
                                                    </div>
                                                    <div class="mb-5">
                                                        <label for="CRM/CRMV"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                            CRM/CRMV</label>
                                                        <input type="CRM/CRMV" id="CRM/CRMV"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500"
                                                            placeholder="Seu CRM/CRMV" required>
                                                    </div>
                                                    <div class="mb-5">
                                                        <label for="prescritor"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo
                                                            de Prescritor</label>
                                                        <select id="prescritor"
                                                            class="bg-gray-50 mb-5 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500">
                                                            <option selected="">Tipo do prescritor</option>
                                                            <option value="">Clínico</option>
                                                            <option value="">Veterinário</option>
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
