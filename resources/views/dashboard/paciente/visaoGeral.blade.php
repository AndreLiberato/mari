<x-dashboard.paciente.layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="pt-8 pb-8 px-4 mx-auto lg:mx-0 lg:p-12">
            <!--Titulo-->
            <h2 class="mb-8 text-3xl lg:text-3xl font-bold text-gray-900 dark:text-white">Visão Geral</h2>

            <!--Grid-->
            <div id="grid" class="grid grid-cols-1 gap-4 lg:gap-10 lg:grid-cols-2 lg:mt-8">
                <div
                    class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Laudo</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Paciente diagnosticado com Alzheimer em março de 2020 após recorrentes episódios de falha de memória.</p>
                    
                </div>
                <div
                    class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Receita</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><strong>Submissão: </strong>dd/mm/yyyy<br><strong>Vencimento: </strong>dd/mm/yyyy</p>
                </div>
                <div
                    class="p-6 lg:col-span-2 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Consultas</h5>
                   

<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
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
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
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
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
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
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
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

                    <a href="#"
                        class="inline-flex items-center px-5 mt-6 py-2 text-sm font-medium text-center text-white bg-primary-600 rounded-lg hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        Solicitar Agendamento
                    </a>
                </div>
            </div>
        </div>
    </section>
    </x-dashboard.layout>
