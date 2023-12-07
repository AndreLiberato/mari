<aside
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidenav" id="drawer-navigation">
    <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800">
        <ul class="space-y-2">
            <li>
                <a href="{{ route('visaoGeralPaciente') }}"
                    class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-200 dark:hover:bg-gray-600 focus:bg-gray-100 dark:focus:bg-gray-700 group">
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
                <a href="{{ route('prescritoresPaciente') }}"
                    class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg transition duration-75 hover:bg-gray-200 dark:hover:bg-gray-600 focus:bg-gray-100 dark:focus:bg-gray-700 dark:text-white group">
                    <svg aria-hidden="true"
                    class="flex-shrink-0 w-[18px] h-[22px] ml-[1px] text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                    fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path
                            d="M224 256a128 128 0 1 0 0-256a128 128 0 1 0 0 256zm-96 55.2C54 332.9 0 401.3 0 482.3C0 498.7 13.3 512 29.7 512h388.6c16.4 0 29.7-13.3 29.7-29.7c0-81-54-149.4-128-171.1V362c27.6 7.1 48 32.2 48 62v40c0 8.8-7.2 16-16 16h-16c-8.8 0-16-7.2-16-16s7.2-16 16-16v-24c0-17.7-14.3-32-32-32s-32 14.3-32 32v24c8.8 0 16 7.2 16 16s-7.2 16-16 16h-16c-8.8 0-16-7.2-16-16v-40c0-29.8 20.4-54.9 48-62v-57.1c-6-.6-12.1-.9-18.3-.9h-91.4c-6.2 0-12.3.3-18.3.9v65.4c23.1 6.9 40 28.3 40 53.7c0 30.9-25.1 56-56 56s-56-25.1-56-56c0-25.4 16.9-46.8 40-53.7v-59.1zM144 448a24 24 0 1 0 0-48a24 24 0 1 0 0 48z">
                        </path>
                    </svg>
                    <span class="ml-[17px]">Prescritores</span>
                </a>
            </li>
            <li>
                <button type="button"
                    class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group dark:text-white hover:bg-gray-200 dark:hover:bg-gray-600"
                    aria-controls="dropdown-documentos" data-collapse-toggle="dropdown-documentos">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                    class="flex-shrink-0 w-[19px] h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                    fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M8 12h8v-2H8v2Zm0-4h8V6H8v2Zm11.95 12.475L15.9 15.2q-.425-.575-1.05-.887T13.5 14H4V4q0-.825.588-1.412T6 2h12q.825 0 1.413.588T20 4v16q0 .125-.012.238t-.038.237ZM6 22q-.825 0-1.412-.587T4 20v-4h9.5q.25 0 .463.113t.362.312l4.2 5.5q-.125.05-.262.063T18 22H6Z">
                        </path>
                    </svg>
                    <span class="flex-1 ml-[17px] text-left whitespace-nowrap">Documentos</span>
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="dropdown-documentos" class="hidden py-2 space-y-2">
                    <li>
                        <a href="{{ route('receitasPaciente') }}"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group dark:text-white hover:bg-gray-200 dark:hover:bg-gray-600 focus:bg-gray-100 dark:focus:bg-gray-700">Receitas</a>
                    </li>
                    <li>
                        <a href="{{ route('laudosPaciente') }}"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group dark:text-white hover:bg-gray-200 dark:hover:bg-gray-600 focus:bg-gray-100 dark:focus:bg-gray-700">Laudos</a>
                    </li>
                </ul>
            </li>
        </ul>
        <hr class="pt-5 mt-5 space-y-2 border-gray-200 dark:border-gray-700">
    </div>
</aside>
