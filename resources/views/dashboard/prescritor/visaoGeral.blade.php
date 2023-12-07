<x-dashboard.prescritor.layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="pt-8 pb-8 px-4 mx-auto lg:mx-0 lg:p-12">
            <!--Titulo-->
            <h2 class="mb-8 text-3xl lg:text-3xl font-bold text-gray-900 dark:text-white">Visão Geral</h2>

            <!--Grid-->
            <div id="grid" class="grid grid-cols-1 gap-4 lg:gap-10 lg:grid-cols-2 lg:mt-8">
                <div
                    class="p-6 lg:col-span-2 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <h5 class="mb-4 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Sobre Você</h5>


                    <div class="relative overflow-x-auto lg:grid lg:grid-cols-2 lg:gap-8 text-gray-700 dark:text-gray-300 font-normal">
                        <div class="p-2 border-t border-gray-700 dark:border-gray-700">
                            <p class="text-xl pb-2 font-semibold">Dr. João Pereira Ramos da Silva</p>
                            <p class="text-base font-normal">Clínico Geral e Neurologista<br>CRM: 012345-6<br>Total Saúde<br>(84) 99999-9999<br>joaosilva@total.com.br</p>
                        </div>
                        <div class="p-2 border-t border-gray-700 dark:border-gray-700">
                            <p class="text-lg pb-2 font-semibold">Sobre mim</p>
                            <p class="text-sm font-normal">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis similique debitis vel cum officiis ea atque veniam recusandae excepturi dolor impedit, ad incidunt ut ullam minima voluptates saepe placeat quis laborum itaque porro architecto possimus. In repellat voluptatum quos praesentium natus? Temporibus culpa laborum perspiciatis est obcaecati necessitatibus, animi quia!</p>
                        </div>
                        <div class="p-2 border-t lg:col-span-2 border-gray-700 dark:border-gray-700">
                            <p class="text-lg pb-2 font-semibold">Atuação na Marijuana</p>
                            <p class="text-sm font-normal">Associado desde 10 de Junho de 2018.</p>
                        </div>
                    </div>
                </div>
                <div class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pacientes</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">
                        67 pacientes atendidos<br>
                        18 pacientes em tratamento<br>
                        2 pacientes com receitas pendentes<br>
                        3 pacientes aguardando aprovação da solicitação
                        
                    </p>

                </div>
                <div class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Consultas</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">
                        152 consultas realizadas<br>
                        7 consultas agendadas<br><br>
                        <strong>Próxima consulta: dd/mm/yyyy - hh:mm</strong>
                    </p>
                </div>
            </div>
        </div>
    </section>
    </x-dashboard.layout>
