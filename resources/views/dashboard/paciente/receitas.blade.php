<x-dashboard.paciente.layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="pt-8 pb-8 px-4 mx-auto lg:mx-0 lg:p-9">
            <h2 class="mb-3 text-3xl lg:text-3xl font-bold text-gray-900 dark:text-white">Receitas</h2>
            <p class="text-black dark:text-gray-400 text-lg font-medium">Dados associados às receitas do paciente.</p>
            <div class="mt-8 lg:mt-8">
                <div
                    class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <h5 class="mb-6 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Receita Atual</h5>
                        <div class="lg:grid lg:grid-cols-2 lg:gap-6 text-xl text-black dark:text-gray-400 font-normal">
                            <p><strong>Paciente: </strong>Maria das Graças Ribeiro da Silva<br><strong>Prescritor: </strong>Dr. Adriano Melo<br><strong>Data: </strong>dd/mm/yyyy</p>
                            <p><strong>Validade: </strong>dd/mm/yyyy<br><strong>Patologia: </strong>Mal de Alzheimer<br><strong>Dosagem: </strong>2.000mg/dia</p>

                        </div>
                </div>
                <div
                    class="mt-8 p-6 lg:col-span-2 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <h5 class="mb-6 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Histórico</h5>
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
                                        vencimento
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
                                        dd/mm/yyyy
                                    </td>
                                    <td class="px-6 py-4 text-red-500 dark:text-red-400">
                                        Vencida
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
                                        dd/mm/yyyy
                                    </td>
                                    <td class="px-6 py-4 text-red-500 dark:text-red-400">
                                        Vencida
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        dd/mm/yyyy
                                    </th>
                                    <td class="px-6 py-4">
                                        Dr. Adriano Melo
                                    </td>
                                    <td class="px-6 py-4">
                                        dd/mm/yyyy
                                    </td>
                                    <td class="px-6 py-4 text-primary-600 dark:text-primary-500">
                                        Ativa
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <a href="#"
                class="inline-flex items-center px-5 mt-8 lg:mt-5 py-2 text-sm font-medium text-center text-white bg-primary-600 rounded-lg hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                Solicitar Renovação
            </a>
        </div>
        </div>
    </section>
    </x-dashboard.layout>
