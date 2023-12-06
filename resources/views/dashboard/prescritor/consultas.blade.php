<x-dashboard.prescritor.layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="pt-8 pb-8 px-4 mx-auto lg:mx-0 lg:px-8 lg:py-7">
            <h2 class="mb-1 text-3xl lg:text-3xl font-bold text-gray-900 dark:text-white">Consultas</h2>
            <p class="text-black dark:text-gray-400 text-lg font-medium">Listagem de consultas agendadas.</p>
            <div
                class="mt-6 px-6 py-5 lg:col-span-2 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <h5 class="mb-4 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Agendamentos</h5>
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    paciente
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    data
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    horário
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    tipo
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    STATUS da receita
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Rodrigo Lins
                                </th>
                                <td class="px-6 py-4">
                                    dd/mm/yyyy
                                </td>
                                <td class="px-6 py-4">
                                    hh:mm
                                </td>
                                <td class="px-6 py-4">
                                    Retorno
                                </td>
                                <td class="px-6 py-4 text-red-500 dark:text-red-400">
                                    Vencida
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Rose Cavalcante
                                </th>
                                <td class="px-6 py-4">
                                    dd/mm/yyyy
                                </td>
                                <td class="px-6 py-4">
                                    hh:mm
                                </td>
                                <td class="px-6 py-4">
                                    Retorno
                                </td>
                                <td class="px-6 py-4 text-yellow-400 dark:text-yellow-300">
                                    A vencer
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Eduarda Lima
                                </th>
                                <td class="px-6 py-4">
                                    dd/mm/yyyy
                                </td>
                                <td class="px-6 py-4">
                                    hh:mm
                                </td>
                                <td class="px-6 py-4">
                                    Primeira vez
                                </td>
                                <td class="px-6 py-4">
                                    Primeira vez
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Daniel Correa
                                </th>
                                <td class="px-6 py-4">
                                    dd/mm/yyyy
                                </td>
                                <td class="px-6 py-4">
                                    hh:mm
                                </td>
                                <td class="px-6 py-4">
                                    Primeira vez
                                </td>
                                <td class="px-6 py-4">
                                    Primeira vez
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Pedro Alves
                                </th>
                                <td class="px-6 py-4">
                                    dd/mm/yyyy
                                </td>
                                <td class="px-6 py-4">
                                    hh:mm
                                </td>
                                <td class="px-6 py-4">
                                    Retorno
                                </td>
                                <td class="px-6 py-4 text-yellow-400 dark:text-yellow-300">
                                    A vencer
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Maria da Glória Araújo
                                </th>
                                <td class="px-6 py-4">
                                    dd/mm/yyyy
                                </td>
                                <td class="px-6 py-4">
                                    hh:mm
                                </td>
                                <td class="px-6 py-4">
                                    Retorno
                                </td>
                                <td class="px-6 py-4 text-red-500 dark:text-red-400">
                                    Vencida
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <div
                class="mt-8 p-6 lg:col-span-2 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <h5 class="mb-3 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Definir status</h5>

                <div class="lg:grid lg:gap-4 lg:grid-cols-3">
                    <div class="lg:col-span-2">
                        <select id="prescritor"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Selecione o status</option>
                            <option class="text-primary-600 dark:text-primary-50" value="">Disponível</option>
                            <option class="text-yellow-400 dark:text-yellow-300" value="">Ocupado</option>
                            <option class="text-red-600 dark:text-red-400" value="">Indisponível</option>
                        </select>
                    </div>
                    <div class="mt-2 lg:mt-0 xl:mt-0">
                        <button type="submit"
                            class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                            Salvar status
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </x-dashboard.layout>
