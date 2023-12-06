<x-dashboard.admin.layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto lg:mx-0 lg:p-12">
            <!--Titulo-->
            <h2 class="text-3xl lg:text-3xl font-bold text-gray-900 dark:text-white">Visão Geral</h2>

            <!--Grid-->
            <div id="grid" class="lg:grid lg:grid-cols-3 lg:gap-10 lg:mt-8">
                <div class="p-6 lg:col-span-2 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <h5 class="mb-4 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Associados</h5>
                    
                    <div class="relative overflow-x-auto lg:grid lg:grid-cols-2 lg:gap-8 text-gray-700 dark:text-gray-300 font-normal">
                        <div class="p-2 border-t border-gray-700 dark:border-gray-700">
                            <p class="text-xl pb-2 font-semibold">Pacientes</p>
                            <table class="text-base text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-5 py-3">
                                            Tipo
                                        </th>
                                        <th scope="col" class="px-5 py-3">
                                            Total
                                        </th>
                                        <th scope="col" class="px-5 py-3">
                                            Ativos
                                        </th>
                                        <th scope="col" class="px-5 py-3">
                                            Finalizados
                                        </th>
                                        <th scope="col" class="px-5 py-3">
                                            Óbitos
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row"
                                            class="px-5 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Humano
                                        </th>
                                        <td class="px-5 py-4">
                                            xxx
                                        </td>
                                        <td class="px-5 py-4 text-primary-600 dark:text-primary-500">
                                            xx
                                        </td>
                                        <td class="px-5 py-4 text-gray-700 dark:text-white">
                                            xx
                                        </td>
                                        <td class="px-5 py-4 font-medium text-red-500 dark:text-red-300 hover:underline">
                                            xx
                                        </td>
                                    </tr>
                                    <tr
                                        class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row"
                                            class="px-5 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Animal
                                        </th>
                                        <td class="px-5 py-4">
                                            xxx
                                        </td>
                                        <td class="px-5 py-4 text-primary-600 dark:text-primary-500">
                                            xx
                                        </td>
                                        <td class="px-5 py-4 text-gray-700 dark:text-white">
                                            xx
                                        </td>
                                        <td class="px-5 py-4 font-medium text-red-500 dark:text-red-300 hover:underline">
                                            xx
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="p-2 border-t border-gray-700 dark:border-gray-700">
                            <p class="text-xl pb-2 font-semibold">Prescritores</p>
                            <table class="text-base text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-[13px] py-3">
                                            Tipo
                                        </th>
                                        <th scope="col" class="px-[13px] py-3">
                                            Total
                                        </th>
                                        <th scope="col" class="px-[13px] py-3">
                                            Disponível
                                        </th>
                                        <th scope="col" class="px-[13px] py-3">
                                            Ocupado
                                        </th>
                                        <th scope="col" class="px-[13px] py-3">
                                            Indisponível
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row"
                                            class="px-[13px] py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Clínico
                                        </th>
                                        <td class="px-[13px] py-4">
                                            xxx
                                        </td>
                                        <td class="px-[13px] py-4 text-primary-600 dark:text-primary-500">
                                            xx
                                        </td>
                                        <td class="px-[13px] py-4 text-yellow-400 dark:text-yellow-300">
                                            xx
                                        </td>
                                        <td class="px-[13px] py-4 font-medium text-red-500 dark:text-red-300 hover:underline">
                                            xx
                                        </td>
                                    </tr>
                                    <tr
                                        class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row"
                                            class="px-[13px] py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Veterinário
                                        </th>
                                        <td class="px-[13px] py-4">
                                            xxx
                                        </td>
                                        <td class="px-[13px] py-4 text-primary-600 dark:text-primary-500">
                                            xx
                                        </td>
                                        <td class="px-[13px] py-4 text-yellow-400 dark:text-yellow-300">
                                            xx
                                        </td>
                                        <td class="px-[13px] py-4 font-medium text-red-500 dark:text-red-300 hover:underline">
                                            xx
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <h5 class="mb-4 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Patologias Tratadas</h5>
                    <p class="text-gray-700 border-b border-gray-700 uppercase dark:text-gray-400 text-sm mb-2">
                        Principais
                    </p>
                    <p class="text-gray-700 dark:text-gray-400 text-lg">
                        Mal de Parkinson<br>
                        Mal de Alzheimer<br>
                        Isquemia<br>
                        Transtorno de Ansiedade Generalizada<br>
                        Artrite Reumatóide<br>
                        Câncer<br>
                    </p>
                </div>

                <div class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <h5 class="mb-4 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Consultas</h5>
                    
                    <table class="text-base text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-[10px] py-3">
                                            Tipo
                                        </th>
                                        <th scope="col" class="px-[10px] py-3">
                                            Total
                                        </th>
                                        <th scope="col" class="px-[10px] py-3">
                                            Agendadas
                                        </th>
                                        <th scope="col" class="px-[10px] py-3">
                                            Solicitadas
                                        </th>
                                        <th scope="col" class="px-[10px] py-3">
                                            Crescimento
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row"
                                            class="px-[10px] py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Clínico
                                        </th>
                                        <td class="px-[10px] py-4">
                                            xxx
                                        </td>
                                        <td class="px-[10px] py-4">
                                            xx
                                        </td>
                                        <td class="px-[10px] py-4">
                                            xx
                                        </td>
                                        <td class="px-[10px] py-4 text-primary-600 dark:text-primary-500">
                                            +xx%
                                        </td>
                                    </tr>
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row"
                                            class="px-[10px] py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Veterinário
                                        </th>
                                        <td class="px-[10px] py-4">
                                            xxx
                                        </td>
                                        <td class="px-[10px] py-4">
                                            xx
                                        </td>
                                        <td class="px-[10px] py-4">
                                            xx
                                        </td>
                                        <td class="px-[10px] py-4 text-red-500 dark:text-red-300">
                                            -xx%
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                </div>

                <div class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <h5 class="mb-4 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Finanças</h5>
                    <div class="border-gray-700 lg:grid lg:gap-4 lg:grid-cols-2">
                        <div class="dark:text-gray-400 pl-2">
                            <p class="text-gray-700 border-b border-gray-700 uppercase pb-2 text-primary-700 dark:text-primary-400 text-sm mb-2">
                                Entradas
                            </p>
                            <p>
                                Remédios: R$<br>
                                Doações: R$<br>
                                Patrocínios: R$<br>
                            </p>
                        </div>
                        <div class="dark:text-gray-400 pl-2">
                            <p class="text-gray-700 border-b border-gray-700 uppercase pb-2 text-red-600 dark:text-red-400 text-sm mb-2">
                                Saídas
                            </p>
                            <p>
                                Funcionários: R$<br>
                                Impostos: R$<br>
                                Plantação: R$<br>
                            </p>
                        </div>
                        <div class="lg:col-span-2">
                            <p class="text-gray-700 border-t border-gray-700 uppercase pl-2 pt-2 text-sm mb-2 dark:text-white">
                                Lucro Estimado: R$
                            </p>
                        </div>
                    </div>
                </div>

                <div class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <h5 class="mb-4 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Plantação</h5>
                    <p class="text-gray-700 border-b border-gray-700 uppercase pb-2 dark:text-gray-400 text-sm mb-4">
                        NOV/2023
                    </p>
                    <p class="dark:text-gray-400 text-lg">
                        37 mudas recém plantandas<br>
                        20 mudas prontas pra colheita<br>
                        5 mudas que não vingaram
                    </p>
                </div>
            </div>
        </div>
    </section>
    </x-dashboard.layout>
