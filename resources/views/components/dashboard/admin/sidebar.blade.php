<aside
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidenav" id="drawer-navigation">
    <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800">
        <ul class="space-y-2">
            <li>
                <a href="{{ route('visaoGeralAdmin') }}"
                    class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg aria-hidden="true"
                        class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                    <span class="ml-3">Visão Geral</span>
                </a>
            </li>
            <li>
                <button type="button"
                    class="flex items-center py-2 pr-2 pl-[6px] w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="dropdown-associados" data-collapse-toggle="dropdown-associados">
                    <svg aria-hidden="true"
                    class="flex-shrink-0 w-7 h-7 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                    fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M12 12q-1.65 0-2.825-1.175T8 8q0-1.65 1.175-2.825T12 4q1.65 0 2.825 1.175T16 8q0 1.65-1.175 2.825T12 12Zm-8 8v-2.8q0-.85.438-1.562T5.6 14.55q1.55-.775 3.15-1.162T12 13q1.65 0 3.25.388t3.15 1.162q.725.375 1.163 1.088T20 17.2V20H4Z"/>
                    </svg>
                    <span class="flex-1 ml-[11px] text-left whitespace-nowrap">Associados</span>
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="dropdown-associados" class="hidden py-2 space-y-2">
                    <li>
                        <a href="{{ route('prescritoresAdmin') }}"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Prescritores</a>
                    </li>
                    <li>
                        <a href="{{ route('pacientesAdmin') }}"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Pacientes</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('financasAdmin') }}"
                    class="flex items-center py-2 pr-2 pl-[9px] text-base font-medium text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                    <svg aria-hidden="true"
                    class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                    fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M2 6.75C2 5.784 2.784 5 3.75 5h13.5c.966 0 1.75.784 1.75 1.75v8.5A1.75 1.75 0 0 1 17.25 17H3.75A1.75 1.75 0 0 1 2 15.25v-8.5Zm3-.5v1a.75.75 0 0 1-.75.75h-1v1.5h1A2.25 2.25 0 0 0 6.5 7.25v-1H5Zm5.5 7.25a2.25 2.25 0 1 0 0-4.5a2.25 2.25 0 0 0 0 4.5Zm-7.25.5h1a.75.75 0 0 1 .75.75v1h1.5v-1a2.25 2.25 0 0 0-2.25-2.25h-1V14Zm12.75.75a.75.75 0 0 1 .75-.75h1v-1.5h-1a2.25 2.25 0 0 0-2.25 2.25v1H16v-1Zm0-7.5v-1h-1.5v1a2.25 2.25 0 0 0 2.25 2.25h1V8h-1a.75.75 0 0 1-.75-.75ZM4.401 18.5A2.999 2.999 0 0 0 7 20h10.25A4.75 4.75 0 0 0 22 15.25V10a3 3 0 0 0-1.5-2.599v7.849a3.25 3.25 0 0 1-3.25 3.25H4.401Z"/>
                    </svg>
                    <span class="ml-3">Finanças</span>
                </a>
            </li>
            <li>
                <a href="{{ route('plantacaoAdmin') }}"
                    class="flex items-center py-2 pr-2 pl-[7px] text-base font-medium text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                    <svg aria-hidden="true"
                    class="flex-shrink-0 w-[29px] h-[29px] text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                    fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                        <path fill="currentColor" d="m24 5.022l.43.722C26.377 9.014 27.5 12.871 27.5 17c0 .968-.062 1.922-.181 2.856a18.675 18.675 0 0 1 11.458-7.467l.747-.156l-.156.747a18.675 18.675 0 0 1-7.628 11.572c.416-.035.836-.052 1.26-.052c3.417 0 6.603 1.137 9.294 3.096l.556.404l-.556.404C39.603 30.363 36.417 31.5 33 31.5c-1.47 0-2.899-.21-4.263-.607c.25.333.483.684.696 1.053c1.158 2.006 1.57 4.26 1.332 6.498l-.072.684l-.628-.28c-2.057-.913-3.804-2.396-4.962-4.402a6.582 6.582 0 0 1-.103-.183V41h-2v-6.737a9.987 9.987 0 0 1-.103.183c-1.158 2.006-2.904 3.489-4.962 4.403l-.628.279l-.072-.684c-.237-2.238.174-4.492 1.332-6.498c.213-.369.446-.72.697-1.053A15.253 15.253 0 0 1 15 31.5c-3.417 0-6.603-1.137-9.294-3.096L5.15 28l.556-.404C8.397 25.637 11.583 24.5 15 24.5c.424 0 .844.017 1.26.052A18.676 18.676 0 0 1 8.632 12.98l-.156-.748l.748.156a18.675 18.675 0 0 1 11.458 7.467A22.46 22.46 0 0 1 20.5 17c0-4.129 1.124-7.986 3.07-11.256l.43-.722Z"/>
                    </svg>
                    <span class="ml-[9px]">Plantação</span>
                </a>
            </li>
            <li>
                <button type="button"
                    class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="dropdown-consultas" data-collapse-toggle="dropdown-consultas">
                    <svg aria-hidden="true"
                    class="flex-shrink-0 w-6 h-6 ml-[3px] text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                    fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M5 22q-.825 0-1.412-.587T3 20V6q0-.825.588-1.412T5 4h1V2h2v2h8V2h2v2h1q.825 0 1.413.588T21 6v5.675q-.475-.225-.975-.375T19 11.075V10H5v10h6.3q.175.55.413 1.05t.562.95H5Zm13 1q-2.075 0-3.537-1.463T13 18q0-2.075 1.463-3.537T18 13q2.075 0 3.538 1.463T23 18q0 2.075-1.463 3.538T18 23Zm1.675-2.625l.7-.7L18.5 17.8V15h-1v3.2l2.175 2.175Z"/>
                    </svg>
                    <span class="flex-1 ml-[11px] text-left whitespace-nowrap">Consultas</span>
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="dropdown-consultas" class="hidden py-2 space-y-2">
                    <li>
                        <a href="{{ route('consultasAdmin') }}"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Buscar</a>
                    </li>
                    <li>
                        <a href="{{ route('agendarConsultasAdmin') }}"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Agendar</a>
                    </li>
                    <li>
                        <a href="{{ route('cancelaConsultasAdmin') }}"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Cancelar</a>
                    </li>
                </ul>
            </li>
        </ul>
        <hr class="pt-5 mt-5 space-y-2 border-gray-200 dark:border-gray-700">
    </div>
</aside>
